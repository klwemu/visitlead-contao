<?php

$overlay = "{visitlead_settings},visitlead_id";
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ";$overlay;";
$GLOBALS['TL_DCA']['tl_settings']['fields']['visitlead_id'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_settings']['visitlead_id'],
    'inputType' => 'text',
    'exclude'   => true,
);






