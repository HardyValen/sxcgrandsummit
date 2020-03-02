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
        <h3>Pre Event 2</h3>
        <h1>REGISTRATION</h1>
      </div>

      <hr style="background-color: #aaaaaa">

      <form action="" method="post">
        @csrf
        <div class="registration-content">
      

          <div class="registration-input-group">
            <p class="group-header">YOUR INFO &mdash;</p>
            
            <div class="registration-input">
              <input type="text" class="form-input" name="name" id="name" placeholder=' ' required/>
              <label class="text-label" for="name">Full Name</label>
            </div>

            <div class="registration-input-row">
              <div class="registration-input-col">
                <div class="registration-radio-wrapper">
                  <p class='radio-header'>Gender</p>
                  <label>
                      <span class='radio-description'>Male</span>
                      <input type="radio" class="individual-radio" name="gender" value="Male" checked>
                      <span class='radio-button'><span></span></span>
                  </label>
                  <label>
                      <span class='radio-description'>Female</span>
                      <input type="radio" class="individual-radio" name="gender" value="Female">
                      <span class='radio-button'><span></span></span>
                  </label>
                  <label>
                      <span class='radio-description'>Other</span>
                      <input type="radio" class="individual-radio" name="gender" value="Other">
                      <span class='radio-button'><span></span></span>
                  </label>
                </div>
              </div>
            </div>

            <div class="registration-input">
              <input type="email" class="form-input" name="email" id="email" placeholder=' ' required/>
              <label class="text-label" for="email">Email</label>
            </div>

            <div class="registration-input">
              <input type="text" class="form-input" name="phone" id="phone" placeholder=' ' required/>
              <label class="text-label" for="phone">Phone Number</label>
            </div>

            <div class="registration-input">
              <input type="text" class="form-input" name="major" id="major" placeholder=' ' required/>
              <label class="text-label" for="major">Major</label>
            </div>

            <div class="registration-input">
              <input type="text" class="form-input" name="university" id="university" placeholder=' ' required/>
              <label class="text-label" for="university">University</label>
            </div>

            <div class="registration-input">
              <input type="text" class="form-input" name="hometown" id="hometown" placeholder=' ' required/>
              <label class="text-label" for="hometown">Home Town</label>
            </div>

          </div>

        <hr style="background-color: #aaaaaa">

        <div class="registration-submit flex-justify-center">
          <div class="registration-input">
            <input type="submit" class='button-primary' value="Register">
          </div>
        </div>

      </form>
    </section>
  </main>
@endsection