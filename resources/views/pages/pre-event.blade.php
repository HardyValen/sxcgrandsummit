@extends('template.main')

@section('title')
    9th Grand Summit &ndash; Students&#x2715;CEOs
@endsection

@section('content')

    @include("blocks.sidebar")
    <main>
        @include("blocks.navbar")

        <section class="pre-event-hero">
            <div class="hero-text">
                {{-- <img class="hero-logo" src="{{URL::asset('assets/logo/GrandSummitWhite.svg')}}" alt="SXCGS9"> --}}
                <div class="hero-title">
                    <h1>
                        <span class="color-secondary">Pre</span> Event<br>
                    </h1>
                </div>
                <div class="hero-description">
                    <p>
                        A series of events that are conducted to introduce and build awareness of the Grand Summit. We want to provide the opportunity to gain various insights from expert speakers and hands on experience on mini-workshop session.
                    </p>
                </div>
            </div>
            <div class="hero-bottom">
                <div class="hero-buttons">
                    <a class="button-primary" href="http://bit.ly/preevent2summit">Registration</a>
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
                            <h3>Pre<br>Event 1</h3>
                        </div>
                        <div class="hero-schedule-date">
                            <p>Finished</p>
                        </div>
                    </div>
                    <div class="hero-schedule-separator"></div>
                    <div class="hero-schedule-element">
                        <div class="hero-schedule-title">
                            <h3>Open Registration<br>Pre Event 2</h3>
                        </div>
                        <div class="hero-schedule-date">
                            <div class="hero-schedule-month-year">
                                <p>To Be<br>Announced..</p>
                            </div>
                        </div>
                    </div>
                    <div class="hero-schedule-separator"></div>
                    <div class="hero-schedule-element">
                        <div class="hero-schedule-title">
                            <h3>Pre<br>Event 2</h3>
                        </div>
                        <div class="hero-schedule-date">
                            <div class="hero-schedule-month-year">
                                <p>To Be<br>Announced..</p>
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

    <section class="pre-event-description" id="scroll">
        <div class="description-header">
            <div class="header-line"></div>
            <h2>A Brief Description:</h2>
        </div>
        <div class="description-body">
            <div class="description-text">
                <p>
                    Pre Event is a series of events that are conducted and aimed to introduce the Grand Summit. Within these activities, we want to provide our target audience and Grand Summit participants the opportunity to gain various insights from speakers who are experts in their fields. The theme of the Pre Events itself will correlate with the big theme of The Summit, which revolves around "The Applications of SDGs in Building Sustainable Businesses."
                </p>
            </div>
            <div class="description-image">
                <img src="{{URL::asset('assets/pre-event/description-image.png')}}">
            </div>
        </div>
    </section>

    <section class="pre-event-slider">
        <div class="slider-container" id="sliderc">
            <div id="1" class= "menu active" onclick="changePreEvent(event, 'title1')">Pre Event 1</div>
            <div id="2" class= "menu" onclick="changePreEvent(event, 'title2')">Pre Event 2</div>
        </div>
    </section>
    
    <section class="pre-event-topics" id="title1">
        <div class="topic-title">
            <h2>How Public Speaking Can Affect Your Leadership</h2>
            <h3>February 22<sup>nd</sup>, 2020</h3>        
        </div>
        <div class="topic-flow">
            <div class="flow-container">
                <div class="flow-card">
                    <h3>Talk Show</h3>
                    <p>
                        Inviting experts and organization’s leaders to share their knowledge and experiences as the perfect time for enhancing public speaking skills 
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>Open Mic</h3>
                    <p>
                        The perfect time for participants to take the chance and discuss directly with the speakers on how to speak in public by giving 2 minutes speech as a form of practice.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pre-event-topics" id="title2">
        <div class="topic-title">
            <h2>Indonesia Dalam Bencana, Pemerintah Kerja Apa?</br>Kita Bisa Apa?</h2>
            <h3>March 21<sup>st</sup></h3>
        </div>
        <div class="topic-flow">
            <div class="flow-container">
                <div class="flow-card">
                    <h3>Talk Show</h3>
                    <p>
                    The representatives from government and Non-Governmental Organization will discuss about Indonesia’s climate condition and SDGs No.13: Climate Action. The talk will bring to light the steps that have been taken by the government and what action that we can do to save Indonesia.
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                <h3>Focused Group Discussion</h3>
                <p>
                    A 60 minutes of discussion will be conducted by 10 groups with one committee in each groups. Discussing the topic of climate action according to SDGs No.13, the participants will explore the ability to think critically, build factual arguments, and convey constructive criticism.
                </p>
                </div>
            </div>
        </div>
    </section>
            
    <section id="schedule">
        @include('blocks.schedule.preEvent')
    </section>
        @include('blocks.footer')
    </main>
@endsection