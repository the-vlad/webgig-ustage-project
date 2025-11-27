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

        ->addWysiwyg('hero_title', [
            'label' => __('Hero Title')
        ])

             ->addGroup('button1',['min' => 1,
        'label' => 'Button #1',
        'layout' => 'block'])
            ->addText('button_name', [
                    'label' => ' Name',
                ])

                   ->addText('button_url', [
                    'label' => 'Url',
                ])
                    ->endGroup()


        ->addGroup('button2',['min' => 1,
        'label' => 'Button #2',
        'layout' => 'block'])
            ->addText('button_name', [
                    'label' => 'Name',
                ])

                   ->addText('button_url', [
                    'label' => 'Url',
                ])
            ->endGroup()

       ->addImage('bottom_hero_img', [
                    'label' => 'Bottom Hero Image',
                    'instructions' => '',
                    'required' => 0,
                    'return_format' => 'url',
       ])



          ->addRepeater('services1',['min' => 1,
            'max' => 4,
            'label' => 'Services row 1',
            'layout' => 'block'])
    
                ->addImage('social_icon', [
                    'label' => 'Icon',
                    'instructions' => '',
                    'required' => 0,
                    'return_format' => 'url',
                ])

                ->addText('service_url', [
                    'label' => ' Name',
                ])

        
            ->endRepeater()
        



                ->addRepeater('services2',['min' => 1,
            'max' => 3,
            'label' => 'Services row 2',
            'layout' => 'block'])
    
                ->addImage('service_icon', [
                    'label' => 'Icon',
                    'instructions' => '',
                    'required' => 0,
                    'return_format' => 'url',
                ])

                ->addText('service_url', [
                    'label' => ' Name',
                ])

        
            ->endRepeater()


        ->addRepeater('services3',['min' => 1,
            'max' => 2,
            'label' => 'Service row 3',
            'layout' => 'block'])
    
                ->addImage('service_icon', [
                    'label' => 'Icon',
                    'instructions' => '',
                    'required' => 0,
                    'return_format' => 'url',
                ])

                ->addText('service_url', [
                    'label' => ' Name',
                ])

        
            ->endRepeater()



        ->endGroup()


        ->addGroup('enter',['min' => 1,
        'label' => 'Entertainer - section',
        'layout' => 'block'])
           ->addWysiwyg('text', [
            'label' => __('Title & Text')
        ])  

             ->addGroup('button',['min' => 1,
        'label' => 'Button',
        'layout' => 'block'])
            ->addText('button_name', [
                    'label' => ' Name',
                ])

                   ->addText('button_url', [
                    'label' => 'Url',
                ])
                    ->endGroup()


 ->addRepeater('cards',['min' => 1,
            'max' => 3,
            'label' => 'Cards',
            'layout' => 'block'])
    
                ->addImage('icon', [
                    'label' => 'Icon',
                    'instructions' => '',
                    'required' => 0,
                    'return_format' => 'url',
                ])

                ->addText('card_txt', [
                    'label' => ' Text',
                ])

        
            ->endRepeater()

        ->endGroup()













        ->addGroup('customer',['min' => 1,
        'label' => 'Customer - section',
        'layout' => 'block'])
           ->addWysiwyg('text', [
            'label' => __('Title & Text')
        ])  

             ->addGroup('button',['min' => 1,
        'label' => 'Button',
        'layout' => 'block'])
            ->addText('button_name', [
                    'label' => ' Name',
                ])

                   ->addText('button_url', [
                    'label' => 'Url',
                ])
                    ->endGroup()


 ->addRepeater('cards',['min' => 1,
            'max' => 3,
            'label' => 'Cards',
            'layout' => 'block'])
    
                ->addImage('icon', [
                    'label' => 'Icon',
                    'instructions' => '',
                    'required' => 0,
                    'return_format' => 'url',
                ])

                ->addText('card_txt', [
                    'label' => ' Text',
                ])

        
            ->endRepeater()

        ->endGroup()


        

             ->addGroup('faq',['min' => 1,
        'label' => 'FAQ - section',
        'layout' => 'block'])
           ->addWysiwyg('text', [
            'label' => __('Title & Text')
        ])  




 ->addRepeater('faq_box',['min' => 1,
            'label' => 'Cards',
            'layout' => 'block'])
    
     
                ->addText('title', [
                    'label' => ' Text',
                ])

                       ->addWysiwyg('desc', [
            'label' => __('Title & Text')
        ])  

        
            ->endRepeater()

        ->endGroup();

     $home_schema
        ->setLocation('post_template', '==', 'front-template.php');
        acf_add_local_field_group($home_schema->build());
   
    }
}