@extends('template.main')

@section('title')
    9th Grand Summit &ndash; Students&#x2715;CEOs
@endsection

@section('content')

    @include("blocks.sidebar")
    <main>
        @include("blocks.navbar")

        <section class="summit-hero">
            <h1>Main Event</h1>
        </section>

        <section class="summit-description">
            <div class="description-container">
                <div class="header-line"></div>
                <p>
                    The 9th Grand Summit will exhibit a conference as the peak event called The Summit. Invited experts to share their insights and experiences in specific fields to empower students. This event aims to train students to be potential entrepreneurs that have high motivation and think critically. The participants will get a chance to network with other students from all over Indonesia. There will be coaching sessions to prepare them for discussions that lead by experts from NGOs in five chambers with five different SDGs issues as the main topic. Each participant will be assigned in a chosen chamber and are expected to generate suitable and feasible solutions towards the problem. In the end, each chamber will get a chance to present their solutions in front of NGOs who will consider whether their solutions can be implemented. We aim to give the participants a platform to go beyond and also encourage diverse forms of collaboration and innovation by providing room for discussions.
                </p>
            </div>
        </section>

        <section class="summit-theme">
            <div class="theme-container"?>
                <h2>
                    Theme:
                </h2>
                <h3>
                    "The Application of SDGs in Building Sustainable Businesses"
                </h3>
                <p>
                    Discussing how a business can sustain, the theme objectively gives an impact to the company, stakeholders, society, and environment according to the United Nations Sustainable Development Goals from the NGOs’ perspective. We want the participants to be able to create feasible solutions that can be implemented by the NGOs. We also want to build a continuous discussion of SDGs in the field of business, not only as a way for students to develop their interest in sustainable businesses, but most importantly, to gain insights, experiences, and relations.
                </p>
            </div>
        </section>

        
        @include('blocks.schedule.summit')
        @include('blocks.footer')
    </main>
@endsection