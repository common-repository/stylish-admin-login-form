<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

	//
	// Set a unique slug-like ID
	$prefix = 'salf__options';
  
	$home_url = get_home_url();

	// Create options
	CSF::createOptions( $prefix, array(
	  'framework_title'    => __('Stylish Admin Login Form', 'stylish-admin-login-form'),
	  'menu_title'         => __('Login Form', 'stylish-admin-login-form'),
	  'menu_slug'          => 'salf-form',
	  'menu_icon'          => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+DQogIDxwYXRoIGZpbGw9IiM1NTUiIGQ9Ik05Ljc2MDc2NTU1LDAgQzE1LjQxNTczODYsMCAyMCw0LjQ3NzE1MjUgMjAsMTAgQzIwLDE1LjUyMjg0NzUgMTUuNDE1NzM4NiwyMCA5Ljc2MDc2NTU1LDIwIEM2LjU2ODg1NjQ3LDIwIDMuNjE4MzY5NDgsMTguNTYzNDY4OCAxLjY4OTg4NTgxLDE2LjE1NDQ3MjUgQzEuNDYyMDIyNDEsMTUuODY5ODMzMyAxLjUxMzU2ODUzLDE1LjQ1ODY4MzcgMS44MDUwMTczMSwxNS4yMzYxNDQyIEMyLjA5NjQ2NjA4LDE1LjAxMzYwNDcgMi41MTc0NTE3OCwxNS4wNjM5NDY1IDIuNzQ1MzE1MTgsMTUuMzQ4NTg1NyBDNC40MjI1MzQ0LDE3LjQ0MzcxMSA2Ljk4NTU0Njc0LDE4LjY5MTU4ODggOS43NjA3NjU1NSwxOC42OTE1ODg4IEMxNC42NzU4MzU2LDE4LjY5MTU4ODggMTguNjYwMjg3MSwxNC44MDAyMzE5IDE4LjY2MDI4NzEsMTAgQzE4LjY2MDI4NzEsNS4xOTk3NjgwNiAxNC42NzU4MzU2LDEuMzA4NDExMjEgOS43NjA3NjU1NSwxLjMwODQxMTIxIEM3LjAyNjAxNTEyLDEuMzA4NDExMjEgNC40OTY0Mjg0NCwyLjUxOTg4Mzk2IDIuODE2NzU5MDMsNC41NjMzNDI1IEMyLjU4NTE2NTQyLDQuODQ1MDk1NTMgMi4xNjM1NTE0OSw0Ljg5MDE0NDMxIDEuODc1MDU3OTYsNC42NjM5NjE3NiBDMS41ODY1NjQ0Myw0LjQzNzc3OTIyIDEuNTQwNDM3OTMsNC4wMjYwMTYwOCAxLjc3MjAzMTU0LDMuNzQ0MjYzMDUgQzMuNzAzMzM2NDcsMS4zOTQ2Njg4MyA2LjYxNTQ0MTMzLDAgOS43NjA3NjU1NSwwIFogTTEwLjMwNTMyODEsNi44NjIzOTc0NSBMMTMuMDExOTU2OSw5LjU2OTAyNjI3IEMxMy4yNzM1NTIxLDkuODMwNjIxNDkgMTMuMjc4NTA2OSwxMC4yNDk3OTY0IDEzLjAyMzAyMzcsMTAuNTA1Mjc5NSBMMTAuMzc5NjMzOSwxMy4xNDg2Njk0IEMxMC4xMjQxNTA3LDEzLjQwNDE1MjYgOS43MDQ5NzU4MiwxMy4zOTkxOTc4IDkuNDQzMzgwNiwxMy4xMzc2MDI2IEM5LjE4MTc4NTM5LDEyLjg3NjAwNzMgOS4xNzY4MzA2LDEyLjQ1NjgzMjUgOS40MzIzMTM3OCwxMi4yMDEzNDkzIEwxMC45OCwxMC42NTM0MDQ2IEwwLjY2OTg1NjQ1OSwxMC42NTQyMDU2IEMwLjI5OTkwNDk1MiwxMC42NTQyMDU2IDcuNzI3MTUyMjVlLTE0LDEwLjM2MTMwNzggNy43MjcxNTIyNWUtMTQsMTAgQzcuNzI3MTUyMjVlLTE0LDkuNjM4NjkyMjIgMC4yOTk5MDQ5NTIsOS4zNDU3OTQzOSAwLjY2OTg1NjQ1OSw5LjM0NTc5NDM5IEwxMC45MzgsOS4zNDU0MDQ1NiBMOS4zODAxNDE2MSw3Ljc4NzU4Mzg5IEM5LjExODU0NjM5LDcuNTI1OTg4NjcgOS4xMTM1OTE2MSw3LjEwNjgxMzggOS4zNjkwNzQ3OSw2Ljg1MTMzMDYyIEM5LjYyNDU1Nzk3LDYuNTk1ODQ3NDQgMTAuMDQzNzMyOCw2LjYwMDgwMjIzIDEwLjMwNTMyODEsNi44NjIzOTc0NSBaIi8+DQo8L3N2Zz4NCg==',
	  'show_search'        => false,
	  'show_all_options'   => false,
	  'show_search'        => false,
	  'show_reset_all'     => true,
	  'show_reset_section' => false,
	  'ajax_save'          => true,
	  'theme'              => 'dark',
	  'footer_credit'      => 'Thanks for using <b>Stylish Admin Login Form</b>, <a href="https://makegutenblock.com">visit our website</a> to get more items',
	  'footer_text'        => 'Thanks for being with <a href="https://makegutenblock.com">Makegutenblock.com</a>'
	) );
  
	// Logo 
	CSF::createSection( $prefix, array(
	  'title'  => __('LOGO', 'stylish-admin-login-form'),
	  'fields' => array(
		// logo title 
		array(
		  'id'      => 'logo__url',
		  'type'    => 'text',
		  'title'   => __('Logo Link', 'stylish-admin-login-form'),
		  'default' => $home_url
		),
		array(
			'id'           => 'logo',
			'type'         => 'media',
			'url'          => false,
			'title'        => __('Logo', 'stylish-admin-login-form'),
			'button_title' => __('Upload Logo', 'stylish-admin-login-form'),
		),
		array(
			'id'      => 'logo__radius',
			'type'    => 'slider',
			'title'   => __('Border Radius', 'stylish-admin-login-form'),
			'unit'    => '%',
			'max'     => 100,
			'min'     => 0,
			'default' => 50
		),
		array(
			'id'      => 'logo__dimension',
			'type'    => 'dimensions',
			'title'   => __('Logo Dimension', 'stylish-admin-login-form'),
			'units'   => ['px'],
			'default' => array(
				'width'  => '70',
				'height' => '70',
				'unit'   => 'px',
			)
		),				  
	  )
	) );

	// Login form
	CSF::createSection( $prefix, array(
	  'title'  => __('LOGIN FORM', 'stylish-admin-login-form'),
	  'fields' => array(
		// logo title 
		array(
		  'id'      => 'login__form_color',
		  'type'    => 'color',
		  'title'   => __('Label Color', 'stylish-admin-login-form'),
		  'default' => '#8b8888',
		),
		array(
		  'id'      => 'login__form_bg',
		  'type'    => 'color',
		  'title'   => __('Background Color', 'stylish-admin-login-form'),
		  'default' => '#101010',
		),
		array(
			'id'      => 'login__radius',
			'type'    => 'slider',
			'title'   => __('Border Radius', 'stylish-admin-login-form'),
			'unit'    => 'px',
			'max'     => 100,
			'min'     => 0,
			'default' => 5
		),
		array(
			'id'      => 'login__form_btn_color',
			'type'    => 'color',
			'title'   => __('Button Color', 'stylish-admin-login-form'),
			'default' => '#8b8888',
		),			  
		array(
			'id'      => 'login__form_btn_bg',
			'type'    => 'color',
			'title'   => __('Button Background', 'stylish-admin-login-form'),
			'default' => '#222222',
		),			  
	  )
	) );

	// Login Page
	CSF::createSection( $prefix, array(
	  'title'  => __('LOGIN PAGE', 'stylish-admin-login-form'),
	  'fields' => array(
		// Background type
		array(
			'id'      => 'login__page_bg_type',
			'type'    => 'button_set',
			'title'   => __('Background Type', 'stylish-admin-login-form'),
			'options' => array(
			  'image' => __('Image', 'stylish-admin-login-form'),
			  'color' => __('Color', 'stylish-admin-login-form'),
			),
			'default' => 'color'
		),		  
		array(
			'id'           => 'login__page_bg_image',
			'type'         => 'media',
			'url'          => false,
			'title'        => __('Background Color', 'stylish-admin-login-form'),
			'button_title' => __('Upload Image', 'stylish-admin-login-form'),
			'dependency'   => array( 'login__page_bg_type', '==', 'image' ),
		),
		array(
			'id'         => 'background__overlay',
			'type'       => 'switcher',
			'title'      => __('Enable Overlay', 'stylish-admin-login-form'),
			'default'    => true,
			'dependency' => array( 'login__page_bg_type', '==', 'image' ),
		),	  
		array(
			'id'         => 'overlay__color',
			'type'       => 'color',
			'title'      => __('Overlay Color', 'stylish-admin-login-form'),
			'default'    => 'rgba(255,255,255,0.85)',
			'dependency' => array( 'login__page_bg_type|background__overlay', '==|==', 'image|true'  ),
		),  
		array(
			'id'         => 'login__page_bg_color',
			'type'       => 'color',
			'title'      => __('Background Color', 'stylish-admin-login-form'),
			'default'    => '#222222',
			'dependency' => array( 'login__page_bg_type', '==', 'color' ),
		),		  
	  )
	) );

  }