@extends('admin.sidebar')
  @section('content')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <div class="container">
<h2>Danh sách thông báo</h2>

<!-- table -->
<button class="btn btn-primary btn-create-noti mb-3"> Tạo thông báo</button>
<div class="form-create-noti d-none">
  <form action="{{route('create-noti')}}" method="post">
  @csrf
          
          <div class="form-group">
              <label for="">name</label>
              <input type="text"  class="form-control" name="name"  >
          </div>
          <div class="form-group">
              <label for="">content</label>
              <input type="text" name="content"  class="form-control" >
          </div>
          <div class="form-group">
              <label for="">Trạng thái</label>
              <select  class="form-control" name="status"  id="">
                  <option value="0">Ẩn thông báo</option>
                  <option value="1">Hiện thông báo</option>
              </select>
          </div>
          <div class="form-group">
              <label for="">Ngôn ngữ</label>
              <select  class="form-control" name="lang"  id="">
                  <option value="vn">Việt Nam</option>
                  <option value="en">English</option>
              </select>
          </div>
          <div class="form-group">
             <button type="submit" class="btn btn-primary">Create</button>
          </div>
  </form>

</div>
<div class="table-list-noti">
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br>
<table class="table table-bordered table-striped">
  <thead id="myTable">
    <tr>
     <th>id</th>
     <th>name</th>
     <th>content</th>
     <th>ngôn ngữ</th>
     <th>status</th>
     <th>action</th>

     
    </tr>
  </thead>
  <tbody id="myTable">
    @foreach($notis as $noti)
    <tr>
      <td>{{$noti->id}}</td>
      <td>{{$noti->name}}</td>
      <td>{{$noti->content}}</td>
      <td>{{$noti->language}}</td>
      <td>{{$noti->status==0?'Đang ẩn':'Đang hiện'}}</td>
      <td>
        <a href="{{route('del-noti',$noti->id)}}"> <button class="btn btn-danger">Xóa</button> </a>
        <a href="{{route('edit-noti',$noti->id)}}"> <button class="btn btn-info">Update</button> </a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>

</div>
<script>
   $(document).ready(function() {
     $("#myInput").on("keyup", function() {
       var value = $(this).val().toLowerCase();
       $("#myTable tr").filter(function() {
         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       });
     });

     $(".btn-create-noti").click(function(){
       $(".form-create-noti,.table-list-noti,#btn-create-noti").toggleClass("d-none");
     });
   });
 </script>
@endsection