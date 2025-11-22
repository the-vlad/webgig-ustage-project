<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Class UF Contact Template Fields
 */

class US_Team {

    public function __construct()
    {
        add_action( 'acf/init', array($this, 'addFieldsContact' ));
    }   

    public function addFieldsContact() {
        $contact_schema = new FieldsBuilder('team_fields');
        $contact_schema

        ->addGroup('hero',['min' => 1,
        'label' => 'Hero - section',
        'layout' => 'block'])


            ->addImage('hero_image', [
                'label' => 'Background Image',
                'instructions' => '',
                'required' => 0,
                'return_format' => 'url',
            ])

            ->addText('hero_title', [
                'label' => __('Hero title')
            ])


            ->addWysiwyg('hero_desc', [
                'label' => __('Hero description')
            ])

        ->endGroup()
     



        ->addRepeater('member', [
            'min' => 1,
            'label' => 'Add block',
            'layout' => 'block'
        ])

            ->addImage('member_image', [
                'label' => 'Member Image',
                'instructions' => '',
                'required' => 0,
                'return_format' => 'url',
            ])

            ->addText('the_name', [
                'label' => __('Name')
            ])
            ->addText('the_position', [
                'label' => __('Position')
            ])
            ->addWysiwyg('the_desc', [
                'label' => __('Description')
            ])

        ->endRepeater()


        ->addGroup('cta',['min' => 1,
        'label' => 'Click to Action - section',
        'layout' => 'block'])
            ->addImage('cta_image', [
                'label' => 'Background Image',
                'instructions' => '',
                'required' => 0,
                'return_format' => 'url',
            ])

            ->addWysiwyg('cta_content', [
                'label' => __('Content')
            ])

            ->addText('button_url', [
                'label' => __('Button link')
            ])

            ->addText('button_text', [
                'label' => __('Button name')
            ])
        ->endGroup();


     $contact_schema
        ->setLocation('post_template', '==', 'team-template.php');
        acf_add_local_field_group($contact_schema->build());
   
    }
}