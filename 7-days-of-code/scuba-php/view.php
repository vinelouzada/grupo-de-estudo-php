<?php


function render_view($template)
{
    $content = file_get_contents(VIEW_FOLDER.$template.'.view');
    echo $content;
}