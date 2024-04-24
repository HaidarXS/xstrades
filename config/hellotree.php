<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CMS route prefix
    |--------------------------------------------------------------------------
    */

    'cms_route_prefix' => 'admin',


    /*
    |--------------------------------------------------------------------------
    | API route prefix
    |--------------------------------------------------------------------------
    */

    'api_route_prefix' => 'api',


    /*
    |--------------------------------------------------------------------------
    | CMS assets
    |--------------------------------------------------------------------------
    */

    'cms_assets' => [

    	/*
	    |--------------------------------------------------------------------------
	    | Used styles. You can add or remove any
	    |--------------------------------------------------------------------------
	    */

	    'styles' => [
	    	'asset?path=css/font-awesome/css/font-awesome.min.css',
	    	'asset?path=css/bootstrap.min.css',
	    	'asset?path=css/dataTables.min.css',
	    	'asset?path=css/select2.min.css',
	    	'asset?path=css/main.min.css',
	    	'asset?path=css/imagine-labs.css',
	    ],


    	/*
	    |--------------------------------------------------------------------------
	    | Used scripts. You can add or remove any
	    |--------------------------------------------------------------------------
	    */

	    'scripts' => [
	    	'asset?path=js/jquery.min.js',
	    	'asset?path=js/jquery-ui.min.js',
	    	'asset?path=js/dataTables.min.js',
	    	'asset?path=js/dataTables.buttons.min.js',
	    	'asset?path=js/jszip.min.js',
	    	'asset?path=js/pdfmake.min.js',
	    	'asset?path=js/vfs_fonts.js',
	    	'asset?path=js/buttons.html5.min.js',
	    	'asset?path=js/select2.min.js',
	    	'https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js',
	    	'asset?path=js/main.js',
	    ],
    ],


    /*
    |--------------------------------------------------------------------------
    | CMS branding
    |--------------------------------------------------------------------------
    */

    'favicon' => [
        'apple-icon-57x57' => '/img/logo.webp',
        'apple-icon-60x60' => '/img/logo.webp',
        'apple-icon-72x72' => '/img/logo.webp',
        'apple-icon-76x76' => '/img/logo.webp',
        'apple-icon-114x114' => '/img/logo.webp',
        'apple-icon-120x120' => '/img/logo.webp',
        'apple-icon-144x144' => '/img/logo.webp',
        'apple-icon-152x152' => '/img/logo.webp',
        'apple-icon-180x180' => '/img/logo.webp',
        'android-icon-192x192' => '/img/logo.webp',
        'favicon-32x32' => '/img/logo.webp',
        'favicon-96x96' => '/img/logo.webp',
        'favicon-16x16' => '/img/logo.webp',
        'manifest' => '/img/logo.webp',
        'msapplication-TileColor' => '#ffffff',
        'msapplication-TileImage' => '/img/logo.webp',
        'theme-color' => '#ffffff',
    ],
    'logo' => '/img/logo.webp',
    'loading' => '/img/logo.webp',
    'footer_slogan' => 'XSTrades.com',
    'footer_copyright' => 'V0.1 All Right Reserved Copyright &reg;',
    'tab_title' => 'XS | Admin Panel',
    'home_title' => 'XS Admin Panel',
    'home_content' => '',



    /*
    |--------------------------------------------------------------------------
    | CKEditor
    |--------------------------------------------------------------------------
    */

    'ckeditor' => [
        'colors' => [],
    ],


    /*
    |--------------------------------------------------------------------------
    | Storage
    |--------------------------------------------------------------------------
    */

    'use_original_name' => false,


    /*
    |--------------------------------------------------------------------------
    | Tinify
    |--------------------------------------------------------------------------
    */

    'tinify' => [
        'key' => null
    ],

];
