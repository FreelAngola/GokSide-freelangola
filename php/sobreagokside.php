<?php
 session_start();
 include("header.php");
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre a Gokside</title>
    <link rel="icon" type="image/icon.JPG" href="icon.JPG"/>
</head>
<style>

    span{
        color: violet;
    }
    *{
        font-family: Century Gothic;
        font-size:12pt;
        margin-top:0;
        margin-left:0;
           margin-right:0;
    }
    a:hover{
    background: rgb(226, 205, 226);}
    #a_aj{
    text-decoration: none;
    color:white;
}
.foot{
    background-color: rgb(192, 124, 255); 
  margin:0%;
}
     #post{
       opacity: .8;
       border-radius: 18px;
       border: 0.9px;
       border-color: violet;
   }
  a{
  text-decoration: none;}
   hr{
    opacity: .4;
   }
     #perf{
       color:rgb(192, 124, 255);
   }
   #aa{
    color:rgb(192, 124, 255);
   }
   
   #div{
    background-color: rgb(230, 230, 230);
   }
   #img{
    border-radius: 28px;
    border-color: violet;
    border: 0.9px;
   }
   #cont{
   width:50px;
   }
   #sub{
    opacity: .8;
    margin-top: 15sp;
    padding:  15px;
    text-align: center;
       border-radius: 18px;
      border: 0.9px;
       border-color: rgb(224, 224, 224);
   }
   #pos{
   margin-top:12px;
   margin-left:5px;
   }
    #perf,#perfi, #s{
   margin-left:10px;
   }
   img{
       width:50%;
       height:50%;
   }
   #img{
       width:100%;
       height:50%;
   }
    ul li{
     
   width: 50px;
   background-size: cover;
   float: left;
   height: 40px;
   }
   .sub_b{
      float:right;
      text-align:center;
      margin-left:50px;
  }   
   #php1{
       color: black;
   }
   #s{
   font-size: 9px;}
li{
    padding:5px;
}
  ul li {
      display:inline;
   }
   
    #im{
    width:50px;
    height:50px;
    border-radius:34px;
    float:left;
margin-left:2px
    }
   #a_top{
    text-decoration: none;
    color:white;
    display:inline;
  }
  #fie1{
    border-radius: 18px;
    border: 0.9px;
  }
  p{
  margin-left:16px;
  }
  h1{
  margin-left:11px;
  }
  #a_fie_post{
      margin-left:3px;
    text-decoration: none;
  }
  .sub_b{
      float:right;
      text-align:center;
      margin-left:50px;
  }
   #fie2{
    border-radius: 18px;
    border:0.9px;
    margin-top:0px;
       border-color: rgb(192, 124, 255);
    background-color: rgb(192, 124, 255);

   }
   #d{
   float:left;
   width:100%;}
</style>
<body>
    
<body>
	<fieldset id="fie2">
			
          
            
        <center><a id="a_top" href="site.php">Inicial   |  </a>
         
         <a id="a_top" href="perfil_gokside_2020.php">Perfil     |</a> 
                     <a id="a_top" href="chatgoksidersonline.php">Amigos Online <?php $fu=$_SESSION['chat']; if($fu<1){echo"";}                  
                     if($fu>0){echo"(".$fu.")";}?>  
                     
                     |</a> 
                     
                      <a id="a_top" href="notificacao.php"><strong>Novidades <?php $fuu=$_SESSION['noti']; if($fuu<1){echo"";}                  
                     if($fuu>0){echo"(".$fuu.")";}?>  
                     
                     </strong>|</a> 
                     
                     <a id="a_top" href="mensagens.php" ><strong>Conversas <?php $consult = "SELECT DISTINCT mensageiro FROM msg "; 
        $resu = $mysqli_connection->query($consult);
        $res=mysqli_num_rows($resu);
        $rest=$res-1;
        echo "(".$rest.")";
        
        ?>  </strong>|</a>
        
        
         <a id="a_top" href="pub_emprego.php"><strong>OLX    <?php $consultr = "SELECT * FROM empregos "; 
        $resur = $mysqli_connection->query($consultr);
        $resr=mysqli_num_rows($resur);
        echo "(".$resr.")";
        
        ?>   </strong>|</a>
        <a id="a_top" href="covid.html">Sobre a COVID-19  |</a>
        <a id="a_top" href="jogos.html">Jogos    |</a> 
        <a id="a_top" href="menu.php">Menu   </a> 
        
         </center></fieldset>
         <img src="gokside.jpg" alt="goksiders" id="img">
         <p>Conheça as caras da gokside, um grupo formado por 5 estudantes angolanos (<span> João Afonso Katumbela, Gonçalo Gonçalves, Ladislau Pereira, Reis Victor, Manuel Ferrão</span>) 3X campeões das feiras de ciência, tecnologia e Inovação desde 2017, antes conhecidos como INOVATION 5 fazedores ou criadores de robôs mecatrônicos, porém possuem a sua própria social network. </p>
         <h1>conheça o perfil de cada um:</h1>
         <center><img src="joao.jpg" alt=""></center>
         <h1><span>João Afonso Katombela</span></h1>
         <p>CEO e fundador da plataforma <a href="site.php">gokside</a>, chaveiro, professor e estudante de programação Web/Desktop/mobile. <br><a href="https://free.facebook.com/joao.alfonso.562?ref_component=mfreebasic_home_header&ref_page=MNotificationsController&refid=48"> Saiba mais no seu Facebook</a></p>
<br>
            <center><img src="gm.png" alt=""></center>
         <h1><span>Gonçalo Goncalves</span></h1>
