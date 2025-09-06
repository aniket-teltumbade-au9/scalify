<?php
$accessToken = 'uH_05VRef-F_PjhW2BZ-R1mxhYrIMwZHuqZled_rl9Y';
$spaceId = 'z0gmr7sfomjq';
$contentTypeId = 'blogPage';
$slug = $_GET['slug'];

$url = "https://cdn.contentful.com/spaces/$spaceId/environments/master/entries?&limit=1&content_type=$contentTypeId&fields.slug[match]={$slug}&include=1&select=sys.id,fields.title,fields.body,fields.readDuration,fields.slug,fields.image,fields.author";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer {$accessToken}"));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
function findLinkedEntity(array $linkedEntity, array $sourceList): ?array
{
    // Check if the linked entity and its ID are valid
    if (!isset($linkedEntity['sys']['id'])) {
        return null;
    }

    $targetId = $linkedEntity['sys']['id'];

    // Use a loop for clarity and direct access
    foreach ($sourceList as $item) {
        if (isset($item['sys']['id']) && $item['sys']['id'] === $targetId) {
            return $item;
        }
    }

    return null;
}
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo json_encode(['error' => 'cURL error: ' . curl_error($ch)]);
} else {
    $data = json_decode($response, true);

    if (isset($data) && isset($data['items'][0])) {
        $values = [];
        $fields = $data['items'][0]['fields'];
        $processedEntries[] = [
            'id' => $data['items'][0]['sys']['id'],
            'title' => $fields['title'],
            'slug' => $fields['slug'],
            'body' => $fields['body'],
            'readDuration' => $fields['readDuration'],
            'image' => "https:" . str_replace('\/', '/', findLinkedEntity($fields['image'], $data['includes']['Asset'])['fields']['file']['url']),
            'author_name' => findLinkedEntity($fields['author'], $data['includes']['Entry'])['fields']['name'],
            'author_designation' => findLinkedEntity($fields['author'], $data['includes']['Entry'])['fields']['designation'],
        ];
        // echo json_encode($processedEntries, JSON_PRETTY_PRINT);
        $values[] = $processedEntries;
        $value = $values[0][0];
    } else {
        echo json_encode(['error' => 'Invalid Contentful response format or no items found.']);
    }
}
if (isset($value)) {?>

<div class="w-full pt-20 pb-10 | lg:pt-32 lg:pb-16 | xl:pt-40 md:mb-10">
    <div class="pl-2 | sm:pl-6 | xl:pl-12 | 2xl:pl-20 | 3xl:pl-40 | 4xl:pl-60">
        <div
            class="w-full relative overflow-hidden flex flex-wrap justify-between | md:min-h-140 | xl:min-h-160 | 4xl:min-h-200">
            <div class="w-full inline-flex flex-col justify-between items-start relative z-20 order-2 | md:order-1">
                <div class="w-full relative mt-5 mb-5 | md:mt-28"><svg id="Layer_1"
                        class="w-8 h-8 | md:w-12 md:h-12 text-white fill-current absolute top-1 -ml-px mt-px left-5/16 z-30 transform -translate-y-20 rotate-180 hidden md:block 3xl:left-4/16 dark:text-grayDark-600"
                        version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100"
                        xml:space="preserve">
                        <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z"></path>
                    </svg><svg id="Layer_1"
                        class="w-8 h-8 | md:w-12 md:h-12 text-white fill-current absolute bottom-0 mb-px -ml-px left-5/16 z-30 transform translate-y-12 hidden md:block 3xl:left-4/16 dark:text-grayDark-600"
                        version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100"
                        xml:space="preserve">
                        <path d="M51.9 0v1.9c-27.6 0-50 22.4-50 50H0V0h51.9z"></path>
                    </svg>
                    <div
                        class="w-auto inline-flex rounded-r-2xl mt-2 pl-4 pr-4 | md:pl-0 md:w-7/16 md:-mt-7 md:bg-white md:p-10 md:pr-6 md:rounded-r-3xl | 4xl:w-7/16 | md:dark:bg-grayDark-600">
                        <div class="flex flex-col space-y-3 | lg:space-y-5 items-start">
                            <div
                                class="inline-flex items-center space-x-2 md:left-2 md:relative | lg:absolute lg:left-3 lg:top-10 ">
                                <div class="bg-gray-600 | dark:bg-grayDark-100 w-1.5 h-1.5 rounded-full"></div>
                                <div class="font-light text-sm | lg:text-base text-gray-600 | dark:text-grayDark-100">
                                    4 min read</div>
                            </div>
                            <h1 class="
    text-2-5xl | md:text-3xl | lg:text-4xl | lg:text-4xl | 2xl:text-5xl | 4xl:text-6xl
    font-sans-primary tracking-tight
    text-gray-600  | dark:text-grayDark-100
    leading-none
    md:pl-2 | lg:indent-32 xl:indent-40
    "><?php echo $value['title']; ?></h1>
                        </div>
                    </div>
                </div>
                <div class="pl-4 | md:pl-2"><a href="https://madebyshape.co.uk/about/jason-mayo/"
                        class="flex items-end space-x-3 | lg:space-x-5">
                        <div class="leading-tight tracking-tight">
                            <div class="text-xs font-light mb-1 | text-gray-600 | dark:text-grayDark-100">
                                Written by</div>
                            <div class="text-gray-600 | dark:text-grayDark-100">
                                <?php echo $value['author_name']; ?></div>
                            <div class="font-light text-xs | lg:text-sm text-gray-400 | dark:text-grayDark-200">
                                <?php echo $value['author_designation']; ?></div>
                        </div>
                    </a></div>
            </div>
            <div
                class="w-full h-60 relative order-1 pl-2 | sm:pl-0 sm:h-96 | md:order-2 md:absolute md:h-full md:right-0 md:top-0 md:inline-flex md:pl-5/16 md:pr-0 | 3xl:pl-4/16">
                <div
                    class="w-full h-full relative overflow-hidden rounded-bl-2xl bg-gray-50 | dark:bg-grayDark-500 | md:rounded-r-none md:rounded-l-3xl">
                    <div
                        class="w-28 h-14 bg-white absolute top-0 left-0 z-20 rounded-br-2xl | md:hidden | dark:bg-grayDark-600">
                        <svg id="Layer_1"
                            class="w-10 h-10 text-white fill-current absolute bottom-px -left-px z-30 transform translate-y-full | dark:text-grayDark-600"
                            version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100"
                            xml:space="preserve">
                            <path d="M51.9 0v1.9c-27.6 0-50 22.4-50 50H0V0h51.9z"></path>
                        </svg><svg id="Layer_1"
                            class="w-10 h-10 text-white fill-current absolute -top-px right-px z-30 transform translate-x-full | dark:text-grayDark-600"
                            version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100"
                            xml:space="preserve">
                            <path d="M51.9 0v1.9c-27.6 0-50 22.4-50 50H0V0h51.9z"></path>
                        </svg>
                    </div>
                    <picture>
                        <source type="image/webp" srcset="<?php echo $value['image']; ?>" sizes="100vw">
                        <img src="<?php echo $value['image']; ?>" width="2500" height="1667">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

    function pretty($var)
    {
        return gettype($var) . "" . json_encode(
            $var,
            JSON_UNESCAPED_SLASHES |
            JSON_UNESCAPED_UNICODE |
            JSON_PRETTY_PRINT |
            JSON_PARTIAL_OUTPUT_ON_ERROR |
            JSON_INVALID_UTF8_SUBSTITUTE
        );
    }

    // echo "<pre>" . pretty($value["body"]) . "</pre>";

    function generateSlug($sentence)
    {
        return trim(preg_replace('/[^a-z0-9]+/', '-', strtolower($sentence)), '-');
    }
    function getHeadings($mainData)
    {
        $headings = [];

        if (isset($mainData['content']) && is_array($mainData['content'])) {
            foreach ($mainData['content'] as $node) {
                if (isset($node['nodeType']) && $node['nodeType'] === 'heading-2') {
                    if (isset($node['content']) && is_array($node['content'])) {
                        foreach ($node['content'] as $text_node) {
                            if (isset($text_node['value'])) {
                                $val_text = $text_node['value'];
                                $val_slug = generateSlug($val_text);
                                $headings[] = [
                                    'text' => $val_text,
                                    'slug' => $val_slug,
                                ];
                            }
                        }
                    }
                }
            }
        }

        return $headings;
    }

    function process_nodes($nodes, $nodeIndex = 0)
    {
        if (!is_array($nodes)) {
            return;
        }
        foreach ($nodes as $node) {
            $type = $node['nodeType'] ?? '';

            switch ($type) {
                case 'document':
                    // The root document node
                    process_nodes($node['content'], $nodeIndex);
                    break;
                case 'paragraph':
                    echo '<div class="w-full' . ($nodeIndex === 3 ? ' mt-10 | lg:mt-20' : '') . '">
                        <div class="w-full">
                        <div class="w-full relative ">
                        <p class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7">';
                    if (isset($node['content'])) {
                        process_nodes($node['content'], $nodeIndex);
                    }
                    echo '</p></div></div></div>';
                    break;
                case 'heading-2':
                    echo '<div class="w-full mt-10 | lg:mt-20">
                        <div class="w-full">
                        <div class="w-full relative ">
                        <h2 class="mb-3 text-pretty tracking-tight text-gray-600 | dark:text-grayDark-100 text-2xl leading-tighter 4xl:text-3xl relative pt-28 -mt-28" id="' . generateSlug($node['content'][0]['value']) . '">';
                    if (isset($node['content'])) {
                        process_nodes($node['content'], $nodeIndex);
                    }
                    echo '</h2></div></div></div>';
                    break;
                case 'unordered-list':
                    echo '<ul class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 list-outside my-6 list-disc space-y-2 pl-6">';
                    if (isset($node['content'])) {
                        process_nodes($node['content'], $nodeIndex);
                    }
                    echo '</ul>';
                    break;
                case 'ordered-list':
                    echo '<ol class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 list-outside my-6 list-decimal space-y-2 pl-6">';
                    if (isset($node['content'])) {
                        process_nodes($node['content'], $nodeIndex);
                    }
                    echo '</ol>';
                    break;
                case 'list-item':
                    echo '<li dir="ltr">';
                    if (isset($node['content'])) {
                        process_nodes($node['content'], $nodeIndex);
                    }
                    echo '</li>';
                    break;
                case 'hyperlink':
                    $uri = htmlspecialchars($node['data']['uri'] ?? '#');
                    echo '<a href="' . $uri . '">';
                    if (isset($node['content'])) {
                        process_nodes($node['content'], $nodeIndex);
                    }
                    echo '</a>';
                    break;
                case 'text':
                    $value = htmlspecialchars($node['value'] ?? '');
                    // Handle formatting marks
                    if (isset($node['marks'])) {
                        foreach ($node['marks'] as $mark) {
                            if (($mark['type'] ?? '') === 'strong') {
                                $value = '<strong>' . $value . '</strong>';
                                break;
                            }
                        }
                    }
                    echo $value;
                    break;
            }
            $nodeIndex = $nodeIndex + 1;
        }
    }
    $contentHeadings = getHeadings($value['body']);
    // Check if the 'content' key exists and is an array
    // process_nodes($value);
    ?>
<div x-data="richTextContent" x-on:scroll.window="updateProgress()">
    <div class="w-full py-0">
        <div class="px-2 | sm:px-6 | xl:px-12 | 2xl:px-20 | 3xl:px-40 | 4xl:px-60">
            <div class="w-full flex flex-col items-start | lg:flex-row lg:items-stretch">
                <div class="px-2 | lg:px-3 | xl:px-4 w-full mb-10 | lg:mb-0 lg:max-w-sm | 4xl:max-w-lg">
                    <div class="sticky top-28 left-0 space-y-5">
                        <div class="w-full rounded-2xl bg-gray-50 overflow-hidden | dark:bg-grayDark-500">
                            <div class="flex flex-col items-start space-y-3" x-data="toc" x-init="buildToc(497883)">
                                <div class="text-sm font-light text-gray-300 px-5 mt-5 | dark:text-gray-200">
                                    Contents</div>
                                <div class="dark:text-white pb-5 px-5 || js-toc-497883">
                                    <ul class="aniket">
                                        <?php foreach ($contentHeadings as $heading): ?>
                                        <li
                                            class="w-full relative leading-tight mb-1 py-0.5 transition-transform duration-500 transform">
                                            <div
                                                class="absolute top-0 -left-8 w-1 h-full bg-gray-600 | dark:bg-grayDark-100">
                                            </div>
                                            <a href="#<?php echo $heading['slug']; ?>"
                                                class="transition-none | xl:hover:underline">
                                                <?php echo $heading['text']; ?>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="w-full hidden | lg:block">
                            <div class="w-full">
                                <div class="w-full rounded-full h-1 bg-gray-50 | dark:bg-grayDark-400">
                                    <div class="h-1 rounded-full bg-gray-600 | dark:bg-primary-600 || js-progress"
                                        style="width: 100%;"></div>
                                </div>
                            </div>
                            <div class="w-full mt-3 flex justify-center items-center | dark:text-grayDark-100">
                                <svg class="w-4 h-4 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M256 0a256 256 0 110 512 256 256 0 110-512zm-24 120v148.8l10.7 7.1 96 64 20 13.3 26.6-39.9-20-13.3-85.3-56.8V96h-48v24z">
                                    </path>
                                </svg>
                                <div class="">
                                    5 min read</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-2 | lg:px-3 | xl:px-4 w-full | lg:w-10/16 | 4xl:w-9/16 || js-content">
                    <div class="w-full mb-3">
                        <div
                            class="inline-flex font-light bg-gray-50 rounded-full py-1 px-4 | dark:bg-grayDark-500 dark:text-grayDark-100">
                            Updated on 13 Aug 2025</div>
                    </div>
                    <div class="w-full flex flex-col -mt-10 mb-10 | lg:-mt-20 lg:mb-20 || js-toc-497883-wrapper">
                        <?php process_nodes($value); ?>

                    </div>
                </div>
                <div class="px-2 | lg:px-3 | xl:px-4 flex-shrink-0 w-auto hidden |  lg:inline-block">
                    <div class="w-full sticky top-28 left-0">
                        <div class="text-sm font-light text-gray-400 mb-2 | dark:text-gray-200">
                            Share</div>
                        <div class="inline-flex flex-col items-start space-y-1.5">
                            <div class="" x-data="shareLink">
                                <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fmadebyshape.co.uk%2Fweb-design-blog%2Fdesigning-research-portals-how-to-make-academic-content-more-accessible%2F%3Ftoken%3DkVDjDfrz9l7IokykLQO3Lw72q2D0wHhH&amp;title=Designing Research Portals: How to Make Academic Content More Accessible"
                                    target="_blank" rel="noopener noreferrer"
                                    class="inline-flex items-center justify-center bg-primary-600 text-gray-600 translate-z-0 rounded-full w-8 h-8 duration-400 | xl:hover:bg-gray-600 xl:hover:text-white | lg:dark:hover:bg-grayDark-400"
                                    onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fmadebyshape.co.uk%2Fweb-design-blog%2Fdesigning-research-portals-how-to-make-academic-content-more-accessible%2F%3Ftoken%3DkVDjDfrz9l7IokykLQO3Lw72q2D0wHhH&amp;title=Designing Research Portals: How to Make Academic Content More Accessible', 'Share', 'width=600,height=400')">
                                    <div class="sr-only">
                                        Share on LinkedIn</div><svg class="w-3.5 h-3.5 fill-current"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="" x-data="shareLink">
                                <a href="https://twitter.com/intent/tweet?text=Designing Research Portals: How to Make Academic Content More Accessible - https%3A%2F%2Fmadebyshape.co.uk%2Fweb-design-blog%2Fdesigning-research-portals-how-to-make-academic-content-more-accessible%2F%3Ftoken%3DkVDjDfrz9l7IokykLQO3Lw72q2D0wHhH"
                                    target="_blank" rel="noopener noreferrer"
                                    class="inline-flex items-center justify-center bg-primary-600 text-gray-600 translate-z-0 rounded-full w-8 h-8 duration-400 | xl:hover:bg-gray-600 xl:hover:text-white | lg:dark:hover:bg-grayDark-400"
                                    onclick="window.open('https://twitter.com/intent/tweet?text=Designing Research Portals: How to Make Academic Content More Accessible - https%3A%2F%2Fmadebyshape.co.uk%2Fweb-design-blog%2Fdesigning-research-portals-how-to-make-academic-content-more-accessible%2F%3Ftoken%3DkVDjDfrz9l7IokykLQO3Lw72q2D0wHhH', 'Share', 'width=600,height=400')">
                                    <div class="sr-only">
                                        Share on Twitter</div><svg class="w-3.5 h-3.5 fill-current"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8l164.9-188.5L26.8 48h145.6l100.5 132.9L389.2 48zm-24.8 373.8h39.1L151.1 88h-42l255.3 333.8z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="" x-data="shareLink">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fmadebyshape.co.uk%2Fweb-design-blog%2Fdesigning-research-portals-how-to-make-academic-content-more-accessible%2F%3Ftoken%3DkVDjDfrz9l7IokykLQO3Lw72q2D0wHhH"
                                    target="_blank" rel="noopener noreferrer"
                                    class="inline-flex items-center justify-center bg-primary-600 text-gray-600 translate-z-0 rounded-full w-8 h-8 duration-400 | xl:hover:bg-gray-600 xl:hover:text-white | lg:dark:hover:bg-grayDark-400"
                                    onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fmadebyshape.co.uk%2Fweb-design-blog%2Fdesigning-research-portals-how-to-make-academic-content-more-accessible%2F%3Ftoken%3DkVDjDfrz9l7IokykLQO3Lw72q2D0wHhH', 'Share', 'width=600,height=400')">
                                    <div class="sr-only">
                                        Share on Facebook</div><svg class="w-3.5 h-3.5 fill-current"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="" x-data="shareLink">
                                <a href="" target="_blank" rel="noopener noreferrer"
                                    class="inline-flex items-center justify-center bg-primary-600 text-gray-600 translate-z-0 rounded-full w-8 h-8 duration-400 | xl:hover:bg-gray-600 xl:hover:text-white | lg:dark:hover:bg-grayDark-400"
                                    x-on:click.prevent="copyUrlToClipboard()">
                                    <div class="sr-only">
                                        Share on Email</div><svg class="w-3.5 h-3.5 fill-current" width="20" height="16"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M580.2 267.3c56.2-56.2 56.2-147.4 0-203.6s-147.4-56.3-203.6 0L365.3 75l45.3 45.3 11.3-11.3c31.2-31.2 81.9-31.2 113.1 0s31.2 81.9 0 113.1L421.8 335.2c-31.2 31.2-81.9 31.2-113.1 0-25.6-25.6-30.3-64.3-13.8-94.6 1.8-3.4 3.9-6.7 6.3-9.8L250 192.4c-4.3 5.7-8.1 11.6-11.4 17.8-29.5 54.6-21.3 124.2 24.9 170.3 56.2 56.2 147.4 56.2 203.6 0l113.1-113.2zM59.8 244.7c-56.2 56.2-56.2 147.4 0 203.6s147.4 56.2 203.6 0l11.3-11.3-45.3-45.3-11.3 11.3c-31.2 31.2-81.9 31.2-113.1 0s-31.2-81.9 0-113.1l113.2-113.1c31.2-31.2 81.9-31.2 113.1 0 25.6 25.6 30.3 64.3 13.8 94.6-1.8 3.4-3.9 6.7-6.3 9.8l51.2 38.4c4.3-5.7 8.1-11.6 11.4-17.8 29.5-54.6 21.3-124.2-24.9-170.3-56.2-56.2-147.4-56.2-203.6 0L59.8 244.7z">
                                        </path>
                                    </svg>
                                </a>
                                <div class="absolute bottom-0 left-1/2 truncate text-xs tracking-tight leading-tight pt-3 transform -translate-x-1/2 translate-y-10 opacity-0 transition pointer-events-none | dark:text-grayDark-200"
                                    x-bind:class="{'opacity-100 translate-y-6' : copied,'opacity-0 translate-y-10' : !copied}">
                                    Copied!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>