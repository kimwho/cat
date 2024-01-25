

@extends('layoutform.master')
@section('contents')
<section class="login">
		<div class="login_box">
			<div class="left">

				<div class="contact">
					<form method="post" action="{{ route('register') }}">

            @csrf
						<h3>Register</h3>
						<input type="text" name="name" placeholder="Username">
						<input type="text" name="email" placeholder="Email">
						<input type="password" name="password" placeholder="Password">
						<p class="sign-up">Don't have an Account?<a href="{{ route('login') }}"> Sign In</a></p>
						<button type = "submit" class="submit">Sign Up</button>
					</form>
				</div>
			</div>
			<div class="right">
				<div class="right-text">

				</div>

			</div>
		</div>
	</section>

  @stop



