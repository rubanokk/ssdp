<div id="people" class="max-w-300 mx-auto py-20  px-4 lg:px-0 reveal">
    <div class="flex justify-between items-end">
        <h2 class="text-4xl lg:text-5xl font-medium">{!! __('common.people') !!}</h2>
    </div>
    <div class="grid lg:grid-cols-2 mt-9">
        @each('people/person', $people, 'person')
    </div>
</div>