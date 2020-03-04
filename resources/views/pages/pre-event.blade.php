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
            <h2> Sharpening Critical Thinking Skills & Build A Better Indonesia Through SDGs </h2>
            <h3>March 21<sup>st</sup></h3>
        </div>
        <div class="topic-flow">
            <div class="flow-container">
                <div class="flow-card">
                    <h3>Talk Show</h3>
                    <p>
                        Discussing with invited NGOs about 5 SDGs issues that will also be highlighted in The Summit which are; Climate Action, Responsible Consumption and Production, Decent Work and Economic Growth, Sustainable Cities and Communities, and Gender Equality.
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>School of Life: <br>Sharpening Our Critical Thinking</h3>
                    <p>
                        Learning about critical thinking and problem-solving analysis directly from the invited experts before the forum group discussion session.
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                <h3>Focused Group Discussion</h3>
                <p>
                    The participants will be divided into several groups and will get a particular case regarding one of the SDGs that has been discussed. They will solve the issues in 30-40 minutes and then present their solutions at the end of the session.                </p>
                </div>
            </div>
        </div>
    </section>
            
        @include('blocks.schedule.preEvent')
        @include('blocks.footer')
    </main>
@endsection