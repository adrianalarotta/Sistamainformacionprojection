
<form>
    <label for="caja">Introduce un número:</label><br>
    <input type="number" id="caja" name="caja"><br><br>
    <button type="button" onclick="capturarNumero()">Capturar número</button>
  </form>

  <p id="demo"></p>

<script>
    function capturarNumero() {
      let num = document.getElementById("caja").value;
      document.getElementById("demo").innerHTML = "El número capturado es: " + num;

<script>
for (let i = 0; i < num; i++) {
    alert("Hola mundo");
    const vehiculoRow = document.createElement("div");
    vehiculoRow.classList.add("row");
    vehiculoRow.style.paddingLeft = "10%";
    vehiculosContainer.appendChild(vehiculoRow);

    for (let j = 0; j < 6; j++) {
      const vehiculoCol = document.createElement("div");
      vehiculoCol.classList.add("col-sm-1", "entradas-de-texto-govco");
      vehiculoRow.appendChild(vehiculoCol);

      const label = document.createElement("label");
      const input = document.createElement("input");
      input.classList.add("form-control");

      switch (j) {
        case 0:
          label.innerText = "Placa*";
          input.type = "string";
          break;
        case 1:
          label.innerText = "Tipo de vehículo*";
          input.type = "string";
          break;
        case 2:
          label.innerText = "Medidas(mts^2):\nLateral izquierdo*";
          input.type = "string";
          break;
        case 3:
          label.innerText = "Lateral derecho*";
          input.type = "string";
          break;
        case 4:
          label.innerText = "Posterior*";
          input.type = "string";
          break;
        case 5:
          label.innerText = "Area Total*";
          input.type = "string";
          break;
      }

      vehiculoCol.appendChild(label);
      vehiculoCol.appendChild(input);
    }
  }
  }






</script>


<div id="container"></div>

<form>
  <label for="numLines">Número de líneas:</label>
  <input type="number" id="numLines" name="numLines">
  <button type="submit">Crear líneas</button>
</form>

<script>
  const form = document.querySelector('form');
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const numLines = parseInt(document.querySelector('#numLines').value);
    const container = document.querySelector('#container');
    for (let i = 0; i < numLines; i++) {
      const line = document.createElement('div');
      for (let j = 0; j < 6; j++) {
        const input = document.createElement('input');
        input.type = 'number';
        line.appendChild(input);
      }
      container.appendChild(line);
    }
  });
</script>
