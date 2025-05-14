<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Elophia</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
      

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
          
        @endif
        <style>
            .main-header {
                opacity: 1;
                transition: opacity 0.3s ease;
            }
            .bg-home {
                background-image: url('assets/images/image1.jpg');
                background-size: cover;
                background-position: center;
            }
            .parallax {
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .font-dmsans {
                font-family: 'DM Sans', sans-serif;
            }
            .font-logo{
                font-family: 'Noto Sans JP', sans-serif;
            }
        </style>
    </head>
    <body class="overflow-x-hidden font-dmsans">
        <nav class="w-full h-16 fixed text-white flex items-center justify-center">
           <div class="nav-conten w-[85%] font-dmsans flex justify-between items-center">
            <h1 class=" font-logo text-3xl">Elophia</h1>
            <ul class="flex space-x-12">
                <li><a href="#">Collection</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="flex items-center space-x-4 text-white">
                <a href="#" class=" hover:underline">Register</a>
                
                <div class="w-px h-4 bg-white"></div>
                
                <a href="{{ route('login')}}" class="hover:underline">Login</a>
              </div>
           </div>
                
        </nav>
        <section class="landing-page text-white text-center w-screen h-screen bg-home parallax   flex justify-center items-center">
            <div class="main-header w-[85%] flex flex-col fade-text justify-center font-medium font-dmsans items-center">
                <div class="flex items-center space-x-3">
                  <span class="text-[50px] leading-none">Build</span>
              
                  <!-- SVG Icon -->
                  <svg class="w-[43xpx] h-[43px] mb-2" viewBox="0 0 96 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M96 102H0V47L47 0L96 47V102Z" fill="white"/>
                  </svg>
              
                  <h1 class="text-[50px] leading-none">your space.</h1>
                </div>
              
                <h1 class="text-[47px] mt-2">Keep your peace.</h1>
            </div>
        </section>
        <section class="area-content flex w-full h-auto justify-center relative z-10">
            <div class="content w-[85%]">
                <div class="text-area text-[43px] text-[#242424] leading-12 w-full py-20">
                    <h1 class="ml-16 line">Build your space with <span>Elophia.</span></h1>
                    <h1 class="line">Pick a design from our Collection and</h1>
                    <h1 class="line">we help you from permit to the build</h1>
                    <h1 class="line">to aftercare.</h1>
                </div>
                <div class="menu-grid flex items-center justify-between mb-12 border-b px-4 py-5 text-sm text-gray-700">
                    <div class="flex items-center gap-4">
                      
                      <button class="flex items-center gap-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                          viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L15 12.414V19a1 1 0 01-.553.894l-4 2A1 1 0 019 21v-8.586L3.293 6.707A1 1 0 013 6V4z">
                          </path>
                        </svg>
                        <span class="hidden sm:inline">Filter</span>
                      </button>
                  
                      <!-- Dropdown Filters -->
                      <button class="flex items-center gap-1">Any country <svg class="w-4 h-4" fill="none" stroke="currentColor"
                          stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg></button>
                  
                      <button class="flex items-center gap-1">Any price <svg class="w-4 h-4" fill="none" stroke="currentColor"
                          stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg></button>
                  
                      <button class="flex items-center gap-1">Any size <svg class="w-4 h-4" fill="none" stroke="currentColor"
                          stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg></button>
                  
                      <button class="flex items-center gap-1">Rooms <svg class="w-4 h-4" fill="none" stroke="currentColor"
                          stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg></button>
                    </div>         
                    <!-- Sort and Reset -->
                    <div class="flex items-center gap-4">
                      <button class="flex items-center gap-1">Sort <svg class="w-4 h-4" fill="none" stroke="currentColor"
                          stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg></button>
                        <button class="flex items-center gap-1">Reset</button>
                    </div>
                </div>
                <div class="gird-section w-full space-y-10 mb-32 ">
                    <div class="grid grid-cols-3 gap-5 ">
                        <div class="card w-full h-auto">
                            <img class="w-full" src="assets/images/build1.png" alt="">
                            <div class="text-area text-[#242424] mt-3 w-full">
                                <div class="flex flex-row justify-between">
                                    <h1>Hermitage</h1>
                                    <h1>Llabb</h1>
                                </div>
                                <div class="flex flex-row justify-between">
                                    <h1 class="font-medium">From $ 30.500,-</h1>
                                    <h1 class="text-[13px] text-gray-400">11 m²</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card w-full h-auto">
                            <img class="w-full" src="assets/images/build1.png" alt="">
                            <div class="text-area text-[#242424] mt-3 w-full">
                                <div class="flex flex-row justify-between">
                                    <h1>Hermitage</h1>
                                    <h1>Llabb</h1>
                                </div>
                                <div class="flex flex-row justify-between">
                                    <h1 class="font-medium">From $ 30.500,-</h1>
                                    <h1 class="text-[13px] text-gray-400">11 m²</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card w-full h-auto">
                            <img class="w-full" src="assets/images/build2.png" alt="">
                            <div class="text-area text-[#242424] mt-3 w-full">
                                <div class="flex flex-row justify-between">
                                    <h1>Hermitage</h1>
                                    <h1>Llabb</h1>
                                </div>
                                <div class="flex flex-row justify-between">
                                    <h1 class="font-medium">From $ 30.500,-</h1>
                                    <h1 class="text-[13px] text-gray-400">11 m²</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-5 ">
                        <div class="card w-full h-auto">
                            <img class="w-full" src="assets/images/build1.png" alt="">
                            <div class="text-area text-[#242424] mt-3 w-full">
                                <div class="flex flex-row justify-between">
                                    <h1>Hermitage</h1>
                                    <h1>Llabb</h1>
                                </div>
                                <div class="flex flex-row justify-between">
                                    <h1 class="font-medium">From $ 30.500,-</h1>
                                    <h1 class="text-[13px] text-gray-400">11 m²</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card w-full h-auto">
                            <img class="w-full" src="assets/images/build1.png" alt="">
                            <div class="text-area text-[#242424] mt-3 w-full">
                                <div class="flex flex-row justify-between">
                                    <h1>Hermitage</h1>
                                    <h1>Llabb</h1>
                                </div>
                                <div class="flex flex-row justify-between">
                                    <h1 class="font-medium">From $ 30.500,-</h1>
                                    <h1 class="text-[13px] text-gray-400">11 m²</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card w-full h-auto">
                            <img class="w-full" src="assets/images/build1.png" alt="">
                            <div class="text-area text-[#242424] mt-3 w-full">
                                <div class="flex flex-row justify-between">
                                    <h1>Hermitage</h1>
                                    <h1>Llabb</h1>
                                </div>
                                <div class="flex flex-row justify-between">
                                    <h1 class="font-medium">From $ 30.500,-</h1>
                                    <h1 class="text-[13px] text-gray-400">11 m²</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-5 ">
                        <div class="card w-full h-auto">
                            <img class="w-full" src="assets/images/build1.png" alt="">
                            <div class="text-area text-[#242424] mt-3 w-full">
                                <div class="flex flex-row justify-between">
                                    <h1>Hermitage</h1>
                                    <h1>Llabb</h1>
                                </div>
                                <div class="flex flex-row justify-between">
                                    <h1 class="font-medium">From $ 30.500,-</h1>
                                    <h1 class="text-[13px] text-gray-400">11 m²</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card w-full h-auto">
                            <img class="w-full" src="assets/images/build1.png" alt="">
                            <div class="text-area text-[#242424] mt-3 w-full">
                                <div class="flex flex-row justify-between">
                                    <h1>Hermitage</h1>
                                    <h1>Llabb</h1>
                                </div>
                                <div class="flex flex-row justify-between">
                                    <h1 class="font-medium">From $ 30.500,-</h1>
                                    <h1 class="text-[13px] text-gray-400">11 m²</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card w-full h-auto">
                            <img class="w-full" src="assets/images/build1.png" alt="">
                            <div class="text-area text-[#242424] mt-3 w-full">
                                <div class="flex flex-row justify-between">
                                    <h1>Hermitage</h1>
                                    <h1>Llabb</h1>
                                </div>
                                <div class="flex flex-row justify-between">
                                    <h1 class="font-medium">From $ 30.500,-</h1>
                                    <h1 class="text-[13px] text-gray-400">11 m²</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="promise-text w-full border-b mb-12 py-5 text-sm text-gray-700">
                    <h1 class="text-[43px] text-[#242424]  ">What we Promise</h1>
                </div> 
                <div class="blog-section w-full mb-32">
                    <div class="grid grid-cols-2 gap-10">
                        <div class="card w-full h-auto">
                            <img class="w-full" src="assets/images/blog1.jpg" alt="">
                            <div class="text-area text-[#242424] w-full">
                                <div class="flex flex-col">
                                    <h1 class="my-5 text-[24px]">Save the money and buy the planet time</h1>
                                    <p class="text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim nesciunt mollitia aliquam? Quia voluptatum quam aperiam veniam error laborum soluta quis eveniet sint unde officia fugiat expedita corporis provident in sed beatae est, repellat eligendi. </p>
                                </div>
                               
                            </div>
                        </div>
                        <div class="card w-full h-auto">
                            <img class="w-full h-[475px]" src="assets/images/blog2.jpg" alt="">
                            <div class="text-area text-[#242424] w-full">
                                <div class="flex flex-col">
                                    <h1 class="my-5 text-[24px]">You're not alone</h1>
                                    <p class="text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim nesciunt mollitia aliquam? Quia voluptatum quam aperiam veniam error laborum soluta quis eveniet sint unde officia fugiat expedita corporis provident in sed beatae est, repellat eligendi. </p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <footer class="bg-[#242424] text-white py-14 px-8 md:px-16">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-5 gap-8">
              <!-- Logo -->
              <div>
                <h1 class="text-3xl font-logo">Elophia</h1>
              </div>
          
              <!-- Discover -->
              <div>
                <h3 class="text-sm font-semibold mb-3">Discover</h3>
                <ul class="space-y-1 text-sm">
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Collection</a></li>
                  <li><a href="#">Blog</a></li>
                </ul>
              </div>
          
              <!-- Service -->
              <div>
                <h3 class="text-sm font-semibold mb-3">Service</h3>
                <ul class="space-y-1 text-sm">
                  <li><a href="#">How it works</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Press</a></li>
                </ul>
              </div>
          
              <!-- Contact -->
              <div>
                <h3 class="text-sm font-semibold mb-3">Contact</h3>
                <ul class="space-y-1 text-sm">
                  <li>TT Vasumweg 44</li>
                  <li>1033 SC, Amsterdam</li>
                  <li>The Netherlands</li>
                  <li><a href="mailto:home@elophia.com" class="underline">home@elophia.com</a></li>
                </ul>
              </div>
          
              <!-- Language & Social -->
              <div class="flex flex-col justify-between">
                <div>
                  <h3 class="text-sm font-semibold">Language</h3>
                  <p class="text-sm mt-1">English <span class="inline-block transform rotate-90">⌄</span></p>
                </div>
                <div class="flex items-center gap-4 mt-4 md:mt-0">
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
                  <a href="#"><i class="fab fa-facebook"></i></a>
                </div>
              </div>
            </div>
          
            <div class="max-w-7xl mx-auto mt-10 flex flex-col md:flex-row justify-between items-center text-sm">
              <p>© 2024 Elophia</p>
              <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
              </div>
            </div>
          </footer>
          


        <!-- GSAP Core -->
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <!-- GSAP ScrollTrigger -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

        <script>
        gsap.registerPlugin(ScrollTrigger);

        gsap.to(".main-header", {
            scrollTrigger: {
            trigger: ".main-header",
            start: "top",
            end: "bottom top",
            scrub: true
            },
          
            opacity: 0
        });
        
        gsap.utils.toArray(".line").forEach(line => {
            gsap.fromTo(line,
            { opacity: 0, y: 50 },
            {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "power2.out",
                scrollTrigger: {
                trigger: line,
                start: "top 90%",
                end: "top ",
                toggleActions: "play reverse play reverse", // line in & out effect
                }
            }
            );
        });
        </script>

      
       
    </body>
</html>
