<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

<form action="/sub" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<footer>
	<div class="footer-block">
		<div class="max-width-container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="footer-box">
						<div class="img"><img src="{{asset('assets/logo/logo-footer-300.png')}}" alt=""></div>
						<ul class="list-items">
							<li class="list-item"><span class="material-icons">location_on</span>
								<p>152/1A Nguyễn Văn Thương, Phường 25, Quận Bình Thạnh, Tphcm</p>
							</li>
							<li class="list-item"><span class="material-icons">call</span>
								<p>Hotline: 0869 092 929</p>
							</li>
							<li class="list-item"><span class="material-icons">email</span>
								<p>tuvan@vifland.com</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="footer-box list">
						<h4 class="title-footer">Liên kết nhanh</h4>
						<ul class="list-items">
							<li class="list-item"> <a href="">Giới thiệu</a></li>
							<li class="list-item"> <a href="">Dự án </a></li>
							<li class="list-item"> <a href="">Thư viện </a></li>
							<li class="list-item"> <a href="">Tuyển dụng </a></li>
							<li class="list-item"> <a href="/contact">Liên hệ</a></li>
							<li class="list-item"> <a href="">Nơi khởi nguồn hạnh phúc</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="footer-box list">
						<h4 class="title-footer">Tin bất động sản</h4>
						<ul class="list-items">
							<li class="list-item"> <a href="">Tin doanh nghiệp </a></li>
							<li class="list-item"> <a href="">Tin dự án </a></li>
							<li class="list-item"> <a href="">Tin thị trường</a></li>
							<li class="list-item"> <a href="">Tin sự kiện</a></li>
							<li class="list-item"> <a href="">Tin cộng đồng</a></li>
						</ul>
					</div>
                </div>

				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="footer-box list">
						<h4 class="title-footer">Đăng ký nhận bản tin</h4>
						<p class="small-text">Vui lòng để lại địa chỉ email để nhận thông tin mới nhất về Bất Động Sản</p>
						<input class="input-footer" type="text" placeholder="Nhập địa chỉ email..." name="email">
					</div>
                </div>
            {{-- </form> --}}
			</div>
		</div>
	</div>
</footer>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {!! Toastr::message() !!}
