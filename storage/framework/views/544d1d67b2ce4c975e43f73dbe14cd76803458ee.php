<?php $__env->startSection('content'); ?>


    <form class="form" method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <h1 class="form-title">Login</h1>
        <input class="form-input" type="text" name="email" placeholder="E-Mail" required />
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
        <input class="form-input" type="password" name="password" placeholder="Password" required />
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
        <button class="flat-button" type="submit">Login</button>
        <p class="form-link">Don't have any account?<a href="<?php echo e(route('register')); ?>"> Signup</a></p>
    </form>


<?php $__env->stopSection(); ?>







<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\suman\OneDrive\Documents\FinalYearProject_CarPooling\ride-pool-main\resources\views/auth/login.blade.php ENDPATH**/ ?>