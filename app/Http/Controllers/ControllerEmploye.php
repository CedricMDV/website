<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelEmploye;

class ControllerEmploye extends Controller
{
     public function index(){

     	$employe = ModelEmploye::all();
     	

    	return view('employer',compact('employe'));
    }

    public function store(){

    	$employer = new ModelEmploye();

    	$employer->firstname = request('firstname');
    	$employer->lastname = request('lastname');

    	$employer->save();
    }
 }
