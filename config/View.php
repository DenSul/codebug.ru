<?php

$theme = 'default';

return [
    'paths'    => [
        resource_path(sprintf('themes/%s/views', $theme)),
    ],
    'compiled' => '/app/storage/framework/views',
];
