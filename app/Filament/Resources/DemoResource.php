<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DemoResource\Pages;
use App\Filament\Resources\DemoResource\RelationManagers;
use App\Models\Demo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DemoResource extends Resource
{
    protected static ?string $model = Demo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Name')
                    ->forceSearchCaseInsensitive(false)
                    ->searchable(),
                TextColumn::make('Description')
                    ->forceSearchCaseInsensitive(false)
                    ->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListDemos::route('/'),
            'create' => Pages\CreateDemo::route('/create'),
            'edit' => Pages\EditDemo::route('/{record}/edit'),
        ];
    }
}
