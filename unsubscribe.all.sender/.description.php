<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)
{
    die();
}

$arComponentDescription = array(
    "NAME" => GetMessage("CUSTOM_UNSUBSCRIBE_COMPONENT_NAME"),
    "DESCRIPTION" => GetMessage("CUSTOM_UNSUBSCRIBE_COMPONENT_DESCRIPTION"),
    'ICON' => '/images/subscr_edit.gif',
    'CACHE_PATH' => 'Y',
    "PATH" => array(
        "ID" => "service",
        "CHILD" => array(
            "ID" => "sender",
            "NAME" => GetMessage("CD_BSF_SERVICE")
        )
    ),
);
?>