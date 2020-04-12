@extends('template.main')

@section('title')
    9th Grand Summit &ndash; Students&#x2715;CEOs
@endsection

@section('content')

    @include("blocks.sidebar")
    <main>
        @include("blocks.navbar")

        <section class="pre-event-hero">
            <h1>Pre Event</h1>
            <a href="/landing#registration" class="button-primary" id="navRegist">REGISTER NOW</a>
        </section>

    <section class="pre-event-description">
        <div class="description-container">
            <div class="header-line"></div>
            <p>
            A series of events that are conducted to introduce and build awareness of the Grand Summit. We want to provide the opportunity to gain various insights from expert speakers and mini-workshop sessions."
            </p>
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
            
        @include('blocks.schedule.preEvent')
        @include('blocks.footer')
    </main>
@endsection