<?php
// $Id: main.php,v 2.0 2005/05/21 01:02:43 RB Exp $
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

define("_MAG_NOARTICLE", "��Ǹ, ��ƪ���²�������");
define("_MAG_NODESCRIPT","���ļ���������");
define("_MAG_UPLOADED","�ϴ�: ");
define("_MAG_FILEMIMETYPE","��������");

define("_MAG_ISNEW", "��������");
define("_MAG_ISUPDATED", "�������");
define("_MAG_ARTICLENOPERM", "��Ǹ, ��û���㹻��Ȩ������������");
define("_MAG_BACK","����");
define("_MAG_CANCEL","ȡ��");
define("_MAG_SUBMIT","ȷ���ͳ�");
define("_MAG_SUBMITBROKEN", "�ͳ�ʧ������");
define("_MAG_PRINTERFRIENDLY","������ӡ");
define("_MAG_MAKEPDF","���Ϊ PDF ��ʽ");
define("_MAG_NOTIFYPUBLISH","ͨ�����ʱ�� Email ֪ͨ��");
define("_MAG_NOSTORY","��Ǹ,���Ͽ����޷��ҵ�������");
define("_MAG_RETURN2INDEX","Home");
define("_MAG_BACK2CAT","List");
define("_MAG_BACK2","Back");
define("_MAG_BACK2TOP","Top");
define("_MAG_TELLAFRIEND","ת�ĺ���");
define("_MAG_TITLE","���±���");
//define("_MAG_HOMEPAGEC", "���±���: ");
define("_MAG_CATEGORY","����");
define("_MAG_ARTICLES","������");
define("_MAG_ABOUTAUTHER","���߶�����");
define("_MAG_AUTHER","����");
define("_MAG_FROM","����");
define("_MAG_INTEREST","��Ȥ");
define("_MAG_ARTINFO","������Ѷ");
define("_MAG_VIEWS","����");
define("_MAG_TIMES","��");
define("_MAG_DATE","����");
define("_MAG_NUMVOTES","��������");
define("_MAG_FILESIZE","������С");
define("_MAG_VERSION","�汾");
define("_MAG_FILES","����");
define("_MAG_TOPICC","����");
define("_MAG_ARTICLE","����");
define("_MAG_AUTH","����");
define("_MAG_PUBLISHER","������");
define("_MAG_LASTUPDATE","������");
define("_MAG_EDITDISCUSSINFORUM", "�������������᣿");
define("_MAG_EDITDISCUSSINFORM", "���������᣿");
define("_MAG_EDITDISCUSSINSTORE", "������Ʒ���᣿");
define("_MAG_EDITDISCUSSINSIGN", "��������᣿");
//define("_MAG_BROKENREPORT", "���ʧ���ر�");
define("_MAG_BEFORESUBMIT", "���ͳ�����ʧ������֮ǰ, �����ٴ�ȷ�ϻر��ĵ����Ƿ���ȷ, վ�������ټ�����ı���, Ϊ�˰�ȫ�������ǽ����¼���� IP λַ�Թ����.");
define("_MAG_SUBMITDATE", "��������");
define("_MAG_NOFILE","��ƪ���������κθ��ӵ���.");
define("_MAG_FILEID","���� ID: ");
define("_MAG_FILEREALNAME","��������: ");
define("_MAG_ARTICLEID","���� ID: ");
define("_MAG_OTHERARTICLES","��������");
define("_MAG_PAGETITLE","��ҳĿ¼");
define("_MAG_PAGES","��ҳ");
define("_MAG_RELATEDARTS", "�������");
define("_MAG_RELATEDNEWS", "�������");
define("_MAG_INFORUMS", "%s �����������");
define("_MAG_INFORMS", "%s ����ر�");
define("_MAG_INSTORE", "%s �������Ʒ");
define("_MAG_INSIGN", "%s ����ػ");
define("_MAG_VOTEAPPRE","���������Ѿ����.");
define("_MAG_THANKYOU","��л�����Ϊ %s ����");
define("_MAG_VOTEONCE","��Ǹ, ��ƪ�������Ѿ����ֹ���, ÿƪ����ֻ������һ��.");
define("_MAG_NORATING","����ѡ������.");
//define("_MAG_THANKSFORHELP","лл��ر�����ʧЧ������.");
define("_MAG_THANKSFORINFO","лл���ṩ��Ѷ,���ǻᾡ�촦��.");
define("_MAG_THANKS","лл���Ĳ���. ");
define("_MAG_THANKS_APPROVE","лл���������µ�����, ���ǽ�����̵�ʱ���ڽ������.");
define("_MAG_ALREADYREPORTED","лл���Ļر�, ����ݵ����Ѿ������������.");
define("_MAG_CANTVOTEOWN","�벻Ҫ�����Լ��������������.<br>���е����ֶ�����������¼�����.");
define("_MAG_RANK","����");
define("_MAG_HITS","����");
define("_MAG_HITS2","����������������");
define("_MAG_RATING","�Ƽ�");
define("_MAG_RATING2","�������ָߵ�����");
define("_MAG_AUTH2","���������ʺ�����");
define("_MAG_VOTE","Ʊ��");
define("_MAG_BROKENREPORTED","����ʧ������");

