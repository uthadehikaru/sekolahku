<?php

namespace App\Filament\Resources\RegistrationResource\Pages;

use App\Filament\Resources\RegistrationResource;
use App\Mail\RegistrationAccepted;
use App\Mail\RegistrationRejected;
use App\Models\Registration;
use App\Models\Student;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class EditRegistration extends EditRecord
{
    protected static string $resource = RegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        if($data['status'] == 'accepted'){
            DB::transaction(function () use ($record, $data) {
                $registeredStudent = Registration::where('academic_year_id', $record->academic_year_id)->whereNotNull('student_id')->count();
                $student = Student::create([
                    'student_number' => Carbon::now()->format('Y').Str::padLeft($registeredStudent+1, 4, '0'),
                    'student_nik' => $data['student_nik'],
                    'student_name' => $data['student_name'],
                    'student_gender' => $data['student_gender'],
                    'student_birth_date' => $data['student_birth_date'],
                    'student_birth_place' => $data['student_birth_place'],
                    'parent_name' => $data['parent_name'],
                    'parent_phone' => $data['parent_phone'],
                    'parent_email' => $data['parent_email'],
                    'parent_address' => $data['parent_address'],
                ]);

                $data['student_id'] = $student->id;
                $record->update($data);
                Mail::to($record->parent_email)->send(new RegistrationAccepted($record));
            });
        }if($data['status'] == 'rejected'){
            Mail::to($record->parent_email)->send(new RegistrationRejected($record));
        }
        $record->update($data);

        return $record;
    }
}
