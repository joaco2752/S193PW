<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])
    <title>Document</title>
    <style>

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            margin: 0;
        }

        .card {
            max-width: 700px;
            width: 100%;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 55px;
            margin-left: 250px;
            margin-right: 50px;
            padding: 70px;
        }

        .card-title {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
        }

        .card-text {
          text-align: center;
        }

        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
  <div class="container mt-4">
<div class="card">
  

  <div class="card-body">
    <h5 class="card-title">Joaquin Alejandro Romo Zarraga</h5>
    <p class="card-text">S193<br>Asignatura: Programación Web<br>Universidad Politecnica de Queretaro<br>Telefono: 4426153457<br>Matricula: 122044319</p>
    <a href="/repasar" class="btn btn-primary">Repaso 1</a>
  </div>
</div>


</div>

</body>
</html>