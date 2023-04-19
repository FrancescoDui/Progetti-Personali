package lezione3;

/**
 * @author Francesco Dui
 * In questa classe andrempo ad implementare le funzionalità di una calcolatrice in versione classica :
 * ovver ouna calcolatrice che possiede le quattro operazioni fondamentali :
 * 1:addizione
 * 2:sottrazione
 * 3:moltiplicazione
 * 4:divisione
 */
public class Calcolatrice
{
    public static void main(String[] args)
    {
        //1) dichiaro le due variabili
        int primoNumero=8;// inizializzato primoNumero
        int secondoNumero=10;// inizializzato secondoNumero
        /*
        dichiarazione operaznione somma con dichiarazione della variabile che conterrà
        il risultato dell'operazione di somma
         */
        int risultatoSomma=primoNumero+secondoNumero;
        System.out.println("il risultato somma è: " + risultatoSomma);
        /*
        dichiarazione operaznione Sottrazione con dichiarazione della variabile che conterrà
        il risultato dell'operazione di Sottrazione
         */
        int risultatoSottrazione=primoNumero-secondoNumero;
        System.out.println("il risultato Sottrazione è: " + risultatoSottrazione);
        /*
        dichiarazione operaznione Prodotto con dichiarazione della variabile che conterrà
        il risultato dell'operazione di Prodotto
         */
        int risultatoProdotto=primoNumero*secondoNumero;
        System.out.println("il risultato Prodotto è: " + risultatoProdotto);
        /*
        dichiarazione operaznione Divisione con dichiarazione della variabile che conterrà
        il risultato dell'operazione di Divisione
         */
        double risultatoDivisione= primoNumero / (double)secondoNumero;
        if(secondoNumero != 0)
            System.out.println("il risultato Divisione è: " + risultatoDivisione);
        else
            System.out.println("Error");
        double angolo=0;
        //Mod 1: uso la funzione della libreria Math
        double cos=Math.cos(Math.toRadians(angolo));
        //Mod 2: usando il Pigreco
        double cos2=Math.cos(180/Math.PI);
    }//end main

}//end class

