<!-- NAVBAR -->
<nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-header navbar-mobile">
    <div class="navbar-container container">
        <!-- LOGO -->
        <div class="navbar-brand">
            <a class="navbar-brand-logo" href="<?php echo e('/'); ?>">
                <img src="<?php echo e(asset('assets/images/logo.png')); ?>">
            </a>
        </div>
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    <?php if($page == 'home'): ?>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

            <ul class="navbar-nav menu-navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#top">
                        <p class="nav-link-menu">Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#courses">
                        <p class="nav-link-menu">Courses</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tutors">
                        <p class="nav-link-menu">Tutors</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">
                        <p class="nav-link-menu">Pricing</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">
                        <p class="nav-link-menu">FAQs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reviews">
                        <p class="nav-link-menu">Reviews</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link learn-more-btn btn-invert" href="#download"><i class="fa fa-user" aria-hidden="true"></i>Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php elseif($page == 'login' || $page == 'register'): ?>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

                <ul class="navbar-nav">
                    <li style="float: left" class="nav-item">
                        <a class="nav-link" href="<?php echo e('/'); ?>">
                            <p class="nav-link-menu">Home</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link learn-extra-btn btn-invert" href="<?php echo e('/register'); ?>"><i class="fa fa-user" aria-hidden="true"></i>Try Free For 1 Week</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<?php elseif($page == 'profile'): ?>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

        <ul class="navbar-nav">
            <li>
                <a style="padding:8px 26px!important;" class="nav-link learn-more-btn btn-invert" href="<?php echo e('/contact'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i>Contact Us !</a>
            </li>
            <li>
                <form id="logOutForm" action="<?php echo e('/logout'); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <a style="cursor: pointer" id="logOut" class="nav-link learn-extra-btn btn-invert"><i class="fa fa-sign-out" aria-hidden="true"></i>Sign Out</a>
                </form>
            </li>
        </ul>
    </div>
    </div>
    </nav>

<?php endif; ?>
<!-- SECTION LABEL -->

<div id="top"></div>
<?php /**PATH C:\wamp\www\ResumeSaas\resources\views/home/navbar.blade.php ENDPATH**/ ?>