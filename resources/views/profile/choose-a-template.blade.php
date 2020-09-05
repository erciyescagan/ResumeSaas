@include('home.head')
@include('home.navbar', ['page' => 'profile'])
<div style="margin-top: 150px" class="container">
    <div class="col-md-12 text-center">
        <label style="font-size: 16px!important;padding:10px 0;width:50%;letter-spacing: 1px" class="badge badge-info">WELCOME TO CV {{strtoupper(auth()->user()->name)}}</label><br>
        <label style="font-size: 16px!important;padding:10px 0;width:70%;letter-spacing: 1px" class="badge badge-orange">LET'S START BY CHOOSING A THEME !</label>
    </div>
</div>
<div style="margin-top: 50px" class="col-md-12 text-center row">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
</div>

@include('home.footer')
@include('home.scripts')
