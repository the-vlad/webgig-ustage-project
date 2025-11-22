<?php

if (!defined('ABSPATH')) {
    exit;
}

use StoutLogic\AcfBuilder\FieldsBuilder;

class US_Projects
{
    private const CPT_NAME = 'project';
    private const TAXONOMY = 'project_category';

    public function __construct()
    {
        add_action('init', [$this, 'registerCPT']);
        add_action('init', [$this, 'registerTaxonomy']); // <-- ADD THIS
        add_action('acf/init', [$this, 'registerACFFields']);
    }

    public function registerCPT(): void
    {
        register_post_type(self::CPT_NAME, [
            'label' => __('Projects', 'mounti-app'),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_icon' => 'dashicons-portfolio',
            'capability_type' => 'post',
            'supports' => [
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'custom-fields',
                'revisions',
            ],
            'has_archive' => false,
            'taxonomies' => [self::TAXONOMY], // Optional but useful
        ]);
    }

    public function registerTaxonomy(): void
    {
        register_taxonomy(self::TAXONOMY, self::CPT_NAME, [
            'label' => __('Project Categories', 'mounti-app'),
            'public' => true,
            'hierarchical' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'rewrite' => ['slug' => 'project-category'],
            'show_in_rest' => true, // Enables Gutenberg and REST
        ]);
    }

    public function registerACFFields(): void
    {
        $fields = new FieldsBuilder('project_fields');
    
        $fields
            ->addText('project_name', [
                'label' => 'Project Name',
            ])

            ->addText('project_technologies', [
                'label' => 'Project Technologies',
            ])

            ->addWysiwyg('project_description', [
                'label' => 'Description',
                'rows' => 4,
            ])
            ->addImage('project_second_image', [
                'label' => 'Second Image',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ])
            ->addUrl('project_url', [
                'label' => 'Project URL',
            ])
            ->addUrl('project_video', [
                'label' => 'Project Video URL',
            ])
            ->addSelect('project_progress', [
                'label' => 'Project Progress',
                'choices' => [
                    'new' => 'New',
                    'in_progress' => 'In Progress',
                    'completed' => 'Completed',
                ],
                'default_value' => 'in_progress',
                'return_format' => 'value',
                'allow_null' => 0,
                'ui' => 1,
            ]);


            // ->addImage('project_third_image', [
            //     'label' => 'Third Image',
            //     'return_format' => 'url',
            //     'preview_size' => 'medium',
            // ])

            // ->addWysiwyg('project_identity', [
            //     'label' => 'Identity',
            // ])

            // ->addWysiwyg('project_function', [
            //     'label' => 'Function',
            // ]);
    
        $fields->setLocation('post_type', '==', self::CPT_NAME);
    
        acf_add_local_field_group($fields->build());
    }
    
}
