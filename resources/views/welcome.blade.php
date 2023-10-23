<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')
  @vite('resources/js/slider.js')
  @vite('resources/js/app.js')
</head>

<body>
  <main class="lg:w-11/12 md:w-full md:m-auto">

    <!-- <div class="bg-primary flex flex-col text-white px-4 py-4"> -->
    <!--   <p>அண்ணா பல்கலைக்கழகம்</p> -->
    <!--   <p>Anna University</p> -->
    <!-- </div> -->
    <!-- <div class="bg-light px-4 py-4 flex justify-around items-center"> -->
    <!--   <p>skip to main content</p> -->
    <!--   <span class="flex gap-4"> -->
    <!--     <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"> -->
    <!--       <path -->
    <!--         d="M14.5455 11.7V9.3C14.5455 8.412 13.8982 7.7 13.0909 7.7H8.72727V5.3H10.1818V0.5H5.81818V5.3H7.27273V7.7H2.90909C2.10182 7.7 1.45455 8.412 1.45455 9.3V11.7H0V16.5H4.36364V11.7H2.90909V9.3H7.27273V11.7H5.81818V16.5H10.1818V11.7H8.72727V9.3H13.0909V11.7H11.6364V16.5H16V11.7H14.5455ZM7.27273 2.1H8.72727V3.7H7.27273V2.1ZM2.90909 14.9H1.45455V13.3H2.90909V14.9ZM8.72727 14.9H7.27273V13.3H8.72727V14.9ZM14.5455 14.9H13.0909V13.3H14.5455V14.9Z" -->
    <!--         fill="black" /> -->
    <!--     </svg> -->
    <!--     <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"> -->
    <!--       <path -->
    <!--         d="M13.8286 13.5L12.5714 8.5H7.8857L7.65713 7.5H11.4286V6.5H7.42855L6.74284 4C7.77141 3.9 8.57141 3.2 8.57141 2.3C8.57141 1.3 7.65713 0.5 6.51427 0.5C5.37141 0.5 4.57141 1.3 4.57141 2.3C4.57141 2.9 4.91427 3.5 5.4857 3.8L6.97141 9.5H11.6571L13.0286 14.5H16V13.5H13.8286Z" -->
    <!--         fill="black" /> -->
    <!--       <path -->
    <!--         d="M10.7429 10.5H10.1714C10.2857 10.8 10.2857 11.2 10.2857 11.5C10.2857 13.7 8.22857 15.5 5.71429 15.5C3.2 15.5 1.14286 13.7 1.14286 11.5C1.14286 9.4 2.97143 7.7 5.37143 7.5L5.14286 6.5C2.17143 6.9 0 8.9 0 11.5C0 14.3 2.51429 16.5 5.71429 16.5C8.45714 16.5 10.7429 14.8 11.3143 12.6L10.7429 10.5Z" -->
    <!--         fill="black" /> -->
    <!--     </svg> -->
    <!--     <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"> -->
    <!--       <path -->
    <!--         d="M11.4351 10.5629H10.7124L10.4563 10.3159C11.3838 9.2401 11.8935 7.86667 11.8925 6.44626C11.8925 5.2702 11.5438 4.12055 10.8904 3.14269C10.237 2.16484 9.30832 1.40269 8.22179 0.952634C7.13525 0.502576 5.93966 0.384821 4.7862 0.614258C3.63274 0.843696 2.57322 1.41002 1.74162 2.24162C0.910021 3.07322 0.343696 4.13274 0.114258 5.2862C-0.115179 6.43966 0.00257642 7.63525 0.452634 8.72179C0.902692 9.80832 1.66484 10.737 2.64269 11.3904C3.62055 12.0438 4.7702 12.3925 5.94626 12.3925C7.4191 12.3925 8.77301 11.8528 9.8159 10.9563L10.0629 11.2124V11.9351L14.6369 16.5L16 15.1369L11.4351 10.5629ZM5.94626 10.5629C3.66838 10.5629 1.82962 8.72413 1.82962 6.44626C1.82962 4.16838 3.66838 2.32962 5.94626 2.32962C8.22413 2.32962 10.0629 4.16838 10.0629 6.44626C10.0629 8.72413 8.22413 10.5629 5.94626 10.5629Z" -->
    <!--         fill="black" /> -->
    <!--     </svg> -->
    <!--     <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"> -->
    <!--       <path -->
    <!--         d="M16 4.05556L13.4322 0.5L10.8644 4.05556H12.5763V7.61111H10.8644L13.4322 11.1667L16 7.61111H14.2881V4.05556H16ZM5.13561 2.27778L0 16.5H1.82913L3.43401 12.0556H8.88033L10.4852 16.5H12.3143L7.17873 2.27778H5.13561ZM4.07511 10.2778L6.15674 4.51333L8.23838 10.2778H4.07511Z" -->
    <!--         fill="black" /> -->
    <!--     </svg> -->
    <!--   </span> -->
    <!-- </div> -->

    <div class="flex flex-col items-center gap-5 mt-5 md:flex-row md:m-4 md:items-end">
      <img class="w-1/3 md:w-32" src="{{ asset('logo.svg') }}" alt="logo" />
      <div class="flex flex-col items-center md:items-start">
        <h1 class="font-bold text-xl md:text-3xl">பன்னாட்டு தொடர்புகள் மையம் </h1>
        <h1 class="font-bold text-xl md:text-3xl">center for international relations</h1>
      </div>
    </div>


    <!-- Mobile navigation  -->
    <nav x-data="{ show: false }" class="h-full bg-white py-6 px-2 md:hidden">
      <div @click="show = !show" id="ham" class="toggle-btn flex gap-4" id="toggle-btn">
        <div class="flex flex-col gap-1 justify-center cursor-pointer">
          <span class="pill"></span>
          <span class="pill"></span>
          <span class="pill"></span>
        </div>
        <p class="font-bold">Menu</p>
      </div>
      <ul style="display: none" x-show="show" class="mt-6 font-bold flex flex-col gap-4"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 scale-90" x-transition:leave-end="opacity-0 scale-100">
        <li><a href="/">Home</a></li>
        <li><a href="#">Director's Desk</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">MOU</a></li>
        <li><a target="_blank" href="https://www.annauniv.edu/cir/images/fcsep.jpg">Student exchange program</a></li>
        <li><a href="#">travel grant</a></li>
        <li><a href="#">international hostels</a></li>
        <li><a href="#">merge</a></li>
      </ul>
    </nav>

    {{-- Desktop Navigation --}}
    <nav class="hidden md:block m-4">
      <ul class="mt-6 flex justify-around">
        <li class="link"><a href="/">Home</a></li>
        <li class="link"><a href="#">Director's Desk</a></li>
        <li class="link"><a href="#">About us</a></li>
        <li class="link"><a href="#">MOU</a></li>
        <li class="link"><a target="_blank" href="https://www.annauniv.edu/cir/images/fcsep.jpg">Student exchange
            program</a></li>
        <li class="link"><a href="#">travel grant</a></li>
        <li class="link"><a href="#">international hostels</a></li>
        <li class="link"><a href="#">merge</a></li>
      </ul>
    </nav>


    {{-- images --}}
    <section style="display: none;" class="splide md:m-4" id="slider">
      <div class="splide__track">
        <div class="splide__list md:max-h-[30rem]">
          <div class="relative splide__slide">
            <img class="object-cover w-full h-full" src="{{ asset('school-placeholder.jpeg') }}" alt="something" />
            <div class="absolute w-full h-full bottom-0 bg-gradient-to-b from-transparent from-60% to-black">
            </div>
            <p class="absolute
              z-20 bottom-2 text-white left-4">This is something that is very big and
              big
              and big big
              big
              big big</p>
          </div>

          <div class="relative splide__slide">
            <img class="object-cover w-full h-full" src="{{ asset('school-placeholder.jpeg') }}" alt="something" />
            <div class="absolute w-full h-full bottom-0 bg-gradient-to-b from-transparent from-60% to-black ">
            </div>
            <p class="absolute z-20 bottom-2 text-white left-4">this is something that is very big and big and big
              big
              big
              big big</p>
          </div>

          <div class="relative splide__slide">
            <img class="object-cover w-full h-full" src="{{ asset('school-placeholder.jpeg') }}" alt="something" />
            <div class="absolute w-full h-full bottom-0 bg-gradient-to-b from-transparent from-60% to-black ">
            </div>
            <p class="absolute z-20 bottom-2 text-white left-4">this is something that is very big and big and big
              big
              big
              big big</p>
          </div>

          <div class="relative splide__slide">
            <img class="object-cover w-full h-full" src="{{ asset('school-placeholder.jpeg') }}" alt="something" />
            <div class="absolute w-full h-full bottom-0 bg-gradient-to-b from-transparent from-60% to-black ">
            </div>
            <p class="absolute z-20 bottom-2 text-white left-4">this is something that is very big and big and big
              big
              big
              big big</p>
          </div>

          <div class="relative splide__slide">
            <img class="object-cover w-full h-full" src="{{ asset('school-placeholder.jpeg') }}" alt="something" />
            <div class="absolute w-full h-full bottom-0 bg-gradient-to-b from-transparent from-60% to-black ">
            </div>
            <p class="absolute z-20 bottom-2 text-white left-4">this is something that is very big and big and big
              big
              big
              big big</p>
          </div>
        </div>
      </div>
    </section>

    <div class="md:flex justify-between">

      {{-- Notifications --}}
      <section class="m-4">
        <h2 class="font-bold text-2xl">Notifications</h2>
        <hr class="w-20 border-t-4 border-t-black " />

        <div class="flex flex-col gap-4 mt-5">
          <div class="flex gap-4 pb-2 border-b-2">
            <div class="p-2 pt-0 items-start font-bold">
              <p>DEC</p>
              <p>04</p>
            </div>
            <div>
              <p>International Cooperative Graduate Program for Research Scholars in National Institute
                of Materials
                Science
                (NIMS), Japan</p>
              <a href="#" class="underline mt-3 block cursor-pointer text-sm">More Deatils</a>
            </div>
          </div>


          <div class="flex gap-4 pb-2 border-b-2">
            <div class="p-2 pt-0 items-start font-bold">
              <p>DEC</p>
              <p>04</p>
            </div>
            <div>
              <p>International Cooperative Graduate Program for Research Scholars in National Institute
                of Materials
                Science
                (NIMS), Japan</p>
              <a href="#" class="underline mt-3 block cursor-pointer text-sm">More Deatils</a>
            </div>
          </div>


          <div class="flex gap-4 pb-2 border-b-2">
            <div class="p-2 pt-0 items-start font-bold">
              <p>DEC</p>
              <p>04</p>
            </div>
            <div>
              <p>International Cooperative Graduate Program for Research Scholars in National Institute
                of Materials
                Science
                (NIMS), Japan</p>
              <a href="#" class="underline mt-3 block cursor-pointer text-sm">More Deatils</a>
            </div>
          </div>

        </div>
      </section>

      {{-- stats --}}
      <section class="m-4">
        <h2 class="font-bold text-2xl md:text-3xl">Stats</h2>
        <hr class="w-20 border-t-4 border-t-black" />
        <h1>This is where the stats go</h1>
      </section>
    </div>


  </main>

  <footer class="flex flex-col md:flex-row md:items-end md:justify-between gap-2 py-4 bg-primary text-white ">
    <div class="self-start ml-4 mb-4 flex flex-col gap-3">
      <h4 class="font-bold text-2xl">Contact us</h4>
      <div class="font-semibold mt-1 text-sm flex flex-col gap-1">
        <p>CENTRE FOR INTERNATIONAL RELATIONS,</p>
        <p>Anna University,</p>
        <p>Sardar Patel Road,</p>
        <p>Guindy,</p>
        <p>Chennai - 600 025, INDIA.</p>
        <p><a class="underline" href="tel:+9104422358561">+91 - 044 - 2235 8561</a></p>
        <p><a class="underline" href="mailto:director.cir@annauniv.edu">director.cir@annauniv.edu</a></p>
      </div>
    </div>

    <div class="flex flex-col gap-2 mr-6">
      <div class="flex justify-center gap-4">
        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <ellipse cx="12" cy="11.125" rx="12" ry="10.5" fill="#0A66C2" />
          <path d=" M8.63333 5.625C8.33275 5.625 8.04449 5.7413 7.83195 5.94832C7.6194 6.15534 7.5 6.43612 7.5 6.7289C7.5
    7.02167 7.6194 7.30245 7.83195 7.50947C8.04449 7.71649 8.33275 7.83279 8.63333 7.83279C8.93391 7.83279 9.22218
    7.71649 9.43472 7.50947C9.64726 7.30245 9.76667 7.02167 9.76667 6.7289C9.76667 6.43612 9.64726 6.15534 9.43472
    5.94832C9.22218 5.7413 8.93391 5.625 8.63333 5.625ZM7.56667 8.74188C7.54899 8.74188 7.53203 8.74872 7.51953
    8.7609C7.50702 8.77308 7.5 8.7896 7.5 8.80682V15.5601C7.5 15.5959 7.52987 15.625 7.56667 15.625H9.7C9.71768
    15.625 9.73464 15.6182 9.74714 15.606C9.75964 15.5938 9.76667 15.5773 9.76667 15.5601V8.80682C9.76667 8.7896
    9.75964 8.77308 9.74714 8.7609C9.73464 8.74872 9.71768 8.74188 9.7 8.74188H7.56667ZM11.0333 8.74188C11.0157
    8.74188 10.9987 8.74872 10.9862 8.7609C10.9737 8.77308 10.9667 8.7896 10.9667 8.80682V15.5601C10.9667 15.5959
    10.9965 15.625 11.0333 15.625H13.1667C13.1843 15.625 13.2013 15.6182 13.2138 15.606C13.2263 15.5938 13.2333
    15.5773 13.2333 15.5601V11.9237C13.2333 11.6654 13.3387 11.4176 13.5262 11.235C13.7138 11.0523 13.9681 10.9497
    14.2333 10.9497C14.4986 10.9497 14.7529 11.0523 14.9404 11.235C15.128 11.4176 15.2333 11.6654 15.2333
    11.9237V15.5601C15.2333 15.5959 15.2632 15.625 15.3 15.625H17.4333C17.451 15.625 17.468 15.6182 17.4805
    15.606C17.493 15.5938 17.5 15.5773 17.5 15.5601V11.0821C17.5 9.82136 16.3747 8.83539 15.0867 8.94916C14.6881
    8.98449 14.2978 9.08055 13.9299 9.23383L13.2333 9.52474V8.80682C13.2333 8.7896 13.2263 8.77308 13.2138
    8.7609C13.2013 8.74872 13.1843 8.74188 13.1667 8.74188H11.0333Z" fill="#FBFDFF" />
        </svg>

        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <ellipse cx="12" cy="11.125" rx="12" ry="10.5" fill="black" />
          <path
            d="M14.8754 6.625H16.4087L13.0588 10.8614L17 16.625H13.9142L11.4975 13.1289L8.73167 16.625H7.1975L10.7808 12.0936L7 6.62546H10.1642L12.3487 9.82096L14.8754 6.625ZM14.3375 15.6099H15.1871L9.7025 7.58706H8.79083L14.3375 15.6099Z"
            fill="white" />
        </svg>

        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <ellipse cx="12" cy="11.125" rx="12" ry="10.5" fill="#CD201F" />
          <path
            d="M12.0386 6.625H12.1054C12.7219 6.62767 15.8459 6.65436 16.6882 6.92307C16.9428 7.00508 17.1748 7.16493 17.3611 7.38664C17.5473 7.60836 17.6813 7.88417 17.7495 8.18653C17.8252 8.52464 17.8785 8.97218 17.9145 9.43397L17.922 9.5265L17.9385 9.75784L17.9445 9.85038C17.9932 10.6636 17.9993 11.4252 18 11.5916V11.6584C17.9993 11.831 17.9925 12.6442 17.9385 13.4913L17.9325 13.5847L17.9257 13.6772C17.8882 14.1862 17.8327 14.6916 17.7495 15.0635C17.6815 15.3659 17.5476 15.6419 17.3613 15.8636C17.1751 16.0854 16.9429 16.2452 16.6882 16.3269C15.8181 16.6045 12.5112 16.6241 12.0529 16.625H11.9464C11.7146 16.625 10.756 16.6197 9.75098 16.5787L9.62348 16.5734L9.55822 16.5698L9.42996 16.5636L9.30171 16.5574C8.46915 16.5138 7.67635 16.4435 7.31108 16.326C7.05643 16.2444 6.82435 16.0847 6.63808 15.8631C6.45182 15.6415 6.31791 15.3658 6.24977 15.0635C6.16651 14.6924 6.11101 14.1862 6.0735 13.6772L6.0675 13.5838L6.0615 13.4913C6.02449 12.8884 6.00398 12.2842 6 11.6797L6 11.5703C6.0015 11.379 6.0075 10.7179 6.048 9.98829L6.05325 9.89664L6.0555 9.85038L6.0615 9.75784L6.078 9.5265L6.08551 9.43397C6.12151 8.97218 6.17476 8.52375 6.25052 8.18653C6.31854 7.88405 6.4524 7.6081 6.63867 7.38635C6.82495 7.1646 7.05709 7.00483 7.31183 6.92307C7.6771 6.8074 8.4699 6.73622 9.30246 6.69173L9.42996 6.6855L9.55897 6.68017L9.62348 6.6775L9.75173 6.67127C10.4656 6.64402 11.1797 6.62889 11.8939 6.62589L12.0386 6.625ZM10.8003 9.48113V13.768L13.9182 11.6254L10.8003 9.48113Z"
            fill="white" />
        </svg>

        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <ellipse cx="12" cy="11.125" rx="12" ry="10.5" fill="#4267B2" />
          <path
            d="M9.84379 16.625H12.9219V12.4092H15.6953L16 10.3145H12.9219V9.25658C12.9219 9.11699 13.003 8.98312 13.1473 8.88442C13.2916 8.78571 13.4873 8.73026 13.6914 8.73026H16V6.625H13.6914C12.671 6.625 11.6923 6.90225 10.9707 7.39577C10.2492 7.88929 9.84379 8.55864 9.84379 9.25658V10.3145H8.30473L8 12.4092H9.84379V16.625Z"
            fill="white" />
        </svg>
      </div>
      <p class="md:self-end self-center text-xs">Copyright © 2023 CIR</p>
    </div>
  </footer>
</body>

</html>
