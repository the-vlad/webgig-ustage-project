<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Class US Entertainer Template Fields
 */

class US_EntertainerForm {

    public function __construct()
    {
        add_action( 'acf/init', array($this, 'addFieldsEreg' ));
    }   

    public function addFieldsEreg() {
        $ereg_schema = new FieldsBuilder('ereg_fields');
        $ereg_schema


            ->addWysiwyg('ereg_desc', [
                'label' => __('Title & Text')
            ])

            ->addImage('ereg_image', [
                'label' => 'Background Image',
                'instructions' => '',
                'required' => 0,
                'return_format' => 'url',
            ]);

     

     $ereg_schema
        ->setLocation('post_template', '==', 'entertainer-registration-template.php');
        acf_add_local_field_group($ereg_schema->build());
   
    }
}