<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Kronos - Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/dashboard.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="assets/js/ie-emulation-modes-warning.js"></script>

  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <script type="text/javascript" language="JavaScript">
    var segundo = 0+"0";
var minuto = 0+"0";
var hora = 0+"0";

function tempo(){	
	if (segundo < 59){
		segundo++
		if(segundo < 10){segundo = "0"+segundo}
	}else 
		if(segundo == 59 && minuto < 59){
			segundo = 0+"0";
			minuto++;
			if(minuto < 10){minuto = "0"+minuto}
		}
	if(minuto == 59 && segundo == 59 && hora < 23){
		segundo = 0+"0";
		minuto = 0+"0";
		hora++;
		if(hora < 10){hora = "0"+hora}
		}else 
			if(minuto == 59 && segundo == 59 && hora == 23){
				segundo = 0+"0";
				minuto = 0+"0";
				hora = 0+"0";
			}
	form.cronometro.value = hora +":"+ minuto +":"+ segundo
}

function stop() {
  form.cronometro.value = "00:00:00";
}



function play() {
  if(form.cronometro.value == "00:00:00")
  {
    setInterval('tempo()',983);
  }
  else {
    // stop();
    document.getElementById("form_cronometro").submit();    
  }  
}

  $(document).ready(function(){                
            $(".glyphicon-play").click(function(){
                $("#button").removeClass("glyphicon-play");
                $("#button").addClass("glyphicon-stop");
            });
            
            $(".glyphicon-stop").click(function(){
                $("#button").attr("onclick", "stop()");
                $("#button").removeClass("glyphicon-stop");
                $("#button").addClass("glyphicon-play");
                
            });           
            // final da animaÃ§Ã£o
        });
  </script>


  <style>
    .relogio {
      font-size: 1000%;
      text-align: center;
    }
    
    input[name="cronometro"] {
      border: 0;
      width: 100%;
      text-align: center;
    }
    
    .relogio #button {
      cursor: pointer;
    }
  </style>

</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
          aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="assets/img/oioi.png" style="width: 50px; height: 50px;">
       
      </div>
       <a class="navbar-brand" href="#">Kronos - Sistema de Gerenciamento de Hora Programada</a>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Olá, Victor</a></li>  
          <li><a href="#">Sair</a></li>
          <!--<li><a href="#">Settings</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Help</a></li>-->
        </ul>
        <!--<form class="navbar-form navbar-right">
          <input type="text" class="form-control" placeholder="Search...">
        </form>-->
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-12 main">

        <div class="relogio">
          <form id="form_cronometro" action="submitTest.php" method="POST" name="form"/>
            <input type="text" name="cronometro" value="00:00:00"/>
            <br />
            <span id="button" onclick="play()" class="glyphicon glyphicon-play" aria-hidden="true"></span>
          </form>
        </div>

        <h2 class="sub-header">Meu histórico</h2>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>data</th>
                <th>duração</th>
                <th>R$</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
    ================================================== -->

  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
  </script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="assets/js/vendor/holder.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>