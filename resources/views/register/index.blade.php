@extends('layouts.head')

@section('container')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Sistem Informasi</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="login-wrap p-4 p-md-9">
              <h3 class="text-center mb-4">Registration Here</h3>

                    <form action="/register" method="post">
                        @csrf
                  <div class="form-group">
                      <input type="text" class="form-control rounded-left @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" required>
                      @error('name')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control rounded-left @error('username') is-invalid @enderror" id="username" name="username"  placeholder="Username" required>
                      @error('username')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control rounded-left @error('email') is-invalid @enderror" id="email" name="email"  placeholder="Email" required>
                      @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>
            <div class="form-group">
              <input type="password" class="form-control rounded-left @error('password') is-invalid @enderror" id="password" name="password"   placeholder="Password" required>
              @error('password')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <input type="password" class="form-control rounded-left @error('vpassword') is-invalid @enderror" id="vpassword" name="vpassword"  placeholder="Password" required>
              @error('vpassword')
              <div class="invalid-feedback">
                  password doesn't match.
              </div>
              @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3 @error('name') is-invalid @enderror">Register</button>
            </div>
                <small class="d-block-text text-center">Already have an account? <a href="/" class="text-primary"> Login Now </a></small>                       
            </div>
          </form>
          
        </div>
            </div>
        </div>
    </div>
</section>

@endsection