<html>
<title></title>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h3>Hello!</h3>
            <hr>
            <p>You are receiving this email because we received a password reset request for your account.</p>
            <a href="{{ route('reset.password.get', $token) }}" class="btn btn-dark">Reset Password</a>
            <p>This password reset link will expire in 60 minutes.</p>

            <p>If you did not request a password reset, no further action is required.</p>

            <p>Regards,</p>
            <p>Pet Breeding Game </p>
        </div>
    </div>




</body>

</html>