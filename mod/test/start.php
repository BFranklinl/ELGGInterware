<?php

// register an initializer
elgg_register_event_handler('init', 'system', 'test_init');


function test_init() {
    elgg_register_action("test/save", __DIR__ . "/actions/test/save.php");
    elgg_register_page_handler('test', 'test_page_handler');
    elgg_register_plugin_hook_handler('entity:url', 'object', 'test_set_url');
}


function test_set_url($hook, $type, $url, $params) {
    $entity = $params['entity'];
    if (elgg_instanceof($entity, 'object', 'test')) {
        return "test/view/{$entity->guid}";
    }
}

function test_page_handler($segments) {
    
    switch ($segments[0]) {
        case 'add':
           echo elgg_view_resource('test/add');
           break;

        case 'view':
            $resource_vars['guid'] = elgg_extract(1, $segments);
            echo elgg_view_resource('test/view', $resource_vars);
            break;

        case 'all':
        default:
           echo elgg_view_resource('test/all');
           break;
    }

    return true;
}