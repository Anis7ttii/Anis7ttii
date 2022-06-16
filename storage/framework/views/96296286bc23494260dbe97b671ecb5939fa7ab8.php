
  
<?php $__env->startSection('content'); ?>
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">MyUserRegistration</div>
                  <div class="card-body" style="background:#e3f1f5db;">
  
                      <form action="<?php echo e(route('register')); ?>" method="POST">
                          <!-- route('custompost.registration')  -->
                          <?php echo csrf_field(); ?>
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" class="form-control" name="name" required autofocus>
                                  <?php if($errors->has('name')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                  <?php endif; ?>
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  <?php if($errors->has('email')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                  <?php endif; ?>
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  <?php if($errors->has('password')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                  <?php endif; ?>
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
                                  <!-- <?php if($errors->has('password')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                  <?php endif; ?> -->
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-form\resources\views/customforms.blade.php ENDPATH**/ ?>