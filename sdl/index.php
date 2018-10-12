<?php
################################################################################
#     ####  #####  ###  ####  #   # #####
#     #   # #     #   # #   # ## ## #
#     ####  ####  ##### #   # # # # ####
#     #  #  #     #   # #   # #   # #
#     #   # ##### #   # ####  #   # #####
################################################################################
/*
Author  : David Wan
Contact : inventordavid@yahoo.com (Email, Msn)
          davidwan@enapro.com
--------------------------------------------------------------------------------
Introduction
--------------------------------------------------------------------------------
Application Name : Simple Directory Listing
Size             : ~130 KBs
Version          : 1.0.001
Last Modified    : 2006-08-16
License          : GNU GENERAL PUBLIC LICENSE
Web Site         : http://enapro.com/simpledirectorylisting
                   http://sourceforge.net/projects/simpledirectory
File Created on  : Thursday, 27 July, 2006, 12:37:40 +0800

Simple Directory Listing is a single file php script which functions as
directory listing in an apache http server. It has a similar interface as
directory list in an apache http server, however, it provides more common and
useful functions and features :
- Delete files or folders which are not necessary to be empty
- Move directories
- Copy directories to another folder
- Rename directories
- Chmod directories and all their subdirectories
- Compress files or folders as a compressed archive
- Download a script file
- Download a folder as a compressed archive
- Read/Edit files
- MD5/SHA1/CRC32 a file
- Create an empty file/folder
- Upload files by http
- .htaccess wizard (password protection, prevent hotlinking of pictures, etc)
- Add a page description for a folder
- Set a particular folder as a "virtual root" for directory listing
- Set time offset for last modification time of files
- No Javascript at all
- Multi languages
  + English
  + Chinese
- Unicode supported
- ......

I am sorry that the programming skill in that script is very poor. I will keep
on improving the codes. :)
Thanks very much for using Simple Directory Listing!

--------------------------------------------------------------------------------
Installation Steps / How to Use :
--------------------------------------------------------------------------------
Important Notes Before You Start :
- Do not implement this application as a directory listing application with full
access mode to the public. Set a password (please refer to your server setting)
for the folder containing this application if you allow full access to it
without logging in.
- Use this application at your own risk.
- Modifying the code in this application may lead to some serious security
holes if you are not an advanced programmer(although I am not :) ).
- Never expose your entire server content to the public.

Installation Steps :
[1] Configuration
- Use an text editor to open the php file of this application.
- Write your own username and password in $cfg['username'] and $cfg['password'].
- $cfg['password'] can be a sha1 code of your password.
- Execute the php file with $cfg['username']="" and $cfg['password']="" would
show an installation page where you may sha1 your password. Copy the hashcode
and assign it to $cfg['password']. $cfg['password'] would be treated as a sha1
code if it is longer than 20 characters or it would be treated as a raw password
without doing a sha1 process to check it.
- Modify $cfg['cookie'] to true if you want to have a "remember me" function
saving your identity in cookies.
- Assign false to $cfg['access'] whenever you want to disable the application.
[2] Using the Application
- Check System Requirement below.
- Make sure your server can run php script.
- Open the php file of this application in your browser.
- Browse the page as you browse a normal apache directory listing page.
- Explore the functions yourself!
- Read FAQ to learn more of this application.

Questions/Bugs :
- I have questions about this application!
  + Please read the FAQ section below.
  + Please read the forum in the official site.
  + Ask in the forum.
  + Feel free to contact me.
- I have found bugs!
  + Report the bugs in the bug reporting page in the official site.
  + Feel free to contact me.

System Requirement :
- Latest version of PHP 4.x 
  + (optional)with session support to use enable login
  + GZip support, (optional)Bzip2
- Web Browser
  + (optional)with cookies enabled to use "remember me"
- (optional)Apache Server
  + .htaccess support
  
--------------------------------------------------------------------------------
The Program Flow : 
--------------------------------------------------------------------------------
main()
 |
validateconfig()
validateaccess()
getarg()
validategetpostarg()
limitguest()
printout()
 |
pathmain()
printout_header()
directorylistarraytakeaway()
printout_directorylist()
printout_currentdirfunction()
 =

There are few places that would check for guest mode :
validateaccess() for $cfg['access']==='guest'
limitguest() for $cfg['access']==='guest'
printout() for argarray['action']==='guest'
printout_header() for argarray['action']==='guest'
printout_directorylist() for argarray['action']==='guest'

--------------------------------------------------------------------------------
License :
--------------------------------------------------------------------------------
GNU GENERAL PUBLIC LICENSE
Version 2, June 1991
- This free and opensource application is distributed under the GNU GENERAL
PUBLIC LICENSE (Version 2, June 1991).
- This is an opensource application, but please read the license of it.
- Please refer to an attached file in this package for the detail of the
license.
- Links of the License :
  + http://www.gnu.org/licenses/gpl.html
  + http://www.gnu.org/licenses/gpl.txt
		       
--------------------------------------------------------------------------------
FAQ / Bugs :
--------------------------------------------------------------------------------
[1] General :
- [1.1] What is this application about?
        + To provide a simple directory listing application with many common
          functions in a directory explorer.
- [1.2] Is it free to use?
        + Yes.
- [1.3] May I use it in my business?
        + Generally yes. Please read the license.
- [1.4] Why do you create it?
        + To create a better version of the original apache directory listing.
- [1.5] Is it secure?
        + Hard to say. It would be safe if you put the script in a password
          protected folder.
- [1.6] This application is useful to me. How do I help?
        + You may make a donation which would be greatly appreciated.
        + You may try to help to answer messages in the forum.
        + You may report errors/bugs to me or suggest some ideas on improving
          it.
- [1.7] Where can I get the latest version of this application?
        + http://enapro.com/simpledirectorylisting
        + http://sourceforge.net/projects/simpledirectory
                    
[2] Installation/Configuration :
- [2.1] How to install this application?
        + Set your username and password in the configuration part of the file.
- [2.2] Does it need SQL support?
        + No.
- [2.3] What version of PHP does it require?
        + PHP 4.3.
- [2.4] I want a "login" button in the guest mode. How to do it?
        + This extra mode is not supported. However, you may upload two files
          of this script giving them different filenames and set one to guest
          mode and the other one to login mode. The user should browse the
          script set to login mode. Guests who are only allowed to read should
          go to the script set to guest mode.
        
[3] Usgae :
- [3.1] Browse :
  - [3.1.1] How to sort the directory list?
            + Click on the headers.
  - [3.1.2] How to go to a parent directory?
            + Click on the name Parent Directory.
  - [3.1.3] How to sort in a order that would show folders first?
            + Click on the arrow pointing download near the header of name.
- [3.2] Functions :
  - [3.2.1] What do the icons in the function column mean?
            + Place your mouse cursor on each icon to have a check.
  - [3.2.2] Can I delet a folder which has files in it?
            +	Yes. There will be a recursive deletion to do it.
  
[3] Bugs :
  - [4.1] What the "duck"(WTF)! There are many bugs.
          + Please report them in the bug reporting page or forum or contact me.
          
--------------------------------------------------------------------------------
Release Notes :
--------------------------------------------------------------------------------
2006-08-16 :
- Release of Version 1.0.001
- First release to the public

--------------------------------------------------------------------------------
Contact / Support:
--------------------------------------------------------------------------------
Author :
My name is David Wan. I write programmes in C++, Java, PHP.
I do not want to talk too much about myself here. If you want to know more
about me, please contact me. :)

Contact of Author :
- Email :
  + inventordavid@yahoo.com
  + davidwan@enapro.com
- Web Site : 
  + http://enapro.com/simpledirectorylisting
  + http://sourceforge.net/projects/simpledirectory
- IRC :
  + irc://irc.freenode.net/simpledirectorylisting

Donations :
You can support development of Simple Directory Listing by donating.
Should you have any queries about donation, please contact me.
- PayPal :
  + inventordavid@yahoo.com
  + https://sourceforge.net/donate/index.php?group_id=174949
- Contact me if you do not have a PayPal account:
  + inventordavid@yahoo.com

--------------------------------------------------------------------------------
Reference :
--------------------------------------------------------------------------------
- Compress
  + http://www.zend.com/zend/spotlight/creating-zip-files2.php
  + http://www.zend.com/zend/spotlight/creating-zip-files3.php?article=creating-
    zip-files3&kind=sl&id=1012&open=1&anc=0&view=1#notes
  + http://www.weberdev.com/get_example-4066.html
  + http://www.phpmyadmin.net/home_page/index.php
- Directory Listing
  + http://sourceforge.net/projects/webfilebrowser
  + http://evoluted.net/community/code/directorylisting.php
  + Apache Directory Listing GUI
- General PHP
  + http://us2.php.net/manual/en/
  + irc://irc.freenode.net/php  
- htaccess
  + http://www.clockwatchers.com/htaccess_tool.html
  + http://www.i-webhk.com/go.php?tt=bs05&id=1
  + http://www.phpdc.com/article/14/
- HTML
  + http://www.htmlcodetutorial.com
- Icons
  + Apache Server
- Translations
  + http://www.kanhan.com/tdc/tools3.html
  
*/
################################################################################
#      ###  ###  #   #  ##### ###  #### #   # ####  #####
#     #    #   # ##  #  #      #  #     #   # #   # #
#     #    #   # # # #  ####   #  #  ## #   # ####  ####
#     #    #   # #  ##  #      #  #   # #   # #  #  #
#      ###  ###  #   #  #     ###  ###   ###  #   # #####
################################################################################
$cfg 														= array();		#	The main config variable
#-------------------------------------------------------------------------------
# Access
$cfg['access']									= 'login';		#	(String) 'login', 'guest', 'allowall', 'na'
																							#	- 'login'    	: User has to login to access.
																							#	- 'guest'    	: Read-only mode. There is no need to login.
																							#	- 'allowall' 	: (Not recommended) Everyone can access(It is not recommended unless the folder containing the script is protected with a password.)
																							#	- 'na'       	: It would shut down the service.
$cfg['username']								= 'fantasma';					#	(String) Username for the login mode
																							# - ''(empty string) would let you see only an installation page in the login mode.
																							#	- example 		: 'user'
$cfg['password']								= 'biocon@5940';					#	(String) Password for the login mode
																							# - ''(empty string) would let you see only an installation page in the login mode.
																							#	-	example 		: '123456'
$cfg['cookie']									= false;			#	(Boolean) true, false
																							# - true  			: enable "remember me" for the login mode
																							# - false 			: disable "remember me" for the login mode
#-------------------------------------------------------------------------------	
# Path
$cfg['rootpathmode'] 						= 'documentroot';	#	(String) 'currentdir', 'documentroot', 'serverroot', 'custom'
																								# - 'currentdir'   	: It would set the path of this script as the virtual root,
																								# - 'documentroot' 	: It would set the path of the document root as the virtual root,
																								#	- 'serverroot'   	: It would set the path of the server root as the virtual root,
																								#	- 'custom'       	: It would set $cfg['rootpath'] as the virtual root,
$cfg['rootpath']								= '';						#	(String) Virtual root. It is an absolute path from the server root. Set a particular directory to begin to be browsed.
																								# - example 				: '/home/usr'
																								# - example 				: '/'
																								# - example 				: 'C:/apache/http_docs'
$cfg['relativebeginpathmode']		= 'currentdir';	#	(String) 'currentdir', 'custom'
																								#	-	'currentdir' 		: It would set $cfg['relativebeginpath'] to the path of this script.
																								#	-	'custom'		 		: It would not modify $cfg['relativebeginpath'].
$cfg['relativebeginpath']				= '';						#	(String) You may set a relative path to the virtual root path($cfg['rootpath'])
																								# - example 				: '.' for the current folder
																								#	-	example 				: '/david'
$cfg['showpathmode']						= 'documentroot';	#	(String) 'none', 'relative', 'documentroot', 'serverroot'
																									# 'none'					: It would show nothing in the navigation bar
																									#	'relative' 			: It would show path relative to the virtual root in the navigation bar
																									#	'documentroot' 	: It would show path relative to the document root in the navigation bar
																									#	'serverroot' 		: It would show path relative to the server root in the navigation bar
#-------------------------------------------------------------------------------
# System
//$cfg['slash']										= "/";			#	= DIRECTORY_SEPARATOR;?
$cfg['filemode'] 								= '0644';			#	(String) Mode of permission for creating	a file									//= 0666 - umask(); //default mode is 0666
$cfg['dirmode'] 								= '0755'; 		#	(String) Mode of permission for creating	a folder								//= 0777 - umask();	//default mode is 0777
$cfg['pagedescriptionfilename']	= '.htsdl';		# (String) Filename of page description files that are created by simple directory listing
$cfg['filesizemode']						= 'fileonly'; #	(String) 'fileonly', 'all'
																							#	-	'fileonly' 	:	Only size of files are shown.
																							#	-	'all'				: The total size of all subdirectories in a folder is calculated and shown. It may greatly lower performance of your server.
$cfg['descriptionmode']					= 'custom';		#	(String) 'apache', 'custom'
																							#	-	'apache'		:	It would fetch description data of apache directory listing from the file set to $cfg['descriptionapachepath'].
																							#	-	'custom'		: It would use $cfg['text']['description'] as description of directories.
$cfg['descriptionapachepath']		= '';					#	(String) Path of the folder containing apache httpd-autoindex.conf
																							#	-	example 		: 'C:\\apache\\conf\\extra\\httpd-autoindex.conf';
																							#	-	example 		: '/conf/extra/httpd-autoindex.conf';
$cfg['captchalength']						= 6;					# (Integer) The length of the captcha string in the login page.
																							#	- example 		: 6
$cfg['phpdebugmsg']							= true;				# (Boolean) true, false  This setting does not apply to Guest Mode as it is always set to hide debug messages.
																							#	-	true				: show debug/error messages
																							#	-	false				: hide debug/error messages
#-------------------------------------------------------------------------------
# Display
$cfg['maxstrlenname']						= 23;					# (Integer) Width in number of characters of column of the field "Name"
$cfg['maxstrlendescription']		= 15;					# (Integer) Width in number of characters of column of the field "Description"
$cfg['timeoffset']							= +8;					#	(Integer) Offset counted in hour of the modification time of directories
																							#	- to increase time, use positive numbers, eg 1, 2 
																							#	- to decrease time, use negative numbers, eg -1, -2																							
#-------------------------------------------------------------------------------
# Sorting
$cfg['headergroupdir']					= 'N';				# (String) 'A', 'D', 'N' They are the default folders sorting method.
																							#	-	'A': Group folders at the top in directory listing.
																							#	-	'D': Group folders at the bottom in directory listing.
																							# - 'N': Folders are not grouped.
$cfg['headername']							= 'N';				# (String) 'N', 'S', 'D', 'C', 'F' They are the default sorting column.
																							#	-	'N': Name
																							# - 'M': Last modification time
																							#	-	'S': Size
																							#	-	'D': Description
																							#	-	'P': Permission Mode
																							#	-	'F': Functions available
$cfg['headerorder']							= 'A';				# (String) 'A', 'D'
																							#	- 'A': Sort $cfg['headername'] in ascending order
																							#	-	'D': Sort $cfg['headername'] in descending order
#-------------------------------------------------------------------------------
# Encryption
//$cfg['cryptarg']								= false;			# true, false
//$cfg['cryptargpassword']				=	"";					#
#-------------------------------------------------------------------------------
# File Types
$cfg['filetype']=array(												# Text
	'compressed'	=> array('bz2','gz'	,'zip','tar'),
	'image'				=> array('gif','jpg','jpeg','bmp','png'),
	'movie'				=> array('avi','mpg','mpeg','mov','wmv','mp4'),
	'script'			=> array('php','php3','htm','html','js','css','pl'),
	'sound'				=> array('mp3','wma','wav'),
	'system'			=> array('htaccess','htpasswd','htsdl'),
	'text'				=> array('txt','doc','pdf'),
	'unknown'			=> array(),
);
#-------------------------------------------------------------------------------
# Translation
$cfg['textlang']								= 'en';				# (String) 'en', 'zh', 'ch' Languages
																							#	- 'en' : English
																							# - 'zh' : Traditional Chinese
																							# - 'ch' : Simplified Chinese
