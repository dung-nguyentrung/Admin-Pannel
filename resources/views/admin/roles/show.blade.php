@extends('admin.layouts.app')

@section('title', $role->title)

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">{{ $role->title }}</h4>
                </div>
                <div>
                    @can('role_access')
                    <a href="{{ route('roles.index') }}" class="btn btn-primary add-list"></i>Quay lại</a>                        
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
                        <th>{{ $role->id }}</th>
                    </tr>
                    <tr>
                        <th>Tên vai trò</th>
                        <th>{{ $role->title }}</th>
                    </tr>
                    <tr>
                        <th>Tên quyền truy cập</th>
                        <th>
                            @foreach ($role->permissions as $item)
                                <span class="bg-primary">{{ $item->title }}</span>
                            @endforeach
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection