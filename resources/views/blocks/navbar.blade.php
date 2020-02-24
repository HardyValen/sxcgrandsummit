<nav class='navbar'>
    <div class="navbar-logo">
        <img src="{{URL::asset('assets/logo/GrandSummit.svg')}}" alt="SXCGS9">
    </div>
    <div class="navbar-links">
        <a href="/landing">HOME</a>
        {{-- <a href="/about">ABOUT</a> --}}
        <a href="/landing#event" id="navEvent">EVENT</a>
        <a href="/landing#schedule" id="navSchedule">SCHEDULE</a>
    </div>
    <div class="navbar-registration">
        <a href="/landing#registration" class="button-primary" id="navRegist">REGISTRATION</a>
    </div>
    <div class="navbar-mobile-nav">
        <a onclick="showsidebar()">
            <img src="{{URL::asset('assets/registration/MoreIcon-Outline.svg')}}" alt="MORE OPTIONS" id="sideButton">
        </a>
    </div>
</nav>
