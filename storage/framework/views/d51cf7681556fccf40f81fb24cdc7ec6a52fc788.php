 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 <link rel="stylesheet" href="<?php echo e(asset('syle.css')); ?>">
 <div class="wrapper">
     <div class="logo"> <img src="image/logo.png" alt=""> </div>
     <div class="text-center mt-4 name"> Login </div>
     <?php if($message = Session::get('loginError')): ?>
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
             <?php echo e($message); ?>

             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
     <?php endif; ?>
     <form action="/loginya" method="post" class="p-3 mt-3">
         <?php echo csrf_field(); ?>
         <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span>
             <input type="email" name="email" placeholder="Masukkan Email" required value="<?php echo e(old('email')); ?>">
         </div>
         <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
             <div class="alert alert-danger">
                 <?php echo e($message); ?>

             </div>
         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
         <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password"
                 name="password" id="pwd" placeholder="Masukkan Password" required> </div> <button
             class="btn mt-3">Login</button>
     </form>
     <div class="text-center fs-6"> <a href="/register">Sign up</a> </div>
 </div>
<?php /**PATH G:\Basis Data\sewagedung - Copy\resources\views/login.blade.php ENDPATH**/ ?>