<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <h1>Edit PC</h1>

    <form action="{{ route('pcs.update', $pc->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text"  name="nome" value="{{ $pc->nome }}" >

        <label for="processador">Processador:</label>
        <input type="text" name="processador" value="{{ $pc->processador }}" >

        <label for="placa_mae">Placa mãe:</label>
        <input type="text" name="placa_mae" value="{{ $pc->placa_mae }}" >

        <input type="submit">
     </form>
</body>
</html>