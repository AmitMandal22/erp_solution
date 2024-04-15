@extends('layouts.app')

@section('content')

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            @include('partials.header')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @if (auth()->guard('employee')->check())
                @include('partials.c-admin-sidebar')
            @else
                @include('partials.sidebar')
            @endif
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
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">{{ __('Create Employee') }}</div>

                                    <div class="card-body">
                                        <form method="POST" id="create_new_employee" enctype="multipart/form-data">
                                            @csrf

                                            <!-- First Name and Last Name -->
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label for="first_name"
                                                        class="form-label">{{ __('First Name') }}</label>
                                                    <input id="first_name" class="form-control" type="text"
                                                        name="first_name" value="{{ old('first_name') }}" required
                                                        autofocus>
                                                    <span class="text-danger error first_name_err"></span>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
                                                    <input id="last_name" class="form-control" type="text"
                                                        name="last_name" value="{{ old('last_name') }}" required>
                                                    <span class="text-danger error last_name_err"></span>
                                                </div>
                                            </div>
                                            <!-- Email and Phone -->
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label for="email" class="form-label">{{ __('Email') }}</label>
                                                    <input id="email" class="form-control" type="email" name="email"
                                                        value="{{ old('email') }}" required>
                                                    <span class="text-danger error email_err"></span>
                                                </div>

                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label for="phone" class="form-label">{{ __('Phone') }}</label>
                                                    <input id="phone" class="form-control" type="text" name="phone"
                                                        value="{{ old('phone') }}">
                                                    <span class="text-danger error phone_err"></span>
                                                </div>
                                            </div>
                                            <!-- Password and Confirm Password -->
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                                    <input id="password" class="form-control" type="password"
                                                        name="password" required>
                                                    <span class="text-danger error password_err"></span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="password_confirmation"
                                                        class="form-label">{{ __('Confirm Password') }}</label>
                                                    <input id="password_confirmation" class="form-control" type="password"
                                                        name="password_confirmation" required>
                                                    <span class="text-danger error password_confirmation_err"></span>
                                                </div>
                                            </div>

                                            <!-- Company Name and Is Admin -->
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="company_name"
                                                        class="form-label">{{ __('Company Name') }}</label>
                                                    <select id="company_name" class="form-control" name="company_id">
                                                        <option value="">Select Company</option>
                                                        <!-- Add options dynamically from database -->
                                                        @if (auth()->guard('employee')->check())
                                                            <!-- Show only the option for the employee's company -->
                                                            <option
                                                                value="{{ auth()->guard('employee')->user()->company_id }}"
                                                                selected>
                                                                {{ auth()->guard('employee')->user()->company->name }}
                                                            </option>
                                                        @else
                                                            <!-- Show options for all companies -->
                                                            @foreach ($companies as $company)
                                                                <option value="{{ $company['id'] }}">
                                                                    {{ $company['name'] }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <span class="text-danger error company_name_err"></span>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="is_admin" class="form-label">{{ __('Is Admin') }}</label>
                                                    <select id="is_admin" class="form-control" name="is_admin">
                                                        <option value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                    <span class="text-danger error is_admin_err"></span>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-end mt-4">
                                                <button type="submit"
                                                    class="btn btn-primary">{{ __('Create Employee') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

    </body>
@endsection
