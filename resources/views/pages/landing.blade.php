@extends('template.main')

@section('title')
    9th Grand Summit &ndash; Student&#x2715;CEOs
@endsection

@section('content')

    @include("blocks.sidebar")
    <main>
        @include("blocks.navbar")

        <section class="landing-hero">
            <div class="landing-hero-description">
                <h1>What is SxC 9th Grand Summit ?</h1>
                <p>The biggest annual event held by StudentsxCEOs Bandung Chapter, a platform for selected students across Indonesia to solve real problems related to Sustainable Development Goals (SDGs) and propose it to company & non-government organization.</p>
                <div>
                    <a class="button-white-transparent" onClick="scrollto('#description')">Scroll down</a>
                </div>
            </div>
        </section>

        
        <section class="landing-description" id="description">
            <div class="box1">
                <div></div>
            </div>
            <div class="landing-flex-container">
                <div class='section-title'>
                    <div class='header-line'></div>
                    <h2>Why join SxC 9th Grand summit?</h2>
                </div>
                <div class="landing-description-text">
                    <p>
                        The biggest annual event held by StudentsxCEOs Bandung Chapter, a platform for selected students across Indonesia to solve real problems related to Sustainable Development Goals (SDGs) and propose it to company & non-government organization.
                    </p>
                </div>
            </div>
            <div class="box2">
                <div></div>
            </div>
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
                                Business Case Competition is a business based problem-solving competition. Through this program, teams must identify the most prominent issues faced by the company and develop a strategy to provide a solution to help companies achieve their goals...
                            </p>
                        </div>
                        <div class="post-link">
                            <a class="button-secondary" href="/business-case">More Details</a>
                        </div>
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
                                Pre Event is a series of events that are conducted and aimed to introduce the Grand Summit. Within these activities, we want to provide our target audience and Grand Summit participants the opportunity to gain various insights...
                            </p>
                        </div>
                        <div class="post-link">
                            <a class="button-disabled" href="#">Details Soon</a>
                        </div>
                    </div>
                </div>
                <div class="post-card">
                    <div class="post-image image-event-2"></div>
                    <div class="post-desc">
                        <div class="post-title">
                            <h3>
                                Main Event   
                            </h3>
                        </div>
                        <div class="post-summary">
                            <p>
                                The 9th Grand Summit will exhibit a conference as the peak event called The Summit. Invited experts to share their insights and experiences in specific fields to empower students. This event aims to train students to be potential entrepreneurs...
                            </p>
                        </div>
                        <div class="post-link">
                            <a class="button-disabled" href="#">Details Soon</a>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
        
        <section class="landing-registration" id="registration">
            <a href="/business-case/register" class="button-section bg-business-case">
                <h3>REGISTER</h3>
                <h2>BUSINESS CASE</h2>
            </a>
            <a href="http://bit.ly/PreEvent1SXCGrandSummit" class="button-section bg-pre-event">
                <h3>REGISTER</h3>
                <h2>PRE EVENT 1</h2>
            </a>
            <a href="#" class="button-section bg-main-event">
                <h3>COMING SOON</h3>
                <h2>MAIN EVENT</h2>
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