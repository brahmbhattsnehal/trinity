<?php
namespace Elementor; // Custom widgets must be defined in the Elementor namespace
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly (security measure)

/**
 * Widget Name: Icon Box
 */
class Onum_Service_Box extends Widget_Base{

 	// The get_name() method is a simple one, you just need to return a widget name that will be used in the code.
	public function get_name() {
		return 'iservice_box';
	}

	// The get_title() method, which again, is a very simple one, you need to return the widget title that will be displayed as the widget label.
	public function get_title() {
		return __( 'Onum Service Box', 'onum' );
	}

	// The get_icon() method, is an optional but recommended method, it lets you set the widget icon. you can use any of the eicon or font-awesome icons, simply return the class name as a string.
	public function get_icon() {
		return 'eicon-number-field';
	}

	// The get_categories method, lets you set the category of the widget, return the category name as a string.
	public function get_categories() {
		return [ 'category_onum' ];
	}

	protected function _register_controls() {

		//Content Service box
		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Service Box', 'onum' ),
			]
		);

		$this->add_control(
			'box_style',
			[
				'label' 	=> __( 'Box Style', 'onum' ),
				'type'  	=> Controls_Manager::SELECT,
				'default' 	=> 's1',
				'options' 	=> [
					's1'  => __( 'Style 1: Gradient Number', 'onum' ),
					's2'  => __( 'Style 2: Has Shape', 'onum' ),
				]
			]
		);

		$this->add_control(
			'icon_type',
			[
				'label' => __( 'Icon Type', 'onum' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'number',
				'options' => [
					'number' => __( 'Number', 'onum' ),
					'font' 	 => __( 'Font Icon', 'onum' ),
					'image'  => __( 'Image Icon', 'onum' ),
					'class'  => __( 'Custom Icon', 'onum' ),
				]
			]
		);
		$this->add_control(
			'number_box',
			[
				'label' => __( 'Box Number', 'onum' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( '01', 'onum' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'icon_font',
			[
				'label' => __( 'Icon', 'onum' ),
				'type' => Controls_Manager::ICONS,
				'label_block' => true,
				'fa4compatibility' => 'icon',
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'fa-solid',
				],
				'condition' => [
					'icon_type' => 'font',
				]
			]
		);
		$this->add_control(
	       'icon_image',
	        [
	           'label' => esc_html__( 'Photo', 'onum' ),
	           'type'  => Controls_Manager::MEDIA,
				'default' => [
					'url' => get_template_directory_uri().'/images/analysis.png',
			  	],
			  	'condition' => [
					'icon_type' => 'image',
				]
		    ]
	    );
	    $this->add_control(
			'icon_class',
			[
				'label' => __( 'Custom Class', 'onum' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'flaticon-world', 'onum' ),
				'condition' => [
					'icon_type' => 'class',
				]
			]
		);

		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'onum' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Content Marketing', 'onum' ),
				'label_block' => true,
				'label_block' => true,
			]
		);

		$this->add_control(
			'des',
			[
				'label' => 'Description',
				'type' => Controls_Manager::TEXTAREA,
				'default' => __( 'You can provide the answers that your potential customers are trying to find, so you can become the industry.', 'onum' ),
			]
		);

		$this->end_controls_section();

		//Style
		$this->start_controls_section(
			'style_box_section',
			[
				'label' => __( 'Box', 'onum' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'box_radius',
			[
				'label' => __( 'Border Radius', 'onum' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .s-box, {{WRAPPER}} .s-box .overlay' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'box_padding',
			[
				'label' => __( 'Padding Box', 'onum' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .s-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);

		//Hover
		$this->start_controls_tabs( 'tabs_box_style' );

		$this->start_controls_tab(
			'tab_box_normal',
			[
				'label' => __( 'Normal', 'onum' ),
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'box_bg_color',
				'label' => __( 'Background', 'onum' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .s-box',
			]
		);
		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'accs_box_shadow',
				'selector' => '{{WRAPPER}} .s-box',
				'separator' => 'before',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_box_hover',
			[
				'label' => __( 'Hover', 'onum' ),
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'box_bg_hover_color',
				'label' => __( 'Background', 'onum' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .s-box:hover',
			]
		);
		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'accs_box_hover_shadow',
				'selector' => '{{WRAPPER}} .s-box:hover',
				'separator' => 'before',
			]
		);
		$this->add_control(
			'hover_animation',
			[
				'label' => __( 'Hover Animation', 'onum' ),
				'type' => Controls_Manager::HOVER_ANIMATION,
				'selector' => '{{WRAPPER}} .s-box:hover',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		//Number
		$this->end_controls_section();

		$this->start_controls_section(
			'style_number_section',
			[
				'label' => __( 'Number/Icon', 'onum' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'heading_number_main',
			[
				'label' => __( 'Number/Icon Left', 'onum' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'number_space',
			[
				'label' => __( 'Spacing', 'onum' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .content-box' => 'padding-left: calc({{SIZE}}{{UNIT}} + 50px);',
				],
			]
		);
		$this->add_control(
			'number_color',
			[
				'label' => __( 'Color', 'onum' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .number-box' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'number_typography',
				'selector' => '{{WRAPPER}} .number-box, {{WRAPPER}} .icon-main i, {{WRAPPER}} .icon-main span:before',
			]
		);
		
		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'icon_box_shadow',
				'selector' => '{{WRAPPER}} .number-box',
			]
		);

		//Hover
		$this->start_controls_tabs( 'tabs_number_style' );

		$this->start_controls_tab(
			'tab_number_normal',
			[
				'label' => __( 'Normal', 'onum' ),
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'number_bg_color',
				'label' => __( 'Background', 'onum' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .number-box',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_number_hover',
			[
				'label' => __( 'Hover', 'onum' ),
			]
		);

		$this->add_control(
			'hover_number_color',
			[
				'label' => __( 'Number Color', 'onum' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .s-box:hover .number-box' => 'fill: {{VALUE}}; color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'number_bg_hover_color',
				'label' => __( 'Background', 'onum' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .s-box:hover .number-box',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		//Big Number
		$this->add_control(
			'heading_number_big',
			[
				'label' => __( 'Big Number', 'onum' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'box_style' => ['s1'],
				]
			]
		);
		$this->add_control(
			'number_big_color',
			[
				'label' => __( 'Color', 'onum' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .big-number' => 'color: {{VALUE}};',
				],
				'condition' => [
					'box_style' => ['s1'],
				]
			]
		);
		$this->add_control(
			'hover_number_big_color',
			[
				'label' => __( 'Hover Color', 'onum' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .s-box:hover .big-number' => 'fill: {{VALUE}}; color: {{VALUE}};',
				],
				'condition' => [
					'box_style' => ['s1'],
				]
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'num_big_typography',
				'selector' => '{{WRAPPER}} .big-number',
				'condition' => [
					'box_style' => ['s1'],
				]
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'style_content_section',
			[
				'label' => __( 'Content', 'onum' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		//Title
		$this->add_control(
			'heading_title',
			[
				'label' => __( 'Title', 'onum' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'title_space',
			[
				'label' => __( 'Spacing', 'onum' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .s-box h5' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'onum' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .s-box h5' => 'color: {{VALUE}};',
				]
			]
		);
		$this->add_control(
			'bhover_title_color',
			[
				'label' => __( 'Box Hover Color', 'onum' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .s-box:hover h5' => 'color: {{VALUE}};',
				]
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .s-box h5',
			]
		);

		//Description
		$this->add_control(
			'heading_des',
			[
				'label' => __( 'Description', 'onum' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'des_color',
			[
				'label' => __( 'Color', 'onum' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .s-box p' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'bhover_des_color',
			[
				'label' => __( 'Box Hover Color', 'onum' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .s-box:hover p' => 'color: {{VALUE}};',
				]
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'des_typography',
				'selector' => '{{WRAPPER}} .s-box p',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>

		<?php if( $settings['box_style'] == 's1' ) { ?>
		<div class="service-box s-box elementor-animation-<?php echo $settings['hover_animation']; ?>">
			<div class="overlay"></div>
	        <span class="big-number"><?php echo $settings['number_box']; ?></span>
			<?php if($settings['icon_type'] == 'number') { ?>
			<div class="number-box">
		        <?php echo $settings['number_box']; ?>
	        </div>
	        <?php }else{ ?>
	        <div class="icon-main number-box">
		        <?php if( $settings['icon_font']['value'] ) { ?><i class="<?php echo esc_attr( $settings['icon_font']['value'] ); ?>"></i><?php } ?>
			    <?php if( $settings['icon_image']['url'] ) { ?><img src="<?php echo esc_attr( $settings['icon_image']['url'] ); ?>" alt="<?php echo esc_attr( $settings['title'] ); ?>"><?php } ?>
		        <?php if( $settings['icon_class'] ) { ?><span class="<?php echo esc_attr( $settings['icon_class'] ); ?>"></span><?php } ?>
	        </div>
	        <?php } ?>
	        <div class="content-box">
	            <h5><?php echo $settings['title']; ?></h5>
	            <p><?php echo $settings['des']; ?></p>
	        </div>
	    </div>
	    <?php }else{ ?>
		<div class="service-box-s2 s-box elementor-animation-<?php echo $settings['hover_animation']; ?>">
			<?php if($settings['number_box']) { ?>
			<div class="number-box">
		        <?php echo $settings['number_box']; ?>
	        </div>
	        <?php }else{ ?>
	        <div class="icon-main number-box">
		        <?php if( $settings['icon_font']['value'] ) { ?><i class="<?php echo esc_attr( $settings['icon_font']['value'] ); ?>"></i><?php } ?>
			    <?php if( $settings['icon_image']['url'] ) { ?><img src="<?php echo esc_attr( $settings['icon_image']['url'] ); ?>" alt="<?php echo esc_attr( $settings['title'] ); ?>"><?php } ?>
		        <?php if( $settings['icon_class'] ) { ?><span class="<?php echo esc_attr( $settings['icon_class'] ); ?>"></span><?php } ?>
	        </div>
	        <?php } ?>
	        <div class="content-box">
	            <h5><?php echo $settings['title']; ?></h5>
	            <p><?php echo $settings['des']; ?></p>
	        </div>
	    </div>
	    <?php } ?>

	    <?php
	}

	protected function _content_template() {}
}
// After the Schedule class is defined, I must register the new widget class with Elementor:
Plugin::instance()->widgets_manager->register_widget_type( new Onum_Service_Box() );