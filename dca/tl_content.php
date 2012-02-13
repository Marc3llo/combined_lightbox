<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Extend the default palette
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['image'] = str_replace
(
   'cssID',
   'cssID,lightbox',
   $GLOBALS['TL_DCA']['tl_content']['palettes']['image']
);


$GLOBALS['TL_DCA']['tl_content']['palettes']['gallery'] = str_replace
(
   'cssID',
   'cssID,lightbox',
   $GLOBALS['TL_DCA']['tl_content']['palettes']['gallery']
);

/**
 * Add the field to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['lightbox'] = array
(
   'label'     => &$GLOBALS['TL_LANG']['tl_content']['lightbox'],
   'exclude'   => true,
   'inputType' => 'text',
   'eval'      => array('mandatory'=>false, 'rgxp'=>'text', 'maxlength'=>20, 'tl_class'=>'w50')
);

?>