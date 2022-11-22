@extends('user.main')

@section('title')
    Content
@endsection

@section('content')
    <div class="h-full w-full">
        <!-- background -->
    @foreach($content as $content)
        <div class="bg-gray-200 h-[400px] w-full relative">
            <img class="h-full w-full object-cover absolute" src="/assets/crumpled_paper_1405.jpg"></img>
            <div class="flex justify-center">
                <h1 class="mt-[1.5rem] text-3xl md:text-5xl lg:text-7xl font-extrabold flex justify-center absolute">{{$content->title}}</h1>
            </div>
        </div>
        <!-- content image and text content-->
        <div class="w-full h-full flex justify-center">
            <div class="bg-black h-[200px] md:h-[300px] lg:h-[500px] w-[90%] md:w-[80%] relative bottom-[3.5rem]">
                <img class="shadow-xl h-full w-full" src="/assets/liquid.jpg"></img>
            </div>
        </div>

        <div class="w-full h-[auto] flex justify-center">
            <div class="w-full md:w-[80%]">
                <h1 class="mb-[1.5rem]">{{$content->created_at}}</h1>
                    <p class="mb-[1.5rem]">{{$content->text1}}</p>
                    <div class="bg-black h-[200px] md:h-[300px] lg:h-[500px] w-[90%] md:w-full mb-[1.5rem] m-auto">
                        <img class="shadow-xl h-full w-full" src="/assets/liquid.jpg"></img>
                    </div>
                    <p class="mb-[1.5rem]">{{$content->text2}}</p>
            </div>
        </div>
    @endforeach
    </div>
@endsection