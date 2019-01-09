<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Vocational Computer Festival (Vocomfest) adalah lomba tahunan yang diselenggarakan oleh HIMAKOMSI UGM yang terdiri dari lomba web design untuk SLTA, lomba mobile apps development serta ICPC untuk mahasiswa, dan ditutup dengan sebuah seminar nasional.">
	<meta name="keywords" content="vocomfest, ugm, himakomsi, computer, festival, lomba">
	<meta name="author" content="Vocomfest Technical Support Team">
	<meta name="robots" content="index,follow">

  <title>Login Vocomfest</title>

  <link rel="shortcut icon" type="x-icon" href="{{url('/')}}/assets/img/icon.png">

  <!-- CSS HERE -->
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/vendor/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/vendor/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/vocom-main-style.css">

</head>
<body>

	<div id="login" class="wrapLogin">
		<div class="container center-block">
			<div class="row m-0">

				<!--kolom kiri deskripsi-->
				<div class="col-md-4">
					<div class="logo-atas tengahin"><img src="{{url('/')}}/assets/img/ugm-white.png" alt="">
						<img src="{{url('/')}}/assets/img/komsi-white.png" alt=""><span><img src="assets/img/icon-vocomfest.png" alt=""></span>
					</div>
					<div class="row col-sm-12 logo-coming">
						<img src="{{url('/')}}/assets/img/logo-coming.png" alt="">
					</div>
					<div class="row col-sm-12 text-login">
						<a href="index.html"><h3>VOCOMFEST</h3></a>
						<p>VOCOMfest (Vocational Computer Festival) merupakan acara tahunan yang diselenggarakan oleh Himpunan Mahasiswa Komputer dan Sistem Informasi Sekolah Vokasi UGM.</p>
					</div>
				</div>

				<!--kolom kanan form-->
				<div class="col-md-8">
					<form method="POST" action="{{ route('login') }}">
                  @csrf
						<div class="form-login">
							<div class="row col-sm-12">
								<img src="{{url('/')}}/assets/img/logo.png" alt="vocomfest">
							</div>
							<div class="row col-sm-12">
								<h4>Login to Vocomfest</h4>
							</div>
							<div class="form-inline">
								<div class="form-group">
									<label for="">Email <span>:</span></label>
									<input id="email" type="email" placeholder="Leader email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="leader_email" value="{{ old('email') }}" required autofocus>
                           <!-- @if ($errors->has('email'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('email') }}</strong>
                               </span>
                           @endif -->
								</div>
								<div class="form-group">
									<label for="">Password : </label>
                           <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                           <!-- @if ($errors->has('password'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('password') }}</strong>
                               </span>
                           @endif -->
								</div>
								<div class="checkbox">
                           <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                           <label for="remember">
                               {{ __('Remember Me') }}
                           </label>
								</div>
                        <button type="submit" class="btn btn-default">Login</button>
							</div>
							<div class="col-sm-12 forgot">
                        @if (Route::has('password.request'))
                            <p>Forgot Password? <a href="{{ route('password.request') }}">
                                {{ __('Click here!') }}
                            </a>
                        @endif
							</div>
							<div class="col-sm-12 regis text-center">
								<p>Don't have any account? <a href="{{ route('register') }}">Register!</a></p>
							</div>

						</div>
					</form>
				</div>
				<!--selesai kolom kanan form-->

			</div>
		</div>
	</div>
</body>
</html>
