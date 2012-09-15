<?php
require('includes/functions.php');
require('includes/variables.php');

// Session start
ini_set('session.use_cookies', '1');
ini_set('session.use_only_cookies', '1'); // PHP >= 4.3
ini_set('session.use_trans_sid', '0');
ini_set('url_rewriter.tags', '');
session_start();

if (isset($_COOKIE['wa_sch_edit_lang']))
{
	if ($_COOKIE['wa_sch_edit_lang'] === 'fr')
	{
	include('includes/strings/fr.php');
	$language = 'fr';
	}
	else
	{
	include('includes/strings/en.php');
	$language = 'en';
	}
}
else if (isset($_SESSION['wa_sch_edit_lang']))
{
	if ($_SESSION['wa_sch_edit_lang'] === 'fr')
	{
	include('includes/strings/fr.php');
	$language = 'fr';
	}
	else
	{
	include('includes/strings/en.php');
	$language = 'en';
	}
}
else
{
include('includes/strings/en.php');
$language = 'en';
}

$parent_directory = 2;
$titre = 'Worms Armageddon - '.$str['sch_editor'].' - '.$str['sch_editor_changelog'];
$jeu = $str['category'];

//Chemin de fer (30 ao�t 2012)
$lien1 = array($str['index'], '../../index.php');
$lien2 = array('Worms Armageddon', '../index.php');
$lien3 = array($str['sch_editor'], 'index.php');
$page_actuelle = $str['sch_editor_changelog'];

include('../../includes/haut-sans-session-start.php');
include('../../includes/menu.php');
?>
<h1><?php echo $str['sch_editor_changelog']; ?></h1>
<p><?php echo $str['sch_editor_changelog_intro']; ?></p>
<h4>0.3.0 - <?php
if ($language == 'fr')
{
echo '14 septembre 2012';
}
else
{
echo 'September 14th, 2012';
}
 ?></h4>
<ul>
	<li><?php echo $str['sch_editor_changelog_v0_3_0_item1']; ?></li>
</ul>
<h4>0.2.1 - <?php
if ($language == 'fr')
{
echo '3 septembre 2012';
}
else
{
echo 'September 3rd, 2012';
}
 ?></h4>
<ul>
	<li><?php echo $str['sch_editor_changelog_v0_2_1_item1']; ?></li>
</ul>
<h4>0.2.0 - <?php
if ($language == 'fr')
{
echo '1<sup>er</sup> septembre 2012';
}
else
{
echo 'September 1st, 2012';
}
 ?></h4>
<ul>
	<li><?php echo $str['sch_editor_changelog_v0_2_0_item1']; ?></li>
	<li><?php echo $str['sch_editor_changelog_v0_2_0_item2']; ?></li>
</ul>
<h4>0.1.2 - <?php
if ($language == 'fr')
{
echo '31 ao�t 2012';
}
else
{
echo 'August 31st, 2012';
}
 ?></h4>
<ul>
	<li><?php echo $str['sch_editor_changelog_v0_1_2_item1']; ?></li>
	<li><?php echo $str['sch_editor_changelog_v0_1_2_item2']; ?></li>
</ul>
<h4>0.1.1 - <?php
if ($language == 'fr')
{
echo '30 ao�t 2012';
}
else
{
echo 'August 30th, 2012';
}
 ?></h4>
<ul>
	<li><?php echo $str['sch_editor_changelog_v0_1_1_item1']; ?></li>
	<li><?php echo $str['sch_editor_changelog_v0_1_1_item2']; ?></li>
</ul>
<h4>0.1.0 - <?php
if ($language == 'fr')
{
echo '29 ao�t 2012';
}
else
{
echo 'August 29th, 2012';
}
 ?></h4>
<ul>
	<li><?php echo $str['sch_editor_changelog_v0_1_0_item1']; ?></li>
</ul>
<?php	
include('includes/scheme-editor-bottom.php');
?>