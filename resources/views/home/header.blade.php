@include('home.navbar')
<!-- WRAPPER -->
<div class="wrapper">
    <div class="header">
        <div class="container header-container">
            <div class="col-lg-6 header-img-section">
                <img src="{{asset('macbook.png')}}">

            </div>
            <div class="col-lg-6 header-title-section">
                <h1 class="header-title">Study online with codelearn, it's free.</h1>
                <p class="header-title-text">Create the educators of the future with codelearn online learning academy</p>
                <div class="learn-more-btn-section">
                    <a class="nav-link learn-more-btn" href="{{url('/login')}}"><i class="fa fa-user" aria-hidden="true"></i> Login</a><a class="nav-link learn-extra-btn" href="{{url('/register')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Try Free For 1 Week</a>
                </div>
            </div>
        </div>
    </div>
