<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V19</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('css/admin_login.css')}}">

    <!--===============================================================================================-->

<body>
    <div class="container">
        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Admin Login</h5>
                         <form method="POST" action="{{ route('login_auth') }}">
                             @csrf
                            <div class="form-group">
                                    <label for="Email">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="email@example.com" required>
                                </div>
                            <div class="form-group">
                                    <label for="exampleDropdownFormPassword2">Password</label>
                                    <input type="password" class="form-control" name="password" id="password-field" placeholder="Password" required>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                                    <label class="form-check-label" for="dropdownCheck2">
                                        Remember me
                                        </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Log in</button>
                        </form>
                        <div class="row ">
                            <div class="col message">
                                    @if(Session::has('message'))   
                                    <ul id="mm" style="padding:0%;" class="alert alert-danger message">
                                        <span class="errorMessege"> {{ Session::get('message') }} 
                                            @php
                                            Session::forget('success');
                                            @endphp
                                        </span>  
                                    </ul>
                                @endif
                            </div>
                        </div>
                        <div class="row footer">
                            <div class="col">
                                <p>Travel Srilanka</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
<!--===============================================================================================-->   
<script src="{{url('https://code.jquery.com/jquery-3.4.1.slim.min.js')}}"></script>
<script src="{{url('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')}}" ></script>
<script src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}" ></script>
<script src="{{url('js/admin_password_toggle.js')}}"></script>
<!--===============================================================================================-->
</body>
</html>