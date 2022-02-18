<?php 
  $tMailEnt= $_POST['tMailEnt'];
  $tEntrarE = $_POST['tEntrarE'];
  $tSenhaEnt = md5($_POST['tSenhaEnt']);
  $connect = mysql_connect('localhost','root','');
  $db = mysql_select_db('tekauda');
    if (isset($tEntrarE)) {
             
      $verifica = mysql_query("SELECT * FROM cliente WHERE tMailEnt = '$tMailEnt' AND tSenha = '$tSenhaEnt'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("tUsuario",$tUsuario);
          header("Location:index.php");
        }
   }
?>