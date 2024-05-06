<?php $__env->startSection('content'); ?>

    <form class="common-layout" method="POST" action="<?php echo e(route('AgreementAccept',auth()->user())); ?>">
        <?php echo csrf_field(); ?>
        <div class="common-layout__image-container">
            <img src="<?php echo e(URL::asset('assets/svgs/city.svg')); ?>" alt="Offroad"/>

        </div>
        <div class="common-layout__content">
            <h1 class="content-heading">Offer Rides</h1>
            <p class="content-text">By using the Site, you represent and warrant that: (1) you have the legal capacity and you agree to comply with these Terms of Use. (2) your use of the Site will not violate any applicable law or regulation.</p>
            <p class="content-text">If you provide any information that is untrue, inaccurate, not current, or incomplete, we have the right to suspend or terminate your account and refuse any and all current or future use of the Site.</p>
            <input class="form-input" type="text" placeholder="Drivers Licence" name="licence"/>
            <?php $__errorArgs = ['licence'];
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
            <div class="align-start">
                <input type="checkbox" name="agree" id="agree"><span> I agree the <a class="form-link" href="#">Terms
                            & Conditions</a>
                    </span>
            </div>
            <div class="align-center">
                <button class="flat-button disabled-button" disabled type="submit">Continue</button>
            </div>
        </div>
    </form>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('agreementScript'); ?>
    <script src="<?php echo e(URL::asset('js/UserAgreement.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\suman\OneDrive\Documents\FinalYearProject_CarPooling\ride-pool-main\resources\views/demo_change_isDriver.blade.php ENDPATH**/ ?>