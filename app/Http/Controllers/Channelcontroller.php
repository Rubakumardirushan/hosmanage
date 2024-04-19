<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;
use App\Models\Channel;
use App\Models\Appointment;
class Channelcontroller extends Controller
{
    public function showallchannel(){
        $channels = Channel::all();
        return view('Channel.channel', compact('channels'));
    }
    
    public function apodeatils($id){
        $channels = Channel::find($id);
        return view('Channel.Appoint', compact('channels'));
    }
    
    public function store(Request $request){
       
        $appointment = new Appointment();
        $appointment->patient_name = $request->patient_name;
        $appointment->doctor_name = $request->doctor_name;
        $appointment->hospital_name = $request->hospital_name;
        $appointment->date = $request->date;
       // $appointment->appointment_number = $request->appointment_number;
        $appointment->payment_reference = $request->payment_reference;
       // $appointment->status = $request->status;
       // $appointment->speciality = $request->speciality;
        $appointment->save();
        return redirect('/mybooking');


    }


    public function index(){
        $appointments = Appointment::where('patient_name', auth()->user()->name)->get();
        return view('Channel.mybooking', compact('appointments'));
    }
    
}
