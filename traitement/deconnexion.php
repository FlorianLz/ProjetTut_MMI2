<?php
unset($_SESSION['identifiant']);
unset($_SESSION['admin']);
if (isset($_COOKIE['remember'])){
    setcookie('remember','',time()-3600);
    $sql="UPDATE utilisateurs SET remember='' where id=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($_SESSION['id']));
    unset($_SESSION['id']);
    header('Location: ./accueil');
}else{
    unset($_SESSION['id']);
    header('Location: ./accueil');
}
?>