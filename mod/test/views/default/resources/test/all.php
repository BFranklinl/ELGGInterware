<?php

$plugins = serialize($plugins);
$site->pluginorder = $plugins;
$titlebar = "Registros";
$pagetitle = "Registros";

$body = elgg_list_entities(array(
    'type' => 'object',
    'subtype' => 'test',
));

$body = elgg_view_title($pagetitle) . elgg_view_layout('one_column', array('content' => $body));

echo elgg_view_page($titlebar, $body);