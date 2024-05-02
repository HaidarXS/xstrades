<?php
function getCorrectLangSlug(){
    $langSlug = '';
    if(App::getLocale() !== 'en'){
        $langSlug = App::getLocale() .'/';
        if(App::getLocale() == 'jp'){
            $langSlug = 'ja/';
        }
        if(App::getLocale() == 'zh-Hans'){
            $langSlug = 'zh/';
        }
        if(App::getLocale() == 'zh-Hant'){
            $langSlug = 'zh_Hant/';
        }

        if(App::getLocale() == 'ko'){
            $langSlug = 'ko/';
        }
        if(App::getLocale() == 'vi'){
            $langSlug = 'vi/';
        }
    }
    return $langSlug ;

}
function getParams($lang){
    $params = [];
    foreach (Request::route()->parameters() as $key => $value) {
        if($key != 'lang'){
            $params[$key] = $value;
        }
    }
    $params['lang'] = $lang;
    return $params;
}

// function formattedValue($record, $key){
//     $path = '../account_types/' . $accountType . '/' . App::getLocale();
//     $formatedTables = [];
//     if (file_exists($path)) {
//         $tables = File::allFiles($path);
//         foreach ($tables as $table) {
//             $records = json_decode(file_get_contents($path . '/' . $table->getRelativePathname()), true);
//             $formatedTables[] = $records;
//         }
//     }
// }