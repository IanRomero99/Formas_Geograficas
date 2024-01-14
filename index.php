<link rel="stylesheet" href="style.css">
<script src="../js/main.js"></script>
<form action="queformaes.php" id="booking-form"  method="post" onsubmit="return validar()">
		
    <div class="tab-content">
        <div class="tab-pane" id="step1">
            <ul>
                <li>
    <label>Que forma vas a escoger?</label>
    <select id="opciones" class="error-container" name="opciones">
      <option value="opcion">Selecciona una opción</option>
      <option>Triangulo </option>
      <option>Rectangulo </option>
      <option>Cuadrado </option>
      <option>Circulo </option>
       
                </select>
             </li>
             <li style="list-style: none; display: inline">
                    <button type="submit "class="next-btn next-btn1" type="button">Enviar</button>
                </li>
            </ul>
        </div>
    </form>

        