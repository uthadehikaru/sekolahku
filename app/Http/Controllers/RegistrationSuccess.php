<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationSuccess extends Controller
{
    public function __invoke(Registration $registration)
    {
        return view('registration.success', compact('registration'));
    }
}
