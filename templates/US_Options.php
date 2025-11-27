<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Class UF Home Template Fields
 */

class US_Options {

    public function __construct()
    {
        add_action( 'acf/init', array($this, 'addFields' ));
    }   

    public function addFields() {
        $options_schema = new FieldsBuilder('options_fields');
        $options_schema
            ->addImage('header_logo', [
                'label' => 'Header Logo',
                'instructions' => '',
                'required' => 0,
                'return_format' => 'url',
            ])

            ->addRepeater('social',['min' => 1,
            'label' => 'Socials',
            'layout' => 'block'])
    
                ->addImage('social_icon', [
                    'label' => 'Icon',
                    'instructions' => '',
                    'required' => 0,
                    'return_format' => 'url',
                ])

                ->addText('social_url', [
                    'label' => ' Link',
                ])
        
            ->endRepeater()

            ->addWysiwyg('add_text', [
                'label' => 'Email/phone',
            ])
        
        
            ->addGroup('button',['min' => 1,
                'label' => 'Button',
                'layout' => 'block'])

            ->addText('button_url', [
                'label' => __('Button url')
            ])

            ->addText('button_text', [
                'label' => __('Button name')
            ])

        ->endGroup()
        
            ->addImage('footer_logo', [
                'label' => 'Footer Logo',
                'instructions' => '',
                'required' => 0,
                'return_format' => 'url',
            ])

         ->addWysiwyg('footer_description', [
            'label' => __('Footer description')
            ])

          ->addText('footer_copyright', [
                'label' => __('Copyright text')
            ]);

   
     $options_schema
        ->setLocation('options_page', '==', 'theme-settings');	
	    acf_add_local_field_group($options_schema->build());
    }
}