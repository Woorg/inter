<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Whatido extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('What i do', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'whatido';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple What i do block.', 'sage');

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
            'align' => true,
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

        $this->styles = [];


        /**
         * The block preview example data.
         *
         * @var array
         */

        $this->example = [];


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
            'image' => $this->image(),
            'title' => $this->title(),
            'subtitle' => $this->subtitle(),
            'list' => $this->list(),
            'list_icon' => $this->list_icon(),
            'list_title' => $this->list_title(),
            'list_text' => $this->list_text(),
            'list_text_second' => $this->list_text_second(),
            'list_inner' => $this->list_inner(),
            'list_item' => $this->list_item(),

        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $whatido = new FieldsBuilder('whatido');

        $whatido
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
            ->addText('title', [
                'label' => 'Title',
                'wrapper' => [
                    'width' => '40',
                ]
            ])
            ->addTextarea('subtitle', [
                'label' => 'SubTitle',
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addRepeater('list', [
                'label' => 'List',
                'instructions' => '',
                'wrapper' => [
                    'width' => '',
                ],
                'layout' => 'block',
                'button_label' => '',
            ])
            ->addText('list_icon', [
                'label' => 'Icon',
                'instructions' => '',
                'wrapper' => [
                    'width' => '30',
                    'class' => '',
                    'id' => '',
                ],
            ])
            ->addText('list_title', [
                'label' => 'Title',
                'wrapper' => [
                    'width' => '70',
                ],
            ])
            ->addTextarea('list_text', [
                'label' => 'Text',
                'wrapper' => [
                    'width' => '',
                ],
                'rows' => 3,
            ])
            ->addTextarea('list_text_second', [
                'label' => 'Text',
                'wrapper' => [
                    'width' => '',
                ],
                'rows' => 3,

            ])

            ->addRepeater('list_inner', [
                'label' => 'List',
                'instructions' => '',
                'wrapper' => [
                    'width' => '',
                ],
                'layout' => 'block',
                'button_label' => '',
            ])
            ->addTextarea('list_item', [
                'label' => 'Text',
                'wrapper' => [
                    'width' => '',
                ],
                'rows' => 3,

            ])

            ->endRepeater();


        return $whatido->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function image()
    {
        return get_field('image');
    }

    public function title()
    {
        return get_field('title');
    }

    public function subtitle()
    {
        return get_field('subtitle');
    }

    public function list()
    {
        return get_field('list');
    }

    public function list_icon()
    {
        return get_field('list_icon');
    }

    public function list_title()
    {
        return get_field('list_title');
    }

    public function list_text()
    {
        return get_field('list_text');
    }

    public function list_text_second()
    {
        return get_field('list_text_second');
    }

    public function list_inner()
    {
        return get_field('list_inner');
    }

    public function list_item()
    {
        return get_field('list_item');
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
