<div id="catalogue">

{if $smarty.get.idcat ne 0}
<h2>
    <span class="deco">></span>
    <span id='current_span'>
      <a href="{$urlsite}dictionnaire-et-lexique-c0">Catalogue par catégorie</a>
      {section name=uppercat loop=$uppercat}
        &#062; <a href="{$urlsite}{$uppercat[uppercat].id|categ_link:$uppercat[uppercat].nom}">{$uppercat[uppercat].nom|utf8_encode}</a>
      {/section}
    </span>
</h2>
  {if $categorie_precise}
  <div id="categ">
    <table>
    <tr>
    {section name=categorie_precise loop=$categorie_precise}
      {if $categorie_total > 30}
        {cycle name="plop2" values="<td><ul>,,,,,,,,,,,,,,,,,"}
      {elseif $categorie_total > 20}
        {cycle name="plop2" values="<td><ul>,,,,,,,,,,,,,"}
      {elseif $categorie_total > 10}
        {cycle name="plop2" values="<td><ul>,,,,,"}
      {elseif $categorie_total > 6}
        {cycle name="plop2" values="<td><ul>,,"}
      {else}
        {cycle name="plop2" values="<td><ul>,,,"}
      {/if}
      
      	<li><a href="{$urlsite}{$categorie_precise[categorie_precise].id|categ_link:$categorie_precise[categorie_precise].nom}">{$categorie_precise[categorie_precise].nom|utf8_encode}</a></li>
      {if $categorie_total > 30}
        {cycle name="plop" values=",,,,,,,,,,,,,,,,,</ul></td>"}
      {elseif $categorie_total > 20}
        {cycle name="plop" values=",,,,,,,,,,,,,</ul></td>"}
      {elseif $categorie_total > 10}
        {cycle name="plop" values=",,,,,</ul></td>"}
      {elseif $categorie_total > 6}
        {cycle name="plop" values=",,</ul></td>"}
      {else}
        {cycle name="plop" values=",,,</ul></td>"}
      {/if}

    {/section}
	</ul>
	</td>
    </tr>
    </table>
  </div>
  {/if}
{else}
  {if !$notitle}
    <h2><span class="deco">></span>Catalogue par catégorie</h2>
  {/if}
  <table id="tabcatalogue">
  <tr>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}abreviations-c1">Abréviations</a></h3>
    <a href="{$urlsite}sigles-c256">Sigles</a>
  </td>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}langues-d-asie-et-proche-orient-oceanie-c303">Langues d'Asie et Proche-Orient - Océanie</a></h3>
    <a href="{$urlsite}arameen-c23">Araméen</a>, <a href="{$urlsite}chinois-c65">Chinois</a>, <a href="{$urlsite}laotien.html-c167">Laotien</a>...
		<a href="{$urlsite}langues-d-asie-et-proche-orient-oceanie-c303">(Voir plus)
		</a>
  </td>
  </tr>
  <tr>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}administration-et-gestion-de-l-entreprise-c308">Administration et gestion de l'entreprise</a></h3>
    <a href="{$urlsite}communautes-europeennes-c70">Communautés Européennes</a>, <a href="{$urlsite}economie-c103">Economie</a>, <a href="{$urlsite}management-c181">Management</a>...
		<a href="{$urlsite}administration-et-gestion-de-l-entreprise-c308">(Voir plus)
		</a>  
  </td>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}langues-europeennes-europe-de-l-est-c300">Langues Européennes + Europe de l'Est</a></h3>
    <a href="{$urlsite}croate-c87">Croate</a>, <a href="{$urlsite}grec-c137">Grec</a>, <a href="{$urlsite}irlandais-c153">Irlandais</a>...
		<a href="{$urlsite}langues-europeennes-europe-de-l-est-c300">(Voir plus)</a>
  </td>
  </tr>
  <tr>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}batiment-travaux-publics-c305">Bâtiment - Travaux-Publics</a></h3>
    <a href="{$urlsite}architecture-c24">Architecture</a>, <a href="{$urlsite}domotique-c98">Domotique</a>, <a href="{$urlsite}mecanique-des-sols-c191">Mécanique des sols</a>...
		<a href="{$urlsite}batiment-travaux-publics-c305">(Voir plus)</a>
  </td>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}langues-indiennes-c301">Langues Indiennes</a></h3>
    <a href="{$urlsite}hindi-140">Hindi</a>, <a href="{$urlsite}nepali-c203">Népali</a>, <a href="{$urlsite}tibetain-c279">Tibétain</a>...
		<a href="{$urlsite}langues-indiennes-c301">(Voir plus)</a>  
  </td>
  </tr>
  <tr>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}dictionnaires-numeriques-c352">Dictionnaires Numériques</a></h3>
    <a href="{$urlsite}dictionnaires-electroniques-c312">Dictionnaires électroniques</a>, <a href="{$urlsite}E-Book-c351">E-Book</a>, <a href="{$urlsite}cd-rom-c59">CD-ROM</a>, <a href="{$urlsite}logiciel-c174">Logiciel</a>...
		<a href="{$urlsite}dictionnaires-electroniques-c312">(Voir plus)</a>  
  </td>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}langues-regionales-de-france-299">Langues régionales de France</a></h3>
    <a href="{$urlsite}alsacien-c12">Alsacien</a>, <a href="{$urlsite}occitan-c208">Occitan</a>, <a href="{$urlsite}savoyard-c250">Savoyard</a>...
		<a href="{$urlsite}langues-regionales-de-france-c299">(Voir plus)</a>
  </td>
  </tr>
  <tr>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}dictionnaires-techniques-generaux-c304">Dictionnaires techniques généraux</a></h3>
    <a href="{$urlsite}anglais-technique-c19">Anglais Technique</a>, <a href="{$urlsite}espagnol-technique-c116">Espagnol Technique</a>, <a href="{$urlsite}francais-technique-c125">Français Technique</a>...
		<a href="{$urlsite}dictionnaires-techniques-generaux-c304">(Voir plus)</a>
  </td>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}sciences-de-la-terre-c309">Sciences de la terre</a></h3>
    <a href="{$urlsite}botanique-50">Botanique</a>, <a href="{$urlsite}geographie-c133">Géographie</a>, <a href="{$urlsite}geologie-c134">Géologie</a>...
		<a href="{$urlsite}sciences-de-la-terre-c309">(Voir plus)</a>
  </td>
  </tr>
  <tr>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}industries-chimiques-c306">Industries chimiques</a></h3>
    <a href="{$urlsite}cosmetiques-c78">Cosmétiques</a>, <a href="{$urlsite}imprimerie-c149">Imprimerie</a>, <a href="{$urlsite}textile-c277">Textile</a>...
		<a href="{$urlsite}industries-chimiques-c306">(Voir plus)</a>  
  </td>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}sciences-de-la-vie-c310">Sciences de la vie</a></h3>
    <a href="{$urlsite}agro-alimentaire-c7">Agroalimentaire</a>, <a href="{$urlsite}genetique-c131">Génétique</a>, <a href="{$urlsite}zoologie.html-c297">Zoologie</a>...
		<a href="{$urlsite}sciences-de-la-vie-c310">(Voir plus)</a>
  </td>
  </tr>
  <tr>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}industries-diverses-c307">Industries diverses</a></h3>
    <a href="{$urlsite}arts-spectacles-c28">Arts-Spectacles</a>, <a href="{$urlsite}sports-c262">Sports</a>, <a href="{$urlsite}tourisme-c283">Tourisme</a>...
		<a href="{$urlsite}industries-diverses-c307">(Voir plus)</a>
  </td>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}sciences-physiques-c311">Sciences physiques</a></h3>
    <a href="{$urlsite}chimie-c64">Chimie</a>, <a href="{$urlsite}electronique-c108">Electronique</a>, <a href="{$urlsite}optique-c209">Optique</a>...
		<a href="{$urlsite}sciences-physiques-c311">(Voir plus)</a> 
  </td>
  </tr>
  <tr>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}langue-francaise-c166">Langue Française</a></h3>
    <a href="{$urlsite}analogie-francais-c16">Analogie</a>, <a href="{$urlsite}etymologie-francais-c119">Etymologie</a>, <a href="{$urlsite}linguistique-francais-c170">Linguistique</a>...
		<a href="{$urlsite}langue-francaise-c166">(Voir plus)</a> 
  </td>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}terminologie-c275">Terminologie</a></h3>
    <a href="{$urlsite}divers-c95">Divers</a>...
  </td>
  </tr>
  <tr>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}langues-africaines-c302">Langues Africaines</a></h3>
    <a href="{$urlsite}afrikaans-5">Afrikaans</a>, <a href="{$urlsite}swahili-c266">Swahili</a>, <a href="{$urlsite}wolof-c294">Wolof</a>...
		<a href="{$urlsite}langues-africaines-c302">(Voir plus)</a>
  </td>
  <td>
    <h3><img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}transports-c285">Transports</a></h3>
    <a href="{$urlsite}aeronautique-c4">Aéronautique</a>, <a href="{$urlsite}automobile-c31">Automobile</a>, <a href="{$urlsite}marine-c184">Marine</a>...
		<a href="{$urlsite}transports-c285">(Voir plus)</a>
  </td>
  </tr>
  </table>
  
