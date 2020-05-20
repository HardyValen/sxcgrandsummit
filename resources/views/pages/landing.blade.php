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
                    <a class="button-primary" href="#">Registration</a>
                    <a class="button-secondary-transparent" href="#">Learn More</a>
                </div>
            </div>
        </section>

        <section class="landing-description" id="description">
            <div class="landing-flex-container">
                <div class='landing-description-text'>
                    <div class='header-line'></div>
                    <h2>Why you should join the 9<sup>th</sup> Grand Summit</h2>
                    <ul>
                        <li>
                            Build a wide network with students from all over Indonesia.
                        </li>
                        <li>
                            A platform to go beyond and explore potentials.
                        </li>
                        <li>
                            Encourage collaboration and innovation through continuous discussions.
                        </li>
                        <li>
                            An action to take part and give impact on business, social, and environment matter.
                        </li>
                    </ul>
                </div>
                <div class="landing-description-image">
                    <div></div>
                </div>
            </div>
            {{-- <div class="box2">
                <div></div>
            </div> --}}
        </section>
        
        <section class="landing-event">
            <div class="landing-event-title">
                <div class='section-title'>
                    <div class="header-line"></div>
                    <h2>Event</h2>
                </div>
            </div>
            
            <div class="post-container" id="event">
                <div class="post-card">
                    <div class="post-image image-event-1"></div>
                    <div class="post-desc">
                        <div class="post-title">
                            <h3>
                                Bussiness Case Competition    
                            </h3>
                        </div>
                        <div class="post-summary">
                            <p>
                                Business Case Competition is a business based problem-solving competition in Indonesia. Through this program, each team will identify prominent issues faced by a company and try to build a strategy to provide a solution in order to help the company reach their goals.
                            </p>
                        </div>
                    </div>
                    <div class="post-link">
                        <a class="button-secondary" href="/business-case">More Details</a>
                    </div>
                </div>
                
                <div class="post-card">
                    <div class="post-image image-event-3"></div>
                    <div class="post-desc">
                        <div class="post-title">
                            <h3>
                                Pre Event  
                            </h3>
                        </div>
                        <div class="post-summary">
                            <p>
                                Pre Event is a a series of events that are conducted to build awareness of the Grand Summit. We want to provide the opportunity to gain various insights from expert speakers and mini-workshops. 
                            </p>
                        </div>
                    </div>
                    <div class="post-link">
                        <a class="button-primary" href="/pre-event">More Details</a>
                    </div>
                </div>
                
                <div class="post-card">
                    <div class="post-image image-event-2"></div>
                    <div class="post-desc">
                        <div class="post-title">
                            <h3>
                                The Summit
                            </h3>
                        </div>
                        <div class="post-summary">
                            <p>
                                The Summit is a national conference that invites experts to share their insights and experiences in specific fields regarding SDGs to empower students to be potential entrepreneurs. There will be coaching sessions that are led by experts from NGOs, group discussions, and presentations of the given solution in front of NGOs.
                            </p>
                        </div>
                    </div>
                    <div class="post-link">
                        <a class="button-secondary" href="/summit">More Details</a>
                    </div>
                </div>
            </div>    
        </section>
            
        <section class="landing-registration" id="registration">
            <a href="http://bit.ly/getbccsummit" class="button-section bg-business-case">
                <h3>REGISTER</h3>
                <h2>BUSINESS CASE</h2>
            </a>
            <a href="http://bit.ly/preevent2summit" class="button-section bg-pre-event">
                <h3>REGISTER</h3>
                <h2>PRE EVENT 2</h2>
            </a>
            <a href="http://bit.ly/thesummitsxc" class="button-section bg-main-event">
                <h3>REGISTER</h3>
                <h2>THE SUMMIT</h2>
                <h2></h2>
            </a>
        </section>
        
        <section class="landing-schedule" id="schedule">
            @component('blocks.title')
                <h2 style="color: white">Schedule</h2>
            @endcomponent
            @include('blocks.schedule.businessCase')<hr>
            @include('blocks.schedule.summit')<hr>
            @include('blocks.schedule.preEvent')
        </section>

        <section class="landing-sponsor"></section>
        
        @include('blocks.footer')
    </main>
@endsection