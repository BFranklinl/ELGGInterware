<?php

$guid = elgg_extract('guid', $vars);
$test = get_entity($guid);

$content = elgg_view_entity($test, array('full_view' => true));

$params = array(
    'title' => $test->title,
    'content' => $content,
    'filter' => '',
);

$body = elgg_view_layout('content', $params);

echo elgg_view_page($test->title, $body);