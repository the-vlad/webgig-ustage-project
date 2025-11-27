<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Class US Reset Template Fields
 */

class US_Reset {

    public function __construct()
    {
        add_action( 'acf/init', array($this, 'addFieldsReset' ));
    }   

    public function addFieldsReset() {
        $reset_schema = new FieldsBuilder('resetfields');
        $reset_schema


            ->addWysiwyg('reset_desc', [
                'label' => __('Title & Text')
            ])

            ->addImage('reset_image', [
                'label' => 'Background Image',
                'instructions' => '',
                'required' => 0,
                'return_format' => 'url',
            ]);

     

     $reset_schema
        ->setLocation('post_template', '==', 'reset-template.php');
        acf_add_local_field_group($reset_schema->build());
   
    }
}