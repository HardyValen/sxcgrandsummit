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
        <?php $protocol = ((!emptyempty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $CurPage = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>
        <?php if $CurPage == 'http://sxcgrandsummit.com/business-case' : ?>
            <a href="business-case/register" class="button-primary" id="navRegist">REGISTRATION</a>
        <?php else if $CurPage == 'http://sxcgrandsummit.com/summit' : ?>
            <a href="summit/register" class="button-primary" id="navRegist">REGISTRATION</a>
        <?php else if $CurPage == 'http://sxcgrandsummit.com/pre-event' : ?>
            <a href="http://bit.ly/PreEvent1SXCGrandSummit" class="button-primary" id="navRegist">REGISTRATION</a>
        <?php endif; ?>
    </div>
    <div class="navbar-mobile-nav">
        <a onclick="showsidebar()">
            <img src="{{URL::asset('assets/registration/MoreIcon-Outline.svg')}}" alt="MORE OPTIONS">
        </a>
    </div>
</nav>
