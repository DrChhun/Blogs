@extends('user.main')

@section('title')
    Home Page
@endsection

@section('content')
    <!-- hero section -->
    <div class="bg-blue-200 h-[480px] md:h-[640px] w-full relative mb-[1rem] md:mb-0">
        <img class="object-cover h-[100%] w-full absolute" src="/assets/crumpled_paper_1405.jpg"></img>
        <h1 class="text-4xl md:text-7xl lg:text-8xl p-[1rem] md:p-[3.5rem] font-extrabold uppercase absolute">learn from experience</h1>
    </div>

    <!-- recent content -->
    <div class="md:py-[2rem]">
        <h1 class="mb-[1rem] text-4xl font-bold">Recent</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach($post as $post)
            <div class="">
                <a href="/content/{{$post->id}}">
                    <img class="mb-[1rem]" @if($post-> image1) src="{{ asset('/'.$post->image1) }}" @else src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTNU14t4OtvdSZf-rTJAQWI6LdTIw5nYCYT1V3SfHgWja6cYMbG" @endif></img>
                    <h1 class="mb-[.5rem] text-lg font-bold">{{$post->title}}</h1>
                    <h1 class="mb-[.5rem]">{{$post->text1}}</h1>
                    <h1>{{$post->created_at}}</h1>
                </a>
            </div>
            @endforeach

        </div>
    </div>

    <!-- auto content -->
    <div class="md:py-[2rem]">
        <h1 class="text-4xl font-bold mb-[1rem]">Auto</h1>
        <div class="w-full md:flex gap-[1.5rem]">
            <div class="md:w-[25%]">
                <img class="mb-[1rem]" src="https://kinsta.com/wp-content/uploads/2021/11/front-end-developer-1024x512.png"></img>
                <h1 class="mb-[.5rem]">Become a frontend dev</h1>
                <h1 class="mb-[.5rem]">Be a frontend dev mean you need to learn alots</h1>
                <h1>2022-11-05</h1>
            </div>

            <div class="md:w-[25%]">
                <img class="mb-[1rem]" src="https://kinsta.com/wp-content/uploads/2021/11/front-end-developer-1024x512.png"></img>
                <h1 class="mb-[.5rem]">Become a frontend dev</h1>
                <h1 class="mb-[.5rem]">Be a frontend dev mean you need to learn alots</h1>
                <h1>2022-11-05</h1>
            </div>

            <div class="md:w-[25%]">
                <img class="mb-[1rem]" src="https://kinsta.com/wp-content/uploads/2021/11/front-end-developer-1024x512.png"></img>
                <h1 class="mb-[.5rem]">Become a frontend dev</h1>
                <h1 class="mb-[.5rem]">Be a frontend dev mean you need to learn alots</h1>
                <h1>2022-11-05</h1>
            </div>

            <div class="md:w-[25%]">
                <img class="mb-[1rem]" src="https://kinsta.com/wp-content/uploads/2021/11/front-end-developer-1024x512.png"></img>
                <h1 class="mb-[.5rem]">Become a frontend dev</h1>
                <h1 class="mb-[.5rem]">Be a frontend dev mean you need to learn alots</h1>
                <h1>2022-11-05</h1>
            </div>
        </div>
    </div>

    <!-- mobile content -->
    <div class="md:py-[2rem]">
        <h1 class="text-4xl font-bold mb-[1rem]">Auto</h1>
        <div class="w-full md:flex gap-[1.5rem]">
            <div class="md:w-[25%]">
                <img class="mb-[1rem]" src="https://kinsta.com/wp-content/uploads/2021/11/front-end-developer-1024x512.png"></img>
                <h1 class="mb-[.5rem]">Become a frontend dev</h1>
                <h1 class="mb-[.5rem]">Be a frontend dev mean you need to learn alots</h1>
                <h1>2022-11-05</h1>
            </div>

            <div class="md:w-[25%]">
                <img class="mb-[1rem]" src="https://kinsta.com/wp-content/uploads/2021/11/front-end-developer-1024x512.png"></img>
                <h1 class="mb-[.5rem]">Become a frontend dev</h1>
                <h1 class="mb-[.5rem]">Be a frontend dev mean you need to learn alots</h1>
                <h1>2022-11-05</h1>
            </div>

            <div class="md:w-[25%]">
                <img class="mb-[1rem]" src="https://kinsta.com/wp-content/uploads/2021/11/front-end-developer-1024x512.png"></img>
                <h1 class="mb-[.5rem]">Become a frontend dev</h1>
                <h1 class="mb-[.5rem]">Be a frontend dev mean you need to learn alots</h1>
                <h1>2022-11-05</h1>
            </div>

            <div class="md:w-[25%]">
                <img class="mb-[1rem]" src="https://kinsta.com/wp-content/uploads/2021/11/front-end-developer-1024x512.png"></img>
                <h1 class="mb-[.5rem]">Become a frontend dev</h1>
                <h1 class="mb-[.5rem]">Be a frontend dev mean you need to learn alots</h1>
                <h1>2022-11-05</h1>
            </div>
        </div>
    </div>

    <!-- technology content -->
    <div class="md:py-[2rem]">
        <h1 class="text-4xl font-bold mb-[1rem]">Auto</h1>
        <div class="w-full md:flex gap-[1.5rem]">
            <div class="md:w-[25%]">
                <img class="mb-[1rem]" src="https://kinsta.com/wp-content/uploads/2021/11/front-end-developer-1024x512.png"></img>
                <h1 class="mb-[.5rem]">Become a frontend dev</h1>
                <h1 class="mb-[.5rem]">Be a frontend dev mean you need to learn alots</h1>
                <h1>2022-11-05</h1>
            </div>

            <div class="md:w-[25%]">
                <img class="mb-[1rem]" src="https://kinsta.com/wp-content/uploads/2021/11/front-end-developer-1024x512.png"></img>
                <h1 class="mb-[.5rem]">Become a frontend dev</h1>
                <h1 class="mb-[.5rem]">Be a frontend dev mean you need to learn alots</h1>
                <h1>2022-11-05</h1>
            </div>

            <div class="md:w-[25%]">
                <img class="mb-[1rem]" src="https://kinsta.com/wp-content/uploads/2021/11/front-end-developer-1024x512.png"></img>
                <h1 class="mb-[.5rem]">Become a frontend dev</h1>
                <h1 class="mb-[.5rem]">Be a frontend dev mean you need to learn alots</h1>
                <h1>2022-11-05</h1>
            </div>

            <div class="md:w-[25%]">
                <img class="mb-[1rem]" src="https://kinsta.com/wp-content/uploads/2021/11/front-end-developer-1024x512.png"></img>
                <h1 class="mb-[.5rem]">Become a frontend dev</h1>
                <h1 class="mb-[.5rem]">Be a frontend dev mean you need to learn alots</h1>
                <h1>2022-11-05</h1>
            </div>
        </div>
    </div>
@endsection
