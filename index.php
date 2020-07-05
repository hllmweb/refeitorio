<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Século - Refeição</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>
    <style>
        *, *::before, *::after{
            padding:0;
            margin:0;
            box-sizing: border-box;
        }
        html, body{
            width: 100%;
            height: 100%;
            font-size:100%;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #e9ecef;
        }
        .main-app{
            max-width: 100%;
            min-height: 100%;
            position: relative;
        }
        .sessao-100{
            display: block;
            width: 100%;  
            height: 100vh;
            text-align: center;
            overflow-y: scroll;
        }
        .container-80-white{
            background-color: #FFF;
            border-radius:9px;
            margin:3%;
        }
        .container-80-transparet{
            background-color: transparent;
            margin:3%;
            text-align: center;
        }
        .content-text-date{
            font-size:2.5rem;
            font-weight: bold;
            color:#111;
            display: inline-block;
            margin-right: 10px;
        }
        .content-text-time{
            display: inline-block;
            font-size: 2.5rem;
            font-weight: bold;
            color:#cc0000;
        }
        .content-text-confirme{
            display: inline-block;
            font-size: 2.5rem;
            font-weight: bold;
            color:#3db522;
        }
        .content-text-p{
            display: inline-block;
            margin-left: 40px;
            vertical-align: middle;
            font-size:1.5rem;
            color:#111;
        }
        .round {
            display: inline-block;
            position: relative;
            text-align: center;
            justify-content: center;
        }
        .round label {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 50%;
            cursor: pointer;
            height: 40px;
            width: 40px;
            left: 0;
            position: absolute;
            top: 0;
        }
        .round label:after {
            border: 8px solid #fff;
            border-top: none;
            border-right: none;
            content: "";
            height: 16px;
            left: 7px;
            opacity: 0;
            position: absolute;
            top: 8px;
            transform: rotate(-45deg);
            width: 24px;
        }
        .round input[type="checkbox"] {
            visibility: hidden;
        }
        .round input[type="checkbox"]:checked + label {
            background-color: #FECA31;
            border-color: #FECA31;
        }
        .round input[type="checkbox"]:checked + label:after {
            opacity: 1;
        }
        .check-circulo{
            display: inline-block;
            width: 200px;
            height: 200px;
            text-align: center;
            background-color: transparent;
            border:3px solid #cc0000;
            border-radius:100%;
            -webkit-transition: all 0.7s ease;
            transition: all 0.7s ease;
            position: relative;
            text-decoration: none;
            /* box-shadow: 1px 5px 5px 15px #dbdbdb; */
            text-transform: uppercase;
            margin:0 auto;
        }
        .check-circulo:hover{
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
            background-color: #cc0000;
        }
        .check-circulo:active{
            background-color: #00b734;
            border:3px solid #00b734;   
        }
        .check-circulo .checked{
            background-color: #00b734;
            border:3px solid #00b734; 
        }
        .check-circulo:hover span{
            color:#FFF;
        }
        .check-circulo span{
            color:#cc0000;
            text-decoration: none;
            font-size:1.5rem;
            font-weight: bold;
            width: 100%;
            height: 100%;
            display: inline-block;
            display: flex;
            align-items: center; 
            justify-content: center; 
        }
        .checked{
            border:3px solid #3db522;
            background-color:transparent !important;             
           
            display: flex;
            align-items: center; 
            justify-content: center; 
        }
        .checked i{
            font-size:5rem;
            color:#3db522;
        }
        .rodape{
            width: 100%;
            background-color: #1B2842;
        }
        .rodape-menu{
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row wrap;
            flex-flow: row;
            justify-content: center;
            align-items: center;
        }
        .rodape-menu-item{
            width: 50%;
            height: auto;
            line-height:30px;
            display: block;
            background-color: #1B2842;
            color:#FFF;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
            border-right: 1px solid #2e3e5e;
            text-decoration: none;  
            padding:15px 0;
        }
        .rodape-menu-item i{
            font-size:2rem;
            display:block;
        }
        .rodape-menu-item:hover{
            background-color: #2e3e5e;
        }
        .rodape-menu-item:last-child{
            border-right: 0;
        }
        .fixo{
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        @media only screen 
            and (max-width: 760px), (min-device-width: 768px) 
            and (max-device-width: 1024px)  {
                .container-80-transparet{
                    text-align:center;
                    position:absolute;
                }
                .content-text-date,
                .content-text-time{
                    width:100%;
                    display:block;
                    text-align:center;
                }
                .content-text-p{
                    font-size:1rem;
                    width:100%;
                    display:block;
                    margin-left:0;
                }
                .sessao-100{
                    display: block;
                    position:relative;
                    width: 100%;  
                    height: 100vh;
                    text-align: center;
                    overflow-y: scroll;            
                }
                .sessao{
                    /*align-items: center;
                    display: flex;
                    flex-direction: row;
                    flex-wrap: wrap;
                    justify-content: center;*/
                    top:35%;
                    left: 50%;
                    position: absolute;
                    transform: translateX(-50%);
                            
                }
               
                .check-circulo{
                    width:180px;
                    height:180px;
                }
                .check-circulo span{
                    font-size:1rem;
                    width:150px;
                    margin:auto;
                }
                .rodape-menu{
                    height:80px;
                    line-height:50px;
                }
                .rodape-menu-item{
                    height:100%;
                    display:block;
                }
                .rodape-menu-item span{
                    font-weight:normal;
                    font-size:0.8rem;
                    display:block;
                    width:100%;
                }
                .rodape-menu-item i{
                    font-size:1.5rem;
                }
                .rodape-menu-item:hover{
                    /* padding:3%; */
                }
        }
    </style>
</head>
<body>
    <div class="main-app">

        <div class="sessao-100">
            
            <div class="container-80-transparet">

            </div>

            <div class="container-80-transparet">               
                <!-- <div class="round">
                        <input type="checkbox" id="checkbox"/>
                        <label for="checkbox"></label>
                </div> -->
                <div class="content-text-dia">
                    <div class="content-text-date"><?= date('d/m/Y'); ?></div>
                    <!-- <div class="content-text-time">00:00:00</div> -->
                    <div class="content-text-confirme">ALMOÇO JÁ CONFIRMADO</div>
                </div>
                <div class="content-text-p">
                    Você tem até <strong>09:00 Horas</strong> para CONFIRMAR SUA REFEIÇÃO
                </div>
            </div>

            <div class="sessao">
                <a href="#" class="check-circulo">
                    <span>Confirmar Almoço</span>
                </a>
            </div>
        
            
        </div>

        <div class="rodape fixo">
            <div class="rodape-menu">
                <a href="" class="rodape-menu-item">
                    <i class="fas fa-home"></i>
                    <span>Inicio</span>
                </a>
                <a href="" class="rodape-menu-item">
                    <i class="fas fa-drumstick-bite"></i>
                    <span>Cardápio</span>
                </a>
                <a href="" class="rodape-menu-item">
                    <i class="fas fa-stopwatch"></i>
                    <span>Isentar</span>
                </a>
                <a href="" class="rodape-menu-item">
                    <i class="fas fa-list"></i>
                    <span>Listar</span>
                </a>
            </div>
        </div>
    </div>
    <script src="https://seculomanaus.com.br/componentes/portal/assets/js/jquery.min.js"></script>
	<script src="https://seculomanaus.com.br/componentes/portal/assets/js/jquery-ui.js"></script>

    <script>
       
       $(".check-circulo").click(function(e){
            $(this).addClass("checked");
            $(this).html("<i class='fas fa-check'></i>");
            e.preventDefault();
       });



        var tempo = new Number();
        tempo = 3600;

        function startCountdown(){
            if((tempo - 1) >= 0){

                var min = parseInt(tempo/60);
                var seg = tempo%60;

                if(min < 10){
                    min = "0"+min;
                    min = min.substr(0, 2);
                }
                
                if(seg <=9){
                    seg = "0"+seg;
                }

                horaImprimivel = '00:' + min + ':' + seg;
                $(".content-text-time").html(horaImprimivel);
                setTimeout('startCountdown()',1000);
            
                tempo--;
            } else {
                horaImprimivel = '00:00:00';
                $(".content-text-time").html(horaImprimivel);
            }

        }

        startCountdown();
    </script>

</body>
</html>