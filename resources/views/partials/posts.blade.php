<div id="publications" class="px-4 lg:px-0">
    <div class="max-w-300 mx-auto py-20 lg:pt-30 lg:pb-34">
        <div class="max-w-245">
            <h2 class="text-4xl lg:text-5xl font-medium">{!! __('common.publications & insights') !!}</h2>
        </div>
        <div class="grid lg:grid-cols-2 gap-12 mt-16">
            @each('posts/post', $posts, 'post')
        </div>
    </div>
</div>