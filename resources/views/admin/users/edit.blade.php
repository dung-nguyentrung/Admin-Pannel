@extends('admin.layouts.app')

@section('title', 'Cập nhật mới người dùng')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Cập nhật mới người dùng</h4>
                    </div>
                    <a href="{{ route('users.index') }}" class="float-right btn btn-primary">Quay lại</a>
                </div>
                <div class="card-body">
                    <div class="new-user-info">
                        <img src="{{ $user->getFirstMediaUrl('users') }}" width="120" alt="{{ $user->name }}">                        
                        <form method="POST" action="{{ route('users.update', ['user' => $user->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
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
                                    <input type="text" class="form-control" value="{{ $user->name }}" name="name" placeholder="Họ tên">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="address">Địa chỉ:</label>
                                    <input type="text" class="form-control" value="{{ $user->address }}" name="address" placeholder="Địa chỉ">
                                    @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone_number">Số điện thoại:</label>
                                    <input type="text" class="form-control" value="{{ $user->phone_number }}" name="phone_number" placeholder="Số điện thoại">
                                    @error('phone_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" value="{{ $user->email }}" name="email" placeholder="Email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Role">Vai trò:</label>
                                    <select name="roles[]" class="js-select-2 form-control" multiple>
                                        @foreach ($role as $id => $role)
                                            <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($role) && $user->roles->contains($id)) ? 'selected' : '' }}>{{ $role }}</option>
                                        @endforeach
                                    </select>
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