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
    <link rel="stylesheet" href="assets/css2/register.css" />
  </head>
  <body>
        <div class="container" id="container">
            <div class="form-container register-container">
                @if (session('failed'))
                    <div class="alert alert-danger">{{ session('failed') }}</div>
                @endif
                <form action="{{ route('register') }}" method="POST">
                        @csrf<h1>Register</h1>
                         <div class="name-wrapper has-validation">
                            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" />
                            @error('name')
                                <small style="color: red; display: block; text-align: left; margin-top: 5px;">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="email-wrapper has-validation">
                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"/>
                            @error('email')
                                <small style="color: red; display: block; text-align: left; margin-top: 5px;">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="password-wrapper has-validation">
                            <input type="password" name="password" id="password" placeholder="Password" required />
                            <div class="show-password">
                                <span class="fas fa-lock" id="password-lock"></span>
                            </div>
                             @error('password')
                                <small style="color: red; display: block; text-align: left; margin-top: 5px;">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="password-wrapper has-validation">
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" required />
                            <div class="show-confirm-password">
                                <span class="fas fa-lock" id="password_confirmation-lock"></span>
                            </div>
                            @error('password_confirmation')
                                <small style="color: red; display: block; text-align: left; margin-top: 5px;">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="remember-row">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember" required>
                                <label for="'remember">
                                    Agreed to our Terms and References
                                </label>
                            </div>
                        </div>
                    <a href="#">Forgot your password?</a>
                    <button type="submit">Register</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Already registered?</h1>
                        <p>Log in to manage the galaxy, students, and tutors operations.</p>
                        <a href="{{ route('login') }}">
                            <button class="ghost" id="register">Login</button>
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
        });
        $('.show-password_confirmation').on('click', function() {
        const confirmField = $('#password_confirmation'); // Sesuai ID di input
        const confirmIcon = $('#password_confirmation-lock');

        if (confirmField.attr('type') === 'password') {
            confirmField.attr('type', 'text');
            confirmIcon.attr('class', 'fas fa-unlock');
        } else {
            confirmField.attr('type', 'password');
            confirmIcon.attr('class', 'fas fa-lock');
        }
        });
    </script>
  </body>
</html>