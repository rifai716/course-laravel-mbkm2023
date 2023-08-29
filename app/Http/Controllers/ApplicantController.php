<?php

namespace App\Http\Controllers;

class ApplicantController extends Controller
{
    function index() {
        return view('administrator.applicant.view');
    }
}
