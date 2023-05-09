<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

	<div id="booking" class="section" style="background-image: url({{ asset('/storage/salonimage/' . $salon->image) }})";>
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="booking-cta">
							<h1>Enjoy The Best Booking  At {{$salon->name}} Salon</h1>
                            
                           {{-- {{dd($services)}}; --}}
                           {{-- {{dd($salon->name)}};  --}}
                    
							<p></p>
						</div>
					</div>
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form action="{{Route('UserSalonBook.store')}}" method="post">
								@csrf
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">First Name</span>
											<input class="form-control" type="text" placeholder="first name" name="first_name" value="{{ old('first_name')}}" class="@error('first_name') is-invalid @enderror">
											<input type="hidden" class="form-control bg-transparent" id="name" placeholder="First Name" name="user_id" value="{{ Auth::user()->id }}">
                                            @error('first_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Last Name</span>
											<input class="form-control" type="text" placeholder="Last Name" name="last_name" value="{{ old('last_name')}}" class="@error('last_name') is-invalid @enderror">
											@error('last_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror  
										
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Email</span>
											<input class="form-control" type="text" placeholder="Email" id="email"  name="email" value="{{ old('email')}}" class="@error('email') is-invalid @enderror">
											@error('email')
											<div class="alert alert-danger">{{ $message }}</div>
										    @enderror
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Phone Number</span>
											<input class="form-control" type="text" placeholder="Phone Number" name="phoneNumber" value="{{ old('phoneNumber')}}" class="@error('phoneNumber') is-invalid @enderror">
											@error('phoneNumber')
											<div class="alert alert-danger">{{ $message }}</div>
										   @enderror
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Select Date</span>
											<input class="form-control" type="date" id="date_picker" placeholder="Date" data-target="#date3" data-toggle="datetimepicker" name="res_date" value="{{ old('res_date')}}" class="@error('res_date') is-invalid @enderror">
											@error('res_date')
											<div class="alert alert-danger">{{ $message }}</div>
										   @enderror
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Select Services & Price </span>
											<select class="form-control" name="Salon_Services_Id" id="services"  value="{{ old('Salon_Services_Id')}}" class="@error('Salon_Services_Id') is-invalid @enderror">
												@foreach ($services as $value)
                                        
                                                <option value="{{$value->id}}">{{$value->ServiceName}}  price : {{$value->ServicePrice}} JD</option>
                                                @endforeach
											</select>
											@error('Salon_Services_Id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
							<br/>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											{{-- <p> Messages</p> --}}
											<span class="form-label">Code Discount</span>
											<input class="form-control" type="text" placeholder="code" id="code"  name="code" value="{{ old('code')}}">
										</div>
									</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											{{-- <p> Messages</p> --}}
											<span class="form-label">Messages</span>
											<textarea id="Messages" cols="3" rows="10" class="form-control" name="comment" value="{{ old('comment')}}"></textarea>
											<input type="hidden" class="form-control bg-transparent" id="salon" placeholder="salon" name="SalonName" value="{{ $salon->name }}">
										</div>
									</div>
									
								</div>
							
								<div class="btn">
									<button class="submit-btn btnSubmit">Submit</button>
                                    <button class="submit-btn"><a href="/SalonUser" style="text-decoration-line: none;color:white">Cancle</a></button>
								</div>
								{{-- <div class="form-btn">
									<button class="submit-btn">Cancle</button>
								</div> --}}
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>