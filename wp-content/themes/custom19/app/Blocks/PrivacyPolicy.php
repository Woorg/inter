<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PrivacyPolicy extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('Privacy Policy', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'privacypolicy';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple Privacy  Policy block.', 'sage');

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
            'email' => $this->email(),
            'list' => $this->list(),
            'list_title' => $this->list_title(),
            'list_text' => $this->list_text(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $privacyPolicy = new FieldsBuilder('privacy_policy');

        $privacyPolicy
            ->addText('title', [
                'label' => 'Title',
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addText('email', [
                'label' => 'Privacy email',
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
            ->addText('list_title', [
                'label' => 'Title',
                'wrapper' => [
                    'width' => '50',
                ],
            ])
            ->addTextarea('list_text', [
                'label' => 'Text',
                'wrapper' => [
                    'width' => '50',
                ],
            ])
            ->endRepeater();

        return $privacyPolicy->build();
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

    public function email()
    {
        return get_field('email');
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
