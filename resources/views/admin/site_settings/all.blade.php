@extends('admin.app')

@section('title')
    All Settings
@endsection

@section('header')
    <link href="{{url('admin')}}/plugins/bower_components/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">All Settings</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{url('admin-panel')}}">Dashboard</a></li>
                        <li class="active">All Settings</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="white-box">
                    <div class="table-responsive">
                        <table class="table product-overview table-hover" id="myTable">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Site Image</th>
                                <th>Small Description</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phones</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                                <tbody>
                                    @foreach($all_settings as $setting)
                                        <tr>
                                            <td>{{$setting->id}}</td>
                                            <td>{{$setting->name}}</td>
                                            <td>
                                                <img src="{{url('admin/images/sitesetting/'.$setting->site_image)}}" class="img-responsive" style="width: 30px;height: 30px;"/>
                                            </td>
                                            <td>{{str_limit($setting->description , 200)}}</td>
                                            <td>{{$setting->email}}</td>
                                            <td>{{$setting->address}}</td>
                                            <td>{{$setting->phones}}</td>
                                            <td>
                                                <a href="{{url('admin-panel/settings/edit/'.$setting->name)}}" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt" style="color: #00AEEF;"></i></a>
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

@endsection

@section('footer')
    <script src="{{url('admin')}}/plugins/bower_components/datatables/datatables.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(function() {
            $('#myTable').DataTable();
            $(document).ready(function() {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": true,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function(settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function(group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
            });
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary m-r-10');
    </script>
@endsection
