<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>
    </article>
    <p>
        <a href="/categories/{{ $post->category->slug }}">{{$post->category->name}}</a>
    </p>
    <div>
        {!! $post->body !!}
    </div>
    <a href="/">Back</a>
</x-layout>
