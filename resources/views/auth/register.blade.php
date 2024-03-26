<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Icon -->
        <div>
            <x-input-label for="icon" :value="__('Icon')" />
            <img src="{{ asset('img/icon.png') }}" alt="プロフィール画像" class="w-24 h-24">
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <!--nickname-->
        <div>
            <x-input-label for="nickname" :value="__('Nickname')" />
            <x-text-input id="nickname" class="block mt-1 w-full" type="text" name="nickname" :value="old('nickname')" required autofocus autocomplete="nickname" />
            <x-input-error :messages="$errors->get('nickname')" class="mt-2" />
        </div>
        
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <!-- grade -->
        <div>
            <x-input-label for="grade" :value="__('Grade')" />
            <select name="grade">
                <option value=1>1年生</option>
                <option value=2>2年生</option>
                <option value=3>3年生</option>
                <option value=4>4年生</option>
            </select>
        </div>
        
        <!-- Major -->
        <div>
            <x-input-label for="major" :value="__('Major')" />
            <select name="major">
                @foreach($majors as $major)
                    <option value="{{ $major->id }}">{{ $major->name }}</option>
                @endforeach
            </select>
        </div>
        
        <!-- Detail -->
        <div>
            <x-input-label for="detail" :value="__('Detail')" />
            <x-text-input id="detail" class="block mt-1 w-full h-48" type="text" name="detail" :value="old('detail')" required autofocus autocomplete="detail" />
            <x-input-error :messages="$errors->get('detail')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
