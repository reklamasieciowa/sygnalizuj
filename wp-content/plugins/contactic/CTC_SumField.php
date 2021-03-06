<?php
/*
    "Contact Form to Database" Copyright (C) 2011-2012 Michael Simpson  (email : michael.d.simpson@gmail.com)

    This file is part of Contactic.

    Contactic is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Contactic is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Contactic.
    If not, see <http://www.gnu.org/licenses/>.
*/

require_once('CTC_HistogramTransform.php');

class CTC_SumField extends CTC_HistogramTransform {

    function __construct($valueField, $groupByField = null) {
        parent::__construct($valueField, $groupByField);
    }

    public function addEntry(&$entry) {
        if (array_key_exists($this->valueField, $entry) && is_numeric($entry[$this->valueField])) {
            $value = $entry[$this->valueField];
            $groupByName = empty($this->groupByField) ? $this->valueField : $entry[$this->groupByField];

            if ($value !== null && $value !== '') {
                if (!array_key_exists($groupByName, $this->values)) {
                    $this->values[$groupByName] = $value;
                } else {
                    $this->values[$groupByName] += $value;
                }
            }
        }
    }
}