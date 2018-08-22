<?php

/** @var $modx modX */
if (!$modx = $object->xpdo AND !$object->xpdo instanceof modX) {
    return true;
}

/** @var $options */
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:


        /* О компании */
        $templateId = $templid = $modx->getObject('modTemplate', array('templatename' => 'Decland'))->get('id');;
        $alias = 'decland';
        $parent = 0;
        if (!$resource = $modx->getObject('modResource', array('alias' => $alias))) {
            $resource = $modx->newObject('modResource');
            $resource->set('content', preg_replace(array('/^\n/', '/[ ]{2,}|[\t]/'), '', '
                <h1><img alt="" height="201" src="assets/components/decland/web/uploads/image.png" style="float:left" width="296" />ДЕКОРАТИВНАЯ ПЛИТКА</h1>

                <p>Декоративная плитка поможет создать неповторимый интерьер в любом доме, квартире, офисе или любом другом помещении. Данный вид отделочного материала является самым доступным и недорогим. С его помощью можно быстро и без особого труда придать интерьеру неотразимый блеск, шикарный вид и непревзойденную красоту.<br />
                &nbsp;<br />
                Разнообразие и богатый ассортимент декоративной плитки, представленный компанией «Наш Дом» удовлетворит самых придирчивых покупателей.</p>

                <p>&nbsp;</p>

                <p>Купить плитку в Щелково можно у нас - в магазине «Наш Дом» по привлекательным ценам.<br />
                Наши изделия для облицовки обладают такими отличительными чертами как:</p>

                <ul>
                    <li>непревзойденное качество;</li>
                    <li>удивительная прочность;</li>
                    <li>эффектное оформление;</li>
                    <li>неповторимая надежность.</li>
                </ul>

                <p>«Наш Дом» вы легко найдете по адресу: Московская область, Щелковский район, 41-й км Щелковского шоссе, д.1.</p>

            '));
        }
        $resource->fromArray(array(
            'class_key'    => 'modDocument',
            'menuindex'    => 1,
            'pagetitle'    => 'Лендинг Decland',
            'longtitle'    => 'Лендинг Decland',
            'menutitle'    => '',
            'isfolder'     => 1,
            'alias'        => $alias,
            'uri'          => $alias . '/',
            'uri_override' => 0,
            'published'    => 1,
            'publishedon'  => time(),
            'hidemenu'     => 0,
            'richtext'     => 1,
            'parent'       => $parent,
            'template'     => $templateId,
            'introtext'    => '',
        ));
        $resource->save();


        break;
    case xPDOTransport::ACTION_UNINSTALL:
        break;
}

return true;
