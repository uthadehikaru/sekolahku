<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AcademicYearResource\Pages;
use App\Filament\Resources\AcademicYearResource\RelationManagers;
use App\Models\AcademicYear;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AcademicYearResource extends Resource
{
    protected static ?string $model = AcademicYear::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'Tahun Ajaran';

    public static function getLabel(): string
    {
        return 'Tahun Ajaran';
    }

    public static function getRedirectUrl(): string
    {
        return AcademicYearResource::getUrl('index');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama Tahun Ajaran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_open_registration')
                    ->label('Status Pendaftaran')
                    ->required(),
                Forms\Components\DatePicker::make('registration_start_date')
                    ->label('Tanggal Mulai Pendaftaran')
                    ->required(),
                Forms\Components\DatePicker::make('registration_end_date')
                    ->label('Tanggal Selesai Pendaftaran')
                    ->after('registration_start_date')
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
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Tahun Ajaran')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_open_registration')
                    ->boolean()
                    ->label('Status Pendaftaran'),
                Tables\Columns\TextColumn::make('registration_start_date')
                    ->date()
                    ->sortable()
                    ->label('Tanggal Mulai Pendaftaran'),
                Tables\Columns\TextColumn::make('registration_end_date')
                    ->date()
                    ->sortable()
                    ->label('Tanggal Selesai Pendaftaran'),
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
            'index' => Pages\ListAcademicYears::route('/'),
            'create' => Pages\CreateAcademicYear::route('/create'),
            'edit' => Pages\EditAcademicYear::route('/{record}/edit'),
        ];
    }
}
