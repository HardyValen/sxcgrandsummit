@extends('template.main')

@section('title')
    9th Grand Summit &ndash; Students&#x2715;CEOs
@endsection

@section('content')

    @include("blocks.sidebar")
    <main>
        @include("blocks.navbar")

        <section class="pre-event-hero">
            <div class="hero-top">
                <div class="hero-text">
                    <div class="hero-title">
                        <h1>
                            <span class="color-secondary">Pre</span> Event<br>
                        </h1>
                    </div>
                    <div class="hero-description">
                        <p>
                            A series of events that are conducted to introduce and build awareness of the Grand Summit.
                            We want to provide the opportunity to gain various insights from expert speakers and hands on experience on mini-workshop session.
                        </p>
                    </div>
                </div>
                <div class="hero-icon">
                    <img src="{{URL::asset('assets/pre-event/icon.png')}}">
                </div>
            </div>
            <div class="hero-bottom">
                <div class="hero-buttons">
                    {{-- <a class="button-primary preLink">Register</a> --}}
                    {{-- <a class="button-secondary-transparent" href="#scroll"  onclick="scrollto('#scroll')">
                        <div class="button-with-icon">
                            <span>Scroll Down</span> 
                            <img src="{{URL::asset('assets/icons/mouse.svg')}}">
                        </div>
                    </a>    --}}
                </div>
                <div class="hero-schedule">
                    <div class="hero-schedule-element">
                        <div class="hero-schedule-title">
                            <h3>Pre<br>Event 1</h3>
                        </div>
                        <div class="hero-schedule-date">
                            <div class="hero-schedule-day">
                                <h1>22</h1>
                            </div>
                            <div class="hero-schedule-month-year">
                                <p>February<br>2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="hero-schedule-separator"></div>
                    <div class="hero-schedule-element">
                        <div class="hero-schedule-title">
                            <h3>Pre<br>Event 2</h3>
                        </div>
                        <div class="hero-schedule-date">
                            <div class="hero-schedule-day">
                                <h1>13</h1>
                            </div>
                            <div class="hero-schedule-month-year">
                                <p>June<br>2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="hero-schedule-separator"></div>
                    <div class="hero-schedule-element">
                        <div class="hero-schedule-title">
                            <h3>Pre<br>Event 3</h3>
                        </div>
                        <div class="hero-schedule-date">
                            <div class="hero-schedule-day">
                                <h1>20</h1>
                            </div>
                            <div class="hero-schedule-month-year">
                                <p>June<br>2020</p>
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

    <section class="pre-event-slider">
        <div class="slider-container" id="sliderc">
            <div id="1" class= "menu" onclick="changePreEvent(event, 'title1', 'speaker1', 'null')">Pre Event 1</div>
            <div id="2" class= "menu" onclick="changePreEvent(event, 'title2', 'speaker2', 'desc2')">Pre Event 2</div>
            <div id="3" class= "menu active" onclick="changePreEvent(event, 'title3', 'speaker3', 'desc3')">Pre Event 3</div>
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
           Mastering Pitching<br>Skill to Sell Your Ideas
        @endcomponent
        <div class="pre-event-date">June 13<sup>th</sup>, 2020</div>
        <div class="pre-event-desc">
            <p>
            Pitching is an essential skill to convey ideas, products, projects, or even yourself.
            The art of pitching is on how you convince the audience and present ear-catching contents.
            It requires some techniques to balance tone, body language, and contents.
            A powerful pitch can lead you to billions worth of investment, profitable partnership or even a great job position. 
            </p>
        </div>
    </div>
    <div class="topic-flow">
        @component('blocks.title')
        <h2>Main Activities</h2>
        @endcomponent
        <div class="flow-container">
                <div class="flow-card">
                    <h3>Registration</h3>
                    <p>
                        Register before June 13<sup>th</sup>, 2020
                        and follow the steps on the confirmation email.
                        Fight Covid-19 by donating to Yayasan Indonesia Kuat through this event!
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>Online Seminar</h3>
                    <p>
                        The speaker will share the secret tips and tricks 
                        for you to nail the pitch. Learn this and that about 
                        pitching skill and master the techniques!
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>Q&A Session</h3>
                    <p>
                        Discuss the topic directly with the speaker and get
                        insightful answers to help you sharpen the
                        pitching skill!
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="pre-event-topics" id="title3">
        @component('blocks.title')
        <h2>Topic</h2>
        @endcomponent
        @component('blocks.quote')
        Problem Solving 101<br>in This Disruption Era
        @endcomponent
        <div class="pre-event-date">June 20<sup>th</sup>, 2020</div>        
        <div class="pre-event-desc">
            <p>
                Problem solving is one the essential skills both as individuals and organizations.
                Sharpening problem skills can help you immediately recognize the root cause of
                a problem and effectively create feasible solutions. In the VUCA (volatility,
                uncertainty, complexity, and ambiguity) era, problem solving became more crucial
                in the needs of effective solutions.
            </p>
        </div>
        <div class="topic-flow">
            @component('blocks.title')
                <h2>Main Activities</h2>
            @endcomponent
            <div class="flow-container">
                <div class="flow-card">
                    <h3>Registration</h3>
                    <p>
                        Register before June 20<sup>th</sup>, 2020 and follow the steps on the confirmation email. Fight Covid-19 by donating to Yayasan Indonesia Kuat through this event!
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>Online Seminar</h3>
                    <p>
                        The speaker will share the secret tips and tricks 
                        for you to nail the pitch. Learn this and that about 
                        pitching skill and master the techniques!
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>Q&A Session</h3>
                    <p>
                        Feed your curiosity and find out more about 
                        problem solving through direct discussion with 
                        the speaker!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pre-event-speakers temp1" id="speaker1">
        <div class="temp1">
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
        </div>
    </section>

    <section class="pre-event-speakers temp2" id="speaker2">
        <div class="temp2">
            <div class="showcase-header">
                @component('blocks.title')
                <h2>Meet The Speaker</h2>
                @endcomponent
            </div>
            <div class="showcase-body">
                <div class="showcase-image">
                    <img src={{URL::asset('assets/pre-event/speakerpe2.png')}}>
                </div>
                <div class="showcase-text">
                    <div class="speaker-name">
                        <h1>
                            Archie Anugrah
                        </h1>
                    </div>
                    <div class="speaker-title">
                        <h3>
                            Head of CEO Office -<span style="font-weight: 450"> PT Payfazz Teknologi Nusantara</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pre-event-speakers" id="speaker3">
        <div class="temp2">
            <div class="showcase-header">
                @component('blocks.title')
                <h2>Meet The Speaker</h2>
                @endcomponent
            </div>
            <div class="showcase-body">
                <div class="showcase-image">
                    <img src={{URL::asset('assets/pre-event/speakerpe3.png')}}>
                </div>
                <div class="showcase-text">
                    <div class="speaker-name">
                        <h1>
                            Melvin Sumapung
                        </h1>
                    </div>
                    <div class="speaker-title">
                        <h3>
                            CEO of <span style="font-weight: 450"> Justika</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pre-event-description"  id="desc2">
        <div class="description-header">
            @component('blocks.title')
                <h2>Who Should Join The Experience?</h2>
            @endcomponent
        </div>
        <div class="description-body">
            <div class="description-image">
                <img src="{{URL::asset('assets/pre-event/desc.png')}}">
            </div>
            <div class="description-text" id="desc2">
                <ul>
                    <li>Local business owners and members <span style="font-weight: 400">who want to keep sustain in the VUCA era.</span></li>
                    <li>Active organizations <span style="font-weight: 400">member in a dynamic environment. </span></li>
                    <li>Students at high school and universities <span style="font-weight: 400">in a competitive environment.</span></li>
                    <li>High enthusiast learner <span style="font-weight: 400">who wants to sharpen soft-skills.</span></li>
                </ul>
            </div>

        </div>
    </section>

    <section class="pre-event-description"  id="desc3">
        <div class="description-header">
            @component('blocks.title')
                <h2>Who Should Join The Experience?</h2>
            @endcomponent
        </div>
        <div class="description-body">
            <div class="description-image">
                <img src="{{URL::asset('assets/pre-event/desc.png')}}">
            </div>

            <div class="description-text">
                <ul>
                    <li>Local business owners and members <span style="font-weight: 400">who want to keep sustain in the VUCA era.</span></li>
                    <li>Active organizations <span style="font-weight: 400">member in a dynamic environment. </span></li>
                    <li>Students at high school and universities <span style="font-weight: 400">in a competitive environment.</span></li>
                    <li>High enthusiast learner <span style="font-weight: 400">who wants to sharpen soft-skills.</span></li>
                </ul>
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
        <div class="registration-container closed">
            <div class="registration-title">
                <h1>Registration Closed</h1>
                {{-- <h2>
                    Register<br>
                    <span class="color-secondary">
                        Pre Event 3
                    </span>
                </h2> --}}
            </div>
            {{-- <a class="button-primary preLink">
                Register Now
            </a> --}}
        </div>
    </section>

        @include('blocks.footer')
    </main>
@endsection