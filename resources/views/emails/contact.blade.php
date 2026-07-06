<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <style>
        body {

            font-family: Arial, Helvetica, sans-serif;

            background: #f5f5f5;

            padding: 30px;

        }

        .card {

            background: white;

            padding: 30px;

            border-radius: 10px;

            box-shadow: 0 5px 20px rgba(0, 0, 0, .08);

        }

        h2 {

            color: #1b2654;

        }

        table {

            width: 100%;

            border-collapse: collapse;

        }

        td {

            padding: 10px;

            border-bottom: 1px solid #eee;

        }

        .label {

            font-weight: bold;

            width: 180px;

        }
    </style>

</head>

<body>

    <div class="card">

        <h2>Nueva consulta desde la página web</h2>

        <table>

            <tr>

                <td class="label">Nombre</td>

                <td>{{ $data['name'] }}</td>

            </tr>

            <tr>

                <td class="label">Empresa</td>

                <td>{{ $data['company'] }}</td>

            </tr>

            <tr>

                <td class="label">Correo</td>

                <td>{{ $data['email'] }}</td>

            </tr>

            <tr>

                <td class="label">Servicio</td>

                <td>{{ $data['service'] }}</td>

            </tr>

            <tr>

                <td class="label">Mensaje</td>

                <td>{{ $data['message'] }}</td>

            </tr>

            <tr>

                <td class="label">IP</td>

                <td>{{ request()->ip() }}</td>

            </tr>

            <tr>

                <td class="label">Fecha</td>

                <td>{{ now()->format('d/m/Y H:i') }}</td>

            </tr>

        </table>

    </div>

</body>

</html>