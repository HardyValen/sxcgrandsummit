@extends('template.main')

@section('title')
  Registration | 9th Grand Summit &ndash; Students&#x2715;CEOs
@endsection


@section('content')
  @include('blocks.sidebar')
  <main class='registration-container'>
    <section class="registration-hero"></section>
    <section class="registration-card">
      <div class="registration-navigation">
        <a href="{{URL::previous()}}">
          <img src="{{URL::asset("assets/registration/BackIcon.svg")}}">
        </a>
        <a onclick="showsidebar()">
          <img src="{{URL::asset("assets/registration/MoreIcon-Outline.svg")}}">
        </a>
      </div>

      <div class="registration-title" style="margin-bottom: 1rem">
        <img src="{{URL::asset('assets/logo/GrandSummit.svg')}}">
        <h3>Summit</h3>
        <h1>REGISTRATION</h1>
      </div>

      <hr style="background-color: #aaaaaa">

      <form action="" method="post">
        @csrf
        <input type="hidden" name="members" id="members" value=1>

        <div class="registration-content">
          <div class="registration-input-group">
            <p class="group-header">APPLICANT 1</p>
            
            <div class="registration-input">
              <input type="text" class="form-input" name="name1" id="name1" placeholder=' ' required/>
              <label class="text-label" for="name1">Applicant Name</label>
            </div>

            <div class="registration-input">
              <input type="text" class="form-input" name="team_name" id="team_name" placeholder=' ' required/>
              <label class="text-label" for="team_name">Team Name</label>
            </div>

            <div class="registration-input-row">
              <div class="registration-input-col">
                <div class="registration-radio-wrapper">
                  <p class='radio-header'>Gender</p>
                  <label>
                      <span class='radio-description'>Male</span>
                      <input type="radio" class="individual-radio" name="gender1" value="Male" checked>
                      <span class='radio-button'><span></span></span>
                  </label>
                  <label>
                      <span class='radio-description'>Female</span>
                      <input type="radio" class="individual-radio" name="gender1" value="Female">
                      <span class='radio-button'><span></span></span>
                  </label>
                </div>
              </div>
              <div class="registration-input-col flex-justify-center">
                <div class="registration-input">
                  <input type="number" class="form-input display-inline-block" name="age1" id="age1" placeholder=' ' min="0" max="100" required/> 
                  <label class="text-label" for="age1">Age</label>
                  <span class="paragraph">Years Old</span>
                </div>
              </div>
            </div>

            <div class="registration-input-row">
              <div class="registration-input-col">
                <div class="registration-radio-wrapper">
                  <p class='radio-header'>Chamber Selection</p>
                  <label>
                      <span class='radio-description'>Quality Education</span>
                      <input type="radio" class="individual-radio" name="ch_selection1" value="QED" checked>
                      <span class='radio-button'><span></span></span>
                  </label>
                  <label>
                      <span class='radio-description'>Decent Work and Economic Growth</span>
                      <input type="radio" class="individual-radio" name="ch_selection1" value="DWAndEG">
                      <span class='radio-button'><span></span></span>
                  </label>
                  <label>
                      <span class='radio-description'>Climate Action</span>
                      <input type="radio" class="individual-radio" name="ch_selection1" value="CA">
                      <span class='radio-button'><span></span></span>
                  </label>
                </div>
              </div>
            </div>

            <div class="registration-input">
              <input type="email" class="form-input" name="email1" id="email1" placeholder=' ' required/>
              <label class="text-label" for="email1">Email</label>
            </div>

            <div class="registration-input-row">
              <div class="registration-input-col">
                <div class="registration-input">
                  <input type="text" class="form-input" name="line1" id="line1" placeholder=' ' required/>
                  <label class="text-label" for="line1">Line</label>
                </div>
              </div>
              <div class="registration-input-col">
                <div class="registration-input">
                  <input type="text" class="form-input" name="phone1" id="phone1" placeholder=' ' required/>
                  <label class="text-label" for="phone1">Phone Number</label>
                </div>
              </div>
            </div>

            <div class="registration-input">
              <input type="text" class="form-input" name="major1" id="major1" placeholder=' ' required/>
              <label class="text-label" for="major1">Major</label>
            </div>

            <div class="registration-input">
              <input type="text" class="form-input" name="university1" id="university1" placeholder=' ' required/>
              <label class="text-label" for="university1">University</label>
            </div>

            <div class="registration-input-row">
              <div class="registration-input-col">
                <div class="registration-input">
                  <input type="text" class="form-input" name="batch1" id="batch1" placeholder=' ' required/>
                  <label class="text-label" for="batch1">Batch / Entry Year</label>
                </div>
              </div>
              <div class="registration-input-col">
                <div class="registration-input">
                  <input type="text" class="form-input" name="KTM1" id="KTM1" placeholder=' ' required/>
                  <label class="text-label" for="KTM1">Student ID Number</label>
                </div>
              </div>
            </div>

          </div>
          <hr style="background-color: #aaaaaa">
        </div>

        <div class="registration-submit flex-justify-center">
          <a class="button-black-transparent" id="increment" onclick="increment()">ADD APPLICANT</a>
          <a class="button-black-transparent" id="decrement" onclick="decrement()">REMOVE APPLICANT</a>
        </div>
        
        <div class="registration-submit flex-justify-center">
          <div class="registration-input">
            <input type="submit" class='button-primary' value="Register">
          </div>
        </div>
        
      </form>
    </section>
  </main>
@endsection