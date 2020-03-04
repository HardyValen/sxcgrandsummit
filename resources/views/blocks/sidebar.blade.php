<aside class="sidebar">
    <div class="sidebar-nav">
        <img src="{{URL::asset('assets/icons/BackIcon.svg')}}" alt="BACK" onclick="hidesidebar()">
    </div>
    <div class="sidebar-links">
        <a href="/landing" class="sidebar-link" id="sideHome">
            <img class="link-icon" src="{{URL::asset('assets/icons/Home.svg')}}" alt="HOME">
            <p class='link-description'>HOME</p>
        </a>
        {{--
            <a href="/about" class="sidebar-link">
                <img class="link-icon" src="{{URL::asset('assets/icons/About.svg')}}" alt="ABOUT">
                <p class='link-description'>ABOUT</p>
            </a>
        --}}
        <a href="/landing#schedule" class="sidebar-link"  id="sideSchedule">
            <img class="link-icon" src="{{URL::asset('assets/icons/Schedule.svg')}}" alt="SCHEDULE">
            <p class='link-description'>SCHEDULE</p>
        </a>
        <a href="/summit" class="sidebar-link">
            <img class="link-icon" src="{{URL::asset('assets/icons/Event.svg')}}" alt="EVENT" id="sideEvent">
            <p class='link-description'>EVENT</p>
        </a>
    </div>
    <div class="sidebar-banner-container">
        <a href="/landing#registration" alt="REGISTRATION" id="sideRegist">
            <div class="sidebar-banner">
                <h2>REGISTRATION</h2>
            </div>
        </a>
    </div>
</aside>