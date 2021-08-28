@extends('admin.layouts.app')

@section('title', 'Thêm mới người dùng')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Thêm mới người dùng</h4>
                    </div>
                    <a href="{{ route('users.index') }}" class="float-right btn btn-primary">Quay lại</a>
                </div>
                <div class="card-body">
                    <div class="new-user-info">
                        <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Hình ảnh:</label>
                                    <input type="file" class="form-control" name="profile_photo">
                                    @error('profile_photo')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
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
                                <div class="form-group col-md-6">
                                    <label for="Role">Vai trò:</label>
                                    <select name="roles[]" class="js-select-2 form-control" multiple>
                                        @foreach ($role as $role)
                                            <option value="{{ $role->id }}">{{ $role->title }}</option>
                                        @endforeach
                                    </select>
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
@push('scripts')
    <script>
        $(document).ready(function () {
            $('.js-select-2').select2();
        });
    </script>
@endpush