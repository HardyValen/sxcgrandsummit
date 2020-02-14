@extends('template.main')

@section('title')
    9th Grand Summit &ndash; Students&#x2715;CEOs
@endsection

@section('content')

    @include("blocks.sidebar")
    <main>
        @include("blocks.navbar")

        <section class="business-case-hero">
            <h1>Business Case Competition</h1>
        </section>

        <section class="business-case-description">
            <div class="description-container">
                <div class="header-line"></div>
                <h2>A Brief  Description:</h2>
                <p>
                    Business Case Competition is a business based problem-solving competition. Through this program, teams must identify the most prominent issues faced by the company and develop a strategy to provide a solution to help companies achieve their goals. They are expected to solve the problem in forms of paper. Winning strategies include being detail-oriented, creative, and business acumen when presenting recommendations.
                </p>
            </div>
            <div class="description-assets">
                <img src="{{URL::asset('assets/business-case/desc-asset.svg')}}">
            </div>
        </section>

        <section class="business-case-flow">
            <div class="header-line"></div>
            <h2>The Flow of the Competition:</h2>

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
        
        @include('blocks.footer')
    </main>
@endsection