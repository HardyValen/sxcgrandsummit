<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<nav class='navbar'>
    <a href="/landing" class="navbar-logo">
        <img src="{{URL::asset('assets/logo/GrandSummit.svg')}}" alt="SXCGS9">
    </a>
    <ul class="nav-list">
        <li>
            <a href="/landing">HOME</a>
        </li>
        <li>
            <a>EVENT <i class="fa fa-caret-down"></i></a>
            <ul class="nav-dropdown">
                <li><a href="/business-case"><img src="{{URL::asset('assets/icons/bcc-icon.png')}}" alt="BCC">Business Case Competition</a></li>
                <hr>
                <li><a href="/pre-event"><img src="{{URL::asset('assets/icons/pre-icon.png')}}" alt="PRE-EVENT">Pre Event</a></li>
                <hr>
                <li><a href="/summit"><img src="{{URL::asset('assets/icons/summit-icon.png')}}" alt="SUMMIT">The Summit</a></li>
            </ul>
        </li>
        <li>
            <a href="/landing#schedule" id="navSchedule">SCHEDULE</a>
        </li>
    </ul>
    <div class="navbar-registration">
        <a href="/landing#registration" class="button-primary-transparent" id="navRegist">Registration</a>
    </div>
    <div class="navbar-mobile-nav">
        <a onclick="showsidebar()">
            <img src="{{URL::asset('assets/registration/MoreIcon-Outline.svg')}}" alt="MORE OPTIONS" id="sideButton">
        </a>
    </div>
</nav>
