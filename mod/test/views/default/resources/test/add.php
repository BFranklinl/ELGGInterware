<?php

gatekeeper();
$content = elgg_view_title("Test form");

$content .= elgg_view_form("test/save");

$body = elgg_view_layout('one_sidebar', array(
   'content' => $content,
   'sidebar' => ''
));

echo elgg_view_page($title, $body);