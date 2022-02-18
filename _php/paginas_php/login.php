<?php 
  $tUsuario= $_POST['tUsuario'];
 // $acessar = $_POST['acessar'];
  $tSenha = md5($_POST['tSenha']);
  $connect = mysql_connect('localhost','root','');
  $db = mysql_select_db('tekauda');
  //  if (isset($acessar)) {
             
      $verifica = mysql_query("SELECT * FROM administrador WHERE tUsuario = '$tUsuario' AND tSenha = '$tSenha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("tUsuario",$tUsuario);
          header("Location:produtos.php");
        }
  //  }
?>