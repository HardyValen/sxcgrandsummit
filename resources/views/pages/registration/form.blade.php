@extends('template.main')

@section('title')
  Registration | 9th Grand Summit &ndash; Student&#x2715;CEOs
@endsection

@section('content')
  <main class='registration-container'>
    <section class="registration-hero"></section>
    <section class="registration-card">
      <div class="registration-navigation">
        <a href="{{URL::previous()}}">
          <img src="{{URL::asset("assets/registration/BackIcon.svg")}}">
        </a>
        <img src="{{URL::asset("assets/registration/MoreIcon-Outline.svg")}}">
      </div>

      <div class="registration-title">
        <img src="{{URL::asset('assets/logo/GrandSummit.svg')}}">
        <h1>REGISTRATION</h1>
      </div>

      <form action="" method="post">
        @csrf
        <div class="registration-content">
          <div class="registration-input">
            <input type="text" class="form-input" name="nama" id="nama" placeholder=' ' required/>
            <label class="text-label" for="nama">Full Name</label>
          </div>
          <div class="registration-radio-wrapper">
            <p class='radio-header'>Jenis Kelamin</p>
            <label>
                <span class='radio-description'>Laki-laki</span>
                <input type="radio" class="individual-radio" name="gender" value="Male" checked>
                <span class='radio-button'><span></span></span>
            </label>
            <label>
                <span class='radio-description'>Perempuan</span>
                <input type="radio" class="individual-radio" name="gender" value="Female">
                <span class='radio-button'><span></span></span>
            </label>
            <label>
                <span class='radio-description'>Lainnya</span>
                <input type="radio" class="individual-radio" name="gender" value="Others">
                <span class='radio-button'><span></span></span>
            </label>
        </div>
          <div class="registration-input">
            <input type="email" class="form-input" name="email" id="email" placeholder=' ' required/>
            <label class="text-label" for="email">Email</label>
          </div>
          <div class="registration-input">
            <input type="number" class="form-input display-inline-block" name="usia" id="usia" placeholder=' ' min="0" max="100" required/> 
            <label class="text-label" for="usia">Usia</label>
            <span class="paragraph">Tahun</span>
          </div>
          <div class="registration-input">
            <input type="text" class="form-input" name="line" id="line" placeholder=' ' required/>
            <label class="text-label" for="line">Line</label>
          </div>
          <div class="registration-input">
            <input type="text" class="form-input" name="univ" id="univ" placeholder=' ' required/>
            <label class="text-label" for="univ">Universitas</label>
          </div>
          <div class="registration-input">
            <input type="text" class="form-input" name="jurusan" id="jurusan" placeholder=' ' required/>
            <label class="text-label" for="jurusan">Jurusan</label>
          </div>
          <div class="registration-input">
            <input type="text" class="form-input" name="domisili" id="domisili" placeholder=' ' required/>
            <label class="text-label" for="domisili ">Domisili</label>
          </div>
          <div class="registration-input">
            <input type="submit" class='button-primary' value="Register">
          </div>
      </form>
      </div>
    </section>
  </main>
@endsection