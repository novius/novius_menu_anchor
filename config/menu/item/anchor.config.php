<?php
\Nos\I18n::current_dictionary(array('novius_menu_anchor::default'));

return array(
    'name'       => __('Anchor'),
    'texts'      => array(
        'add' => __('Add a link to an anchor'),
        'new' => __('New anchor'),
    ),
    'icon'       => 'static/apps/novius_menu_anchor/img/menu/anchor.png',

    // Allowed EAV attributes
    'attributes' => array(
        'anchor'
    ),

    'view'       => 'novius_menu_anchor::menu/driver/anchor',

    'admin'      => array(
        'layout' => array(
            'standard' => array(
                'view'   => 'nos::form/accordion',
                'params' => array(
                    'accordions' => array(
                        'main' => array(
                            'fields' => array(
                                'mitem__anchor',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'fields' => array(
            'mitem__anchor' => array(
                'label'  => __("Anchor without '#'"),
                'form'   => array(
                    'type' => 'text',
                ),
                'expert' => true,
            ),
        ),
    ),
);
