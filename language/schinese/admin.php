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
define("_AM_MAG_YES", "��");
define("_AM_MAG_NO", "��");
define("_AM_MAG_SAVE", "����");
define("_AM_MAG_SAVECHANGE", "������");
define("_AM_UPDATED", "��������ɸ���");
define("_AM_MAG_EDIT", "�༭");
define("_AM_MAG_MODIFY", "���");
define("_AM_MAG_DELETE", "ɾ��");
define("_AM_MAG_CANCEL", "���");
define("_AM_MAG_ACTION", "����");
define("_AM_MAG_COPY1", "����" );
define("_AM_MAG_NOARTICLEFOUND", "֪ͨ:Ŀǰ���޷�������������" );
define("_AM_MAG_DISABLEHTML", " ��ʹ�� HTML ��ǩ");
define("_AM_MAG_DISABLESMILEY", " ��ʹ�ñ���ͼʾ");
define("_AM_MAG_DISABLEXCODE", " ��ʹ�� BB CODE");
define("_AM_MAG_DISABLEIMAGES", " ����ʾͼƬ");
define("_AM_MAG_DISABLEBREAK", " �Զ�����ת��?");
define("_AM_MAG_STRIPHTML", " �Ƴ� HTML ��ǩ (תΪ����������)");
define("_AM_MAG_CLEANHTML", " �Ƴ���Ч�� MS Word ��ǩ");
define("_AM_MAG_NORIGHTS", "����:��û���㹻��Ȩ�޿������������" );

/**
 * Database defines
 */
define( "_AD_DBERROR","����������Ѷ�����Ͽ�ʱ����һ������:<br /><br />��ر��˴����� <a href=\"http://singchi.no-ip.com/hack/\" target=\"_blank\">Magazine ֧Ԯ��վ</a><br /><br />�뽫�����������Ƹ�������,���ǻᾡ����������ʽ.");
define( '_AM_MAG_WFPATHCONFIG', '·���趨�Ѹ���' );
define( '_AM_MAG_WFTEMPLATESCONFIG', '�����Ѹ���' );
define( '_AM_MAG_DBUPDATED', '���Ͽ��Ѹ������!' );
/**
 * Lang defines for breadcrumb system
 */
define( '_AM_MAG_BREADC1', '�����趨' );
define( '_AM_MAG_BREADC2', '�����б�' );
define( '_AM_MAG_BREADC3', '�������' );
define( '_AM_MAG_BREADC4', '·���趨' );
define( '_AM_MAG_BREADC5', '�������' );
define( '_AM_MAG_BREADC6', 'ģ����ҳ' );
define( '_AM_MAG_BREADC7', '����' );
define( '_AM_MAG_BREADC8', '����' );
define( '_AM_MAG_BREADC9', '�ŷ���״̬' );
/**
 * Lang defines for menu system
 */
define( '_AM_MAG_ADMENU1', 'ҳ�����' );
define( '_AM_MAG_ADMENU2', '�������' );
define( '_AM_MAG_ADMENU3', '׫д����' );
define( '_AM_MAG_ADMENU4', '�������' );
define( '_AM_MAG_ADMENU5', '���»�ԭ' );
define( '_AM_MAG_ADMENU6', '��������' );
define( '_AM_MAG_ADMENU7', '�������' );
define( '_AM_MAG_ADMENU8', '�������' );
define( '_AM_MAG_ADMENU9', '��ؼ��' );
define( '_AM_MAG_ADMENUA', '��������' );
define( '_AM_MAG_ADMENUB', 'ͶƱ��Ѷ' );
define( '_AM_MAG_ADMENUC', 'ʧ������' );
define( '_AM_MAG_ADMENUD', '��������' );
define( '_AM_MAG_ADMENUE', '���¸���' );
define( '_AM_MAG_ADMENUF', 'ͼƬ����' );
/**
 * Summary information
 */
define( '_AM_MAG_SUMMARYINFO1', 'ժҪ��Ѷ' );
define( '_AM_MAG_SUMMARYINFO2', '���' );
define( '_AM_MAG_SUMMARYINFO3', '����' );
define( '_AM_MAG_SUMMARYINFO4', '����' );
define( '_AM_MAG_SUMMARYINFO5', '���' );
define( '_AM_MAG_SUMMARYINFO6', '�༭��' );
define( '_AM_MAG_SUMMARYINFO7', 'ʧ������' );
/**
 * allarticles document management
 */
define("_AM_MAG_ARTICLEMANAGEMENT", "���¹���" );
define("_AM_MAG_DOC_SELECTION", "ѡ������" );
define("_AM_MAG_LIST", "<b>�б�</b> " );
define("_AM_MAG_LISTINCAT", " <b>��Ŀ¼</b> " );
/**
 * List article types
 */
define("_AM_MAG_ALLARTICLES", "��������" );
define("_AM_MAG_PUBLARTICLES", "�ѷ�������" );
define("_AM_MAG_SUBLARTICLES", "�ȴ���׼����" );
define("_AM_MAG_ONLINARTICLES", "��������" );
define("_AM_MAG_OFFLIARTICLES", "��������" );
define("_AM_MAG_EXPIREDARTICLES", "�ѹ�������" );
define("_AM_MAG_AUTOEXPIREARTICLES", "�Զ���������" );
define("_AM_MAG_AUTOARTICLES", "�Զ���������" );
define("_AM_MAG_NOSHOWARTICLES", "������ģʽ����" );
define("_AM_MAG_HTMLFILES", "HTML ��������" );
/**
 * menu lang defines
 */
define("_AM_MAG_ALLTXTHEAD", "��������ģʽ" );
define("_AM_MAG_ALLTXT", "<div>�� <b>��������</b> ģʽ�������Ա༭,ɾ�������������κ�����. ����ģʽ�»Ὣ���Ͽ��е���������ȫ����ʾ.");
define("_AM_MAG_PUBLISHEDTXTHEAD", "�ѷ�������" );
define("_AM_MAG_PUBLISHEDTXT", "<div>�� <b>�ѷ�������</b> ģʽ�н���ʾ�����Ѿ�ͨ����˵����� (��������Ա��׼)." ); //added
define("_AM_MAG_SUBMITTEDTXTHEAD", "�ȴ���׼����" );
define("_AM_MAG_SUBMITTEDTXT", "<div>�� <b>�ȴ���׼����</b> ģʽ�н���ʾ���еȴ�����Ա��˵�����.<br /><br />�������׼����, ֻҪ���� <b>�༭</b> ����, Ȼ�� <b>��׼������?</b> ��ѡ��򹴺󴢴���. �����Ϳ��Խ����·�����." ); //added
define("_AM_MAG_ONLINETXTHEAD", "��������" );
define("_AM_MAG_ONLINETXT", "<div>�� <b>��������</b> ģʽ�н���ʾ����״̬Ϊ <b>����</b> ������.<br /><br />�������������״̬�밴�� <b>�༭</b> ����Ȼ��ѡ <b>�趨����״̬Ϊ��������</b>." ); //added
define("_AM_MAG_OFFLINETXTHEAD", "��������" );
define("_AM_MAG_OFFLINETXT", "<div>�� <b>��������</b> ģʽ�н���ʾ����״̬Ϊ <b>����</b> ������.<br /><br />�������������״̬�밴�� <b>�༭</b> ����Ȼ��ȡ����ѡ <b>�趨����״̬Ϊ��������</b>." ); //added
define("_AM_MAG_EXPIREDTXTHEAD", "�ѹ�������" );
define("_AM_MAG_EXPIREDTXT", "<div>�� <b>�ѹ�������</b> ģʽ�н���ʾ�����Ѿ�������Ա�趨Ϊ���ڵ����� .<br /><br />�������������ʱ���밴�� <b>�༭</b> ����Ȼ���趨 <b>���¹�������</b>." ); //added
define("_AM_MAG_AUTOEXPIRETXTHEAD", "�Զ���������" );
define("_AM_MAG_AUTOEXPIRETXT", "<div>�� <b>�Զ���������</b> ģʽ�н���ʾ���������趨Ϊ�������ڲ��Ѿ����ڵ�����.<br /><br />������������趨ʱ���밴�� <b>�༭</b> ����Ȼ���趨 <b>���¹�������</b>." ); //added
define("_AM_MAG_AUTOTXTHEAD", "�Զ���������" );
define("_AM_MAG_AUTOTXT", "<div>�� <b>�Զ���������</b> ģʽ�н���ʾ��������Ԥ���������ڲ��Զ�����������.<br /><br />������������趨���������밴�� <b>�༭</b> ����Ȼ���趨 <b>���·�������</b>." ); //added
define("_AM_MAG_NOSHOWTXTHEAD", "������ģʽ����" );
define("_AM_MAG_NOSHOWTXT", "<div>�� <b>������ģʽ����</b> " ); //added
define("_AM_MAG_HTMLFILESTXTHEAD", "HTML ��������" );
define("_AM_MAG_HTMLFILESTXT", "<div>�� <b>HTML ��������</b> ģʽ�н���ʾ����ʹ������ HTML ���������ֵ�����." ); //added
/**
 * Article listing defines
 */
