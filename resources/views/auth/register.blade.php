<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <script src="https://kit.fontawesome.com/d49ccb3aeb.js" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<body>
    

<x-guest-layout>
    <x-authentication-card>


        <x-validation-errors class="mb-4" />

        <form class="form"method="POST" action="{{ route('register') }}">
            @csrf
            <div class="container">
                    <input id="signup_toggle" type="checkbox">
                    
                        <div class="form_front">
                            <img src="{{ asset('css/image/logo_conve.png') }}" />
                            <div class="form_details">Register</div>
                
                            <x-input id="name" class="input" type="text" name="name" :value="old('name')" placeholder="name" required autofocus autocomplete="name" />                

                            <x-input id="email" class="input" type="email" name="email" :value="old('email')" placeholder="email" required autocomplete="username" />
         
                            <x-input id="password" class="input" type="password" name="password" placeholder="password" required autocomplete="new-password" />
              
                            <x-input id="password_confirmation" class="input" type="password" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password" />
                    

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'._('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'._('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="btn-space">
                <x-button class="btn">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
</body>
</html>