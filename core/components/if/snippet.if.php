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
 * Simple if (conditional) snippet
 *
 * @package if
 */
if (!empty($debug)) {
    print_r($scriptProperties);
    if (!empty($die)) die();
}
$modx->parser->processElementTags('',$subject,true,true);

$output = '';
$operator = !empty($operator) ? $operator : '';
$operand = !isset($operand) ? '' : $operand;
if (isset($subject)) {
    if (!empty($operator)) {
        $operator = strtolower($operator);
        switch ($operator) {
            case '!=':
            case 'neq':
            case 'not':
            case 'isnot':
            case 'isnt':
            case 'unequal':
            case 'notequal':
                $output = (($subject != $operand) ? $then : (isset($else) ? $else : ''));
                break;
            case '<':
            case 'lt':
            case 'less':
            case 'lessthan':
                $output = (($subject < $operand) ? $then : (isset($else) ? $else : ''));
                break;
            case '>':
            case 'gt':
            case 'greater':
            case 'greaterthan':
                $output = (($subject > $operand) ? $then : (isset($else) ? $else : ''));
                break;
            case '<=':
            case 'lte':
            case 'lessthanequals':
            case 'lessthanorequalto':
                $output = (($subject <= $operand) ? $then : (isset($else) ? $else : ''));
                break;
            case '>=':
            case 'gte':
            case 'greaterthanequals':
            case 'greaterthanequalto':
                $output = (($subject >= $operand) ? $then : (isset($else) ? $else : ''));
                break;
            case 'isempty':
            case 'empty':
                $output = empty($subject) ? $then : (isset($else) ? $else : '');
                break;
            case '!empty':
            case 'notempty':
            case 'isnotempty':
                $output = !empty($subject) && $subject != '' ? $then : (isset($else) ? $else : '');
                break;
            case 'isnull':
            case 'null':
                $output = $subject == null || strtolower($subject) == 'null' ? $then : (isset($else) ? $else : '');
                break;
            case 'inarray':
            case 'in_array':
            case 'ia':
                $operand = explode(',',$operand);
                $output = in_array($subject,$operand) ? $then : (isset($else) ? $else : '');
                break;
            case '==':
            case '=':
            case 'eq':
            case 'is':
            case 'equal':
            case 'equals':
            case 'equalto':
            default:
                $output = (($subject == $operand) ? $then : (isset($else) ? $else : ''));
                break;
        }
    }
}
if (!empty($debug)) { var_dump($output); }
unset($subject);
return $output;