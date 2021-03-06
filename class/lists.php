<?php
// $Id: lists.php,v 1.4 2004/08/13 12:46:08 phppp Exp $
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
class MagLists
{
    var $value;
    var $selected;
    var $path = 'uploads';
    var $size;
    var $emptyselect;
    var $type;
    var $prefix;
    var $suffix;

    /**
     * $value: 
     * Selection:
     * Path:
     * Size:
     * emptyselect:
     * $type: Filter which types of files should be returned
     * 		Html 
     * 		Images
     * 		files
     * 		dir
     */

    function MagLists( $path = "uploads", $value = null, $selected = '', $size = 1, $emptyselect = 0, $type = 0, $prefix = '', $suffix = '' )
    {
        $this->value = $value;
        $this->selection = $selected;
        $this->path = $path;
        $this->size = intval( $size );
        $this->emptyselect = ( $emptyselect ) ? 0 : 1;
        $this->type = $type;
    } 

    function &getarray( $this_array )
    {
        $ret = "<select size='" . $this->size() . "' name='$this->value()'>";
        if ( $this->emptyselect )
        {
            $ret .= "<option value='" . $this->value() . "'>----------------------</option>";
        } 
        foreach( $this_array as $content )
        {
            $opt_selected = "";

            if ( $content[0] == $this->selected() )
            {
                $opt_selected = "selected='selected'";
            } 
            $ret .= "<option value='" . $content . "' $opt_selected>" . $content . "</option>";
        } 
        $ret .= "</select>";
        return $ret;
    } 

    /**
     * Private to be called by other parts of the class
     */
    function &getDirListAsArray( $dirname )
    {
        $dirlist = array();
        if ( is_dir( $dirname ) && $handle = opendir( $dirname ) )
        {
            while ( false !== ( $file = readdir( $handle ) ) )
            {
                if ( !preg_match( "/^[.]{1,2}$/", $file ) )
                {
                    if ( strtolower( $file ) != 'cvs' && is_dir( $dirname . $file ) )
                    {
                        $dirlist[$file] = $file;
                    } 
                } 
            } 
            closedir( $handle ); 
            // asort($dirlist);
            reset( $dirlist );
        } 
        return $dirlist;
    } 

    function &getForum( $type = 1, $selected )
    {
        global $xoopsDB;
        switch ( xoops_trim( $type ) )
        {
            case 2:
                $sql = "SELECT id, name FROM " . $xoopsDB->prefix( "ipb_forums" ) . " ORDER BY id";
                break;
            case 3:
                $sql = "SELECT forum_id, forum_name FROM " . $xoopsDB->prefix( "pbb_forums" ) . " ORDER BY forum_id";
                break;
            case 1:
            case 0:
            default:
                $sql = "SELECT forum_id, forum_name FROM " . $xoopsDB->prefix( "bb_forums" ) . " ORDER BY forum_id";
                break;
        } 
        $result = $xoopsDB->query( $sql );
	
	    $noforum = ( defined( '_MAG_NO_FORUM' ) ) ? _MAG_NO_FORUM : _AM_MAG_NO_FORUM;		
	
	echo "<select size='1' name='isforumid'>";
        echo "<option value='0'>".$noforum."</option>";
        while (list($forum_id, $forum_name ) = $xoopsDB->fetchRow($result))
        {
	        $opt_selected = "";
            if ( $forum_id == $selected )
            {
                $opt_selected = "selected='selected'";
            } 
            echo "<option value='" . $forum_id . "' $opt_selected>" . $forum_name . "</option>";
        } 
        echo "</select>"; 
       	return $forum_array;
    } 

    function &getForm( $type = 1, $selected )
    {
        global $xoopsDB;
        switch ( xoops_trim( $type ) )
        {
            /*case 2:
                $sql = "SELECT form_id, form_title FROM " . $xoopsDB->prefix( "liaise_forms" ) . " ORDER BY form_id";
                break;
            case 3:
                $sql = "SELECT form_id, form_title FROM " . $xoopsDB->prefix( "liaise_forms" ) . " ORDER BY form_id";
                break;*/
            case 1:
            case 0:
            default:
                $sql = "SELECT form_id, form_title FROM " . $xoopsDB->prefix( "liaise_forms" ) . " ORDER BY form_id";
                break;
        } 
        $result = $xoopsDB->query( $sql );
	
	    $noform = ( defined( '_MAG_NO_FORM' ) ) ? _MAG_NO_FORM : _AM_MAG_NO_FORM;
	
	echo "<select size='1' name='isformid'>";
        echo "<option value='0'>".$noform."</option>";
        while (list($form_id, $form_name ) = $xoopsDB->fetchRow($result))
        {
	        $opt_selected = "";
            if ( $form_id == $selected )
            {
                $opt_selected = "selected='selected'";
            } 
            echo "<option value='" . $form_id . "' $opt_selected>" . $form_name . "</option>";
        } 
        echo "</select>"; 
       	return $form_array;
    }

