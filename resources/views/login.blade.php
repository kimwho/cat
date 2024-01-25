

@extends('layoutform.master')
@section('contents')
<section class="login">
		<div class="login_box">
			<div class="left">

				<div class="contact">
					<form method="post" action="{{ route('login') }}">
          @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif

            @csrf
						<h3>SIGN IN</h3>
						<input type="text" name="name" placeholder="USERNAME">
						<input type="password" name="password" placeholder="PASSWORD">
            <p class="sign-up">Don't have an Account?<a href="{{ route('register') }}"> Sign Up</a></p>
						<button type = "submit" class="submit">Sign In</button>
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



