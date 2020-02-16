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
                Pre Event is a series of events that are conducted and aimed to introduce the Grand Summit. Within these activities, we want to provide our target audience and Grand Summit participants the opportunity to gain various insights from speakers who are experts in their fields. The theme of the Pre Events itself will correlate with the big theme of The Summit, which revolves around "The Applications of SDGs in Building Sustainable Businesses."
                </p>
            </div>
        </section>

        <section class="pre-event-topics">
            <div class="header-line"></div>
            <h2>Pre Event 1:</h2>

            <div class="flow-container">
                <div class="flow-card">
                    <h3>Elimination Phase</h3>
                    <p>
                        Eligible Registered Participants will be distributed the Company Business Case and expected to solve that problem in forms of business paper.
                    </p>
                </div>
                <div class="flow-connector"></div>
                <div class="flow-card">
                    <h3>Final Competition</h3>
                    <p>
                        The best 10 teams will be chosen and invited to the Summit Main event venue and present their ideas to the professionals and company representatives.
                    </p>
                </div>
            </div>
        </section>

        @include('blocks.schedule.preEvent')
        @include('blocks.footer')
    </main>
@endsection