$cfg['text']=array(														# Text
	'en'=>array(
		# General Items
		'general'=>array(
			# Outlook
			'bytes'										=> 'Bytes',
			'files'										=> 'Files',
			'folders'									=> 'Folders',
			'name'										=> 'Name',
			'mtime'										=> 'Last modified',
			'size'										=> 'Size',
			'description'							=> 'Description',
			'chmod'										=> 'Perm',
			'function'								=> 'Functions',
			'parentdirectory'					=> 'Parent Directory',
			'currentdirectory'				=> 'Current Directory',
			'navigationindex'					=> 'Index of',
			'navigationnotindocroot'	=> '(Not Within Document Root)',
			'poweredby'								=> 'Powered by',
			'seconds'									=> 'seconds',
			'forbidden'								=> 'Forbidden : You do not have permission to access this document.',
			# Functions
			'filename'								=> 'File Name',
			'filesize'								=> 'File Size',
			//'encoding'								=> 'Encoding',
			'cancelsubmit'						=> 'Cancel',
			'chmodicontitle'					=> 'Change Mode',
			'chmodsubmit'							=> 'Change Mode',
			'chmodsubdirectorytitle'	=> 'Apply change to all of its subdirectories',
			'deleteicontitle'					=> 'Delete',
			'deletesubmit'						=> 'Delete',
			'moveicontitle'						=> 'Move',
			'movesubmittarget'				=> 'Select Directories to Move',
			'movesubmitdestination'		=> 'Move to Destination',
			'renameicontitle'					=> 'Rename',
			'renamesubmit'						=> 'Rename',
			'linkicontitle'						=> 'URL',
			'openfoldericontitle'			=> 'Change Directory',
			'downloadicontitle'				=> 'Download',
			'editicontitle'						=> 'Edit',
			'editsubmit'							=> 'Save',
			'readicontitle'						=> 'Read',
			'copyicontitle'						=> 'Copy & Paste',
			'copysubmittarget'				=> 'Select Directories to Copy',
			'copysubmitdestination'		=> 'Paste to Destination',
			'compressicontitle'				=> 'Compress',
			'compresssubmittarget'		=> 'Select Directories to Compress',
			'compresssubmitcompress'	=> 'Compress',
			'compressencoding'				=> 'Encoding',
			'compresstotalfilesize'		=> 'Total File Size',
			'compresstotalfile'				=> 'Number of Files',
			'compresstotalfolder'			=> 'Number of Folders',
			'compressnewname'					=> 'untitled',
			'compressgz'							=> '.gz (Gzip, zlib)',
			'compressbz2'							=> '.bz2 (Bzip2, bzip2)',
			'compresszip'							=> '.zip (Zip)',
			'checksumicontitle'				=> 'MD5, SHA1, CRC32',
			# Current Direcotory Function
			'username'								=> 'Username',
			'password'								=> 'Password',			
			'createfileicontitle'			=> 'Create File',
			'createfilesubmit'				=> 'Create File',
			'createfilenewname'				=> 'filename.ext',
			'createfoldericontitle'		=> 'Create Folder',
			'createfoldersubmit'			=> 'Create Folder',
			'createfoldernewname'			=> 'New Folder',
			'uploadicontitle'					=> 'Upload',
			'uploadsubmit'						=> 'Upload',
			'uploadyourfile'					=> 'Your Files',
			'htaccessicontitle'				=> '.htaccess',
			'htaccesssubmit'					=> 'Save',
			'htaccessdirectorylisting'=> 'Directory Listing',
			'htaccessallow'						=> 'Allow',
			'htaccessnotallow'				=> 'Not Allow',
			'htaccessdefault'					=> 'Default',
			'htaccesshotlinkimage'		=> 'Prevent Hotlinking of Images(jpg,gif,png,bmp)',
			'htaccesshotlinkaudio'		=> 'Prevent Hotlinking of Audio(mid,mp3,wav,wma)',
			'htaccesshotlinkvideo'		=> 'Prevent Hotlinking of Video(avi,wmv,mov,mp4)',
			'htaccesspasswordprotect'	=> 'Password Protection',
			'htaccessnote'						=> '(Your original .htaccess and .htpasswd will be deleted.)',
			'pagedescriptionicontitle'=> 'Page Description',
			'pagedescriptionsubmit'		=> 'Save',
			'execsubmit'							=> 'Execute',
			'execexecutedcommand'			=> 'Executed Command',
			'login'										=> 'Login',
			'loginverificationcode'		=> 'Verification Code',
			'loginsubmit'							=> 'Login',
			'loginwrong'							=> 'Either Username or Password is Wrong',
			'loginwrongcode'					=> 'Wrong Verification Code (Neither Username nor Password has been checked)',
			'logout'									=> 'Logout',
			'logouticontitle'					=> 'Logout',
			'install'									=> 'Install',
			'installchecksumsubmit'		=> 'Encode',
			'servicena'								=> 'Service Not Available',
			'servicenacontactadmin'		=> 'Please Contact Your Administration.',
		),
		# Description for File Extension
		'description'=>array(
			'compressed'	=> 'Compressed',
			'image'				=> 'Image',
			'movie'				=> 'Movie',
			'script'			=> 'Script',
			'sound'				=> 'Sound',			
			'system'			=> 'System',
			'text'				=> 'Text',
			'folder'			=> 'Folder',
			'unknown'			=> '(unknown)',
		),
	),

	'zh'=>array(
		# General Items
		'general'=>array(
			# Outlook
			'bytes'										=> '位元組',
			'files'										=> '檔案',
			'folders'									=> '資料夾',
			'name'										=> '名稱',
			'mtime'										=> '上次修改時間',
			'size'										=> '大小',
			'description'							=> '描述',
			'chmod'										=> '權限',
			'function'								=> '功能',
			'parentdirectory'					=> '上層的資料夾',
			'currentdirectory'				=> '這層的資料夾',
			'navigationindex'					=> '目錄於',
			'navigationnotindocroot'	=> '(超出文件目錄範圍)',
			'poweredby'								=> 'Powered by',
			'seconds'									=> 'seconds',
			'forbidden'								=> '禁止 : 您沒有讀取此文件的權限.',
			# Functions
			'filename'								=> '檔案名稱',
			'filesize'								=> '檔案大小',
			//'encoding'								=> '編碼',
			'cancelsubmit'						=> '取消',
			'chmodicontitle'					=> '更改權限',
			'chmodsubmit'							=> '確定更改權限',
			'chmodsubdirectorytitle'	=> '應用改變於所有子資料夾及檔案',
			'deleteicontitle'					=> '刪除',
			'deletesubmit'						=> '確定刪除檔案',
			'moveicontitle'						=> '移動',
			'movesubmittarget'				=> '選擇要移動的檔案',
			'movesubmitdestination'		=> '確定移動到目標',
			'renameicontitle'					=> '重新命名',
			'renamesubmit'						=> '確定重新命名',
			'linkicontitle'						=> '超連結',
			'openfoldericontitle'			=> '打開資料夾',
			'downloadicontitle'				=> '下載',
			'editicontitle'						=> '編輯',
			'editsubmit'							=> '儲存編輯',
			'readicontitle'						=> '閱讀',
			'copyicontitle'						=> '複製及貼上',
			'copysubmittarget'				=> '選擇要複製的檔案',
			'copysubmitdestination'		=> '確定貼到目標',
			'compressicontitle'				=> '壓縮',
			'compresssubmittarget'		=> '選擇要壓縮的檔案',
			'compresssubmitcompress'	=> '確定壓縮檔案',
			'compressencoding'				=> '字元編碼',
			'compresstotalfilesize'		=> '總共檔案大小',
			'compresstotalfile'				=> '檔案數目',
			'compresstotalfolder'			=> '資料夾數目',	
			'compressnewname'					=> '壓縮檔案名稱',
			'compressgz'							=> '.gz (Gzip,zlib)',
			'compressbz2'							=> '.bz2 (Bzip2,bzip2)',
			'compresszip'							=> '.zip (Zip)',			
			'checksumicontitle'				=> 'MD5, SHA1, CRC32',
			# Current Direcotory Function
			'username'								=> '登入名稱',
			'password'								=> '登入密碼',				
			'createfileicontitle'			=> '建立空白檔案',
			'createfilesubmit'				=> '確定建立空白檔案',
			'createfilenewname'				=> '空白檔案名稱.ext',			
			'createfoldericontitle'		=> '建立空白資料夾',
			'createfoldersubmit'			=> '確定建立空白資料夾',
			'createfoldernewname'			=> '空白資料夾名稱',			
			'uploadicontitle'					=> '上傳檔案',
			'uploadsubmit'						=> '確定上傳檔案',
			'uploadyourfile'					=> '您的檔案',			
			'htaccessicontitle'				=> '.htaccess',
			'htaccesssubmit'					=> '儲存.htaccess',
			'htaccessdirectorylisting'=> '顯示伺服器目錄(Directory Listing)',
			'htaccessallow'						=> '准許',
			'htaccessnotallow'				=> '不准許',
			'htaccessdefault'					=> '不設定',
			'htaccesshotlinkimage'		=> '防止別的網站連結圖片檔(jpg,gif,png,bmp)',
			'htaccesshotlinkaudio'		=> '防止別的網站連結聲音檔(mid,mp3,wav,wma)',
			'htaccesshotlinkvide'			=> '防止別的網站連結影像檔(avi,wmv,mov,mp4)',
			'htaccesspasswordprotect'	=> '密碼保護',
			'htaccessnote'						=> '(在本資料夾的 .htaccess 和 .htpasswd 檔案將會被刪除.)',
			'pagedescriptionicontitle'=> '頁面描述',
			'pagedescriptionsubmit'		=> '確定儲存頁面描述',
			'execsubmit'							=> '執行',
			'execexecutedcommand'			=> '已執行的指令',
			'login'										=> '登入',
			'loginverificationcode'		=> '驗證碼',
			'loginsubmit'							=> '登入',
			'loginwrong'							=> '登入名稱或登入密碼錯誤',
			'loginwrongcode'					=> '驗證碼錯誤 (系統沒有檢查登入名稱及登入密碼)',			
			'logout'									=> '登出',
			'logouticontitle'					=> '登出',
			'install'									=> '安裝',
			'installchecksumsubmit'		=> '編碼',	
			'servicena'								=> '服務暫停',
			'servicenacontactadmin'		=> '請聯絡您的服務供應主管.',			
		),
		# Description for File Extension
		'description'=>array(
			'compressed'	=> '壓縮檔',
			'image'				=> '圖片',
			'movie'				=> '影像',
			'script'			=> '腳本程式',
			'sound'				=> '聲音',			
			'system'			=> '系統',
			'text'				=> '文字',
			'folder'			=> '資料夾',
			'unknown'			=> '(不能辨識)',
		),
	),

	'ch'=>array(
		# General Items
		'general'=>array(
			# Outlook
			'bytes'										=> '字节',
			'files'										=> '档案',
			'folders'									=> '资料夹',
			'name'										=> '名称',
			'mtime'										=> '上次更改时间',
			'size'										=> '大小',
			'description'							=> '描述',
			'chmod'										=> '权限',
			'function'								=> '功能',
			'parentdirectory'					=> '上层的资料夹',
			'currentdirectory'				=> '这层的资料夹',
			'navigationindex'					=> '目录于',
			'navigationnotindocroot'	=> '(超出文件目录范围)',
			'poweredby'								=> 'Powered by',
			'seconds'									=> 'seconds',
			'forbidden'								=> '禁止 : 您没有读取此文件的权限t.',
			# Functions
			'filename'								=> '文件名',
			'filesize'								=> '档案大小',
			//'encoding'								=> '編碼',
			'cancelsubmit'						=> '取消',
			'chmodicontitle'					=> '更改权限',
			'chmodsubmit'							=> '确定更改权限',
			'chmodsubdirectorytitle'	=> '应用改变于所有子资料夹及档案',
			'deleteicontitle'					=> '删除',
			'deletesubmit'						=> '确定删除档案',
			'moveicontitle'						=> '移动',
			'movesubmittarget'				=> '选择要移动的档案',
			'movesubmitdestination'		=> '确定移动到目标',
			'renameicontitle'					=> '重新命名',
			'renamesubmit'						=> '确定重新命名',
			'linkicontitle'						=> '超连结',
			'openfoldericontitle'			=> '打开资料夹',
			'downloadicontitle'				=> '下载',
			'editicontitle'						=> '编辑',
			'editsubmit'							=> '保存编辑',
			'readicontitle'						=> '阅读',
			'copyicontitle'						=> '复制及粘贴',
			'copysubmittarget'				=> '选择要复制的档案',
			'copysubmitdestination'		=> '确定贴到目标',
			'compressicontitle'				=> '压缩',
			'compresssubmittarget'		=> '选择要封装的档案',
			'compresssubmitcompress'	=> '确定压缩档案',
			'compressencoding'				=> '字符编码',
			'compresstotalfilesize'		=> '总共档案大小',
			'compresstotalfile'				=> '档案数目',
			'compresstotalfolder'			=> '资料夹数目',	
			'compressnewname'					=> '压缩文件名',
			'compressgz'							=> '.gz (Gzip,zlib)',
			'compressbz2'							=> '.bz2 (Bzip2,bzip2)',
			'compresszip'							=> '.zip (Zip)',			
			'checksumicontitle'				=> 'MD5, SHA1, CRC32',
			# Current Direcotory Function
			'username'								=> '登入名称',
			'password'								=> '登入口令',				
			'createfileicontitle'			=> '建立空白档案',
			'createfilesubmit'				=> '确定建立空白档案',
			'createfilenewname'				=> '空白文件名.ext',			
			'createfoldericontitle'		=> '建立空白资料夹',
			'createfoldersubmit'			=> '空白资料夹名称',
			'createfoldernewname'			=> '空白資料夾名稱',			
			'uploadicontitle'					=> '上传档案',
			'uploadsubmit'						=> '确定上传档案',
			'uploadyourfile'					=> '您的档案',			
			'htaccessicontitle'				=> '.htaccess',
			'htaccesssubmit'					=> '保存.htaccess',
			'htaccessdirectorylisting'=> '显示服务器目录(Directory Listing)',
			'htaccessallow'						=> '准许',
			'htaccessnotallow'				=> '不准许',
			'htaccessdefault'					=> '不设置',
			'htaccesshotlinkimage'		=> '防止别的网站连结图片档(jpg,gif,png,bmp)',
			'htaccesshotlinkaudio'		=> '防止别的网站连结声音档(mid,mp3,wav,wma)',
			'htaccesshotlinkvide'			=> '防止别的网站连结图象档(avi,wmv,mov,mp4)',
			'htaccesspasswordprotect'	=> '口令保护',
			'htaccessnote'						=> '(在本资料夹的 .htaccess 和 .htpasswd 档案将会被删除.)',
			'pagedescriptionicontitle'=> '页面描述',
			'pagedescriptionsubmit'		=> '确定保存页面描述',
			'execsubmit'							=> '执行',
			'execexecutedcommand'			=> '已执行的指令',
			'login'										=> '登入',
			'loginverificationcode'		=> '验证码',
			'loginsubmit'							=> '登入',
			'loginwrong'							=> '登入名称或登入口令错误',
			'loginwrongcode'					=> '验证码错误 (系统没有检查登入名称及登入口令)',			
			'logout'									=> '注销',
			'logouticontitle'					=> '注销',
			'install'									=> '安装',
			'installchecksumsubmit'		=> '编码',	
			'servicena'								=> '服务暂停',
			'servicenacontactadmin'		=> '请联络您的服务供应主管.',			
		),
		# Description for File Extension
		'description'=>array(
			'compressed'	=> '压缩档',
			'image'				=> '图片',
			'movie'				=> '图象',
			'script'			=> '脚本程序',
			'sound'				=> '声音',			
			'system'			=> '系统',
			'text'				=> '文字',
			'folder'			=> '资料夹',
			'unknown'			=> '(不能辨识)',
		),
	)	
	
);
#-------------------------------------------------------------------------------
# Icons
$cfg['iconmode']								= "hardcode";			#	(String) 'hardcode', 'external'
																									#	- 'hardcode' : set this if you can't locate a $cfg['iconpath']  
																									#	- 'external' : otherwise
$cfg['iconpath'] 								= "/icons";				#	(String) The path to get the icons of your apache server.
																									# - example : "/icons"
