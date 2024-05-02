<?php

return[
    'PAGE_TITLE' => 'Apalancamiento Dinámico',
    'PAGE_SUBTITLE' => 'Maximice su potencial de negociación con nuestro apalancamiento dinámico de hasta 1:2000.',

    'WHAT_IS' => '¿Qué es el Apalancamiento Dinámico?',
    'WHAT_IS_TEXT' => 'El apalancamiento dinámico le permite operar utilizando un capital menor y se ajusta automáticamente de acuerdo con el volumen de su operación.',

    'DYNAMIC_LEVERAGE_WITH_XS' => 'Apalancamiento Dinámico con XS',
    'DYNAMIC_LEVERAGE_WITH_XS_DESC' => 'XS utiliza un modelo de apalancamiento dinámico que se adapta automáticamente a las posiciones de negociación de los clientes. A medida que el volumen por Instrumento de un cliente aumenta, el apalancamiento máximo ofrecido disminuye proporcionalmente.
    <br/><br/>
    XS ofrece apalancamiento dinámico de hasta 1:2000 en múltiples clases de activos y diferentes tipos de cuentas. 
    Nuestro modelo de apalancamiento dinámico se realiza por instrumento de negociación. Así, si un cliente tiene posiciones abiertas en varios instrumentos, el apalancamiento será calculado separadamente para cada símbolo.',

    'ASSET_CLASS' => 'Clases de Activos',
    'MAX_LEVERAGE' => 'Apalancamiento Máximo',

    'LOTS' => 'Lotes',
    'MARGIN' => 'Margen',

    'FX_MAJORS' => 'Pares de Divisas Mayores',
    'GOLD' => 'Oro',
    'FX_MINORS' => 'Pares de Divisas Menores',
    'CRUDE_OIL' => 'Petróleo Crudo',
    'FX_EXOTICS' => 'Pares de Divisas Exóticos',
    'SILVER' => 'Plata',
    'MINOR_INDICES' => 'Índices Menores',
    'PLATINUM_AND_PALLADIUM' => 'Platino y Paladio',
    'METALS(GOLD)' => 'Metales (Oro)',
    'METALS(SILVER)' => 'Metales (Plata)',
    'METALS(PLATINUM & PALLADIUM)' => 'Metales (Platino y Paladio)',
    'MAJOR_INDICES' => 'Índices Mayores',
    'ENERGY(UKOIL & USOIL)' => 'Energía (Petróleo del Reino Unido y Petróleo de EE.UU.)',
    'CRYPTOS(BTC & ETH)' => 'Criptomonedas (BTC y ETH)',
    'BTC_ETH' => 'BTC y ETH',
    
    'MARGIN_REQUIREMENTS' => 'Requisitos de Margen',

    'DYNAMIC_LEVERAGE_DOES_NOT_APPLY' => 'El Apalancamiento Dinámico no se aplica a algunas clases de activos o tipos de cuenta.
    <br/>
    Para más detalles, por favor, verifique nuestra página de especificaciones de contrato.',

    'DYNAMIC_RISK_MANAGEMENT'=>'Aplicamos medidas de gestión de riesgos para proteger las posiciones de una posible alta volatilidad durante eventos clave y períodos de tiempo específicos que impactan la volatilidad general del mercado.
<br/><br/>
Se requieren cantidades más altas de margen para abrir una orden durante estos períodos que se conocen como períodos HMR (requisitos de margen más altos).
<br/><br/>
Los períodos de HMR incluyen desde 15 minutos antes de los principales comunicados de prensa hasta 10 minutos después, y 2 horas antes del cierre de los mercados el viernes y 1 hora después de la apertura del mercado el lunes.
<br/><br/>
El apalancamiento máximo disponible para nuevas órdenes abiertas durante los períodos de HMR se establece automáticamente en 1:200.
<br/><br/>
Tenga en cuenta que las restricciones se aplicarán únicamente a las posiciones que se abran dentro de estos períodos. Los requisitos de margen de las posiciones existentes no se verán afectados.
<br/><br/>
El cierre de una posición cubierta abierta durante los períodos de HMR puede fracasar si no hay suficiente margen libre para cubrir los requisitos de margen más altos, específicamente aquellos en la segunda mitad de una orden cubierta en el momento del cierre.',
'HMR_LEVERAGE'=>'Apalancamiento HMR',
//new dynamic
'CONSIDER_A_USD_ACCOUNT'=>'Considere una cuenta en USD con apalancamiento de 1:2000 y 2 Lotes de USDJPY (Compra o Venta).',
'MARGIN_REQUIRED'=>'El margen necesario sería como a continuación:',
'EXAMPLES_1'=>'Ejemplo 1',
'EXAMPLES_2'=>'Ejemplo 2',
'EXAMPLES_3'=>'Ejemplo 3',
'APPLICABLE_LEVERAGE'=>'Apalancamiento Aplicable',
'APPLICABLE_MARGIN'=>'Requerimiento de Margen Aplicable',
'MARGIN_CALCULATIONS'=>'Cálculos de Margen',
'MARGIN_AMOUNT'=>'Valor de la Margen en la Moneda del Símbolo',
'TOTAL_REQUIRED'=>'Margen Total Exigida en la Moneda del Símbolo',
'THE_ACCOUNT_CURRENCY'=>'La moneda de la cuenta es la misma que la moneda del símbolo, por lo tanto, la Tasa de Conversión es 1.',
'CONVERSION_RATE_USD'=>'Tasa de Conversión  (USD/USD)',
'TOTAL_REQUIRED_IN_ACCOUNT'=>'Margen Total Exigida en la Moneda de la Cuenta',
'CONSIDER_A_USD_ACCOUNT_EUR'=>'Considere una cuenta en USD con apalancamiento de 1:2000 y 15 Lotes de EURUSD (Compra o Venta). ',
'CONSIDER_EUR_USD'=>'Considere la tasa de EUR/USD en 1.1000',
'CONVERSION_RATE_USD_EUR'=>'Tasa de Conversión  (USD/EUR)',
'CONSIDER_A_JPY_ACCOUNT'=>'Considere una cuenta en JPY con apalancamiento de 1:2000 y 210 Lotes de USDJPY (Compra o Venta).',
'CONSIDER_JPY_USD'=>'Considere la tasa de USD/JPY en 150.00',
'CONVERSION_RATE_JPY'=>'Tasa de Conversión  (USD/JPY)',
'CONSIDER_A_EURJPY'=>'Considere una cuenta en EUR con apalancamiento de 1:2000 y 10 Lotes de EURJPY (Compra o Venta).',
'CONVERSION_RATE_EUR_EUR'=>'Tasa de Conversión  (EUR/EUR)',
'CONSIDER_A_EURJPY_120LOTS'=>'Considere una cuenta en USD con apalancamiento de 1:2000 y 120 Lotes de EURJPY (Compra o Venta). ',
'CONSIDER_A_EURJPY_210LOTS'=>'Considere una cuenta en JPY con apalancamiento de 1:2000 y 210 Lotes de EURJPY (Compra o Venta). ',
'CONSIDER_EURJPY_RATE'=>'Considere la tasa de EUR/JPY en 160.00',
'CONSIDER_A_USDZAR'=>'Considere una cuenta en USD con apalancamiento de 1:2000 y 20 Lotes de USDZAR (Compra o Venta).',
'CONSIDER_A_EURZAR'=>'Considere una cuenta en USD con apalancamiento de 1:2000 y 55 Lotes de EURZAR (Compra o Venta). ',
'CONSIDER_A_USDZAR_105LOTS'=>'Considere una cuenta en JPY con apalancamiento de 1:2000 y 105 Lotes de USDZAR (Compra o Venta).  ',
'CONSIDER_A_XAUUSD'=>'Considere una cuenta en USD con apalancamiento de 1:2000 y 2 Lotes de XAUUSD (Compra o Venta).',
'CONSIDER_XAUUSD_VALUE'=>'Considere XAUUSD: 1.950,00 USD',
'CONSIDER_A_XAUUSD_15LOTS'=>'Considere una cuenta en EUR con apalancamiento de 1:2000 y 15 Lotes de XAUUSD (Compra o Venta).',
'CONSIDER_A_XAUUSD_85LOTS'=>'Considere una cuenta en JPY con apalancamiento de 1:2000 y 85 Lotes de XAUUSD (Compra o Venta). ',
'CONSIDER_XAGUSD'=>'Considere una cuenta en USD con apalancamiento de 1:2000 y 5 Lotes de XAGUSD (Compra o Venta).',
'CONSIDER_XAGUSD_VALUE'=>'Considere XAGUSD: 20.00 USD',
'CONSIDER_XAGUSD_25LOTS'=>'Considere una cuenta en EUR con apalancamiento de 1:2000 y 25 Lotes de XAGUSD (Compra o Venta).',
'CONSIDER_A_XAGUSD'=>'Considere una cuenta en JPY con apalancamiento de 1:2000 y 45 Lotes de XAGUSD (Compra o Venta).',
'CONSIDER_XPTUSD'=>'Considere una cuenta en EUR con apalancamiento de 1:2000 y 2 Lotes de XPTUSD (Compra ou Venta).',
'CONSIDER_XPTUSD_900'=>'Considere XPTUSD: 900.00 USD',
'CONSIDER_XPTUSD_15LOTS'=>'Considere una cuenta en EUR con apalancamiento de 1:2000 y 15 Lotes de XPTUSD (Compra o Venta).',
'CONSIDER_XPTUSD_25LOTS'=>'Considere una cuenta en JPY con apalancamiento de 1:2000 y 25 Lotes de XPTUSD (Compra o Venta).',
'CONSIDER_US30'=>'Considere una cuenta en USD con apalancamiento de 1:2000 y 5 Lotes de US30 (Compra o Venta).',
'CONSIDER_US30_VALUE'=>'Considere US30: 35,000.00 USD',
'CONSIDER_US30_30LOTS'=>'Considere una cuenta en EUR con apalancamiento de 1:2000 y 30 Lotes de US30 (Compra o Venta).',
'CONSIDER_US30_205LOTS'=>'Considere una cuenta en JPY con apalancamiento de 1:2000 y 205 Lotes de US30 (Compra o Venta).',
'CONSIDER_ES35'=>'Considere una cuenta en EUR con apalancamiento de 1:2000 y 20 Lotes de ES35 (Compra o Venta).',
'CONSIDER_ES35_VALUE'=>'Considere ES35: 9,500.00 EUR',
'CONSIDER_ES35_55LOTS'=>'Considere una cuenta en USD con apalancamiento de 1:2000 y 55 Lotes de ES35 (Compra o Venta).',
'CONSIDER_ES35_205LOTS'=>'Considere una cuenta en JPY con apalancamiento de 1:2000 y 205 Lotes de ES35 (Compra o Venta).',
'CONVERSION_RATE_EUR_JPY'=>'Tasa de Conversión  (EUR/JPY)',
'CONSIDER_UKOIL'=>'Considere una cuenta en USD con apalancamiento de 1:2000 y 2 Lotes de UKOIL (Compra o Venta).',
'CONSIDER_UKOIL_VALUE'=>'Considere UKOIL: 75.00 USD',
'CONSIDER_UKOIL_15LOTS'=>'Considere una cuenta en EUR con apalancamiento de 1:2000 y 15 Lotes de UKOIL (Compra o Venta).',
'CONSIDER_UKOIL_105LOTS'=>'Considere una cuenta en JPY con apalancamiento de 1:2000 y 105 Lotes de UKOIL (Compra o Venta).',
'CONSIDER_BTCUSD'=>'Considere una cuenta en USD con apalancamiento de 1:2000 y 2 Lotes de BTCUSD (Compra o Venta).',
'CONSIDER_BTCUSD_VALUE'=>'Considere BTCUSD: 40,000.00 USD',
'CONSIDER_BTCUSD_15LOTS'=>'Considere una cuenta en EUR con apalancamiento de 1:2000 y 15 Lotes de BTCUSD (Compra o Venta).',
'CONSIDER_BTCUSD_45LOTS'=>'Considere una cuenta en JPY con apalancamiento de 1:2000 y 45 Lotes de BTCUSD.',
'LEVERAGE'=>'apalancamiento',
];