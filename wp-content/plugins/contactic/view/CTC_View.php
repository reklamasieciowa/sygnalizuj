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

abstract class CTC_View {

    /**
     * @abstract
     * @param  $plugin ContacticPlugin
     * @return void
     */
    abstract function display(&$plugin);

    protected function pageHeader(&$plugin) {
        $this->sponsorLink($plugin);
        $this->headerLinks($plugin);
    }

    /**
     * @param $plugin ContacticPlugin
     * @return void
     */
    protected function sponsorLink(&$plugin) {
    }

    /**
     * @param $plugin ContacticPlugin
     * @return void
     */
    protected function headerLinks(&$plugin) {
        //$notDonated = 'true' != $plugin->getOption('Donated', 'false', true);

        // NOTICE HERE

    }
}
