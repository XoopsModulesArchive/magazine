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

define("_MAG_NOARTICLE", "��p, �o�g�峹�ä��s�b");
define("_MAG_NODESCRIPT","�Ӥ��L�y�z�C");
define("_MAG_UPLOADED","�W��: ");
define("_MAG_FILEMIMETYPE","�ɮ�����");

define("_MAG_ISNEW", "�̷s�峹");
define("_MAG_ISUPDATED", "�̪��s");
define("_MAG_ARTICLENOPERM", "��p, �z�S���������v���\�����峹");
define("_MAG_BACK","��^");
define("_MAG_CANCEL","����");
define("_MAG_SUBMIT","�T�w�e�X");
define("_MAG_SUBMITBROKEN", "�e�X���s���i");
define("_MAG_PRINTERFRIENDLY","�͵��C�L");
define("_MAG_MAKEPDF","��X�� PDF �榡");
define("_MAG_NOTIFYPUBLISH","�q�L�f�֮ɥH Email �q����");
define("_MAG_NOSTORY","��p,��Ʈw���L�o��즹�峹");
define("_MAG_RETURN2INDEX","Home");
define("_MAG_BACK2CAT","List");
define("_MAG_BACK2","Back");
define("_MAG_BACK2TOP","Top");
define("_MAG_TELLAFRIEND","��H�n��");
define("_MAG_TITLE","�峹���D");
//define("_MAG_HOMEPAGEC", "�峹���D: ");
define("_MAG_CATEGORY","����");
define("_MAG_ARTICLES","�峹��");
define("_MAG_ABOUTAUTHER","�@�̤G�T��");
define("_MAG_AUTHER","�@��");
define("_MAG_FROM","�Ӧ�");
define("_MAG_INTEREST","����");
define("_MAG_ARTINFO","�峹��T");
define("_MAG_VIEWS","�H��");
define("_MAG_TIMES","��");
define("_MAG_DATE","���");
define("_MAG_NUMVOTES","�����H��");
define("_MAG_FILESIZE","�ɮפj�p");
define("_MAG_VERSION","����");
define("_MAG_FILES","����");
define("_MAG_TOPICC","����");
define("_MAG_ARTICLE","�峹");
define("_MAG_AUTH","�@��");
define("_MAG_PUBLISHER","�o����");
define("_MAG_LASTUPDATE","�̫��s");
define("_MAG_EDITDISCUSSINFORUM", "�s�W�Q�װϳs���H");
define("_MAG_EDITDISCUSSINFORM", "�s�W���s���H");
define("_MAG_EDITDISCUSSINSTORE", "�s�W�ӫ~�s���H");
define("_MAG_EDITDISCUSSINSIGN", "�s�W���ʳs���H");
//define("_MAG_BROKENREPORT", "���X���s�^��");
define("_MAG_BEFORESUBMIT", "�b�e�X�ɮץ��s���i���e, �бz�A���T�{�^�����ɮ׬O�_���T, �����N���t�ˬd�z�����i, ���F�w���Ҷq�ڭ̱N�|�O���z�� IP ��}�H�Ѭd��.");
define("_MAG_SUBMITDATE", "�o����");
define("_MAG_NOFILE","�o�g�峹�|�L������[�ɮ�.");
define("_MAG_FILEID","���� ID: ");
define("_MAG_FILEREALNAME","����W��: ");
define("_MAG_ARTICLEID","�峹 ID: ");
define("_MAG_OTHERARTICLES","��L�峹");
define("_MAG_PAGETITLE","�����ؿ�");
define("_MAG_PAGES","����");
define("_MAG_RELATEDARTS", "�����峹");
define("_MAG_RELATEDNEWS", "�����s�D");
define("_MAG_INFORUMS", "%s �������Q�װ�");
define("_MAG_INFORMS", "%s ���������");
define("_MAG_INSTORE", "%s �������ӫ~");
define("_MAG_INSIGN", "%s ����������");
define("_MAG_VOTEAPPRE","�z�������w�g����.");
define("_MAG_THANKYOU","�P�±z��Ŭ� %s ����");
define("_MAG_VOTEONCE","��p, �o�g�峹�A�w�g�����L�F, �C�g�峹�u������@��.");
define("_MAG_NORATING","�Х���ܵ���.");
//define("_MAG_THANKSFORHELP","���§A�^�����~���Ī��s��.");
define("_MAG_THANKSFORINFO","���±z���Ѹ�T,�ڭ̷|�ɧֳB�z.");
define("_MAG_THANKS","���±z���Ѥ�. ");
define("_MAG_THANKS_APPROVE","���±z�o���F�s���峹, �ڭ̱N�b�̵u���ɶ����i��f��.");
define("_MAG_ALREADYREPORTED","���±z���^��, ���o���ɮפw�g���H���X���i.");
define("_MAG_CANTVOTEOWN","�Ф��n��z�ۤv�o���峹����.<br>�Ҧ��������ʧ@���N�Q�O���P�f��.");
define("_MAG_RANK","�Ʀ�");
define("_MAG_HITS","�H��");
define("_MAG_HITS2","�̷Ӿ\�����ƱƧ�");
define("_MAG_RATING","����");
define("_MAG_RATING2","�̷ӵ������C�Ƨ�");
define("_MAG_AUTH2","�̷ӧ@�̱b���Ƨ�");
define("_MAG_VOTE","����");
define("_MAG_BROKENREPORTED","�ɮץ��s���i");

