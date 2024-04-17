<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nobile Academic Writing</title>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <nav class="bg-white-800">
        <div class="container mx-auto">
          <div class="flex py-6 items-center">
            
            <div class="w-1/3 ">
              
              <div class="flex w-100">
                <div class="space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="#" class="text-black rounded-md px-3 py-2 text-3xl font-bold " aria-current="page">LOGO</a>
                </div>
                
              </div>
            </div>
            <div class="w-2/3 ">
                <div class="flex justify-around">
                    <a href="javascript:;" class="flex items-center">
                        <img src="{{asset('assets/img/nav-us-flag.png')}}" alt="" class="h-[30px] px-2">
                        UK  +44 7456 290489
                    </a>
                    <a href="javascript:;" class="flex items-center">
                        <img src="{{asset('assets/img/nav-wsicon.png')}}" alt="" class="w-[55px] px-2">
                        UK  +44 7456 290489
                    </a>
                <div class="flex">
                    {{-- <a href="javascript:;" >Get Started</a> --}}
                    <button class="animated-button">
                        <span>Hover me</span>
                        <span></span>
                      </button>
                      
                </div>
                <div class="flex items-center">
                    <a href="javascript:;"><i class="fa fa-bars text-3xl "></i></a>
                </div>
                </div>
            </div>
          </div>
        </div>
      
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="">
          <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
          </div>
        </div>
      </nav>

<section class="h-[50vh] bg-white">

</section>


      {{-- footer --}}
          <div class="bg-black h-[auto] text-white	py-[5rem]">
             <div class="container mx-auto">
              <div class="flex py-10 justify-center items-center">
               <div class="w-1/3 p-[1rem]">
                  <h1 class="text-3xl px-1">LOGO</h1>
                  <p class="py-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum iure cum repellat asperiores, nostrum magni laudantium distinctio et nesciunt pariatur sunt quas aliquam deleniti dolore nisi aspernatur, praesentium saepe reiciendis?</p>
                  <div class="social-icons flex pt-3.5">
                    <i class="fa fa-facebook text-2xl mx-2"></i>
                    <i class="fa fa-twitter text-2xl mx-2"></i>
                    <i class="fa fa-instagram text-2xl mx-2"></i>
                    <i class="fa fa-linkedin text-2xl mx-2"></i>
                  </div>
               </div>
               <div class="w-2/3 flex p-[1rem] justify-around">
                <div class="w-[12%]"> 
                <h3 class="text-2xl font-bold">Links</h3>
                <ul>
                <li class="pt-3.5">Home</li>
                <li class="pt-3.5">About Us</li>
                <li class="pt-3.5">Assignment</li>
                <li class="pt-3.5">Dessertation</li>
                <li class="pt-3.5">Essay</li>
                <li class="pt-3.5">Review</li>    
                <li class="pt-3.5">Contact Us</li>    
                </ul>    
                </div>
                <div class="w-[32%]"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium ullam impedit quos, eos facilis sunt. Quis, similique delectus impedit, fugit repellendus iste ducimus iusto illum labore error hic est minima! </div>
                <div class="w-[22%]"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique dolorum, odit officia quae quisquam labore aliquam vel temporibus accusantium. Nostrum ex eaque a architecto voluptatum eius esse doloribus deserunt eum? </div>

               </div>
              </div>
             </div>
          </div>
          {{-- footer end --}}
    @yield('content')

</body>
</html>