@extends('template.main')

@section('title')
    Business Case - 9th Grand Summit &ndash; Students&#x2715;CEOs
@endsection

@section('content')

    @include("blocks.sidebar")
    <main>
        @include("blocks.navbar")

        <section class="business-case-hero">
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
            <div class="hero-bottom">
                <div class="hero-buttons">
                    <a class="button-primary" href="http://bit.ly/getbccsummit">Registration</a>
                    <a class="button-secondary-transparent" href="#">
                        <div class="button-with-icon" onclick="scrollto('#scroll')">
                            <span>Scroll Down</span> 
                            <img src="{{URL::asset('assets/icons/mouse.svg')}}">
                        </div>
                    </a>   
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
                <h2>A Brief Description</h2>
            </div>
            <div class="description-body">
                <div class="description-text">
                    <p>
                        Business Case Competition is a business based problem-solving competition. Through this program, teams must identify the most prominent issues faced by the company and develop a strategy to provide a solution to help companies achieve their goals. They are expected to solve the problem in forms of paper. Winning strategies include being detail-oriented, creative, and business acumen when presenting recommendations.
                    </p>
                </div>
                <div class="description-image">
                    <img src="{{URL::asset('assets/business-case/description-image.png')}}">
                </div>
            </div>
        </section>

        <section class="business-case-flow">
            <div class="header-line"></div>
            <h2>The Flow of the Competition:</h2>

            <div class="flow-container">
                <div class="flow-card">
                    <h3>Elimination Phase</h3>
                    <p>
                        The Company Business Case will be distributed to qualified registered participants and it is expected to be solved in business paper form.
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>Coaching Session</h3>
                    <p>
                        The top 10 teams will be invited to the main event, The Summit, to present their solution and ideas in front of professionals and company representatives.
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>Company Sharing Session</h3>
                    <p>
                        The best 10 teams will be participating on the Company Visit Session provided by Business Case Competition partnering company in the Summit Main Event Venue in Bandung.
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>Final Phase</h3>
                    <p>
                        The best 10 teams have to execute the final presentation in front of the judges.
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>Awarding Night</h3>
                    <p>
                        There will be chosen the 1st, 2nd, and 3rd Winner under the discretion of the judges.
                    </p>
                </div>
            </div>
        </section>

        <section id="schedule">
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
                <a class="button-primary">
                    Register Now
                </a>
            </div>
        </section>

        @include('blocks.footer')
    </main>
@endsection