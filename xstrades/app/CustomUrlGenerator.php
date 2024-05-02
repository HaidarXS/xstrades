<?php

namespace App;

use Illuminate\Routing\UrlGenerator;

class CustomUrlGenerator extends UrlGenerator
{
    /**
     * Force the URLs to have a trailing slash.
     *
     * @param  string  $path
     * @param  bool    $extra
     * @return string
     */
    public function forceTrailingSlash($path, $extra = false)
    {
        return parent::to($path, $extra) . '/';
    }
}

?>