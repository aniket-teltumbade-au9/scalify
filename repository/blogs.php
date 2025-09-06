<?php
function getBlogs()
{
    $contentTypeId = 'blogPage';
    $limit = 6;
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
    $skip = ($page - 1) * $limit;

    $url = "https://cdn.contentful.com/spaces/" . CONTENTFUL_SPACE . "/environments/master/entries?content_type={$contentTypeId}&limit={$limit}&skip={$skip}&include=1&select=sys.id,fields.title,fields.readDuration,fields.slug,fields.image,fields.author";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer " . CONTENTFUL_TOKEN));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    $response = curl_exec($ch);
    return ["response" => $response, "ch" => $ch, "skip" => $skip, "limit" => $limit];
}
