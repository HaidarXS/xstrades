<?php

return[
    'PAGE_TITLE' => 'ダイナミック・レバレッジ',
    'PAGE_SUBTITLE' => '最大2000倍のダイナミック・レバレッジで取引の可能性を最大限に。',

    'WHAT_IS' => 'ダイナミック・レバレッジとは？',
    'WHAT_IS_TEXT' => 'ダイナミック・レバレッジは、最小限の資金での取引が可能で、取引量に応じて自動的に調整されます。',

    'DYNAMIC_LEVERAGE_WITH_XS' => 'XSのダイナミック・レバレッジ',
    'DYNAMIC_LEVERAGE_WITH_XS_DESC' => 'XSでは、お客様の取引ポジションに自動的に適応するダイナミック・レバレッジモデルを採用しています 。<br/>
    お客様の取引量が増加するにつれ、提供される最大レバレッジも減少します。
    <br/><br/>
    XSのダイナミック・レバレッジは最大2000倍です。
    XSのダイナミック・レバレッジは、銘柄ごとに適用されます。<br/>
     そのため、お客様が複数の金融商品でポジションをお持ちの場合、レバレッジは各銘柄ごとに計算されます。',

    'ASSET_CLASS' => 'アセットクラス',
    'MAX_LEVERAGE' => '最大レバレッジ',

    'LOTS' => 'ロット',
    'MARGIN' => '証拠金',

    'FX_MAJORS' => 'FX メジャー通貨',
    'GOLD' => 'ゴールド',
    'FX_MINORS' => 'FX マイナー通貨',
    'CRUDE_OIL' => '原油',
    'FX_EXOTICS' => 'FX エキゾチック通貨',
    'SILVER' => 'シルバー',
    'MINOR_INDICES' => 'マイナー・インデックス',
    'PLATINUM_AND_PALLADIUM' => 'プラチナ及びパラジウム',
    'METALS(GOLD)' => '金属（ゴールド）',
    'METALS(SILVER)' => '金属（シルバー）',
    'METALS(PLATINUM & PALLADIUM)' => '金属 (プラチナ及びパラジウム)',
    'MAJOR_INDICES' => 'インデックス',
    'ENERGY(UKOIL & USOIL)' => 'エネルギー (UKOil及びUSOil)',
    'CRYPTOS(BTC & ETH)' => '仮想通貨 (BTC及びETH)',
    'BTC_ETH' => 'BTC及びETH',
    
    'MARGIN_REQUIREMENTS' => '必要証拠金',

    'DYNAMIC_LEVERAGE_DOES_NOT_APPLY' => 'ダイナミック・レバレッジは一部のアセットクラスまたは口座タイプには適用されません。
    <br/>
    詳細については、契約仕様をご確認ください。',

    'DYNAMIC_RISK_MANAGEMENT'=>'当社は、市場の一般的なボラティリティに影響を与える重要なイベントや特定の時間帯に、可能性のある高いボラティリティからポジションを保護するためにリスク管理測定を適用します。
<br/><br/>
HMR（必要証拠金引き上げ）期間と呼ばれるこれらの時間帯には、注文を建てるために高い証拠金が必要となります。
<br/><br/>
HMR期間には、主要ニュースリリースの15分前から10分後まで、金曜日の市場クローズの2時間前、および月曜日の市場オープン後1時間が含まれます。
<br/><br/>
HMR時間帯に新規で発注された注文の最大レバレッジは、自動的に1:200に設定されます。
<br/><br/>
この制限は、これらの期間内に新規建てされたポジションにのみ適用さ れます。既存のポジションの必要証拠金は影響を受けません。
<br/><br/>
HMR期間中に未決済のヘッジポジションを決済する場合、高い必要証拠金、特に決済時にヘッジ注文の後半にかかる高い必要証拠金をカバーするための十分な自由証拠金がない場合、決済に失敗する可能性がございます。',
'HMR_LEVERAGE'=>'HMR（必要証拠金引き上げ）期間の
<br/>
レバレッジ',
// new dynamic
'CONSIDER_A_USD_ACCOUNT'=>'レバレッジ1:2000のUSD口座で、USD/JPYを2ロット（買いまたは売り）',
'MARGIN_REQUIRED'=>'取引する場合の必要証拠金は以下の通りです：',
'EXAMPLES_1'=>'例 1',
'EXAMPLES_2'=>'例 2',
'EXAMPLES_3'=>'例 3',
'APPLICABLE_LEVERAGE'=>'レバレッジ',
'APPLICABLE_MARGIN'=>'必要証拠金',
'MARGIN_CALCULATIONS'=>'証拠金計算',
'MARGIN_AMOUNT'=>'該当通貨の証拠金額',
'TOTAL_REQUIRED'=>'該当通貨建て必要証拠金総額',
'THE_ACCOUNT_CURRENCY'=>'口座通貨は該当通貨と同じため、換算レートは1となります。',
'CONVERSION_RATE_USD'=>'換算レート  (USD/USD)',
'TOTAL_REQUIRED_IN_ACCOUNT'=>'口座通貨での必要証拠金総額',
'CONSIDER_A_USD_ACCOUNT_EUR'=>'レバレッジ1:2000のUSD口座で、EUR/USDを15ロット（買いまたは売り）',
'CONSIDER_EUR_USD'=>'換算レート1:1で、EUR/USDを取引する場合：',
'CONVERSION_RATE_USD_EUR'=>'換算レート  (USD/EUR)',
'CONSIDER_A_JPY_ACCOUNT'=>'レバレッジ1:2000のJPY口座で、USD/JPYを210ロット（買いまたは売り） ',
'CONSIDER_JPY_USD'=>'換算レート150.00で、USD/JPYを取引する場合：',
'CONVERSION_RATE_JPY'=>'換算レート  (USD/JPY)',
'CONSIDER_A_EURJPY'=>'レバレッジ1:2000のEUR口座で、EUR/JPYを10ロット（買いまたは売り）',
'CONVERSION_RATE_EUR_EUR'=>'換算レート  (EUR/EUR)',
'CONSIDER_A_EURJPY_120LOTS'=>'レバレッジ1:2000のUSD口座で、EUR/JPYを120ロット（買いまたは売り）',
'CONSIDER_A_EURJPY_210LOTS'=>'レバレッジ1:2000のJPY口座で、EUR/JPYを210ロット（買いまたは売り）',
'CONSIDER_EURJPY_RATE'=>'換算レート160.00で、EUR/JPYを取引する場合：',
'CONSIDER_A_USDZAR'=>'レバレッジ1:2000のUSD口座で、USD/ZARを20ロット（買いまたは売り）',
'CONSIDER_A_EURZAR'=>'レバレッジ1:2000の米ドル口座で、EUR/ZARを55ロット（買いまたは売り） ',
'CONSIDER_A_USDZAR_105LOTS'=>'レバレッジ1:2000のJPY口座で、USD/ZARを105ロット（買いまたは売り）',
'CONSIDER_A_XAUUSD'=>'レバレッジ1:2000のUSD口座で、XAU/USDを2ロット（買いまたは売り）',
'CONSIDER_XAUUSD_VALUE'=>'XAUUSD：1,950.00 USDとします。',
'CONSIDER_A_XAUUSD_15LOTS'=>'レバレッジ1:2000のEUR口座で、XAU/USDを15ロット（買いまたは売り）',
'CONSIDER_A_XAUUSD_85LOTS'=>'レバレッジ1:2000のJPY口座で、XAU/USDを85ロット（買いまたは売り）',
'CONSIDER_XAGUSD'=>'レバレッジ1:2000の米ドル口座で、XAG/USDを5ロット（買いまたは売り）',
'CONSIDER_XAGUSD_VALUE'=>'XAGUSD: 20.00 USDとします。',
'CONSIDER_XAGUSD_25LOTS'=>'レバレッジ1:2000のEUR口座で、XAG/USDを25ロット（買いまたは売り）',
'CONSIDER_A_XAGUSD'=>'レバレッジ1:2000のJPY口座で、XAG/USDを45ロット（買いまたは売り）',
'CONSIDER_XPTUSD'=>'レバレッジ1:2000のUSD口座で、XPT/USDを2ロット（買いまたは売り）',
'CONSIDER_XPTUSD_900'=>'XPTUSD: 900.00 USDとします。',
'CONSIDER_XPTUSD_15LOTS'=>'レバレッジ1:2000のEUR口座で、XPT/USDを15ロット（買いまたは売り）',
'CONSIDER_XPTUSD_25LOTS'=>'レバレッジ1:2000のJPY口座で、XPT/USDを25ロット（買いまたは売り）',
'CONSIDER_US30'=>'レバレッジ1:2000のUSD口座で、US30を5ロット（買いまたは売り）',
'CONSIDER_US30_VALUE'=>'US30: : 35,000.00 USDとします。',
'CONSIDER_US30_30LOTS'=>'レバレッジ1:2000のEUR口座で、US30を30ロット（買いまたは売り）',
'CONSIDER_US30_205LOTS'=>'レバレッジ1:2000のJPY口座で、US30を205ロット（買いまたは売り）',
'CONSIDER_ES35'=>'レバレッジ1:2000のEUR口座で、ES35を20ロット（買いまたは売り）',
'CONSIDER_ES35_VALUE'=>'ES35: 9,500.00 EURとします。',
'CONSIDER_ES35_55LOTS'=>'レバレッジ1:2000のUSD口座で、ES35を55ロット（買いまたは売り）',
'CONSIDER_ES35_205LOTS'=>'レバレッジ1:2000のJPY口座で、ES35を205ロット（買いまたは売り）',
'CONVERSION_RATE_EUR_JPY'=>'換算レート  (EUR/JPY)',
'CONSIDER_UKOIL'=>'レバレッジ1:2000の米ドル口座で、UKOILを2ロット（買いまたは売り）',
'CONSIDER_UKOIL_VALUE'=>'UKOIL: 75.00 USDとします。',
'CONSIDER_UKOIL_15LOTS'=>'レバレッジ1:2000のEUR口座で、UKOILを15ロット（買いまたは売り）',
'CONSIDER_UKOIL_105LOTS'=>'レバレッジ1:2000のJPY口座で、UKOILを105ロット（買いまたは売り',
'CONSIDER_BTCUSD'=>'レバレッジ1:2000のUSD口座で、BTC/USDを2ロット（買いまたは売り）',
'CONSIDER_BTCUSD_VALUE'=>'BTCUSD: 40,000.00 USDとします。',
'CONSIDER_BTCUSD_15LOTS'=>'レバレッジ1:2000のEUR口座で、BTC/USDを15ロット（買いまたは売り）',
'CONSIDER_BTCUSD_45LOTS'=>'レバレッジ1:2000のJPY口座で、BTC/USDを45ロット（買いまたは売り）',
'LEVERAGE'=>'レバレッジ',
];