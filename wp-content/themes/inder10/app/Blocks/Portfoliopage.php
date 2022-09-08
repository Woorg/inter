<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Portfoliopage extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('My Portfolio - page', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'portfoliopage';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple Portfoliopage block.', 'sage');

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
            'subtitle' => $this->subtitle(),
            'cases' => $this->query_cases(),

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
            ->addMessage('message_field', 'message', [
                'label' => 'Get all from Cases',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'message' => ' ',
                'esc_html' => 0,
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

    public function query_cases()
    {
        $attrs = [
            'post_type' => 'case',
            'posts_per_page' => -1,
            'orderby' => 'id',
            'order' => 'ASC',
            'no_found_rows' => false,
            'cache_results' => true,
        ];

        $query = new \WP_Query();
        return $cases = $query->query($attrs);
    }

}
