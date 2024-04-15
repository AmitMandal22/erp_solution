@extends('layouts.app')

@section('content')

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            @include('partials.header')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('partials.c-admin-sidebar')
            <!-- /.sidebar -->


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">

                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <!-- Card header with logo -->
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo"
                                                    style="max-width: 80px; border-radius: 50%;">
                                            </div>
                                            <div class="col-md-8">
                                                <h5><strong>Company Details</strong></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body with details -->
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Left column with field names -->
                                            <div class="col-md-4">
                                                <ul class="list-group">
                                                    <li class="list-group-item">Name:</li>
                                                    <li class="list-group-item">Email:</li>
                                                    <li class="list-group-item">URL:</li>
                                                </ul>
                                            </div>
                                            <!-- Right column with details -->
                                            <div class="col-md-8">
                                                <ul class="list-group">
                                                    <li class="list-group-item">{{ $company->name }}</li>
                                                    <li class="list-group-item">{{ $company->email }}</li>
                                                    <li class="list-group-item">{{ $company->url }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Edit button -->
                                    <div class="card-footer text-center">
                                        <a href="{{ route('edit.company') }}" class="btn btn-primary">Edit Company
                                            Details</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.row -->
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

    </body>
@endsection
