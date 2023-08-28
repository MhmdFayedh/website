<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkResource\Pages;
use App\Filament\Resources\WorkResource\RelationManagers;
use App\Models\Work;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkResource extends Resource
{
    protected static ?string $model = Work::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'المحتوى';
    protected static ?string $modelLabel = 'عمل';
    protected static ?string $pluralLabel = 'الاعمال';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Card::make()
            ->schema([
            Forms\Components\Grid::make(2)->schema([
                    Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->name('الاسم'),
                    Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                ]),
            Forms\Components\RichEditor::make('body')
            ->required()
            ->maxLength(65535)
            ->name('التفاصيل'),
            Forms\Components\FileUpload::make('thumbnail')->name('الصورة'),
            Forms\Components\Toggle::make('active')
                ->required()
                ->name('فعال'),
            Forms\Components\DateTimePicker::make('publish_at')
                ->required()
                ->name('سينٌشر'),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name'),
            // Tables\Columns\TextColumn::make('body'),
            Tables\Columns\TextColumn::make('slug'),
            // Tables\Columns\TextColumn::make('thumbnail'),
            Tables\Columns\IconColumn::make('active')
                ->boolean(),
            Tables\Columns\TextColumn::make('publish_at')
                ->dateTime(),
            // Tables\Columns\TextColumn::make('user.name'),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime(),
            // Tables\Columns\TextColumn::make('updated_at')
            //     ->dateTime(),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListWorks::route('/'),
            'create' => Pages\CreateWork::route('/create'),
            'edit' => Pages\EditWork::route('/{record}/edit'),
        ];
    }    
}
