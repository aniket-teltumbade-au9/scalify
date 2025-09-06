<div class="w-full mt-16">
    <?php foreach ($categories as $categoryName => $categoryDetails): ?>

    <div id="418954"></div>
    <div class="w-full pb-10 | lg:pb-16 | 2xl:pb-24">
        <div class="px-2 | sm:px-6 | xl:px-12 | 2xl:px-20 | 3xl:px-40 | 4xl:px-60">
            <div class="px-2 | lg:px-3 | xl:px-4 w-full">
                <div class="border-t border-solid border-gray-100 pt-10  | lg:pt-16 | dark:border-grayDark-300"></div>
            </div>
            <div class="w-full flex flex-wrap mb-5 | lg:mb-20">
                <div class="px-2 | lg:px-3 | xl:px-4 w-full">
                    <div class="w-full">
                        <h2 onclick='handleRedirect(<?php echo strtolower(json_encode($categoryName)); ?>)'
                            class="text-24vw | lg:text-20vw font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-0.9 text-balance cursor-pointer">
                            <?php echo $categoryName; ?>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-wrap justify-between">
                <div class="px-2 | lg:px-3 | xl:px-4 w-full mb-5 | lg:mb-0 lg:w-7/16">
                    <h2
                        class="text-xl | md:text-2-5xl | xl:text-3xl | 4xl:text-4xl font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-tight text-balance pr-10 | lg:pr-0">
                        <?php echo $categoryDetails; ?>
                    </h2>
                </div>
                <div class="px-2 | lg:px-3 | xl:px-4 w-full mb-5 | lg:w-8/16 | 4xl:w-7/16">
                    <div x-data="{ active: false }" class="w-full">
                        <?php $catLinkList = array_filter($services_list, function ($array) use ($categoryName) {return $array['category'] === $categoryName;});
$index = 1;foreach ($catLinkList as $catList): ?>
                        <div class="w-full rounded-2xl bg-gray-50 mb-4 | lg:rounded-3xl | dark:bg-grayDark-500">
                            <button
                                class="flex justify-between items-center text-left cursor-pointer w-full p-6 | focus:outline-none"
                                x-on:click="active != <?php echo $index + 421069; ?> ? active = <?php echo $index + 421069; ?> : active = false">
                                <h3
                                    class="text-lg | 4xl:text-xl font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-tighter text-balance pr-10">
                                    <?php echo $catList['name']; ?></h3>
                                <div class="flex-shrink-0 w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center transition-transform transform | dark:bg-grayDark-400"
                                    x-bind:class="{'rotate-180': active == <?php echo $index + 421069; ?>}">
                                    <svg class="w-3 h-3 text-white fill-current | dark:text-grayDark-100"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path
                                            d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                        </path>
                                    </svg>
                                </div>
                            </button>
                            <div class="w-full" x-show="active == <?php echo $index + 421069; ?>" x-collapse=""
                                style="display: none; height: 0px; overflow: hidden;" hidden="">
                                <div class="w-full pl-6 pb-6 pr-6 | lg:pr-28">
                                    <div class="w-full relative ">
                                        <p
                                            class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                            <?php echo $catList['brief_description']; ?></p>
                                        <div class="relative group inline-flex items-center" x-data="{ hover: false }"
                                            x-on:mouseenter="hover = true" x-on:mouseleave="hover = false">
                                            <svg width="0" height="0" class="absolute hidden"
                                                color-interpolation-filters="sRGB">
                                                <defs>
                                                    <filter id="buttonFilter">
                                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5"
                                                            result="blur"></feGaussianBlur>
                                                        <feColorMatrix in="blur" mode="matrix"
                                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                                                            result="buttonFilter"></feColorMatrix>
                                                        <feComposite in="SourceGraphic" in2="buttonFilter"
                                                            operator="atop"></feComposite>
                                                        <feBlend in="SourceGraphic" in2="buttonFilter"></feBlend>
                                                    </filter>
                                                </defs>
                                            </svg>
                                            <a href="<?php echo BASE_URL; ?>services/<?php echo strtolower($catList['category']) . '/' . $catList['slug']; ?>"
                                                class="inline-flex relative group outline-none  | focus:outline-none "
                                                style="filter: url(#buttonFilter);">
                                                <div
                                                    class="w-auto inline-flex items-center justify-center relative leading-tight shadow-none overflow-hidden rounded-full border-default bg-primary-600 text-gray-600 py-3 px-5">
                                                    <div class="relative inline-flex top-px flex-shrink-0">
                                                        <div>
                                                            Know More</div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="bg-primary-600 flex-shrink-0 overflow-hidden flex items-center justify-center -ml-1 rounded-full transform transition-transform | w-9 h-9 | xl:group-hover:translate-x-3  xl:group-hover:rotate-45 | js-button-icon">
                                                </div>
                                            </a>
                                            <div
                                                class="w-9 h-9 absolute top-0 right-0 flex items-center justify-center z-20 transition-transform transform w-9 h-9 | xl:group-hover:translate-x-3  xl:group-hover:rotate-45 || js-button-arrow">
                                                <div class="relative overflow-hidden text-gray-600">
                                                    <div
                                                        class="relative top-0 left-0 transition-transform transform || js-button-arrow-icon-primary ">
                                                        <svg class="w-3 h-3 fill-current"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                            <path
                                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div
                                                        class="absolute top-0 left-0 transition-transform transform translate-y-full -translate-x-full || js-button-arrow-icon-secondary ">
                                                        <svg class="w-3 h-3 fill-current"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                            <path
                                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="<?php echo BASE_URL; ?>services/<?php echo strtolower($catList['category']) . '/' . $catList['slug']; ?>"
                            class="w-full flex items-center justify-between border-b border-solid border-gray-100 py-4 group || js-cursor-trigger-drag || dark:border-grayDark-300 dark:text-white | xl:hover:border-gray-600 lg:dark:hover:border-grayDark-100">
                            <div class="inline-flex items-center space-x-6">
                                <div class="font-light relative z-10">
                                    <?php echo $index; ?></div>
                                <div
                                    class="text-lg transition-transform transform | 4xl:text-1xl | xl:group-hover:translate-x-2">
                                    <?php echo $catList['name']; ?></div>
                            </div>
                            <div
                                class="flex-shrink-0 w-7 h-7 bg-primary-600 rounded-full flex items-center justify-center | dark:bg-grayDark-400 | xl:hidden">
                                <svg class="w-2.5 h-2.5 fill-current text-gray-600 | dark:text-grayDark-100"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                    </path>
                                </svg>
                            </div>
                        </a> -->
                        <?php $index++;endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <div id="545"></div>
</div>
<script>
function handleRedirect(category) {
    console.log(category)
    console.log("<?php echo BASE_URL; ?>services/", category.toLowerCase())
    window.location.href = "<?php echo BASE_URL; ?>services/" + category.toLowerCase();
}
</script>