<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Tailwind Starter Template - Landing Page Template: Tailwind Toolbox
    </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      .gradient {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
      }
    </style>
  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
          <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
            <!--Icon from: http://www.potlabicons.com/ -->
            <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
              <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
              <path
                class="plane-take-off"
                d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
              />
            </svg>
            HOTEL LOREM IPSUM
          </a>
        </div>
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">HOME</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">ROOM & FACILITES</a>
            </li>
            <li class="mr-3">
                <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">GALLERY</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">CONTACT</a>
            </li>
            <li class="mr-3">
                <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">PROFILE</a>
              </li>
          </ul>
          
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
    <!--Hero-->
    <div class="pt-20">
        <hr>      
    </div>
      
      
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center bg-white text-black h-900px">
        <section class="w-full lg:w-4/5">
            <div id='section2' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

                <form>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="nama">
                                Name
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-gey" id="nama" type="text" name="nama" placeholder="Your Name" value="">
                            {{-- <p class="py-2 text-sm text-gray-600">add notes about populating the field</p> --}}
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="email">
                                Email
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-gey" id="email" type="text" name="email" placeholder="Your Email" value="">
                            {{-- <p class="py-2 text-sm text-gray-600">add notes about populating the field</p> --}}
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="telp">
                                Phone Number
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-gey" id="telp" type="number" name="telp" placeholder="Your Number" value="">
                            {{-- <p class="py-2 text-sm text-gray-600">add notes about populating the field</p> --}}
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="tipe_kamar">
                                Room Type
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <select name="" class="form-select block w-full focus:bg-white" id="tipe_kamar" name="tipe_kamar">
                                <option value="Standar Room">Standar Room</option>
                                <option value="Deluxe Room">Deluxe Room</option>
                                
                            </select>

                            {{-- <p class="py-2 text-sm text-gray-600">add notes about populating the field</p> --}}
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="tgl_datang">
                                Arrival Date
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-gey" id="tgl_datang" type="date" name="tgl_datang" placeholder="Your Arrival" value="">
                            {{-- <p class="py-2 text-sm text-gray-600">add notes about populating the field</p> --}}
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="tgl_pergi">
                                Departure Date
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="form-input block w-full focus:bg-gey" id="tgl_pergi" type="date" name="tgl_pergi" placeholder="Your Arrival" value="">
                            {{-- <p class="py-2 text-sm text-gray-600">add notes about populating the field</p> --}}
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="pesan">
                                Message
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <textarea class="form-textarea block w-full focus:bg-white" id="pesan" name="pesan" placeholder="Type Your Message" value="" rows="8"></textarea>
                            {{-- <p class="py-2 text-sm text-gray-600">add notes about populating the field</p> --}}
                        </div>
                    </div>

                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button class="shadow bg-yellow-700 shadow-outline hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                Booking
                            </button>
                        </div>
                    </div>
                </form>

            </div>
            <!--/Card-->
        </section>
    </div>
    
    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>
  </body>
</html>