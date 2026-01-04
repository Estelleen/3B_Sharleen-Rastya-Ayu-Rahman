<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Login</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="assets/css2/login.css" />
  </head>
  <body>
        <div class="container" id="container">
            <div class="form-container login-container">
                @if (session('failed'))
                    <div class="alert alert-danger">{{ session('failed') }}</div>
                @endif
                <form action="/login" method="POST">
                        @csrf<h1>Log in</h1>
                        <span>or use your account</span>
                        <div class="email-wrapper has-validation">
                            <input type="email" name="email" placeholder="Email" required/>
                        </div>
                        <div class="password-wrapper has-validation">
                            <input type="password" name="password" id="password" placeholder="Password" required />
                            <div class="show-password">
                                <span class="fas fa-lock" id="password-lock"></span>
                            </div>
                        </div>
                        <div class="remember-row">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember" required>
                                <label for="'remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                    <a href="">Forgot your password?</a>
                        <button>Log in</button>
                    

                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <h1>Register here!</h1>
                        <p>Register to get full access to the Asteria Star Talk command center.</p>
                        <a href="{{ route('auth.register') }}">
                            <button class="ghost" id="register">Register</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <script src="assets/js2/login.js"></script>
    <script>
        $('.show-password').on('click', function(){
            const passwordField = $('#password');
            const lockIcon = $('#password-lock');

            if($('#password').attr('type') == 'password'){
                $('#password').attr('type', 'text');
                $('#password-lock').attr('class', 'fas fa-unlock');
            }else{
                $('#password').attr('type', 'password');
                $('#password-lock').attr('class', 'fas fa-lock');
            }
        })
    </script>
  </body>
</html>