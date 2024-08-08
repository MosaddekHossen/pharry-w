<?php
new \Kirki\Panel(
    'panel_id',
    [
        'priority'    => 10,
        'title'       => esc_html__('My Panel', 'kirki'),
        'description' => esc_html__('My Panel Description.', 'kirki'),
    ]
);

new \Kirki\Section(
	'section_id',
	[
		'title'       => esc_html__( 'My Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'text_setting',
		'label'    => esc_html__( 'Text Control', 'kirki' ),
		'section'  => 'section_id',
		'default'  => esc_html__( 'This is a default value', 'kirki' ),
		'priority' => 10,
	]
);