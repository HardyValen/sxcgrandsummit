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
                            This session aims to provide insights and materials for the participants and generalize basic understanding regarding how to resolve each SDGs issue, which will be conducted by business experts and leaders. The topics during this session are "Problem Discovery" to help them find the root causes using a specific framework and "Applicable Solutions" to generate, evaluate, choose, and implement solutions.
                        </p>
                    </div>
                    <div class="activity-image image-activity-1"></div>
                </div>
                
                <div class= "activity-block">
                    <div class="activity-image image-activity-2"></div>
                    <div class= "activity-description">
                        <div class="activity-title">
                            Talk Shows Session
                        </div>
                        <p>
                            The Talk Shows provide speakers from different NGOs who will be sharing their insights on the growing issues in the implementation of SDGs and also a Question and Answer session. This session aims to give the participants direct information from the NGOs regarding the issues that they will resolve within their chambers and generate the appropriate resolutions.
                        </p>
                    </div>
                </div>
                
                <div class= "activity-block">
                    <div class= "activity-description">
                        <div class="activity-title">
                            Chamber Session
                        </div>
                        <p>
                            In The Summit, the Discussion session is where the participants can interact, collaborate, and cooperate to find a solution to the issue of the chambers. The discussions will be lead by conference leaders who will act as judges for the chambers. They will create the study guides, guides the discussions, and grade each participant from their performance and essay. From the             discussions, we expect a solution to be presented in the end in front of the NGOs.
                        </p>
                    </div>
                    <div class="activity-image image-activity-3"></div>
                </div>
                
                <div class= "activity-block">
                    <div class="activity-image image-activity-4"></div>
                    <div class= "activity-description">
                        <div class="activity-title">
                            Social Night & Gala Dinner
                        </div>
                        <p>
                            In this session, we want to give a chance for participants to network with each other. We also want to provide participants with a positive impression and a memorable experience of The Summit. Hence, Social Night is designed to be an event where participants can enjoy and interact with each other informally. The event will be closed by Gala Dinner that consists of a final presentation from each chamber and also awarding.
                        </p>
                    </div>
                </div>
            </div>
            </section>
        @include('blocks.schedule.summit')
        @include('blocks.footer')
    </main>
@endsection