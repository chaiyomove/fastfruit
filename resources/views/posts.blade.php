@foreach ($posts as $post)

    <article>
        <h2>{{ $post->title }}</h2>
        {{ $post->summary }}
    </article>
{{isset($msg)?$msg:null}}
@endforeach

{{ $posts->links() }}