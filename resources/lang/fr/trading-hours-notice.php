<?php
$date= '22';
$month='Avr';
return[

'OPEN_POSITIONS_ON_SHARES'=>'Les positions ouvertes sur des actions ou indices en début de journée de travail (heure du serveur 00:00), qui coïncide avec la date de détachement de l\'actif sous-jacent, seront soumises à des ajustements de dividendes.
<br/><br/>
Les positions longues (achat) recevront un paiement, tandis que les positions courtes (vente) seront débitées du montant correspondant.',

'SYMBOL'=>'Symbole',

'US30'=>'us30',
'US100'=>'us100',
'US500'=>'us500',
'EU50'=>'EU50',
'ES35'=>'ES35',
'AU200'=>'AU200',
'UK100'=>'UK100',
'F40'=>'F40',

'DATE'=>'Date',
'ACTION'=>'Action',
'DESCRIPTION'=>'Description',
'DETAIL'=>'Détail',
'DIVIDEND_CURRENCY'=>'Devise du dividende',
'8_1_24'=>'08/01/2024',
'DG'=>'DG',
'CASH_DIVIDEND'=>'Dividende en espèces',
'DOLLAR_GENERAL_CORP'=>'Dollar General Corp',
'USD'=>'USD',

'EUR'=>'EUR',
'AUS200' => 'AUS200',
'US30_USD'=>'US30',
//trasnlate
'UPCOMING_CORPORATE_ACTIONS'=>'Opérations planifiées de l\'entreprise  entre le 29 Avril et le 03 Mai 2024',

'CASH_INDICES'=>'Indices monétaires entre le 29.04.2024 et le 03.05.2024',

'SHARE_CASH_DIVIDENDS'=>'Actions - Dividendes en espèces entre le 29.04.2024 et le 03.05.2024',

'MONDAY'=>'Lundi 29 Avril, 2024',
'TUESDAY'=>'Mardi 30 Avril, 2024',
'WEDNESDAY'=>'Mercredi 01 Mai, 2024',
'THURSDAY'=>'Jeudi 02 Mai, 2024',
'FRIDAY'=>'Vendredi 3 Mai, 2024',
// 'MONDAY'=>'Lundi '. $date .' '. $month .', 2024',
// 'TUESDAY'=>'Mardi '. $date + 1 .' '. $month .', 2024',
// 'WEDNESDAY'=>'Mercredi '. $date + 2 .' '. $month .', 2024',
// 'THURSDAY'=>'Jeudi '. $date + 3 .' '. $month .', 2024',
// 'FRIDAY'=>'Vendredi '. $date + 4 .' '. $month .', 2024',

'EXAMPLE' => 'Exemple:',
'THERE_IS_A_DIVIDEND' => 'Il y a un ajustement de dividende de 4,383 sur US30. Un client détient un compte en USD et détient une position longue (achat) de 20 US30. À la date de détachement, il recevra un paiement de 20 * 4,383 = <b>87.66 USD</b>.
<br/><br/>
Il y a un paiement de dividende de 0,59 USD pour l\'action ‘Dollar General Corp’. Un client détient un compte en USD et détient une position courte (vente) de 100 actions. À la date de détachement, il sera débité de 100 * 0,59 = <b>-59.00 USD.</b>',
];
?>