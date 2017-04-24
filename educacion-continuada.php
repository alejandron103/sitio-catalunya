<!Doctype html>
	<html lang="es">
<head>
		
	<meta charset="UTF-8"/>

	<link rel="stylesheet" type="text/css" href="styles.css">

  	
  	<!-- Versión compilada y comprimida del CSS de Bootstrap -->

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
	
$(function(){
	

var portfolio = $('section.corporate-programs');

        portfolio.find('ul').css({display: 'none'});

        var headers = portfolio.find('h4').on('click', function () {

            if ($(this).hasClass('active')) {
                $(this).parent().parent().find('div[data-target-panel]').slideUp();

                $(this).removeClass('active');

                $(this).parent().parent().find('h4').removeClass('active');

                return;

            }
            ;

            $(this).parent().parent().find('h4').removeClass('active');

            $(this).addClass('active');

            var contentForTargetPanel = $(this).parent().find('>ul').html();

            $(this).parent().parent().find('div[data-target-panel]').removeAttr('style');

            if (!$(this).parent().parent().find('div[data-target-panel]').find('ul').length) {

                $(this).parent().parent().find('div[data-target-panel]').append('<ul></ul>');
            }

            $(this).parent().parent().find('div[data-target-panel]').find('ul').html(contentForTargetPanel);
        });

        $('li[data-code] a').append('<button>Info</button>');

        $(document).on('click', 'li[data-code]', function () {

            var nemonic = $(this).attr('data-code');

            $('select[name="programa"]').val(nemonic);

            $('form#contactform').addClass('animated pulse');

            setTimeout(function(){
                $('form#contactform').removeClass('animated pulse');
            }, 1500);

            if(document.body.clientWidth <= 768){
                $('input#name').focus();
            }
        });





});
</script>



<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">



	<title>Educación Continuada</title>

</head>

<body>


  <!---inicio backrgound-video-->

<div class="cont-image-educacion">

    <!---inicio header-->
    
<div class="container">

    <div class="col-md-12 header">

        <!---inicio logo-->

        <div class="col-md-6 col-sm-6 col-xs-5 logo">

            <img src="images/logo_catalunya.png">

        </div>

        <!---final logo-->

        <!---inicio redes-->

        <div class="col-md-6 col-sm-6 col-xs-7 social">

            <ul class="redes">

            <li><a data-icon="check-mark" href="">facebook</a></li> 
            <li><a data-icon="check-mark" href="">facebook</a></li>
            <li><a data-icon="check-mark" href="">facebook</a></li>
            <li><a data-icon="check-mark" href="">facebook</a></li>
            <li><a data-icon="check-mark" href="">facebook</a></li>

            </ul>

        </div>  
        
        <!---inicio redes-->

    </div>

</div>

    <!---final header-->

	<!---inicio barra de navegación-->

	<div class="col-md-12 nav-bar">

		<ul class="col-md-12 barra">

			<li>Nosotros</li>	
			<li>Educación Continua</li>
			<li>Programas Certificados</li>
			<li>Pregado</li>
			<li>Responsabilidad Social</li>

		</ul>

	</div>

	<!---final barra de navegación-->

	<!---inicio texto imágen-->

	<div class="col-md-12 texto-imagen">

		<p class="texto-imagen1">

		“Nunca consideres el estudio como una obligación sino como una oportunidad para penetrar en el bello y maravilloso mundo del saber.”

		</p>

		<p class="texto-imagen2">Albert Einstein (1879 - 1955) </p>

	</div>

	<!---final texto imágen-->

<!--</video>-->

</div>

<!---final backrgound-image-->



<!---inicio container-->

<div class="container">

	<!---inicio introducción-->

	<div class="col-md-12 intro">

		<div class="col-md-12 title-intro">

			<p>Educación Continuada</p>

		</div>

		<div class="col-md-12 texto-intro">

			<p>
				Disponemos de un amplio portafolio de programas de Educación Continuada en las modalidades de Diplomado o Curso Corto. Estos programas se ofrecen con Metodologia Online o Flipped (Presencial + Virtual) *<br><br>

				Nuestro equipo de Diseñadores + Desarrolladores virtuales, está en capacidad de ajustar o desarrollar contenidos de acuerdo con los requerimientos específicos de su organización. Estos son algunos temas de Nuestra Oferta de Programas de Educación Continuada:</p>

		</div>

	</div>

	<!---final introducción-->


	<!---inicio formulario-->


	<div class="col-md-12 contenido">


