<?php

/**
 * Description of HelloWorld_class.php
 *
 * This class is a skeleton class created to provide an example
 * of how to add a plugin to OpenDocMan.
 *
    Copyright (C) 2010-2011 Stephen Lawrence Jr.

    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 * @author Stephen J. Lawrence Jr.
 * @param string $helloworld
 */
class HelloWorld extends Plugin {
    var $helloworld='';

    /*
     * HelloWorld constructor for the HelloWorld plugin
     * @param string $_helloworld Message to display
     */
    function HelloWorld($_helloworld='') {
        $this->name = 'HelloWorld';
        $this->author = 'Stephen J. Lawrence Jr.';
        $this->version = '1.0';
        $this->homepage = 'http://www.opendocman.com';
        $this->description = 'Skeleton plugin for OpenDocMan';
        
        $this->helloworld = $_helloworld;
    }

    /*
     * @param string $_var The string to display
     */
    function setHelloWorld($_var) {
        $this->helloworld = $_var;
    }

    /*
     * @returns string $var Get the value of helloworld var
     */
    function getHelloWorld() {
        $var = $this->helloworld;
        return $var;
    }
    
    /*
     * Draw the admin menu
     * Required if you want an admin menu to show for your plugin
     */
    function onAdminMenu()
    {
        $curdir = dirname(__FILE__);
        $GLOBALS['smarty']->display('file:' . $curdir . '/templates/helloworld.tpl');
    }

    function  onBeforeAdd()
    {
        //parent::onDuringAdd();
        echo '<table><td><td><h1>This is displayed before the add file is submitted</h1></td></tr></table>';
    }

    function onAfterLogout()
    {
        echo 'Goodbuy Cruel World!';exit;
    }
}
