<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="">
    <nav class="border-gray-200 px-2 sm:px-4 md:mx-28 py-2.5 rounded">
        <div class="container mx-auto flex flex-wrap items-center justify-between">
            <a href="#" class="flex">
                <img src="https://instagram.fsub3-1.fna.fbcdn.net/v/t51.2885-15/311671560_197819236018482_9180130337815927762_n.webp?stp=dst-jpg_e35&_nc_ht=instagram.fsub3-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=GvaR7qmxHPcAX8ByYFM&edm=ALQROFkBAAAA&ccb=7-5&ig_cache_key=Mjk1MDIyMjc3Njk0Njc3OTAzMA%3D%3D.2-ccb7-5&oh=00_AT_sixqB3UjxfufoFll2s73lc8n7ml_ol4MLAy3LwmDFWQ&oe=6353EA19&_nc_sid=30a2ef"
                    class="mr-1" alt="" />
                <span class="self-center font-Urbanist text-xl font-bold whitespace-nowrap dark:text-white">Covid
                    19</span>
            </a>
            <div class="flex md:order-2">
                <!-- Dark mode switcher -->
                <button id="theme-toggle" type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- Dark mode switcher end -->

                <button data-collapse-toggle="mobile-menu-4" type="button"
                    class="md:hidden text-gray-500 hover:bg-gray-100focus:outline-none focus:ring-2 focus:ring-gray-200 rounded-lg text-sm p-2 inline-flex items-center dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-4" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden md:flex justify-between items-center w-full md:w-auto md:order-1" id="mobile-menu-4">
                <ul
                    class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-[18px] md:font-medium font-Inter">
                    <li>
                        <a href="#"
                            class="active:bg-blue-700 md:bg-transparent text-[#44B564] block pl-3 pr-4 py-2 md:text-[#44B564] md:p-0 rounded dark:text-white"
                            aria-current="page">Home</a>
                    </li>

                    <li>
                        <a href="#"
                            class="text-gray-700 active:text-[#44B564] hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">What
                            we do?</a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-700 active:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Prevention</a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-700 active:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Symptoms</a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-700 active:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact
                            us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home  -->
    <div class="">
        <img src="img/amico.png" class="mx-auto md:hidden" style="width: 300px" alt="" />
    </div>
    <div class="md:px-[120px] md:grid md:grid-cols-2 md:gap-6 pt-14 md:relative">
        <div class="w-[490px] text-center lg:pt-20">
            <h5 class="text-[#FF0000] ml-40 flex text-[16px] md:text-[18px]">
                <svg style="width: 24px; height: 24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12,2L1,21H23M12,6L19.53,19H4.47M11,10V14H13V10M11,16V18H13V16" />
                </svg>
                COVID-19 ALERT
            </h5>
            <h2 class="text-[39px] md:text-[42px] text-[#333333] font-bold font-Inter md:text-left">Together we fight
                COVID-19</h2>

            <p class="text-[#333333] text-[22px] font-Inter md:text-left">Seque empowers you to get more done with
                intense focus and zero interruptions.Seque empowers you to get more done with intense focus and zero
                interruptions.</p>
            <button type="button"
                class="mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Let us help
            </button>
        </div>
        <div class="">
            <img src="img/amico.png" class="hidden md:block" alt="" />
        </div>
    </div>
    <div>
        <img src="img/covid.png" class="absolute top-52 -left-3 hidden md:block" alt="" />
    </div>

    <!-- total case -->
    <div class="bg-white hidden md:block mx-28 mt-20 drop-shadow-lg rounded-xl"
        style="box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px">
        <div class="grid grid-cols-4 gap-6 px-28 text-center py-10 font-Inter">
            <div class="">
                <h1 class="text-[20px]">Total Cases</h1>
                <h1 class="text-[28px]">492,667</h1>
                <h1 class="text-[18px]">+2,584</h1>
            </div>
            <div>
                <h1 class="text-[20px]">Active Cases</h1>
                <h1 class="text-[28px]">492,667</h1>
                <h1 class="text-[18px]">18% from total cases</h1>
            </div>
            <div>
                <h1 class="text-[20px]">Recovered</h1>
                <h1 class="text-[28px]">492,667</h1>
                <h1 class="text-[18px]">55% from total cases</h1>
            </div>
            <div>
                <h1 class="text-[20px]">Deaths</h1>
                <h1 class="text-[28px]">492,667</h1>
                <h1 class="text-[18px]">20% from total Cases</h1>
            </div>
        </div>
    </div>

    <img src="img/coro.png" class="absolute right-0 hidden md:block" alt="" />

    <div class="md:mx-[120px] mb-36 md:grid md:grid-cols-2 md:gap-6 pt-20">
        <div class="w-[490px] lg:pt-20">
            <img src="img/do.png" class="w-96 md:w-[500px] mx-auto md:mx-0" alt="" />
        </div>
        <div class="lg:mt-20 lg:px-14 px-3">
            <h2 class="font-Inter font-semibold text-[36px]">What we do?</h2>
            <p class="text-[#555555] font-Inter text-[20px] w-[440px] py-3">Covid 19 positive or Pneumonitis patient
                will be treated at home as per doctor order by GNC certified nursing staff.</p>
            <ul class="text-[#555555] font-Inter">
                <li class="flex pt-2"><img src="img/virus.png" width="30px" alt="" /> <span class="pl-2 pt-1">Facilities
                        of blood sugar</span></li>
                <li class="flex pt-2"><img src="img/virus.png" width="30px" alt="" /> <span class="pl-2 pt-1">B.P.
                        Measurement</span></li>
                <li class="flex pt-2"><img src="img/virus.png" width="30px" alt="" /> <span class="pl-2 pt-1">Spo2
                        Measurement</span></li>
                <li class="flex pt-2"><img src="img/virus.png" width="30px" alt="" /> <span class="pl-2 pt-1">Ryle's
                        tube insertion</span></li>
                <li class="flex pt-2"><img src="img/virus.png" width="30px" alt="" /> <span
                        class="pl-2 pt-1">Catheterisation</span></li>
                <li class="flex pt-2"><img src="img/virus.png" width="30px" alt="" /> <span class="pl-2 pt-1">Dressing
                        facilities are available 24*7</span></li>
                <li class="flex pt-5 pl-2">
                    <img src="img/circle.png" class="absolute" width="30px" alt="" /> <span class="pl-4 pt-1">Contact
                        Us</span><svg class="pt-2" style="width: 24px; height: 24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M14 16.94V12.94H5.08L5.05 10.93H14V6.94L19 11.94Z" />
                    </svg>
                </li>
            </ul>
        </div>
    </div>

    <div class="text-center font-Inter mb-20 md:mb-0">
        <h1 class="text-[36px] text-[#333333] font-semibold">Prevention</h1>
        <p class="text-[20px] md:w-[840px] mx-auto px-3 md:px-0">Protect yourself and others around you by knowing the
            facts and taking appropriate precautions. Floow advice provided by your local health authority.</p>
    </div>

    <div class="md:pt-24 md:grid md:grid-cols-3 md:gap-4 md:pl-32 md:pr-32 mb-32">
        <div class="w-[330px] h-[330px] mx-auto md:mx-0 bg-white rounded-xl relative"
            style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px">
            <img src="img/mask.png" class="absolute mx-16 -top-14" alt="" />
            <h1 class="pt-48 text-center font-Inter text-[20px] font-semibold">Wear a mask</h1>
            <p class="px-5 text-center">Masks can help prevent the spread of the virus from the person wearing the mask
                to others.</p>
        </div>
        <div class="w-[330px] h-[330px] my-20 md:my-0 mx-auto md:mx-0 bg-white rounded-xl relative"
            style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px">
            <img src="img/hands.png" class="absolute mx-16 -top-14" alt="" />
            <h1 class="pt-48 text-center font-Inter text-[20px] font-semibold">Wash your hands often</h1>
            <p class="px-5 text-center">Clean your hands with soop and water, or alcohol-based hand sanitizer.</p>
        </div>
        <div class="w-[330px] h-[330px] mx-auto md:mx-0 bg-white rounded-xl relative"
            style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px">
            <img src="img/distance.png" class="absolute mx-16 -top-14" alt="" />
            <h1 class="pt-48 text-center font-Inter text-[20px] font-semibold">Physical distancing</h1>
            <p class="px-5 text-center">Maintain a safe distance especially from anyone who is coughinf or sneezing.</p>
        </div>
    </div>

    <div class="text-center font-Inter">
        <h1 class="text-[36px] text-[#333333] font-semibold">Symptoms</h1>
        <p class="text-[20px] md:w-[840px] px-3 md:px-0 mx-auto text-[#777777]">Protect yourself and others around you
            by knowing the facts and taking appropriate precautions. Floow advice provided by your local health
            authority.</p>
    </div>
    <div class="md:pt-24 md:grid md:grid-cols-3 md:gap-4 md:pl-32 md:pr-32 mb-32">
        <div>
            <img src="img/vrs.png" class="hidden md:block" alt="" />
        </div>
        <div>
            <img src="img/syms.png" class="mt-10 md:mt-0" alt="" />
        </div>
    </div>

    <div class="md:w-[800px] px-3 md:px-0 mx-auto mb-10 rounded-2xl"
        style="box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset">
        <div class="text-center font-Inter">
            <h1 class="text-[36px] text-[#333333] font-semibold pt-10">Need Help!</h1>
            <p class="text-[20px] :md:w-[840px] mx-auto text-[#777777] lg:px-14">Protect yourself and others around you
                by knowing the facts and taking appropriate precautions. Floow advice provided by your local health
                authority.</p>
            <img src="img/stay.png" class="mx-auto" alt="" />
        </div>

        <form class="px-20 pt-10">
            <div class="mb-6">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                <input type="text" id="text"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="aprill" required />
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    email</label>
                <input type="email" id="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="name@flowbite.com" required />
            </div>

            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                message</label>
            <textarea id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Leave a comment..."></textarea>

            <button type="submit"
                class="text-white mt-5 mb-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Send Message
            </button>
        </form>
    </div>

    <footer class="p-4 bg-slate-600 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
        <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2022 <a href="https://team-up.my.id"
                class="hover:underline">💖</a>. All Rights Reserved. </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm text-white dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </footer>

    <script src="../node_modules/flowbite/src/plugins/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

    <script src="../public/js/script.js"></script>
</body>

</html>