<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

   <style>
    .entradas-de-texto-govco {
    padding: 0px!important;
    font-size: 16px!important;
    font-family: WorkSans-Regular!important;
    }
    </style>

</head>
<body>

    <div class="image-icon">
        <div class="col-md-9 mr-auto" style="padding-left:8.5%">
        <span class="breadcrumb govco-icon govco-icon-shortr-arrow" style="height: 22px;"></span>
        <p class="ml-3 ml-md-0 text-miga" style="color: #004884; font-size:14px;">
            <strong> 1. Datos generales </strong>
            </p>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-6 col-md-4 " style="padding-left:10%; padding-top:0.5%">
        <label for="" class="">Tipo Persona<span aria-required="true">*</span></label>
          <select class="form-control" id="tipopersona" onchange="mostrarRazonSocial()" name="tipopersona">
            <option disabled selected>Seleccione</option>
            <option value="natural">Natural</option>
            <option value="juridica">Juridica</option>
          </select>
        </div>
        <div class="col-sm-6 col-md-4" style="padding-left:3%; display:none;" id="razon-social-div">
            <div class="entradas-de-texto-govco">
              <label for="razon-social-id">Razon Social Responsable*</label>
              <input type="text" id="razon" name="Razon_Social_Responsable" placeholder="Ejemplo: Campo de texto"/>
            </div>
          </div>
      </div>


    <div class="row">
        <div class="col-sm-6 col-md-4 " style="padding-left:10%">
          <div class="entradas-de-texto-govco">
            <label for="input-basico-id" name="nombre">Nombres*</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ejemplo: Campo de texto"/>
          </div>
        </div>
        <div class="col-sm-6 col-md-4" style="padding-left:3%">
          <div class="entradas-de-texto-govco">
            <label for="input-basico-id">Apellidos*</label>
            <input type="text" id="apellido" name="apellido" placeholder="Ejemplo: Campo de texto"/>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 mb-0" style="padding-left:10%">
            <label for="lista-desplegables" class="label-desplegable-govco">Tipo de documento*</label>
                <select class="form-control" id="tipodocumento" name="tipo_documento" onchange="mostrarCampo(this.value)" >
                    <option disabled selected>Seleccione</option>
                    <option value="cedula">cedula</option>
                    <option value="cedulaExtranjeria">Cedula de extrangeria</option>
                    <option value="numNit">NIT</option>
                </select>
            </div>

            <div class="col-sm-6 col-md-4 mb-0" style="padding-left:3%">
                <div class="entradas-de-texto-govco">
                  <label for="input-basico-id">Numero de documento*</label>
                  <input type="text" id="documento" name="documento" placeholder="Ejemplo: Campo de texto"/>
                </div>
              </div>
        </div>
    <div class="row">
        <div class="col-sm-6 col-md-4 mt-0" style="padding-left:10%" >
            <div class="entradas-de-texto-govco">
              <label for="input-basico-id">Telefono*</label>
              <input type="text" id="telefono" name="telefono" placeholder="Ejemplo: Campo de texto"/>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mt-0" style="padding-left:3%">
            <div class="entradas-de-texto-govco">
              <label for="input-basico-id">Correo Electronico*</label>
              <input type="text" id="correo" name="correo" placeholder="Ejemplo: Campo de texto"/>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-6 col-md-4" style="padding-left:10%">
          <div class="entradas-de-texto-govco">
            <label for="telefono-id">Direccion*</label>
            <input type="text" id="direccion" name="direccion" placeholder="Ejemplo: Campo de texto"/>
          </div>
        </div>
    </div>


<script>

document.addEventListener('DOMContentLoaded', (e)=>{

})

window.addEventListener('onchange', (e)=>{
      console.log(e.target)
   })

function mostrarRazonSocial() {



  var x = document.getElementById("tipopersona").value;
  if (x == "juridica") {
    document.getElementById("razon-social-div").style.display = "block";
  } else {
    document.getElementById("razon-social-div").style.display = "none";
  }
}
</script>


