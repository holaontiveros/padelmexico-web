<?php

$sep_id  = 4574;
$section = 'header_sticky';

Kirki::add_field( 'juliette', array(
    'type'        => 'toggle',
    'settings'    => 'enable_header_sticky',
    'label'       => esc_html__( 'Enable Sticky Header', 'juliette' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,

) );
