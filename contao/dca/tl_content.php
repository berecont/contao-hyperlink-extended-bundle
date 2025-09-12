<?php

$GLOBALS['TL_DCA']['tl_content']['palettes']['hyperlinkextended'] =
    '{type_legend},type,headline;'
  . '{hyperlinkextended_legend},hyperlinks;'
  . '{template_legend:hide},customTpl;'
  . '{protected_legend:hide},protected;'
  . '{expert_legend:hide},cssID;'
  . '{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['fields']['hyperlinks'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['hyperlinks'],
    'exclude'   => true,
    'inputType' => 'group',
    'palette'   => ['url', 'linkTitle', 'ariaLabel', 'customAttributes', 'linkClass', 'target', 'relTokens', 'download', 'downloadFilename'],
    'fields'    => [
        'url' => [
            'label'     => &$GLOBALS['TL_LANG']['MSC']['url'],
            'inputType' => 'text',
            'eval'      => [
                'rgxp'          => 'url',
                'decodeEntities'=> true,
                'maxlength'     => 2048,
                'dcaPicker'     => true,
                'tl_class'      => 'w33',
            ],
        ],
        'linkTitle' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_content']['hyperlink_linkTitle'],
            'inputType' => 'text',
            'eval'      => [
                'allowHtml' => true,
                'tl_class'  => 'w33',
            ],
        ],
        'ariaLabel' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_content']['hyperlink_ariaLabel'],
            'inputType' => 'text',
            'eval'      => ['tl_class' => 'w33'],
        ],
        'customAttributes' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_content']['hyperlink_customAttributes'],
            'inputType' => 'textarea',
            'eval'      => [
                'decodeEntities' => true,
                'allowHtml'      => false,
                'tl_class'       => 'w33',
                'maxlength'      => 2048,
                'preserveTags'   => false,
                'helpwizard'     => false,
            ],
        ],        
        'target' => [
            'label'     => &$GLOBALS['TL_LANG']['MSC']['target'],
            'inputType' => 'checkbox',
            'eval'      => ['tl_class' => 'w33 m12'],
        ],
        'linkClass' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_content']['hyperlink_linkClass'],
            'inputType' => 'text',
            'eval'      => ['tl_class' => 'w33'],
        ],
        'relTokens' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_content']['hyperlink_relTokens'],
            'inputType' => 'checkbox',
            'options'   => ['noopener', 'noreferrer', 'nofollow', 'ugc', 'sponsored', 'external'],
            'eval'      => [
                'multiple' => true,
                'tl_class' => 'clr w33',
            ],
        ],     
        'download' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_content']['hyperlink_download'],
            'inputType' => 'checkbox',
            'eval'      => ['tl_class' => 'w33 m12'],
        ],      
        'downloadFilename' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_content']['hyperlink_downloadFilename'],
            'inputType' => 'text',
            'eval'      => [
                'maxlength' => 255,
                'tl_class'  => 'w33',
            ],
        ],             
    ],
    'min' => 1,
    'sql' => "blob NULL",
];