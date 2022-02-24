@extends('layouts.head')

@section('container')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Sistem Informasi Akreditasi Program Studi Fakultas Teknik Universitas Diponegoro</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
              <h3 class="text-center mb-4">Sign In</h3>
                    <form action="#" class="login-form">
                  <div class="form-group">
                      <input type="text" class="form-control rounded-left" placeholder="Username" required>
                  </div>
            <div class="form-group d-flex">
              <input type="password" class="form-control rounded-left" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
            </div>
            <div class="form-group d-md-flex">
                <div class="w-50">
                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                  <input type="checkbox" checked>
                                  <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#">Forgot Password?</a>
                            </div>
                   
            </div>
            <div class="text-md-right">
                <small>Have an account? <a class="text-primary"> Sing Up </a></small>
            </div>
            
          </form>
          
        </div>
            </div>
        </div>
    </div>
</section>

@endsection