$cfg['icon']=array(
	#	Functions
	'delete'			=>($cfg['iconpath'].'/'.'broken.gif'),
	'move'				=>($cfg['iconpath'].'/'.'transfer.gif'),
	'rename'			=>($cfg['iconpath'].'/'.'a.gif'),	
	'link'				=>($cfg['iconpath'].'/'.'world2.gif'),	
	'openfolder'	=>($cfg['iconpath'].'/'.'folder.open.gif'),	
	'download'		=>($cfg['iconpath'].'/'.'down.gif'),
	'edit'				=>($cfg['iconpath'].'/'.'image1.gif'),	
	'read'				=>($cfg['iconpath'].'/'.'index.gif'),	
	'copy'				=>($cfg['iconpath'].'/'.'c.gif'),	
	'compress'		=>($cfg['iconpath'].'/'.'compressed.gif'),
	'checksum'		=>($cfg['iconpath'].'/'.'screw1.gif'),
	'email'				=>($cfg['iconpath'].'/'.'quill.gif'),		
	# Functions in the current folder
	'blankfile'		=>($cfg['iconpath'].'/'.'generic.gif'),		
	'folder'			=>($cfg['iconpath'].'/'.'folder.gif'),	
	'upload'			=>($cfg['iconpath'].'/'.'up.gif'),		
	'htaccess'		=>($cfg['iconpath'].'/'.'box2.gif'), //screw1.gif ??
	'description'	=>($cfg['iconpath'].'/'.'layout.gif'),
	# File types
	'back'				=>($cfg['iconpath'].'/'.'back.gif'),
	'down'				=>($cfg['iconpath'].'/'.'down.gif'),
	'hex'					=>($cfg['iconpath'].'/'.'binhex.gif'),
	'image'				=>($cfg['iconpath'].'/'.'image2.gif'),	
	'movie'				=>($cfg['iconpath'].'/'.'movie.gif'),	
	'script'			=>($cfg['iconpath'].'/'.'script.gif'),	
	'sound'				=>($cfg['iconpath'].'/'.'sound1.gif'),	
	'text'				=>($cfg['iconpath'].'/'.'text.gif'),	
	'unknown'			=>($cfg['iconpath'].'/'.'unknown.gif'),
);
$cfg['icontype']=array(												# Text
	'compressed'	=> 'compress',
	'image'				=> 'image',
	'movie'				=> 'movie',
	'script'			=> 'script',
	'sound'				=> 'sound',			
	'system'			=> 'htaccess',
	'text'				=> 'text',
	'unknown'			=> 'unknown',
);
$cfg['iconcode']=array(												# Hardcoded icons
	#	Functions
	'delete'			=> 'R0lGODlhFAAWAMIAAP///8z//5mZmTMzMwAAAAAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADaji6vPEwDECrnSO+aTvPEddVIriN1wWJKDG48IlSRG0T8kwJvIBLOkvvxwoCfKfiaIKUvEokwLNZC7ik1ycuZoXEvt7f4ycWd89WQNmbNhMqW3Ub7rW8aaOmUqc3CokDPYKDPC8RN4iJPwkAOw==',
	'move'				=> 'R0lGODlhFAAWAMIAAP////8zM8z//5mZmWYAADMzMwAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAACACwAAAAAFAAWAAADZSgq1b0wrgIALTKzSq2OXed9Slhx5AYYBeuSnSHPBnwCQz7UX0DcOUKg57tVhENJYPkzIpOLpXRKXUar2KnimaUSFk+CeCyWfiHI5i2dEapP7o/YCBDb6Lu7Mf9p6HQtKQI0NBIJADs=',
	'rename'			=> 'R0lGODlhFAAWAMIAAP///8z//5mZmTMzMwAAAAAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADaTi6vPEwDECrnSO+aTvPEddVIriN1wWJKOEOBHyigODe7jzaruDbOouNV/MRgpQhwFUBSjo8wZLQPD6TvSwVO7tJa7fqjFjdgoPfCpN7HeHEbWiYzdqtnXXUF0/TWxU/gYI+MhA4h4hWCQA7',
	'link'				=> 'R0lGODlhFAAWAMIAAP///8z//8zMzJmZmQCZMwBmMwAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADeBi63O4mytciuTjSKIj4HqgxxgViWFcYZNeFqLcu5et6eDfMQWnasE9hwKrdTiDBrrAy/oA6JtEZfF2GQwsw5BIMd9NUcvzN+j6nFHhZ/HGvzDirl0YTBvjynG7L49d7PX5xX0s8NAaFhEwjEAZ+eI0UPRKSk5cMCQA7',	
	'openfolder'	=> 'R0lGODlhGwAWAMIAAP/////Mmcz//7u7u5lmMzMzMwAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAACACwAAAAAGwAWAAADZSi63P4wykmrbSbrfJcZYAga3SeeGxeZZxuSEOu6sCOjc8rdb8AbgaCQkKEJdcJhoYhKOp+EpeAGfFoDUZisenVmPb2uVwoecMXBL+NzRqvXbfEbQ6jb7/cCOabv+/0qEjqDNQ8JADs=',
	'download'		=> 'R0lGODlhFAAWAKEAAP///8z//wAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAACIoyPqcvtD6OcNImLs8Zne4582yKCpPh80Shl1VXF8kzXUAEAOw==',
	'edit'				=> 'R0lGODlhFAAWAOMAAP/////MM/9mZsz//8zMzJmZmZlmADMzMwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAADACwAAAAAFAAWAAAEbXDISSm6NVckOtLg5YEZQgTcR1oBqq6S2RovjLQYHJ8BTR2FoFB4cwUPkgNgyWReeghAQaVsNi+X5TRpvWa11K4zytwOqoCoOm01V8nicphthYO59Pj9vLT323NYgl1ueoRUQEOKQwc1go+QKhEAOw==',
	'read'				=> 'R0lGODlhFAAWAMIAAP///8z//5mZmWbM/zMzMwAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADf0i6vPEwEECrnSS+aTvPEddVIriN1wWJaEG48IlSRW0XciXsgs7jEt3LRugBfjKBSzAYCF7GI/BDaFoHCoBWeVIytVbla1ibKJuA68DVcEnV1gLvZ5bDlTeiVgHPbqd/RU1PclpSOYREUYdBhkc8jn85kZSMCnOYmC8ReZ15DwkAOw==',
	'copy'				=> 'R0lGODlhFAAWAMIAAP///8z//5mZmTMzMwAAAAAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADZTi6vPEwDECrnSO+aTvPEQcQ5FWBG0Wu5wVxZakOBE2nI5FXa4/LHYBgKCD8dMAK0ShRIXVBIRPWi0pxOWiVUsRaLd1mtsfiTr/BMJVcvorRyvOYHffC1XDwdEDs+4c3EGyDKw8JADs=',
	'compress'		=> 'R0lGODlhFAAWAOcAAP//////zP//mf//Zv//M///AP/M///MzP/Mmf/MZv/MM//MAP+Z//+ZzP+Zmf+ZZv+ZM/+ZAP9m//9mzP9mmf9mZv9mM/9mAP8z//8zzP8zmf8zZv8zM/8zAP8A//8AzP8Amf8AZv8AM/8AAMz//8z/zMz/mcz/Zsz/M8z/AMzM/8zMzMzMmczMZszMM8zMAMyZ/8yZzMyZmcyZZsyZM8yZAMxm/8xmzMxmmcxmZsxmM8xmAMwz/8wzzMwzmcwzZswzM8wzAMwA/8wAzMwAmcwAZswAM8wAAJn//5n/zJn/mZn/Zpn/M5n/AJnM/5nMzJnMmZnMZpnMM5nMAJmZ/5mZzJmZmZmZZpmZM5mZAJlm/5lmzJlmmZlmZplmM5lmAJkz/5kzzJkzm'.
									 'ZkzZpkzM5kzAJkA/5kAzJkAmZkAZpkAM5kAAGb//2b/zGb/mWb/Zmb/M2b/AGbM/2bMzGbMmWbMZmbMM2bMAGaZ/2aZzGaZmWaZZmaZM2aZAGZm/2ZmzGZmmWZmZmZmM2ZmAGYz/2YzzGYzmWYzZmYzM2YzAGYA/2YAzGYAmWYAZmYAM2YAADP//zP/zDP/mTP/ZjP/MzP/ADPM/zPMzDPMmTPMZjPMMzPMADOZ/zOZzDOZmTOZZjOZMzOZADNm/zNmzDNmmTNmZjNmMzNmADMz/zMzzDMzmTMzZjMzMzMzADMA/zMAzDMAmTMAZjMAMzMAAAD//wD/zAD/mQD/ZgD/MwD/AADM/wDMzADMmQDMZgDMMwDMAACZ/wCZzACZmQCZZgCZMwCZAABm/wBmzABmmQBmZg'.
									 'BmMwBmAAAz/wAzzAAzmQAzZgAzMwAzAAAA/wAAzAAAmQAAZgAAM+4AAN0AALsAAKoAAIgAAHcAAFUAAEQAACIAABEAAADuAADdAAC7AACqAACIAAB3AABVAABEAAAiAAARAAAA7gAA3QAAuwAAqgAAiAAAdwAAVQAARAAAIgAAEe7u7t3d3bu7u6qqqoiIiHd3d1VVVURERCIiIhEREQAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAAkACwAAAAAFAAWAAAImQBJCCTBqmDBgQgTDmQFAABDVgojEmzI0KHEhBUrWrwoMGNDihwnAvjHiqRJjhX'.
									 '/qVz5D+VHAFZiWmmZ8BGHji9hxqTJ4ZFAmzc1vpxJgkPPn0Y5CP04M6lPEkCN5mxoJelRqFY5TM36NGrPqV67Op0KM6rYnkup/gMq1mdamC1tdn36lijUpwjr0pSoFyUrmTJLhiTBkqXCgAA7',
	'checksum'		=> 'R0lGODlhFAAWAMIAAP///8z//8zMzJmZmTMzMwAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADdRi63P4whkKLbAVoYe8EQigMXZSJ40BKVKiqFEsULzk/xFvM1VwPBAVBo9kRjhlArTMkVijDH5MI2IlyUiGVdhRgVcqpM3V8aVaBZpHgwhLR6iqQnQPYw9p7gRzHp+8gTwKAfn0ohIWIinZwXz+PNwtPk5QdCQA7',
	'email'				=> 'R0lGODlhFAAWAMIAAP///8z//5mZ/5mZmWZmzGYzmTMzMwAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADfmi6vPEwGECrnSa+aTtXR3hwXYWFQnFI5YUS6tZSLxzK7SEQvDqsrJKu5/vhLEOYimIMVpKFJRNIAkClAECTZNgpD9nwNjyMgsPZMaD7RYupWZ0h5H7LuoZBHT0e6fd2LAd/gGlwZwCJiotacIyPilt5A5SVlpVzESKbnJsPCQA7',
	# Functions in the current folder
	'blankfile'		=> 'R0lGODlhFAAWAMIAAP///8z//5mZmTMzMwAAAAAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADUDi6vPEwDECrnSO+aTvPEddVIriN1wWJKDG48IlSRG0T8kwJvIBLOkvvxwoCfDnjkaisIIHNZdL4LAarUSm0iY12uUwvcdArm3mvyG3N/iUAADs=',
	'folder'			=> 'R0lGODlhFAAWAMIAAP/////Mmcz//5lmMzMzMwAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAACACwAAAAAFAAWAAADVCi63P4wyklZufjOErrvRcR9ZKYpxUB6aokGQyzHKxyO9RoTV54PPJyPBewNSUXhcWc8soJOIjTaSVJhVphWxd3CeILUbDwmgMPmtHrNIyxM8Iw7AQA7',
	'upload'			=> 'R0lGODlhFAAWAKEAAP///8z//wAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAACI4yPqcvtD6OcTQgarJ1ax949IFiNpGKaSZoeLIvF8kzXdlAAADs=',
	'htaccess'		=> 'R0lGODlhFAAWAMIAAP///8z//8zMzJmZmTMzMwCZMwBmMwAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADf0i6vPEwEECrnSS+aTvPEddVIriN1wWJ1GEdBCyf1TG47aHvNGAPAtdgSLzRfsBgkXg4FoaCKJLpfEaly6akVeheDVPj1tf1GsBEgJhzKBfO6AFlXSvDbYA8PU9+n3F6Wixkf3yBPXwHYIaHY4yAhnuMk40KS5dEMRE7nJ2cDwkAOw==',
	'description'	=> 'R0lGODlhFAAWAOMAAP/////MM/8zM8z//5mZmZlmM2bM/zMzMwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAADACwAAAAAFAAWAAAEb/DISee4eBzAu99Hdm1eSYbZWXEkgI5sEBg0+2HnTBsccvhAmGtXAyCOSITwUGg2PYQoQalhOZ/QKLVV6gKmQm8XXDUmzx0yV5ze9s7JdpgtL3ME5jhHTS/xO3hwdWt0f317WwdSi4xRPxlwkUgXEQA7',		
	# File types
	'back'				=> 'R0lGODlhFAAWAMIAAP///8z//5mZmWZmZjMzMwAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADSxi63P4jEPJqEDNTu6LO3PVpnDdOFnaCkHQGBTcqRRxuWG0v+5LrNUZQ8QPqeMakkaZsFihOpyDajMCoOoJAGNVWkt7QVfzokc+LBAA7',
	'down'				=> 'R0lGODlhFAAWAKEAAP///8z//wAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAACIoyPqcvtD6OcNImLs8Zne4582yKCpPh80Shl1VXF8kzXUAEAOw==',
	'hex'					=> 'R0lGODlhFAAWAMIAAP///8z//5mZmWZmZjMzMwAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADaUi6vPEwEECrnSS+WbrvwBRq3OeFVQaJFJheK2CeBVHfmzwXuplbQIpgKCjkiiaBhWiU9EzBYo4HpC6bmF0Uqxt8lECpExwMczsim7UiLs22v9baPNXSnWiKGu4sl9sERIKDQzYRO4hNCQA7',
	'image'				=> 'R0lGODlhFAAWAOMAAP////8zM8z//8zMzJmZmWZmZmYAADMzMwCZzACZMwAzZgAAAAAAAAAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAACACwAAAAAFAAWAAAEkPDISae4WBzAu99Hdm1eSYYZWXYqOgJBLAcDoNrYNssGsBy/4GsX6y2OyMWQ2OMQngSlBjZLWBM1AFSqkyU4A2tWywUMYt/wlTSIvgYGA/Zq3QwU7mmHvh4g8GUsfAUHCH95NwMHV4SGh4EdihOOjy8rZpSVeiV+mYCWHncKo6Sfm5cliAdQrK1PQBlJsrNSEQA7',
	'movie'				=> 'R0lGODlhFAAWAMIAAP///8z//8zMzJmZmWZmZjMzMwAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADZmi63BrQCOHaNCVewjsHEpUFDDGc6AAuY2iY6Qle7RbLbrvA8arUFF5qJtIEb6pcZAFoOp0MYIVBM748HSJmqRCifFuS7aaVenFV0g4JNrOV4iMZznjao9apIu3SwwMFgYKDhIEQCQA7',
	'script'			=> 'R0lGODlhFAAWAMIAAP///8z//5mZmTMzMwAAAAAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADZTi6vPEwDECrnSO+aTvPEddVIrhVBJCSF8QRMIwOBE2fVLrmcYz3O4pgKCDgVMgR0SgZOYVM0dNS/AF7gGy1me16v9vXNdYNf89es2os00bRcDW7DVDDwe87fjMg+v9DNxBzYw8JADs=',
	'sound'				=> 'R0lGODlhFAAWAMIAAP////8zM8z//8zMzJmZmWYAADMzMwAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAACACwAAAAAFAAWAAADayi63P4wNsNCkOocYVWPB7FxFwmFwGh+DZpynndpNAHcW9cVQUj8tttrd+G5hMINT7A0BpE4ZnF6hCqn0iryKs0SDN9v0tSc0Q4DQ1SHFRjeBrQ6FzNN5Co2JD4YfUp7GnYsexQLhBiJigsJADs=',
	'text'				=> 'R0lGODlhFAAWAMIAAP///8z//5mZmTMzMwAAAAAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADWDi6vPEwDECrnSO+aTvPEddVIriN1wVxROtSxBDPJwq7bo23luALhJqt8gtKbrsXBSgcEo2spBLAPDp7UKT02bxWRdrp94rtbpdZMrrr/A5+8LhPFpHajQkAOw==',	
	'unknown'			=> 'R0lGODlhFAAWAMIAAP///8z//5mZmTMzMwAAAAAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADaDi6vPEwDECrnSO+aTvPEQcIAmGaIrhR5XmKgMq1LkoMN7ECrjDWp52r0iPpJJ0KjUAq7SxLE+sI+9V8vycFiM0iLb2O80s8JcfVJJTaGYrZYPNby5Ov6WolPD+XDJqAgSQ4EUCGQQEJADs=',	
);
$cfg['microtime'] = '';
$cfg['msg']				=	'';

################################################################################
#      ###  ###  ####  #####
#     #    #   # #   # #
#     #    #   # #   # ####
#     #    #   # #   # #
#      ###  ###  ####  #####
################################################################################
main();
#
# It is the first function that is run in this script.
# Return nothing
#
function main(){
	global $cfg;
	
	if($cfg['phpdebugmsg']!==true) error_reporting(0);
	$cfg['microtime'] = microtime_float();
	validateconfig();
	if(validateaccess()===true){
		$argarray = getarg();
		validategetpostarg($argarray);
		#---------------------------------------------------------------------------
		# Security Issue
		limitguest($argarray);
		# Security Issue			
		#---------------------------------------------------------------------------
		printout($argarray);
	}
}

################################################################################
################################################################################
# Preset
#
# It checks whether the client has the rights to view the page. In login mode,
# it checks the session and cookies of the client.
#
function validateaccess(){
	#-----------------------------------------------------------------------------
	# Security Issue
	global $cfg;

	# Service Not Available
	if($cfg['access']==="na"){
		prepage("na");
		return false;
	# Allow All or Guest mode
	# This would return true allow viewing of directory listing
	}elseif($cfg['access']==="allowall"||$cfg['access']==="guest"){
		return true;
	#	This would check whether the client has the rights to access
	}elseif($cfg['access']==="login"||$cfg['access']===""){
		#	Install page
		if($cfg['username']===""||$cfg['password']===""){
			prepage("install");
			return false;
		#	Login page
		# If it returns true, it will printout directory listing.
		}else{
			return prepage("login");
		}
	# For any other value of $cfg['access'], it would shut down the service
	}else{
		prepage("na");
		return false;
	}
	# Security Issue
	#-----------------------------------------------------------------------------
}

#
# It outputs pages of install, login and service not available
#
function prepage($mode){
	global $cfg;
	
	$msg = "";
	if($mode==="login"){
		//$hashcode = sha1(hexdec($cfg['username'])+hexdec($cfg['password']));
		ini_set("session.gc_maxlifetime",(string)60*60*24*30);
		session_cache_expire(60*24*30);
		//session_save_path('');
		session_name("sdl_sessionid");
		session_start();
		/*
		if($_COOKIE["sdl_hashcode"]!==$hashcode){
			unset($_SESSION['sdl_username']);
			unset($_SESSION['sdl_password']);
		}
		*/
		if(isset($_POST["submitlogin"])){
			
			# Check the captcha code
			$captchakey = $_POST['logincaptchakeyhidden'];
			$captchatry = strtoupper($_POST['logincaptchatextfield']);
			$captchareal = str_replace('0','X',strtoupper(substr(sha1($captchakey.sha1($cfg['password'])),0,$cfg['captchalength'])));
			
			# Captcha is correct
			if($captchatry===$captchareal){
				if(strlen($cfg['password'])<=20)	$cfg['password'] = sha1($cfg['password']);
				//$_SESSION['sdl_username'] = sha1($_POST['loginusernametextfield']);
				//$_SESSION['sdl_password'] = sha1($_POST['loginpasswordtextfield']);
				
				# If username and password are correct
				if($_POST['loginusernametextfield']===$cfg['username']&&sha1($_POST['loginpasswordtextfield'])===$cfg['password']){
					
					# It does not immediately return true but save sdl_access=true in session
					# The session will be checked later to go into the printout page
					$_SESSION['sdl_access'] = "true";
					$expire = time()+60*60*24*30;
					//setcookie("sdl_hashcode",$hashcode,$expire);
					//setcookie(session_name(), "");			
					setcookie(session_name(), session_id(),$expire);			
						
				# If username and password are wrong
				}else{
					$msg = text('loginwrong');	
				}
			# Captcha is wrong
			}else{
				$msg = text('loginwrongcode');
			}
		}
		
		# Has Permission
		if($_SESSION['sdl_access']==="true"){
			# But Log out
			if($_GET['action']==='logout'){
				setcookie(session_name(), '');
				session_destroy();
				unset($_SESSION);
			}else{
				
			# The client has permission and it will go to printout page
				return true;
			}
		}
	}
	
	#-----------------------------------------------------------------------------
	# It is to output binary stream of the capchat icon
	if(isset($_GET['captcha'])){
		$captcha = str_replace('0','X',strtoupper(substr(sha1($_GET['captcha'].sha1($cfg['password'])),0,$cfg['captchalength'])));
	
		// create a 100*30 image
		$im = imagecreate(200, 15);
		
		// white background and blue text
		$bg = imagecolorallocate($im, 255, 255, 255);
		$textcolor = imagecolorallocate($im, 0, 0, 255);
		
		// write the string at the top left
		imagestring($im, 5, 0, 0, $captcha, $textcolor);
		
		// output the image
		header("Content-type: image/png");
		imagepng($im);
		die(0);
	}

	#-----------------------------------------------------------------------------
	tpl_header('SimpleDirectoryListing');

	#---------------------
	if($mode==="install"){
		$sha1 = null;
		if(isset($_POST["submitinstallsha1"])){
			$sha1 = sha1($_POST["installsha1textfield"]);
		}
		echo $msg;
		echo'<h1>SimpleDirectoryListing - '.text('install').'</h1>';
		printout_hr();
		echo'
			<form method=post action=?>
			<table>
			<tr>
				<td align="right">'.text('password').' : </td>
				<td>
				<input type=textfield name="installsha1textfield" value="'.$_POST["installsha1textfield"].'">
				<input type=submit value="'.text('installchecksumsubmit').'" name="submitinstallsha1">
				</td>
			</tr>
			<tr><td align="right">Sha1 code : </td><td>'.$sha1.'</td></tr>
			</table>
			</form>
		';
	#------------------------
	}elseif($mode==="login"){
	
		# Generate captcha key
		$captchakey = md5(uniqid(rand(), true));
		$iconlink = '<img src="?captcha='.$captchakey.'" alt="[Icon]">';
		
		echo $msg;	# It is the error message
		echo'<h1>SimpleDirectoryListing - '.text('login').'</h1>';
		printout_hr();
		echo'
			<form method=post action=?>
			<table>
			<tr><td align="right">'.text('username').' : </td><td><input type=textfield name="loginusernametextfield" value=""></td></tr>
			<tr><td align="right">'.text('password').' : </td><td><input type=password name="loginpasswordtextfield" value=""></td></tr>
			<tr><td></td><td>'.$iconlink.'</td></tr>
			<tr><td align="right">'.text('loginverificationcode').' : </td><td><input type=textfield name="logincaptchatextfield" value=""><input type=hidden name="logincaptchakeyhidden" value="'.$captchakey.'"></td></tr>
			<tr><td></td><td><input type=submit value="'.text('loginsubmit').'" name="submitlogin"></td></tr>
			</table>
			</form>
				';
	#---------------------
	}elseif($mode==="na"){
		echo'<h1>SimpleDirectoryListing - '.text('servicena').'</h1>';
		printout_hr();
		echo text('servicenacontactadmin');
	}
	
	printout_hr();
	tpl_footer();
}

#
# Rerurn an array of a modified version of $_GET
#
function getarg(){
	global $cfg;
	
	$argarray = null;
	# If encryption is enabled
	if($cfg['cryptarg']==true){
		$argstring = decryptarg($_SERVER["QUERY_STRING"]);
		parse_str($argstring, $argarray);
	# If encryption is disabled
	}else{
		$argarray = $_GET;
	}
	/*
	foreach ($argarray as $key=>$value){
		//$argarray[$key] = rawurldecode($value);	# should not rawurldecode because some functions may need to output/print the vairables to browsers
		$argarray[$key] = ($value);
	}
	*/	
	return $argarray;
}

