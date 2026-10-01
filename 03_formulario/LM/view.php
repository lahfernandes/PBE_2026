<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX_2</title>
</head>
<body>
   <h2 style="color: purple";font-family: Comic Sans MS, cursive;>Incrição em Evento</h2>
    <form action="logica.php" method="POST" style="background-color: #f3e5f5; padding: 15px; border-radius: 8px; width: 350px;">
          <label for="">Nome Completo:</label>
          <br>
          <input type="text" name="nome" style="width:100%; margin-bottom: 10px; color:purple;font-family:Arial;">
          <br><br>
          <label for="">Tipo de Evento:</label>
          <br>
          <select name="tipo_ingresso" style="widht:100%; margin-bottom:10px; color:purple; font-family:Arial;" required>
                <option value="">Escolha um tipo de ingresso</option>
                <option value="Inteira">Estudante</option>
                <option value="Estudante">Profissional</option>
                <option value="Idoso">Vip</option>
          </select>
          <br><br> 
          <label for="">Data do Evento:</label>
          <br>
          <input style="color:purple;font-family:Arial;" type="date" name="data_evento">
          <br><br>
          <label for="">Hora da Chegada:</label>
          <br>
          <input type="time" name="hora_chegada">
          <br><br>
          <label for="">Tipo de Evento:</label>
          <br>
          
          <br><br>
    
          <button style="background-color: purple; color:white; padding:5px 10px;" type="submit">Inscrever-se</button>
     </form>
</body>
</html>
