<form wire:submit="login" class="p-5 rounded-lg shadow-lg">
    <h1 class="font-bold text-2xl mb-3">
        Login to your account
    </h1>
    <!-- Email Address -->
    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full"
            type="password"
            name="password"
            required autocomplete="current-password" />

        <x-input-error :messages="$errors->get('form.password')" class="mt-2" />

    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember" class="inline-flex items-center">
            <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/signup" wire:navigate>
            {{ __('create an account') }}
        </a>

        <x-primary-button class="ms-3" wire:click="login">
            {{ __('Log in') }}
        </x-primary-button>
    </div>
</form>