//define("_MAG_FORSECURITY","���F�w���Ҷq�ڭ̱N�|�O���z�� IP ��}�H�Ѭd��.");
define("_MAG_DOWNLOADS","�U��");
define("_MAG_COMMENT","����: ");
define("_MAG_RATED","�ثe����: ");
define("_MAG_VOTES","����");
define("_MAG_SORTBY1","�Ƨ�: ");
define("_MAG_TITLE1","���D");
define("_MAG_DATE1","���");
define("_MAG_POPULARITYLTOM","�H��ɾ�");
define("_MAG_POPULARITYMTOL","�H�𭰾�");
define("_MAG_ARTICLEIDLTOM","�峹 ID (1 to 9)");
define("_MAG_ARTICLEIDMTOL","�峹 ID (9 to 1)");
define("_MAG_TITLEZTOA","���D (Z to A)");
define("_MAG_TITLEATOZ","���D (A to Z)");
define("_MAG_DATEOLD","����ɾ�");
define("_MAG_DATENEW","�������");
define("_MAG_RATINGLTOH","�����ɾ�");
define("_MAG_RATINGHTOL","��������");
define("_MAG_SUBMITLTOH","�e�X�ɶ� (�ª��b�e)");
define("_MAG_SUBMITHTOL","�e�X�ɶ� (�s���b�e)");
define("_MAG_WEIGHT","�Ƨǽs��");
define("_MAG_POPULARITY1","�H��");
define("_MAG_CURSORTBY1","�ثe�ƧǤ覡: ");
define("_MAG_RATING1","�e�X����!");
define("_MAG_RATING3","����");
define("_MAG_INTFILEAT","�b %s ���Ӥ������ɮ�");
define("_MAG_INTFILEFOUND","�ڦb %s ���@�Ӥ������ɮ�");
define("_MAG_DESCRIPTION","�峹�y�z");

define("_MAG_PUBLISHEDHOME","���");
define("_MAG_ARTSIZE","�峹�j�p");
define("_MAG_NOPERM","��p,�z�b�����|�L�峹�o���v��!");
define("_MAG_SELECTSUBSECTION","��ܤ���");
define("_MAG_READMORE","�\Ū����...");
define("_MAG_LISTARTICLES","�峹�C��");

//Attached Files
define("_MAG_FEATUREDARTS", "���˨Χ@");
define("_MAG_SECTIONLISTIN", "������C");
define("_MAG_CATNOTEXIST", "���~,�������ä��s�b!");
define("_MAG_CATNOPERM", "��p,�z�S���s�����������v��!");
//Submission
define("_MAG_EDITSECTION", "���ݤ���");
define("_MAG_CREATEARTICLE", "���g�s�峹");
define("_MAG_EDITNEWARTTITLE","�s�峹���D");
define("_MAG_IN", "����������: ");
define("_MAG_EDITSECTION2", "���ܦ�����: ");
define('_MAG_EDITARTICLETITLE', '�峹���D: ');
define("_MAG_EDITSUMMARY", "�峹�K�n: ");
define("_MAG_OTHEROPTIONS", "��L�s��ﶵ: ");
define("_MAG_EDITSUBTITLE","�峹�l���D: ");
define("_MAG_EDITMAINTEXT", "�s�褺��: ");
define("_MAG_EDITDISCODES", "���ϥ� BB CODE");
define("_MAG_EDITDISAMILEY", "���ϥΪ��ϥ�");
define("_MAG_EDITDISHTML", "���� HTML �y�k");
define("_MAG_MODIFYARTICLE", "�ק�峹: ");
define("_MAG_MOVETO", "���ܦ�����: ");
define("_MAG_MODIFY", "�ק�");
define("_MAG_DELETE", "�R��");

