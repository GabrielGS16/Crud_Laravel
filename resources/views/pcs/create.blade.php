<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PC</title>
</head>
<body>
    <h1>Create a New PC</h1>

    <form action="{{ route('pcs.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text"  name="nome" >

        <label for="processador">Processador:</label>
        <input type="text" name="processador" >

        <label for="placa_mae">Placa mãe:</label>
        <input type="text" name="placa_mae" >

        <input type="submit">
     </form>
</body>
</html>