package lezione7.esercizi;

import java.util.Scanner;

public class provaMetodi {
    public static void main(String[] args) {
        int[] array={1,2,3,4,5};
        String frase="sono una frase    ciao";
        int n=10;
        int[] arrayInvertito=Metodi.inverti(array);
        for(int i=0;i<arrayInvertito.length;i++){
            System.out.println(arrayInvertito[i]);
        }//end for
        System.out.println(Metodi.tuttoAttacato(frase));
        System.out.println(Metodi.tuttoAttacato2(frase));
        System.out.println(Metodi.potenza(n));
        System.out.println(Metodi.compreso(n));
        Metodi.saluta("Gino",4);
        Scanner tastiera=new Scanner(System.in);
        System.out.println("I fiori disponibili sono :\n" +
                "petunie,\nviole del pensiero,\nrose,\nviolette,\n garofani");
        String fiore=tastiera.nextLine();
        System.out.println("Quanti fiori deve contenere il mazzetto: ");
        int numero=tastiera.nextInt();
        Metodi.conteggioFiori(fiore,numero);
    }
}
