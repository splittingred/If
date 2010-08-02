<?php
/**
 * If
 *
 * Copyright 2009-2010 by Jason Coward <jason@modx.com> and Shaun McCormick
 * <shaun@modx.com>
 *
 * If is free software; you can redistribute it and/or modify it under the terms
 * of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * If is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * If; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package if
 */
/**
 * Default snippet properties
 *
 * @package if
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'subject',
        'desc' => 'The data being affected.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'operator',
        'desc' => 'The type of conditional.',
        'type' => 'list',
        'options' => array(
            array('name' => 'EQ','value' => 'EQ'),
            array('name' => 'NEQ','value' => 'NEQ'),
            array('name' => 'LT','value' => 'LT'),
            array('name' => 'GT','value' => 'GT'),
            array('name' => 'LTE','value' => 'LTE'),
            array('name' => 'GTE','value' => 'GT'),
            array('name' => 'EMPTY','value' => 'EMPTY'),
            array('name' => 'NOTEMPTY','value' => 'NOTEMPTY'),
            array('name' => 'ISNULL','value' => 'ISNULL'),
            array('name' => 'INARRAY','value' => 'inarray'),
        ),
        'value' => 'EQ',
    ),
    array(
        'name' => 'operand',
        'desc' => 'When comparing to the subject, this is the data to compare to.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'then',
        'desc' => 'If conditional was successful, output this.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'else',
        'desc' => 'If conditional was unsuccessful, output this.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'debug',
        'desc' => 'Will output the parameters passed in, as well as the end output. Leave off when not testing.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
);
return $properties;