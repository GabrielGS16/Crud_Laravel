<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>PCs</h1>

     <ul>
        @foreach ($pcs as $pc)
            <li>{{ $pc->nome }} - {{ $pc->processador }}</li>
        @endforeach
     </ul>
</body> 
</html>