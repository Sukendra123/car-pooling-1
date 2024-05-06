<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/logo.ico')); ?>">

    <link rel="stylesheet" href="<?php echo e(URL::asset('css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/available-rides.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/forms.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/index.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(URL::asset('css/bookings.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/driver-dashboard.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/manage-vehicles.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/ride-requests.css')); ?>">


    <title>MyPool</title>
</head>
<body>

<header class="main-header">
    <a href="/" class="logo">
        <img src="<?php echo e(URL::asset('assets/images/logo.ico')); ?>" alt="Logo"/>
        <div class="logo-text"><span>MyPool</span></div>
    </a>
    <nav class="main-header__navigation">
        <ul class="main-header__navigation-items">
            <?php if(auth()->guard()->check()): ?>
                <li class="main-header__navigation-item"><span
                        style="color: white;font-size: 1.2rem">Welcome, <?php echo e(ucfirst(auth()->user()->name)); ?></span></li>
            <?php endif; ?>
            <?php if(auth()->guard()->check()): ?>

                <li class="main-header__navigation-item">
                    <a href="<?php echo e(route('home')); ?>"><span>Book Ride</span></a>
                </li>
                <li class="main-header__navigation-item">
                    <a href="<?php echo e(route('pass-book-history',auth()->user())); ?>"><span>My Bookings</span></a>
                </li>
                <form method="post" action="<?php echo e(route('offer_ride',auth()->user())); ?>">
                    <?php echo csrf_field(); ?>
                    <li class="main-header__navigation-item">
                        <button style="border: none;background-color: black"><a><span>Offer Ride</span></a></button>
                    </li>
                </form>
            <?php endif; ?>

            <?php if(auth()->guard()->guest()): ?>
                <li class="main-header__navigation-item"><a href="<?php echo e(route('register')); ?>"><span>Sign Up</span></a>
                </li>
                <li class="main-header__navigation-item"><a href="<?php echo e(route('login')); ?>"><span>Login</span></a></li>

            <?php else: ?>
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <li class="main-header__navigation-item">
                        <button style="border: none;background-color: black"><a
                                href="<?php echo e(route('logout')); ?>"><span>Logout</span></a></button>
                    </li>
                </form>
            <?php endif; ?>
        </ul>
    </nav>
    <div class="main-header__drawer-toggle">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="backdrop"></div>
    <div class="main-header__sidedrawer">
        <nav class="main-header__mobile-navigation">
            <ul class="main-header__mobile-navigation-items">
                <?php if(auth()->guard()->check()): ?>
                    <li class="main-header__mobile-navigation-item">
                        <a href="<?php echo e(route('home')); ?>"><span>Book Ride</span></a>
                    </li>
                    <li class="main-header__mobile-navigation-item"><a href="./user/bookings.html"><span>My
                                Bookings</span></a></li>
                    <form method="post" action="<?php echo e(route('offer_ride',auth()->user())); ?>">
                        <?php echo csrf_field(); ?>
                        <li class="main-header__mobile-navigation-item">
                            <button style="border: none;background-color: inherit"><a><span>Offer Ride</span></a>
                            </button>
                        </li>
                    </form>

                <?php endif; ?>

                <?php if(auth()->guard()->guest()): ?>
                    <li class="main-header__mobile-navigation-item"><a href="<?php echo e(route('register')); ?>">Sign Up</a></li>
                    <li class="main-header__mobile-navigation-item"><a href="<?php echo e(route('login')); ?>">Login</a></li>
                <?php else: ?>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <li class="main-header__mobile-navigation-item">
                            <button style="border: none;background-color: inherit"><a href="<?php echo e(route('logout')); ?>">
                                    <span>Logout</span></a>
                            </button>
                        </li>
                    </form>
                <?php endif; ?>

            </ul>
        </nav>
    </div>
</header>



<main class="centered">
    <?php echo $__env->yieldContent('content'); ?>
</main>
<footer>
    <div class="footer-top">
        <div class="footer-top__section">
            <h1>Find us at</h1>
            <ul class="footer-top__social">
                <li class="footer-top__social-handle"><a href="#"><i class="fa fa-facebook"
                                                                     aria-hidden="true"></i></a>
                </li>
                <li class="footer-top__social-handle"><a href="#"><i class="fa fa-instagram"
                                                                     aria-hidden="true"></i></a>
                </li>
                <li class="footer-top__social-handle"><a href="#"><i class="fa fa-envelope-o"
                                                                     aria-hidden="true"></i></a></li>
                <li class="footer-top__social-handle"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
        <div class="footer-top__section">
            <ul class="footer-top__navigation">
                <?php if(auth()->guard()->check()): ?>
                    <li class="footer-top__navigation-item"><a href="#"><span>Book Ride</span></a></li>
                    <li class="footer-top__navigation-item"><a href="#"><span>My Bookings</span></a>
                    </li>
                    <li class="footer-top__navigation-item"><a href="#"><span>Offer Ride</span></a></li>

                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                    <li class="footer-top__navigation-item"><a href="<?php echo e(route('register')); ?>"><span>Sign Up</span></a>
                    </li>
                    <li class="footer-top__navigation-item"><a href="<?php echo e(route('login')); ?>"><span>Login</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© MyPool 2021</p>
    </div>
</footer>
</body>
<script src="<?php echo e(URL::asset('js/navigation.js')); ?>"></script>
<script src="https://use.fontawesome.com/9b1d03ddac.js"></script>
<?php echo $__env->yieldContent('agreementScript'); ?>
</html>
<?php /**PATH C:\Users\suman\OneDrive\Documents\FinalYearProject_CarPooling\ride-pool-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>