<!-- inicio tabs-->
		
<section class="col-md-8 corporate-programs">
       
        <article>
            <h3 class="outline">Programas de Formación Educativa Unicatalunya</h3>

            				<!-- inicio panel-->

                            <div data-shared-panel="">

                                            <div>
                            <h4>
                               <span data-icon="check-mark"><span class="titulo-educacion">Dirección General</span></span>
                            </h4>

                             <ul id="educacion">
                             
                                                                    <li data-code="PEDIREST"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/DARQEM_8Dg4tb7rrzAo.pdf" target="_blank">Arquitectura Empresarial</a></li>

                                                                    <li data-code="PEPMP"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/GPRP_ieVxml2GHz4FaI8.pdf" target="_blank">Gerencia de Proyectos Bajo Lineamientos PMBOK – Metodología PMI®</a></li>

                                                                    <li data-code="PEHABDIR"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/SCPMP_vDFNbKrzAofNwxI.pdf" target="_blank">Preparación para la Certificacion PMP</a></li>

                                                                    <li data-code="PEADMNEG">Dirección Estratégica</li>

                                                                    <li data-code="PEOUTPL">Habilidades de Dirección</li>

                                                                    <li data-code="PEGESTCON">Administración de Negocios</li>

                                                                    <li data-code="PENEGCON">Outplacement</li>

                                                                    <li data-code="PECOACH">Gestión del Conocimiento</li>

                                                                    <li data-code="PEPREPPMP">Negociación de Conflictos</li>

                                                                    <li data-code="PELIDERHAB">Liderazgo y Coaching Empresarial</li>

                                                                    <li data-code="PECOMASER">Liderazgo y Desarrollo de Habilidades Gerenciales</li>

                                                                    <li data-code="PETERCLAB">Comunicación Asertiva</li>

                                                                    <li data-code="PEPLANEST">Tercerización Laboral - Decreto 583 del 8 de Abril de 2016</li>

                                                                    <li data-code="PEREDCOST">Planeación y Negociación Estratégica</li>

                                                                    <li data-code="PEIMPACT">Reducción de Costos y Gastos</li>

                                                                    <li data-code="PEPENSEST">Presentaciones de Alto Impacto, Persuasión e Influencia</li>

                                                                    <li data-code="PEFORMPROY">Desarrollo del Pensamiento Estratégico</li>

                                                                    <li data-code="PEDNUEPROD">Formulación de Proyectos Productivos</li>

                                                                    <li data-code="PEINNOV">Desarrollo de Nuevos Productos</li>

                                                                    <li data-code="PEGESTEMP">Innovación</li>

                                                                    <li data-code="PEBALANCE">Gestión Empresarial</li>

                                                                    <li data-code="PEPRODGEREN">Balance Scorecard e Indicadores de Gestión</li>

                                                                    <li data-code="PEALTGER">Productividad y Gerencia Competitiva</li>

                                                                    <li data-code="PELIDPROD">Alta Gerencia</li>

                                                                    <li data-code="PEGPETR">Liderazgo y Productividad</li>

                                                                    <li data-code="PEPREPPMPCAMP">Preparación para la Certificación PMP® O CAMP® (PMBOK® 5ta Versión),</li>

                                                                    <li data-code="PEGESTINMOB">Gestión Inmobiliaria</li>

                                                                    <li data-code="PEARQUEM">Gerencia en el Mundo Digital </li>


                                                                    <li data-code="PEFUNDIR">Fundamentos de Dirección </li>

                                                                    <li data-code="PERSE">Responsabilidad Social Empresarial </li>

                                                                    <li data-code="PEGERPRODSER">Gerencia Estratégica de Productos y Servicios </li>

                                                                    <li data-code="PEADMPROPHOR">Administración de Propiedad Horizontal </li>

                                                                    <li data-code="PEESTCOMUNIC">Estrategias de la Comunicación </li>

                                                                    <li data-code="PEVALEMP">Valoración de Empresas</li>

                                                                    <li data-code="PEMERCAP">Mercado de Capitales</li>

                                                                    <li data-code="PEESTCOMPET">Estrategias Competitivas</li>

                                                            </ul>
                        </div>


                                            <div>
                             <h4>
                                <span data-icon="check-mark"><span class="titulo-educacion">Calidad</span></span>
                            </h4>

                             <ul id="educacion">
                                                                    <li data-code="PEHSEQ"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/HSEQP_7y70z9h3m0FCww3.pdf" target="_blank">Lider en Gerencia de Sistemas Integrados de Gestion HSEQ</a></li>

                                                                    <li data-code="PESEGIN"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/IPOV_S4FbV6Xdi7adHsS.pdf" target="_blank">Interventoría de Proyectos</a></li>

                                                                    <li data-code="PEAUISO"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/ACTISO_3m0F7y7w3hCw.pdf" target="_blank">Lider en Actualización y Transición : ISO 9001 2015 E ISO 14001 2015</a></li>

                                                                    <li data-code="PEAUAMB"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/SEGINFV_k2QMC7GYK4GBLYh.pdf"  target="_blank"> Seguridad de la Información ISO 27001</a></li>

                                                                    <li data-code="PERESSOC"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/GIALIM_r943dkdiisVJsvvUP.pdf"  target="_blank"> Sistemas de Gestión de la Seguridad Alimentaria ISO 22000 </a> </li>

                                                                    <li data-code="PEALIM"> Gestión de Calidad ISO 9001:2015 - Auditor Interno</li>

                                                                    <li data-code="PECSUMIN">Auditoría y Certificación de los Sistemas de Gestión Ambiental</li>

                                                                    <li data-code="PEIPO">Gestión de la Responsabilidad Social Según la Norma SGE 21</li>

                                                                    <li data-code="PEPRL"> Sistemas de Gestión de la Seguridad para la Cadena de Suministro ISO 28000</li>

                                                                    <li data-code="PEFOREN">Prevención de Riesgos Laborales ( Implementación del Decreto 1072/ SG SST Decreto 552 2017).</li>

                                                                    <li data-code="PENORAMB">Auditoría Forense</li>

                                                                    <li data-code="PEGESTCAL">Normatividad Ambiental Empresarial</li>

                                                                    <li data-code="PEOILGAS">Gestión de Procesos de y Calidad incluye Certificado ISO 9000s</li>

                                                                    <li data-code="PEACTISO"> Gestión Integral de Riesgos en el Sector Oil & Gas</li>

                                                                    <li data-code="PECYBERINC">Gestión de Cyberincidentes </li>

                                                                    <li data-code="PECONTGEST"> Control de Gestión </li>

                                                                    <li data-code="PEARQBIO"> Arquitectura Bioclimática</li>

                                                            </ul>
                        </div>
                                            
                                       
               <div data-target-panel=""></div>

               </div>

                 <!-- fin panel-->


                	 <!-- inicio panel-->


                            <div data-shared-panel="">
                                            <div>
                            <h4>
                                <span data-icon="check-mark"><span class="titulo-educacion">Finanzas</span></span>
                            </h4>

                             <ul id="educacion">
                                                                    <li data-code="PEDIRFIN"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/NIASP_aUlZnN6qS5PSYlF.pdf">NIAS Normas Internacionales de Auditoría para El Aseguramiento de la Información Financiera</a></li>


                                                                    <li data-code="PENIAS"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/DAT_C3JPnDgXw1UlZnN.pdf">Gerencia Actualización Tributaria</a></li>

                                                                    <li data-code="PELAVACT"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/XBRL_5KcHj3stb7rFIrJ.pdf">XBRL Lenguaje Extensible de Negocios Contables</a></li>

                                                                    <li data-code="PEDAT"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/SACCAAI_aevBQRTm8BbqWV2.pdf">Preparación para la Presentación del Examen ACCA en NIA</a></li>

                                                                    <li data-code="PEDRENT"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/SACCAAI_aevBQRTm8BbqWV2.pdf">Preparación para la Presentación del Examen ACCA en NIIF</a></li>

                                                                    <li data-code="PENIIF"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/DFINANCONT_5PSnSo3JPA9KcHj.pdf">Finanzas para Contadores</a></li>

                                                                    <li data-code="PECONSFIN">Dirección Financiera ( Controler Financiero)</li>

                                                                    <li data-code="PEIFRS">Administración del Riesgo de Lavado de Activos – SARLAFT</li>

                                                                    <li data-code="PEEXOG">Declaración de Renta para Personas Jurídicas, Año Gravable 2016</li>

                                                                    <li data-code="PEESTADU">NIIF para Pymes - Decreto 2496 de 2015</li>

                                                                    <li data-code="PEFLUCAJ">Consolidación de Estados Financieros Colgaap Vs. IFRS</li>

                                                                    <li data-code="PEMATNIIF">IFRS para Aplicación IFRS para Pymes</li>

                                                                    <li data-code="PECONTNOCONT">Información Exógena - Información Tributaria en Medios Magnéticos</li>

                                                                    <li data-code="PECOBRACART">Actualización del Estatuto Aduanero</li>

                                                                    <li data-code="PEREGCAM">Flujo de Caja</li>

                                                                    <li data-code="PEPLPRES">Matemáticas Financieras Aplicadas a las NIIF</li>

                                                                    <li data-code="PECCESAL">Contabilidad para No Contadores</li>

                                                                    <li data-code="PEFCMICRO">Nuevas Tendencias en Cobranza y Recaudo de Cartera</li>

                                                                    <li data-code="PEFNFINAN">Régimen Cambiario</li>

                                                                    <li data-code="PEFHIDRO">Planeación Presupuestal Año 2018</li>

                                                                    <li data-code="PEFEJEC">Finanzas para Ejecutivos</li>

                                                                    <li data-code="PEXBRL">XBRL Lenguaje Extensible de Negocios Contables</li>

                                                                    <li data-code="PEPRACCA">Políticas Contables para Pymes y la Elaboración ESFA</li>

                                                                    <li data-code="PEPRNIIF">Finanzas Gerenciales</li>

                                                                    <li data-code="PEPRESFA">Economía Digital</li>

                                                                    <li data-code="PEFCONT">Evaluación Financiera de Proyectos</li>

                                                                    <li data-code="PEFGER">Gestión de Costos</li>

                                                                    <li data-code="PEECODIG">Mercado de Capitales</li>

                                                                    <li data-code="PEEFPROY">Gestión Estratégica de Los Negocios</li>

                                                                    <li data-code="PEGESTCOST">Contabilidad Financiera</li>

                                                                    <li data-code="PEMERCAP">Gestión de Tesoreriananzas para Contadores</li>

                                                                    <li data-code="PEGESTNEG">Finanzas Gerenciales</li>

                                                                    <li data-code="PECFIN">Evaluación Financiera de Proyectos</li>

                                                                    <li data-code="PEGTES">Gestión de Tesoreria </li>

                                                                    <li data-code="PEGTES">Negocios y Comercio Internacional</li>
                                                            </ul>
                        </div>


                                            <div>

                            <h4>
                                <span data-icon="check-mark"><span class="titulo-educacion">Recursos Humanos</span></span>
                            </h4>

                             <ul id="educacion">
                                                                    <li data-code="PECOACH"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/PECOACH_5SDb4jVSM0su">Coaching y Liderazgo Empresarial </a></li>

                                                                    <li data-code="PEAURH"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/DPPSICO_HCpoUlZnN6qX9Xw.pdf">Pruebas Psicológicas</a></li>

                                                                    <li data-code="PESPER"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/GTHP_r944ObTEVJsvvUP.pdf">Gestión Estratégica del Capital Humano Basado en el Capital Por Competencias</a></li>

                                                                    <li data-code="PEGDIVCAM">Auditor de Recursos Humanos</li>

                                                                    <li data-code="PEGRRHH">Selección de Personal</li>

                                                                    <li data-code="PEDCOMP">Gestión de la Diversidad y Cambio</li>

                                                                    <li data-code="PEPNL">Dirección y Gestión de RR.HH.</li>

                                                                    <li data-code="PELIDEREQ">Desarrollo de Competencias</li>

                                                                    <li data-code="PEPCARR">Programación Neurolingüística (PNL).</li>

                                                                    <li data-code="PEMPROTH">Liderazgo y Trabajo en Equipo</li>

                                                                    <li data-code="PECOACHMAGA">Plan de Carrera Sucesión</li>

                                                                    <li data-code="PEMIMPCAP">Medición de Procesos de Talento Humano - Indicadores</li>

                                                                    <li data-code="PEMNOMSS">Líder Coach-Magos del Liderazgo</li>

                                                                    <li data-code="PEENTRCOM">Medición del Impacto de la Capacitación</li>

                                                                    <li data-code="PEAPCONTR">Manejo de Nómina y Seguridad Social</li>

                                                                    <li data-code="PEPRODINT">Selección y Entrevistas por Competencias</li>

                                                                    <li data-code="PEHABINT">Aspectos Prácticos para la Contratación de Personal</li>

                                                                    <li data-code="PEELEARN">Productividad Sin Estrés</li>

                                                                    <li data-code="PEFPER">Habilidades Interpersonales</li>

                                                                    <li data-code="PEPLFORM">Formación E-Learning en la Empresa</li>

                                                                    <li data-code="PEATNOM">Formación del Personal en la Empresa</li>

                                                                    <li data-code="PEMTIEM">Gestión,Planificación y Evaluación de Formación en la Empresa.</li>

                                                                    <li data-code="PECCL">Aspectos Tributarios y Laborales de la Nómina</li>

                                                                    <li data-code="PEMCFV">Manejo del Tiempo</li>

                                                                    <li data-code="PECEFC">Comités de Convivencia Laboral</li>

                                                                    <li data-code="PEFF">Modelos de Compensación (Fija, Flexible y Variable) - Desalarización</li>

                                                                    <li data-code="PEPS">Compensación Efectiva para la Fuerza Comercial</li>

                                                                    <li data-code="PEGTH">Formación de Formadores</li>

                                                            </ul>
                        </div>

                                        <div data-target-panel=""></div>
                </div>



               <!-- fin panel-->



               <!-- inicio panel-->

                            <div data-shared-panel="">
                                            <div>
                            <h4>
                                <span data-icon="check-mark"><span class="titulo-educacion">Servicio al Cliente</span></span>
                            </h4>

                             <ul id="educacion">
                                                                    <li data-code="PEHDATA">Programación Neuro Lingüística e Inteligencia Emocional con Énfasis en Servicio</li>
                                                                    <li data-code="PEFROFF">Atención al Cliente</li>
                                                                    <li data-code="PESINF">Fidelización de Clientes</li>
                                                                    <li data-code="PEMAPPS">Manejo de Clientes con Dificultades, Quejas y Reclamos</li>
                                                                    <li data-code="PEANDIOS">Gerencia y Fidelización de Clientes</li>
                                                                    <li data-code="PEANDIOS">Herramientas de Servicio al Cliente</li>
                                                                    <li data-code="PEANDIOS">Protocolos de Servicio al Cliente</li>
                                                                    <li data-code="PEANDIOS">Medición de la Satisfacción del Cliente</li>
                                                            </ul>
                        </div>
                                            <div>
                            <h4>
                                <span data-icon="check-mark"><span class="titulo-educacion">TIC's</span></span>
                            </h4>

                             <ul id="educacion">
                                                                    <li data-code="PELOGIS"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/SEGINFV_k2QMC7GYK4GBLYh.pdf">Seguridad Informatica</a></li>

                                                                    <li data-code="PEIMPEXP"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/PCAPPMOV_cJo3e2TAKFqz.pdf">Desarrollo de Apicaciones para Moviles</a></li>

                                                                    <li data-code="PEIMPEXPSERV"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/PCAPPMOV_cJo3e2TAKFqz.pdf">Desarrollo Android / iOS</a></li>

                                                                    <li data-code="PEALMDIST">Habeas Data y Registro de Bases de Datos en el RNBD - Ley 1581 de 2012</li>
                                                                    <li data-code="PELOGISINT">Loistica Internacional </li>

                                                                    <li data-code="PESIXSIGM">Desarrollo de Habilidades para El Personal Front Office</li>

                                                                  
                                                            </ul>
                        </div>

                                        <div data-target-panel=""></div>
                </div>


                <!-- final panel-->


                <!-- inicio panel-->

                            <div data-shared-panel="">
                                            <div>
                            <h4>
                                <span data-icon="check-mark"><span class="titulo-educacion">Logística y Operaciones</span></span>
                            </h4>

                             <ul id="educacion">
                                                                    <li data-code="PEGERCOM">Compras Estrategicas y Direccion Logistica</li>

                                                                    <li data-code="PEDESHABVEN">Procedimientos para Importar y Exportar</li>

                                                                    <li data-code="PECOACHVEN">Exportación e Importación de Servicios desde y Hacia Colombia</li>

                                                                    <li data-code="PEOBJCVEN">Gestión del Almacenamiento y la Distribución</li>

                                                                    <li data-code="PEPRVEN">Logística Internacional</li>

                                                                    <li data-code="PECCAGENT">Curso en Lean Six Sigma – Yellow Belt</li>

                                                                    <li data-code="PESUPVEN">Green Belt & Black Belt – Certificación Internacional del LSSI de USA.</li>

                                                                    

                                                            </ul>
                        </div>
                                    <div>
                            <h4>
                                <span data-icon="check-mark"><span class="titulo-educacion">Educación</span></span>
                            </h4>

                             <ul id="educacion">
                                                                    <li data-code="PENEDU">Neuroeducación y Aprendizaje </li>
                                                                    <li data-code="PEPEGA">Pedadogía Docencia y Gestión Académica</li>
                                                                    <li data-code="PETV">Tutor Virtual </li>
                                                                    <li data-code="PEGINEDU">Gerencia de Instituciones Educativas </li>
                                                                    <li data-code="PEGCALEDU">Gestión de Calidad para Instituciones Educativas </li>
                                                            </ul>
                        </div>
                                          
                                        <div data-target-panel=""></div>
                </div>


                <!-- final panel-->


                <!-- inicio panel-->


                            <div data-shared-panel="">
                                            <div>
                            <h4>
                                <span data-icon="check-mark"><span class="titulo-educacion">Ventas</span></span>
                            </h4>

                             <ul id="educacion">
                                                                    <li data-code="PENEDU">Gerencia Comercial</li>

                                                                    <li data-code="PEPEGA">Desarrollo de Técnicas y Habilidades en Ventas.</li>

                                                                    <li data-code="PETV">Coaching para las Ventas</li>

                                                                    <li data-code="PEGINEDU">Manejo de Objeciones y Cierres de Ventas</li>

                                                                    <li data-code="PEGCALEDU">Proyección de Ventas y Estrategias de Ventas</li>

                                                                    <li data-code="PEGCALEDU">Call Center Agent</li>

                                                                    <li data-code="PEGCALEDU">Supervisión de Ventas</li>

                                                                    <li data-code="PEGCALEDU">Gerencia de Cuentas Especiales – PLAN KAM</li>

                                                                    <li data-code="PEGCALEDU">Formación de Vendedores Consultivos</li>

                                                                    <li data-code="PEGCALEDU">CRM y Clientes</li>

                                                                    <li data-code="PEGCALEDU">Canales Comerciales</li>


                                                            </ul>
                        </div>
                                       
                




                                            <div>
                            <h4>
                                <span data-icon="check-mark"><span class="titulo-educacion">Producción</span></span>
                            </h4>

                             <ul id="educacion">
                                                                    <li data-code="PEMANIN">Programas y Planes de Mantenimiento para Instalaciones Industriales</li>
                                                                    <li data-code="PEOPTTIEM">Optimización de Métodos y Tiempos de Producción</li>
                                                                    <li data-code="PEGESTPROD">Gestión de la Producción y Sistemas de Mejora</li>
                                                                    <li data-code="PEDISTPLAN">Distribución en Planta</li>
                                                                    <li data-code="PETECPROD">Técnicas de Programación de la Producción</li>
                                                                    <li data-code="PERESMAT">Resistencia de Materiales</li>
                                                                    <li data-code="PEGESTHIDRO">Gestión Integral de Los Hidrocarburos para No Petroleros.</li>
                                                                    <li data-code="PEAUTIND">Automatización Industrial </li>
                                                            </ul>
                        </div>

                         <div data-target-panel=""></div>

                    </div>

                <!-- final panel-->



                                <!-- inicio panel-->


                            <div data-shared-panel="">

                            	                                            <div>
                            <h4>
                                <span data-icon="check-mark"><span class="titulo-educacion">Jurídico</span></span>
                            </h4>

                             <ul id="educacion">
                                                                    <li data-code="PEMANIN"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/DCONEST_b7rV6XdUuW5K">Contratación Estatal</a></li>

                                                                    <li data-code="PEOPTTIEM">Arbitraje</li>

                                                                    <li data-code="PEGESTPROD">Nuevo Código Nacional de Policía y Convivencia</li>

                                                                    <li data-code="PEDISTPLAN">Derecho Aduanero</li>

                                                                    <li data-code="PETECPROD">Derecho Laboral para Empresarios</li>

                                                                    <li data-code="PERESMAT">Aspectos Legales de Proyectos</li>

                                                                    <li data-code="PEGESTHIDRO">Contratación Internacional</li>



                                                            </ul>
                        </div>

														<div>
                            <h4 class="">
                                <span data-icon="check-mark"><span class="titulo-educacion">Marketing</span></span>
                            </h4>

                            <ul id="educacion">
                                                                    <li data-code="PESEO"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/PCWEBDES_dnF3ymWE1BHI.pdf" target="_blank"> Web Design (Diseño Web)</a></li>

                                                                    <li data-code="PEMARSERV"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/PCWEBDEV_8ACBD4pg9Ub8.pdf" target="_blank"> Web Development (Desarrollo WEB)</a></li>

                                                                    <li data-code="PEMARKONL"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/PCBIGDATA_y1nIvzTpKOvO" target="_blank"> Big Data</a></li>

                                                                    <li data-code="PEMERCH"><a href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/PCEMAILMARK_F3alA02oJhpc.pdf" target="_blank"> Email Marketing</a></li>

                                                                    <li data-code="PECOMMAN">SEO Avanzado: Posicionamiento Web en Buscadores</li>

                                                                    <li data-code="PERSVEN">Marketing de Servicios</li>

                                                                    <li data-code="PECONSRMARK">Marketing Online: Estrategia 2.0</li>

                                                                    <li data-code="PEPLMARK">Merchandising</li>

                                                                    <li data-code="PEFINANMARK">Social Media -Community Manager</li>

                                                                    <li data-code="PEDGMARK">Redes Sociales para Crecer las Ventas</li>

                                                                    <li data-code="PEESTTRADE">Construcción y Activación de Marca</li>

                                                                    <li data-code="PEDRAUM">Plan de Marketing</li>

                                                                    <li data-code="PEDMARKVEN">Finanzas Aplicadas al Marketing</li>

                                                                    <li data-code="PECOMMANIMAG">Digital Marketing</li>

                                                                    <li data-code="PEDWEB">Estrategia Integral de Trade & Shopper Marketing</li>

                                                                    <li data-code="PEPRODAV">Creación de Aplicaciones en Realidad Aumentada</li>

                                                                    <li data-code="PEBTL">Dirección de Marketing y Ventas</li>

                                                                    <li data-code="PEINVMERC">Community Manager Mediante la Gestión de las Imágenes</li>

                                                                    <li data-code="PEDESPCOM">Diseño y desarrollo de Sitios Web Dinamicos (HTML 5 y CSS3)</li>

                                                                    <li data-code="PEMARKMEDDIG">Produccion Audiovisual para Plataformas Digitales</li>

                                                                    <li data-code="PEWEBDES">Marketing BTL</li>

                                                                    <li data-code="PEWEBDEV">Investigación de Mercados</li>

                                                                    <li data-code="PEBIGDATA">Diseño en Espacios Comerciales</li>

                                                                    <li data-code="PEEMAILMARK">Marketing y Medios Digital</li>

                                                                    <li data-code="PEECOMM">Ecommerce (Comercio Electronico)</li>

                                                            </ul>
                        </div>


                                        <div data-target-panel=""></div>
                </div>

                <!-- final panel-->


                    </article>
    </section>

