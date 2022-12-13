<?php /* Smarty version 2.6.31, created on 2019-10-30 17:56:47
         compiled from it/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'utf8_encode', 'it/header.tpl', 12, false),array('modifier', 'htmlentities', 'it/header.tpl', 25, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
   <meta http-equiv="X-UA-Compatible" content="IE=8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <?php if ($this->_tpl_vars['showproduct']['nom']): ?>
    <title><?php echo ((is_array($_tmp=$this->_tpl_vars['showproduct']['nom'])) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
</title>
  <?php elseif ($this->_tpl_vars['nomvitrine'] == 1): ?>
    <title><?php echo $this->_tpl_vars['namesite']; ?>
 - La casa del dizionario specializzato Oltre 4000 opere
  per linguisti e traduttori!</title>
  <?php else: ?>
    <title><?php echo $this->_tpl_vars['namesite']; ?>
</title>
  <?php endif; ?>
  <meta name="revisit-after" content="10 days" />
  <meta name="robots" content="index,follow" />
  <meta name="DC.title" content="Dicoland" />
  <meta name="description" content="Tous les dictionnaires spécialisés.
  Trouvez plus de 4000 ouvrages pour traducteurs et linguistes." />
<?php if (isset ( $this->_tpl_vars['meta'] )): ?>
	<meta name="keywords" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['meta'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)))) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
" />
<?php else: ?>
  <meta name="keywords" content="Dicoland.com, lmdd, traduction,dictionnaire,
	spécialisé, dictionary, maison du dictionnaire, dico, traducteur, linguiste,
	livre, phonétique, étymologie,
dictionaire, langues, traducteur, dicoland, dico-land, terminologique,
terminologie, onomatopées, suffixe, prononciation, abréviations, anglicisme,
synonymes, synonyme, medical, francophone, synonimes, technique, philosophique,
japonais, traduction, vidal, petit robert, droit, éthymologique, philosophie,
économie, commercial, traducteur, collins, colins, argot, bilingue, trilingue,
unilingue, franco, culinaire, économie, allemend, langue, francaise, biblique,
medicaments, proverbes, finance, cinéma, mots croisés, flamand, biologie,
cuisine, sinonyme, mythologique, signification, traduire, définitions, littré,
harrap's, orthographe, encyclopedique, encyclopedie, françai, la rousse, grand,
antonyme, francophone, antonymes, ictionnaire, dictionn, léxique, homonyme,
littre, thésaurus, dictionaire, termes, usuel, scientifique, acronyme,
juridique, sens, larouss, verlan, abréviation, harraps, vocabulaire, universel,
acronymes, anglicismes, dicionaire, dicofr, dicorama, cyberdico, monolingue,
multidictionnaire" />
<?php endif; ?>
  <style type="text/css" media="screen">@import "<?php echo $this->_tpl_vars['urlsite']; ?>
css/style_globale.css";</style>
  	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.corner.js"></script>
<script type="text/javascript" src="js/script.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->_tpl_vars['urlsite']; ?>
favicon.ico" />
	<link rel="icon" type="image/png" href="<?php echo $this->_tpl_vars['urlsite']; ?>
favicon.png" />
</head>
<body>
<?php echo '
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push([\'_setAccount\', \'UA-15971834-1\']);
  _gaq.push([\'_trackPageview\']);

  (function() {
    var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
'; ?>

<div id="all">
  <div id="mininavi">
    <img src="<?php echo $this->_tpl_vars['urlsite']; ?>
css/caddy.gif" alt="" /><a href="<?php echo $this->_tpl_vars['urlsite']; ?>
index.php?page=showpanier">Carrello</a> |
    <a href="<?php echo $this->_tpl_vars['urlsite']; ?>
index.php?page=myaccount">Il mio conto</a> |
    <a href="<?php echo $this->_tpl_vars['urlsite']; ?>
index.php?page=aide">Aiuto</a>
    <?php if ($_SESSION['id_membre']): ?>| <a href="<?php echo $this->_tpl_vars['urlsite']; ?>
logout.php">Esci</a><?php endif; ?>
		<div id='lang'>
			<a href='<?php echo $this->_tpl_vars['originalurl']; ?>
chglang.php?aplan=fr' title='Français'><img src='<?php echo $this->_tpl_vars['urlsite']; ?>
img/flag_fr.gif' alt='Français' /></a>
			<a href='<?php echo $this->_tpl_vars['originalurl']; ?>
chglang.php?aplan=en' title='English'><img src='<?php echo $this->_tpl_vars['urlsite']; ?>
img/flag_en.gif' alt='English' /></a>
			<a href='<?php echo $this->_tpl_vars['originalurl']; ?>
chglang.php?aplan=de' title='Deutsch'><img src='<?php echo $this->_tpl_vars['urlsite']; ?>
img/flag_de.gif' alt='Deutsch' /></a>
			<a href='<?php echo $this->_tpl_vars['originalurl']; ?>
chglang.php?aplan=es' title='Español'><img src='<?php echo $this->_tpl_vars['urlsite']; ?>
img/flag_es.gif' alt='Español' /></a>
			<a href='<?php echo $this->_tpl_vars['originalurl']; ?>
chglang.php?aplan=it' title='Italiano'><img src='<?php echo $this->_tpl_vars['urlsite']; ?>
img/flag_it.gif' alt='Italiano' /></a>
		</div>
  </div>

	<div class="header">
		<?php if ($this->_tpl_vars['showproduct']['nom']): ?>
			<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['showproduct']['nom'])) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
</h1>
		<?php elseif ($this->_tpl_vars['nomvitrine'] == 1): ?>
			<h1><?php echo $this->_tpl_vars['namesite']; ?>
 - La casa del dizionario specializzato Oltre 4000 opere
  per linguisti e traduttori!</h1>
		<?php else: ?>
			<h1><?php echo $this->_tpl_vars['namesite']; ?>
</h1>
		<?php endif; ?>
		<a href="<?php echo $this->_tpl_vars['urlsite']; ?>
index.php" id="logo"></a>
		<p>La boutique dei dizionari specializzati. Metodi di lingue, CD-ROM, guide,
		vocabolari, lessici, terminologia... Tutto l'indispensabile! </p>
		<ul>
			<li><a href="#innerleft">Vai al menu</a></li>
			<li><a href="#search">Vai alla ricerca</a></li>
			<li><a href="#innercenter">Vai al contenuto</a></li>
		</ul>
	</div>
</div>
<div class="wrapper">

  <div class="wide">
    <div id="nav">
      <ul>
        <li<?php if (! isset ( $_GET['page'] )): ?> id="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['urlsite']; ?>
index.php">Home</a></li>
        <li<?php if ($_GET['page'] == 'catalogue'): ?> id="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['urlsite']; ?>
catalogue-dictionnaire-et-lexique-c0">Catalogo</a></li>
        <li<?php if ($_GET['page'] == 'catediteur' && $this->_tpl_vars['show_catalogue_lmdd']): ?> id="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['urlsite']; ?>
catalogue-editeur-la-maison-du-dictionnaire-e12">La Maison du dictionnaire</a></li>
        <li<?php if ($_GET['page'] == 'catediteur' && $this->_tpl_vars['show_catalogue_mediqualis']): ?> id="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['urlsite']; ?>
catalogue-editeur-mediqualis-e0">Médiqualis</a></li>
        <li<?php if ($_GET['page'] == 'catalogue'): ?> id="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['urlsite']; ?>
E-Book-c351">E-Book</a></li>
        <li<?php if ($_GET['page'] == 'myaccount'): ?> id="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['urlsite']; ?>
index.php?page=myaccount">Il mio conto</a></li>
        <li<?php if ($_GET['page'] == 'showpanier'): ?> id="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['urlsite']; ?>
index.php?page=showpanier">Carrello</a></li>
        <li<?php if ($_GET['page'] == 'contact'): ?> id="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['urlsite']; ?>
index.php?page=contact">Contatti</a></li>
        <!-- <li<?php if ($_GET['page'] == 'blog'): ?> id="current"<?php endif; ?>><a href="http://www.dicoland.com/blog/">Blog</a></li> -->
      </ul>
                </div>
                <div id="search">
                  <form method="get" action="<?php echo $this->_tpl_vars['urlsite']; ?>
index.php">
                        <p>
												<input type="hidden" name="page" value="showresult" />
                        <label for="searchbar">Ricerca</label>
                        <input id="searchbar" name="quicksearch" type="text"
												value="<?php echo ((is_array($_tmp=$_GET['quicksearch'])) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
" />
                        <input type="image" alt="Go !" src="<?php echo $this->_tpl_vars['urlsite']; ?>
css/go.gif" name="quicksearch_submit" />
                        <a href="<?php echo $this->_tpl_vars['urlsite']; ?>
index.php?page=advancedsearch" id="advancedsearch">Ricerca avanzata</a>
                  </p>
                        </form>
                </div>
        </div>