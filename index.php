<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>VERSA DIGITAL | Reproduzindo idéias, personalizando sua vida!</title>
<link rel="stylesheet" type="text/css" href="estilos.css" />
<meta name="description" content="Versa Digital, Comunicação Visual" />
<meta name="keywords" content="Versa Digital, Impressão digital em toledo, comunicação visual em toledo, fachadas em toledo, adesivos em toledo" />
<meta name="author" content="Studio Midiamix, Agência Web" />
<meta property="og:title" content="Versa Digital - Comunicação Visual" /><meta property="og:description" content="Versa Digital - Comunicação Visual" />
<meta name="viewport" content="width=device-width">

<link rel="icon" type="image/x-icon" href="http://www.versadigital.com.br/favicon.ico" sizes="16x16 24x24 32x32 48x48" />
<link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" media="screen" />
	<script src="lightbox/js/jquery-1.7.2.min.js"></script>
<script src="lightbox/js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="lightbox/js/jquery.smooth-scroll.min.js"></script>
<script src="lightbox/js/lightbox.js"></script>


<style type="text/css">
body {
	width:100%;
	height:100%;
	margin-left:0px;
	margin-bottom:0px;
	margin-right:0px;
	margin-top:0px;
	position:absolute;
}
</style>

</head>

<body>
<?php include("header.php"); ?>
<div id="tudo">
<div id="conteudo">
  <div id="sombraesquerda"></div>
  <div class="content">
    <?php
        if (isset($_GET['local'])){
            switch ($_GET['local']){
                case 01:
                  include "institucional.php";
                  break;
                case 02:
                  include "porfolio.php";
                  break;
                case 03:
                  include "clientes.php";
                  break;
				case 04:
                  include "orcamento.php";
                  break;  
				case 05:
                  include "contato.php";
                  break;
				  case 06:
                  include "p13.php";
                  break;
				  case 07:
                  include "p2.php";
                  break;
				  case 23:
                  include "pvcexpandido.php";
                  break; 
				  case 24:
                  include "lona.php";
                  break;
				  case 10:
                  include "fosco.php";
                  break;
				  case 11:
                  include "p6.php";
                  break;
				  case 12:
                  include "envelopamento.php";
                  break;
				  case 13:
                  include "semibrilho.php";
                  break;
				  case 14:
                  include "recorte.php";
                  break;
				  case 16:
                  include "p10.php";
                  break;
				   case 15:
                  include "p11.php";
                  break;
				   case 17:
                  include "p12.php";
                  break;
				  
				  
				  
            }
        }else{
            include "home.php";
        }
        ?>
  </div>
  <div id="sombradireita"></div>
</div>
<?php include("footer.php"); ?>
</div>

</body>
</html>
