<?php
$accessToken = 'uH_05VRef-F_PjhW2BZ-R1mxhYrIMwZHuqZled_rl9Y';
$spaceId = 'z0gmr7sfomjq';
$contentTypeId = 'privacyPolicy';
$url = "https://cdn.contentful.com/spaces/$spaceId/environments/master/entries?&limit=1&content_type=$contentTypeId";

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
            'body' => $fields['description'],
        ];
        // echo json_encode($processedEntries, JSON_PRETTY_PRINT);
        $values[] = $processedEntries;
        $value = $values[0][0];
    } else {
        echo json_encode(['error' => 'Invalid Contentful response format or no items found.']);
    }
}
if (isset($value)) {?>


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
                                $headings[] = [
                                    'text' => $val_text,
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
<?php process_nodes($value); ?>
<?php }?>