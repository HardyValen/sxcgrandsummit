@extends('template.main')

@section('title')
	Success | 9th Grand Summit &ndash; Students&#x2715;CEOs
@endsection

@section('content')
  <main class='registration-container'>
    <section class="registration-hero"></section>
    <section class="registration-card">
		<div class="registration-navigation">
			<a href="/business-case/register">
			<img src="{{URL::asset("assets/registration/BackIcon.svg")}}">
			</a>
			<img src="{{URL::asset("assets/registration/MoreIcon-Outline.svg")}}">
		</div>

		<div class="registration-title">
			<img src="{{URL::asset('assets/logo/GrandSummit.svg')}}">
			<h1>SUCCESSFULLY REGISTERED</h1>
			<h2>(EARLY BIRD)</h2>
		</div>

		<div class="registration-success">
			<div class="registration-success-description">
				<p style='text-align: center'>
					<big><b>Dear Team "{{$data->team_name}}",</b></big><br>
					Your registration for the 9th StudentsxCEOs Grand Summit Business Case Competition has been recorded.
				</p>
				<p style="text-align: center">
					We also have sent you the email for the next step of registration to {{ $data->email }}.
				</p>
				<p style="text-align: center">
				    If you have not received the email, <b>please check your spam inbox</b>. If you still can't find your email in 1x24 hours, please contact Laura (081260000412/line: laurahtgaol) or Pauline (087780770588/line: serafinpauline)
				</p>
				<p style="text-align: center">
					We also have sent you the email for the next step of registration to {{ $data->email }}.
				</p>
			</div>

			<hr style="background-color: #aaaaaa">

			<div class="registration-success-summary">
				<div class="summary-data-container">
					<div class="summary-data">
						<p class='summary-title'>REGISTER DATE</p>
						<p class='summary-date'>{{ date('l, d F Y') }}</p>
					</div>
					<div class="summary-data">
						<p class='summary-title'>TEAM ID</p>
						<p class='summary-date'>{{ $data->id }}</p>
					</div>
					<div class="summary-data">
						<p class='summary-title'>PAYMENT</p>
						<p class='summary-date'>
							BCA 5221166435 Chyntia Angelina<br>
							BNI  670350698 Zahra Fulli Fauza<br>
						</p>
					</div>
					<div class="summary-data">
						<p class='summary-title'>PAYMENT RECEIPT FORM</p>
						<p class='summary-date'>
							<a target="_blank" href="http://bit.ly/sxcbccpayment" style="color: blue">http://bit.ly/sxcbccpayment</a>
						</p>
					</div>
				</div>
			</div>

			<hr style="background-color: #aaaaaa">

			<div class="registration-success-link">
				<a href="/landing" class='button-primary'>LANDING PAGE</a>
			</div>
		</div>
    </section>
  </main>
@endsection
