<?php

return[
    'PAGE_TITLE' => 'Levier Dynamique ',
    'PAGE_SUBTITLE' => 'Maximisez votre potentiel de trading avec notre Levier Dynamique jusqu’à 1:2000.',

    'WHAT_IS' => 'Qu’est-ce que le Levier Dynamique?',
    'WHAT_IS_TEXT' => 'Levier dynamique vous permet de trader en utilisant un capital plus petit et automatiquement ajusté en fonction du volume de votre trade.',

    'DYNAMIC_LEVERAGE_WITH_XS' => 'Levier dynamique avec XS',
    'DYNAMIC_LEVERAGE_WITH_XS_DESC' => 'XS utilise un modèle de Levier Dynamique qui s’adapte automatiquement aux positions de trading des clients. À mesure que le volume par instrument d’un client augmente, l’effet de levier maximal offert diminue en conséquence.
    <br/><br/>
    XS offre un effet de Levier Dynamique allant jusqu’à 1:2000 sur plusieurs classes d’actifs et différents types de comptes.
    Notre modèle de Levier Dynamique est réalisé par instrument de trading. Ainsi, si un client a des positions ouvertes sur plusieurs instruments, l\'effet de levier sera calculé séparément sur chaque symbole.',

    'ASSET_CLASS' => 'Classe d\'actifs',
    'MAX_LEVERAGE' => 'Levier Maximal',

    'LOTS' => 'Lots',
    'MARGIN' => 'Marge',

    'FX_MAJORS' => 'FX Majeures',
    'GOLD' => 'Or',
    'FX_MINORS' => 'FX  Mineures',
    'CRUDE_OIL' => 'Huile brute',
    'FX_EXOTICS' => 'FX Exotics',
    'SILVER' => 'Argent',
    'MINOR_INDICES' => 'Indices Mineurs',
    'PLATINUM_AND_PALLADIUM' => 'Platine et Palladium',
    'METALS(GOLD)' => 'Métaux (Or)',
    'METALS(SILVER)' => 'Métaux (argent)',
    'METALS(PLATINUM & PALLADIUM)' => 'Métaux (Platine et Palladium)',
    'MAJOR_INDICES' => 'Indices Majeurs',
    'ENERGY(UKOIL & USOIL)' => 'Énergie (UKOil et USOil)',
    'CRYPTOS(BTC & ETH)' => 'Cryptomonnaies (BTC et ETH)',
    'BTC_ETH' => 'BTC et ETH',
    
    'MARGIN_REQUIREMENTS' => 'Exigences de Marge',

    'DYNAMIC_LEVERAGE_DOES_NOT_APPLY' => 'Levier Dynamique  ne s\'applique pas à certaines classes d\'actifs ou types de comptes.
    <br/>
    Pour plus de détails, veuillez consulter notre page de spécifications du contrat.',

    'DYNAMIC_RISK_MANAGEMENT'=>'Nous appliquons des mesures de gestion des risques pour protéger les positions contre une possible forte volatilité lors d\'événements clés et de périodes spécifiques qui influent sur la volatilité générale du marché.
<br/><br/>
Des montants de marge plus élevés sont nécessaires pour ouvrir un ordre pendant ces périodes, qui sont connues sous le nom de périodes HMR (Higher Margin Requirements, signifiant exigences de marge plus élevées). 
<br/><br/>
Les périodes HMR comprennent les 15 minutes précédant les principales publications de nouvelles jusqu\'à 10 minutes après, ainsi que les 2 heures précédant la clôture des marchés le vendredi et pendant 1 heure après l\'ouverture du marché le lundi.
<br/><br/>
Le levier maximal disponible pour de nouveaux ordres ouverts pendant les périodes HMR est automatiquement fixé à 1:200.Veuillez noter que les restrictions s\'appliqueront uniquement aux positions ouvertes pendant ces périodes. Les exigences de marge des positions existantes ne seront pas affectées.
<br/><br/>
La clôture d\'une position de couverture ouverte pendant les périodes HMR peut échouer en cas de marge libre insuffisante pour couvrir les exigences de marge plus élevées, en particulier les exigences de marge plus élevées sur la seconde moitié d\'un ordre de couverture au moment de la clôture.',

// new dynamic
'CONSIDER_A_USD_ACCOUNT'=>'Considérons un compte en USD avec un effet de levier de 1:2000 et 2 lots de USDJPY (Achat ou Vente).',
'MARGIN_REQUIRED'=>'La marge requise serait la suivante :',
'EXAMPLES_1'=>'Exemple 1',
'EXAMPLES_2'=>'Exemple 2',
'EXAMPLES_3'=>'Exemple 3',
'APPLICABLE_LEVERAGE'=>'Applicable Exigence de Marge',
'APPLICABLE_MARGIN'=>'Applicable Exigence de Marge',
'MARGIN_CALCULATIONS'=>'Calcul de Marge',
'MARGIN_AMOUNT'=>'Montant de la Marge en Devise du Symbole',
'TOTAL_REQUIRED'=>'Marge Total Requise en Devise du Symbole',
'THE_ACCOUNT_CURRENCY'=>'La devise du compte est la même que la devise du symbole, donc le taux de conversion est de 1.',
'CONVERSION_RATE_USD'=>'Taux de Conversion  (USD/USD)',
'TOTAL_REQUIRED_IN_ACCOUNT'=>'Marge Total Requise en Devise du Compte',
'CONSIDER_A_USD_ACCOUNT_EUR'=>'Considérons un compte en USD avec un effet de levier de 1:2000 et 15 lots d\'EURUSD (Achat ou Vente).',
'CONSIDER_EUR_USD'=>'Considérez le taux EUR/USD à 1,1.',
'CONVERSION_RATE_USD_EUR'=>'Taux de Conversion  (USD/EUR)',
'CONSIDER_A_JPY_ACCOUNT'=>'Considérons un compte en JPY avec un effet de levier de 1:2000 et 210 lots d\'USDJPY (achat ou vente).',
'CONSIDER_JPY_USD'=>'Considérez le taux USD/JPY à 150,00',
'CONVERSION_RATE_JPY'=>'Taux de Conversion  (USD/JPY)',
'CONSIDER_A_EURJPY'=>'Considérons un compte en EUR avec un effet de levier de 1:2000 et 10 lots d\'EURJPY (Achat ou Vente).',
'CONVERSION_RATE_EUR_EUR'=>'Taux de Conversion  (EUR/EUR)',
'CONSIDER_A_EURJPY_120LOTS'=>'Considérons un compte en USD avec un effet de levier de 1:2000 et 120 lots d\'EURJPY (achat ou vente). ',
'CONSIDER_A_EURJPY_210LOTS'=>'Considérons un compte en JPY avec un effet de levier de 1:2000 et 210 lots d\'EURJPY (achat ou vente).',
'CONSIDER_EURJPY_RATE'=>'Considérez le taux EUR/JPY à 160,00',
'CONSIDER_A_USDZAR'=>'Considérons un compte en USD avec un effet de levier de 1 : 2000 et 20 lots de USDZAR (achat ou vente).',
'CONSIDER_A_EURZAR'=>'Considérons un compte en USD avec un effet de levier de 1:2000 et 55 lots d\'EURZAR (Achat ou Vente). ',
'CONSIDER_A_USDZAR_105LOTS'=>'Considérons un compte en JPY avec un effet de levier de 1:2000 et 105 lots d\'USDZAR (achat ou vente).',
'CONSIDER_A_XAUUSD'=>'Considérons un compte en USD avec un effet de levier de 1 : 2000 et 2 lots de XAUUSD (achat ou vente).',
'CONSIDER_XAUUSD_VALUE'=>'Considérez XAUUSD : 1 950,00 USD',
'CONSIDER_A_XAUUSD_15LOTS'=>'Considérons un compte en EUR avec un effet de levier de 1 : 2000 et 15 lots de XAUUSD (Achat ou Vente).',
'CONSIDER_A_XAUUSD_85LOTS'=>'Considérez un compte JPY avec un effet de levier de 1:2000 et 85 lots de XAUUSD (achat ou vente).',
'CONSIDER_XAGUSD'=>'Considérons un compte en USD avec un effet de levier de 1 : 2000 et 5 lots de XAGUSD (Achat ou Vente).',
'CONSIDER_XAGUSD_VALUE'=>'Considérez XAGUSD : 20,00 USD',
'CONSIDER_XAGUSD_25LOTS'=>'Considérons un compte en EUR avec un effet de levier de 1 : 2000 et 25 lots de XAGUSD (Achat ou Vente).',
'CONSIDER_A_XAGUSD'=>'Considérez un compte JPY avec un effet de levier de 1 : 2000 et 45 lots de XAGUSD (achat ou vente).',
'CONSIDER_XPTUSD'=>'Considérons un compte en USD avec un effet de levier de 1 : 2000 et 2 lots de XPTUSD (achat ou vente).',
'CONSIDER_XPTUSD_900'=>'Considérez XPTUSD : 900,00 USD',
'CONSIDER_XPTUSD_15LOTS'=>'Considérons un compte en EUR avec un effet de levier de 1 : 2000 et 15 lots de XPTUSD (Achat ou Vente).',
'CONSIDER_XPTUSD_25LOTS'=>'Considérez un compte JPY avec un effet de levier de 1:2000 et 25 lots de XPTUSD (achat ou vente).',
'CONSIDER_US30'=>'Considérons un compte en USD avec un effet de levier de 1:2000 et 5 lots de 30 US (achat ou vente).',
'CONSIDER_US30_VALUE'=>'Considérez US30 : 35 000,00 USD',
'CONSIDER_US30_30LOTS'=>'Considérons un compte en USD avec un effet de levier de 1:2000 et 30 lots d’US30 (achat ou vente).',
'CONSIDER_US30_205LOTS'=>'Considérons un compte en JPY avec un effet de levier de 1:2000 et 205 lots de 30 US (achat ou vente).',
'CONSIDER_ES35'=>'Considérons un compte en EUR avec un effet de levier de 1:2000 et 20 lots d\'ES35 (Achat ou Vente).',
'CONSIDER_ES35_VALUE'=>'Considérez ES35 : 9 500,00 EUR',
'CONSIDER_ES35_55LOTS'=>'Considérons un compte en USD avec un effet de levier de 1 : 2000 et 55 lots d’ES35 (achat ou vente).',
'CONSIDER_ES35_205LOTS'=>'Considérons un compte JPY avec un effet de levier de 1 : 2000 et 205 lots d\'ES35 (achat ou vente).',
'CONVERSION_RATE_EUR_JPY'=>'Taux de Conversion  (EUR/JPY)',
'CONSIDER_UKOIL'=>'Considérons un compte en USD avec un effet de levier de 1 : 2000 et 2 lots d\'UKOIL (achat ou vente).',
'CONSIDER_UKOIL_VALUE'=>'Considérez UKOIL : 75,00 USD',
'CONSIDER_UKOIL_15LOTS'=>'Considérons un compte en EUR avec un effet de levier de 1:2000 et 15 lots d\'UKOIL (Achat ou Vente).',
'CONSIDER_UKOIL_105LOTS'=>'Considérons un compte en JPY avec un effet de levier de 1 : 2000 et 105 lots d\'UKOIL (achat ou vente).',
'CONSIDER_BTCUSD'=>'Considérons un compte en USD avec un effet de levier de 1 : 2000 et 2 lots de BTCUSD (achat ou vente).',
'CONSIDER_BTCUSD_VALUE'=>'Considérez BTCUSD : 40 000,00 USD',
'CONSIDER_BTCUSD_15LOTS'=>'Considérons un compte en EUR avec un effet de levier de 1 : 2000 et 15 lots de BTCUSD (achat ou vente).',
'CONSIDER_BTCUSD_45LOTS'=>'Considérez un compte JPY avec un effet de levier de 1 : 2000 et 45 lots de BTCUSD (achat ou vente).',
'LEVERAGE'=>'Levier',
];