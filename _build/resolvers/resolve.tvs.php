<?php

/** @var $modx modX */
if (!$modx = $object->xpdo AND !$object->xpdo instanceof modX) {
    return true;
}

/** @var $options */
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:
        if (isset($options['site_category']) && $options['site_category']) {
            if ($category = $modx->getObject('modCategory', array('category' => $options['site_category']))) {
                $cat_id = $category->get('id');
            } else {
                $cat_id = 0;
            }
        } else {
            $cat_id = 0;
        }
        
        $tvs = array();
        $templid = $modx->getObject('modTemplate', array('templatename' => 'Decland'))->get('id');
        


        $name = 'decland_addres';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            'caption'      => 'Адрес компании',
            'default_text' => 'Московская область,  Щелковский район, 41-й км Щелковского шоссе, д.1',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'decland_border_map';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            // 'type'         => 'colorpicker',
            'default_text' => 'CB2128',
            'caption'      => 'Цвет обводки блока на карте',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;



        $name = 'decland_colorbg_button';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            // 'type'         => 'colorpicker',
            'default_text' => 'BF0016',
            'caption'      => 'Цвет кнопки на первом шоте',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'decland_colorbg_footernav';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            // 'type'         => 'colorpicker',
            'default_text' => 'CB2128',
            'caption'      => 'Цвет фона меню в подвале',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;


        $name = 'decland_colorbg_form';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            // 'type'         => 'colorpicker',
            'default_text' => 'D30707',
            'caption'      => 'Цвет фона формы',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'decland_colorbg_form_btn';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            // 'type'         => 'colorpicker',
            'default_text' => 'FFE000',
            'caption'      => 'Цвет фона кнопки на форме',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'decland_colorbg_map';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            // 'type'         => 'colorpicker',
            'default_text' => 'FFE000',
            'caption'      => 'Цвет фона блока на карте',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'decland_colorbg_top';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            // 'type'         => 'colorpicker',
            'default_text' => 'ffe100',
            'caption'      => 'Цвет фона первого шота',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'decland_coords';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'yandexcoordstv',
            // 'type'         => 'colorpicker',
            'default_text' => '55.752941,37.351276',
            'caption'      => 'Метка на карте',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'decland_coords_img';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'image',
            // 'type'         => 'colorpicker',
            'default_text' => 'assets/components/decland/web/uploads/map.png',
            'caption'      => 'Метка на карте: картинка метки',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'decland_coords_zoom';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            // 'type'         => 'colorpicker',
            'default_text' => '11',
            'caption'      => 'Метка на карте: Зум',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'decland_email';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            // 'type'         => 'colorpicker',
            'default_text' => 'test@tested.ru',
            'caption'      => 'Почта компании',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'decland_email_to';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            // 'type'         => 'colorpicker',
            'default_text' => 'test@tested.ru',
            'caption'      => 'Почта для входящих заявок',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'decland_logo';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'image',
            // 'type'         => 'colorpicker',
            'default_text' => 'assets/components/decland/web/uploads/logo.png',
            'caption'      => 'Логотип компании',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'decland_navlink';
        $tempID = $templid;
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'migx',
            'caption'      => 'Ссылки меню',
            'category'     => $cat_id,
            'input_properties' => array(
                                    "formtabs" => '[{"caption":"Image", "fields": [{"field":"link","caption":"Ссылка"},{"field":"title","caption":"Название"}]}]',
                                    "columns" => '[{"header": "Ссылка", "sortable": "true", "dataIndex": "link"},{"header": "Название", "sortable": "true", "dataIndex": "title"}]'
                                ),
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;


        $name = 'decland_phone1';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            // 'type'         => 'colorpicker',
            'default_text' => '7-000-000-000',
            'caption'      => 'Телефон компании 1',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'decland_phone2';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            // 'type'         => 'colorpicker',
            'default_text' => '7-000-000-000',
            'caption'      => 'Телефон компании 2',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'decland_topimg';
        $tempID = $templid; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'image',
            // 'type'         => 'colorpicker',
            'default_text' => 'assets/components/decland/web/uploads/fon.png',
            'caption'      => 'Изображение первого шота',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        /*
        $name = 'img';
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'fastuploadtv',
            'caption'      => 'Изображение',
            'category'     => $cat_id,
            'input_properties' => array(
                                    "path" => "assets/images/{d}-{m}-{y}/",
                                    "prefix" => "",
                                    "MIME" => "",
                                    "showValue" => false,
                                    "showPreview" => true
                                ),
        ));
        $tv->save();
        $tvs[] = $tv->get('id');
        
        $name = 'show_child';
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'checkbox',
            'caption'      => 'Отображать на странице',
            'category'     => $cat_id,
            'elements'     => 'Дочерние ресурсы==1',
            'display'      => 'default',
            'default_text' => '1'
        ));
        $tv->save();
        $tvs[] = $tv->get('id');
        */
        /*
        Шаблоны
            2 - Главная
            3 - Простая страница
            4 - Заглушка
            5 - Категория
            6 - Категория - один материал

        
        // Имя компании

        $name = 'company_name';
        $tempID = '2'; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            'caption'      => 'Название компании',
            'description'  => 'Кратко',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;
        */
        // Показ меню услуг на главной

        // $templid;

        // $name = 'uslugi_main';
        // $tempID = '2'; // Пишем id нашенго шаблона
        // if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
        //     $tv = $modx->newObject('modTemplateVar');
        // }
        // $tv->fromArray(array(
        //     'name'         => $name,
        //     'type'         => 'checkbox',
        //     'caption'      => 'Отображать меню с услугами?',
        //     'description'  => '',
        //     'elements'     => 'Да==Да',
        //     'category'     => $cat_id
        // ));
        // $tv->save();
        // $tvs[] = $tv->get('id').'-'.$tempID;
            
        // // Подпись к фоту на странице о нас
        // $name = 'about_text';
        // $tempID = '12'; // Пишем id нашенго шаблона
        // if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
        //     $tv = $modx->newObject('modTemplateVar');
        // }
        // $tv->fromArray(array(
        //     'name'         => $name,
        //     'type'         => 'text',
        //     'caption'      => 'Подпись к фото',
        //     'category'     => $cat_id
        // ));
        // $tv->save();
        // $tvs[] = $tv->get('id').'-'.$tempID;

