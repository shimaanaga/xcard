@extends('admin.layout.index',[
'title' => _i('Order Reports'),
'activePageName' => _i('Order Reports'),
] )

@push('css')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

@endpush

@section('content')
<div class="row">

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5> {{ _i('Order Reports') }} </h5>
                <div class="card-header-right">
                    <i class="icofont icofont-rounded-down"></i>
                    <i class="icofont icofont-refresh"></i>
                    <i class="icofont icofont-close-circled"></i>
                </div>
            </div>
            <div class="card-block">

                <div class="row">
                    <div class="col-lg-5">

                        <div class="form-group">
                            <label class="col-sm-4 col-form-label" for="start_date">{{ _i('Start Date') }}</label>
                            <div class="col-sm-10">
                                <div class="input-group date">
                                    <input type="text" name="start_date" id="start_date" placeholder="{{ _i('Start Date') }}" class="form-control datepicker">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5">

                        <div class="form-group">
                            <label class="col-sm-4 col-form-label" for="end_date">{{ _i('End Date') }}</label>
                            <div class="col-sm-10">
                                <div class="input-group date">
                                    <input type="text" name="end_date" id="end_date" placeholder="{{ _i('End Date') }}" class="form-control datepicker">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2" >
                        <button type="text" id="btnFiterSubmitSearch" class="btn btn-info" style="margin-top: 35px">{{ _i('Search') }}</button>
                    </div>

            </div>

            <hr>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped" id="list-table">
                    <thead>
                    <tr>
                        <th>{{_i('Order Number')}}</th>
                        <th>{{_i('No. Orders')}}</th>
                        <th>{{_i('No. Products')}}</th>
                        <th>{{_i('Status')}}</th>
                        <th>{{_i('Total')}}</th>
                        <th>{{_i('Date')}}</th>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>

        $('.datepicker').datepicker();

        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#btnFiterSubmitSearch').click(function(){
                $('#list-table').DataTable().draw(true);
            });

            oTable = $('#list-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! aUrl('orderReport/dt') !!}',
                    type: 'GET',
                    data: function (d) {
                        d.start_date = $('#start_date').val();
                        d.end_date = $('#end_date').val();
                    }
                },
                columns: [
                    { data: 'orderNumber', name: 'orderNumber', orderable: true, searchable: true },
                    { data: 'orderCount', name: 'orderCount', orderable: true, searchable: true },
                    { data: 'productCount', name: 'productCount', orderable: true, searchable: true },
                    { data: 'status', name: 'status', orderable: true, searchable: true },
                    { data: 'total', name: 'total', searchable: false },
                    { data: 'created_at', name: 'created_at', orderable: true, searchable: true },
                ]
            });
        });
    </script>

@endpush
