<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @media print {
            *{
                box-sizing: border-box;
                margin: 0;
                padding:0;
            }
            body{
                width:21cm;
                height:29.7cm;
                margin:30mm 45mm;
            }
        }
        *{
            box-sizing: border-box;
            margin: 0;
            padding:0;
        }
        .wrapper{
            margin:2rem;
            width:10cm;
            height:10cm;
            border:1px solid black;
        }
    </style>
</head>
<body>
    <div id="print_parts">
        @for ($i = 1; $i <= count($cargos) ; $i+=1) @if($i%6==1) <div style="page-break-after:always;">
            @endif
            @if($i%2==1)
        <div class="wrapper"></div>
    </div>

</body>
</html>