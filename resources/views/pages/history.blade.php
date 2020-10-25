@extends('layouts.master')
@section('title','Lịch sử')
@section('headerStyles')
<!-- Thêm styles cho trang này ở đây-->
 @stop
@section('content')
<main>
	<div class="global-breadcrumb">
		<div class="max-width-container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#"> <i class="ri-arrow-left-line icons-breadcrum"></i>Mua/ Bán <span class="sll-breadcrum">&nbsp; (1.475.822 tin đăng)</span></a></li>
				<li class="breadcrumb-item"><a href="#"> 
						<p>Mở bán dự án đô thị sinh thái thông minh Aqua City, phía Đông thành phố Hồ Chí Minh Bạn tìm gì hôm nay?</p></a></li>
			</ol>
		</div>
	</div>
	<section class="pages-favourites"> 
		<div class="max-width-container"> 
			@if(count($products)==0)
			<div class="article-none"> <img src="./assets/san_pham/no-documents.png" alt="">
				<p>Không có bài đăng nào.</p>
			</div>
			@else
			<div class="table d-none d-xl-block">
				<table>
					<thead> 
						<tr> 
							<th>Tiêu đề</th>
							<th>Đơn giá</th>
							<th>Diện Tích</th>
							<th>Mặt Tiền</th>
							<th>Chiều sâu</th>
							<th>Đối tượng</th>
						</tr>
					</thead>
					@foreach($products as $product)
					<tbody> 
						<tr>
							<td> 
								<div class="box-sp m-0">
									<div class="box-sp-img"><a href=""><img src="{{asset('assets/product/sanpham1.webp')}}" alt=""></a>
										<div class="tag-thuongluong d-none d-xl-block">Thương lượng</div>
										<div class="box-icon"><a href="" class="fav" productid="{{$product->product_id}}"><i class="ri-heart-line icons"></i></a><a href=""><i class="ri-equalizer-line icons"></i></a></div>
									</div>
									<div class="box-sp-text"> <a href="{{route('article-detail',$product->slug)}}">
											<h5 class="title-text lcl lcl-2">{{$product->title}}</h5></a>
										<div class="location"> <span class="material-icons">location_on</span>
											<p class="lcl lcl-1" data-toggle="tooltip" data-placement="bottom" title="Quận cầu giấy, Thành Phố Hà Nội">Quận cầu giấy, Thành Phố Hà Nội</p>
										</div>
										<div class="end-mota"> 
											<div class="mota-end-box">
												<div class="end-box-tt"><span class="material-icons icons-15">event_note</span><span data-toggle="tooltip" data-placement="bottom" title="Ngày đăng bài: {{date('d-m-Y',strtotime($product->datetime_start) )}}">{{date('d-m-Y',strtotime($product->datetime_start) )}}</span></div>
												<div class="end-box-tt"><span class="material-icons icons-15">visibility</span><span data-toggle="tooltip" data-placement="bottom" title="Lượt xem: {{$product->view}}">{{$product->view}}</span></div>
												<div class="end-box-tt"><span class="material-icons icons-15 chat">chat</span><span class="chat">chat ngay</span></div>
											</div>
										</div>
									</div>
								</div>
							</td>
							<td> 
								<p data-toggle="tooltip" data-placement="bottom" title="Tổng gia: {{$product->price}} {{$product->unit}}">{{$product->price}} {{$product->unit}}</p>
							</td>
							<td> 
								<p data-toggle="tooltip" data-placement="bottom" title="Diện tích: {{intval($product->depth)*intval($product->facades)}} m²">{{intval($product->depth)*intval($product->facades)}} m² </p>
							</td>
							<td> 
								<p data-toggle="tooltip" data-placement="bottom" title="Mặt tiền: {{$product->facades}} m">{{$product->facades}} m </p>
							</td>
							<td> 
								<p data-toggle="tooltip" data-placement="bottom" title="Chiều sâu: {{$product->depth}}">{{$product->depth}} </p>
							</td>
							<td> 
								<p data-toggle="tooltip" data-placement="bottom" title="Đối tượng: Nhà đầu tư">NĐT</p>
							</td>
						</tr>
					</tbody>
					@endforeach
				</table>
			</div>
			@endif
			<!-- <div class="box-favourites d-block d-xl-none">
				<div class="row">
					<div class="col-md-6">
						<div class="box-sp m-0">
							<div class="box-sp-img"><a href=""><img src="./assets/product/sanpham1.webp" alt=""></a>
								<div class="tag-thuongluong d-none d-xl-block">Thương lượng</div>
								<div class="box-icon"><a href=""><i class="ri-heart-line icons"></i></a><a href=""><i class="ri-equalizer-line icons"></i></a></div>
							</div>
							<div class="box-sp-text"> <a href="">
									<h5 class="title-text lcl lcl-2">Mở bán shophouse, nhà phố, biệt thự view sông dự án Aqua City phân khu River Park 1 khu River Park 1</h5></a>
								<div class="location"> <span class="material-icons">location_on</span>
									<p class="lcl lcl-1" data-toggle="tooltip" data-placement="bottom" title="Quận cầu giấy, Thành Phố Hà Nội">Quận cầu giấy, Thành Phố Hà Nội</p>
								</div>
								<div class="end-mota"> 
									<div class="mota-end-box">
										<div class="end-box-tt"><span class="material-icons icons-15">event_note</span><span data-toggle="tooltip" data-placement="bottom" title="Ngày đăng bài: 22.09.2020">22/09/2020</span></div>
										<div class="end-box-tt"><span class="material-icons icons-15">visibility</span><span data-toggle="tooltip" data-placement="bottom" title="Lượt xem: 320">320</span></div>
										<div class="end-box-tt"><span class="material-icons icons-15 chat">chat</span><span class="chat">chat ngay</span></div>
									</div>
								</div>
								<div class="info"> 
									<div class="content"> 
										<p class="title">Tổng Giá	</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Tổng gia: 5,5 Tỷ">5,5 Tỷ </p>
									</div>
									<div class="content"> 
										<p class="title">Diện Tích</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Diện tích: 147,6m²">147,6 m² </p>
									</div>
									<div class="content"> 
										<p class="title">Đường Rộng</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Đường rộng: Ngõ 4 ô tô tránh ">Ngõ 4 ô tô tránh </p>
									</div>
									<div class="content"> 
										<p class="title">Mặt Tiền</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Mặt tiền: 11,2m">11,2 m </p>
									</div>
									<div class="content"> 
										<p class="title">Hướng</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Hướng: Tây Nam">Tây Nam </p>
									</div>
									<div class="content"> 
										<p class="title">Đối tượng</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Đối tượng: Nhà đầu tư">Tây Nam </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box-sp m-0">
							<div class="box-sp-img"><a href=""><img src="./assets/product/sanpham1.webp" alt=""></a>
								<div class="tag-thuongluong d-none d-xl-block">Thương lượng</div>
								<div class="box-icon"><a href=""><i class="ri-heart-line icons"></i></a><a href=""><i class="ri-equalizer-line icons"></i></a></div>
							</div>
							<div class="box-sp-text"> <a href="">
									<h5 class="title-text lcl lcl-2">Mở bán shophouse, nhà phố, biệt thự view sông dự án Aqua City phân khu River Park 1 khu River Park 1</h5></a>
								<div class="location"> <span class="material-icons">location_on</span>
									<p class="lcl lcl-1" data-toggle="tooltip" data-placement="bottom" title="Quận cầu giấy, Thành Phố Hà Nội">Quận cầu giấy, Thành Phố Hà Nội</p>
								</div>
								<div class="end-mota"> 
									<div class="mota-end-box">
										<div class="end-box-tt"><span class="material-icons icons-15">event_note</span><span data-toggle="tooltip" data-placement="bottom" title="Ngày đăng bài: 22.09.2020">22/09/2020</span></div>
										<div class="end-box-tt"><span class="material-icons icons-15">visibility</span><span data-toggle="tooltip" data-placement="bottom" title="Lượt xem: 320">320</span></div>
										<div class="end-box-tt"><span class="material-icons icons-15 chat">chat</span><span class="chat">chat ngay</span></div>
									</div>
								</div>
								<div class="info"> 
									<div class="content"> 
										<p class="title">Tổng Giá	</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Tổng gia: 5,5 Tỷ">5,5 Tỷ </p>
									</div>
									<div class="content"> 
										<p class="title">Diện Tích</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Diện tích: 147,6m²">147,6 m² </p>
									</div>
									<div class="content"> 
										<p class="title">Đường Rộng</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Đường rộng: Ngõ 4 ô tô tránh ">Ngõ 4 ô tô tránh </p>
									</div>
									<div class="content"> 
										<p class="title">Mặt Tiền</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Mặt tiền: 11,2m">11,2 m </p>
									</div>
									<div class="content"> 
										<p class="title">Hướng</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Hướng: Tây Nam">Tây Nam </p>
									</div>
									<div class="content"> 
										<p class="title">Đối tượng</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Đối tượng: Nhà đầu tư">Tây Nam </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box-sp m-0">
							<div class="box-sp-img"><a href=""><img src="./assets/product/sanpham1.webp" alt=""></a>
								<div class="tag-thuongluong d-none d-xl-block">Thương lượng</div>
								<div class="box-icon"><a href=""><i class="ri-heart-line icons"></i></a><a href=""><i class="ri-equalizer-line icons"></i></a></div>
							</div>
							<div class="box-sp-text"> <a href="">
									<h5 class="title-text lcl lcl-2">Mở bán shophouse, nhà phố, biệt thự view sông dự án Aqua City phân khu River Park 1 khu River Park 1</h5></a>
								<div class="location"> <span class="material-icons">location_on</span>
									<p class="lcl lcl-1" data-toggle="tooltip" data-placement="bottom" title="Quận cầu giấy, Thành Phố Hà Nội">Quận cầu giấy, Thành Phố Hà Nội</p>
								</div>
								<div class="end-mota"> 
									<div class="mota-end-box">
										<div class="end-box-tt"><span class="material-icons icons-15">event_note</span><span data-toggle="tooltip" data-placement="bottom" title="Ngày đăng bài: 22.09.2020">22/09/2020</span></div>
										<div class="end-box-tt"><span class="material-icons icons-15">visibility</span><span data-toggle="tooltip" data-placement="bottom" title="Lượt xem: 320">320</span></div>
										<div class="end-box-tt"><span class="material-icons icons-15 chat">chat</span><span class="chat">chat ngay</span></div>
									</div>
								</div>
								<div class="info"> 
									<div class="content"> 
										<p class="title">Tổng Giá	</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Tổng gia: 5,5 Tỷ">5,5 Tỷ </p>
									</div>
									<div class="content"> 
										<p class="title">Diện Tích</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Diện tích: 147,6m²">147,6 m² </p>
									</div>
									<div class="content"> 
										<p class="title">Đường Rộng</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Đường rộng: Ngõ 4 ô tô tránh ">Ngõ 4 ô tô tránh </p>
									</div>
									<div class="content"> 
										<p class="title">Mặt Tiền</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Mặt tiền: 11,2m">11,2 m </p>
									</div>
									<div class="content"> 
										<p class="title">Hướng</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Hướng: Tây Nam">Tây Nam </p>
									</div>
									<div class="content"> 
										<p class="title">Đối tượng</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Đối tượng: Nhà đầu tư">Tây Nam </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box-sp m-0">
							<div class="box-sp-img"><a href=""><img src="./assets/product/sanpham1.webp" alt=""></a>
								<div class="tag-thuongluong d-none d-xl-block">Thương lượng</div>
								<div class="box-icon"><a href=""><i class="ri-heart-line icons"></i></a><a href=""><i class="ri-equalizer-line icons"></i></a></div>
							</div>
							<div class="box-sp-text"> <a href="">
									<h5 class="title-text lcl lcl-2">Mở bán shophouse, nhà phố, biệt thự view sông dự án Aqua City phân khu River Park 1 khu River Park 1</h5></a>
								<div class="location"> <span class="material-icons">location_on</span>
									<p class="lcl lcl-1" data-toggle="tooltip" data-placement="bottom" title="Quận cầu giấy, Thành Phố Hà Nội">Quận cầu giấy, Thành Phố Hà Nội</p>
								</div>
								<div class="end-mota"> 
									<div class="mota-end-box">
										<div class="end-box-tt"><span class="material-icons icons-15">event_note</span><span data-toggle="tooltip" data-placement="bottom" title="Ngày đăng bài: 22.09.2020">22/09/2020</span></div>
										<div class="end-box-tt"><span class="material-icons icons-15">visibility</span><span data-toggle="tooltip" data-placement="bottom" title="Lượt xem: 320">320</span></div>
										<div class="end-box-tt"><span class="material-icons icons-15 chat">chat</span><span class="chat">chat ngay</span></div>
									</div>
								</div>
								<div class="info"> 
									<div class="content"> 
										<p class="title">Tổng Giá	</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Tổng gia: 5,5 Tỷ">5,5 Tỷ </p>
									</div>
									<div class="content"> 
										<p class="title">Diện Tích</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Diện tích: 147,6m²">147,6 m² </p>
									</div>
									<div class="content"> 
										<p class="title">Đường Rộng</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Đường rộng: Ngõ 4 ô tô tránh ">Ngõ 4 ô tô tránh </p>
									</div>
									<div class="content"> 
										<p class="title">Mặt Tiền</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Mặt tiền: 11,2m">11,2 m </p>
									</div>
									<div class="content"> 
										<p class="title">Hướng</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Hướng: Tây Nam">Tây Nam </p>
									</div>
									<div class="content"> 
										<p class="title">Đối tượng</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Đối tượng: Nhà đầu tư">Tây Nam </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box-sp m-0">
							<div class="box-sp-img"><a href=""><img src="./assets/product/sanpham1.webp" alt=""></a>
								<div class="tag-thuongluong d-none d-xl-block">Thương lượng</div>
								<div class="box-icon"><a href=""><i class="ri-heart-line icons"></i></a><a href=""><i class="ri-equalizer-line icons"></i></a></div>
							</div>
							<div class="box-sp-text"> <a href="">
									<h5 class="title-text lcl lcl-2">Mở bán shophouse, nhà phố, biệt thự view sông dự án Aqua City phân khu River Park 1 khu River Park 1</h5></a>
								<div class="location"> <span class="material-icons">location_on</span>
									<p class="lcl lcl-1" data-toggle="tooltip" data-placement="bottom" title="Quận cầu giấy, Thành Phố Hà Nội">Quận cầu giấy, Thành Phố Hà Nội</p>
								</div>
								<div class="end-mota"> 
									<div class="mota-end-box">
										<div class="end-box-tt"><span class="material-icons icons-15">event_note</span><span data-toggle="tooltip" data-placement="bottom" title="Ngày đăng bài: 22.09.2020">22/09/2020</span></div>
										<div class="end-box-tt"><span class="material-icons icons-15">visibility</span><span data-toggle="tooltip" data-placement="bottom" title="Lượt xem: 320">320</span></div>
										<div class="end-box-tt"><span class="material-icons icons-15 chat">chat</span><span class="chat">chat ngay</span></div>
									</div>
								</div>
								<div class="info"> 
									<div class="content"> 
										<p class="title">Tổng Giá	</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Tổng gia: 5,5 Tỷ">5,5 Tỷ </p>
									</div>
									<div class="content"> 
										<p class="title">Diện Tích</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Diện tích: 147,6m²">147,6 m² </p>
									</div>
									<div class="content"> 
										<p class="title">Đường Rộng</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Đường rộng: Ngõ 4 ô tô tránh ">Ngõ 4 ô tô tránh </p>
									</div>
									<div class="content"> 
										<p class="title">Mặt Tiền</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Mặt tiền: 11,2m">11,2 m </p>
									</div>
									<div class="content"> 
										<p class="title">Hướng</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Hướng: Tây Nam">Tây Nam </p>
									</div>
									<div class="content"> 
										<p class="title">Đối tượng</p>
										<div class="dashed-line"></div>
										<p data-toggle="tooltip" data-placement="bottom" title="Đối tượng: Nhà đầu tư">Tây Nam </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</section>
	<div id="js-page-verify" hidden></div>
</main>
@endsection
@section('footerScripts')
<!-- Thêm script cho trang này ở đây -->
@endsection