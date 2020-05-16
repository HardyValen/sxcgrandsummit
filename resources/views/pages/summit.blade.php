@extends('template.main')

@section('title')
    9th Grand Summit &ndash; Students&#x2715;CEOs
@endsection

@section('content')

    @include("blocks.sidebar")
    <main>
        @include("blocks.navbar")

        <section class="summit-hero">
            <div class="hero-text">
                <div class="hero-logo">
                    <img src="{{URL::asset('assets/logo/GrandSummitWhite.svg')}}" alt="SXCGS9">
                </div>
                <div class="hero-title">

                </div>
                <div class="hero-description">

                </div>
            </div>
            <div class="hero-bottom">
                <div class="hero-buttons">
                    
                </div>
                <div class="hero-schedule">

                </div>
            </div>
        </section>

        <section class="summit-description">
            <div class="description-container">
                <div class="header-line"></div>
                <p>
                    
                    The 9th Grand Summit will exhibit a conference as the peak event called The Summit. Invited experts to share their insights and experiences in specific fields to empower students. This event aims to train students to be potential entrepreneurs that have high motivation and think critically. The participants will get a chance to network with other students from all over Indonesia.
                    <br><br>There will be coaching sessions to prepare them for discussions that lead by experts from NGOs in five chambers with five different SDGs issues as the main topic. Each participant will be assigned in a chosen chamber and are expected to generate suitable and feasible solutions towards the problem.
                    <br><br>In the end, each chamber will get a chance to present their solutions in front of NGOs who will consider whether their solutions can be implemented. We aim to give the participants a platform to go beyond and also encourage diverse forms of collaboration and innovation by providing room for discussions.
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
                    Discussing about sustainable businesses and environmental matter, the theme’s objective is to give a real impact to the company, stakeholders, society, and environment according to the United Nations Sustainable Development Goals from the NGOs’ perspective. We encourage the participants to take part in caring about our social and environmental matter by building a continuous discussion and creating feasible solutions that can be implemented by the NGOs.
                </p>
            </div>
        </section>

        <section class="summit-activities">
            <div class= "activity-container">
                <h1>
                    Main Activities:
                </h1>
                <div class="activity-block">
                    <div class= "activity-description">
                        <div class="activity-title">
                            Coaching Session
                        </div>
                        <p>
                            This session will be conducted by business experts and leaders to provide insights and generalize basic understanding regarding how to resolve each SDGs issue. The topics are "Problem Discovery" that will help participants find the root causes using a specific framework and "Applicable Solutions" to generate, evaluate, choose, and implement solutions.
                        </p>
                    </div>
                    <div class="activity-image img-coaching"></div>
                </div>
                
                <div class= "activity-block">
                    <div class="activity-image img-talkshow"></div>
                    <div class= "activity-description">
                        <div class="activity-title">
                            Talk Shows Session
                        </div>
                        <p>
                            Providing speakers from different NGOs that will share insights on the growing issues of SDGs to give the participants specific information of the issues that will be solved within their chambers.
                        </p>
                    </div>
                </div>
                
                <div class= "activity-block">
                    <div class= "activity-description">
                        <div class="activity-title">
                            Chamber Session
                        </div>
                        <p>
                            The perfect time to interact, discuss, collaborate, and cooperate to find a solution for each chamber’s issue. The conference leaders will lead the discussion, create the study guides, and assess each participant from their performance and essay. From the discussions, we expect a feasible solution to be presented in the end in front of the NGOs.
                        </p>
                    </div>
                    <div class="activity-image img-chamber"></div>
                </div>
                
                <div class= "activity-block">
                    <div class="activity-image img-gala"></div>
                    <div class= "activity-description">
                        <div class="activity-title">
                            Social Night & Gala Dinner
                        </div>
                        <p>
                            A big chance for participants to network, create positive impressions and a memorable experience of The Summit. Social Night is a platform where participants can enjoy and interact with each other informally and will be closed by Gala Dinner.
                        </p>
                    </div>
                </div>
            </div>
            </section>
        @include('blocks.schedule.summit')
        @include('blocks.footer')
    </main>
@endsection