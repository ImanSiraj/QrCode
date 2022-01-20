<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Github QRCode</title>
</head>
<body>
    <h4> My Github QRCode </h4>
    
    {!! QrCode::size(200)->generate('https://github.com/ImanSiraj') !!}


</body>
</html>