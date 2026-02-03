@extends('layouts.app')
@section('content')
<style type="text/css">
  .form-style3 label {
    font-weight: 400;
    font-family: "Baloo Da 2", sans-serif !important;
}
    .header-layout1{
        display: none;
    }
.registermargin{
        margin-top: 4%;
    }
    .loginimageone{
        width: 60% !important;
    }
    .align-self-center {
    align-self: flex-start !important;
    margin-top: 5%;
}
</style>

    <section class="space-top" data-bg-src="assets/img/bg/bg-con-1-1.png">
        <div class="container registermargin">
            <div class="row">
               
                <div class="col-xl col-xxl-6 align-self-center">
                    <h2 class="sec-title mb-3">Login</h2>
                                 @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                   <!--  <div class="row">
                        <div class="col-sm-6">
                            <div class="list-style1">
                                <ul class="list-unstyled mb-0">
                                    <li>Cricket Fun and learning</li>
                                    <li>Track student progress</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="list-style1">
                                <ul class="list-unstyled">
                                    <li>Maths Cricket Magic</li>
                                    <li>Join millions of students</li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <form method="POST" class="form-style3" action="{{ route('login') }}">
                        @csrf   

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                              <!--   <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> -->
                                 <a class="btn btn-link" href="{{config('app.baseURL')}}/resetPassword">
                                        {{ __('Forgot password') }}
                                    </a>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn vs-btn">
                                    {{ __('Login') }}
                                </button>

       
                                    <a class="btn vs-btn" type="button" href="{{ route('register') }}">
                                        {{ __('Sign up') }}
                                    </a>
                            </div>
                        </div>
                    </form>
                </div>
                 <div class="col-xl-auto col-xxl-6">
                    <div class="img-box6">
                        <div class="img-1 mega-hover loginimageone"><img src="assets/img/login4.jpg" alt="image"></div>
                    <div class="img-2 mega-hover"><img src="assets/img/login3.jpg" alt="image"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{config('app.baseURL')}}/assets/js/vendor/jquery-3.6.0.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
   <script>
  $(".editor").on('keyup  mouseover',function(e) {
    var myEditor = document.querySelector('.editor')
    var html = myEditor.children[0].innerHTML;
    $('.new-editor').val(html);
  });

  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type', 'info') }}";
  switch(type){
    case 'info':
    toastr.info("{{ Session::get('message') }}");
    break;
    case 'warning':
    toastr.warning("{{ Session::get('message') }}");
    break;
    case 'success':
    toastr.success("{{ Session::get('success') }}");
    break;
    case 'error':
    toastr.error("{{ Session::get('message') }}");
    break;
  }
  @endif

</script>
    @endsection