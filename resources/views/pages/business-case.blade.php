@extends('template.main')

@section('title')
    Business Case - 9th Grand Summit &ndash; Students&#x2715;CEOs
@endsection

@section('content')

    @include("blocks.sidebar")
    <main>
        @include("blocks.navbar")

        <section class="business-case-hero">
            <div class="hero-top">
                <div class="hero-text">
                    <div class="hero-title">
                        <h1>
                            <span class="color-secondary">Business</span><br> 
                            Case Competition
                        </h1>
                    </div>
                    <div class="hero-description">
                        <p>
                            Business Case Competition is a business based problem-solving competition in Indonesia. Through this program, each team will identify the prominent issues faced by a company and try to build a strategy to provide a solution in order to help the company reach their goals.
                        </p>
                    </div>
                </div>
                <div class="hero-icon">
                    <img src="{{URL::asset('assets/business-case/icon.png')}}">
                </div>
            </div>
            <div class="hero-bottom">
                <div class="hero-buttons">
                    <a class="button-primary bccLink">Register</a>
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
                            <h3>Case<br>Distribution</h3>
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
                            <h3>Case<br>Submission</h3>
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

        <section class="business-case-description" id="scroll">
            <div class="description-header">
                <div class="header-line"></div>
                <h2>Case Contributor</h2>
            </div>
            <div class="description-body">
                <div class="description-text">
                    <h2>PT. KAO INDONESIA</h2>
                    <p>
                        Providing high quality products with a vision to be a company that understands the best and remains the closest to its consumers and customers. PT. KAO Indonesia is a leading FMCG company in Indonesia with three main categories; skincare, health products, and household.
                    </p>
                </div>
                <div class="description-image">
                    <img src="{{URL::asset('assets/business-case/description-image.jpg')}}">
                </div>
            </div>
        </section>

        <section class="business-case-flow">
            @component('blocks.title')
                <h2 style="color: white">Competition Flow</h2>
            @endcomponent

            <div class="flow-container">
                <div class="flow-card">
                    <h3>Before June 24th - Registration</h3>
                    <p>
                        Each team consists of three members of undergraduate students from any major.
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>June 25th - Case Distribution</h3>
                    <p>
                        The case by PT. KAO Indonesia will be sent through email.
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>Before July 24th - Paper Submission</h3>
                    <p>
                        Solve the case and submit your paper through the uploader provided in this website.
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>August 7th - Finalist Announcement </h3>
                    <p>
                        The finalist will be announced on our website and instagram @sxcgrandsummit.
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>August 21st - 22nd - Online Coaching Session</h3>
                    <p>
                        The participants will get the opportunity for attending online coaching sessions with expert speakers from business fields. Don’t miss the chance!
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>August 23rd - Online Presentation</h3>
                    <p>
                        The best 10 teams must execute an online presentation in front of the judges. Prepare well and be the champion!
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>August 23rd - Announcement of The Champions</h3>
                    <p>
                        The champions will be announced via Instagram Live on our instagram @sxcgrandsummit.
                    </p>
                </div>
            </div>
        </section>

        <section class="business-case-prize">
            <div class="showcase-body">
                <div class="showcase-head">
                    <h2>Win Total Prize</h2>
                </div>
                <div class="showcase-text">
                    <img src="{{URL::asset('assets/business-case/reward.svg')}}">
                    <h1>   Rp 26.000.000</h1>
                </div>
            
            </div>
        </section>

        <section class="schedule" id="schedule">
            @component('blocks.title')
                <h2 style="color: white">Timeline</h2>
            @endcomponent
            @include('blocks.schedule.businessCase')
        </section>

        <section class="business-case-registration">
            <div class="registration-container">
                <div class="registration-title">
                    <h2>
                        <span class="color-secondary">
                            Register
                        </span>
                    </h2>
                    <h2>Business Case</h2>
                </div>
                <a class="button-primary bccLink">
                    Register Now
                </a>
            </div>
        </section>

        @include('blocks.footer')
    </main>
@endsection