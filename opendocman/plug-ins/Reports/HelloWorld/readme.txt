=== HelloWorld ===
Contributors: Stephen J. Lawrence Jr. (Contributor Name Here)
Donate link: http://www.opendocman.com (The URL for users to visit to donate to the plug-in author)
Tags: hello, world, plug-in, skeleton (Comma separated list of tags)
Requires at least: 1.2.6 (Minimum version of OpenDocMan required for this plug-in)
Tested up to: 1.2.6 (Version of OpenDocMan that has been proven to run this plug-in)
Stable tag: 0.1 (Version number of your plug-in)

This module is designed to demonstrate how to add an administration module to
the core OpenDocMan installation. Currently only admin menu plug-ins are active. There
will be hooks added to other parts of OpenDocMan in the future to allow for more
plug-in opportunities.

== Description ==

Here would be a longer description of your plugin.

The process for creating an plug-in is:

Lets say you are creating a new plug-in for doing some reports. Here is how you would get started....

1) Download the HelloWorld plug-in from http://www.opendocman.com/
2) Extract the plug-in inside the plug-ins/ folder. You should have plug-ins/HelloWorld now.
1) Rename the `HelloWorld` folder to `Reports`
2) Edit the plug-ins/Reports/readme.txt file
3) Rename the `plug-ins/Reports/HelloWorld_class.php` file to `plug-ins/Reports/Reports_class.php`.
4) Edit the plug-ins/Reports/index.php file
5) Ensure the plug-ins/Reports/templates_c folder is writeable.
6) Edit the Reports_class.php file

Your views go inside of plug-ins/Reports/templates. They are Smarty template engine files.

You can view the Plugin_class.php file for more detail on the methods available.

OpenDocMan Plug-in API:

For more information on the OpenDocMan API visit our wiki site at http://www.opendocman.com/dokuwiki/

== Installation ==

1. Upload the `HelloWorld` folder to the `plug-ins/` directory
2. Visit the Admin page

== Frequently Asked Questions ==

= Does this do anything? =

At this time, no. But soon...

== Changelog ==

= 0.1 =
* Initial release