#
#
#
function validategetpostarg(&$argarray){
	global $cfg;
	
	#
	# For First Time Execution
	# If action is not set
	if(!isset($argarray["action"]))
		$argarray["action"] = "browse";
	# If dir is not set
	if(!isset($argarray["dir"])){
		# Validate $cfg['relativebeginpathmode']
		if($cfg['relativebeginpathmode']==='currentdir'){
			$rootpath = $cfg['rootpath'];
			$rootpath = rtrim($rootpath,'/');
			$cfg['relativebeginpath'] = substr(dirname($_SERVER["SCRIPT_FILENAME"]),strlen($rootpath));
		}else{
			switch(true){
				case($cfg['relativebeginpath']=="."):
				case($cfg['relativebeginpath']=="./"):
				case($cfg['relativebeginpath']=="/"):
				case($cfg['relativebeginpath']=="/."):
					$cfg['relativebeginpath'] = "";
					break;
			}
		}		
		$argarray["dir"] = $cfg['relativebeginpath'];
	}
	
	#
	if(!in_array($argarray["C"],array("N","M","S","D","P","F")))
		$argarray["C"] = "N";
	if(!in_array($argarray["O"],array("A","D")))
		$argarray["O"] = "A";
	if(!in_array($argarray["G"],array("N","A","D")))
		$argarray["G"] = "N";		

	# For Submiting of Cancel
	if(isset($_POST["submitcancel"])){
		$argarray["action"] = "browse";
	}

	#-----------------------------------------------------------------------------
	# Security Issue
	// Check Path Existence
	$patharray_root = pathmani("/",null);
	$patharray = pathmani($argarray["dir"],$argarray["target"]);
	//echo "<br>A1:".$absolutepath_root = $patharray_root['currentabsolutepath'];
	//echo "<br>A2:".$absolutepath_current =  $patharray['currentabsolutepath'];
	//echo "<br>A3:".$absolutepath_next =  $patharray['nextabsolutepath'];
	//if(!isbasedir($absolutepath_current,$absolutepath_root)||!isbasedir($absolutepath_next,$absolutepath_current)){
	if($patharray['absolutepatherror']===true||$patharray['withinroot']===false){
		$argarray["dir"] = "";
		$argarray["target"] = "";
		$argarray["action"] = "browse";
	}
	# Security Issue	
	#-----------------------------------------------------------------------------
	
	# Check whether there is null selection of checkbox/radio when submitting a
	# form
	switch(true){
		case isset($_POST["submitmove"]):		
		case isset($_POST["submitcopy"]):
			if($argarray["action"]==="movetargetselected"||$argarray["action"]==="copytargetselected"){
				if(empty($_POST["namecheckbox"])) $argarray["action"]="browse";	
			}
			if($argarray["action"]==="movedestinationselected"||$argarray["action"]==="copydestinationselected"){
				if(empty($_POST["nameradio"])) $argarray["action"]="browse";
			}			
			break;		
		case isset($_POST["submitdelete"]):
		case isset($_POST["submitrename"]):
			if(empty($_POST["namecheckbox"])) $argarray["action"]="browse";
			break;
		case isset($_POST["submitcompress"]):
			if($argarray["action"]==="compresstargetselected"){
				if(empty($_POST["namecheckbox"])) $argarray["action"]="browse";	
			}
			if($argarray["action"]==="compressnamedecided"){
				if(($_POST["compresstextfield"])==="") $argarray["action"]="browse";	
			}
			break;
	}
}

#
# Check whether the mode is guest mode and limit the rights of the client.
#
function limitguest(&$argarray){
	#-----------------------------------------------------------------------------
	# Securit Issue	
	global $cfg;

	if($cfg['access']==="guest"){
		error_reporting(0);
		unset($_POST);
		
		# The actions that are allowed in Guest Mode
		if(!in_array($argarray['action'],array('icon','guest'))){
			$argarray["action"] = "guest";
		}
		
		# The sorting colums that are allowed in Guest Mode
		if(!in_array($argarray['C'],array('N','M','S','D'))){
			$argarray["C"]="N";
		}
	}
	# Security Issue
	#-----------------------------------------------------------------------------	
}

function checkfunctionpermission(&$argarray){
	
}

function cryptarg($arg){
	return $hashcode;
}

function decryptarg($hashcode){
	return $arg;
}
function validateconfig(){
	global $cfg;
	
	#
	if($cfg['rootpathmode']==="currentdir"){
		$cfg['rootpath'] = dirname($_SERVER["SCRIPT_FILENAME"]);
	}elseif($cfg['rootpathmode']==="documentroot"){
		$cfg['rootpath'] = $_SERVER["DOCUMENT_ROOT"];
	}else	if($cfg['rootpathmode']==="serverroot"){
		$cfg['rootpath'] = substr($_SERVER["DOCUMENT_ROOT"],0,strpos($_SERVER["DOCUMENT_ROOT"],'/'));
	}else	if($cfg['rootpathmode']==="custom"){
		$cfg['rootpath'] = $cfg['relativebeginpath'];
	}
	$cfg['rootpath'] = realpath($cfg['rootpath']);
	$cfg['rootpath'] = str_replace("\\",'/',$cfg['rootpath']);
	
	
	if(!file_exists($cfg['rootpath'])){
		die("ROOT NOT EXIST");
	}
	
	$absolutebeginpath = realpath($cfg['rootpath'].$cfg['relativebeginpath']);
	if(!file_exists($absolutebeginpath)){
		die("BEGIN PATH NOT EXIST");
	}
	
	# It may not necessary to validate the config thoroughly
	/*
	if(!isbasedir($absolutebeginpath,$cfg['rootpath']))
		$cfg['relativebeginpath'] = "";	
	
	if(!array_key_exists($cfg['showpathmode'],array("none","realative","ftp","document"))){
		$cfg['showpathmode']="relative";		
	}
	if(!array_key_exists($cfg['headername'],array("name","size","mtime"))){
		$cfg['headername']="N";		
	}
	if(!array_key_exists($cfg['headerorder'],array("A","D"))){
		$cfg['headerorder']="A";		
	}	
	*/
}

################################################################################
################################################################################
# Template

function tpl_header($title){
	header("Cache-Control: no-cache, must-revalidate");
	header('Content-Type: text/html; charset=utf-8');	
	echo'
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
<head>
<title>'.$title.'</title>
  
<STYLE TYPE="text/css">
<!--
table, html, body, input, select, textarea {
	font-size: 100%;
}
img {border:0;}
table {
	font-family: monospace;
	white-space: nowrap;
	text-align: left;
	vertical-align: middle;
	table-layout: auto;
}
tr.directorylist:hover{
	color: #f4560f;
	background-color: #ffc;
}
a:hover {
	color: #f4560f;
}
html,body {
	margin:; 
	padding:;
}
input, select, textarea, form {
	font-family: monospace;
	text-align: left;
}
input.nametextfield {
	height:22;
}
input.textfield2 {
	border-top: 0px none #CCCCCC;
	border-right: 0px none #CCCCCC;
	border-bottom: 1px solid #666666;
	border-left: 0px none #CCCCCC;			
	font-size: 12px;
	color: #000099;
	height:12;
	margin: 0px 0px 0px 0px;
}

-->
</STYLE>  
</head>
<body>
	';
}

function tpl_footer(){
	global $cfg;

	$microtimedif = microtime_float(microtime_float(),$cfg['microtime'],4);
	echo'
		<div><i><h6>'.text('poweredby').' <a href="http://sourceforge.net/simpledirectory">SimpleDirectoryListing</a> ('.$microtimedif.' '.text('seconds').')</h6></i></div>
		</body></html>
	';
}

################################################################################
################################################################################
# Print Out

