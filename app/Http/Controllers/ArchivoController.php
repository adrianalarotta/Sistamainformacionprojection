use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArchivoController extends Controller
{
    public function store(Request $request)
    {
        // Verificar si se ha enviado un archivo
        if ($request->hasFile('inputFile')) {

            // Obtener el archivo enviado
            $archivo = $request->file('inputFile');

            // Guardar el archivo en un directorio específico dentro de la carpeta "storage/app"
            $rutaArchivo = $archivo->store('archivos');

            // Opcionalmente, puedes almacenar el nombre del archivo y su ruta en una base de datos
            Archivo::create([
                'nombre' => $archivo->getClientOriginalName(),
                'ruta' => $rutaArchivo
            ]);

            // Redirigir a una vista o realizar alguna otra acción
            return redirect()->back()->with('mensaje', 'Archivo guardado correctamente');
        }

        // Si no se ha enviado ningún archivo, mostrar un mensaje de error
        return redirect()->back()->with('error', 'No se ha enviado ningún archivo');
    }
}



public function upload(Request $request)
{
    $file = $request->file('inputFile');
    $fileName = $file->getClientOriginalName();
    $filePath = $file->store('uploads'); // La carpeta 'uploads' debe existir en el directorio de almacenamiento

    // Puede realizar otras acciones con el archivo cargado, como guardar información en la base de datos

    return response()->json(['success' => true, 'message' => 'Archivo cargado correctamente', 'fileName' => $fileName]);
}




use App\Models\Valla;

public function store(Request $request)
{
    $valla = new Valla;

    $valla->tipo_solicitud = $request->input('tiposolicitud');
    $valla->fecha_instalacion = $request->input('fecha_instalacion');
    $valla->fecha_retiro = $request->input('fecha_retiro');
    $valla->tipo_valla = $request->input('tipovalla');
    $valla->direccion = $request->input('direccion');
    $valla->numero_caras = $request->input('numero_caras');
    $valla->ancho = $request->input('ancho');
    $valla->alto = $request->input('alto');
    $valla->area_total = $request->input('area_total');

    $valla->save();

    return redirect()->back()->with('success', 'Valla creada exitosamente.');
}



use App\Models\Comerciales;

...

public function store(Request $request)
{
    $comerciales = new Comerciales;
    $comerciales->tipo_solicitud = $request->tipo_solicitud;
    $comerciales->fecha_de_instalacion = $request->fecha_de_instalacion;
    $comerciales->direccion = $request->direccion;
    $comerciales->numero_de_elementos = $request->numero_de_elementos;
    $comerciales->Ancho = $request->Ancho;
    $comerciales->Alto = $request->Alto;
    $comerciales->Area_total = $request->Area_total;
    $comerciales->Ancho_fachada = $request->Ancho_fachada;
    $comerciales->Alto_fachada = $request->Alto_fachada;
    $comerciales->Area_Total_fachada = $request->Area_Total_fachada;
    $comerciales->save();

    // Opcional: redireccionar a la página de éxito
    return redirect('/success')->with('message', 'Datos guardados correctamente');
}




$inmobiliarios = new Inmobiliarios;
$inmobiliarios->tipo_solicitud = $request->tipo_solicitud;
$inmobiliarios->fecha_de_instalacion = $request->fecha_de_instalacion;
$inmobiliarios->direccion = $request->direccion;
$inmobiliarios->largo = $request->Largo;
$inmobiliarios->ancho = $request->Ancho;
$inmobiliarios->area_total = $request->Area_total;

if($request->has('opt1')){
    $inmobiliarios->vallas_proyectos_inmobiliarios = true;
    $inmobiliarios->numero_de_elemento_valla = $request->numero_de_elemento_valla;
    $inmobiliarios->alto_valla = $request->Alto_valla;
    $inmobiliarios->ancho_valla = $request->Ancho_valla;
    $inmobiliarios->area_total_valla = $request->Area_total_valla;
}

if($request->has('opt2')){
    $inmobiliarios->avisos_identificacion_proyectos_inmobiliarios = true;
    $inmobiliarios->numero_de_elemento_aviso = $request->numero_de_elemento_aviso;
    $inmobiliarios->alto_aviso = $request->Alto_aviso;
    $inmobiliarios->ancho_aviso = $request->Ancho_aviso;
    $inmobiliarios->area_total_aviso = $request->Area_total_aviso;
}

$inmobiliarios->save();





