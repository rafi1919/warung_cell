<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!----======== Bootstrap 5.0 ======== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ url('css/login.css') }}" >
</head>
<body>
<div class="background row">
  <div class="col spline"> 
    <iframe src='https://my.spline.design/untitledcopy-5ac88c8bdcd11a39cdc0b9c64c5d701d/' frameborder='0' width='100%' height='100%'></iframe>
  </div>
  
  <form class="col modal-content animate" action="/" method="post">
    @csrf
    
    <div class="imgcontainer" class="modal-content animate">
        <h1>Login</h1>
    </div>
    <div class="container">
      <label for="email"><b>Email</b></label>
      <input type="text" class="@error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
      @error ('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      <label for="password"><b>Password Admin</b></label>
      <input type="password" name="password" id="password" placeholder="Masukkan Password" required>
      <button type="submit">Login</button>
      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      {{-- <small class="register">Hayuukk<a href="/register"> Daftar Dulu</a></small> --}}
    </div>
  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"></script>
</body></html>

