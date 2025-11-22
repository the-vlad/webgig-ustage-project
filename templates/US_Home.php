<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Class UF Home Template Fields
 */

class US_Home {

    public function __construct()
    {
        add_action( 'acf/init', array($this, 'addFields' ));
    }   

    public function addFields() {
        $home_schema = new FieldsBuilder('template_fields');
        $home_schema

        ->addGroup('hero',['min' => 1,
        'label' => 'Hero - section',
        'layout' => 'block'])

        ->addWysiwyg('hero_description', [
            'label' => __('Hero description')
        ])

        ->addImage('hero_image', [
            'label' => 'Background Image',
            'instructions' => '',
            'required' => 0,
            'return_format' => 'url',
        ])

        ->addImage('hero_second_image', [
            'label' => 'Front image',
            'instructions' => '',
            'required' => 0,
            'return_format' => 'url',
        ])

        ->endGroup()


        ->addGroup('services',['min' => 1,
        'label' => 'Services - section',
        'layout' => 'block'])

        ->addText('the_heading', [
            'label' => __('Heading')
        ])

        ->addWysiwyg('the_description', [
            'label' => __('Services description')
        ])
            ->addRepeater('item',['min' => 1,
            'label' => 'Add block',
            'layout' => 'block'])
                ->addText('the_icon', [
                    'label' => __('Icon')
                ])
                ->addText('the_title', [
                    'label' => __('Title')
                ])
                ->addTextArea('the_text', [
                    'label' => __('Text')
                ])

            ->endRepeater()
        ->endGroup()

        ->addGroup('process',['min' => 1,
        'label' => 'Gallery - section',
        'layout' => 'block'])



         ->addText('the_heading', [
                'label' => __('Heading')
            ])

        ->addRepeater('item',['min' => 1,
            'label' => 'Add block',
            'layout' => 'block'])
         
            
                ->addImage('image', [
                    'label' => 'Image',
                    'instructions' => '',
                    'required' => 0,
                    'return_format' => 'url',
                ])

                ->addText('the_title', [
                    'label' => __('Heading')
                ])
    
                ->endRepeater()


        ->endGroup()






        ->addGroup('pricing',['min' => 1,
        'label' => 'Pricing - section',
        'layout' => 'block'])


        ->addImage('pricing_image', [
            'label' => 'Background Image',
            'instructions' => '',
            'required' => 0,
            'return_format' => 'url',
        ])

        ->addText('the_heading', [
            'label' => __('Heading')
        ])

        ->addWysiwyg('the_description', [
            'label' => __('Pricing description')
        ])

        ->addRepeater('item', [
            'min' => 1,
            'label' => 'Add block',
            'layout' => 'block'
        ])
            ->addText('the_title', [
                'label' => __('Title')
            ])
            ->addText('the_price', [
                'label' => __('Price')
            ])
            ->addWysiwyg('features', [
                'label' => __('Description')
            ])

        ->endRepeater()

     
        ->endGroup()





        ->addGroup('project',['min' => 1,
        'label' => 'Projects - section',
        'layout' => 'block'])
  
            ->addText('project_title', [
                'label' => __('Title')
            ])
            ->addWysiwyg('project_desc', [
                'label' => __('Description')
            ])

        ->endGroup()

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


     $home_schema
        ->setLocation('post_template', '==', 'front-template.php');
        acf_add_local_field_group($home_schema->build());
   
    }
}