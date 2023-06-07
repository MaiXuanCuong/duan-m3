<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}">
    <meta name="theme-color" content="#3063A0">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/stylesheets/theme.min.css') }}" data-skin="default">
    <link rel="stylesheet" href="{{ asset('admin/assets/stylesheets/theme-dark.min.css') }}" data-skin="dark">
    <link rel="stylesheet" href="{{ asset('admin/assets/stylesheets/custom.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
   <style>
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
*, *:before, *:after {
    box-sizing: border-box;
    outline: none;
}
html {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 16px;
    font-smooth: auto;
    font-weight: 300;
    line-height: 1.5;
    color: #444;
}
body {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100vh;
}
.hide {
    display: none;
}
.button {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 12.5rem;
    magrin: 0;
    padding: 1.5rem 3.125rem;
    background-color: #3498db;
    border: none;
    border-radius: 0.3125rem;
    box-shadow: 0 12px 24px 0 rgba(0, 0, 0, 0.2);
    color: white;
    font-weight: 300;
    text-transform: uppercase;
    overflow: hidden;
}
.button:before {
    position: absolute;
    content: '';
    bottom: 0;
    left: 0;
    width: 0%;
    height: 100%;
    background-color: #54d98c;
}
.button span {
    position: absolute;
    line-height: 0;
}
.button span i {
    transform-origin: center center;
}
.button span:nth-of-type(1) {
    top: 50%;
    transform: translateY(-50%);
}
.button span:nth-of-type(2) {
    top: 100%;
    transform: translateY(0%);
    font-size: 24px;
}
.button span:nth-of-type(3) {
    display: none;
}
.active {
    background-color: #2ecc71;
}
.active:before {
    width: 100%;
    transition: width 3s linear;
}
.active span:nth-of-type(1) {
    top: -100%;
    transform: translateY(-50%);
}
.active span:nth-of-type(2) {
    top: 50%;
    transform: translateY(-50%);
}
.active span:nth-of-type(2) i {
    animation: loading 500ms linear infinite;
}
.active span:nth-of-type(3) {
    display: none;
}
.finished {
    background-color: #54d98c;
}
.finished .submit {
    display: none;
}
.finished .loading {
    display: none;
}
.finished .check {
    display: block !important;
    font-size: 24px;
    animation: scale 0.5s linear;
}
.finished .check i {
    transform-origin: center center;
}
@keyframes loading {
    100% {
        transform: rotate(360deg);
    }
}
@keyframes scale {
    0% {
        transform: scale(10);
    }
    50% {
        transform: scale(0.2);
    }
    70% {
        transform: scale(1.2);
    }
    90% {
        transform: scale(0.7);
    }
    100% {
        transform: scale(1);
    }
}

</style>
<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        @include('sweetalert::alert')
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="post" action="{{ route('admin.login') }}">
            @method('POST')
            @csrf
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p  class="lead fw-normal mb-0 me-3">Đăng Nhập</p>
             
            </div><br>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Nhập Tài Khoản" name="email" value="{{ old('email') }}" />
              <label class="form-label" for="form3Example3">Tài Khoản</label>
              @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Nhập Mật Khẩu" name="password"/>
              <label class="form-label" for="form3Example4">Mật Khẩu</label>
              @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
            </div>
  
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Nhớ Tài khoản
                </label>
              </div>
              
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng Nhập</button>
            </div>
  
          </form>
        </div>
        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Quên mật khẩu
        </button>
      <div class="collapse  text-center" id="collapseExample">
        <div class="card card-body">
          <form action="{{ route('users.changepassmail') }}" method="POST">
            @csrf
          <input class="form-control" type="text" name="emails" value="{{ request()->emails }}" placeholder="Nhập email của bạn"><br>
          @error('emails')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
          {{-- <input class="btn btn-primary" type="submit" value="Gửi mã xác nhận"> --}}
          <button class="button" type="submit">
            <span class="submit">Gửi mã xác nhận</span>
            <span class="loading"><i class="fa fa-refresh"></i></span>
            <span class="check"><i class="fa fa-check"></i></span>
          </button>
        </form>
      </div>
    </div>
   
  </section>
  <script>
    const button = document.querySelector('.button');
const submit = document.querySelector('.submit');

function toggleClass() {
	this.classList.toggle('active');
}

function addClass() {
	this.classList.add('finished');
}

button.addEventListener('click', toggleClass);
button.addEventListener('transitionend', toggleClass);
button.addEventListener('transitionend', addClass);
</script>
</body>
</html>