//Files
define("_MAG_FILES_CREATE","���[�ɮ�");
define("_MAG_FILES_UPLOAD","�W�Ǫ���: ");
define("_MAG_FILES_TITLE", "������D: ");
define("_MAG_FILES_DESCRIPT","����y�z: ");
define("_MAG_FILES_SEARCHTEXT","��������r: ");
define("_MAG_FILES_ATTACHED","���U��: ");
define("_MAG_FILES_DELETE_SELECTED","�R���ҿ�ܪ��U���ɮ�");

//constants added by frankblack
define("_MAG_URLFORSTORY","���媺 URL �O: ");
define("_MAG_THISCOMESFROM","����X�B: %s");

define("_MAG_FILETITLE","�ɮצW��");
//define("_MAG_WEBMASTERACKNOW", "���򥢳s�^��: ");
//define("_MAG_WEBMASTERCONFIRM", "���s�^���T�{: ");
define("_MAG_RESOURCEID", "�ɮ׽s��");
define("_MAG_REPORTER", "�q����");
define("_MAG_DATEREPORTED", "�q�����");
define("_MAG_RESOURCEREPORTED", "���±z�i�D�ڭ̳o���ɮפw�g�L�k�U��, ���b�z���e�w�g���ϥΪ̴��X�ɮץ��s���i, ���F�קK���O�귽, �ڭ̱N���b���Ƭ����P�@���ɮת����s���i.");
//define("_MAG_THANKSFORREPORTING", "���±z�i�D�ڭ�����峹(�ɮ�)�w�g���h�s��, �����N�ɳt�B�z�z���^���C");
define("_MAG_THISFILEDOESNOTEXIST", "���~: �ɮפ��s�b!");
define("_MAG_NEWSARCHIVES","����峹");
define("_MAG_ACTIONS","�ʧ@");
define("_MAG_THEREAREINTOTAL","�`�@�� %s �g�峹");
define("_MAG_SENDSTORY","��H�n��");
define("_MAG_INTARTICLE","�Ӧ� %s ������峹");
define("_MAG_INTARTFOUND","�ڦb %s ���@�g���쪺�峹");
define("_MAG_COPYRIGHT","Copyright");
define("_MAG_ERROR","�g�J��Ʈw�o�Ϳ��~");
define("_MAG_NOTIFYSBJCT","�z���������H���ѷs�峹"); // Notification mail subject
define("_MAG_NOTIFYMSG","�K!�z���������H���ѷs�峹"); // Notification mail message
define("_MAG_VISIT","�y�X��������: ");
define("_MAG_RELATEDLINKS","�����s��");
define("_MAG_SPONSER", "�٧U�s�i");

define("_MAG_ROOT_CATEGORY","--�峹���O--");
define("_MAG_NO_FORUM","��ܰQ�װ�");
define("_MAG_NO_FORM","��ܪ��");
define("_MAG_NO_STORE","��ܰӫ~");
define("_MAG_NO_SIGN","��ܬ���");
define("_MAG_CHECKIN_FAILED","�ˬd����");
define("_MAG_SHOWARTAMOUNT","������ܲ� %s - %s �g�峹, �@�� %s �g�峹");

define("_MAG_SUBSECTION","�l���O:");
define("_MAG_QKMENU","�ֳt����");
define("_MAG_SELECTEDITOR","��ܽs�边");
define("_MAG_RB","<a href='http://singchi.no-ip.com/hack/'><img src='./images/magazine.png'></a>");
define("_MAG_RELATEDINTRO","������T");
define("_MAG_INTRO_BOOK","���y");
define("_MAG_INTRO_LYRIC","�q��");
?>
