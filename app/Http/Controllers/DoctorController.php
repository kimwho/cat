<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DoctorController extends Controller
{

    // Controller method to fetch all doctors and pass them to the home view
    public function getAllDoctors()
    {
        $doctors = DB::table('doctor')
                    ->select('doctorID', 'doctorName', 'doctorSpecialization', 'doctorImage') // Select specific columns
                    ->get();

        return view("home", ["html_doctor" => $doctors]); // Pass the retrieved data to the view
    }

    public function bookingdetail(Request $request)
    {
        $m_id = $request->id;
        $doctors = DB::select("select * from doctor where doctorID = $m_id  " );
        return view("bookingdetail", [ "tpl_doctor" => $doctors  ] );
    }
    
    public function myAppointments()
    {
        $userAppointments = Appointment::with('doctor', 'status')
                                        ->where('usersID', auth()->user()->id)
                                        ->get();
        return view('my_appointments', ['userAppointments' => $userAppointments]);
    }
    

    public function storeAppointment(Request $request)
    {
        // Create the appointment without validation
        $appointment = new Appointment();
        $appointment->doctorID = $request->input('doctorID');
        $appointment->usersID = $request->input('patientID');
        $appointment->appointmentDate = $request->input('appointmentDate');
        $appointment->startTime = $request->input('startTime');
        $appointment->endTime = $request->input('endTime');
        $appointment->statusID = 1; // Assuming 'pending' status ID is 1
        $appointment->save();

        // Optionally, you can add a success message or redirect somewhere
        return redirect()->back()->with('status', 'You have made an appoinment successfully!');

    }

    
    
}
