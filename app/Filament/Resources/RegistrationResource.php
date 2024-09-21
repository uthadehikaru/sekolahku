<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistrationResource\Pages;
use App\Filament\Resources\RegistrationResource\RelationManagers;
use App\Models\AcademicYear;
use App\Models\Registration;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegistrationResource extends Resource
{
    protected static ?string $model = Registration::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Pendaftaran';

    public static function getLabel(): string
    {
        return 'Pendaftaran';
    }

    public static function getRedirectUrl(): string
    {
        return RegistrationResource::getUrl('index');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('registration_number')
                    ->label('Nomor Pendaftaran')
                    ->required()
                    ->disabledOn('edit')
                    ->maxLength(255)
                    ->default(function () {
                        return 'REG-' . strtoupper(Str::random(10));
                    }),
                Forms\Components\Select::make('academic_year_id')
                    ->label('Tahun Ajaran')
                    ->required()
                    ->options(AcademicYear::all()->pluck('name', 'id')),
                Forms\Components\TextInput::make('student_nik')
                    ->label('NIK')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_name')
                    ->label('Nama Siswa')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_birth_place')
                    ->label('Tempat Lahir')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('student_birth_date')
                    ->required(),
                Forms\Components\Select::make('student_gender')
                    ->label('Jenis Kelamin')
                    ->required()
                    ->options([
                        'pria' => 'Pria',
                        'wanita' => 'Wanita',
                    ]),
                Forms\Components\TextInput::make('parent_name')
                    ->label('Nama Orang Tua/Wali')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parent_phone')
                    ->label('Nomor Telepon')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parent_email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parent_address')
                    ->label('Alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('status')
                    ->required()
                    ->disabledOn('create')
                    ->default('pending')
                    ->label('Status')
                    ->options([
                        'pending' => 'Menunggu Konfirmasi',
                        'accepted' => 'Diterima',
                        'rejected' => 'Ditolak',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Pendaftaran')
                    ->dateTime('d M Y'),
                Tables\Columns\TextColumn::make('academicYear.name')
                    ->label('Tahun Ajaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('registration_number')
                    ->label('Nomor Pendaftaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->color(function ($state) {
                        return match ($state) {
                            'pending' => 'warning',
                            'accepted' => 'success',
                            'rejected' => 'danger',
                        };
                    })
                    ->formatStateUsing(function ($state) {
                    return __('registration.status.' . $state);
                    })
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_nik')
                    ->label('NIK')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_name')
                    ->label('Nama Siswa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_gender')
                    ->label('Jenis Kelamin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent_name')
                    ->label('Nama Orang Tua/Wali')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent_phone')
                    ->label('Nomor Telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent_email')
                    ->label('Email')
                    ->searchable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Menunggu Konfirmasi',
                        'accepted' => 'Diterima',
                        'rejected' => 'Ditolak',
                    ]),
                SelectFilter::make('academic_year_id')
                    ->label('Tahun Ajaran')
                    ->options(AcademicYear::all()->pluck('name', 'id')),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRegistrations::route('/'),
            'create' => Pages\CreateRegistration::route('/create'),
            'edit' => Pages\EditRegistration::route('/{record}/edit'),
        ];
    }
}