{*
  {section name=categorie loop=$categorie}
  	 <h3><a href="{$urlsite}catalogue-{$categorie[categorie].id}-a.html">{$categorie[categorie].nom|utf8_encode}</a></h3>
      {section name=subcateg loop=$subcateg}
        {if $subcateg[subcateg].parent == $categorie[categorie].id}
    	   <h4><a href="{$urlsite}catalogue-{$subcateg[subcateg].id}-a.html">{$subcateg[subcateg].nom|utf8_encode}</a></h4>
        {/if}
      {/section}
  {/section}
*}
</div>

<div id="catalogue2">
{if $show_liste_editeurs_dans_catalogue}
<h2><span class="deco">></span>Catalogue par éditeur</h2><br />
    <table>
      {section name=tab_editeurs loop=$tab_editeurs}
		  <tr>
		  <td>
       <img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}catalogue-editeur-{$tab_editeurs[tab_editeurs].nom}-e{$tab_editeurs[tab_editeurs].id_editeur|urlencode}"><b>{$tab_editeurs[tab_editeurs].nom|utf8_encode|strtolower|ucwords}</b></a>
       {if $show_details == "1"} ({$tab_editeurs[tab_editeurs].nbr_online_products} produits){/if}
       <br />
      </td>  
			</tr>
      {/section}
    </table>
 
