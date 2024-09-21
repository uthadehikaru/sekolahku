<?php

namespace App\Filament\Resources\RegistrationResource\Widgets;

use App\Models\Registration;
use Filament\Actions\Action;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class PendingRegistrations extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Registration::where('status', 'pending')
            )
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Pendaftaran')
                    ->dateTime('d M Y'),
                Tables\Columns\TextColumn::make('registration_number')
                    ->label('Nomor Pendaftaran')
                    ->url(fn (Registration $record) => route('filament.admin.resources.registrations.edit', $record))
                    ->color('primary')
                    ->extraAttributes([
                        'class' => 'cursor-pointer text-primary',
                    ])
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_name')
                    ->label('Nama Siswa')
                    ->searchable(),
            ]);
    }
}
