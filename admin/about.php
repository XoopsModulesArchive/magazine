<?php
// $Id: about.php,v 1.6 2005/02/07 01:25:23 phppp Exp $
//  ------------------------------------------------------------------------ //
//                        WF-section for XOOPS                               //
//                 Copyright (c) 2005 WF-section Team                        //
//                  <http://www.wf-projects.com/>                            //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// Author: RB                                                                //
// URL: http://singchi.no-ip.com/hack                                        //
// Project: Magazine Project                                                 //
// ------------------------------------------------------------------------- //
include( "admin_header.php" );
$myts = &MyTextSanitizer::getInstance();
// Global $xoopsModule;
xoops_cp_header();

$module_handler = &xoops_gethandler( 'module' );
$versioninfo = &$module_handler->get( $xoopsModule->getVar( 'mid' ) );

mag_admin_menu( _AM_MAG_ARTICLEMANAGEMENT );

echo "
<img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/" . $versioninfo->getInfo( 'image' ) . "' alt='' hspace='10' vspace='0' /></a>\n
<div style='margin-top: 10px; color: #33538e; margin-bottom: 4px; font-size: 18px; line-height: 18px; font-weight: bold; display: block;'>" . $versioninfo->getInfo( 'name' ) . " version " . $versioninfo->getInfo( 'version' ) . "</div>\n
<div>\n";

if ( $versioninfo->getInfo( 'author_realname' ) != '' )
    $author_name = $versioninfo->getInfo( 'author' ) . " (" . $versioninfo->getInfo( 'author_realname' ) . ")";
else
    $author_name = $versioninfo->getInfo( 'author' );
echo "<div>" . _MI_MAG_RELEASE . " " . $versioninfo->getInfo( 'releasedate' ) . "</div>";
echo "<div>" . _MI_MAG_BY . " " . $author_name . "</div>";
echo "<div>" . $versioninfo->getInfo( 'license' ) . "</div><br></>\n";

// Author Information
$sform = new XoopsThemeForm( _MI_MAG_AUTHOR_INFO, "", "" );
$sform->addElement( new XoopsFormLabel( _MI_MAG_AUTHOR_NAME, $author_name ) );
$sform->addElement( new XoopsFormLabel( _MI_MAG_AUTHOR_WEBSITE, "<a href='" . $versioninfo->getInfo( 'author_website_url' ) . "' target='blank'>" . $versioninfo->getInfo( 'author_website_name' ) . "</a>" ) );
$sform->addElement( new XoopsFormLabel( _MI_MAG_AUTHOR_EMAIL, "<a href='mailto:" . $versioninfo->getInfo( 'author_email' ) . "'>" . $versioninfo->getInfo( 'author_email' ) . "</a>" ) );
$sform->addElement( new XoopsFormLabel( _MI_MAG_AUTHOR_DEVTEAM, $versioninfo->getInfo( 'teammembers' ) ) );
$sform->display();
// Author Information
$sform = new XoopsThemeForm( _MI_MAG_MODULE_INFO, "", "" );
$sform->addElement( new XoopsFormLabel( _MI_MAG_MODULE_STATUS, $versioninfo->getInfo( 'status' ) ) );
$sform->addElement( new XoopsFormLabel( _MI_MAG_MODULE_DEMO, "<a href='" . $versioninfo->getInfo( 'demo_site_url' ) . "' target='blank'>" . $versioninfo->getInfo( 'demo_site_name' ) . "</a>" ) );
$sform->addElement( new XoopsFormLabel( _MI_MAG_MODULE_SUPPORT, "<a href='" . $versioninfo->getInfo( 'support_site_url' ) . "' target='blank'>" . $versioninfo->getInfo( 'support_site_name' ) . "</a>" ) );
$sform->addElement( new XoopsFormLabel( _MI_MAG_MODULE_BUG, "<a href='" . $versioninfo->getInfo( 'submit_bug' ) . "' target='blank'>" . "Submit a Bug" . "</a>" ) );
$sform->addElement( new XoopsFormLabel( _MI_MAG_MODULE_FEATURE, "<a href='" . $versioninfo->getInfo( 'submit_feature' ) . "' target='blank'>" . "Request a new feature" . "</a>" ) );
$sform->display();

global $myts;

$file = "../helper/bugfixlist.txt";
if ( @file_exists( $file ) )
{
    $fp = @fopen( $file, "r" );
    $bugtext = @fread( $fp, filesize( $file ) );
    @fclose( $file );
} 

$sform = new XoopsThemeForm( _MI_MAG_AUTHOR_BUGFIXES, "", "" );
ob_start();
echo "<div class='even' align='left'>" . $myts->displayTarea( $bugtext ) . "</div>";
$sform->addElement( new XoopsFormLabel( '', ob_get_contents(), 0 ) );
ob_end_clean();
$sform->display();
unset( $file );

xoops_cp_footer();

?>
