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
                    <a class="button-secondary-transparent" href="#scroll"  onclick="scrollto('#scroll')">
                        <div class="button-with-icon">
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
            <div id="1" class= "menu" onclick="changePreEvent(event, 'title1', 'speaker1')">Pre Event 1</div>
            <div id="2" class= "menu active" onclick="changePreEvent(event, 'title2', 'speaker2')">Pre Event 2</div>
        </div>
    </section>
    
    <section class="pre-event-topics" id="title1">
        @component('blocks.title')
            <h2>Topic</h2>
        @endcomponent
        @component('blocks.quote')
            How Public Speaking<br>Affect Our Leadership Skills
        @endcomponent
        <div class="pre-event-date">February 22<sup>nd</sup>, 2020</div>        
        </div>
        <div class="topic-flow">
            @component('blocks.title')
                <h2>Main Activities</h2>
            @endcomponent
            <div class="flow-container">
                <div class="flow-card">
                    <h3>Talk Show</h3>
                    <p>
                        Inviting experts and organization’s leaders to share their knowledge and experiences as the perfect time for enhancing public speaking skills.
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
        @component('blocks.title')
            <h2>Topic</h2>
        @endcomponent
        @component('blocks.quote')
            Sharpening Critical Thinking Skills & <br>Building A Better Indonesia Through SDGs
        @endcomponent
        <div class="pre-event-date">Coming on 2020</div>        
        </div>
        <div class="topic-flow">
            @component('blocks.title')
                <h2>Main Activities</h2>
            @endcomponent
            <div class="flow-container">
                <div class="flow-card">
                    <h3>Talk Show</h3>
                    <p>
                        Discussing with invited NGOs about 5 SDGs issues that will also be highlighted in The Summit which are; Climate Action, Responsible Consumption and Production, Decent Work and Economic Growth, Sustainable Cities and Communities, and Gender Equality.
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>School of Life: Sharpening Our Critical Thinking </h3>
                    <p>
                        Learning about critical thinking and problem-solving analysis directly from the invited experts before the forum group discussion session.
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>Focused Group Discussion</h3>
                    <p>
                        The participants will be divided into several groups and will get a particular case regarding one of the SDGs that has been discussed. They will solve the issues in 30-40 minutes and then present their solutions at the end of the session.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pre-event-speakers" id="speaker1">
        <div class="showcase-header">
            @component('blocks.title')
            <h2>Meet The Speakers</h2>
            @endcomponent
        </div>
        <div class="showcase-body">
            <div class="showcase-card">
                <div class="showcase-card-image">
                    <img src="{{URL::asset('assets/pre-event/speaker1.png')}}">
                </div>
                <div class="showcase-card-title">
                    <h2>Gabriella Hartono Putri</h2>
                </div>
                <div class="showcase-card-description">
                    <ul>
                        <li>Member of Paragon Indonesian Leaders</li>
                        <li>P&G Human Resource Intern</li>
                    </ul>
                </div>
            </div>
            <div class="showcase-card">
                <div class="showcase-card-image">
                    <img src="{{URL::asset('assets/pre-event/speaker2.png')}}">
                </div>
                <div class="showcase-card-title">
                    <h2>Jordi Adrianto Apriantono</h2>
                </div>
                <div class="showcase-card-description">
                    <ul>
                        <li>Individual Winner of Unilever Future</li>
                        <li>Leaders' League 2019</li>
                        <li>XL Future Leaders' Batch 7 Awardee</li>
                    </ul>
                </div>
            </div>
            <div class="showcase-card">
                <div class="showcase-card-image">
                    <img src="{{URL::asset('assets/pre-event/speaker3.png')}}">
                </div>
                <div class="showcase-card-title">
                    <h2>Nicky Oktav Fauziah</h2>
                </div>
                <div class="showcase-card-description">
                    <ul>
                        <li>Private Class of Public Speaking at Superprof</li>
                        <li>Speaker at International Symposium "Are You The Next CEO?" Scholarian Seoul, South Korea</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="pre-event-speakers" id="speaker2">
        <div class="showcase-header">
            @component('blocks.title')
            <h2>Meet The Speakers</h2>
            @endcomponent
        </div>
        <div class="showcase-body">
            <div class="showcase-card">
                <div class="showcase-card-placeholder">Coming Soon :)</div>
                {{-- <div class="showcase-card-image">
                    <img src="{{URL::asset('assets/pre-event/speaker4.png')}}">
                </div>
                <div class="showcase-card-title">
                    <h2>speaker1</h2>
                </div>
                <div class="showcase-card-description">
                    <ul>
                        <li>title1</li>
                        <li>title2</li>
                    </ul>
                </div> --}}
            </div>
            <div class="showcase-card">
                <div class="showcase-card-placeholder">Coming Soon :)</div>
                {{-- <div class="showcase-card-image">
                    <img src="{{URL::asset('assets/pre-event/speaker5.png')}}">
                </div>
                <div class="showcase-card-title">
                    <h2>speaker2</h2>
                </div>
                <div class="showcase-card-description">
                    <ul>
                        <li>title1</li>
                        <li>title2</li>
                    </ul>
                </div> --}}
            </div>
            <div class="showcase-card">
                <div class="showcase-card-placeholder">Coming Soon :)</div>
                {{-- <div class="showcase-card-image">
                    <img src="{{URL::asset('assets/pre-event/speaker6.png')}}">
                </div>
                <div class="showcase-card-title">
                    <h2>speaker2</h2>
                </div>
                <div class="showcase-card-description">
                    <ul>
                        <li>title1</li>
                        <li>title2</li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </section>
            
    <section class="schedule" id="schedule">
        @component('blocks.title')
            <h2 style="color: white">Timeline</h2>
        @endcomponent
        @include('blocks.schedule.preEvent')
    </section>

    <section id="pre-event-registration" class="pre-event-registration">
        <div class="registration-container">
            <div class="registration-title">
                <h2>Pre Event 2</h2>
                <h2>
                    <span class="color-secondary">
                        Free Registration
                    </span>
                </h2>
            </div>
            <a class="button-primary" href="http://bit.ly/preevent2summit">
                Register Now
            </a>
        </div>
    </section>

        @include('blocks.footer')
    </main>
@endsection