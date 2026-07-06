<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <style>
        body {

            font-family: Arial;

            background: #f4f4f4;

            padding: 30px;

        }

        .card {

            background: white;

            padding: 30px;

            border-radius: 10px;

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

            width: 220px;

        }
    </style>

</head>

<body>

    <div class="card">

        <h2>Nuevo postulante</h2>

        <table>

            <tr>

                <td class="label">Nombre</td>

                <td>{{ $data['name'] }}</td>

            </tr>

            <tr>

                <td class="label">Documento</td>

                <td>{{ $data['document'] }}</td>

            </tr>

            <tr>

                <td class="label">Teléfono</td>

                <td>{{ $data['phone'] }}</td>

            </tr>

            <tr>

                <td class="label">Correo</td>

                <td>{{ $data['email'] }}</td>

            </tr>

            <tr>

                <td class="label">Puesto</td>

                <td>{{ $data['position'] }}</td>

            </tr>

            <tr>

                <td class="label">Experiencia</td>

                <td>{{ $data['experience'] }} años</td>

            </tr>

            <tr>

                <td class="label">Educación</td>

                <td>{{ $data['education'] }}</td>

            </tr>

            <tr>

                <td class="label">Disponibilidad</td>

                <td>{{ $data['availability'] }}</td>

            </tr>

            <tr>

                <td class="label">Remuneración</td>

                <td>{{ $data['salary'] }}</td>

            </tr>

            <tr>

                <td class="label">Ciudad</td>

                <td>{{ $data['location'] }}</td>

            </tr>

            <tr>

                <td class="label">Portfolio</td>

                <td>{{ $data['portfolio'] }}</td>

            </tr>

            <tr>

                <td class="label">Mensaje</td>

                <td>{{ $data['message'] }}</td>

            </tr>

        </table>

    </div>

</body>

</html>