/* Убрано из-за клиент конфига
        // Адрес
        $name = 'address';
        $tempID = '2'; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            'caption'      => 'Адрес',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        // Род деятельности
        $name = 'deyat';
        $tempID = '2'; // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            'caption'      => 'Род деятельности компании',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;
        
        // Телефон
        $name = 'phone';
        $tempID = '2';  // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            'caption'      => 'Телефон компании',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        // Копирайты
        $name = 'copyright';
        $tempID = '2';  // Пишем id нашенго шаблона
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            'caption'      => 'Копирайты',
            'description'  => 'Обычно пишется название компании и род деятельности',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;
        
        // Почта сайта
        $name = 'email';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            'caption'      => 'E-mail',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        // Почта для уведомлений
        $name = 'emailSend';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            'caption'      => 'E-mail для уведомлений',
            'description'  => 'На этот адрес будут приходить заявки с сайта',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        // Время работы компании
        $name = 'worktime';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            'caption'      => 'Время работы компании',
            'description'  => 'Например: Ежедневно: с 9:00 до 20:00',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        // Время работы компании
        $name = 'textform';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            'caption'      => 'Заголовок для формы обратной связи',
            'description'  => '',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;
*/


        // Ссылки на соц.сети
/* Убрано из-за клиент конфига

        $name = 'soc_vk';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            'caption'      => 'ВКонтакте',
            'description'  => 'Ссылка на группу',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        // Картинка соц.сети*
        $name = 'soc_vk_icon';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'fastuploadtv',
            'caption'      => 'ВКонтакте: иконка',
            'category'     => $cat_id,
            'source'       => 2,
            'input_properties' => array(
                                    "path" => "icon/",
                                    "prefix" => "",
                                    "MIME" => "",
                                    "showValue" => true,
                                    "showPreview" => true
                                ),
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

            // Источник файлов для TV 
            $sourceElement = $modx->newObject('sources.modMediaSourceElement');
            $sourceElement->fromArray(array(
                'object' => $tv->get('id'),
                'context_key' => 'web',
            ), '', true, true);
            $sourceElement->set('source', 2);
            $sourceElement->save();
            // end Источник файлов для TV 




        $name = 'soc_fb';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            'caption'      => 'Facebook',
            'description'  => 'Ссылка на группу',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        // Картинка соц.сети
        $name = 'soc_fb_icon';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'fastuploadtv',
            'caption'      => 'Facebook: иконка',
            'category'     => $cat_id,
            'source'       => 2,
            'input_properties' => array(
                                    "path" => "icon/",
                                    "prefix" => "",
                                    "MIME" => "",
                                    "showValue" => true,
                                    "showPreview" => true
                                ),
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        // Источник файлов для TV 
            $sourceElement = $modx->newObject('sources.modMediaSourceElement');
            $sourceElement->fromArray(array(
                'object' => $tv->get('id'),
                'context_key' => 'web',
            ), '', true, true);
            $sourceElement->set('source', 2);
            $sourceElement->save();
        // end Источник файлов для TV



        $name = 'soc_odn';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            'caption'      => 'Одноклассники',
            'description'  => 'Ссылка на группу',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        // Картинка соц.сети
        $name = 'soc_odn_icon';
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tempID = '2'; 
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'fastuploadtv',
            'caption'      => 'Одноклассники: иконка',
            'category'     => $cat_id,
            'source'       => 2,
            'input_properties' => array(
                                    "path" => "icon/",
                                    "prefix" => "",
                                    "MIME" => "",
                                    "showValue" => true,
                                    "showPreview" => true
                                ),
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        // Источник файлов для TV 
            $sourceElement = $modx->newObject('sources.modMediaSourceElement');
            $sourceElement->fromArray(array(
                'object' => $tv->get('id'),
                'context_key' => 'web',
            ), '', true, true);
            $sourceElement->set('source', 2);
            $sourceElement->save();
        // end Источник файлов для TV 

        $name = 'soc_tw';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            'caption'      => 'Twitter',
            'description'  => 'Ссылка на группу',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        // Картинка соц.сети
        $name = 'soc_tw_icon';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'fastuploadtv',
            'caption'      => 'Twitter: иконка',
            'category'     => $cat_id,
            'source'       => 2,
            'input_properties' => array(
                                    "path" => "icon/",
                                    "prefix" => "",
                                    "MIME" => "",
                                    "showValue" => true,
                                    "showPreview" => true
                                ),
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

            // Источник файлов для TV 
            $sourceElement = $modx->newObject('sources.modMediaSourceElement');
            $sourceElement->fromArray(array(
                'object' => $tv->get('id'),
                'context_key' => 'web',
            ), '', true, true);
            $sourceElement->set('source', 2);
            $sourceElement->save();
            // end Источник файлов для TV 



        $name = 'soc_inst';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'text',
            'caption'      => 'Instagram',
            'description'  => 'Ссылка на группу',
            'category'     => $cat_id
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        // Картинка соц.сети
        $name = 'soc_inst_icon';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'fastuploadtv',
            'caption'      => 'Instagram: иконка',
            'category'     => $cat_id,
            'source'       => 2,
            'input_properties' => array(
                                    "path" => "icon/",
                                    "prefix" => "",
                                    "MIME" => "",
                                    "showValue" => true,
                                    "showPreview" => true
                                ),
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

            // Источник файлов для TV
            $sourceElement = $modx->newObject('sources.modMediaSourceElement');
            $sourceElement->fromArray(array(
                'object' => $tv->get('id'),
                'context_key' => 'web',
            ), '', true, true);
            $sourceElement->set('source', 2);
            $sourceElement->save();
            // end Источник файлов для TV 



        // Логотип
        $name = 'logo';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'fastuploadtv',
            'caption'      => 'Основной логотип сайта',
            'category'     => $cat_id,
            'source'       => 2,
            'input_properties' => array(
                                    "path" => "id/{id}/",
                                    "prefix" => "",
                                    "MIME" => "",
                                    "showValue" => true,
                                    "showPreview" => true
                                ),
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

            // Источник файлов для TV 
            $sourceElement = $modx->newObject('sources.modMediaSourceElement');
            $sourceElement->fromArray(array(
                'object' => $tv->get('id'),
                'context_key' => 'web',
            ), '', true, true);
            $sourceElement->set('source', 2);
            $sourceElement->save();
            // end Источник файлов для TV

        // Логотип подвала
        $name = 'logo_foot';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'fastuploadtv',
            'caption'      => 'Логотип в подвале сайта',
            'description'  => 'Если не выбран, берётся основной логотип',
            'category'     => $cat_id,
            'source'       => 2,
            'input_properties' => array(
                                    "path" => "id/{id}/",
                                    "prefix" => "",
                                    "MIME" => "",
                                    "showValue" => true,
                                    "showPreview" => true
                                ),
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

            // Источник файлов для TV 
            $sourceElement = $modx->newObject('sources.modMediaSourceElement');
            $sourceElement->fromArray(array(
                'object' => $tv->get('id'),
                'context_key' => 'web',
            ), '', true, true);
            $sourceElement->set('source', 2);
            $sourceElement->save();
            // end Источник файлов для TV
*/
        // Изображение
        // $name = 'image';
        // $tempID = '17,6,9,14,12'; 
        // if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
        //     $tv = $modx->newObject('modTemplateVar');
        // }
        // $tv->fromArray(array(
        //     'name'         => $name,
        //     'type'         => 'fastuploadtv',
        //     'caption'      => 'Изображение',
        //     'category'     => $cat_id,
        //     'source'       => 2,
        //     'input_properties' => array(
        //                             "path" => "id/{id}/",
        //                             "prefix" => "",
        //                             "MIME" => "",
        //                             "showValue" => true,
        //                             "showPreview" => true
        //                         ),
        // ));
        // $tv->save();
        // $tvs[] = $tv->get('id').'-'.$tempID;

        //     /* Источник файлов для TV */
        //     $sourceElement = $modx->newObject('sources.modMediaSourceElement');
        //     $sourceElement->fromArray(array(
        //         'object' => $tv->get('id'),
        //         'context_key' => 'web',
        //     ), '', true, true);
        //     $sourceElement->set('source', 2);
        //     $sourceElement->save();
        //     /* end Источник файлов для TV */

        // // Изображение - дополнтельное
        // $name = 'image_dop';
        // $tempID = '6,9,14,17'; 
        // if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
        //     $tv = $modx->newObject('modTemplateVar');
        // }
        // $tv->fromArray(array(
        //     'name'         => $name,
        //     'type'         => 'fastuploadtv',
        //     'caption'      => 'Дополнительные изображение',
        //     'description'  => 'Если фото есть, то оно будет показываться на странице, вместо основого изображения',
        //     'category'     => $cat_id,
        //     'source'       => 2,
        //     'input_properties' => array(
        //                             "path" => "id/{id}/",
        //                             "prefix" => "",
        //                             "MIME" => "",
        //                             "showValue" => true,
        //                             "showPreview" => true
        //                         ),
        // ));
        // $tv->save();
        // $tvs[] = $tv->get('id').'-'.$tempID;

        //     /* Источник файлов для TV */
        //     $sourceElement = $modx->newObject('sources.modMediaSourceElement');
        //     $sourceElement->fromArray(array(
        //         'object' => $tv->get('id'),
        //         'context_key' => 'web',
        //     ), '', true, true);
        //     $sourceElement->set('source', 2);
        //     $sourceElement->save();
        //     /* end Источник файлов для TV */

        // // Слайдер
        // $name = 'slider';
        // $tempID = '2'; 
        // if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
        //     $tv = $modx->newObject('modTemplateVar');
        // }
        // $tv->fromArray(array(
        //     'name'         => $name,
        //     'type'         => 'migx',
        //     'caption'      => 'Слайдер',
        //     'category'     => $cat_id,
        //     'input_properties' => array(
        //                             "formtabs" => '[{"caption":"Gallery","fields": [{"field":"img","caption":"Картинка","inputTV":"image"},{"field":"link","caption":"Ссылка"}]}]',
        //                             "columns" => '[{"header": "Картинка","dataIndex": "img","renderer":"this.renderImage","width":"100"},{"header": "Ссылка","dataIndex": "link","width":"400"}]'
        //                         ),
        // ));
        // $tv->save();
        // $tvs[] = $tv->get('id').'-'.$tempID;


        // // Бегущая строка
        // $name = 'begushaya_str';
        // $tempID = '2'; 
        // if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
        //     $tv = $modx->newObject('modTemplateVar');
        // }
        // $tv->fromArray(array(
        //     'name'         => $name,
        //     'type'         => 'migx',
        //     'caption'      => 'Бегущая строка',
        //     'category'     => $cat_id,
        //     'input_properties' => array(
        //                             "formtabs" => '[{"caption":"Gallery","fields": [{"field":"text","caption":"Текст","inputTVtype":"richtext"}]}]',
        //                             "columns" => '[{"header": "Текст","dataIndex": "text"}]'
        //                         ),
        // ));
        // $tv->save();
        // $tvs[] = $tv->get('id').'-'.$tempID;

        // // Должность специалиста
        // $name = 'spec_dol';
        // $tempID = '9'; 
        // if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
        //     $tv = $modx->newObject('modTemplateVar');
        // }
        // $tv->fromArray(array(
        //     'name'         => $name,
        //     'type'         => 'text',
        //     'caption'      => 'Дожность специалиста',
        //     'description'  => '',
        //     'category'     => $cat_id
        // ));
        // $tv->save();
        // $tvs[] = $tv->get('id').'-'.$tempID;

        // // Прайс-лист сотрудника
        // $name = 'usluga_price';
        // $tempID = '14'; 
        // if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
        //     $tv = $modx->newObject('modTemplateVar');
        // }
        // $tv->fromArray(array(
        //     'name'         => $name,
        //     'type'         => 'migx',
        //     'caption'      => 'Прайс-лист',
        //     'category'     => $cat_id,
        //     'input_properties' => array(
        //                             "formtabs" => '[{"caption":"Price","fields": [{"field":"name","caption":"Описание"},{"field":"price","caption":"Цена"}]}]',
        //                             "columns" => '[{"header": "Услуга","dataIndex": "name"},{"header": "Цена","dataIndex": "price"}]'
        //                         ),
        // ));
        // $tv->save();
        // $tvs[] = $tv->get('id').'-'.$tempID;

