<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class LanguageManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $availableLangs = ['en'];

        if (isset($request->lang)) {

            $currentPath = substr($request->getPathInfo(), strlen('/' . $request->lang));

            if ($request->lang == 'kr') {
                App::setLocale('ko');
                return redirect('/ko' . ($currentPath ? '/' . ltrim($currentPath, '/') : ''));
            }

            if ($request->lang == 'cn') {
                App::setLocale('zh-Hans');
                return redirect('/zh-Hans' . ($currentPath ? '/' . ltrim($currentPath, '/') : ''));
            }


            if ($request->lang == 'zh') {
                App::setLocale('zh-Hant');
                return redirect('/zh-Hant' . ($currentPath ? '/' . ltrim($currentPath, '/') : ''));
            }

            if ($request->lang == 'vn') {
                App::setLocale('vi');
                return redirect('/vi' . ($currentPath ? '/' . ltrim($currentPath, '/') : ''));
            }


            if (!in_array($request->lang, $availableLangs)) {

                session()->put('locale', 'en');
                App::setLocale('en');
                return redirect('/en/' . $request->lang);

            }

            App::setLocale($request->lang);
            session()->put('locale', $request->lang);

        }


        URL::defaults(['lang' => session()->get('locale')]);

        return $next($request);
    }
}