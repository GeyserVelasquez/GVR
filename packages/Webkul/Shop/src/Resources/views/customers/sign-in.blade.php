<!-- SEO Meta Content -->
@push('meta')
    <meta name="description" content="@lang('shop::app.customers.login-form.page-title')" />

    <meta name="keywords" content="@lang('shop::app.customers.login-form.page-title')" />
@endPush

<x-shop::layouts :has-header="false" :has-feature="false" :has-footer="false">
    <!-- Page Title -->
    <x-slot:title>
        @lang('shop::app.customers.login-form.page-title')
    </x-slot>

    <div class="container mt-10 max-w-xl px-2">
        {!! view_render_event('bagisto.shop.customers.login.logo.before') !!}

        <!-- Company Logo -->
        <div class="flex items-center justify-center mb-4">
            <a href="{{ route('shop.home.index') }}" class="block" aria-label="@lang('shop::app.customers.login-form.bagisto')">
                <img src="{{ core()->getCurrentChannel()->logo_url ?? bagisto_asset('images/logo.svg') }}"
                    alt="{{ config('app.name') }}" class="h-6 w-auto md:h-7">
            </a>
        </div>

        {!! view_render_event('bagisto.shop.customers.login.logo.after') !!}

        <!-- Form Container -->
        <div class="m-auto w-full max-w-md rounded-lg border border-zinc-200 p-4 md:p-6 bg-white">
            <h1 class="font-dmserif text-xl md:text-2xl mb-1 text-center">
                @lang('shop::app.customers.login-form.page-title')
            </h1>

            <p class="mb-4 text-center text-zinc-500 text-sm md:text-base">
                @lang('shop::app.customers.login-form.form-login-text')
            </p>

            {!! view_render_event('bagisto.shop.customers.login.before') !!}

            <div class="mt-8 rounded max-sm:mt-6">
                <x-shop::form :action="route('shop.customer.session.create')">
                    {!! view_render_event('bagisto.shop.customers.login_form_controls.before') !!}

                    <!-- Email -->
                    <x-shop::form.control-group>
                        <x-shop::form.control-group.label class="required text-xs md:text-sm">
                            @lang('shop::app.customers.login-form.email')
                        </x-shop::form.control-group.label>
                        <x-shop::form.control-group.control type="email" class="px-2 py-1 text-xs md:text-sm"
                            name="email" rules="required|email" value="" :label="trans('shop::app.customers.login-form.email')"
                            placeholder="email@example.com" :aria-label="trans('shop::app.customers.login-form.email')" aria-required="true" />
                        <x-shop::form.control-group.error control-name="email" />
                    </x-shop::form.control-group>

                    <!-- Password -->
                    <x-shop::form.control-group>
                        <x-shop::form.control-group.label class="required text-xs md:text-sm">
                            @lang('shop::app.customers.login-form.password')
                        </x-shop::form.control-group.label>
                        <x-shop::form.control-group.control type="password" class="px-2 py-1 text-xs md:text-sm"
                            id="password" name="password" rules="required|min:6" value="" :label="trans('shop::app.customers.login-form.password')"
                            :placeholder="trans('shop::app.customers.login-form.password')" :aria-label="trans('shop::app.customers.login-form.password')" aria-required="true" />
                        <x-shop::form.control-group.error control-name="password" />
                    </x-shop::form.control-group>

                    <div class="flex justify-between items-center mt-2 mb-2">
                        <div class="flex select-none items-center gap-1.5">
                            <input type="checkbox" id="show-password" class="peer hidden"
                                onchange="switchVisibility()" />
                            <label class="icon-uncheck peer-checked:icon-check-box cursor-pointer text-lg text-navyBlue peer-checked:text-navyBlue max-sm:text-base" for="show-password"></label>
                            <label class="cursor-pointer select-none text-xs text-zinc-500 max-sm:text-xs ltr:pl-0 rtl:pr-0" for="show-password">
                                @lang('shop::app.customers.login-form.show-password')
                            </label>
                        </div>
                        <div class="block">
                            <a href="{{ route('shop.customers.forgot_password.create') }}" class="cursor-pointer text-xs text-black max-sm:text-xs">
                                <span>@lang('shop::app.customers.login-form.forgot-pass')</span>
                            </a>
                        </div>
                    </div>

                    <!-- Captcha -->
                    @if (core()->getConfigData('customer.captcha.credentials.status'))
                        <div class="mb-2 flex justify-center">
                            {!! \Webkul\Customer\Facades\Captcha::render() !!}
                        </div>
                    @endif

                    <!-- Submit Button -->
                    <div class="mt-8 flex flex-col items-center gap-5 max-sm:justify-center max-sm:gap-4">
                        <button class="w-full h-10 text-white bg-black rounded-lg mt-3 text-sm" type="submit">
                            @lang('shop::app.customers.login-form.button-title')
                        </button>
                        <div class="flex items-center justify-center gap-4 w-full">
                            <div class="w-full border-b border-gray-300"></div>
                            <div class="text-gray-400">@lang('shop::app.customers.signup-form.or')</div>
                            <div class="w-full border-b border-gray-300"></div>
                        </div>
                        <div class="flex flex-wrap gap-4">
                            {!! view_render_event('bagisto.shop.customers.login_form_controls.after') !!}
                        </div>
                    </div>
                </x-shop::form>
            </div>

            {!! view_render_event('bagisto.shop.customers.login.after') !!}

            <p class="mt-8 text-center text-xs text-zinc-500">
                @lang('shop::app.customers.login-form.new-customer')
                <a class="text-navyBlue" href="{{ route('shop.customers.register.index') }}">
                    @lang('shop::app.customers.login-form.create-your-account')
                </a>
            </p>
        </div>

        <p class="mb-4 mt-8 text-center text-xs text-zinc-500">
            @lang('shop::app.customers.login-form.footer', ['current_year' => date('Y')])
        </p>
    </div>

    @push('scripts')
        {!! \Webkul\Customer\Facades\Captcha::renderJS() !!}

        <script>
            function switchVisibility() {
                let passwordField = document.getElementById("password");

                passwordField.type = passwordField.type === "password" ?
                    "text" :
                    "password";
            }
        </script>
    @endpush
</x-shop::layouts>
