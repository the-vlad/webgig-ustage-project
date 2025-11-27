<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Class US Login Template Fields
 */

class US_Login {

    public function __construct()
    {
        add_action( 'acf/init', array($this, 'addFieldsLogin' ));
    }   

    public function addFieldsLogin() {
        $login_schema = new FieldsBuilder('loginfields');
        $login_schema


            ->addWysiwyg('login_desc', [
                'label' => __('Title & Text')
            ])

            ->addImage('login_image', [
                'label' => 'Background Image',
                'instructions' => '',
                'required' => 0,
                'return_format' => 'url',
            ]);

     

     $login_schema
        ->setLocation('post_template', '==', 'login-template.php');
        acf_add_local_field_group($login_schema->build());
   
    }
}