define("_AM_MAG_STORYID", "ID" );
define("_AM_MAG_TITLE", "����" );
define("_AM_MAG_POSTER", "����" );
define("_AM_MAG_VERSION", "�汾" );
define("_AM_MAG_SECTION", "���" );
define("_AM_MAG_STATUS", "״̬" );
define("_AM_MAG_WEIGHT", "����" );

define("_AM_MAG_SUBMITTED2", "����׫д����" );
define("_AM_MAG_PUBLISHED", "���·�������" );
define("_AM_MAG_PUBLISHEDON", "���·�������" );
define("_AM_MAG_SUBMITTED", "�ѷ���������" );
define("_AM_MAG_NOTPUBLISHED", "<font color='tomato'>��δ����������</font>" );
define("_AM_MAG_EXPARTS", "�ѹ�������" );
define("_AM_MAG_EXPIRED", "�Զ���������" );
define("_AM_MAG_CREATED", "���½�������" );
/**
 * Blocks Management
 */
define("_AM_MAG_BLOCKSHEADING", "�������" );
define("_AM_MAG_BLOCKSINFO", "������Ѷ" );
define("_AM_MAG_BLOCKSTEXT", "�����ɡ�ϵͳ������������������������������趨.<br />�·���Ҫ�ǹ��� Magazine ������. ��Ҳ�����������������趨����." );
/**
 * Path Managment
 */
define("_AM_MAG_PATHCONFIGURATION", "·����̬" );
define("_AM_MAG_PATHCONFIG", "·����Ȩ�޹���" );
define("_AM_MAG_FILEPATHWARNING", "<li>�趨 Magazine ���Ŀ¼·��.
	<li>����·�����󽫳��־�����ʾ.
	<li>·����λ���ֿհ׽�ʹ�ø���λԤ��·��." );
define("_AM_MAG_FILEPATH", "·����̬����" );
define("_AM_MAG_FILEUSEPATH", "���ʹ����·��" );
define("_AM_MAG_PATHEXIST", "·������!" );
define("_AM_MAG_PATHNOTEXIST", "·����δ����." );
define("_AM_MAG_THUMBPATHEXIST", "·������!" );
define("_AM_MAG_THUMBPATHNOTEXIST", "·����δ����." );
define("_AM_MAG_PATHCHECK", "<b>·�����:</b> " );
define("_AM_MAG_PERMISSIONS", "<b>·��Ȩ�޼��:</b>" );
define("_AM_MAG_THUMBPATHCHECK", "<b>��ͼĿ¼���:</b> " );
define("_AM_MAG_THUMBPERMISSIONS", "<b>��ͼĿ¼Ȩ�޼��:</b>" );
define("_AM_MAG_RESETDEFUALTS", " ��������·����Ԥ��ֵ" );
define("_AM_MAG_REVERTED", "��ԭ·����̬��Ԥ��ֵ" );
/**
 * Path Management form defines
 */
define("_AM_MAG_CMODERROR", "Ȩ�޴���:�뽫·��Ȩ���趨Ϊ 0777." );
define("_AM_MAG_CMODERRORNOTCORRECTED", " Ŀǰ��Ȩ����ֵ������ȷ." );
define("_AM_MAG_AGRAPHICPATH", "����ͼƬ·��:<div style='padding-top:8px;'>����ͼƬ���Ŀ¼.</div>");
define("_AM_MAG_SGRAPHICPATH", "���ͼƬ·��:<div style='padding-top:8px;'>���ͼƬ���Ŀ¼.</div>");
define("_AM_MAG_HTMLCPATH", "HTML ����·��:<div style='padding-top:8px;'>HTML �������Ŀ¼.</div>");
define("_AM_MAG_LOGOPATH", "Logo ͼƬ·��:<div style='padding-top:8px;'>logo ͼƬ���Ŀ¼.</div>");
define("_AM_MAG_FILEUPLOADSPATH", "���ӵ����ϴ�·��:<div style='padding-top:8px;'>���ӵ����ϴ����Ŀ¼.</div>");
define("_AM_MAG_FILEUPLOADSTEMPPATH", "���ӵ��� temp �ϴ�·��:<div style='padding-top:8px;'>�˷Ǳ���Ŀ¼����ɾ��.</div>");
define("_AM_MAG_AVATARPATH", "��ͷ����ͼ·��:<div style='padding-top:8px;'>��ͷ����ͼ���Ŀ¼. <br />����Ŀ¼�����������������Ŀ¼.</div> " );
/**
 * Template management
 */
define( '_AM_MAG_MODIFYTEMPLATES', '�������' );
define( '_AM_MAG_USINGTEMPLATES', 'ʹ���������' );
define( '_AM_MAG_HOWTOUSETEMP', "<li>������ѡ�� Magazine ���ҳ���Ӧ�����嵵.<br /><li><b>����:</b>��������ȷ��Ӧ�������������, ������ǿ�ҵĽ������뿪�뱣���������Ԥ��ֵ!");
define( '_AM_MAG_ADDINGATEMPLATE', "<b>�������岽��</b>");
define( '_AM_MAG_HOWTOUSETEMP2', "<li>����������ʱ, �����ɵ��� Magazine ���������и���.<br /><li>Ȼ�������� <a href='../../../modules/system/admin.php?fct=modulesadmin&op=update&module=magazine'>���� Magazine ģ��</a> ������д�����Ͽ�.<br /><li>���ʧ��������õ��հ׻���.");
define( '_AM_MAG_DISPLAYXOOPSTEMPADMIN', 'Xoops �����趨����:' );
define( '_AM_MAG_ISBLOCKS', '��������' );
define( '_AM_MAG_TEMPLDOWNLOADS', '���¸�������' );
define( '_AM_MAG_TEMPLPOLL', '����ͶƱ����' );
define( '_AM_MAG_TEMPLARCHIVES', '������������' );
define( '_AM_MAG_TEMPLARTINDEX', '������������' );
define( '_AM_MAG_TEMPLSECINDEX', '�������ҳ������' );
define( '_AM_MAG_TEMPLART', '����ҳ��:�������������Ѷ (Ԥ��)' );
define( '_AM_MAG_TEMPLART_INFO', '���������Ѷ' );
define( '_AM_MAG_TEMPLPLAINART', '����ҳ��:�������������Ѷ (������ģʽ)' );
define( '_AM_MAG_TEMPLTOPTEN', 'Top 10 ҳ������' );
define( '_AM_MAG_ARTMENUBLOCK', '����ѡ������' );
define( '_AM_MAG_BIGSTORYBLOCK', '�ش���������' );
define( '_AM_MAG_MAINMENUBLOCK', '��ѡ������' );
define( '_AM_MAG_NEWARTBLOCK', '�½���������' );
define( '_AM_MAG_NEWDOWNBLOCK', '���¸�������' );
define( '_AM_MAG_TOPARTBLOCK', '������������' );
define( '_AM_MAG_TOPICSBLOCK', '���·�������' );
define( '_AM_MAG_SPOTLIGHTBLOCK', '������������' );
define( '_AM_MAG_NEWDOWNLOADSBLOCK', '�½���������' );
define( '_AM_MAG_AUTHORBLOCK', '������Ѷ����' );
define( '_AM_MAG_VIEW', '�ۿ�' );
/**
 * Indexpage management
 */
define( '_AM_MAG_INDEXPAGE', 'ҳ�����' );
define( '_AM_MAG_INDEXPAGEINFO', 'ҳ�������Ѷ' );
define( '_AM_MAG_INDEXPAGEINFOTXT', '<li>��ҳ����� ������������Ƹ��ֹ��� Magazine ��ҳ��.<li>���������ɵĸı� logo ͼƬ,ҳ����ҳβ��������Ϊ������Ҫ��.' );
define( '_AM_MAG_INDEXPAGELISTING', 'ҳ������б�' );

define("_AM_MAG_PAGENAME2", "ҳ������" );
define("_AM_MAG_MODIFYPAGE", "�����ҳ��" );
define("_AM_MAG_ADDPAGE", "������ҳ��" );
define("_AM_MAG_INDEXHEADING", "ҳ�ױ���:" );
define("_AM_MAG_INDEXFOOTING", "ҳβ����" );
define("_AM_MAG_INDEXPAGEEDIT", "�༭ҳ��" );
define("_AM_MAG_SECTIONIMAGE", "ҳ��ͼƬ:" );
define("_AM_MAG_SECTIONHEAD", "ҳ������:" );
define("_AM_MAG_SECTIONFOOT", "ҳβ����:" );
define("_AM_MAG_ALIGNMENT", "<b>���뷽ʽ:</b>" );
define("_AM_MAG_ISDEFAULT", "Ԥ��ֵ" );
define("_AM_MAG_PAGENAME", "ҳ������:" );

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
define("_AM_MAG_MINDEX_ACTION", "����" );
define("_AM_MAG_MINDEX_PAGE", "<b>ҳ:<b> " );
// Database Lang defines
define("_AM_MAG_RUSUREDEL", "��ȷ��Ҫɾ����ƪ������?" );
// Section Lang Defines
define("_AM_MAG_CATEGORY", "�������" );
define("_AM_MAG_CATEGORYNAME", "������:" );
define("_AM_MAG_SECTIONPAGEDETAILS", "�������" );
define("_AM_MAG_TEXTOPTIONS", "���ָ�ʽѡ��:" );
define("_AM_MAG_GROUPPROMPT", "������Ȩ��:<div style='padding-top:8px;'>ѡ�������������Ļ�ԱȺ��.</div>");
define("_AM_MAG_IN", "���������:<div style='padding-top:8px;'>ѡ����������𽫳�Ϊ�����������.</div>");
define("_AM_MAG_MOVETO", "�������:" );
define("_AM_MAG_CATEGORYWEIGHT", "�������:<div style='padding-top:8px;'>���������ʾ����:0 Ϊ������</div>");
define("_AM_MAG_CATEGORYDESC", "�������:<div style='padding-top:8px;'>��ʹ�� HTML ��ǩ�� XOOPS CODE,ENTER ���Զ�����</div>");
define("_AM_MAG_ADDMCATEGORY", "�������" );
define("_AM_MAG_CATEGORYTAKEMETO", "����������һ�����.");
define("_AM_MAG_NOCATEGORY", "���� - û�������κ����.");
define("_AM_MAG_MODIFYCATEGORY", "������");
define("_AM_MAG_MOVECATEGORY", "���������������");
define("_AM_MAG_MOVEDEL", "��������");
define("_AM_MAG_EDITSECTION2", "�������:");
define("_AM_MAG_MOVE", "����");
define("_AM_MAG_MOVEARTICLES", "�������������");
define('_AM_MAG_DUPLICATECATEGORY', '�������');
define('_AM_MAG_COPY', '�������:');
define('_AM_MAG_TO', '��:');
define('_AM_MAG_NEWCATEGORYNAME', '���������:');
define('_AM_MAG_DUPLICATE', '����');
define('_AM_MAG_DUPLICATEWSUBS', '����ʱ���������');
define("_AM_MAG_SECTIONCOPYARTICLES", "����ʱ�����������?");
define("_AM_MAG_ADDSECTIONTOMENU", "�����������ѡ������?");
define("_AM_MAG_SECTIONTEMPLATE", "ѡ���������:");
define("_AM_MAG_SHOWCATEGORYIMG", "<b>��ʾ���ͼƬ:&nbsp;</b>");
define("_AM_MAG_SECTIONIMAGEALIGN", "<b>ͼƬ���뷽ʽ:&nbsp;</b>");
define("_AM_MAG_SECTIONIMAGEOPTION", "���ͼƬѡ��:");
define("_AM_MAG_SECTIONSTATUS", "���״̬:<div style='padding-top:8px;'>�趨����Ƿ���ʾ��ģ����ҳ. �����趨Ϊ����, ������Զ�����</div>");
define("_AM_MAG_CATEGORYHEADTITLE", "���ҳ�ױ���:");
define("_AM_MAG_CATEGORYHEAD", "���ҳ������:<div style='padding-top:8px;'>���ս��������ҳ������ȡ��.</div>");
define("_AM_MAG_CATEGORYFOOTTITLE", "���ҳβ����:");
define("_AM_MAG_CATEGORYFOOT", "���ҳβ����:<div style='padding-top:8px;'>���ս��������ҳβ����ȡ��.</div>");
define("_AM_MAG_GROUPCREATEPROMPT", "׫д����Ȩ��:<div style='padding-top:8px;'>ѡ������ڱ���������µĻ�ԱȺ��.</div>" );
// Document Lang defines
define("_AM_MAG_ADDNEWAUTH", " ѡ��������" );
define("_AM_MAG_EDITARTICLE", "���¹�����Ѷ" );
define("_AM_MAG_EDITARTICLETEXT", "<li>������������׫д / �༭ / ��������" );
define("_AM_MAG_WAYSYWTDTTAL", "����:��ȷ��Ҫɾ������������������������?" );
define("_AM_MAG_FILEDEL", "����:��ȷ��Ҫɾ���������?" );
define("_AM_MAG_UPLOADED", "�ϴ��ɹ�!" );
define("_AM_MAG_SELECTITEM", "ѡ��");
define("_AM_MAG_NOSELECT", "δѡ��");
define("_AM_MAG_NOSELECTFILE", "δѡ�񵵰�");
define("_AM_MAG_SPOTLIGHT", "�ڸ�����б��Ϊ�Ƽ�����?");
define("_AM_MAG_SPOTLIGHTMAIN", "����ҳ���Ϊ�Ƽ�����?");
define("_AM_MAG_SPOTLIGHTMAIN_DESC", "�����Ϊ���������趨����Ч");
define("_AM_MAG_SPOTLIGHTSPONSER", "����ҳ�б��Ϊ�������?");
define("_AM_MAG_SPOTLIGHTSPONSER_DESC", "�˹���ֻ��ָ��һƪ����");
define("_AM_MAG_MENU", "�����趨");
define("_AM_MAG_EDITMAINTEXT", "3. ��������:" );
define("_AM_MAG_DOC_RESTORE", "��ԭ���µ���һ���汾" );
/**
 * all article information text
 */
define("_AM_MAG_APPROVE", "��׼");
define("_AM_MAG_BROKENDOWNLOADS", "ʧЧ����");
define("_AM_MAG_BROKENDOWNLOADSTEXT", "ʧЧ������Ѷ");
define("_AM_MAG_NOBROKEN", "�����κ�ʧ����������" );
define('_AM_MAG_BROKENTEXT', '<li>���� (��������ر���ɾ����� <b>ʧ����������.</b>)
<li>�༭ (�༭���˱���ĵ�������.)
<li>ɾ�� (ɾ�� <b>�˱���ĵ�������</b> �� <b>ʧ����������</b>)' );
define("_AM_MAG_BROKENFILEIGNORED", "��ݱ����Ѿ���������" );
define("_AM_MAG_BROKENFILEDELETED", "��ݵ����Ѿ�����ɾ��" );
define("_AM_MAG_REPORTER", "�ر���" );
define("_AM_MAG_FILETITLE", "�������� " );
define("_AM_MAG_ARTICLETITLE", "���±��� ");
define("_AM_MAG_ARTICLEMANAGE", "���¹���" );
define("_AM_MAG_CANNOTHAVECATTHERE", "����:��𲻵ñ��Ϊ�����������!" );
define("_AM_MAG_SECTIONMANAGE", "������" );
define("_AM_MAG_FILEID", "����" );
define("_AM_MAG_FILEICON", "ͼʾ" );
define("_AM_MAG_REALFILENAME", "��ʵ����");
define("_AM_MAG_FILEMIMETYPE", "��������");
define("_AM_MAG_FILESIZE", "������С");
define( '_AM_MAG_FILESTATS', '��������״̬' );
define('_AM_MAG_FILESTAT', '���µ���״̬:');
define('_AM_MAG_CATREORDERTEXT', '<li>�������ڴ˱��Ŀǰ���е��������������.<li>���е����������˳���ǰ�������ֵ����.<li>����������������µ�����,ֻҪ�㰴������ƾ�����ʾ�÷��������б�.');
define('_AM_MAG_ATTACHEDFILE', '������Ѷ');
define('_AM_MAG_TDISPLAYSATTACHEDFILES', '<li>���е����������� ID ����.<br /><li>�������ڴ˱༭��ɾ������.');
define('_AM_MAG_VOTEDATA', 'ͶƱ�����Ѷ');
define('_AM_MAG_VOTEDATATEXT', '<li>ͶƱ���ϵĽ����� RID ����.');
define('_AM_MAG_ATTACHEDFILEM', '��������');
define('_AM_MAG_CAREORDER', '�������');
define('_AM_MAG_CAREORDER2', '�������������');
define("_AM_MAG_EDITHTMLFILE", "2. ѡ�� HTML ����:<div style='padding-top:8px;'>�����½������ĵķ�ʽ�����ڸ�ҳ��.</div>");
define("_AM_MAG_DOCTITLE"," ʹ�� HTML ����������Ϊ���±���");
define("_AM_MAG_DOHTMLDB"," �� HTML �������ݻ������Ͽ�");
define("_AM_MAG_EDITWORDBROWSE", "ѡ�� Word ����");
define('_AM_MAG_EDITGROUPPROMPT', "��������Ȩ��:<div style='padding-top:8px;'>ѡ���ܹ����������µĻ�ԱȺ��.</div>");
define("_AM_MAG_EDITSECTION", "�������:");
define("_AM_MAG_EDITWEIGHT", "��������:0 Ϊ������,");
define("_AM_MAG_EDITCAUTH", "��������:");
define("_AM_MAG_EDITCAUTH2", "��������:<div style='padding-top:8px;font-weight:normal; color:red;'><br />����:<br />
��������Ҫ�����ƪ���µ��κ����������趨��ʹ����������ѡ��! <br />(��������ѡ�������г��� 300 λ���߽�����ִ���)</div>" );
define("_AM_MAG_EDITLINKURL", "1. ��������:<div style='padding-top:8px;'>����Ҫ��Ϊ�������ݵ���ַ.</div>" );
define("_AM_MAG_EDITLINKURLADD", "URL λַ:<br />");
define("_AM_MAG_EDITLINKURLNAME", "URL ����:<br />");
define("_AM_MAG_EDITARTICLETITLE", "���±���:" );
define("_AM_MAG_PUBLISHDATE","���·�������:");
define("_AM_MAG_EXPIREDATESET", " ���������趨:");
define("_AM_MAG_EXPIREDATE","���¹�������:");
define("_AM_MAG_CLEARPUBLISHDATE","<br /><br />�Ƴ���������:");
define("_AM_MAG_CLEAREXPIREDATE","<br /><br />�Ƴ���������:");
define("_AM_MAG_PUBLISHDATESET"," ���������趨:");
define("_AM_MAG_SETDATETIMEPUBLISH"," �趨������ ʱ��/����");
define("_AM_MAG_SETDATETIMEEXPIRE"," �趨���ڵ� ʱ��/����");
define("_AM_MAG_SETPUBLISHDATE","<b>�趨��������:</b>");
define("_AM_MAG_SETEXPIREDATE","<b>�趨��������:</b>");
define("_AM_MAG_EXPIREWARNING","<br />����:�������ڲ������ڷ�������! ");
define("_AM_MAG_EDITSUMMARY", "����ժҪ:<div style='padding-top:8px;'>ժҪֻ�������ָ�ʽ.<br />�Զ�ժҪ����ߢȡ����������ΪժҪ.</div>
<div style='padding-top: 8px;'>��ʾ������վ�����������б�.</div>
" );
define('_AM_MAG_EDITAUTOSUMMARY', ' ʹ���Զ�ժҪ' );
define('_AM_MAG_EDITREMOVEIMAGES', ' ���Զ�ժҪ���Ƴ�ͼƬ');
define('_AM_MAG_EDITSUMMARYAMOUNTW', '�Զ�ժҪ����:(����)');
define('_AM_MAG_EDITSUMMARYAMOUNTC', '�Զ�ժҪ����:(��Ԫ��)');
define("_AM_MAG_EDITMOVETOTOP", " ���������б���");
define("_AM_MAG_EDITAPPROVE", "��׼������?");
define("_AM_MAG_EDITALLOWCOMENTS", " �������۱���");
define("_AM_MAG_EDITJUSTHTML", " ����ʾ�κ����������Ѷ");
define("_AM_MAG_EDITNOSHOART", " ����ʾ�������κ������б���" );
define("_AM_MAG_EDITOFFLINE", " �趨����״̬Ϊ��������" );
define("_AM_MAG_EDITMAINMENU", " ����������������ѡ������" );
define("_AM_MAG_CREATEDBY", "ԭ����:" );
define("_AM_MAG_LASTEDITBY", "���༭��: ");
define("_AM_MAG_CREATEDON", "������: ");
define("_AM_MAG_EDITEDON", "�༭��: ");
define("_AM_MAG_ADDAFILETOTHISDOWNLOAD", " ���ӵ��� ");

define("_AM_MAG_EDITDISCUSSINFORUM", "��������������?");
define("_AM_MAG_EDITDISCUSSINFORM", "���������?");
define("_AM_MAG_EDITDISCUSSINSTORE", "������Ʒ����?");
define("_AM_MAG_EDITDISCUSSINSIGN", "��������?");
define("_AM_MAG_EDITDISBLOCKS", "ѡ���Ƿ���ҳ������ʾ����λ��?");
define("_AM_MAG_EDITDISSUMMARYBREAKS", "ժҪ���Ƿ�ʹ�ö���ת��?" );

define("_AM_MAG_USECATEGORYACCESS", " �̳�������������ȡȨ��?" );
define('_AM_MAG_REORDERID', 'ID' );
define('_AM_MAG_REORDERPID', 'PID' );
define('_AM_MAG_REORDERTITLE', '����');
define('_AM_MAG_REORDERDESCRIPT', '����');
define('_AM_MAG_REORDERWEIGHT', '����');
define('_AM_MAG_REORDERSUMMARY', 'ժҪ');
define("_AM_MAG_EXTRADOC_TEXT", "<div style='padding-top:8px;'><b>��ҳ��ǩ</b>:�������Ҫ��ҳ,���ڷ�ҳ������ <b>[pagebreak]</b>.</div>
<div style='padding-top:8px;'><b>��ҳĿ¼</b>:ʹ�� <b>[title]</b>��������<b>[/title]</b> ���Խ������·�ҳĿ¼.</div>
<div style='padding-top:8px;'><b>��������</b>:ʹ�� <b>[ssl]</b>��������<b>[/ssl]</b> �ɽ��������ݼ������� (����� css �趨).</div>
" );
/**
 * Main Configuration
 */
define("_AM_MAG_SECTIONSETTINGS", "��������Ѷ" );
define("_AM_MAG_SECTIONSETTINGSTEXT", "<li>���������������ɵĽ���, �޸���ɾ�������е����·���..");
define("_AM_MAG_MODIFICATION", "�������");
define("_AM_MAG_MODIFICATIONINFO", "���������Ѷ");
define("_AM_MAG_MODIFICATIONTEXT", "<li>�������������������������������δͨ����˵�����.<br /><li>�������ڴ�������������׼��Щ����." );
/**
 * Index Page management
 */

/**
 * Copyright and Support.  Please do not remove this line as this is part of the only copyright agreement for using Magazine
 */
define('_AM_MAG_RETCATREORDER', '���������������');
define('_AM_MAG_ARTREORDER', '��������������!');
define('_AM_MAG_CATREORDER', 'ѡ����������������!');
define('_AM_MAG_NOFILESFOUND', '��δ�����κε���');
define('_AM_MAG_TOTALATTFILES', '��������:');
define('_AM_MAG_APPROVED', '�����');
define('_AM_MAG_ERROR_APPROVED', '��׼ʱ��������');
// votedata
define("_AM_MAG_USER", "����");
define("_AM_MAG_IP", "IP λַ");
define("_AM_MAG_USERAVG", "ƽ����Ʊ");
define("_AM_MAG_TOTALRATE", "��Ʊ��");
define("_AM_MAG_NOREGVOTES", "�����κ�ͶƱ��¼");
define("_AM_MAG_DATE", "����");
define("_AM_MAG_ARTICLE", "��������");
define("_AM_MAG_RATING", "ͶƱ");
define("_AM_MAG_VOTEDELETED", "ͶƱ��ɾ��");
// Modify Document
define("_MD_USERMODREQ", "��Ա�����޸�����");
define("_AM_MAG_MOVETOART", "��������:(���ս������ı�)");
// Modified Documents
define("_AM_MAG_MODIFIED", "���");
define("_AM_MAG_ORIGINAL", "ԭʼ����");
define("_AM_MAG_AUTHOR", "����:");
define("_AM_MAG_MAINTEXT", "����:");
define("_AM_MAG_SUBTITLE", "������:" );
define("_AM_MAG_SUMMARY", "ժҪ:" );
define("_AM_MAG_URL", "URL:" );
define("_AM_MAG_URLNAME", "URL ����:" );
define("_AM_MAG_TITLE1", "����:" );
define("_AM_MAG_PUBLISHEDDATE", "�ѷ���:");
define("_AM_MAG_SUMITDATE", "�������:");
define("_AM_MAG_PROPOSED", "�Ƽ�����");
define("_AM_MAG_POST", "����");
define("_AM_MAG_POSTNEWARTICLE", "�༭�޸�����");
define("_AM_MAG_WAYSYWTDTTAL2", "ɾ���޸�����?");
define("_AM_MAG_MODREQDELETED", "�޸�������ɾ��");
// Document Stats
define("_AM_MAG_ARTICLESTATS", "����״̬");
define("_AM_MAG_ARTICLESTATSFOR", "����״̬:");
define("_AM_MAG_ISLEFT", "��" );
define("_AM_MAG_ISCENTER", "��" );
define("_AM_MAG_ISRIGHT", "��" );
define("_AM_MAG_CREATEARTICLE", "����������");
define("_AM_MAG_MODIFYARTICLE", "�������:");
define("_AM_MAG_NODETAILSRECORDED", "û����ϸ˵����¼");
//define("_AM_MAG_ISADMINNOTICE", "����֪ͨ:��������Щ����");
define("_AM_MAG_ISSORRYMESSAGE2", " ���ڱ༭��ƪ��������,�༭��ʼʱ��:");
define("_AM_MAG_STATARTICLEID", "���±��:");
define("_AM_MAG_STATTITLE", "����:");
define("_AM_MAG_STATWEIGHT", "����:");
define("_AM_MAG_STATSECTION", "�������:");
define("_AM_MAG_STATAUTHOR", "ԭʼ����:");
define("_AM_MAG_STATCREATED", "��������:");
define("_AM_MAG_STATPUBLISHED", "��������:");
define("_AM_MAG_STATEXPIRED", "��������");
define("_AM_MAG_STATLASTEDITED", "���༭����:");
define("_AM_MAG_STATLASTEDITEDBY", "���༭��:");
define("_AM_MAG_STATTIMESEDITEDBYAUTHOR", "ԭ���߱༭���Ĵ���:");
define("_AM_MAG_STATTIMESEDITEDBYLASTEDITOR", "���һλ�༭�ߵı༭����:");
define("_AM_MAG_STATTIMESEDITEDTOTAL", "�ܱ༭����:");
define("_AM_MAG_STATCOUNTER", "�����Ķ���:");
define("_AM_MAG_STATRATING", "���µ÷�:");
define("_AM_MAG_STATRATINGHIGH", "��ߵ÷�:");
define("_AM_MAG_STATRATINGLOW", "��͵÷�:");
define("_AM_MAG_STATVOTES", "������������:");
define("_AM_MAG_STATDOWNLOADS", "�����������:");
define("_AM_MAG_STATCOMMENTSALLOWED", "�ܹ�����?");
define("_AM_MAG_STATCOMMENTS", "ȫ������:");
define("_AM_MAG_STATSTATUS", "����״̬:");
define("_AM_MAG_RELATEDART", "�������¹���" );

define("_AM_MAG_RELATEDARTADMIN", "����������Ѷ" );
define("_AM_MAG_RELATEDARTADMINTXT", "�������¿����� Magazine �������»�����ģ����ȡ��:
<br /><li><b>����:</b> ������ѡ��ͬΪ Magazine �µ����±˴˹���.</li>
<li><b>����:</b> ������ѡ�� News ģ���µ����±˴˹���.</li>
" );

define("_AM_MAG_RELATEDDOCLIST", "��������ѡ���б�:
<br /><li><b>����:</b> ��������ѡ���б���ѡȡ.</li>
<li><b>����:</b> ��������ѡ���б���ѡȡ.</li>
" );

define("_AM_MAG_RELATEDNEWSLIST", "����������λ˵��" );
define("_AM_MAG_RELATEDDOCUMENTLIST", "��������ѡ���б�˵��" );

define("_AM_MAG_RELATEDNEWSLISTTXT", "
<li><b>ID:</b> �б�˳����.</li>
<li><b>����:</b> ���±�������.</li>
<li><b>����:</b> ��������˳��.</li>
<li><b>����������Ŀ:</b> ��ȡ�������������������,ȡ����ȡ���Ƴ������������.</li>
<li><b>ѡ��ȫ��:</b> ����ѡ�����������������.</li>
" );

define("_AM_MAG_RELATEDLINKLIST", "���������λ˵��" );
define("_AM_MAG_RELATEDLINKLISTTXT", "
<li><b>ID:</b> �б�˳����.</li>
<li><b>����:</b> ���±�������.</li>
<li><b>����:</b> ��������˳��.</li>
<li><b>����:</b> �㰴ͼʾ���԰�����������������.</li>
" );

define("_AM_MAG_RELATEDLINKLIST2", "�����µ��������" );
define("_AM_MAG_RELATEDLINKLISTTXT2", "
<li><b>�������:</b> ����������ַ.</li>
<li><b>�����������:</b> �����ַ����������.</li>
<li><b>����:</b> �����������˳��.</li>
<li><b>����:</b> �༭��ɾ�����������Ŀ.</li>
" );//dqflyer fixed the "Perform" word

define("_AM_MAG_NO_DOCS_CREATEDYET", "�����κ����¿���ѡ��." );
define("_AM_MAG_RELATED_DOC", "����" );
define("_AM_MAG_RELATED_NEWS", "����" );
define("_AM_MAG_ADDRELATEDART", "������������" );
define("_AM_MAG_RELATEDITEM", "����������Ŀ" );
define("_AM_MAG_RELATEDART_WEIGHT", "����" );
define("_AM_MAG_ARTID", "ID" );
define("_AM_MAG_SHOWALL", "ѡ��ȫ��");
define("_AM_MAG_FAILTOSEE", "��ʲô������! �������¸��Ƶ�ͬ������º���!" );
define("_AM_MAG_NOARTICLE", "��ƪ���²�������");
define("_AM_MAG_NOARTICLESSELECTED", "û��ѡ������");
define("_AM_MAG_ARTICLESMOVED", "ѡ����������Ƶ������");
define("_AM_MAG_ANDMOVED", "�Ƶ������:");
define("_AM_MAG_SELECTALLNONE", "ȫѡ/ȫ��ѡ");
define("_AM_MAG_SUBMIT1", "ȷ��" );
define("_AM_MAG_VOTES","Ʊ��:");
define("_AM_MAG_SORTBY1", "����:" );
define("_AM_MAG_DATE1","����");
define("_AM_MAG_ARTICLEID1","���� ID");
define("_AM_MAG_RESET","����");
define("_AM_MAG_NOSUCHSECTION","<b>����</b>:���޷��ϵ����");
define("_AM_MAG_NOTITLESET","�ޱ���");
define("_AM_MAG_EDITSUBTITLE","���¸�����:");
define("_AM_MAG_SELECT_IMG","����ͼƬ:");
define("_AM_MAG_TOTALNUMARTS","��������:");
define("_AM_MAG_STATUSERTYPE", "��Ա����Ⱥ��:" );
define("_AM_MAG_DATEIN", "�༭��ʼʱ��:" );
define("_AM_MAG_DATEOUT", "�༭���ʱ��:" );
define("_AM_MAG_DOCEDITHISTORY","�༭���¼�¼");
define("_AM_MAG_STILLEDITING","���ڱ༭�е�����");
define("_AM_MAG_DOCSINEDITING","�༭�е�����");
define("_AM_MAG_EDITVERSION"," ����ʱ�Զ����°汾");
define("_AM_MAG_EDITVERSIONNUM","���°汾:");
define("_AM_MAG_OTHEROPTIONS", "������Ŀ" );
// mag_fileshow defines
define("_AM_MAG_ATTACHEDFILES","���ӵ�����̬");
define("_AM_MAG_FILEUPLOAD","�ϴ�����������:");
define("_AM_MAG_ATTACHEDFILEEDITH","�ϴ��µ���");
define("_AM_MAG_ATTACHFILE","�ϴ��ĵ���");
define("_AM_MAG_FILESHOWNAME","��������");
define("_AM_MAG_FILEDESCRIPT","��������");
define("_AM_MAG_FILETEXT","��Ѱ�ؼ���");
define("_AM_MAG_NOT_PUBLISHED", "��δ����" );
define("_AM_MAG_NOT_SET","��δ�趨");
define("_AM_MAG_NOT_CHANGED","��δ���");
define("_AM_MAG_TIMES"," ��");
define("_AM_MAG_ONLINE","����");
define("_AM_MAG_OFFLINE","����");
define("_AM_MAG_DISPLAYPAGES", "��ʾ��ҳ:" );
define("_AM_MAG_ARTICLERESTOREHEADING", "���»�ԭ����" );
define("_AM_MAG_ARTICLERESTOREINFO", "���»�ԭ˵��" );
define("_AM_MAG_ARTICLERESTORETEXT", "�����������»�ԭ���ܺ�,ÿ�����༭һ�����±�Ὣ�������ݱ��ݽ����Ͽ�,�������ָ����»ؽ����״̬.<br />��ע��! ����������༭�����⽫ʹ�÷ǳ�������Ͽ�ռ�,������������������Ҫ�ı�������." );
define("_AM_MAG_RESTORE_ID", "RID" );
define("_AM_MAG_RESTORE_DATE","��������");
define("_AM_MAG_RESTORE_ARTICLEID", "AID" );
define("_AM_MAG_RESTORE_TITLE","���±���");
define("_AM_MAG_RESTORE_VERSION","�汾");
define("_AM_MAG_RESTORE_ACTION","����");
define("_AM_MAG_RESTORE_CREATED","��������");
define("_AM_MAG_RESTORE_PUBLISHED","����");
define("_AM_MAG_NORESTORE","��ԭ������ id ��������");
define("_AM_MAG_NORESTORE_POINTS","����������޻�ԭ��");
define("_AM_MAG_DELETERESTORE","ɾ����ԭ��?");
define("_AM_MAG_RESTOREDELETED","��ԭ���ѱ�ɾ��.");
define("_AM_MAG_ERROR_RESTOREDELETED","ɾ����ԭ��ʱ��������.");
define("_AM_MAG_FILEEXISTS", " (�����Ѵ���)" );
define("_AM_MAG_FILEERROR", "����:" );
define("_AM_MAG_FILEERRORPLEASECHECK", " ��˶Ե���!" );
define("_AM_MAG_NUMBER", " NO:" );
define("_AM_MAG_ATTACHEDARTICLE","���ӵ���������:");
define("_AM_MAG_RATINGID", "RID" );
// Related LINKS
define("_AM_MAG_RELATEDLINKS","����������");
define("_AM_MAG_RELATEDLINKSADMIN","���������Ѷ");
define("_AM_MAG_RELATEDLINKSLIST","��������б�");
define("_AM_MAG_ADDRELATEDLINK","���������������");
define("_AM_MAG_RELATED_URL","���� URL");
define("_AM_MAG_RELATED_URLNAME","��������");
define("_AM_MAG_RELATED_WEIGHT","����");
define("_AM_MAG_ID", "ID" );
define('_AM_MAG_NOURLFOUND', 'û���������');
define( '_AM_MAG_DELETERELEATEDLINK', '�Ƿ�ɾ�����������?' );
define( '_AM_MAG_RELATED_DELETED', '�����������Ѿ�ɾ��!' );
define( '_AM_MAG_RELATED_DBUPDATED', '�����������Ѿ����������' );

// Reviews
define("_AM_MAG_OTHER_INFOADMIN", "�Զ�������Ѷ" );
define("_AM_MAG_OTHER_INFOADMINTXT", "�������������λ����ʱ������ʹ���Զ����ݹ���:
<br /><li>ÿ������������Ϊһ��������Ѷ.</li>
<li>����δ��д���ݽ�������ǰ̨�г��ָ����Զ�����.</li>
" );
define("_AM_MAG_OTHER_INFO","�Զ�����: ");
define("_AM_MAG_TITLE_1", "�Զ���λ 1 - ����:" );
define("_AM_MAG_DESC_1", "�Զ���λ 1 - ����:" );
define("_AM_MAG_TITLE_2", "�Զ���λ 2 - ����:" );
define("_AM_MAG_DESC_2", "�Զ���λ 2 - ����:" );
define("_AM_MAG_TITLE_3", "�Զ���λ 3 - ����:" );
define("_AM_MAG_DESC_3", "�Զ���λ 3 - ����:" );
define("_AM_MAG_TITLE_4", "�Զ���λ 4 - ����:" );
define("_AM_MAG_DESC_4", "�Զ���λ 4 - ����:" );
define("_AM_MAG_TITLE_5", "�Զ���λ 5 - ����:" );
define("_AM_MAG_DESC_5", "�Զ���λ 5 - ����:" );
define("_AM_MAG_TITLE_6", "�Զ���λ 6 - ����:" );
define("_AM_MAG_DESC_6", "�Զ���λ 6 - ����:" );
define("_AM_MAG_DISPLAYREVIEW", "��ʾ�Զ�����?" );
define("_AM_MAG_ADD_REVIEW", "�����Զ�����" );

// Import settings
define("_AM_MAG_IMPORT", "����������Ѷ" );
define("_AM_MAG_IMPORTTEXT", "���� HTML �ļ���ѡ������:
<br /><li><b>�������:</b> �����ļ��������������.</li>
<li><b>Ŀ¼/��������:</b> HTML �ļ���ŵ�·��.</li>" );

define("_AM_MAG_ADD_SETTINGS", "������������趨" );
define("_AM_MAG_IMPORTWORD", "���� Word �ļ�" );
define("_AM_MAG_IMPORTWORDYES", "������ Com ���ŷ�����,������ʹ�û��� Word �ļ��Ĺ���,���������ŷ����˻����밲װ Word ��ʽ." );
define("_AM_MAG_IMPORTWORDNO", "��δ���� Com ���ŷ�����" );

define("_AM_MAG_IMPORTWORDINYES", "MS Word �Ѿ���װ���ŷ�����,������ʹ�û��� Word �ļ��Ĺ���." );
define("_AM_MAG_IMPORTWORDINNO", "�ŷ�������δ��װ MS Word ��ʽ." );
/**
 * Check for word
 */
define("_AM_MAG_IMPORTWORDTXT", "���� Word �ļ�ʹ��˵��: ");
define("_AM_MAG_IMPORTCOMENABLED", "�ŷ����Ƿ�Ϊ Windows ϵͳ?");
define("_AM_MAG_IMPORTWORDINSTALL", "�Ƿ��Ѱ�װ MS Word ��ʽ���ŷ�����?");
define("_AM_MAG_IMPORTWORDSELECT", "ѡ��һ�� Word �ļ��ϴ�������.");
define("_AM_MAG_WORDNOTINSTALLED", "�����ŷ�������Ŀǰ��֧Ԯ������� MS Word �ļ�ת��Ϊ����." );
define("_AM_MAG_EDITDRAFT", "����Ϊ�ݸ��ļ�?" );
define("_AM_MAG_IMPORT_DIRNAME", "Ŀ¼/��������" );
define("_AM_MAG_IMPORT_HTMLPROC", "���� HTML ����" );
define("_AM_MAG_IMPORT_EXTFILTER", "������˵ĵ�������");
define("_AM_MAG_IMPORT_BODY", "ֻ���� HTML ���� body ����");
define("_AM_MAG_IMPORT_INDEXHTML", "��ͬ��Ŀ¼�����ϲ�Ŀ¼���ļ�ɾ���� index.html ������");
define("_AM_MAG_IMPORT_LINK", "��ԭʼ����������Ϊ���±���");
define("_AM_MAG_IMPORT_IMAGE", "�� image Ŀ¼�µ�ͼƬ��Ϊ����");
define("_AM_MAG_IMPORT_ATMARK", "�� &amp;#064; �� @ ����ȡ��");
define("_AM_MAG_IMPORT_TEXTPROC", "�������ֵ���");
define("_AM_MAG_IMPORT_TEXTPRE", "ʹ�� &lt;pre&gt; &lt;/pre&gt; Χ�����ֵ���");
define("_AM_MAG_IMPORT_IMAGEPROC", "ͼ������");
define("_AM_MAG_IMPORT_IMAGEDIR", "ͼ��Ŀ¼·��");
define("_AM_MAG_IMPORT_IMAGECOPY", "�������е�ͼƬ���Ƶ�ͼ��Ŀ¼��.");
define("_AM_MAG_IMPORT_TESTMODE", "����ģʽ");
define("_AM_MAG_IMPORT_TESTDB", "����ģʽ�����²����ᴢ�������Ͽ�. ������ʽ����ʱ��ȡ�������ò���ģʽ����ѡ. ");
define("_AM_MAG_IMPORT_TESTEXEC", "���ò���ģʽ");
define("_AM_MAG_IMPORT_TESTTEXT", "��ʾ����");
define("_AM_MAG_IMPORT_EXPLANE", "��鵵��������صĸ�����.<br>���� HTML ������ͬʱ�� html �� htm ��Ϊ������.<br>���ֵ���������Ϊ txt.<br>ͼƬ��������������Ϊ gif, jpg, jpeg, or png.<br>");
define("_AM_MAG_IMPORT_ERRDIREXI", "Ŀ¼�򵵰���������");
define("_AM_MAG_IMPORT_ERRFILEXI", "��ʽ����˲�������");
define("_AM_MAG_IMPORT_ERRFILEXEC", "��ʽ����˲�δִ��");
define("_AM_MAG_IMPORT_ERRNOCOPY", "����ͼ��û������");
define("_AM_MAG_IMPORT_ERRNOIMGDIR", "ͼ��Ŀ¼û������");
define("_AM_MAG_IMPORT_ERRIMGDIREXI", "ֻ��ͼ��Ŀ¼������һ������Ŀ¼");
define("_AM_MAG_IMPORT_ERRFILEEXI", "������������");
define("_AM_MAG_ARTRESTORENOTACT", "�������δ����.");
define("_AM_MAG_ERRORFILEALLREADYEXISITS", "�����Ѿ��������ŷ���.");
//define("_AM_MAG_RELATEDARTS", "���������б�");
//define("_AM_MAG_RELATEDNEWS", "���������б�");
define("_AM_MAG_ATTACHEDFILESADMIN","�༭���ӵ�������");
define("_AM_MAG_ATTACHEDFILEPREVIEW","Ԥ������");
define("_AM_MAG_ATTACHEDFILESTAS","����״̬");
define("_AM_MAG_ATTACHEDFILEEDIT","�༭����");
define("_AM_MAG_ATTACHEDFILEACCESS","����Ȩ��:");
// Document Spotlight
define("_AM_MAG_DOCSPOTLIGHTHEADING","�������¹���");
define("_AM_MAG_DOCSPOTLIGHTINFO","����������Ѷ");
define("_AM_MAG_DOCSPOTLIGHTTEXT","�趨һƪ��ʾ�ڽ����������������:
<li>����ͼƬ</li>
<li>����ͼƬ���</li>
<li>����ͼƬ����</li>
<li>����������󳤶�</li>
<li>ժҪ��������</li>
<li>��������:�Զ��������·��������»������趨</li>
" );
define("_AM_MAG_DOCSPOTLIGHTFORM","���������趨");
define("_AM_MAG_DOCSPOTLIGHTDOC","��������:");
define("_AM_MAG_DOCSPOTLIGHTIMAGE","���¸�ͼ:");
define("_AM_MAG_USE_LASTPUBLISHED","���·���������Ԥ��ΪΪ��������");
define("_AM_MAG_CURRENT_SPOT","Ŀǰ�Ľ�������");
define("_AM_MAG_OTHERWISE_CHOOSEANARTICLE","��Ҳ�������������б�ָ����������");
define("_AM_MAG_SPOTIT","��ȡ"); // select it as spotlight document
define("_AM_MAG_SPOTIMAGE_MAXWIDTH","ͼƬ���");
define("_AM_MAG_SPOTIMAGE_MAXHEIGHT","ͼƬ����");
define("_AM_MAG_SPOTDOCUMENT_MAXLENGTH", "��ʾ��������:<div style='padding-top:8px;'>���趨ߢȡ���������/��Ԫ. �趨 0 ����ʾ������������.</div>" );
define("_AM_MAG_SPOTDOCUMENT_SUMTYPE", "����ȡ������:" );
define("_AM_MAG_SPOTDOCUMENT_SUBTITLE", "���¸�����" );
define("_AM_MAG_SPOTDOCUMENT_SUMMARY", "����ժҪ" );
define("_AM_MAG_SPOTDOCUMENT_MAINTEXT", "��������" );
// index.php
define("_AM_MAG_ARTICLENOTEXIST","����:���²�������");
define("_AM_MAG_NOT_WORDDOC","����:�ⲻ�Ǹ���ȷ�� MS WORD ����");
define("_AM_MAG_NO_FORUM", "û��ѡ��������" );
define("_AM_MAG_NO_FORM", "û��ѡ���" );
define("_AM_MAG_NO_STORE", "û��ѡ����Ʒ" );
define("_AM_MAG_NO_SIGN", "û��ѡ��" );
define("_AM_MAG_CHECKIN_FAILED", "������´���");
define("_AM_MAG_SERVERSTATE", "�ŷ���״̬�����Ѷ" );
define("_AM_MAG_SPHPINI", "<b>PHP ini ȡ����Ѷ:</b>" );
define("_AM_MAG_SAFEMODESTATUS", "��ȫģʽ״̬:" );
define("_AM_MAG_REGISTERGLOBALS", "Register Globals:" );
define("_AM_MAG_MAGICQUOTESGPC", "Magic_quotes ״̬:" );
define("_AM_MAG_SERVERUPLOADSTATUS", "�ŷ����ϴ�״̬:");
define("_AM_MAG_MAXUPLOADSIZE", "����ϴ�����:");
define("_AM_MAG_MAXPOSTSIZE", "��󷢱�����:");
define("_AM_MAG_SAFEMODEPROBLEMS", " (��Ҳ����ճɴ���)");
define("_AM_MAG_GDLIBSTATUS", "GD ��ʽ��֧Ԯ:");
define("_AM_MAG_GDLIBVERSION", "GD ��ʽ��汾:");
define("_AM_MAG_GDON", "<b>����</b> (��ʹ����ͼ)");
define("_AM_MAG_GDOFF", "<b>�ر�</b> (����ʹ����ͼ)");
define("_AM_MAG_OFF", "<b>OFF</b>" );
define("_AM_MAG_ON", "<b>ON</b>" );
define("_AM_MAG_ZLIBCOMPRESSION", "ZLib ѹ��:" );
define("_AM_MAG_MAXINPUTTIME", "Max Input Time:" );
define("_AM_MAG_FOPENURL", "FOpen URL:" );

define("_AM_MAG_EXT","������:");
define("_AM_MAG_UPDATEDATE","������:");
define("_AM_MAG_DOWNLOADNAME","��������:");
define("_AM_MAG_FILEREALNAME","��������:");
define("_AM_MAG_ARTICLEID", "���� ID:" );
define("_AM_MAG_DESCRIPTION", "��������" );
define("_AM_MAG_NODESCRIPT","���޵�������.");
define("_AM_MAG_ERRORCHECK", "�����˶�:" );
define("_AM_MAG_ADD_STATUS", "�ۿ�����״̬" );
define("_AM_MAG_FILEPERMISSION", "����Ȩ��:" );
define("_AM_MAG_DOWNLOADED", "���ش���:" );
define("_AM_MAG_DOWNLOADSIZE", "������С:" );
define("_AM_MAG_LASTACCESS", "�������ʱ��:" );
define("_AM_MAG_LASTUPDATED", "������ʱ��:" );
define("_AM_MAG_DEL", "ɾ��" );
// Mimetypes
define("_AM_MAG_MIMETYPE", "��������:" );
define("_AM_MAG_MIMETYPES", "�������͹���" );
define("_AM_MAG_MIME_ID", "ID" );
define("_AM_MAG_MIME_EXT", "������" );
define("_AM_MAG_MIME_NAME", "Ӧ������" );
define("_AM_MAG_MIME_ADMIN", "������" );
define("_AM_MAG_MIME_USER", "һ���Ա" );
// Mimetype Form
define("_AM_MAG_MIME_CREATEF", "������������ (Mimetype)" );
define("_AM_MAG_MIME_MODIFYF", "����������� (Mimetype)" );
define("_AM_MAG_MIME_EXTF", "������:" );
define("_AM_MAG_MIME_NAMEF", "Ӧ�����:<div style='padding-top:8px;'>��������ڴ˸�������Ӧ������.</div>" );
define("_AM_MAG_MIME_TYPEF", "��������:<div style='padding-top:8px;'>��������ָ��˵����йصĸ��������� (mimetype). ���ֵ�������֮����ʹ�ð��οո���.</div>" );
define("_AM_MAG_MIME_ADMINF", "�������Ⱥ��ʹ�õĸ�����" );
define("_AM_MAG_MIME_ADMINFINFO", "<b>����Ⱥ������ϴ����¸������������ĵ�������:</b>" );
define("_AM_MAG_MIME_USERF", "����һ���Աʹ�õĸ�����" );
define("_AM_MAG_MIME_USERFINFO", "<b>һ���Ա�����ϴ����¸������������ĵ�������:</b>" );
define("_AM_MAG_MIME_NOMIMEINFO", "û��ѡ���κε������� (mimetype)." );
define("_AM_MAG_MIME_FINDMIMETYPE", "��ѯ��������:" );
define("_AM_MAG_MIME_EXTFIND", "���������ѯ�������͵ĸ�����<div style='padding-top:8px;'>��������Ҫ��ѯ�������� (mimetype) �ĸ�����.</div>" );
define("_AM_MAG_MIME_INFOTEXT", "<ul><li>���ɽ���������������༭��ɾ�����ֵ�������.</li>
	<li>��ѯ�������ͽ������ת��������վȡ�ò�ѯ���.</li>
	<li>���ɵ㰴����/����ͼʾ���ı�����߻�һ���Ա��ʹ��״̬.</li> 
	<li>�����������ʹ��״̬.</li></ul> 
	" );
// Mimetype Buttons
define("_AM_MAG_MIME_CREATE", "����" );
define("_AM_MAG_MIME_CLEAR", "����" );
define("_AM_MAG_MIME_CANCEL", "���" );
define("_AM_MAG_MIME_MODIFY", "���" );
define("_AM_MAG_MIME_DELETE", "ɾ��" );
define("_AM_MAG_MIME_FINDIT", "��ѯ!" );
// Mimetype Database
define("_AM_MAG_MIME_DELETETHIS", "ɾ������ѡ��ĵ�������?" );
define("_AM_MAG_MIME_MIMEDELETED", "�������� %s �Ѿ���ɾ����" );
define("_AM_MAG_MIME_CREATED", "�µĵ���������Ѷ�Ѿ�����" );
define("_AM_MAG_MIME_MODIFIED", "����������Ѷ�Ѿ����" );

define("_AM_MAG_GL_WEIGHTON", "<font color='tomato'>�Զ�������</font>" );
define("_AM_MAG_GL_WEIGHTOFF", "<font color='tomato'>�Զ�����ر�</font>" );
define("_AM_MAG_DOCUMENTTYPES", "���ﹲ�����ֲ�ͬ���������͹���ѡ��,������ͬʱ��д������������,ǰ̨������������ԽС����ʾ." );
define("_AM_MAG_DOCUMENTTYPE", "<b>��������</b>" );
define("_AM_MAG_BIGUESER", "�������� (Big5) ��ϵʹ���߽��鿪��" );

define("_AM_MAG_SELECTEDITOR","ѡ��༭��:");

//Server Status
define("_AM_MAG_PHP_VERSION", "PHP �汾" );
define("_AM_MAG_XOOPS_VERSION", "XOOPS �汾" );
define("_AM_MAG_XOOPS_INSTALLED_PATH", "XOOPS ��װ·��" );
define("_AM_MAG_XOOPS_URL", "XOOPS ��Ӧ��ַ" );
define("_AM_MAG_DATABASE_TYPE", "���Ͽ�����" );
define("_AM_MAG_DATABASE_NAME", "���Ͽ�����" );
define("_AM_MAG_DATABASE_PREFIX", "���Ͽ�����" );

//Blocks State
define("_AM_MAG_ARTTEMPLATE", "ѡ���������弰����״̬:");
define("_AM_MAG_NOBLOCKS", "����ʾ����" );
define("_AM_MAG_SHOWALLBLOCKS", "��ʾ��������" );
define("_AM_MAG_SHOWLEFTBLOCKS", "ֻ��ʾ������" );
define("_AM_MAG_SHOWRIGHTBLOCKS", "ֻ��ʾ������" );

//Related Intro
define("_AM_MAG_INTRO", "��ؼ��:");
define("_AM_MAG_INTROADMIN", "��ؼ��ʹ��˵��:
<br /><li>ѡ������ͽ���Ӱ��ǰ̨��Ӧ�����Ե�.</li>
<li>�������ݽ��Ե����Ӵ���ʾ.</li>" );
define("_AM_MAG_ADDINTRO", "�������:");
define("_AM_MAG_INTROLIST", "����б�:");

define("_AM_MAG_INTRO_MOD", "����" );
define("_AM_MAG_INTRO_LYRIC", "���" );
define("_AM_MAG_INTRO_BOOK", "�鼮���" );
define("_AM_MAG_INTRO_NO", "���");
define("_AM_MAG_INTRO_TITLE", "���� / ����" );
define("_AM_MAG_INTRO_TEXT", "����" );
?>
