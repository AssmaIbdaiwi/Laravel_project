@extends('master')
@section('content')

<br><br>
<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist" >
	<li class="nav-item" role="presentation" >
	  <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><a href="{{url('profile')}}">Profile</a></button>
	</li>
	<li class="nav-item" role="presentation">
	  <button  class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><a href="{{url('profile/requests')}}">Your Requests</a></button>
	</li>
	<li class="nav-item" role="presentation">
	  <button  class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><a href="{{url('addprofile')}}">Your Donations</a></button>
	</li>
  </ul>

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
							<h6 class="user-email">{{ Auth::user()->email }}</h6>
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
							<h6 class="mb-2" style="color:#51B7C6">Order Requests</h6>

						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Order ID</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                    <?php 
                                    $i = 1;
                                    ?>
                                    @foreach ($data as $value)
                                        <tr>
                                            <th scope="row">{{ $i++ }}</th>
                                            <td>{{ $value->product_order_id }}</td>
                                            <td>{{ $value->product_name }}</td>
                                            <td>{{ $value->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                </table>
				</div>
			</div>
		</div>
	</div>
</div>

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