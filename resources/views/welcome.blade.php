<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" type="text/css">
<!------ Include the above in your HEAD tag ---------->
<style>
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
    background: linear-gradient(120deg, #3e7dc3, #5983e8);
    background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);
    background: linear-gradient(to bottom, #3191f9, #cffbff);
    float: left;
    width: 100%;
    padding: 30px 0;
}
.banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#011689;}
.login-sec .copy-text a{color:#74bc1f;}
.login-sec h2{    margin-bottom: 30px;
    font-weight: 800;
    font-size: 30px;
    color: #17a2b8;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#17a2b8; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #DE6262; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}
</style>
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center"><img src="{{ asset('img/horus/text.png') }}" style="width:160px" alt=""></h2>
		    <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                            <label class="sr-only" for="email"></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" style="background: linear-gradient(120deg, #3db9dc, #3db9dc); color:white">
                                        <i class="fa fa fa-envelope"></i>&nbsp;{{ __('Correo:') }}&nbsp;</div>
                                </div>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Ingrese el Correo">
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label class="sr-only" for="password"></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text" style="background: linear-gradient(120deg, #3db9dc, #3db9dc); color:white">
                                         <i class="fa fa fa-user-secret"></i>&nbsp;{{ __('Contraseña:') }}</div>
                                    </div>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus placeholder="Contraseña">
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-3">
                            <button type="submit" class="btn btn-info btn-block">
                                {{ __('Login') }}
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Olvido su contraseña?') }}
                            </a>
                        </div>
                    </div>
                </form>
<div class="copy-text">Created with <i class="fa fa-heartbeat"></i> by <a href="#">Sumimedical.com</a></div>
		</div>
		<div class="col-md-8 banner-sec">
                <div id="demo" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="img/sitios/prueba.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Prueba de Slider</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/sitios/prueba1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Prueba de Slider</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/sitios/prueba.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Prueba de Slider</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
    </div>
  </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>