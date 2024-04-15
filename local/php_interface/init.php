<?function dump($var, $hide = false, $die = false)
{
    global $USER;
    if ($USER->isAdmin()) { ?>
        <pre style="text-align: left; font-size: 12px;<?if($hide):?> display: none;<?endif;?>">
            <? print_r($var) ?>
        </pre>
        <?
    }
    if ($die) {
        die();
    }
}
?>