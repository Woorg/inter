<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Aboutpage extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('About - page', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'aboutpage';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple About Page block.', 'sage');

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

        /**
         * The block preview example data.
         *
         * @var array
         */

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
            'text_second' => $this->text_second(),
            'image' => $this->image(),
            'video' => $this->video(),
            'video_thumb' => $this->video_thumb(),

        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $aboutPage = new FieldsBuilder('about_page');

        $aboutPage
            ->addText('title', [
                'label' => 'Title',
                'wrapper' => [
                    'width' => '30',
                ]
            ])
            ->addTextarea('text', [
                'label' => 'Text',
                'wrapper' => [
                    'width' => '35',
                ],
                'rows' => '3',
                'new_lines' => '',
            ])
            ->addTextarea('text_second', [
                'label' => 'Text second',
                'wrapper' => [
                    'width' => '35',
                ],
                'rows' => '3',
                'new_lines' => '',
            ])
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
            ->addText('video', [
                'label' => 'Youtube Video',
                'wrapper' => [
                    'width' => '60',
                ]
            ])
            ->addImage('video_thumb', [
                'label' => 'Video thumb',
                'instructions' => '',
                'wrapper' => [
                    'width' => '20',
                    'class' => '',
                    'id' => '',
                ],
                'return_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ]);

        return $aboutPage->build();
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

    public function text_second()
    {
        return get_field('text_second');
    }

    public function image()
    {
        return get_field('image');
    }

    public function video()
    {
        return get_field('video');
    }

    public function video_thumb()
    {
        return get_field('video_thumb');
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