{*
<table border=1>
	{$smarty.section.tab_editeurs.total} éditeurs ont été trouvés : 
  {section name=tab_editeurs loop=$tab_editeurs step=2} 
  <tr> 
    {section name=td start=$smarty.section.tab_editeurs.index loop=$smarty.section.tab_editeurs.index+1} 
    <td>
    <img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}catalogue-editeur-{$tab_editeurs[tab_editeurs].nom}-e{$tab_editeurs[tab_editeurs].id_editeur|urlencode}"><b>{$tab_editeurs[tab_editeurs].nom|utf8_encode|strtolower|ucwords}</b></a>
    {if $show_details == "1"} ({$tab_editeurs[tab_editeurs].nbr_online_products} produits){/if}
    </td>      
    <td>
    <img src="{$urlsite}css/puce2.gif" alt="" /> <a href="{$urlsite}catalogue-editeur-{$tab_editeurs[tab_editeurs.index_next].nom}-e{$tab_editeurs[tab_editeurs.index_next].id_editeur|urlencode}"><b>{$tab_editeurs[tab_editeurs.index_next].nom|utf8_encode|strtolower|ucwords}</b></a>
    {if $show_details == "1"} ({$tab_editeurs[tab_editeurs.index_next].nbr_online_products} produits){/if}
    </td> 
    {/section} 
  </tr>
  {/section} 
</table> 
*}

    
{/if}
{/if}
</div>