$inmobiliarios = new Inmobiliarios;
$inmobiliarios->tipo_solicitud = $request->tipo_solicitud;
$inmobiliarios->fecha_de_instalacion = $request->fecha_de_instalacion;
$inmobiliarios->direccion = $request->direccion;
$inmobiliarios->largo = $request->Largo;
$inmobiliarios->ancho = $request->Ancho;
$inmobiliarios->area_total = $request->Area_total;

if ($request->has('opt1')) {
    $inmobiliarios->vallas_proyectos_inmobiliarios = true;
    $inmobiliarios->numero_de_elemento_valla = $request->numero_de_elemento_valla;
    $inmobiliarios->alto_valla = $request->Alto_valla;
    $inmobiliarios->ancho_valla = $request->Ancho_valla;
    $inmobiliarios->area_total_valla = $request->Area_total_valla;
} else {
    $inmobiliarios->vallas_proyectos_inmobiliarios = false;
    $inmobiliarios->numero_de_elemento_valla = null;
    $inmobiliarios->alto_valla = null;
    $inmobiliarios->ancho_valla = null;
    $inmobiliarios->area_total_valla = null;
}

if ($request->has('opt2')) {
    $inmobiliarios->avisos_identificacion_proyectos_inmobiliarios = true;
    $inmobiliarios->numero_de_elemento_aviso = $request->numero_de_elemento_aviso;
    $inmobiliarios->alto_aviso = $request->Alto_aviso;
    $inmobiliarios->ancho_aviso = $request->Ancho_aviso;
    $inmobiliarios->area_total_aviso = $request->Area_total_aviso;
} else {
    $inmobiliarios->avisos_identificacion_proyectos_inmobiliarios = false;
    $inmobiliarios->numero_de_elemento_aviso = null;
    $inmobiliarios->alto_aviso = null;
    $inmobiliarios->ancho_aviso = null;
    $inmobiliarios->area_total_aviso = null;
}

$inmobiliarios->save();



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_colombina;

class TipoColombinaController extends Controller
{
    public function store(Request $request)
    {
        $tipo_colombina = new Tipo_colombina;
        $tipo_colombina->tipo_solicitud = $request->tipo_solicitud;
        $tipo_colombina->fecha_de_instalacion = $request->fecha_de_instalacion;
        $tipo_colombina->direccion = $request->direccion;
        $tipo_colombina->numero_de_elementos = $request->numero_de_elementos;
        $tipo_colombina->radio = $request->radio;
        $tipo_colombina->area_total = $request->Area_Total;

        // Guardar en la base de datos
        $tipo_colombina->save();

        // Puedes agregar alguna lógica adicional aquí, como redireccionar a otra página o mostrar un mensaje de éxito.

        return redirect()->back()->with('success', 'Datos ingresados correctamente.');
    }
}




<?php

namespace App\Http\Controllers;

use App\Models\Pendones;
use Illuminate\Http\Request;

class PendonesController extends Controller
{
    public function guardarDatos(Request $request)
    {
        // Validar los datos del formulario si es necesario
        $request->validate([
            'tipo_pendones' => 'required',
            'fecha_de_instalacion' => 'required',
            'fecha_de_retiro' => 'required',
            'direccion' => 'nullable',
            'numero_de_elementos' => 'required|numeric',
            'ancho' => 'required',
            'alto' => 'required',
            'area_total' => 'required',
        ]);

        // Crear una nueva instancia del modelo Pendones
        $pendon = new Pendones;

        // Asignar los valores del formulario a las propiedades del modelo
        $pendon->tipo_pendones = $request->input('tipo_pendones');
        $pendon->fecha_de_instalacion = $request->input('fecha_de_instalacion');
        $pendon->fecha_de_retiro = $request->input('fecha_de_retiro');
        $pendon->direccion = $request->input('direccion');
        $pendon->numero_de_elementos = $request->input('numero_de_elementos');
        $pendon->ancho = $request->input('ancho');
        $pendon->alto = $request->input('alto');
        $pendon->area_total = $request->input('area_total');

        // Guardar el modelo en la base de datos
        $pendon->save();

        // Redireccionar o devolver una respuesta según sea necesario
        // ...

        // Por ejemplo, redireccionar a una página de éxito
        return redirect()->route('pendones.index')->with('success', 'Los datos se guardaron correctamente.');
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function guardar(Request $request)
    {
        $solicitud = new Solicitud();
        // Aquí puedes asignar los valores a las columnas de la tabla "solicitudes" según tus necesidades
        // Por ejemplo: $solicitud->nombre = $request->input('nombre');
        $solicitud->save();

        return view('solicitud.guardada', ['radicado' => $solicitud->id]);
    }
}


use App\Http\Controllers\SolicitudController;

Route::post('/guardar-solicitud', [SolicitudController::class, 'guardar'])->name('guardar-solicitud');



html, body {
    height: 100%;
  }

