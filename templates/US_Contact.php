<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Class UF Contact Template Fields
 */

class US_Contact {

    public function __construct()
    {
        add_action( 'acf/init', array($this, 'addFieldsContact' ));
    }   

    public function addFieldsContact() {
        $contact_schema = new FieldsBuilder('contact_fields');
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
     

        ->addGroup('contact',['min' => 1,
        'label' => 'Contact - section',
        'layout' => 'block'])

            ->addText('contact_heading', [
                'label' => __('Contact title')
            ])

            ->addImage('ceo_image', [
                'label' => 'CEO Image',
                'instructions' => '',
                'required' => 0,
                'return_format' => 'url',
            ])

            ->addWysiwyg('contact_desc', [
                'label' => __('Contact text')
            ])

            
        ->endGroup()

       ->addGroup('cta',['min' => 1,
        'label' => 'CTA - section',
        'layout' => 'block'])

            ->addImage('cta_image', [
                'label' => 'Background Image',
                'instructions' => '',
                'required' => 0,
                'return_format' => 'url',
            ])

            ->addText('cta_title', [
                'label' => __('CTA title')
            ])

            ->addWysiwyg('cta_desc', [
                'label' => __('CTA Text')
            ])

        ->endGroup()


        ->addTextArea('map', [
            'label' => __('Map iFrame')
        ]);

     $contact_schema
        ->setLocation('post_template', '==', 'contact-template.php');
        acf_add_local_field_group($contact_schema->build());
   
    }
}