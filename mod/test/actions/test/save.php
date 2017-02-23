<?php

$email = get_input('email');
$nombre = get_input('nombre');
$tags = string_to_tag_array(get_input('tags'));

$test = new ElggObject();
$test->title = $title;
$test->description = $body;
$test->tags = null;
$test->email = $email;
$test->nombre = $nombre;

$test->subtype = 'test';

$test->access_id = ACCESS_PUBLIC;

//$test->owner_guid = elgg_get_logged_in_user_guid();


if ($test->save()) {
   system_message("Guardado.");
   forward($test->getURL());
} else {
   register_error("Problema al guardar.");
   forward(REFERER);
}