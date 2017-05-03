<!Doctype html>
	<html lang="es">
<head>
		
	<meta charset="UTF-8"/>

	<link rel="stylesheet" type="text/css" href="styles.css">

  	
  	<!-- Versión compilada y comprimida del CSS de Bootstrap -->

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">


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



	<title>Programas Certificados</title>

</head>

<body>


  <!---inicio backrgound-video-->

<div class="cont-image-programas">


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

            “Tan solo por la educación puede el hombre llegar a ser hombre.<br>

            El hombre no es más que lo que la educación hace de él.”



		</p>

		<p class="texto-imagen2">Immanuel Kant  (1724 - 1804)</p>

	</div>

	<!---final texto imágen-->

<!--</video>-->

</div>

<!---final backrgound-image-->



<!---inicio container-->

<div class="container programas">

	<!---inicio introducción-->

	<div class="col-md-12 intro">

		<div class="col-md-12 title-intro">

			<p>Programas Certificados</p>

		</div>

		<div class="col-md-12 texto-intro">

			<p>

		      Los programas certificados son la modalidad de formación de mayor crecimiento en USA. Se orienta a programas de avanzada, donde la empresa requiere certificación de la habilidad y/o conocimiento (Skill) adquirida. El enfoque de estos programas es práctico, en ellos el estudiante además de adquirir las bases conceptuales requeridas, desarrolla talleres y test que permiten verificar la habilidad y/o conocimiento.<br><br>

                El certificado del programa, se acompaña de un código de verificación que permite a la empresa o el tercero interesado verificar las competencias adquiridas por el estudiante en el programa.

		</div>

	</div>

	<!---final introducción-->





	<div class="col-md-12 contenido">



<!-- inicio tabs-->

    <div class="col-md-7 col-sm-12 col-xs-12 tabs">

        <ul class="tabs-certificados">


            <li>    <a data-icon="check-mark" href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/EUAJDIG_z0oknyfx8pzb" target="_blank">Asesoría Jurídica</a>     </li>
            <li>    <a data-icon="check-mark" href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/PCWEBDEV_8ACBD4pg9Ub8.pdf" target="_blank">Desarrollo Web</a>        </li>
            <li>    <a data-icon="check-mark" href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/EUIMPTRESD_03YsKV9Ltar0" target="_blank">Impresión 3D </a>         </li>
            <li>    <a data-icon="check-mark" href="#" target="_blank">Ecommerce</a>             </li>
            <li>    <a data-icon="check-mark" href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/PCGESTDOC_nzPTKxfAleVk" target="_blank">Gestión Documental</a>    </li>
            <li>    <a data-icon="check-mark" href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/PCAPPMOV_cJo3e2TAKFqz.pdf" target="_blank">Desarrollo Apps</a>       </li>
            <li>    <a data-icon="check-mark" href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/PCBIGDATA_y1nIvzTpKOvO" target="_blank">BigData</a>               </li>
            <li>    <a data-icon="check-mark" href="#" target="_blank">Marketing Digital</a>    </li>
            <li>    <a data-icon="check-mark" href="http://www.diplomadosuc.com/Lv4TqQJL5NqcgDksfNHA/PCWEBDES_dnF3ymWE1BHI.pdf" target="_blank">Web Design</a>            </li>
            <li>    <a data-icon="check-mark" href="#" target="_blank">Gestión Call Center</a>   </li>



        </ul>

    </div>

		
<!-- fin tabs-->



<!-- inicio formulario-->

		<div class="col-md-5 col-sm-12 col-xs-12 formulario">

			<div class="form-certificados">
				
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