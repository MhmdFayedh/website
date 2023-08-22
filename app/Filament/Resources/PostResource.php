<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;


class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-alt';
    protected static ?string $navigationGroup = 'المحتوى';
    protected static ?string $modelLabel = 'تدوينة';
    protected static ?string $pluralLabel = 'التدوينات';

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
                ->name('المقالة'),
                Forms\Components\FileUpload::make('thumbnail')->name('الصورة'),
                Forms\Components\Toggle::make('active')
                    ->required()
                    ->name('فعال'),
                Forms\Components\DateTimePicker::make('publish_at')
                    ->required()
                    ->name('سينٌشر'),
                Forms\Components\Select::make('category_id')
                    ->multiple()
                    ->relationship('categories', 'name')
                    ->name('الوسوم'),
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }    
}
