<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horoskop</title>
    <script src="logic.js"></script>    
</head>
<body>

<div class="buttonsContent">
    <form action="./addHoroscope.php" method="POST">
    <h1>När är din födelsedag?</h1>
        <input id="dateInput" type="date"></input><br>
        <button type="button" onClick="addHoroscope()">Spara</button>
        <button type="button" onClick="updateHoroscope()">Uppdatera</button>
        <button type="button" onClick="deleteHoroscope()">Radera</button>
        <br>
        <p>Ditt stjärntecken är:</p>
        <div id ="printHoroscope"> </div>
        
    </form>
    <br>
    </div>

    
</body>
</html>