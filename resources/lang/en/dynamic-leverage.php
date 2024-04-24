<?php

return[
    'PAGE_TITLE' => 'Dynamic Leverage',
    'PAGE_SUBTITLE' => 'Maximize your trading potential with our dynamic leverage up to 1:2000.',

    'WHAT_IS' => 'What is Dynamic Leverage?',
    'WHAT_IS_TEXT' => 'Dynamic leverage allows you to trade using a smaller capital and is automatically adjusted according to the volume of your trade.',

    'DYNAMIC_LEVERAGE_WITH_XS' => 'DYNAMIC LEVERAGE WITH XS',
    'DYNAMIC_LEVERAGE_WITH_XS_DESC' => 'XS Trades uses a dynamic leverage model that automatically adapts to the clients trading positions. As the volume per Instrument of a client increases the maximum leverage offered decreases accordingly.
    <br/><br/>
    XS Trades offers dynamic leverage up to 1:2000 on multiple asset classes and different account types.
    <br/>
    Our dynamic leverage model is done per trading instrument. As such, if a client has positions open across multiple instruments the leverage will be calculated separately on each symbol.',

    'ASSET_CLASS' => 'Asset Class',
    'MAX_LEVERAGE' => 'Maximum Leverage',
    'HMR_LEVERAGE' => 'HMR Leverage',

    'LOTS' => 'Lots',
    'MARGIN' => 'Margin',

    'FX_MAJORS' => 'FX Majors',
    'GOLD' => 'Gold',
    'FX_MINORS' => 'FX Minors',
    'CRUDE_OIL' => 'Crude Oil',
    'FX_EXOTICS' => 'FX Exotics',
    'SILVER' => 'Silver',
    'MINOR_INDICES' => 'Minor Indices',
    'PLATINUM_AND_PALLADIUM' => 'Platinum & Palladium',
    'METALS(GOLD)' => 'Metals (Gold)',
    'METALS(SILVER)' => 'Metals (Silver)',
    'METALS(PLATINUM & PALLADIUM)' => 'Metals (Platinum & Palladium)',
    'MAJOR_INDICES' => 'Major Indices',
    'ENERGY(UKOIL & USOIL)' => 'Energy (UKOIL & USOIL)',
    'CRYPTOS(BTC & ETH)' => 'Cryptos (BTC & ETH)',
    'BTC_ETH' => 'BTC & ETH',
    
    'MARGIN_REQUIREMENTS' => 'Margin Requirements',

    'DYNAMIC_LEVERAGE_DOES_NOT_APPLY' => 'Dynamic Leverage does not apply to some asset classes or account types. For more details please check our contact specifications page.',
'DYNAMIC_RISK_MANAGEMENT'=>'We apply risk management measures to protect positions from possible high volatility during key events and specific time periods which impact the general volatility of the market.
<br/><br/>
Higher amounts of margin are required to open an order during these periods which are known as HMR (higher margin requirements) periods. 
<br/><br/>
The HMR periods includes 15 minutes before major news releases until 10 minutes after, and 2 hours before markets closing on Friday and for 1 hour after market opening on Monday. 
<br/><br/>
The maximum leverage available for new orders opened during HMR periods is set to 1:200 automatically.
<br/><br/>
Please note that the restrictions will apply only to positions that are opened within these periods. The margin requirements of existing positions will not be affected. 
<br/><br/>
Closing an open hedged position during HMR periods can fail if there is insufficient free margin to cover the higher margin requirements, specifically the higher margin requirements on the latter half of a hedged order at the time of closing.',

// new dynamic
'CONSIDER_A_USD_ACCOUNT'=>'Consider a USD account with leverage 1:2000, and 2 lots of USDJPY (Buy or Sell).',
'MARGIN_REQUIRED'=>'The margin required would be as below:',
'EXAMPLES_1'=>'Example 1',
'EXAMPLES_2'=>'Example 2',
'EXAMPLES_3'=>'Example 3',
'APPLICABLE_LEVERAGE'=>'Applicable Leverage',
'APPLICABLE_MARGIN'=>'Applicable Margin Requirement',
'MARGIN_CALCULATIONS'=>'Margin Calculations',
'MARGIN_AMOUNT'=>'Margin Amount in Symbol Currency',
'TOTAL_REQUIRED'=>'Total Required Margin in Symbol Currency',
'THE_ACCOUNT_CURRENCY'=>'The account currency is the same as symbol currency, hence the conversion rate is 1.',
'CONVERSION_RATE_USD'=>'Conversion Rate (USD/USD)',
'TOTAL_REQUIRED_IN_ACCOUNT'=>'Total Required Margin in Account Currency',
'CONSIDER_A_USD_ACCOUNT_EUR'=>'Consider a USD account with leverage 1:2000, and 15 lots of EURUSD (Buy or Sell). ',
'CONSIDER_EUR_USD'=>'Consider EUR/USD rate at 1.1000',
'CONVERSION_RATE_USD_EUR'=>'Conversion Rate (USD/EUR)',
'CONSIDER_A_JPY_ACCOUNT'=>'Consider a JPY account with leverage 1:2000, and 210 lots of USDJPY (Buy or Sell). ',
'CONSIDER_JPY_USD'=>'Consider USD/JPY rate at 150.00',
'CONVERSION_RATE_JPY'=>'Conversion Rate (USD/JPY)',
'CONSIDER_A_EURJPY'=>'Consider a EUR account with leverage 1:2000, and 10 lots of EURJPY (Buy or Sell).',
'CONVERSION_RATE_EUR_EUR'=>'Conversion Rate (EUR/EUR)',
'CONSIDER_A_EURJPY_120LOTS'=>'Consider a USD account with leverage 1:2000, and 120 lots of EURJPY (Buy or Sell). ',
'CONSIDER_A_EURJPY_210LOTS'=>'Consider a JPY account with leverage 1:2000, and 210 lots of EURJPY (Buy or Sell). ',
'CONSIDER_EURJPY_RATE'=>'Consider EUR/JPY rate at 160.00',
'CONSIDER_A_USDZAR'=>'Consider a USD account with leverage 1:2000, and 20 lots of USDZAR (Buy or Sell).',
'CONSIDER_A_EURZAR'=>'Consider a USD account with leverage 1:2000, and 55 lots of EURZAR (Buy or Sell). ',
'CONSIDER_A_USDZAR_105LOTS'=>'Consider a JPY account with leverage 1:2000, and 105 lots of USDZAR (Buy or Sell). ',
'CONSIDER_A_XAUUSD'=>'Consider a USD account with leverage 1:2000, and 2 lots of XAUUSD (Buy or Sell).',
'CONSIDER_XAUUSD_VALUE'=>'Consider XAUUSD: 1,950.00 USD',
'CONSIDER_A_XAUUSD_15LOTS'=>'Consider a EUR account with leverage 1:2000, and 15 lots of XAUUSD (Buy or Sell).',
'CONSIDER_A_XAUUSD_85LOTS'=>'Consider a JPY account with leverage 1:2000, and 85 lots of XAUUSD (Buy or Sell). ',
'CONSIDER_XAGUSD'=>'Consider a USD account with leverage 1:2000, and 5 lots of XAGUSD (Buy or Sell).',
'CONSIDER_XAGUSD_VALUE'=>'Consider XAGUSD: 20.00 USD',
'CONSIDER_XAGUSD_25LOTS'=>'Consider a EUR account with leverage 1:2000, and 25 lots of XAGUSD (Buy or Sell).',
'CONSIDER_A_XAGUSD'=>'Consider a JPY account with leverage 1:2000, and 45 lots of XAGUSD (Buy or Sell).',
'CONSIDER_XPTUSD'=>'Consider a USD account with leverage 1:2000, and 2 lots of XPTUSD (Buy or Sell).',
'CONSIDER_XPTUSD_900'=>'Consider XPTUSD: 900.00 USD',
'CONSIDER_XPTUSD_15LOTS'=>'Consider a EUR account with leverage 1:2000, and 15 lots of XPTUSD (Buy or Sell).',
'CONSIDER_XPTUSD_25LOTS'=>'Consider a JPY account with leverage 1:2000, and 25 lots of XPTUSD (Buy or Sell).',
'CONSIDER_US30'=>'Consider a USD account with leverage 1:2000, and 5 lots of US30 (Buy or Sell).',
'CONSIDER_US30_VALUE'=>'Consider US30: 35,000.00 USD',
'CONSIDER_US30_30LOTS'=>'Consider a EUR account with leverage 1:2000, and 30 lots of US30 (Buy or Sell).',
'CONSIDER_US30_205LOTS'=>'Consider a JPY account with leverage 1:2000, and 205 lots of US30 (Buy or Sell).',
'CONSIDER_ES35'=>'Consider a EUR account with leverage 1:2000, and 20 lots of ES35 (Buy or Sell).',
'CONSIDER_ES35_VALUE'=>'Consider ES35: 9,500.00 EUR',
'CONSIDER_ES35_55LOTS'=>'Consider a USD account with leverage 1:2000, and 55 lots of ES35 (Buy or Sell).',
'CONSIDER_ES35_205LOTS'=>'Consider a JPY account with leverage 1:2000, and 205 lots of ES35 (Buy or Sell).',
'CONVERSION_RATE_EUR_JPY'=>'Conversion Rate (EUR/JPY)',
'CONSIDER_UKOIL'=>'Consider a USD account with leverage 1:2000, and 2 lots of UKOIL (Buy or Sell).',
'CONSIDER_UKOIL_VALUE'=>'Consider UKOIL: 75.00 USD',
'CONSIDER_UKOIL_15LOTS'=>'Consider a EUR account with leverage 1:2000, and 15 lots of UKOIL (Buy or Sell).',
'CONSIDER_UKOIL_105LOTS'=>'Consider a JPY account with leverage 1:2000, and 105 lots of UKOIL (Buy or Sell).',
'CONSIDER_BTCUSD'=>'Consider a USD account with leverage 1:2000, and 2 lots of BTCUSD (Buy or Sell).',
'CONSIDER_BTCUSD_VALUE'=>'Consider BTCUSD: 40,000.00 USD',
'CONSIDER_BTCUSD_15LOTS'=>'Consider a EUR account with leverage 1:2000, and 15 lots of BTCUSD (Buy or Sell).',
'CONSIDER_BTCUSD_45LOTS'=>'Consider a JPY account with leverage 1:2000, and 45 lots of BTCUSD (Buy or Sell).',
'LEVERAGE'=>'leverage',
];