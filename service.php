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
                        <h2
                            class="text-6vw | lg:text-5vw font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-0.9 text-balance">
                            <?php echo $categoryName; ?></h2>
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
                    <?php
$catLinkList = array_filter($services_list, function ($array) use ($categoryName) {
    return $array['category'] === $categoryName;
});
$index = 1;
// echo print_r($catLinkList);
foreach ($catLinkList as $catList):
?>
                    <a href="<?php echo BASE_URL; ?>services/<?php echo $catList['slug']; ?>"
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
                    </a>
                    <?php
$index++;
endforeach;
?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <div id="545"></div>
</div>