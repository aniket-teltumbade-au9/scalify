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
<!-- <pre><?php echo var_dump($value, true); ?></pre> -->
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
<?php }?>