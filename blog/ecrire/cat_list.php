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

require dirname(__FILE__).'/inc/prepend.php';
auth::check(5);

include dirname(__FILE__).'/inc/connexion.php';

$err = '';

# Reord
if (!empty($_GET['reord']))
{
	if ($blog->reordCats(false,true) === false) {
		$err = $blog->error(1);
	} else {
		header('Location: cat_list.php');
		exit;
	}
}

# Ord
if (!empty($_GET['ord']) && !empty($_GET['id']))
{
	$cat_id = $_GET['id'];
	$ord = ($_GET['ord'] == 'up') ? '+' : '-';
	
	if ($blog->ordCat($cat_id,$ord) === false) {
		$err = $blog->error(1);
	} else {
		header('Location: cat_list.php');
		exit;
	}
}

$mySubMenu->addItem('<strong>'.__('New category').'</strong>','categorie.php','images/ico_new.png',false);

openPage(__('Categories list'));
?>
<h2><?php echo __('Categories list'); ?></h2>

<?php
if ($err != '')
{
	echo '<div class="erreur"><p><strong>'.__('Error(s)').' :</strong></p>'.
		$err.'</div>';
}

$rsCat = $blog->getCat('','cat_ord');

if ($rsCat->isEmpty())
{
	echo '<p>'.__('No category yet').'</p>';
}
else
{
	while(!$rsCat->EOF())
	{
		$cat_id = $rsCat->field('cat_id');
		$cat_libelle = $rsCat->field('cat_libelle');
		$cat_nb_post = (integer) $rsCat->field('nb_post');
		
		echo '<div class="ligne clear">';
		echo '<h3 class="ligneTitre">'.$cat_libelle.'</h3>';
		echo	'<p class="semi">';
		
		if ($rsCat->int_index > 0) {
			echo '<a href="cat_list.php?ord=up&amp;id='.$cat_id.'"><img src="images/arrow_up.png" '.
			'alt="'.sprintf(__('Move %s up'),$cat_libelle).'" /></a>&nbsp;&nbsp;';
		} else {
			echo '<img src="images/empty.png" alt="" width="12" />&nbsp;&nbsp;';
		}
		
		if ($rsCat->int_index+1 < $rsCat->nbRow()) {
			echo '<a href="cat_list.php?ord=down&amp;id='.$cat_id.'"><img src="images/arrow_down.png" '.
			'alt="'.sprintf(__('Move %s down'),$cat_libelle).'" /></a>';
		} else {
			echo '<img src="images/empty.png" alt="" width="12" />';
		}
		
		echo
		'&nbsp;&nbsp;<strong><a href="categorie.php?cat_id='.$cat_id.'">'.__('edit').'</a></strong> - ';
		
		
		if ($cat_nb_post > 0)
		{
			echo '<a href="index.php?cat_id='.$cat_id.'">'.
			(($cat_nb_post>1) ? sprintf(__('%d entries'),$cat_nb_post) : sprintf(__('%d entry'),$cat_nb_post)).
			'</a>';
		}
		else
		{
			echo '<a href="categorie.php?cat_id='.$cat_id.'&amp;del=1" '.
			' onclick="return window.confirm(\''.__('Are you sure you want to delete this category?').'\')">'.
			__('delete').'</a>';
		}
		echo '</p></div>';
		
		$rsCat->moveNext();
	}
	
	echo '<p><a href="cat_list.php?reord=1">'.__('Reorder categories').'</a></p>';
}
?>
<?php closePage(); ?>
