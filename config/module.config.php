<?php

return array(
    'twbbundle' => array (
        'ignoredViewHelpers' => array (
            'file',
            'checkbox',
            'radio',
            'submit',
            'multi_checkbox',
            'static',
            'button',
            'reset'
        ),
        'type_map' => array(),
        'class_map' => array(),
    ),
    'service_manager' => array (
        'factories' => array (
            'TwbBundle\Options\ModuleOptions' => 'TwbBundle\Options\Factory\ModuleOptionsFactory'
        )
    ),
    'view_helpers' => array (
        'invokables' => array (
            //Alert
            'twbAlert' => 'TwbBundle\View\Helper\TwbBundleAlert',
            //Badge
            'twbBadge' => 'TwbBundle\View\Helper\TwbBundleBadge',
            //Button group
            'twbButtonGroup' => 'TwbBundle\View\Helper\TwbBundleButtonGroup',
            //DropDown
            'twbDropDown' => 'TwbBundle\View\Helper\TwbBundleDropDown',
            //Form
            'twbForm' => 'TwbBundle\Form\View\Helper\TwbBundleForm',
            'twbFormButton' => 'TwbBundle\Form\View\Helper\TwbBundleFormButton',
            'twbFormSubmit' => 'TwbBundle\Form\View\Helper\TwbBundleFormButton',
            'twbFormCheckbox' => 'TwbBundle\Form\View\Helper\TwbBundleFormCheckbox',
            'twbFormCollection' => 'TwbBundle\Form\View\Helper\TwbBundleFormCollection',
            'twbFormElementErrors' => 'TwbBundle\Form\View\Helper\TwbBundleFormElementErrors',
            'twbFormMultiCheckbox' => 'TwbBundle\Form\View\Helper\TwbBundleFormMultiCheckbox',
            'twbFormRadio' => 'TwbBundle\Form\View\Helper\TwbBundleFormRadio',
            'twbFormRow' => 'TwbBundle\Form\View\Helper\TwbBundleFormRow',
            'twbFormStatic' => 'TwbBundle\Form\View\Helper\TwbBundleFormStatic',
            //Form Errors
            'twbFormErrors' => 'TwbBundle\Form\View\Helper\TwbBundleFormErrors',
            //Glyphicon
            'twbGlyphicon' => 'TwbBundle\View\Helper\TwbBundleGlyphicon',
            //FontAwesome
            'twbFontAwesome' => 'TwbBundle\View\Helper\TwbBundleFontAwesome',
            //Label
            'twbLabel' => 'TwbBundle\View\Helper\TwbBundleLabel'
        ),
        'factories' => array (
            'twbFormElement' => 'TwbBundle\Form\View\Helper\Factory\TwbBundleFormElementFactory',
        )
    ),
);
