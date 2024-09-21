<?php

namespace App\Livewire;

use App\Mail\ConfirmRegistration;
use App\Mail\NewRegistration;
use App\Models\AcademicYear;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Str;
class RegistrationForm extends Component
{
    public $student_nik;
    public $student_name;
    public $student_birth_place;
    public $student_birth_date;
    public $student_gender;
    public $parent_name;
    public $parent_phone;
    public $parent_email;
    public $parent_address;
    public $academic_year;

    public function mount()
    {
        $this->academic_year = AcademicYear::open()->first();
    }

    public function render()
    {
        return view('livewire.registration-form');
    }

    public function submit()
    {
        $data = $this->validate([
            'student_nik' => 'required|max:255|unique:students,student_nik',
            'student_name' => 'required|max:255',
            'student_birth_place' => 'required|max:255',
            'student_birth_date' => 'required|date',
            'student_gender' => 'required|max:255',
            'parent_name' => 'required|max:255',
            'parent_phone' => 'required|numeric',
            'parent_email' => 'required|email',
            'parent_address' => 'required|max:255',
        ]);

        $data['academic_year_id'] = $this->academic_year->id;
        $data['registration_number'] = 'REG-' . strtoupper(Str::random(10));
        $registration = Registration::create($data);

        $admin = User::first();
        Mail::to($admin)->send(new NewRegistration($registration));
        Mail::to($registration->parent_email)->send(new ConfirmRegistration($registration));
        return redirect()->route('registration.success', $registration->registration_number);
    }
    
}