/* Убрано из-за клиент конфига
        // Иконка для яндекс карт
        $name = 'mapicon';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'fastuploadtv',
            'caption'      => 'Иконка для яндекс карт',
            'description'  => 'Предпочтительные размер 48x48 px',
            'category'     => $cat_id,
            'source'       => 2,
            'input_properties' => array(
                                    "path" => "id/{id}/",
                                    "prefix" => "",
                                    "MIME" => "",
                                    "showValue" => true,
                                    "showPreview" => true
                                ),
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

            // Источник файлов для TV 
            $sourceElement = $modx->newObject('sources.modMediaSourceElement');
            $sourceElement->fromArray(array(
                'object' => $tv->get('id'),
                'context_key' => 'web',
            ), '', true, true);
            $sourceElement->set('source', 2);
            $sourceElement->save();
            // end Источник файлов для TV 
*/
        // Яндекс капта
    //     $name = 'mapyandex';
    //     $tempID = '2'; 
    //     if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
    //         $tv = $modx->newObject('modTemplateVar');
    //     }
    //     $tv->fromArray(array(
    //         'name'         => $name,
    //         'type'         => 'yandexMaps',
    //         'caption'      => 'Метка компании на карте',
    //         'category'     => $cat_id,
    //     ));
    //     $tv->save();
    //     $tvs[] = $tv->get('id').'-'.$tempID;

    //      // Видео
    //     $name = 'video';
    //     $tempID = '11'; 
    //     if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
    //         $tv = $modx->newObject('modTemplateVar');
    //     }
    //     $tv->fromArray(array(
    //         'name'         => $name,
    //         'type'         => 'videoGallery',
    //         'caption'      => 'Ссылка на ролик',
    //         'category'     => $cat_id,
    //     ));
    //     $tv->save();
    //     $tvs[] = $tv->get('id').'-'.$tempID;

    //     // Отзывы

    //     // Отзывы - Имя автора
    //     $name = 'otz_name';
    //     $tempID = '11'; 
    //     if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
    //         $tv = $modx->newObject('modTemplateVar');
    //     }
    //     $tv->fromArray(array(
    //         'name'         => $name,
    //         'type'         => 'text',
    //         'caption'      => 'Имя автора',
    //         'category'     => $cat_id,
    //     ));
    //     $tv->save();
    //     $tvs[] = $tv->get('id').'-'.$tempID;

    //     // Отзывы - Достоинства
    //     $name = 'otz_dost';
    //     $tempID = '11'; 
    //     if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
    //         $tv = $modx->newObject('modTemplateVar');
    //     }
    //     $tv->fromArray(array(
    //         'name'         => $name,
    //         'type'         => 'text',
    //         'caption'      => 'Достоинства',
    //         'category'     => $cat_id,
    //     ));
    //     $tv->save();
    //     $tvs[] = $tv->get('id').'-'.$tempID;

    //     // Отзывы - Недостатки
    //     $name = 'otz_nedost';
    //     $tempID = '11'; 
    //     if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
    //         $tv = $modx->newObject('modTemplateVar');
    //     }
    //     $tv->fromArray(array(
    //         'name'         => $name,
    //         'type'         => 'text',
    //         'caption'      => 'Недостатки',
    //         'category'     => $cat_id,
    //     ));
    //     $tv->save();
    //     $tvs[] = $tv->get('id').'-'.$tempID;

    //     // Отзывы - рейтинг
    //     $name = 'otz_reiting';
    //     $tempID = '11'; 
    //     if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
    //         $tv = $modx->newObject('modTemplateVar');
    //     }
    //     $tv->fromArray(array(
    //         'name'         => $name,
    //         'type'         => 'listbox',
    //         'caption'      => 'Рейтинг отзыва',
    //         'elements'     => '1==1||2==2||3==3||4==4||4.5==4_5||5==5',
    //         'category'     => $cat_id,
    //     ));
    //     $tv->save();
    //     $tvs[] = $tv->get('id').'-'.$tempID;


    // // ТВ для категорий - для вывода на главную

    //     // Для каких шаблонов эти ТВ?
    //     $tempIDCategory = '5,8,10,13,16';
    //     $tempIDCategoryDop = $tempIDCategory.',12,18,15';

    //     // Вывод категории на главную - да или нет
    //     $name = 'category_main';
    //     $tempID = $tempIDCategoryDop; 
    //     if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
    //         $tv = $modx->newObject('modTemplateVar');
    //     }
    //     $tv->fromArray(array(
    //         'name'         => $name,
    //         'type'         => 'checkbox',
    //         'caption'      => 'Показывать на главной странице',
    //         'elements'     => 'Да==Да',
    //         'category'     => $cat_id,
    //     ));
    //     $tv->save();
    //     $tvs[] = $tv->get('id').'-'.$tempID;

    //     // Вывод категории на главную - лимит
    //     $name = 'category_limit';
    //     $tempID = $tempIDCategory; 
    //     if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
    //         $tv = $modx->newObject('modTemplateVar');
    //     }
    //     $tv->fromArray(array(
    //         'name'         => $name,
    //         'type'         => 'listbox',
    //         'caption'      => 'Лимит материалов на главной странице',
    //         'elements'     => '1==1||2==2||3==3||4==4||5==5||6==6||7==7||8==8',
    //         'category'     => $cat_id,
    //     ));
    //     $tv->save();
    //     $tvs[] = $tv->get('id').'-'.$tempID;

    //     // Вывод категории на главную - шаблон
    //     $name = 'category_tpl';
    //     $tempID = $tempIDCategory; 
    //     if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
    //         $tv = $modx->newObject('modTemplateVar');
    //     }
    //     $tv->fromArray(array(
    //         'name'         => $name,
    //         'type'         => 'text',
    //         'caption'      => 'Шаблон вывода категорию на главную страницу',
    //         'description'  => 'Если не знаете, что это - не трогать',
    //         'category'     => $cat_id,
    //     ));
    //     $tv->save();
    //     $tvs[] = $tv->get('id').'-'.$tempID;

    //     // Вывод категории на главную - TV
    //     $name = 'category_tv';
    //     $tempID = $tempIDCategory; 
    //     if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
    //         $tv = $modx->newObject('modTemplateVar');
    //     }
    //     $tv->fromArray(array(
    //         'name'         => $name,
    //         'type'         => 'text',
    //         'caption'      => 'Дополнительные поля категории, через запятую',
    //         'description'  => 'Если не знаете, что это - не трогать',
    //         'category'     => $cat_id,
    //     ));
    //     $tv->save();
    //     $tvs[] = $tv->get('id').'-'.$tempID;

    //     // Цвет фона на главную 
    //     $name = 'category_bgcolor';
    //     $tempID = $tempIDCategoryDop; 
    //     if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
    //         $tv = $modx->newObject('modTemplateVar');
    //     }
    //     $tv->fromArray(array(
    //         'name'         => $name,
    //         'type'         => 'colorpicker',
    //         'caption'      => 'Цвет фона шота на главной',
    //         'description'  => '',
    //         'category'     => $cat_id,
    //     ));
    //     $tv->save();
    //     $tvs[] = $tv->get('id').'-'.$tempID;

    //     // Изображение фона на главную
    //     $name = 'category_bgimage';
    //     $tempID = $tempIDCategoryDop; 
    //     if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
    //         $tv = $modx->newObject('modTemplateVar');
    //     }
    //     $tv->fromArray(array(
    //         'name'         => $name,
    //         'source'       => '2',
    //         'type'         => 'fastuploadtv',
    //         'caption'      => 'Фоновое изображение для шота на главной',
    //         'category'     => $cat_id,
    //         'input_properties' => array(
    //                                 "path" => "id/{id}/",
    //                                 "prefix" => "",
    //                                 "MIME" => "",
    //                                 "showValue" => true,
    //                                 "showPreview" => true
    //                             ),
    //     ));
    //     $tv->save();
    //     $tvs[] = $tv->get('id').'-'.$tempID;

        /* Источник файлов для TV */
            // $sourceElement = $modx->newObject('sources.modMediaSourceElement');
            // $sourceElement->fromArray(array(
            //     'object' => $tv->get('id'),
            //     'context_key' => 'web',
            // ), '', true, true);
            // $sourceElement->set('source', 2);
            // $sourceElement->save();
            /* end Источник файлов для TV */
       

    // end ТВ для категорий - для вывода на главную

    // ТВ для акции - для вывода на главную

        // Для каких шаблонов эти ТВ?
        // $tempIDCategory = '17';

        // $name = 'akcia_date_ot';
        // $tempID = $tempIDCategory; 
        // if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
        //     $tv = $modx->newObject('modTemplateVar');
        // }
        // $tv->fromArray(array(
        //     'name'         => $name,
        //     'type'         => 'date',
        //     'caption'      => 'Дата начала акции',
        //     'category'     => $cat_id,
        // ));
        // $tv->save();
        // $tvs[] = $tv->get('id').'-'.$tempID;

        // $name = 'akcia_date_do';
        // $tempID = $tempIDCategory; 
        // if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
        //     $tv = $modx->newObject('modTemplateVar');
        // }
        // $tv->fromArray(array(
        //     'name'         => $name,
        //     'type'         => 'date',
        //     'caption'      => 'Дата завершения акции',
        //     'category'     => $cat_id,
        // ));
        // $tv->save();
        // $tvs[] = $tv->get('id').'-'.$tempID;

        // // ТВ для лицензий 

        // $name = 'licenzii';
        // $tempID = '18'; 
        // if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
        //     $tv = $modx->newObject('modTemplateVar');
        // }
        // $tv->fromArray(array(
        //     'name'         => $name,
        //     'type'         => 'migx',
        //     'caption'      => 'Лицензии',
        //     'category'     => $cat_id,
        //     'input_properties' => array(
        //                             "formtabs" => '[{"caption":"Image", "fields": 
        //                                               [
        //                                                {"field":"image1","caption":"Изображение 1","inputTVtype":"image","sources":"[{\"MIGX_id\":\"1\",\"context\":\"web\",\"sourceid\":\"2\"}]"},
        //                                                {"field":"image2","caption":"Изображение 2","inputTVtype":"image","sources":"[{\"MIGX_id\":\"1\",\"context\":\"web\",\"sourceid\":\"2\"}]"},
        //                                                {"field":"image3","caption":"Изображение 3","inputTVtype":"image","sources":"[{\"MIGX_id\":\"1\",\"context\":\"web\",\"sourceid\":\"2\"}]"}
        //                                               ]
        //                                             }]',
        //                             "columns" => '[
        //                                              {"header": "Изображение 1", "sortable": "false", "dataIndex": "image1","renderer": "this.renderImage"},
        //                                              {"header": "Изображение 2", "sortable": "false", "dataIndex": "image2","renderer": "this.renderImage"},
        //                                              {"header": "Изображение 3", "sortable": "false", "dataIndex": "image3","renderer": "this.renderImage"}
        //                                             ]'
        //                         ),
        // ));
        // $tv->save();
        // $tvs[] = $tv->get('id').'-'.$tempID;


    // Цвета сайта
        /*
        $name = 'colorbody';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'colorpicker',
            'caption'      => 'Цвет фона сайта',
            'description'  => '',
            'category'     => $cat_id,
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'colortext';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'colorpicker',
            'caption'      => 'Основной цвет текста',
            'description'  => '',
            'category'     => $cat_id,
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'color1';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'colorpicker',
            'caption'      => 'Цвет сайта 1',
            'description'  => '',
            'category'     => $cat_id,
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'color2';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'colorpicker',
            'caption'      => 'Цвет сайта 2',
            'description'  => '',
            'category'     => $cat_id,
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'color3';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'colorpicker',
            'caption'      => 'Цвет сайта 3',
            'description'  => '',
            'category'     => $cat_id,
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'colorShadow';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'colorpicker',
            'caption'      => 'Цвет тени',
            'description'  => '',
            'category'     => $cat_id,
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'colorlink';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'colorpicker',
            'caption'      => 'Цвет ссылок',
            'description'  => '',
            'category'     => $cat_id,
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;

        $name = 'colorlinkhover';
        $tempID = '2'; 
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'colorpicker',
            'caption'      => 'Цвет ссылок при наведении',
            'description'  => '',
            'category'     => $cat_id,
        ));
        $tv->save();
        $tvs[] = $tv->get('id').'-'.$tempID;
        */
        /*
        $name = 'gallery';
        if (!$tv = $modx->getObject('modTemplateVar', array('name' => $name))) {
            $tv = $modx->newObject('modTemplateVar');
        }
        $tv->fromArray(array(
            'name'         => $name,
            'type'         => 'migx',
            'caption'      => 'Фотогалерея',
            'category'     => $cat_id,
            'input_properties' => array(
                                    "formtabs" => '[{"caption":"Gallery","fields": [{"field":"img","caption":"Картинка","inputTV":"img"},{"field":"title","caption":"Название"}]}]',
                                    "columns" => '[{"header": "Картинка","dataIndex": "img","renderer":"this.renderImage","width":"100"},{"header": "Название","dataIndex": "title","width":"400"}]'
                                ),
        ));
        $tv->save();
        $tvs[] = $tv->get('id');
        */


        foreach ($modx->getCollection('modTemplate') as $template) {
            $templateId = $template->id;
            foreach ($tvs as $k => $tv) {
                $tvOpt = explode("-", $tv);
                $tvid = $tvOpt[0];
                $tvTemps = explode(",",$tvOpt[1]);
                
                foreach ($tvTemps as $tvTemp){
                    if($templateId == $tvTemp){
                        if (!$tvt = $modx->getObject('modTemplateVarTemplate', array('tmplvarid' => $tvid, 'templateid' => $templateId))) {
                            $record = array('tmplvarid' => $tvid, 'templateid' => $templateId);
                            $keys = array_keys($record);
                            $fields = '`' . implode('`,`', $keys) . '`';
                            $placeholders = substr(str_repeat('?,', count($keys)), 0, -1);
                            $sql = "INSERT INTO {$modx->getTableName('modTemplateVarTemplate')} ({$fields}) VALUES ({$placeholders});";
                            $modx->prepare($sql)->execute(array_values($record));
                        }
                    }
                }
            }
        }



        /*
        foreach ($modx->getCollection('modTemplate') as $template) {
            $templateId = $template->id;
            foreach ($tvs as $k => $tvid) {
                if (!$tvt = $modx->getObject('modTemplateVarTemplate', array('tmplvarid' => $tvid, 'templateid' => $templateId))) {
                    $record = array('tmplvarid' => $tvid, 'templateid' => $templateId);
                    $keys = array_keys($record);
                    $fields = '`' . implode('`,`', $keys) . '`';
                    $placeholders = substr(str_repeat('?,', count($keys)), 0, -1);
                    $sql = "INSERT INTO {$modx->getTableName('modTemplateVarTemplate')} ({$fields}) VALUES ({$placeholders});";
                    $modx->prepare($sql)->execute(array_values($record));
                }
            }
        }
        */
        break;
    case xPDOTransport::ACTION_UNINSTALL:
        break;
}

return true;