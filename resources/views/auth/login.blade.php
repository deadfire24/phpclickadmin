@extends("layouts.guest")

@section("content")
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
	<div class="row align-items-center g-lg-5 py-5" style="margin-top: 12%">
		<div class="col-lg-7 text-center text-lg-start">
			<h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero sign-up form</h1>
			<p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
		</div>
		<div class="col-md-10 mx-auto col-lg-5">
			<form method="post" class="p-4 p-md-5 border rounded-3 bg-light">
				<div class="form-floating mb-3">
					<input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
					<label for="floatingInput">Username</label>
				</div>
				<div class="form-floating mb-3">
					<input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
					<label for="floatingPassword">Password</label>
				</div>
				@csrf
				<button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
			</form>
		</div>
	</div>
</div>
@endsection