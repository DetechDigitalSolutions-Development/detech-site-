<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('verifyEmail')
                ->label(fn (): string => $this->record->email_verified_at ? 'Unverify Email' : 'Verify Email')
                ->icon(fn (): string => $this->record->email_verified_at ? 'heroicon-o-x-circle' : 'heroicon-o-check-circle')
                ->color(fn (): string => $this->record->email_verified_at ? 'warning' : 'success')
                ->action(function (): void {
                    if ($this->record->email_verified_at) {
                        $this->record->email_verified_at = null;
                    } else {
                        $this->record->email_verified_at = now();
                    }
                    $this->record->save();
                    $this->refreshFormData(['email_verified_at']);
                }),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'User updated successfully';
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Remove password confirmation from data
        unset($data['passwordConfirmation']);
        
        // Remove password if empty (when updating without changing password)
        if (empty($data['password'])) {
            unset($data['password']);
        }
        
        // Ensure email_verified_at is null if not checked
        if (!isset($data['email_verified_at'])) {
            $data['email_verified_at'] = null;
        }
        
        return $data;
    }

    protected function fillForm(): void
    {
        $state = $this->record->attributesToArray();
        
        // Convert email_verified_at to boolean for toggle
        $state['email_verified_at'] = !is_null($this->record->email_verified_at);
        
        $this->callHook('beforeFill');
        
        $this->form->fill($state);
        
        $this->callHook('afterFill');
    }
}