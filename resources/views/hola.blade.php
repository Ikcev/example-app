<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url("https://i.redd.it/f6b4p9827ps71.jpg");
            background-size: contain;
        }
        div{
            margin: auto;
            background-color: white;
            text-align: center;
            width: 10%;
        }
        #operaciones{
            display: block;
        }

        #operaciones.input{
            display: inline-block;
            margin-top: 30%;
        }
    </style>
</head>
<body>
    <div>
    <h2>Formulario Usuario</h2>
    <form action="/printForm" method="POST">
   @csrf
        <table>
            <tr>
                <td>
                    <h3>Nombre</h3>
                    <input type="text" name="nombre" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Apellido</h3>
                    <input type="text" name="apellido" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Edad</h3>
                    <input type="text" name="edad" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Nº Teléfono</h3>
                    <input type="text" name="numTlfno" id="">
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
    </div>
    <div>
    <h2>Operar números</h2>
        <form action="/sumar" method="GET">
            <tr>
                <td>
                    <h3>Numero 1</h3>
                    <input type="text" name="numero1" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Numero 2</h3>
                    <input type="text" name="numero2" id="">
                </td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="Sumar">
                </td>
            </tr>
        </form>
    </div>
    <div id="operaciones">
        
        <input type="submit" value="Restar">
        <input type="submit" value="Multiplicar">
        <input type="submit" value="Dividir">
    </div>
</body>
</html>
