<header class="sticky inset-x-0 top-0 z-30 bg-[#F2F2F2] px-4 lg:px-0">
    <div class="max-w-300 mx-auto h-20 flex items-center justify-between">
        <div class="flex items-center gap-20">
            <a href="/" class="">
                <svg class="w-30 h-9.5">
                    <use xlink:href="#icon-logo" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                </svg>
            </a>
            <ul class="hidden lg:flex justify-center gap-10">
                <li><a href="/#expertise">{!! __('common.expertise') !!}</a></li>
                <li><a href="/#practices">{!! __('common.practices') !!}</a></li>
                <li><a href="/#presence">{!! __('common.presence') !!}</a></li>
                <li><a href="/posts">{!! __('common.publications') !!}</a></li>
                <!-- <li><a href="#">{!! __('common.contacts') !!}</a></li> -->
            </ul>
        </div>
        <div class="hidden lg:flex items-center gap-7">
            <div class="flex items-center gap-2 text-lg">
                <a href="{{ Route::localizedSwitcherUrl('en') }}" @class(['opacity-50'=> app()->getLocale() === 'en'])>
                    EN
                </a>
                <span>|</span>
                <a href="{{ Route::localizedSwitcherUrl('ru') }}" @class(['opacity-50'=> app()->getLocale() === 'ru'])>
                    RU
                </a>
            </div>
            <div
                class="js-toggle-form flex justify-center items-center h-12 px-4 border border-(--primary-red) cursor-pointer">
                {!! __('common.conversation_btn') !!}</div>
        </div>
        <div class="js-menu-toggle h-11 w-12 lg:hidden flex justify-center items-center text-(--primary-red)">
            <svg class="w-6 h-6">
                <use xlink:href="#icon-ellipsis-vertical" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
        </div>
    </div>
</header>

<div id="mobile-menu"
    class="-translate-x-full flex flex-col transition fixed top-18 left-0 right-0 bottom-0  bg-white z-80 px-4 py-8">
    <ul class="flex flex-col gap-4 font-medium text-xl">
        <li><a href="/#expertise">{!! __('common.expertise') !!}</a></li>
        <li><a href="/#practices">{!! __('common.practices') !!}</a></li>
        <li><a href="/#presence">{!! __('common.presence') !!}</a></li>
        <li><a href="/posts">{!! __('common.publications') !!}</a></li>
    </ul>
    <div class="js-toggle-form flex justify-center items-center h-12 px-4 border border-(--primary-red) cursor-pointer mt-8">
        {!! __('common.conversation_btn') !!}</div>

    <div class="flex items-center gap-2 text-lg mt-auto">
        <a href="{{ Route::localizedSwitcherUrl('en') }}" @class(['opacity-50'=> app()->getLocale() === 'en'])>
            EN
        </a>
        <span>|</span>
        <a href="{{ Route::localizedSwitcherUrl('ru') }}" @class(['opacity-50'=> app()->getLocale() === 'ru'])>
            RU
        </a>
    </div>
</div>