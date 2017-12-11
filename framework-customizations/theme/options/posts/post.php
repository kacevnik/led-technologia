<?php if (!defined( 'FW' )) die('Forbidden');

$options = array(
    'main' => array(
        'type' => 'box',
        'title' => __('Дополнительные настройки страницы', '{domain}'),
        'options' => array(
            'kdv_post_img' => array(
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
                'label' => __('Задний фон', '{domain}'),
                'desc'  => __('', '{domain}'),
                'help'  => __('Загрузите фоновое изображение поста (разрешенные файлы для загрузки: jpg, png, gif)', '{domain}'),
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
        )
    ),

    'product' =>array(
        'type' => 'box',
        'title' => __('Настройки карточки товара', '{domain}'),
        'options' => array(
            'kdv_on_settings_product' => array(
                'type'  => 'switch',
                'value' => '0',
                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                'label' => __('Карточка товара?', '{domain}'),
                'desc'  => __('Для того, чтобы страница отображалась как Карточка товара, необходимо включить эту настройку', '{domain}'),
                'left-choice' => array(
                    'value' => '0',
                    'label' => __('Нет', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => '1',
                    'label' => __('Да', '{domain}'),
                ),
            ),

            'kdv_on_sitebar_product' => array(
                'type'  => 'switch',
                'value' => '0',
                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                'label' => __('Включить сайтбар?', '{domain}'),
                'desc'  => __('Для включения сайтбара в карточке товара используйте эту настройку', '{domain}'),
                'left-choice' => array(
                    'value' => '0',
                    'label' => __('Нет', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => '1',
                    'label' => __('Да', '{domain}'),
                )
            ),

            'kdv_sub_title_product' => array(
                'type'  => 'text',
                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                'label' => __('Дополнительный заголовок', '{domain}')
            ),

            'add_img_product' => array(
                'type'  => 'addable-box',
                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                'label' => __('Добавить изображения', '{domain}'),
                'desc'  => __('Добавить изображения для карточки товара', '{domain}'),
                'box-options' => array(
                    'kdv_img' => array(
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
                        'label' => __('Изображение', '{domain}'),
                        'desc'  => __('', '{domain}'),
                        'help'  => __('Загрузите изображение для карточки товара (разрешенные файлы для загрузки: jpg, png, gif)', '{domain}'),
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
                'template' => 'Добавить картинку', // box title
                'box-controls' => array( // buttons next to (x) remove box button
                    'control-id' => '<small class="dashicons dashicons-smiley"></small>',
                ),
                'limit' => 0, // limit the number of boxes that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
            )
        )
    )
);