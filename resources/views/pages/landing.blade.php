@extends('template.main')

@section('title')
    9th Grand Summit &ndash; Students&#x2715;CEOs
@endsection

@section('content')

    @include("blocks.sidebar")
    <main>
        @include("blocks.navbar")

        <section class="landing-hero">
            <div class="hero-text">
                <div class="hero-title">
                    <h1>Take Your Seat and<br>
                        <span class="color-secondary">Unleash Your Potential</span>
                    </h1>
                        
                </div>
                <div class="hero-description">
                    <p>
                        The 9th Grand Summit is StudentsxCEOs Bandung Chapter’s most anticipated annual event. It provides a platform for selected students across Indonesia to discuss and bring a solution for businesses and NGOs to solve real problems relevant to the Sustainable Development Goals (SDGs). The 9th Grand Summit covers the pre-event, business case competition, and conference.
                    </p>
                </div>
            </div>
            <div class="hero-bottom">
                <div class="hero-buttons">
                    <a class="button-primary" href="#registration" onclick="scrollto('#registration')">Registration</a>
                    <a class="button-secondary-transparent" href="#description" onclick="scrollto('#description')">Learn More</a>
                </div>
            </div>
        </section>

        <section class="landing-description" id="description">
            <div class="landing-flex-container">
                <div class='landing-description-text'>
                    <div class='header-line'></div>
                    <h2>Why you should join the 9<sup>th</sup> Grand Summit</h2>
                    <ul>
                        <li>Build a wide network with students from all over Indonesia.</li>
                        <li>A platform to go beyond and explore potentials.</li>
                        <li>Encourage collaboration and innovation through continuous discussions.</li>
                        <li>An action to take part and give impact on business, social, and environment matter.</li>
                    </ul>
                </div>
                <div class="landing-description-image">
                    <div></div>
                </div>
            </div>
        </section>
        
        <section class="landing-event" id="events">
            <div class="landing-event-title">
                <div class='section-title'>
                    <div class="header-line"></div>
                    <h2>Event</h2>
                </div>
            </div>
            
            <div class="post-container" id="event">
                <div class="post-card">
                    <div class="post-title-image image-event-1">
                        <span>Business<br><span class="color-secondary">Case Competition</span></span>
                    </div>
                    <div class="post-desc">
                        <p>
                            Business Case Competition - the business based problem-solving competition in Indonesia. Through this program, each team will identify the prominent issues faced by the company and try to build a strategy to provide a solution in order to help the company reach goals.
                        </p>
                    </div>
                    <div class="post-link">
                        <a class="button-primary" href="/business-case">More Details..</a>
                        <a class="button-primary-invert-transparent" href="#schedule" onclick="scrollto('#schedule')">   Timeline   </a>
                    </div>
                </div>
                
                <div class="post-card">
                    <div class="post-title-image image-event-2">
                        <span>Pre <span class="color-secondary">Event</span></span>
                    </div>
                    <div class="post-desc">
                        <p>
                            Pre Event - a series of events that are conducted to introduce build awareness of the Grand Summit. We want to provide the opportunity to gain various insights from expert speakers and mini-workshop.
                        </p>
                    </div>
                    <div class="post-link">
                        <a class="button-primary" href="/pre-event">More Details..</a>
                        <a class="button-primary-invert-transparent" href="#schedule" onclick="scrollto('#schedule')">   Timeline   </a>
                    </div>
                </div>
                
                <div class="post-card">
                    <div class="post-title-image image-event-3">
                        <span>The <span class="color-secondary">Summit</span></span>
                    </div>
                    <div class="post-desc">
                        <p>
                            The Summit - a national conference that invites experts to share their insights and experiences in specific fields regarding SDGs to empower students to be potential entrepreneurs. There will be coaching sessions that are led by experts from NGOs, group discussions, and presentations of the given solution in front of NGOs.
                        </p>
                    </div>
                    <div class="post-link">
                        <a class="button-primary" href="/summit">More Details..</a>
                        <a class="button-primary-invert-transparent" href="#schedule" onclick="scrollto('#schedule')">   Timeline   </a>
                    </div>
                </div>
            </div>    
        </section>
        
        <section class="landing-registration" id="registration">
            <div class="regis">
                <div class="business-case">
                    <h2>Business Case<br><span class="color-secondary">Competition</span></h2>
                    <a class="button-secondary-transparent" href="http://bit.ly/getbccsummit">Register</a>
                </div>
            </div>
            <div class="regis">
                <div class="pre-event">
                    <h2>Pre <span class="color-secondary">Event</span></h2>
                    <a class="button-secondary-transparent" href="http://bit.ly/preevent2summit">Register</a>
                </div>
            </div>
            <div class="regis">
                <div class="summit">
                    <h2>The <span class="color-secondary">Summit</span></h2>
                    <a class="button-secondary-transparent" href="http://bit.ly/thesummitsxc">Register</a>
                </div>
            </div>
        </section>
        
        <section class="landing-schedule" id="schedule">
            @component('blocks.title')
                <h2 style="color: white">Timeline</h2>
            @endcomponent
            @include('blocks.schedule.businessCase')<hr>
            @include('blocks.schedule.summit')<hr>
            @include('blocks.schedule.preEvent')
        </section>

        <section class="landing-sponsor"></section>
        
        @include('blocks.footer')
    </main>
@endsection