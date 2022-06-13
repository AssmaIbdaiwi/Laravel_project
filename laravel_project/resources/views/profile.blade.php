@extends('master')
@section('content')

<br><br>
@include('tabs')

<div class="container">
	<div class="row gutters">
		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12" style="margin: 8% 0">
			<div class="card h-100">
				<div class="card-body">
					<div class="account-settings">
						<div class="user-profile">
							<div class="user-avatar">
								<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
							</div>
							<h5 class="user-name">{{ Auth::user()->name }}</h5>
							<h6 class="user-email">@foreach($data as $users) {{ $users->email}} @endforeach</h6>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12" style="margin: 8% 0">
			<div class="card h-100">
				<div class="card-body">
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<h6 class="mb-2" style="color:#51B7C6">Personal Details</h6>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<form method="POST" action="{{route('profile.update',Auth::user()->id)}}">

								@csrf
								@method('PUT')
								<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group">
									<label for="fullName">Full Name</label>
									<input name="user_name" type="text" value="{{ Auth::user()->name }}" class="form-control" id="fullName">
								</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="eMail">Email</label>
								<input type="email" @foreach($data as $users) value="{{ $users->email}}" @endforeach class="form-control" id="eMail" name="user_email" disable>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="text" value="{{$data[0]->phone}}" class="form-control" id="phone" name="user_mobile">
							</div>
						</div>
				
				
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="Street">Address</label>
								<input type="text" class="form-control" id="Street" placeholder="Enter Street"
								value="{{$data[0]->user_address}}"	name="user_address">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="ciTy">Password</label>
								<input type="password" class="form-control" id="ciTy" placeholder="Enter City"
								value="{{$data[0]->password}}"	name="password">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="zIp">image</label>
								<input type="text" value="{{$data[0]->user_image}}" class="form-control" id="zIp" placeholder="Zip Code"
									name="user_image">
							</div>
						</div>
					</div>
		
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="text-right">
								<button type="submit" id="submit" name="submit" class="btn"
									style="background-color:#51B7C6">Save</button>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div> <br><br>

<style type="text/css">
	body {
		margin: 0;
		padding-top: 40px;
		color: #2e323c;
		background: #f5f6fa;
		position: relative;
		height: 100%;
	}

	.account-settings .user-profile {
		margin: 0 0 1rem 0;
		padding-bottom: 1rem;
		text-align: center;
	}

	.account-settings .user-profile .user-avatar {
		margin: 0 0 1rem 0;
	}

	.account-settings .user-profile .user-avatar img {
		width: 90px;
		height: 90px;
		-webkit-border-radius: 100px;
		-moz-border-radius: 100px;
		border-radius: 100px;
	}

	.account-settings .user-profile h5.user-name {
		margin: 0 0 0.5rem 0;
	}

	.account-settings .user-profile h6.user-email {
		margin: 0;
		font-size: 0.8rem;
		font-weight: 400;
		color: #9fa8b9;
	}

	.account-settings .about {
		margin: 2rem 0 0 0;
		text-align: center;
	}

	.account-settings .about h5 {
		margin: 0 0 15px 0;
		color: #007ae1;
	}

	.account-settings .about p {
		font-size: 0.825rem;
	}

	.form-control {
		border: 1px solid #cfd1d8;
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
		border-radius: 2px;
		font-size: .825rem;
		background: #ffffff;
		color: #2e323c;
	}

	.card {
		background: #ffffff;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		border: 0;
		margin-bottom: 1rem;
	}
</style>

<script type="text/javascript">

</script>
@endsection