<script>
  document.addEventListener('DOMContentLoaded', (e) => {
    // Obtener referencia a los campos del formulario
    const tipoPersona = document.getElementById('tipopersona');
    const razonSocialDiv = document.getElementById('razon-social-div');
    const razonSocialInput = document.getElementById('razon');
    const nombreInput = document.getElementById('nombre');
    const apellidoInput = document.getElementById('apellido');
    const tipoDocumento = document.getElementById('tipodocumento');
    const documentoInput = document.getElementById('documento');
    const telefonoInput = document.getElementById('telefono');
    const correoInput = document.getElementById('correo');
    const direccionInput = document.getElementById('direccion');

    // Agregar eventos de validación
    tipoPersona.addEventListener('change', mostrarRazonSocial);
    nombreInput.addEventListener('blur', validarNombre);
    apellidoInput.addEventListener('blur', validarApellido);
    tipoDocumento.addEventListener('change', mostrarCampoDocumento);
    documentoInput.addEventListener('blur', validarDocumento);
    telefonoInput.addEventListener('blur', validarTelefono);
    correoInput.addEventListener('blur', validarCorreo);
    direccionInput.addEventListener('blur', validarDireccion);

    // Función para mostrar/ocultar el campo de Razon Social
    function mostrarRazonSocial() {
      const seleccionado = tipoPersona.value;
      if (seleccionado === 'juridica') {
        razonSocialDiv.style.display = 'block';
      } else {
        razonSocialDiv.style.display = 'none';
      }
    }

    // Funciones de validación
    function validarNombre() {
      const nombre = nombreInput.value.trim();
      if (nombre === '') {
        mostrarError(nombreInput, 'Ingrese su nombre');
      } else {
        mostrarExito(nombreInput);
      }
    }

    function validarApellido() {
      const apellido = apellidoInput.value.trim();
      if (apellido === '') {
        mostrarError(apellidoInput, 'Ingrese su apellido');
      } else {
        mostrarExito(apellidoInput);
      }
    }

    function mostrarCampoDocumento() {
      const seleccionado = tipoDocumento.value;
      if (seleccionado === 'cedula' || seleccionado === 'cedulaExtranjeria') {
        // Mostrar campo de número de documento
        documentoInput.style.display = 'block';
      } else {
        // Ocultar campo de número de documento
        documentoInput.style.display = 'none';
      }
    }

    function validarDocumento() {
      const documento = documentoInput.value.trim();
      if (documento === '') {
        mostrarError(documentoInput, 'Ingrese su número de documento');
      } else {
        mostrarExito(documentoInput);
      }
    }

    function validarTelefono() {
      const telefono = telefonoInput.value.trim();
      if (telefono === '') {
        mostrarError(telefonoInput, 'Ingrese su número de teléfono');
      } else {
        mostrarExito(telefonoInput);
      }
    }

    function validarCorreo() {
      const correo = correoInput.value.trim();
      if (correo === '') {
        mostrarError(correoInput, 'Ingrese su correo electrónico');
      } else {
        // Validar formato de correo electrónico
        const correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!correo.match(correoRegex)) {
          mostrarError(correoInput, 'Ingrese un correo electrónico válido');
        } else {
          mostrarExito(correoInput);
        }
      }
    }

    function validarDireccion() {
      const direccion = direccionInput.value.trim();
      if (direccion === '') {
        mostrarError(direccionInput, 'Ingrese su dirección');
      } else {
        mostrarExito(direccionInput);
      }
    }

    // Funciones auxiliares para mostrar/ocultar mensajes de error
    function mostrarError(input, mensaje) {
      input.classList.add('is-invalid');
      input.classList.remove('is-valid');
      const errorDiv = document.createElement('div');
      errorDiv.classList.add('invalid-feedback');
      errorDiv.innerText = mensaje;
      input.parentNode.appendChild(errorDiv);
    }

    function mostrarExito(input) {
      input.classList.remove('is-invalid');
      input.classList.add('is-valid');
      const errorDiv = input.parentNode.querySelector('.invalid-feedback');
      if (errorDiv) {
        errorDiv.remove();
      }
    }
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', (e) => {
    // Obtener referencia al formulario
    const formulario = document.getElementById('mi-formulario');

    // Agregar evento de envío del formulario
    formulario.addEventListener('submit', (event) => {
      // Cancelar el envío del formulario por defecto
      event.preventDefault();

      // Realizar todas las validaciones necesarias para hacer el registro 
      const tipoPersona = document.getElementById('tipopersona').value;
      const razonSocialInput = document.getElementById('razon');
      const nombreInput = document.getElementById('nombre');
      const apellidoInput = document.getElementById('apellido');
      const tipoDocumento = document.getElementById('tipodocumento').value;
      const documentoInput = document.getElementById('documento');
      const telefonoInput = document.getElementById('telefono');
      const correoInput = document.getElementById('correo');
      const direccionInput = document.getElementById('direccion');

      // Validar campos requeridos
      let isValid = true;
      if (tipoPersona === 'juridica' && razonSocialInput.value.trim() === '') {
        mostrarError(razonSocialInput, 'Ingrese la razón social');
        isValid = false;
      }
      if (nombreInput.value.trim() === '') {
        mostrarError(nombreInput, 'Ingrese su nombre');
        isValid = false;
      }
      if (apellidoInput.value.trim() === '') {
        mostrarError(apellidoInput, 'Ingrese su apellido');
        isValid = false;
      }
      if (tipoDocumento === '') {
        mostrarError(tipoDocumento, 'Seleccione el tipo de documento');
        isValid = false;
      }
      if (documentoInput.value.trim() === '') {
        mostrarError(documentoInput, 'Ingrese el número de documento');
        isValid = false;
      }
      if (telefonoInput.value.trim() === '') {
        mostrarError(telefonoInput, 'Ingrese su número de teléfono');
        isValid = false;
      }
      if (correoInput.value.trim() === '') {
        mostrarError(correoInput, 'Ingrese su correo electrónico');
        isValid = false;
      }
      if (direccionInput.value.trim() === '') {
        mostrarError(direccionInput, 'Ingrese su dirección');
        isValid = false;
      }

      if (isValid) {
        // Enviar el formulario si todas las validaciones son exitosas
        formulario.submit();
      }
    });

    // Funciones auxiliares para mostrar/ocultar mensajes de error
    function mostrarError(input, mensaje) {
      input.classList.add('is-invalid');
      input.classList.remove('is-valid');
      const errorDiv = document.createElement('div');
      errorDiv.classList.add('invalid-feedback');
      errorDiv.innerText = mensaje;
      input.parentNode.appendChild(errorDiv);
    }

    function mostrarExito(input) {
      input.classList.remove('is-invalid');
      input.classList.add('is-valid');
      const errorDiv = input.parentNode.querySelector('.invalid-feedback');
      if (errorDiv) {
        errorDiv.remove();
      }
    }
  });
</script>


</body>
