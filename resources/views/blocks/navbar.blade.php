<nav class='navbar'>
    <div class="navbar-logo">
        <a  href="/landing">
            <img src="{{URL::asset('assets/logo/GrandSummit.svg')}}" alt="SXCGS9">
        </a>
    </div>
    <div class="navbar-links">
        <a href="/landing">HOME</a>
        {{-- <a href="/about">ABOUT</a> --}}
        <a href="/landing#event" id="navEvent">EVENT</a>
        <a href="/landing#schedule" id="navSchedule">SCHEDULE</a>
    </div>
    <div class="navbar-registration" display= "none">
        {{-- <a href="/landing#registration" class="button-primary" id="navRegist">REGISTER NOW</a> 
        sementara --}}
    </div>
    <div class="navbar-mobile-nav">
        <a onclick="showsidebar()">
            <img src="{{URL::asset('assets/registration/MoreIcon-Outline.svg')}}" alt="MORE OPTIONS" id="sideButton">
        </a>
    </div>
</nav>
