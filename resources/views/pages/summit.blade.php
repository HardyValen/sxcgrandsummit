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
                            <span class="color-secondary">The Summit</span><br> 
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
                    <a class="button-primary summitLink">Registration</a>
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

        {{-- <section class="summit-description" id="scroll">
            <div class="description-header">
                <div class="header-line"></div>
                <h2>The Summit</h2>
            </div>
            <div class="description-body">
                <div class="description-text">
                    <p>
                        The 9th Grand Summit will exhibit a conference as the peak event called The Summit. Invited experts to share their insights and experiences in specific fields to empower students. This event aims to train students to be potential entrepreneurs that have high motivation and think critically. The participants will get a chance to network with other students from all over Indonesia.
                    </p>
                    <p>
                        There will be coaching sessions to prepare them for discussions that lead by experts from NGOs in five chambers with five different SDGs issues as the main topic. Each participant will be assigned in a chosen chamber and are expected to generate suitable and feasible solutions towards the problem.
                    </p>
                    <p>
                        In the end, each chamber will get a chance to present their solutions in front of NGOs who will consider whether their solutions can be implemented. We aim to give the participants a platform to go beyond and also encourage diverse forms of collaboration and innovation by providing room for discussions.
                    </p>
                </div>
                <div class="description-image">
                    <img src="{{URL::asset('assets/summit/summit-description.svg')}}">
                </div>
            </div>
        </section> --}}

        <section class="summit-theme">
            <div class="description-header">
                <div class="header-line"></div>
                <h2>Theme</h2>
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
            <div class= "activity-container">
                <div class="activity-header">
                    @component('blocks.title')
                    <h2>Be The Change Agent!</h2>
                    @endcomponent
                </div>
                <div class="activity-block">
                    <div class= "activity-description">
                        <div class="activity-title">
                            Before June 24th - Registration 
                        </div>
                        <p>
                            Register individually or in a team with a maximum of 3 members. You can also choose your chamber.
                        </p>
                    </div>
                    <div class="activity-image img-coaching"></div>
                </div>
                
                <div class= "activity-block">
                    <div class="activity-image img-talkshow"></div>
                    <div class= "activity-description">
                        <div class="activity-title">
                            Talk Shows Session
                        </div>
                        <p>
                            Providing speakers from different NGOs that will share insights on the growing issues of SDGs to give the participants specific information of the issues that will be solved within their chambers. 
                        </p>
                    </div>
                </div>
                
                <div class= "activity-block">
                    <div class= "activity-description">
                        <div class="activity-title">
                            Chamber Session
                        </div>
                        <p>
                            The perfect time to interact, discuss, collaborate, and cooperate to find a solution for each chamber’s issue. The conference leaders will lead the discussion, create the study guides, and assess each participant from their performance and essay. From the discussions, we expect a feasible solution to be presented in the end in front of the NGOs.
                        </p>
                    </div>
                    <div class="activity-image img-chamber"></div>
                </div>
                
                <div class= "activity-block">
                    <div class="activity-image img-gala"></div>
                    <div class= "activity-description">
                        <div class="activity-title">
                            Social Night & Gala Dinner
                        </div>
                        <p>
                            A big chance for participants to network, create positive impressions and a memorable experience of The Summit. Social Night is a platform where participants can enjoy and interact with each other informally and will be closed by Gala Dinner.
                        </p>
                    </div>
                </div>
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
            <div class="registration-container">
                <div class="registration-title">
                    <h2>
                        <span class="color-secondary">
                            Register
                        </span>
                    </h2>
                    <h2>The Summit</h2>
                </div>
                <a class="button-primary summitLink">
                    Register Now
                </a>
            </div>
        </section>

        @include('blocks.footer')
    </main>
@endsection