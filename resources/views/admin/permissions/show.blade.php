@extends('admin.layouts.app')

@section('title', $permission->title)

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">{{ $permission->title }}</h4>
                </div>
                <div>
                    @can('permission_access')
                    <a href="{{ route('permissions.index') }}" class="btn btn-primary add-list"></i>Quay lại</a>                        
                    @endcan
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="table-responsive rounded mb-3">
            <table class="table mb-0 tbl-server-info">
                <tbody class="ligth-body">
                    <tr>
                        <th>Mã</th>
                        <th>{{ $permission->id }}</th>
                    </tr>
                    <tr>
                        <th>Tên quyền truy cập</th>
                        <th>{{ $permission->title }}</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection