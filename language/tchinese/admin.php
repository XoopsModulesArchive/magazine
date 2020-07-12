<?php
// $Id: admin.php,v 1.8 2005/05/21 12:46:00 RB Exp $
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

// %%%%%%        Admin Module Name  Documents         %%%%%
Global $xoopsConfig;
// Action Lang defines
define("_AM_MAG_YES", "�O");
define("_AM_MAG_NO", "�_");
define("_AM_MAG_SAVE", "�x�s");
define("_AM_MAG_SAVECHANGE", "�x�s�ܧ�");
define("_AM_UPDATED", "��Ƥw������s");
define("_AM_MAG_EDIT", "�s��");
define("_AM_MAG_MODIFY", "�ܧ�");
define("_AM_MAG_DELETE", "�R��");
define("_AM_MAG_CANCEL", "�M��");
define("_AM_MAG_ACTION", "�ʧ@");
define("_AM_MAG_COPY1", "�ƻs" );
define("_AM_MAG_NOARTICLEFOUND", "�q��:�ثe�|�L�ŦX���󪺤峹" );
define("_AM_MAG_DISABLEHTML", " ���ϥ� HTML ����");
define("_AM_MAG_DISABLESMILEY", " ���ϥΪ��ϥ�");
define("_AM_MAG_DISABLEXCODE", " ���ϥ� BB CODE");
define("_AM_MAG_DISABLEIMAGES", " ����ܹϤ�");
define("_AM_MAG_DISABLEBREAK", " �۰��_���ഫ?");
define("_AM_MAG_STRIPHTML", " ���� HTML ���� (�ର�¤�r���e)");
define("_AM_MAG_CLEANHTML", " �����L�Ī� MS Word ����");
define("_AM_MAG_NORIGHTS", "ĵ�i:�z�S���������v���i�H�s�����ϰ�" );

/**
 * Database defines
 */
define( "_AD_DBERROR","��z�x�s��T���Ʈw�ɵo�{�@�ӿ��~:<br /><br />�Ц^�������~�� <a href=\"http://singchi.no-ip.com/hack/\" target=\"_blank\">Magazine �䴩����</a><br /><br />�бN���~�y�z�ƻs�i�D�ڭ�,�ڭ̷|�ɧִ��X�ѨM�覡.");
define( '_AM_MAG_WFPATHCONFIG', '���|�]�w�w��s' );
define( '_AM_MAG_WFTEMPLATESCONFIG', '�˪O�w��s' );
define( '_AM_MAG_DBUPDATED', '��Ʈw�w��s����!' );
/**
 * Lang defines for breadcrumb system
 */
define( '_AM_MAG_BREADC1', '����]�w' );
define( '_AM_MAG_BREADC2', '�峹�C��' );
define( '_AM_MAG_BREADC3', '�϶��޲z' );
define( '_AM_MAG_BREADC4', '���|�]�w' );
define( '_AM_MAG_BREADC5', '�˪��޲z' );
define( '_AM_MAG_BREADC6', '�Ҳխ���' );
define( '_AM_MAG_BREADC7', '���U' );
define( '_AM_MAG_BREADC8', '����' );
define( '_AM_MAG_BREADC9', '���A�����A' );
/**
 * Lang defines for menu system
 */
define( '_AM_MAG_ADMENU1', '�����޲z' );
define( '_AM_MAG_ADMENU2', '�����޲z' );
define( '_AM_MAG_ADMENU3', '���g�峹' );
define( '_AM_MAG_ADMENU4', '�ƧǺ޲z' );
define( '_AM_MAG_ADMENU5', '�峹�٭�' );
define( '_AM_MAG_ADMENU6', '�J�I�峹' );
define( '_AM_MAG_ADMENU7', '�����峹' );
define( '_AM_MAG_ADMENU8', '�����s��' );
define( '_AM_MAG_ADMENU9', '����²��' );
define( '_AM_MAG_ADMENUA', '�峹����' );
define( '_AM_MAG_ADMENUB', '�벼��T' );
define( '_AM_MAG_ADMENUC', '���s�ɮ�' );
define( '_AM_MAG_ADMENUD', '�ɮ�����' );
define( '_AM_MAG_ADMENUE', '�峹����' );
define( '_AM_MAG_ADMENUF', '�Ϥ��޲z' );
/**
 * Summary information
 */
define( '_AM_MAG_SUMMARYINFO1', '�K�n��T' );
define( '_AM_MAG_SUMMARYINFO2', '���O' );
define( '_AM_MAG_SUMMARYINFO3', '�o��' );
define( '_AM_MAG_SUMMARYINFO4', '�ݼf' );
define( '_AM_MAG_SUMMARYINFO5', '�ܧ�' );
define( '_AM_MAG_SUMMARYINFO6', '�s�褤' );
define( '_AM_MAG_SUMMARYINFO7', '���s�ɮ�' );
/**
 * allarticles document management
 */
define("_AM_MAG_ARTICLEMANAGEMENT", "�峹�޲z" );
define("_AM_MAG_DOC_SELECTION", "��ܤ峹" );
define("_AM_MAG_LIST", "<b>�C��</b> " );
define("_AM_MAG_LISTINCAT", " <b>��ؿ�</b> " );
/**
 * List article types
 */
define("_AM_MAG_ALLARTICLES", "�Ҧ��峹" );
define("_AM_MAG_PUBLARTICLES", "�w�o���峹" );
define("_AM_MAG_SUBLARTICLES", "���ݮ֭�峹" );
define("_AM_MAG_ONLINARTICLES", "�b�u�峹" );
define("_AM_MAG_OFFLIARTICLES", "���u�峹" );
define("_AM_MAG_EXPIREDARTICLES", "�w�L���峹" );
define("_AM_MAG_AUTOEXPIREARTICLES", "�۰ʹL���峹" );
define("_AM_MAG_AUTOARTICLES", "�۰ʵo���峹" );
define("_AM_MAG_NOSHOWARTICLES", "�¤�r�Ҧ��峹" );
define("_AM_MAG_HTMLFILES", "HTML �ɮפ峹" );
/**
 * menu lang defines
 */
define("_AM_MAG_ALLTXTHEAD", "�Ҧ��峹�Ҧ�" );
define("_AM_MAG_ALLTXT", "<div>�b <b>�Ҧ��峹</b> �Ҧ����z�i�H�s��,�R���έ��s�R�W����峹. �b�o�Ҧ��U�|�N��Ʈw�����Ҧ��峹�������.");
define("_AM_MAG_PUBLISHEDTXTHEAD", "�w�o���峹" );
define("_AM_MAG_PUBLISHEDTXT", "<div>�b <b>�w�o���峹</b> �Ҧ����N��ܩҦ��w�g�q�L�f�֪��峹 (�g�L�޲z���֭�)." ); //added
define("_AM_MAG_SUBMITTEDTXTHEAD", "���ݮ֭�峹" );
define("_AM_MAG_SUBMITTEDTXT", "<div>�b <b>���ݮ֭�峹</b> �Ҧ����N��ܩҦ����ݺ޲z���f�֪��峹.<br /><br />�Y�z�Q�֭�峹, �u�n���U <b>�s��</b> �s��, �M��N <b>�֭㥻�峹?</b> �Ŀ�إ��ī��x�s�ܧ�. �o�˴N�i�H�N�峹�o���F." ); //added
define("_AM_MAG_ONLINETXTHEAD", "�b�u�峹" );
define("_AM_MAG_ONLINETXT", "<div>�b <b>�b�u�峹</b> �Ҧ����N��ܩҦ����A�� <b>�b�u</b> ���峹.<br /><br />�p�G�z�Q�ܧ�峹���A�Ы��U <b>�s��</b> �s���M��Ŀ� <b>�]�w�峹���A�����u�峹</b>." ); //added
define("_AM_MAG_OFFLINETXTHEAD", "���u�峹" );
define("_AM_MAG_OFFLINETXT", "<div>�b <b>���u�峹</b> �Ҧ����N��ܩҦ����A�� <b>���u</b> ���峹.<br /><br />�p�G�z�Q�ܧ�峹���A�Ы��U <b>�s��</b> �s���M������Ŀ� <b>�]�w�峹���A�����u�峹</b>." ); //added
define("_AM_MAG_EXPIREDTXTHEAD", "�w�L���峹" );
define("_AM_MAG_EXPIREDTXT", "<div>�b <b>�w�L���峹</b> �Ҧ����N��ܩҦ��w�g�Q�޲z���]�w���L�����峹 .<br /><br />�p�G�z�Q�ܧ�L���ɶ��Ы��U <b>�s��</b> �s���M��]�w <b>�峹�L�����</b>." ); //added
define("_AM_MAG_AUTOEXPIRETXTHEAD", "�۰ʹL���峹" );
define("_AM_MAG_AUTOEXPIRETXT", "<div>�b <b>�۰ʹL���峹</b> �Ҧ����N��ܩҦ����g�]�w���L������äw�g������峹.<br /><br />�p�G�z�Q���s�]�w�ɶ��Ы��U <b>�s��</b> �s���M��]�w <b>�峹�L�����</b>." ); //added
define("_AM_MAG_AUTOTXTHEAD", "�۰ʵo���峹" );
define("_AM_MAG_AUTOTXT", "<div>�b <b>�۰ʵo���峹</b> �Ҧ����N��ܩҦ����g�w�w�o�G����æ۰ʵo�����峹.<br /><br />�p�G�z�Q���s�]�w�o�G����Ы��U <b>�s��</b> �s���M��]�w <b>�峹�o�����</b>." ); //added
define("_AM_MAG_NOSHOWTXTHEAD", "�¤�r�Ҧ��峹" );
define("_AM_MAG_NOSHOWTXT", "<div>�b <b>�¤�r�Ҧ��峹</b> " ); //added
define("_AM_MAG_HTMLFILESTXTHEAD", "HTML �ɮפ峹" );
define("_AM_MAG_HTMLFILESTXT", "<div>�b <b>HTML �ɮפ峹</b> �Ҧ����N��ܩҦ��ϥγs�� HTML �ɮרӧe�{���峹." ); //added
/**
 * Article listing defines
 */
define("_AM_MAG_STORYID", "ID" );
define("_AM_MAG_TITLE", "���D" );
define("_AM_MAG_POSTER", "�@��" );
define("_AM_MAG_VERSION", "����" );
define("_AM_MAG_SECTION", "���O" );
define("_AM_MAG_STATUS", "���A" );
define("_AM_MAG_WEIGHT", "�Ƨ�" );

define("_AM_MAG_SUBMITTED2", "�峹���g���" );
define("_AM_MAG_PUBLISHED", "�峹�o����" );
define("_AM_MAG_PUBLISHEDON", "�峹�o����" );
define("_AM_MAG_SUBMITTED", "�w�o�����峹" );
define("_AM_MAG_NOTPUBLISHED", "<font color='tomato'>�|���o�����峹</font>" );
define("_AM_MAG_EXPARTS", "�w�L���峹" );
define("_AM_MAG_EXPIRED", "�۰ʹL�����" );
define("_AM_MAG_CREATED", "�峹�إߤ��" );
/**
 * Blocks Management
 */
define("_AM_MAG_BLOCKSHEADING", "�϶��޲z" );
define("_AM_MAG_BLOCKSINFO", "�϶���T" );
define("_AM_MAG_BLOCKSTEXT", "�z�i�ѡu�t�κ޲z�v���u�϶��޲z�v�ӽվ�Ҧ��϶��]�w.<br />�U��D�n�O���� Magazine ���϶�. �z�]�i�H�b�o�̰��϶��]�w�վ�." );
/**
 * Path Managment
 */
