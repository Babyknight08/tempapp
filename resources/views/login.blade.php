<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>INSPINIA | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        @if (session()->has('username'))
        <script>window.location = "{{ route('user.index') }}";</script>
    @endif
        <div>
            <div>

                <h1 class="logo-name">EMB</h1>

            </div>
            <h3>Login</h3>
            {{-- <p>Login in. To see it in action.</p> --}}
            <form class="m-t" role="form" id="loginform" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="" name="Username" id="Username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="Password" id="Password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
            
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page-Level Scripts -->
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>


    <script>
        $('#loginform').submit(function (e) { 
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "{{ route('login.store') }}",
                data: $(this).serialize(),
                dataType: 'json',
                headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
                success: function (response) {
                    if (response.status) {
                        window.location.href = "{{route('user.index')}}";
                    } else {
                        swal({
                        // title: "Error!",
                        // text: response.errors,
                        // type: "error"
                    });
                    $('#loginform')[0].reset();
                    }
                }
            });
        });
    </script>

</body>

</html>
