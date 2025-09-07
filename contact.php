<!doctype html>
<html class="no-js" lang="en">

<?php include './elements/meta.php'; ?>


<body class="bg-white | dark:bg-grayDark-600" x-data="app()" x-init="baseInit(), gaEvents()">
    <?php include './elements/header.php'; ?>
    <script async src="<?php echo BASE_URL; ?>assets/javascript"></script>
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WV3N2X" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <div x-data="cursor" @component-cursor.window="if ($event.detail.icon ) { icon = $event.detail.icon; }">
        <div
            class="fixed w-12 h-12 translate-z-0 rounded-full z-cursor pointer-events-none transition duration-300 hidden transform -translate-x-1/2 -translate-y-1/2 | lg:block || js-cursor">
            <div
                class="w-24 h-24 translate-z-0 rounded-full bg-primary-600 text-black pointer-events-none transition translate-z-0 duration-600 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden scale-0 items-center justify-center | xl:flex || js-cursor-drag">
                <div x-show="icon == 'arrow-up-right'">
                    <svg class="w-10 h-10 fill-current" width="12" height="16" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 384 512">
                        <path
                            d="M344 96c4.4 0 8 3.6 8 8v240c0 4.4-3.6 8-8 8s-8-3.6-8-8V123.3L45.7 413.7c-3.1 3.1-8.2 3.1-11.3 0s-3.1-8.2 0-11.3L324.7 112H104c-4.4 0-8-3.6-8-8s3.6-8 8-8h240z" />
                    </svg>
                </div>
                <div x-show="icon == 'play'">
                    <svg class="w-5 h-5 fill-current" width="12" height="16" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 384 512">
                        <path d="M384 256L0 32v448l384-224z" />
                    </svg>
                </div>
                <div x-show="icon == 'xmark'">
                    <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path
                            d="M326.6 166.6l22.7-22.6L304 98.7l-22.6 22.6-89.4 89.4-89.4-89.4L80 98.7 34.7 144l22.6 22.6 89.4 89.4-89.3 89.4L34.7 368 80 413.3l22.6-22.6 89.4-89.4 89.4 89.4 22.6 22.6 45.3-45.3-22.6-22.6-89.4-89.4 89.4-89.4z" />
                    </svg>
                </div>
                <div x-show="icon == 'volume-on'">
                    <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path
                            d="M592 256c0 78.5-37.7 148.2-96 192l28.8 38.4C594.7 433.9 640 350.3 640 256.1v-.2c0-94.2-45.3-177.8-115.2-230.3L496 64c58.3 43.8 96 113.5 96 192zM438.4 371.2l28.8 38.4c46.6-35 76.8-90.8 76.8-153.6s-30.2-118.6-76.8-153.6l-28.8 38.4c35 26.3 57.6 68.1 57.6 115.2s-22.6 88.9-57.6 115.2zM400 256c0 15.7-7.5 29.6-19.2 38.4l28.8 38.4c23.3-17.5 38.4-45.4 38.4-76.8s-15.1-59.3-38.4-76.8l-28.8 38.4c11.7 8.8 19.2 22.7 19.2 38.4zM0 160v192h128l144 128h48V32h-48L128 160H0z" />
                    </svg>
                </div>
                <div x-show="icon == 'volume-off'">
                    <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path
                            d="M48.4 14.8L29.4.1 0 38l19 14.7 572.5 444.5 19 14.7 29.4-37.9-19-14.7-95.1-73.8C557 351.3 576 305.9 576 256c0-62.8-30.2-118.6-76.8-153.6l-28.8 38.4c35 26.3 57.6 68.1 57.6 115.2 0 38.8-15.3 74-40.3 99.9l-38.2-29.7c18.8-17.5 30.5-42.5 30.5-70.2 0-31.4-15.1-59.3-38.4-76.8l-28.8 38.4c11.7 8.8 19.2 22.7 19.2 38.4s-7.5 29.6-19.2 38.4l5.9 7.9-66.7-51.8V32h-48l-108.8 96.7L48.4 14.8zM352 373.3L81.2 160H32v192h128l144 128h48V373.3z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full pt-20 pb-10 | lg:pt-32 lg:pb-16 | xl:pt-40">
        <div class="px-2 | sm:px-6 | xl:px-12 | 2xl:px-20 | 3xl:px-40 | 4xl:px-60">
            <div
                class="w-full flex justify-between border-b border-solid border-gray-100 pb-10 | lg:pb-10 | dark:border-grayDark-300">
                <div class="px-2 | lg:px-3 | xl:px-4 relative w-11/16 mb-10 | lg:mb-0 lg:w-12/16 | 2xl:w-13/16">
                    <div class="w-full relative">
                        <h1 class="inline-flex items-center space-x-2 relative mb-3 | lg:absolute lg:top-4 lg:left-0 ">
                            <div class="bg-gray-600 | dark:bg-grayDark-100 w-1.5 h-1.5 rounded-full"></div>
                            <div class="font-light text-sm | lg:text-base text-gray-600 | dark:text-grayDark-100">
                                Contact</div>
                        </h1>
                        <h2
                            class="text-11vw | md:text-10vw | lg:text-9vw font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-0.9 text-balance lg:indent-32 | xl:indent-48 ">
                            It&#039;s nice to <br />
                            meet ya <a href="#scroll-to-421146"
                                class="relative top-2 bg-primary-600 rounded-full transform inline-flex w-9 h-9 | md:w-16 md:h-16 | lg:top-3 lg:w-6vw lg:h-6vw | xl:hover:rotate-45 xl:hover:scale-90">
                                <div class="sr-only">
                                    Scroll to next section</div>
                                <div class="w-full h-full flex items-center justify-center absolute top-0 left-0">
                                    <svg class="fill-current text-gray-600 w-5 h-5 | md:w-6 md:h-6 lg:w-8 lg:h-8 4xl:w-16 4xl:h-16"
                                        width="12" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path
                                            d="M344 416h8V160h-16v228.7L53.7 106.3l-5.7-5.6L36.7 112l5.7 5.7L324.7 400H96v16h248z" />
                                    </svg>
                                </div>
                            </a></h2>
                    </div>
                </div>
                <div
                    class="px-2 | lg:px-3 | xl:px-4 w-6/12 | sm:w-4/12 | md:w-3/12 | lg:w-2/12 | xl:w-2/12 | 2xl:w-2/12 | 4xl:w-2/12">
                    <!-- <div x-data="videoFile" x-init="initVideoFile('421146')">
                        <div
                            class="w-full relative rounded-2xl bg-gray-50 aspect-ratio-9/14  overflow-hidden group transform-gpu | lg:rounded-3xl | dark:bg-grayDark-500">
                            <video
                                src="https://servd-made-byshape.b-cdn.net/production/uploads/videos/C-240304%20-%20Shape%20-%20P1.mp4"
                                playsinline webkit-playsinline muted autoplay
                                controlslist="nodownload nofullscreen noremoteplayback"
                                class="w-full h-full absolute top-0 left-0 z-10 object-cover object-center pb-px || js-video js-video-with-sound js-video-421146"
                                loading="lazy"
                                x-bind:class="{'js-video-volumn-on': !muted && !paused, 'js-video-playing': playing || paused, }"></video>
                            <a href="#"
                                class="absolute top-0 left-0 w-full h-full z-30 flex items-center justify-center transition-none group || js-video-controls-421146"
                                x-on:click.prevent="toggleSound('421146')"
                                x-bind:class="{'opacity-0 pointer-events-none' : !muted, 'opacity-100 pointer-events-auto' : muted, }">
                                <div class="sr-only">
                                    Toggle play/pause</div>
                                <div
                                    class="absolute top-0 left-0 w-full h-full flex p-3 | lg:p-5 items-end justify-end ">
                                    <div
                                        class="flex-shrink-0 rounded-full bg-primary-600 flex items-center justify-center transition-transform transform | xl:group-hover:scale-110 w-14 h-14 | md:w-16 md:h-16">
                                        <svg class="w-3 h-3 | md:w-4 md:h-4" width="12" height="16"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path d="M384 256L0 32v448l384-224z" />
                                        </svg>
                                    </div>
                                </div>
                            </a><a href="#"
                                class="absolute top-0 left-0 w-full h-full z-30 flex items-center justify-center"
                                x-on:click.prevent="toggleSound('421146')"
                                x-bind:class="{'opacity-100 pointer-events-auto' : !muted, 'opacity-0 pointer-events-none' : muted, }">
                                <div class="sr-only">
                                    Toggle sound</div>
                            </a>
                            <div class="absolute inline-flex items-center space-x-3 z-40 transition-opacity opacity-0 bottom-6 left-3 | lg:bottom-8 lg:left-4"
                                x-bind:class="{'opacity-0 pointer-events-none' : muted, 'opacity-100 pointer-events-auto' : !muted, }">
                                <a href="#"
                                    class="w-10 h-10 bg-gray-600 bg-opacity-70 text-white rounded-full cursor-pointer flex items-center justify-center"
                                    x-on:click.prevent="toggleSound('421146')">
                                    <div class="sr-only">
                                        Toggle play/pause</div>
                                    <div x-show="paused">
                                        <svg class="w-3 h-3 fill-current text-white" width="12" height="16"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path d="M384 256L0 32v448l384-224z" />
                                        </svg>
                                    </div>
                                    <div x-show="!paused">
                                        <svg class="w-3 h-3 fill-current text-white" width="10" height="16"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path d="M128 64H0v384h128V64zm192 0H192v384h128V64z" />
                                        </svg>
                                    </div>
                                </a>
                                <div class="text-white text-sm || js-video-timer-421146"></div>
                            </div>
                            <div class="absolute bottom-0 left-0 z-20 w-full px-5 pb-4">
                                <div class="h-0.5 w-full bg-white bg-opacity-20 transition-opacity opacity-0"
                                    x-bind:class="{'opacity-0' : muted, 'opacity-100' : !muted, }">
                                    <div class="h-0.5 bg-primary-600 w-0 transition || js-video-progress-421146"></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div id="scroll-to-421146" class="pt-32 -mt-32"></div>
    <div class="w-full ">
        <div id="421077"></div>
        <div class="w-full pb-20 | lg:pb-24 | 2xl:pb-32 | 4xl:pb-40">
            <div class="px-2 | sm:px-6 | xl:px-12 | 2xl:px-20 | 3xl:px-40 | 4xl:px-60">
                <div class="w-full flex flex-wrap justify-between | lg:-mt-4">
                    <div class="px-2 | lg:px-3 | xl:px-4 w-full mb-10 order-2 | lg:order-1 lg:mb-0 lg:w-5/16">
                        <div class="flex flex-col space-y-3 | lg:space-y-5 items-start"></div>
                        <div class="w-full relative pr-5 | lg:max-w-sm | lg:pr-0  mb-5">
                            <p
                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                For general enquiries, please fill out the form to get in touch. Alternatively, if you
                                know your project details — head over to our project planner for a more refined
                                step-by-step process.</p>
                        </div>
                        <div class="relative group inline-flex items-center" x-data="{ hover: false }"
                            x-on:mouseenter="hover = true" x-on:mouseleave="hover = false">
                            <svg width="0" height="0" class="absolute hidden" color-interpolation-filters="sRGB">
                                <defs>
                                    <filter id="buttonFilter">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                                        <feColorMatrix in="blur" mode="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                                            result="buttonFilter" />
                                        <feComposite in="SourceGraphic" in2="buttonFilter" operator="atop" />
                                        <feBlend in="SourceGraphic" in2="buttonFilter" />
                                    </filter>
                                </defs>
                            </svg>
                            <a href="<?php echo BASE_URL; ?>contact"
                                class="inline-flex relative group outline-none  | focus:outline-none "
                                style="filter: url(#buttonFilter);">
                                <div
                                    class="w-auto inline-flex items-center justify-center relative leading-tight shadow-none overflow-hidden rounded-full border-default bg-primary-600 text-gray-600 py-2 px-5">
                                    <div class="relative inline-flex top-px flex-shrink-0">
                                        <div>
                                            Go to Project Planner</div>
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
                                        <svg class="w-3 h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 384 512">
                                            <path
                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute top-0 left-0 transition-transform transform translate-y-full -translate-x-full || js-button-arrow-icon-secondary ">
                                        <svg class="w-3 h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 384 512">
                                            <path
                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full mt-6 flex flex-col | xl:flex-row xl:space-x-4">
                            <div class="text-gray-300 font-light | dark:text-grayDark-200">
                                Hate contact forms?</div><a href="mailto:hello@madebyshape.co.uk"
                                class="link | dark:text-grayDark-100">
                                hello@madebyshape.co.uk
                            </a>
                        </div>
                    </div>
                    <div class="px-2 | lg:px-3 | xl:px-4 w-full order-1 mb-10 | lg:mb-0 lg:order-2 lg:w-10/16">
                        <div x-data="form" x-init="dynamicForm('contact', 'form-421077')">
                            <form id="form-421077" method="post" onsubmit="(e)=>hSubmit(e)" data-freeform
                                data-id="5df3c8-form-WagZ98dM5-8gNRQpGyY-B66lyNAbJIvFF5ai62hYm0tDkMd5lCfp35ifibev"
                                data-handle="contact" data-ajax
                                data-success-message="Form has been submitted successfully!"
                                data-error-message="Sorry, there was an error submitting the form. Please try again."
                                data-honeypot data-honeypot-name="freeform_form_handle_209b2f"
                                data-honeypot-value="567183606">
                                <input class name="submittedFrom" type="hidden" id="form-input-submittedFrom"
                                    value="Contact (380)" />
                                <div class="freeform_form_handle_209b2f"
                                    style="position: absolute !important; width: 0 !important; height: 0 !important; overflow: hidden !important;"
                                    aria-hidden="true" tabindex="-1"><label aria-hidden="true" tabindex="-1"
                                        for="freeform_form_handle_209b2f">Leave this field blank</label><input
                                        type="text" value="aaf123" name="freeform_form_handle_209b2f"
                                        id="freeform_form_handle_209b2f" aria-hidden="true" autocomplete="off"
                                        tabindex="-1" /></div><input type="hidden" name="freeform_payload"
                                    value="iDIiy67G7r4823p9XXlzjDVkMGE1YmM1ZmMwNDNmZmIxMWNlYTVmNWVmMjc0ZjQxZWIxODYyN2RkNjcwYTQwNDYxNTc5YTMxODMxYzgzMzFTP3RYHdLby/FSjKXY7B1qEk+k1k2NHFFs4A+EVD6ZVNIc7e+BKzJy+dQqSHyRCAiK3TYYWyH3mkSCH7QpqUW3ywXAQEb5OO6JrPFbT4oVdDHjFsvjgdJJGBrRObqTV0IMezuHG8Eaagw315lNbqNbDzefQEsD65LeomfootAwxMoR1VWVknX/uav16kOiHhXV5kLZFjOGuruFT7pQIBfpVcIxgaxNpkUJrzg4mWk+7Vm/1ENiZN35j6wOyM9fkUVsDjQC1I4hmIuwLVSyH8/cKEWNWapFyX7Ovp5R+NfQW+r2bDJmnoS+OeUH52MoQZf3Bfp/y1g8zjRIVKzHgNY1XL016CNd2T2P2tiQvWES8G39UV6pDtIt+ystIAGfez2tkviNqyn09fL1oZ9sl18u7n6iTB+4A+2mw0ghZ9RssFXdbnYZnxdblRvj/0dRgP3zEq2EveSPvhYkkeI9orc6ZDMXvN3fnVvEgU0EF43eb1Yb8ea8+E3G60hNjlpN6hgnyLeFGNPUlKfvhu1fY7Fu+taibM1RrB2lbgudz5ZPa8+KIkzNUEt8Wa9l3Gb6iaYHyQ/TlMVM6FMBox3LRb35CxRX1EyNWWJe/co3PkPMoA==" />
                                <input type="hidden" name="formHash"
                                    value="WagZ98dM5-8gNRQpGyY-B66lyNAbJIvFF5ai62hYm0tDkMd5lCfp35ifibev" />
                                <input type="hidden" name="CRAFT_CSRF_TOKEN"
                                    value="5EcyvLHURN5-54EjaM2pK5NnKKRH8ECKtEzxH9MnnUs4K4s0SFOjzp4scY78hQjsDLTrG1uJ-RPlNRDjFJt5xIYihknqTvwsVU7eRwAg1qk=" />
                                <div id="5df3c8-form-WagZ98dM5-8gNRQpGyY-B66lyNAbJIvFF5ai62hYm0tDkMd5lCfp35ifibev"
                                    data-scroll-anchor style="display: none;"></div>
                                <input type="hidden" name="freeform-action" value="submit" />
                                <input type="hidden" name="action" value="freeform/submit" />
                                <div class="w-full">
                                    <div class="flex flex-col | md:flex-row md:items-center">
                                        <div class="mb-4 md:px-2 w-full | md:w-auto md:flex-1">
                                            <div class="w-full relative"><input type="text" name="name"
                                                    id="form-input-name"
                                                    class="w-full appearance-none block bg-transparent text-gray-600 text-base border border-solid border-gray-150 translate-z-0 shadow-none outline-none leading-tight ring-3 ring-primary-600 ring-opacity-0 shadow-none px-5 rounded-xl text-sm xl:hover:border-gray-300 placeholder-gray-600 placeholder-opacity-70 focus:border-gray-300 focus:outline-none focus:shadow-none focus:ring-4 focus:ring-gray-600 focus:ring-opacity-10 dark:border-grayDark-300 dark:hover:border-grayDark-200 dark:bg-grayDark-500 dark:ring-grayDark-100 dark:text-grayDark-100 dark:placeholder-grayDark-200 dark:focus:border-grayDark-200 pt-6 pb-2.5"
                                                    placeholder=" " required autocomplete="one-time-code">
                                                <label for="form-input-name"
                                                    class="absolute transition-transform duration-300 ml-5 top-4 pointer-events-none origin-bottom-left text-gray-600 | dark:text-grayDark-200">
                                                    Name
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-4 md:px-2 w-full | md:w-auto md:flex-1">
                                            <div class="w-full relative"><input type="email" name="emailAddress"
                                                    id="form-input-emailAddress"
                                                    class="w-full appearance-none block bg-transparent text-gray-600 text-base border border-solid border-gray-150 translate-z-0 shadow-none outline-none leading-tight ring-3 ring-primary-600 ring-opacity-0 shadow-none px-5 rounded-xl text-sm xl:hover:border-gray-300 placeholder-gray-600 placeholder-opacity-70 focus:border-gray-300 focus:outline-none focus:shadow-none focus:ring-4 focus:ring-gray-600 focus:ring-opacity-10 dark:border-grayDark-300 dark:hover:border-grayDark-200 dark:bg-grayDark-500 dark:ring-grayDark-100 dark:text-grayDark-100 dark:placeholder-grayDark-200 dark:focus:border-grayDark-200 pt-6 pb-2.5"
                                                    placeholder=" " required autocomplete="one-time-code">
                                                <label for="form-input-emailAddress"
                                                    class="absolute transition-transform duration-300 ml-5 top-4 pointer-events-none origin-bottom-left text-gray-600 | dark:text-grayDark-200">
                                                    Email Address
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col | md:flex-row md:items-center">
                                        <div class="mb-4 md:px-2 w-full | md:w-auto md:flex-1">
                                            <div class="w-full relative"><input type="text" name="telephone"
                                                    id="form-input-telephone"
                                                    class="w-full appearance-none block bg-transparent text-gray-600 text-base border border-solid border-gray-150 translate-z-0 shadow-none outline-none leading-tight ring-3 ring-primary-600 ring-opacity-0 shadow-none px-5 rounded-xl text-sm xl:hover:border-gray-300 placeholder-gray-600 placeholder-opacity-70 focus:border-gray-300 focus:outline-none focus:shadow-none focus:ring-4 focus:ring-gray-600 focus:ring-opacity-10 dark:border-grayDark-300 dark:hover:border-grayDark-200 dark:bg-grayDark-500 dark:ring-grayDark-100 dark:text-grayDark-100 dark:placeholder-grayDark-200 dark:focus:border-grayDark-200 pt-6 pb-2.5"
                                                    placeholder=" " autocomplete="one-time-code">
                                                <label for="form-input-telephone"
                                                    class="absolute transition-transform duration-300 ml-5 top-4 pointer-events-none origin-bottom-left text-gray-600 | dark:text-grayDark-200">
                                                    Phone <span
                                                        class="text-gray-300 ml-1 | dark:text-grayDark-300">(Optional)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-4 md:px-2 w-full | md:w-auto md:flex-1">
                                            <div class="w-full relative"><span
                                                    class="absolute mr-5 border-gray-300 border-b-2 border-l-2 border-solid right-0 w-2 h-2 pointer-events-none top-1/2 transform -rotate-45 -mt-0.5 -translate-y-1/2 dark:border-grayDark-300 z-20"></span><select
                                                    name="howDidYouHearAboutUs" id="form-input-howDidYouHearAboutUs"
                                                    class="appearance-none block w-full bg-transparent text-gray-600 text-base border border-solid border-gray-150 translate-z-0 shadow-none outline-none leading-tight ring-3 ring-primary-600 ring-opacity-0 shadow-none pt-6 pb-2.5 px-5 rounded-xl text-sm xl:hover:border-gray-300 placeholder-gray-600 placeholder-opacity-70 focus:border-gray-300 focus:outline-none focus:shadow-none focus:ring-4 focus:ring-gray-600 focus:ring-opacity-10 dark:border-grayDark-300 dark:hover:border-grayDark-200 dark:bg-grayDark-500 dark:ring-grayDark-100 dark:text-grayDark-100 dark:placeholder-grayDark-200 dark:focus:border-grayDark-200 bg-none "
                                                    value=""
                                                    x-on:change="$event.target.setAttribute('value', $event.target.options[$event.target.selectedIndex].innerText);">
                                                    <option value="" selected disabled hidden></option>
                                                    <option value="google">
                                                        Google</option>
                                                    <option value="friendOrFamily">
                                                        Friend or family</option>
                                                    <option value="instagram">
                                                        Instagram</option>
                                                    <option value="linkedin">
                                                        Linkedin</option>
                                                    <option value="wordOfMouth">
                                                        Word of mouth</option>
                                                    <option value="newsletter">
                                                        Newsletter</option>
                                                </select><label for="form-input-howDidYouHearAboutUs"
                                                    class="absolute transition-transform duration-300 ml-5 top-4 pointer-events-none origin-bottom-left text-gray-600 | dark:text-grayDark-200">
                                                    How did you hear about Scalify?
                                                </label></div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col | md:flex-row md:items-center">
                                        <div class="mb-4 md:px-2 w-full | md:w-full">
                                            <div class="w-full relative"><textarea type="textarea" name="message"
                                                    id="form-input-message"
                                                    class="appearance-none block w-full bg-transparent text-gray-600 text-base border border-solid border-gray-150 translate-z-0 shadow-none outline-none leading-tight ring-3 ring-primary-600 ring-opacity-0 shadow-none pt-6 pb-2.5 px-5 rounded-xl text-sm xl:hover:border-gray-300 placeholder-gray-600 placeholder-opacity-70 focus:border-gray-300 focus:outline-none focus:shadow-none focus:ring-4 focus:ring-gray-600 focus:ring-opacity-10 dark:border-grayDark-300 dark:hover:border-grayDark-200 dark:bg-grayDark-500 dark:ring-grayDark-100 dark:text-grayDark-100 dark:placeholder-grayDark-200 dark:focus:border-grayDark-200 h-32"
                                                    placeholder=" " required></textarea><label for="form-input-message"
                                                    class="absolute transition-transform duration-300 ml-5 top-4 pointer-events-none origin-bottom-left text-gray-600 | dark:text-grayDark-200">
                                                    Tell us about your project
                                                </label></div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col | md:flex-row md:items-center">
                                        <div class="mb-4 md:px-2 w-full | md:w-full">
                                            <label class="inline-flex items-center w-full cursor-pointer">
                                                <input type="checkbox" name="g8n6R9MO8" value="1"
                                                    class="form-checkbox border-gray-200 border-solid bg-transparent text-gray-600 | dark:text-grayDark-300 text-primary w-4 h-4 rounded"
                                                    style="box-shadow: none !important;">
                                                <span class="ml-2 pt-0.5 | dark:text-grayDark-200">
                                                    Subscribe to our newsletter for all the latest Shape goss!
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="flex flex-col | md:flex-row md:items-center">
                                        <div class="mb-4 md:px-2 w-full | md:w-full">
                                            <div class="text-sm text-gray-400 | dark:text-grayDark-200">
                                                By submitting this form I accept the <a href="/privacy-policy">Privacy
                                                    Policy</a> of this site.</div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col | md:flex-row md:items-center">
                                        <div class="mb-4 md:px-2 w-full | md:w-full">
                                            <div class="relative group inline-flex items-center"
                                                x-data="{ hover: false }" x-on:mouseenter="hover = true"
                                                x-on:mouseleave="hover = false">
                                                <svg width="0" height="0" class="absolute hidden"
                                                    color-interpolation-filters="sRGB">
                                                    <defs>
                                                        <filter id="buttonFilter">
                                                            <feGaussianBlur in="SourceGraphic" stdDeviation="5"
                                                                result="blur" />
                                                            <feColorMatrix in="blur" mode="matrix"
                                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                                                                result="buttonFilter" />
                                                            <feComposite in="SourceGraphic" in2="buttonFilter"
                                                                operator="atop" />
                                                            <feBlend in="SourceGraphic" in2="buttonFilter" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                                <button
                                                    class="inline-flex relative group outline-none  | focus:outline-none "
                                                    style="filter: url(#buttonFilter);" type="submit">
                                                    <div
                                                        class="w-auto inline-flex items-center justify-center relative leading-tight shadow-none overflow-hidden rounded-full border-default bg-gray-600 text-white | dark:bg-grayDark-400 dark:text-grayDark-100  py-2 px-5">
                                                        <div class="relative inline-flex top-px flex-shrink-0">
                                                            <div>
                                                                Send Message</div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="bg-gray-600 | dark:bg-grayDark-400 flex-shrink-0 overflow-hidden flex items-center justify-center -ml-1 rounded-full transform transition-transform | w-9 h-9 | xl:group-hover:translate-x-3  xl:group-hover:rotate-45 | js-button-icon">
                                                    </div>
                                                </button>
                                                <div
                                                    class="w-9 h-9 absolute top-0 right-0 flex items-center justify-center z-20 transition-transform transform w-9 h-9 | xl:group-hover:translate-x-3  xl:group-hover:rotate-45 || js-button-arrow">
                                                    <div
                                                        class="relative overflow-hidden text-white | dark:text-grayDark-100">
                                                        <div
                                                            class="relative top-0 left-0 transition-transform transform || js-button-arrow-icon-primary ">
                                                            <svg class="w-3 h-3 fill-current"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 384 512">
                                                                <path
                                                                    d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                                            </svg>
                                                        </div>
                                                        <div
                                                            class="absolute top-0 left-0 transition-transform transform translate-y-full -translate-x-full || js-button-arrow-icon-secondary ">
                                                            <svg class="w-3 h-3 fill-current"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 384 512">
                                                                <path
                                                                    d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="421133"></div>
        <div class="w-full pb-20 | lg:pb-24 | 2xl:pb-32 | 4xl:pb-40">
            <div class="px-2 | sm:px-6 | xl:px-12 | 2xl:px-20 | 3xl:px-40 | 4xl:px-60">
                <div class="px-2 | lg:px-3 | xl:px-4 w-full relative flex flex-wrap">
                    <div
                        class="w-full bg-gray-50 rounded-2xl transform-gpu flex flex-wrap justify-between p-8 | lg:rounded-3xl lg:p-10 | dark:bg-grayDark-500">
                        <div class="w-full | lg:w-6/16 lg:py-12">
                            <h2
                                class="text-2xl | md:text-3xl | xl:text-4xl | 4xl:text-5xl font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-none text-balance mb-3 ">
                                Our Dubai Storages</h2>
                            <div class="w-full relative mb-5 | lg:max-w-sm lg:mb-10">
                                <p
                                    class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                    Just a short drive from Dubai city centre, our Storages is in a very convenient
                                    location, near two train stations, a motorway, and the east Lancashire road.</p>
                            </div>
                            <div class="w-full flex flex-col space-y-5 mb-10 | md:space-y-0 md:flex-row md:space-x-5">
                                <div class="flex-1">
                                    <div class="text-gray-400 font-light mb-2 | dark:text-grayDark-100">
                                        Dubai Storages Address</div>
                                    <div class="flex space-x-3">
                                        <div class="flex-shrink-0 pt-1.5"><svg
                                                class="w-3 h-3 text-gray-600 fill-current | dark:text-grayDark-100"
                                                width="12" height="16" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M192 512s192-208 192-320C384 86 298 0 192 0S0 86 0 192c0 112 192 320 192 320zm0-384a64 64 0 110 128 64 64 0 110-128z" />
                                            </svg></div>
                                        <div class="dark:text-grayDark-200">
                                            <p>Scalify<br />in5 Tech
                                                King Salman Bin <br />Abdulaziz Al Saud Street, <br />near Tram Station
                                                <br />and Cordoba Residence<br /> - Dubai <br />- United Arab Emirates
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div class="text-gray-400 font-light mb-2 | dark:text-grayDark-100">
                                        Follow us</div>
                                    <div class="flex items-center space-x-1.5">
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
                            <div class="relative group inline-flex items-center" x-data="{ hover: false }"
                                x-on:mouseenter="hover = true" x-on:mouseleave="hover = false">
                                <svg width="0" height="0" class="absolute hidden" color-interpolation-filters="sRGB">
                                    <defs>
                                        <filter id="buttonFilter">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                                            <feColorMatrix in="blur" mode="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                                                result="buttonFilter" />
                                            <feComposite in="SourceGraphic" in2="buttonFilter" operator="atop" />
                                            <feBlend in="SourceGraphic" in2="buttonFilter" />
                                        </filter>
                                    </defs>
                                </svg>
                                <a href="https://maps.app.goo.gl/UFvCo7SB2XvFcg4t7" target="1"
                                    class="inline-flex relative group outline-none  | focus:outline-none "
                                    style="filter: url(#buttonFilter);">
                                    <div
                                        class="w-auto inline-flex items-center justify-center relative leading-tight shadow-none overflow-hidden rounded-full border-default bg-gray-600 text-white | dark:bg-primary-600 dark:text-gray-600 py-2 px-5">
                                        <div class="relative inline-flex top-px flex-shrink-0">
                                            <div>
                                                Get directions</div>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-600 | dark:bg-primary-600 flex-shrink-0 overflow-hidden flex items-center justify-center -ml-1 rounded-full transform transition-transform | w-9 h-9 | xl:group-hover:translate-x-3  xl:group-hover:rotate-45 | js-button-icon">
                                    </div>
                                </a>
                                <div
                                    class="w-9 h-9 absolute top-0 right-0 flex items-center justify-center z-20 transition-transform transform w-9 h-9 | xl:group-hover:translate-x-3  xl:group-hover:rotate-45 || js-button-arrow">
                                    <div class="relative overflow-hidden text-white | dark:text-grayDark-600">
                                        <div
                                            class="relative top-0 left-0 transition-transform transform || js-button-arrow-icon-primary ">
                                            <svg class="w-3 h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                            </svg>
                                        </div>
                                        <div
                                            class="absolute top-0 left-0 transition-transform transform translate-y-full -translate-x-full || js-button-arrow-icon-secondary ">
                                            <svg class="w-3 h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-full h-60 relative overflow-hidden transform-gpu rounded-xl mt-10 bg-gray-100 | md:h-80 | dark:bg-grayDark-400 | lg:rounded-2xl lg:mt-0 lg:h-auto lg:w-9/16">
                            <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.82198556146!2d55.165219799999996!3d25.107886600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6d5310a53db1%3A0x70554943640e47f2!2sScalify!5e0!3m2!1sen!2sin!4v1757182018503!5m2!1sen!2sin"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="421068"></div>
        <div class="w-full pb-20 | lg:pb-24 | 2xl:pb-32 | 4xl:pb-40">
            <div class="px-2 | sm:px-6 | xl:px-12 | 2xl:px-20 | 3xl:px-40 | 4xl:px-60">
                <div class="w-full flex flex-wrap justify-between">
                    <div class="px-2 | lg:px-3 | xl:px-4 w-full mb-10 | lg:mb-0 lg:w-5/16 | xl:w-5/16">
                        <div class="w-full | lg:sticky lg:top-32 lg:left-0">
                            <div class="flex flex-col space-y-3 | lg:space-y-5 items-start">
                                <h2 class="inline-flex items-center space-x-2  ">
                                    <div class="bg-gray-600 | dark:bg-grayDark-100 w-1.5 h-1.5 rounded-full"></div>
                                    <div
                                        class="font-light text-sm | lg:text-base text-gray-600 | dark:text-grayDark-100">
                                        Anything else?</div>
                                </h2>
                                <h2
                                    class="text-2xl | md:text-3xl | xl:text-4xl | 4xl:text-5xl font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-none text-balance max-w-lg | lg:max-w-none ">
                                    The answers to
                                    your questions.</h2>
                                <div class="relative group inline-flex items-center" x-data="{ hover: false }"
                                    x-on:mouseenter="hover = true" x-on:mouseleave="hover = false">
                                    <svg width="0" height="0" class="absolute hidden"
                                        color-interpolation-filters="sRGB">
                                        <defs>
                                            <filter id="buttonFilter">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                                                <feColorMatrix in="blur" mode="matrix"
                                                    values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                                                    result="buttonFilter" />
                                                <feComposite in="SourceGraphic" in2="buttonFilter" operator="atop" />
                                                <feBlend in="SourceGraphic" in2="buttonFilter" />
                                            </filter>
                                        </defs>
                                    </svg>
                                    <a href="/frequently-asked-questions/"
                                        class="inline-flex relative group outline-none  | focus:outline-none "
                                        style="filter: url(#buttonFilter);">
                                        <div
                                            class="w-auto inline-flex items-center justify-center relative leading-tight shadow-none overflow-hidden rounded-full border-default bg-primary-600 text-gray-600 py-2 px-5">
                                            <div class="relative inline-flex top-px flex-shrink-0">
                                                <div>
                                                    View all FAQs</div>
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
                                                <svg class="w-3 h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 384 512">
                                                    <path
                                                        d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                                </svg>
                                            </div>
                                            <div
                                                class="absolute top-0 left-0 transition-transform transform translate-y-full -translate-x-full || js-button-arrow-icon-secondary ">
                                                <svg class="w-3 h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 384 512">
                                                    <path
                                                        d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-2 | lg:px-3 | xl:px-4 w-full | lg:w-10/16 | xl:w-9/16">
                        <div x-data="{ active: false }" class="w-full">
                            <div class="w-full rounded-2xl bg-gray-50 mb-4 | lg:rounded-3xl | dark:bg-grayDark-500">
                                <button
                                    class="flex justify-between items-center text-left cursor-pointer w-full p-6 | focus:outline-none"
                                    x-on:click="active != 421069 ? active = 421069 : active = false">
                                    <h3
                                        class="text-lg | 4xl:text-xl font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-tighter text-balance pr-10 ">
                                        How long does a website project usually take to complete?</h3>
                                    <div class="flex-shrink-0 w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center transition-transform transform | dark:bg-grayDark-400"
                                        x-bind:class="{'rotate-180': active == 421069}">
                                        <svg class="w-3 h-3 text-white fill-current | dark:text-grayDark-100"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path
                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                        </svg>
                                    </div>
                                </button>
                                <div class="w-full" x-show="active == 421069" x-cloak x-collapse>
                                    <div class="w-full pl-6 pb-6 pr-6 | lg:pr-28">
                                        <div class="w-full relative ">
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                Timelines depend on the spec of the website project, but here are some
                                                guidelines...</p>
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                - <strong class="font-medium"><a
                                                        href="https://madebyshape.co.uk/shopify/" target="_blank"
                                                        rel="noreferrer noopener"
                                                        class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">Shopify</a></strong><strong
                                                    class="font-medium"> </strong>projects usually take around four
                                                weeks.</p>
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                - <strong class="font-medium"><a
                                                        href="https://madebyshape.co.uk/craft-cms/" target="_blank"
                                                        rel="noreferrer noopener"
                                                        class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">Craft
                                                        CMS</a></strong> projects usually take a minimum of five weeks.
                                            </p>
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                - <strong class="font-medium"><a
                                                        href="https://madebyshape.co.uk/craft-commerce/" target="_blank"
                                                        rel="noreferrer noopener"
                                                        class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">Craft
                                                        Commerce</a></strong> projects usually take a minimum of eight
                                                weeks.</p>
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                - <strong class="font-medium"><a
                                                        href="https://madebyshape.co.uk/branding/" target="_blank"
                                                        rel="noreferrer noopener"
                                                        class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">Branding</a></strong>
                                                projects usually take around four weeks.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full rounded-2xl bg-gray-50 mb-4 | lg:rounded-3xl | dark:bg-grayDark-500">
                                <button
                                    class="flex justify-between items-center text-left cursor-pointer w-full p-6 | focus:outline-none"
                                    x-on:click="active != 421070 ? active = 421070 : active = false">
                                    <h3
                                        class="text-lg | 4xl:text-xl font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-tighter text-balance pr-10">
                                        How much does a website cost?</h3>
                                    <div class="flex-shrink-0 w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center transition-transform transform | dark:bg-grayDark-400"
                                        x-bind:class="{'rotate-180': active == 421070}">
                                        <svg class="w-3 h-3 text-white fill-current | dark:text-grayDark-100"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path
                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                        </svg>
                                    </div>
                                </button>
                                <div class="w-full" x-show="active == 421070" x-cloak x-collapse>
                                    <div class="w-full pl-6 pb-6 pr-6 | lg:pr-28">
                                        <div class="w-full relative ">
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                Unfortunately, we don't have set project prices. Every brief we work on
                                                has different requirements which alters the spec of the job. So, once
                                                we've received the brief, we can give you an indication of the cost and
                                                timescale. We wrote this article about the <a
                                                    href="https://madebyshape.co.uk/web-design-blog/the-importance-of-a-website-budget/"
                                                    class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">importance
                                                    of a website budget</a> a while back and it's still relevant.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full rounded-2xl bg-gray-50 mb-4 | lg:rounded-3xl | dark:bg-grayDark-500">
                                <button
                                    class="flex justify-between items-center text-left cursor-pointer w-full p-6 | focus:outline-none"
                                    x-on:click="active != 421071 ? active = 421071 : active = false">
                                    <h3
                                        class="text-lg | 4xl:text-xl `font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-tighter text-balance pr-10 ">
                                        We have a limited budget, will you still work with us?</h3>
                                    <div class="flex-shrink-0 w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center transition-transform transform | dark:bg-grayDark-400"
                                        x-bind:class="{'rotate-180': active == 421071}">
                                        <svg class="w-3 h-3 text-white fill-current | dark:text-grayDark-100"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path
                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                        </svg>
                                    </div>
                                </button>
                                <div class="w-full" x-show="active == 421071" x-cloak x-collapse>
                                    <div class="w-full pl-6 pb-6 pr-6 | lg:pr-28">
                                        <div class="w-full relative ">
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                We work with a range of clients, from start-up brands to large global
                                                organisations such as the NHS and Blackberry. Our mindset is that we
                                                want to work with clients of the same vision. If you want to improve
                                                your brand online and understand the way we work (and the discussions
                                                are of mutual understanding) then we want to work with you. In terms of
                                                budget, the easiest way to find out if a project is possible is to let
                                                us know what your budget is. That way we can advise the best way of
                                                spending your money. We wrote this article about the <a
                                                    href="https://madebyshape.co.uk/web-design-blog/the-importance-of-a-website-budget/"
                                                    class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">importance
                                                    of a website budget</a> a while back and it's still relevant.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full rounded-2xl bg-gray-50 mb-4 | lg:rounded-3xl | dark:bg-grayDark-500">
                                <button
                                    class="flex justify-between items-center text-left cursor-pointer w-full p-6 | focus:outline-none"
                                    x-on:click="active != 421072 ? active = 421072 : active = false">
                                    <h3
                                        class=" text-lg | 4xl:text-xl font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-tighter text-balance pr-10 ">
                                        Do you outsource any work?</h3>
                                    <div class="flex-shrink-0 w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center transition-transform transform | dark:bg-grayDark-400"
                                        x-bind:class="{'rotate-180': active == 421072}">
                                        <svg class="w-3 h-3 text-white fill-current | dark:text-grayDark-100"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path
                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                        </svg>
                                    </div>
                                </button>
                                <div class="w-full" x-show="active == 421072" x-cloak x-collapse>
                                    <div class="w-full pl-6 pb-6 pr-6 | lg:pr-28">
                                        <div class="w-full relative ">
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                The only aspects we outsource (but offer full project management to the
                                                client on) are:</p>
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                - Photography</p>
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                - Videography</p>
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                - Social Media Campaigns</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full rounded-2xl bg-gray-50 mb-4 | lg:rounded-3xl | dark:bg-grayDark-500">
                                <button
                                    class="flex justify-between items-center text-left cursor-pointer w-full p-6 | focus:outline-none"
                                    x-on:click="active != 421073 ? active = 421073 : active = false">
                                    <h3
                                        class=" text-lg | 4xl:text-xl font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-tighter text-balance pr-10 ">
                                        What services do you offer?</h3>
                                    <div class="flex-shrink-0 w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center transition-transform transform | dark:bg-grayDark-400"
                                        x-bind:class="{'rotate-180': active == 421073}">
                                        <svg class="w-3 h-3 text-white fill-current | dark:text-grayDark-100"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path
                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                        </svg>
                                    </div>
                                </button>
                                <div class="w-full" x-show="active == 421073" x-cloak x-collapse>
                                    <div class="w-full pl-6 pb-6 pr-6 | lg:pr-28">
                                        <div class="w-full relative ">
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                We offer a full <a href="/branding/" target="_blank"
                                                    rel="noreferrer noopener"
                                                    class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">branding</a>
                                                service in-house here at Shape. We win awards for our <a
                                                    href="https://madebyshape.co.uk/web-design/" target="_blank"
                                                    rel="noreferrer noopener"
                                                    class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">websites</a>,
                                                and in particular specialise in building websites in <a
                                                    href="https://madebyshape.co.uk/craft-cms/" target="_blank"
                                                    rel="noreferrer noopener"
                                                    class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">Craft
                                                    CMS</a> and <a href="/shopify/" target="_blank"
                                                    rel="noreferrer noopener"
                                                    class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">Shopify</a>.
                                                We also offer <a
                                                    href="https://madebyshape.co.uk/search-engine-optimisation/"
                                                    target="_blank" rel="noreferrer noopener"
                                                    class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">SEO</a>,
                                                <a href="/web-hosting/" target="_blank" rel="noreferrer noopener"
                                                    class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">hosting</a>,
                                                and <a href="/shape-support/" target="_blank" rel="noreferrer noopener"
                                                    class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">Shape
                                                    Support</a> to look after your site once live. We also have <a
                                                    href="https://madebyshape.co.uk/content-writing/" target="_blank"
                                                    rel="noreferrer noopener"
                                                    class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">content
                                                    writers</a> who understand tone of voice, messaging, and SEO.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full rounded-2xl bg-gray-50 mb-4 | lg:rounded-3xl | dark:bg-grayDark-500">
                                <button
                                    class="flex justify-between items-center text-left cursor-pointer w-full p-6 | focus:outline-none"
                                    x-on:click="active != 421074 ? active = 421074 : active = false">
                                    <h3
                                        class=" text-lg | 4xl:text-xl font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-tighter text-balance pr-10 ">
                                        We're not based in Dubai, does that matter?</h3>
                                    <div class="flex-shrink-0 w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center transition-transform transform | dark:bg-grayDark-400"
                                        x-bind:class="{'rotate-180': active == 421074}">
                                        <svg class="w-3 h-3 text-white fill-current | dark:text-grayDark-100"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path
                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                        </svg>
                                    </div>
                                </button>
                                <div class="w-full" x-show="active == 421074" x-cloak x-collapse>
                                    <div class="w-full pl-6 pb-6 pr-6 | lg:pr-28">
                                        <div class="w-full relative ">
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                We work with clients all over the UK... all over the world in fact. So
                                                location does not matter. We will guide you through the process and
                                                communicate clearly at certain stages via email and sometimes Zoom. If
                                                available, we are happy to have face-to-face meetings.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full rounded-2xl bg-gray-50 mb-4 | lg:rounded-3xl | dark:bg-grayDark-500">
                                <button
                                    class="flex justify-between items-center text-left cursor-pointer w-full p-6 | focus:outline-none"
                                    x-on:click="active != 421075 ? active = 421075 : active = false">
                                    <h3
                                        class="text-lg | 4xl:text-xl font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-tighter text-balance pr-10">
                                        What are your payment terms?</h3>
                                    <div class="flex-shrink-0 w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center transition-transform transform | dark:bg-grayDark-400"
                                        x-bind:class="{'rotate-180': active == 421075}">
                                        <svg class="w-3 h-3 text-white fill-current | dark:text-grayDark-100"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path
                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                        </svg>
                                    </div>
                                </button>
                                <div class="w-full" x-show="active == 421075" x-cloak x-collapse>
                                    <div class="w-full pl-6 pb-6 pr-6 | lg:pr-28">
                                        <div class="w-full relative ">
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                We usually do 50% upfront, 25% on design sign-off, and 25% on build. But
                                                these terms can be discussed if need be. We are flexible. We just want
                                                to work with the right partner.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full rounded-2xl bg-gray-50 mb-4 | lg:rounded-3xl | dark:bg-grayDark-500">
                                <button
                                    class="flex justify-between items-center text-left cursor-pointer w-full p-6 | focus:outline-none"
                                    x-on:click="active != 421076 ? active = 421076 : active = false">
                                    <h3
                                        class="text-lg | 4xl:text-xl font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-tighter text-balance pr-10">
                                        How many meetings can we have?</h3>
                                    <div class="flex-shrink-0 w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center transition-transform transform | dark:bg-grayDark-400"
                                        x-bind:class="{'rotate-180': active == 421076}">
                                        <svg class="w-3 h-3 text-white fill-current | dark:text-grayDark-100"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path
                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                        </svg>
                                    </div>
                                </button>
                                <div class="w-full" x-show="active == 421076" x-cloak x-collapse>
                                    <div class="w-full pl-6 pb-6 pr-6 | lg:pr-28">
                                        <div class="w-full relative ">
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                As many as you want. But we guide you through this process and ask for
                                                your feedback at certain stages. We have vast experience in delivering
                                                <a href="/branding/" target="_blank" rel="noreferrer noopener"
                                                    class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">brand</a>
                                                + <a href="/web-design/" target="_blank" rel="noreferrer noopener"
                                                    class="underline duration-500 bg-transparent rounded-md py-0.5 px-1 | bg-gray-50 xl:hover:bg-primary-600 dark:bg-grayDark-400 dark:text-grayDark-100 xl:dark:hover:bg-primary-600 xl:dark:hover:text-grayDark-600">website</a>
                                                projects. We will go through multiple stages in a hierarchy so that you
                                                never get to a stage where you don’t feel comfortable with the progress.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full rounded-2xl bg-gray-50  | lg:rounded-3xl | dark:bg-grayDark-500">
                                <button
                                    class="flex justify-between items-center text-left cursor-pointer w-full p-6 | focus:outline-none"
                                    x-on:click="active != 489203 ? active = 489203 : active = false">
                                    <h3
                                        class="text-lg | 4xl:text-xl font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-tighter text-balance pr-10">
                                        Can we arrange a phone call to discuss?</h3>
                                    <div class="flex-shrink-0 w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center transition-transform transform | dark:bg-grayDark-400"
                                        x-bind:class="{'rotate-180': active == 489203}">
                                        <svg class="w-3 h-3 text-white fill-current | dark:text-grayDark-100"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path
                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                        </svg>
                                    </div>
                                </button>
                                <div class="w-full" x-show="active == 489203" x-cloak x-collapse>
                                    <div class="w-full pl-6 pb-6 pr-6 | lg:pr-28">
                                        <div class="w-full relative ">
                                            <p
                                                class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                                                Yes of course, we can schedule a traditional phone call or zoom meeting
                                                into the diary that convenient for both parties. All of our staff work
                                                from home at the moment, and occasionally go into the studio. So it's
                                                quicker to email us and organise a time for a discussion, rather than
                                                just ringing the studio number.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include './elements/footer.php'; ?>

    <!-- <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@graph": [{
            "@type": "CreativeWork",
            "author": {
                "@id": "https://madebyshape.co.uk/#identity"
            },
            "copyrightHolder": {
                "@id": "https://madebyshape.co.uk/#identity"
            },
            "copyrightYear": "2018",
            "creator": {
                "@id": "https://madebyshape.co.uk/#creator"
            },
            "dateModified": "2025-01-14T12:54:11+00:00",
            "datePublished": "2018-07-30T13:12:00+01:00",
            "description": "We work with businesses of all sizes, all over the world - from our studio in Dubai, UK. For all enquiries please email:  hello@madebyshape.co.uk",
            "headline": "Contact Shape Web Design Storages Dubai",
            "image": {
                "@type": "ImageObject",
                "url": "https://made-byshape.transforms.svdcdn.com/production/uploads/images/Open-Graph/madebyshape-contact.jpg?w=1200&h=630&q=82&auto=format&fit=crop&dm=1722523489&s=7248c5aa64b8c6656faea8ce96a507ec"
            },
            "inLanguage": "en-gb",
            "mainEntityOfPage": "https://madebyshape.co.uk/contact/",
            "name": "Contact Shape Web Design Storages Dubai",
            "publisher": {
                "@id": "https://madebyshape.co.uk/#creator"
            },
            "url": "https://madebyshape.co.uk/contact/"
        }, {
            "@id": "https://madebyshape.co.uk/#identity",
            "@type": "ProfessionalService",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "United Kingdom",
                "addressLocality": "Atherton",
                "addressRegion": "Dubai",
                "postalCode": "M46 0SU",
                "streetAddress": "Gibfield Enterprise Centre, 1 Gibfield Park Avenue"
            },
            "alternateName": "Shape",
            "description": "An award-winning Web Design Agency in Dubai who specialise in Website Design, Craft CMS Web Development, eCommerce and Organic SEO.",
            "email": "hello@madebyshape.co.uk",
            "founder": "Andy Golpys",
            "foundingDate": "2010-03-01",
            "foundingLocation": "Dubai",
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "53.530291",
                "longitude": "-2.504812"
            },
            "image": {
                "@type": "ImageObject",
                "height": "950",
                "url": "https://assets.madebyshape.co.uk/craft3-uploads/images/logos/MadeByShape-icon.jpg",
                "width": "950"
            },
            "logo": {
                "@type": "ImageObject",
                "height": "60",
                "url": "https://made-byshape.transforms.svdcdn.com/production/uploads/images/logos/MadeByShape-icon.jpg?w=600&h=60&q=82&fm=png&fit=clip&dm=1597751408&s=1e444e7b3ed4ee85c39ad329e3875b5c",
                "width": "60"
            },
            "name": "MadeByShape",
            "priceRange": "$$",
            "sameAs": ["https://www.linkedin.com/company/madebyshape/mycompany/",
                "https://twitter.com/madebyshape", "https://github.com/madebyshape/",
                "https://instagram.com/madebyshape", "https://www.behance.net/madebyshape"
            ],
            "telephone": "01942 894596",
            "url": "https://madebyshape.co.uk/"
        }, {
            "@id": "https://madebyshape.co.uk/#creator",
            "@type": "ProfessionalService",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "United Kingdom",
                "addressLocality": "Atherton",
                "addressRegion": "Dubai",
                "postalCode": "M46 0SU",
                "streetAddress": "Gibfield Enterprise Centre, 1 Gibfield Park Avenue"
            },
            "alternateName": "Shape",
            "description": "An award-winning Web Design Agency based in Dubai who also offer eCommerce and Organic SEO. We are a Digital Storages with Industry Experience.",
            "email": "hello@madebyshape.co.uk",
            "founder": "Andy Golpys",
            "foundingDate": "2010-03-01",
            "foundingLocation": "Dubai",
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "53.530258",
                "longitude": "-2.50471"
            },
            "image": {
                "@type": "ImageObject",
                "height": "950",
                "url": "http://madebyshape.madebyshape.io/uploads/images/MadeByShape-icon.jpg",
                "width": "950"
            },
            "logo": {
                "@type": "ImageObject",
                "height": "60",
                "url": "https://made-byshape.transforms.svdcdn.com/production/uploads/images/MadeByShape-icon.jpg?w=600&h=60&q=82&fm=png&fit=clip&dm=1597751384&s=2f0ce55335397fde8d8b489cc721e250",
                "width": "60"
            },
            "name": "MadeByShape",
            "priceRange": "$$$",
            "telephone": "01942 894596",
            "url": "https://madebyshape.co.uk/"
        }, {
            "@type": "BreadcrumbList",
            "description": "Breadcrumbs list",
            "itemListElement": [{
                "@type": "ListItem",
                "item": "https://madebyshape.co.uk/",
                "name": "Home",
                "position": 1
            }, {
                "@type": "ListItem",
                "item": "https://madebyshape.co.uk/contact/",
                "name": "Contact",
                "position": 2
            }],
            "name": "Breadcrumbs"
        }]
    }
    </script> -->
    <script src="https://madebyshape.co.uk/freeform/plugin.js?v=12f0405efbbc6fa07563112b0f3f4e8e74702bfc"></script>
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
                                                function(duration) {

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
                                                .currentTime / video.duration) *
                                            100 + '%';

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
        Alpine.data('videoFile', () => ({
            playing: true,
            muted: true,
            hovering: false,
            paused: false,
            initVideoFile(id) {

                // Get elements

                const video = document.querySelector(`.js-video-${id}`);
                const videoProgress = document.querySelector(`.js-video-progress-${id}`);
                const videoTimer = document.querySelector(`.js-video-timer-${id}`);


                // Set video progress + timer

                setInterval(() => {

                    if (videoProgress) {

                        videoProgress.style.width = (video.currentTime / video.duration) *
                            100 + '%';

                    }

                    if (videoTimer) {

                        const minutes = Math.floor(video.currentTime / 60);
                        const seconds = Math.floor(video.currentTime - minutes * 60);
                        const minuteValue = minutes >= 10 ? minutes : '0' + minutes;
                        const secondValue = seconds >= 10 ? seconds : '0' + seconds;

                        videoTimer.innerHTML = minuteValue + ':' + secondValue;

                    }

                }, 10);

                // Check to see if video is playing or muted

                setInterval(() => {

                    if (video.paused) {

                        if (video.muted) {
                            this.playing = false;
                            this.paused = false;
                        } else {
                            this.playing = false;
                            this.paused = true;
                        }

                    } else {
                        if (!this.hovering) {
                            this.playing = true;
                        }
                    }

                    if (video.muted) {
                        this.muted = true;
                    } else {
                        this.muted = false;
                    }

                }, 100);



                video.addEventListener('ended', () => {

                    video.currentTime = 0;
                    video.muted = true;
                    videoProgress.style.width = 0;
                    video.play()

                });



            },
            toggleSound(id) {

                const video = document.querySelector('.js-video-' + id);
                const videos = document.querySelectorAll('.js-video');

                if (this.muted) {

                    videos.forEach(video => {
                        video.muted = true;
                    });

                    video.play();

                    video.muted = false;
                    this.muted = false;

                    this.$dispatch('component-cursor', {
                        icon: 'volume-on'
                    });

                } else {

                    video.muted = true;
                    this.muted = true;

                    this.$dispatch('component-cursor', {
                        icon: 'volume-off'
                    });

                }

                video.currentTime = 0;

            },
            togglePreview(id, status) {

                this.hovering = status;

                const video = document.querySelector('.js-video-' + id);

                if (this.hovering && this.muted) {

                    video.currentTime = 0;
                    video.play();

                }

                if (!this.hovering && this.muted) {

                    video.pause();
                    video.currentTime = 0;

                }


            },
            togglePause(id) {

                const video = document.querySelector('.js-video-' + id);
                const videos = document.querySelectorAll('.js-video');

                if (this.paused) {

                    videos.forEach(video => {
                        video.pause();
                    });

                    video.play();
                    this.paused = false;
                    this.playing = true;

                } else {

                    video.pause();
                    this.paused = true;
                    this.playing = false;

                }

            },
            toggleVideo(id) {

                const video = document.querySelector('.js-video-' + id);
                const videos = document.querySelectorAll('.js-video');
                const videosWithVolumeControls = document.querySelectorAll(
                    '.js-video-with-volume-controls');
                const videosPlaying = document.querySelectorAll('.js-video-playing');

                videosPlaying.forEach(video => {
                    if (!video.muted && !video.classList.contains('js-video-with-sound')) {
                        video.muted = true;
                    } else {
                        video.pause();
                        video.muted = true;
                        video.currentTime = 0;
                    }
                });

                if (this.playing) {

                    video.pause();
                    video.muted = true;
                    this.playing = false;
                    this.hovering = false;

                } else {

                    videosWithVolumeControls.forEach(video => {
                        video.pause();
                    });

                    video.currentTime = 0;
                    video.muted = false;
                    video.play();
                    this.playing = true;
                    this.hovering = false;

                }

            }
        }))
    });
    document.addEventListener('alpine:init', () => {
        Alpine.data('form', () => ({
            dynamicForm(handle, id) {

                const form = document.getElementById(id);

                fetch(
                        '<?php echo BASE_URL . "elements/api/contactform" ?>?form=' + handle
                    )
                    .then(
                        response => {
                            console.log(response);
                            if (!response.ok) {
                                throw response
                            }
                            return response.json()
                        }
                    )
                    .then(
                        data => {

                            form.querySelector('input[name=' + data.csrf.name + ']').value = data
                                .csrf.value;

                            form.querySelector('input[name=formHash]').value = data.hash;

                            form.querySelector('input[name=freeform_payload]').value = data.payload;

                            honeypot = data.honeypot;
                            honeypotInput = form.querySelector(
                                'input[name^="freeform_form_handle"]');
                            honeypotInput.setAttribute('id', honeypot.name);
                            honeypotInput.setAttribute('name', honeypot.name);
                            honeypotInput.value = honeypot.hash;

                        }
                    );
            }
        }))
    });

    // Replace the existing hSubmit function with this:
    function hSubmit(event) {
        event.preventDefault();

        const form = event.target;
        const formData = new FormData(form);

        // Get the form action URL or use current page
        const actionUrl = <?php echo json_encode(BASE_URL . "elements/api/contactform"); ?>;
        console.log(actionUrl)
        // Show loading state (optional)
        const submitButton = form.querySelector('button[type="submit"]');
        const originalText = submitButton.innerHTML;
        submitButton.innerHTML = 'Sending...';
        submitButton.disabled = true;
        console.log(formData)
        // Submit the form via fetch
        fetch(actionUrl, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Handle success
                if (data.success) {
                    // Show success message
                    alert(form.getAttribute('data-success-message') || 'Form submitted successfully!');
                    form.reset(); // Reset form fields
                } else {
                    // Handle form errors
                    throw new Error(data.message || 'Form submission failed');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Show error message
                alert(form.getAttribute('data-error-message') ||
                    'Sorry, there was an error submitting the form. Please try again.');
            })
            .finally(() => {
                // Restore button state
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            });
    }

    // Alternative: Update the form's onsubmit attribute
    // Change from: onsubmit="(e)=>hSubmit(e)"
    // To: onsubmit="hSubmit(event)"

    // Or better yet, use addEventListener instead:
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('form-421077');
        if (contactForm) {
            contactForm.addEventListener('submit', hSubmit);
            // Remove the onsubmit attribute to avoid conflicts
            contactForm.removeAttribute('onsubmit');
        }
    });

    // Enhanced version with better error handling and UI feedback:
    function enhancedSubmit(event) {
        event.preventDefault();

        const form = event.target;
        const formData = new FormData(form);

        // Validate required fields
        const requiredFields = form.querySelectorAll('[required]');
        let isValid = true;

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.style.borderColor = 'red';
                isValid = false;
            } else {
                field.style.borderColor = '';
            }
        });

        if (!isValid) {
            alert('Please fill in all required fields.');
            return;
        }

        const submitButton = form.querySelector('button[type="submit"]');
        const buttonText = submitButton.querySelector('div div');
        const originalText = buttonText.textContent;

        // Show loading state
        buttonText.textContent = 'Sending...';
        submitButton.disabled = true;

        // Submit the form
        fetch(form.action || '/contact', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Success feedback
                    buttonText.textContent = 'Sent!';
                    setTimeout(() => {
                        buttonText.textContent = originalText;
                        form.reset();
                    }, 2000);

                    // Optional: Show success message in a better way
                    showNotification('Message sent successfully!', 'success');
                } else {
                    throw new Error(data.message || 'Submission failed');
                }
            })
            .catch(error => {
                console.error('Submission error:', error);
                buttonText.textContent = 'Error - Try Again';
                showNotification('Failed to send message. Please try again.', 'error');

                setTimeout(() => {
                    buttonText.textContent = originalText;
                }, 3000);
            })
            .finally(() => {
                submitButton.disabled = false;
            });
    }

    // Simple notification function
    function showNotification(message, type) {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 p-4 rounded-lg z-50 ${
        type === 'success'
            ? 'bg-green-500 text-white'
            : 'bg-red-500 text-white'
    }`;
        notification.textContent = message;

        document.body.appendChild(notification);

        // Remove after 5 seconds
        setTimeout(() => {
            notification.remove();
        }, 5000);
    }
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
    </script>
</body>

</html><!-- Cached by Blitz on 2025-08-16T03:01:59+01:00 -->
<!-- Served by Blitz on 2025-08-16T03:03:59+01:00 -->