//define("_MAG_FORSECURITY","Ϊ�˰�ȫ�������ǽ����¼���� IP λַ�Թ����.");
define("_MAG_DOWNLOADS","����");
define("_MAG_COMMENT","����: ");
define("_MAG_RATED","Ŀǰ����: ");
define("_MAG_VOTES","����");
define("_MAG_SORTBY1","����: ");
define("_MAG_TITLE1","����");
define("_MAG_DATE1","����");
define("_MAG_POPULARITYLTOM","��������");
define("_MAG_POPULARITYMTOL","��������");
define("_MAG_ARTICLEIDLTOM","���� ID (1 to 9)");
define("_MAG_ARTICLEIDMTOL","���� ID (9 to 1)");
define("_MAG_TITLEZTOA","���� (Z to A)");
define("_MAG_TITLEATOZ","���� (A to Z)");
define("_MAG_DATEOLD","��������");
define("_MAG_DATENEW","���ڽ���");
define("_MAG_RATINGLTOH","��������");
define("_MAG_RATINGHTOL","���ֽ���");
define("_MAG_SUBMITLTOH","�ͳ�ʱ�� (�ɵ���ǰ)");
define("_MAG_SUBMITHTOL","�ͳ�ʱ�� (�µ���ǰ)");
define("_MAG_WEIGHT","������");
define("_MAG_POPULARITY1","����");
define("_MAG_CURSORTBY1","Ŀǰ����ʽ: ");
define("_MAG_RATING1","�ͳ�����!");
define("_MAG_RATING3","����");
define("_MAG_INTFILEAT","�� %s �и�����ĵ���");
define("_MAG_INTFILEFOUND","���� %s �ҵ�һ������ĵ���");
define("_MAG_DESCRIPTION","��������");

define("_MAG_PUBLISHEDHOME","����");
define("_MAG_ARTSIZE","���´�С");
define("_MAG_NOPERM","��Ǹ,���ڱ�վ�������·���Ȩ��!");
define("_MAG_SELECTSUBSECTION","ѡ�����");
define("_MAG_READMORE","�Ķ�ȫ��...");
define("_MAG_LISTARTICLES","�����б�");

//Attached Files
define("_MAG_FEATUREDARTS", "�Ƽ�����");
define("_MAG_SECTIONLISTIN", "�������");
define("_MAG_CATNOTEXIST", "����,�˷��ಢ������!");
define("_MAG_CATNOPERM", "��Ǹ,��û������˷����Ȩ��!");
//Submission
define("_MAG_EDITSECTION", "��������");
define("_MAG_CREATEARTICLE", "׫д������");
define("_MAG_EDITNEWARTTITLE","�����±���");
define("_MAG_IN", "�ڷ�������ʾ: ");
define("_MAG_EDITSECTION2", "�����˷���: ");
define('_MAG_EDITARTICLETITLE', '���±���: ');
define("_MAG_EDITSUMMARY", "����ժҪ: ");
define("_MAG_OTHEROPTIONS", "�����༭ѡ��: ");
define("_MAG_EDITSUBTITLE","�����ӱ���: ");
define("_MAG_EDITMAINTEXT", "�༭����: ");
define("_MAG_EDITDISCODES", "��ʹ�� BB CODE");
define("_MAG_EDITDISAMILEY", "��ʹ�ñ���ͼʾ");
define("_MAG_EDITDISHTML", "�ر� HTML �﷨");
define("_MAG_MODIFYARTICLE", "�޸�����: ");
define("_MAG_MOVETO", "�����˷���: ");
define("_MAG_MODIFY", "�޸�");
define("_MAG_DELETE", "ɾ��");

//Files
define("_MAG_FILES_CREATE","���ӵ���");
define("_MAG_FILES_UPLOAD","�ϴ�����: ");
define("_MAG_FILES_TITLE", "��������: ");
define("_MAG_FILES_DESCRIPT","��������: ");
define("_MAG_FILES_SEARCHTEXT","�����ؼ���: ");
define("_MAG_FILES_ATTACHED","�ļ�����: ");
define("_MAG_FILES_DELETE_SELECTED","ɾ����ѡ������ص���");

//constants added by frankblack
define("_MAG_URLFORSTORY","���ĵ� URL ��: ");
define("_MAG_THISCOMESFROM","���ĳ���: %s");

define("_MAG_FILETITLE","��������");
//define("_MAG_WEBMASTERACKNOW", "�ӻ�ʧ���ر�: ");
//define("_MAG_WEBMASTERCONFIRM", "ʧ���ر�ȷ��: ");
define("_MAG_RESOURCEID", "�������");
define("_MAG_REPORTER", "ͨ����");
define("_MAG_DATEREPORTED", "ͨ������");
define("_MAG_RESOURCEREPORTED", "лл������������ݵ����Ѿ��޷�����, ������֮ǰ�Ѿ���ʹ�����������ʧ������, Ϊ�˱����˷���Դ, ���ǽ������ظ���¼ͬһ�ݵ�����ʧ������.");
//define("_MAG_THANKSFORREPORTING", "лл���������ǹ�������(����)�Ѿ�ʧȥ����, վ�������ٴ������Ļر���");
define("_MAG_THISFILEDOESNOTEXIST", "����: ����������!");
define("_MAG_NEWSARCHIVES","��������");
define("_MAG_ACTIONS","����");
define("_MAG_THEREAREINTOTAL","�ܹ��� %s ƪ����");
define("_MAG_SENDSTORY","ת�ĺ���");
define("_MAG_INTARTICLE","���� %s ����Ȥ����");
define("_MAG_INTARTFOUND","���� %s �ҵ�һƪ��Ȥ������");
define("_MAG_COPYRIGHT","Copyright");
define("_MAG_ERROR","д�����Ͽⷢ������");
define("_MAG_NOTIFYSBJCT","������վ�����ṩ������"); // Notification mail subject
define("_MAG_NOTIFYMSG","��!������վ�����ṩ������"); // Notification mail message
define("_MAG_VISIT","��������վ: ");
define("_MAG_RELATEDLINKS","�������");
define("_MAG_SPONSER", "�������");

define("_MAG_ROOT_CATEGORY","--�������--");
define("_MAG_NO_FORUM","ѡ��������");
define("_MAG_NO_FORM","ѡ���");
define("_MAG_NO_STORE","ѡ����Ʒ");
define("_MAG_NO_SIGN","ѡ��");
define("_MAG_CHECKIN_FAILED","���ʧ��");
define("_MAG_SHOWARTAMOUNT","��ҳ��ʾ�� %s - %s ƪ����, ���� %s ƪ����");

define("_MAG_SUBSECTION","�����:");
define("_MAG_QKMENU","���ٵ���");
define("_MAG_SELECTEDITOR","ѡ��༭��");
define("_MAG_RB","<a href='http://singchi.no-ip.com/hack/'><img src='./images/magazine.png'></a>");
define("_MAG_RELATEDINTRO","�����Ѷ");
define("_MAG_INTRO_BOOK","�鼮");
define("_MAG_INTRO_LYRIC","���");
?>
