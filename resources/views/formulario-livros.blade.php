<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        <title>App Name - Formulario</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <p class="h1">Formulario de cadastro de Livros</p>
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="/post-livro" >
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Titulo:</label>
                            <input type="text" name="titulo" class="form-control" id="exampleFormControlInput1" placeholder="Crepusculo">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Autor:</label>
                            <input type="text" name="autor" class="form-control" id="exampleFormControlInput2" placeholder="Jhon Green">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput3">Status:</label>
                            <input type="text" name="status" class="form-control" id="exampleFormControlInput3" placeholder="Disponivel/Emprestado">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>                
            </div>
        </div>
    </body>
</html>