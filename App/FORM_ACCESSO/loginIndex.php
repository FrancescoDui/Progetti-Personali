<?php
/*Autore:Dui Francesco
Il seguente codice ha lo scopo di permettere il login tramite connessione DB
e deve motrare un messaggio di errore se i dati inseriti non sono corretti
inoltre deve motrare un messaggio per ricordare che bisogna confermare 
l'iscrizione tramite email se non e stata ancora effetuata*/

//Inizio Sessione
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
//Contollo dati DB
if($_SERVER['REQUEST_METHOD']==='POST'){
    $userpresente=false;
    $attivazionepresente=false;
    $pswpresente=false;
    foreach($resul as $rows){
        //contollo presenza username e email
        if($rows['username']==$_REQUEST['username'] && $rows['psw']==$_REQUEST['password']){
            $userpresente=true;
            $pswpresente=true;
            $_SESSION['username']=$_REQUEST['username'];
        }
        
        //if($rows['confermaAttivazione']){
        //    $attivazionepresente=true;
        //}

        //if($rows['psw']==$_REQUEST['password']){
        //    $pswpresente=true;
        //}

        if($userpresente && $pswpresente){
            header('location:../Storia_PA3.php');
        }
    }
    if(!$userpresente || !$pswpresente){
        $messaggioUser="Username e/o password non corretti";
    }
    //if(){
    //    $messaggioPassword="La Password inserita non è corretta";
    //}
    if($attivazionepresente){
        /*Devo costruire un messaggio html per controllare la mail e 
        attivare l'account*/
    }
}