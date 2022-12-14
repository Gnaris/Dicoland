<?php
# ***** BEGIN LICENSE BLOCK *****
# This file is part of DotClear.
# Copyright (c) 2004 Olivier Meunier and contributors. All rights
# reserved.
#
# DotClear is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# DotClear is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with DotClear; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
# ***** END LICENSE BLOCK *****
/*DEBUG_FLAG
error_reporting(E_ALL);
//*/

# If you renamed your "ecrire" folder
if (!defined('DC_ECRIRE')) {
	define('DC_ECRIRE','ecrire');
}

if(function_exists('ini_set'))
{
	@ini_set('session.use_cookies','1');
	@ini_set('session.use_only_cookies','1');
	@ini_set('url_rewriter.tags','');
	@ini_set('session.use_trans_sid','0');
}
session_start();
session_name("dicoland");

#Version de DotClear
if (file_exists(dirname(__FILE__).'/../VERSION')) {
	define('DC_VERSION',trim(implode('',file(dirname(__FILE__).'/../VERSION'))));
} else {
	define('DC_VERSION','?');
}

if (defined('STEP') &&
(empty($_SESSION['sess_step']) || $_SESSION['sess_step'] != STEP)) {
	header('Location: index.php');
	exit;
}

require_once dirname(__FILE__).'/../inc/magic_strip.php';

require_once dirname(__FILE__).'/../inc/classes/class.mysql.php';
require_once dirname(__FILE__).'/../inc/classes/class.blog.php';
require_once dirname(__FILE__).'/../inc/classes/class.checklist.php';
require_once dirname(__FILE__).'/../inc/classes/class.xmlsql.php';
require_once dirname(__FILE__).'/../inc/classes/class.ini.file.php';
require_once dirname(__FILE__).'/../inc/libs/lib.form.php';
require_once dirname(__FILE__).'/../inc/libs/lib.util.php';
require_once dirname(__FILE__).'/../inc/libs/lib.files.php';
require_once dirname(__FILE__).'/../inc/libs/lib.l10n.php';


if (!empty($_POST['lang'])) {
	$_SESSION['sess_lang'] = $_POST['lang'];
}
if (!empty($_POST['encoding'])) {
	$_SESSION['encoding'] = $_POST['encoding'];
}

if (!empty($_SESSION['encoding']) && $_SESSION['encoding'] == 'UTF-8') {
	define('ENCODING','UTF-8');
	define('LANG_PREFIX','-utf8');
} else {
	define('ENCODING','ISO-8859-1');
	define('LANG_PREFIX','');
}

l10n::init();
if (!empty($_SESSION['sess_lang'])) {
	l10n::set(dirname(__FILE__).'/../l10n/'.$_SESSION['sess_lang'].LANG_PREFIX.'/install');
}

if (file_exists(dirname(__FILE__).'/../conf/config.php') && !defined('NOT_CHECK_CONFIG')) {
	header('Content-Type: text/plain');
	echo __('This weblog is still installed. You must remove conf/config.php first');
	exit;
}

# Conf

$img_chk_on = '../'.DC_ECRIRE.'/images/check_on.png';
$img_chk_off = '../'.DC_ECRIRE.'/images/check_off.png';
$img_chk_wrn = '../'.DC_ECRIRE.'/images/check_wrn.png';

?>
