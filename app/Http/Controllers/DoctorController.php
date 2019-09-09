<?php

namespace App\Http\Controllers;
use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
   public function getDoctors(Request $request){
    $doctors = Doctor::all();
    return $doctors;

   }
   public function bookConsult(Request $request){

   }
}
