<?php
namespace Go_Legal_Ai_Addon;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Search_Product extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve oEmbed widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'Search Product';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve oEmbed widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Search Product', 'go-legal-ai-addon' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve oEmbed widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-code';
	}


	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the oEmbed widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'basic', 'go-legal-ai' ];
	}

	// Load CSS
	// public function get_style_depends() {

	// 	wp_register_style( 'guide-posts', plugins_url( '../assets/css/guide-posts.css', __FILE__ ));

	// 	return [
	// 		'guide-posts',
	// 	];

	// }

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the oEmbed widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	// public function get_keywords() {
	// 	return [ 'oembed', 'url', 'link' ];
	// }

	/**
	 * Register oEmbed widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'go-legal-ai-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'sesearch_product_list',
			[
				'label' => esc_html__( 'List', 'go-legal-ai-addon' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'search_product_text',
						'label' => esc_html__( 'Text', 'go-legal-ai-addon' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'placeholder' => esc_html__( 'List Item', 'go-legal-ai-addon' ),
						'default' => esc_html__( 'List Item', 'go-legal-ai-addon' ),
					],
					[
						'name' => 'search_product_icon',
						'label' => esc_html__( 'Icon', 'go-legal-ai-addon' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'placeholder' => esc_html__( 'List Item', 'go-legal-ai-addon' ),
						'default' => esc_html__( 'List Item', 'go-legal-ai-addon' ),
					],
					[
						'name' => 'search_product_link',
						'label' => esc_html__( 'Link', 'go-legal-ai-addon' ),
						'type' => \Elementor\Controls_Manager::URL,
						'placeholder' => esc_html__( 'https://your-link.com', 'go-legal-ai-addon' ),
					],
				],
				'default' => [
					[
						'search_product_text' => esc_html__( 'List Item #1', 'go-legal-ai-addon' ),
						'search_product_icon' => esc_html__( 'Icon', 'go-legal-ai-addon' ),
						'search_product_link' => 'https://elementor.com/',
					],
					[
						'search_product_text' => esc_html__( 'List Item #2', 'go-legal-ai-addon' ),
                        'search_product_icon' => esc_html__( 'Icon', 'go-legal-ai-addon' ),
						'search_product_link' => 'https://elementor.com/',
					],
					[
						'search_product_text' => esc_html__( 'List Item #3', 'go-legal-ai-addon' ),
                        'search_product_icon' => esc_html__( 'Icon', 'go-legal-ai-addon' ),
						'search_product_link' => 'https://elementor.com/',
					],
				],
				'title_field' => '{{{ search_product_text }}}',
			]
		);


		$this->end_controls_section();

	}

	/**
	 * Render oEmbed widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings_for_display();
	?>
	
    <div class="search-product-area">
        <div class="swiper SearchProduct">
            <div class="swiper-wrapper search-product-wrap">
                <?php foreach ($settings['sesearch_product_list'] as $list_item) : ?>
					<div class="single-search-product swiper-slide" >
                        <a href="<?php echo $list_item['search_product_link']['url']; ?>">
                            <i class="<?php echo $list_item['search_product_icon']; ?>"></i>
                        </a>
                        <h4><?php echo $list_item['search_product_text']; ?></h4>
					</div>
				<?php endforeach; ?>
            </div>
        </div>
    </div>

	<?php

	}

}