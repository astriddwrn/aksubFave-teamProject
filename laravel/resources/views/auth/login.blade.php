<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fave</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/auth.css')}}">
</head>
<body>
    <div class="main-cont row nopadding">
    
        <div class="left-section position-relative nopadding col-xl-5 col-lg-4 col-0">
            <img src="./assets/login-1.png" alt="" class="position-fixed login-background">
        </div>
        <div class="right-section pt-5 col-xl-7 col-lg-8 col-12 d-flex flex-direction-row justify-content-center">
            <div class="d-flex flex-column mt-md-2 mt-0 mx-md-5 mx-1">
            <a href=""><img src="./assets/logo-website.png" alt="" class="logo m-5 position-absolute"></a>

            @error('email')
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    </div>
                </div>
            @enderror

            @error('password')
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    </div>
                </div>
            @enderror

                <div class="title">HERE TO MAKE<br><span class="bold"><i>YOUR LIFE EASIER.</i></b></span></div>
                <div class="slogan mb-3">Welcome back. Please enter your email and password to continue.</div>

                

                <form method="POST" action="{{ route('login') }}" class=" d-flex flex-column">
                @csrf
                        <div class="label-off mt-4">Email</div>
                        <input type="email" name="email" id="email" class="border-success" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" :value="old('email')">
                        <div class="label-off mt-4">Password</div>
                        <input type="password" name="password" id="password" class="border-success" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        
                        <div class="mt-1 w-100 text-end">
                            <a href="{{ route('password.request') }}" class="forgot">Forgot Password?</a>
                        </div>

                        <div class="d-flex flex-column align-items-center mt-3">
                            <button type="submit" class= "mt-5 py-1 col-md-7 col-12">LOGIN</button>

                            
                            <a href="/register" class="my-3 mb-3"><i>Create an account</i></a>
                        </div>
                    
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('./js/jquery-3.5.1.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
    <script src="{{url('./js/auth.js')}}"></script>
    
     
</body>
</html>