function printout($argarray){
	global $cfg;
	
	$patharray = pathmani($argarray["dir"],$argarray["target"]);
	$scriptbasename = basename($_SERVER["SCRIPT_NAME"]);

	#------------------------------------------------
	if($argarray["action"]==="renametargetselected"){
		if(isset($_POST["submitrename"])&&!empty($_POST["namecheckbox"])){
			foreach($_POST["namecheckbox"] as $key=>$value){
				rename($patharray["currentabsolutepath"]."/".$key,$patharray["currentabsolutepath"]."/".$_POST["nametextfield"][$key]);
			}
		}
		$argarray["action"] = "browse";
	
	#-----------------------------------------------------
	}elseif($argarray["action"]==="deletetargetselected"){
		if(isset($_POST["submitdelete"])&&!empty($_POST["namecheckbox"])){
			foreach($_POST["namecheckbox"] as $key=>$value){
				unlinkdirectory($patharray["currentabsolutepath"]."/".$key);
			}
		}
		$argarray["action"] = "browse";
		
	#-------------------------------------------------------------------------------------------------------
	}elseif($argarray["action"]==="createfoldernamedecided"||$argarray["action"]==="createfilenamedecided"){
		if(isset($_POST["submitcreate"])){
			$newpath = 	$patharray["currentabsolutepath"]."/".$_POST["nametextfield"];
			$newmode = $_POST["modetextfield"];
			if($argarray["action"]==="createfoldernamedecided"){
				if(!file_exists($newpath)){
					mkdir($newpath);
					chmod($newpath,octdec($newmode));
				}
			}else{
				if(!file_exists($newpath)){
					touch($newpath);
					chmod($newpath,octdec($newmode));
				}
			}
		}
		$argarray["action"] = "browse";
		
	#---------------------------------------------------------------------------------------------------------
	}elseif($argarray["action"]==="movedestinationselected"||$argarray["action"]==="copydestinationselected"){
		if((isset($_POST["submitmove"])||isset($_POST["submitcopy"]))&&isset($_POST["nameradio"])){
			$destinationpath = null;
			$originalpath = null;
			$destinationpatharray = pathmani($argarray["dir"],$_POST["nameradio"]);
			if($_POST["nameradio"]==='..'){
				$destinationpath = $destinationpatharray["upabsolutepath"];
				//$argarray["dir"] = $destinationpatharray["uprelativepath"];	
			}elseif($_POST["nameradio"]==='.'){
				$destinationpath = $destinationpatharray["currentabsolutepath"];
				//$argarray["dir"] = $destinationpatharray["currentrelativepath"];		
			}else{
				$destinationpath = $destinationpatharray["nextabsolutepath"];
				//$argarray["dir"] = $destinationpatharray["nextrelativepath"];		
			}
			$patharray = pathmani($argarray["dir"],$argarray["target"]);
			
			$originalpatharray = pathmani($argarray["originaldir"],null);
			$originalpath = $originalpatharray["currentabsolutepath"];

			foreach($argarray["targetlist"] as $key=>$value){
				if($argarray["action"]==="movedestinationselected")
					rename($originalpath."/".$value,$destinationpath."/".$value);
				else
					copydirectory($originalpath,$value,$destinationpath);
			}
		}
		$argarray["action"] = "browse";
		
	#----------------------------------------------------
	}elseif($argarray["action"]==="pagedescriptionsave"){
		global $cfg_pagedescriptionfilename;		
		if(isset($_POST["submitpagedescription"])){
			file_put_contents($patharray["currentabsolutepath"].'/'.$cfg['pagedescriptionfilename'],$_POST["filecontenttextarea"]);
		}
		$argarray["action"] = "browse";
		
	#-----------------------------------------------
	}elseif($argarray["action"]==="compressnamedecided"){
		if(isset($_POST["submitcompress"])){
			compressdirectory($patharray["currentabsolutepath"],$argarray["targetlist"],$_POST["compresstextfield"],$_POST["compressselect"],$_POST["compressencoding"]);
		}
		$argarray["action"] = "browse";
		
	#-----------------------------------------
	}elseif($argarray["action"]==="download"){
		download($patharray["currentabsolutepath"],$argarray["target"]);
		$argarray["action"] = "browse";
		
	#-----------------------------------------------------
	}elseif($argarray["action"]==="uploadtargetselected"){
		foreach ($_FILES['uploadfile']['name'] as $key=>$value){
			$destinationpath = $patharray["currentabsolutepath"].'/'.$_FILES['uploadfile']['name'][$key];
			if (move_uploaded_file($_FILES['uploadfile']['tmp_name'][$key], $destinationpath)) {
				//echo "File is valid, and was successfully uploaded.\n";
			} else {
				//echo "Possible file upload attack!\n";
			}
		}
		$argarray["action"] = "browse";
	
	#---------------------------------------------
	}elseif($argarray["action"]==="htaccesssave"){
		if(isset($_POST["submithtaccess"])){
			$htaccessfilecontent = null;
			if($_POST['htaccesslisting']==='allow'){
				$htaccessfilecontent .= "Options +Indexes\nIndexOptions +FancyIndexing\n";
			}elseif($_POST['htaccesslisting']==='notallow'){
				$htaccessfilecontent .= "Options -Indexes\n";
			}
			
			$mimetype = null;
			if($_POST['htaccesshotlinkimage']==='checked'){
				$mimetype.='jpg|gif|png|bmp|';
			}
			if($_POST['htaccesshotlinkaudio']==='checked'){
				$mimetype.='mid|mp3|wav|wma|';
			}
			if($_POST['htaccesshotlinkvideo']==='checked'){
				$mimetype.='avi|wmv|mov|mp4|';
			}
			if($mimetype!==null){
				$mimetype = substr($mimetype,0,strlen($mimetype)-1);
				$htaccessfilecontent .= '
					RewriteEngine on
					RewriteCond %{HTTP_REFERER} !^$
					RewriteCond %{HTTP_REFERER} !^http://(www\.)?'.$_SERVER['SERVER_NAME'].'/.*$ [NC]
					RewriteRule \.('.$mimetype.')$ - [F]
				';
			}
			if($_POST['htaccesspasswordprotection']==='checked'){
				$htpasswdfilecontent = $_POST['htaccessusername'].':'.crypt($_POST['htaccesspassword']);
				file_put_contents($patharray["currentabsolutepath"].'/'.'.htpasswd',$htpasswdfilecontent);
				$htaccessfilecontent .= '
					AuthName "Private Area"
					AuthType Basic
					AuthUserFile '.$patharray["currentabsolutepath"].'/'.'.htpasswd
					<Limit GET POST>
					require user '.$_POST['htaccessusername'].'
					</Limit>				
				';				
			}else{
				# It may not need to delete the .htpasswd
				//unlink($patharray["currentabsolutepath"].'/'.'.htpasswd');
			}
			file_put_contents($patharray["currentabsolutepath"].'/'.'.htaccess',$htaccessfilecontent);			
		}
		$argarray["action"] = "browse";
		
	#------------------------------------------
	}elseif($argarray["action"]==="emailsend"){
		if(isset($_POST["submitemail"])){
			email($_POST['emailto'],$_POST['emailto']);
			//print_r($argarray);
		}
		$argarray["action"] = "browse";

	#-----------------------------------------------------
	}elseif($argarray["action"]==="chmodtargetselected"){
		if(isset($_POST["submitchmod"])&&!empty($_POST["chmodcheckbox"])){
			foreach($_POST["chmodcheckbox"] as $key=>$value){
				if($_POST["chmodsubdirectorycheckbox"][$key]==='checked'){
					chmoddirectory($patharray["currentabsolutepath"]."/".$key,octdec($_POST["chmodtextfield"][$key]));	
				}else{
					chmod($patharray["currentabsolutepath"]."/".$key,octdec($_POST["chmodtextfield"][$key]));
				}
			}
		}
		$argarray["action"] = "browse";
	
	}elseif($argarray["action"]==="icon"){
		icon($argarray["icon"],true);	
		$argarray["action"] = "browse";
	
	}
		
	#-----------------------------------------------------------------------------
	#-----------------------------------------------------------------------------
	$directorylistarray = getdirectorylist($patharray["currentabsolutepath"]);
	$directorylistarray = sortdirectory($directorylistarray,$argarray["C"],$argarray["O"],$argarray["G"]);
	$title = $patharray["currentrelativepath"];
	if($title==="") $title = "/";
	tpl_header(text('navigationindex').' '.$title);
	printout_description($patharray);
	printout_navigation($patharray);
	echo'<table cellpadding="3" cellspacing="0" width="100%">';
		
	#----------------------------------
	if($argarray["action"]==="browse"){
		printout_header($argarray,null);
		directorylistarraytakeaway($directorylistarray,"name",".");
		printout_directorylist($directorylistarray,$argarray,null,null,null);
		printout_currentdirfunction($argarray["dir"]);
		
	#------------------------------------------------------------------
	#-----------------------------------------------------------------------------
	# Security Issue
	}elseif($argarray["action"]===null||$argarray["action"]==="guest"){
		printout_header($argarray,null);
		directorylistarraytakeaway($directorylistarray,"name",".");
		printout_directorylist($directorylistarray,$argarray,null,null,null);
	# Security Issue
	#-----------------------------------------------------------------------------
		
	#---------------------------------------
	}elseif($argarray["action"]==="rename"){
		//printout_header($argarray["dir"],$argarray["headername"],$argarray["headerorder"]);
		//printout_header($argarray["dir"],$argarray["C"],$argarray["O"],$argarray["G"],$argarray["dir"],$argarray["target"],$argarray["action"]);
		printout_header($argarray,null);
		printout_formheader("renametargetselected",$argarray["dir"]);
		printout_formsubmit("submitrename",text('renamesubmit'));
		directorylistarraytakeaway($directorylistarray,"name",".");
		printout_directorylist($directorylistarray,$argarray,"nametextfield","namecheckboxfilefolder",null);
		printout_formfooter();
		printout_currentdirfunction($argarray["dir"]);
		
	#--------------------------------------------------------------------------------------------------------------------------------
	}elseif($argarray["action"]==="delete"||$argarray["action"]==="move"||$argarray["action"]==="copy"||$argarray["action"]==="compress"||$argarray["action"]==="chmod"){
		if($argarray["action"]==="delete"){
			$action = 'deletetargetselected';
			$submitvalue = text('deletesubmit');
			$submitname = 'submitdelete';
			$namecheckbox = "namecheckboxfilefolder";
			$chmod = null;			
		}elseif($argarray["action"]==="move"){
			$action = 'movetargetselected';
			$submitvalue = text('movesubmittarget');
			$submitname = 'submitmove';
			$namecheckbox = "namecheckboxfilefolder";
			$chmod = null;			
		}elseif($argarray["action"]==="copy"){
			$action = 'copytargetselected';
			$submitvalue = text('copysubmittarget');
			$submitname = 'submitcopy';
			$namecheckbox = "namecheckboxfilefolder";
			$chmod = null;			
		}elseif($argarray["action"]==="compress"){
			$action = 'compresstargetselected';
			$submitvalue = text('compresssubmittarget');
			$submitname = 'submitcompress';
			$namecheckbox = "namecheckboxfilefolder";
			$chmod = null;
		}elseif($argarray["action"]==="chmod"){
			$action = 'chmodtargetselected';
			$submitvalue = text('chmodsubmit');
			$submitname = 'submitchmod';
			$namecheckbox = null;
			$chmod = "chmodtextfield";
		}
		printout_header($argarray,null);
		//printout_header($argarray["dir"],$argarray["headername"],$argarray["headerorder"]);
		printout_formheader($action,$argarray["dir"]);
		printout_formsubmit($submitname,$submitvalue);			
		directorylistarraytakeaway($directorylistarray,"name",".");
		printout_directorylist($directorylistarray,$argarray,"namelink",$namecheckbox,$chmod);		
		printout_formfooter();
		printout_currentdirfunction($argarray["dir"]);

	#-----------------------------------------------------------------------------------------------
	}elseif($argarray["action"]==="movetargetselected"||$argarray["action"]==="copytargetselected"){
		$targetlistarg = null;
		if(isset($_POST["submitmove"])||isset($_POST["submitcopy"])){
			if(!empty($_POST["namecheckbox"])){
				$argarray["originaldir"] = $argarray["dir"];
				foreach ($_POST["namecheckbox"] as $key=>$value) {
					$argarray["targetlist"][] = $key;
				}
			}else{
				//Browse
			}
		}
		
		if($argarray["action"]==="movetargetselected"){
			$action = 'movedestinationselected';
			$submitvalue = text('movesubmitdestination');
			$submitname = 'submitmove';
		}elseif($argarray["action"]==="copytargetselected"){
			$action = 'copydestinationselected';
			$submitvalue = text('copysubmitdestination');
			$submitname = 'submitcopy';
		}
		
		foreach ($argarray["targetlist"] as $key=>$value) {
			$targetlistarg = $targetlistarg.'targetlist[]='.rawurlencode($value).'&';
		}
		$targetlistarg = substr($targetlistarg,0,strlen($targetlistarg)-1);		
		$arg_namelinkother = 'originaldir='.rawurlencode($argarray["originaldir"]).'&'.$targetlistarg;
		$argarray['arg_namelinkother'] = $arg_namelinkother;
		
		printout_header($argarray,$arg_namelinkother);
		//printout_header($argarray["dir"],$argarray["headername"],$argarray["headerorder"]);
		printout_formheader($action,$argarray["dir"],$arg_namelinkother);
		printout_formsubmit($submitname,$submitvalue);
		/*		
		$formlink = $scriptbasename.'?action='.$action.'&dir='.rawurlencode($argarray["dir"]).'&originaldir='.rawurlencode($argarray["originaldir"]).'&'.$movelistarg;
		*/
		printout_directorylist($directorylistarray,$argarray,"namelinkother","nameradiodotfolder",null);		
		printout_formfooter();
		printout_currentdirfunction($argarray["dir"]);

	#-----------------------------------------------------------------------------------
	}elseif($argarray["action"]==="createfolder" or $argarray["action"]==="createfile"){
		if($argarray["action"]==="createfolder"){
			$action = 'createfoldernamedecided';
			$icon = 'folder';
			$nametextfieldvalue = text('createfoldernewname');
			$modetextfieldvalue = $cfg['dirmode'];
			$submitvalue = text('createfoldersubmit');
		}else{
			$action = 'createfilenamedecided';
			$icon = 'unknown';
			$nametextfieldvalue = text('createfilenewname');
			$modetextfieldvalue = $cfg['filemode'] ;
			$submitvalue = text('createfilesubmit');			
		}
		printout_header($argarray,null);
		printout_formheader($action,$argarray["dir"]);
		printout_formsubmit("submitcreate",$submitvalue);
		
		directorylistarraytakeaway($directorylistarray,"name",".");
		$dirdetail = directorylistarraytakeaway($directorylistarray,"name","..");
		$dirhtmlarray = dirdetailtohtml($dirdetail,$argarray["dir"],$argarray["target"]);
		echo'
			<tr>'.$dirhtmlarray["icon"].''.$dirhtmlarray["namelink"].'</tr>
			<tr>
			<td>'.icon($icon).'</td>
			<td><input type=textfield name="nametextfield" value="'.$nametextfieldvalue.'" size='.($cfg['maxstrlenname']-2).'></td>
			<td colspan=4></td>
			<td><input type=textfield name="modetextfield" value="'.$modetextfieldvalue.'" size=3></td>			
			</tr>
		';
		printout_directorylist($directorylistarray,$argarray,null,null,null);
		printout_formfooter();
		printout_currentdirfunction($argarray["dir"]);

	#-------------------------------------
	}elseif($argarray["action"]==="edit"){
		if(isset($_POST["submitedit"])){
			file_put_contents($patharray["currentabsolutepath"].'/'.$argarray["target"],$_POST["filecontenttextarea"]);
		}
		printout_formheader("edit",$argarray["dir"],'target='.$argarray["target"]);
		printout_formsubmit("submitedit",text('editsubmit'),text('filename').' : '.$argarray["target"]);
		$filecontent = file_get_contents($patharray["nextabsolutepath"]);
		$filecontent = htmlentities($filecontent);
		printout_hr();
		echo '<tr><td><textarea name="filecontenttextarea" cols=100 rows=20 wrap=off>'.$filecontent.'</textarea></td></tr>';
		printout_formfooter();

	#-------------------------------------
	}elseif($argarray["action"]==="read"){
		$filecontent = file_get_contents($patharray["nextabsolutepath"]);
		//$filecontenthtml = nl2br(htmlentities($filecontent));
		$filecontenthtml = htmlentities($filecontent);
		echo '<tr><td>'.text('filename').' : '.$argarray["target"].'</td></tr>';
		printout_hr();
		echo'<tr><td nowrap><pre>'.$filecontenthtml.'</pre></td></tr>';
		
	#-----------------------------------------
	}elseif($argarray["action"]==="checksum"){
		$sha1 = sha1_file($patharray["nextabsolutepath"]);
		$md5 = md5_file($patharray["nextabsolutepath"]);
		$filecontent = file_get_contents($patharray["nextabsolutepath"]);
		$crc32 = sprintf("%u", crc32($filecontent));
		//$base64 = nl2br(wordwrap(base64_encode($filecontent),'80',"\n",1));
		//$base64 = base64_encode($filecontent);
		printout_hr();
		echo'
			<tr><td align="right" width="50">'.text('filename').' : </td><td>'.$patharray["basename"].'</td></tr>
			<tr><td align="right">SHA1 : </td><td>'.$sha1.'</td></tr>
			<tr><td align="right">MD5 : </td><td>'.$md5.'</td></tr>
			<tr><td align="right">CRC32 : </td><td>'.$crc32.'</td></tr>
			'.//<tr><td align="right">BASE64 : </td><td>'.$base64.'</td></tr>
		'';
		
	#--------------------------------------------------
	}elseif($argarray["action"]==="compresstargetselected"){
		$targetlistarg = null;
		$attachmenthtml = null;
		if(isset($_POST["submitcompress"])){
			if(!empty($_POST["namecheckbox"])){
				foreach ($_POST["namecheckbox"] as $key=>$value) {
					$targetlistarg = $targetlistarg.'targetlist[]='.rawurlencode($key).'&';
					$attachmenthtml = $attachmenthtml.'<tr><td>'.htmlentities($key).'</td></tr>';
				}
				$targetlistarg = substr($targetlistarg,0,strlen($targetlistarg)-1);
			}else{
				//Browse
				return false;
			}
		}
		
		$compressbasename = null;
		if(sizeof($_POST["namecheckbox"])>1){
			$compressfilename = text('compressnewname');
		}else{
			reset($_POST["namecheckbox"]);
			list($compressfilename,)=each($_POST["namecheckbox"]);
		}
		
		$count = array();
		foreach ($_POST["namecheckbox"] as $key=>$value) {
			$result = directorysize($patharray["nextabsolutepath"].'/'.$key);
			$count['size'] += $result['size'];
			$count['file'] += $result['file'];
			$count['folder'] += $result['folder'];
		}
		
		printout_hr();
		printout_formheader("compressnamedecided",$argarray["dir"],$targetlistarg);
		printout_formsubmit("submitcompress",text('compresssubmitcompress'));
		echo'
			<tr>
			<td align="right">'.text('filename').' :</td>
			<td>
			<input type=textfield name="compresstextfield" value="'.$compressfilename.'">
			<select name="compressselect">';
		if($count['folder']===0&&$count['file']<=1){
			echo'
				<option value="gz">'.text('compressgz').'
				<option value="bz2">'.text('compressbz2');
		}
		echo'			
			<option value="zip">'.text('compresszip').'
			</select>
			</td>
			<td width="100%"></td>
			</tr>
			<tr>
			<td align="right">'.text('compressencoding').' :</td>
			<td>
			<select name="compressencoding">
			<option value="UTF-8">UTF-8
			<option value="UTF-16">UTF-16
			<option value="UTF-32">UTF-32
			<option value="ASCII">ASCII
			<option value="BIG-5">BIG-5			
			<option value="EUC-JP">EUC-JP
			<option value="ISO-8859-1">ISO-8859-1
			</select>
			</td>
			</tr>
			<tr><td align="right">'.text('compresstotalfilesize').' :</td><td>'.filesizestring($count["size"]).' '.text('bytes').'</td></tr>
			<tr><td align="right">'.text('compresstotalfile').' :</td><td>'.$count["file"].'</td></tr>
			<tr><td align="right">'.text('compresstotalfolder').' :</td><td>'.$count["folder"].'</td></tr>
		';
		printout_formfooter();
		
	#------------------------------------------------
	}elseif($argarray["action"]==="pagedescription"){
		global $cfg_pagedescriptionfilename;
		printout_formheader("pagedescriptionsave",$argarray["dir"]);
		printout_formsubmit("submitpagedescription",text('pagedescriptionsubmit'));
		printout_hr();
		$filecontent = null;
		if(file_exists($patharray["currentabsolutepath"].'/'.$cfg['pagedescriptionfilename']))
			$filecontent = file_get_contents($patharray["currentabsolutepath"].'/'.$cfg['pagedescriptionfilename']);
		else
			$filecontent = null;
		echo'<tr><td><textarea name="filecontenttextarea" cols=100 rows=10 wrap=off>'.$filecontent.'</textarea></td></tr>';
		printout_formfooter();
		
	#---------------------------------------
	}elseif($argarray["action"]==="upload"){
		$formlink = '?action=uploadtargetselected&dir='.rawurlencode($argarray["dir"]);
		echo'
			<!-- The data encoding type, enctype, MUST be specified as below -->
			<form action='.$formlink.' method="post" enctype="multipart/form-data">
			<!-- MAX_FILE_SIZE must precede the file input field -->
			<input type="hidden" name="MAX_FILE_SIZE" value="'.(10*1024*1024).'">
		';
		printout_formsubmit("submitupload",text('uploadsubmit'));
		printout_hr();
		echo'<tr><td colspan="2">'.text('uploadyourfile').' : <br></td></tr>';
		for($i=1;$i<=20;$i++){
			echo '<tr><td>'.$i.'.</td><td><input name="uploadfile[]" type="file" size="100" maxlength="500"><br></td></tr>';
		}
		printout_formfooter();
		
	#-------------------------------------
	}elseif($argarray["action"]==="exec"){
		chdir($patharray["currentabsolutepath"]);
		$output = null;
		if($_POST["execselect"]==="shell_exec"){
			$output = shell_exec($_POST["exectextfield"]);
		}elseif($_POST["execselect"]==="exec"){
			$output = exec($_POST["exectextfield"]);
		}elseif($_POST["execselect"]==="system"){
			$output = system($_POST["exectextfield"]);
		}elseif($_POST["execselect"]==="eval"){
			$output = eval($_POST["exectextfield"]);
		}
		printout_exec($argarray["dir"]);
		echo '<tr><td>'.text('execexecutedcommand').' : </td><td>'.$_POST["execselect"].'('.htmlentities($_POST["exectextfield"]).')</td><td width="100%"></td></tr>';
		printout_hr();
		echo '<tr><td colspan="100"><pre>'.htmlentities($output).'</pre></td></tr>';

	#-----------------------------------------
	}elseif($argarray["action"]==="htaccess"){
		printout_formheader("htaccesssave",$argarray["dir"]);
		printout_formsubmit("submithtaccess",text('htaccesssubmit'));
		printout_hr();
		echo'
			<tr><td align="right">'.text('htaccessdirectorylisting').' :</td><td><input type=radio name="htaccesslisting" value="allow">'.text('htaccessallow').' <input type=radio name="htaccesslisting" value="notallow">'.text('htaccessnotallow').' <input type=radio name="htaccesslisting" value="default" checked>'.text('htaccessdefault').'</td><td width="100%"></td></tr>
			<tr><td align="right">'.text('htaccesshotlinkimage').' :</td><td><input type=checkbox name="htaccesshotlinkimage" value="checked"></td></tr>
			<tr><td align="right">'.text('htaccesshotlinkaudio').' :</td><td><input type=checkbox name="htaccesshotlinkaudio" value="checked"></td></tr>
			<tr><td align="right">'.text('htaccesshotlinkvideo').' :</td><td><input type=checkbox name="htaccesshotlinkvideo" value="checked"></td></tr>
			<tr><td align="right">'.text('htaccesspasswordprotect').' :</td><td><input type=checkbox name="htaccesspasswordprotection" value="checked"> '.text('username').' : <input type=textfield name="htaccessusername"> '.text('password').' : <input type=textfield name="htaccesspassword"></td></tr>
			<tr><td colspan="2">'.text('htaccessnote').'</td></tr>
		';
		printout_formfooter();
		
	#--------------------------------------
	}elseif($argarray["action"]==="email"){
		if($argarray["action"]==="email"){
			$action = 'emailtargetselected';
			$submitvalue = 'choose';
			$submitname = 'submitemail';
		}
		printout_header($argarray["dir"],$argarray["headername"],$argarray["headerorder"]);
		printout_formheader($action,$argarray["dir"]);
		printout_formsubmit($submitname,$submitvalue);
		directorylistarraytakeaway($directorylistarray,"name",".");
		printout_directorylist($directorylistarray,$argarray["dir"],$argarray["target"],null,null,"namecheckboxfile",null);				
		printout_formfooter();

	#----------------------------------------------------
	}elseif($argarray["action"]==="emailtargetselected"){
		$targetlistarg = null;
		$attachmenthtml = null;
		if(isset($_POST["submitemail"])){
			if(!empty($_POST["namecheckbox"])){
				foreach ($_POST["namecheckbox"] as $key=>$value) {
					$targetlistarg = $targetlistarg.'targetlist[]='.rawurlencode($key).'&';
					$attachmenthtml = $attachmenthtml.htmlentities($key).'<br>';
				}
				$targetlistarg = substr($targetlistarg,0,strlen($targetlistarg)-1);
			}else{
				//Browse
			}
		}
		printout_formheader("emailsend",$argarray["dir"],$targetlistarg);
		printout_formsubmit("submitemail","send");
		printout_hr();
		echo'
			<tr><td>From :</td><td><input type=textfield name="emailfrom"><td width="100%"></td></tr>
			<tr><td>To :</td><td><input type=textfield name="emailto"></td></tr>
			<tr><td>Cc :</td><td><input type=textfield name="emailcc"></td></tr>
			<tr><td>Bcc :</td><td><input type=textfield name="emailbcc"></td></tr>
			<tr><td valign="top">Message :</td><td><textarea name="emailmessage" rows="10" cols="50"></textarea></td></tr>
			<tr><td valign="top">Attachment :</td><td>'.$attachmenthtml.'</td></tr>
		';
		printout_formfooter();
		
	}
	
	printout_hr();
	echo'</table>';
	printout_serversignature();
	tpl_footer();
}

#
# It prints the headers in the directory listing page
# $relativedirname is the relative dir path(not ftp relative path)
# $headername is the current ordering header
# $headerorder can be "asc" ot "desc"
#
function printout_header($argarray,$argother=null){
	global $cfg;
	
	$headername=$argarray["C"];
	$headerorder=$argarray["O"];
	$headergroupdir=$argarray["G"];
	$relativedirname=$argdir=$argarray["dir"];
	$argtarget=$argarray["target"];
	$argaction=$argarray["action"];
	
	$headerhtmlarray = array();
	$headerarray = array(
		"N"		=> array("headerorder"=>"A","headerfullname"=>"Name"),
		"M"		=> array("headerorder"=>"A","headerfullname"=>"Last modified"),
		"S"		=> array("headerorder"=>"A","headerfullname"=>"Size"),
		"D"		=> array("headerorder"=>"A","headerfullname"=>"Description"),
		"P"		=> array("headerorder"=>"A","headerfullname"=>"Perm"),
		"F"		=> array("headerorder"=>"A","headerfullname"=>"Functions")
	);
	if(array_key_exists($headername,$headerarray)){
		if($headerorder=="A") $headerarray[$headername]["headerorder"]="D";
		else $headerarray[$headername]["headerorder"]="A";
	}else{
		$headername = "N";		
		$headerorder = "A";
	}

	if(!in_array($headergroupdir,array("N","A","D"))) $headergroupdir = "N";
	
	$headergroupdirfunction = null;
	if($headergroupdir==="A")
		$headergroupdirfunction = "D";
	else
		$headergroupdirfunction = "A";
		
	$headergroupdiricon = null;
	if($headergroupdir==="N")			$headergroupdiricon = "A";
	elseif($headergroupdir==="A") $headergroupdiricon = "D";	
	elseif($headergroupdir==="D") $headergroupdiricon = "N";	
	
	/*
	$basename = basename($_SERVER["SCRIPT_NAME"]);
	$headerlink = $basename."?dir=".$relativedirname."&action=browse";	
	foreach ($headerarray as $key=>$value){
		$headerhtmlarray[$key] = '<td><a href="'.$headerlink.'&headername='.$key.'&headerorder='.$value["headerorder"].'">'.$value["headerfullname"].'</a></td>';
	}
	*/
	
	$arg = "dir=".rawurlencode($argdir)."&target=".rawurlencode($argtarget).'&action='.$argaction;
	if($argother!==null) $arg=$arg.'&'.$argother;
	
	echo'
		<tr>
		<td><a href="?C='.$headername.'&O='.$headerorder.'&G='.$headergroupdiricon.'&'.$arg.'">'.icon('down').'</a></td>
		<td><a href="?C=N&O='.$headerarray["N"]["headerorder"].'&G='.$headergroupdir.'&'.$arg.'">'.text('name').'</a>'.str_repeat("&nbsp;",$cfg['maxstrlenname']-strlen("Name")).'</td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td><a href="?C=M&O='.$headerarray["M"]["headerorder"].'&G='.$headergroupdir.'&'.$arg.'">'.text('mtime').'</a>'.str_repeat("&nbsp;",5).'</td>
		<td><a href="?C=S&O='.$headerarray["S"]["headerorder"].'&G='.$headergroupdir.'&'.$arg.'">'.text('size').'</a>'.str_repeat("&nbsp;",3).'</td>
		<td><a href="?C=D&O='.$headerarray["D"]["headerorder"].'&G='.$headergroupdir.'&'.$arg.'">'.text('description').'</a>'.str_repeat("&nbsp;",$cfg['maxstrlendescription']-strlen("Description")).'</td>
	';
	#-----------------------------------------------------------------------------
	# Security Issue
	if($argarray['action']!=='guest'){
		echo'
			<td><a href="?C=P&O='.$headerarray["P"]["headerorder"].'&G='.$headergroupdir.'&'.$arg.'">'.text('chmod').'</a>'.str_repeat("&nbsp;",0).'</td>
			<td colspan="12"><a href="?C=F&O='.$headerarray["F"]["headerorder"].'&G='.$headergroupdir.'&'.$arg.'">'.text('function').'</a></td>
		';
	}
	# Security Issue	
	#-----------------------------------------------------------------------------
	echo'		
		<td width="100%">&nbsp;</td>
		</tr>
	';
	//<td colspan="2"><a href="?C=D&O=A&G=T">Misc</a></td>
	printout_hr();
}

