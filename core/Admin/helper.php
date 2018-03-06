<?php

if (!function_exists('backend_url')) {
    function backend_url($module, $item = '')
    {
        $slug = strtolower($module . '/' . str_replace('_', '/', $item));
        return url($slug);
    }
}