<?php
while(!is_file('wp-load.php')){
  if(is_dir('../')) chdir('../');
  else die('Error: Could not construct path to wp-load.php - please check <a href="http://mapsmarker.com/path-error">http://mapsmarker.com/path-error</a> for more details');
}
include( 'wp-load.php' );
if (get_option('leafletmapsmarker_update_info') == 'show') {
$lmm_version_old = get_option( 'leafletmapsmarker_version_before_update' );
$lmm_version_new = get_option( 'leafletmapsmarker_version' );

$text_a = __('Changelog for version %s','lmm');
$text_b = __('released on','lmm');
$text_c = __('blog post with more details about this release','lmm');
$text_d = __('Translation updates','lmm');
$text_e = __('In case you want to help with translations, please visit the <a href="%1s" target="_blank">web-based translation plattform</a>','lmm');
$text_f = __('Known issues','lmm');
$text_h = esc_attr__('Upgrade to pro version for even more features - click here to find out how you can start a free 30-day-trial easily','lmm');
$new = '<img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-new.png">';
$changed = '<img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-changed.png">';
$fixed = '<img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-fixed.png">';
$transl = '<img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-translations.png">';
$issue = '<img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-know-issues.png">';
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Changelog for Leaflet Maps Marker</title>
<style type="text/css">
<?php 
if ( function_exists( 'is_rtl' ) && is_rtl() ) {
	echo 'body{font-family:sans-serif;font-size:12px;line-height:1.4em;margin:0;padding:0 0 0 5px;direction: rtl;unicode-bidi: embed;}'.PHP_EOL;
} else {
	echo 'body{font-family:sans-serif;font-size:12px;line-height:1.4em;margin:0;padding:0 0 0 5px;}'.PHP_EOL;
} ?>
table{line-height:.7em;font-size:12px;font-family:sans-serif}
td{line-height:1.1em}
.updated{background-color:#FFFFE0;padding:10px}
a{color:#21759B;text-decoration:none}
a:hover,a:active,a:focus{color:#D54E21}
hr{color:#E6DB55}
</style></head><body>
<?php
/*****************************************************************************************/
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.9.3') . '</strong> - ' . $text_b . ' 11.10.2014 (<a href="https://www.mapsmarker.com/v3.9.3" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
support for accent folding for API and importer geocoding calls (to better support special chars)
</td></tr>
<tr><td>' . $new . '</td><td>
compatibility check for Sucuri Security plugin which breaks maps if option "Restrict wp-content access" is active
</td></tr>
<tr><td>' . $changed . '</td><td>
MapsMarker API: use "MapsMarker API" as createdby & updatedby attribute if not set
</td></tr>
<tr><td>' . $fixed . '</td><td>
leaflet-min.css was not properly loaded on RTL themes (thx Nic!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
custom panel background for marker maps was taken from layer map settings (thx Bernd!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
custom default marker icon was not saved when creating a new marker map (thx Oleg!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
Google+Bing language localizations could be broken since WordPress 4.0 as constant WPLANG has been depreciated
</td></tr>
<tr><td>' . $fixed . '</td><td>
Bing culture parameter was ignored and fallback set to en-US when constant WPLANG with hypen was used 
</td></tr>
<tr><td>' . $fixed . '</td><td>
RSS & Atom feeds for marker and layer maps did not validate with http://validator.w3.org
</td></tr>
<tr><td>' . $fixed . '</td><td>
remove slashes before single apostrophes (Arc d\\\'airain) in addresses for new maps / on map updates (thx Guffroy!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
sort order on "list all markers" page was broken on page 2+ if custom sort order was selected (thx kluong!)
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Danish translation thanks to Mads Dyrmann Larsen and Peter Erfurt, <a href="http://24-7news.dk" target="_blank">http://24-7news.dk</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincèn Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a> and Rodolphe Quiedeville, <a href="http://rodolphe.quiedeville.org" target="_blank">http://rodolphe.quiedeville.org</a>, Fx Benard, <a href="http://wp-translator.com" target="_blank">http://wp-translator.com</a>, cazal cédric, <a href="http://www.cedric-cazal.com" target="_blank">http://www.cedric-cazal.com</a> and Fabian Hurelle, <a href="http://hurelle.fr" target="_blank">http://hurelle.fr</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Pawel Wyszy&#324;ski, <a href="http://injit.pl" target="_blank">http://injit.pl</a>, Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank"></a> and Robert Pawlak
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Spanish translation thanks to Alvaro Lara, <a href="http://www.alvarolara.com" target="_blank">http://www.alvarolara.com</a>, Victor Guevara, <a href="http://1sistemas.net" target="_blank">http://1sistemas.net</a>, Ricardo Viteri, <a href="http://www.labviteri.com" target="_blank">http://www.labviteri.com</a> and Juan Valdes
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Swedish translation thanks to Olof Odier <a href="http://www.historiskastadsvandringar.se" target="_blank">http://www.historiskastadsvandringar.se</a>, Tedy Warsitha <a href="http://codeorig.in/" target="_blank">http://codeorig.in/</a>, Dan Paulsson <a href="http://www.paulsson.eu" target="_blank">http://www.paulsson.eu</a>, Elger Lindgren, <a href="http://20x.se" target="_blank">http://20x.se</a> and Anton Andreasson, <a href="http://andreasson.org/" target="_blank">http://andreasson.org/</a>
</td></tr>
</table>'.PHP_EOL;

if ( (version_compare($lmm_version_old,"3.9.2","<")) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.9.2') . '</strong> - ' . $text_b . ' 30.08.2014 (<a href="https://www.mapsmarker.com/v3.9.2" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">geolocation support: show and follow your location when viewing maps</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">search function for layerlist on marker edit page</a>
</td></tr>
<tr><td>' . $new . '</td><td>
support for using WMTS servers as custom overlays (thx dimizu!)
</td></tr>
<tr><td>' . $new . '</td><td>
compatibility check for plugin "WP External Links" which can cause maps to break
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized RTL (right-to-left) language support
</td></tr>
<tr><td>' . $changed . '</td><td>
updated jQuery select2 addon to v3.5.1
</td></tr>
<tr><td>' . $changed . '</td><td>
added backticks (`) around column and table names in all SQL statements to prevent collisions with reserved words
</td></tr>
<tr><td>' . $fixed . '</td><td>
some settings were not selectable when RTL (right-to-left) language support was active
</td></tr>
<tr><td>' . $fixed . '</td><td>
custom overlays and custom basemaps with & and {} chars in URLs were broken
</td></tr>
<tr><td>' . $fixed . '</td><td>
potential XSS security issue on fullscreen maps (discovered by <a href="https://security.dxw.com/" target="_blank">https://security.dxw.com/</a>)
</td></tr>
<tr><td>' . $fixed . '</td><td>
default marker icon was not used for maps created with shortcodes directly (thx Bernd!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
broken layer maps/plugin installations on mySQL instances using <i>clustering</i> as reserved word (thx Tim!)
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Bosnian translation thanks to Kenan Dervišević, <a href="http://dkenan.com" target="_blank">http://dkenan.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Pawel Wyszy&#324;ski, <a href="http://injit.pl" target="_blank">http://injit.pl</a>, Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank"></a> and Robert Pawlak
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Russian translation thanks to Ekaterina Golubina (supported by Teplitsa of Social Technologies - <a href="http://te-st.ru" target="_blank">http://te-st.ru</a>) and Vyacheslav Strenadko, <a href="http://poi-gorod.ru" target="_blank">http://poi-gorod.ru</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Romanian translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a>, Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a> and Flo Bejgu, <a href="http://www.inboxtranslation.com" target="_blank">http://www.inboxtranslation.com</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( (version_compare($lmm_version_old,"3.9.1","<")) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.9.1') . '</strong> - ' . $text_b . ' 22.07.2014 (<a href="https://www.mapsmarker.com/v3.9.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
<a href="https://www.mapsmarker.com/2014/07/22/10-discount-code-to-celebrate-the-1st-anniversary-of-maps-marker-pro/" target="_blank">10% discount code to celebrate the 1st anniversary of Maps Marker Pro</a>
</td></tr>
<tr><td>' . $new . '</td><td>
<a href="https://www.mapsmarker.com" target="_blank">enabled SSL by default for MapsMarker.com website & installed EV SSL certificate (=verified identity)</a>
</td></tr>
<tr><td>' . $new . '</td><td>
compatibility check for "Page Builder by SiteOrigin" plugin (thx porga!)
</td></tr>
<tr><td>' . $new . '</td><td>
tested against WordPress 4.0
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized version compare functions by using PHP version_compare();
</td></tr>
<tr><td>' . $fixed . '</td><td>
not all sections within settings could be selected on smaller screens (thx Francesco!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
display of popuptext in GeoRSS feed was broken (thx Indrajit!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
fixed broken incompatibility check with Better WordPress Minify plugin v1.3.0
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a> and ck
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Latvian translation thanks to Juris Orlovs, <a href="http://lbpa.lv" target="_blank">http://lbpa.lv</a> and Eriks Remess <a href="http://geekli.st/Eriks" target="_blank">http://geekli.st/Eriks</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Russian translation thanks to Ekaterina Golubina (supported by Teplitsa of Social Technologies - <a href="http://te-st.ru" target="_blank">http://te-st.ru</a>) and Vyacheslav Strenadko, <a href="http://poi-gorod.ru" target="_blank">http://poi-gorod.ru</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( (version_compare($lmm_version_old,"3.9","<")) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.9') . '</strong> - ' . $text_b . ' 28.06.2014 (<a href="https://www.mapsmarker.com/v3.9" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">layer maps: center map on markers and open popups by clicking on list of markers entries</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">new tool for monitoring "active shortcodes with invalid map IDs"</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">option to disable Google Places Autocomplete API on backend</a>
</td></tr>
<tr><td>' . $changed . '</td><td>
replaced discontinued predefined MapBox tiles "MapBox Streets" with "Natural Earth I" 
</td></tr>
<tr><td>' . $fixed . '</td><td>
input field for marker and layer zoom on backend was too small on mobile devices
</td></tr>
<tr><td>' . $fixed . '</td><td>
icons selection on markers maps was broken in IE11 (thx geekahedron!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
backslashes in popuptexts resulted in broken layer maps - now replaced with slashes (thx Dmitry!)
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Turkish translation thanks to Emre Erkan, <a href="http://www.karalamalar.net" target="_blank">http://www.karalamalar.net</a> and Mahir Tosun, <a href="http://www.bozukpusula.com" target="_blank">http://www.bozukpusula.com</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( (version_compare($lmm_version_old,"3.8.10","<")) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.8.10') . '</strong> - ' . $text_b . ' 07.06.2014 (<a href="https://www.mapsmarker.com/v3.8.10" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">upgrade to leaflet.js v0.7.3 (maintenance release with 8 bugfixes)</a>
</td></tr>
<tr><td>' . $fixed . '</td><td>
image edit+remove overlay buttons in TinyMCE editor for popuptexts on marker edit pages were missing since WordPress 3.9 (thx <a href="http://dorf.vsgtaegerwilen.ch" target="_blank">Bruno</a>)
</td></tr>
<tr><td>' . $fixed . '</td><td>
image preview in popuptexts on backend did not consider custom CSS
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Romanian translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a>, Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a> and Flo Bejgu, <a href="http://www.inboxtranslation.com" target="_blank">http://www.inboxtranslation.com</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( (version_compare($lmm_version_old,"3.8.9","<")) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.8.9') . '</strong> - ' . $text_b . ' 18.05.2014 (<a href="https://www.mapsmarker.com/v3.8.9" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">improved performance for layer maps by asynchronous loading of markers via GeoJSON</a></td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">option to disable loading of Google Maps API for higher performance if alternative basemaps are used only</a></td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="https://www.mapsmarker.com/shortcodes"  target="_blank" title="' . $text_h . '">map parameters can be overwritten within shortcodes (e.g. [mapsmarker marker="1" height="100"])</a></td></tr>
<tr><td>' . $new . '</td><td>
added support for loading maps within jQuery Mobile frameworks (thanks Håkan!)
</td></tr>
<tr><td>' . $new . '</td><td>
added support for GeoJSON-API-links for multi-layer-maps in map panels
</td></tr>
<tr><td>' . $new . '</td><td>
added new sort order options for "list of markers" below layer maps (popuptext, icon, created by, updated by, kml_timestamp)
</td></tr>
<tr><td>' . $changed . '</td><td>
significantly improve loading time for huge layer maps by limiting (hidden) geo microformat tags
</td></tr>
<tr><td>' . $changed . '</td><td>
update import-export library PHPExcel to v1.8.0 (<a href="https://github.com/PHPOffice/PHPExcel/blob/develop/changelog.txt" target="_blank">changelog</a>)
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized CSS classes and removed inline-styles for list of markers-table for better custom styling
</td></tr>
<tr><td>' . $changed . '</td><td>
updated jQuery timepicker addon to v1.4.4
</td></tr>
<tr><td>' . $changed . '</td><td>
updated jQuery select2 addon for settings to v3.4.8
</td></tr>
<tr><td>' . $changed . '</td><td>
hardened SQL queries for multi-layer-maps
</td></tr>
<tr><td>' . $fixed . '</td><td>
&lt;ol&gt; and &lt;ul&gt; lists were not shown correctly in popuptexts (thanks <a href="http://storyv.com/world/" target="_blank">Dan</a>!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
automatic resizing of maps within woocommerce tabs was broken
</td></tr>
<tr><td>' . $fixed . '</td><td>
wrong line-height applied to panel api images could break map layout on certain themes (thx K.W.!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
potential low-critical PHP object injection vulnerabilities with PHPExcel, discovered by <a href="https://security.dxw.com/" target="_blank">https://security.dxw.com/</a>
</td></tr>
<tr><td>' . $fixed . '</td><td>
issues with pro upgrader on servers with PHP 5.5 and ioncube support
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese (zh_TW) translation thanks to jamesho Ho, <a href="http://outdooraccident.org" target="_blank">http://outdooraccident.org</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincèn Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a> and Rodolphe Quiedeville, <a href="http://rodolphe.quiedeville.org" target="_blank">http://rodolphe.quiedeville.org</a>, Fx Benard, <a href="http://wp-translator.com" target="_blank">http://wp-translator.com</a>, cazal cédric, <a href="http://www.cedric-cazal.com" target="_blank">http://www.cedric-cazal.com</a> and Fabian Hurelle, <a href="http://hurelle.fr" target="_blank">http://hurelle.fr</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Latvian translation thanks to Juris Orlovs, <a href="http://lbpa.lv" target="_blank">http://lbpa.lv</a> and Eriks Remess <a href="http://geekli.st/Eriks" target="_blank">http://geekli.st/Eriks</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Pawel Wyszy&#324;ski, <a href="http://injit.pl" target="_blank">http://injit.pl</a>, Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank"></a> and Robert Pawlak
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Romanian translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a> and Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( (version_compare($lmm_version_old,"3.8.8","<")) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.8.8') . '</strong> - ' . $text_b . ' 13.04.2014 (<a href="https://www.mapsmarker.com/v3.8.8" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="https://www.mapsmarker.com/reseller" target="_blank"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="https://www.mapsmarker.com/reseller"  target="_blank">Maps Marker Pro reseller program launched - see https://www.mapsmarker.com/reseller for more details</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="https://www.mapsmarker.com/pricing"  target="_blank" title="click here to view all available packages on mapsmarker.com/pricing">Maps Marker Pro licenses now available also with 3 and 5 years access to updates and support</a>
</td></tr>
<tr><td>' . $new . '</td><td>
show warning message if incompatible plugin "Root Relative URLs" is active (thx Brad!)
</td></tr>
<tr><td>' . $changed . '</td><td>
remove plugin version used from source code on frontend to prevent information disclosure
</td></tr>
<tr><td>' . $fixed . '</td><td>
fixed potential XSS issues (exploitable by admins only)
</td></tr>
<tr><td>' . $fixed . '</td><td>
attribution for mapbox 2 basemap was wrong on marker and layer edit pages
</td></tr>
<tr><td>' . $fixed . '</td><td>
WMS demo layer "Vienna public toilets" was not shown on KML view (fixed on new installations only to not overwrite existing custom settings)
</td></tr>
<tr><td>' . $fixed . '</td><td>
Certain types of apostrophes in addresses could break marker maps on backends
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a> and ck
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Russian translation thanks to Ekaterina Golubina (supported by Teplitsa of Social Technologies - <a href="http://te-st.ru" target="_blank">http://te-st.ru</a>) and Vyacheslav Strenadko, <a href="http://poi-gorod.ru" target="_blank">http://poi-gorod.ru</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Turkish translation thanks to Emre Erkan, <a href="http://www.karalamalar.net" target="_blank">http://www.karalamalar.net</a> and Mahir Tosun, <a href="http://www.bozukpusula.com" target="_blank">http://www.bozukpusula.com</a>
</td></tr>
</table>'.PHP_EOL;
echo '<p><hr noshade size="1"/></p>';
}

if ( (version_compare($lmm_version_old,"3.8.7","<")) && ( $lmm_version_old > '0' ) ) {
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.8.7') . '</strong> - ' . $text_b . ' 27.03.2014 (<a href="https://www.mapsmarker.com/v3.8.7" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="https://www.mapsmarker.com/pricing"  target="_blank"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td style="font-size:1.7em;">
<a href="https://www.mapsmarker.com/pricing"  target="_blank" title="click here to view all available packages on mapsmarker.com/pricing">Maps Marker Pro licenses now available with prices starting from €15</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">allow admins to change createdby and createdon information for marker and layer maps</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">optimized live preview of popup content on marker edit page (now also showing current address for directions link)</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">map moves back to initial position after popup is closed</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">option to add markernames to popups automatically (default = false)</a>
</td></tr>
<tr><td>' . $new . '</td><td>
add css classes markermap/layermap and marker-ID/layer-ID to each map div for better custom styling
</td></tr>
<tr><td>' . $new . '</td><td>
display an alert for unsaved changes before leaving marker/layer edit or settings pages
</td></tr>
<tr><td>' . $new . '</td><td>
added support for gif and jpg marker icons
</td></tr>
<tr><td>' . $changed . '</td><td>
replaced option "maximum width for images in popups" with option "CSS for images in popups" (<strong>action is needed if you changed maximum width for images in popups!</strong>)
</td></tr>
<tr><td>' . $changed . '</td><td>
switch to persistent javascript variable names instead of random numbers on frontend (thx Sascha!)
</td></tr>
<tr><td>' . $changed . '</td><td>
remove support for Cloudmade basemaps as free tile service is discontinued (->changing basemap to OSM for maps using Cloudmade)
</td></tr>
<tr><td>' . $changed . '</td><td>
increased minimum required WordPress version from 3.0 to 3.3 (upgrade to latest version 3.8.1 is advised anyway)
</td></tr>
<tr><td>' . $changed . '</td><td>
layer center pin on backend now always stays on top of markers and is now a bit transparent (thx Sascha!)
</td></tr>
<tr><td>' . $changed . '</td><td>
removed option "extra CSS for table cells" for list of markers
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized backend loadtimes on marker+layer updates (not loading plugin header twice anymore; next: AJAX ;-)
</td></tr>
<tr><td>' . $changed . '</td><td>
use WordPress HTTP API instead of cURL() for custom marker icons and shadow check
</td></tr>
<tr><td>' . $fixed . '</td><td>
Maps Marker API: validity check for post requests for createdon/updatedon parameter failed (thx Sascha!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
added clear:both; to directions link in popup text to fix display of floating images (thx Sascha!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
link to directions settings in marker popup texts on marker edit pages was broken (visible on advanced editor only)
</td></tr>
<tr><td>' . $fixed . '</td><td>
potential cross site scripting issues (mostly exploitable by admin users only)
</td></tr>
<tr><td>' . $fixed . '</td><td>
wpdb::prepare() warning message on Wikitude API output for layer maps
</td></tr>
<tr><td>' . $fixed . '</td><td>
visual tinyMCE editor was broken on marker edit and tools pages since WordPress 3.9-alpha
</td></tr>
<tr><td>' . $fixed . '</td><td>
escaping of input values with mysql_real_escape_string() was broken since WordPress 3.9-alpha (now replaced with esc_sql())
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Latvian translation thanks to Juris Orlovs, <a href="http://lbpa.lv" target="_blank">http://lbpa.lv</a> and Eriks Remess <a href="http://geekli.st/Eriks" target="_blank">http://geekli.st/Eriks</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Romanian translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a> and Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Spanish translation thanks to Alvaro Lara, <a href="http://www.alvarolara.com" target="_blank">http://www.alvarolara.com</a>, Victor Guevara, <a href="http://1sistemas.net" target="_blank">http://1sistemas.net</a>, Ricardo Viteri, <a href="http://www.labviteri.com" target="_blank">http://www.labviteri.com</a> and Juan Valdes
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Swedish translation thanks to Olof Odier <a href="http://www.historiskastadsvandringar.se" target="_blank">http://www.historiskastadsvandringar.se</a>, Tedy Warsitha <a href="http://codeorig.in/" target="_blank">http://codeorig.in/</a>, Dan Paulsson <a href="http://www.paulsson.eu" target="_blank">http://www.paulsson.eu</a>, Elger Lindgren, <a href="http://20x.se" target="_blank">http://20x.se</a> and Anton Andreasson, <a href="http://andreasson.org/" target="_blank">http://andreasson.org/</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( (version_compare($lmm_version_old,"3.8.6","<")) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.8.6') . '</strong> - ' . $text_b . ' 01.03.2014 (<a href="https://www.mapsmarker.com/v3.8.6" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">support for dynamic switching between simplified and advanced editor (no more reloads needed)</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">new MapsMarker API search action with support for bounding box searches and more</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">support for filtering of marker icons on backend (based on filename)</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">support for changing marker IDs and layer IDs from the tools page</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">support for bulk updates of marker maps on the tools page for selected layers only</a>
</td></tr>
<tr><td>' . $new . '</td><td>
more secure authentication method for <a href="https://www.mapsmarker.com/mapsmarker-api">MapsMarker API</a> (<strong>old method with public key only is not supported anymore!</strong>)
</td></tr>
<tr><td>' . $new . '</td><td>
<a href="https://www.mapsmarker.com/order" target="_blank">store on mapsmarker.com</a> now also accepts Diners Club credit cards
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized marker and layer pages on backend (optimized marker icons display, less whitespace for better workflow, added "Advanced settings" row)
</td></tr>
<tr><td>' . $changed . '</td><td>
checkbox for multi layer maps is now also visible by default on layer edit pages
</td></tr>
<tr><td>' . $changed . '</td><td>
WMS legend link is not added to WMS attribution if legend link is empty
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized input on backend by adding labels to all form elements
</td></tr>
<tr><td>' . $fixed . '</td><td>
single quotes in marker map names were escaped (thx Eric!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
database issues when saving maps on selected hosts (thx David!)
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a> and ck
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Czech translation thanks to Viktor Kleiner and Vlad Kuzba, <a href="http://kuzbici.eu" target="_blank">http://kuzbici.eu</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincèn Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a> and Rodolphe Quiedeville, <a href="http://rodolphe.quiedeville.org" target="_blank">http://rodolphe.quiedeville.org</a>, Fx Benard, <a href="http://wp-translator.com" target="_blank">http://wp-translator.com</a>, cazal cédric, <a href="http://www.cedric-cazal.com" target="_blank">http://www.cedric-cazal.com</a> and Fabian Hurelle, <a href="http://hurelle.fr" target="_blank">http://hurelle.fr</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Romanian translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a> and Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Slovak translation thanks to Zdenko Podobny
</td></tr>
</table>'.PHP_EOL;
echo '<p><hr noshade size="1"/></p>';
}

if ( (version_compare($lmm_version_old,"3.8.5","<")) && ( $lmm_version_old > '0' ) ) {
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.8.5') . '</strong> - ' . $text_b . ' 10.02.2014 (<a href="https://www.mapsmarker.com/v3.8.5" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">loading progress bar for markerclusters when loading of markers takes longer than 1 second</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">splitted leaflet.js into leaflet-core.js and leaflet-addons.js to utilize parallel loading</a>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">import of layer maps as CSV/XLS/XLSX/ODS file</a>
</td></tr>
</td></tr>
<tr><td>' . $new . '</td><td>
support for conditional SSL loading of Javascript for Google Maps to increase performance (thx John!)
</td></tr>
<tr><td>' . $new . '</td><td>
export of layer maps as CSV/XLS/XLSX/ODS file
</td></tr>
<tr><td>' . $changed . '</td><td>
icons on marker maps and layer maps center icon on backend are now also draggable (thx Sascha for the hint!)
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a> and ck
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Danish translation thanks to Mads Dyrmann Larsen and Peter Erfurt, <a href="http://24-7news.dk" target="_blank">http://24-7news.dk</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Romanian translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a> and Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Spanish translation thanks to Alvaro Lara, <a href="http://www.alvarolara.com" target="_blank">http://www.alvarolara.com</a>, Victor Guevara, <a href="http://1sistemas.net" target="_blank">http://1sistemas.net</a> and Ricardo Viteri, <a href="http://www.labviteri.com" target="_blank">http://www.labviteri.com</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( (version_compare($lmm_version_old,"3.8.4","<")) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.8.4') . '</strong> - ' . $text_b . ' 24.01.2014 (<a href="https://www.mapsmarker.com/v3.8.4" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $changed . '</td><td>
optimized TinyMCE media button integration for posts/pages (showing button just once & design update)
</td></tr>
<tr><td>' . $changed . '</td><td>
improved performance for marker edit pages and posts/pages (by removing TinyMCE scripts and additional WordPress initialization)
</td></tr>
<tr><td>' . $changed . '</td><td>
improved performance for dynamic changelog (by removing additional WordPress initialization)
</td></tr>
<tr><td>' . $changed . '</td><td>
removed backend compatibility check for flickr-gallery plugin
</td></tr>
<tr><td>' . $changed . '</td><td>
GeoJSON API: add marker=all parameter & only allow all/* to list all markers
</td></tr>
<tr><td>' . $changed . '</td><td>
KML API: add marker=all parameter & only allow all/* to list all markers
</td></tr>
<tr><td>' . $changed . '</td><td>
improved performance for GeoJSON API by removing mySQL-function CONCAT() from select statements
</td></tr>
<tr><td>' . $changed . '</td><td>
update jQuery timepicker addon to v1.43
</td></tr>
<tr><td>' . $changed . '</td><td>
reduced http requests for jquery time picker addon css on marker edit page
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized css loading on backend (load leaflet.css only on marker and layer edit pages) 
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized backend performance by reducing SQL queries and http requests on new layer edit page
</td></tr>
<tr><td>' . $changed . '</td><td>
only show first 25 characters for layernames in select box on marker edit page in order not to break page layout
</td></tr>
<tr><td>' . $changed . '</td><td>
reduced mysql queries on layer edit page by showing marker count for multi-layer-maps only on demand
</td></tr>
<tr><td>' . $fixed . '</td><td>
bing maps were broken if https was used due to changes in the bing url templates
</td></tr>
<tr><td>' . $fixed . '</td><td>
PHP error log entries when Wikitude API was called with specific parameters
</td></tr>
<tr><td>' . $fixed . '</td><td>
GeoRSS API for marker parameter displayed incorrect titles
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
<a href="https://translate.mapsmarker.com/projects/lmm" target="_blank">new design template on translation.mapsmarker.com & support for SSL-login</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( (version_compare($lmm_version_old,"3.8.3","<")) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.8.3') . '</strong> - ' . $text_b . ' 17.01.2014 (<a href="https://www.mapsmarker.com/v3.8.3" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">upgrade to leaflet.js v0.7.2</a>
</td></tr>
<tr><td>' . $new . '</td><td>
Vietnamese (vi) translation thanks to Hoai Thu, <a href="http://bizover.net" target="_blank">http://bizover.net</a>
</td></tr>
<tr><td>' . $new . '</td><td>
increased security by loading basemaps for OSM, Mapbox and OGD Vienna via SSL if WordPress also loads via SSL
</td></tr>
<tr><td>' . $new . '</td><td>
increased security by hardening search input field for markers on backend
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized performance by moving version checks for PHP and WordPress to register_activation_hook()
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized performance by running pro active check only on admin pages
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a> and ck
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Norwegian (Bokmål) translation thanks to Inge Tang, <a href="http://drommemila.no" target="_blank">http://drommemila.no</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank">http://www.kochambieszczady.pl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Russian translation thanks to Ekaterina Golubina (supported by Teplitsa of Social Technologies - <a href="http://te-st.ru" target="_blank">http://te-st.ru</a>) and Vyacheslav Strenadko, <a href="http://poi-gorod.ru" target="_blank">http://poi-gorod.ru</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Spanish translation thanks to Alvaro Lara, <a href="http://www.alvarolara.com" target="_blank">http://www.alvarolara.com</a>, Victor Guevara, <a href="http://1sistemas.net" target="_blank">http://1sistemas.net</a> and Ricardo Viteri, <a href="http://www.labviteri.com" target="_blank">http://www.labviteri.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Turkish translation thanks to Emre Erkan, <a href="http://www.karalamalar.net" target="_blank">http://www.karalamalar.net</a> and Mahir Tosun, <a href="http://www.bozukpusula.com" target="_blank">http://www.bozukpusula.com</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( (version_compare($lmm_version_old,"3.8.2","<")) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.8.2') . '</strong> - ' . $text_b . ' 21.12.2013 (<a href="https://www.mapsmarker.com/v3.8.2" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="https://www.mapsmarker.com/bitcoin"  target="_top">MapsMarker.com now also supports bitcoin payments</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
updated markercluster codebase to v0.4 (<a href="https://github.com/Leaflet/Leaflet.markercluster/blob/master/CHANGELOG.md" target="_blank">changelog</a>)
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized admin bar integration for WordPress 3.8+
</td></tr>
<tr><td>' . $changed . '</td><td>
switched from wp_remote_post() to wp_remove_get() to avoid occasional IIS7.0 issues (thx Chas!)
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a> and ck
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Indonesian translation thanks to Andy Aditya Sastrawikarta and Emir Hartato, <a href="http://whateverisaid.wordpress.com" target="_blank">http://whateverisaid.wordpress.com</a> and Phibu Reza, <a href="http://www.dedoho.pw/" target="_blank">http://www.dedoho.pw/</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Korean translation thanks to Andy Park, <a href="http://wcpadventure.com" target="_blank">http://wcpadventure.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Latvian translation thanks to Juris Orlovs, <a href="http://lbpa.lv" target="_blank">http://lbpa.lv</a> and Eriks Remess <a href="http://geekli.st/Eriks" target="_blank">http://geekli.st/Eriks</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Norwegian (Bokmål) translation thanks to Inge Tang, <a href="http://drommemila.no" target="_blank">http://drommemila.no</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank">http://www.kochambieszczady.pl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Romanian translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a> and Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( (version_compare($lmm_version_old,"3.8.1","<")) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.8.1') . '</strong> - ' . $text_b . ' 07.12.2013 (<a href="https://www.mapsmarker.com/v3.8.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
upgrade to leaflet.js v0.7.1 with 7 bugfixes (<a href="https://github.com/Leaflet/Leaflet/blob/master/CHANGELOG.md#071-december-6-2013" target="_blank">detailed changelog</a>)
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">duplicate markers feature</a>
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized backend pages for WordPress 3.8/MP6 theme (re-added separator lines, reduce white space usage)
</td></tr>
<tr><td>' . $changed . '</td><td>
geocoding for MapsMarker API requests: if Google Maps API returns error OVER_QUERY_LIMIT, wait 1.5sec and try again once
</td></tr>
<tr><td>' . $changed . '</td><td>
removed link from main admin bar menu entry ("Maps Marker") for better usability on mobile devices
</td></tr>
<tr><td>' . $changed . '</td><td>
hardened SQL statements needed for fullscreen maps by additionally using prepared-statements
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized pro upgrade page (no more jquery accordion needed)
</td></tr>
<tr><td>' . $fixed . '</td><td>
broken terms of service and feedback links on Google marker maps
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a> and ck
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Indonesian translation thanks to Andy Aditya Sastrawikarta and Emir Hartato, <a href="http://whateverisaid.wordpress.com" target="_blank">http://whateverisaid.wordpress.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.8' ) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.8') . '</strong> - ' . $text_b . ' 01.12.2013 (<a href="https://www.mapsmarker.com/v3.8" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
upgrade to leaflet.js v0.7 with lots of improvements and bugfixes (more infos: <a href="http://leafletjs.com/2013/11/18/leaflet-0-7-released-plans-for-future.html" target="_blank">release notes</a> and <a href="https://github.com/Leaflet/Leaflet/blob/master/CHANGELOG.md#07-november-18-2013" target="_blank">detailed changelog</a>)
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">global maximum zoom level (21) for all basemaps with automatic upscaling if native maximum zoom level is lower</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">improved accessibility by adding marker name as alt attribute for marker icon</a>
</td></tr>
<tr><td>' . $new . '</td><td>
compatibility with WordPress 3.8/MP6 (responsive admin template)
</td></tr>
<tr><td>' . $changed . '</td><td>
cleaned up admin dashboard widget (showing blog post titles only)
</td></tr>
<tr><td>' . $changed . '</td><td>
upgraded visualead QR API to use version 3 for higher performance
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a> and ck
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Czech translation thanks to Viktor Kleiner and Vlad Kuzba, <a href="http://kuzbici.eu" target="_blank">http://kuzbici.eu</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Latvian translation thanks to Juris Orlovs, <a href="http://lbpa.lv" target="_blank">http://lbpa.lv</a> and Eriks Remess <a href="http://geekli.st/Eriks" target="_blank">http://geekli.st/Eriks</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Norwegian (Bokmål) translation thanks to Inge Tang, <a href="http://drommemila.no" target="_blank">http://drommemila.no</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank">http://www.kochambieszczady.pl</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.7' ) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.7') . '</strong> - ' . $text_b . ' 16.11.2013 (<a href="https://www.mapsmarker.com/v3.7" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">import and mass-edit markers through csv/xls/xlsx and ods file upload</a>
</td></tr>
<tr><td>' . $new . '</td><td>
export markers as csv/xls/xlsx files (old csv export has been depreciated)
</td></tr>
<tr><td>' . $new . '</td><td>
Norwegian (Bokmål) translation thanks to Inge Tang, <a href="http://drommemila.no" target="_blank">http://drommemila.no</a>
</td></tr>
<tr><td>' . $changed . '</td><td>
switched from curl() to wp_remote_post() on API geocoding calls for higher compatibility
</td></tr>
<tr><td>' . $changed . '</td><td>
Improved error handling on metadata errors on bing maps - use console.log() instead of alert()
</td></tr>
<tr><td>' . $fixed . '</td><td>
added fix for loading maps in woocommerce tabs (thx Glenn!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
alignment of panel and list marker icon images could be broken on certain themes
</td></tr>
<tr><td>' . $fixed . '</td><td>
default error tile image and map deleted image showed wrong www.mapsmarker.com url (ups)
</td></tr>
<tr><td>' . $fixed . '</td><td>
backslashes in map name and address broke GeoJSON output (and thus layer maps) - now replaced with /
</td></tr>
<tr><td>' . $fixed . '</td><td>
tabs in popuptext (character literals) broke GeoJSON output (and thus layer maps) - now replaced with space
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
		<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a> and ck
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese (zh_TW) translation thanks to jamesho Ho, <a href="http://outdooraccident.org" target="_blank">http://outdooraccident.org</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Czech translation thanks to Viktor Kleiner and Vlad Kuzba, <a href="http://kuzbici.eu" target="_blank">http://kuzbici.eu</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincèn Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a> and Rodolphe Quiedeville, <a href="http://rodolphe.quiedeville.org" target="_blank">http://rodolphe.quiedeville.org</a>, Fx Benard, <a href="http://wp-translator.com" target="_blank">http://wp-translator.com</a>, cazal cédric, <a href="http://www.cedric-cazal.com" target="_blank">http://www.cedric-cazal.com</a> and Fabian Hurelle, <a href="http://hurelle.fr" target="_blank">http://hurelle.fr</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Indonesian translation thanks to Andy Aditya Sastrawikarta and Emir Hartato, <a href="http://whateverisaid.wordpress.com" target="_blank">http://whateverisaid.wordpress.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Latvian translation thanks to Juris Orlovs, <a href="http://lbpa.lv" target="_blank">http://lbpa.lv</a> and Eriks Remess <a href="http://geekli.st/Eriks" target="_blank">http://geekli.st/Eriks</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank">http://www.kochambieszczady.pl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Romanian translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a> and Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.6.6' ) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.6.6') . '</strong> - ' . $text_b . ' 09.10.2013 (<a href="https://www.mapsmarker.com/v3.6.6" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">new options to set text color in marker cluster circles (thanks Simon!)</a>
</td></tr>
<tr><td>' . $fixed . '</td><td>
GeoJSON output for markers did not display marker name if parameter full was set to no
</td></tr>
<tr><td>' . $fixed . '</td><td>
GeoJSON output could break if special characters were used in marker names
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese (zh_TW) translation thanks to jamesho Ho, <a href="http://outdooraccident.org" target="_blank">http://outdooraccident.org</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Latvian translation thanks to Juris Orlovs, <a href="http://lbpa.lv" target="_blank">http://lbpa.lv</a> and Eriks Remess <a href="http://geekli.st/Eriks" target="_blank">http://geekli.st/Eriks</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank">http://www.kochambieszczady.pl</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.6.5' ) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.6.5') . '</strong> - ' . $text_b . ' 08.10.2013 (<a href="https://www.mapsmarker.com/v3.6.5" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">support for shortcodes in popup texts</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">set marker cluster colors in settings / map defaults / marker clustering settings</a>
</td></tr>
<tr><td>' . $new . '</td><td>
optimized marker and layer admin pages for mobile devices
</td></tr>
<tr><td>' . $changed . '</td><td>
removed workaround for former incompatibility with jetpack plugin (has been fixed with jetpack 2.2)
</td></tr>
<tr><td>' . $fixed . '</td><td>
save button in settings was not accessible with certain languages active (thx Herbert!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
htmlspecialchars in marker name (< > &) were not shown correctly on hover text (thx fredel+devEdge!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
tabs from address now get removed on edits as this brakes GeoJSON/layer maps (thx Chris!)
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese (zh_TW) translation thanks to jamesho Ho, <a href="http://outdooraccident.org" target="_blank">http://outdooraccident.org</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Czech translation thanks to Viktor Kleiner and Vlad Kuzba, <a href="http://kuzbici.eu" target="_blank">http://kuzbici.eu</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincèn Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a> and Rodolphe Quiedeville, <a href="http://rodolphe.quiedeville.org" target="_blank">http://rodolphe.quiedeville.org</a>, Fx Benard, <a href="http://wp-translator.com" target="_blank">http://wp-translator.com</a>, cazal cédric, <a href="http://www.cedric-cazal.com" target="_blank">http://www.cedric-cazal.com</a> and Fabian Hurelle, <a href="http://hurelle.fr" target="_blank">http://hurelle.fr</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Indonesian translation thanks to Andy Aditya Sastrawikarta and Emir Hartato, <a href="http://whateverisaid.wordpress.com" target="_blank">http://whateverisaid.wordpress.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Latvian translation thanks to Juris Orlovs, <a href="http://lbpa.lv" target="_blank">http://lbpa.lv</a> and Eriks Remess <a href="http://geekli.st/Eriks" target="_blank">http://geekli.st/Eriks</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank">http://www.kochambieszczady.pl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Romanian translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a> and Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.6.4' ) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.6.4') . '</strong> - ' . $text_b . ' 14.09.2013 (<a href="https://www.mapsmarker.com/v3.6.4" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">parsing of GeoJSON for layer maps is now up to 3 times faster by using JSON.parse instead of eval()</a>
</td></tr>
<tr><td>' . $new . '</td><td>
<span style="font-size:130%;font-weight:bold;line-height:19px;"><a title="click here for more information" href="https://www.mapsmarker.com/affiliateid" target="_blank">support for MapsMarker affiliate links instead of default backlinks - sign up as an affiliate and receive commissions up to 50% !</a></span>
</td></tr>
<tr><td>' . $changed . '</td><td>
using WordPress function antispambot() instead of own function hide_email() for API links
</td></tr>
<tr><td>' . $fixed . '</td><td>
MapsMarker API - icon-parameter could not be set (always returned null) - thx Hovhannes!
</td></tr>
<tr><td>' . $fixed . '</td><td>
fixed broken settings page when plugin wp photo album plus was active (thx Martin!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
plugin uninstall did not remove all database entries completely on multisite installations
</td></tr>
<tr><td>' . $fixed . '</td><td>
Wikitude API was not accepted on registration if ar:name was empty (now using map type + id as fallback)
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Bosnian translation thanks to Kenan Dervišević, <a href="http://dkenan.com" target="_blank">http://dkenan.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a> and ck
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese (zh_TW) translation thanks to jamesho Ho, <a href="http://outdooraccident.org" target="_blank">http://outdooraccident.org</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Czech translation thanks to Viktor Kleiner and Vlad Kuzba, <a href="http://kuzbici.eu" target="_blank">http://kuzbici.eu</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincèn Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a> and Rodolphe Quiedeville, <a href="http://rodolphe.quiedeville.org" target="_blank">http://rodolphe.quiedeville.org</a>, Fx Benard, <a href="http://wp-translator.com" target="_blank">http://wp-translator.com</a>, cazal cédric, <a href="http://www.cedric-cazal.com" target="_blank">http://www.cedric-cazal.com</a> and Fabian Hurelle, <a href="http://hurelle.fr" target="_blank">http://hurelle.fr</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Indonesian translation thanks to Andy Aditya Sastrawikarta and Emir Hartato, <a href="http://whateverisaid.wordpress.com" target="_blank">http://whateverisaid.wordpress.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Latvian translation thanks to Juris Orlovs, <a href="http://lbpa.lv" target="_blank">http://lbpa.lv</a> and Eriks Remess <a href="http://geekli.st/Eriks" target="_blank">http://geekli.st/Eriks</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank">http://www.kochambieszczady.pl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Romanian translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a> and Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.6.3' ) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.6.3') . '</strong> - ' . $text_b . ' 31.08.2013 (<a href="https://www.mapsmarker.com/v3.6.3" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">support for displaying GPX tracks on marker and layer maps</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">option to whitelabel backend admin pages</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">advanced permission settings</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">removed visualead logo and backlink from QR code output pages</a>
</td></tr>
<tr><td>' . $new . '</td><td>
optimized settings page (added direct links, return to last seen page after saving and full-text-search)
</td></tr>
<tr><td>' . $changed . '</td><td>
increased database field for multi layer maps from 255 to 4000 (allowing you to add more layers to a multi layer map)
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized marker and layer edit page (widened first column to better fit different browsers)
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized default backlinks and added QR-link to visualead
</td></tr>
<tr><td>' . $changed . '</td><td>
reduced maximum zoom level for bing maps to 19 as 21 is not supported worldwide
</td></tr>
<tr><td>' . $fixed . '</td><td>
API does not break anymore if parameter type is not set to json or xml
</td></tr>
<tr><td>' . $fixed . '</td><td>
marker icons in widgets were not aligned correctly on IE<9 on some themes
</td></tr>
<tr><td>' . $fixed . '</td><td>
javascript errors on backend pages when clicking "show more" links
</td></tr>
<tr><td>' . $fixed . '</td><td>
Using W3 Total Cache >=v0.9.3 with active CDN no longer requires custom config
</td></tr>
<tr><td>' . $fixed . '</td><td>
wrong image url on on backend edit pages resulting in 404 http request
</td></tr>
<tr><td>' . $fixed . '</td><td>
wrong css url on on tools page resulting in 404 http request
</td></tr>
<tr><td>' . $fixed . '</td><td>
Wikitude API was broken when multiple multi-layer-maps were selected
</td></tr>
<tr><td>' . $fixed . '</td><td>
broken settings page when other plugins enqueued jQueryUI on all admin pages
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $new . '</td><td>
Spanish/Mexico translation thanks to Victor Guevera, <a href="http://1sistemas.net" target="_blank">http://1sistemas.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Catalan translation thanks to Efraim Bayarri, <a href="http://replicantsfactory.com" target="_blank">http://replicantsfactory.com</a> and  Vicent Cubells, <a href="http://vcubells.net" target="_blank">http://vcubells.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a> and ck
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Croatian translation thanks to Neven Pausic, <a href="http://www.airsoft-hrvatska.com" target="_blank">http://www.airsoft-hrvatska.com</a>, Alan Benic and Marijan Rajic, <a href="http://www.proprint.hr" target="_blank">http://www.proprint.hr</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Czech translation thanks to Viktor Kleiner and Vlad Kuzba, <a href="http://kuzbici.eu" target="_blank">http://kuzbici.eu</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Latvian translation thanks to Juris Orlovs, <a href="http://lbpa.lv" target="_blank">http://lbpa.lv</a> and Eriks Remess <a href="http://geekli.st/Eriks" target="_blank">http://geekli.st/Eriks</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Romanian translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a> and Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.6.2' ) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.6.2') . '</strong> - ' . $text_b . ' 10.08.2013 (<a href="https://www.mapsmarker.com/v3.6.2" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '">added option to start an anonymous free 30-day-trial period</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="https://www.mapsmarker.com/comparison"  target="_blank">new demo maps comparing free and pro version side-by-side</a>
</td></tr>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="http://demo.mapsmarker.com/"  target="_blank">new site demo.mapsmarker.com allowing you to also test the admin pages of Leaflet Maps Marker Pro</a>
</td></tr>
<tr><td>' . $fixed . '</td><td>
maps did not load correctly in (jquery ui) tabs (thx <a href="http://twitter.com/leafletjs" target="_blank">@leafletjs</a>!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
console warning message "Resource interpreted as script but transferred with MIME type text/plain."
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
		<tr><td>' . $transl . '</td><td>
updated Catalan translation thanks to Efraim Bayarri, <a href="http://replicantsfactory.com" target="_blank">http://replicantsfactory.com</a> and  Vicent Cubells, <a href="http://vcubells.net" target="_blank">http://vcubells.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a> and ck
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Czech translation thanks to Viktor Kleiner and Vlad Kuzba, <a href="http://kuzbici.eu" target="_blank">http://kuzbici.eu</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincèn Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a> and Rodolphe Quiedeville, <a href="http://rodolphe.quiedeville.org" target="_blank">http://rodolphe.quiedeville.org</a>, Fx Benard, <a href="http://wp-translator.com" target="_blank">http://wp-translator.com</a> and cazal cédric, <a href="http://www.cedric-cazal.com" target="_blank">http://www.cedric-cazal.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincèn Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a> and Rodolphe Quiedeville, <a href="http://rodolphe.quiedeville.org" target="_blank">http://rodolphe.quiedeville.org</a>, Fx Benard, <a href="http://wp-translator.com" target="_blank">http://wp-translator.com</a> and cazal cédric, <a href="http://www.cedric-cazal.com" target="_blank">http://www.cedric-cazal.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Latvian translation thanks to Juris Orlovs, <a href="http://lbpa.lv" target="_blank">http://lbpa.lv</a> and Eriks Remess <a href="http://geekli.st/Eriks" target="_blank">http://geekli.st/Eriks</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Romanian translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a> and Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Spanish translation thanks to Alvaro Lara, <a href="http://www.alvarolara.com" target="_blank">http://www.alvarolara.com</a>, Victor Guevara, <a href="http://1sistemas.net" target="_blank">http://1sistemas.net</a> and Ricardo Viteri, <a href="http://www.labviteri.com" target="_blank">http://www.labviteri.com</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.6.1' ) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.6.1') . '</strong> - ' . $text_b . ' 01.08.2013 (<a href="https://www.mapsmarker.com/v3.6.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade" target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a>
</td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade" target="_top"  title="' . $text_h . '">upgraded leaflet.js ("the engine of this plugin") v0.5.1 to v0.6.4 (free version uses v0.4.5)</a>
</td></tr>
<tr><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade" target="_top"  title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a>
</td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade" target="_top"  title="' . $text_h . '">Leaflet Maps Marker Pro can now be tested on localhost installations without time limitation and on up to 25 domains on live installations</a>
</td></tr>
<tr><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade" target="_top"  title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a>
</td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade" target="_top"  title="' . $text_h . '">added option to switch update channel and download new beta releases</a>
</td></tr>
<tr><td>' . $new . '</td><td>
show compatibility warning if plugin "Dreamgrow Scrolled Triggered Box" is active (which is causing settings page to break)
</td></tr>
<tr><td>' . $changed . '</td><td>
move scale control up when using Google basemaps in order not to hide the Google logo (thx Kendall!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
fixed warning message "Cannot modify header information" when plugin woocommerce is active
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Bosnian translation thanks to Kenan Dervišević, <a href="http://dkenan.com" target="_blank">http://dkenan.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Croatian translation thanks to Neven Pausic, <a href="http://www.airsoft-hrvatska.com" target="_blank">http://www.airsoft-hrvatska.com</a>, Alan Benic and Marijan Rajic, <a href="http://www.proprint.hr" target="_blank">http://www.proprint.hr</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Korean translation thanks to Andy Park, <a href="http://wcpadventure.com" target="_blank">http://wcpadventure.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Latvian translation thanks to Juris Orlovs, <a href="http://lbpa.lv" target="_blank">http://lbpa.lv</a> and Eriks Remess <a href="http://geekli.st/Eriks" target="_blank">http://geekli.st/Eriks</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Romanian translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a> and Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Slovak translation thanks to Zdenko Podobny
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Spanish translation thanks to Alvaro Lara, <a href="http://www.alvarolara.com" target="_blank">http://www.alvarolara.com</a>, Victor Guevara, <a href="http://1sistemas.net" target="_blank">http://1sistemas.net</a> and Ricardo Viteri, <a href="http://www.labviteri.com" target="_blank">http://www.labviteri.com</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.6' ) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.6') . '</strong> - ' . $text_b . ' 22.07.2013 (<a href="https://www.mapsmarker.com/v3.6" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>
<img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png">
</td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade" target="_top"  target="_blank">Integrated upgrade for pro version for even more features - click here for more details and to find out how you can start a free 30-day-trial easily</a>
</td></tr>
<tr><td>' . $new . '</td><td>
<a href="https://www.mapsmarker.com/mapsmarker-api" target="_blank">MapsMarker API</a> to view and add markers or layers via GET or POST requests
</td></tr>
<tr><td>' . $new . '</td><td>
use custom QR codes with background image thanks to <a href="http://www.visualead.com" target="_blank">Visualead.com</a>
</td></tr>
<tr><td>' . $new . '</td><td>
add bing maps as new directions provider (thanks Roxana!)
</td></tr>
<tr><td>' . $new . '</td><td>
OpenStreetMap editor link now supports <a href="http://ideditor.com/" target="_blank">iD editor</a>, potlatch2 and remote editor (JOSM)
</td></tr>
<tr><td>' . $new . '</td><td>
URL parameter full_icon_url for GeoJSON API to easier embedd maps on external sites
</td></tr>
<tr><td>' . $new . '</td><td>
compatibility check for W3 Total Cache and tutorial how to solve conflicts with its Minify and CDN feature
</td></tr>
<tr><td>' . $changed . '</td><td>
improved multi-layer-maps workflow
</td></tr>
<tr><td>' . $changed . '</td><td>
improved compatibility with MAMP-server under Mac OS X
</td></tr>
<tr><td>' . $changed . '</td><td>
use of prepared statement for KML layer name parameter to improve security
</td></tr>
<tr><td>' . $changed . '</td><td>
removed plugin compatibility check for "<a href="http://wordpress.org/extend/plugins/seo-image/" target="_blank">SEO Friendly Images</a>" plugin (thx for the fix Vladimir!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
settings page headings were not localized since v3.5.3 (thanks again <a href="http://www.yakirs.net/" target="_blank">Yakir</a>!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
adding maps via tinyMCE button was broken when using WordPress 3.6
</td></tr>
<tr><td>' . $fixed . '</td><td>
undefined index message when saving layers with debug enabled on older WordPress versions
</td></tr>
<tr><td>' . $fixed . '</td><td>
OSM edit link was not added on fullscreen marker maps
</td></tr>
<tr><td>' . $fixed . '</td><td>
settings page was broken on Phalanger installations (thx candriotis!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
CR/LF in marker name broke maps (when importing via phpmyadmin/excel for example) - thx Kjell!
</td></tr>
<tr><td>' . $fixed . '</td><td>
TinyMCE button broke other input form fields on themes like Enfold - thx pmconsulting!
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $new . '</td><td>
Korean translation thanks to Andy Park, <a href="http://wcpadventure.com" target="_blank">http://wcpadventure.com</a>
</td></tr>
<tr><td>' . $new . '</td><td>
Latvian translation thanks to Juris Orlovs, <a href="http://lbpa.lv" target="_blank">http://lbpa.lv</a> and Eriks Remess <a href="http://geekli.st/Eriks" target="_blank">http://geekli.st/Eriks</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Bosnian translation thanks to Kenan Dervišević, <a href="http://dkenan.com" target="_blank">http://dkenan.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Catalan translation thanks to Efraim Bayarri, <a href="http://replicantsfactory.com" target="_blank">http://replicantsfactory.com</a> and  Vicent Cubells, <a href="http://vcubells.net" target="_blank">http://vcubells.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a> and ck
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Croatian translation thanks to Neven Pausic, <a href="http://www.airsoft-hrvatska.com" target="_blank">http://www.airsoft-hrvatska.com</a>, Alan Benic and Marijan Rajic, <a href="http://www.proprint.hr" target="_blank">http://www.proprint.hr</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincèn Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a> and Rodolphe Quiedeville, <a href="http://rodolphe.quiedeville.org/" target="_blank">http://rodolphe.quiedeville.org/</a> and Fx Benard, <a href="http://wp-translator.com" target="_blank">http://wp-translator.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Indonesian translation thanks to Andy Aditya Sastrawikarta and Emir Hartato, <a href="http://whateverisaid.wordpress.com" target="_blank">http://whateverisaid.wordpress.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Hungarian translation thanks to István Pintér, <a href="http://www.logicit.hu" target="_blank">http://www.logicit.hu</a> and Csaba Orban, <a href="http://www.foto-dvd.hu" target="_blank">http://www.foto-dvd.hu</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank">http://www.kochambieszczady.pl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Romanian translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a> and Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Russian translation thanks to Ekaterina Golubina (supported by Teplitsa of Social Technologies - <a href="http://te-st.ru" target="_blank">http://te-st.ru</a>) and Vyacheslav Strenadko, <a href="http://poi-gorod.ru" target="_blank">http://poi-gorod.ru</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Spanish translation thanks to Alvaro Lara, <a href="http://www.alvarolara.com" target="_blank">http://www.alvarolara.com</a>, Victor Guevara, <a href="http://1sistemas.net" target="_blank">http://1sistemas.net</a> and Ricardo Viteri, <a href="http://www.labviteri.com" target="_blank">http://www.labviteri.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Swedish translation thanks to Olof Odier <a href="http://www.historiskastadsvandringar.se" target="_blank">http://www.historiskastadsvandringar.se</a>, Tedy Warsitha <a href="http://codeorig.in/" target="_blank">http://codeorig.in/</a>, Dan Paulsson <a href="http://www.paulsson.eu" target="_blank">http://www.paulsson.eu</a> and Elger Lindgren, <a href="http://20x.se" target="_blank">http://20x.se</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.5.4' ) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.5.4') . '</strong> - ' . $text_b . ' 24.05.2013 (<a href="https://www.mapsmarker.com/v3.5.4" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
add hover effect for nav menu buttons for better usability (thx Georgia!)
</td></tr>
<tr><td>' . $new . '</td><td>
add compatibility check for <a href="http://wordpress.org/extend/plugins/wp-minify/" target="_blank">WP Minify</a> (which is causing layer maps to break if HTML minification is active)
</td></tr>
<tr><td>' . $changed . '</td><td>
update jQuery-Timepicker-Addon to v1.2.2 and compress file with jscompress.com
</td></tr>
<tr><td>' . $changed . '</td><td>
load local jquery instead of from Google when pressing tinyMCE button (thx <a href="http://pippinsplugins.com" target="_blank">pippinsplugins.com</a>!)
</td></tr>
<tr><td>' . $changed . '</td><td>
updated OpenStreetMap attribution text and link
</td></tr>
<tr><td>' . $fixed . '</td><td>
Mapquest Aerial basemap was broken as API endpoint was changed
</td></tr>
<tr><td>' . $fixed . '</td><td>
removed double resolution settings for Cloudmade basemaps as tiles were distorted on non-retina displays
</td></tr>
<tr><td>' . $fixed . '</td><td>
fixed HTML validation issue (missing alt-tag on image)
</td></tr>
<tr><td>' . $fixed . '</td><td>
fixed potential XSS issue on backend when using map shortcodes (thx <a href="http://data.wien.gv.at" target="_blank">City of Vienna</a>!)
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $new . '</td><td>
Czech translation thanks to Viktor Kleiner
</td></tr>
<tr><td>' . $new . '</td><td>
Indonesian translation thanks to Andy Aditya Sastrawikarta and Emir Hartato, <a href="http://whateverisaid.wordpress.com" target="_blank">http://whateverisaid.wordpress.com</a>
</td></tr>
<tr><td>' . $new . '</td><td>
Swedish translation thanks to Olof Odier <a href="http://www.historiskastadsvandringar.se" target="_blank">http://www.historiskastadsvandringar.se</a>, Tedy Warsitha <a href="http://codeorig.in/" target="_blank">http://codeorig.in/</a> and Dan Paulsson <a href="http://www.paulsson.eu" target="_blank">http://www.paulsson.eu</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Bosnian translation thanks to Kenan Dervišević, <a href="http://dkenan.com" target="_blank">http://dkenan.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese (zh_TW) translation thanks to jamesho Ho, <a href="http://outdooraccident.org" target="_blank">http://outdooraccident.org</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Spanish translation thanks to Alvaro Lara, <a href="http://www.alvarolara.com" target="_blank">http://www.alvarolara.com</a>, Victor Guevara, <a href="http://1sistemas.net" target="_blank">http://1sistemas.net</a> and Ricardo Viteri, <a href="http://www.labviteri.com" target="_blank">http://www.labviteri.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank">http://www.kochambieszczady.pl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Romanian translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a> and Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Slovak translation thanks to Zdenko Podobny
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Indonesian translation thanks to Emir Hartato, <a href="http://whateverisaid.wordpress.com" target="_blank">http://whateverisaid.wordpress.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincèn Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a> and Rodolphe Quiedeville, <a href="http://rodolphe.quiedeville.org/" target="_blank">http://rodolphe.quiedeville.org/</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Catalan translation thanks to Efraim Bayarri, <a href="http://replicantsfactory.com" target="_blank">http://replicantsfactory.com</a> and  Vicent Cubells, <a href="http://vcubells.net" target="_blank">http://vcubells.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.5.3' ) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.5.3') . '</strong> - ' . $text_b . ' 17.04.2013 (<a href="https://www.mapsmarker.com/v3.5.3" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
automatic redirect to maps after saving and editor switch for enhanced usability (thx Pat!)
</td></tr>
<tr><td>' . $new . '</td><td>
duplicate save buttons on top of edit pages for enhanced usability (thx Pat!)
</td></tr>
<tr><td>' . $new . '</td><td>
Chinese (zh_TW) translation thanks to jamesho Ho, <a href="http://outdooraccident.org" target="_blank">http://outdooraccident.org</a>
</td></tr>
<tr><td>' . $new . '</td><td>
Romanian (ro_RO) translation thanks to Arian, <a href="http://administrare-cantine.ro" target="_blank">http://administrare-cantine.ro</a> and Daniel Codrea, <a href="http://www.inadcod.com" target="_blank">http://www.inadcod.com</a>
</td></tr>
<tr><td>' . $new . '</td><td>
Compatibility check for Daily Stat plugin (which is causing settings page to break)
</td></tr>
<tr><td>' . $changed . '</td><td>
drastically reduced php memory usage on admin pages (about 8MB on average)
</td></tr>
<tr><td>' . $changed . '</td><td>
compatibility check for Lazy Load plugin now only shows warning if javascript inclusion is set to header or WordPress <3.3 is used
</td></tr>
<tr><td>' . $fixed . '</td><td>
update pointer was broken if translations with apostrophes were loaded (thx joke2k!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
warning message on login screen with debug enabled when custom plugin translation was set
</td></tr>
<tr><td>' . $fixed . '</td><td>
fixed WMS layer "public toilets in Vienna" (only for new installs - change name to WCANLAGEOGD on existing installations manually or reset settings)
</td></tr>
<tr><td>' . $fixed . '</td><td>
PHP warning message for maps added directly via shortcode ($address is undefined)
</td></tr>
<tr><td>' . $fixed . '</td><td>
KML validation issues (thanks braindeadave!)
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Bengali translation thanks to Nur Hasan, <a href="http://www.answersbd.com" target="_blank">http://www.answersbd.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank">http://www.kochambieszczady.pl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Catalan translation thanks to Efraim Bayarri, <a href="http://replicantsfactory.com" target="_blank">http://replicantsfactory.com</a> and  Vicent Cubells, <a href="http://vcubells.net" target="_blank">http://vcubells.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.5.2' ) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.5.2') . '</strong> - ' . $text_b . ' 09.02.2013 (<a href="https://www.mapsmarker.com/v3.5.2" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
Bengali translation thanks to Nur Hasan, <a href="http://www.answersbd.com" target="_blank">http://www.answersbd.com</a>
</td></tr>
<tr><td>' . $new . '</td><td>
added option to use default or custom marker shadow URL
</td></tr>
<tr><td>' . $changed . '</td><td>
removed option for custom marker icon directory - please see blog post for more details!
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.5.1' ) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.5.1') . '</strong> - ' . $text_b . ' 05.02.2013 (<a href="https://www.mapsmarker.com/v3.5.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
optimized frontend PHP memory usage and reduced plugin load time by 30%
</td></tr>
<tr><td>' . $new . '</td><td>
Portuguese - Brazil (pt_BR) translation thanks to Andre Santos, <a href="http://pelaeuropa.com.br" target="_blank">http://pelaeuropa.com.br</a> and Antonio Hammerl
</td></tr>
<tr><td>' . $changed . '</td><td>
show marker icon and shadow image checks on plugin pages only
</td></tr>
<tr><td>' . $changed . '</td><td>
update jQuery-Timepicker-Addon to v1.2 and compress file with jscompress.com
</td></tr>
<tr><td>' . $changed . '</td><td>
update jQuery for TinyMCE-button to v1.8.3
</td></tr>
<tr><td>' . $fixed . '</td><td>
custom icon directory could not be set (thanks burgerdev for reporting!)
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Danish translation thanks to Mads Dyrmann Larsen and Peter Erfurt, <a href="http://24-7news.dk" target="_blank">http://24-7news.dk</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.5' ) && ( $lmm_version_old > '0' ) ) {
echo '<p><hr noshade size="1"/></p>';
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.5') . '</strong> - ' . $text_b . ' 04.02.2013 (<a href="https://www.mapsmarker.com/v3.5" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
option to disable global admin notices (showing plugin compatibilities or marker icon directory warnings for example)
</td></tr>
<tr><td>' . $new . '</td><td>
improved performance for adding OSM edit link
</td></tr>
<tr><td>' . $new . '</td><td>
security hardening for API links to better prevent SQL injections
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized plugins total images size with Yahoo! Smush.it by 100kb (optimized marker icons for new installs only automatically!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
undefined index message on adding new recent marker widget
</td></tr>
<tr><td>' . $fixed . '</td><td>
removed duplicate mapicons.zip (decreasing plugin size by 150kb)
</td></tr>
<tr><td>' . $fixed . '</td><td>
xml address field in KML could become malformed on some installations
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank">http://www.kochambieszczady.pl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Danish translation thanks to Mads Dyrmann Larsen
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.4.3' ) && ( $lmm_version_old > '0' ) ) {
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.4.3') . '</strong> - ' . $text_b . ' 19.01.2013 (<a href="https://www.mapsmarker.com/v3.4.3" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $changed . '</td><td>
disable check for marker shadow url if no shadow is used (thanks John!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
bug with map freezing after zoom on Android 4.1
</td></tr>
<tr><td>' . $fixed . '</td><td>
check if shadow icon exists was broken on some installations
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank">http://www.kochambieszczady.pl</a>
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.4.2' ) && ( $lmm_version_old > '0' ) ) {
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.4.2') . '</strong> - ' . $text_b . ' 17.01.2013 (<a href="https://www.mapsmarker.com/v3.4.2" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
checks if marker icons url, directory and shadow image are valid (can be broken when your installation was moved to another server)
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.4.1' ) && ( $lmm_version_old > '0' ) ) {
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.4.1') . '</strong> - ' . $text_b . ' 14.01.2013 (<a href="https://www.mapsmarker.com/v3.4.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
conditional loading for additional css needed for max image width in popups (for WordPress >= 3.3)
</td></tr>
<tr><td>' . $fixed . '</td><td>
image resizing in popups was broken on Internet Explorer < 9
</td></tr>
<tr><td>' . $fixed . '</td><td>
strip slashes from panel text and title on marker and layer fullscreen maps
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Bosnian translation thanks to Kenan Dervišević, <a href="http://dkenan.com" target="_blank">http://dkenan.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Slovak translation thanks to Zdenko Podobny
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Turkish translation thanks to Emre Erkan, <a href="http://www.karalamalar.net" target="_blank">http://www.karalamalar.net</a> and Mahir Tosun, <a href="http://www.bozukpusula.com" target="_blank">http://www.bozukpusula.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.4' ) && ( $lmm_version_old > '0' ) ) {
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.4') . '</strong> - ' . $text_b . ' 06.01.2013 (<a href="https://www.mapsmarker.com/v3.4" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
Bosnian translation (bs_BA) thanks to Kenan Dervišević, <a href="http://dkenan.com" target="_blank">http://dkenan.com</a>
</td></tr>
<tr><td>' . $new . '</td><td>
default option to assign new markers to a specific layer (thanks John Shen!)
</td></tr>
<tr><td>' . $changed . '</td><td>
updated jQuery-Timepicker-Addon by Trent Richardson to v1.1.1
</td></tr>
<tr><td>' . $changed . '</td><td>
created on &amp; created by info for markers/layers is now also saved on first save (thanks Coen!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
Wikitude feature graphic (1025x500) was broken and set back to default value
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Portuguese (pt_PT) translation thanks to Joao Campos, <a href="http://www.all-about-portugal.com" target="_blank">http://www.all-about-portugal.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Spanish translation thanks to Alvaro Lara, <a href="http://www.alvarolara.com" target="_blank">http://www.alvarolara.com</a>, Victor Guevara, <a href="http://1sistemas.net" target="_blank">http://1sistemas.net</a> and Ricardo Viteri, <a href="http://www.labviteri.com" target="_blank">http://www.labviteri.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Danish translation thanks to Mads Dyrmann Larsen
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.3' ) && ( $lmm_version_old > '0' ) ) {
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.3') . '</strong> - ' . $text_b . ' 21.12.2012 (<a href="https://www.mapsmarker.com/v3.3" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
edit map-link for OpenStreetMap and Mapbox (OSM) maps (can be disabled)
</td></tr>
<tr><td>' . $new . '</td><td>
address (if set) is now used for Google directions links instead of latitude/longitude (thanks Pepperbase!)
</td></tr>
<tr><td>' . $new . '</td><td>
show info under list of markers below layer maps if more markers are available
</td></tr>
<tr><td>' . $new . '</td><td>
added new Wikitude fields enabling you to better promote your Augmented-Reality world
</td></tr>
<tr><td>' . $new . '</td><td>
dynamic preview of control box status (hidden/collapsed/expanded) in backend
</td></tr>
<tr><td>' . $new . '</td><td>
option to use an empty basemap (in case you just want to work with overlays only)
</td></tr>
<tr><td>' . $new . '</td><td>
added menu icons on backend and translations image on changelog
</td></tr>
<tr><td>' . $new . '</td><td>
added warning message if plugin "WordPress Ultra Simple Paypal Shopping Cart" which breaks settings page is active
</td></tr>
<tr><td>' . $new . '</td><td>
autofocus marker/layer name input field on backend (HTML5)
</td></tr>
<tr><td>' . $changed . '</td><td>
improved tab order of input fields on marker and layer edit pages on backend
</td></tr>
<tr><td>' . $fixed . '</td><td>
reset Wikitude world logo and icon to default values (please update if you changed them!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
warning message with WordPress 3.5 on layer edit pages on backend ($wpdb->prepare issue)
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Portuguese (pt_PT) translation thanks to Joao Campos, <a href="http://www.all-about-portugal.com" target="_blank">http://www.all-about-portugal.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.2.5' ) && ( $lmm_version_old > '0' ) ) {
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.2.5') . '</strong> - ' . $text_b . ' 18.12.2012 (<a href="https://www.mapsmarker.com/v3.2.5" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
Portuguese (pt_PT) translation thanks to Joao Campos, <a href="http://www.all-about-portugal.com" target="_blank">http://www.all-about-portugal.com</a>
</td></tr>
<tr><td>' . $new . '</td><td>
custom Google base domain setting is now also considered on directions link (thanks Pepperbase!)
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $fixed . '</td><td>
plugin conflict with <a href="http://wordpress.org/extend/plugins/jetpack/" target="_blank">Jetpack plugin</a> which caused maps to break (thanks John, Norman and Evan!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
warning message for multi-layer-maps with all layers ($wpdb->prepare issue)
</td></tr>
<tr><td>' . $fixed . '</td><td>
warning message in tools when deleting all markers ($wpdb->prepare issue)
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.2.4' ) && ( $lmm_version_old > '0' ) ) {
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.2.4') . '</strong> - ' . $text_b . ' 17.12.2012 (<a href="https://www.mapsmarker.com/v3.2.4" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $changed . '</td><td>
removed check for wp_footer(); in backend (did not work on child themes)
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $fixed . '</td><td>
missing translation strings on settings page (thanks Patrick!)
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.2.3' ) && ( $lmm_version_old > '0' ) ){
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.2.3') . '</strong> - ' . $text_b . ' 16.12.2012 (<a href="https://www.mapsmarker.com/v3.2.3" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $fixed . '</td><td>
compatibility fix with flickr gallery plugin (settings page was broken)
</td></tr>
<tr><td>' . $fixed . '</td><td>
editor switch link did not work on some installations
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.2.2' ) && ( $lmm_version_old > '0' ) ){
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.2.2') . '</strong> - ' . $text_b . ' 15.12.2012 (<a href="https://www.mapsmarker.com/v3.2.2" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
map shortcode can now also be used in widgets out of the box
</td></tr>
<tr><td>' . $new . '</td><td>
added check for wp_footer() in template files (footer.php or index.php)
</td></tr>
<tr><td>' . $new . '</td><td>
added troubleshooting link on frontpage if map could not be loaded
</td></tr>
<tr><td>' . $new . '</td><td>
option to disable conditional css loading
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $fixed . '</td><td>
W3C validator errors for marker maps, layer maps and recent marker widget
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.2.1' ) && ( $lmm_version_old > '0' ) ){
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.2.1') . '</strong> - ' . $text_b . ' 13.12.2012 (<a href="https://www.mapsmarker.com/v3.2.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $changed . '</td><td>
no more manual template edits needed if you use do_shortcode() to display maps
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $fixed . '</td><td>
recent marker widget showed error message with WordPress 3.5
</td></tr>
<tr><td>' . $fixed . '</td><td>
margin was added within basemap control box on some templates
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.2' ) && ( $lmm_version_old > '0' ) ){
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.2') . '</strong> - ' . $text_b . ' 12.12.2012 (<a href="https://www.mapsmarker.com/v3.2" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
support for responsive designs (map gets resized automatically to width=100% if parent element is smaller)
</td></tr>
<tr><td>' . $new . '</td><td>
conditional css loading (css files now also get loaded only if a shortcode for a map is used)
</td></tr>
<tr><td>' . $new . '</td><td>
list of markers below multi-layer-map can now also be sorted
</td></tr>
<tr><td>' . $new . '</td><td>
sort order "layer ID" for list of markers below (multi-)layer-maps
</td></tr>
<tr><td>' . $new . '</td><td>
added &lt;noscript&gt;-infotext for browsers with Javascript disabled
</td></tr>
<tr><td>' . $new . '</td><td>
line breaks in popup texts are now also shown in the list of markers below layer maps (thanks Felix!)
</td></tr>
<tr><td>' . $new . '</td><td>
added css class "mapsmarker" to main map div on frontend for better styling
</td></tr>
<tr><td>' . $new . '</td><td>
allow bing map tiles to be served over SSL
</td></tr>
<tr><td>' . $new . '</td><td>
added option to disable errorTile-images for custom overlays to better support tools like <a href="http://www.maptiler.org/" target="_blank">maptiler</a>
</td></tr>
<tr><td>' . $changed . '</td><td>
function for editor switch link (should now work on all installs)
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Japanese translations thanks to <a href="http://twitter.com/higa4" target="_blank">Shu Higash</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $fixed . '</td><td>
list of markers and table of assigned markers to a layer in backend partly showed wrong markers (thanks Coen!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
QR-Code, GeoRSS, Wikitude-links in list of markers under layer maps pointed to layer-API links (thanks Felix!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
Available API links for list of markers on backend didnt reflect the set options from settings
</td></tr>
<tr><td>' . $fixed . '</td><td>
list of markers below layer maps did not have the same width as map if map width was <100%
</td></tr>
<tr><td>' . $fixed . '</td><td>
TMS options for custom overlays were not loaded on frontend
</td></tr>
<tr><td>' . $fixed . '</td><td>
bulk actions on list of markers were broken since v3.0 (thanks Maik!)
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.1' ) && ( $lmm_version_old > '0' ) ){
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.1') . '</strong> - ' . $text_b . ' 05.12.2012 (<a href="https://www.mapsmarker.com/v3.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
better performance by loading javascripts in footer and only if shortcode is used
</td></tr>
<tr><td>' . $new . '</td><td>
changed default custom basemaps for new installs to <a href="http://www.opencyclemap.org/" target="_blank">OpenCycleMaps</a>, <a href="http://maps.stamen.com/#watercolor" target="_blank">Stamen Watercolor</a> and <a href="http://www.thunderforest.com/transport/" target="_blank">Transport Map</a>
</td></tr>
<tr><td>' . $new . '</td><td>
added option to disable errorTile-images for custom basemaps to better support tools like <a href="http://www.maptiler.org/" target="_blank">maptiler</a>
</td></tr>
<tr><td>' . $new . '</td><td>
added TMS option to custom overlays to support overlays from tools like <a href="http://www.maptiler.org/" target="_blank">maptiler</a>
</td></tr>
<tr><td>' . $new . '</td><td>
Croatian translation thanks to Neven Pausic, <a href="http://www.airsoft-hrvatska.com" target="_blank">http://www.airsoft-hrvatska.com</a> and Alan Benic
</td></tr>
<tr><td>' . $new . '</td><td>
Danish translation thanks to Mads Dyrmann Larsen
</td></tr>
<tr><td>' . $new . '</td><td>
option to add extra css for list of markers table (to customize the padding for example)
</td></tr>
<tr><td>' . $new . '</td><td>
added "show less icons" link for simplified editor on marker maps
</td></tr>
<tr><td>' . $new . '</td><td>
added compatibility check for incompatible plugin <a href="http://wordpress.org/extend/plugins/footer-javascript/" target="_blank">JavaScript to Footer</a>
</td></tr>
<tr><td>' . $new . '</td><td>
added fallback for installations where editor switch link above tables did not work
</td></tr>
<tr><td>' . $changed . '</td><td>
changed default basemap to OpenStreetMap and removed OGD Vienna selector for usability reasons
</td></tr>
<tr><td>' . $changed . '</td><td>
unchecked custom overlay 1 in setting "Available overlays in control box" - <a href="http://mapsmarker.com/v3.1" target="_blank">action is needed if you changed this!</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Hungarian translation thanks to István Pintér, <a href="http://www.logicit.hu" target="_blank">http://www.logicit.hu</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $fixed . '</td><td>
display of markers was broken on RTL (right to left) WordPress sites
</td></tr>
<tr><td>' . $fixed . '</td><td>
editor broke with error "Cannot redeclare curpageurl()" on some installations
</td></tr>
<tr><td>

' . $fixed . '
</td><td>
warning messages on WordPress 3.5 when debug is enabled
</td></tr>
<tr><td>' . $fixed . '</td><td>
unchecked but active overlays were not shown in layer controlbox on frontend
</td></tr>
<tr><td>' . $fixed . '</td><td>
maps on backend were broken when certain translation like Italian were active
</td></tr>
<tr><td>' . $fixed . '</td><td>
if all basemaps were available in control box, markers+popups could be hidden
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '3.0' ) && ( $lmm_version_old > '0' ) ){
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.0') . '</strong> - ' . $text_b . ' 28.11.2012 (<a href="https://www.mapsmarker.com/v3.0" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
option to switch between simplified and advanced editor
</td></tr>
<tr><td>' . $new . '</td><td>
address now also gets saved to database and displayed on maps
</td></tr>
<tr><td>' . $new . '</td><td>
Hungarian translation thanks to István Pintér, <a href="http://www.logicit.hu" target="_blank">http://www.logicit.hu</a>
</td></tr>
<tr><td>' . $new . '</td><td>
show info on top of Maps Marker pages if plugin update is available
</td></tr>
<tr><td>' . $changed . '</td><td>
layer control box is not opened by default on mobile devices anymore
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized TinyMCE popup (new with links to add new marker and layer maps)
</td></tr>
<tr><td>' . $changed . '</td><td>
changed position of delete marker and layer buttons
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank">http://www.kochambieszczady.pl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Japanese translations thanks to <a href="http://twitter.com/higa4" target="_blank">Shu Higash</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized use of WordPress Transients API (saving less rows to wp_options-table)
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized plugin active check for higher performance (use of isset() instead of in_array())
</td></tr>
<tr><td>' . $changed . '</td><td>
set jQuery cache for layers to true again for higher performance
</td></tr>
<tr><td>' . $changed . '</td><td>
shrinked plugin´s total size by 700kb by moving screenshots to assets-directory on wordpress.org
</td></tr>
<tr><td>' . $changed . '</td><td>
top menu now displays correctly if you are on add new or edit-marker or layer page
</td></tr>
<tr><td>' . $changed . '</td><td>
use of checkboxes instead of radio boxes if only one option is available (yes/no)
</td></tr>
<tr><td>' . $changed . '</td><td>
updated screenshots for settings panel
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized backend pages for iOS devices
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized marker and layer list tables on backend
</td></tr>
<tr><td>' . $fixed . '</td><td>
marker count on layers lists was wrong for multi-layer-maps (thanks photocoen!)
</td></tr>
<tr><td>' . $fixed . '</td><td>
warning messages for WordPress 3.5beta3 when debug was enabled
</td></tr>
<tr><td>' . $fixed . '</td><td>
layout of the preview of list markers on layer maps in backend was broken
</td></tr>
<tr><td>' . $fixed . '</td><td>
some links to the new settings panel from backend were broken
</td></tr>
<tr><td>' . $fixed . '</td><td>
layout of map panel was broken on preview if empty marker/layer name was entered
</td></tr>
<tr><td>' . $fixed . '</td><td>
shortcode form field could not be focused on iOS
</td></tr>
<tr><td>' . $fixed . '</td><td>
list of assigned markers to multi-layer-maps was broken when more than 1 layer was checked
</td></tr>
<tr><td>' . $fixed . '</td><td>
zooming on layer maps on backend was broken on WordPress < v3.3
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '2.9.2' ) && ( $lmm_version_old > '0' ) ){
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.9.2') . '</strong> - ' . $text_b . ' 11.11.2012 (<a href="https://www.mapsmarker.com/v2.9.2" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
compatibility with 1st WordPress NFC plugin from pingeb.org - <a href="https://www.mapsmarker.com/pingeb" target="_blank">read more</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincèn Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a> and Rodolphe Quiedeville, <a href="http://rodolphe.quiedeville.org/" target="_blank">http://rodolphe.quiedeville.org/</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Ukrainian translation thanks to Andrexj, <a href="http://all3d.com.ua" target="_blank">http://all3d.com.ua</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $fixed . '</td><td>
new settings panel was broken when certain translations were loaded
</td></tr>
</table>'.PHP_EOL;
}

if ( ( $lmm_version_old < '2.9.1' ) && ( $lmm_version_old > '0' ) ){
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.9.1') . '</strong> - ' . $text_b . ' 05.11.2012 (<a href="https://www.mapsmarker.com/v2.9.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $changed . '</td><td>
improved backend usability
</td></tr>
<tr><td>' . $changed . '</td><td>
refreshed backend design
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Catalan translation thanks to Vicent Cubells, <a href="http://vcubells.net" target="_blank">http://vcubells.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank">http://www.kochambieszczady.pl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Patrick Ruers, <a href="http://www.stationskwartiersittard.nl" target="_blank">http://www.stationskwartiersittard.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '2.9' ) && ( $lmm_version_old > '0' ) ){
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.9') . '</strong> - ' . $text_b . ' 02.11.2012 (<a href="https://www.mapsmarker.com/v2.9" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
new logo and updated <a href="https://www.mapsmarker.com" target="_blank">mapsmarker.com</a> website
</td></tr>
<tr><td>' . $new . '</td><td>
update to <a href="http://www.leafletjs.com" target="_blank">leaflet.js</a> v0.45 (fixing issues with Internet Explorer 10 and Chrome 23)
</td></tr>
<tr><td>' . $new . '</td><td>
revamped <a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_settings" target="_top">settings panel</a> for better usability
</td></tr>
<tr><td>' . $new . '</td><td>
add support for bing map localization (cultures)
</td></tr>
<tr><td>' . $new . '</td><td>
compatibilty check notices are now shown globally on each admin page
</td></tr>
<tr><td>' . $new . '</td><td>
added compatibility check for incompatible plugin <a href="http://wordpress.org/extend/plugins/lazy-load/" target="_blank">Lazy Load</a>
</td></tr>
<tr><td>' . $new . '</td><td>
added fallback for installation on hosts where unzip of default marker icons did not work with default method
</td></tr>
<tr><td>' . $changed . '</td><td>
show link "add new map" in TinyMCE popup if no maps have been created yet
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Spanish translation thanks to Alvaro Lara, <a href="http://www.alvarolara.com" target="_blank">http://www.alvarolara.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Slovak translation thanks to Zdenko Podobny
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Polish translation thanks to Tomasz Rudnicki, <a href="http://www.kochambieszczady.pl" target="_blank">http://www.kochambieszczady.pl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincèn Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a> and Rodolphe Quiedeville, <a href="http://rodolphe.quiedeville.org/" target="_blank">http://rodolphe.quiedeville.org/</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Japanese translations thanks to <a href="http://twitter.com/higa4" target="_blank">Shu Higash</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Turkish translation thanks to Emre Erkan, <a href="http://www.karalamalar.net" target="_blank">http://www.karalamalar.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Catalan translation thanks to Vicent Cubells, <a href="http://vcubells.net" target="_blank">http://vcubells.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized internal code structure (moved some functions to /inc/-directory)
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized database install- and update routine (use of dbdelta()-function)
</td></tr>
<tr><td>' . $fixed . '</td><td>
table for list of markers below layer maps was not as wide as map if map with was set in %
</td></tr>
<tr><td>' . $fixed . '</td><td>
Bing tiles failed to load when p.x or p.y was -ve (<a href="https://github.com/shramov/leaflet-plugins/issues/31" target="_blank">bug #31</a>)
</td></tr>
<tr><td>' . $fixed . '</td><td>
Revert function wrapper for Google Maps (broke deferred loading and compiled version of plugins)
</td></tr>
<tr><td>' . $fixed . '</td><td>
Compatibility with WordPress 3.5beta2
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '2.8.2' ) && ( $lmm_version_old > '0' ) ){
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.8.2') . '</strong> - ' . $text_b . ' 26.09.2012 (<a href="https://www.mapsmarker.com/v2.8.2" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
added media button to TinyMCE editor and support for HTML editing mode
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Spanish translation thanks to Alvaro Lara, <a href="http://www.alvarolara.com" target="_blank">http://www.alvarolara.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Catalan translation thanks to Vicent Cubells, <a href="http://vcubells.net" target="_blank">http://vcubells.net</a>
</td></tr>
<tr><td>' . $fixed . '</td><td>
database tables &amp; marker icon directory did not get removed on multisite blogs when blog was deleted through network admin
</td></tr>
<tr><td>' . $fixed . '</td><td>
KML output was broken if marker or layer name contained &amp;-characters
</td></tr>
<tr><td>' . $fixed . '</td><td>
plugin incompatibility with "<a href="http://wordpress.org/extend/plugins/seo-image/" target="_blank">SEO Friendly Images</a>" plugin
</td></tr>
<tr><td>' . $fixed . '</td><td>
padding was added to map tiles on some templates
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '2.8.1' ) && ( $lmm_version_old > '0' ) ){
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.8.1') . '</strong> - ' . $text_b . ' 09.09.2012 (<a href="https://www.mapsmarker.com/v2.8.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a>
</td></tr>
<tr><td>' . $fixed . '</td><td>
images and links in layer maps were broken
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '2.8' ) && ( $lmm_version_old > '0' ) ){
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.8') . '</strong> - ' . $text_b . ' 08.09.2012 (<a href="https://www.mapsmarker.com/v2.8" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
added dynamic changelog to show all changes since your last plugin update
</td></tr>
<tr><td>' . $new . '</td><td>
added WordPress pointers which show after plugin updates (can be disabled)
</td></tr>
<tr><td>' . $new . '</td><td>
added subnavigations in settings for higher usability
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized OGD Vienna selector (basemaps now hidden if location outside Vienna)
</td></tr>
<tr><td>' . $changed . '</td><td>
revamped admin dashboard widget (cache RSS feeds, show post text)
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized install & update routine (now executed only once a day)
</td></tr>
<tr><td>' . $changed . '</td><td>
updated jQuery-Timepicker-Addon by Trent Richardson to v1.0.1
</td></tr>
<tr><td>' . $changed . '</td><td>
started code refactoring for better readability and extensability
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Slovak translation thanks to Zdenko Podobny
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Catalan translation thanks to Vicent Cubells, <a href="http://vcubells.net" target="_blank">http://vcubells.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Spanish translation thanks to Alvaro Lara, <a href="http://www.alvarolara.com" target="_blank">http://www.alvarolara.com</a>
</td></tr>
<tr><td>' . $changed . '</td><td>
removed global stats to comply with WordPress plugin repository policies
</td></tr>
<tr><td>' . $fixed . '</td><td>
AJAX GeoJSON-calls from other (sub)domains were not allowed (same origin policy)
</td></tr>
<tr><td>' . $fixed . '</td><td>
maximum popup width and popup image width were ignored on TinyMCE editor
</td></tr>
<tr><td>' . $fixed . '</td><td>
invalid geojson output when \ in marker name or popup text (now replaced with /)
</td></tr>
<tr><td>' . $fixed . '</td><td>
markers and layers with lat = 0 could not be created
</td></tr>
<tr><td>' . $fixed . '</td><td>
fixed broken zoom for Google Maps with tilt (<a href="https://github.com/robertharm/Leaflet-Maps-Marker/issues/31" target="_blank">github issue #31</a>)
</td></tr>
<tr><td>' . $fixed . '</td><td>
autoPanPadding for popups was broken
</td></tr>
<tr><td>' . $fixed . '</td><td>
widget width was not 100% of sidebar on some templates
</td></tr>
<tr><td>' . $fixed . '</td><td>
Google language localization broke GeoJSON output when debug was enabled
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '2.7.1' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.7.1') . '</strong> - ' . $text_b . ' 24.08.2012 (<a href="https://www.mapsmarker.com/v2.7.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
upgrade to leaflet.js v0.4.4 (<a href="http://www.leafletjs.com/2012/07/30/leaflet-0-4-released.html" target="_blank">changelog</a>)
</td></tr>
<tr><td>' . $new . '</td><td>
option to add an unobtrusive scale control to maps
</td></tr>
<tr><td>' . $new . '</td><td>
support for Retina displays to display maps in a higher resolution
</td></tr>
<tr><td>' . $new . '</td><td>
boxzoom option (whether the map can be zoomed to a rectangular area specified by dragging the mouse while pressing shift)
</td></tr>
<tr><td>' . $new . '</td><td>
worldCopyJump option (the map tracks when you pan to another "copy" of the world and moves all overlays like markers and vector layers there)
</td></tr>
	<tr><td>' . $new . '</td><td>
keyboard navigation support for maps
</td></tr>
	<tr><td>' . $new . '</td><td>
options to customize marker popups (min/max width, scrollbar...)
</td></tr>
<tr><td>' . $new . '</td><td>
add support for maps that do not reflect the real world (e.g. game, indoor or photo maps)
</td></tr>
<tr><td>' . $new . '</td><td>
zoom level can now also be edited directly on marker/layer maps on backend
</td></tr>
<tr><td>' . $new . '</td><td>
added bing/google/mapbox/cloudmad basemaps to mass actions on tools page
</td></tr>
<tr><td>' . $new . '</td><td>
Ukrainian translation thanks to Andrexj, <a href="http://all3d.com.ua" target="_blank">http://all3d.com.ua</a>
</td></tr>
<tr><td>' . $new . '</td><td>
Slovak translation thanks to Zdenko Podobny
</td></tr>
<tr><td>' . $new . '</td><td>
added config options for marker icons and shadow image in settings (size, offset...)
</td></tr>
<tr><td>' . $new . '</td><td>
show marker icons directory (especially needed for blogs on WordPress Multisite installations)
</td></tr>
<tr><td>' . $new . '</td><td>
option to show marker name as icon tooltip (enabled by default)
</td></tr>
<tr><td>' . $new . '</td><td>
add css-classes to each marker icon automatically
</td></tr>
<tr><td>' . $new . '</td><td>
added routing provider OSRM (<a href="http://map.project-osrm.org" target="_blank">http://map.project-osrm.org</a>)
</td></tr>
<tr><td>' . $new . '</td><td>
option to customize Google Maps base domain
</td></tr>
<tr><td>' . $new . '</td><td>
marker/layer name gets added as &lt;title&gt; on fullscreen maps
</td></tr>
<tr><td>' . $new . '</td><td>
list of markers can now also be displayed below multi-layer-maps
</td></tr>
<tr><td>' . $new . '</td><td>
added option to set opacity for overlays
</td></tr>
<tr><td>' . $new . '</td><td>
support for TMS services for custom basemaps (inversed Y axis numbering for tiles)
</td></tr>
<tr><td>' . $changed . '</td><td>
secure loading of Google API via https instead of http
</td></tr>
<tr><td>' . $changed . '</td><td>
enhanced Google Maps language localization options (for maps, directions and autocomplete)
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized usability for forms and marker icon selection on backend
</td></tr>
<tr><td>' . $changed . '</td><td>
removed translation .po files from plugin to reduce file size
</td></tr>
<tr><td>' . $changed . '</td><td>
merged &amp; compressed google-maps.js, bing.js &amp;  into leaflet.js to save http requests
</td></tr>
<tr><td>' . $changed . '</td><td>
changed default color for panel text to #373737 for new installations
</td></tr>
<tr><td>' . $changed . '</td><td>
moved "General Map settings" from tab "Misc" to "Basemaps"
</td></tr>
<tr><td>' . $changed . '</td><td>
GeoJSON AJAX calls for layer maps are not cached anymore to deliver more current results
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized OGD Vienna selector (considers switch to other default basemaps)
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincèn Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a> and Rodolphe Quiedeville, <a href="http://rodolphe.quiedeville.org/" target="_blank">http://rodolphe.quiedeville.org/</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Spanish translation thanks to Alvaro Lara, <a href="http://www.alvarolara.com" target="_blank">http://www.alvarolara.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to Luca Barbetti, <a href="http://twitter.com/okibone" target="_blank">http://twitter.com/okibone</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Catalan translation thanks to Vicent Cubells, <a href="http://vcubells.net" target="_blank">http://vcubells.net</a>
</td></tr>
<tr><td>' . $fixed . '</td><td>
the selection of shortcodes via tinymce popup on posts/pages editor was broken on iOS devices
</td></tr>
<tr><td>' . $fixed . '</td><td>
fixed broken links in multi-layer-maps-list and default state controlbox on layer maps on backend
</td></tr>
<tr><td>' . $fixed . '</td><td>
manual language selection for Chinese and Yiddish was broken
</td></tr>
<tr><td>' . $fixed . '</td><td>
overwrite box-shadow attribute from style.css to remove border on some themes
</td></tr>
<tr><td>' . $fixed . '</td><td>
linebreak was added to mapquest logo in attribution box on some templates
</td></tr>
<tr><td>' . $fixed . '</td><td>
Google API key was not loaded on backend
</td></tr>
<tr><td>' . $fixed . '</td><td>
attribution text for Google Maps provider was hidden
</td></tr>
<tr><td>' . $fixed . '</td><td>
Marker/layer repositioning via Google address search did not changed basemap to Bing/Google
</td></tr>
<tr><td>' . $fixed . '</td><td>
switching basemaps caused attribution text not to clear first
</td></tr>
<tr><td>' . $fixed . '</td><td>
<html>-tags in geotags are now stripped as they caused 404 messages
</td></tr>
	</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '2.7' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.7') . '</strong> - ' . $text_b . ' 21.07.2012:</p>
<table>
<tr><td>
 "Special Collectors Edition" :-)
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '2.6.1' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.6.1') . '</strong> - ' . $text_b . ' 20.07.2012 (<a href="https://www.mapsmarker.com/v2.6.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $fixed . '</td><td>
bing maps should now work as designed - thank to Pavel Shramov, <a href="https://github.com/shramov/" target="_blank">https://github.com/shramov/</a>!
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '2.6' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.6') . '</strong> - ' . $text_b . ' 19.07.2012 (<a href="https://www.mapsmarker.com/v2.6" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
support for bing maps as basemaps (<a href="https://www.mapsmarker.com/bing-maps" target="_blank">API key required</a>)
</td></tr>
<tr><td>' . $new . '</td><td>
configure marker attributes to show in marker list below layer maps (icon, marker name, popuptext)
</td></tr>
<tr><td>' . $new . '</td><td>
option to use Google Maps (Terrain) as basemap
</td></tr>
<tr><td>' . $new . '</td><td>
option to add Google Maps API key (required for commercial usage) - see <a href="https://www.mapsmarker.com/google-maps-api-key" target="_blank">https://www.mapsmarker.com/google-maps-api-key</a> for more details
</td></tr>
<tr><td>' . $new . '</td><td>
Hindi translation thanks to Outshine Solutions, <a href="http://outshinesolutions.com" target="_blank">http://outshinesolutions.com</a> and Guntupalli Karunakar, <a href="http://indlinux.org" target="_blank">http://indlinux.org</a>
</td></tr>
<tr><td>' . $new . '</td><td>
Yiddish translation thanks to Raphael Finkel, <a href="http://www.cs.uky.edu/~raphael/yiddish.html" target="_blank">http://www.cs.uky.edu/~raphael/yiddish.html</a>
</td></tr>
<tr><td>' . $new . '</td><td>
Catalan translation thanks to Vicent Cubells, <a href="http://vcubells.net" target="_blank">http://vcubells.net</a>
</td></tr>
<tr><td>' . $new . '</td><td>
Added compatibility check for plugin <a href="http://wordpress.org/extend/plugins/bwp-minify/" target="_blank">WordPress Better Minify</a>
</td></tr>
<tr><td>' . $changed . '</td><td>
increased Google Maps maximal zoom level from 18 to 22
</td></tr>
<tr><td>' . $changed . '</td><td>
changed the way Google Maps API is called in order to prevent errors with unset sensor parameter when using certain proxy servers (thanks <a href="http://EdWeWo.com" target="_blank">Dragan</a>!)
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to <a href="http://twitter.com/okibone" target="_blank">Luca Barbetti</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Spanish translation thanks to Alvaro Lara, <a href="http://www.alvarolara.com" target="_blank">http://www.alvarolara.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincen Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a>
</td></tr>
<tr><td>' . $fixed . '</td><td>
maps using Google Maps Satellite as basemaps were broken
</td></tr>
<tr><td>' . $fixed . '</td><td>
text for popups was not as wide in TinyMCE editor as wide in popups
</td></tr>
<tr><td>' . $fixed . '</td><td>
fixed vertical alignment of basemaps in layer control box in backend
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '2.5' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.5') . '</strong> - ' . $text_b . ' 06.07.2012 (<a href="https://www.mapsmarker.com/v2.5" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
support for Google Maps as basemaps
</td></tr>
<tr><td>' . $new . '</td><td>
admin dashboard widget showing latest markers and blog posts from mapsmarker.com
</td></tr>
<tr><td>' . $new . '</td><td>
Russian translation thanks to Ekaterina Golubina, supported by Teplitsa of Social Technologies - <a href="http://te-st.ru" target="_blank">http://te-st.ru</a>
</td></tr>
<tr><td>' . $new . '</td><td>
Bulgarian translation thanks to Andon Ivanov, <a href="http://coffebreak.info" target="_blank">http://coffebreak.info</a>
</td></tr>
<tr><td>' . $new . '</td><td>
Turkish translation thanks to Emre Erkan, <a href="http://www.karalamalar.net" target="_blank">http://www.karalamalar.net</a>
</td></tr>
<tr><td>' . $new . '</td><td>
Polish translation thanks to Pawel Wyszy&#324;ski, <a href="http://injit.pl" target="_blank">http://injit.pl</a>
</td></tr>
<tr><td>' . $new . '</td><td>
new collaborative translation site <a href="https://translate.mapsmarker.com/projects/lmm" target="_blank">https://translate.mapsmarker.com</a> - contributing new translations is now more easier than ever :-)
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Japanese translations thanks to <a href="http://twitter.com/higa4" target="_blank">Shu Higash</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to <a href="http://twitter.com/okibone" target="_blank">Luca Barbetti</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Spanish translation thanks to Alvaro Lara, <a href="http://www.alvarolara.com" target="_blank">http://www.alvarolara.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Rodolphe Quiedeville, <a href="http://rodolphe.quiedeville.org/" target="_blank">http://rodolphe.quiedeville.org/</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Marijke <a href="http://www.mergenmetz.nl" target="_blank">http://www.mergenmetz.nl</a>
</td></tr>
<tr><td>' . $changed . '</td><td>
show "no markers created yet" on sidebar widget, if no markers are available
</td></tr>
<tr><td>' . $changed . '</td><td>
added translations strings for plugin update notice
</td></tr>
<tr><td>' . $fixed . '</td><td>
v2.4 was broken on Wordpress 3.0-3.1.3
</td></tr>
<tr><td>' . $fixed . '</td><td>
WMS layer legend links were broken on marker/layer maps in admin area
</td></tr>
<tr><td>' . $fixed . '</td><td>
\" in popup text caused layer maps to break (now " get replaced with &#39;)
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '2.4' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.4') . '</strong> - ' . $text_b . ' 07.06.2012 (<a href="https://www.mapsmarker.com/v2.4" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
option to add widgets showing recent marker entries
</td></tr>
<tr><td>' . $new . '</td><td>
added Chinese translation thanks to John Shen, <a href="http://www.synyan.net" target="_blank">http://www.synyan.net</a>
</td></tr>
<tr><td>' . $new . '</td><td>
option to select plugin default language in settings for backend and frontend
</td></tr>
<tr><td>' . $fixed . '</td><td>
fixed several SQL injections and cross site scripting issues based on an external audit of the plugin
</td></tr>
<tr><td>' . $fixed . '</td><td>
CSS bugfix for wrong sized leaflet attribution links on several templates
</td></tr>
<tr><td>' . $fixed . '</td><td>
direction link on popuptext was not shown if popuptext was empty
</td></tr>
<tr><td>' . $changed . '</td><td>
removed geo tags from Google (geo) sitemap as they are not supported anymore
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '2.3' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.3') . '</strong> - ' . $text_b . ' 26.04.2012 (<a href="https://www.mapsmarker.com/v2.3" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
added sort options for marker and layer listing pages in backend
</td></tr>
<tr><td>' . $new . '</td><td>
localized paypal check out pages for donations :-)
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincen Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to <a href="http://twitter.com/okibone" target="_blank">Luca Barbetti</a>
</td></tr>
<tr><td>' . $fixed . '</td><td>
TinyMCE button error on certain installations (function redeclaration; different wp-admin-directory)
</td></tr>
<tr><td>' . $fixed . '</td><td>
list of markers below layer maps was not as wide as the map on some templates
</td></tr>
<tr><td>' . $fixed . '</td><td>
changed constant WP_ADMIN_URL to LEAFLET_WP_ADMIN_URL due to problems on some blogs
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '2.2' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.2') . '</strong> - ' . $text_b . ' 24.03.2012 (<a href="https://www.mapsmarker.com/v2.2" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
support for new map options (dragging, touchzoom, scrollWheelZoom...)
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Italian translation thanks to <a href="http://twitter.com/okibone" target="_blank">Luca Barbetti</a>
</td></tr>
<tr><td>' . $fixed . '</td><td>
TinyMCE button did not work when WordPress was installed in custom directory
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '2.1' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.1') . '</strong> - ' . $text_b . ' 18.03.2012 (<a href="https://www.mapsmarker.com/v2.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
added changelog info box after each plugin update
</td></tr>
<tr><td>' . $new . '</td><td>
added support for MapBox basemaps
</td></tr>
<tr><td>' . $new . '</td><td>
added option to hide API links on markers list below layer maps
</td></tr>
<tr><td>' . $new . '</td><td>
added check for incompatible plugins
</td></tr>
<tr><td>' . $new . '</td><td>
Italian translation thanks to <a href="mailto:lucabarbetti@gmail.com">Luca Barbetti</a>
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized search results table for maps (started with TinyMCE button on post/page edit screen)
</td></tr>
<tr><td>' . $transl . '</td><td>
updated French translation thanks to Vincen Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Dutch translation thanks to Marijke, <a href="http://www.mergenmetz.nl" target="_blank">http://www.mergenmetz.nl</a>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated Japanese translations thanks to <a href="http://twitter.com/higa4" target="_blank">Shu Higashi</a>
</td></tr>
<tr><td>' . $fixed . '</td><td>
attribution text is not cleared on backend maps if basemap is changed
</td></tr>
<tr><td>' . $fixed . '</td><td>
removed double slashes from image urls in settings
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '2.0' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '2.0') . '</strong> - ' . $text_b . ' 13.03.2012 (<a href="https://www.mapsmarker.com/v2.0" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
added support for geo sitemaps for all marker and layer maps
</td></tr>
<tr><td>' . $new . '</td><td>
added mass actions (delete+assign to layer) for selected markers only
</td></tr>
<tr><td>' . $changed . '</td><td>
French translation thanks to Vincen Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a>
</td></tr>
<tr><td>' . $fixed . '</td><td>
maps didnt show up on French installations on backend
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '1.9' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '1.9') . '</strong> - ' . $text_b . ' 05.03.2012 (<a href="https://www.mapsmarker.com/v1.9" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
added TinyMCE-button for easily searching and inserting maps on post/pages-edit screen
</td></tr>
<tr><td>' . $new . '</td><td>
added French translation thanks to Vincen Pujol, <a href="http://www.skivr.com" target="_blank">http://www.skivr.com</a>
</td></tr>
<tr><td>' . $changed . '</td><td>
Dutch translation thanks to <a href="http://www.mergenmetz.nl" target="_blank">Marijke</a>
</td></tr>
<tr><td>' . $changed . '</td><td>
Japanes translations thanks to <a href="http://twitter.com/higa4" target="_blank">Shu Higashi</a>
</td></tr>
<tr><td>' . $changed . '</td><td>
removed support for OSM Osmarender basemaps (service has been discontinued)
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '1.8' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '1.8') . '</strong> - ' . $text_b . ' 29.02.2012 (<a href="https://www.mapsmarker.com/v1.8" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
added option to add a timestamp for each marker for more precise KML animations
</td></tr>
<tr><td>' . $new . '</td><td>
added option to change the default marker icon for new marker maps
</td></tr>
<tr><td>' . $new . '</td><td>
option to configure output of names for KML (show, hide, put in front of popup-text)
</td></tr>
<tr><td>' . $new . '</td><td>
added Dutch translation thanks to <a href="http://www.mergenmetz.nl" target="_blank">Marijke</a>
</td></tr>
<tr><td>' . $changed . '</td><td>
reduced load for GeoJSON feeds up to 75% (full list of attributes can be shown by adding &full=yes to URL)
</td></tr>
<tr><td>' . $changed . '</td><td>
updated columns for CSV export file (custom overlay & WMS status, kml timestamp)
</td></tr>
<tr><td>' . $changed . '</td><td>
KML links are now opened in the same window (removed target="_blank")
</td></tr>
<tr><td>' . $fixed . '</td><td>
UTC offset calculations for KML timestamp was wrong if UTC was < 0
</td></tr>
<tr><td>' . $fixed . '</td><td>
markers are not clickable anymore if there is no popup text
</td></tr>
<tr><td>' . $fixed . '</td><td>
styles for each marker icon in KML output are now unique (SELECT DISTINCT...)
</td></tr>
<tr><td>' . $fixed . '</td><td>
output of multiple markers as KML did not work (leaflet-kml.php?marker/layer=1,2,3)
</td></tr>
<tr><td>' . $fixed . '</td><td>
output of multiple markers as GeoRSS did not work (leaflet-georss.php?marker/layer=1,2,3)
</td></tr>
<tr><td>' . $fixed . '</td><td>
output of multiple markers as ARML did not work (leaflet-wikitude.php?marker/layer=1,2,3)
</td></tr>
<tr><td>' . $fixed . '</td><td>
if single layer was changed into multi layer map, list of markers was still displayed below map
</td></tr>
<tr><td>' . $fixed . '</td><td>
button "add to layer" did not work on new layers
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '1.7' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '1.7') . '</strong> - ' . $text_b . ' 22.02.2012 (<a href="https://www.mapsmarker.com/v1.7" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
added multi-layer support allowing you to combine markers from different layer maps
</td></tr>
<tr><td>' . $new . '</td><td>
Wikitude World Browser now displays custom marker icons instead of standard icon from settings
</td></tr>
<tr><td>' . $new . '</td><td>
option to set the maximum number of markers you want to display in the list below layer maps
</td></tr>
<tr><td>' . $new . '</td><td>
Spanish translation thanks to David Ramirez, <a href="http://www.hiperterminal.com" target="_blank">http://www.hiperterminal.com</a>
</td></tr>
<tr><td>' . $changed . '</td><td>
added with & height attributes to custom marker-image-tags on marker edit page to speed up page load time
</td></tr>
<tr><td>' . $changed . '</td><td>
default font color in popups to black due to incompabilities with several themes
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '1.6' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '1.6') . '</strong> - ' . $text_b . ' 14.02.2012 (<a href="https://www.mapsmarker.com/v1.6" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
added support for Cloudmade maps with styles as basemaps
</td></tr>
<tr><td>' . $changed . '</td><td>
update from leaflet 0.3 beta to 0.3.1 stable - <a href="https://github.com/CloudMade/Leaflet/blob/master/CHANGELOG.md" target="_blank">changelog</a>
</td></tr>
<tr><td>' . $changed . '</td><td>
added updated Japanese translation (thanks to Shu Higashi, @higa4)
</td></tr>
<tr><td>' . $changed . '</td><td>
added updated German translation
</td></tr>
<tr><td>' . $fixed . '</td><td>
markers did not show up in Wikitude World Browser due to a bug with different provider name
</td></tr>
<tr><td>' . $fixed . '</td><td>
lat/lon values for layer and marker maps were rounded on some installations
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '1.5.1' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '1.5.1') . '</strong> - ' . $text_b . ' 12.02.2012 (<a href="https://www.mapsmarker.com/v1.5.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $changed . '</td><td>
optimized javascript variable definitions for wms layers and custom overlays get added to sourcecode only when they are active on the current map
</td></tr>
<tr><td>' . $fixed . '</td><td>
layer maps and API links did not work on multisite installations
</td></tr>
<tr><td>' . $fixed . '</td><td>
legend link for WMS layer did not work
</td></tr>
<tr><td>' . $fixed . '</td><td>
links in panel had a border with some templates
</td></tr>
<tr><td>' . $fixed . '</td><td>
removed double slashes from LEAFLET_PLUGIN_URL-links
</td></tr>
<tr><td>' . $fixed . '</td><td>
uninstall didnt remove marker-icon-directory on some installations
</td></tr>
<tr><td>' . $fixed . '</td><td>
admin pages for map/layer edit screens broken on WordPress 3.0 installations
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '1.5' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '1.5') . '</strong> - ' . $text_b . ' 09.02.2012 (<a href="https://www.mapsmarker.com/v1.5" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
added option to display a list of markers below layer maps (enabled for new layer maps, disabled for existing layer maps)
</td></tr>
<tr><td>' . $new . '</td><td>
included option to add GeoRSS feed for all markers to &lt;head&gt; to allow users subscribing to your markers easily
</td></tr>
<tr><td>' . $new . '</td><td>
add mass actions for layer maps
</td></tr>
<tr><td>' . $changed . '</td><td>
database structure for boolean values from tinyint(4) to tinyint(1)
</td></tr>
<tr><td>' . $fixed . '</td><td>
overlay status for layer maps wasnt displayed in backend preview
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '1.4.3' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '1.4.3') . '</strong> - ' . $text_b . ' 29.01.2012 (<a href="https://www.mapsmarker.com/v1.4.3" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
added WMS support for KML-files via networklink
</td></tr>
<tr><td>' . $fixed . '</td><td>
routing link attached to popup text did not work
</td></tr>
<tr><td>' . $fixed . '</td><td>
missing KML schema declaration causing KML file not to work with scribblemaps.com
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '1.4.2' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '1.4.2') . '</strong> - ' . $text_b . ' 25.01.2012 (<a href="https://www.mapsmarker.com/v1.4.2" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
custom marker icons not showing up on maps on certain hosts (using directory separators different to / )
</td></tr>
<tr><td>' . $fixed . '</td><td>
css styling for <label>-tag in controlbox got overriden by some templates
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '1.4.1' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '1.4.1') . '</strong> - ' . $text_b . ' 24.01.2012 (<a href="https://www.mapsmarker.com/v1.4.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $changed . '</td><td>
added updated Japanese translation (thanks to Shu Higashi, @higa4)
</td></tr>
<tr><td>' . $fixed . '</td><td>
markers & layers could not be added on some hosting providers (changed updatedby & updatedon column on both tables to NULL instead of NOT NULL)
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '1.4' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '1.4') . '</strong> - ' . $text_b . ' 23.01.2012 (<a href="https://www.mapsmarker.com/v1.4" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
added support for routing service from Google Maps
</td></tr>
<tr><td>' . $new . '</td><td>
added support for routing service from yournavigation.org
</td></tr>
<tr><td>' . $new . '</td><td>
added support for routing service from openrouteservice.org
</td></tr>
<tr><td>' . $new . '</td><td>
mass-actions for changing default values for existing markers (map size, icon, panel status, zoom, basemap...)
</td></tr>
<tr><td>' . $changed . '</td><td>
panel status can now also be selected as column for marker/layer listing page
</td></tr>
<tr><td>' . $changed . '</td><td>
controlbox status column for markers/layers list view now displays text instead of 0/1/2
</td></tr>
<tr><td>' . $fixed . '</td><td>
method for adding markers/layers as some users reported that new markers/layers were not saved to database
</td></tr>
<tr><td>' . $fixed . '</td><td>
method for plugin active-check as some users reported that API links did not work
</td></tr>
<tr><td>' . $fixed . '</td><td>
marker/layer name in fullscreen panel did not support UTF8-characters
</td></tr>
<tr><td>' . $fixed . '</td><td>
text width in tinymce editor was not the same as in popup text
</td></tr>
<tr><td>' . $fixed . '</td><td>
several German translation text strings
</td></tr>
<tr><td>' . $fixed . '</td><td>
markers added directly with shortcode caused error on frontend
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '1.3' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '1.3') . '</strong> - ' . $text_b . ' 17.01.2012 (<a href="https://www.mapsmarker.com/v1.3" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
added mass actions for makers (assign markers to layer, delete markers)
</td></tr>
<tr><td>' . $changed . '</td><td>
flattr now embedded as static image as long loadtimes decrease usability because Google Places scripts starts only afterwards
</td></tr>
<tr><td>' . $changed . '</td><td>
marker-/layername for panel in backend now gets refreshed dynamically after entering in form field
</td></tr>
<tr><td>' . $changed . '</td><td>
geo microformat tags are now also added to maps added directly via shortcode
</td></tr>
<tr><td>' . $changed . '</td><td>
optimized div structure and order for maps on frontend
</td></tr>
<tr><td>' . $changed . '</td><td>
removed global stats for plugin installs, marker/layer edits and deletions
</td></tr>
<tr><td>' . $changed . '</td><td>
removed featured sponsor in admin header
</td></tr>
<tr><td>' . $changed . '</td><td>
removed developers comments from css- and js-files
</td></tr>
<tr><td>' . $fixed . '</td><td>
map/panel width were not the same due to css inheritance
</td></tr>
<tr><td>' . $fixed . '</td><td>
map css partially broken in IE < 9 when viewing backend maps
</td></tr>
<tr><td>' . $fixed . '</td><td>
links in maps were underlined on some templates
</td></tr>
<tr><td>' . $fixed . '</td><td>
panel API link images had borders on some templates
</td></tr>
<tr><td>' . $fixed . '</td><td>
text in layer controlbox was centered on some templates
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '1.2.2' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '1.2.2') . '</strong> - ' . $text_b . ' 14.01.2012 (<a href="https://www.mapsmarker.com/v1.2.2" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $fixed . '</td><td>
custom marker icons were not shown on certain hosts due to different wp-upload-directories
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '1.2.1' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '1.2.1') . '</strong> - ' . $text_b . ' 13.01.2012 (<a href="https://www.mapsmarker.com/v1.2.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $fixed . '</td><td>
plugin installation failed on certain hosting providers due to path/directory issues
</td></tr>
<tr><td>' . $fixed . '</td><td>
(interactive) maps do not get display in RSS feeds (which is not possible), so now a static image with a link to the fullscreen standalone map is displayed
</td></tr>
<tr><td>' . $fixed . '</td><td>
removed redundant slashes from paths
</td></tr>
<tr><td>' . $fixed . '</td><td>
fullscreen maps did not get loaded if WordPress is installed in subdirectory
</td></tr>
<tr><td>' . $fixed . '</td><td>
API images in panel did show a border on some templates
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '1.2' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '1.2') . '</strong> - ' . $text_b . ' 11.01.2012 (<a href="https://www.mapsmarker.com/v1.2" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
added <a href="https://www.mapsmarker.com/georss" target="_blank">GeoRSS-feeds for marker- and layer maps</a> (RSS 2.0 & ATOM 1.0)
</td></tr>
<tr><td>' . $new . '</td><td>
added microformat geo-markup to maps, to make your maps machine-readable
</td></tr>
<tr><td>' . $changed . '</td><td>
Default custom overlay (OGD Vienna Addresses) is not active anymore by default on new markers/layers (but still gets active when an address through search by Google Places is selected)
</td></tr>
<tr><td>' . $changed . '</td><td>
added attribution text for default custom overlay (OGD Vienna Addresses) to see if overlay has accidently been activated
</td></tr>
<tr><td>' . $changed . '</td><td>
added sanitization for wikitude provider name
</td></tr>
<tr><td>' . $fixed . '</td><td>
plugin conflict with Google Analytics for WordPress resulting in maps not showing up
</td></tr>
<tr><td>' . $fixed . '</td><td>
plugin did not work on several hosts as path to wp-load.php for API links could not be constructed
</td></tr>
<tr><td>' . $fixed . '</td><td>
reset settings to default values did only reset values from v1.0
</td></tr>
<tr><td>' . $fixed . '</td><td>
when default custom overlay for new markers/layers got unchecked, the map in backend did not show up anymore
</td></tr>
<tr><td>' . $fixed . '</td><td>
fullscreen standalone maps didnt work in Internet Explorer
</td></tr>
<tr><td>' . $fixed . '</td><td>
maps did not show up in Internet Explorer 7 at all
</td></tr>
<tr><td>' . $fixed . '</td><td>
attribution box on standalone maps did not show up if windows size is too small
</td></tr>
<tr><td>' . $fixed . '</td><td>
slashes were not stripped from marker/layer name on frontend maps
</td></tr>
<tr><td>' . $fixed . '</td><td>
quotes were not shown on marker/layer names (note: double quotes are replaced with single quotes automatically due to compatibility reasons)
</td></tr>
</table>'.PHP_EOL;
}
if ( ( $lmm_version_old < '1.1' ) && ( $lmm_version_old > '0' ) ){
echo '<hr noshade size="1"><p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '1.1') . '</strong> - ' . $text_b . ' 08.01.2012 (<a href="https://www.mapsmarker.com/v1.1" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td>' . $new . '</td><td>
<a href="https://www.mapsmarker.com/wp-content/plugins/leaflet-maps-marker/leaflet-fullscreen.php?marker=1" target="_blank">show standalone maps in fullscreen mode</a>
</td></tr>
<tr><td>' . $new . '</td><td>
<a href="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=https://www.mapsmarker.com/wp-content/plugins/leaflet-maps-marker/leaflet-fullscreen.php?marker=1" target="_blank">create QR code images for standalone maps in fullscreen mode</a>
</td></tr>
<tr><td>' . $new . '</td><td>
API links (KML, GeoJSON, Fullscreen, QR Code, Wikitude) now only work if plugin is active
</td></tr>
<tr><td>' . $new . '</td><td>
German translation
</td></tr>
<tr><td>' . $new . '</td><td>
Japanese translation thanks to Shu Higashi (<a href="http://twitter.com/higa4" target="_blank">@higa4</a>)
</td></tr>
<tr><td>' . $new . '</td><td>
option to show/hide WMS layer legend link
</td></tr>
<tr><td>' . $new . '</td><td>
option to disable global statistics
</td></tr>
<tr><td>' . $changed . '</td><td>
added more default marker icons, based on the top 100 icons from the Map Icons Collection
</td></tr>
<tr><td>' . $changed . '</td><td>
added attribution text field in settings for custom overlays
</td></tr>
<tr><td>' . $changed . '</td><td>
removed settings for Wikitude debug lon/lat -> now marker lat/lon respectively layer center lat/lon are used when Wikitude API links are called without explicit parameters &latitude= and &longitude=
</td></tr>
<tr><td>' . $changed . '</td><td>
default setting fields can now be changed by focusing with mouse click
</td></tr>
<tr><td>' . $changed . '</td><td>
added icons to API links on backend for better usability
</td></tr>
<tr><td>' . $fixed . '</td><td>
dynamic preview of marker/layer panel in backend not working as designed
</td></tr>
<tr><td>' . $fixed . '</td><td>
language pot-file did not include all text strings for translations
</td></tr>
<tr><td>' . $fixed . '</td><td>
active translations made setting tabs unaccessible
</td></tr>
</table>'.PHP_EOL;
}
echo '</div>';

/*************************************************************************************************************************************/
/* 2do: change version numbers and date in first line on each update and add if ( ($lmm_version_old < 'x.x' ) ){ to old changelog
*************************************************************************************************************************************
echo '<p style="margin:0.5em 0 0 0;"><strong>' . sprintf($text_a, '3.x') . '</strong> - ' . $text_b . ' xx.08.2014 (<a href="https://www.mapsmarker.com/v3.x" target="_blank">' . $text_c . '</a>):</p>
<table>
<tr><td><a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"><img src="' . LEAFLET_PLUGIN_URL .'inc/img/icon-changelog-pro.png"></a></td><td>
<a href="' . LEAFLET_WP_ADMIN_URL . 'admin.php?page=leafletmapsmarker_pro_upgrade"  target="_top" title="' . $text_h . '"></a>
</td></tr>
<tr><td>' . $new . '</td><td>

</td></tr>
<tr><td>' . $changed . '</td><td>

</td></tr>
<tr><td>' . $fixed . '</td><td>

</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_d . '</a></p></strong>
<p>' . sprintf($text_e, 'https://translate.mapsmarker.com/projects/lmm') . '</p>
</td></tr>
<tr><td>' . $transl . '</td><td>
updated German translation
</td></tr>
<tr><td colspan="2">
<p><strong>' . $text_f . '</a></p></strong>
</td></tr>	
</table>'.PHP_EOL;
echo '<p><hr noshade size="1"/></p>';
*************************************************************************************************************************************/
?>
</body>
</html>
<?php } ?>