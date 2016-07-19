@extends('layouts.app')

@section('content')

<div class="carousel slide carousel-fade" data-ride="carousel" style="position:relative;">
    <!-- Wrapper for slides -->
    <div class="overlay" style="position:absolute; top:0;left:0;bottom:0;right:0;background: rgba(10,10,10,0.8);"></div>
    <div class="carousel-inner" role="listbox">
        
        <div class="item active">
        </div>
        <div class="item">
        </div>
        {{-- <div class="item">
        </div> --}}
    </div>
</div>

<div class="divides" ></div>
    
    
  
<div class="container">
    <div class="row">

        <div class="card card-container">
            <div class="row">
            @if (count($errors) > 0)
                <div class="alert alert-purple fade in" >
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{-- <strong><i class="fa fa-quote-left"></i></strong> There were some problems with your input.<br><br> --}}
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </div>
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="../assets/images/logo.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <span id="reauth-email" class="reauth-email"></span>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
                     @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me" name="remember"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"><i class="fa fa-btn fa-sign-in"></i>  Sign in</button>
            </form><!-- /form -->
            <a class="btn btn-link btn-forgot" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            
        </div><!-- /card-container -->
    </div><!-- /row -->
</div><!-- /container -->
@endsection
