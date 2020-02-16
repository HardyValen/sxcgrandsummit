@extends('template.main')

@section('title')
  Registration | 9th Grand Summit &ndash; Students&#x2715;CEOs
@endsection

@php
  $i = 1
@endphp

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
        <div class="registration-content">

          <div class="registration-input-group">
            <p class="group-header">INDIVIDUAL/TEAM LEADER &mdash;</p>
            
            <div class="registration-input">
              <input type="text" class="form-input" name="name1" id="name1" placeholder=' ' required/>
              <label class="text-label" for="name1">Leader Name</label>
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
                  <label>
                      <span class='radio-description'>Other</span>
                      <input type="radio" class="individual-radio" name="gender1" value="Other">
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

            <div class="registration-radio-wrapper">
                  <p class='radio-header'>Team members</p>
                  <label>
                      <span class='radio-description'>Individual</span>
                      <input type="radio" class="individual-radio" name="teamenum" value="Indv" checked>
                      <span class='radio-button'><span></span></span>
                  </label>
                  <label>
                      <span class='radio-description'>One</span>
                      <input type="radio" class="individual-radio" name="teamenum" value="One">
                      <span class='radio-button'><span></span></span>
                  </label>
                  <label>
                      <span class='radio-description'>Two</span>
                      <input type="radio" class="individual-radio" name="teamenum" value="Two">
                      <span class='radio-button'><span></span></span>
                  </label>
                </div>
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
                  <label class="text-label" for="KTM1">KTM / NIM / ID Number</label>
                </div>
              </div>
            </div>

          </div>



          <div class="registration-input-group">
            <p class="group-header">TEAM MEMBER 1 (IF ANY)&mdash;</p>
            
            <div class="registration-input">
              <input type="text" class="form-input" name="name2" id="name2" placeholder=' '/>
              <label class="text-label" for="name2">Member Name</label>
            </div>

            <div class="registration-input-row">
              <div class="registration-input-col">
                <div class="registration-radio-wrapper">
                  <p class='radio-header'>Gender</p>
                  <label>
                      <span class='radio-description'>Male</span>
                      <input type="radio" class="individual-radio" name="gender2" value="Male">
                      <span class='radio-button'><span></span></span>
                  </label>
                  <label>
                      <span class='radio-description'>Female</span>
                      <input type="radio" class="individual-radio" name="gender2" value="Female">
                      <span class='radio-button'><span></span></span>
                  </label>
                  <label>
                      <span class='radio-description'>Other</span>
                      <input type="radio" class="individual-radio" name="gender2" value="Other">
                      <span class='radio-button'><span></span></span>
                  </label>
                </div>
              </div>
              <div class="registration-input-col flex-justify-center">
                <div class="registration-input">
                  <input type="number" class="form-input display-inline-block" name="age2" id="age2" placeholder=' ' min="0" max="100"/> 
                  <label class="text-label" for="age2">Age</label>
                  <span class="paragraph">Years Old</span>
                </div>
              </div>
            </div>

            <div class="registration-input">
              <input type="email" class="form-input" name="email2" id="email2" placeholder=' '/>
              <label class="text-label" for="email2">Email</label>
            </div>

            <div class="registration-input-row">
              <div class="registration-input-col">
                <div class="registration-input">
                  <input type="text" class="form-input" name="line2" id="line2" placeholder=' '/>
                  <label class="text-label" for="line2">Line</label>
                </div>
              </div>
              <div class="registration-input-col">
                <div class="registration-input">
                  <input type="text" class="form-input" name="phone2" id="phone2" placeholder=' '/>
                  <label class="text-label" for="phone2">Phone Number</label>
                </div>
              </div>
            </div>

            <div class="registration-input">
              <input type="text" class="form-input" name="major2" id="major2" placeholder=' '/>
              <label class="text-label" for="major2">Major</label>
            </div>

            <div class="registration-input-row">
              <div class="registration-input-col">
                <div class="registration-input">
                  <input type="text" class="form-input" name="batch2" id="batch2" placeholder=' '/>
                  <label class="text-label" for="batch2">Batch / Entry Year</label>
                </div>
              </div>
              <div class="registration-input-col">
                <div class="registration-input">
                  <input type="text" class="form-input" name="KTM2" id="KTM2" placeholder=' '/>
                  <label class="text-label" for="KTM2">KTM / NIM / ID Number</label>
                </div>
              </div>
            </div>

          </div>



          <div class="registration-input-group">
            <p class="group-header">TEAM MEMBER 2 (IF ANY) &mdash;</p>
            
            <div class="registration-input">
              <input type="text" class="form-input" name="name3" id="name3" placeholder=' '/>
              <label class="text-label" for="name3">Member Name</label>
            </div>

            <div class="registration-input-row">
              <div class="registration-input-col">
                <div class="registration-radio-wrapper">
                  <p class='radio-header'>Gender</p>
                  <label>
                      <span class='radio-description'>Male</span>
                      <input type="radio" class="individual-radio" name="gender3" value="Male">
                      <span class='radio-button'><span></span></span>
                  </label>
                  <label>
                      <span class='radio-description'>Female</span>
                      <input type="radio" class="individual-radio" name="gender3" value="Female">
                      <span class='radio-button'><span></span></span>
                  </label>
                  <label>
                      <span class='radio-description'>Other</span>
                      <input type="radio" class="individual-radio" name="gender3" value="Other">
                      <span class='radio-button'><span></span></span>
                  </label>
                </div>
              </div>
              <div class="registration-input-col flex-justify-center">
                <div class="registration-input">
                  <input type="number" class="form-input display-inline-block" name="age3" id="age3" placeholder=' ' min="0" max="100"/> 
                  <label class="text-label" for="age3">Age</label>
                  <span class="paragraph">Years Old</span>
                </div>
              </div>
            </div>

            <div class="registration-input">
              <input type="email" class="form-input" name="email3" id="email3" placeholder=' '/>
              <label class="text-label" for="email3">Email</label>
            </div>

            <div class="registration-input-row">
              <div class="registration-input-col">
                <div class="registration-input">
                  <input type="text" class="form-input" name="line3" id="line3" placeholder=' '/>
                  <label class="text-label" for="line3">Line</label>
                </div>
              </div>
              <div class="registration-input-col">
                <div class="registration-input">
                  <input type="text" class="form-input" name="phone3" id="phone3" placeholder=' '/>
                  <label class="text-label" for="phone3">Phone Number</label>
                </div>
              </div>
            </div>

            <div class="registration-input">
              <input type="text" class="form-input" name="major3" id="major3" placeholder=' '/>
              <label class="text-label" for="major3">Major</label>
            </div>

            <div class="registration-input-row">
              <div class="registration-input-col">
                <div class="registration-input">
                  <input type="text" class="form-input" name="batch3" id="batch3" placeholder=' '/>
                  <label class="text-label" for="batch3">Batch / Entry Year</label>
                </div>
              </div>
              <div class="registration-input-col">
                <div class="registration-input">
                  <input type="text" class="form-input" name="KTM3" id="KTM3" placeholder=' '/>
                  <label class="text-label" for="KTM3">KTM / NIM / ID Number</label>
                </div>
              </div>
            </div>

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