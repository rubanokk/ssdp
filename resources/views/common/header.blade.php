<header class="sticky inset-x-0 top-0 z-2 bg-[#F2F2F2]">
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
                <li><a href="/#publications">{!! __('common.publications') !!}</a></li>
                <!-- <li><a href="#">{!! __('common.contacts') !!}</a></li> -->
            </ul>
        </div>
        <div class="flex items-center gap-7">

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
    </div>
</header>

<div id="mobile-menu"
    class="hidden fixed top-18 left-0 right-0 bottom-0 backdrop-blur-xl bg-woodsmoke-950/40 z-80 text-xl">
    <ul class="flex flex-col justify-center items-center mt-16">
        <li><a href="/#about" class="block py-4 px-4">Почему мы</a></li>
        <li><a href="/#price" class="block py-4 px-4">Стоимость</a></li>
        <li><a href="/#works" class="block py-4 px-4">Портфолио</a></li>
        <li><a href="/#contacts" class="block py-4 px-4">Контакты</a></li>
    </ul>
</div>