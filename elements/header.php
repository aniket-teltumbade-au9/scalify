<?php
include "elements/info.php";
include "elements/logo.php";
// Define your menu items and sub-menu items here
$menuItems = [
    [
        'label' => 'Services',
        'url' => BASE_URL . 'services',
        'submenu' => [
            'items' => array_slice(array_map(function ($service) {
                return [
                    'label' => $service['name'],
                    'url' => BASE_URL . "services/" . $service['slug'],
                    'description' => $service['tagline_short'],
                ];
            }, $services_list), 0, 5),
            'call_to_action' => [
                'label' => 'View all Services',
                'url' => BASE_URL . 'services',
                'description' => 'We don’t stop there, check out all the services we offer here at Scalify',
                'image' => [
                    'webp_srcset' => BASE_URL . 'assets/images/Scalify-April-2022-HR-219.webp?w=400&h=300&q=80&fm=webp&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5&dm=1651143506&s=eacf3302cbf0f702c339077ed95bce06 400w, ' . BASE_URL . 'assets/images/Scalify-April-2022-HR-219.webp?w=800&h=600&q=80&fm=webp&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5&dm=1651143506&s=94bdc666dd26f4e52f73acab1f096c71 800w, ' . BASE_URL . 'assets/images/Scalify-April-2022-HR-219.webp?w=1200&h=900&q=80&fm=webp&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5&dm=1651143506&s=2deedf480c9c24ba1cd12e009d8a1b0c 1200w',
                    'jpg_src' => BASE_URL . 'assets/images/Scalify-April-2022-HR-219.webp',
                    'jpg_srcset' => BASE_URL . 'assets/images/Scalify-April-2022-HR-219.webp?w=400&h=300&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5&dm=1651143506&s=dc95888b2b42d691958ba44d6f14cfa4 400w, ' . BASE_URL . 'assets/images/Scalify-April-2022-HR-219.webp?w=800&h=600&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5&dm=1651143506&s=2a9e8afe599b77eea7f6ef6b2291dd0b 800w,' . BASE_URL . 'assets/images/Scalify-April-2022-HR-219.webp?w=1200&h=900&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5&dm=1651143506&s=47408998810adbb0b9bdcc96a13b1ac1 1200w',
                    'alt' => 'Scalify April 2022 HR 219',
                    'width' => '1200',
                    'height' => '900',
                ],
            ],
        ],
    ],
    [
        'label' => 'About',
        'url' => BASE_URL . 'about',
    ],
    [
        'label' => 'Blogs',
        'url' => BASE_URL . 'blogs',
    ],
    [
        'label' => 'Contact',
        'url' => BASE_URL . 'contact',
    ],
];

?>

