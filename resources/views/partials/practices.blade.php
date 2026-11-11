<div id="practices" class="max-w-300 mx-auto py-20 lg:py-30 px-4 lg:px-0 reveal">
    <div class="flex justify-between items-end">
        <h2 class="text-4xl lg:text-5xl font-medium">{!! __('practices.title') !!}</h2>
        <a href="/practices" class="link">{!! __('common.read_more') !!}</a>
    </div>
    <div class="grid lg:grid-cols-3 mt-9">
        @each('practices/practice', $practices, 'practice')
    </div>
</div>