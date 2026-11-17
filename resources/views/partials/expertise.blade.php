<div id="expertise" class="max-w-300 mx-auto pt-20 px-4 lg:px-0 reveal">
    <div class="flex flex-col lg:flex-row gap-4 justify-between lg:items-end">
        <h2 class="text-4xl lg:text-5xl font-medium">{!! __('common.expertise') !!}</h2>
    </div>

    <div class="grid lg:lg:grid-cols-2 lg:gap-8 mt-8">
        <div class="content-text">
           {!! $textAbout->content !!}
        </div>
        <div class="flex flex-col gap-1 lg:gap-4 items-end relative lg:-mt-20">
            <div class="flex gap-1 lg:gap-4 items-end">
                <div
                    class="flex flex-col justify-end items-end w-36 h-36 lg:w-44 lg:h-44 gap-1 border border-(--primary-red) text-right p-1 lg:p-4">
                    <div class="text-2xl lg:text-4xl font-medium">25+</div>
                    <div class="text-sm">{!! __('expertise.jurisdictions_desc') !!}</div>
                </div>
                <div class="flex flex-col justify-center items-center w-50 h-50 lg:w-75 lg:h-75 gap-1 bg-(--primary-red) bg-cover bg-center text-white p-4 text-center" style="background-image: url('/images/bg-20.svg')">
                    <div class="text-4xl lg:text-7xl font-medium">20+</div>
                    <div class="text-sm lg:text-base">{!! __('expertise.experience_desc') !!}</div>
                </div>
            </div>
            <div class="flex gap-1 lg:gap-4">
                <div class="flex flex-col justify-start items-start w-48 h-48 lg:w-52 lg:h-52 border border-(--primary-red) p-2 lg:p-2 bg-no-repeat bg-bottom-right" style="background-image: url('/images/bg-13.svg')">
                    <div class="text-4xl lg:text-6xl font-medium">13</div>
                    <div class="text-sm">{!! __('expertise.value_desc') !!}</div>
                </div>
                <div class="flex flex-col justify-center items-center w-36 h-36 w-40 h-40 bg-[#F2F2F2] text-center p-4">
                    <div class="text-3xl lg:text-4xl font-medium">5</div>
                    <div class="text-sm">{!! __('expertise.offices_desc') !!}</div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="py-10 lg:py-20 bg-[#F2F2F2] mt-24 bg-no-repeat lg:bg-cover bg-top bg-fixed" style="background-image: url('/images/bg-rely.svg')">
    <div class="max-w-300 mx-auto  px-4 lg:px-0 reveal">
        <h2 class="text-4xl lg:text-6xl font-medium">{!! __('expertise.clients_rely') !!}</h2>
        <div class="grid lg:grid-cols-3 gap-4 lg:gap-8 mt-8 lg:mt-12">
            <div>
                <div class="text-2xl font-medium mt-2 lg:mb-4 h-16">{!! __('expertise.matter_calls') !!}</div>
                <div>{!! __('expertise.combine') !!}</div>
            </div>
            <div>
                <div class="text-2xl font-medium mt-2 lg:mb-4 h-16">{!! __('expertise.confidentiality') !!}</div>
                <div>{!! __('expertise.treat') !!}</div>
            </div>
            <div>
                <div class="text-2xl font-medium mt-2 lg:mb-4 lg:h-16">{!! __('expertise.counsel') !!}</div>
                <div>{!! __('expertise.objectives') !!}</div>
            </div>
        </div>
    </div>
</div>