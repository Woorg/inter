<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Statistics extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('My Statistics', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'statistics';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple Statistics block.', 'sage');

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
            'num' => $this->num(),
            'sign' => $this->sign(),
            'text' => $this->text(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $statistics = new FieldsBuilder('statistics');

        $statistics
            ->addText('title', [
                'label' => 'Title',
                'wrapper' => [
                    'width' => '30',
                ]
            ])
            ->addRepeater('list', [
                'label' => 'Services',
                'instructions' => '',
                'wrapper' => [
                    'width' => '70',
                ],
                'layout' => 'block',
                'button_label' => '',
            ])
            ->addText('num', [
                'label' => 'Numbers',
                'wrapper' => [
                    'width' => '20',
                ],
            ])
            ->addText('sign', [
                'label' => 'Sign',
                'wrapper' => [
                    'width' => '10',
                ],
            ])
            ->addText('text', [
                'label' => 'Text',
                'wrapper' => [
                    'width' => '70',
                ],
            ])
            ->endRepeater();


        return $statistics->build();
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

    public function num()
    {
        return get_field('num');
    }

    public function sign()
    {
        return get_field('sign');
    }

    public function text()
    {
        return get_field('text');
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
