<aside class="sidebar">
    <div class="sidebar-nav">
        <img src="{{URL::asset('assets/icons/BackIcon.svg')}}" alt="BACK" onclick="hidesidebar()">
    </div>
    <div class="sidebar-links">
        <a href="/landing" class="sidebar-link">
            <img class="link-icon" src="{{URL::asset('assets/icons/Home.svg')}}" alt="ABOUT">
            <p class='link-description'>HOME</p>
        </a>
        <a href="/about" class="sidebar-link">
            <img class="link-icon" src="{{URL::asset('assets/icons/About.svg')}}" alt="ABOUT">
            <p class='link-description'>ABOUT</p>
        </a>
        <a href="/schedule" class="sidebar-link">
            <img class="link-icon" src="{{URL::asset('assets/icons/Schedule.svg')}}" alt="ABOUT">
            <p class='link-description'>SCHEDULE</p>
        </a>
        <a href="/summit" class="sidebar-link">
            <img class="link-icon" src="{{URL::asset('assets/icons/Event.svg')}}" alt="ABOUT">
            <p class='link-description'>EVENT</p>
        </a>
    </div>
    <div class="sidebar-banner-container">
        <?php $protocol = ((!emptyempty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $CurPage = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>
        <?php if $CurPage == 'http://sxcgrandsummit.com/landing' : ?>
            <a href="/landing#registration" onclick="hidesidebar()">
        <?php endif; ?>
            <div class="sidebar-banner">
                <h2>REGISTRATION</h2>
            </div>
        </a>
    </div>
</aside>