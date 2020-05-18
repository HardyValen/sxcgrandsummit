<nav class='navbar'>
    <div class="navbar-logo">
        <img src="{{URL::asset('assets/logo/GrandSummit.svg')}}" alt="SXCGS9">
    </div>
    <div class="navbar-links">
        <a href="/landing">HOME</a>
        {{-- <a href="/landing#event" id="navEvent">EVENT</a> --}}
        <div class="dropdown">
            <button class="dropbtn">EVENT
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="/business-case">Business Case Competition</a>
                <a href="/pre-event">Pre Event</a>
                <a href="/summit">The Summit</a>
            </div>
        </div>

        <a href="/landing#schedule" id="navSchedule">SCHEDULE</a>
    </div>
    <div class="navbar-registration">
        <a href="/landing#registration" class="button-primary-transparent" id="navRegist">Registration</a>
    </div>
    <div class="navbar-mobile-nav">
        <a onclick="showsidebar()">
            <img src="{{URL::asset('assets/registration/MoreIcon-Outline.svg')}}" alt="MORE OPTIONS" id="sideButton">
        </a>
    </div>
</nav>
