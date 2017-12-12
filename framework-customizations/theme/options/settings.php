<?php

	if (!defined('FW')) die('Forbidden');

	$args_category_list = array(
		'type'         => 'post',
		'child_of'     => 0,
		'parent'       => '',
		'orderby'      => 'name',
		'order'        => 'ASC',
		'hide_empty'   => 1,
		'hierarchical' => 1,
		'exclude'      => '',
		'include'      => '',
		'number'       => 0,
		'taxonomy'     => 'category',
		'pad_counts'   => false,
	);

	$res_category_list =  array();

	$category_list = get_categories( $args_category_list );

	foreach ($category_list as $category_listt_item) {
		$res_category_list[$category_listt_item->term_id] = $category_listt_item->name;
	}
//настройки для страницы настроек темы
	$options = array(
		'kdv_tap_general_opions' => array(
    		'type' => 'tab',
    		'options' => array(
        		'kdv_main_adress' => array(
				    'type'  => 'text',
				    'value' => 'г. Железнодорожный',
				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				    'label' => __('Адрес компании', '{domain}'),
				    'help'  => __('Укажите адрес компании для шапки сайта', '{domain}'),
				),

				'kdv_header_mail' => array(
				    'type'  => 'text',
				    'value' => 'test@test.ru',
				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				    'label' => __('E-mail', '{domain}'),
				    'help'  => __('Укажите e-mail адрес вашей компании', '{domain}'),
				),

				'kdv_logo_header' => array(
				    'type'  => 'upload',
				    'value' => array(
				        /*
				        'attachment_id' => '9',
				        'url' => '//site.com/wp-content/uploads/2014/02/whatever.jpg'
				        */
				        // if value is set in code, it is not considered and not used
				        // because there is no sense to set hardcode attachment_id
				    ),
				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				    'label' => __('Логотип', '{domain}'),
				    'desc'  => __('', '{domain}'),
				    'help'  => __('Загрузите логотип сайта (разрешенные файлы для загрузки: jpg, png, gif)', '{domain}'),
				    /**
				     * If set to `true`, the option will allow to upload only images, and display a thumb of the selected one.
				     * If set to `false`, the option will allow to upload any file from the media library.
				     */
				    'images_only' => true,
				    /**
				     * An array with allowed files extensions what will filter the media library and the upload files.
				     */
				    'files_ext' => array( 'jpg', 'png', 'gif' ),
				    /**
				     * An array with extra mime types that is not in the default array with mime types from the javascript Plupload library.
				     * The format is: array( '<mime-type>, <ext1> <ext2> <ext2>' ).
				     * For example: you set rar format to filter, but the filter ignore it , than you must set
				     * the array with the next structure array( '.rar, rar' ) and it will solve the problem.
				     */
				    'extra_mime_types' => array( 'audio/x-aiff, aif aiff' )
				),

				'kdv_header_phone' => array(
				    'type'  => 'text',
				    'value' => '+7 (926) 156-78-99',
				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				    'label' => __('Наш телефон', '{domain}'),
				    'desc'  => __('', '{domain}'),
				    'help'  => __('Укажите телефон компании для Header', '{domain}'),
				),

				'kdv_slogan_clock' => array(
				    'type'  => 'text',
				    'value' => 'Пн - Пт: 10:00 - 17:00',
				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				    'label' => __('Время работы', '{domain}'),
				    'desc'  => __('', '{domain}'),
				    'help'  => __('Укажите время работы офиса компании', '{domain}'),
				),

				'kdv_header_back_tell' => array(
	                'type'  => 'switch',
	                'value' => '1',
	                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
	                'label' => __('Показать кнопку?', '{domain}'),
	                'desc'  => __('Показать/Скрыть кнопку обратного звонка в Header', '{domain}'),
	                'left-choice' => array(
	                    'value' => '0',
	                    'label' => __('Нет', '{domain}'),
	                ),
	                'right-choice' => array(
	                    'value' => '1',
	                    'label' => __('Да', '{domain}'),
	                ),
	            ),

	            'kdv_slogan_header' => array(
				    'type'  => 'text',
				    'value' => 'барнаульский завод светотехники BARLED',
				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				    'label' => __('Время работы', '{domain}'),
				    'desc'  => __('', '{domain}'),
				    'help'  => __('Укажите слоган компании для Header', '{domain}'),
				),
    		),
    		'title' => __('Главная страница', '{domain}'),
    		'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
		),
		'kdv_tap_gallary_post_new' => array(
    		'type' => 'tab',
    		'options' => array(
    			'kdv_main_slider_item' => array(
				    'type' => 'addable-popup',
				    'label' => __('Добавить слайд', '{domain}'),
				    'desc'  => __('Нажмите добавить и заполните необходимые поля для получения нового слайда', '{domain}'),
				    'template' => '{{- name }}',
				    'popup-title' => null,
				    'size' => 'small', // small, medium, large
				    'limit' => 0, // limit the number of popup`s that can be added
				    'add-button-text' => __('Добавить', '{domain}'),
				    'sortable' => true,
				    'popup-options' => array(
				        'name' => array(
				            'label' => __('Название', '{domain}'),
				            'type' => 'text',
				            'desc' => __('Укажите название слайда. Оно будет отображаться в атрибуте ALT', '{domain}'),
				        ),

				        'title' => array(
				            'label' => __('Title', '{domain}'),
				            'type' => 'text',
				            'desc' => __('Укажите название для атрибута title ссылки и картинки слайда', '{domain}'),
				        ),

				        'link' => array(
				            'label' => __('Ссылка', '{domain}'),
				            'type' => 'text',
				            'desc' => __('Укажите ссылку на материал привязанную к слайду', '{domain}'),
				        ),

				        'img' => array(
						    'type'  => 'upload',
						    'value' => array(
						        /*
						        'attachment_id' => '9',
						        'url' => '//site.com/wp-content/uploads/2014/02/whatever.jpg'
						        */
						        // if value is set in code, it is not considered and not used
						        // because there is no sense to set hardcode attachment_id
						    ),
						    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						    'label' => __('Изобоажение', '{domain}'),
						    'desc'  => __('', '{domain}'),
						    'help'  => __('Загрузите картинку слайда (разрешенные файлы для загрузки: jpg, png, gif. Рекомендуемые размеры: 240X180px)', '{domain}'),
						    /**
						     * If set to `true`, the option will allow to upload only images, and display a thumb of the selected one.
						     * If set to `false`, the option will allow to upload any file from the media library.
						     */
						    'images_only' => true,
						    /**
						     * An array with allowed files extensions what will filter the media library and the upload files.
						     */
						    'files_ext' => array( 'jpg', 'png', 'gif' ),
						    /**
						     * An array with extra mime types that is not in the default array with mime types from the javascript Plupload library.
						     * The format is: array( '<mime-type>, <ext1> <ext2> <ext2>' ).
						     * For example: you set rar format to filter, but the filter ignore it , than you must set
						     * the array with the next structure array( '.rar, rar' ) and it will solve the problem.
						     */
						    'extra_mime_types' => array( 'audio/x-aiff, aif aiff' )
						)
				    ),
				)

			),
    		'title' => __('Слайдер', '{domain}'),
    		'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
		),
	);

?>