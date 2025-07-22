<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Product - Endless Eye</title>

    <link rel="stylesheet" href="assets/css/output.css" />

</head>



<body>

    <header class="bg-[#F2EDE4] border-[#C4AE98] border-b sticky top-0 z-10">

        <div class="px-4 py-3 sm:px-6 md:px-8 lg:px-12 xl:px-16">

          <nav class="grid lg:grid-cols-[1fr_auto_1fr] place-items-center">

            <div class="me-auto max-lg:hidden">

              <div class="flex gap-6 items-center">

                <a href="{{ route('shop.haram') }}" class="uppercase text-black text-sm copperplate">haram</a>

                <a href="{{ route('shop.necklace') }}" class="uppercase text-black text-sm copperplate">Necklace</a>

              </div>

            </div>

            <div class="m-auto">

              <a href="/">

                <img class="h-14 md:h-16" src="assets/images/logo.svg" alt="" />

              </a>

            </div>

            <div class="ms-auto max-lg:hidden">

              <div class="flex gap-6 items-center">

                <a href="#" class="uppercase text-black flex flex-col items-center gap-1 text-sm copperplate">

                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5" viewBox="0 0 29 29" fill="none">

                    <g clip-path="url(#clip0_8604_1998)">

                      <path

                        d="M14.3946 13.0507C17.1274 13.0507 19.3428 10.8353 19.3428 8.10245C19.3428 5.36959 17.1274 3.15417 14.3946 3.15417C11.6617 3.15417 9.44629 5.36959 9.44629 8.10245C9.44629 10.8353 11.6617 13.0507 14.3946 13.0507Z"

                        stroke="black" stroke-width="1.79937" />

                      <path

                        d="M3.76251 24.7339C3.4914 24.7339 4.53744 21.6822 4.62501 21.4639C6.19046 17.5628 9.28059 17.5808 14.3848 17.5808C19.489 17.5808 22.9738 17.564 24.5405 21.4639C24.628 21.6822 25.2782 24.7315 25.0059 24.7315H3.76251V24.7339Z"

                        stroke="black" stroke-width="1.79937" />

                    </g>

                    <defs>

                      <clipPath id="clip0_8604_1998">

                        <rect width="28.79" height="28.79" fill="white" />

                      </clipPath>

                    </defs>

                  </svg>

                  <span>ACCOUNT</span>

                </a>

              </div>

            </div>

          </nav>

        </div>

      </header>

    <main>

        <div class="grid lg:grid-cols-2 min-h-screen">

            <!-- Left Image Section -->

            <div class="bg-[#F7F7F7] flex flex-col gap-4  px-4 py-6 lg:py-10 sm:px-6 md:px-8 lg:px-10 xl:px-12">

                <div class="max-lg:hidden text-[#4E4E4E] copperplate text-xs uppercase"> <a href="/">HOME</a>  |  <a href="shop.html">Necklace</a>  |  <span class="text-sage">Romantic Diamond Necklace Set</span></div>

                <div>

                    <img width="640" height="640" src="assets/images/product1.webp" alt="Romantic Diamond Necklace"

                    class="max-w-full max-h-[500px] object-contain" />



                    <!-- <div class="flex gap-4 items-center justify-center">

                        <div class="border border-[#D9E2DA] shadow rounded-md overflow-hidden">

                            <img width="90" height="90"  class="aspect-square" src="assets/images/product.webp" alt="Romantic Diamond Necklace"

                            class="aspect-square" />

                        </div>

                        <div class="border border-[#D9E2DA] shadow rounded-md overflow-hidden">

                            <img width="90" height="90"  class="aspect-square" src="assets/images/product.webp" alt="Romantic Diamond Necklace"

                            class="aspect-square" />

                        </div>

                        <div class="border border-[#D9E2DA] shadow rounded-md overflow-hidden">

                            <img width="90" height="90"  class="aspect-square" src="assets/images/product.webp" alt="Romantic Diamond Necklace"

                            class="aspect-square" />

                        </div>

                       

                   

                    </div> -->

                </div>

            </div>



            <!-- Right Content Section -->

            <div class="px-4 py-6 lg:py-10 sm:px-6 md:px-8 lg:px-10 xl:px-12">

                <!-- Title & Info -->

                <div class="space-y-2">

                    <h1 class="text-xl lg:text-2xl font-semibold">Romantic

                        Diamond Necklace Set</h1>

                    <div class="text-sm">

                        <span class="text-[#4E4E4E]">Design number:</span>

                        <span class="font-medium">AMS-102-7190</span>

                    </div>



                    <div class="flex items-center gap-4 pt-1">

                        <div class="flex gap-1 items-center text-md">

                            <img src="assets/icons/gold.svg" alt="gold" class="h-4 w-4">

                            <span class="text-[#964A26]">18 Karat</span>

                        </div>

                        <div class="flex gap-1 items-center text-md">

                            <img src="assets/icons/diamond-blue.svg" alt="diamond" class="h-4 w-4">

                            <span class="text-[#964A26]">1.81 ct</span>

                        </div>

                    </div>

                </div>



                <!-- Product Details Accordion -->

                <div class="border-t border-[#D9E2DA] pt-4 mt-6 space-y-4">

                    <h2 class="text-2xl lg:text-3xl font-medium text-[#964A26] alga">Product

                        Details</h2>



                    <!-- METAL DETAILS -->

                    <div x-data="{ open: true }" class="border-[#D9E2DA] border-b pb-4">

                        <button @click="open = !open"

                            class="flex justify-between items-center w-full py-2 cursor-pointer  text-left ">

                            <span class="flex items-center gap-1"><img src="assets/icons/metal.svg" alt="diamond"

                                    class="h-4 w-4"> METAL

                                DETAILS</span>

                            <img src="assets/icons/carat.svg" :class="open ? 'rotate-180' : ''" class="h-2" />

                        </button>

                        <div x-show="open" x-cloak x-transition

                            class="flex flex-wrap gap-x-10 gap-y-6 md:justify-between text-sm pt-2">



                            <div class="text-center space-y-2">

                                <div class="font-medium text-md">24.4g</div>

                                <div class="text-sm text-[#909090]">Ct Weight</div>

                            </div>

                            <div class="text-center space-y-2">

                                <div class="font-medium text-md">20g</div>

                                <div class="text-sm text-[#909090]">Gold Weight</div>

                            </div>

                            <div class="text-center space-y-2">

                                <div class="font-medium text-md">NA</div>

                                <div class="text-sm text-[#909090]">Size</div>

                            </div>

                          

                            <div class="text-center space-y-2">

                                <div class="font-medium text-md">Y</div>

                                <div class="text-sm text-[#909090]">Color

                                    </div>

                            </div>

                            <div class="text-center space-y-2">

                                <div class="font-medium text-md">14 </div>

                                <div class="text-sm text-[#909090]">Stone</div>

                            </div>

                            <div class="text-center space-y-2">

                                <div class="font-medium text-md">DIA500G15 </div>

                                <div class="text-sm text-[#909090]">VA</div>

                            </div>

                        </div>

                    </div>



                    <!-- DIAMOND DETAILS -->

                    <div x-data="{ open: false }" class="border-[#D9E2DA] border-b pb-4">

                        <button @click="open = !open"

                            class="flex justify-between items-center w-full py-2 cursor-pointer  text-left ">

                            <span class="flex items-center gap-1"><img src="assets/icons/diamond.svg" alt="diamond"

                                    class="h-4 w-4"> DIAMOND

                                DETAILS</span>

                            <img src="assets/icons/carat.svg" :class="open ? 'rotate-180' : ''" class="h-2" />

                        </button>

                        <div x-show="open" x-cloak x-transition class="text-sm text-gray-600 pt-2">

                            Coming soon...

                        </div>

                    </div>



                    <!-- GENERAL DETAILS -->

                    <div x-data="{ open: false }" class="border-[#D9E2DA] border-b pb-4">

                        <button @click="open = !open"

                            class="flex justify-between items-center w-full py-2 cursor-pointer  text-left ">

                            <span class="flex items-center gap-1"><img src="assets/icons/info.svg" alt="diamond"

                                    class="h-4 w-4"> GENERAL

                                DETAILS</span>

                            <img src="assets/icons/carat.svg" :class="open ? 'rotate-180' : ''" class="h-2" />

                        </button>

                        <div x-show="open" x-cloak x-transition class="text-sm text-gray-600 pt-2">

                            Coming soon...

                        </div>

                    </div>



                    <!-- DESCRIPTION -->

                    <div x-data="{ open: false }" class="border-[#D9E2DA] border-b pb-4">

                        <button @click="open = !open"

                            class="flex justify-between items-center w-full py-2 cursor-pointer  text-left ">

                            <span class="flex items-center gap-1"><img src="assets/icons/note.svg" alt="diamond"

                                    class="h-4 w-4">

                                DESCRIPTION</span>

                            <img src="assets/icons/carat.svg" :class="open ? 'rotate-180' : ''" class="h-2" />

                        </button>

                        <div x-show="open" x-cloak x-transition class="text-sm text-[#909090] pt-2 space-y-2">

                            <p>

                                Like petals caught in a hush of wind with

                                this 18 Karat yellow gold Necklace Set

                                layers pave natural Diamonds brilliance,

                                jali lace, and sculpted florals into a

                                necklace that breathes elegance.

                            </p>

                            <p>

                                Some pieces don’t just sit pretty, they sing

                                softly. This necklace set flows with layered

                                floral jali, pav-set natural Diamonds, and

                                matte-finished grace. Made for wedding

                                receptions, parties, or nights when your

                                presence is the most luminous thing in the

                                room. Slip it on, and suddenly, everything

                                you wear feels elevated– effortless,

                                intentional, entirely you.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>



    <section

        class="bg-[#F2EDE4] px-4 py-3 sm:px-6 md:px-8 lg:px-12 xl:px-16 grid grid-cols-4 fixed bottom-0 w-full lg:hidden">

        <a href="/" class="grid place-items-center grid-rows-[20px_1fr] gap-1 text-black">

            <div>

                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 fill-none stroke-current" viewBox="0 0 23 23">

                    <path fill-rule="evenodd" clip-rule="evenodd"

                        d="M11.8228 0.744019L1.40698 9.67182V20.0876C1.40698 20.9094 2.07317 21.5756 2.89495 21.5756H8.84682V17.1117C8.84682 15.4681 10.1792 14.1357 11.8228 14.1357C13.4663 14.1357 14.7987 15.4681 14.7987 17.1117V21.5756H20.7506C21.5723 21.5756 22.2385 20.9094 22.2385 20.0876V9.67182L11.8228 0.744019Z" />

                </svg>

            </div>

            <div class="text-sm">Home</div>

        </a>



        <a href="{{ route('shop.categories') }}" class="grid place-items-center grid-rows-[20px_1fr] gap-1 text-black">

            <div>

                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 fill-current" viewBox="0 0 22 23">

                    <path

                        d="M0.776855 19.0185C0.776855 21.213 2.56383 23 4.75838 23H17.2468C19.4414 23 21.2284 21.213 21.2284 19.0185L21.2271 3.98153C21.2271 1.78698 19.4401 0 17.2456 0H4.75841C2.56386 0 0.776886 1.78698 0.776886 3.98153V19.0224L0.776855 19.0185ZM19.9228 3.98153V19.0224C19.9228 20.4998 18.723 21.6996 17.2456 21.6996H8.01772L8.01899 1.30062H17.2468C18.7243 1.30062 19.9241 2.50043 19.9241 3.97788L19.9228 3.98153ZM2.0811 3.98153C2.0811 2.50408 3.2809 1.30428 4.75835 1.30428H6.71472V21.6997H4.75835C3.2809 21.6997 2.0811 20.4999 2.0811 19.0225V3.98153Z" />

                    <path

                        d="M11.2796 4.99138H16.5259C16.8851 4.99138 17.178 4.69843 17.178 4.33926C17.178 3.98007 16.8851 3.68713 16.5259 3.68713H11.2796C10.9204 3.68713 10.6274 3.98008 10.6274 4.33926C10.6274 4.69844 10.9204 4.99138 11.2796 4.99138Z" />

                    <path

                        d="M11.2796 7.71062H16.5259C16.8851 7.71062 17.178 7.41767 17.178 7.05849C17.178 6.69931 16.8851 6.40637 16.5259 6.40637H11.2796C10.9204 6.40637 10.6274 6.69932 10.6274 7.05849C10.6274 7.41768 10.9204 7.71062 11.2796 7.71062Z" />

                    <path

                        d="M13.9008 9.12585H11.2796C10.9204 9.12585 10.6274 9.4188 10.6274 9.77798C10.6274 10.1372 10.9204 10.4301 11.2796 10.4301H13.9008C14.26 10.4301 14.5529 10.1372 14.5529 9.77798C14.5529 9.4188 14.26 9.12585 13.9008 9.12585Z" />

                </svg>

            </div>

            <div class="text-sm">Categories</div>

        </a>



        <a href="#" class="grid place-items-center grid-rows-[20px_1fr] gap-1 text-black">

            <div>

                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 fill-current" viewBox="0 0 26 26">

                    <path

                        d="M3.45567 0.5C2.00842 0.5 0.822754 1.68567 0.822754 3.13292V16.2975C0.822754 17.7448 2.00842 18.9305 3.45567 18.9305H5.68748L5.09096 24.7825C5.07891 24.916 5.10788 25.05 5.17401 25.1665C5.24013 25.2831 5.34026 25.3767 5.46101 25.4349C5.58176 25.493 5.71737 25.5129 5.84974 25.4919C5.9821 25.4709 6.1049 25.41 6.20172 25.3173L12.6092 18.9305H22.5443C23.9916 18.9305 25.1772 17.7448 25.1772 16.2975V3.13292C25.1772 1.68567 23.9916 0.5 22.5443 0.5H3.45567ZM3.45567 1.81646H22.5443C23.285 1.81646 23.8608 2.39221 23.8608 3.13292V16.2975C23.8608 17.0382 23.285 17.614 22.5443 17.614H12.3418C12.1692 17.6127 12.003 17.6791 11.8789 17.7991L6.58226 23.0752L7.07593 18.3339C7.08454 18.2425 7.0739 18.1502 7.04469 18.0631C7.01549 17.976 6.96837 17.8959 6.90637 17.8281C6.84437 17.7603 6.76886 17.7062 6.6847 17.6693C6.60054 17.6325 6.50959 17.6136 6.4177 17.614H3.45567C2.71496 17.614 2.13921 17.0382 2.13921 16.2975V3.13292C2.13921 2.39221 2.71496 1.81646 3.45567 1.81646ZM5.75947 4.77849C5.39594 4.77849 5.10124 5.07318 5.10124 5.43672C5.10124 5.80026 5.39594 6.09495 5.75947 6.09495H20.2405C20.604 6.09495 20.8987 5.80026 20.8987 5.43672C20.8987 5.07318 20.604 4.77849 20.2405 4.77849H5.75947ZM5.75947 9.05698C5.39594 9.05698 5.10124 9.35167 5.10124 9.71521C5.10124 10.0787 5.39594 10.3734 5.75947 10.3734H20.2405C20.604 10.3734 20.8987 10.0787 20.8987 9.71521C20.8987 9.35167 20.604 9.05698 20.2405 9.05698H5.75947ZM5.75947 13.3355C5.39594 13.3355 5.10124 13.6302 5.10124 13.9937C5.10124 14.3572 5.39594 14.6519 5.75947 14.6519H20.2405C20.604 14.6519 20.8987 14.3572 20.8987 13.9937C20.8987 13.6302 20.604 13.3355 20.2405 13.3355H5.75947Z" />

                </svg>

            </div>

            <div class="text-sm">Support</div>

        </a>



        <a href="#" class="grid place-items-center grid-rows-[20px_1fr] gap-1 text-black">

            <div>

                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 stroke-current" viewBox="0 0 29 29" fill="none">

                    <g clip-path="url(#clip0_8604_1998)">

                        <path

                            d="M14.3946 13.0507C17.1274 13.0507 19.3428 10.8353 19.3428 8.10245C19.3428 5.36959 17.1274 3.15417 14.3946 3.15417C11.6617 3.15417 9.44629 5.36959 9.44629 8.10245C9.44629 10.8353 11.6617 13.0507 14.3946 13.0507Z"

                            stroke-width="1.79937" />

                        <path

                            d="M3.76251 24.7339C3.4914 24.7339 4.53744 21.6822 4.62501 21.4639C6.19046 17.5628 9.28059 17.5808 14.3848 17.5808C19.489 17.5808 22.9738 17.564 24.5405 21.4639C24.628 21.6822 25.2782 24.7315 25.0059 24.7315H3.76251V24.7339Z"

                            stroke-width="1.79937" />

                    </g>

                    <defs>

                        <clippath id="clip0_8604_1998">

                            <rect width="28.79" height="28.79" fill="white" />

                        </clippath>

                    </defs>

                </svg>

            </div>

            <div class="text-sm">Account</div>

        </a>

    </section>



    <footer class="bg-sage max-md:mb-18">

        <div class="px-4 py-4 sm:px-6 md:px-8 lg:px-12 xl:px-16">

            <div class="grid gap-6 lg:grid-cols-[200px_1fr_200px] place-items-center">

                <div

                    class="flex items-center justify-center max-lg:pb-6 max-lg:border-b lg:justify-start border-[#D4D4D4] w-full text-center">

                    <img src="assets/images/logo-small.svg" class="h-10" alt>

                </div>

                <div class="max-lg:pb-6 max-lg:border-b border-[#D4D4D4] w-full">

                    <ul class="flex flex-wrap items-center gap-4 justify-center ">

                        <li>

                            <a href="https://wa.me/919876543210" class="flex items-center text-white gap-1">

                                <img width="20" height="20" src="assets/icons/chat.svg" alt="Chat">

                                <span>Chat with us</span>

                            </a>

                        </li>

                        <li>

                            <a href="tel:+914224222200" class="flex items-center text-white gap-1">

                                <img width="20" height="20" src="assets/icons/phone.svg" alt="Phone">

                                <span>+91 422 4222200</span>

                            </a>

                        </li>

                        <li>

                            <a href="mailto:info@ejindia.com" class="flex items-center text-white gap-1">

                                <img width="20" height="20" src="assets/icons/email.svg" alt="Email">

                                <span>info@ejindia.com</span>

                            </a>

                        </li>

                    </ul>



                </div>

                <div class="lg:ms-auto">

                    <ul class="flex items-center justify-center gap-4">

                        <li>

                            <a href="#">

                                <img class="h-4" src="assets/icons/facebook.svg" alt>



                            </a>

                        </li>

                        <li>

                            <a href="#">

                                <img class="h-4" src="assets/icons/twitter.svg" alt>



                            </a>

                        </li>

                        <li>

                            <a href="#">

                                <img class="h-4" src="assets/icons/pinterest.svg" alt>

                            </a>

                        </li>

                        <li>

                            <a href="#">

                                <img class="h-4" src="assets/icons/instagram.svg" alt>

                            </a>

                        </li>

                        <li>

                            <a href="#">

                                <img class="h-4" src="assets/icons/youtube.svg" alt>

                            </a>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </footer>



    <script src="//unpkg.com/alpinejs" defer></script>



</body>



</html>