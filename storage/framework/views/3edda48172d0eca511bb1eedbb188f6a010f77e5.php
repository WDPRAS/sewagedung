<!-- CSS only -->

<link rel="stylesheet" href="<?php echo e(asset('syle.css')); ?>">
<div class="wrapper">
    <div class="logo"> <img
            src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png"
            alt="">
    </div>
    <div class="text-center mt-4 name"> Sig Up </div>
    <form action="/registeruser" method="post" class="p-3 mt-3">
        <?php echo csrf_field(); ?>
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text"
                name="name" placeholder="Masukkan Nama" required value="<?php echo e(old('name')); ?>"> </div>
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span>
            <input type="email" name="email" placeholder="Masukkan Email" required value="<?php echo e(old('email')); ?>">
        </div>
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span>
            <input type="hidden" name="role" placeholder="role" required value="user">
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
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Masukkan Password" required>
        </div>

        <?php $__errorArgs = ['password'];
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
        <button class="btn mt-3">Sig Up</button>
    </form>
    <div class="text-center fs-6"> <a href="/login">Login</a> </div>
</div>




<!-- JavaScript Bundle with Popper -->
<?php /**PATH G:\Basis Data\sewagedung - Copy\resources\views/register.blade.php ENDPATH**/ ?>