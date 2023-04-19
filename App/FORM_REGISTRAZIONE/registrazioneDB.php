<?php
/*Autore:Dui Francesco
Il seguente codice ha lo scopo di inserire un nuovo utente nel DB
svolge anche una funzione di controllo nel caso in cui si scelga 
come username o email uno già presente(visto che devono essere univoci)*/
session_start();
//connesione con il DB
try{
    $db = new PDO(
        'mysql:host=localhost;dbname=prenotazione_aule;charset=utf8mb4', 
        'root', 
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
        echo $e->getMessage();
        die;
}
//Richiesta query per mostrare la tabella totale
$sql='SELECT * FROM `utente` WHERE 1';
$sth=$db->query($sql,PDO::FETCH_ASSOC);
$resul=$sth->fetchAll();
//costruzione query inserimento nuovo utente in tabella(DB)
$sql_add='INSERT INTO utente (nome,cognome,username,psw,mail,dataNascita)
values(:nome,:cognome,:username,:psw,:mail,:dataNascita)';
$sth_add=$db->prepare($sql_add);
$sth_add->bindParam(':nome',$_POST['nome']);//,PDO::PARAM_STR);
$sth_add->bindParam(':cognome',$_POST['cognome']);//,PDO::PARAM_STR);
$sth_add->bindParam(':username',$_POST['username']);//,PDO::PARAM_STR);
$psw=$_POST['password'];
$sth_add->bindParam(':psw',$psw);//,PDO::PARAM_STR);
$sth_add->bindParam(':mail',$_POST['email']);//,PDO::PARAM_STR);
$sth_add->bindParam(':dataNascita',$_POST['dataNascita']);//,PDO::PARAM_STR);
//azione form di registrazione 
if($_SERVER['REQUEST_METHOD']==='POST'){
    $userpresente=false;
    $mailpresente=false;
    foreach($resul as $rows){
        //contollo presenza username e email
        if($rows['username']==$_REQUEST['username']){
            $userpresente=$userpresente || true;
        }else{
            $userpresente=$userpresente || false;
        }
        if($rows['mail']==$_REQUEST['email']){
            $mailpresente=$mailpresente || true;
        }else{
            $mailpresente=$mailpresente || false;
        }
    }
    if($userpresente){
        $messaggioUser='Username scelto non disponibile';
    }
    if($mailpresente){
        $messaggioEmail='Indirizzo Email non disponibile';
    }
    
    if(!$userpresente && !$mailpresente){
        if(md5($_POST['password'])==md5($_POST['ripetiPassword'])){
            //inserimento nuovo utente in tabella(DB)
            $result=$sth_add->execute();
            if($result){
                include '../ConfermaRegistrazione/massaggioEmail.php';
                $_SESSION['email']=$_REQUEST['email'];
                $_SESSION['nome']=$_REQUEST['nome'];
                $_SESSION['cognome']=$_REQUEST['cognome'];
                $db=null;
                header('loginProva.php');
            }
        }else{
            $messaggioPassword="La password inserita non corrisponde";
        }
    }
}