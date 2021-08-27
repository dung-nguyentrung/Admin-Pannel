@extends('admin.layouts.app')

@section('title', 'Thêm mới người dùng')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Thêm mới người dùng</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="crm-profile-img-edit position-relative">
                                <img class="crm-profile-pic rounded avatar-100" src="user-profile_files/11.png"
                                    alt="profile-pic">
                                <div class="crm-p-image bg-primary">
                                    <label for="profile_photo" style="cursor: pointer;"><i class="las la-pen upload-button"></i></label>
                                    <input class="file-upload" name="profile_photo" type="file" accept="image/*">
                                </div>
                                @error('profile_photo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>                            
                        </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Thông tin cá nhân</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="new-user-info">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Họ tên:</label>
                                    <input type="text" class="form-control" name="name" placeholder="Họ tên">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="address">Địa chỉ:</label>
                                    <input type="text" class="form-control" name="address" placeholder="Địa chỉ">
                                    @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone_number">Số điện thoại:</label>
                                    <input type="text" class="form-control" name="phone_number" placeholder="Số điện thoại">
                                    @error('phone_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="pass">Mật khẩu:</label>
                                    <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="rpass">Xác nhận Mật khẩu:</label>
                                    <input type="password" class="form-control" id="repeatpassword"
                                        placeholder="Xác nhận Mật khẩu ">
                                    @error('repeatpassword')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Lưu lại</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection