<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Registro</title>
</head>
<body>
    <div class="container card-monospace">
    <div class="card-header fs-5 text-center text-primary">
        Registro de Prendas
    </div>

    <div class="card body text-justify">
        <form action="/registrarPrenda" method="POST">
        @csrf
            <div class="mb-3">
                <label for="prenda" class="form-label">Prenda</label>
                <input type="text" class="form-control" name="txtprenda" value="{{old('txtprenda')}}">
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control" name="txtcolor" value="{{old('txtcolor')}}">
            </div>

            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="text" class="form-control" name="txtcantidad" value="{{old('txtcantidad')}}">
            </div>

            <div class="d-inline-flex gap-1">
            <button type="submit" class="btn btn-primary">Guardar Prenda</button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>