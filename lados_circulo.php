
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circulo</title>
    <script src="../js/main.js"></script>
</head>
<body>
<link rel="stylesheet" href="style.css">
<form action="clase_circulo.php" id="booking-form"  method="post" onsubmit="return forma_circulo()" >
		
    <div class="tab-content">
        <div class="tab-pane" id="step1">
            <ul>
                <li>
        <label for="lado1">Lado 1:</label>
        <input type="text" id="lado1" name="lado1" placeholder="Escribe la longitud del lado 1..." aria-describedby="error_lado1">
        <span id="error_lado1" class="error-message"></span>

        

       
                </select>
             </li>
             <li style="list-style: none; display: inline">
                    <button type="submit "class="next-btn next-btn1" type="button">Enviar</button>
                </li>
            </ul>
        </div>
    </form>
    
</body>
</html>



