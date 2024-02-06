<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Annisa Jewelry | Register </title>

        <!-- Favicons -->
        <link href="{{asset('frontend/img/icon-aj.png')}}" rel="icon">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

        

        <!-- Bootstrap core CSS -->
        <link href="{{asset('frontend/dist/css/bootstrap.min.css')}}" rel="stylesheet">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>
        
        <!-- Custom styles for this template -->
        <link href="{{asset('frontend/css/signin.css')}}" rel="stylesheet">

    </head>

    
    <body class="text-center">
    <main class="form-signin">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <form action="{{ route('register') }}" method="POST">
            <img class="mb-5" src="{{asset('frontend/img/logo-aj.png')}}" alt="" width="250">
            <h1 class="h3 mb-3 fw-normal">Silahkan Registrasi Dulu</h1>

            @csrf
            <div class="field input-field">
            <label for="name" class="fw-medium"></label>
                <input id="name" placeholder="Name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="field input-field">
            <label for="email" class="fw-medium"></label>
                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="field input-field">
            <label for="password" class="fw-medium"></label>
                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Registrasi</button>
            <small class="d-block text-center mt-3">sudah punya akun? <a href="/login">Login</a></small>
            <p class="mt-5 mb-3 text-muted">&copy; Copyright 2024</p>
        </form>

    </main>


        
    </body>
</html>
