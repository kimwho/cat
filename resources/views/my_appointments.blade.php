<!-- my_appointments.blade.php -->
@extends('layout.master')

@section('contents')
<!-- Breadcrumb or other content -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>My Appointments</h2>
            <div class="card">
                <div class="card-body" style="min-height: 400px;"> <!-- Set a minimum height -->
                    @if(count($userAppointments) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Doctor</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($userAppointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->doctor->doctorName }}</td>
                                    <td>{{ $appointment->appointmentDate }}</td>
                                    <td>{{ $appointment->startTime }} - {{ $appointment->endTime }}</td>
                                    <td>{{ $appointment->status->statusName }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    @else
                        <p>You have no appointments yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
