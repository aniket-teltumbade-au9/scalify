<div
    class="w-full relative bg-gray-600 rounded-bl-2xl rounded-tr-2xl pt-3 pb-16 overflow-hidden | lg:rounded-tr-none lg:pb-10 lg:pt-16 lg:rounded-b-3xl | dark:bg-grayDark-500">
    <div class="absolute bottom-2 left-0 flex w-5/16 pl-2 justify-center | md:justify-start md:pl-6 | lg:hidden">
        <?php echo logo("a", "text-white fill-current w-16 h-8"); ?>
    </div>
    <div class="absolute top-0 left-0 pr-5 pb-5 z-30 bg-white | dark:bg-grayDark-600">
        <div class="absolute top-0 left-0 transform translate-x-full w-full bg-white | dark:bg-grayDark-600 z-20">
            <div class="w-full aspect-ratio-1/1 bg-gray-600 rounded-tl-2xl | lg:rounded-tl-3xl | dark:bg-grayDark-500">
            </div>
        </div>
        <div class="absolute bottom-0 right-0 transform w-full bg-gray-600 z-20 | dark:bg-grayDark-500">
            <div class="w-full aspect-ratio-1/1 bg-white | dark:bg-grayDark-600 rounded-br-2xl | lg:rounded-br-3xl">
            </div>
        </div>
        <div class="absolute bottom-0 left-0 transform translate-y-full w-full bg-white | dark:bg-grayDark-600 z-20">
            <div class="w-full aspect-ratio-1/1 bg-gray-600 rounded-tl-2xl | lg:rounded-tl-3xl | dark:bg-grayDark-500">
            </div>
        </div>
        <div class="relative z-20">
            <div class="flex flex-col items-start space-y-1.5">
                <?php foreach ($socialLinksLogos as $social): ?>
                <a href="<?php echo $social["url"]; ?>" target="_blank" rel="noreferrer"
                    class="inline-flex items-center justify-center bg-primary-600 text-gray-600 translate-z-0 rounded-full w-8 h-8 duration-400 | xl:hover:bg-gray-600 xl:hover:text-white | lg:dark:hover:bg-grayDark-400">
                    <div class="sr-only">
                        Scalify</div>
                    <?php echo $social["icon"]('w-3.5 h-3.5 fill-current'); ?>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div
        class="absolute bottom-0 right-0 bg-white | dark:bg-grayDark-600 flex justify-center pl-4 rounded-tl-2xl | lg:rounded-tl-none lg:top-0 lg:bottom-auto lg:rounded-bl-3xl lg:px-0 lg:w-full lg:max-w-sm">
        <div
            class="absolute top-0 left-0 transform -translate-x-full w-12 hidden | lg:block bg-white | dark:bg-grayDark-600 z-20">
            <div class="w-full aspect-ratio-1/1 bg-gray-600 rounded-tr-2xl | lg:rounded-tr-3xl | dark:bg-grayDark-500">
            </div>
        </div>
        <div
            class="absolute bottom-0 right-0 transform translate-y-full w-12 hidden | lg:block bg-white | dark:bg-grayDark-600 z-20">
            <div class="w-full aspect-ratio-1/1 bg-gray-600 rounded-tr-2xl | lg:rounded-tr-3xl | dark:bg-grayDark-500">
            </div>
        </div>
        <svg id="Layer_1" id="svg-ani-2"
            class="w-10 h-10 | text-white fill-current absolute left-px -bottom-px transform -translate-x-full rotate-180 dark:text-grayDark-600 lg:hidden"
            version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
            <path d="M51.9 0v1.9c-27.6 0-50 22.4-50 50H0V0h51.9z"></path>
        </svg><svg id="Layer_1" id="svg-ani-3"
            class="w-10 h-10 | text-white fill-current absolute -right-px top-px transform -translate-y-full rotate-180 dark:text-grayDark-600 lg:hidden"
            version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
            <path d="M51.9 0v1.9c-27.6 0-50 22.4-50 50H0V0h51.9z"></path>
        </svg>
        <a href="#"
            class="inline-flex items-center space-x-1 font-light group transition-none pt-3 pb-1.5 | lg:pt-1.5 lg:pb-3 | dark:text-grayDark-100"
            x-on:click.prevent=" window.scrollTo({ top: 0, behavior: 'smooth' }); ">
            <div class="text-xs | lg:text-base">
                Sh*t I’ve gone too far, send me back up</div>
            <div class=" animate-bounce">
                👆</div>
        </a>
    </div>
    <div
        class="w-full flex flex-wrap justify-between mb-10 ml-20 pt-4 relative z-30 | md:mb-16 md:ml-28 md:pt-8 | lg:pt-0 lg:mb-20 lg:flex-nowrap lg:ml-28 xl:ml-40">
        <div
            class="w-full mb-10 flex flex-wrap flex-col | md:flex-row md:flex-nowrap md:mb-24 | lg:items-start lg:justify-start lg:flex-col lg:flex-wrap lg:pl-0 lg:mb-0 lg:w-7/16 | xl:w-6/16">
            <h2
                class="text-xl | md:text-2-5xl | xl:text-3xl | 4xl:text-4xl font-sans-primary tracking-tight text-white leading-tighter text-balance max-w-2xs mb-5 pr-10 | lg:max-w-2xs | xl:h-auto | 4xl:max-w-sm ">
                Expand Your Business <br>
                Not Your Office</h2>
            <div
                class="flex items-start flex-col space-y-5 | md:mt-1 md:flex-row md:items-center md:space-y-0 md:space-x-5 | lg:mt-0 lg:space-y-5 lg:space-x-0 lg:items-start lg:flex-col | xl:w-full xl:items-center xl:flex-row xl:space-y-0 xl:space-x-8">
                <div class="relative group inline-flex items-center" x-data="{ hover: false }"
                    x-on:mouseenter="hover = true" x-on:mouseleave="hover = false">
                    <svg id="svg-ani-4" width="0" height="0" class="absolute hidden" color-interpolation-filters="sRGB">
                        <defs>
                            <filter id="buttonFilter">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                <feColorMatrix in="blur" mode="matrix"
                                    values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="buttonFilter">
                                </feColorMatrix>
                                <feComposite in="SourceGraphic" in2="buttonFilter" operator="atop"></feComposite>
                                <feBlend in="SourceGraphic" in2="buttonFilter"></feBlend>
                            </filter>
                        </defs>
                    </svg>
                    <a href="" class="inline-flex relative group outline-none  | focus:outline-none "
                        style="filter: url(#buttonFilter);">
                        <div
                            class=" w-auto inline-flex items-center justify-center relative leading-tight shadow-none overflow-hidden rounded-full border-default bg-primary-600 text-gray-600 flex-shrink-0 py-2 px-5">
                            <div class="relative inline-flex top-px flex-shrink-0">
                                <div>
                                    Book a strategy call</div>
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
                                <svg id="svg-ani-6" class="w-3 h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                    </path>
                                </svg>
                            </div>
                            <div
                                class="absolute top-0 left-0 transition-transform transform translate-y-full -translate-x-full || js-button-arrow-icon-secondary ">
                                <svg id="svg-ani-7" class="w-3 h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="https://maps.app.goo.gl/ZLQEtimBRxKFQb7T7" target="_blank" class="w-24">
                    <div class="w-full | dark:hidden">
                        <div class="relative overflow-hidden w-full" style="padding-top: 34.25%;">
                            <picture class="w-full absolute top-0 left-0 w-full h-full ">
                                <source type="image/webp"
                                    srcset="https://made-byshape.transforms.svdcdn.com/production/uploads/images/Google-Review-Badge-White.png?w=400&amp;q=80&amp;fm=webp&amp;fit=crop&amp;crop=focalpoint&amp;fp-x=0.5&amp;fp-y=0.5&amp;dm=1730706461&amp;s=e43683f309f37723bac836d7b338a1e3 400w"
                                    sizes="100vw">
                                <img src="https://made-byshape.transforms.svdcdn.com/production/uploads/images/Google-Review-Badge-White.png?w=400&amp;q=80&amp;fm=webp&amp;fit=crop&amp;crop=focalpoint&amp;fp-x=0.5&amp;fp-y=0.5&amp;dm=1730706461&amp;s=e43683f309f37723bac836d7b338a1e3"
                                    srcset="https://made-byshape.transforms.svdcdn.com/production/uploads/images/Google-Review-Badge-White.png?w=400&amp;q=100&amp;auto=format&amp;fit=crop&amp;crop=focalpoint&amp;fp-x=0.5&amp;fp-y=0.5&amp;dm=1730706461&amp;s=2cdb7bc1f042a0267d2c6835cd76fa68 400w"
                                    sizes="100vw" alt="Google Review Badge White" class=" w-full  " loading="lazy"
                                    width="400" height="137">
                            </picture>
                        </div>
                    </div>
                    <div class="w-full hidden | dark:block">
                        <div class="relative overflow-hidden w-full" style="padding-top: 34.25%;">
                            <picture class="w-full absolute top-0 left-0 w-full h-full ">
                                <source type="image/webp"
                                    srcset="https://made-byshape.transforms.svdcdn.com/production/uploads/images/Google-Review-Badge-White.png?w=400&amp;q=80&amp;fm=webp&amp;fit=crop&amp;crop=focalpoint&amp;fp-x=0.5&amp;fp-y=0.5&amp;dm=1730706461&amp;s=e43683f309f37723bac836d7b338a1e3 400w"
                                    sizes="100vw">
                                <img src="https://made-byshape.transforms.svdcdn.com/production/uploads/images/Google-Review-Badge-White.png?w=400&amp;q=80&amp;fm=webp&amp;fit=crop&amp;crop=focalpoint&amp;fp-x=0.5&amp;fp-y=0.5&amp;dm=1730706461&amp;s=e43683f309f37723bac836d7b338a1e3"
                                    srcset="https://made-byshape.transforms.svdcdn.com/production/uploads/images/Google-Review-Badge-White.png?w=400&amp;q=100&amp;auto=format&amp;fit=crop&amp;crop=focalpoint&amp;fp-x=0.5&amp;fp-y=0.5&amp;dm=1730706461&amp;s=2cdb7bc1f042a0267d2c6835cd76fa68 400w"
                                    sizes="100vw" alt="Google Review Badge White" class=" w-full  " loading="lazy"
                                    width="400" height="137">
                            </picture>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="w-8/16 relative z-20 transform -translate-x-12 | md:w-4/16 | lg:w-4/16 | xl:w-3/16">
            <div class="text-gray-200 font-light mb-3 text-sm | md:text-base | dark:text-gray-100">
                Learn</div>
            <ul class="space-y-1">
                <li class="flex items-center space-x-2">
                    <a href="<?php echo BASE_URL; ?>about/"
                        class="text-white relative link text-sm | md:text-base |  | dark:text-gray-200 lg:dark:hover:text-gray-100 || group">
                        About
                    </a>
                </li>
                <li class="flex items-center space-x-2">
                    <a href="<?php echo BASE_URL; ?>blogs/"
                        class="text-white relative link text-sm | md:text-base |  | dark:text-gray-200 lg:dark:hover:text-gray-100 || group">
                        Blog
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-8/16 relative z-20 transform -translate-x-12 | md:w-4/16 | lg:w-4/16 | xl:w-3/16">
            <div class="text-gray-200 font-light mb-3 text-sm | md:text-base | dark:text-gray-100">
                Explore</div>
            <ul class="space-y-1">
                <li class="flex items-center space-x-2">
                    <a href="<?php echo BASE_URL; ?>"
                        class="text-white relative link text-sm | md:text-base |  | dark:text-gray-200 lg:dark:hover:text-gray-100 || group">
                        Home
                    </a>
                </li>
                <!-- <li class="flex items-center space-x-2">
                    <a href="<?php echo BASE_URL; ?>work/"
                        class="text-white relative link text-sm | md:text-base |  | dark:text-gray-200 lg:dark:hover:text-gray-100 || group">
                        Work
                    </a>
                    <div
                        class="-mt-0.5 uppercase pointer-events-none rounded-full z-20 bg-primary-600 text-gray-600 text-xs pt-0.5 pb-px px-2 leading-tighter tracking-tight">
                        New</div>
                </li> -->
                <li class="flex items-center space-x-2">
                    <a href="<?php echo BASE_URL; ?>services/"
                        class="text-white relative link text-sm | md:text-base |  | dark:text-gray-200 lg:dark:hover:text-gray-100 || group">
                        Services
                    </a>
                </li>
                <li class="flex items-center space-x-2">
                    <a href="<?php echo BASE_URL; ?>contact/"
                        class="text-white relative link text-sm | md:text-base |  | dark:text-gray-200 lg:dark:hover:text-gray-100 || group">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
        <div
            class="w-full mt-5 max-w-xs transform -translate-x-12 | md:mt-0 | lg:mt-20 | xl:max-w-sm | 2xl:max-w-md | 3xl:max-w-lg">
            <div class="flex flex-col items-start">
                <div class="text-gray-200 font-light mb-3 text-sm | md:text-base | dark:text-grayDark-100">
                    Get in touch</div>
                <a href="tel:971544351608" target="_blank"
                    class="inline-flex items-center space-x-4 mb-1 text-white text-sm | lg:text-base | lg:dark:hover:text-grayDark-100 | dark:text-grayDark-200">
                    <svg id="svg-ani-8" class="w-3 h-3 fill-current | 4xl:w-3.5 4xl:h-3.5" width="16" height="16"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M0 32L144 0l80 144-83.8 67c36.1 68.4 92.3 124.6 160.8 160.8l67-83.8 144 80-32 144h-32C200.6 512 0 311.4 0 64V32z">
                        </path>
                    </svg>
                    <div class="link text-sm | md:text-base">
                        97 15443 51608</div>
                </a><a href="mailto:hello@scalify.co.uk" target="_blank"
                    class="inline-flex items-center space-x-4 text-white | lg:dark:hover:text-grayDark-100 | dark:text-grayDark-200">
                    <svg id="svg-ani-9" class="w-3 h-3 fill-current | 4xl:w-3.5 4xl:h-3.5" width="16" height="16"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M0 64h512v80L256 320 0 144V64zm0 384V182.8l237.9 163.6 18.1 12.4 18.1-12.5L512 182.8V448H0z">
                        </path>
                    </svg>
                    <div class="link text-sm | md:text-base">
                        sales@scalify.ae</div>
                </a>
                <!-- <a href="https://www.google.com/maps/place/Scalify/@25.1078866,55.1652198,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f6d5310a53db1:0x70554943640e47f2!8m2!3d25.1078866!4d55.1652198!16s%2Fg%2F11xvrtm1_q?entry=ttu&g_ep=EgoyMDI1MDkwNy4wIKXMDSoASAFQAw%3D%3D" target="_blank"
                    class="inline-flex items-center space-x-4 text-white | lg:dark:hover:text-grayDark-100 | dark:text-grayDark-200">
                    <svg id="svg-ani-11" class="w-3 h-3 fill-current | 4xl:w-3.5 4xl:h-3.5" viewBox="0 0 11 11"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.998 5.5c0 .952.005 1.903-.002 2.854-.005.614-.119 1.2-.51 1.7-.4.512-.924.81-1.564.891a6.95 6.95 0 01-.857.051c-1.8.005-3.599.006-5.398 0-.495-.002-.984-.068-1.425-.318C.564 10.295.167 9.713.055 8.944a5.315 5.315 0 01-.052-.753C0 6.348 0 4.506.003 2.664c0-.532.08-1.05.369-1.513C.762.524 1.33.159 2.057.057a6.29 6.29 0 01.857-.053 930.1 930.1 0 015.424 0c.504.002 1 .072 1.447.332a2.278 2.278 0 011.16 1.725c.036.253.048.51.05.767.006.89.003 1.782.003 2.673zm-2.33-2.029c-.007-.178-.073-.295-.21-.369-.229-.123-.483-.015-.572.248-.24.71-.477 1.42-.715 2.13l-.635 1.898c-.084.251.01.465.234.545.226.081.437-.042.527-.31L8.632 3.62c.02-.056.028-.115.037-.15zm-2.48-.416c-.183 0-.32.102-.387.297l-.547 1.63-.802 2.397c-.074.22-.01.41.167.513.23.134.492.021.587-.258.216-.64.429-1.281.643-1.922.236-.706.473-1.41.707-2.117.093-.278-.088-.539-.368-.54zM2.332 7.528c.01.181.081.3.223.373.224.115.473.003.56-.254.177-.519.35-1.039.523-1.558l.827-2.469c.086-.256-.024-.49-.258-.554-.213-.059-.416.06-.496.296-.45 1.342-.898 2.684-1.346 4.026-.018.052-.025.107-.033.14z">
                        </path>
                    </svg>
                    <div class="link text-sm | md:text-base">
                       Location</div>
                </a> -->
            </div>
        </div>
    </div>
    <div class="max-w-6xl flex flex-wrap lg:flex-nowrap lg:gap-100 mx-auto justify-center p-8">
        <div class="w-full lg:w-fit flex space-x-4 mt-6 mb-1 lg:mb-2">
            <svg id="svg-ani-10" class="w-3 h-3 fill-current text-white mt-1 dark:text-grayDark-200 4xl:w-3.5 4xl:h-3.5"
                width="12" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path
                    d="M192 512s192-208 192-320C384 86 298 0 192 0S0 86 0 192c0 112 192 320 192 320zm0-384a64 64 0 110 128 64 64 0 110-128z">
                </path>
            </svg>
            <a href="https://maps.app.goo.gl/FjqEXznQmrjtbtEJ7" class="w-full relative">
                <p
                    class="text-sm md:text-base text-white dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7 mb-6">
                    <strong>Dubai Office</strong>
                    <br>in5 Tech,,
                    <br>Dubai Internet City
                    <br>Dubai
                    <br>United Arab Emirates
                </p>
            </a>
        </div>
        <div class="w-full lg:w-fit flex space-x-4 mt-6 mb-1 lg:mb-2">
            <svg id="svg-ani-10" class="w-3 h-3 fill-current text-white mt-1 dark:text-grayDark-200 4xl:w-3.5 4xl:h-3.5"
                width="12" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path
                    d="M192 512s192-208 192-320C384 86 298 0 192 0S0 86 0 192c0 112 192 320 192 320zm0-384a64 64 0 110 128 64 64 0 110-128z">
                </path>
            </svg>
            <a href="https://maps.app.goo.gl/yGb4podxY4uAskx4A" class="w-full relative ">
                <p
                    class="text-sm md:text-base text-white dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7 mb-6">
                    <strong>India Office</strong>
                    <br />B/15 NEW PRINCE REGENCY CHS
                    <br />KANAKIA
                    <br />BEVERLY PARK
                    <br />MUMBAI
                    <br />INDIA
                </p>
            </a>
        </div>
        <div class="w-full lg:w-fit flex space-x-4 mt-6 mb-1 lg:mb-2">
            <svg id="svg-ani-10" class="w-3 h-3 fill-current text-white mt-1 dark:text-grayDark-200 4xl:w-3.5 4xl:h-3.5"
                width="12" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path
                    d="M192 512s192-208 192-320C384 86 298 0 192 0S0 86 0 192c0 112 192 320 192 320zm0-384a64 64 0 110 128 64 64 0 110-128z">
                </path>
            </svg>
            <a href="https://maps.app.goo.gl/stt2tKX3cTVJFMMm6" class="w-full relative ">
                <p
                    class="text-sm md:text-base text-white dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7 mb-6">
                    <strong>Ireland Office</strong>
                    <br /> C/O Cynestx Ireland
                    <br /> Cullentragh Centre
                    <br /> Glenfarne
                    <br /> Co Leitrim
                    <br /> Ireland
                </p>
            </a>
        </div>
    </div>
    <div class="w-full justify-center mb-10 hidden | lg:flex lg:mb-5">
        <div class="text-white leading-none tracking-tight text-3xl text-center | lg:text-10vw">
            Dream | Build | Scale
            <!-- Transforming Digital Commerce -->
        </div>
    </div>
    <div class="w-full justify-end mb-10 hidden | lg:flex lg:m-5" style="padding-right: 100px;">
        <div class="text-white leading-none tracking-tight text-1xl text-center | lg:text-1vw">
            Transforming Digital Commerce
        </div>
    </div>
    <div class="w-full flex flex-wrap items-center justify-between px-6 | lg:px-20 | xl:px-24">
        <div class="inline-flex flex-row items-start pr-8 | lg:space-x-5 lg:items-center">
            <?php echo logo("a", "text-white fill-current w-16 h-8 hidden mb-1 | lg:inline-block"); ?>

            <div
                class="inline-flex flex-row text-gray-200 w-auto text-1xs | md:text-xs | lg:text-sm | dark:text-grayDark-200">
                <div>
                    © Scalify Ltd 2025</div>
                <!-- <div class="mx-2 | lg:mx-5">
                    |</div>
                <div>
                    Company Reg Number 10529058</div> -->
            </div>
        </div>
        <div
            class="inline-flex flex-row text-gray-200 w-auto text-1xs | md:text-xs | lg:text-sm | dark:text-grayDark-200">
            <a href="<?php echo BASE_URL; ?>" class="link | xl:hover:text-white | lg:dark:hover:text-grayDark-100">
                Warehousing Services UAE
            </a>
            <div class="mx-2 | lg:mx-5">
                |</div>
            <div>
                All Rights Reserved</div>
            <div class="mx-2 | lg:mx-5">
                |</div>
            <a href="https://scalify.co.uk/privacy-policy/"
                class="link | xl:hover:text-white | lg:dark:hover:text-grayDark-100">
                Privacy Policy
                <span class="hidden | lg:inline">
                    (you really care?)
                </span>
            </a>
        </div>
    </div>
