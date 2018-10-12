<?php

/*
  index.php - HelloWorld administration
  Copyright (C) 2010 Stephen Lawrence Jr.

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
 */

session_start();

// Include the main OpenDocMan config file
include('../../odm-load.php');

// Check to make sure there is a session user ID set
if (!isset($_SESSION['uid']))
{
    header('Location:index.php?redirection=' . urlencode($_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']));
    exit;
}

// This line ensures that you can use the phpsecureurl class for making secure URL's if
// configured to use them.
$secureurl = new phpsecureurl;

// Create the user object
$user_obj = new User($_SESSION['uid'], $GLOBALS['connection'], DB_NAME);

// Only root user as configured in the OpenDocMan config can access this plugin. Can also be isAdmin()
if (!$user_obj->isRoot())
{
    header('Location:' . $secureurl->encode('error.php?ec=1'));
    exit;
}

// Now draw the standard header, menu, and status bar
draw_header('Hello World');
draw_menu($_SESSION['uid']);
draw_status_bar('Hello World');

// Here we check to see if a form or link has something to request
if (isset($_REQUEST['cmd']) && $_REQUEST['cmd'] == 'test')
{

    if (!isset($_REQUEST['testvalue']) || $_REQUEST['backup_url'] == '')
    {
        echo 'Please enter a testvalue';
        exit;
    }
}
else
{
    include('HelloWorld_class.php');
    // Here we create the object
    $helloworld_obj = new HelloWorld();

    // Set a value
    $helloworld_obj->setHelloWorld('Hello World!');

    // Get a value
    $helloworld = $helloworld_obj->getHelloWorld();

    // Assign this value for our view
    $GLOBALS['smarty']->assign('helloworld', $helloworld);

    // Make sure Smarty will look for the template file in this folder
    $curdir = dirname(__FILE__);
    $GLOBALS['smarty']->display('file:' . $curdir . '/templates/helloworldview.tpl');
}
// Draw the standard OpenDocMan footer
draw_footer();
