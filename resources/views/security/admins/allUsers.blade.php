
@extends('admin.layout.index',[
'title' => _i('All Admin'),
'subtitle' => _i('All Admin'),
'activePageName' => _i('All Admin'),
'additionalPageUrl' => url('/admin/admin/add') ,
'additionalPageName' => _i('Add'),
] )

@section('content')

    <div class="row">
        <div class="col-sm-12 ">
           <span class="pull-left">
               <a href="{{url('admin/admin/add')}}"  class="btn btn-primary create add-permission">
                   <i class="ti-plus"></i>{{_i('create new admin')}}
               </a>
           </span>
        </div>

        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header">
                    <h5>{{_i('All Admins')}}</h5>
                    <div class="card-header-right">
                        <i class="icofont icofont-rounded-down"></i>
                        <i class="icofont icofont-refresh"></i>
                        <i class="icofont icofont-close-circled"></i>
                    </div>
                </div>
                <div class="card-block">

                    <div class="dt-responsive table-responsive text-center">
                        <table id="admin_table" class="table table-bordered table-striped dataTable text-center">

                            <thead>
                            <tr role="row">
                                <th  > {{_i('ID')}}</th>
                                <th  > {{_i('Name')}}</th>
                                <th  > {{_i('Email')}}</th>
                                <th  > {{_i('Created At')}}</th>
                                <th  > {{_i('Edit')}}</th>
                                <th  > {{_i('Delete')}}</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')

    <script  type="text/javascript">

        $(function() {
            $('#admin_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{url('/admin/admin/all')}}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'edit', name: 'edit', orderable: false, searchable: false},
                    {data: 'delete', name: 'delete', orderable: false, searchable: false}

                ]
            });
        });

    </script>

@endpush