function printout_directorylist($directorylistarray,$argarray,$namelink="namelink",$nameselection="nothing",$chmodlink="chmodlink"){
	$relativedir=$argarray["dir"];
	$arg_target=$argarray["target"];
	$arg_namelinkother=$argarray["namelinkother"];
	
	#-----------------------------------------------------------------------------
	# Security Issue
	if($argarray['action']==='guest'){
		foreach ($directorylistarray as $key=>$dirdetail) {
			$dirhtmlarray = dirdetailtohtml($dirdetail,$argarray);
			if($dirdetail["name"]==="."||$dirdetail["name"]===".."){
				echo
				'<tr class="directorylist">'.
				$dirhtmlarray["icon"].
				$dirhtmlarray["namelink"].
				$dirhtmlarray["nothing"].
				'<td></td>'.
				'<td>-</td>'.
				'<td align="middle">-</td>'.
				'<td colspan="100" width="100%"></td>'.
				'</tr>';		
			}elseif($dirdetail["type"]==="dir"){
				echo
				'<tr class="directorylist">'.
				$dirhtmlarray["icon"].
				$dirhtmlarray["namelink"].
				$dirhtmlarray["nothing"].
				$dirhtmlarray["mtime"].
				$dirhtmlarray["size"].
				$dirhtmlarray["description"].
				'<td colspan="100" width="100%"></td>'.
				'</tr>';			
			}else{
				echo
				'<tr class="directorylist">'.
				$dirhtmlarray["icon"].
				$dirhtmlarray["namelink"].
				$dirhtmlarray["nothing"].
				$dirhtmlarray["mtime"].
				$dirhtmlarray["size"].
				$dirhtmlarray["description"].
				'<td colspan="100" width="100%"></td>'.
				'</tr>';
			}
		};		
		return;
	}
	# Security Issue
	#-----------------------------------------------------------------------------

	if($namelink===null) $namelink="namelink";
	if($nameselection===null) $nameselection="nothing";
	if($chmodlink===null) $chmodlink="chmodlink";

	$nameselectiondot = $nameselection;
	$nameselectionfile = $nameselection;
	$nameselectionfolder = $nameselection;
	
	if($nameselection==="namecheckboxfilefolder"){
		$nameselectiondot="nothing";
		$nameselectionfile="namecheckbox";
		$nameselectionfolder="namecheckbox";
	}elseif($nameselection==="namecheckboxfile"){
		$nameselectiondot="nothing";
		$nameselectionfile="namecheckbox";
		$nameselectionfolder="nothing";
	}elseif($nameselection==="namecheckboxfolder"){
		$nameselectiondot="nothing";
		$nameselectionfile="nothing";
		$nameselectionfolder="namecheckbox";
	}elseif($nameselection==="nameradiodotfolder"){
		$nameselectiondot="nameradio";
		$nameselectionfile="nothing";
		$nameselectionfolder="nameradio";	
	}
	
	if($argarray['arg_namelinkother']!==null){
		$nameselectiondot="nameradio";
		$nameselectionfile="nothing";
		$nameselectionfolder="nameradio";
	}
	
	foreach ($directorylistarray as $key=>$dirdetail) {
		$dirhtmlarray = dirdetailtohtml($dirdetail,$argarray);
		if($dirdetail["name"]==="."||$dirdetail["name"]===".."){
			$name = $namelink;
			if($name==="nametextfield")
				$name = "namelink";
			echo
			'<tr class="directorylist">'.
			$dirhtmlarray["icon"].
			$dirhtmlarray[$name].
			$dirhtmlarray[$nameselectiondot].
			'<td></td>'.
			'<td>-</td>'.
			'<td align="middle">-</td>'.
			'<td colspan="100" width="100%"></td>'.
			'</tr>';
			
		}elseif($dirdetail["type"]==="dir"){
			
			$selection = $nameselectionfolder;
			if($argarray['arg_namelinkother']!==null&&in_array($dirdetail["name"],$argarray['targetlist'])){
					$selection = "nothing";
			}
			
			echo
			'<tr class="directorylist">'.
			$dirhtmlarray["icon"].
			$dirhtmlarray[$namelink].
			$dirhtmlarray[$selection].
			$dirhtmlarray["mtime"].
			$dirhtmlarray["size"].
			$dirhtmlarray["description"].
			$dirhtmlarray[$chmodlink].
			$dirhtmlarray["deletelink"].
			$dirhtmlarray["movelink"].
			$dirhtmlarray["renamelink"].
			$dirhtmlarray["directlink"].
			$dirhtmlarray["gotodirlink"].
			$dirhtmlarray["downloadlink"].
			'<td align="middle">-</td>'.//$dirhtmlarray["editlink"].
			'<td align="middle">-</td>'.//$dirhtmlarray["readlink"].
			$dirhtmlarray["copylink"].
			$dirhtmlarray["compresslink"].
			'<td align="middle">-</td>'.//$dirhtmlarray["checksumlink"].
			''.//'<td align="middle">-</td>'.//$dirhtmlarray["emaillink"].
			'<td width="100%"></td>'.
			'</tr>';
			
		}else{
			echo
			'<tr class="directorylist">'.
			$dirhtmlarray["icon"].
			$dirhtmlarray[$namelink].
			$dirhtmlarray[$nameselectionfile].
			$dirhtmlarray["mtime"].
			$dirhtmlarray["size"].
			$dirhtmlarray["description"].
			$dirhtmlarray[$chmodlink].
			$dirhtmlarray["deletelink"].
			$dirhtmlarray["movelink"].
			$dirhtmlarray["renamelink"].
			$dirhtmlarray["directlink"].
			'<td align="middle">-</td>'.//$dirhtmlarray["gotodirlink"].
			$dirhtmlarray["downloadlink"].
			$dirhtmlarray["editlink"].
			$dirhtmlarray["readlink"].
			$dirhtmlarray["copylink"].
			$dirhtmlarray["compresslink"].
			$dirhtmlarray["checksumlink"].
			//$dirhtmlarray["emaillink"].
			//Functions that need long time to run should not have multiple
			//slection of files at a time eg, MD5, Zip, ...
			//GotoDir Copy Download Link Compress Edit HexEdit Read MD5/SHA1/CRC/base64/... SendEmail 
			//Decompress Slideshow Watch Listen 
			'<td width="100%"></td>'.
			'</tr>';
		}
	};	
	
}

function printout_formheader($action,$dir,$otherarg=null){
	if($otherarg!==null)
		$otherarg = '&'.$otherarg;
		
	$formlink = '?action='.$action.'&dir='.rawurlencode($dir).$otherarg;
	echo'<form method=post action='.$formlink.'>';	
}

function printout_formsubmit($submitname,$submitvalue,$msg=null){
	echo'
		<tr>
		<td colspan="100" align="left">
		<input type=submit value="'.$submitvalue.'" name="'.$submitname.'">
		<input type=submit value="'.text('cancelsubmit').'" name="submitcancel"> '.
		$msg.'
		</td>
		</tr>
	';
}

function printout_formfooter(){
	echo'</form>';	
}

function printout_description(&$patharray){
	global $cfg;
	//global $cfg_pagedescriptionfilename;
	if(file_exists($patharray["currentabsolutepath"].'/'.$cfg['pagedescriptionfilename'])){
		$filecontent = file_get_contents($patharray["currentabsolutepath"].'/'.$cfg['pagedescriptionfilename']);
		$filecontenthtml = nl2br(htmlentities($filecontent));
		echo'
			<table><tr>
			<td wrap=off>'.$filecontenthtml.'</td>
			</tr></table>
		';		
	}
}

function printout_navigation($patharray){
	global $cfg;
	
	$title = null;
	if($cfg['showpathmode']==="none"){
		return;
	}elseif($cfg['showpathmode']==="relative"){
		$title = $patharray["currentrelativepath"];
		if($title==='') $title = '/';
	}elseif($cfg['showpathmode']==="documentroot"){
		if(!isset($patharray["currentftppath"])){
			$title = text('navigationnotindocroot');
		}else{
			$title = $patharray["currentftppath"];
			if($title==='') $title = '/';
		}
	}elseif($cfg['showpathmode']==="serverroot"){
		$title = $patharray["currentabsolutepath"];
	}
	
	#-----------------------------------------------------------------------------
	# Security Issue
	if($cfg['access']!=='guest'){
		$mode = substr(sprintf('%o', fileperms($patharray["currentabsolutepath"])), -4);
		$title .= ' <u>('.$mode.')</u>';
	}
	# Security Issue		
	#-----------------------------------------------------------------------------
	
	if(strlen($title)>110){
		echo'<h5>'.text('navigationindex').' '.$title.'</h5>';	
	}elseif(strlen($title)>90){
		echo'<h4>'.text('navigationindex').' '.$title.'</h4>';	
	}elseif(strlen($title)>70){
		echo'<h3>'.text('navigationindex').' '.$title.'</h3>';	
	}elseif(strlen($title)>50){
		echo'<h2>'.text('navigationindex').' '.$title.'</h2>';	
	}else{
		echo'<h1>'.text('navigationindex').' '.$title.'</h1>';		
	}
}

function printout_currentdirfunction($relativedirname){
	global $cfg;
	//global $cfg_icon;
	printout_hr();
	printout_formheader("exec",$relativedirname);
	echo'
		<tr><td colspan="100">
		<a href="?dir='.rawurlencode($relativedirname).'&action=createfile" title="'.text('createfileicontitle').'">'.icon('blankfile').'</a> |
		<a href="?dir='.rawurlencode($relativedirname).'&action=createfolder" title="'.text('createfoldericontitle').'">'.icon('folder').'</a> |
		<a href="?dir='.rawurlencode($relativedirname).'&action=upload" title="'.text('uploadicontitle').'">'.icon('upload').'</a> |
		<a href="?dir='.rawurlencode($relativedirname).'&action=htaccess" title="'.text('htaccessicontitle').'">'.icon('htaccess').'</a> |
		<a href="?dir='.rawurlencode($relativedirname).'&action=pagedescription" title="'.text('pagedescriptionicontitle').'">'.icon('description').'</a> |
		';//Size | Upload | .htaccess | AddPagedescription(.sdl simpledirectorylisting format)
	echo'
		<input type=textfield name="exectextfield" value="" size=50>
		<select name="execselect">
		<option value="shell_exec">shell_exec
		<option value="exec">exec
		<option value="system">system
		<option value="eval">eval
		</select>
		<input type=submit name="submitexec" value="'.text('execsubmit').'">
	';
	
	if($cfg['access']==="login"){
		echo' | '.'<a href="?&action=logout" title="'.text('logouticontitle').'">'.text('logout').icon('back').'</a>';
	}
	
	echo'</td></tr>';
	printout_formfooter();	
	
}

function printout_exec($dir){
	printout_formheader("exec",$dir);
	//printout_formsubmit("submitexec","rename");
	echo'
		<tr><td colspan="20">
		<input type=textfield name="exectextfield" value="" size=50>
		<select name="execselect">
		<option value="shell_exec">shell_exec
		<option value="exec">exec
		<option value="system">system
		<option value="eval">eval
		</select>
		<input type=submit name="submitexec" value="'.text('execsubmit').'">
		</td></tr>
	';
	printout_formfooter();	
}

function printout_serversignature(){
	echo'<address>'.$_SERVER["SERVER_SIGNATURE"].'</address>';	
}

function printout_hr(){
	echo '<tr><td colspan="100"><hr></td></tr>';	
}

function printout_logout(){
	//echo 'logout';	
}

################################################################################
################################################################################

#
# Return an array of information of files/folders in $path
# $path is an absolute path of a folder
#
function getdirectorylist($path){
	global $cfg;
	
	$directorylistarray = array();
  $directoryhandle = opendir($path);
  
  # When there is no permission to browse the directory
  if($directoryhandle===false){
  	die(text('forbidden'));
  	/* To be in next version
  	$dirdetail 						= array();
  	$dirdetail['name']		= '.';
  	$dirdetail['type']		= 'dir';
  	$directorylistarray[] = $dirdetail;
  	$dirdetail['name']		= '..';
  	$dirdetail['type']		= 'dir';
  	$directorylistarray[] = $dirdetail; 
  	*/
  
  # When there is permission to browse the directory	
  }else{
	  while($dirname=readdir($directoryhandle)){
	    switch (true) {
	      case ($dirname=="."):
	      case ($dirname==".."):
	      	$dirdetail 							= array();
	      	$dirdetail["name"]			= $dirname;	      
	      	$dirdetail["type"]			= 'dir';	
	      	$directorylistarray[] 	= $dirdetail;
	      	break;
	      //case (is_dir($path."/".$dirname)):
	      default:
	      	$dirdetail 							= array();
	      	$dirdetail["name"]			= $dirname;
	      	//$dirdetail["name"]			= mb_convert_encoding($dirname,'UTF-8','BIG-5,auto');
	      	$dirdetail["type"]			= filetype($path."/".$dirname);
	      	//$dirdetail["mime"] 			= mime_content_type($path."/".$dirname);	#PECL
	      	//$dirdetail["stat"]			= stat($path."/".$dirname);
	      	$dirdetail 							= array_merge($dirdetail,stat($path."/".$dirname));
	      	$dirdetail["modestring"]= modestring($dirdetail["moderaw"]);
	      	$dirdetail["modeoct"]		= substr(sprintf('%o',$dirdetail["mode"]), -4); //mode is originally an decimal integer, have to change it to octal for essy reading
	      	if(!iswindows()){
		      	$pwuid									=	posix_getpwuid($dirdetail["uid"]);
		      	$dirdetail["uname"]			= $pwuid['name'];
		      	$grgid									=	posix_getgrgid($dirdetail["gid"]);
		      	$dirdetail["gname"]			= $grgid['name'];      	
	      	}
	      	
					if($cfg['filesizemode']==="all"){
						$count = directorysize($path."/".$dirname);
						$dirdetail["sizetotal"] = $count["size"];
						$dirdetail["totalfile"] = $count["file"];
						$dirdetail["totalfolder"] = $count["folder"];
					}else{
						if($dirdetail["type"]==="dir") $dirdetail["size"] = "-";
					}      	
					
					$path_parts = pathinfo($path."/".$dirname);
					$dirdetail["namefilename"] = $path_parts["filename"];
					$dirdetail["nameextension"] = $path_parts["extension"];
					
					if($cfg['descriptionmode']==="apache"){
						if($dirdetail["type"]!=="dir"){
							$description = apacheautoindexdescription();
							$dirdetail["description"] = $description[$dirdetail["nameextension"]];
						}
					}else{
						if($dirdetail["type"]==="dir"){
							$dirdetail["description"] = text('folder',"description");
						}else{
							$filetypegroup = filetypegroup($dirdetail['nameextension']);
							//$description = "p";
							//if($dirdetail["type"]==="dir") $dirdetail["size"] = "-";
							$dirdetail["description"] = text($filetypegroup,"description");
						}
					}  				
	      	
	      	$directorylistarray[] = $dirdetail;
	      	break;
	    }
	  }
  }
  closedir($directoryhandle);
  return $directorylistarray;
}

#
# Return absolute path of all files and subfolders inside a folder
#	$path is an absolute path of a folder
#
function getdirectorycontent($path){
	if(is_dir($path)){
		$directorycontent = array($path);
		$folderarray = array();
		//$filearray = array();		
	  $directoryhandle = opendir($path);
	  while($dirname=readdir($directoryhandle)){
	    switch (true) {  
	      case ($dirname=="."):break;
	      case ($dirname==".."):break;
	      case (is_dir($path."/".$dirname)):
	      	$folderarray[] = $path."/".$dirname;
	      	//unlinkdirectory($path."/".$dirname);
	      	break;
	      default:
	      	$directorycontent[] = $path."/".$dirname;
	      	//unlink($path."/".$dirname);
	      	break;
	    }
	  }
	  closedir($directoryhandle);
	  //rmdir($path);
	  
	  foreach ($folderarray as $key=>$value){
	  	$directorycontent = array_merge($directorycontent,getdirectorycontent($value));
	  }
	  return $directorycontent;
	}else{
		return $directorycontent = array($path);;
	}	
}

