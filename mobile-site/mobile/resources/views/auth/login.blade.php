
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>Sign In</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-jvectormap-2.0.3.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/morris.min.css')}}" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/ecommerce.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css')}}">
    <style type="text/css">
        .authentication::before {
    background-color: #2196f3;
}
    </style>
</head>
<body class="theme-blue">
<div class="authentication">
    <div class="container">
        <div class="col-md-12 content-center">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 ">
                <div class="company_detail">
                    <h4 class="logo"><img src="assets/images/logo.svg" alt="Logo"> {{-- strtoupper(setting('site.site_name')) --}}</h4>
                    {{--
                    <h3>{{setting('site.site_name')}} {{__('is the faster, safer way to pay in the internet')}}</h3>
                    <p>{{__('No matter where you shop, we keep your financial information secure')}}</p> --}}                   
                    {{-- <div class="footer hidden">
                        <ul  class="social_link list-unstyled">
                            <li><a href="https://www.linkedin.com/company/thememakker/" title="LinkedIn"><i class="zmdi zmdi-linkedin"></i></a></li>
                            <li><a href="https://www.facebook.com/thememakkerteam" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a href="http://twitter.com/thememakker" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a href="http://plus.google.com/+thememakker" title="Google plus"><i class="zmdi zmdi-google-plus"></i></a></li>
                        </ul>
                        <hr>
                        <ul class="list-unstyled">
                            <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                            <li><a href="http://thememakker.com/about/" target="_blank">About Us</a></li>
                            <li><a href="http://thememakker.com/services/" target="_blank">Services</a></li>
                            <li><a href="javascript:void(0);">FAQ</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>                        
            <div class="col-lg-5 col-md-12  offset-lg-1">
                <div class="card-plain">
                    <div class="header">
                        <h5>{{__('Log in')}}</h5>
                    </div>
                    <form class="form" method="POST" action="{{ route('login') }}">
                         @csrf
                         <div class="input-group">
                            <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                            <input type="text" class="form-control email" id="email" name="email" placeholder="Email " required >
                             @if ($errors->has('email'))
                                <div class="clearfix">
                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                        </div>
                        {{-- <div class="input-group">
                            <input  id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}" required autofocus>
                            <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div> --}}
                        <div class="input-group">
                            
                            <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" required>
                             @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div> 
                        <div class="checkbox float-left">
                            <input id="terms" type="checkbox">
                            <label for="terms">{{__('Remember me')}}</label>
                        </div>                         
                        <div class="clearfix"></div>
                        <div class="footer">
                            <input type="submit" class="btn btn-primary btn-round btn-block" value="{{__('SIGN IN')}}">
                            <a href="{{url('/')}}/register" class="btn btn-primary btn-simple btn-round btn-block">{{__('SIGN UP')}}</a>
                        </div>
                     </form>
                    <a href="{{ route('password.request') }}" class="link">{{ __('Forgot Your Password?') }}</a>
                </div>
            </div>
            
        </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>



    <!-- Jquery Core Js --> 
    <script src="{{ asset('assets/js/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
    <script src="{{ asset('assets/js/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

    <script src="{{ asset('assets/js/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js -->
    <script src="{{ asset('assets/js/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
    <script src="{{ asset('assets/js/knob.bundle.js')}}"></script> <!-- Jquery Knob-->

    <script src="{{ asset('assets/js/mainscripts.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/infobox-1.js')}}"></script>
    <script src="{{ asset('assets/js/index.js')}}"></script>

    <script src="{{ asset('assets/js/particles.min.js')}}"></script>
<script src="{{ asset('assets/js/particles.js')}}"></script>

</body>
</html>

