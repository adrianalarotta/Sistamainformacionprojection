<x-layouts.app>

    <form action="{{route('solicitudes.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <x-layouts.registro>
        </x-layouts.registro>

    <div class="image-icon">
        <div class="col-md-9 mr-auto" style="padding-left:8.5%">
        <span class="breadcrumb govco-icon govco-icon-shortr-arrow" style="height: 22px;"></span>
        <p class="ml-3 ml-md-0 text-miga" style="color: #004884; font-size:14px;">
            <strong> 2. Datos de la solicitud </strong>
            </p>
        </div>
    </div>
    <div class="row" >
        <div class="col-sm-4 mt-4" style="padding-left:9.5%">
            <label for="" class="">Modalidad de publicidad<span aria-required="true">*</span></label>
              <select class="form-control" id="modalidadpublicidad" onchange="modalidadpublicidad()">
                <option disabled selected>Avisos y Pendones</option>
                </select>

            </div>
            <div class="col-sm-3 mt-4" style="padding-left:3%">
                <label for=""  class="">Sub-Modalidad de publicidad<span aria-required="true">*</span></label>
                  <select class="form-control"  id="sub" name="tipo" onchange="submodalidadpublicidad()">
                    <option value="comerciales">Avisos de identificacion de establecimientos comerciales</option>
                    </select>
                </div>

    </div>


    <div class="row">
    <div class="col-sm-4 mt-4" style="padding-left:10%" >
      <label for="" class="">Tipo Solicitud<span aria-required="true">*</span></label>
      <select class="form-control" id="tiposolicitud" name="tipo_solicitud" onchange="mostrartiposolicitud()">
        <option disabled selected>Seleccione</option>
        <option value="Primera Vez">Primera Vez</option>
        <option value="Renovacion">Renovación</option>
      </select>
    </div>

    <div class="col-sm-3" style="padding-left:3%;" id="razon-social-div">
      <div class="entradas-de-texto-govco">
        <label for="razon-social-id">Fecha de instalación*</label>
        <input type="date" id="razon-social-id" name="fecha_de_instalacion" placeholder="Ejemplo: Campo de texto"/>
      </div>
    </div>


  </div>
  <div class="row" >
    <div class="col-sm-4" style="padding-left:10%;">
        <div class="entradas-de-texto-govco">
          <label for="razon-social-id">Direccion
           </label>
          <input class=form-control type="string" id="razon-social-id" name="direccion" placeholder="Ejemplo: Campo de texto"/>
        </div>
      </div>
      <div class="col-sm-3" style="padding-left:3%;" id="numvehiculos">
        <div class="entradas-de-texto-govco">
          <label for="razon-social-id">Numero de elementos*</label>
          <input class=form-control type="number" id="numvehiculos" name="numero_de_elementos" placeholder="Ejemplo: Campo de texto"/>
        </div>
      </div>

  </div>


  <div class="row" style="padding-left:10% ;">
  <div class="col-sm-2">
    <div class="entradas-de-texto-govco">
      <label for="razon-social-id">Ancho(m)*</label>
      <input class="form-control" type="number" name="Ancho" placeholder="Ejemplo: Campo de texto" oninput="calcularAreaTotal('Area_total', 'Ancho', 'Alto')" />
    </div>
  </div>

  <div class="col-sm-2" style="padding-left:1%;">
    <div class="entradas-de-texto-govco">
      <label for="razon-social-id">Alto(m)*</label>
      <input class="form-control" type="number" name="Alto" placeholder="Ejemplo: Campo de texto" oninput="calcularAreaTotal('Area_total', 'Ancho', 'Alto')" />
    </div>
  </div>

  <div class="col-sm-2" style="padding-left:1%;">
    <div class="entradas-de-texto-govco">
      <label for="razon-social-id">Área total(mts^2):</label>
      <input class="form-control" type="text" name="Area_total" placeholder="Ejemplo: Campo de texto" readonly />
    </div>
  </div>
</div>

<div class="row" style="padding-left:10% ;">
  <div class="col-sm-2">
    <div class="entradas-de-texto-govco">
      <label for="razon-social-id"><br>Ancho fachada(m)*</label>
      <input class="form-control" type="number" name="Ancho_fachada" placeholder="Ejemplo: Campo de texto" oninput="calcularAreaTotal('Area_Total_fachada', 'Ancho_fachada', 'Alto_fachada')" />
    </div>
  </div>

  <div class="col-sm-2" style="padding-left:1%;">
    <div class="entradas-de-texto-govco">
      <label for="razon-social-id"><br>Alto fachada(m)*</label>
      <input class="form-control" type="number" name="Alto_fachada" placeholder="Ejemplo: Campo de texto" oninput="calcularAreaTotal('Area_Total_fachada', 'Ancho_fachada', 'Alto_fachada')" />
    </div>
  </div>

  <div class="col-sm-2" style="padding-left:1%;">
    <div class="entradas-de-texto-govco">
      <label for="razon-social-id">Área total fachada(mts^2):</label>
      <input class="form-control" type="text" name="Area_Total_fachada" placeholder="Ejemplo: Campo de texto" readonly />
    </div>
  </div>
