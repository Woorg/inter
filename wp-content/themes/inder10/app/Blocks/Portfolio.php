<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Portfolio extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('My Portfolio', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'portfolio';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple Portfolio block.', 'sage');

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
            'subtitle' => $this->subtitle(),
            'cases' => $this->cases(),
            'link' => $this->link(),
            'link_text' => $this->link_text(),

        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $portfolio = new FieldsBuilder('portfolio');

        $portfolio
            ->addText('title', [
                'label' => 'Title',
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addText('subtitle', [
                'label' => 'subTitle',
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            // ->addRepeater('list', [
            //     'label' => 'Services',
            //     'instructions' => '',
            //     'wrapper' => [
            //         'width' => '',
            //     ],
            //     'layout' => 'block',
            //     'button_label' => '',
            // ])
            // ->addText('list_title', [
            //     'label' => 'Title',
            //     'wrapper' => [
            //         'width' => '20',
            //     ],
            // ])

            ->addRelationship('cases', [
                'label' => 'Cases',
                'instructions' => '',
                'required' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'post_type' => ['case'],
                'taxonomy' => [],
                'filters' => [
                    0 => 'search',
                    1 => 'post_type',
                    2 => 'taxonomy',
                ],
                'elements' => '',
                'min' => '',
                'max' => '',
                'return_format' => 'object',
            ])

            // ->addImage('list_thumb', [
            //     'label' => 'Thumb',
            //     'instructions' => '',
            //     'wrapper' => [
            //         'width' => '',
            //         'class' => '',
            //         'id' => '',
            //     ],
            //     'return_format' => 'id',
            //     'preview_size' => 'thumbnail',
            //     'library' => 'all',
            // ])
            // ->addImage('list_image', [
            //     'label' => 'Image',
            //     'instructions' => '',
            //     'wrapper' => [
            //         'width' => '',
            //         'class' => '',
            //         'id' => '',
            //     ],
            //     'return_format' => 'id',
            //     'preview_size' => 'thumbnail',
            //     'library' => 'all',
            // ])
            // ->endRepeater()

            ->addPageLink('link', [
                'label' => 'Button Link',
                'type' => 'page_link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ],
                'post_type' => [],
                'taxonomy' => [],
                'allow_null' => 0,
                'allow_archives' => 1,
                'multiple' => 0,
            ])
            ->addText('link_text', [
                'label' => 'Button text',
                'wrapper' => [
                    'width' => '50',
                ],
            ]);

        return $portfolio->build();
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

    public function subtitle()
    {
        return get_field('subtitle');
    }

    public function cases()
    {
        return get_field('cases');
    }

    public function link()
    {
        return get_field('link');
    }

    public function link_text()
    {
        return get_field('link_text');
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
