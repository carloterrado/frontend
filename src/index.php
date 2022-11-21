<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="/src/image/chesca_logo.png" type="image/icon type">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="./css/main.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Navbar -->
    <nav class="relative px-4 md:px-12 flex justify-between items-center bg-white shadow-sm">
        <a class="flex items-center text-3xl font-bold leading-none"  href="#">
            <img src="./assets/image/Chesca_logo.svg" class="h-20 md:h-[5.5rem]" alt="Chesca Logo">
        </a>
        <!-- menu icon -->
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center p-3 focus:outline-none focus:text-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-align-justified" width="30" height="30" 
            viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="4" y1="6" x2="20" y2="6" />
                <line x1="4" y1="12" x2="20" y2="12" />
                <line x1="4" y1="18" x2="16" y2="18" />
            </svg>
            </button>
        </div>
        <!-- Nav List -->
        <ul class="nav-list-container">
            <li>
            <a class="nav-list hover-nav" href="#">Home</a>
            </li>
            <li>
            <a class="nav-list hover-nav" href="#">Cars</a>    
            </li>
            <li>
            <a class="nav-list hover-nav" href="#">About Us</a>
            </li>
            <li>
            <a class="nav-list hover-nav" href="#">Contacts</a>
            </li>
        </ul>
        <!-- Login and sign up button -->
        <div class="hidden lg:flex justify-between">
        <div class=" flex lg:hidden justify-between gap-3">
            <button class="btn-1 btn-non-orange">Login</button>
            <button class="btn-1 btn-orange-1">Sign up</button>
        </div>
            <!-- Profile -->
            <div class="lg:flex items-center md:order-2 mr-[1rem]">
                <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <div class="inline-flex overflow-hidden relative justify-center items-center w-10 h-10 bg-gray-200 ring-2 ring-gray-300 rounded-full">
                    <span class="font-medium text-gray-600">JR</span>
                </div>
                <!-- <img class="w-8 h-8 outline outline-2 outline-offset-[1px] outline-gray-700 rounded-full" src="./assets/image/profile.jpg" alt="user photo"> -->
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-200 px-2 rounded shadow-md" id="user-dropdown">
                <div class="px-3 py-5">
                    <span class="block text-xl font-semibold text-gray-900">Jennifer Rebadavia</span>
                </div>
                <ul class="pt-4 pb-2" aria-labelledby="user-menu-button">
                    <li>
                    <a href="#" class="user-menu-list flex justify-between items-center">
                        <span class="flex-1 whitespace-nowrap">Reserved Car</span>
                        <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-accent-regular bg-accent-light rounded-full">3</span>
                    </a>
                    </li>
                    <li>
                    <a href="#" class="user-menu-list">Terms & Conditions</a>
                    </li>
                    <li>
                    <a href="#" class="user-menu-list">Log out</a>
                    </li>
                </ul>
                </div>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            </div>
        </div>
    </nav>
     <!-- Side navbar -->
    <div class="navbar-menu  relative z-50 w-[20rem] hidden lg:hidden" aria-label="Sidebar">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="fixed top-0 left-0 bottom-0 overflow-y-auto flex flex-col w-[18rem] max-w-s py-4 px-3 bg-white rounded shadow-xl">
        <ul class="space-y-1">
            <!-- Logo & Exit Button -->
            <div class="navbar-close flex justify-end mb-4 px-3">
            <button type="button" class="text-accent-regular border border-accent-regular hover:bg-accent-regular hover:text-white font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center">
                <svg aria-hidden="true" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            </div>
            <!-- Username and profile picture -->
            <div class="">
            <li class="flex justify-evenly items-center">
                <div class="inline-flex overflow-hidden relative justify-center items-center w-12 h-12 bg-gray-200 ring-2 ring-gray-300 rounded-full">
                    <span class="font-medium text-gray-600">JR</span>
                </div>
                <div href="#" class="p-2 text-base font-semibold text-gray-900 rounded-lg">Jennifer Rebadavia</div>
                </li>
                <li>
                <a href="#" class="sidebar-hover mt-8 ">
                    <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
                </a>
                </li>
                <li>
                <a href="#" class="sidebar-hover">
                    <span class="flex-1 ml-3 whitespace-nowrap">Reserved Car</span>
                    <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-accent-regular bg-accent-light rounded-full">3</span>
                </a>
                </li>
            </div>
        </ul>
        
        <ul class="pt-4 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
            <li>
                <a href="#" class="sidebar-list sidebar-hover">
                    <span class="ml-3">Home</span>
                </a>
            </li>
            <li>
                <a href="#" class="sidebar-list sidebar-hover">
                    <span class="ml-3">Cars</span>
                </a>
            </li>
            <li>
                <a href="#" class="sidebar-list sidebar-hover">
                    <span class="ml-3">About</span>
                </a>
            </li>
            <li>
                <a href="#" class="sidebar-list sidebar-hover">
                    <span class="ml-3">Contacts</span>
                </a>
            </li>
            <li>
                <a href="#" class="sidebar-list sidebar-hover">
                    <span class="ml-3">FAQs</span>
                </a>
            </li>
            <li>
                <a href="#" class="sidebar-list sidebar-hover">
                    <span class="ml-3">Terms & Conditions</span>
                </a>
            </li>
        </ul>
        <!-- Side Nav Bar Login Button -->
        <div class=" mt-12 px-3">
            <div class="pt-6">
            <button class="btn-orange-sidebar">Log out</button>
            </div>
            <div class="hidden  flex-col justify-between gap-3">
            <button class="btn-1 btn-non-orange">Login</button>
            <button class="btn-1 btn-orange-1">Sign up</button>
            </div>
        </div>  
        </nav>
    </div>
    <!-- Main -->
    <main>
        <!-- Hero section -->
        <section class="relative text-white h-[100vmin] md:h-[calc(100vmin-5.5rem)]">
            <img class="w-full h-full object-cover" src="./assets/image/redcar-home.jpg" alt="hero image">
            <div class="absolute inset-0 bg-black/10"></div>
            <div class="flex flex-col gap-4 w-auto sm:w-1/2  absolute top-1/3 -translate-y-1/3 left-8 md:left-32 font-[800] font-[Montserrat]">
                <h1 class="text-[2rem] sm:text-[3rem] lg:text-[4.5rem] leading-none font-[Roboto] font-[600] ">Welcome</h1>
                <h2 class="sm:text-[1.2rem] leading-6">Find the best deal on rental cars <br> and drive to your destination</h2>
                <p class="font-[400]">Sedan cars at low cost, <br> starts at ₱1500.00</p>
                <button class="btn-1 bg-accent-regular uppercase border-none w-[fit-content] sm:mt-6">Find a car</button>
            </div>
        </section>
    
        <!-- Ride with our service section -->
        <section class="bg-white p-6 sm:p-14 flex flex-col gap-6 sm:gap-24 justify-between">
            <div class="font-bold">
                <p class="text-center text-accent-regular text-[1.2rem] sm:text-[1.75rem]">Ride with</p>
                <h2 class="text-center text-[1.5rem] sm:text-[2.5rem] uppercase leading-none">Our Services</h2>
            </div>
            <div class="flex justify-center flex-wrap sm:flex-nowrap text-center">
                <div class="max-w-[400px] py-6 sm:px-6 border-t border-t-accent-regular sm:border-t-0 sm:border-r sm:border-r-accent-regular">
                    <i class='bx bxs-truck text-accent-regular text-[4rem]'></i>
                    <h3 class="mb-3 text-[1.2rem] sm:text-[1.5rem] font-bold">Service 1</h3>
                    <p class="font-medium ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum, voluptates quae pariatur facilis nihil incidunt. Quia unde fugit recusandae iste.</p>
                </div>
                <div class="max-w-[400px] py-6 sm:px-6 border-t border-t-accent-regular sm:border-t-0">
                    <i class='bx bxs-truck text-accent-regular text-[4rem]'></i>
                    <h3 class="mb-3 text-[1.2rem] sm:text-[1.5rem] font-bold">Service 2</h3>
                    <p class="font-medium ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum, voluptates quae pariatur facilis nihil incidunt. Quia unde fugit recusandae iste.</p>
                </div>
                <div class="max-w-[400px] pt-6 sm:px-6 border-t border-t-accent-regular sm:border-t-0  sm:border-l sm:border-l-accent-regular">
                    <i class='bx bxs-truck text-accent-regular text-[4rem]'></i>
                    <h3 class="mb-3 text-[1.2rem] sm:text-[1.5rem] font-bold">Service 3</h3>
                    <p class="font-medium ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum, voluptates quae pariatur facilis nihil incidunt. Quia unde fugit recusandae iste.</p>
                </div>
            </div>
        </section>
    
        <!-- How to rent a car section -->
        <section class="bg-[#F5F5F5] px-6 pb-14 sm:p-14 gap-4 grid sm:grid-cols-2 lg:grid-cols-4">
            <div class="py-10  sm:h-[400px] sm:flex sm:flex-col sm:justify-end">
                <p class="text-accent-regular text-[1.2rem] font-medium whitespace-nowrap">How to rent a Car?</p>
                <p class="whitespace-nowrap sm:mb-8 font-bold text-[1.2rem] sm:text-[1.75rem]">Experience with <br>
                our car rental <br>
                <span class="relative before:content-[''] before:absolute before:-bottom-2 before:left-0 before:h-[3px] before:w-1/2 before:bg-accent-regular">offer</span></p>
            </div>
            <div class="py-10 px-8 sm:h-[400px] bg-white relative before:absolute before:left-0 before:-bottom-[2px] before:content-[''] before:h-[3px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500">
                <h2 class="text-accent-regular text-[1.2rem] sm:text-[1.75rem] mb-3">01</h2>
                <i class='bx bx-calendar text-[3.5rem] relative -left-2'></i>
                <h3 class="font-bold mb-3">Find a car</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, corporis!</p>
            </div>
            <div class="py-10 px-8 sm:h-[400px] bg-white relative before:absolute before:left-0 before:-bottom-[2px] before:content-[''] before:h-[3px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500">
                <h2 class="text-accent-regular text-[1.2rem] sm:text-[1.75rem] mb-3">02</h2>
                <i class='bx bx-calendar text-[3.5rem] relative -left-2'></i>
                <h3 class="font-bold mb-3">Pick a car</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, corporis!</p>
            </div>
            <div class="py-10 px-8 sm:h-[400px] bg-white relative before:absolute before:left-0 before:-bottom-[2px] before:content-[''] before:h-[3px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500">
                <h2 class="text-accent-regular text-[1.2rem] sm:text-[1.75rem] mb-3">03</h2>
                <i class='bx bx-calendar text-[3.5rem] relative -left-2'></i>
                <h3 class="font-bold mb-3">Book a car</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, corporis!</p>
            </div>
        </section>
    
        <!-- Become a car owner section -->
        <section class="bg-white p-6 sm:p-14 grid gap-8 sm:grid-cols-2">
            <div class="sm:h-[100vh] relative">
                <div class="mb-16 sm:-translate-y-6">
                    <h2 class="text-[1.5rem] sm:text-[2.5rem] md:text-[3rem] font-bold whitespace-nowrap ">Lorem ipsum <br>
                     dolor sit amet, <br>
                      <span class="relative before:content-[''] before:absolute before:-bottom-2 before:left-0 before:h-[3px] before:w-1/4 before:bg-accent-regular">consectetur.</span> </h2>
                </div>
                <div>
                    <ul class="grid sm:grid-cols-2 gap-y-8 gap-x-4">
                        <li class="flex gap-2 items-center"><i class='bx bxs-check-circle text-[2.5rem] text-accent-regular'></i><span>Lorem ipsum dolor sit amet consectetur.</span></li>
                        <li class="flex gap-2 items-center"><i class='bx bxs-check-circle text-[2.5rem] text-accent-regular'></i><span>Lorem ipsum dolor sit amet consectetur.</span></li>
                        <li class="flex gap-2 items-center"><i class='bx bxs-check-circle text-[2.5rem] text-accent-regular'></i><span>Lorem ipsum dolor sit amet consectetur.</span></li>
                        <li class="flex gap-2 items-center"><i class='bx bxs-check-circle text-[2.5rem] text-accent-regular'></i><span>Lorem ipsum dolor sit amet consectetur.</span></li>
                        <li class="flex gap-2 items-center"><i class='bx bxs-check-circle text-[2.5rem] text-accent-regular'></i><span>Lorem ipsum dolor sit amet consectetur.</span></li>
                        <li class="flex gap-2 items-center"><i class='bx bxs-check-circle text-[2.5rem] text-accent-regular'></i><span>Lorem ipsum dolor sit amet consectetur.</span></li>
                    </ul>
                </div>
            </div>
            <div class="h-[400px] sm:h-[100vh] relative">
                <img class="w-full h-full object-cover" src="./assets/image/become.jpg" alt="">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="absolute top-1/4 sm:top-1/2 left-1/2 translate-x-[-50%] w-[90%] md:w-9/12 ">
                    <p class="text-center text-white mb-8">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum quaerat accusantium dolor assumenda fuga qui illum maxime deleniti dolorum impedit! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, sit. </p>
                    <button class="btn-orange-sidebar w-[fit-content] lg:w-[300px] outline-offset-0 whitespace-nowrap mx-auto block">Become a car rental owner</button>
                </div>
            </div>
    
        </section>
    
        <!-- Book Now section -->
        <section class="bg-white p-6 sm:p-14 sm:pb-28 grid gap-16 sm:grid-cols-2">  
            <div class=" h-[200px] sm:h-[100vh] relative">
                <img class="w-full h-full object-cover" src="./assets/image/booknow.png" alt="">
                <div class="absolute inset-0 bg-black/40"></div>
                <img class="absolute top-full left-0 w-full -translate-y-[70%]" src="./assets/image/red_car_booknow.png" alt="">
            </div>
            <div class="sm:h-[100vh] relative ">
                <div class="mb-16 sm:-translate-y-6">
                    <h2 class="text-[1.5rem] sm:text-[2.5rem] md:text-[3rem] font-bold whitespace-nowrap ">Lorem ipsum <br>
                     dolor sit amet, <br>
                      <span class="relative before:content-[''] before:absolute before:-bottom-2 before:left-0 before:h-[3px] before:w-1/4 before:bg-accent-regular">consectetur.</span> </h2>
                </div>
                <div>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam blanditiis, est officia cupiditate provident totam aspernatur, voluptate officiis id temporibus reprehenderit quos repellendus vitae recusandae! Eos unde necessitatibus, nostrum rem nobis eligendi harum rerum, inventore impedit, reprehenderit maiores consequuntur. Animi.</p>
                   <button class="btn-1 bg-accent-regular uppercase border-none w-[fit-content] text-white mt-6">Book now</button>
                </div>
            </div>
        </section>
    
        <!-- Frequently ask section -->
        <section class="bg-white p-6 sm:p-14 grid gap-8 sm:grid-cols-2">  
            <div class="sm:h-[100vh] relative order-2 sm:order-1">
                <div class="mb-16 sm:-translate-y-6">
                    <h2 class="text-[1.5rem] sm:text-[2rem] md:text-[2.5rem] lg:text-[3rem] font-bold whitespace-nowrap">
                     Frequently Asked <br>
                      <span class="relative before:content-[''] before:absolute before:-bottom-2 before:left-0 before:h-[3px] before:w-1/4 before:bg-accent-regular">Questions</span> </h2>
                </div>
                <div class="grid gap-8">
                   <p class="font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                   <p class="font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                   <p class="font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                   <button type="button" class="text-accent-regular border border-accent-regular hover:bg-accent-regular hover:text-white font-semibold rounded-full  p-2.5 text-center inline-flex items-center w-[fit-content]">
                    <span class="mr-3">More FAQs</span>
                    <svg aria-hidden="true" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </button>
                </div>
            </div> 
            <div class="h-[200px] sm:h-[100vh] relative order-1 sm:order-2">
                <img class="w-full h-full object-cover" src="./assets/image/faqs.jpg" alt="">
                <div class="absolute inset-0 bg-black/40"></div>
            </div>  
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-[#1F1F1F] text-white">
        <div class="grid md:grid-cols-3 p-6 sm:p-14">
            <div class="text-center md:text-left mb-12 md:mb-0">
                <h3 class="text-[1.2rem] sm:text-[1.5rem] uppercase font-bold text-accent-regular">About us</h3>
                <div class="grid gap-12 mt-4">   
                    <p>Lorem ipsum dolor sit amet <br>
                     consectetur adipisicing elit.</p>
                    <div class="mt-auto grid grid-cols-4 md:block text-center md:text-left">
                        <i class='bx bxl-twitter mr-4 text-accent-regular text-[1.75rem] '></i>
                        <i class='bx bxl-facebook mr-4 text-accent-regular text-[1.75rem]'></i>
                        <i class='bx bxl-instagram-alt mr-4 text-accent-regular text-[1.75rem]'></i>
                        <i class='bx bxs-envelope text-accent-regular text-[1.75rem]'></i>
                    </div>
                </div>
            </div>
            <div class="text-center md:text-left mb-12 md:mb-0">
                <h3 class="text-[1.2rem] sm:text-[1.5rem] uppercase font-bold text-accent-regular">Explore</h3>
               <ul class="mt-4 grid md:gap-4 grid-cols-4 md:grid-cols-1 ">
                <li class="text-center md:text-left border-r-2 md:border-r-0"><a href="#" class="relative before:absolute before:left-0 before:-bottom-[4px] before:content-[''] before:h-[2px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500 font-bold">Home</a></li>
                <li class="text-center md:text-left border-r-2 md:border-r-0"><a href="#" class="relative before:absolute before:left-0 before:-bottom-[4px] before:content-[''] before:h-[2px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500 font-bold">Cars</a></li>
                <li class="text-center md:text-left border-r-2 md:border-r-0"><a href="#" class="relative before:absolute before:left-0 before:-bottom-[4px] before:content-[''] before:h-[2px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500 font-bold">About</a></li>
                <li class="text-center md:text-left"><a href="#" class="relative before:absolute before:left-0 before:-bottom-[4px] before:content-[''] before:h-[2px] before:w-full before:bg-accent-regular before:scale-x-0 before:origin-right hover:before:scale-x-100 hover:before:origin-left before:transition-transform before:duration-500 font-bold">Contact</a></li>
               </ul>
            </div>
            <div class="text-center md:text-left">
                <h3 class="text-[1.2rem] sm:text-[1.5rem] uppercase font-bold text-accent-regular">Contact us</h3>
                <p class="mt-4"><span class="font-bold">Address </span>Lorem ipsum dolor sit <br>
                 amet consectetur adipisicing elit.</p>
               <ul class="mt-4 grid gap-4">
                <li><i class='bx bxs-phone mr-2 align-text-bottom text-accent-regular text-[1.2rem]'></i>09123456789</li>
                <li><i class='bx bxs-message-rounded-dots mr-2 align-text-bottom text-accent-regular text-[1.2rem]'></i>09123456789</li>
                <li><i class='bx bxs-chat mr-2 align-text-bottom text-accent-regular text-[1.2rem]'></i>09123456789</li>
               </ul>
            </div>
    
        </div>
        <div class="p-6 sm:px-14 bg-black">
            <p>2022 All Rights Reserve <span class="text-accent-regular">Terms of Use</span></p>
    
        </div>
    </footer>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
      <script src="./js/index.js"></script>
    
</body>
</html>