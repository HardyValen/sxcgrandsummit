@extends('template.main')

@section('title')
	Success | 9th Grand Summit &ndash; Students&#x2715;CEOs
@endsection

@section('content')
@include('blocks.sidebar')
<main class='registration-container'>
    <section class="registration-hero"></section>
    <section class="registration-card">
		<div class="registration-navigation">
			<a href="/pre-event">
			<img src="{{URL::asset("assets/registration/BackIcon.svg")}}">
			</a>
			{{-- <img src="{{URL::asset("assets/registration/MoreIcon-Outline.svg")}}"> --}}
		</div>

		<div class="registration-title">
			<img src="{{URL::asset('assets/logo/GrandSummit.svg')}}">
			<h3>Pre Event 2</h3>
			<h2>Registration Success</h2>
		</div>

		<div class="registration-success">
			<div class="registration-success-description">
				<p>
					Your registration for The Summmit of the 9th StudentsxCEOs Pre Event 2 has been recorded.
				</p>
				@if ($emailException)
					<p>
						But unfortunately, our system cannot send you an email automatically for the next step of registration to {{ $data->email }}, we're sorry for the 15 seconds inconvenience.
					</p>
					<p>
						Please contact our instagram at <a href="https://www.instagram.com/studentsxceosbdg/" >@sxcgrandsummit</a>
					</p>
				@else
					<p>
						We also have sent you the email for the next step of registration to {{ $data->email }}.
					</p>
					<p>
						If you have not received the email, <b>please check your spam inbox</b>. If you still can't find your email in 1x24 hours, please contact our instagram at @sxcgrandsummit
					</p>
				@endif
			</div>

			{{-- <hr style="background-color: #aaaaaa"> --}}

			{{-- <div class="registration-success-summary">
				<div class="summary-data-container">
					<div class="summary-data">
						<p class='summary-title'>To Complete The Registration, <b>you must pay minimum donation Rp. 20.000 to these accounts:</b> </p>
						<p class='summary-date'>{{ date('l, d F Y') }}</p>
					</div>
                    <!--<div class="summary-data">
						<p class='summary-title'>TEAM ID</p>
						<p class='summary-date'>{{ $data->id }}</p>
					</div> -->
					<div class="summary-data">
						<p class='summary-title'>PAYMENT</p>
						<p class='summary-date'>
							Jenius 90012636107 Faiza Nurkholida<br>
							BCA 5221166435 Chyntia Angelina<br>
							BNI  670350698 Zahra Fulli Fauza<br>
						</p>
					</div>
					<!-- <div class="summary-data">
						<p class='summary-title'>PAYMENT RECEIPT FORM</p>
						<p class='summary-date'>
							<a target="_blank" href="http://bit.ly/sxcbccpayment" style="color: blue">http://bit.ly/sxcbccpayment</a>
						</p>
					</div> -->
				</div>
			</div> --}}

			<hr style="background-color: #aaaaaa">

			<div class="registration-success-link">
				<a href="/landing" class='button-primary'>LANDING PAGE</a>
			</div>
		</div>
    </section>
  </main>
@endsection
