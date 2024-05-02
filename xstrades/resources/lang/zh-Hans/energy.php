<?php

return [

    'BANNER_TITLE' => '能源交易',
    'BANNER_DESCRIPTION' => '与全球最佳多元资产经纪商一起探索能源交易。',


    "SECTION_1_TITLE" => '使用最佳在线交易平台进行能源交易',
    'DESCRIPTION_1' => '欢迎来到 XS 的能源交易世界。在这里，您可以通过最佳在线交易平台进行原油、天然气和其他能源商品的差价合约交易。XS 提供全面的交易平台，可进入能源市场并交易多种能源商品。通过实时市场数据、先进的交易工具和具有竞争力的价格，XS 使交易者能够做出明智的决策并高效地执行交易。',

    'SECTION_2_TITLE' => '通过 XS 进行能源交易： 合约规格',
    'DESCRIPTION_2' => 'XS 提供多种能源商品，包括布伦特原油 (UKOIL)、WTI 原油 (USOIL) 和天然气 (NGAZ)。利用我们详细的合约规格，自信地计划您的交易，优化您的能源交易体验。探索我们全面的合约规格，深入了解我们针对不同账户类型的特殊交易条件，包括合约大小、杠杆、点差、佣金、隔夜利息等。',


    "SECTION_3_TITLE" => "通过 XS 进行能源交易： 合约规格",
    "TRADING_CONDITION_1_TITLE" => "正常交易时间",
    "TRADING_CONDITION_1_DESCRIPTION" => "
        正常交易时间是指可供交易的正常交易时段。以下是 XS 可交易的能源产品的正常交易时间。
        季节和市场因素可能会影响以下交易时间，因此请务必关注交易时间页面上的最新更新，以了解交易时间的最新季节性变化。所有时间均为服务器时间（GMT+2）。

        <span class='d-flex' > UKOIL
            <span class='ms-auto'>星期一 03:00 - 星期五 24:00
                    <br/>
                (每日休息时间：00:00:01 - 02:59:59）
            </span>
        </span>
        <span class='d-flex' > USOIL
            <span class='ms-auto'>星期一 01:05 - 星期五 23:55
                    <br/>
                (每日休息时间：00:00 - 00:59）
            </span>
        </span>
        <span class='d-flex' > NGAZ
            <span class='ms-auto'>星期一 01:00 - 星期五 23:59
                    <br/>
                (每日休息时间：00:00 - 00:59）
            </span>
        </span>

    ",


    "TRADING_CONDITION_2_TITLE" => "点差",
    "TRADING_CONDITION_2_DESCRIPTION" => "XSTrades.com 为所有账户类型的所有能源商品提供浮动点差。因此，合约规格表中的点差是基于前一个交易日的平均点差。有关实时点差，请参阅交易平台。请注意，当市场流动性较低时（包括展期时间），点差可能会扩大。",
    "TRADING_CONDITION_3_TITLE" => "图表价格",
    "TRADING_CONDITION_3_DESCRIPTION" => "XSTrades.com 提供各种交易账户，以满足每个交易者的需求和偏好。我们提供原始定价账户，并收取额外佣金。其他账户类型不收取佣金，但在价格中包含加价。默认情况下，MetaTrader 交易平台的图表将显示原始价格，而市场观察将显示客户正在交易的账户类型的价格。",

    "TRADING_CONDITION_4_TITLE" => "隔夜利息",
    "TRADING_CONDITION_4_DESCRIPTION" => "隔夜利息（多头）用于隔夜维持买入仓位，隔夜利息（空头）用于隔夜维持卖出仓位。隔夜利息发生在服务器时间每天 00:00，周末除外，直至平仓。周三收取三倍隔夜利息费用，以支付周末产生的融资成本。",

    "TRADING_CONDITION_5_TITLE" => "动态杠杆",
    "TRADING_CONDITION_5_DESCRIPTION" => "XSTrades.com 为大多数账户类型提供原油动态杠杆。合约规格表中的杠杆值是每种交易工具的最大杠杆。最大杠杆将根据您的净未平仓头寸而变化。动态杠杆不适用于天然气。有关详细信息，请查看动态杠杆页面。",

    "TRADING_CONDITION_6_TITLE" => "固定杠杆",
    "TRADING_CONDITION_6_DESCRIPTION" => " XSTrades.com 为所有账户类型提供天然气固定杠杆。在这种情况下，合约规格表中显示的最大杠杆不会因您的净未平仓头寸或账户类型而改变。 XSTrades.com 为某些账户类型的所有产品提供固定杠杆。在这种情况下，合约规格表中显示的最大杠杆不会根据您的未平仓净值而改变。固定杠杆适用于美分（Cent） 和微型（Mirco）账户类型。 ",

    "TRADING_CONDITION_7_TITLE" => "较高保证金要求期",
    "TRADING_CONDITION_7_DESCRIPTION" => "
        在影响市场总体波动性的关键事件和特定时间段，我们采用风险管理措施来保护仓位免受可能出现的剧烈波动的影响。
        <br/><br/>
        在这些时间段（即 HMR（较高保证金要求）时间段）内开仓需要更高的保证金。
        <br/><br/>
        较高的保证金要求仅适用于在这些时段内开立的头寸。现有仓位的保证金要求不受影响。
        <br/><br/>
        如果自由保证金不足以支付较高的保证金要求，特别是平仓时对冲订单后半部分的较高保证金要求，则在 HMR 期间平仓未平仓对冲头寸可能会失败。
        <br/><br/>
        HMR 期间包括
        <br/><br/>
        <strong>经济新闻期： </strong>所有在重大新闻发布前 15 分钟至发布后 10 分钟内进行的交易都将受到更高的保证金要求。
        <strong>周末和节假日： </strong>周五收市前 2 小时至周一开市后 1 小时内进行的所有交易都将被要求支付更高的保证金。该规则同样适用于节假日。
    ",

    "TRADING_CONDITION_8_TITLE" => "止损价位",
    "TRADING_CONDITION_8_DESCRIPTION" => "止损位是当前市场价格与挂单价格之间的最小距离（点差）。合约规格表中的止损位值可能会发生变化，使用某些高频交易策略或智能交易系统的交易者可能无法使用。",

    "FAQ" => "常见问题",

    "FAQ_1_Q" => "什么是能源市场？",
    "FAQ_1_A" => "能源商品交易提供了一个独特的机会，让您参与全球能源行业，并利用供求动态、地缘政治事件和市场趋势带来的价格波动。",

    "FAQ_2_Q" => "什么是能源交易？",
    "FAQ_2_A" => "能源交易涉及原油、天然气、汽油、取暖油等能源商品的买卖。这些商品是为工业、交通和日常生活提供动力的重要资源。能源交易为投资者和交易者提供了一个平台，让他们可以对这些商品的价格走势进行投机，并从中获取潜在利润。",

    "FAQ_3_Q" => "能源市场的驱动因素是什么？",
    "FAQ_3_A" => "能源价格受到一系列因素的影响。供需动态起着至关重要的作用，地缘政治事件、天气状况和全球经济趋势都会影响供需平衡。政府政策、技术进步和环境法规的变化也会影响能源价格。随时了解这些因素是做出明智能源交易决策的关键。",

    "FAQ_4_Q" => "是什么导致了能源市场的波动？",
    "FAQ_4_A" => "能源市场以其波动性著称，这为交易者从价格波动中获利创造了机会。全球事件和供需变化所驱动的市场趋势会导致价格大幅波动。能源交易商可以利用能源价格的上涨和下跌趋势，在看涨和看跌的市场条件下都能获得潜在利润。",
];
