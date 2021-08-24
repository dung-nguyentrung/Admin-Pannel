@extends('admin.layouts.app')

@section('title', 'Thêm quyền truy cập')

@section('content')
<div class="container-fluid add-form-list">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Thêm quyền truy cập</h4>
                    </div>
                    <a href="{{ route('permissions.index') }}" class="btn btn-primary float-right">Quay lại</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('permissions.store') }}" method="POST" data-toggle="validator">
                        @csrf
                        <div class="row">         
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tên quyền truy cập</label>
                                        <input type="text" name="title" class="form-control" placeholder="Nhập tên quyền truy cập">
                                        <div class="help-block with-errors"></div>
                                    </div>           
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror                     
                            </div>                                 
                        </div>                            
                        <button type="submit" class="btn btn-primary mr-2">Lưu lại</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Page end  -->
</div>
@endsection