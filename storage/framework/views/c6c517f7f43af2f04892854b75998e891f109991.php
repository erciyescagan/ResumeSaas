<?php echo $__env->make('home.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.header', ['page' => 'home'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- SECTION LABEL -->
    <div id="courses"></div>
    <!-- SLIDER -->
    <div class="vertical-slider-section">
        <div class="owl-carousel owl-vertical-slider owl-theme container">
            <!-- Slider #1 -->
            <div class="item container vertical-slider-container">
                <div class="col-lg-5 vertical-slider-header-img-section padding-0">
                    <img src="<?php echo e(asset('assets/images/slide1.png')); ?>">
                </div>
                <div class="col-lg-5 offset-lg-1 vertical-slider-title-section">
                    <p class="vertical-slider-subtitle">Complete subjects</p>
                    <h2 class="vertical-slider-title">Courses for all levels available.</h2>
                    <p class="vertical-slider-text">We've got courses for all subjects at all levels, whether you're a beginner or professional.</p>
                    <div class="learn-more-btn-section">
                        <a class="nav-link learn-more-btn" href="#download"><i class="fa fa-apple" aria-hidden="true"></i> iOS Download</a>
                    </div>
                </div>
            </div>
            <!-- Slider #2 -->
            <div class="item container vertical-slider-container">
                <div class="col-lg-5 vertical-slider-header-img-section padding-0">
                    <img src="<?php echo e(asset('assets/images/slide1.png')); ?>">
                </div>
                <div class="col-lg-5 offset-lg-1 vertical-slider-title-section">
                    <p class="vertical-slider-subtitle">Online courses</p>
                    <h2 class="vertical-slider-title">Learn something brand new online.</h2>
                    <p class="vertical-slider-text">Study from the comfort of your own home, or wherever you may be without commuting.</p>
                    <div class="learn-more-btn-section">
                        <a class="nav-link learn-more-btn" href="#download"><i class="fa fa-android" aria-hidden="true"></i> Play Store</a>
                    </div>
                </div>
            </div>
            <!-- Slider #3 -->
            <div class="item container vertical-slider-container">
                <div class="col-lg-5 vertical-slider-header-img-section padding-0">
                    <img src="<?php echo e(asset('assets/images/slide1.png')); ?>">
                </div>
                <div class="col-lg-5 offset-lg-1 vertical-slider-title-section">
                    <p class="vertical-slider-subtitle">Simple registration</p>
                    <h2 class="vertical-slider-title">Studying couldn't be any easier.</h2>
                    <p class="vertical-slider-text">Registration takes just a few seconds. You can explore all our courses immediately.</p>
                    <div class="learn-more-btn-section">
                        <a class="nav-link learn-more-btn" href="#download"><i class="fa fa-windows" aria-hidden="true"></i> Windows Apps</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION LABEL -->
    <div id="tutors"></div>
    <!-- TUTORS -->
    <div class="tutors-section">
        <div class="tutors-section-bg-graphics-section">
            <img src="<?php echo e(asset('assets/images/tutors-section-bg-img.png')); ?>">
        </div>
        <div class="container tutors-container">
            <div class="pricing-title">
                <h2>Our top Tutors</h2>
                <p>Showcase some of your highest rated tutors, top students or members of staff here. Images are automatically scaled to fit it displays well.</p>
            </div>
            <div class="container tutors-img-container">
                <div class="col-lg-2 col-md-6 col-sm-6 col-6 tutors-card-section">
                    <div class="tutors-card">
                        <div class="tutors-card-icon-section">
                            <img src="<?php echo e(asset('assets/images/tutor1.svg')); ?>">
                        </div>
                        <h2>Michael Smithington</h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-6 tutors-card-section">
                    <div class="tutors-card">
                        <div class="tutors-card-icon-section">
                            <img src="<?php echo e(asset('assets/images/tutor2.svg')); ?>">
                        </div>
                        <h2>Kathy Matthews</h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-6 tutors-card-section">
                    <div class="tutors-card">
                        <div class="tutors-card-icon-section">
                            <img src="<?php echo e(asset('assets/images/tutor3.svg')); ?>">
                        </div>
                        <h2>Aaron Robinsons</h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-6 tutors-card-section">
                    <div class="tutors-card">
                        <div class="tutors-card-icon-section">
                            <img src="<?php echo e(asset('assets/images/tutor4.svg')); ?>">
                        </div>
                        <h2>Niall Collingwood</h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-6 tutors-card-section">
                    <div class="tutors-card">
                        <div class="tutors-card-icon-section">
                            <img src="<?php echo e(asset('assets/images/tutor5.svg')); ?>">
                        </div>
                        <h2>Joanne McCartney</h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-6 tutors-card-section">
                    <div class="tutors-card">
                        <div class="tutors-card-icon-section">
                            <img src="<?php echo e(asset('assets/images/tutor6.svg')); ?>">
                        </div>
                        <h2>Bobby Witherspoon</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION LABEL -->
    <div id="pricing"></div>
    <!-- PRICING -->
    <div class="pricing-section">
        <div class="pricing-section-left-bg-graphics">
            <img src="<?php echo e(asset('assets/images/pricing-section-left-bg.png')); ?>">
        </div>
        <div class="pricing-section-right-bg-graphics">
            <img src="<?php echo e(asset('assets/images/pricing-section-right-bg.png')); ?>">
        </div>
        <div class="container pricing-container">
            <div class="pricing-title">
                <h2>Pricing</h2>
                <p>Offer multiple packages or monthly subscriptions? Why not showcase your featured price plans here, bold and beautifully.</p>
            </div>
            <!-- PRICE PLANS -->
            <div class="pricing-plan-cards-section">
                <div class="col-lg-4 col-md-8 col-xs-10 pricing-card-section">
                    <div class="pricing-card pricing-one">
                        <p class="pricing-period">Basic</p>
                        <p class="pricing-rate">FREE</p>
                        <p class="pricing-text">monthly</p>
                        <div class="pricing-all-plan-features-section basic-plan-features-section">
                            <ul>
                                <li>Unlimited Subjects</li>
                                <li>Course Management</li>
                                <li>Progress Statistics</li>
                                <li><strike>Exportable Data</strike></li>
                            </ul>
                        </div>
                        <a class="nav-link learn-extra-btn m-0" href="#contact"><i class="fa fa-apple" aria-hidden="true"></i> Register</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-xs-10 pricing-card-section">
                    <div class="pricing-ribbon pricing-ribbon-top-left"><span>Popular</span></div>
                    <div class="pricing-card featured">
                        <p class="pricing-period">Growth</p>
                        <p class="pricing-rate">$1.99</p>
                        <p class="pricing-text">monthly</p>
                        <div class="pricing-all-plan-features-section medium-plan-features-section">
                            <ul>
                                <li>Unlimited Subjects</li>
                                <li>Course Management</li>
                                <li>Progress Statistics</li>
                                <li>Exportable Data</li>
                            </ul>
                        </div>
                        <a class="nav-link learn-more-btn" href="#contact"><i class="fa fa-apple" aria-hidden="true"></i> Register</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-xs-10 pricing-card-section">
                    <div class="pricing-card pricing-three">
                        <p class="pricing-period">Professor</p>
                        <p class="pricing-rate">$4.99</p>
                        <p class="pricing-text">monthly</p>
                        <div class="pricing-all-plan-features-section advance-plan-features-section">
                            <ul>
                                <li>Unlimited Subjects</li>
                                <li>Course Management</li>
                                <li>Progress Statistics</li>
                                <li>Exportable Data</li>
                            </ul>
                        </div>
                        <a class="nav-link learn-extra-btn m-0" href="#contact"><i class="fa fa-apple" aria-hidden="true"></i> Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION LABEL -->
    <div id="faq"></div>
    <!-- FAQ -->
    <div class="faq-section">
        <div class="container faq-container">
            <div class="col-lg-5 faq-header-img-section">
                <img src="<?php echo e(asset('assets/images/members.png')); ?>">
            </div>
            <div class="col-lg-7 faq-title-section">
                <p class="faq-subtitle">Recurring questions</p>
                <h2 class="faq-title">Codelearn FAQs</h2>
                <p class="faq-text">Some of our most frequently asked questions along with answers. Have other questions? Get in touch.</p>
                <div class="faq-accordion">
                    <button class="accordion">
                        How can I get the App?
                    </button>
                    <div class="panel"><p>
                            You can download the app on the iOS store or the Google Play store, depending on your device. Click the download button further below or search on the app store "App Name".
                        </p></div>
                    <button class="accordion">
                        Is the App completely free?
                    </button>
                    <div class="panel"><p>
                            Yes, it is completely free to download and free to use on the basic plan. If you'd like some premium features, you can signup to our other affordable plans.
                        </p></div>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION LABEL -->
    <div id="reviews"></div>
    <!-- REVIEWS -->
    <div class="reviews-slider-section">
        <div class="reviews-slider-section-bg-graphics">
            <img src="<?php echo e(asset('assets/images/reviews-slider-section-bg-img.png')); ?>">
        </div>
        <div class="owl-carousel owl-reviews-slider owl-theme container">
            <div class="item container reviews-slider-container">
                <div class="col-lg-4 reviews-slider-header-img-section padding-0">
                    <img src="<?php echo e(asset('assets/images/reviews1.png')); ?>">
                </div>
                <div class="col-lg-6 offset-lg-1 reviews-slider-title-section">
                    <p class="reviews-slider-subtitle">Reviews</p>
                    <h2 class="reviews-slider-title">Great courses</h2>
                    <p class="reviews-slider-text">"Codelearn is a wonderful app with a wide range of courses available, from science to mathematics and everything inbetween. I would highly recommend you download today."</p>
                    <div class="learn-more-btn-section">
                        <a class="nav-link learn-more-btn" href="#download"><i class="fa fa-apple" aria-hidden="true"></i> iOS Download</a>
                    </div>
                </div>
            </div>

            <div class="item container reviews-slider-container">
                <div class="col-lg-4 reviews-slider-header-img-section padding-0">
                    <img src="<?php echo e(asset('assets/images/reviews1.png')); ?>">
                </div>
                <div class="col-lg-6 offset-lg-1 reviews-slider-title-section">
                    <p class="reviews-slider-subtitle">Reviews</p>
                    <h2 class="reviews-slider-title">Simple to use</h2>
                    <p class="reviews-slider-text">"The application is so simple to use, I got started in a matter of seconds. The user interface makes accessing courses very easy too. Thank you to all the wonderful tutors at Codelearn."</p>
                    <div class="learn-more-btn-section">
                        <a class="nav-link learn-more-btn" href="#download"><i class="fa fa-android" aria-hidden="true"></i> Play Store</a>
                    </div>
                </div>
            </div>

            <div class="item container reviews-slider-container">
                <div class="col-lg-4 reviews-slider-header-img-section padding-0">
                    <img src="<?php echo e(asset('assets/images/reviews1.png')); ?>">
                </div>
                <div class="col-lg-6 offset-lg-1 reviews-slider-title-section">
                    <p class="reviews-slider-subtitle">Reviews</p>
                    <h2 class="reviews-slider-title">Children love it</h2>
                    <p class="reviews-slider-text">Our kids love using the Codelearn app. It makes learning fun and allows parents to keep track on their children's progress. We're so happy with Codelearn, we've upgraded our plan.</p>
                    <div class="learn-more-btn-section">
                        <a class="nav-link learn-more-btn" href="#download"><i class="fa fa-windows" aria-hidden="true"></i> Windows Apps</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION LABEL -->
    <div id="download"></div>
    <!-- DOWNLOAD -->
    <div class="download-section">
        <div class="download-section-bg-graphics">
            <img src="<?php echo e(asset('assets/images/download-section-bg-img.png')); ?>">
        </div>
        <div class="container download-container">
            <div class="col-md-6 col-sm-12 download-title-section">
                <p class="download-subtitle">Get started</p>
                <h2 class="download-title">Ready to study online with codelearn?</h2>
                <p class="download-text">Download our app today and get started. This is the point where you really sell your product or application to your visitors.</p>
                <div class="learn-more-btn-section">
                    <a class="nav-link learn-more-btn" href="#top"><i class="fa fa-apple" aria-hidden="true"></i> iOS Store</a><a class="nav-link learn-extra-btn" href="#top"><i class="fa fa-android" aria-hidden="true"></i> Play Store</a>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 col-sm-12 download-header-img">
                <img src="<?php echo e(asset('assets/images/footer.png')); ?>">
            </div>
        </div>
    </div>
<?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\wamp\www\ResumeSaas\resources\views/home/home.blade.php ENDPATH**/ ?>