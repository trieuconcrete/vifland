<title>Thông tin cá nhân</title>
@extends('admin.sidebar')
@section('content')


<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="../../assets/avatar/avatar.png" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Thay avatar
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    {{$profile->full_name}}
                                    </h5>
                                    <h6>
                                        Khách
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Lịch sử bài viết</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        {{-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Quay về trang trước"/> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Thông tin mạng xã hội</p>
                            <a href="">Facebook</a><br/>
                            <a href="">Website</a><br/>
                            {{-- <a href="">Bootply Profile</a> --}}
                            <p>Tình trạng</p>
                            <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">
                                Đang hoạt động
                            </button>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tên đăng nhập</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$profile->username}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Họ tên</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$profile->full_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$profile->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Ngày sinh</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    @if ($profile->birthday=='')
                                                      Không xác định
                                                    @else
                                                        {{$profile->birthday}}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                        Các bài viết được đăng theo id {{$profile->id}} <br>
                                        @foreach ($posts as $posts2)

                                            {{$posts2->datetime}}
                                        @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
@endsection
