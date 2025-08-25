<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Necklace - Endless Eye</title>
    <link rel="stylesheet" href="assets/css/output.css" />
</head>

<body>
    <header class="bg-[#F2EDE4] border-[#C4AE98] border-b sticky top-0 z-10">
        <div class="px-4 py-3 sm:px-6 md:px-8 lg:px-12 xl:px-16">
            <nav class="grid lg:grid-cols-[1fr_auto_1fr] place-items-center">
                <div class="me-auto max-lg:hidden">
                    <div class="flex gap-6 items-center">
                        <a href="{{ route('shop.haram') }}" class="uppercase text-black text-sm copperplate">haram</a>
                        <a href="{{ route('shop.necklace') }}"
                            class="uppercase text-black text-sm copperplate">Necklace</a>
                    </div>
                </div>
                <div class="m-auto">
                    <a href="/">
                        <img class="h-14 md:h-16" src="assets/images/logo.svg" alt="" />
                    </a>
                </div>
                <div class="ms-auto max-lg:hidden">
                    <div class="flex gap-6 items-center">
                        <a href="#"
                            class="uppercase text-black flex flex-col items-center gap-1 text-sm copperplate">
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
    <main class="grid lg:grid-cols-[320px_auto]">
        <aside class="bg-[#F2EDE4] max-lg:hidden border-r border-[#C7C7C7] py-8 px-4 ps-12">
            <div class="flex gap-2 uppercase copperplate text-xs">
                <span>HOME</span>| <span class="text-[#964A26]">Necklace</span>
            </div>
            <div class="mt-4">
                <div class="text-md text-[#282828] text-md font-semibold copperplate">Necklace</div>
                <div class="text-sm text-[#5E5E5E]">(1443 Designs)</div>
            </div>
            <div class="mt-8">
                <div class="uppercase text-lg font-semibold">FILTERS</div>
                <div x-data="{ isOpen: true }">
                    <button @click="isOpen = !isOpen"
                        class="flex items-center justify-between gap-2 mt-4 w-full cursor-pointer border-t border-[#C8C8C8] pt-4">
                        <span class="text-sage uppercase text-md font-medium"> Jewellery Type </span>
                        <img :class="isOpen ? 'rotate-180' : ''" src="assets/icons/carat.svg" class="h-2"
                            alt="icon">
                    </button>
                    <div class="space-y-2 mt-3" x-show="isOpen" x-cloak>
                        <div>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="jewel-type"
                                    class="h-4 w-4 rounded-sm border-[#3B4443] accent-sage">Diamond Necklace </label>
                        </div>
                        <div>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" checked name="jewel-type"
                                    class="h-4 w-4 rounded-sm border-[#3B4443] accent-sage">Gold Necklace </label>
                        </div>
                        <div>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="jewel-type"
                                    class="h-4 w-4 rounded-sm border-[#3B4443] accent-sage">Silver Necklace </label>
                        </div>
                    </div>
                </div>
                <div x-data="{ isOpen: false }">
                    <button @click="isOpen = !isOpen"
                        class="flex items-center justify-between gap-2 mt-4 w-full cursor-pointer border-t border-[#C8C8C8] pt-4">
                        <span class="text-sage uppercase text-md font-medium"> Weight </span>
                        <img :class="isOpen ? 'rotate-180' : ''" src="assets/icons/carat.svg" class="h-2"
                            alt="icon">
                    </button>
                    <div class="space-y-2 mt-3" x-show="isOpen" x-cloak>
                        <div>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="weight"
                                    class="h-4 w-4 rounded-sm border-[#3B4443] accent-sage">0-8 Grams </label>
                        </div>
                        <div>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="weight"
                                    class="h-4 w-4 rounded-sm border-[#3B4443] accent-sage">8-16 Grams </label>
                        </div>
                        <div>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="weight"
                                    class="h-4 w-4 rounded-sm border-[#3B4443] accent-sage">16-24 Grams </label>
                        </div>
                        <div>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="weight"
                                    class="h-4 w-4 rounded-sm border-[#3B4443] accent-sage">24-32 Grams </label>
                        </div>
                        <div>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="weight"
                                    class="h-4 w-4 rounded-sm border-[#3B4443] accent-sage">Above 32 Grams </label>
                        </div>
                    </div>
                </div>
                <div x-data="{ isOpen: false }">
                    <button @click="isOpen = !isOpen"
                        class="flex items-center justify-between gap-2 mt-4 w-full cursor-pointer border-t border-[#C8C8C8] pt-4">
                        <span class="text-sage uppercase text-md font-medium"> Color </span>
                        <img :class="isOpen ? 'rotate-180' : ''" src="assets/icons/carat.svg" class="h-2"
                            alt="icon">
                    </button>
                    <div class="space-y-2 mt-3" x-show="isOpen" x-cloak>
                        <div>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="color"
                                    class="h-4 w-4 rounded-sm border-[#3B4443] accent-sage">Option 1 </label>
                        </div>
                        <div>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="color"
                                    class="h-4 w-4 rounded-sm border-[#3B4443] accent-sage">Option 2 </label>
                        </div>
                        <div>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="color"
                                    class="h-4 w-4 rounded-sm border-[#3B4443] accent-sage">Option 3 </label>
                        </div>
                    </div>
                </div>
                <div x-data="{ isOpen: false }">
                    <button @click="isOpen = !isOpen"
                        class="flex items-center justify-between gap-2 mt-4 w-full cursor-pointer border-t border-[#C8C8C8] pt-4">
                        <span class="text-sage uppercase text-md font-medium"> VA </span>
                        <img :class="isOpen ? 'rotate-180' : ''" src="assets/icons/carat.svg" class="h-2"
                            alt="icon">
                    </button>
                    <div class="space-y-2 mt-3" x-show="isOpen" x-cloak>
                        <div>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="va"
                                    class="h-4 w-4 rounded-sm border-[#3B4443] accent-sage">Option 1 </label>
                        </div>
                        <div>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="va"
                                    class="h-4 w-4 rounded-sm border-[#3B4443] accent-sage">Option 2 </label>
                        </div>
                        <div>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="va"
                                    class="h-4 w-4 rounded-sm border-[#3B4443] accent-sage">Option 3 </label>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <section class="px-4 py-6 lg:py-10 sm:px-6 md:px-8 lg:px-10 xl:px-12">
            <div class="mb-4 mb:mb-6 lg:mb-8">
                <div class="text-sm text-[#282828] text-md font-semibold copperplate">Necklace</div>
            </div>
            <!-- <div class="flex flex-wrap items-center gap-1 md:gap-2 mb-10 max-lg:hidden"><div

          class="inline-flex items-center gap-2 text-xs border border-[#C4AE98] rounded-full px-2 py-1 text-[#3B4443]"><div>Gold Jewellery</div><button class="cursor-pointer"><img class="h-2" src="assets/icons/close.svg" alt="close"></button></div><div

          class="inline-flex items-center gap-2 text-xs border border-[#C4AE98] rounded-full px-2 py-1 text-[#3B4443]"><div>Modern Wear</div><button class="cursor-pointer"><img class="h-2" src="assets/icons/close.svg" alt="close"></button></div><div

          class="inline-flex items-center gap-2 text-xs border border-[#C4AE98] rounded-full px-2 py-1 text-[#3B4443]"><div>Wedding Special</div><button class="cursor-pointer"><img class="h-2" src="assets/icons/close.svg" alt="close"></button></div></div> -->
            <div
                class="grid min-[450px]:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4 lg:gap-6 xl:gap-8">
                <div>
                    <!-- Responsive Image Wrapper with Aspect Ratio -->
                    <div class="aspect-[1/1] w-full bg-gray-100 overflow-hidden">
                        <a href="{{ route('shop.product') }}" class="block w-full h-full">
                            <img src="assets/images/shop/product1.webp" alt="product"
                                class="w-full h-full object-cover" onerror="this.style.display='none';">
                        </a>
                    </div>
                    <!-- Content Section -->
                    <div class="px-2 py-4 space-y-3 border-l border-r border-b border-gray-200">
                        <div class="text-center space-y-1">
                            <div class="text-sm font-medium truncate">Romantic Gold Necklace Set</div>
                            <div class="text-xs">
                                <span class="text-[#4E4E4E]">Photo Number:</span>
                                <span class="font-medium">AMS-102-7190</span>
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-center gap-2">
                            <div class="bg-[#FDF3F2] h-10 flex items-center px-4 rounded-sm">
                                <div class="text-sage text-sm font-medium">Net Weight: <span>24.4g</span>
                                </div>
                            </div>
                            <div class="bg-[#ECFEDD] h-10 flex items-center px-4 rounded-sm">
                                <div class="text-[#0D9B4D] text-sm font-medium">VA: <span>DIA500G15</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center gap-3 border-b border-gray-200 pb-4">
                            <div class="flex flex-col text-center items-center border-r pr-3 border-gray-200">
                                <div class="text-xs text-[#4E4E4E] mt-1">Gold Wt</div>
                                <div class="text-xs font-medium">20g</div>
                            </div>
                            <div class="flex flex-col text-center items-center border-r pr-3 border-gray-200">
                                <div class="text-xs text-[#4E4E4E] mt-1">Size</div>
                                <div class="text-xs font-medium">NA</div>
                            </div>
                            <div class="flex flex-col text-center items-center">
                                <div class="text-xs text-[#4E4E4E] mt-1">Color</div>
                                <div class="text-xs font-medium">Y</div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <a class="text-[#964A26] uppercase text-sm copperplate text-center block underline underline-offset-4"
                                href="{{ route('shop.product') }}"> View Product </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Alpine Wrapper -->
    <div x-data="{ showFilter: false, showSort: false, filterCount: 0 }" x-init="filterCount = Array.from(document.querySelectorAll('.filter-option'))
    
        .filter(cb => cb.checked).length">
        <!-- Trigger Buttons -->
        <section class="fixed bottom-20 w-full lg:hidden px-5">
            <div class="grid grid-cols-2 bg-black text-white gap-4 px-4 py-3 rounded-full max-w-fit mx-auto">
                <button @click="showSort = true" class="border-r border-white px-4 uppercase text-sm">SORT BY</button>
                <button @click="showFilter = true" class="uppercase text-sm flex items-center gap-1 pe-4">
                    <span>FILTER</span>
                    <span class="relative">
                        <img src="assets/icons/filter.svg" class="h-3" alt="filter">
                        <span
                            class="absolute bg-[#964A26] text-white text-xs rounded-full px-1 flex items-center justify-center -top-2 -right-4"
                            x-text="filterCount"></span>
                    </span>
                </button>
            </div>
        </section>
        <!-- SORT BY POPUP -->
        <div x-show="showSort" x-cloak class="fixed inset-0 z-40 bg-white max-w-md" @click.away="showSort = false">
            <div class="flex justify-between items-center sticky top-0 bg-black text-white p-4 z-50">
                <h2 class="text-lg font-medium">SORT BY</h2>
                <button @click="showSort = false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd"
                            d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="space-y-4 text-lg p-4 py-6">
                <label class="block cursor-pointer">
                    <input type="radio" name="sort" class="sr-only" @change="showSort = false"> New Arrivals
                </label>
                <label class="block cursor-pointer">
                    <input type="radio" name="sort" class="sr-only" @change="showSort = false"> Popular
                </label>
                <label class="block cursor-pointer">
                    <input type="radio" name="sort" class="sr-only" @change="showSort = false"> Low to High
                    Price </label>
                <label class="block cursor-pointer">
                    <input type="radio" name="sort" class="sr-only" @change="showSort = false"> High to Low
                    Price </label>
            </div>
        </div>
        <!-- FILTER POPUP -->
        <div x-show="showFilter" x-cloak
            class="fixed inset-0 z-50 bg-white overflow-y-auto transition-all duration-300 ease-in-out max-w-md"
            @click.away="showFilter = false">
            <div class="flex justify-between items-center sticky top-0 bg-black text-white p-4 z-50">
                <h2 class="text-lg font-medium">FILTER</h2>
                <button @click="showFilter = false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd"
                            d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="p-4">
                <!-- Filter Sections -->
                <!-- FILTER POPUP CONTENT -->
                <div class="space-y-4">
                    <!-- 1. Jewellery Type -->
                    <div x-data="{ isOpen: true }">
                        <button @click="isOpen = !isOpen"
                            class="flex justify-between items-center gap-2 mt-4 w-full cursor-pointer"
                            :class="isOpen ? '' : 'border-b border-[#C8C8C8] pb-4'">
                            <span class="text-sage uppercase text-md font-medium">Jewellery Type</span>
                            <img :class="isOpen ? 'rotate-180' : ''" src="assets/icons/carat.svg" class="h-2"
                                alt="icon">
                        </button>
                        <div class="space-y-2 mt-3 border border-[#C8C8C8] rounded-md p-4" x-show="isOpen" x-cloak>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="jewel-type"
                                    class="filter-option h-4 w-4 rounded-sm border-[#3B4443] accent-sage"
                                    @change="filterCount += $event.target.checked ? 1 : -1"> Diamond Necklace </label>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" checked name="jewel-type"
                                    class="filter-option h-4 w-4 rounded-sm border-[#3B4443] accent-sage"
                                    @change="filterCount += $event.target.checked ? 1 : -1"> Gold Necklace </label>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="jewel-type"
                                    class="filter-option h-4 w-4 rounded-sm border-[#3B4443] accent-sage"
                                    @change="filterCount += $event.target.checked ? 1 : -1"> Silver Necklace </label>
                        </div>
                    </div>
                    <!-- 2. Weight -->
                    <div x-data="{ isOpen: false }">
                        <button @click="isOpen = !isOpen"
                            class="flex justify-between items-center gap-2 mt-4 w-full cursor-pointer"
                            :class="isOpen ? '' : 'border-b border-[#C8C8C8] pb-4'">
                            <span class="text-sage uppercase text-md font-medium">Weight</span>
                            <img :class="isOpen ? 'rotate-180' : ''" src="assets/icons/carat.svg" class="h-2"
                                alt="icon">
                        </button>
                        <div class="space-y-2 mt-3 border border-[#C8C8C8] rounded-md p-4" x-show="isOpen" x-cloak>
                            <template
                                x-for="weight in ['0-8 Grams', '8-16 Grams', '16-24 Grams', '24-32 Grams', 'Above 32 Grams']">
                                <label class="flex items-center gap-2 text-sm">
                                    <input type="checkbox" name="weight"
                                        class="filter-option h-4 w-4 rounded-sm border-[#3B4443] accent-sage"
                                        @change="filterCount += $event.target.checked ? 1 : -1" :value="weight">
                                    <span x-text="weight"></span>
                                </label>
                            </template>
                        </div>
                    </div>
                    <!-- 3. Color -->
                    <div x-data="{ isOpen: false }">
                        <button @click="isOpen = !isOpen"
                            class="flex justify-between items-center gap-2 mt-4 w-full cursor-pointer"
                            :class="isOpen ? '' : 'border-b border-[#C8C8C8] pb-4'">
                            <span class="text-sage uppercase text-md font-medium">Color</span>
                            <img :class="isOpen ? 'rotate-180' : ''" src="assets/icons/carat.svg" class="h-2"
                                alt="icon">
                        </button>
                        <div class="space-y-2 mt-3 border border-[#C8C8C8] rounded-md p-4" x-show="isOpen" x-cloak>
                            <template x-for="color in ['Option 1', 'Option 2', 'Option 3']">
                                <label class="flex items-center gap-2 text-sm">
                                    <input type="checkbox" name="color"
                                        class="filter-option h-4 w-4 rounded-sm border-[#3B4443] accent-sage"
                                        @change="filterCount += $event.target.checked ? 1 : -1"
                                        :value="color">
                                    <span x-text="color"></span>
                                </label>
                            </template>
                        </div>
                    </div>
                    <!-- 4. VA -->
                    <div x-data="{ isOpen: false }">
                        <button @click="isOpen = !isOpen"
                            class="flex justify-between items-center gap-2 mt-4 w-full cursor-pointer"
                            :class="isOpen ? '' : 'border-b border-[#C8C8C8] pb-4'">
                            <span class="text-sage uppercase text-md font-medium">VA</span>
                            <img :class="isOpen ? 'rotate-180' : ''" src="assets/icons/carat.svg" class="h-2"
                                alt="icon">
                        </button>
                        <div class="space-y-2 mt-3 border border-[#C8C8C8] rounded-md p-4" x-show="isOpen" x-cloak>
                            <template x-for="va in ['Option 1', 'Option 2', 'Option 3']">
                                <label class="flex items-center gap-2 text-sm">
                                    <input type="checkbox" name="va"
                                        class="filter-option h-4 w-4 rounded-sm border-[#3B4443] accent-sage"
                                        @change="filterCount += $event.target.checked ? 1 : -1"
                                        :value="va">
                                    <span x-text="va"></span>
                                </label>
                            </template>
                        </div>
                    </div>
                </div>
                <!-- Apply Filters -->
                <div class="mt-10">
                    <button @click="showFilter = false"
                        class="bg-[#964A26] text-white w-full py-3 rounded-md uppercase text-base font-medium"> Apply
                        Filters </button>
                </div>
            </div>
        </div>
    </div>
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
        <a href="{{ route('shop.categories') }}"
            class="grid place-items-center grid-rows-[20px_1fr] gap-1 text-black">
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
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 stroke-current" viewBox="0 0 29 29"
                    fill="none">
                    <g clip-path="url(#clip0_8604_1998)">
                        <path
                            d="M14.3946 13.0507C17.1274 13.0507 19.3428 10.8353 19.3428 8.10245C19.3428 5.36959 17.1274 3.15417 14.3946 3.15417C11.6617 3.15417 9.44629 5.36959 9.44629 8.10245C9.44629 10.8353 11.6617 13.0507 14.3946 13.0507Z"
                            stroke-width="1.79937" />
                        <path
                            d="M3.76251 24.7339C3.4914 24.7339 4.53744 21.6822 4.62501 21.4639C6.19046 17.5628 9.28059 17.5808 14.3848 17.5808C19.489 17.5808 22.9738 17.564 24.5405 21.4639C24.628 21.6822 25.2782 24.7315 25.0059 24.7315H3.76251V24.7339Z"
                            stroke-width="1.79937" />
                    </g>
                    <defs>
                        <clipPath id="clip0_8604_1998">
                            <rect width="28.79" height="28.79" fill="white" />
                        </clipPath>
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
                    <img src="assets/images/logo-small.svg" class="h-10" alt="">
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
                                <img class="h-4" src="assets/icons/facebook.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="h-4" src="assets/icons/twitter.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="h-4" src="assets/icons/pinterest.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="h-4" src="assets/icons/instagram.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="h-4" src="assets/icons/youtube.svg" alt="">
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
