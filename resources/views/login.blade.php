<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ERP</title>
    <!-- Include AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Include any custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-box {
            margin: 5% auto;
            max-width: 400px;
        }

        .login-logo a {
            color: #3c8dbc;
            font-size: 35px;
            font-weight: bold;
            text-decoration: none;
        }

        .login-card-body {
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .login-box-msg {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
        }

        .input-group-text {
            background-color: #f4f6f9;
            border-color: #d2d6de;
            color: #666;
        }

        .btn-primary {
            background-color: #3c8dbc;
            border-color: #367fa9;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #367fa9;
            border-color: #367fa9;
        }

        .icheck-primary input[type=checkbox]:checked+label:before {
            background-color: #3c8dbc;
            border-color: #3c8dbc;
        }

        .forgot-password {
            text-align: center;
        }

        .forgot-password a {
            color: #666;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>ERP</b> Management</a>
        </div>
        <!-- /.login-logo -->

        <!-- Login form -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-eye" id="togglePassword"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">Remember Me</label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="forgot-password">
                    <a href="#">I forgot my password</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- Include AdminLTE JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include any custom JS -->
    <script>
        $("#togglePassword").on("click", function() {
            const passwordInput = $("#password");
            const toggleIcon = $(this);

            if (passwordInput.attr("type") === "password") {
                passwordInput.attr("type", "text");
                toggleIcon.removeClass("fa-eye").addClass("fa-eye-slash");
            } else {
                passwordInput.attr("type", "password");
                toggleIcon.removeClass("fa-eye-slash").addClass("fa-eye");
            }
        });
    </script>
</body>

</html>
