<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <nav class="flex justify-between px-[1.5rem] py-[1rem] md:px-[3.5rem] md:py-[2rem]">
        <h1 class="text-4xl font-bold">MEGA</h1>
        <div>
            <ul class="hidden md:flex">
                <li class="mr-[1rem]"><a href="#">Technology</a></li>
                <li class="mr-[1rem]"><a href="#">Mobile</a></li>
                <li><a href="#">Auto</a></li>
            </ul>
        </div>
    </nav>

    <section class="px-[1.5rem] py-[1rem] md:px-[3.5rem] md:py-[2rem]">
        @yield('content')
    </section>

    <section class="md:flex px-[1.5rem] py-[1rem] md:px-[3.5rem] md:py-[2rem] w-[100%] bg-[url('/assets/liquid.jpg')]">
        <div class="md:w-[40%] text-4xl font-bold mb-[1rem] md:mb-0">
            Get In Touch
        </div>
        <div class="md:w-[60%]">
            <div class="flex flex-col mb-[1rem]">
                <label class="mb-[.5rem]">Email address</label>
                <input placeholder="example@email.com" class="p-[1rem] border-2" type="email"></input>
            </div>
            <div class="flex flex-col">
                <label class="mb-[.5rem]">Message</label>
                <input placeholder="Hello..." class="p-[1rem] border-2" type="text"></input>
            </div>
        </div>
    </section>

    <footer class="md:flex md:justify-between px-[1.5rem] py-[1rem] md:px-[3.5rem] md:py-[2rem]">
        <h1 class="text-4xl font-bold mb-[1rem] md:mb-0">MEGA</h1>
        <div class="md:flex">
            <div class="flex flex-col mr-[4rem]">
                <a href="#" class="mb-[1rem]">HOME</a>
                <a href="#" class="mb-[1rem]">HOME</a>
                <a href="#">HOME</a>
            </div>
            <div class="flex flex-col">
                <a href="#" class="mb-[1rem]">SOCIAL</a>
                <a href="#" class="mb-[1rem]">SOCIAL</a>
                <a href="#">SOCIAL</a>
            </div>
        </div>
    </footer>
    
</body>
</html>