<div id="publications" class="px-4 lg:px-0 reveal">
    <div class="max-w-300 mx-auto py-20 lg:pt-30 lg:pb-34">
        <div class="flex flex-col lg:flex-row lg:justify-between items-start lg:items-end gap-2">
            <h2 class="text-4xl lg:text-5xl font-medium">{!! __('common.publications & insights') !!}</h2>
            <a href="/posts" class="link inline">{!! __('common.all_publications') !!}</a>
        </div>
        <div class="grid lg:grid-cols-2 gap-12 mt-8 lg:mt-16">
            @each('posts/post', $posts, 'post')
        </div>
    </div>
</div>