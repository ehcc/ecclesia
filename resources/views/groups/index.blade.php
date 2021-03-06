@extends('layouts.app')

@section('styles')


    <link href="{{url('assets/plugins/datatables/css/jquery.datatables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/plugins/datatables/css/jquery.datatables_themeroller.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{url('assets/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    <div class="page-inner">

        <div class="page-title">
            <h3>Members</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="active">Overview</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">All groups</h4>
                        </div>
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Head</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Head</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($groups as $group)
                                        <tr>
                                            <td>{{$group->name}}</td>
                                            <td>{{$group->description}}</td>
                                            <td>{{$group->hod}}</td>
                                            <td>{{$group->email}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-xs btn-default">View</button>
                                                    <button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{url('members/' . $group->id . '/edit')}}">Edit</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="{{url('members/' . $group->id . '/delete')}}">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->

    </div>

@endsection


@section('scripts')


    <script src="{{url('assets/plugins/jquery-mockjax-master/jquery.mockjax.js')}}"></script>
    <script src="{{url('assets/plugins/moment/moment.js')}}"></script>
    <script src="{{url('assets/plugins/datatables/js/jquery.datatables.min.js')}}"></script>
    <script src="{{url('assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js')}}"></script>
    <script src="{{url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{url('assets/js/modern.min.js')}}"></script>
    <script src="{{url('assets/js/pages/table-data.js')}}"></script>

@endsection
