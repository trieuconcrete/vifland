@extends('./layouts.master')
@section('title','So sánh bất động sản')
@section('headerStyles')
<!-- Thêm styles cho trang này ở đây-->
 @stop
@section('content')
<main>
	<div class="global-breadcrumb">
	    <div class="max-width-container">
	        <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="#"> <i class="ri-arrow-left-line icons-breadcrum"></i>Mua/ Bán
	                    <span class="sll-breadcrum">&nbsp; (1.475.822 tin đăng)</span></a></li>
	            <li class="breadcrumb-item"><a href="#">
	                    <p>Mở bán dự án đô thị sinh thái thông minh Aqua City, phía Đông thành phố Hồ Chí Minh Bạn tìm
	                        gì hôm nay?</p>
	                </a></li>
	        </ol>
	    </div>
	</div>
	<section class="pages-lienhe" style="height:30rem;">
		<section class="lienhe-l-1"> 
			<div class="container">
				<div class="max-width-container">
					<div class="mt-4" style="vertical-align:center;text-align: center">
						<h1 style="color:#6f84a4;font-weight:700;font-size:100px;line-height:28px;margin:0 0 16px;display:block;text-align:center">404</h1><br>
						<h1 style="color:#d22200;font-weight:700;font-size:36px;line-height:28px;margin:0 0 16px;display:block;text-align:center">ERROR</h1>
						<div style="color:#6f84a4;font-size:18px;line-height:24px;margin-bottom:38px;font-weight:500;display:block;width:100%;text-align:center">Địa chỉ URL bạn yêu cầu không được tìm thấy!</div>
						<a href="{{route('home')}}" style="font-weight: 700;font-size: 24px;line-height: 40px;color: #fff;padding: 6px 16px;width: 284px;height: 56px;border-radius: 14px;background-color: #1a4bb7;">Quay về</a>
					</div>
				</div>
			</div>
		</section>		
	</section>
</main>
@endsection
@section('footerScripts')
@endsection