</div>

<script>
  function calcularAreaTotal(areaId, anchoId, altoId) {
    // Obtener los valores ingresados por el usuario
    var ancho = parseFloat(document.getElementsByName(anchoId)[0].value);
    var alto = parseFloat(document.getElementsByName(altoId)[0].value);

    // Verificar si los valores son números válidos
    if (isNaN(ancho) || isNaN(alto)) {
      // Al menos uno de los valores no es un número válido
      document.getElementsByName(areaId)[0].value = "Valores inválidos";
    } else {
      // Calcular el área total
      var areaTotal = ancho * alto;

      // Asignar el resultado al campo de texto del área total
      document.getElementsByName(areaId)[0].value = areaTotal;
    }
  }
</script>


  <div class="image-icon">
    <div class="col-md-9 mr-auto" style="padding-left:8.5%">
    <span class="breadcrumb govco-icon govco-icon-shortr-arrow" style="height: 22px;"></span>
    <p class="ml-3 ml-md-0 text-miga" style="color: #004884; font-size:14px;">
        <strong> 3. Documentos de la solicitud </strong>
        </p>
    </div>
</div>

<div class="row" style="padding-left:10% ;">
    <div class="container-carga-de-archivo-govco">
        <div class="loader-carga-de-archivo-govco">
          <div class="all-input-carga-de-archivo-govco">
            <input type="file" name="fotomontaje" id="inputFile" class="input-carga-de-archivo-govco active" data-error="0" data-action="uploadFile" data-action-delete="deleteFile" multiple/>
            <label for="inputFile" class="label-carga-de-archivo-govco">Foto montaje o plano digitalizado*</label>
            <label for="inputFile" class="container-input-carga-de-archivo-govco">
              <span class="button-file-carga-de-archivo-govco">Seleccionar archivo</span>
              <span class="file-name-carga-de-archivo-govco">Sin archivo seleccionado</span>
            </label>
            <span class="text-validation-carga-de-archivo-govco">Cualquier tipo de archivo. Peso máximo: 2 MB</span>
          </div>
          <div class="load-button-carga-de-archivo-govco">
            <div class="load-carga-de-archivo-govco">
              <!-- indicador de carga -->
              <div class="spinner-indicador-de-carga-govco" style="width: 32px; height: 32px; border-width: 6px;" role="status">
                <span class="visually-hidden">Cargando...</span>
              </div>
              <!-- end indicador de carga -->
            </div>
             <!-- <button class="button-loader-carga-de-archivo-govco" disabled>Cargar archivo</button>
            -->
          </div>
        </div>

        <div class="container-detail-carga-de-archivo-govco">
          <span class="alert-carga-de-archivo-govco visually-hidden"></span>
          <div class="attached-files-carga-de-archivo-govco"></div>
        </div>
      </div>
</div>
<div class="row" style="padding-left:10% ;">
    <div class="container-carga-de-archivo-govco">
        <div class="loader-carga-de-archivo-govco">
          <div class="all-input-carga-de-archivo-govco">
            <input type="file" name="Camara_de_comercio" id="inputFile" class="input-carga-de-archivo-govco active" data-error="0" data-action="uploadFile" data-action-delete="deleteFile" multiple/>
            <label for="inputFile" class="label-carga-de-archivo-govco">Camará de comercio ó Registro único tributario - RUT*</label>
            <label for="inputFile" class="container-input-carga-de-archivo-govco">
              <span class="button-file-carga-de-archivo-govco">Seleccionar archivo</span>
              <span class="file-name-carga-de-archivo-govco">Sin archivo seleccionado</span>
            </label>
            <span class="text-validation-carga-de-archivo-govco">Cualquier tipo de archivo. Peso máximo: 2 MB</span>
          </div>
          <div class="load-button-carga-de-archivo-govco">
            <div class="load-carga-de-archivo-govco">
              <!-- indicador de carga -->
              <div class="spinner-indicador-de-carga-govco" style="width: 32px; height: 32px; border-width: 6px;" role="status">
                <span class="visually-hidden">Cargando...</span>
              </div>
              <!-- end indicador de carga -->
            </div>
            <!-- <button class="button-loader-carga-de-archivo-govco" disabled>Cargar archivo</button>
            -->
          </div>
        </div>

        <div class="container-detail-carga-de-archivo-govco">
          <span class="alert-carga-de-archivo-govco visually-hidden"></span>
          <div class="attached-files-carga-de-archivo-govco"></div>
        </div>
      </div>