  .container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
  }

  .message {
    text-align: center;
    font-size: 24px;
    font-weight: bold;
  }




  
    
// Obtener el archivo cargado

    
if
(
$request
->
hasFile
(
'inputFile_montaje'
)) {
       
$archivo
= 
$request
->
file
(
'inputFile_montaje'
);

       
// Guardar el archivo en la carpeta de almacenamiento (por ejemplo, 'public/uploads')

       
$rutaArchivo= 
$archivo
->
store
(
'uploads'
, 
'public'
);

       
// Guardar la ruta del archivo en la base de datos

       
$movile
->ruta_archivo = 
$rutaArchivo
;
       
$movile
->
save
();
   }
}



// Obtener el archivo cargado
if ($request->hasFile('inputFile_montaje')) {
    $archivo = $request->file('inputFile_montaje');
    
    // Guardar el archivo en la carpeta de almacenamiento (por ejemplo, 'public/uploads')
    $rutaArchivo = $archivo->store('uploads', 'public');
    
    // Guardar la ruta del archivo en la base de datos
    $movile->ruta_archivo = $rutaArchivo;
    $movile->save();
}


<input type="hidden" name="tipo" value="movil">








if ($request->tipo == 'movil') {
    $movile = new Movile;
    $movile->tipo_solicitud = $request->tipo_solicitud;
    $movile->fecha_de_instalacion = $request->fecha_de_instalacion;
    $movile->numero_de_vehiculos = $request->numero_de_vehiculos;
    $movile->placa = $request->placa;
    $movile->tipo_de_vehiculo = $request->tipo_de_vehiculo;
    $movile->Lateral_izquierdo = $request->Lateral_izquierdo;
    $movile->Lateral_derecho = $request->Lateral_derecho;
    $movile->Posterior = $request->Posterior;
    $movile->Area_Total = $request->Area_Total;
    $movile->persona_id = $solicitude->id;

    $documentos = [
        'fotomontaje' => 'MONTAJE',
        'Camara_de_comercio' => 'Camara_de_comercio',
        'RUT' => 'RUT',
        'Tarjeta_de_propiedad' => 'Tarjeta_de_propiedad',
        'Carta_escrita_de_solicitud' => 'Carta_escrita_de_solicitud',
        'permiso_anterior' => 'permiso_anterior'
    ];

    foreach ($documentos as $key => $value) {
        $file = $request->file($key);
        $filename = $value . '-' . $solicitude->id . '.pdf';
        $path = $file->storeAs('documentos_puex', $filename);
        $movile->$key = 'storage/' . $path;
    }

    $solicitude->save();
    $movile->save();
}

if ($request->tipo == 'vallas') {
    $valla = new Valla;
    $valla->tipo_solicitud = $request->tipo_solicitud;
    $valla->fecha_de_instalacion = $request->fecha_de_instalacion;
    $valla->fecha_de_retiro = $request->fecha_de_retiro;
    $valla->tipo_valla = $request->tipo_valla;
    $valla->direccion = $request->direccion;
    $valla->Numero_de_caras = $request->Numero_de_caras;
    $valla->Ancho = $request->Ancho;
    $valla->Alto = $request->Alto;
    $valla->Area_total = $request->Area_total;
    $valla->persona_id = $solicitude->id;

    $documentos = [
        'fotomontaje' => 'MONTAJE',
        'Camara_de_comercio' => 'Camara_de_comercio',
        'Certificado_de_libertad' => 'Certificado_de_libertad',
        'Autorizacion' => 'Autorizacion',
        'Carta_escrita_de_solicitud' => 'Carta_escrita_de_solicitud',
        'permiso_anterior' => 'permiso_anterior'
    ];

    foreach ($documentos as $key => $value) {
        $file = $request->file($key);
        $filename = $value . '-' . $solicitude->id . '.pdf';
        $path = $file->storeAs('documentos_puex', $filename);
        $valla->$key = 'storage/' . $path;
    }

    $solicitude->save();
    $valla->save();
}

