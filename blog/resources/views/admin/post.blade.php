@extends('admin.dashboard')

@section('title')
    Post
@endsection

@section('content')
    <div>

        <h1 class="text-5xl font-bold">Create New Post</h1>
        
        <form class="mt-8" action="/posting" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col mb-4">
                <label class="text-xl font-bold mb-2">Title</label>
                <input name="title" class="p-4 border-2 focus:outline-0 focus:border-2 focus:border-black" type="text" placeholder="Newest technology..."></input>
            </div>
            <div class="flex flex-col mb-4">
                <label class="text-xl font-bold mb-2">Image</label>
                <input id="image1" name="image1" class="p-4 border-2 focus:outline-0 focus:border-2 focus:border-black" type="file" placeholder="image"></input>
            </div>
            <div class="flex flex-col mb-4">
                <label class="text-xl font-bold mb-2">Content</label>
                <textarea name="text1" class="p-4 border-2 focus:outline-0 focus:border-2 focus:border-black" type="text" placeholder="a current century we all need..."></textarea>
            </div>
            <div class="flex flex-col mb-4">
                <label class="text-xl font-bold mb-2">Image</label>
                <input id="image2" name="image2" class="p-4 border-2 focus:outline-0 focus:border-2 focus:border-black" type="file" placeholder="image"></input>
            </div>
            <div class="flex flex-col mb-4">
                <label class="text-xl font-bold mb-2">Content</label>
                <textarea name="text2" class="p-4 border-2 focus:outline-0 focus:border-2 focus:border-black h-[auto]" type="text" placeholder="day by day we looking for..."></textarea>
            </div>
            <button type="submit"></button>
        </form>
    </div>
@endsection