@extends('admin.layouts.app')

@section('title', 'Thêm vai trò')
@push('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')
<style>
    .select2-selection--multiple{
        overflow: hidden;
        height: auto !important;
        }
</style>
<div class="container-fluid add-form-list">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Thêm vai trò</h4>
                    </div>
                    <a href="{{ route('roles.index') }}" class="btn btn-primary float-right">Quay lại</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('roles.store') }}" method="POST" data-toggle="validator">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Tên vai trò</label>
                                    <input type="text" name="title" class="form-control" placeholder="Nhập tên vai trò">
                                    <div class="help-block with-errors"></div>
                                </div>
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="permissions">Quyền truy cập</label>
                                    <a href="#" id="selectAll" class="btn btn-success ml-3">Chọn tất cả</a>
                                    <a href="#" id="deselectAll" class="btn btn-danger ml-3">Bỏ chọn tất cả</a>
                                    <select name="permissions[]" class="form-control permission-list" multiple>
                                        @foreach ($permissions as $id =>  $permissions)
                                            <option value="{{ $id }}">{{ $permissions }}</option>    
                                        @endforeach
                                    </select>
                                </div>
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
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('.permission-list').select2();

        $('#selectAll').click(function (e) { 
            e.preventDefault();
            $('select.permission-list option').prop('selected', true).parent().trigger('change')
        });

        $('#deselectAll').click(function (e) { 
            e.preventDefault();
            $('select.permission-list option').prop('selected', false).parent().trigger('change')

        });
    });
</script>
@endpush
