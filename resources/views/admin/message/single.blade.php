@extends('admin.app')

@section('title')
    All Messages
@endsection

@section('header')
    <link href="{{url('admin')}}/plugins/bower_components/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">All Messages   <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add New User"><a href="{{url('admin-panel/add-Messages')}}"><i class="fa fa-plus"></i></a></button>
                    </h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{url('admin-panel')}}">Dashboard</a></li>
                        <li class="active">All Messages</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div style="max-width: 80%; padding:20px 0;  margin: 0px auto; font-size: 14px">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tbody>
                        <tr>
                            <td style="background:#8eb3f9; padding:20px; color:#fff; text-align:center;"> Thank you very much for Your Message </td>
                        </tr>
                    </tbody>
                </table>
                <div style="padding: 40px; background: #fff;">
                    @foreach($single_message as $message)
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                            <tbody>
                            <tr>
                                <td>
                                    <p>{{$message->name}}</p>
                                    <p style="margin-top:10px;">{{$message->email}}</p>
                                </td>
                                <td align="right" width="100"> {{$message->created_at->diffForHumans()}} </td>
                            </tr>
                            </tbody>
                        </table>
                            <div><h3 style="font-weight: bold;margin: 20px 0px -10px;">Subject: </h3> <br> <span style="color: #797979;">{{$message->subject}}</span></div>
                            <div><h3 style="font-weight: bold;margin: 20px 0px 5px;">Message: </h3> <br> <span style="color: #797979;">{{$message->message}}</span></div>
                    @endforeach
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

@endsection

@section('footer')

@endsection
