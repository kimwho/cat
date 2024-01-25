@extends('layout.master')

@section('contents')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Booking</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Booking</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">
				
					<div class="row">
						<div class="col-12">
						
							<div class="card">
							@foreach($tpl_doctor as $doctor)
								<div class="card-body">
									<div class="booking-doc-info">
										<a href="doctor-profile.html" class="booking-doc-img">
											<img src="{{ asset('/assets/img/doctors')}}/{{ $doctor->doctorImage }}" alt="User Image">
										</a>
										<div class="booking-info">
											<h4><a href="#">Dr. Darren Elder</a></h4>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">35</span>
											</div>
											<p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</p>
										</div>
									</div>
								</div>
							@endforeach
							</div>
							@if (\Session::has('status'))
                                        <div class="alert alert-success">
                                        {!! \Session::get('status') !!}
                                        </div>
                         	@endif
							<!-- Appointment Form -->
							<form method="POST" action="{{ route('appointments.store') }}">
								@csrf
								<input type="hidden" name="doctorID" value="{{ $doctor->doctorID }}">
								<input type="hidden" name="patientID" value="{{ auth()->user()->id }}">
								
								<!-- Date selection -->
								<div class="form-group">
									<label for="appointment_date">Appointment Date:</label>
									<input type="date" id="appointment_date" name="appointmentDate" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="start_time">Start Time:</label>
									<select id="start_time" name="startTime" class="form-control" required>
										<option value="">Select Start Time</option>
										<option value="08:00 AM">8:00 AM</option>
										<option value="09:00 AM">9:00 AM</option>
										<option value="10:00 AM">10:00 AM</option>
										<option value="11:00 AM">11:00 AM</option>
										<option value="1:00 PM">1:00 PM</option>
										<option value="2:00 PM">2:00 PM</option>
										<option value="3:00 PM">3:00 PM</option>
										<!-- Add more options as needed -->
									</select>
								</div>            
								<div class="form-group">
									<label for="end_time">End Time:</label>
									<select id="end_time" name="endTime" class="form-control" required>
										<option value="">Select End Time</option>
										<option value="09:00 AM">9:00 AM</option>
										<option value="10:00 AM">10:00 AM</option>
										<option value="11:00 AM">11:00 AM</option>
										<option value="12:00 PM">12:00 PM</option>
										<option value="2:00 PM">2:00 PM</option>
										<option value="3:00 PM">3:00 PM</option>
										<option value="4:00 PM">4:00 PM</option>
										<!-- Add more options as needed -->
									</select>
								</div>
								
								<!-- Submit button -->
								<div class="submit-section proceed-btn text-right">
									<button type="submit" class="btn btn-primary submit-btn">Make an appointment</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
@endsection