<?php

$_nt = array(
    'cs' => array('for-you' => 'Pro vás', 'dl' => 'Stáhnout', 'next' => 'A dále?', 'notes' => 'Poznámky'),
    'de' => array('for-you' => 'Für Sie', 'dl' => 'Download', 'next' => 'Und nun?', 'notes' => 'Release-Notes'),
    'el' => array('for-you' => 'Για εσάς', 'dl' => 'Λήψη', 'next' => 'Και μετά;', 'notes' => 'Σημειώσεις'),
    'en' => array('for-you' => 'For you', 'dl' => 'Download', 'next' => 'And next?', 'notes' => 'Notes'),
    'es' => array('for-you' => 'Para usted', 'dl' => 'Descargar', 'next' => '¿Y qué sigue?', 'notes' => 'Notas'),
    'et' => array('for-you' => 'Teie jaoks', 'dl' => 'Allalaadimine', 'next' => 'Ja mis edasi?', 'notes' => 'Märkmed'),
    'fr' => array('for-you' => 'Pour vous', 'dl' => 'Télécharger', 'next' => 'Et après&nbsp;?'),
    'it' => array('for-you' => 'Per voi', 'dl' => 'Scaricare', 'next' => 'E dopo&nbsp;?', 'notes' => 'Note'),
    'nb' => array('for-you' => 'For deg', 'dl' => 'Last ned', 'next' => 'Neste steg?', 'notes' => 'Merknader'),
    'nl' => array('for-you' => 'Voor u', 'dl' => 'Download', 'next' => 'En nu?', 'notes' => 'Opmerkingen'),
    'pt' => array('for-you' => 'Para si', 'dl' => 'Transferir', 'next' => 'E depois?', 'notes' => 'Notas'),
    'ro' => array('for-you' => 'Pentru voi', 'dl' => 'Descărcați', 'next' => 'Și după?', 'notes' => 'Notele ediției'),
    'tr' => array('for-you' => 'Sizin için', 'dl' => 'İndirin', 'next' => 'Peki sonra?', 'notes' => 'Notlar'),
    'uk' => array('for-you' => 'Для вас', 'dl' => 'Звантаження', 'next' => 'Що далі?', 'notes' => 'Нотатки'),
    'zh-tw' => array('for-you' => '為了您', 'dl' => '下載', 'next' => '下一步呢？', 'notes' => '通告')
);

if (array_key_exists($locale, $_nt))
    $_nt = array_merge($_nt['en'], $_nt[$locale]);
else
    $_nt = $_nt['en'];

$nav = array(
    "/{$locale}/1/"         => '1',
    "/{$locale}/1/for-you/" => $_nt['for-you'],
    "/{$locale}/downloads/1/" => $_nt['dl'],
    "/{$locale}/1/next/"    => $_nt['next'],
    "/{$locale}/1/notes/"   => $_nt['notes']
);

$sru = trim($_SERVER['REQUEST_URI']);

$pnav = array();
foreach ($nav as $k => $v) {
    $pnav[] = sprintf('<a href="%s"%s>%s</a>',
        $k,
        $k == $sru ? ' class="sel"' : null,
        $v);
}
$pnav = implode(' | ', $pnav);

echo <<<S
<div class="para" style="border-bottom: 1px solid #ddd; background: rgba(200, 200, 200, 0.2); padding-bottom: 0;">
<p id="subnav">{$pnav}</p>
</div>
S;
