@extends('admin.layouts.app')

@section('title', 'Quyền truy cập')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">Danh sách quyền truy cập</h4>
                </div>
                <div>
                    @can('permission_delete')                        
                    <a href="#" id="deleteAll" class="btn btn-danger add-list"><i class="las la-trash"></i>Xóa lựa chọn</a>
                    @endcan
                    @can('permission_create')
                    <a href="{{ route('permissions.create') }}" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Thêm quyền truy cập</a>                        
                    @endcan
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="table-responsive rounded mb-3">
            <table class="data-table table mb-0 tbl-server-info">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>
                            <div class="checkbox d-inline-block">
                                <input type="checkbox" class="checkbox-input" id="selectAll">
                                <label for="selectAll" class="mb-0"></label>
                            </div>
                        </th>
                        <th>STT</th>
                        <th>Tên quyền truy cập</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody class="ligth-body">
                    @foreach ($permission as $item)
                    <tr>
                        <td>
                            <div class="checkbox d-inline-block">
                                <input type="checkbox" value="{{ $item->id }}" class="checkbox-input" name="ids">
                                <label for="ids" class="mb-0"></label>
                            </div>
                        </td>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <div class="d-flex align-items-center list-action">
                                @can('permission_show')
                                <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="Xem chi tiết" data-original-title="View"
                                    href="{{ route('permissions.show',['permission' => $item->id]) }}"><i class="fa fa-eye mr-0"></i></a>                                    
                                @endcan
                                @can('permission_edit')
                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="Cập nhật" data-original-title="Edit"
                                    href="{{ route('permissions.edit',['permission' => $item->id]) }}"><i class="fa fa-pen mr-0"></i></a>                                    
                                @endcan
                                @can('permission_delete')
                                <form action="{{ route('permissions.destroy',['permission' => $item->id]) }}" method="POST" id="cateForm{{ $item->id }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash-alt mr-0"></i></button>
                                </form>                                    
                                @endcan
                            </div>
                        </td>
                    </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    @can('permission_delete')
        <script>
            $(document).ready(function () {
    
                $("#selectAll").click(function(){
                    $("input[type=checkbox]").prop('checked', $(this).prop('checked'));
                });

                $("#deleteAll").on("click", function () {
                    var ids = [];
                    $.each($("input[name='ids']:checked"), function() {
                        ids.push($(this).val());
                    });

                    $.ajax({
                        type: "DELETE",
                        url: 'permissions/massDestroy',
                        data: {
                            ids: ids,
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        dataType: "json",
                        success: function (response) {
                            location.reload(); 
                        }
                    });
                });
                
            });
        </script>
    @endcan
@endpush