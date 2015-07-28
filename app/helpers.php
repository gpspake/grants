<?php

/**
 * Return sizes readable by humans
 */
function human_filesize($bytes, $decimals = 2)
{
    $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
    $factor = floor((strlen($bytes) - 1) / 3);

    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) .
    @$size[$factor];
}

/**
 * Is the mime type an image
 */
function is_image($mimeType)
{
    return starts_with($mimeType, 'image/');
}

function get_link($url, $anchorText, $attributes = '')
{
    if (! $url) {
        return $anchorText;
    }

    return '<a href="' . $url . '" ' . $attributes . '>' . $anchorText . '</a>';
}

function get_money($amount, $prefix = '') {

    return $prefix . number_format($amount, 2, '.', ',');

}

/**
 * Return "checked" if true
 */
function checked($value)
{
    return $value ? 'checked' : '';
}

function get_status($isActive, $true, $false){
    return $isActive ? $true : $false;
}