<p>Co-fundador e Director executivo da plataforma <a href="site.php">gokside</a>, Informático e designer gráfico. <br><a href="https://free.facebook.com/gomes.bg.1?refid=12"> Saiba mais no seu Facebook</a></p>

<center><img src="lau.png" alt=""></center>
         <h1><span>Ladislau Pereira</span></h1>
<p>Colaborador da plataforma <a href="site.php">gokside</a>, designer, Informático, artista e empreendedor. <br><a href="https://free.facebook.com/ladislau.pereira.5?refid=46&__xts__%5B0%5D=12.Abp0BmAfeavBIA4VWatvzM0s-K9MQvFAWzVTKAZsS8Pqxb_7VEsG8_DWziwmY0eEgbvk18Kh3pGDceh2eNkGnxJvqtCEu81OH8fdpAWlrufUA0aWGO5F0YmZ7SaONDMeRDot2mXl2OiQozFHs1JtIZPO-JHgnrvR0FUKulRyVQLxoa14mS4goVZAyBmU5hXhQQGS7lGPP_6cJIr093LkIMzIr12LNinqe3-rSlotWCv6NVUVcGJl4WTYwnXlK1qtvg2EG9YvhgEg6yt4RFne-bxG3O0sxfcGwg5-bm6wFI7yJIHinAcpYmLH9OT5m1qxmbochxii4pjTlq7dXGNVLKPvKG9VvZXEsKb2Li-5KI4Und93xVNdjsqjWC1B8GsOHElhHVnVIDDzK8zlrD_PrVHjpj-3zCNM5q1XnE7YoE91tP8xvnkuAKxDo5SxikepFUBCLQH8mBNA-4dtyLZGXAqXA2teXVDSE3DtEeJr_6NEfKusG6xrV-7swtVM953o8REyGHqKhThkLHEPy8XLd62hRIHyp8Qr1VqwwdY72sx_rgA87NbegdZP9uvWpniYPKY"> Saiba mais no seu Facebook</a></p>

    <center><img src="reis.jpg" alt=""></center>
         <h1><span>Reis Victor</span></h1>
        <p>Colaborador da plataforma <a href="site.php">gokside</a>, economista e estudante de programação Web. <br><a href="https://free.facebook.com/reisjosefeliciano.jose?refid=46&__xts__%5B0%5D=12.Abq1BsFaLXHPpPjy-ezZeRR6-B5OepfIWlmoj9V11UdopeaC8xpeGuv3E7rjwxOgiy4aaNAqi-rfY6zhRyRA9KJDGPtY6_rRsdWvtOMhAt-sbGrXP22uUMHoy2sjGpP8I3e78YQzJfzsFrheBdM7nl3dnUfoq78xFwno3yBSNy2juT75CI-xGFyOR-kJ9unibsiNvdc-Ddhf02UZZYbIa6dLyqUDXK1bs0JiwIBdtJy3UKb2Ebkw3bzqNL-PdU2bz-wmEVT6MJYLi7W-2ErwIAol0b7hnzYy_3x7gdSojVS3938t9MDEa7jshqEe3Bt7BDNm_1WeAR0VOlhJwipanklt0orSVpe0RJ_jZg3v41xd_CCjSmbJWczzXAofjIErqPcUsokLHVf7NFrR3rmVzmPOts6oct_qhoszyQtzZOrPS_BG7xc3yiPLnqjETlGzxghOeJz2yx1PhHH1LtjJnMOMHWC714IKx-XMmgEWYvWQgkg9fDFpcz8HLI7Uoj69U7LKhG2wlpeqc2V_lqUuHTlcv81tf7yVkj6eOrpkMP0i25qbLF9A0xV6XP1AfNF0dRk"> Saiba mais no seu Facebook</a></p>
      
            <center><img src="manuel.jpg" alt=""></center>
         <h1><span>Manuel Ferrão</span></h1>
      <p>Colaborador da plataforma <a href="site.php">gokside</a> e empreendedor. <br><a href="https://free.facebook.com/manibolang.datgs?refid=46&__xts__%5B0%5D=12.AboiqYq3HvdwgUfdr7YRaaXhCt6cFwOFMqAUzV8NliXvAtb-adNB60wjYNMsXqg7Cm3CsDzbwr3tt3VXocLs95K0G3cqIehoDcy8FnagE9SZrKlVqY0uLfdWIUSxAM5eYFsDbXf9UQrVHCtFgTmuSXlq6Xxj-oNfFMMlLJvSL7951Zne179rACR0DZYU_el4O8hU_KurBnauwGY6EUmKokVCoGisgrMQtR9uNNXKKf2s4cP-WHuu6YI4f4DSrzsUyHi-Dddw_L_a2TcpFxlVjq-vivG42lQO5kR3bRIHhYmlSctrZeg4s_44cLOrBOaZsgQZ38-T9QKAA9T-JU_O-LO9y3Wt-IvA8xZs1bX6-zgpHZNy2xaEujMdjCM7da6Ey95gDVkN-XOvNJ5e6sYY4VAbfcX63AOfzcNYjaE4HYmtYLF-pva7AK5oZzrbAcYZaBXbAg4Wu_7XL8IyXXi28EAYAaxDNBJgZRwlBAneJ0M3bfZGjh3KaY6ntKzwzQgUfulLeIvF7E1sWVUrtj4iU9859nqYvpX4yhUWlLJW6tqjGWHWN8Lc_tZmgWgmM9k_I4c"> Saiba mais no seu Facebook</a></p>
      
        </body>
</html>