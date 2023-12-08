<?php

return [
	'default_crops' => [
		'page_cover' => [
			'default' => [
				[
					'name' => 'default',
					'ratio' => 16 / 9,
				]
			]
		]
	],
	'block_editor' => [
		'use_twill_blocks' => [],
		'crops' => [
			'highlight' => [
				'desktop' => [
					[
						'name' => 'desktop',
						'ratio' => 16 / 9,
					],
				],
				'mobile' => [
					[
						'name' => 'mobile',
						'ratio' => 1,
					],
				],
			],
			'cover' => [
				'default' => [
					[
						'name' => 'default',
						'ratio' => 16 / 9,
					],
				],
				'mobile' => [
					[
						'name' => 'landscape',
						'ratio' => 16 / 9,
					],
				],
			],
		],
	],
	'media_library' => [
		'translated_form_fields' => true,
	],
];
