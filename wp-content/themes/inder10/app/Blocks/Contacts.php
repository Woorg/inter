<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Contacts extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('Contacts', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'contacts';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple Contacts block.', 'sage');

        /**
         * The block category.
         *
         * @var string
         */
        $this->category = 'common';

        /**
         * The block icon.
         *
         * @var string|array
         */
        $this->icon = 'editor-ul';

        /**
         * The block keywords.
         *
         * @var array
         */
        $this->keywords = [];

        /**
         * The block post type allow list.
         *
         * @var array
         */
        $this->post_types = [];

        /**
         * The parent block type allow list.
         *
         * @var array
         */
        $this->parent = [];

        /**
         * The default block mode.
         *
         * @var string
         */
        $this->mode = 'edit';

        /**
         * The default block alignment.
         *
         * @var string
         */
        $this->align = '';

        /**
         * The default block text alignment.
         *
         * @var string
         */
        $this->align_text = '';

        /**
         * The default block content alignment.
         *
         * @var string
         */
        $this->align_content = '';

        /**
         * The supported block features.
         *
         * @var array
         */
        $this->supports = [
            'align' => false,
            'align_text' => false,
            'align_content' => false,
            'full_height' => false,
            'anchor' => false,
            'mode' => false,
            'multiple' => true,
            'jsx' => true,
        ];

        /**
         * The block styles.
         *
         * @var array
         */
        // $this->styles = [
        //     [
        //         'name' => 'light',
        //         'label' => 'Light',
        //         'isDefault' => true,
        //     ],
        //     [
        //         'name' => 'dark',
        //         'label' => 'Dark',
        //     ]
        // ];

        /**
         * The block preview example data.
         *
         * @var array
         */
        // $this->example = [
        //    'items' => [
        //        ['item' => 'Item one'],
        //        ['item' => 'Item two'],
        //        ['item' => 'Item three'],
        //    ],
        // ];

        parent::__construct($app);
    }

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title' => $this->title(),
            'form' => $this->form(),
            'image' => $this->image(),
            'address' => $this->address(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $contacts = new FieldsBuilder('contacts');

        $contacts
            ->addText('title', [
                'label' => 'Title',
                'wrapper' => [
                    'width' => '20',
                ],
            ])
            ->addText('form', [
                'label' => 'Form',
                'wrapper' => [
                    'width' => '40',
                ],
            ])
            ->addImage('image', [
                'label' => 'Image',
                'instructions' => '',
                'wrapper' => [
                    'width' => '10',
                    'class' => '',
                    'id' => '',
                ],
                'return_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ])
            ->addTextarea('address', [
                'label' => 'Address',
                'wrapper' => [
                    'width' => '30',
                ],
                'rows' => 2
            ]);


        return $contacts->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function title()
    {
        return get_field('title');
    }

    public function form()
    {
        return get_field('form');
    }

    public function image()
    {
        return get_field('image');
    }

    public function address()
    {
        return get_field('address');
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