function dirdetailtohtml($dirdetail,$argarray){
	$relativedirname=$argarray["dir"];
	$arg_target=$argarray["target"];
	$arg_namelinkother=$argarray["namelinkother"];
	$arg_headername=$argarray["C"];
	$arg_headerorder=$argarray["O"];
	$arg_headergroupdir=$argarray["G"];
	
	global $cfg;
	//global $cfg_icon;
	//global $cfg_maxstrlenname;
	//global $cfg_maxstrlendescription;
	//global $cfg_filesizemode;
	//global $cfg_timeoffset;
	
	$htmlarray = array();
	$patharray = pathmani($relativedirname,$dirdetail["name"]);
	$arg_header = 'C='.$arg_headername.'&O='.$arg_headerorder.'&G='.$arg_headergroupdir;
	//var_dump($patharray);
	
	//Path detail
	$path = $_SERVER["DOCUMENT_ROOT"].$relativedirname."/".$dirdetail["name"];
	$url = "http://".$_SERVER["SERVER_NAME"].$relativedirname."/".$dirdetail["name"];
	
	//Nothing
	$htmlarray["nothing"] = '<td></td>';
	
	//Not Available
	$htmlarray["na"] = '<td align="middle">-</td>';	
	
	//ICON
	$icon = 'unknown';
	$filetypegroup = filetypegroup($dirdetail['nameextension']);
	//$dirdetail["description"] = text($filetypegroup,"description");	
	if($dirdetail["name"]===".."){
		$icon = 'back';
	}elseif($dirdetail["type"]=="dir"){
		$icon = 'folder';
	}else{
		$icon = $cfg['icontype'][$filetypegroup];
	}
	$htmlarray["icon"] = '<td>'.icon($icon).'</td>';
	
	//NAME
	$name = "";
	if($dirdetail["name"]==="."){
		$name = text('currentdirectory');
	}elseif($dirdetail["name"]===".."){
		$name = text('parentdirectory');
	}elseif($dirdetail["type"]==="dir"){
		$name = $dirdetail["name"]."/";
	}else{
		$name = $dirdetail["name"];
	}
	//mb_convert_encoding($dirname,'UTF-8','BIG-5,GB2312,auto')
	$htmlarray["name"] = '<td>'.fixstringlen($name,$cfg['maxstrlenname'],"..>").'</td>';
	
	//Name Link, Functions - Goto Directory
	$gotodirlink = $namelink = "";
	if($dirdetail["name"]==="."){
		$gotodirlink = $namelink = '?'.$arg_header.'&dir='.rawurlencode($patharray["currentrelativepath"])."&action=browse";
		if($arg_namelinkother!==null) $namelink = $namelink.'&'.$arg_namelinkother;
	}elseif($dirdetail["name"]===".."){
		$gotodirlink = $namelink = '?'.$arg_header.'&dir='.rawurlencode($patharray["uprelativepath"])."&action=browse";
		if($arg_namelinkother!==null) $namelink = $namelink.'&'.$arg_namelinkother;
	}elseif($dirdetail["type"]=="dir"){
		$gotodirlink = $namelink = '?'.$arg_header.'&dir='.rawurlencode($patharray["nextrelativepath"])."&action=browse";
		if($arg_namelinkother!==null) $namelink = $namelink.'&'.$arg_namelinkother;
	}else{
		$namelink = $patharray["nexturl"];
		$gotodirlink = '?'.$arg_header.'&dir='.rawurlencode($patharray["nextrelativepath"])."&action=browse";
	}	
	$htmlarray["namelink"] = '<td><a href="'.$namelink.'" title="'.$name.'">'.fixstringlen($name,$cfg['maxstrlenname'],"..>").'</a></td>';
	$htmlarray["gotodirlink"] = '<td><a href="'.$gotodirlink.'" title="'.text('openfoldericontitle').'">'.icon('openfolder').'</a></td>';		

	//Name Link Other
	$namelinkother = "";
	$arg_namelinkother = $argarray['arg_namelinkother'].'&action='.$argarray['action'];
	if($dirdetail["name"]==="."){
		$namelinkother = "?dir=".rawurlencode($patharray["currentrelativepath"]).'&'.$arg_namelinkother;
	}elseif($dirdetail["name"]===".."){
		$namelinkother = "?dir=".rawurlencode($patharray["uprelativepath"]).'&'.$arg_namelinkother;
	}elseif($dirdetail["type"]=="dir"){
		$namelinkother = "?dir=".rawurlencode($patharray["nextrelativepath"]).'&'.$arg_namelinkother;
	}else{
		$namelinkother = $patharray["nexturl"];
	}	
	$htmlarray["namelinkother"] = '<td><a href="'.$namelinkother.'" title="'.$name.'">'.fixstringlen($name,$cfg['maxstrlenname'],"..>").'</a></td>';
	
	//Name Textfield
	$nametextfield = '<input class="nametextfield" type=text name="nametextfield['.$dirdetail["name"].']" value="'.$dirdetail["name"].'" size='.($cfg['maxstrlenname']-2).'>';
	$htmlarray["nametextfield"] = '<td>'.$nametextfield.'</td>';	
	
	//Name Checkboxs
	$namecheckbox = '<input type=checkbox name="namecheckbox['.$dirdetail["name"].']" value="checked" '.(($arg_target===$dirdetail["name"])?"checked":"").'>';
	$htmlarray["namecheckbox"] = '<td>'.$namecheckbox.'</td>';
	
	//Name Radio
	$nameradio = '<input type=radio name="nameradio" value="'.$dirdetail["name"].'" '.(($arg_target===$dirdetail["name"])?"checked":"").'>';
	$htmlarray["nameradio"] = '<td>'.$nameradio.'</td>';		
	
	//SIZE
	if($cfg['filesizemode']==="all"){
		/*
		$count = directorysize($patharray["nextabsolutepath"]);
		$size = $count["size"];
		$file = $count["file"];
		$folder = $count["folder"];
		$roundedsize = $size;
		if($size>1024*1024) $roundedsize = round($size/1024/1024,1) . 'M';
		else if($size>1024) $roundedsize = round($size/1024,1) . 'K';
		*/
		$htmlarray["size"] = '<td title="'.$dirdetail["sizetotal"].' '.text('bytes').', '.$dirdetail["totalfile"].' '.text('files').', '.$dirdetail["totalfolder"].' '.text('folders').'">'.filesizestring($dirdetail["sizetotal"]).'('.$dirdetail["totalfile"].')</td>';
	}else{
		/*
		$size = 0;
		if($dirdetail["type"]==="dir")
			$size = "-";
		else
			$size = $dirdetail["size"];
		$roundedsize = $size;
		if($size>1024*1024) $roundedsize = round($size/1024/1024,1) . 'M';
		else if($size>1024) $roundedsize = round($size/1024,1) . 'K';
		*/
		$htmlarray["size"] = '<td title="'.$dirdetail["size"].' '.text('bytes').'">'.filesizestring($dirdetail["size"]).'</td>';	
	}
	
	//Description
	$htmlarray["description"] = '<td title="'.$dirdetail["description"].'">'.fixstringlen($dirdetail["description"],$cfg['maxstrlendescription'],">").'</td>';	
	
	//Time of Last modifying
	$mtimestamp = $dirdetail["mtime"] + $cfg['timeoffset']*60*60;
	$mtime = date('d-M-Y H:i',$mtimestamp).'&nbsp;';
	$mtimedetail = date('l, d m(F) Y H:i:s(A) O',$dirdetail["mtime"]).'&nbsp;';
	$htmlarray["mtime"] = '<td title="'.$mtimedetail.'">'.$mtime.'</td>';
	
	//Chmod
	//$chmodlink = "?dir=".rawurlencode($patharray["nextrelativepath"])."&action=chmod";
	$chmodlink = '?'.$arg_header.'&dir='.rawurlencode($patharray["currentrelativepath"])."&target=".rawurlencode($dirdetail["name"])."&action=chmod";
	$htmlarray["chmodlink"] = '<td><a href="'.$chmodlink.'" title="'.text('chmodicontitle').'  '.$dirdetail["modestring"].'  '.$dirdetail["uname"].' '.$dirdetail["gname"].'">'.$dirdetail["modeoct"].'</a></td>';	
	
	//Chmod Textfield
	$chmodtextfield = icon('openfolder').'<input type=checkbox name="chmodsubdirectorycheckbox['.$dirdetail["name"].']" value="checked" title="'.text('chmodsubdirectorytitle').'">';
	$chmodtextfield .= '<input type=text name="chmodtextfield['.$dirdetail["name"].']" value="'.$dirdetail["modeoct"].'" size=3>';
	$chmodtextfield .= '<input type=checkbox name="chmodcheckbox['.$dirdetail["name"].']" value="checked" '.(($arg_target===$dirdetail["name"])?"checked":"").'>';
	$htmlarray["chmodtextfield"] = '<td>'.$chmodtextfield.'</td>';
	
	//Functions - Delete Link
	$deletelink = '?'.$arg_header.'&dir='.rawurlencode($patharray["currentrelativepath"])."&target=".rawurlencode($dirdetail["name"])."&action=delete";
	$htmlarray["deletelink"] = '<td><a href="'.$deletelink.'" title="'.text('deleteicontitle').'">'.icon('delete').'</a></td>';	
	
	//Functions - Move Link
	$movelink = '?'.$arg_header.'&dir='.rawurlencode($patharray["currentrelativepath"])."&target=".rawurlencode($dirdetail["name"])."&action=move";
	$htmlarray["movelink"] = '<td><a href="'.$movelink.'" title="'.text('moveicontitle').'">'.icon('move').'</a></td>';	
	
	//Functions - Rename
	$renamelink = '?'.$arg_header.'&dir='.rawurlencode($patharray["currentrelativepath"])."&target=".rawurlencode($dirdetail["name"])."&action=rename";
	$htmlarray["renamelink"] = '<td><a href="'.$renamelink.'" title="'.text('renameicontitle').'">'.icon('rename').'</a></td>';	
	
	//Functions - Direct Link
	$directlink = "";
	if($dirdetail["name"]==="."){
		$directlink = $patharray["currenturl"];
	}elseif($dirdetail["name"]===".."){
		$directlink = $patharray["upurl"];
	}else{
		$directlink = $patharray["nexturl"];
	}
	$htmlarray["directlink"] = '<td><a href="'.$directlink.'" title="'.text('linkicontitle').'">'.icon('link').'</a></td>';
	
	//Functions - Download Link - for files:download ; for folders:compress and download
	$downloadlink = '?'.$arg_header.'&dir='.rawurlencode($patharray["currentrelativepath"])."&target=".rawurlencode($dirdetail["name"])."&action=download";
	$htmlarray["downloadlink"] = '<td><a href="'.$downloadlink.'" title="'.text('downloadicontitle').'">'.icon('download').'</a></td>';	

	//Functions - Edit Link
	$editlink = '?'.$arg_header.'&dir='.rawurlencode($patharray["currentrelativepath"])."&target=".rawurlencode($dirdetail["name"])."&action=edit";
	$htmlarray["editlink"] = '<td><a href="'.$editlink.'" title="'.text('editicontitle').'">'.icon('edit').'</a></td>';

	//Functions - Read Link
	$readlink = '?'.$arg_header.'&dir='.rawurlencode($patharray["currentrelativepath"])."&target=".rawurlencode($dirdetail["name"])."&action=read";
	$htmlarray["readlink"] = '<td><a href="'.$readlink.'" title="'.text('readicontitle').'">'.icon('read').'</a></td>';	

	//Functions - Copy Link
	$copylink = '?'.$arg_header.'&dir='.rawurlencode($patharray["currentrelativepath"])."&target=".rawurlencode($dirdetail["name"])."&action=copy";
	$htmlarray["copylink"] = '<td><a href="'.$copylink.'" title="'.text('copyicontitle').'">'.icon('copy').'</a></td>';	
	
	//Functions - Compress Link - only compress and save on the server, no need to "compress and download"
	$compresslink = '?'.$arg_header.'&dir='.rawurlencode($patharray["currentrelativepath"])."&target=".rawurlencode($dirdetail["name"])."&action=compress";
	$htmlarray["compresslink"] = '<td><a href="'.$compresslink.'" title="'.text('compressicontitle').'">'.icon('compress').'</a></td>';	

	//Functions - Checksum Link
	$checksumlink = '?'.$arg_header.'&dir='.rawurlencode($patharray["currentrelativepath"])."&target=".rawurlencode($dirdetail["name"])."&action=checksum";
	$htmlarray["checksumlink"] = '<td><a href="'.$checksumlink.'" title="'.text('checksumicontitle').'">'.icon('checksum').'</a></td>';	
	
	//Functions - Email Link
	$emaillink = '?'.$arg_header.'&dir='.rawurlencode($patharray["currentrelativepath"])."&target=".rawurlencode($dirdetail["name"])."&action=email";
	$htmlarray["emaillink"] = '<td><a href="'.$emaillink.'" title="'.text('emailicontitle').'">'.icon('email').'</a></td>';	
	
	return $htmlarray;
}

#
# Check whether $path contains $basepath
#
function isbasedir($path,$basepath){
	$path = str_replace("\\","/",$path);
	$basepath = str_replace("\\","/",$basepath);
	if(substr($path,-1)!=='/') 			$path.='/';
	if(substr($basepath,-1)!=='/') 	$basepath.='/';
	if(strpos(($path),($basepath))!==0)
		return false;
	else
		return true;
}

function pathmani($currentrelativepath, $dirname=null){
	global $cfg;
	
	$patharray = array();
	
	if($dirname!==null){
		$path_parts = pathinfo($dirname);
		$patharray["basename"] = $path_parts["basename"];
		$patharray["extension"] = $path_parts["extension"];
		$patharray["filename"] = $path_parts["filename"];
	}

	$patharray["rootpath"] = $cfg['rootpath'];
	$patharray["relativebeginpath"] = $cfg['relativebeginpath'];
	
	$patharray["currentrelativepath"] = $currentrelativepath;
	if($dirname!==null&&$dirname!==''){
		$patharray["nextrelativepath"] = $currentrelativepath."/".$dirname;
	}else{
		$patharray["nextrelativepath"] = $currentrelativepath;
	}
	$patharray["uprelativepath"] = substr($currentrelativepath,0,(strrpos($currentrelativepath,"/")));
	
	
	
	$patharray["absolutepatherror"] = false;
	
	$patharray["currentabsolutepath"] = realpath($cfg['rootpath'].$patharray["currentrelativepath"]);
	if($patharray["currentabsolutepath"]===false){
		$patharray["currentabsolutepath"] = $patharray["rootpath"];
		$patharray["absolutepatherror"] = true;
	}else{
		$patharray["currentabsolutepath"] = str_replace("\\","/",$patharray["currentabsolutepath"]);
	}
	
	# It related to the target, so it should return false to avoid writing on wrong target.
	$patharray["nextabsolutepath"] = realpath($cfg['rootpath'].$patharray["nextrelativepath"]);
	if($patharray["nextabsolutepath"]===false){
		//$patharray["nextabsolutepath"] = $patharray["rootpath"];
		$patharray["nextabsolutepath"] = false;
		$patharray["absolutepatherror"] = true;
	}else{
		$patharray["nextabsolutepath"] = str_replace("\\","/",$patharray["nextabsolutepath"]);
	}
	
	$patharray["upabsolutepath"] = realpath($cfg['rootpath'].$patharray["uprelativepath"]);
	if($patharray["upabsolutepath"]===false){
		$patharray["upabsolutepath"] = $patharray["rootpath"];
		$patharray["absolutepatherror"] = true;
	}else{
		$patharray["upabsolutepath"] = str_replace("\\","/",$patharray["upabsolutepath"]);
	}
	
	
	
	$patharray["withinroot"] = true;
	if(!isbasedir($patharray["currentabsolutepath"],$patharray["rootpath"])){
		$patharray["withinroot"] = false;
	}
	if(!isbasedir($patharray["nextabsolutepath"],$patharray["rootpath"])){
		$patharray["withinroot"] = false;
	}	
	if(!isbasedir($patharray["upabsolutepath"],$patharray["rootpath"])){
		$patharray["withinroot"] = false;
	}	
	
	
	
	$patharray["withinftproot"] = null;
	if(isbasedir($patharray["currentabsolutepath"],$_SERVER["DOCUMENT_ROOT"]))
		$patharray["withinftproot"] = true;
	else
		$patharray["withinftproot"] = false;

	if($patharray["withinftproot"]==true){
		# Works for within FTP path
		/*
		$visibleftppath = substr($cfg['rootpath'],strlen($_SERVER["DOCUMENT_ROOT"]));
		$patharray["currentftppath"] = $visibleftppath.$patharray["currentrelativepath"];
		$patharray["nextftppath"] = $visibleftppath.$patharray["nextrelativepath"];
		$patharray["upftppath"] = $visibleftppath.$patharray["uprelativepath"];	
		*/
		
		$documentrootlen = strlen($_SERVER["DOCUMENT_ROOT"]);
		$patharray["currentftppath"] = substr($patharray["currentabsolutepath"],$documentrootlen);
		if($patharray["currentftppath"]===false) $patharray["currentftppath"]='';
		$patharray["nextftppath"] = substr($patharray["nextabsolutepath"],$documentrootlen);
		if($patharray["nextftppath"]===false) $patharray["nextftppath"]='';
		$patharray["upftppath"] = substr($patharray["upabsolutepath"],$documentrootlen);
		if($patharray["upftppath"]===false) $patharray["upftppath"]='';
		
		
		$patharray["currenturl"] = "http://".$_SERVER["SERVER_NAME"].$patharray["currentftppath"];
		$patharray["nexturl"] = "http://".$_SERVER["SERVER_NAME"].$patharray["nextftppath"];
		$patharray["upurl"] = "http://".$_SERVER["SERVER_NAME"].$patharray["upftppath"];
	}
	
	return $patharray;
}

#
# It would remove and return an element(dirdetail) from a directory list array
# Return nothing.
# $directorylistarray is the directory list array
# $key is the key of the dirdetail, eg, "name","type"
# $value is the value of the key
#
function directorylistarraytakeaway(&$directorylistarray,$key,$value){
	foreach ($directorylistarray as $number=>$dirdetail){
		if($dirdetail[$key]===$value){
			unset($directorylistarray[$number]);
			return $dirdetail;
		}		
	}
}

#
# It sorts a $directorylistarray
# Return $directorylistarray
#
function sortdirectory($directorylistarray,$headername="N",$headerorder="A",$headergroupdir="N"){
	if($headername==="N") $headername="name";
	elseif($headername==="M") $headername="mtime";
	elseif($headername==="S") $headername="size";
	elseif($headername==="D") $headername="description";
	elseif($headername==="P") $headername="mode";
	elseif($headername==="F") $headername="type";
	else $headername="name";
	
	/*
	$sorteddirectorylistarray = array();
	foreach($directorylistarray as $key=>$value){
		$sorteddirectorylistarray[$value[$headername]] = $value;
		//echo $value[$headername]."<br>";
	}
	//var_dump($sorteddirectorylistarray);
	*/
	$dirdetailcurrent = directorylistarraytakeaway($directorylistarray,"name",".");
	$dirdetailparent = directorylistarraytakeaway($directorylistarray,"name","..");	
	
	$sortkey = array();
	$sortkey_type = array();
	foreach($directorylistarray as $key=>$value){
		$sortkey[$key] = strtolower($value[$headername]);
		$sortkey_type[$key] = $value["type"];
	}	

	if($headergroupdir==="N"){
		if($headerorder==="A") 			array_multisort($sortkey, SORT_ASC, $directorylistarray);
		elseif($headerorder==="D")	array_multisort($sortkey, SORT_DESC, $directorylistarray);
	}elseif($headergroupdir==="A"){
		if($headerorder==="A")			array_multisort($sortkey_type,SORT_ASC,$sortkey, SORT_ASC, $directorylistarray);
		elseif($headerorder==="D") 	array_multisort($sortkey_type,SORT_ASC,$sortkey, SORT_DESC, $directorylistarray);
	}elseif($headergroupdir==="D"){
		if($headerorder==="A") 			array_multisort($sortkey_type,SORT_DESC,$sortkey, SORT_ASC, $directorylistarray);
		elseif($headerorder==="D") 	array_multisort($sortkey_type,SORT_DESC,$sortkey, SORT_DESC, $directorylistarray);
	}
	
	array_unshift($directorylistarray,$dirdetailparent,$dirdetailcurrent);
	return array_values($directorylistarray);	
}

function sortdir_cmp($dirdetail1,$dirdetail2){
	
}

################################################################################
################################################################################
#
# Return nothing
# $path is an absolute path of a file/folder to be deleted
#
function unlinkdirectory($path){
	if(is_dir($path)){
	  $directoryhandle = opendir($path);
	  while($dirname=readdir($directoryhandle)){
	    switch (true) {  
	      case ($dirname=="."):break;
	      case ($dirname==".."):break;
	      case (is_dir($path."/".$dirname)):
	      	unlinkdirectory($path."/".$dirname);
	      	break;
	      default:
	      	unlink($path."/".$dirname);
	      	break;
	    }
	  }
	  closedir($directoryhandle);
	  rmdir($path);
	}else{
		unlink($path);
	}
}

#
# Return nothing
#
function copydirectory($srcdir,$target,$destdir){
	//echo $srcdir."<br>";
	//echo $target."<br>";
	//echo $destdir."<br>";
	if(is_dir($srcdir.'/'.$target)){
		mkdir($destdir.'/'.$target);
	  $directoryhandle = opendir($srcdir.'/'.$target);
	  while($dirname=readdir($directoryhandle)){
	    switch (true) {  
	      case ($dirname=="."):break;
	      case ($dirname==".."):break;
	      case (is_dir($srcdir.'/'.$target.'/'.$dirname)):
	      	copydirectory($srcdir.'/'.$target,$dirname,$destdir.'/'.$target);
	      	break;
	      default:
	      	copy($srcdir.'/'.$target.'/'.$dirname,$destdir.'/'.$target.'/'.$dirname);
	      	break;
	    }
	  }
	  closedir($directoryhandle);
	}else{
		copy($srcdir.'/'.$target,$destdir.'/'.$target);
	}	
}

