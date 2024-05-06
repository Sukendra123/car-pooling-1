<?php $__env->startSection('content'); ?>

    <form class="form" method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
        <h1 class="form-title">Sign Up</h1>
        <input class="form-input" type="text" name="name" placeholder="Full Name" required value="<?php echo e(old('name')); ?>"/>
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span style="color: red;">
                    <strong><?php echo e($message); ?></strong>
                </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input class="form-input" type="email" name="email" placeholder="E-Mail" required value="<?php echo e(old('email')); ?>"/>
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span style="color: red;">
                    <strong><?php echo e($message); ?></strong>
                </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input class="form-input" type="number" name="contact" placeholder="Contact" required
               value="<?php echo e(old('contact')); ?>"/>
        <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span style="color: red;">
                    <strong><?php echo e($message); ?></strong>
                </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="form-input form-input__radio">
            <label for="gender">Gender</label>
            <div>
                <input class="form-input__radio-button" type="radio" name="gender" value="male"/><span>Male</span>
            </div>
            <div>
                <input class="form-input__radio-button" type="radio" name="gender"
                       value="female"/><span>Female</span>
            </div>
        </div>
        <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span style="color: red;">
                    <strong><?php echo e($message); ?></strong>
                </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <textarea class="form-input" name="address" placeholder="Address" required><?php echo e(old('address')); ?></textarea>
        <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span style="color: red;">
                    <strong><?php echo e($message); ?></strong>
                </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input class="form-input" type="password" name="password" placeholder="Password" required/>
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span style="color: red;">
                    <strong><?php echo e($message); ?></strong>
                </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input class="form-input" type="password" name="password_confirmation" placeholder="Confirm Password" required/>
        <button class="flat-button" type="submit">Sign Up</button>
        <p class="form-link">Already have an account?<a href="<?php echo e(route('login')); ?>"> Login</a></p>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\suman\OneDrive\Documents\FinalYearProject_CarPooling\ride-pool-main\resources\views/auth/register.blade.php ENDPATH**/ ?>