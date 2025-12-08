<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'User created successfully';
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Ensure email_verified_at is null if not checked
        if (!isset($data['email_verified_at'])) {
            $data['email_verified_at'] = null;
        }
        
        return $data;
    }
}