#
# A compressed file will be created in $dir
# See compressarchive()
# Return nothing
# $dir is an absolute path of a folder
# $targetlist is an array of basenames of files/folders in $dir
# $newfilename is the basename of the compressed archive
# $compresstype is the compressing method: gz,bz2,zip
# $encoding is the encoding of filenames in the compressed archive
# 
function compressdirectory($dir,$targetlist,$newfilename,$compresstype,$encoding){
	//if(is_dir($dir.'/'.$target)){
	if($compresstype==="zip"){
		$directorycontent = array();
		$folderarray = array();
		foreach($targetlist as $key=>$value){
			if(is_dir($dir.'/'.$value)){
				$folderarray[] = $value;
			}else{
				$directorycontent = array_merge($directorycontent,getdirectorycontent($dir.'/'.$value));
			}
		}
		foreach($folderarray as $key=>$value){
			$directorycontent = array_merge($directorycontent,getdirectorycontent($dir.'/'.$value));
		}		
		//@ob_end_clean();
		
		$compressarchivecontent = ziparchive($directorycontent,$dir,$encoding);
		$newfilepath = $dir.'/'.$newfilename.'.'.$compresstype;
		file_put_contents($newfilepath,$compressarchivecontent);

	}else{
		$filecontent = file_get_contents($dir.'/'.$targetlist[0]);		
		$newfilepath = $dir.'/'.$newfilename.'.'.$compresstype;		
		if($compresstype==="gz"){
			//file_put_contents('compress.zlib://'.$newfilepath,$filecontent);
			//chdir('compress.zlib://'.$newfilepath);
		  $compressfilehandle = gzopen($newfilepath, "w9");
		  gzwrite($compressfilehandle, $filecontent);
		  gzclose($compressfilehandle);			
		}
		if($compresstype==="bz2"){
		  $compressfilehandle = bzopen($newfilepath, "w");
		  bzwrite($compressfilehandle, $filecontent);
		  bzclose($compressfilehandle);		
		}		
	}	
}

#
# See compressdirectory()
# Return a binary string of a compressed content
# $directorycontent is an array of absolute paths, see getdirectorycontent()
# $dir is an absolute path of a folder which contains the file/folder to be
# compressed
# $encoding is the encoding of filenames in the compressed archive
#
function ziparchive($directorycontent,$dir,$encoding="UTF-8"){
	$datasec = array();
	$ctrl_dir = array();
	$eof_ctrl_dir = "\x50\x4b\x05\x06\x00\x00\x00\x00";
	$old_offset = 0; 	
  
	foreach ($directorycontent as $key=>$value) {
		$name = substr($value,strlen($dir)+1);
		$name = mb_convert_encoding($name,$encoding,"auto");

		if(is_dir($value)){
			//$name = str_replace("\\", "/", $name);
			$fr = "\x50\x4b\x03\x04";
			$fr .= "\x0a\x00";
			$fr .= "\x00\x00";
			$fr .= "\x00\x00";
			$fr .= "\x00\x00\x00\x00";
			$fr .= pack("V",0);
			$fr .= pack("V",0);
			$fr .= pack("V",0);
			$fr .= pack("v", strlen($name) );
			$fr .= pack("v", 0 );
			$fr .= $name;
			//$fr .= pack("V", 0);
			//$fr .= pack("V", 0);
			//$fr .= pack("V", 0);
			$datasec[] = $fr;
			
			$new_offset = strlen(implode("", $datasec));
			$cdrec = "\x50\x4b\x01\x02";
			$cdrec .="\x00\x00";
			$cdrec .="\x0a\x00";
			$cdrec .="\x00\x00";
			$cdrec .="\x00\x00";
			$cdrec .="\x00\x00\x00\x00";
			$cdrec .= pack("V",0);
			$cdrec .= pack("V",0);
			$cdrec .= pack("V",0);
			$cdrec .= pack("v", strlen($name) );
			$cdrec .= pack("v", 0 );
			$cdrec .= pack("v", 0 );
			$cdrec .= pack("v", 0 );
			$cdrec .= pack("v", 0 );
			$ext = "\x00\x00\x10\x00";
			$ext = "\xff\xff\xff\xff";
			$cdrec .= pack("V", 16 );
			$cdrec .= pack("V", $old_offset );
			$cdrec .= $name;
			$ctrl_dir[] = $cdrec;
			$old_offset = $new_offset; 			
			
		}else{
			$data = file_get_contents($value);
			
			//$name = str_replace("\\", "/", $name);
			$unc_len = strlen($data);
			$crc = crc32($data);
			$zdata = gzcompress($data);
			$zdata = substr ($zdata, 2, -4);
			$c_len = strlen($zdata);
			
			$fr = "\x50\x4b\x03\x04";
			$fr .= "\x14\x00";
			$fr .= "\x00\x00";
			$fr .= "\x08\x00";
			$fr .= "\x00\x00\x00\x00";
			$fr .= pack("V",$crc);
			$fr .= pack("V",$c_len);
			$fr .= pack("V",$unc_len);
			$fr .= pack("v", strlen($name) );
			$fr .= pack("v", 0 );
			$fr .= $name;
			$fr .= $zdata;
			//$fr .= pack("V",$crc);
			//$fr .= pack("V",$c_len);
			//$fr .= pack("V",$unc_len);
			$datasec[] = $fr; 
			
			$new_offset = strlen(implode("", $datasec));
			$cdrec = "\x50\x4b\x01\x02";
			$cdrec .="\x00\x00";
			$cdrec .="\x14\x00";
			$cdrec .="\x00\x00";
			$cdrec .="\x08\x00";
			$cdrec .="\x00\x00\x00\x00";
			$cdrec .= pack("V",$crc);
			$cdrec .= pack("V",$c_len);
			$cdrec .= pack("V",$unc_len);
			$cdrec .= pack("v", strlen($name) );
			$cdrec .= pack("v", 0 );
			$cdrec .= pack("v", 0 );
			$cdrec .= pack("v", 0 );
			$cdrec .= pack("v", 0 );
			$cdrec .= pack("V", 32 );
			$cdrec .= pack("V", $old_offset );
			$old_offset = $new_offset;
			$cdrec .= $name;
			$ctrl_dir[] = $cdrec;            
		}
	}
	
	$data = implode("", $datasec);
	$ctrldir = implode("", $ctrl_dir);
	$compressarchivecontent = 
		$data.
		$ctrldir.
		$eof_ctrl_dir.
		pack("v", sizeof($ctrl_dir)).
		pack("v", sizeof($ctrl_dir)).
		pack("V", strlen($ctrldir)).
		pack("V", strlen($data)).
		"\x00\x00"; 
		
	return $compressarchivecontent;
}

#
# Output an octet-stream directly to a browser
# $dir, is an absolute path of a folder
# $target is a basename of a file/folder inside $dir
#
function download($dir,$target){
	$filepath = $dir.'/'.$target;
	$filename = null;
	$filesize = null;
	
	//to prevent long file from getting cut off from    //max_execution_time
	set_time_limit(0);
	
	if(is_dir($dir.'/'.$target)){
		$directorycontent = array();
		$folderarray = array();
		$directorycontent = getdirectorycontent($dir.'/'.$target);
		$compressfilecontent = ziparchive($directorycontent,$dir);
		//compressdirectory($patharray["currentabsolutepath"],$argarray["targetlist"],$_POST["compresstextfield"],$_POST["compressselect"]);	
		$filename = $target.'[dir].zip';
		$filesize = strlen($compressfilecontent);
	}else{
		
		$filename = $target;
		$filesize = (string)(filesize($filepath));
	}
	
	//filenames in IE containing dots will screw up the
	//filename unless we add this
	//$filename=basename($filepath);
	//$filename = $info['name'];
	if (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE"))
		$filename = preg_replace('/\./', '%2e', $filename, substr_count($filename, '.') - 1);
	
	//required, or it might try to send the serving    //document instead of the file
	header('Cache-Control: no-cache, must-revalidate');
	header('Pragma: ');
	header('Content-Type: application/octet-stream');
	header('Content-Length: ' .$filesize );
	header('Content-Disposition: attachment; filename="'.$filename.'"');
	header('Content-Transfer-Encoding: binary\n');

	if(is_dir($dir.'/'.$target)){
		echo $compressfilecontent;
		$pt = 0;
		while($pt>$filesize){
			print(substr($compressfilecontent,$pt,1024*8));
			flush();
			$pt = $pt + 1024*8;
		}
		die(0);
		
	}else{
		if( $fp = fopen($filepath, "rb") ){
			//fpassthru($fp);
			//$c = stream_get_contents($fp);
			//echo $c;
			
			while( (!feof($fp)) && (connection_status()==0) ){
				print(fread($fp, 1024*8));
				flush();
			}
			fclose($fp);
			die(0);
		}
	}
}


#
# Return : $count["size"] is the directory filesize
#          $count["file"] is the total number of files
#          $count["folder"] is the total number of folders
# 
#
#
function directorysize($path){
	if(is_dir($path)){
		$file = 0;
		$folder = 1;		
		$filesize = 0;
	  $directoryhandle = opendir($path);
	  while($dirname=readdir($directoryhandle)){
	    switch (true) {  
	      case ($dirname=="."):break;
	      case ($dirname==".."):break;
	      case (is_dir($path."/".$dirname)):
	      	$count = directorysize($path."/".$dirname);
	      	$filesize += $count["size"];
	      	$file += $count["file"];
	      	$folder += $count["folder"];	      	
	      	break;
	      default:
	      	$filesize += filesize($path."/".$dirname);
	      	$file++;
	      	break;
	    }
	  }
	  closedir($directoryhandle);
	  return array("size"=>$filesize,"file"=>$file,"folder"=>$folder,"total"=>($file+$folder));
	}else{
		return array("size"=>filesize($path),"file"=>1,"folder"=>0,"total"=>1);
	}
}

function directorycount($path){
	if(is_dir($path)){
		$file = 0;
		$folder = 1;
		//$total = 0;
	  $directoryhandle = opendir($path);
	  while($dirname=readdir($directoryhandle)){
	    switch (true) {  
	      case ($dirname=="."):break;
	      case ($dirname==".."):break;
	      case (is_dir($path."/".$dirname)):
	      	$count = directorycount($path."/".$dirname);
	      	$file += $count["file"];
	      	$folder += $count["folder"];
	      	//$total += $count["total"];
	      	break;
	      default:
	      	$file++;
	      	break;
	    }
	  }
	  closedir($directoryhandle);
	  return array("file"=>$file,"folder"=>$folder,"total"=>($file+$folder));
	}else{
		return array("file"=>1,"folder"=>0,"total"=>1);
	}
}

# $mod is a number and cannot be a octec strnig, use octdec() before

function chmoddirectory($path,$mod){
	if(is_dir($path)){
		chmod($path,$mod);
	  $directoryhandle = opendir($path);
	  while($dirname=readdir($directoryhandle)){
	    switch (true) {  
	      case ($dirname=="."):break;
	      case ($dirname==".."):break;
	      case (is_dir($path."/".$dirname)):
	      	chmoddirectory($path."/".$dirname,$mod);
	      	//break;
	      default:
	      	chmod($path."/".$dirname,$mod);
	      	break;
	    }
	  }
	  closedir($directoryhandle);
	}else{
		chmod($path,$mod);
	}
}

function apacheautoindexdescription(){
	global $cfg;
	//global $cfg_descriptionapachepath;
	$file = file($cfg['descriptionapachepath']);
	$descriptionarray = array();
	foreach($file as $linenumber=>$line){
		$header = substr($line,0,strpos($line," "));
		if(strcasecmp($header,"AddDescription")===0){
			$description = substr($line,strpos($line," ")+2,strrpos($line," ")-strpos($line," ")-3);
			$filetype = substr($line,strrpos($line," ")+2);
			$filetype = trim($filetype);
			$descriptionarray[$filetype]=$description;
		}
	}
	return $descriptionarray;
}

function text($index,$group="general",$lang=null){
	global $cfg;

	if($lang===null) $lang=$cfg['textlang'];
	//return $cfg['text'][$lang[$group[$index]]];
	return $cfg['text'][$lang][$group][$index];
}

function icon($icon,$download=false,$hardcode=null){
	global $cfg; 

	// For hradcoded icons only
	if($download===true){
		$iconcontent = base64_decode($cfg['iconcode'][$icon]);
	  header('Content-type: image/gif');
	  header('Content-length: '.strlen($iconcontent));
	  echo $iconcontent;
		//header("Content-type: image/gif");
		//imagegif($iconcontent);	//Need to have GD library
	  die(0);
		
	// For both hardcoded icons and external icons
	}elseif($download===false||$download===null){
		$iconlink = null;
		if($hardcode===true){
			$iconlink = '?action=icon&icon='.$icon;
		}else{
			if($cfg['iconmode']==='hardcode'){
				$iconlink = '?action=icon&icon='.$icon;
			}elseif($cfg['iconmode']==='external'||true){
				$iconlink = $cfg['icon'][$icon];
			}
		}
		//<img src="'.$cfg['icon']["down"].'" alt="Icon ">
		return '<img src="'.$iconlink.'" alt="[Icon]">';
	}
}

function filetypegroup($extension){
	global $cfg;
	
	foreach ($cfg['filetype'] as $group=>$typearray){
		if(in_array($extension,$typearray))
			return $group;
	}
	return 'unknown';
}

################################################################################
################################################################################

#
# Return a encoded url
# $url can be a whole url including http:// ,but ':','/' will not be modified
#
function encodeurl($url) {
	$raw = array('?'	,'='	,' '	,'('	,')'	,'&'	,'@'	);
	$hex = array('%3F','%3D','%20','%28','%29','%26','%40');
	return str_replace($raw,$hex,$url);
}

function fixstringlen($str,$len,$lasttag=null,$fill=null){
	if(strlen($str)>$len){
		return substr($str,0,$len-strlen($lasttag)).$lasttag;
	}elseif($fill!==null){
		return $str.str_repeat($fill,$len-strlen($str));
		//return str_pad($str,$len,$fill);
	}
	return $str;
}

function filesizestring($size){
	$roundedsize = $size;
	if($size>1024*1024) $roundedsize = round($size/1024/1024,1) . 'M';
	elseif($size>1024) $roundedsize = round($size/1024,1) . 'K';
	return $roundedsize;
}

function microtime_float($microtimeend=null,$microtimestart=null,$precision=3)
{
	if($microtimeend!==null&&$microtimestart!==null){
		$dif = $microtimeend - $microtimestart;
		$dif = sprintf("%018s",  $dif);
		$dif = substr($dif,0,10+$precision);
		$dif = substr($dif,0,10).'.'.substr($dif,10);
		$dif = ltrim($dif,'0');
		if(substr($dif,0,1)==='.') $dif = '0'.$dif;
		//echo $dif;
		return $dif;
	}else{
		$time = microtime();
		return substr($time,11).substr($time,2,9);		
	}
}

#
#	Ref : http://us2.php.net/manual/en/function.fileperms.php
#
function modestring($mode){
	if (($mode & 0xC000) == 0xC000) {
		$info = 's'; // Socket
	}elseif (($mode & 0xA000) == 0xA000) {
		$info = 'l'; // Symbolic Link
	}elseif (($mode & 0x8000) == 0x8000) {
		$info = '-'; // Regular
	}elseif (($mode & 0x6000) == 0x6000) {
		$info = 'b'; // Block special
	}elseif (($mode & 0x4000) == 0x4000) {
		$info = 'd'; // Directory
	}elseif (($mode & 0x2000) == 0x2000) {
		$info = 'c'; // Character special
	}elseif (($mode & 0x1000) == 0x1000) {
		$info = 'p'; // FIFO pipe
	}else {
		$info = 'u'; // Unknown
	}
	// Owner
	$info .= (($mode & 0x0100) ? 'r' : '-');
	$info .= (($mode & 0x0080) ? 'w' : '-');
	$info .= (($mode & 0x0040) ? (($mode & 0x0800) ? 's' : 'x' ) : (($mode & 0x0800) ? 'S' : '-'));
	// Group
	$info .= (($mode & 0x0020) ? 'r' : '-');
	$info .= (($mode & 0x0010) ? 'w' : '-');
	$info .= (($mode & 0x0008) ? (($mode & 0x0400) ? 's' : 'x' ) : (($mode & 0x0400) ? 'S' : '-'));
	// Everyone
	$info .= (($mode & 0x0004) ? 'r' : '-');
	$info .= (($mode & 0x0002) ? 'w' : '-');
	$info .= (($mode & 0x0001) ? (($mode & 0x0200) ? 't' : 'x' ) : (($mode & 0x0200) ? 'T' : '-'));
	return $info;
}

#
# Return an array of the permissions
#	For folders, 'read' would be the permissiosn to 'read'(4)
#	For folders, 'write' would be the permissiosn to 'write'(2) and execute(1)
#
function checkpermission($path=null,$mode=null,$diruid=null,$dirgid=null){
	if(iswindows()){
		return array('read'=>true,'write'=>true,'execute'=>truey);
	}else{
		if($path!==null){
			$stat 	= stat($path);
			$mode 	= $stat['mode'];
			$diruid = $stat['uid'];
			$dirgid = $stat['gid'];
		}
		$uid = posix_getuid();
		$gid = posix_getgid();
		$read = false;
		$write = false;
		
		# Owner
		if($uid===$diruid){
			if($mode&0x4000){
				if(($mode&0x0100)&&($mode & 0x0040)) 	$read = true;
				if(($mode&0x0080)&&($mode & 0x0040))	$write = true;
			}else{
				if($mode&0x0100) 											$read = true;
				if($mode&0x0080) 											$write = true;
			}
			
		# Group
		}elseif($gid===$dirgid){
			if($mode&0x4000){
				if(($mode&0x0020)&&($mode & 0x0008)) 	$read = true;
				if(($mode&0x0010)&&($mode & 0x0008)) 	$write = true;
			}else{
				if($mode&0x0020) 											$read = true;
				if($mode&0x0010) 											$write = true;
			}
			
		# Everyone
		}else{
			if($mode&0x4000){
				if(($mode&0x0004)&&($mode & 0x0001)) 	$read = true;
				if(($mode&0x0002)&&($mode & 0x0001)) 	$write = true;	
			}else{
				if($mode&0x0004) 											$read = true;
				if($mode&0x0002) 											$write = true;	
			}
		}
	}
	return array('read'=>$read,'write'=>$write);
}
function checkpermissionread($path){
	$permission = checkpermission($path);
	return $permission['read'];
}
function checkpermissionwrite($path){
	$permission = checkpermission($path);
	return $permission['write'];	
}

#
# Return true if the os is windows, flas if it is not
#
function iswindows(){
	if(strtolower(substr(PHP_OS,0,3))==='win'){
		return true;
	}
}

################################################################################
################################################################################
?>