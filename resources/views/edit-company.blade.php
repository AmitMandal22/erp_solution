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
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-header">{{ __('Edit Company') }}</div>

                                    <div class="card-body">
                                        <form method="POST" id="edit_company_form" enctype="multipart/form-data"
                                            method="POST">
                                            @csrf

                                            <!-- Name and Email Address -->
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label for="name" class="form-label">{{ __('Name') }}</label>
                                                    <input id="name" class="form-control" type="text" name="name"
                                                        value="{{ $company->name }}" required autofocus>
                                                    <span class="text-danger error name_err"></span>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="email"
                                                        class="form-label">{{ __('Email Address') }}</label>
                                                    <input id="email" class="form-control" type="email" name="email"
                                                        value="{{ $company->email }}" required>
                                                    <span class="text-danger error email_err"></span>
                                                </div>
                                            </div>

                                            <!-- URL and Logo -->
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label for="url" class="form-label">{{ __('URL') }}</label>
                                                    <input id="url" class="form-control" type="url" name="url"
                                                        value="{{ $company->url }}" required>
                                                    <span class="text-danger error url_err"></span>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="logo" class="form-label">{{ __('Logo') }}</label>
                                                    <input id="logo" class="form-control" type="file" name="logo"
                                                        accept="image/*">
                                                    <span class="text-danger error logo_err"></span>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-end mt-4">
                                                <button type="submit"
                                                    class="btn btn-primary">{{ __('Update Company') }}</button>
                                            </div>
                                        </form>
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
