<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Class US Customer Template Fields
 */

class US_CustomerForm {

    public function __construct()
    {
        add_action( 'acf/init', array($this, 'addFieldsCustom' ));
    }   

    public function addFieldsCustom() {
        $custom_schema = new FieldsBuilder('custom_fields');
        $custom_schema


            ->addWysiwyg('custom_desc', [
                'label' => __('Title & Text')
            ])

            ->addImage('custom_image', [
                'label' => 'Background Image',
                'instructions' => '',
                'required' => 0,
                'return_format' => 'url',
            ]);

     

     $custom_schema
        ->setLocation('post_template', '==', 'customer-registration-template.php');
        acf_add_local_field_group($custom_schema->build());
   
    }
}