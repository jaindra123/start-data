<?php

$prefix = '/public/';
$prefix1= '/start-data';


return [

    'ASSETS_URL'                                        =>          env('APP_URL').$prefix1.$prefix.'assets/',
    'QUESTIONAIR_PAGE_IMAGE'                            =>          '/assets/questionair_image/',
    // 'QUESTIONAIR_PAGE_IMAGE_FULL'                    =>          $prefix.'/assets/questionair_image/',
    'ASSET_IMAGE_FULL'                                  =>          env('APP_URL').$prefix1.$prefix.'assets/img/',
    'QUESTIONAIR_PAGE_IMAGE_FULL'                       =>          env('APP_URL').$prefix1.$prefix.'assets/questionair_image/',

    'QUESTIONAIR_URL'                                   =>          env('APP_URL').$prefix1,
];





?>