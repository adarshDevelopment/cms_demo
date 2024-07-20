<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-vfGMRPXN1w9YxLmFCk8gmbFmxEaR60kg9+cvXYVAOmHdWntcPofunYm2w1J4pDPBx/3N5Gq1g1L6T8Qv2JFj5A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @vite(['resources/js/app.js'])

</head>

<body>
    <div class=" ">


        {{-- sidebar --}}
        <div
            class="sidebar fixed top-0 left-0 min-h-screen lg:w-[300px] w-0 hidden lg:block overflow-y-auto
            text-center bg-gradient-to-t to-gray-900 from-stone-900 text-gray-300 px-2">

            {{-- Sidebar items --}}

            <div class="flex flex-col justify-between min-h-full">
                {{-- Top items  --}}
                <div>
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

                {{-- Bottom items logout button --}}

                <div class=" flex items-center mt-2">
                    <a href="" class="flex bg-green-600 duration-100 w-full px-3 py-5 mb-2 rounded-md">
                        <h1 class="font-bold">Logout</h1>
                    </a>
                </div>
            </div>








        </div>

        {{-- Main content --}}
        <div
            class="lg:ml-[300px] bg-indigo-100 max:w-screen flex-grow  flex flex-col max-w-screen justify-between min-h-screen px-3">

            {{-- top items --}}
            <div class="flex flex-col gap-5">



                {{-- top nav items --}}
                <div class="flex justify-between items-center h-16">


                    {{-- top left items  --}}
                    <div>
                        <button class="">
                            <i class="fa-solid fa-bars text-2xl font-bold "></i>

                        </button>
                    </div>
                    {{-- end of top left items --}}


                    {{-- top right items --}}
                    <div class="flex gap-5 items-center">

                        <button>
                            <i class="fa-regular fa-bell text-xl"></i>

                        </button>



                        {{-- <div class="h-12 w-[2px] bg-gray-400 my-auto rounded-md">
                        </div> --}}

                        {{-- log out buttons --}}
                        <div class="flex items-center gap-5 overflow-hidden">

                            <div class="overflow-hidden rounded-full cursor-pointer ">
                                <img src="https://t3.ftcdn.net/jpg/02/22/85/16/360_F_222851624_jfoMGbJxwRi5AWGdPgXKSABMnzCQo9RN.jpg"
                                    class="h-11 w-12 overflow-hidden rounded-full " alt="">
                            </div>


                            <div class="h-12 w-[2px] bg-gray-400 my-auto rounded-md">
                            </div>
                            {{-- <span>Logout</span> --}}
                            <button class="text-md font-semibold text-gray-700 ">
                                Log Out
                                {{-- <i class="fa-solid fa-right-from-bracket text-2xl"></i> --}}
                            </button>

                        </div>



                    </div>
                </div>


                {{-- Center Items --}}

                {{-- left side --}}
                <div class="bg-white p-5 shadow-2xl rounded-md">
                    <form action="" class="">

                        <div
                            class=" w-[80%] mx-auto grid lg:grid-cols-3 gap-x-24 gap-y-11 md:grid-cols-2 text-gray-700 text-xl  pb-10">
                            <div class="col-span-3 bg-gray-300 py-2 px-3 rounded-sm text-center">
                                Please make sure you only fill the correct information.
                            </div>

                            {{-- first second rows --}}
                            <div class="row-span-2 col-span-1">
                                <span class="text-semibold">Personal Information</span>
                                <p class="text-sm">Information about the section could go here and a brief description
                                    of how this might be used.
                                </p>
                            </div>

                            <div class="col-span-1 flex flex-col gap-5">
                                <label for="name" class="col-span-1">First Name</label>
                                <input type="text"
                                    class="= py-1 px-3 rounded-sm border-gray-500 border border-solid focus:border-red-400">
                            </div>

                            <div class="col-span-1 flex flex-col gap-5">
                                <label for="name" class="col-span-1">Last Name</label>
                                <input type="text"
                                    class="= py-1 px-3 rounded-sm border-gray-500 border border-solid focus:border-red-400">
                            </div>
                            <div class="col-span-1 flex flex-col gap-5">
                                <label for="name" class="col-span-1">Email Address</label>
                                <input type="text"
                                    class="= py-1 px-3 rounded-sm border-gray-500 border border-solid focus:border-red-400">
                            </div>

                            <div class="col-span-1 flex flex-col gap-5">
                                <label for="name" class="col-span-1">Phone number</label>
                                <input type="text"
                                    class="= py-1 px-3 rounded-sm border-gray-500 border border-solid focus:border-red-400">
                            </div>


                            <hr class="col-span-3">

                            <div class="row-span-2 col-span-1">
                                <span class="text-semibold">Security</span>
                                <p class="text-sm">Information about the section could
                                    go here and a brief description of how thins might be used.
                                </p>
                            </div>

                            <div class="col-span-1 flex flex-col gap-5">
                                <label for="name" class="col-span-1">Password</label>
                                <input type="text"
                                    class="= py-1 px-3 rounded-sm border-gray-500 border border-solid focus:border-red-400">
                            </div>

                            <div class="col-span-1 flex flex-col gap-5">
                                <label for="name" class="col-span-1">Security Code</label>
                                <input type="text"
                                    class="= py-1 px-3 rounded-sm border-gray-500 border border-solid focus:border-red-400">
                            </div>

                            <div class="col-span-1 flex flex-col gap-5">
                                <label for="name" class="col-span-1">Recovery Email address</label>
                                <input type="text"
                                    class="= py-1 px-3 rounded-sm border-gray-500 border border-solid focus:border-red-400">
                            </div>

                            <div class="col-span-1 flex flex-col gap-5">
                                <label for="name" class="col-span-1">Alternate phone number</label>
                                <input type="text"
                                    class="= py-1 px-3 rounded-sm border-gray-500 border border-solid focus:border-red-400">
                            </div>


                            <div class="col-span-3 flex justify-start">
                                <button class="bg-blue-500 py-2 px-5 rounded-md text-white hover:bg-blue-600 w-full">
                                    Submit
                                </button>
                            </div>



                        </div>


                    </form>
                </div>





                {{-- <div class=" w-full bg-amber-400 mx-auto py-5 text-center">hello</div>
                    <div class=" w-full bg-amber-400 mx-auto py-5 text-center">hello</div>
                    <div class=" w-full bg-amber-400 mx-auto py-5 text-center">hello</div>
                    <div class=" w-full bg-amber-400 mx-auto py-5 text-center">hello</div>
                    <div class=" w-full bg-amber-400 mx-auto py-5 text-center">hello</div>
                    <div class=" w-full bg-amber-400 mx-auto py-5 text-center">hello</div>
                    <div class=" w-full bg-amber-400 mx-auto py-5 text-center">hello</div>
                    <div class=" w-full bg-amber-400 mx-auto py-5 text-center">hello</div> --}}



            </div>
            {{-- end of top items --}}



            {{-- Footer  --}}
            <div class="flex justify-center max-w-screen bg-green-400">
                <div class="flex text-center">
                    footer text
                </div>
            </div>
        </div>



    </div>
</body>

</html>
