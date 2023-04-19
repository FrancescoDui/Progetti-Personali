package lezione4;

import java.util.Scanner;

public class EserciziCicli {
    public static void main(String[] args) {
        Scanner tastiera=new Scanner(System.in);
        // ESERCIZIO 1: calcolare la somma dei primi n numeri dispari.
        // esempio: n = 9, calcolare 1 + 3 + 5 + 7+ 9
        System.out.println("Inserire un numero:");
        int n= tastiera.nextInt();
        int totale=0;
        for(int i=1;i<=n;i++){
            totale=totale+((2*(i-1)+1));
        }
        tastiera.nextLine();
        System.out.println("La somma dei numeri dipari è: "+totale);
        // ESERCIZIO 2: invertire una stringa s
        // esempio: s = "ciao", restituire "oaic"
        System.out.println("Inserire una parola:");
        String parola=tastiera.nextLine();
        String parolaInvertita="";
        for(int i=parola.length();i>0;i--){
            parolaInvertita=parolaInvertita+parola.substring(i-1,i);
        }
        System.out.println("La parola invertita è:"+parolaInvertita);
        // ESERCIZIO 3: programma che controlla se una parola è palindroma
        // esempio: anna : true, carla : false
        System.out.println("Inserire una parola:");
        String parola1=tastiera.nextLine();
        String parolaInvertita1="";
        for(int i=parola1.length();i>0;i--){
            parolaInvertita1=parolaInvertita1+parola1.substring(i-1,i);
        }
        if( parolaInvertita1.equalsIgnoreCase(parola1))
            System.out.println("Palindromo:Vero");
        else
            System.out.println("Palindromo:Falso");

    }

}

