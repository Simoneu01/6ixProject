<x-form-section submit="setPassword">
    <x-slot name="title">
        {{ __('Set Password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="{{ __('New Password') }}" />
            <x-input class="mt-1 block w-full" id="password" type="password" wire:model="state.password"
                autocomplete="new-password" />
            <x-input-error class="mt-2" for="password" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-input class="mt-1 block w-full" id="password_confirmation" type="password"
                wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-input-error class="mt-2" for="password_confirmation" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Password saved, please refresh.') }}
        </x-action-message>

        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
