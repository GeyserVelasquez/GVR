<!-- SEO Meta Content -->
@push('meta')
    <meta name="description" content="@lang('shop::app.customers.signup-form.page-title')" />

    <meta name="keywords" content="@lang('shop::app.customers.signup-form.page-title')" />
@endPush

<x-shop::layouts :has-header="false" :has-feature="false" :has-footer="false">
    <!-- Page Title -->
    <x-slot:title>
        @lang('shop::app.customers.signup-form.page-title')
    </x-slot>

    <div class="container mt-10 max-w-xl px-2">
        {!! view_render_event('bagisto.shop.customers.sign-up.logo.before') !!}

        <!-- Company Logo -->
        <div class="flex items-center justify-center mb-4">
            <a href="{{ route('shop.home.index') }}" class="m-[0_auto_20px_auto]" aria-label="@lang('shop::app.customers.signup-form.bagisto')">
                <img src="{{ core()->getCurrentChannel()->logo_url ?? bagisto_asset('images/logo.svg') }}"
                    alt="{{ config('app.name') }}" class="h-6 w-auto md:h-7">
            </a>
        </div>

        {!! view_render_event('bagisto.shop.customers.sign-up.logo.before') !!}

        <!-- Form Container -->
        <div class="m-auto w-full max-w-md rounded-lg border border-zinc-200 p-4 md:p-6 bg-white">
            <h1 class="font-dmserif text-xl md:text-2xl mb-1 text-center">
                @lang('shop::app.customers.signup-form.page-title')
            </h1>

            <p class="mb-4 text-center text-zinc-500 text-sm md:text-base">
                @lang('shop::app.customers.signup-form.form-signup-text')
            </p>

            <div class="mt-14 rounded max-sm:mt-8">
                <x-shop::form :action="route('shop.customers.register.store')">
                    {!! view_render_event('bagisto.shop.customers.signup_form_controls.before') !!}

                    <!-- First Name -->
                    <x-shop::form.control-group>
                        <x-shop::form.control-group.label class="required text-xs md:text-sm">
                            @lang('shop::app.customers.signup-form.first-name')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control type="text" class="px-2 py-1 text-xs md:text-sm"
                            name="first_name" rules="required" :value="old('first_name')" :label="trans('shop::app.customers.signup-form.first-name')" :placeholder="trans('shop::app.customers.signup-form.first-name')"
                            :aria-label="trans('shop::app.customers.signup-form.first-name')" aria-required="true" />

                        <x-shop::form.control-group.error control-name="first_name" />
                    </x-shop::form.control-group>

                    {!! view_render_event('bagisto.shop.customers.signup_form.first_name.after') !!}

                    <!-- Last Name -->
                    <x-shop::form.control-group>
                        <x-shop::form.control-group.label class="required text-xs md:text-sm">
                            @lang('shop::app.customers.signup-form.last-name')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control type="text" class="px-2 py-1 text-xs md:text-sm"
                            name="last_name" rules="required" :value="old('last_name')" :label="trans('shop::app.customers.signup-form.last-name')" :placeholder="trans('shop::app.customers.signup-form.last-name')"
                            :aria-label="trans('shop::app.customers.signup-form.last-name')" aria-required="true" />

                        <x-shop::form.control-group.error control-name="last_name" />
                    </x-shop::form.control-group>

                    {!! view_render_event('bagisto.shop.customers.signup_form.last_name.after') !!}

                    <!-- Email -->
                    <x-shop::form.control-group>
                        <x-shop::form.control-group.label class="required text-xs md:text-sm">
                            @lang('shop::app.customers.signup-form.email')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control type="email" class="px-2 py-1 text-xs md:text-sm"
                            name="email" rules="required|email" :value="old('email')" :label="trans('shop::app.customers.signup-form.email')"
                            placeholder="email@example.com" :aria-label="trans('shop::app.customers.signup-form.email')" aria-required="true" />

                        <x-shop::form.control-group.error control-name="email" />
                    </x-shop::form.control-group>

                    {!! view_render_event('bagisto.shop.customers.signup_form.email.after') !!}

                    <!-- Password -->
                    <x-shop::form.control-group class="mb-6">
                        <x-shop::form.control-group.label class="required text-xs md:text-sm">
                            @lang('shop::app.customers.signup-form.password')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control type="password" class="px-2 py-1 text-xs md:text-sm"
                            name="password" rules="required|min:6" :value="old('password')" :label="trans('shop::app.customers.signup-form.password')"
                            :placeholder="trans('shop::app.customers.signup-form.password')" ref="password" :aria-label="trans('shop::app.customers.signup-form.password')" aria-required="true" />

                        <x-shop::form.control-group.error control-name="password" />
                    </x-shop::form.control-group>

                    {!! view_render_event('bagisto.shop.customers.signup_form.password.after') !!}

                    <!-- Confirm Password -->
                    <x-shop::form.control-group>
                        <x-shop::form.control-group.label class="text-xs md:text-sm">
                            @lang('shop::app.customers.signup-form.confirm-pass')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control type="password" class="px-2 py-1 text-xs md:text-sm"
                            name="password_confirmation" rules="confirmed:@password" value="" :label="trans('shop::app.customers.signup-form.password')"
                            :placeholder="trans('shop::app.customers.signup-form.confirm-pass')" :aria-label="trans('shop::app.customers.signup-form.confirm-pass')" aria-required="true" />

                        <x-shop::form.control-group.error control-name="password_confirmation" />
                    </x-shop::form.control-group>

                    {!! view_render_event('bagisto.shop.customers.signup_form.password_confirmation.after') !!}

                    <!-- Teléfono -->
                    <x-shop::form.control-group>
                        <x-shop::form.control-group.label class="required text-xs md:text-sm">
                            @lang('shop::app.customers.signup-form.phone')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control type="text" class="px-2 py-1 text-xs md:text-sm"
                            name="phone" rules="required|phone:VE" :value="old('phone')" :label="trans('shop::app.customers.signup-form.phone')"
                            :placeholder="trans('shop::app.customers.signup-form.phone')" :aria-label="trans('shop::app.customers.signup-form.phone')" aria-required="true" />

                        <x-shop::form.control-group.error control-name="phone" />
                    </x-shop::form.control-group>

                    <!-- Fecha de nacimiento -->
                    {{-- <x-shop::form.control-group>
                        <x-shop::form.control-group.label class="required">
                            @lang('shop::app.customers.signup-form.date-of-birth')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="date"
                            name="date_of_birth"
                            rules="required|date|before:today"
                            :value="old('date_of_birth')"
                            :label="trans('shop::app.customers.signup-form.date-of-birth')"
                            :placeholder="trans('shop::app.customers.signup-form.date-of-birth')"
                            :aria-label="trans('shop::app.customers.signup-form.date-of-birth')"
                            aria-required="true"
                        />

                        <x-shop::form.control-group.error control-name="date_of_birth" />
                    </x-shop::form.control-group> --}}

                    <!-- Género -->
                    {{-- <x-shop::form.control-group>
                        <x-shop::form.control-group.label class="required">
                            @lang('shop::app.customers.signup-form.gender')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="select"
                            name="gender"
                            rules="required|in:male,female,other"
                            :value="old('gender')"
                            :label="trans('shop::app.customers.signup-form.gender')"
                            :aria-label="trans('shop::app.customers.signup-form.gender')"
                            aria-required="true"
                        >
                            <option value="">@lang('shop::app.customers.signup-form.select-gender')</option>
                            <option value="male">@lang('shop::app.customers.signup-form.gender-male')</option>
                            <option value="female">@lang('shop::app.customers.signup-form.gender-female')</option>
                            <option value="other">@lang('shop::app.customers.signup-form.gender-other')</option>
                        </x-shop::form.control-group.control>

                        <x-shop::form.control-group.error control-name="gender" />
                    </x-shop::form.control-group> --}}

                    @if (core()->getConfigData('customer.captcha.credentials.status'))
                        <div class="mb-5 flex">
                            {!! \Webkul\Customer\Facades\Captcha::render() !!}
                        </div>
                    @endif

                    <!-- Subscribed Button -->
                    @if (core()->getConfigData('customer.settings.create_new_account_options.news_letter'))
                        <div class="mb-2 flex items-center gap-2">
                            <input type="checkbox" name="is_subscribed" id="is-subscribed" class="peer hidden" />

                            <label
                                class="icon-uncheck peer-checked:icon-check-box cursor-pointer text-lg text-navyBlue peer-checked:text-navyBlue"
                                for="is-subscribed"></label>

                            <label class="cursor-pointer select-none text-xs text-zinc-500" for="is-subscribed">
                                @lang('shop::app.customers.signup-form.subscribe-to-newsletter')
                            </label>
                        </div>
                    @endif

                    {!! view_render_event('bagisto.shop.customers.signup_form.newsletter_subscription.after') !!}

                    @if (core()->getConfigData('general.gdpr.settings.enabled') && core()->getConfigData('general.gdpr.agreement.enabled'))
                        <div class="mb-2 flex items-center gap-2">
                            <x-shop::form.control-group.control type="checkbox" name="agreement" id="agreement"
                                value="0" rules="required" for="agreement" />

                            <label class="cursor-pointer select-none text-xs text-zinc-500" for="agreement">
                                {{ core()->getConfigData('general.gdpr.agreement.agreement_label') }}
                            </label>

                            @if (core()->getConfigData('general.gdpr.agreement.agreement_content'))
                                <span class="cursor-pointer text-xs text-navyBlue" @click="$refs.termsModal.open()">
                                    @lang('shop::app.customers.signup-form.click-here')
                                </span>
                            @endif
                        </div>

                        <x-shop::form.control-group.error control-name="agreement" />
                    @endif

                    <div class="mt-8 flex flex-col items-center gap-5 max-sm:justify-center max-sm:gap-4">
                        <!-- Save Button -->
                        <button class="w-full h-10 text-white bg-black rounded-lg mt-3 text-sm" type="submit">
                            @lang('shop::app.customers.signup-form.button-title')
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

                    {!! view_render_event('bagisto.shop.customers.signup_form_controls.after') !!}

                </x-shop::form>
            </div>

            <p class="mt-8 text-center text-xs text-zinc-500">
                @lang('shop::app.customers.signup-form.account-exists')

                <a class="text-navyBlue" href="{{ route('shop.customer.session.index') }}">
                    @lang('shop::app.customers.signup-form.sign-in-button')
                </a>
            </p>
        </div>

        <p class="mb-4 mt-8 text-center text-xs text-zinc-500">
            @lang('shop::app.customers.signup-form.footer', ['current_year' => date('Y')])
        </p>
    </div>

    @push('scripts')
        {!! \Webkul\Customer\Facades\Captcha::renderJS() !!}
    @endpush

    <!-- Terms & Conditions Modal -->
    <x-shop::modal ref="termsModal">
        <x-slot:toggle></x-slot>

        <x-slot:header class="!p-5">
            <p>@lang('shop::app.customers.signup-form.terms-conditions')</p>
        </x-slot>

        <x-slot:content class="!p-5">
            <div class="max-h-[500px] overflow-auto">
                {!! core()->getConfigData('general.gdpr.agreement.agreement_content') !!}
            </div>
        </x-slot>
        </x-admin::modal>
</x-shop::layouts>
