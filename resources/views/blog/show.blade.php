@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

@section('content')
<div class="w-4/5  m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>

                    <p>
                        {{ $post->body }}
                    </p>
                    <hr />

    <h2 class="mt-6 text-4xl leading-10 tracking-tight font-bold text-purple-900 text-center">Comment Section</h2>
    <div>
        <form action="/blog/{{ $post->id }}/comments" method="POST" class="mb-0">
            @csrf
            <label for="author" class="text-sm font-medium text-gray-700">Author</label>
            <input type="text" name="author" class="mt-1 py-2 px-3 block w-full borded border-gray-400 rounded-md shadow-sm" value="{{ old('author')}}" required>

            <label for="author" class="mt-6 block text-sm font-medium text-gray-700">Comment</label>
            <textarea name="text" class="mt-3 py-4 px-3 block w-full borded border-purple-400 rounded-md shadow-sm" required>{{ old('text') }}</textarea>

            @if ($errors->any())
                <div class="mt-6">
                    <ul class="bg-red-100 px-4 py-5 roundend-md">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full">Post</button>
        </form>

        <div class="mt-6">
            @foreach ($comments as $comment)
                <div class="mb-5 bg-white px-4 py-6 rounded-sm shadow-md">
                    <div class="flex">
                        <div class="mr-3 flex flex-col justify-center">
                        </div>

                        <div class="flex flex-col justify-center">
                            <p class="mr-2 text-purple-600 font-bold">{{ $comment->author }}</p>
                            <p class="text-purple-600">{{ $comment->created_at->diffForHumans() }}</p>
                        </div>
                    </div>

                    <div class="mt-3 text-purple-600">
                        <p>{{ $comment->text }}</p>
                    </div>

                    <form action="/comments/{{ $comment->id }}" method="POST" class="mb-0 mt-3">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class=" bg-purple-500 text-gray-100  py-1 px-1 rounded-3xl">Delete comment</button>
                    </form>
                </div>
            @endforeach

            {{ $comments->links() }}
        </div>
    </div>
</div>

@endsection 
