<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lista</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container my-4">
        <table class="table">
        <tr>
            <th> Nome </th>
            <th> Valor </th>
            <th> Categoria </th>
        </tr>
        @if($produtos)
            @foreach($produtos as $produtos)
                <tr>
                    <td>{{$produtos->nome}}</td>
                    <td>{{$produtos->valor}}</td>
                    <td>{{$produtos->categoria}}</td>
                </tr>
            @endforeach
        @endif
        </table>
</div>
    </body>
</html>