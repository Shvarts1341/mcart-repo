<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */

$arComponentDescription = array(
    "NAME" => GetMessage("COMPONENT_NAME"),
    "DESCRIPTION" => GetMessage("COMPONENT_DESCRIPTION"),
    "PATH" => array(
        "ID" => GetMessage("COMPONENT_ID"),
    ),
);
