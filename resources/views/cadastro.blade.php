<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>

        <form action="/salvar" method="POST">
            @csrf
            <div class="container clearfix">
              <div class="input-group mb-3">
                <span class="input-group-text">Nome</span>
              <input type="text" class="form-control" name="nome">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Valor</span>
                <input type="text" class="form-control" name="valor">
              </div>
              <select class="form-select" name="categoria">
                <option selected>Categoria</option>
                <option value="1">Beleza</option>
                <option value="2">Higiene</option>
              </select>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>

    </body>
</html>