<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'Siswa';

    public static function getLabel(): ?string
    {
        return 'Siswa';
    }

    public static function getRedirectUrl(): string

    {
        return StudentResource::getUrl('index');
    }

    public static function form(Form $form): Form


    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('student_number')
                    ->required(),
                Forms\Components\TextInput::make('student_nik')
                    ->required(),
                Forms\Components\TextInput::make('student_name')
                    ->required(),
                Forms\Components\TextInput::make('student_gender')
                    ->required(),
                Forms\Components\DatePicker::make('student_birth_date')
                    ->required(),
                Forms\Components\TextInput::make('student_birth_place')
                    ->required(),
                Forms\Components\TextInput::make('parent_name')
                    ->required(),
                Forms\Components\TextInput::make('parent_phone')
                    ->tel()
                    ->required(),
                Forms\Components\TextInput::make('parent_email')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('parent_address')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('student_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_birth_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('student_birth_place')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent_address')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
