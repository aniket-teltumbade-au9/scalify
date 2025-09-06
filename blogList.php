<?php
include "repository/blogs.php";
$execute = getBlogs();
$response = $execute['response'];
$ch = $execute['ch'];
$skip = $execute['skip'];
$limit = $execute['limit'];

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
if (curl_errno($ch)) {
    echo json_encode(['error' => 'cURL error: ' . curl_error($ch)]);
} else {
    $data = json_decode($response, true);

    if (isset($data)) {
        $values = [];
        $values['count'] = $data['total'];
        $processedEntries = [];
        foreach ($data['items'] as $entry) {
            $fields = $entry['fields'];
            $processedEntries[] = [
                'id' => $entry['sys']['id'],
                'title' => $fields['title'],
                'slug' => $fields['slug'],
                'readDuration' => $fields['readDuration'],
                'image' => "https:" . str_replace('\/', '/', findLinkedEntity($fields['image'], $data['includes']['Asset'])['fields']['file']['url']),
                'author_name' => findLinkedEntity($fields['author'], $data['includes']['Entry'])['fields']['name'],
                // 'author_designation' => findLinkedEntity($fields['author'], $data['includes']['Entry'])['fields']['designation'],
            ];
            // echo json_encode($processedEntries, JSON_PRETTY_PRINT);
        }
        $values['list'] = $processedEntries;
    } else {
        echo json_encode(['error' => 'Invalid Contentful response format or no items found.']);
    }
}
?>
<!-- Blog -->
<div class="w-full pt-20 pb-28 | lg:pt-36 lg:pb-32">
    <div class="px-2 | sm:px-6 | xl:px-12 | 2xl:px-20 | 3xl:px-40 | 4xl:px-60">
        <div class="px-2 | lg:px-3 | xl:px-4 w-full flex flex-wrap relative mb-7 | md:mb-7 | xl:mb-16">
            <div class="relative w-full | lg:w-15/16">
                <h1 class="inline-flex items-center space-x-2 w-auto mb-2 | lg:mb-0 lg:absolute lg:top-3 lg:left-4 ">
                    <div class="bg-gray-600 | dark:bg-grayDark-100 w-1.5 h-1.5 rounded-full"></div>
                    <div class="font-light text-sm | lg:text-base text-gray-600 | dark:text-grayDark-100">
                        The Blog</div>
                </h1>
            </div>
        </div>
        <div class="flex flex-wrap">
            <?php foreach ($values['list'] as $blog): ?>
            <div class="px-2 | lg:px-3 | xl:px-4 w-full mb-12 | md:mb-16 md:w-1/2 | lg:w-1/3">
                <div class="w-full"><a href="<?php echo BASE_URL . 'blogs/' . $blog['slug']; ?>"
                        class="flex flex-col items-start group relative || js-cursor-trigger-drag">
                        <div class="w-full relative mb-5 pl-px">
                            <div
                                class="w-full relative overflow-hidden rounded-2xl rounded-bl-lg | lg:rounded-bl-2xl lg:rounded-3xl">
                                <div
                                    class="absolute bottom-0 left-0 z-20 bg-white rounded-tr-2xl flex transition-transform transform duration-400 pr-2 pt-2 | lg:pr-3 lg:pt-3 | xl:translate-y-full xl:-translate-x-full lg:rounded-tr-3xl | xl:group-hover:translate-x-0 xl:group-hover:translate-y-0 | dark:bg-grayDark-600">
                                    <svg id="Layer_1"
                                        class="w-10 h-10 | lg:w-12 lg:h-12 text-white fill-current absolute top-px -left-px transform -translate-y-full rotate-180 dark:text-grayDark-600"
                                        version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                        viewBox="0 0 100 100" xml:space="preserve">
                                        <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z"></path>
                                    </svg><svg id="Layer_1"
                                        class="w-10 h-10 | lg:w-12 lg:h-12 text-white fill-current absolute -bottom-px right-px transform translate-x-full rotate-180 dark:text-grayDark-600"
                                        version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                        viewBox="0 0 100 100" xml:space="preserve">
                                        <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z"></path>
                                    </svg>
                                    <div
                                        class="rounded-xl transform-gpu overflow-hidden relative p-5 bg-gray-50 | lg:rounded-2xl | dark:bg-grayDark-400 | lg:p-2">
                                        <div class="relative overflow-hidden w-full">
                                            <?php echo $blog['author_name']; ?>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="w-full relative z-10 transform-gpu rounded-2xl overflow-hidden pl-px bg-gray-50 | dark:bg-grayDark-400 | lg:rounded-3xl">
                                    <div
                                        class="w-full transform scale-110 transition-transform | xl:group-hover:-translate-y-2.5">
                                        <div class="w-full aspect-ratio-16/9 relative">
                                            <picture>
                                                <source type="image/webp"
                                                    srcset="<?php echo $blog['image']; ?>, <?php echo $blog['image']; ?>"
                                                    sizes="100vw">
                                                <img src="<?php echo $blog['image']; ?>"
                                                    srcset="<?php echo $blog['image']; ?>, <?php echo $blog['image']; ?>"
                                                    sizes="100vw" alt="Brooke cagle n1m25jvup EU unsplash"
                                                    class=" w-full   w-full h-full object-cover absolute top-0 left-0"
                                                    loading="lazy" width="800" height="450">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inline-flex items-center space-x-2 mb-1 ">
                            <div class="bg-gray-600 | dark:bg-grayDark-200 w-1.5 h-1.5 rounded-full"></div>
                            <div class="font-light text-sm | lg:text-base text-gray-600 | dark:text-grayDark-200">
                                <?php echo $blog['readDuration']; ?> min read</div>
                        </div>
                        <div
                            class="text-lg | md:text-xl | 4xl:text-1xl font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-tighter text-pretty pr-8 mb-5 | lg:pr-16">
                            <?php echo $blog['title']; ?></div>
                    </a></div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php
