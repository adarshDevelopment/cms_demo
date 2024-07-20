<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])

</head>

<body class="">
    {{-- Sidebar --}}
    <div class="fixed top-0 left-0 w-[300px] h-screen bg-gray-800">
        <div class="flex flex-col justify-end text-gray-300 px-2">
            <div class=" ">
                <div class="flex items-center mt-2">
                    <a href="" class="flex bg-blue-500 w-full px-3 py-5 mb-2 rounded-md">
                        <span>Icon here: &nbsp;</span>
                        <h1 class="font-bold">TailwindBar</h1>
                    </a>
                </div>

                <div class="flex items-center mt-2">
                    <a href="" class="flex hover:bg-gray-600  duration-100 w-full px-3 py-5 mb-2 rounded-md">
                        <span>Icon here: &nbsp;</span>
                        <h1 class="font-bold">TailwindBar</h1>
                    </a>
                </div>

                <div class="flex items-center mt-2">
                    <a href="" class="flex hover:bg-gray-600  duration-100 w-full px-3 py-5 mb-2 rounded-md">
                        <span>Icon here: &nbsp;</span>
                        <h1 class="font-bold">TailwindBar</h1>
                    </a>
                </div>

                <div class="flex items-center mt-2">
                    <a href="" class="flex hover:bg-gray-600 duration-100 w-full px-3 py-5 mb-2 rounded-md">
                        <span>Icon here: &nbsp;</span>
                        <h1 class="font-bold">TailwindBar</h1>
                    </a>
                </div>

                <div class="flex items-center mt-2">
                    <a href="" class="flex hover:bg-gray-600 duration-100 w-full px-3 py-5 mb-2 rounded-md">
                        <span>Icon here: &nbsp;</span>
                        <h1 class="font-bold">TailwindBar</h1>
                    </a>
                </div>
            </div>

            {{-- logout button --}}

            <div class=" flex items-center mt-2">
                <a href="" class="flex bg-green-600 duration-100 w-full px-3 py-5 mb-2 rounded-md">
                    <span>Icon here: &nbsp;</span>
                    <h1 class="font-bold">Logout</h1>
                </a>
            </div>
        </div>
        

    </div>


    {{-- Main content --}}
    <div class="ml-[300px] flex-grow bg-pink-500 flex flex-col max-w-screen px-2">
        <div class="flex bg-blue-200">
            hello
            <!-- Element to place after the fixed element -->
            <p>This element is placed after the fixed element.</p>
        </div>

    </div>

</body>

</html>
