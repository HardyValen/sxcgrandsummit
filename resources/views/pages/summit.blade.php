@extends('template.main')

@section('title')
    Summit - 9th Grand Summit &ndash; Students&#x2715;CEOs
@endsection

@section('content')

    @include("blocks.sidebar")
    <main>
        @include("blocks.navbar")

        <section class="summit-hero">
            <div class="hero-top">
                <div class="hero-text">
                    <img class="hero-logo" src="{{URL::asset('assets/summit/sdgs.png')}}" alt="SXCGS9">
                    <div class="hero-title">
                        <h1>
                            <span class="color-secondary">The Summit</span> Online<br> 
                            National Conference
                        </h1>
                    </div>
                    <div class="hero-description">
                        <p>
                            The Summit provides a platform to collaborate closer with students across Indonesia and create brilliant solutions for our nation. Get the opportunity for online coaching sessions and present your ideas to NGOs!
                        </p>
                    </div>
                </div>
                <div class="hero-icon">
                    <img src="{{URL::asset('assets/summit/icon.png')}}">
                </div>
            </div>
            <div class="hero-bottom">
                <div class="hero-buttons">
                    {{-- <a class="button-primary summitLink">Register</a> --}}
                    {{-- <a class="button-secondary-transparent" href="#scroll" onclick="scrollto('#scroll')">
                        <div class="button-with-icon">
                            <span>Scroll Down</span> 
                            <img src="{{URL::asset('assets/icons/mouse.svg')}}">
                        </div>
                    </a>    --}}
                </div>
                <div class="hero-schedule">
                    <div class="hero-schedule-element">
                        <div class="hero-schedule-title">
                            <h3>Close<br>Registration</h3>
                        </div>
                        <div class="hero-schedule-date">
                            <div class="hero-schedule-day">
                                <h1>24</h1>
                            </div>
                            <div class="hero-schedule-month-year">
                                <p>June<br>2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="hero-schedule-separator"></div>
                    <div class="hero-schedule-element">
                        <div class="hero-schedule-title">
                            <h3>Study Guide<br>Release</h3>
                        </div>
                        <div class="hero-schedule-date">
                            <div class="hero-schedule-day">
                                <h1>25</h1>
                            </div>
                            <div class="hero-schedule-month-year">
                                <p>June<br>2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="hero-schedule-separator"></div>
                    <div class="hero-schedule-element">
                        <div class="hero-schedule-title">
                            <h3>Essay<br>Submission</h3>
                        </div>
                        <div class="hero-schedule-date">
                            <div class="hero-schedule-day">
                                <h1>24</h1>
                            </div>
                            <div class="hero-schedule-month-year">
                                <p>July<br>2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="hero-schedule-separator"></div>
                    <div class="hero-schedule-element">
                        <a href="#!" onclick="scrollto('#schedule')" class="more">More Schedule..</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="summit-theme">
            <div class="description-header">
                @component('blocks.title')
                <h2>Theme</h2>
                @endcomponent
            </div>
            <div class="description-body">
                @component('blocks.quote')
                    The Application of SDGs<br>in Building Sustainable Businesses
                @endcomponent
                <div class="description-text">
                    <p>
                        StudentsxCEOs Bandung Chapter 9th Grand Summit committed to provide a place for students all over Indonesia to collaborate for the betterment of Indonesia. We encourage the participants to contribute ideas and give real impact for our nation regarding the Sustainable Development Goals.
                    </p>
                </div>
            </div>
            
        </section>
        
        <section class="summit-activities">
            <div class="activity-header">
                @component('blocks.title')
                <h2>Be The Change Agent!</h2>
                @endcomponent
            </div>
            {{-- ACTIVITY #1 --}}
            <div class="activity-block">
                <div class= "activity-description">
                    <div class="activity-title">
                        Before June 24<sup>th</sup> -<span style="font-weight: 450"> Registration</span>
                    </div>
                    <p>
                        Register individually or in a team with a maximum of 3 members. You can also choose your chamber:
                    </p>
                </div>
                <img class="activity-image" src="{{URL::asset('assets/summit/act1.png')}}">
            </div>

            {{-- ACTIVITY CHAMBER --}}
            <div class="activity-chamber">
                <img src="{{URL::asset('assets/summit/chamber1.png')}}">
                <img src="{{URL::asset('assets/summit/chamber2.png')}}">
                <img src="{{URL::asset('assets/summit/chamber3.png')}}">
            </div>
            
            {{-- ACTIVITY #2 --}}
            <div class= "activity-block">
                <div class= "activity-description">
                    <div class="activity-title">
                        June 25<sup>th</sup> -<span style="font-weight: 450"> Study Guide Distribution</span>
                    </div>
                    <p>
                        The study guide will be sent to your email. Prepare well and write brilliant ideas in your essay! 
                    </p>
                </div>
                <img class="activity-image" src="{{URL::asset('assets/summit/act2.png')}}">
            </div>
            
            {{-- ACTIVITY #3 --}}
            <div class= "activity-block">
                <div class= "activity-description">
                    <div class="activity-title">
                        July 25<sup>th</sup> -<span style="font-weight: 450"> Essay Submission</span>
                    </div>
                    <p> Submit your essay through our website. These are the requirement for essay: </p>
                    <ol>
                        <li>List the team name and full name of the team member (if registering as a group) or the full name of the essay writer (if registering individually)</li>
                        <li>Font style: Times New Roman</li>
                        <li>Font size: 12 pt</li>
                        <li>Spacing: 1.5</li>
                        <li>Consist of minimum 500 words and maximum 1500 words</li>
                        <li>Footnote style: Chicago</li>
                        <li>Using appropriate Bahasa Indonesia</li>
                    </ol>
                </div>
                <img class="activity-image" src="{{URL::asset('assets/summit/act3.png')}}">
            </div>
            
            {{-- ACTIVITY #4 --}}
            <div class= "activity-block">
                <div class= "activity-description">
                    <div class="activity-title">
                        August 21<sup>st</sup> -<span style="font-weight: 450"> Day 1: Online Coaching Session</span>
                    </div>
                    <p>
                        Learn insightful knowledge and skills with our partners NGOs!
                    </p>
                </div>
                <img class="activity-image" src="{{URL::asset('assets/summit/act4.png')}}">
            </div>
            
            {{-- ACTIVITY #5 --}}
            <div class= "activity-block">
                <div class= "activity-description">
                    <div class="activity-title">
                        August 22<sup>st</sup> -<span style="font-weight: 450"> Day 2: Online Conference Chamber Session</span>
                    </div>
                    <p>
                        Each chamber will be provided by online coaching session with partners NGOs:
                    </p>
                    <div class="activity-subchamber">
                        <img class="sdg" src="{{URL::asset('assets/summit/sdg4.png')}}">
                        <p>Quality<br>Education</p>
                        <span style='font-size:50px; color:white'>&#8594;</span>
                        <img class="logo" src="{{URL::asset('assets/summit/logochm4.svg')}}">
                    </div>
                    <div class="activity-subchamber">
                        <img class="sdg" src="{{URL::asset('assets/summit/sdg8.png')}}">
                        <p>Decent Work and<br>Economic Growth</p>
                        <span style='font-size:50px; color:white'>&#8594;</span>
                        <img class="logo" src="{{URL::asset('assets/summit/logochm8.svg')}}">
                    </div>
                    <div class="activity-subchamber">
                        <img class="sdg" src="{{URL::asset('assets/summit/sdg13.png')}}">
                        <p>Climate<br>Action</p>
                        <span style='font-size:50px; color:white'>&#8594;</span>
                        <img class="logo" src="{{URL::asset('assets/summit/logochm13.svg')}}">
                    </div>
                </div>
                <img class="activity-image" src="{{URL::asset('assets/summit/act5.png')}}">
            </div>
            
            {{-- ACTIVITY #6 --}}
            <div class= "activity-block">
                <div class= "activity-description">
                    <div class="activity-title">
                        August 23<sup>rd</sup> -<span style="font-weight: 450"> Day 3</span>
                    </div>
                    <p>The last day of The Summit Online National Conference will cover:</p>
                    <ul>
                        <li>Best Teams Announcement</li>
                        <li>Online Presentation</li>
                        <li>Announcement</li>
                        <li>Awarding</li>
                        <li>Closing</li>
                    </ul>
                </div>
                <img class="activity-image" src="{{URL::asset('assets/summit/act6.png')}}">
            </div>
        </section>

        <section class="summit-chambers">
            <div class="description-header">
                <div class="header-line"></div>
                <h2>Chambers</h2>
            </div>
            <div class="description-body">
                <div class="panels-container">

                    <!-- Project Child-->
                    <div class="panel">
                        <div class="panel-image-backdrop backdrop-project-child">
                            <div class="panel-header">
                                <div class="header-icon">
                                    <img src="{{URL::asset('assets/summit/sdg4.png')}}">
                                </div>
                                <div>
                                    <div class="header-title">
                                        <h3>
                                            SDG 4<br>Quality Education
                                        </h3>
                                        <div class="header-line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-title">
                                <img src="{{URL::asset('assets/summit/projectchild-logo.png')}}">
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="footer-title">
                                <h3>
                                    Project Child
                                </h3>
                            </div>
                            <div class="footer-text">
                                <p>
                                    Project Child is a community-based NGO that strives to deplenish poverty in the coastal and riverside communities of Indonesia. They hope for every Indonesian child to have a chance to learn, a healthy start and feel supported and secured, as well as prepared for natural disasters.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End of Project Child -->

                    <!-- XSProject -->
                    <div class="panel">
                        <div class="panel-image-backdrop backdrop-xs-project">
                            <div class="panel-header">
                                <div class="header-icon">
                                    <img src="{{URL::asset('assets/summit/sdg8.png')}}">
                                </div>
                                <div>
                                    <div class="header-title">
                                        <h3>
                                            SDG 8<br>Decent Work<br>and Economic Growth
                                        </h3>
                                        <div class="header-line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-title">
                                <img src="{{URL::asset('assets/summit/xsproject-logo.png')}}">
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="footer-title">
                                <h3>
                                    XSProject
                                </h3>
                            </div>
                            <div class="footer-text">
                                <p>
                                    XSProject concerns about the lives of those living on trash picking at open garbage dumps in Jakarta, they work to help improve the lives of the poor families by utilizing the trash that the pickers depend on to make a living.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End of XSProject -->

                    <!-- Walhi -->
                    <div class="panel">
                        <div class="panel-image-backdrop backdrop-walhi">
                            <div class="panel-header">
                                <div class="header-icon">
                                    <img src="{{URL::asset('assets/summit/sdg13.png')}}">
                                </div>
                                <div>
                                    <div class="header-title">
                                        <h3>
                                            SDG 13<br>Climate Action
                                        </h3>
                                        <div class="header-line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-title">
                                <img src="{{URL::asset('assets/summit/walhi-logo.png')}}">
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="footer-title">
                                <h3>
                                    WALHI
                                </h3>
                            </div>
                            <div class="footer-text">
                                <p>
                                    Abbreviation for "Wahana Lingkungan Hidup Indonesia". Since 1980, WALHI has persistently focused on saving and restoring Indonesia's living environment. They fight for the rights of a protected and fulfilled living environment right as prt of the Human Rights.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End of Walhi -->

                </div>
            </div>
        </section>

        <section class="schedule" id="schedule">
            @component('blocks.title')
                <h2 style="color: white">Timeline</h2>
            @endcomponent
            @include('blocks.schedule.summit')
        </section>

        <section class="summit-registration">
            <div class="registration-container closed">
                <div class="registration-title">
                    <h1>Registration Closed</h1>
                    {{-- <h2>
                        <span class="color-secondary">
                            Register
                        </span>
                    </h2>
                    <h2>The Summit</h2>
                </div>
                <a class="button-primary summitLink">
                    Register Now
                </a> --}}
            </div>
        </section>

        <section class="summit-contacts">
            <div class="contacts-container">
                <h2>Contact Person:</h2>
                <div class="contacts">
                    <div class="contacts-item">
                        <img src="{{URL::asset('assets/summit/tele.svg')}}">
                        <h3>Zerlina<br>
                            <span style="font-weight: 800">081223800037</span>
                        </h3>
                    </div>
                    <div class="contacts-item">
                        <img src="{{URL::asset('assets/summit/line.svg')}}">
                        <h3>Line<br>
                            <span style="font-weight: 800">zeruline</span>
                        </h3>
                    </div>
                    <div class="contacts-item">
                        <img src="{{URL::asset('assets/summit/tele.svg')}}">
                        <h3>Safira<br>
                            <span style="font-weight: 800">08777639167</span>
                        </h3>
                    </div>
                    <div class="contacts-item">
                        <img src="{{URL::asset('assets/summit/line.svg')}}">
                        <h3>Line<br>
                            <span style="font-weight: 800">safira2008</span>
                        </h3>
                    </div>
                </div>
            </div>
        </section>

        @include('blocks.footer')
    </main>
@endsection