<div x-data="header" x-init="updateHeader(), mobileMenu()" x-on:scroll.window="updateHeader(), menu = false"
    x-on:keydown.escape.window="menu = false"
    class="fixed top-0 left-0 w-full flex justify-center z-header pointer-events-auto"
    @component-header.window=" if ( $event.detail.hideHeader ) { hideHeader = true; } else { hideHeader = false; }"
    x-bind:class="{
    'pointer-events-none' : headerDirection === 'down' && headerPosition > 400 || hideHeader,
    'pointer-events-auto' : headerDirection === 'up' || headerPosition < 400,
    }">
    <div x-data="modal423709" x-init="setupModal('423709')" x-on:keydown.escape.window="closeModal('423709')"
        @component-modal.window="visible = false; if ($event.detail.visible == '423709') visible = '423709'"
        class="fixed top-0 left-0 w-screen h-screen flex justify-center items-center opacity-0 pointer-events-none transition-all duration-300 z-hidden"
        x-bind:class="{
        'opacity-0 pointer-events-none transition-all duration-300 z-hidden' : visible != '423709',
        'opacity-100 pointer-events-auto z-modal' : visible == '423709'
        }">
        <div class="absolute top-0 left-0 w-full h-full z-10 duration-300 transition-all modal-background"
            x-on:click.prevent="closeModal('423709')">
        </div>
        <div class="relative z-20 transition-opacity opacity-0 w-15/16 flex items-center justify-center max-w-6xl | 3xl:max-w-7xl 4xl:max-w-9xl"
            x-bind:class="{
            'opacity-100' : visible == '423709',
            'opacity-0' : visible != '423709',
            }">
            <div class="relative w-full">
                <div class="w-full flex justify-center">
                    <div class="w-15/16 relative rounded-2xl overflow-hidden group | lg:rounded-3xl">
                        <div class="w-full aspect-ratio-16/9 rounded-2xl overflow-hidden relative | lg:rounded-3xl">
                            <iframe
                                src="https://player.vimeo.com/video/922839949?autoplay=0&loop=1&autopause=0&mute=1&controls=0"
                                class="w-full h-full absolute top-0 left-0 || js-modal-video js-modal-video-423709"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen data-ready="true"></iframe>
                        </div>
                        <div class="absolute top-0 left-0 w-full h-full z-20 || js-cursor-trigger-drag"
                            data-icon="xmark" x-on:click.prevent="closeModal('423709')"></div>
                        <a href="#"
                            class="absolute top-4 right-4 z-20 w-10 h-10 bg-gray-600 bg-opacity-70 text-white rounded-full flex items-center justify-center || xl:hidden"
                            x-on:click.prevent="closeModal('423709')">
                            <div class="sr-only">
                                Close modal</div>
                            <svg class="w-3 h-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512">
                                <path
                                    d="M326.6 166.6l22.7-22.6L304 98.7l-22.6 22.6-89.4 89.4-89.4-89.4L80 98.7 34.7 144l22.6 22.6 89.4 89.4-89.3 89.4L34.7 368 80 413.3l22.6-22.6 89.4-89.4 89.4 89.4 22.6 22.6 45.3-45.3-22.6-22.6-89.4-89.4 89.4-89.4z" />
                            </svg>
                        </a>
                        <div class="transition-opacity relative z-20 | xl:opacity-0 xl:group-hover:opacity-100">
                            <a href=""
                                class="absolute bottom-6 left-4 z-20 w-10 h-10 bg-gray-600 bg-opacity-70 text-white rounded-full flex items-center justify-center || js-modal-video-play-pause-423709">
                                <div class="sr-only">
                                    Play/Pause video</div>
                                <svg class="w-3 h-3 fill-current text-white hidden || js-modal-video-play-icon-423709"
                                    width="12" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M384 256L0 32v448l384-224z" />
                                </svg><svg class="w-3 h-3 fill-current text-white || js-modal-video-pause-icon-423709"
                                    width="10" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path d="M128 64H0v384h128V64zm192 0H192v384h128V64z" />
                                </svg>
                            </a><a href=""
                                class="absolute bottom-6 right-4 z-20 w-10 h-10 bg-gray-600 bg-opacity-70 text-white rounded-full flex items-center justify-center || js-modal-video-sound-423709">
                                <div class="sr-only">
                                    Mute/Unmute video</div>
                                <svg viewBox="0 0 189 66" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:anim="http://www.w3.org/2000/anim" anim="" anim:transform-origin="50% 50%"
                                    anim:duration="1" anim:ease="ease-in-out">
                                    <g id="Property 1=Default">
                                        <g id="logo">
                                            <path id="Vector" d="..." fill="#F05223"></path>
                                            <path id="Vector_2" d="..." fill="#F05223"
                                                anim:y="0[0.4:0.7:4:ease-in-out][0.7:1:0:ease-in-out]"></path>
                                            <path id="Vector_3" d="..." fill="#F05223"
                                                anim:y="0[0.6:0.8:2:ease-in-out][0.8:1:0:ease-in-out]"></path>
                                            <path id="Vector_4" d="..." fill="#F05223"
                                                anim:y="0[0.2:0.5:6:ease-in-out][0.5:0.8:0:ease-in-out]"></path>
                                            <path id="Vector_5" d="..." fill="#F05223"></path>
                                            <path id="Vector_6" d="..." fill="#F05223"
                                                anim:y="0[0.4:0.7:4:ease-in-out][0.7:1:0:ease-in-out]"></path>
                                            <path id="Vector_7" d="..." fill="#F05223"
                                                anim:y="0[0.1:0.3:4:ease-in-out][0.3:0.5:0:ease-in-out]"></path>
                                            <path id="Vector_8" d="..." fill="#F05223"
                                                anim:y="0[0:0.1:2:ease-in-out][0.1:0.2:0:ease-in-out]"></path>
                                            <path id="Vector_9" d="..." fill="#F05223"></path>
                                            <path id="Vector_10" d="..." fill="#F05223"></path>
                                            <path id="Vector_11" d="..." fill="#F05223"></path>
                                            <path id="Vector_12" d="..." fill="#F05223"></path>
                                            <path id="Vector_13" d="..." fill="#F05223"></path>
                                            <path id="Vector_14" d="..." fill="#F05223"></path>
                                            <path id="Vector_15" d="..." fill="#F05223"></path>
                                            <path id="Vector_16" d="..." fill="#F05223"></path>
                                            <path id="Vector_17" d="..." fill="#F05223"></path>
                                            <path id="Vector_18" d="..." fill="#F05223"></path>
                                            <path id="Vector_19" d="..." fill="#F05223"></path>
                                            <path id="Vector_20" d="..." fill="#F05223"></path>
                                            <path id="Vector_21" d="..." fill="#F05223"></path>
                                            <path id="Vector_22" d="..." fill="#F05223"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <div class="absolute bottom-0 left-0 z-20 h-1.5 w-full bg-white bg-opacity-20">
                                <div class="h-1.5 bg-primary-600 w-0 transition || js-modal-video-progress-423709">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative inline-flex justify-center z-20 py-2 | lg:py-3 || js-header-container">
        <div class="w-full transition-transform transform duration-1000 translate-y-0" x-bind:class="{
            '-translate-y-16 | lg:-translate-y-28' : headerDirection === 'down' && headerPosition > 400 || hideHeader,
            'translate-y-0' : headerDirection === 'up' || headerPosition < 400,
            }">
            <header
                class="flex flex-wrap items-center justify-between relative z-30 pl-2 rounded-3xl transition-borderRadius | lg:p-4 lg:rounded-full || js-header header-background"
                style="width: 67.5365rem;" x-bind:class="{
                'rounded-3xl' : menu != 'mobileMenu',
                'rounded-2xl' : menu == 'mobileMenu',
                }">
                <div class="absolute top-0 left-0 w-full h-full | lg:hidden"
                    x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' })" x-bind:class="{
                    'pointer-events-none' : menu == 'mobileMenu',
                    }">
                </div>
                <div class="ml-2 relative z-10 | lg:ml-4 lg:mr-6">
                    <a href="<?php echo BASE_URL; ?>" class="transition-none | dark:text-white text-gray-600"
                        x-bind:class="{
                        'text-gray-600' : !headerSmall,
                        'text-gray-600' : headerSmall || menu == 'mobileMenu',
                        }">
                        <div class="sr-only">
                            Scalify Logo link to home page</div>


                        <svg-animate trigger="loop">
                            <?php echo logo("a", "fill-current w-20 h-8 mt-0.5 | lg:mt-0 lg:w-24 lg:h-10"); ?>

                        </svg-animate>
                    </a>
                </div>
                <nav class="hidden | lg:inline-flex">
                    <ul class="flex space-x-7 | xl:space-x-10">
                        <?php foreach ($menuItems as $key => $menuItem): ?>
                        <li class="relative">
                            <?php if (isset($menuItem['badge'])): ?>
                            <div
                                class="absolute -top-3 -right-4 pointer-events-none rounded-full z-20 bg-primary-600 text-gray-600 text-xs pt-px px-1.5 leading-tighter tracking-tight">
                                <?php echo $menuItem['badge']; ?>
                            </div>
                            <?php endif; ?>
                            <a href="<?php echo isset($menuItem['url']) ? $menuItem['url'] : ""; ?>"
                                class="link font-light leading-tight transition-none | dark:text-white text-gray-600"
                                x-bind:class="{
                                    'text-gray-600' : !headerSmall,
                                    'text-gray-600' : headerSmall,
                                    }"
                                x-on:mouseenter="menu = <?php echo isset($menuItem['submenu']) ? ($key + 1) : 'false'; ?>">
                                <?php echo $menuItem['label']; ?>
                            </a>
                            <?php if (isset($menuItem['submenu'])): ?>
                            <div class="absolute flex-shrink-0 top-10 pt-8 left-2/3 z-menu transition transform -translate-x-1/3 opacity-0 -translate-y-1 pointer-events-none"
                                x-bind:class="{
                                        'opacity-0 -translate-y-1 pointer-events-none' : menu != <?php echo($key + 1); ?> && headerSmall,
                                        'opacity-100 -translate-y-1 pointer-events-auto' : menu == <?php echo($key + 1); ?> && headerSmall,
                                        'opacity-0 pointer-events-none -translate-y-4' : menu != <?php echo($key + 1); ?> && !headerSmall,
                                        'opacity-100 pointer-events-auto -translate-y-4' : menu == <?php echo($key + 1); ?> && !headerSmall,
                                        }">
                                <div
                                    class="flex p-8 relative rounded-2xl bg-white shadow-3xl w-44rem | 4xl:w-48rem lg:rounded-3xl dark:bg-grayDark-500">
                                    <div
                                        class="w-3 h-3 bg-white absolute -top-1.5 rounded-sm left-1/3 -translate-x-full transform rotate-45 | dark:bg-grayDark-500">
                                    </div>
                                    <div class="inline-flex flex-col items-start w-7/12 pr-2">
                                        <?php foreach ($menuItem['submenu']['items'] as $subItem): ?>
                                        <a href="<?php echo $subItem['url']; ?>"
                                            class="flex-1 flex-col items-start justify-center w-full rounded-2xl px-4 py-2.5 group | bg-gray-50 bg-opacity-0 dark:bg-grayDark-600 dark:bg-opacity-0 dark:text-white xl:hover:bg-opacity-100">
                                            <div class="h-full flex justify-center flex-col">
                                                <div class="flex justify-between items-center">
                                                    <div class="text-base">
                                                        <?php echo $subItem['label']; ?>
                                                    </div>
                                                    <div
                                                        class="opacity-0 transition transform | -translate-x-2 translate-y-2 xl:group-hover:translate-y-0 xl:group-hover:translate-x-0 xl:group-hover:opacity-100">
                                                        <svg class="w-3.5 h-3.5 fill-current"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                            <path
                                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-sm font-light text-gray-400 | 4xl:text-sm dark:text-gray-200">
                                                    <?php echo $subItem['description']; ?>
                                                </div>
                                            </div>
                                        </a>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php if (isset($menuItem['submenu']['call_to_action'])): ?>
                                    <div class="w-5/12 pl-3 inline-flex">
                                        <?php $cta = $menuItem['submenu']['call_to_action']; ?>
                                        <a href="<?php echo $cta['url']; ?>" <?php if (isset($cta['modal_id'])): ?>
                                            x-on:click.prevent="menu = false; $dispatch('component-modal', { visible: '<?php echo $cta['modal_id']; ?>' });                                                        "
                                            <?php endif; ?>
                                            class="w-full inline-flex flex-col items-start justify-between bg-gray-50 rounded-2xl p-5 group | dark:bg-grayDark-600">
                                            <div class="w-full flex flex-wrap">
                                                <div class="w-full flex justify-between items-center mb-2">
                                                    <div class="text-md leading-tight | dark:text-white">
                                                        <?php echo $cta['label']; ?>
                                                    </div>
                                                    <div
                                                        class="opacity-0 transition transform -translate-x-2 translate-y-2 | xl:group-hover:translate-y-0 xl:group-hover:translate-x-0 xl:group-hover:opacity-100">
                                                        <svg class="w-4 h-4 text-gray-600 fill-current | dark:text-white"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                            <path
                                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full text-sm font-light text-gray-400 | 4xl:text-sm mb-5 dark:text-white">
                                                    <?php echo $cta['description']; ?>
                                                </div>
                                            </div>
                                            <?php if (isset($cta['image'])): ?>
                                            <div class="w-full relative">
                                                <div class="relative overflow-hidden w-full" style="padding-top: 75%;">
                                                    <picture class="w-full absolute top-0 left-0 h-full">
                                                        <source type="image/webp"
                                                            srcset="<?php echo $cta['image']['webp_srcset']; ?>"
                                                            sizes="100vw">
                                                        <img src="<?php echo $cta['image']['jpg_src']; ?>"
                                                            srcset="<?php echo $cta['image']['jpg_srcset']; ?>"
                                                            sizes="100vw" alt="<?php echo $cta['image']['alt']; ?>"
                                                            class="w-full rounded-2xl relative z-0" loading="lazy"
                                                            width="<?php echo $cta['image']['width']; ?>"
                                                            height="<?php echo $cta['image']['height']; ?>">
                                                    </picture>
                                                </div>
                                                <?php if (isset($cta['modal_id'])): ?>
                                                <div
                                                    class="absolute top-0 left-0 w-full h-full flex p-3 items-end justify-start">
                                                    <div
                                                        class="flex-shrink-0 rounded-full bg-primary-600 flex items-center justify-center transition-transform transform | xl:group-hover:scale-110 w-6 h-6 lg:w-10 lg:h-10">
                                                        <svg class="w-2.5 h-2.5" width="12" height="16"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                            <path d="M384 256L0 32v448l384-224z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
                <div class="pr-2 inline-flex items-center relative z-10 | lg:space-x-2">
                    <a href="#" x-on:click.prevent="
                        darkMode = !darkMode;
                        localStorage.darkMode == 'true' ? localStorage.darkMode = 'false' : localStorage.darkMode = 'true';
                        document.documentElement.classList.toggle('dark');
                        " x-bind:class="{
                        'text-gray-600' : !headerSmall,
                        'text-gray-600' : headerSmall || menu == 'mobileMenu',
                        }"
                        class="inline-flex w-10 h-12 items-center justify-center transition-none | dark:text-white text-gray-600">
                        <div class="sr-only">
                            Toggle dark mode</div>
                        <div x-show="!darkMode">
                            <svg class="w-4 h-4 fill-current" width="12" height="16" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512">
                                <path
                                    d="M287.6 41.2c-82.8 21.2-144 96.5-144 186 0 106 85.8 192 191.5 192 16.8 0 33.1-2.2 48.6-6.2-40.6 41.4-97.2 67-159.8 67C100.3 480 0 379.7 0 256S100.3 32 224 32c22.1 0 43.5 3.2 63.6 9.2z" />
                            </svg>
                        </div>
                        <div x-show="darkMode" style="display: none;">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M280 24V0h-48v112h48V24zm157 84.9l17-17L420 58l-17 17-45.3 45.3-17 17 33.9 33.9 17-17 45.4-45.3zM108.9 75L92 58 58 92l17 17 45.3 45.3 17 17 33.9-33.9-17-17L108.9 75zM24 232H0v48h112v-48H24zm400 0h-24v48h112v-48h-88zM154.2 391.8l17-17-33.9-33.9-17 17L75 403.1 58 420l34 34 17-17 45.3-45.3zm237.6-33.9l-17-17-33.9 33.9 17 17 45.2 45.2 17 17 33.9-34-17-17-45.3-45.3zM280 424v-24h-48v112h48v-88zm-24-56a112 112 0 100-224 112 112 0 100 224z" />
                            </svg>
                        </div>
                    </a>
                    <div class="inline-flex | lg:hidden">
                        <a href="#" class="inline-flex items-center justify-center w-10 h-12"
                            x-on:click.prevent="menu == 'mobileMenu' ? menu = false : menu = 'mobileMenu'">
                            <div class="sr-only">
                                Toggle mobile menu</div>
                            <div class="flex w-5 h-3.5 flex-col items-start justify-between">
                                <div class="w-full h-0.5 transition-transform duration-500 transform rotate-0"
                                    x-bind:class="{
                                    'transform rotate-45 translate-y-1.5' : menu == 'mobileMenu',
                                    'transform rotate-0' : menu != 'mobileMenu',
                                    }">
                                    <div class="w-full h-0.5 bg-gray-600 | dark:bg-white"></div>
                                </div>
                                <div class="w-full h-0.5 transition-opacity duration-300 opacity-100" x-bind:class="{
                                    'opacity-0' : menu == 'mobileMenu',
                                    'opacity-100' : menu != 'mobileMenu'
                                    }">
                                    <div class="w-full h-0.5 bg-gray-600 | dark:bg-white"></div>
                                </div>
                                <div class="w-full h-0.5 transition-transform duration-500 transform rotate-0"
                                    x-bind:class="{
                                    'transform -rotate-45 -translate-y-1.5' : menu == 'mobileMenu',
                                    'transform rotate-0' : menu != 'mobileMenu'
                                    }">
                                    <div class="w-full h-0.5 bg-gray-600 | dark:bg-white"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="hidden | lg:inline-flex">
                        <div class="relative group inline-flex items-center" x-data="{ hover: false }"
                            x-on:mouseenter="hover = true" x-on:mouseleave="hover = false">
                            <svg width="0" height="0" class="absolute hidden" color-interpolation-filters="sRGB">
                                <defs>
                                    <filter id="buttonFilter">
                                        <fegaussianblur in="SourceGraphic" stdDeviation="5" result="blur" />
                                        <fecolormatrix in="blur" mode="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                                            result="buttonFilter" />
                                        <fecomposite in="SourceGraphic" in2="buttonFilter" operator="atop" />
                                        <feblend in="SourceGraphic" in2="buttonFilter" />
                                    </filter>
                                </defs>
                            </svg>
                            <a href="<?php echo BASE_URL; ?>contact"
                                class="inline-flex relative group outline-none | focus:outline-none"
                                style="filter: url(#buttonFilter);">
                                <div
                                    class="w-auto inline-flex items-center justify-center relative leading-tight shadow-none overflow-hidden rounded-full border-default bg-primary-600 text-gray-600 py-2 px-5">
                                    <div class="relative inline-flex top-px flex-shrink-0">
                                        <div>
                                            Contact Us</div>
                                    </div>
                                </div>
                                <div
                                    class="bg-primary-600 flex-shrink-0 overflow-hidden flex items-center justify-center -ml-1 rounded-full transform transition-transform | w-9 h-9 xl:group-hover:translate-x-3 xl:group-hover:rotate-45 js-button-icon">
                                </div>
                            </a>
                            <div
                                class="w-9 h-9 absolute top-0 right-0 flex items-center justify-center z-20 transition-transform transform | xl:group-hover:translate-x-3 xl:group-hover:rotate-45 || js-button-arrow">
                                <div class="relative overflow-hidden text-gray-600">
                                    <div
                                        class="relative top-0 left-0 transition-transform transform || js-button-arrow-icon-primary">
                                        <svg class="w-3 h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 384 512">
                                            <path
                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute top-0 left-0 transition-transform transform translate-y-full -translate-x-full || js-button-arrow-icon-secondary">
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
                <div class="w-full relative z-10 pointer-events-none | lg:hidden || js-mobile-menu"
                    style="height: 0rem; opacity: 0;" x-bind:class="{
                    'pointer-events-none' : menu != 'mobileMenu'
                    }">
                    <div class="w-full px-2 pt-8 pb-3">
                        <div class="w-full">
                            <div class="inline-flex items-center space-x-2 mb-4">
                                <div class="bg-gray-600 | dark:bg-grayDark-100 w-1.5 h-1.5 rounded-full"></div>
                                <div class="font-light text-sm | lg:text-base text-gray-600 dark:text-grayDark-100">
                                    Have a look around...</div>
                            </div>
                            <ul class="flex flex-col items-start">
                                <?php foreach ($menuItems as $menuItem): ?>
                                <li class="relative">
                                    <?php if (isset($menuItem['badge'])): ?>
                                    <div
                                        class="absolute -top-3 -right-4 pointer-events-none rounded-full z-20 bg-primary-600 text-gray-600 text-xs pt-px px-2 leading-tight tracking-tight">
                                        <?php echo $menuItem['badge']; ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (isset($menuItem['url'])): ?>
                                    <a href="<?php echo $menuItem['url']; ?>"
                                        class="link text-4xl tracking-tight leading-none transition-none | dark:text-white">
                                        <?php echo $menuItem['label']; ?>
                                    </a>
                                    <?php endif; ?>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="w-full mt-6">
                            <div class="relative group inline-flex items-center" x-data="{ hover: false }"
                                x-on:mouseenter="hover = true" x-on:mouseleave="hover = false">
                                <svg width="0" height="0" class="absolute hidden" color-interpolation-filters="sRGB">
                                    <defs>
                                        <filter id="buttonFilter">
                                            <fegaussianblur in="SourceGraphic" stdDeviation="5" result="blur" />
                                            <fecolormatrix in="blur" mode="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                                                result="buttonFilter" />
                                            <fecomposite in="SourceGraphic" in2="buttonFilter" operator="atop" />
                                            <feblend in="SourceGraphic" in2="buttonFilter" />
                                        </filter>
                                    </defs>
                                </svg>
                                <a href="<?php echo BASE_URL; ?>contact"
                                    class="inline-flex relative group outline-none | focus:outline-none"
                                    style="filter: url(#buttonFilter);">
                                    <div
                                        class="w-auto inline-flex items-center justify-center relative leading-tight shadow-none overflow-hidden rounded-full border-default bg-primary-600 text-gray-600 py-2 px-5">
                                        <div class="relative inline-flex top-px flex-shrink-0">
                                            <div>
                                                Contact Us</div>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-primary-600 flex-shrink-0 overflow-hidden flex items-center justify-center -ml-1 rounded-full transform transition-transform | w-9 h-9 xl:group-hover:translate-x-3 xl:group-hover:rotate-45 js-button-icon">
                                    </div>
                                </a>
                                <div
                                    class="w-9 h-9 absolute top-0 right-0 flex items-center justify-center z-20 transition-transform transform | xl:group-hover:translate-x-3 xl:group-hover:rotate-45 || js-button-arrow">
                                    <div class="relative overflow-hidden text-gray-600">
                                        <div
                                            class="relative top-0 left-0 transition-transform transform || js-button-arrow-icon-primary">
                                            <svg class="w-3 h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z" />
                                            </svg>
                                        </div>
                                        <div
                                            class="absolute top-0 left-0 transition-transform transform translate-y-full -translate-x-full || js-button-arrow-icon-secondary">
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
            </header>
        </div>
    </div>
    <div class="w-full h-full pointer-events-none transition-all duration-300 fixed top-0 left-0 z-10 menu-background | lg:hidden opacity-0"
        x-on:click="menu = false" x-bind:class="{
        'opacity-100 pointer-events-auto' : menu != false && menu != 'mobileMenu',
        'opacity-0 pointer-events-none' : !menu || menu == 'mobileMenu',
        'pointer-events-auto opacity-0' : menu == 'mobileMenu',
        }">
    </div>
    <div class="w-full h-full pointer-events-none transition-all duration-300 fixed top-0 left-0 z-10 menu-background hidden | lg:block opacity-0"
        x-on:click="menu = false" x-on:mouseenter="menu = false" x-bind:class="{
        'opacity-100 pointer-events-auto' : menu != false && menu != 'mobileMenu',
        'opacity-0 pointer-events-none' : !menu || menu == 'mobileMenu',
        'pointer-events-auto opacity-0' : menu == 'mobileMenu',
        }">
    </div>
</div>