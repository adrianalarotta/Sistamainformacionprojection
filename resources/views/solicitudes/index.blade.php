<x-layouts.app>


    <head>
        <link href="{{ asset('css/tarjeta.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="css/ayuda.css">
        <link href="{{ asset('css/informacion.css') }}" rel="stylesheet">
        <link href="{{ asset('js/informacion.js') }}" rel="stylesheet">
        <link rel="stylesheet" href="css/linea_de_avance.css">
        <div class="row m-5">
            <div id="para-mirar" class="barra-accesibilidad-letra">

                <div style="text-align-center;">
                    <div class="col-md-12" style="padding-left:5.8%">
                        <img src="https://www.bucaramanga.gov.co/wp-content/uploads/2021/08/escudo-bucaramanga.png"
                            width="70" height="60"style="float:left">

                    </div>
                    <br>
                    <p class="titulo-barra-accesibilidad" style="color: #004884;">&nbsp;Bienvenido a PUEX</p>

                </div>
            </div>
        </div>

    </head>

    <body>
        <!-- Aquí es donde se encuentra el contenido de la página -->
        <div class="container">
            <div class="row">
                <div class="col-md-9 mr-auto" style="padding-left:2.2%">
                    <nav aria-label="Miga de pan predeterminada de tres niveles">
                        <ul class="breadcrumb-govco">
                            <li class="breadcrumb-item-govco"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item-govco"><a href="#">Miga sección anterior</a></li>
                            <li class="breadcrumb-item-govco active" aria-current="page">Sección actual</li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-6">

                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mr-auto">
                    <div class="container-fluid">
                        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">

                            <div class="card step-progress border-0"
                                style="font-size: 20px;background-color: transparent !important;">
                                <div class="step-slider">
                                    <div class="linea-avance-govco h-linea-avance-govco" id="lineaAvance1">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 15%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="items-header-linea-avance-govco">
                                            <div class="header-linea-avance-govco active-linea-avance-govco">
                                                <div class="indicator-linea-avance-govco"
                                                    data-la-target="#itemLineaAvance11" percentage="15">1</div>
                                                <span class="title-linea-avance-govco">Inicio</span>
                                            </div>
                                            <div class="header-linea-avance-govco">
                                                <div class="indicator-linea-avance-govco"
                                                    data-la-target="#itemLineaAvance12" percentage="50">2</div>
                                                <span class="title-linea-avance-govco">Hago mi solicitud</span>
                                            </div>
                                            <div class="header-linea-avance-govco">
                                                <div class="indicator-linea-avance-govco"
                                                    data-la-target="#itemLineaAvance13" percentage="80">3</div>
                                                <span class="title-linea-avance-govco">Procesan mi solicitud</span>
                                            </div>
                                            <div class="header-linea-avance-govco">
                                                <div class="indicator-linea-avance-govco"
                                                    data-la-target="#itemLineaAvance14" percentage="100">4</div>
                                                <span class="title-linea-avance-govco">Respuesta</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="image-icon">
                <div class="col-md-9 mr-auto" style="padding-left:2.2%">
                    <span class="breadcrumb govco-icon govco-icon-shortr-arrow" style="height: 22px;"></span>
                    <p class="ml-3 ml-md-0 text-miga" style="color: #004884; font-size:14px;">
                        <strong> Registro de publicidad exterior visual </strong>
                    </p>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-md-8 mr-auto">
                <div class="container-modal-govco" id="modal_basico" style="display: block">
                    <div class="modal-container-govco" id="exampleModalBasic" tabindex="-1" data-bs-backdrop="false"
                        data-bs-keyboard="false" aria-labelledby="exampleModalBasic" aria-hidden="true"
                        aria-hidden="true" role="dialog">
                        <div class="modal-dialog modal-dialog-govco">
                            <div class="modal-content modal-content-govco">
                                <div class="modal-header modal-header-govco">
                                    <a href="javascript:void(0)" role="button" data-bs-dismiss="modal"
                                        class="close-btn-modal" aria-label="Close" aria-expanded="false"
                                        onclick="closeModal('modal_basico')">
                                        <span class="modal-close-govco govco-times"></span>
                                    </a>
                                </div>
                                <div class="modal-body modal-body-govco">
                                    <h3 class="modal-subtitle-govco">Importante</h3>
                                    <div id="itemLineaAvance11"
                                        class="body-linea-avance-govco active-linea-avance-govco"
                                        data-la-parent="#lineaAvance1">
                                        <p style="text-align: justify">El presente proceso, tiene como finalidad la
                                            legalización de toda la Publicidad Exterior visual, Comercial e
                                            Institucional (entidades públicas), que pretendan la exhibición de la misma,
                                            en sus diferentes modalidades y etapas.
                                            Conforme al proceso se recomienda seguir las instrucciones y cargar la
                                            documentación completa. Para alguna orientación adicional, comunicarse al
                                            número: 6337000 ext 362.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="aservice-container">
                    <a href="javascript:void(0)" tabindex="-1" class="aservice-spacing" id="aserviceTutorial">
                        <div class="aservice" tabindex="0">
                            <div class="aservice-item link-card">
                                <p class="aservice-text-govco aservice-link-govco aservice-spacing-card">
                                    Te explicamos con tutoriales
                                </p>
                            </div>
                        </div>
                    </a>


                    <div class="aservice aservice-spacing" id="aserviceConsulta">
                        <div class="aservice-item">
                            <h2 class="aservice-header-govco" id="headingOne">
                                <button class="button-aservice-govco collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne" id="collapseOneButton">
                                    <a class="aservice-text-govco">¿Tienes dudas sobre este trámite o consulta?</a>
                                </button>
                            </h2>
                            <div id="collapseOne" class="aservice-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#aserviceExampleOne">
                                <div class="aservice-body">
                                    <div class="row aservice-row-govco">
                                        <span class="mail-icon-govco"></span>
                                        <div class="aservice-mailto-container">
                                            <a href="mailto:soporteccc@mintic.gov.co"
                                                class="aservice-mailto-govco">Enviar correo electrónico</a>
                                        </div>
                                    </div>
                                    <div class="row aservice-row-govco aservice-row-center-govco">
                                        <span class="headset-icon-govco"></span>
                                        <p class="aservice-number-govco">(601) 123-45-78<br>01-8000-456-768</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aservice" id="aserviceProceso">
                        <div class="aservice-item">
                            <h2 class="aservice-header-govco" id="headingTwo">
                                <button class="button-aservice-govco collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo" id="collapseTwoButton">
                                    <a class="aservice-text-govco">¿Cómo fue tu experiencia durante el proceso?</a>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="aservice-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#aserviceExampleTwo">
                                <div class="aservice-body aservice-body-two">
                                    <ul class="aservice-item-menu-ul">
                                        <li class="aservice-item-menu-li">
                                            <a class="dropdown-item aservice-item-govco" id="easy_item"
                                                href="javascript:void(0)"
                                                onclick="selectedOption('easy_item', 'hard_item')">
                                                <div class="aservice-item-icon-govco">
                                                    <span class="easy-icon-govco"></span>
                                                </div>
                                                <span>fácil</span>
                                            </a>
                                        </li>
                                        <li class="aservice-item-menu-li">
                                            <a class="dropdown-item aservice-item-govco" id="hard_item"
                                                href="javascript:void(0)"
                                                onclick="selectedOption('hard_item', 'easy_item')">
                                                <div class="aservice-item-icon-govco">
                                                    <span class="hard-icon-govco"></span>
                                                </div>
                                                <span>difícil</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="alert aservice-alerta-govco aservice-alerta-success-govco asuccess"
                                        id="alerta-service" style="display: none;" role="alert">
                                        <p class="aservice-alerta-content-text">
                                            <span>¡Gracias!</span><br>Tus comentarios nos ayudan a mejorar los servicios
                                            de nuestro país.
                                        </p>
                                    </div>
                                    <div class="container-button" id="comentarios1-button" style="display: none;">
                                        <button type="button" class="btn btn-primary btn-service-govco btn-contorno"
                                            onclick="verComentarios()">Envía tus comentarios</button>
                                    </div>
                                    <div class="aservice-comentarios" id="aservice-comentarios"
                                        style="display: none;">
                                        <p class="aservice-comentarios-fixed-text">Escribe tus comentarios:</p>
                                        <textarea class="aservice-comentarios-textarea" id="aservice-comentarios-textarea"
                                            placeholder="Queremos conocer tu experiencia, sugerencias y consejos..." onkeypress="contadorTextArea()"
                                            aria-label="area de comentarios"></textarea>
                                        <p class="aservice-comentarios-alert" id="aservice-comentarios-alert"
                                            style="display: none;">
                                            * Para poder enviar su comentario, este debe contener, al menos, 10
                                            caracteres.
                                        </p>
                                    </div>
                                    <div class="container-button" id="comentarios2-button" style="display: none;">
                                        <button type="button" id="comentarios2-button-item" disabled="true"
                                            class="btn btn-primary btn-service-govco btn-contorno"
                                            onclick="enviarComentarios()">Envía tus comentarios</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        </div>









        <!-- Tarjeta tipo módulo -->
        <div class="col-md-6 mr-auto">
            <div class="tarjeta-container">
                <div><a class="module-tarjeta-govco" href="{{ route('solicitudes.registro') }}"
                        title="Registra tu solicitud ">
                        <div class="header-tarjeta-govco">
                            <h5>Radicar trámite</h5>
                        </div>
                        <hr>
                        <div class="body-tarjeta-govco">
                            <p>Inicie el trámite de legalización para exposición de publicidad visual exterior.</p>
                        </div>
                    </a>
                    <a class="module-tarjeta-govco" href="" title="descripción donde redirige el enlace">
                        <div class="header-tarjeta-govco">
                            <h5>Consultar mi trámite</h5>
                        </div>
                        <hr>
                        <div class="body-tarjeta-govco">
                            <p>Consulte el estado de su solicitud ante la alcaldia.</p>
                        </div>
                    </a>
                </div>


            </div>

        </div>




</x-layouts.app>
