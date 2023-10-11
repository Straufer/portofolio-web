<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingsResource\Pages;
use App\Models\Settings;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class SettingsResource extends Resource
{
    protected static ?string $model = Settings::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-8-tooth';

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
          TextColumn::make('label'),
          TextColumn::make('value'),
        ])
        ->filters([
          //
        ])
        ->actions([
          Tables\Actions\EditAction::make()->form(function (Settings $record){
            switch($record->type){
              case "text":
                return [TextInput::make('value')->label($record->label)];
                break;
              case "LongText":
                return [RichEditor::make('value')->label($record->label)];
                break;
            }
          }),
        ])
        ->bulkActions([
          Tables\Actions\BulkActionGroup::make([
            // Tables\Actions\DeleteBulkAction::make(),
          ]),
        ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSettings::route('/'),
        ];
    }    
}
