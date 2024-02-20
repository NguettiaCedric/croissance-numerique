<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Demande de demo</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="">

<body>
    <h1 style="text-align: center;">Vous avez un nouveau message</h1>
    <div style="text-align: center;">Un visiteur a fait une demo</div>

    <div style="border: 1px solid #ccc; margin-top: 20px; padding: 20px; text-align: left; border-radius: 20px;">
    <div>Nom : {{ $demande->objet }}</div>
    <div>Nom : {{ $demande->name }}</div>
    <div>Téléphone : {{ $demande->contact }}</div>
    <div>Email : {{ $demande->email }}</div>
    <div>compagnie  : {{ $demande->compagnie }}</div>
    <div>Industrie : {{ $demande->industrie }}</div>
    <div>message : {{ $demande->message }}</div>
    {{-- <div>Date de debut : {{ $contact->date }}</div>
    <div>Service supplémentaire : {{ $contact->services_sup }}</div>
    <div>Budget : {{ $contact->budget }}</div> --}}
    <br>
    <div style="text-align: center;">
        <a href="#" class="button button-primary" target="_blank" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box; border-radius: 3px; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16); color: #fff; display: inline-block; text-decoration: none; -webkit-text-size-adjust: none; background-color: #0e218f; border-top: 10px solid #0e218f; border-right: 18px solid #0e218f; border-bottom: 10px solid #0e218f; border-left: 18px solid #0e218f;">Connectez-vous</a>
    </div>
    </div>

</body>

</html>