define("_AM_MAG_PATHCONFIGURATION", "���|�պA" );
define("_AM_MAG_PATHCONFIG", "���w�P�v���޲z" );
define("_AM_MAG_FILEPATHWARNING", "<li>�]�w Magazine �����ؿ����|.
	<li>���p���|���~�N�X�{ĵ�i����.
	<li>���|���O���ťձN�ϥθ����w�]���|." );
define("_AM_MAG_FILEPATH", "���|�պA�t�m" );
define("_AM_MAG_FILEUSEPATH", "�ܧ�ϥΪ̸��|" );
define("_AM_MAG_PATHEXIST", "���|�s�b!" );
define("_AM_MAG_PATHNOTEXIST", "���|�å��s�b." );
define("_AM_MAG_THUMBPATHEXIST", "���|�s�b!" );
define("_AM_MAG_THUMBPATHNOTEXIST", "���|�å��s�b." );
define("_AM_MAG_PATHCHECK", "<b>���|�ˬd:</b> " );
define("_AM_MAG_PERMISSIONS", "<b>���|�v���ˬd:</b>" );
define("_AM_MAG_THUMBPATHCHECK", "<b>�Y�ϥؿ��ˬd:</b> " );
define("_AM_MAG_THUMBPERMISSIONS", "<b>�Y�ϥؿ��v���ˬd:</b>" );
define("_AM_MAG_RESETDEFUALTS", " ���m�Ҧ����|�^�w�]��" );
define("_AM_MAG_REVERTED", "�٭���|�պA�^�w�]��" );
/**
 * Path Management form defines
 */
define("_AM_MAG_CMODERROR", "�v�����~:�бN���|�v���]�w�� 0777." );
define("_AM_MAG_CMODERRORNOTCORRECTED", " �ثe���v���ƭȨä����T." );
define("_AM_MAG_AGRAPHICPATH", "�峹�Ϥ����|:<div style='padding-top:8px;'>�峹�Ϥ��s��ؿ�.</div>");
define("_AM_MAG_SGRAPHICPATH", "���O�Ϥ����|:<div style='padding-top:8px;'>���O�Ϥ��s��ؿ�.</div>");
define("_AM_MAG_HTMLCPATH", "HTML �ɮ׸��|:<div style='padding-top:8px;'>HTML �ɮצs��ؿ�.</div>");
define("_AM_MAG_LOGOPATH", "Logo �Ϥ����|:<div style='padding-top:8px;'>logo �Ϥ��s��ؿ�.</div>");
define("_AM_MAG_FILEUPLOADSPATH", "���[�ɮפW�Ǹ��|:<div style='padding-top:8px;'>���[�ɮפW�Ǧs��ؿ�.</div>");
define("_AM_MAG_FILEUPLOADSTEMPPATH", "���[�ɮ� temp �W�Ǹ��|:<div style='padding-top:8px;'>���D���ݥؿ��i�H�R��.</div>");
define("_AM_MAG_AVATARPATH", "�j�Y���Y�ϸ��|:<div style='padding-top:8px;'>�j�Y���Y�Ϧs��ؿ�. <br />���p�ؿ����s�b�бz�s�W�o�ӥؿ�.</div> " );
/**
 * Template management
 */
define( '_AM_MAG_MODIFYTEMPLATES', '�˪��޲z' );
define( '_AM_MAG_USINGTEMPLATES', '�ϥμ˪��޲z' );
define( '_AM_MAG_HOWTOUSETEMP', "<li>�z�i�H��� Magazine ���������������˪O��.<br /><li><b>ĵ�i:</b>���p�z���T�w���Ӧp��t�m�˪O, ���ڭ̱j�P����ĳ�z���}�P�O�d���ϰ쪺�w�]��!");
define( '_AM_MAG_ADDINGATEMPLATE', "<b>�s�W�˪O�B�J</b>");
define( '_AM_MAG_HOWTOUSETEMP2', "<li>�b�s�W�˪O��, �Х����ɮ� Magazine �˪���Ƥ��ƻs.<br /><li>�M��z���� <a href='../../../modules/system/admin.php?fct=modulesadmin&op=update&module=magazine'>��s Magazine �Ҳ�</a> �N�ɮ׼g�J��Ʈw.<br /><li>�p�G���ѤF�z�|�o��ťյe��.");
define( '_AM_MAG_DISPLAYXOOPSTEMPADMIN', 'Xoops �˪O�]�w�޲z:' );
define( '_AM_MAG_ISBLOCKS', '�϶��˪O' );
define( '_AM_MAG_TEMPLDOWNLOADS', '�峹����˪O' );
define( '_AM_MAG_TEMPLPOLL', '�峹�벼�˪O' );
define( '_AM_MAG_TEMPLARCHIVES', '����峹�˪O' );
define( '_AM_MAG_TEMPLARTINDEX', '�����峹�˪O' );
define( '_AM_MAG_TEMPLSECINDEX', '�Ҧ����O�����˪O' );
define( '_AM_MAG_TEMPLART', '�峹����:�]�t�峹������T (�w�])' );
define( '_AM_MAG_TEMPLART_INFO', '�峹������T' );
define( '_AM_MAG_TEMPLPLAINART', '�峹����:���t�峹������T (�¤�r�Ҧ�)' );
define( '_AM_MAG_TEMPLTOPTEN', 'Top 10 �����˪�' );
define( '_AM_MAG_ARTMENUBLOCK', '�峹���϶�' );
define( '_AM_MAG_BIGSTORYBLOCK', '���j�峹�϶�' );
define( '_AM_MAG_MAINMENUBLOCK', '�D���϶�' );
define( '_AM_MAG_NEWARTBLOCK', '�s�i�峹�϶�' );
define( '_AM_MAG_NEWDOWNBLOCK', '�峹����϶�' );
define( '_AM_MAG_TOPARTBLOCK', '�����峹�϶�' );
define( '_AM_MAG_TOPICSBLOCK', '�峹�����϶�' );
define( '_AM_MAG_SPOTLIGHTBLOCK', '�J�I�峹�϶�' );
define( '_AM_MAG_NEWDOWNLOADSBLOCK', '�s�i����϶�' );
define( '_AM_MAG_AUTHORBLOCK', '�@�̸�T�϶�' );
define( '_AM_MAG_VIEW', '�[��' );
/**
 * Indexpage management
 */
define( '_AM_MAG_INDEXPAGE', '�����޲z' );
define( '_AM_MAG_INDEXPAGEINFO', '�����޲z��T' );
define( '_AM_MAG_INDEXPAGEINFOTXT', '<li>�u�����޲z�v �\�ह�\�z�]�p�U������ Magazine ������.<li>�z�i�H���P������ logo �Ϥ�,�����P�����y�z��r���z�ҷQ�n��.' );
define( '_AM_MAG_INDEXPAGELISTING', '�����޲z�C��' );

define("_AM_MAG_PAGENAME2", "�����W��" );
define("_AM_MAG_MODIFYPAGE", "�ܧ�s����" );
define("_AM_MAG_ADDPAGE", "�إ߷s����" );
define("_AM_MAG_INDEXHEADING", "�������D:" );
define("_AM_MAG_INDEXFOOTING", "�������D" );
define("_AM_MAG_INDEXPAGEEDIT", "�s�譶��" );
define("_AM_MAG_SECTIONIMAGE", "�����Ϥ�:" );
define("_AM_MAG_SECTIONHEAD", "�����y�z:" );
define("_AM_MAG_SECTIONFOOT", "�����y�z:" );
define("_AM_MAG_ALIGNMENT", "<b>����覡:</b>" );
define("_AM_MAG_ISDEFAULT", "�w�]��" );
define("_AM_MAG_PAGENAME", "�����W��:" );

/**
 * include for Magazine icons
 */
include_once 'icons_lang.php';
/**
 * include for Magazine uploader
 */
include_once 'icons_upload.php';
/**
 * not done from here
 */
define("_AM_MAG_MINDEX_ACTION", "�ʧ@" );
define("_AM_MAG_MINDEX_PAGE", "<b>��:<b> " );
// Database Lang defines
define("_AM_MAG_RUSUREDEL", "�z�T�w�n�R���o�g�峹��?" );
// Section Lang Defines
define("_AM_MAG_CATEGORY", "���O�W��" );
define("_AM_MAG_CATEGORYNAME", "���O���D:" );
define("_AM_MAG_SECTIONPAGEDETAILS", "���O�y�z" );
define("_AM_MAG_TEXTOPTIONS", "��r�榡�ﶵ:" );
define("_AM_MAG_GROUPPROMPT", "���O�s���v��:<div style='padding-top:8px;'>��ܥi�H�s�������O���|���s��.</div>");
define("_AM_MAG_IN", "���ݥD���O:<div style='padding-top:8px;'>��ܩ��ݥD���O�N���������O���l���O.</div>");
define("_AM_MAG_MOVETO", "�h�����O:" );
define("_AM_MAG_CATEGORYWEIGHT", "���O�Ƨ�:<div style='padding-top:8px;'>���O�峹��ܱƧ�:0 �����u��</div>");
define("_AM_MAG_CATEGORYDESC", "���O�y�z:<div style='padding-top:8px;'>�i�ϥ� HTML ���ҩ� XOOPS CODE,ENTER �|�۰��_��</div>");
define("_AM_MAG_ADDMCATEGORY", "�s�W���O" );
define("_AM_MAG_CATEGORYTAKEMETO", "���o�̷s�W�@�����O.");
define("_AM_MAG_NOCATEGORY", "���~ - �S���s�W�������O.");
define("_AM_MAG_MODIFYCATEGORY", "�ܧ����O");
define("_AM_MAG_MOVECATEGORY", "�h�����O���ݤ峹");
define("_AM_MAG_MOVEDEL", "�h���峹");
define("_AM_MAG_EDITSECTION2", "�������O:");
define("_AM_MAG_MOVE", "�h��");
define("_AM_MAG_MOVEARTICLES", "�h���峹�����O");
define('_AM_MAG_DUPLICATECATEGORY', '�ƻs���O');
define('_AM_MAG_COPY', '�ƻs���O:');
define('_AM_MAG_TO', '��:');
define('_AM_MAG_NEWCATEGORYNAME', '�s���O�W��:');
define('_AM_MAG_DUPLICATE', '�ƻs');
define('_AM_MAG_DUPLICATEWSUBS', '�ƻs�ɥ]�t�l���O');
define("_AM_MAG_SECTIONCOPYARTICLES", "�ƻs�ɥ]�t���O�峹?");
define("_AM_MAG_ADDSECTIONTOMENU", "�s�W���O�ܥD���϶�?");
define("_AM_MAG_SECTIONTEMPLATE", "������O�˪O:");
define("_AM_MAG_SHOWCATEGORYIMG", "<b>������O�Ϥ�:&nbsp;</b>");
define("_AM_MAG_SECTIONIMAGEALIGN", "<b>�Ϥ�����覡:&nbsp;</b>");
define("_AM_MAG_SECTIONIMAGEOPTION", "���O�Ϥ��ﶵ:");
define("_AM_MAG_SECTIONSTATUS", "���O���A:<div style='padding-top:8px;'>�]�w���O�O�_��ܩ�Ҳխ���. ���p�]�w�����u, �����O�N�۰�����</div>");
define("_AM_MAG_CATEGORYHEADTITLE", "���O�������D:");
define("_AM_MAG_CATEGORYHEAD", "���O�����y�z:<div style='padding-top:8px;'>�d�űN�H�D���O�����y�z���N.</div>");
define("_AM_MAG_CATEGORYFOOTTITLE", "���O�������D:");
define("_AM_MAG_CATEGORYFOOT", "���O�����y�z:<div style='padding-top:8px;'>�d�űN�H�D���O�����y�z���N.</div>");
define("_AM_MAG_GROUPCREATEPROMPT", "���g�峹�v��:<div style='padding-top:8px;'>��ܥi�H�b�����O�إߤ峹���|���s��.</div>" );
// Document Lang defines
define("_AM_MAG_ADDNEWAUTH", " ��ܷs�@��" );
define("_AM_MAG_EDITARTICLE", "�峹�޲z��T" );
define("_AM_MAG_EDITARTICLETEXT", "<li>�b�o�̱z�i�H���g / �s�� / �ƻs�峹" );
define("_AM_MAG_WAYSYWTDTTAL", "ĵ�i:�z�T�w�n�R���o�����O�Ψ�H�U�Ҧ��峹��?" );
define("_AM_MAG_FILEDEL", "ĵ�i:�z�T�w�n�R���o�������?" );
define("_AM_MAG_UPLOADED", "�W�Ǧ��\!" );
define("_AM_MAG_SELECTITEM", "���");
define("_AM_MAG_NOSELECT", "�����");
define("_AM_MAG_NOSELECTFILE", "������ɮ�");
define("_AM_MAG_SPOTLIGHT", "�b�����O���аO�����˨Χ@?");
define("_AM_MAG_SPOTLIGHTMAIN", "�b�����аO�����˨Χ@?");
define("_AM_MAG_SPOTLIGHTMAIN_DESC", "�Y�аO���٧U�s�i���]�w�N�L��");
define("_AM_MAG_SPOTLIGHTSPONSER", "�b�������аO���٧U�s�i?");
define("_AM_MAG_SPOTLIGHTSPONSER_DESC", "���\��u����w�@�g�峹");
define("_AM_MAG_MENU", "��L�]�w");
define("_AM_MAG_EDITMAINTEXT", "3. �峹���e:" );
define("_AM_MAG_DOC_RESTORE", "�٭�峹��W�@�Ӫ���" );
/**
 * all article information text
 */
define("_AM_MAG_APPROVE", "�֭�");
define("_AM_MAG_BROKENDOWNLOADS", "�����ɮ�");
define("_AM_MAG_BROKENDOWNLOADSTEXT", "�����ɮ׸�T");
define("_AM_MAG_NOBROKEN", "�|�L���X���p�ɮ׳��i" );
define('_AM_MAG_BROKENTEXT', '<li>���� (�����o�Ӧ^���çR���o�� <b>���p�ɮ׳��i.</b>)
<li>�s�� (�s����ܦ����i���ɮ׸��.)
<li>�R�� (�R�� <b>�����i���ɮ׸��</b> �P <b>���p�ɮ׳��i</b>)' );
define("_AM_MAG_BROKENFILEIGNORED", "�o�����i�w�g�Q�z����" );
define("_AM_MAG_BROKENFILEDELETED", "�o���ɮפw�g�Q�z�R��" );
define("_AM_MAG_REPORTER", "�^����" );
define("_AM_MAG_FILETITLE", "�ɮצW�� " );
define("_AM_MAG_ARTICLETITLE", "�峹���D ");
define("_AM_MAG_ARTICLEMANAGE", "�峹�޲z" );
define("_AM_MAG_CANNOTHAVECATTHERE", "���~:���O���o�ܧ󬰨���ݤl���O!" );
define("_AM_MAG_SECTIONMANAGE", "���O�޲z" );
define("_AM_MAG_FILEID", "�ɮ�" );
define("_AM_MAG_FILEICON", "�ϥ�" );
define("_AM_MAG_REALFILENAME", "�u��W��");
define("_AM_MAG_FILEMIMETYPE", "�ɮ�����");
define("_AM_MAG_FILESIZE", "�ɮפj�p");
define( '_AM_MAG_FILESTATS', '�����ɮת��A' );
define('_AM_MAG_FILESTAT', '�峹�ɮת��A:');
define('_AM_MAG_CATREORDERTEXT', '<li>�z�i�H�b���ܧ�ثe�Ҧ������O�P�峹�Ƨ�.<li>�Ҧ������O�P�峹���ǳ��O���ӱƧǭȱƦC.<li>�Y�Q���s�Ƨ����O�U���峹,�u�n�I�����O�W�ٴN����ܸӤ����峹�C��.');
define('_AM_MAG_ATTACHEDFILE', '�ɮ׸�T');
define('_AM_MAG_TDISPLAYSATTACHEDFILES', '<li>�Ҧ��ɮױN�̷Ө� ID �Ƨ�.<br /><li>�z�i�H�b���s��ΧR���ɮ�.');
define('_AM_MAG_VOTEDATA', '�벼������T');
define('_AM_MAG_VOTEDATATEXT', '<li>�벼��ƪ��N�̷� RID �Ƨ�.');
define('_AM_MAG_ATTACHEDFILEM', '����޲z');
define('_AM_MAG_CAREORDER', '�ƧǺ޲z');
define('_AM_MAG_CAREORDER2', '���O�P�峹�Ƨ�');
define("_AM_MAG_EDITHTMLFILE", "2. ��� HTML �峹:<div style='padding-top:8px;'>���峹�N�H���媺�覡�e�{�b�ӭ���.</div>");
define("_AM_MAG_DOCTITLE"," �ϥ� HTML �ɮצW�٧@���峹���D");
define("_AM_MAG_DOHTMLDB"," �N HTML �ɮפ��e�פJ��Ʈw");
define("_AM_MAG_EDITWORDBROWSE", "��� Word �峹");
define('_AM_MAG_EDITGROUPPROMPT', "�峹�\���v��:<div style='padding-top:8px;'>��ܯ���\�����峹���|���s��.</div>");
define("_AM_MAG_EDITSECTION", "�������O:");
define("_AM_MAG_EDITWEIGHT", "�峹�Ƨ�:0 �����u��,");
define("_AM_MAG_EDITCAUTH", "�峹�@��:");
define("_AM_MAG_EDITCAUTH2", "�峹�@��:<div style='padding-top:8px;font-weight:normal; color:red;'><br />ĵ�i:<br />
���p�z�Q�n�ܧ�o�g�峹�����󤺮e�Х��]�w���ϥΧ@�̤U�Կ��! <br />(�@�̤U�Կ�椤�Y���W�L 300 ��@�̱N�|�X�{���~)</div>" );
define("_AM_MAG_EDITLINKURL", "1. �s���峹:<div style='padding-top:8px;'>��J�n�@���峹���e�����}.</div>" );
define("_AM_MAG_EDITLINKURLADD", "URL ��}:<br />");
define("_AM_MAG_EDITLINKURLNAME", "URL �W��:<br />");
define("_AM_MAG_EDITARTICLETITLE", "�峹���D:" );
define("_AM_MAG_PUBLISHDATE","�峹�o�����:");
define("_AM_MAG_EXPIREDATESET", " �L������]�w:");
define("_AM_MAG_EXPIREDATE","�峹�L�����:");
define("_AM_MAG_CLEARPUBLISHDATE","<br /><br />�����o�����:");
define("_AM_MAG_CLEAREXPIREDATE","<br /><br />�����L�����:");
define("_AM_MAG_PUBLISHDATESET"," �o������]�w:");
define("_AM_MAG_SETDATETIMEPUBLISH"," �]�w�o���� �ɶ�/���");
define("_AM_MAG_SETDATETIMEEXPIRE"," �]�w�L���� �ɶ�/���");
define("_AM_MAG_SETPUBLISHDATE","<b>�]�w�o�����:</b>");
define("_AM_MAG_SETEXPIREDATE","<b>�]�w�L�����:</b>");
define("_AM_MAG_EXPIREWARNING","<br />ĵ�i:�L��������ভ��o�����! ");
define("_AM_MAG_EDITSUMMARY", "�峹�K�n:<div style='padding-top:8px;'>�K�n�u���\�¤�r�榡.<br />�۰ʺK�n�i�H�^���峹���e�@���K�n.</div>
<div style='padding-top: 8px;'>��ܨ�L�����s����峹�C��.</div>
" );
define('_AM_MAG_EDITAUTOSUMMARY', ' �ϥΦ۰ʺK�n' );
define('_AM_MAG_EDITREMOVEIMAGES', ' �Ѧ۰ʺK�n�������Ϥ�');
define('_AM_MAG_EDITSUMMARYAMOUNTW', '�۰ʺK�n����:(�r��)');
define('_AM_MAG_EDITSUMMARYAMOUNTC', '�۰ʺK�n����:(�r����)');
define("_AM_MAG_EDITMOVETOTOP", " ���ܤ峹�C����");
define("_AM_MAG_EDITAPPROVE", "�֭㥻�峹?");
define("_AM_MAG_EDITALLOWCOMENTS", " ���\���ץ���");
define("_AM_MAG_EDITJUSTHTML", " ����ܥ���峹������T");
define("_AM_MAG_EDITNOSHOART", " ����ܤ峹�����峹�C��" );
define("_AM_MAG_EDITOFFLINE", " �]�w�峹���A�����u�峹" );
define("_AM_MAG_EDITMAINMENU", " �s�W�峹�s���ܥD���϶�" );
define("_AM_MAG_CREATEDBY", "��@��:" );
define("_AM_MAG_LASTEDITBY", "�̫�s���: ");
define("_AM_MAG_CREATEDON", "�إߩ�: ");
define("_AM_MAG_EDITEDON", "�s���: ");
define("_AM_MAG_ADDAFILETOTHISDOWNLOAD", " ���[�ɮ� ");

define("_AM_MAG_EDITDISCUSSINFORUM", "�[�J�Q�װϳs��?");
define("_AM_MAG_EDITDISCUSSINFORM", "�[�J���s��?");
define("_AM_MAG_EDITDISCUSSINSTORE", "�[�J�ӫ~�s��?");
define("_AM_MAG_EDITDISCUSSINSIGN", "�[�J���ʳs��?");
define("_AM_MAG_EDITDISBLOCKS", "��ܬO�_�b��������ܰ϶���m?");
define("_AM_MAG_EDITDISSUMMARYBREAKS", "�K�n���O�_�ϥ��_���ഫ?" );

define("_AM_MAG_USECATEGORYACCESS", " �~�Ӥ峹�������OŪ���v��?" );
define('_AM_MAG_REORDERID', 'ID' );
define('_AM_MAG_REORDERPID', 'PID' );
define('_AM_MAG_REORDERTITLE', '���D');
define('_AM_MAG_REORDERDESCRIPT', '�y�z');
define('_AM_MAG_REORDERWEIGHT', '�Ƨ�');
define('_AM_MAG_REORDERSUMMARY', '�K�n');
define("_AM_MAG_EXTRADOC_TEXT", "<div style='padding-top:8px;'><b>��������</b>:�峹�p�G�n����,�Цb�����B�[�J <b>[pagebreak]</b>.</div>
<div style='padding-top:8px;'><b>�����ؿ�</b>:�ϥ� <b>[title]</b>���D��r<b>[/title]</b> �i�H�إߤ峹�����ؿ�.</div>
<div style='padding-top:8px;'><b>�[�K��r</b>:�ϥ� <b>[ssl]</b>��r���e<b>[/ssl]</b> �i�N�峹���e�[�J���X (�ݷf�t css �]�w).</div>
" );
/**
 * Main Configuration
 */
define("_AM_MAG_SECTIONSETTINGS", "���O�޲z��T" );
define("_AM_MAG_SECTIONSETTINGSTEXT", "<li>�b�o�̱z�i�H���P���إ�, �ק�P�R���z�Ҧ����峹����..");
define("_AM_MAG_MODIFICATION", "�ܧ�ӽ�");
define("_AM_MAG_MODIFICATIONINFO", "�ܧ�ӽи�T");
define("_AM_MAG_MODIFICATIONTEXT", "<li>�b�o�Ӱϰ�A�i�H�s���Ҧ��ӽ��ܧ���|���q�L�f�֪��峹.<br /><li>�z�i�H�b���\���B�ܧ�ή֭�o�Ǥ峹." );
/**
 * Index Page management
 */

/**
 * Copyright and Support.  Please do not remove this line as this is part of the only copyright agreement for using Magazine
 */
define('_AM_MAG_RETCATREORDER', '��^���O���s�Ƨ�');
define('_AM_MAG_ARTREORDER', '�峹�w���s�Ƨ�!');
define('_AM_MAG_CATREORDER', '��ܪ����O�w���s�Ƨ�!');
define('_AM_MAG_NOFILESFOUND', '�|���o�{�����ɮ�');
define('_AM_MAG_TOTALATTFILES', '�ɮ��`��:');
define('_AM_MAG_APPROVED', '�w�f��');
define('_AM_MAG_ERROR_APPROVED', '�֭�ɵo�Ϳ��~');
// votedata
define("_AM_MAG_USER", "�W��");
define("_AM_MAG_IP", "IP ��}");
define("_AM_MAG_USERAVG", "�����o��");
define("_AM_MAG_TOTALRATE", "�`����");
define("_AM_MAG_NOREGVOTES", "�|�L����벼����");
define("_AM_MAG_DATE", "���");
define("_AM_MAG_ARTICLE", "�峹�W��");
define("_AM_MAG_RATING", "�벼");
define("_AM_MAG_VOTEDELETED", "�벼�w�R��");
// Modify Document
define("_MD_USERMODREQ", "�|���峹�ק�ӽ�");
define("_AM_MAG_MOVETOART", "���ܤ峹:(�d�űN��������)");
// Modified Documents
define("_AM_MAG_MODIFIED", "�ܧ�");
define("_AM_MAG_ORIGINAL", "��l�峹");
define("_AM_MAG_AUTHOR", "�@��:");
define("_AM_MAG_MAINTEXT", "�D��:");
define("_AM_MAG_SUBTITLE", "�Ƽ��D:" );
define("_AM_MAG_SUMMARY", "�K�n:" );
define("_AM_MAG_URL", "URL:" );
define("_AM_MAG_URLNAME", "URL �W��:" );
define("_AM_MAG_TITLE1", "���D:" );
define("_AM_MAG_PUBLISHEDDATE", "�w�o��:");
define("_AM_MAG_SUMITDATE", "�ܧ���:");
define("_AM_MAG_PROPOSED", "���ˤ峹");
define("_AM_MAG_POST", "�x�s");
define("_AM_MAG_POSTNEWARTICLE", "�s��ק�峹");
define("_AM_MAG_WAYSYWTDTTAL2", "�R���ק�峹?");
define("_AM_MAG_MODREQDELETED", "�ק�峹�w�R��");
// Document Stats
define("_AM_MAG_ARTICLESTATS", "�峹���A");
define("_AM_MAG_ARTICLESTATSFOR", "�峹���A:");
define("_AM_MAG_ISLEFT", "��" );
define("_AM_MAG_ISCENTER", "��" );
define("_AM_MAG_ISRIGHT", "�k" );
define("_AM_MAG_CREATEARTICLE", "�إ߷s�峹");
define("_AM_MAG_MODIFYARTICLE", "�ܧ�峹:");
define("_AM_MAG_NODETAILSRECORDED", "�S���Բӻ����O��");
//define("_AM_MAG_ISADMINNOTICE", "�޲z�q��:�z�ݰ��o�ǭץ�");
define("_AM_MAG_ISSORRYMESSAGE2", " ���b�s��o�g�峹�峹,�s��_�l�ɶ�:");
define("_AM_MAG_STATARTICLEID", "�峹�s��:");
define("_AM_MAG_STATTITLE", "���D:");
define("_AM_MAG_STATWEIGHT", "�Ƨ�:");
define("_AM_MAG_STATSECTION", "�ҭz���O:");
define("_AM_MAG_STATAUTHOR", "��l�@��:");
define("_AM_MAG_STATCREATED", "�إߤ��:");
define("_AM_MAG_STATPUBLISHED", "�o�����:");
define("_AM_MAG_STATEXPIRED", "�L�����");
define("_AM_MAG_STATLASTEDITED", "�̫�s����:");
define("_AM_MAG_STATLASTEDITEDBY", "�̫�s���:");
define("_AM_MAG_STATTIMESEDITEDBYAUTHOR", "��@�̽s��L������:");
define("_AM_MAG_STATTIMESEDITEDBYLASTEDITOR", "�̫�@��s��̪��s�覸��:");
define("_AM_MAG_STATTIMESEDITEDTOTAL", "�`�s�覸��:");
define("_AM_MAG_STATCOUNTER", "�峹�\Ū��:");
define("_AM_MAG_STATRATING", "�峹�o��:");
define("_AM_MAG_STATRATINGHIGH", "�̰��o��:");
define("_AM_MAG_STATRATINGLOW", "�̧C�o��:");
define("_AM_MAG_STATVOTES", "�ѻP�����H��:");
define("_AM_MAG_STATDOWNLOADS", "�����ɮ׽s��:");
define("_AM_MAG_STATCOMMENTSALLOWED", "�������?");
define("_AM_MAG_STATCOMMENTS", "��������:");
define("_AM_MAG_STATSTATUS", "�峹���A:");
define("_AM_MAG_RELATEDART", "���p�峹�޲z" );

define("_AM_MAG_RELATEDARTADMIN", "���p�峹��T" );
define("_AM_MAG_RELATEDARTADMINTXT", "���p�峹�i�H�� Magazine �����峹�ηs�D�Ҳդ����o:
<br /><li><b>�峹:</b> �z�i�H��ܦP�� Magazine �U���峹�������p.</li>
<li><b>�s�D:</b> �z�i�H��� News �ҲդU���峹�������p.</li>
" );

define("_AM_MAG_RELATEDDOCLIST", "���p�峹��ܦC��:
<br /><li><b>�峹:</b> �ХѤ峹��ܦC�����.</li>
<li><b>�s�D:</b> �Хѷs�D��ܦC�����.</li>
" );

define("_AM_MAG_RELATEDNEWSLIST", "���p�s�D��컡��" );
define("_AM_MAG_RELATEDDOCUMENTLIST", "���p�峹��ܦC����" );

define("_AM_MAG_RELATEDNEWSLISTTXT", "
<li><b>ID:</b> �C���ǽs��.</li>
<li><b>���D:</b> �峹���D�W��.</li>
<li><b>�Ƨ�:</b> �峹�ƦC����.</li>
<li><b>�s�W���p����:</b> �֨��i�H�s�W�峹�����s��,�����֨��h�����峹�����s��.</li>
<li><b>��ܥ���:</b> �ֳt��ܩβM���峹�����s��.</li>
" );

define("_AM_MAG_RELATEDLINKLIST", "�����s����컡��" );
define("_AM_MAG_RELATEDLINKLISTTXT", "
<li><b>ID:</b> �C���ǽs��.</li>
<li><b>���D:</b> �峹���D�W��.</li>
<li><b>�Ƨ�:</b> �峹�ƦC����.</li>
<li><b>�ʧ@:</b> �I���ϥܥi�H���Ӥ峹�s�W�����s��.</li>
" );

define("_AM_MAG_RELATEDLINKLIST2", "�إ߷s�������s��" );
define("_AM_MAG_RELATEDLINKLISTTXT2", "
<li><b>�����s��:</b> �����s�������}.</li>
<li><b>�����s���W��:</b> �������}����r�y�z.</li>
<li><b>�Ƨ�:</b> �����s���ƦC����.</li>
<li><b>�ʧ@:</b> �s��ΧR�������s������.</li>
" );//dqflyer fixed the "Perform" word

define("_AM_MAG_NO_DOCS_CREATEDYET", "�|�L����峹�i�H���." );
define("_AM_MAG_RELATED_DOC", "�峹" );
define("_AM_MAG_RELATED_NEWS", "�s�D" );
define("_AM_MAG_ADDRELATEDART", "�s�W���p�峹" );
define("_AM_MAG_RELATEDITEM", "�s�W���p����" );
define("_AM_MAG_RELATEDART_WEIGHT", "�Ƨ�" );
define("_AM_MAG_ARTID", "ID" );
define("_AM_MAG_SHOWALL", "��ܥ���");
define("_AM_MAG_FAILTOSEE", "�d������³J! �ФűN�峹�ƻs��P�����O�U�n��!" );
define("_AM_MAG_NOARTICLE", "�o�g�峹�ä��s�b");
define("_AM_MAG_NOARTICLESSELECTED", "�S����ܤ峹");
define("_AM_MAG_ARTICLESMOVED", "��ܪ��峹�w����s���O");
define("_AM_MAG_ANDMOVED", "����s���O:");
define("_AM_MAG_SELECTALLNONE", "����/������");
define("_AM_MAG_SUBMIT1", "�T�w" );
define("_AM_MAG_VOTES","����:");
define("_AM_MAG_SORTBY1", "����:" );
define("_AM_MAG_DATE1","���");
define("_AM_MAG_ARTICLEID1","�峹 ID");
define("_AM_MAG_RESET","���m");
define("_AM_MAG_NOSUCHSECTION","<b>���~</b>:�d�L�ŦX�����O");
define("_AM_MAG_NOTITLESET","�L���D");
define("_AM_MAG_EDITSUBTITLE","�峹�Ƽ��D:");
define("_AM_MAG_SELECT_IMG","�峹�Ϥ�:");
define("_AM_MAG_TOTALNUMARTS","�峹�`��:");
define("_AM_MAG_STATUSERTYPE", "�|�����ݸs��:" );
define("_AM_MAG_DATEIN", "�s��_�l�ɶ�:" );
define("_AM_MAG_DATEOUT", "�s�觹���ɶ�:" );
define("_AM_MAG_DOCEDITHISTORY","�s��峹����");
define("_AM_MAG_STILLEDITING","���b�s�褤���峹");
define("_AM_MAG_DOCSINEDITING","�s�褤���峹");
define("_AM_MAG_EDITVERSION"," �x�s�ɦ۰ʧ�s����");
define("_AM_MAG_EDITVERSIONNUM","�峹����:");
define("_AM_MAG_OTHEROPTIONS", "��L����" );
// mag_fileshow defines
define("_AM_MAG_ATTACHEDFILES","���[�ɮײպA");
define("_AM_MAG_FILEUPLOAD","�W���ɮצܤ峹:");
define("_AM_MAG_ATTACHEDFILEEDITH","�W�Ƿs�ɮ�");
define("_AM_MAG_ATTACHFILE","�W�Ǫ��ɮ�");
define("_AM_MAG_FILESHOWNAME","�ɮצW��");
define("_AM_MAG_FILEDESCRIPT","�ɮ״y�z");
define("_AM_MAG_FILETEXT","�j�M����r");
define("_AM_MAG_NOT_PUBLISHED", "�|���o��" );
define("_AM_MAG_NOT_SET","�|���]�w");
define("_AM_MAG_NOT_CHANGED","�|���ܧ�");
define("_AM_MAG_TIMES"," ��");
define("_AM_MAG_ONLINE","�b�u");
define("_AM_MAG_OFFLINE","���u");
define("_AM_MAG_DISPLAYPAGES", "��ܤ���:" );
define("_AM_MAG_ARTICLERESTOREHEADING", "�峹�٭�޲z" );
define("_AM_MAG_ARTICLERESTOREINFO", "�峹�٭컡��" );
define("_AM_MAG_ARTICLERESTORETEXT", "��z�}�Ҥ峹�٭�\���,�C��z�s��@���峹�K�|�N�峹���e�ƥ��i��Ʈw,��K�z��_�峹�^���������A.<br />�Ъ`�N! �p�G�z�g�`�s��峹�o�N�ϥΫD�`�h����Ʈw�Ŷ�,�ҥH�бz�w���M�z�����n���Ƥ����." );
define("_AM_MAG_RESTORE_ID", "RID" );
define("_AM_MAG_RESTORE_DATE","�ƥ����");
define("_AM_MAG_RESTORE_ARTICLEID", "AID" );
define("_AM_MAG_RESTORE_TITLE","�峹���D");
define("_AM_MAG_RESTORE_VERSION","����");
define("_AM_MAG_RESTORE_ACTION","�ʧ@");
define("_AM_MAG_RESTORE_CREATED","�o�G���");
define("_AM_MAG_RESTORE_PUBLISHED","�o��");
define("_AM_MAG_NORESTORE","�٭쪺�峹 id �ä��s�b");
define("_AM_MAG_NORESTORE_POINTS","�o���峹�|�L�٭��I");
define("_AM_MAG_DELETERESTORE","�R���٭��I?");
define("_AM_MAG_RESTOREDELETED","�٭��I�w�Q�R��.");
define("_AM_MAG_ERROR_RESTOREDELETED","�R���٭��I�ɵo�Ϳ��~.");
define("_AM_MAG_FILEEXISTS", " (�ɮפw�s�b)" );
define("_AM_MAG_FILEERROR", "���~:" );
define("_AM_MAG_FILEERRORPLEASECHECK", " �Юֹ��ɮ�!" );
define("_AM_MAG_NUMBER", " NO:" );
define("_AM_MAG_ATTACHEDARTICLE","���[�ɮצܤ峹:");
define("_AM_MAG_RATINGID", "RID" );
// Related LINKS
define("_AM_MAG_RELATEDLINKS","�����s���޲z");
define("_AM_MAG_RELATEDLINKSADMIN","�����s����T");
define("_AM_MAG_RELATEDLINKSLIST","�����s���C��");
define("_AM_MAG_ADDRELATEDLINK","�s�W�����峹�s��");
define("_AM_MAG_RELATED_URL","�s�� URL");
define("_AM_MAG_RELATED_URLNAME","�s���W��");
define("_AM_MAG_RELATED_WEIGHT","�Ƨ�");
define("_AM_MAG_ID", "ID" );
define('_AM_MAG_NOURLFOUND', '�S�������s��');
define( '_AM_MAG_DELETERELEATEDLINK', '�O�_�R���������s��?' );
define( '_AM_MAG_RELATED_DELETED', '�o�Ӭ����s���w�g�R��!' );
define( '_AM_MAG_RELATED_DBUPDATED', '�o�Ӭ����s���w�g�إߩΧ�s' );

// Reviews
define("_AM_MAG_OTHER_INFOADMIN", "�ۭq���e��T" );
define("_AM_MAG_OTHER_INFOADMINTXT", "��z���S�����ݨD�ɱz�i�H�ϥΦۭq���e�\��:
<br /><li>�C�Ӽ��D�P���e���@�է����T.</li>
<li>�Y�z����g���e�N���|�b�e�x���e�{�Ӳզۭq���e.</li>
" );
define("_AM_MAG_OTHER_INFO","�ۭq���e: ");
define("_AM_MAG_TITLE_1", "�ۭq��� 1 - ���D:" );
define("_AM_MAG_DESC_1", "�ۭq��� 1 - ���e:" );
define("_AM_MAG_TITLE_2", "�ۭq��� 2 - ���D:" );
define("_AM_MAG_DESC_2", "�ۭq��� 2 - ���e:" );
define("_AM_MAG_TITLE_3", "�ۭq��� 3 - ���D:" );
define("_AM_MAG_DESC_3", "�ۭq��� 3 - ���e:" );
define("_AM_MAG_TITLE_4", "�ۭq��� 4 - ���D:" );
define("_AM_MAG_DESC_4", "�ۭq��� 4 - ���e:" );
define("_AM_MAG_TITLE_5", "�ۭq��� 5 - ���D:" );
define("_AM_MAG_DESC_5", "�ۭq��� 5 - ���e:" );
define("_AM_MAG_TITLE_6", "�ۭq��� 6 - ���D:" );
define("_AM_MAG_DESC_6", "�ۭq��� 6 - ���e:" );
define("_AM_MAG_DISPLAYREVIEW", "��ܦۭq���e?" );
define("_AM_MAG_ADD_REVIEW", "�ɥR�ۭq���e" );

// Import settings
define("_AM_MAG_IMPORT", "�פJ�峹��T" );
define("_AM_MAG_IMPORTTEXT", "�פJ HTML ���ܿ�ܪ����O:
<br /><li><b>���O�W��:</b> �פJ�����ݪ����O�W��.</li>
<li><b>�ؿ�/�ɮצW��:</b> HTML ���s�񪺸��|.</li>" );

define("_AM_MAG_ADD_SETTINGS", "�ܧ��L�峹�]�w" );
define("_AM_MAG_IMPORTWORD", "�פJ Word ���" );
define("_AM_MAG_IMPORTWORDYES", "�w�ҥ� Com ����A����,�z�i�H�ϥζפJ Word ��󪺥\��,���O�z�����A�����٥����w�� Word �{��." );
define("_AM_MAG_IMPORTWORDNO", "�å��ҥ� Com ����A����" );

define("_AM_MAG_IMPORTWORDINYES", "MS Word �w�g�w�˩���A����,�z�i�H�ϥζפJ Word ��󪺥\��." );
define("_AM_MAG_IMPORTWORDINNO", "���A���ݩ|���w�� MS Word �{��." );
/**
 * Check for word
 */
define("_AM_MAG_IMPORTWORDTXT", "�פJ Word ���ϥλ���: ");
define("_AM_MAG_IMPORTCOMENABLED", "���A���O�_�� Windows �t��?");
define("_AM_MAG_IMPORTWORDINSTALL", "�O�_�w�w�� MS Word �{���b���A����?");
define("_AM_MAG_IMPORTWORDSELECT", "��ܤ@�� Word ���W�ǨöפJ.");
define("_AM_MAG_WORDNOTINSTALLED", "�z�����A�����ҥثe���䴩�N�פJ�� MS Word ����ഫ���峹." );
define("_AM_MAG_EDITDRAFT", "�x�s����Z���?" );
define("_AM_MAG_IMPORT_DIRNAME", "�ؿ�/�ɮצW��" );
define("_AM_MAG_IMPORT_HTMLPROC", "�B�z HTML �ɮ�" );
define("_AM_MAG_IMPORT_EXTFILTER", "�B�~�L�o���ɮצW��");
define("_AM_MAG_IMPORT_BODY", "�u�פJ HTML �ɮ� body ����");
define("_AM_MAG_IMPORT_INDEXHTML", "�N�P�ӥؿ��Φb�W�h�ؿ������R���� index.html ���s��");
define("_AM_MAG_IMPORT_LINK", "�H��l�ɮצW�٧@���峹���D");
define("_AM_MAG_IMPORT_IMAGE", "�H image �ؿ��U���Ϥ��@���s��");
define("_AM_MAG_IMPORT_ATMARK", "�N &amp;#064; �H @ �Ÿ����N");
define("_AM_MAG_IMPORT_TEXTPROC", "�B�z��r�ɮ�");
define("_AM_MAG_IMPORT_TEXTPRE", "�ϥ� &lt;pre&gt; &lt;/pre&gt; ��¶��r�ɮ�");
define("_AM_MAG_IMPORT_IMAGEPROC", "���ɳB�z");
define("_AM_MAG_IMPORT_IMAGEDIR", "���ɥؿ����|");
define("_AM_MAG_IMPORT_IMAGECOPY", "�N�峹�����Ϥ��ƻs����ɥؿ��U.");
define("_AM_MAG_IMPORT_TESTMODE", "���ռҦ�");
define("_AM_MAG_IMPORT_TESTDB", "���ռҦ��U�峹�ä��|�x�s�ܸ�Ʈw. ��z�����x�s�ɽШ����u�ҥδ��ռҦ��v�Ŀ�. ");
define("_AM_MAG_IMPORT_TESTEXEC", "�ҥδ��ռҦ�");
define("_AM_MAG_IMPORT_TESTTEXT", "��ܤ�r");
define("_AM_MAG_IMPORT_EXPLANE", "�ˬd�ɮ��������������ɦW.<br>�Ҧp HTML �ɮץi�P�ɥH html �� htm �@�����ɦW.<br>��r�ɮװ��ɦW�� txt.<br>�Ϥ��ɮװ��ɦW�i�ର gif, jpg, jpeg, or png.<br>");
define("_AM_MAG_IMPORT_ERRDIREXI", "�ؿ����ɮרä��s�b");
define("_AM_MAG_IMPORT_ERRFILEXI", "�{���X�L�o�ä��s�b");
define("_AM_MAG_IMPORT_ERRFILEXEC", "�{���X�L�o�å�����");
define("_AM_MAG_IMPORT_ERRNOCOPY", "�ƻs���ɨS���y�z");
define("_AM_MAG_IMPORT_ERRNOIMGDIR", "���ɥؿ��S���y�z");
define("_AM_MAG_IMPORT_ERRIMGDIREXI", "�u�q���ɥؿ��ä��O�@�Ӧs�b�ؿ�");
define("_AM_MAG_IMPORT_ERRFILEEXI", "�ɮרä��s�b");
define("_AM_MAG_ARTRESTORENOTACT", "�o���\��|���ҥ�.");
define("_AM_MAG_ERRORFILEALLREADYEXISITS", "�ɮפw�g�s�b����A��.");
//define("_AM_MAG_RELATEDARTS", "���p�峹�C��");
//define("_AM_MAG_RELATEDNEWS", "���p�s�D�C��");
define("_AM_MAG_ATTACHEDFILESADMIN","�s����[�ɮ׺޲z");
define("_AM_MAG_ATTACHEDFILEPREVIEW","�w���ɮ�");
define("_AM_MAG_ATTACHEDFILESTAS","�ɮת��A");
define("_AM_MAG_ATTACHEDFILEEDIT","�s���ɮ�");
define("_AM_MAG_ATTACHEDFILEACCESS","���\�v��:");
// Document Spotlight
define("_AM_MAG_DOCSPOTLIGHTHEADING","�J�I�峹�޲z");
define("_AM_MAG_DOCSPOTLIGHTINFO","�J�I�峹��T");
define("_AM_MAG_DOCSPOTLIGHTTEXT","�]�w�@�g��ܩ�J�I�峹�϶����峹:
<li>�J�I�Ϥ�</li>
<li>�J�I�Ϥ��e��</li>
<li>�J�I�Ϥ�����</li>
<li>�J�I�峹�̤j����</li>
<li>�K�n��r����</li>
<li>�J�I�峹:�۰ʮM�γ̷s�o�����峹�Φۦ�]�w</li>
" );
define("_AM_MAG_DOCSPOTLIGHTFORM","�J�I�峹�]�w");
define("_AM_MAG_DOCSPOTLIGHTDOC","�J�I�峹:");
define("_AM_MAG_DOCSPOTLIGHTIMAGE","�峹����:");
define("_AM_MAG_USE_LASTPUBLISHED","�̷s�o�����峹�w�]�����J�I�峹");
define("_AM_MAG_CURRENT_SPOT","�ثe���J�I�峹");
define("_AM_MAG_OTHERWISE_CHOOSEANARTICLE","�z�]��ѤU�C�峹�C����w�J�I�峹");
define("_AM_MAG_SPOTIT","�֨�"); // select it as spotlight document
define("_AM_MAG_SPOTIMAGE_MAXWIDTH","�Ϥ��e��");
define("_AM_MAG_SPOTIMAGE_MAXHEIGHT","�Ϥ�����");
define("_AM_MAG_SPOTDOCUMENT_MAXLENGTH", "��ܦr�ƭ���:<div style='padding-top:8px;'>�г]�w�^�����̤j�r��/�r��. �]�w 0 �N��ܩҦ���r���e.</div>" );
define("_AM_MAG_SPOTDOCUMENT_SUMTYPE", "���e���o����:" );
define("_AM_MAG_SPOTDOCUMENT_SUBTITLE", "�峹�Ƽ��D" );
define("_AM_MAG_SPOTDOCUMENT_SUMMARY", "�峹�K�n" );
define("_AM_MAG_SPOTDOCUMENT_MAINTEXT", "�峹���e" );
// index.php
define("_AM_MAG_ARTICLENOTEXIST","���~:�峹�ä��s�b");
define("_AM_MAG_NOT_WORDDOC","���~:�o���O�ӥ��T�� MS WORD �峹");
define("_AM_MAG_NO_FORUM", "�S����ܰQ�װ�" );
define("_AM_MAG_NO_FORM", "�S����ܪ��" );
define("_AM_MAG_NO_STORE", "�S����ܰӫ~" );
define("_AM_MAG_NO_SIGN", "�S����ܬ���" );
define("_AM_MAG_CHECKIN_FAILED", "�ˬd�峹���~");
define("_AM_MAG_SERVERSTATE", "���A�����A������T" );
define("_AM_MAG_SPHPINI", "<b>PHP ini ���o��T:</b>" );
define("_AM_MAG_SAFEMODESTATUS", "�w���Ҧ����A:" );
define("_AM_MAG_REGISTERGLOBALS", "Register Globals:" );
define("_AM_MAG_MAGICQUOTESGPC", "Magic_quotes ���A:" );
define("_AM_MAG_SERVERUPLOADSTATUS", "���A���W�Ǫ��A:");
define("_AM_MAG_MAXUPLOADSIZE", "�̤j�W�ǭ���:");
define("_AM_MAG_MAXPOSTSIZE", "�̤j�o����:");
define("_AM_MAG_SAFEMODEPROBLEMS", " (�o�]�\�|�Ӧ����~)");
define("_AM_MAG_GDLIBSTATUS", "GD �禡�w�䴩:");
define("_AM_MAG_GDLIBVERSION", "GD �禡�w����:");
define("_AM_MAG_GDON", "<b>�ҥ�</b> (�i�ϥ��Y��)");
define("_AM_MAG_GDOFF", "<b>����</b> (���i�ϥ��Y��)");
define("_AM_MAG_OFF", "<b>OFF</b>" );
define("_AM_MAG_ON", "<b>ON</b>" );
define("_AM_MAG_ZLIBCOMPRESSION", "ZLib ���Y:" );
define("_AM_MAG_MAXINPUTTIME", "Max Input Time:" );
define("_AM_MAG_FOPENURL", "FOpen URL:" );

define("_AM_MAG_EXT","���ɦW:");
define("_AM_MAG_UPDATEDATE","�̫��s:");
define("_AM_MAG_DOWNLOADNAME","����W��:");
define("_AM_MAG_FILEREALNAME","�x�s�W��:");
define("_AM_MAG_ARTICLEID", "�峹 ID:" );
define("_AM_MAG_DESCRIPTION", "�ɮ״y�z" );
define("_AM_MAG_NODESCRIPT","�|�L�ɮ״y�z.");
define("_AM_MAG_ERRORCHECK", "�ɮ׮ֹ�:" );
define("_AM_MAG_ADD_STATUS", "�[�ݤ峹���A" );
define("_AM_MAG_FILEPERMISSION", "�ɮ��v��:" );
define("_AM_MAG_DOWNLOADED", "�U������:" );
define("_AM_MAG_DOWNLOADSIZE", "�ɮפj�p:" );
define("_AM_MAG_LASTACCESS", "�̫�U���ɶ�:" );
define("_AM_MAG_LASTUPDATED", "�̫��s�ɶ�:" );
define("_AM_MAG_DEL", "�R��" );
// Mimetypes
define("_AM_MAG_MIMETYPE", "�ɮ�����:" );
define("_AM_MAG_MIMETYPES", "�ɮ������޲z" );
define("_AM_MAG_MIME_ID", "ID" );
define("_AM_MAG_MIME_EXT", "���ɦW" );
define("_AM_MAG_MIME_NAME", "��������" );
define("_AM_MAG_MIME_ADMIN", "�޲z��" );
define("_AM_MAG_MIME_USER", "�@��|��" );
// Mimetype Form
define("_AM_MAG_MIME_CREATEF", "�إ��ɮ����� (Mimetype)" );
define("_AM_MAG_MIME_MODIFYF", "�ܧ��ɮ����� (Mimetype)" );
define("_AM_MAG_MIME_EXTF", "���ɦW:" );
define("_AM_MAG_MIME_NAMEF", "�������O:<div style='padding-top:8px;'>�п�J���󦹰��ɦW�����δy�z.</div>" );
define("_AM_MAG_MIME_TYPEF", "�ɮ�����:<div style='padding-top:8px;'>�п�J�U�ظ��ɮצ��������ɦW���� (mimetype). �U���ɮ����������ШϥΥb�ΪŮ涡�j.</div>" );
define("_AM_MAG_MIME_ADMINF", "���\�޲z�s�ըϥΪ����ɦW" );
define("_AM_MAG_MIME_ADMINFINFO", "<b>�޲z�s�եi�H�W�ǥH�U���ɦW�ҥ]�t���ɮ�����:</b>" );
define("_AM_MAG_MIME_USERF", "���\�@��|���ϥΪ����ɦW" );
define("_AM_MAG_MIME_USERFINFO", "<b>�@��|���i�H�W�ǥH�U���ɦW�ҥ]�t���ɮ�����:</b>" );
define("_AM_MAG_MIME_NOMIMEINFO", "�S����ܥ����ɮ����� (mimetype)." );
define("_AM_MAG_MIME_FINDMIMETYPE", "�d���ɮ�����:" );
define("_AM_MAG_MIME_EXTFIND", "�п�J�Q�d���ɮ����������ɦW<div style='padding-top:8px;'>�п�J�Q�n�d���ɮ����� (mimetype) �����ɦW.</div>" );
define("_AM_MAG_MIME_INFOTEXT", "<ul><li>�z�i�ǥѳo�Ӫ��إߡB�s��P�R���U���ɮ�����.</li>
	<li>�d���ɮ������N�|�a�z��V��L�������o�d�ߵ��G.</li>
	<li>�z�i�I���b�u/���u�ϥܨӧ��ܺ޲z�̩Τ@��|�����ϥΪ��A.</li> 
	<li>�ܧ��ɮ������ϥΪ��A.</li></ul> 
	" );
// Mimetype Buttons
define("_AM_MAG_MIME_CREATE", "�إ�" );
define("_AM_MAG_MIME_CLEAR", "���m" );
define("_AM_MAG_MIME_CANCEL", "�M��" );
define("_AM_MAG_MIME_MODIFY", "�ܧ�" );
define("_AM_MAG_MIME_DELETE", "�R��" );
define("_AM_MAG_MIME_FINDIT", "�d��!" );
// Mimetype Database
define("_AM_MAG_MIME_DELETETHIS", "�R���z�ҿ�ܪ��ɮ�����?" );
define("_AM_MAG_MIME_MIMEDELETED", "�ɮ����� %s �w�g�Q�R���F" );
define("_AM_MAG_MIME_CREATED", "�s���ɮ�������T�w�g�إ�" );
define("_AM_MAG_MIME_MODIFIED", "�ɮ�������T�w�g�ܧ�" );

define("_AM_MAG_GL_WEIGHTON", "<font color='tomato'>�۰ʱƧǶ}��</font>" );
define("_AM_MAG_GL_WEIGHTOFF", "<font color='tomato'>�۰ʱƧ�����</font>" );
define("_AM_MAG_DOCUMENTTYPES", "�o�̦@���T�ؤ��P���峹�����ѱz���,���p�z�P�ɶ�g�h�ؤ峹����,�e�x�N�H�����Ʀr�V�p�����." );
define("_AM_MAG_DOCUMENTTYPE", "<b>�峹����</b>" );
define("_AM_MAG_BIGUESER", "���餤�� (Big5) �y�t�ϥΪ̫�ĳ�}��" );

define("_AM_MAG_SELECTEDITOR","��ܽs�边:");

//Server Status
define("_AM_MAG_PHP_VERSION", "PHP ����" );
define("_AM_MAG_XOOPS_VERSION", "XOOPS ����" );
define("_AM_MAG_XOOPS_INSTALLED_PATH", "XOOPS �w�˸��|" );
define("_AM_MAG_XOOPS_URL", "XOOPS �������}" );
define("_AM_MAG_DATABASE_TYPE", "��Ʈw����" );
define("_AM_MAG_DATABASE_NAME", "��Ʈw�W��" );
define("_AM_MAG_DATABASE_PREFIX", "��Ʈw�r��" );

//Blocks State
define("_AM_MAG_ARTTEMPLATE", "��ܤ峹�˪O�ΰ϶����A:");
define("_AM_MAG_NOBLOCKS", "����ܰ϶�" );
define("_AM_MAG_SHOWALLBLOCKS", "��ܥ��k�϶�" );
define("_AM_MAG_SHOWLEFTBLOCKS", "�u��ܥ��϶�" );
define("_AM_MAG_SHOWRIGHTBLOCKS", "�u��ܥk�϶�" );

//Related Intro
define("_AM_MAG_INTRO", "����²��:");
define("_AM_MAG_INTROADMIN", "����²���ϥλ���:
<br /><li>��ܪ������N�|�v�T�e�x�������y����.</li>
<li>²�������e�N�H�u�X�������.</li>" );
define("_AM_MAG_ADDINTRO", "�s�W²��:");
define("_AM_MAG_INTROLIST", "²���C��:");

define("_AM_MAG_INTRO_MOD", "����" );
define("_AM_MAG_INTRO_LYRIC", "�q��" );
define("_AM_MAG_INTRO_BOOK", "���y²��" );
define("_AM_MAG_INTRO_NO", "�s��");
define("_AM_MAG_INTRO_TITLE", "�ѦW / �q�W" );
define("_AM_MAG_INTRO_TEXT", "���e" );
?>
