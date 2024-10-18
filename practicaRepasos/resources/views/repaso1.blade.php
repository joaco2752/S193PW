<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Convertidor MB GB TB</title>
    <style>
        .card-header {
            background-color: #343a40;
            color: white;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 30px;
            text-align: center;
            padding: 15px;
            font-weight: bold;
        }
        .container {
            margin-top: 20px;
            max-width: 500px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
        <div class="card-header">
            Convertidor de Unidades 
        </div>
        <form action="/convert" method="POST">
            @csrf
            <div class="mb-3">
                <label for="opciones" class="form-label">Selecciona la opción para empezar a convertir:</label>
                <select class="form-select" id="opciones" name="opciones">
                    <option value="0">MB a GB</option>
                    <option value="1">GB a MB</option>
                    <option value="2">GB a TB</option>
                    <option value="3">TB a GB</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Ingrese el valor:</label>
                <input type="number" class="form-control" name="valor">
            </div>
            <button type="submit" class="btn btn-primary">Convertir</button>
        </form>
        <div class="mt-4 alert alert-info">
            {{ $resultado}}
        </div>
    </div>
    </div>
</body>
</html>
