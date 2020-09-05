<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{asset('assets/js/owl/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/accordianscript.js')}}"></script>
<!-- Header scroll -->
<script type="text/javascript">
    $(window).scroll(function() {
        if ($(this).scrollTop() > 20) {
            $('#navbar').addClass('header-scrolled');
        } else {
            $('#navbar').removeClass('header-scrolled');
        }
    });
</script>
<script>
    $(document).ready(function(){
        $(".owl-vertical-slider").owlCarousel({
            items:1,
            loop:true,
            nav:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:false,
            responsiveClass:true,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
        $(".owl-reviews-slider").owlCarousel({
            items:1,
            loop:true,
            nav:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:false,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
    });
</script>
<script>
    document.getElementById("logOut").onclick = function() {
        document.getElementById("logOutForm").submit();
    }
</script>
