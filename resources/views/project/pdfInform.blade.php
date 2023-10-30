<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
              #matriz-estilizada {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #matriz-estilizada td, #tbl th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #matriz-estilizada tr:nth-child(even){background-color: #f2f2f2;}

    #matriz-estilizada tr:hover {background-color: #ddd;}

    #matriz-estilizada th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
        </style>
  </head>
  <body>
    <h1 class="text-center" >Gobierno de El Salvador</h1>
    <p class="text-primary text-center">Nombre de su institución....</p>
    <p>Fecha: {{$fechaActual}}</p>
    <table id="matriz-estilizada"   >
        <thead>
          <tr>
            <td>id</td>
            <td>Nombre Proyecto</td>
            <td>fuente Fondos</td>
            <td>Monto Planificado</td>
            <td>Monto Patrocinado</td>
            <td>Monto Fondos Propios</td>
          </tr>
        </thead>
        @foreach ($data as $item) 
        <tbody>
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->projectName}}</td>
            <td>{{$item->sourceOfFunds}}</td>
            <td>$ {{$item->plannedAmount}}</td>
            <td>$ {{$item->sponsoredAmount}}</td>
            <td>$ {{$item->amountOwnFunds}}</td>
          </tr>
        </tbody>
         @endforeach
        
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>