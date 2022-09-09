<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;

class About extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('About me - main', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'about';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple About block.', 'sage');

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
            'multiple' => false,
            'jsx' => true,
        ];


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
            'text' => $this->text(),
            'subtitle' => $this->subtitle(),
            'list' => $this->list(),
            'list_icon' => $this->list_icon(),
            'list_title' => $this->list_title(),
            'list_text' => $this->list_text(),
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
        $about = new FieldsBuilder('about');

        $about
            ->addText('title', [
                'label' => 'Title',
                'wrapper' => [
                    'width' => '30',
                ]
            ])
            ->addTextarea('text', [
                'label' => 'Text',
                'wrapper' => [
                    'width' => '70',
                ],
                'rows' => '2',
                'new_lines' => '',
            ])
            ->addText('subtitle', [
                'label' => 'Subtitle',
                'wrapper' => [
                    'width' => '30',
                ],
            ])
            ->addRepeater('list', [
                'label' => 'Services',
                'instructions' => '',
                'wrapper' => [
                    'width' => '70',
                ],
                'collapsed' => 'list_title',
                'layout' => 'block',
                'button_label' => '',
            ])
            ->addText('list_icon', [
                'label' => 'Icon',
                'wrapper' => [
                    'width' => '20',
                ],
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
                    'width' => '60',
                ],
                'rows' => '2',
            ])

            ->endRepeater()

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

        return $about->build();
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

    public function text()
    {
        return get_field('text');
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


    }
}
