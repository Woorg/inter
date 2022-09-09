<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class themeoptions extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Theme settings';

    /**
     * The option page menu slug.
     *
     * @var string
     */
    public $slug = 'themeoptions';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Theme settings | Theme Options';

    /**
     * The option page permission capability.
     *
     * @var string
     */
    public $capability = 'edit_theme_options';


    /**
     * The option page menu position.
     *
     * @var int
     */
    public $position = PHP_INT_MAX;


    /**
     * The slug of another admin page to be used as a parent.
     *
     * @var string
     */
    public $parent = null;

    /**
     * Redirect to the first child page if one exists.
     *
     * @var boolean
     */
    public $redirect = false;


    /**
     * The option page autoload setting.
     *
     * @var bool
     */
    public $autoload = true;


    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $themeoptions = new FieldsBuilder('Настройки темы');

        $themeoptions
            ->addTab('general', [
                'label' => 'General',
            ])
            ->addImage('logo_light', [
                'label' => 'Logo light theme',
                'wrapper' => [
                    'width' => '50',
                ],
                'return_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ])
            ->addImage('logo_dark', [
                'label' => 'Logo dark theme',
                'wrapper' => [
                    'width' => '50',
                ],
                'return_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ])
            ->addText('email', [
                'label' => 'Email',
            ])
            ->addText('phone', [
                'label' => 'Phone',
            ])
            ->addTextarea('copyright', [
                'label' => 'Copyright',
                'rows' => '2',
                'new_lines' => 'br', // Possible values are 'wpautop', 'br', or ''.
            ])
            ->addPageLink('privacy_link', [
                'label' => 'Privacy link',
                'type' => 'page_link',
                'instructions' => '',
                'post_type' => ['page'],
                'taxonomy' => [],
                'allow_null' => 0,
                'allow_archives' => 1,
                'multiple' => 0,
            ])
            ->addTab('footer', [
                'label' => 'Подвал',
            ])
            ->addGroup('lets_work_group', [
                'label' => 'Let’s work block',
                'instructions' => '',
                'layout' => 'block',
            ])
            ->addText('lets_work_title', [
                'label' => 'Title',
                'instructions' => '',
                'wrapper' => [
                    'width' => '40',
                ]
            ])
            ->addTextarea('lets_work_text', [
                'label' => 'Text',
                'instructions' => '',
                'wrapper' => [
                    'width' => '60',
                ],
                'rows' => '2',
                'new_lines' => '', // Possible values are 'wpautop', 'br', or ''.
            ])
            ->addText('lets_work_button', [
                'label' => 'Button text',
                'instructions' => '',
            ])
            ->endGroup()

            ->addGroup('email_group', [
                'label' => 'Email block',
                'instructions' => '',
                'layout' => 'block',
            ])
            ->addText('email_title', [
                'label' => 'Title',
                'instructions' => '',
                'wrapper' => [
                    'width' => '40',
                ]
            ])
            ->addText('email_link', [
                'label' => 'Email',
                'instructions' => '',
                'wrapper' => [
                    'width' => '60',
                ]
            ])
            ->endGroup()

            ->addGroup('social_group', [
                'label' => 'Social block',
                'instructions' => '',
                'required' => 0,
                'layout' => 'block',
            ])
            ->addText('social_title', [
                'label' => 'Title',
                'instructions' => '',
                'wrapper' => [
                    'width' => '40',
                ]
            ])
            ->addRepeater('social_list', [
                'label' => 'Social list',
                'instructions' => '',
                'wrapper' => [
                    'width' => '60',
                ],
                'layout' => 'table',
                'button_label' => '',
            ])
            ->addText('social_icon', [

                'label' => 'Social icon',
                'instructions' => 'icomoon icon',
                'required' => 0,
                'wrapper' => [
                    'width' => '30',
                    'class' => '',
                    'id' => '',
                ],
            ])
            ->addText('social_link', [
                'label' => 'Social link',
                'maxlength' => '',
                'wrapper' => [
                    'width' => '70',
                    'class' => '',
                    'id' => '',
                ]
            ])
            ->endGroup();



        return $themeoptions->build();
    }
}
