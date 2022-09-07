<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Reviews extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('Reviews', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'reviews';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple Reviews block.', 'sage');

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
            'reviews' => $this->reviews(),
            'reviews_name' => $this->reviews_name(),
            'reviews_text' => $this->reviews_text(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $reviews = new FieldsBuilder('reviews');

        $reviews
            ->addText('title', [
                'label' => 'Title',
                'wrapper' => [
                    'width' => '20',
                ]
            ])
            ->addText('subtitle', [
                'label' => 'subTitle',
                'wrapper' => [
                    'width' => '20',
                ]
            ])
            ->addRepeater('reviews', [
                'label' => 'Reviews',
                'instructions' => '',
                'wrapper' => [
                    'width' => '60',
                ],
                'collapsed' => 'reviews_name',
                'layout' => 'block',
                'button_label' => '',
            ])
            ->addText('reviews_name', [
                'label' => 'Name',
                'wrapper' => [
                    'width' => '40',
                ]
            ])
            ->addTextarea('reviews_text', [
                'label' => 'Text',
                'wrapper' => [
                    'width' => '60',
                ],
                'rows' => 3
            ])

            ->endRepeater();

        return $reviews->build();
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

    public function reviews()
    {
        return get_field('reviews');
    }

    public function reviews_name()
    {
        return get_field('reviews_name');
    }

    public function reviews_text()
    {
        return get_field('reviews_text');
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
