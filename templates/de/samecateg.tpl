{if $samecateg}
<div id="samecateg">
  <div>
  	{section name=samecateg loop=$samecateg}
  	<dl class="float-left">
  		<dd>
        <span class="img-shadow">
          {if $samecateg[samecateg].img_type == "none"}
            <a href="{$urlsite}{$samecateg[samecateg].id_produit|product_link:$samecateg[samecateg].nom:$samecateg[samecateg].categorie}"><img src="{$urlsite}lang/{$applicationlang}/img/no-image.gif" alt="" /></a>
          {else}
            <a href="{$urlsite}{$samecateg[samecateg].id_produit|product_link:$samecateg[samecateg].nom:$samecateg[samecateg].categorie}"><img src="{$urlsite}picproduct/{$samecateg[samecateg].id_produit}_mini.{$samecateg[samecateg].img_type}" alt="" /></ahref="{$urlsite}{$samecateg[samecateg].id_produit|product_link:$samecateg[samecateg].nom:$samecateg[samecateg].categorie}">
          {/if}
        </span>
      </dd>
  		<dd><h2><a href="{$urlsite}{$samecateg[samecateg].id_produit|product_link:$samecateg[samecateg].nom:$samecateg[samecateg].categorie}">  {$samecateg[samecateg].nom|utf8_encode}</a></h2></dd>
  		<dd><em>{$samecateg[samecateg].auteur|utf8_encode}</em></dd>
      <dd>
      {if $samecateg[samecateg].rabais != '0.00' && $samecateg[samecateg].prix ne '0.00'}
        <span class='prix'>
        {if $smarty.session.ht  == "ht"}
          <strong>{$samecateg[samecateg].prix_rabais_ht}€ zzgl. MwSt ({$samecateg[samecateg].prix_rabais}€ einschl. MwSt)</strong>
        {else}
          <strong>{$samecateg[samecateg].prix_rabais}€ einschl. MwSt ({$samecateg[samecateg].prix_rabais_ht}€ zzgl. MwSt)</strong>
        {/if}
        </span>
      {elseif $samecateg[samecateg].prix ne '0.00'}
        <span class='prix'>
        {if $smarty.session.ht  == "ht"}
      		<strong>{$samecateg[samecateg].prix_ht}€ zzgl. MwSt({$samecateg[samecateg].prix}€ einschl. MwSt)</strong>
        {else}
      		<strong>{$samecateg[samecateg].prix}€ einschl. MwSt({$samecateg[samecateg].prix_ht}€ zzgl. MwSt)</strong>
        {/if}
        </span>
      {/if}
      </dd>
  	</dl>
  	{cycle values=",<div class='clear'></div>"}
  	{/section}
  </div>
	<span class="spacer"></span>
	<div id="nbpage">
	{if isset($link)}
		<br /><strong>Seiten</strong><br />
	{/if}

	{if isset($link_back)}
		{$link_back}vorige</a>
	{/if}
	{section name=link loop=$link}
		{$link[link].num}
	{/section}
	{if isset($link_next)}
		{$link_next}nächste</a>
	{/if}
	</div>


</div>
{/if}
