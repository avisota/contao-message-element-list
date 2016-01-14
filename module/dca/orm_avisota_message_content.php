<?php

/**
 * Avisota newsletter and mailing system
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2013
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    avisota/contao-message-element-list
 * @license    LGPL-3.0+
 * @filesource
 */

/**
 * Table orm_avisota_message_content
 * Entity Avisota\Contao:MessageContent
 */
$GLOBALS['TL_DCA']['orm_avisota_message_content']['metapalettes']['list'] = array
(
    'type'      => array('cell', 'type', 'headline'),
    'list'      => array('listType', 'listItems'),
    'expert'    => array(':hide', 'cssID', 'space'),
    'published' => array('invisible'),
);


$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['listType']  = array
(
    'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['listType'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('ordered', 'unordered'),
    'reference' => &$GLOBALS['TL_LANG']['orm_avisota_message_content']
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['listItems'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['listItems'],
    'exclude'   => true,
    'inputType' => 'listWizard',
    'eval'      => array('allowHtml' => true)
);