<!-- inicio tabs-->

		<div class="col-md-4 formulario">

			<div class="form-educacion">
				
			</div>
		
		</div>


			

	</div>

		<!---final formulario-->


</div>


	<!---final container-->


	<!---inicio aliados-->

	<div class="col-md-12 aliados">

	</div>

	<!---final aliados-->

	<!---inicio footer-->

	<div class="col-md-12 footer">

		<div class="container">

			<div class="col-md-3 footer-cont" >

				<div class="tiutlo-footer">
					
					Bogotá

				</div>

				<div class="tel-footer">

					Cra 18 B No 106 A 15 <br>
					+57 (1) 4894783 <br>
	 				+57 (1) 4894786 <br>

				</div>

			</div>

			<div class="col-md-3 footer-cont">

				<div class="tiutlo-footer">
					
					Miami

				</div>

				<div class="tel-footer">

					3390 Mary Street<br>
					Coconut Grove,FL 33133<br>
	 				+1 (305) 433-3689 <br>

				</div>

			</div>


			<div class="col-md-3 footer-cont">

				<div class="tiutlo-footer">
					
					Lima

				</div>

				<div class="tel-footer">

					Jirón de la Unión 446 <br>
					PBX (51) 1 4271004<br>

				</div>


			</div>


			<div class="col-md-3 footer-cont">

				<div class="terminos">
					
					Todos los derechos reservados © 2017 
					Corporación Universitaria de Cataluña <br><br>

					Institución de Educación Superior 
					vigilada ante el MEN Res. No. 21329

				</div>

			</div>

		</div>

	</div>



	<!---final footer-->




</body>