</div>

<div class="row" style="padding-left:10% ;">
    <div class="container-carga-de-archivo-govco">
        <div class="loader-carga-de-archivo-govco">
          <div class="all-input-carga-de-archivo-govco">
            <input type="file" name="Carta_escrita_de_solicitud" id="inputFile" class="input-carga-de-archivo-govco active" data-error="0" data-action="uploadFile" data-action-delete="deleteFile" multiple/>
            <label for="inputFile" class="label-carga-de-archivo-govco">Carta escrita de solicitud*</label>
            <label for="inputFile" class="container-input-carga-de-archivo-govco">
              <span class="button-file-carga-de-archivo-govco">Seleccionar archivo</span>
              <span class="file-name-carga-de-archivo-govco">Sin archivo seleccionado</span>
            </label>
            <span class="text-validation-carga-de-archivo-govco">Cualquier tipo de archivo. Peso máximo: 2 MB</span>
          </div>
          <div class="load-button-carga-de-archivo-govco">
            <div class="load-carga-de-archivo-govco">
              <!-- indicador de carga -->
              <div class="spinner-indicador-de-carga-govco" style="width: 32px; height: 32px; border-width: 6px;" role="status">
                <span class="visually-hidden">Cargando...</span>
              </div>
              <!-- end indicador de carga -->
            </div>
             <!-- <button class="button-loader-carga-de-archivo-govco" disabled>Cargar archivo</button>
            -->
          </div>
        </div>

        <div class="container-detail-carga-de-archivo-govco">
          <span class="alert-carga-de-archivo-govco visually-hidden"></span>
          <div class="attached-files-carga-de-archivo-govco"></div>
        </div>
      </div>
</div>

<div id="resolucionanterior1"  >
    <div class="row" style="padding-left:10% ">
        <div class="container-carga-de-archivo-govco">
            <div class="loader-carga-de-archivo-govco" style="flex">
              <div class="all-input-carga-de-archivo-govco">
                <input type="file" name="permiso_anterior" id="inputFile" class="input-carga-de-archivo-govco active" data-error="0" data-action="uploadFile" data-action-delete="deleteFile" multiple/>
                <label for="inputFile" class="label-carga-de-archivo-govco">Resolución de vigencia, permiso anterior*</label>
                <label for="inputFile" class="container-input-carga-de-archivo-govco">
                  <span class="button-file-carga-de-archivo-govco">Seleccionar archivo</span>
                  <span class="file-name-carga-de-archivo-govco">Sin archivo seleccionado</span>
                </label>
                <span class="text-validation-carga-de-archivo-govco">Cualquier tipo de archivo. Peso máximo: 2 MB</span>
              </div>
              <div class="load-button-carga-de-archivo-govco">
                <div class="load-carga-de-archivo-govco">
                  <!-- indicador de carga -->
                  <div class="spinner-indicador-de-carga-govco" style="width: 30px; height: 32px; border-width: 6px;" role="status">
                    <span class="visually-hidden">Cargando...</span>
                  </div>
                  <!-- end indicador de carga -->
                </div>
                <!--  <button class="button-loader-carga-de-archivo-govco" disabled>Cargar archivo</button>
                -->
              </div>
            </div>

            <div class="container-detail-carga-de-archivo-govco">
              <span class="alert-carga-de-archivo-govco visually-hidden"></span>
              <div class="attached-files-carga-de-archivo-govco"></div>
            </div>
          </div>
    </div>
    </div>

    <x-layouts.capcha>
    </x-layouts.capcha>
    <div class="row" style="padding-left:11%; padding-top:1%" >
    
    <button type="submit" class="btn-govco outline-btn-govco" style="width: 165px; height: 42px;">Enviar Solicitud</button>

    </div>
    
  </form>

<script>

    function mostrartiposolicitud() {

      var x = document.getElementById("tiposolicitud").value;
      if (x == "Renovacion") {
        document.getElementById("resolucionanterior1").style.display = "block";
      } if (x == "Primera Vez"){
        document.getElementById("resolucionanterior1").style.display = "none";
      }
    }
</script>

</x-layouts.app>
