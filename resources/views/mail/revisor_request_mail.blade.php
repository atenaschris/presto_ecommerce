
<!DOCTYPE html>
<html lang="en">

    <body>
        <h1>Ciao Admin</h1>
        <h3>L'utente {{ $revisor['name'] }} con l'email {{ $revisor['email'] }} ha richiesto di diventare un revisore</p>
        <p>Qui la sua  <strong> presentazione: </strong> </p>
        <p>{{ $revisor['presentation'] }}</p>

        <p>Qui la sua  <strong> descrizione: </strong> </p>
        <p>{{ $revisor['description'] }}</p>
    </body>
</html>