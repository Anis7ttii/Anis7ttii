@extends('layouts.form')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">MyUserRegistration</div>
                  <div class="card-body" style="background:#e3f1f5db;">
  
                      <form action="{{ route('register') }}" method="POST">
                          <!-- route('custompost.registration')  -->
                          @csrf
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" class="form-control" name="name" required autofocus>
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>


                          <div class="form-group row">
                              <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>
                              <div class="col-md-6">
                                  <input type="text" id="age" class="form-control" name="age" required>
                              </div>
                          </div>


                          <div class="form-group row">
                              <label for="designation" class="col-md-4 col-form-label text-md-right">Designation</label>
                              <div class="col-md-6">
                              <textarea class="form-control" rows="5" name="designation" id="comment"></textarea>
                              </div>
                          </div>
            
 


                         <div class="form-group row">
                              <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">Date of Birth</label>
                              <div class="col-md-6">
                              <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" required>
                                  <!-- @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif -->
                              </div>
                          </div>
            


                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>
  

                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection