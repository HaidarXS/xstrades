<?php
$date= '22';
$month='Apr';
return[
'OPEN_POSITIONS_ON_SHARES'=>'Las posiciones abiertas en Acciones o Índices al inicio del día laboral (Hora del Servidor 00:00), que coinciden con la fecha ex-dividendo del respectivo activo subyacente, estarán sujetas a ajustes de dividendos.
<br/><br/>
Las posiciones largas (compra) recibirán un pago, mientras que las posiciones cortas (venta) serán cargadas con el valor.',

'SYMBOL'=>'Símbolo',
'DATE'=>'Fecha',
'ACTION'=>'Acción',
'DESCRIPTION'=>'Descripción',
'DETAIL'=>'Detalle',
'DIVIDEND_CURRENCY'=>'Moneda del Dividendo',
'CASH_DIVIDEND'=>'Dividendo en efectivo',

'EUR'=>'EUR',
'AUS200' => 'AUS200',
'US30_USD'=>'US30',

//trasnlate
'UPCOMING_CORPORATE_ACTIONS'=>'Acciones Corporativas Programadas del 29 de abril al 03 de mayo de 2024',

'CASH_INDICES'=>'Índices en efectivo entre 29.04 - 03.05.2024',

'SHARE_CASH_DIVIDENDS'=>'Acciones - Dividendos en Efectivo entre 29.04 - 03.05.2024',

'MONDAY'=>'Lun 29 Abril, 2024',
'TUESDAY'=>'Mar 30 Abril, 2024',
'WEDNESDAY'=>'Mie 01 Mayo, 2024',
'THURSDAY'=>'Jue 02 Mayo, 2024',
'FRIDAY'=>'Vie 03 Mayo, 2024',
// 'MONDAY'=>'Lun '. $date .' '. $month .', 2024',
// 'TUESDAY'=>'Mar '. $date + 1 .' '. $month .', 2024',
// 'WEDNESDAY'=>'Mier '. $date + 2 .' '. $month .', 2024',
// 'THURSDAY'=>'Jue '. $date + 3 .' '. $month .', 2024',
// 'FRIDAY'=>'Vie '. $date + 4 .' '. $month .', 2024',

'EXAMPLE' => 'Ejemplo:',
'THERE_IS_A_DIVIDEND' => 'Hay un ajuste de dividendos de 4.383 en el US30. Un cliente tiene una cuenta en USD y mantiene una posición larga (compra) de 20 US30. En la fecha ex-dividendo, recibirá un pago de 20*4.383 = <b>87.66 USD</b>.
<br/><br/>
Hay un pago de dividendos de 0.59 USD para la acción ‘Dollar General Corp’. Un cliente tiene una cuenta en USD y mantiene una posición corta (venta) de 100 acciones. En la fecha ex-dividendo, se le cargará 100*0.59 = <b>-59.00 USD.</b>',

];
?>