<!DOCTYPE html>
<html>
<head>
    <title>Liste des Réseaux</title>
    <style>
    .reseau-service {
        background-color: #00ff00;
    }

    .reseau-hors-service {
        background-color: #ff0000;

    } /
    </style>

</head>
<body>

    <h1>Liste des Réseaux</h1>
    <table>
            <tr>
                <th>Libellé</th>
                <th>LAN</th>
                <th>Disponibilité</th>
                <th>Serveurs</th>
                <th>Ordinateurs</th>
            </tr>

            @foreach ($reseaux as $url)
            <tr class="{{ $reseau->disponibilite == 'Service' ? 'service' : 'hors-service' }}">
                <td>{{ $reseau->Serveurs }}</td>
                <td>{{ $reseau->ordinateurs}}</td>
                <td>{{ $reseau->reseaux}}</td>
                <td>{{ $reseau->libelle }}</td>
                <td>{{ $reseau->lan }}</td>
                <td>{{ $reseau->disponibilite }}</td>

            </tr>
            @endforeach

    </table>
</body>
</html>



