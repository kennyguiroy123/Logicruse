<?php

/*fonction bootstrap*/
    function link_Bootstrap(){
        $script='<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css" />
                <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
                <link rel="stylesheet" href="bootstrap/js/bootstrap.js" />
                <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js" />
                <link rel="stylesheet" href="bootstrap/js/jquery-3.1.1.js" />
                <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>';
        print($script);
    }

/*fonction menu*/
function link_menu(){
    $script='<header>';
        $script.='<div class="logo">';
            $script.='<a href="index.php">';
                $script.='<img src="images/logo.jpg">';
            $script.='</a>';
        $script.='</div>';
        $script.='<div class="container">';
            $script.='<div class="row">';
                $script.='<div class="btn-group btn-group-justified">';
                    $script.='<div class="btn-group">';
                        $script.='<a href="index.php">';
                            $script.='<button type="button" class="btn btn-nav">';
                                $script.='<span class="glyphicon glyphicon-home"></span>';
                                $script.='<p>Accueil</p>';
                            $script.='</button>';
                        $script.='</a>';
                    $script.='</div>';
                    $script.='<div class="btn-group">';
                        $script.='<a href="Evenement.php">';
                            $script.='<button type="button" class="btn btn-nav">';
                                $script.='<span class="glyphicon glyphicon-bell"></span>';
                                $script.='<p>Évènements</p>';
                            $script.='</button>';
                        $script.='</a>';
                    $script.='</div>';
                    $script.='<div class="btn-group">';
                        $script.='<a href="voyages.php">';
                                $script.='<button type="button" class="btn btn-nav">';
                                    $script.='<span class="glyphicon glyphicon-globe"></span>';
                                    $script.='<p>Voyages</p>';
                                $script.='</button>';
                        $script.='</a>';
                    $script.='</div>';
                    $script.='<div class="btn-group">';
                        $script.='<a href="#">';
                                $script.='<button type="button" class="btn btn-nav">';
                                $script.='<span class="glyphicon glyphicon-hand-up"></span>';
                                    $script.='<p>Réservation</p>';
                                $script.='</button>';
                        $script.='</a>';    
                    $script.='</div>';
                    $script.='<div class="btn-group">';
                        $script.='<a href="Compte.php">';
                                $script.='<button type="button" class="btn btn-nav">';
                                    $script.='<span class="glyphicon glyphicon-user"></span>';
                                    if(isset($_POST['id'])){
                                        echo $_SESSION['login'];
                                    }
                                    $script.='<p>Mon compte</p>';
                                $script.='</button>';
                        $script.='</a>';    
                    $script.='</div>';
                $script.='</div>';
        $script.='</div>';
    $script.='</header>';
    print($script);
}

/*fonction style css*/
function link_css(){
    $script='<link rel="stylesheet" type="text/css" href="style.css">';
    print($script);
}
function openDB(){
            $server = 'localhost';
            $users = 'root';
            $nomDataBase = 'ppe_site';
            $pass ='';
            $idConn = mysqli_connect($server,$users,$pass) or die("erreur de connexion au serveur");
            mysqli_select_db($idConn,$nomDataBase);
            return $idConn;
        }
function closeDB($idConn){
            mysqli_close($idConn);
        }
function session (){
    session_start();
    If(!isset($_SESSION['login'])){
        $_SESSION['login']='guest';
    }
    /*Attribution des variables de session
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['client_id']))?(int) $_SESSION['client_id']:0;
$login=(isset($_SESSION['login']))?$_SESSION['login']:'';
*/
}
?>
<Script type="javascript">$('.carousel').carousel({
  interval: 2000
})</Script>

