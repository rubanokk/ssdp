<a href="/practices/{{ $practice->slug }}"
    class="flex h-22 lg:h-40  p-4 hover:text-(--primary-red) relative lg:-ml-px -mt-px border border-[#B3C1C8] last:border-b-[#B3C1C8]  lg:border-b-[#B3C1C8]">
    <div class="text-lg lg:text-xl font-medium">{{ $practice->title }}</div>
    <div>
        <svg class="w-8 h-8 text-(--primary-red) absolute right-2 bottom-2 rotate-0 lg:-rotate-45">
            <use xlink:href="#icon-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
        </svg>
    </div>
</a>