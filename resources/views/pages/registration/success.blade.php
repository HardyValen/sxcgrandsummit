@extends('template.main')

@section('title')
	Success | 9th Grand Summit &ndash; Student&#x2715;CEOs
@endsection

@section('content')
  <main class='registration-container'>
    <section class="registration-hero"></section>
    <section class="registration-card">
		<div class="registration-navigation">
			<a href="/register">
			<img src="{{URL::asset("assets/registration/BackIcon.svg")}}">
			</a>
			<img src="{{URL::asset("assets/registration/MoreIcon-Outline.svg")}}">
		</div>

		<div class="registration-title">
			<img src="{{URL::asset('assets/logo/GrandSummit.svg')}}">
			<h1>SUCCESS</h1>
		</div>

		<div class="registration-success">
			<div class="registration-success-description">
				<p style='text-align: center'>
					<big><b>Dear Customer,</b></big><br>
					Your registration has been recorded successfully
				</p>
			</div>

			<hr style="background-color: #aaaaaa">

			<div class="registration-success-summary">
				<p class='summary-title'>SUMMARY</p>
				<p class='summary-date'>{{ date('l, d F Y') }}</p>

				<div class="summary-data-container">
					<div class="summary-data">
						<p class='data-title'>Name</p>
						<p class='data-value'>{{$data->nama}}</p>
					</div>
		
					<div class="summary-data">
						<p class='data-title'>Gender</p>
						<p class='data-value'>{{$data->gender}}</p>
					</div>
		
					<div class="summary-data">
						<p class='data-title'>Email</p>
						<p class='data-value'>{{$data->email}}</p>
					</div>
		
					<div class="summary-data">
						<p class='data-title'>Age</p>
						<p class='data-value'>{{$data->usia}}</p>
					</div>

					<div class="summary-data">
						<p class='data-title'>Line</p>
						<p class='data-value'>{{$data->line}}</p>
					</div>

					<div class="summary-data">
						<p class='data-title'>University</p>
						<p class='data-value'>{{$data->univ}}</p>
					</div>

					<div class="summary-data">
						<p class='data-title'>Major</p>
						<p class='data-value'>{{$data->jurusan}}</p>
					</div>

					<div class="summary-data">
						<p class='data-title'>Domicile</p>
						<p class='data-value'>{{$data->domisili}}</p>
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