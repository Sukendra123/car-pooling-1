<?php $__env->startSection('content'); ?>
    <div class="common-layout">
        <div class="common-layout__image-container">
            <img src="./assets/svgs/book.svg" alt="Book" />
        </div>
        <form class="common-layout__content" action="<?php echo e(route('search_ride')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <h1 class="form-title">Book a ride today!</h1>
            <div class="input-container">
                <label class="form-label" for="from">From</label>
                <input class="form-input" value="<?php echo e(old('source')); ?>" type="text" placeholder="Ex. Gandhidham" name="source" id="from" />
            </div>
            <?php $__errorArgs = ['source'];
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
            <div class="input_container">
                <label class="form-label" for="to">To</label>
                <input class="form-input" type="text" value="<?php echo e(old('destination')); ?>" placeholder="Ex. Ahmedabad" name="destination" id="to" />
            </div>
            <?php $__errorArgs = ['destination'];
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
            <div class="input_container">
                <label class="form-label" for="seats">Seats</label>
                <input class="form-input" type="number" value="<?php echo e(old('seats')); ?>" placeholder="Ex. 2" name="seats" id="seats" />
            </div>
            <?php $__errorArgs = ['seats'];
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
            <div class="input_container">
                <label class="form-label" for="date">Date</label>
                <input class="form-input" type="date" name="date" id="date" />
            </div>
            <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

            <span style="color: red;">
                    <strong><?php echo e($message == 'The date must be a date after yesterday.' ? 'The date must be Today or after today.' :$message); ?></strong>
                </span>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <div class="align-center">
                <button class="flat-button" type="submit">Search Rides</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\suman\OneDrive\Documents\FinalYearProject_CarPooling\ride-pool-main\resources\views/book_ride.blade.php ENDPATH**/ ?>