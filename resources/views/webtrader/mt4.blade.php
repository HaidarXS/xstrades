<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
   <title>Web Terminal</title>
</head>

<body>
<div id="webterminal" style="width:100%;height:600px;"></div>
<script type="text/javascript" src="https://metatraderweb.app/trade/widget.js"></script>
<script type="text/javascript">
    new MetaTraderWebTerminal( "webterminal", {
        version: 4,
        servers: ["XSFintech-Real1", "XSFintech-DemoMT4"],
        server: "XSFintech-Real1",
        utmSource: "xsfintech.com",
        startMode: "login",
        language: "en",
        colorScheme: "black_on_white"
    } );
</script>
</body>

</html>