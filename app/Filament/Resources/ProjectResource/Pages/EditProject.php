<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use Filament\Actions;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ProjectResource;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(Project $record){
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }

    function getRedirectUrl(): string{
        return $this->getResource()::getUrl('index');
    }

}
