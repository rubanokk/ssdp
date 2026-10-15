<div id="lead-form-wrap"
    class="hidden fixed inset-0 z-99 flex justify-center items-center px-4 bg-(--primary-gray) backdrop-blur-md">

    <div class="w-full lg:min-w-105 max-w-105 bg-white py-10 px-4 lg:px-8 relative">
        <div id="form-spinner" class="hidden absolute inset-0 flex justify-center items-center z-9">
            <svg class="animate-spin h-6 w-6">
                <use xlink:href="#icon-spinner" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
        </div>
        <div
            class="js-toggle-form absolute top-4 right-4 h-9 w-9 bg-black-primary flex justify-center items-center rounded-full cursor-pointer text-(--primary-red)">
            <svg class="icon-svg w-full h-full">
                <use xlink:href="#icon-close" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
        </div>


        <form action="/" id="lead-form" class="relative">
            <div class="text-2xl">{!! __('common.start_conversation') !!}</div>
            <div class="text-sm mt-2">{!! __('common.conversation_desc') !!}</div>

            <label for="lead-name" class="block text-[16px] mt-8">{!! __('common.name') !!} <span
                    class="text-red-500">*</span></label>
            <input id="lead-name" name="name" type="text"
                class="block w-full border border-[#B3C1C8] py-2 px-4 mt-1 mb-6 ">

            <label for="lead-email" class="block">{!! __('common.email') !!} <span class="text-red-500">*</span></label>
            <input id="lead-email" name="email" type="text"
                class="block w-full border border-[#B3C1C8] py-2 px-4 mt-1 mb-6 ">

            <label for="lead-message" class="block">{!! __('common.message') !!} <span
                    class="text-red-500">*</span></label>
            <textarea id="lead-message" name="message"
                class="block w-full border border-[#B3C1C8] py-2 px-4 mt-1 mb-6 "></textarea>

            <div class="relative">
                <button type="submit"
                    class="w-full items-center justify-center cursor-pointer transition-colors text-center inline-flex bg-black text-white  px-6 py-3 text-sm">{!!
                    __('common.submit') !!}</button>
            </div>
        </form>

        <div id="lead-message-success" class="hidden">
            {!! __('common.message_success') !!}
        </div>
    </div>
</div>