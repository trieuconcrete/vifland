<?php

namespace App\Http\Controllers;
// use Brian2694\Toastr\Toastr;
// use Illuminate\Http\Request;
use Toastr;
use Illuminate\Support\Carbon;
use DB;
use Symfony\Component\Console\Input\Input;
use App\Models\Province;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Exports\NewsLettersExport;
use App\Imports\NewsLettersImport;
use App\Mail\NewsLetter as MailNewsLetter;
use Newsletter;
use Str;
use hamidreza2005\laravelIp\Facades\Ip;
use Mail;
use App\Models\Product;
use App\Newsletters2;
use App\Models\News;
use App\User;
// use App\Models\Newsletters2;
// use Mailchimp;
class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $province = new Province();
        $id_city = $request->input("ID_City");
        $newsletter = Newsletters2::all();
        $products = DB::table('province')->where('id',$id_city)->pluck('id');
        return view('admin.thutintuc.quanlythutintuc',compact('newsletter','products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function subscribe(Request $request){
        // get thông tin thành phố thông qua IP
        $ip = '171.255.119.75';
        // hàm data ở đây là dùng để get thông tin nơi đăng nhập của người dùng
        $data = \Location::get($ip)->regionName;
        //hàm strpos để kiểm tra xem dữ liệu nhập vào có khoảng trắng hay không
        if(strpos($data, " ") == false)
        {
                // không có khoẳng trắng
                $value = Province::whereRaw("REPLACE(`name`, ' ' ,'') LIKE ?", ['%'.str_replace(' ', '', $data).'%'])->value("name");
            }
        else{
            // có khoảng trắng
            $value = Province::WhereRaw("MATCH(name) AGAINST('.$data.')")->value('name');
        }
            // get id của province ( mượn bảng Province )
            $id = Province::where('name',$value)->value('id');
            $newsletters = new Newsletters2();
        if ( ! Newsletter::isSubscribed($request->email) ) {
            Newsletter::subscribe(filter_var($request->email, FILTER_VALIDATE_EMAIL));
            $newsletters->email = $request->email;
            $newsletters->ID_City = $id;
            //  so sánh nếu trùng định danh IP( không khoảng trắng) , lấy tên đầy đủ của định danh ( có dấu);
            // dd($Location_IP);
            $newsletters->IP_Location = $value;
            $newsletters->save();
            Toastr::success('Đăng kí thành công ','Thông báo');

        }
        else{
            Newsletter::getLastError();
            Toastr::success('Đăng kí thất bại','Thông báo');
        }
        return redirect()->back();
    }
    public function export(){
        return Excel::download(new NewsLettersExport, 'NewsLetters.xlsx');

    }

    public function import(Request $request){



	if ($request->file('import_file')) {
        $import = \Excel::import(new NewsLettersImport, request()->file('import_file'));
        Toastr::success('Cập nhật file excel thành công!  :)','Thông báo');
        // dd('Có file');
        return redirect()->back()->with('success', 'Success!!!');

    }
    else{
        Toastr::error('Không thành công! Vui lòng làm lại !  :)','Thông báo');

        return redirect()->back()->with('success', 'Success!!!');
    }
}
    // mail_manager
    public function guithu(Request $request){

    // show các tin tức bất động sản theo vùng miền
        $products = Product::whereIn('title',$request->input("productFilter"))->get();
        $date =Carbon::now()->format('d-m-yy');

    // dd($query);
        $contents = $request->input("contents");
        $mails = $request->input("email");

        // $product = Product::where('id_province',$id_city)->get();
        $news = News::all();
        // $products = Product::where('id_province',$id)->get();
        $user = User::where('email',$mails)->first();
        // làm query để hiện thị thông tin người đăng kí
        $query = DB::table('user')->where('email',$mails)->first();
        if(!$query){
            // nếu user không có mặt trong database thì sẽ tên họ sẽ để rỗng"
            $nguoinhan = "";
        }
       else{
        $nguoinhan = $user->full_name;
       }
            Mail::send('email.newsletter-one', ['products'=>$products,
            'contents' => $contents,
            'date'=>$date,
            'news'=>$news,
            'nguoinhan' =>$nguoinhan],function ($message) use($request,$mails) {
            // $subject = $request->input("subject");
            $message->from("vifland.fpt@gmail.com");
            $message->to($mails);
            $date =Carbon::now()->format('d-m-yy');
            $message->subject("Tin bất động sản ngày ". $date);

        });
        toastr::success('Gửi thư thành công','Hệ thống');
        return redirect()->back();
    }

    public function send_email(Request $request){

        $mails = Newsletters2::pluck('email')->toArray();
        $nguoinhan = User::pluck('full_name');
        $result = implode(",",$nguoinhan->all());
        $contents = $request->input("contents");

        $news = News::all();
        Mail::send('email.newsletter',
        ['contents' => $contents,

        'news'=>$news,
        'result'=>$result
        ],function ($message) use($request,$mails) {
            $subject = $request->input("subject");
            $message->from("vifland.fpt@gmail.com");
            $message->to($mails)->subject($subject);

        });
        toastr::success('Gủi thư thành công','Hệ thống');
        return redirect()->back();
    }

}