$currentPage = ($skip / $limit) + 1;
$totalPages = ceil($values['count'] / $limit);
$blogUrl = BASE_URL . "blogs/";

// Determine the start and end of the pagination range
$startPage = max(1, $currentPage - 2);
$endPage = min($totalPages, $currentPage + 2);
?>
        <div class="flex justify-center">
            <div
                class="inline-flex justify-center items-center bg-gray-50 rounded-full p-1 | dark:bg-gray-600 | lg:space-x-0.5">
                <?php if ($currentPage > 1): ?>
                <a href="<?php echo $blogUrl; ?><?php echo($currentPage - 1 > 1) ? '?page=' . ($currentPage - 1) : ''; ?>"
                    class="w-8 h-8 text-lg flex justify-center items-center rounded-full | xl:hover:bg-white | lg:dark:hover:bg-grayDark-400">
                    <div class="sr-only">Previous page</div>
                    <svg class="w-3.5 h-3.5 fill-current text-gray-600 | dark:text-grayDark-100" width="14" height="16"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M256 66.7L210.8 112 121.4 201.4H448v64H121.4L210.8 354l45.2 45.3-22.6 22.6-144-144-22.6-22.6 22.6-22.6 144-144z">
                        </path>
                    </svg>
                </a>
                <?php endif; ?>

                <?php
// Always show the first page
if ($startPage > 1) {
    ?>
                <a href="<?php echo $blogUrl; ?>"
                    class="w-8 h-8 flex justify-center items-center rounded-full | xl:hover:bg-white | dark:text-grayDark-100 | lg:dark:hover:bg-grayDark-400">
                    <div class="mt-px">1</div>
                </a>
                <?php
// Add ellipsis if needed
    if ($startPage > 2) {
        ?>
                <div class="w-6 h-8 flex items-center justify-center | dark:text-grayDark-200">
                    <div>...</div>
                </div>
                <?php
}
}

// Loop through the main page range
for ($i = $startPage; $i <= $endPage; $i++) {
    $url = ($i > 1) ? $blogUrl . '?page=' . $i : $blogUrl;
    $activeClass = ($i == $currentPage) ? 'bg-gray-600 text-white | dark:bg-grayDark-400' : 'xl:hover:bg-white | dark:text-grayDark-100 | lg:dark:hover:bg-grayDark-400';
    $element = ($i == $currentPage) ? 'div' : 'a';
    ?>
                <<?php echo $element; ?> href="<?php echo $url; ?>"
                    class="w-8 h-8 flex justify-center items-center rounded-full <?php echo $activeClass; ?>">
                    <div class="mt-px">
                        <?php echo $i; ?>
                    </div>
                </<?php echo $element; ?>>
                <?php
}

// Always show the last page
if ($endPage < $totalPages) {
    // Add ellipsis if needed
    if ($endPage < $totalPages - 1) {
        ?>
                <div class="w-6 h-8 flex items-center justify-center | dark:text-grayDark-200">
                    <div>...</div>
                </div>
                <?php
}
    ?>
                <a href="<?php echo $blogUrl; ?>?page=p<?php echo $totalPages; ?>"
                    class="w-8 h-8 flex justify-center items-center rounded-full | xl:hover:bg-white | dark:text-grayDark-100 | lg:dark:hover:bg-grayDark-400">
                    <div class="mt-px">
                        <?php echo $totalPages; ?>
                    </div>
                </a>
                <?php
}
?>

                <?php if ($currentPage < $totalPages): ?>
                <a href="<?php echo $blogUrl; ?>?page=<?php echo $currentPage + 1; ?>"
                    class="w-8 h-8 text-lg flex justify-center items-center rounded-full | xl:hover:bg-white | lg:dark:hover:bg-grayDark-400">
                    <div class="sr-only">Next page</div>
                    <svg class="w-3.5 h-3.5 fill-current text-gray-600 | dark:text-grayDark-100" width="14" height="16"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M422.6 278.6l22.7-22.6-22.6-22.6-144-144L256 66.7 210.8 112l22.6 22.6 89.4 89.4H0v64h322.7l-89.4 89.4-22.5 22.6 45.2 45.3 22.6-22.6 144-144z">
                        </path>
                    </svg>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Blog -->