    function &getStore( $type = 1, $selected )
    {
        global $xoopsDB;
        switch ( xoops_trim( $type ) )
        {
            /*case 2:
                $sql = "SELECT gid, top FROM " . $xoopsDB->prefix( "okshop_goods" ) . " ORDER BY gid";
                break;
            case 3:
                $sql = "SELECT gid, top FROM " . $xoopsDB->prefix( "okshop_goods" ) . " ORDER BY gid";
                break;*/
            case 1:
            case 0:
            default:
                $sql = "SELECT gid, top FROM " . $xoopsDB->prefix( "okshop_goods" ) . " ORDER BY gid";
                break;
        } 
        $result = $xoopsDB->query( $sql );
	
	    $nostore = ( defined( '_MAG_NO_STORE' ) ) ? _MAG_NO_STORE : _AM_MAG_NO_STORE;
	
	echo "<select size='1' name='isstoreid'>";
        echo "<option value='0'>".$nostore."</option>";
        while (list($store_id, $store_name ) = $xoopsDB->fetchRow($result))
        {
	        $opt_selected = "";
            if ( $store_id == $selected )
            {
                $opt_selected = "selected='selected'";
            } 
            echo "<option value='" . $store_id . "' $opt_selected>" . $store_name . "</option>";
        } 
        echo "</select>"; 
       	return $store_array;
    }

    function &getSign( $type = 1, $selected )
    {
        global $xoopsDB;
        switch ( xoops_trim( $type ) )
        {
            /*case 2:
                $sql = "SELECT eid, title FROM " . $xoopsDB->prefix( "eguide" ) . " ORDER BY eid";
                break;
            case 3:
                $sql = "SELECT eid, title FROM " . $xoopsDB->prefix( "eguide" ) . " ORDER BY eid";
                break;*/ 
            case 1:
            case 0:
            default:
                $sql = "SELECT eid, title FROM " . $xoopsDB->prefix( "eguide" ) . " ORDER BY eid";
                break;
        } 
        $result = $xoopsDB->query( $sql );
	
	    $nosign = ( defined( '_MAG_NO_SIGN' ) ) ? _MAG_NO_SIGN : _AM_MAG_NO_SIGN;
	
	echo "<select size='1' name='issignid'>";
        echo "<option value='0'>".$nosign."</option>";
        while (list($sign_id, $sign_name ) = $xoopsDB->fetchRow($result))
        {
	        $opt_selected = "";
            if ( $sign_id == $selected )
            {
                $opt_selected = "selected='selected'";
            }
            echo "<option value='" . $sign_id . "' $opt_selected>" . $sign_name . "</option>";
        } 
        echo "</select>"; 
       	return $sign_array;
    }

    function &getListTypeAsArray( $dirname, $type = '', $prefix = "", $noselection = 1 )
    {
        $filelist = array();
        switch ( trim( $type ) )
        {
            case "images":
                $types = "[.gif|.jpg|.png]";
                if ( $noselection )
                    $filelist[""] = _AM_MAG_DISABLEIMAGES;
                break;
            case "html":
                $types = "[.htm|.html|.xhtml|.php|.php3|.phtml|.txt]";
                if ( $noselection )
                    $filelist[""] = _AM_MAG_NOSELECT;
                break;
            default:
                $types = "";
                if ( $noselection )
                    $filelist[""] = _AM_MAG_NOSELECTFILE;
                break;
        } 

        if ( substr( $dirname, -1 ) == '/' )
        {
            $dirname = substr( $dirname, 0, -1 );
        }

        if ( is_dir( $dirname ) && $handle = opendir( $dirname ) )
        {
            while ( false !== ( $file = readdir( $handle ) ) )
            {
                if ( !preg_match( "/^[.]{1,2}$/", $file ) && preg_match( "/$types$/i", $file ) && is_file( $dirname . '/' . $file ) )
                {
                    if ( strtolower( $file ) == "blank.png" )
                        Continue;
                    $file = $prefix . $file;
                    $filelist[$file] = $file;
                } 
            } 
            closedir( $handle );
            asort( $filelist );
            reset( $filelist );
        } 
        return $filelist;
    } 

    function value()
    {
        return $this->value;
    } 

    function selected()
    {
        return $this->selected;
    } 

    function paths()
    {
        return $this->path;
    } 

    function size()
    {
        return $this->size;
    } 

    function emptyselect()
    {
        return $this->emptyselect;
    } 

    function type()
    {
        return $this->type;
    } 

    function prefix()
    {
        return $this->prefix;
    } 

    function suffix()
    {
        return $this->suffix;
    } 
} 

?>
