<?php

return[
    'PAGE_TITLE' => '다이내믹 레버리지',
    'PAGE_SUBTITLE' => '최대 1:2000의 다이내믹 레버리지로 거래 잠재력을 극대화하세요.',

    'WHAT_IS' => '다이내믹 레버리지란 무엇인가요?',
    'WHAT_IS_TEXT' => '다이내믹 레버리지를 사용하면 더 적은 자본을 사용하여 거래할 수 있으며 거래량에 따라 자동으로 조정됩니다.',

    'DYNAMIC_LEVERAGE_WITH_XS' => 'XS의 다이내믹 레버리지',
    'DYNAMIC_LEVERAGE_WITH_XS_DESC' => 'XS는 고객의 거래 포지션에 자동으로 적응하는 다이내믹 레버리지 모델을 사용합니다. 고객의 상품당 거래량이 증가함에 따라 제공되는 최대 레버리지도 그에 따라 감소합니다.
    <br/><br/>
    XS는 다양한 자산 클래스와 다양한 계정 유형에 대해 최대 1:2000의 다이내믹 레버리지를 제공합니다.
    당사의 다이내믹 레버리지 모델은 거래 상품별로 이루어집니다. 따라서 고객이 여러 상품에 걸쳐 오픈 포지션을 가지고 있는 경우 레버리지는 각 심볼에 대해 별도로 계산됩니다.',

    'ASSET_CLASS' => '자산 클래스',
    'MAX_LEVERAGE' => '최대 레버리지',

    'LOTS' => 'Lots',
    'MARGIN' => '마진 요건',

    'FX_MAJORS' => '외환 메이저',
    'GOLD' => '금',
    'FX_MINORS' => '외환 마이너',
    'CRUDE_OIL' => '원유',
    'FX_EXOTICS' => '외환 이그조틱',
    'SILVER' => '은',
    'MINOR_INDICES' => '마이너 지수',
    'PLATINUM_AND_PALLADIUM' => '플래티넘 & 팔라듐',
    'METALS(GOLD)' => '금속(금)',
    'METALS(SILVER)' => '금속(은)',
    'METALS(PLATINUM & PALLADIUM)' => '금속(플래티넘 & 팔라듐)',
    'MAJOR_INDICES' => '주요 지수',
    'ENERGY(UKOIL & USOIL)' => '에너지(UKOil 및 USOil)',
    'CRYPTOS(BTC & ETH)' => '암호화폐(BTC & ETH)',
    'BTC_ETH' => 'BTC & ETH',
    
    'MARGIN_REQUIREMENTS' => '마진 요건',

    'DYNAMIC_LEVERAGE_DOES_NOT_APPLY' => '다이내믹 레버리지는 일부 자산 클래스 또는 계정 유형에 적용되지 않습니다.
    <br/>
    자세한 내용은 계약 사양 페이지를 확인하세요.',

    'DYNAMIC_RISK_MANAGEMENT'=>'당사는 시장의 전반적인 변동성에 영향을 미치는 주요 이벤트 및 특정 기간 동안 발생할 수 있는 높은 변동성으로부터 포지션을 보호하기 위해 위험 관리 조치를 적용합니다.
<br/><br/>
HMR(더 높은 마진 요구 사항: higher margin requirements) 기간으로 알려진 이 기간 동안 주문을 개시하려면 더 많은 마진이 필요합니다.
<br/><br/>
HMR 기간에는 주요 뉴스 발표 15분 전부터 10분 후까지, 금요일 장 마감 2시간 전과 월요일 장 개장 후 1시간이 포함됩니다. 
<br/><br/>
HMR 기간 동안 개설된 신규 주문에 사용할 수 있는 최대 레버리지는 자동으로 1:200으로 설정됩니다.
<br/><br/>
이 제한은 해당 기간 내에 개설된 포지션에만 적용된다는 점에 유의하시기 바랍니다. 기존 포지션의 마진 요건은 영향을 받지 않습니다. 
<br/><br/>
HMR 기간 동안 헤지된 오픈 포지션을 청산할 때 더 높은 마진 요건, 특히 청산 시점에 헤지된 주문의 후반부에 대한 더 높은 마진 요건을 충당할 수 있는 여유 마진이 충분하지 않은 경우 청산에 실패할 수 있습니다.',

//new dynamic
'CONSIDER_A_USD_ACCOUNT'=>'레버리지 1:2000, 2랏의 USDJPY (매수 또는 매도) 가 있는 USD 계정을 예로 들어보겠습니다.',
'MARGIN_REQUIRED'=>'필요한 마진은 아래와 같습니다:',
'EXAMPLES_1'=>'예시 1',
'EXAMPLES_2'=>'예시 2',
'EXAMPLES_3'=>'예시 3',
'APPLICABLE_LEVERAGE'=>'적용 레버리지',
'APPLICABLE_MARGIN'=>'적용 마진 요건',
'MARGIN_CALCULATIONS'=>'마진 계산',
'MARGIN_AMOUNT'=>'심볼 통화로 표시된 마진 금액',
'TOTAL_REQUIRED'=>'심볼 통화로 표시된 총 필요 마진',
'THE_ACCOUNT_CURRENCY'=>'계정 통화는 심볼 통화와 동일하므로 전환율은 1입니다.',
'CONVERSION_RATE_USD'=>'전환율 (USD/USD)',
'TOTAL_REQUIRED_IN_ACCOUNT'=>'계정 통화로 표시된 총 필요 마진',
'CONSIDER_A_USD_ACCOUNT_EUR'=>'레버리지 1:2000, 15랏의 EURUSD(매수 또는 매도) 가 있는 USD 계정을 예로 들어보겠습니다. ',
'CONSIDER_EUR_USD'=>'EUR/USD 환율을 1.1000으로 가정할 경우',
'CONVERSION_RATE_USD_EUR'=>'전환율 (USD/EUR)',
'CONVERSION_RATE_EUR_USD'=>'전환율 (EUR/USD)',
'CONSIDER_A_JPY_ACCOUNT'=>'레버리지 1:2000, 210랏의USDJPY (매수 또는 매도) 가 있는 JPY계정을 예로 들어보겠습니다.',
'CONSIDER_JPY_USD'=>'USD/JPY 환율을 150.00으로 가정할 경우',
'CONVERSION_RATE_JPY'=>'전환율 (USD/JPY)',
'CONSIDER_A_EURJPY'=>'레버리지 1:2000, 10랏의 EURJPY(매수 또는 매도) 가 있는 EUR계정을 예로 들어보겠습니다.',
'CONVERSION_RATE_EUR_EUR'=>'전환율 (EUR/EUR)',
'CONSIDER_A_EURJPY_120LOTS'=>'레버리지 1:2000, 120랏의 EURJPY (매수 또는 매도) 가 있는 USD 계정을 예로 들어보겠습니다.',
'CONSIDER_A_EURJPY_210LOTS'=>'레버리지 1:2000, 210랏의 EURJPY(매수 또는 매도)가 있는 JPY 계정을 예로 들어보겠습니다.',
'CONSIDER_EURJPY_RATE'=>'EUR/JPY 환율을 160.00으로 가정할 경우',
'CONSIDER_A_USDZAR'=>'레버리지 1:2000, 20랏의 USDZAR (매수 또는 매도) 이 있는 USD 계정을 예로 들어보겠습니다.',
'CONSIDER_A_EURZAR'=>'레버리지 1:2000, 55랏의 EURZAR (매수 또는 매도) 이 있는 USD 계정을 예로 들어보겠습니다.',
'CONSIDER_A_USDZAR_105LOTS'=>'레버리지 1:2000, 105랏의 USDZAR (매수 또는 매도) 이 있는 JPY 계정을 예로 들어보겠습니다.',
'CONSIDER_A_XAUUSD'=>'레버리지가 1:2000, 2랏의 XAUUSD(매수 또는 매도) 가 있는 USD 계정을 예로 들어보겠습니다.',
'CONSIDER_XAUUSD_VALUE'=>'XAUUSD를 1,950.00 USD으로 가정할 경우',
'CONSIDER_A_XAUUSD_15LOTS'=>'레버리지가 1:2000, 15랏의 XAUUSD(매수 또는 매도)가 있는 USD 계정을 예로 들어보겠습니다.',
'CONSIDER_A_XAUUSD_85LOTS'=>'레버리지 1:2000, 85랏의 XAUUSD(매수 또는 매도)가 있는 JPY 계정을 예로 들어보겠습니다. ',
'CONSIDER_XAGUSD'=>'레버리지 1:2000, 5랏의 XAGUSD (매수 또는 매도)가 있는USD 계정을 예로 들어보겠습니다.',
'CONSIDER_XAGUSD_VALUE'=>'XAGUSD를 20.00 USD으로 가정할 경우',
'CONSIDER_XAGUSD_25LOTS'=>'레버리지 1:2000, 25랏의 XAGUSD (매수 또는 매도)가 있는EUR 계정을 예로 들어보겠습니다.',
'CONSIDER_A_XAGUSD'=>'레버리지 1:2000, 45랏의 XAGUSD (매수 또는 매도)가 있는 JPY 계정을 예로 들어보겠습니다.',
'CONSIDER_XPTUSD'=>'레버리지 1:2000, 2랏의 XPTUSD (매수 또는 매도)가 있는USD 계정을 예로 들어보겠습니다.',
'CONSIDER_XPTUSD_900'=>'XPTUSD를 900.00 USD으로 가정할 경우',
'CONSIDER_XPTUSD_15LOTS'=>'레버리지 1:2000, 15랏의 XPTUSD (매수 또는 매도)가 있는 EUR 계정을 예로 들어보겠습니다.',
'CONSIDER_XPTUSD_25LOTS'=>'레버리지 1:2000, 25랏의 XPTUSD (매수 또는 매도)가 있는 JPY 계정을 예로 들어보겠습니다.',
'CONSIDER_US30'=>'레버리지 1:2000, 5랏의 US30 (매수 또는 매도)이 있는 USD계정을 예로 들어보겠습니다.',
'CONSIDER_US30_VALUE'=>'US30를 35,000.00 USD으로 가정할 경우',
'CONSIDER_US30_30LOTS'=>'레버리지 1:2000, 30랏의 US30 (매수 또는 매도)이 있는 EUR계정을 예로 들어보겠습니다.',
'CONSIDER_US30_205LOTS'=>'레버리지 1:2000, 205랏의 US30 (매수 또는 매도)이 있는 JPY 계정을 예로 들어보겠습니다.',
'CONSIDER_ES35'=>'레버리지 1:2000, 20랏의 ES35(매수 또는 매도)가 있는 EUR 계정을 예로 들어보겠습니다.',
'CONSIDER_ES35_VALUE'=>'ES35를 9,500.00 EUR으로 가정할 경우',
'CONSIDER_ES35_55LOTS'=>'레버리지 1:2000, 55랏의 ES35(매수 또는 매도)가 있는 USD 계정을 예로 들어보겠습니다.',
'CONSIDER_ES35_205LOTS'=>'레버리지 1:2000, 205랏의 ES35(매수 또는 매도) 가 있는 JPY 계정을 예로 들어보겠습니다.',
'CONVERSION_RATE_EUR_JPY'=>'전환율 (EUR/JPY)',
'CONSIDER_UKOIL'=>'레버리지 1:2000, 2랏의 UKOIL(매수 또는 매도)이 있는 USD계정을 예로 들어보겠습니다.',
'CONSIDER_UKOIL_VALUE'=>'UKOIL를 75.00 USD으로 가정할 경우',
'CONSIDER_UKOIL_15LOTS'=>'레버리지 1:2000, 15랏의 UKOIL(매수 또는 매도)이 있는 EUR계정을 예로 들어보겠습니다.',
'CONSIDER_UKOIL_105LOTS'=>'레버리지가 1:2000, 105랏의 UKOIL (매수 또는 매도)이 있는 JPY 계정을 예로 들어보겠습니다.',
'CONSIDER_BTCUSD'=>'레버리지 1:2000, 2랏의 BTCUSD (매수 또는 매도)가 있는 USD 계정을 예로 들어보겠습니다',
'CONSIDER_BTCUSD_VALUE'=>'BTCUSD를 40,000.00 USD으로 가정할 경우',
'CONSIDER_BTCUSD_15LOTS'=>'레버리지 1:2000, 15랏의 BTCUSD(매수 또는 매도)가 있는 EUR 계정을 예로 들어보겠습니다.',
'CONSIDER_BTCUSD_45LOTS'=>'레버리지 1:2000, 45랏의 BTCUSD(매수 또는 매도)가 있는 JPY 계정을 예로 들어보겠습니다.',
];