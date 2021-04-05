@extends('layout')

@section('content')
    <h1>
        {{ $post->title }}

        <x-badge  show="{{ now()->diffInMinutes($post->created_at) < 15 }}">
            Brand new Post!
        </x-badge>
    
    </h1>
    <p>{{ $post->content }}</p>

    {{-- <p>Added {{ $post->created_at->diffForHumans() }}</p> --}}

    <x-updated date="{{ $post->updated_at->diffForHumans() }}" name="{{ $post->user->name }}">
        Updated
    </x-updated>

    <h4>Comments</h4>

    @forelse($post->comments as $comment)
        <p>
            {{ $comment->content }}
        </p>
        <p class="text-muted">
            {{-- added {{ $comment->created_at->diffForHumans() }} --}}
            <x-updated date="{{ $post->created_at->diffForHumans() }}" >
                Updated
            </x-updated>
        </p>
    @empty
        <p>No comments yet!</p>
    @endforelse
@endsection('content')