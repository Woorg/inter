<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Skills extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('My Skills', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'skills';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple Skills block.', 'sage');

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
            'list' => $this->list(),
            'list_title' => $this->list_title(),
            'list_text' => $this->list_text(),
            'image' => $this->image(),
            'thumb' => $this->thumb(),
            'video_link' => $this->video_link(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $skills = new FieldsBuilder('skills');

        $skills
            ->addText('title', [
                'label' => 'Title',
                'wrapper' => [
                    'width' => '30',
                ]
            ])
            ->addRepeater('list', [
                'label' => 'Skills',
                'instructions' => '',
                'wrapper' => [
                    'width' => '70',
                ],
                'collapsed' => 'list_title',
                'layout' => 'block',
                'button_label' => '',
            ])
            ->addText('list_title', [
                'label' => 'Title',
                'wrapper' => [
                    'width' => '20',
                ],
            ])
            ->addTextarea('list_text', [
                'label' => 'Text',
                'wrapper' => [
                    'width' => '80',
                ],
                'rows' => '3',
                'new_lines' => 'wpautop'
            ])

            ->endRepeater()

            ->addImage('image', [
                'label' => 'Image',
                'instructions' => '',
                'wrapper' => [
                    'width' => '20',
                    'class' => '',
                    'id' => '',
                ],
                'return_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ])

            ->addImage('thumb', [
                'label' => 'Thumbnail',
                'instructions' => '',
                'wrapper' => [
                    'width' => '20',
                    'class' => '',
                    'id' => '',
                ],
                'return_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ])
            ->addText('video_link', [
                'label' => 'Youtube video',
                'wrapper' => [
                    'width' => '60',
                ],
            ]);

        return $skills->build();
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

    public function list()
    {
        return get_field('list');
    }

    public function list_title()
    {
        return get_field('list_title');
    }

    public function list_text()
    {
        return get_field('list_text');
    }

    public function image()
    {
        return get_field('image');
    }

    public function thumb()
    {
        return get_field('thumb');
    }

    public function video_link()
    {
        return get_field('video_link');
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
