<?php

use App\Models\metadata1;


function get_meta_value1($meta_key)
{
    $data = metadata1::where('meta_key', $meta_key)->first();
    if ($data) {
        return $data->meta_value;
    }
}
