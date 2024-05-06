<?php $__env->startSection('content'); ?>
    <div class="content">
    <?php $__empty_1 = true; $__currentLoopData = $ride_req; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $routes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>  
        <?php $__empty_2 = true; $__currentLoopData = $routes->car_vehicle()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?> 
        <div class="driver-booking">
            <div class="driver-booking__detail">
                <h1 class="driver-booking__title">Journey Details</h1>
                <div class="driver-booking__journey-details">
                    <div class="driver-booking__location">
                        <p><b>From</b></p>
                        <p><?php echo e($route->car_route[0]->source); ?></p>
                        <p><?php echo e($route->car_route[0]->date); ?></p>
                    </div>
                    <div class="driver-booking__location">
                        <p><b>To</b></p>
                        <p><?php echo e($route->car_route[0]->destination); ?></p>
                        <p><?php echo e($route->car_route[0]->duration); ?></p>
                    </div>
                </div>
                <div class="driver-booking__journey-details">
                    <div class="driver-booking__location">
                        <p><b>Dept. Time</b></p>
                        <p><?php echo e($route->car_route[0]->time); ?></p>
                    </div>
                </div>
            </div>
            <div class="driver-booking__detail">
                <h1 class="driver-booking__title">Passenger Details</h1>
                <ul class="passenger-details">

                    <?php $__currentLoopData = $route->ride_req_v; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pass_root): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($pass_root->req_status == 1): ?>
                        <li class="passenger-details__detail">
                            <div>
                                <p>Name: <?php echo e(\App\Models\User::find($pass_root->passenger_id)->name); ?></p>
                                <p>Contact: <?php echo e(\App\Models\User::find($pass_root->passenger_id)->contact); ?></p>
                                <p>Pickup: <?php echo e($pass_root->car_vehicle->car_route[0]->source); ?></p>
                                <p>Drop:<?php echo e($pass_root->car_vehicle->car_route[0]->destination); ?></p>
                                <p>Seats:<?php echo e($pass_root->seats); ?></p>
                                <p>Kms: 200</p>
                                <p>Amount Payable: <?php echo e(number_format((200*$pass_root->car_vehicle->rate_per_km)/$route->ride_req_v->where('req_status','=',1)->count())); ?>/-</p>
                            </div>
                        </li>
                        <?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="driver-booking__detail">
                <h1 class="driver-booking__title">Vehicle Details</h1>
                <div class="vehicle-details" style="color:black;">
                    <p><?php echo e($route->model_name); ?></p>
                    <p>Rate: <?php echo e($route->rate_per_km); ?> / KM</p>
                </div>
            </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>

        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h3>No history yet. <br> Create it first !</h3>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\suman\OneDrive\Documents\FinalYearProject_CarPooling\ride-pool-main\resources\views/book-history.blade.php ENDPATH**/ ?>