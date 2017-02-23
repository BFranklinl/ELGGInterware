<?php

echo elgg_view_field([
    '#type' => 'text',
    '#label' => elgg_echo('Correo electrónico'),
    'name' => 'email',
    'required' => true,
]);

echo elgg_view_field([
    '#type' => 'text',
    '#label' => elgg_echo('Nombre'),
    'name' => 'nombre',
    'required' => true,
]);

$submit = elgg_view_field(array(
    '#type' => 'submit',
    '#class' => 'elgg-foot',
    'value' => elgg_echo('save'),
));

elgg_set_form_footer($submit);