</div>
<script src="<?php echo BASE_URL; ?>assets/javascript/main.js" defer></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/javascript/andyslider/script.js"></script>
<script src="https://player.vimeo.com/api/player.js"></script>

<script src="https://player.vimeo.com/api/player.js"></script>
<script>
window.SERVD_CSRF_TOKEN_NAME = "CRAFT_CSRF_TOKEN";

function injectCSRF() {
    var inputs = document.getElementsByName(window.SERVD_CSRF_TOKEN_NAME);
    var len = inputs.length;
    if (len > 0) {
        var xhr = new XMLHttpRequest();
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status <= 299) {
                var tokenInfo = JSON.parse(this.responseText);
                window.csrfTokenValue = tokenInfo.token;
                window.csrfTokenName = tokenInfo.name;
                for (var i = 0; i < len; i++) {
                    inputs[i].setAttribute("value", tokenInfo.token);
                }
                window.dispatchEvent(new CustomEvent("servd.csrfloaded", {
                    detail: {
                        token: tokenInfo.token
                    }
                }));
            } else {
                window.dispatchEvent(new CustomEvent("servd.csrffailed"));
            }

        };
        xhr.open("GET", "https://madebyshape.co.uk/index.php/actions/servd-asset-storage/csrf-token/get-token/");
        xhr.send();
    }
}
setTimeout(function() {
    if (!window.SERVD_MANUAL_CSRF_LOAD) {
        injectCSRF();
    }
}, 50);
document.addEventListener('alpine:init', () => {
    Alpine.data('cursor', () => ({
        icon: 'arrow-up-right',
        x: 0,
        y: 0,
        endX: (window.innerWidth / 2),
        endY: (window.innerHeight / 2),
        cursorVisible: true,
        cursorEnlarged: false,
        cursorHovering: false,
        cursorDragging: false,
        cursor: document.querySelector('.js-cursor'),
        dragCursor: document.querySelector('.js-cursor-drag'),
        init() {

            _self = this;

            _self.dotSize = _self.cursor.offsetWidth;

            _self.setupEventListeners();

        },
        setupEventListeners() {

            _self = this;

            // Drag

            document.querySelectorAll('.js-cursor-trigger-drag').forEach((element) => {

                element.addEventListener('mouseover', function() {

                    var icon = element.getAttribute('data-icon');

                    if (icon) {
                        _self.icon = icon;
                    } else {
                        _self.icon = 'arrow-up-right';
                    }

                    _self.cursorDragging = true;
                    _self.cursorEnlarged = true;

                    _self.toggleCursorDrag();

                });

                element.addEventListener('mouseout', function() {

                    _self.cursorDragging = false;
                    _self.cursorEnlarged = false;

                    _self.toggleCursorDrag();

                });

            });

            // Position

            document.addEventListener('pointermove', function(event) {

                _self.endX = event.clientX;
                _self.endY = event.clientY;

                _self.cursor.style.top = _self.endY + 'px';
                _self.cursor.style.left = _self.endX + 'px';

            });

        },
        toggleCursorDrag() {

            _self = this;

            if (_self.cursorDragging) {

                _self.dragCursor.classList.remove('scale-0');
                // _self.cursor.classList.remove('opacity-0');
                document.body.classList.add('no-cursor');

            } else {

                _self.dragCursor.classList.add('scale-0');
                // _self.cursor.classList.add('opacity-0');
                document.body.classList.remove('no-cursor');

            }

        },
    }))
});
document.addEventListener('alpine:init', () => {
    Alpine.data('modal423709', () => ({
        visible: false,
        setupModal(id) {

            // Prevent keys from interferring with the video

            navigator.mediaSession.setActionHandler('play', function() {});
            navigator.mediaSession.setActionHandler('pause', function() {});
            navigator.mediaSession.setActionHandler('seekbackward', function() {});
            navigator.mediaSession.setActionHandler('seekforward', function() {});
            navigator.mediaSession.setActionHandler('previoustrack', function() {});
            navigator.mediaSession.setActionHandler('nexttrack', function() {});

            // Get video elements

            const video = document.querySelector(`.js-modal-video-${id}`);
            const videoProgress = document.querySelector(`.js-modal-video-progress-${id}`);

            const videoPlayPause = document.querySelector(`.js-modal-video-play-pause-${id}`);
            const videoSound = document.querySelector(`.js-modal-video-sound-${id}`);

            const videoPlayIcon = document.querySelector(`.js-modal-video-play-icon-${id}`);
            const videoPauseIcon = document.querySelector(`.js-modal-video-pause-icon-${id}`);

            const videoVolumeOnIcon = document.querySelector(
                `.js-modal-video-volume-on-icon-${id}`);
            const videoVolumeOffIcon = document.querySelector(
                `.js-modal-video-volume-off-icon-${id}`);

            // Video controls

            if (video) {

                if (video.tagName == 'IFRAME') {

                    const player = new Vimeo.Player(video);

                    // Video controls

                    videoSound.addEventListener('click', (event) => {

                        player.getVolume().then(function(volume) {

                            if (videoVolumeOnIcon.classList.contains(
                                    'hidden')) {

                                player.setVolume(1);
                                videoVolumeOnIcon.classList.remove('hidden');
                                videoVolumeOffIcon.classList.add('hidden');

                            } else {

                                player.setVolume(0);
                                videoVolumeOnIcon.classList.add('hidden');
                                videoVolumeOffIcon.classList.remove('hidden');

                            }

                        });

                        event.preventDefault();

                    });

                    videoPlayPause.addEventListener('click', (event) => {

                        player.getPaused().then(function(paused) {

                            if (paused) {

                                player.play();
                                videoPlayIcon.classList.add('hidden');
                                videoPauseIcon.classList.remove('hidden');

                            } else {

                                player.pause();
                                videoPlayIcon.classList.remove('hidden');
                                videoPauseIcon.classList.add('hidden');

                            }

                        });

                        event.preventDefault();

                    });

                } else {

                    videoSound.addEventListener('click', (event) => {

                        if (videoVolumeOnIcon.classList.contains('hidden')) {

                            video.muted = false;
                            videoVolumeOnIcon.classList.remove('hidden');
                            videoVolumeOffIcon.classList.add('hidden');

                        } else {

                            video.muted = true;
                            videoVolumeOnIcon.classList.add('hidden');
                            videoVolumeOffIcon.classList.remove('hidden');

                        }

                        event.preventDefault();

                    });

                    videoPlayPause.addEventListener('click', (event) => {

                        if (video.paused) {

                            video.play();
                            videoPlayIcon.classList.add('hidden');
                            videoPauseIcon.classList.remove('hidden');

                        } else {

                            video.pause();
                            videoPlayIcon.classList.remove('hidden');
                            videoPauseIcon.classList.add('hidden');

                        }

                        event.preventDefault();

                    });

                }

            }

            this.$watch('visible', function(value) {

                if (value != false) {

                    document.body.classList.add('overflow-hidden');

                    // Video (Vimeo)

                    if (video) {

                        if (video.tagName == 'IFRAME') {

                            const player = new Vimeo.Player(video);

                            // Initialise video

                            player.setCurrentTime(0);
                            player.play();
                            player.setVolume(1);

                            // Progress bar

                            setInterval(() => {

                                if (videoProgress) {

                                    player.getCurrentTime().then(function(
                                        seconds) {

                                        player.getDuration().then(
                                            function(
                                                duration) {

                                                videoProgress.style
                                                    .width = (
                                                        seconds /
                                                        duration) *
                                                    100 + '%';

                                            });

                                    });

                                }

                            }, 100);

                        } else {

                            // Initialise video

                            video.currentTime = 0;
                            video.play();

                            // Progress bar

                            setInterval(() => {

                                if (videoProgress) {

                                    videoProgress.style.width = (video
                                        .currentTime /
                                        video.duration) * 100 + '%';

                                }

                            }, 100);

                        }

                    }


                } else {

                    document.body.classList.remove('overflow-hidden');
                }

            });

        },
        closeModal(id) {

            this.visible = false;

            const video = document.querySelector('.js-modal-video-' + id);
            const videoProgress = document.querySelector('.js-modal-video-progress-' + id);

            if (video) {

                if (video.tagName == 'IFRAME') {

                    const player = new Vimeo.Player(video);

                    player.pause();


                } else {

                    video.pause();
                    videoProgress.style.width = '0%';

                }
            }

        }
    }))
});
document.addEventListener('alpine:init', () => {
    Alpine.data('header', () => ({
        headerSmall: false,
        menu: false,
        headerDirection: 'down',
        headerPosition: 0,
        updatedHeaderPosition: 0,
        hideHeader: false,
        darkMode: localStorage.darkMode === 'true' ? true : false,
        updateHeader() {

            const header = document.querySelector('.js-header');

            if (window.scrollY > 10) {

                this.headerSmall = true;

                this.headerPosition = window.scrollY;

                if (this.headerPosition > this.updatedHeaderPosition) {

                    this.headerDirection = 'down';

                } else {

                    this.headerDirection = 'up';

                }

                this.updatedHeaderPosition = this.headerPosition;

            } else {

                this.headerSmall = false;

            }

            let headerWidth = '60rem';
            let headerWidthWide = '99vw';

            ScrollTrigger.matchMedia({
                '(min-width: 1024px)': () => {

                    headerWidth = '60rem';
                    headerWidthWide = '99vw';

                },
                '(max-width: 1023px)': () => {

                    headerWidth = '16rem';
                    headerWidthWide = '99vw';

                }
            });

            if (window.scrollY > 10) {

                gsap.to(header, {
                    duration: 0.6,
                    width: headerWidth,
                    ease: 'power4.out',
                });

                header.classList.add('header-background');


            } else {

                gsap.to(header, {
                    duration: 0.6,
                    width: headerWidthWide,
                    ease: 'power4.out',
                });

                header.classList.remove('header-background');

            }

        },
        mobileMenu() {

            const header = document.querySelector('.js-header');
            const mobileMenu = document.querySelector('.js-mobile-menu');

            let headerWidth = '60rem';
            let headerWidthWide = '94vw';

            ScrollTrigger.matchMedia({
                '(min-width: 1024px)': () => {

                    headerWidth = '60rem';
                    headerWidthWide = '94vw';

                },
                '(max-width: 1023px)': () => {

                    headerWidth = '16rem';
                    headerWidthWide = '94vw';

                }
            });

            this.$watch('menu', value => {

                if (value == 'mobileMenu') {

                    document.body.classList.add('overflow-hidden');

                    gsap.to(header, {
                        duration: 0.4,
                        width: headerWidthWide,
                        ease: 'power4.out',
                    });

                    gsap.to(mobileMenu, {
                        duration: 0.4,
                        delay: window.scrollY > 10 ? 0.2 : 0,
                        height: '27.5rem',
                        ease: 'power4.out',
                    });

                    gsap.to(mobileMenu, {
                        duration: 1,
                        delay: window.scrollY > 10 ? 0.3 : 0.1,
                        opacity: 1,
                        ease: 'power4.out',
                    });


                    header.classList.add('header-background');

                } else {

                    document.body.classList.remove('overflow-hidden');

                    setTimeout(() => {

                        if (window.scrollY > 10) {

                            header.classList.add('header-background');

                        } else {

                            header.classList.remove('header-background');

                        }

                    }, 400);

                    gsap.to(mobileMenu, {
                        duration: 0.6,
                        opacity: 0,
                        ease: 'power4.out',
                    });

                    gsap.to(mobileMenu, {
                        duration: 0.4,
                        height: '0rem',
                        delay: 0.2,
                        ease: 'power4.out',
                    });

                    if (window.scrollY > 10) {

                        gsap.to(header, {
                            duration: 0.4,
                            delay: 0.4,
                            width: headerWidth,
                            ease: 'power4.out',
                        });

                    } else {

                        gsap.to(header, {
                            duration: 0.4,
                            delay: 0.4,
                            width: '99vw',
                            ease: 'power4.out',
                        });

                    }

                }

            });

        }
    }))
});
document.addEventListener('alpine:init', () => {
    Alpine.data('modal430895', () => ({
        visible: false,
        setupModal(id) {

            // Prevent keys from interferring with the video

            navigator.mediaSession.setActionHandler('play', function() {});
            navigator.mediaSession.setActionHandler('pause', function() {});
            navigator.mediaSession.setActionHandler('seekbackward', function() {});
            navigator.mediaSession.setActionHandler('seekforward', function() {});
            navigator.mediaSession.setActionHandler('previoustrack', function() {});
            navigator.mediaSession.setActionHandler('nexttrack', function() {});

            // Get video elements

            const video = document.querySelector(`.js-modal-video-${id}`);
            const videoProgress = document.querySelector(`.js-modal-video-progress-${id}`);

            const videoPlayPause = document.querySelector(`.js-modal-video-play-pause-${id}`);
            const videoSound = document.querySelector(`.js-modal-video-sound-${id}`);

            const videoPlayIcon = document.querySelector(`.js-modal-video-play-icon-${id}`);
            const videoPauseIcon = document.querySelector(`.js-modal-video-pause-icon-${id}`);

            const videoVolumeOnIcon = document.querySelector(
                `.js-modal-video-volume-on-icon-${id}`);
            const videoVolumeOffIcon = document.querySelector(
                `.js-modal-video-volume-off-icon-${id}`);

            // Video controls

            if (video) {

                if (video.tagName == 'IFRAME') {

                    const player = new Vimeo.Player(video);

                    // Video controls

                    videoSound.addEventListener('click', (event) => {

                        player.getVolume().then(function(volume) {

                            if (videoVolumeOnIcon.classList.contains(
                                    'hidden')) {

                                player.setVolume(1);
                                videoVolumeOnIcon.classList.remove('hidden');
                                videoVolumeOffIcon.classList.add('hidden');

                            } else {

                                player.setVolume(0);
                                videoVolumeOnIcon.classList.add('hidden');
                                videoVolumeOffIcon.classList.remove('hidden');

                            }

                        });

                        event.preventDefault();

                    });

                    videoPlayPause.addEventListener('click', (event) => {

                        player.getPaused().then(function(paused) {

                            if (paused) {

                                player.play();
                                videoPlayIcon.classList.add('hidden');
                                videoPauseIcon.classList.remove('hidden');

                            } else {

                                player.pause();
                                videoPlayIcon.classList.remove('hidden');
                                videoPauseIcon.classList.add('hidden');

                            }

                        });

                        event.preventDefault();

                    });

                } else {

                    videoSound.addEventListener('click', (event) => {

                        if (videoVolumeOnIcon.classList.contains('hidden')) {

                            video.muted = false;
                            videoVolumeOnIcon.classList.remove('hidden');
                            videoVolumeOffIcon.classList.add('hidden');

                        } else {

                            video.muted = true;
                            videoVolumeOnIcon.classList.add('hidden');
                            videoVolumeOffIcon.classList.remove('hidden');

                        }

                        event.preventDefault();

                    });

                    videoPlayPause.addEventListener('click', (event) => {

                        if (video.paused) {

                            video.play();
                            videoPlayIcon.classList.add('hidden');
                            videoPauseIcon.classList.remove('hidden');

                        } else {

                            video.pause();
                            videoPlayIcon.classList.remove('hidden');
                            videoPauseIcon.classList.add('hidden');

                        }

                        event.preventDefault();

                    });

                }

            }

            this.$watch('visible', function(value) {

                if (value != false) {

                    document.body.classList.add('overflow-hidden');

                    // Video (Vimeo)

                    if (video) {

                        if (video.tagName == 'IFRAME') {

                            const player = new Vimeo.Player(video);

                            // Initialise video

                            player.setCurrentTime(0);
                            player.play();
                            player.setVolume(1);

                            // Progress bar

                            setInterval(() => {

                                if (videoProgress) {

                                    player.getCurrentTime().then(function(
                                        seconds) {

                                        player.getDuration().then(
                                            function(
                                                duration) {

                                                videoProgress.style
                                                    .width = (
                                                        seconds /
                                                        duration) *
                                                    100 + '%';

                                            });

                                    });

                                }

                            }, 100);

                        } else {

                            // Initialise video

                            video.currentTime = 0;
                            video.play();

                            // Progress bar

                            setInterval(() => {

                                if (videoProgress) {

                                    videoProgress.style.width = (video
                                        .currentTime /
                                        video.duration) * 100 + '%';

                                }

                            }, 100);

                        }

                    }


                } else {

                    document.body.classList.remove('overflow-hidden');
                }

            });

        },
        closeModal(id) {

            this.visible = false;

            const video = document.querySelector('.js-modal-video-' + id);
            const videoProgress = document.querySelector('.js-modal-video-progress-' + id);

            if (video) {

                if (video.tagName == 'IFRAME') {

                    const player = new Vimeo.Player(video);

                    player.pause();


                } else {

                    video.pause();
                    videoProgress.style.width = '0%';

                }
            }

        }
    }))
});
document.addEventListener('alpine:init', () => {
    Alpine.data('logoCarousel', () => ({
        carousel(id) {

            const swiper = new Swiper(`.js-carousel-${id}`, {
                slidesPerView: 2,
                loop: true,
                speed: 8000,
                autoplay: {
                    delay: 0,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 3,
                    },
                    768: {
                        slidesPerView: 3.5,
                    },
                    1024: {
                        slidesPerView: 3.5,
                    },
                    1280: {
                        slidesPerView: 4,
                    },
                    1400: {
                        slidesPerView: 4,
                    },
                    1600: {
                        slidesPerView: 5,
                    },
                }
            });

            window.addEventListener('resize', () => {

                clearTimeout(window.resizedFinished);

                window.resizedFinished = setTimeout(function() {

                    swiper.update();
                    swiper.autoplay.start();

                }, 50);

            });

            const logos = document.querySelectorAll(`.js-logo-${id}`);

            // ScrollTrigger.matchMedia({
            //     '(min-width: 1280px)': () => {

            //         gsap.to(logos, {
            //             scrollTrigger: {
            //                 trigger: logos,
            //                 scrub: true,
            //                 start: 'top 110%',
            //                 end: 'bottom top'
            //             },
            //             x: -200,
            //             ease: 'none',
            //         });

            //     }
            // });

        }
    }));
});
document.addEventListener('alpine:init', () => {
    Alpine.data('modal430950', () => ({
        visible: false,
        setupModal(id) {

            // Prevent keys from interferring with the video

            navigator.mediaSession.setActionHandler('play', function() {});
            navigator.mediaSession.setActionHandler('pause', function() {});
            navigator.mediaSession.setActionHandler('seekbackward', function() {});
            navigator.mediaSession.setActionHandler('seekforward', function() {});
            navigator.mediaSession.setActionHandler('previoustrack', function() {});
            navigator.mediaSession.setActionHandler('nexttrack', function() {});

            // Get video elements

            const video = document.querySelector(`.js-modal-video-${id}`);
            const videoProgress = document.querySelector(`.js-modal-video-progress-${id}`);

            const videoPlayPause = document.querySelector(`.js-modal-video-play-pause-${id}`);
            const videoSound = document.querySelector(`.js-modal-video-sound-${id}`);

            const videoPlayIcon = document.querySelector(`.js-modal-video-play-icon-${id}`);
            const videoPauseIcon = document.querySelector(`.js-modal-video-pause-icon-${id}`);

            const videoVolumeOnIcon = document.querySelector(
                `.js-modal-video-volume-on-icon-${id}`);
            const videoVolumeOffIcon = document.querySelector(
                `.js-modal-video-volume-off-icon-${id}`);

            // Video controls

            if (video) {

                if (video.tagName == 'IFRAME') {

                    const player = new Vimeo.Player(video);

                    // Video controls

                    videoSound.addEventListener('click', (event) => {

                        player.getVolume().then(function(volume) {

                            if (videoVolumeOnIcon.classList.contains(
                                    'hidden')) {

                                player.setVolume(1);
                                videoVolumeOnIcon.classList.remove('hidden');
                                videoVolumeOffIcon.classList.add('hidden');

                            } else {

                                player.setVolume(0);
                                videoVolumeOnIcon.classList.add('hidden');
                                videoVolumeOffIcon.classList.remove('hidden');

                            }

                        });

                        event.preventDefault();

                    });

                    videoPlayPause.addEventListener('click', (event) => {

                        player.getPaused().then(function(paused) {

                            if (paused) {

                                player.play();
                                videoPlayIcon.classList.add('hidden');
                                videoPauseIcon.classList.remove('hidden');

                            } else {

                                player.pause();
                                videoPlayIcon.classList.remove('hidden');
                                videoPauseIcon.classList.add('hidden');

                            }

                        });

                        event.preventDefault();

                    });

                } else {

                    videoSound.addEventListener('click', (event) => {

                        if (videoVolumeOnIcon.classList.contains('hidden')) {

                            video.muted = false;
                            videoVolumeOnIcon.classList.remove('hidden');
                            videoVolumeOffIcon.classList.add('hidden');

                        } else {

                            video.muted = true;
                            videoVolumeOnIcon.classList.add('hidden');
                            videoVolumeOffIcon.classList.remove('hidden');

                        }

                        event.preventDefault();

                    });

                    videoPlayPause.addEventListener('click', (event) => {

                        if (video.paused) {

                            video.play();
                            videoPlayIcon.classList.add('hidden');
                            videoPauseIcon.classList.remove('hidden');

                        } else {

                            video.pause();
                            videoPlayIcon.classList.remove('hidden');
                            videoPauseIcon.classList.add('hidden');

                        }

                        event.preventDefault();

                    });

                }

            }

            this.$watch('visible', function(value) {

                if (value != false) {

                    document.body.classList.add('overflow-hidden');

                    // Video (Vimeo)

                    if (video) {

                        if (video.tagName == 'IFRAME') {

                            const player = new Vimeo.Player(video);

                            // Initialise video

                            player.setCurrentTime(0);
                            player.play();
                            player.setVolume(1);

                            // Progress bar

                            setInterval(() => {

                                if (videoProgress) {

                                    player.getCurrentTime().then(function(
                                        seconds) {

                                        player.getDuration().then(
                                            function(
                                                duration) {

                                                videoProgress.style
                                                    .width = (
                                                        seconds /
                                                        duration) *
                                                    100 + '%';

                                            });

                                    });

                                }

                            }, 100);

                        } else {

                            // Initialise video

                            video.currentTime = 0;
                            video.play();

                            // Progress bar

                            setInterval(() => {

                                if (videoProgress) {

                                    videoProgress.style.width = (video
                                        .currentTime /
                                        video.duration) * 100 + '%';

                                }

                            }, 100);

                        }

                    }


                } else {

                    document.body.classList.remove('overflow-hidden');
                }

            });

        },
        closeModal(id) {

            this.visible = false;

            const video = document.querySelector('.js-modal-video-' + id);
            const videoProgress = document.querySelector('.js-modal-video-progress-' + id);

            if (video) {

                if (video.tagName == 'IFRAME') {

                    const player = new Vimeo.Player(video);

                    player.pause();


                } else {

                    video.pause();
                    videoProgress.style.width = '0%';

                }
            }

        }
    }))
});
document.addEventListener('alpine:init', () => {
    Alpine.data('modal426302', () => ({
        visible: false,
        setupModal(id) {

            // Prevent keys from interferring with the video

            navigator.mediaSession.setActionHandler('play', function() {});
            navigator.mediaSession.setActionHandler('pause', function() {});
            navigator.mediaSession.setActionHandler('seekbackward', function() {});
            navigator.mediaSession.setActionHandler('seekforward', function() {});
            navigator.mediaSession.setActionHandler('previoustrack', function() {});
            navigator.mediaSession.setActionHandler('nexttrack', function() {});

            // Get video elements

            const video = document.querySelector(`.js-modal-video-${id}`);
            const videoProgress = document.querySelector(`.js-modal-video-progress-${id}`);

            const videoPlayPause = document.querySelector(`.js-modal-video-play-pause-${id}`);
            const videoSound = document.querySelector(`.js-modal-video-sound-${id}`);

            const videoPlayIcon = document.querySelector(`.js-modal-video-play-icon-${id}`);
            const videoPauseIcon = document.querySelector(`.js-modal-video-pause-icon-${id}`);

            const videoVolumeOnIcon = document.querySelector(
                `.js-modal-video-volume-on-icon-${id}`);
            const videoVolumeOffIcon = document.querySelector(
                `.js-modal-video-volume-off-icon-${id}`);

            // Video controls

            if (video) {

                if (video.tagName == 'IFRAME') {

                    const player = new Vimeo.Player(video);

                    // Video controls

                    videoSound.addEventListener('click', (event) => {

                        player.getVolume().then(function(volume) {

                            if (videoVolumeOnIcon.classList.contains(
                                    'hidden')) {

                                player.setVolume(1);
                                videoVolumeOnIcon.classList.remove('hidden');
                                videoVolumeOffIcon.classList.add('hidden');

                            } else {

                                player.setVolume(0);
                                videoVolumeOnIcon.classList.add('hidden');
                                videoVolumeOffIcon.classList.remove('hidden');

                            }

                        });

                        event.preventDefault();

                    });

                    videoPlayPause.addEventListener('click', (event) => {

                        player.getPaused().then(function(paused) {

                            if (paused) {

                                player.play();
                                videoPlayIcon.classList.add('hidden');
                                videoPauseIcon.classList.remove('hidden');

                            } else {

                                player.pause();
                                videoPlayIcon.classList.remove('hidden');
                                videoPauseIcon.classList.add('hidden');

                            }

                        });

                        event.preventDefault();

                    });

                } else {

                    videoSound.addEventListener('click', (event) => {

                        if (videoVolumeOnIcon.classList.contains('hidden')) {

                            video.muted = false;
                            videoVolumeOnIcon.classList.remove('hidden');
                            videoVolumeOffIcon.classList.add('hidden');

                        } else {

                            video.muted = true;
                            videoVolumeOnIcon.classList.add('hidden');
                            videoVolumeOffIcon.classList.remove('hidden');

                        }

                        event.preventDefault();

                    });

                    videoPlayPause.addEventListener('click', (event) => {

                        if (video.paused) {

                            video.play();
                            videoPlayIcon.classList.add('hidden');
                            videoPauseIcon.classList.remove('hidden');

                        } else {

                            video.pause();
                            videoPlayIcon.classList.remove('hidden');
                            videoPauseIcon.classList.add('hidden');

                        }

                        event.preventDefault();

                    });

                }

            }

            this.$watch('visible', function(value) {

                if (value != false) {

                    document.body.classList.add('overflow-hidden');

                    // Video (Vimeo)

                    if (video) {

                        if (video.tagName == 'IFRAME') {

                            const player = new Vimeo.Player(video);

                            // Initialise video

                            player.setCurrentTime(0);
                            player.play();
                            player.setVolume(1);

                            // Progress bar

                            setInterval(() => {

                                if (videoProgress) {

                                    player.getCurrentTime().then(function(
                                        seconds) {

                                        player.getDuration().then(
                                            function(
                                                duration) {

                                                videoProgress.style
                                                    .width = (
                                                        seconds /
                                                        duration) *
                                                    100 + '%';

                                            });

                                    });

                                }

                            }, 100);

                        } else {

                            // Initialise video

                            video.currentTime = 0;
                            video.play();

                            // Progress bar

                            setInterval(() => {

                                if (videoProgress) {

                                    videoProgress.style.width = (video
                                        .currentTime /
                                        video.duration) * 100 + '%';

                                }

                            }, 100);

                        }

                    }


                } else {

                    document.body.classList.remove('overflow-hidden');
                }

            });

        },
        closeModal(id) {

            this.visible = false;

            const video = document.querySelector('.js-modal-video-' + id);
            const videoProgress = document.querySelector('.js-modal-video-progress-' + id);

            if (video) {

                if (video.tagName == 'IFRAME') {

                    const player = new Vimeo.Player(video);

                    player.pause();


                } else {

                    video.pause();
                    videoProgress.style.width = '0%';

                }
            }

        }
    }))
});
document.addEventListener('alpine:init', () => {
    Alpine.data('featureQuote', () => ({
        crossBrowserClasses(id) {

            const isWindows = navigator.platform.indexOf('Win') > -1;
            const isAndroid = navigator.userAgent.toLowerCase().indexOf("android") > -1;

            const elements = document.querySelectorAll(`.js-cross-browser-${id}`);

            elements.forEach(element => {

                if (isWindows) {

                    const windowsRemove = element.getAttribute('data-windows-remove')
                        .split(
                            '|');
                    const windowsAdd = element.getAttribute('data-windows-add').split(
                        '|');

                    element.classList.remove(...windowsRemove);
                    element.classList.add(...windowsAdd);

                }

                if (isAndroid) {

                    const androidRemove = element.getAttribute('data-android-remove')
                        .split(
                            '|');
                    const androidAdd = element.getAttribute('data-android-add').split(
                        '|');

                    element.classList.remove(...androidRemove);
                    element.classList.add(...androidAdd);

                }

            });

        }
    }))
});
document.addEventListener('alpine:init', () => {
    Alpine.data('ticker', () => ({
        carousels(id, speed) {

            const carousels = document.querySelectorAll(`.js-carousel-${id}`);
            const mediaQuery = window.matchMedia('(max-width: 768px)');

            if (mediaQuery.matches) {
                speed = speed / 1.5;
            }

            carousels.forEach((carousel, index) => {

                const parentSelector = carousel;
                const clone = parentSelector.innerHTML;

                const firstElement = parentSelector.children[0];
                const lastElement = parentSelector.children[parentSelector.children
                    .length -
                    1];

                let i = 0;

                if (index % 2 === 0) {

                    this.animateCarousel('beforeend', 'left', firstElement, clone,
                        parentSelector, i, speed);

                } else {

                    this.animateCarousel('afterbegin', 'right', lastElement, clone,
                        parentSelector, i, speed);

                }

            });

        },
        animateCarousel(position, margin, element, clone, parentSelector, i, speed) {

            parentSelector.insertAdjacentHTML(position, clone);
            parentSelector.insertAdjacentHTML(position, clone);

            setInterval(function() {

                margin === 'left' ?
                    element.style.marginLeft = `-${i}px` :
                    element.style.marginRight = `-${i}px`;


                if (i > element.clientWidth) {
                    i = 0;
                }

                i = i + speed;

            }, 0);

        }
    }));
});
document.addEventListener('alpine:init', () => {
    Alpine.data('pageLinksCarousel', () => ({
        isStart: true,
        isEnd: false,
        carousel(id) {

            const carousel = new Swiper('.js-carousel-' + id, {
                slidesPerView: 1.2,
                spaceBetween: 0,
                navigation: {
                    nextEl: '.js-carousel-next-' + id,
                    prevEl: '.js-carousel-prev-' + id,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1.7,
                    },
                    1024: {
                        slidesPerView: 2.2,
                    },
                    1800: {
                        slidesPerView: 2.5,
                    }
                },
            });

            carousel.on('slideChange', () => {
                this.isStart = carousel.isBeginning;
                this.isEnd = carousel.isEnd;
            });

        }
    }));
});
document.addEventListener('alpine:init', () => {
    Alpine.data('app', () => ({
        viewportHeight: null,
        gaEvents() {

            document.querySelectorAll('a[href^="mailto"]')
                .forEach(element => {

                    element.addEventListener('click', (event) => {
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({
                            'event': 'email_lead'
                        });
                    })

                });

            document.querySelectorAll('a[href^="tel:"]')
                .forEach(element => {

                    element.addEventListener('click', (event) => {
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({
                            'event': 'phone_lead'
                        });
                    })

                });

            document.querySelectorAll('.js-social-link')
                .forEach(element => {

                    element.addEventListener('click', (event) => {
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({
                            'event': 'social_links'
                        });
                    })

                });






        },
        baseInit() {

            viewportHeight = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${viewportHeight}px`);

            const darkMode = Cookies.get('darkMode');

            if (darkMode == 'true') {
                document.querySelector('html').classList.add('dark');
            }


        }
    }))
});
document.addEventListener('alpine:init', () => {
    Alpine.data('logosDoubleCarousel', () => ({
        carousel(id) {

            const carousels = document.querySelectorAll(`.js-carousel-${id}`);

            carousels.forEach((carousel, index) => {

                const swiper = new Swiper(carousel, {
                    slidesPerView: 2,
                    spaceBetween: 0,
                    loop: true,
                    allowTouchMove: false,
                    autoplay: {
                        delay: 0,
                        disableOnInteraction: false,
                        reverseDirection: index % 2 === 0 ? false : true,
                    },
                    speed: 10000,
                    grabCursor: false,
                    mousewheelControl: false,
                    keyboardControl: false,
                    breakpoints: {
                        640: {
                            slidesPerView: 3,
                        },
                        768: {
                            slidesPerView: 3.5,
                        },
                        1024: {
                            slidesPerView: 4,
                        },
                        1280: {
                            slidesPerView: 4,
                        },
                        1400: {
                            slidesPerView: 5,
                        },
                        2100: {
                            slidesPerView: 6,
                        },
                    }
                });

                setTimeout(() => {

                    swiper.update();
                    swiper.autoplay.start();

                }, 1000);

                window.addEventListener('resize', () => {

                    clearTimeout(window.resizedFinished);

                    window.resizedFinished = setTimeout(function() {

                        swiper.update();
                        swiper.autoplay.start();

                    }, 50);

                });

                const logos = carousel.querySelectorAll(`.js-logo-${id}`);

                // ScrollTrigger.matchMedia({
                //     '(min-width: 1280px)': () => {

                //         gsap.to(logos, {
                //             scrollTrigger: {
                //                 trigger: logos,
                //                 scrub: true,
                //                 start: 'top 110%',
                //                 end: 'bottom top'
                //             },
                //             x: index % 2 === 0 ? 100 : -100,
                //             ease: 'none',
                //         });

                //     }
                // });


            });

        }
    }));
});
</script>
<script src="https://cdn.jsdelivr.net/npm/@figmania/loader/build/index.umd.js"></script>