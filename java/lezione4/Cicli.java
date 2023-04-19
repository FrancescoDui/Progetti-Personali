package lezione4;

import java.util.Scanner;

public class Cicli {
    public static void main(String[] args){
    // stampa da 1 a N
        int n=100;
        int i=1;
        System.out.println("------------------------ciclo while------------------------");
        while (i<=n){
            System.out.println("I numeri sono:"+i+" ");
            i++;
        }
        System.out.println("------------------------Ciclo For------------------------");
        for(int j=0;j<=n;j++){
            System.out.println("I numeri sono:"+j+" ");
            j++;
        }
    /*chiedere quanti numeri si vuole inserire ,
    farli inserire e calcolare la media*/
        System.out.println("------------------------Esercizio Media Ciclo For------------------------");
        System.out.println("Inserire il numero di valori che si vuole sommare:");
        Scanner tastiera=new Scanner(System.in);
        double media=0;
        int totale=0;
        int numeri= tastiera.nextInt();
        for (int k=1;k<=numeri;k++){
            System.out.println("Inserire il valore n°"+k+":");
            int valore= tastiera.nextInt();
            totale=totale+valore;
        }
        media=totale/numeri;
        System.out.println("La media è: "+media);
    /*far inserire dei numeri e calcolare la media quando
    viene inserito da tastiera il numero -1*/
        System.out.println("------------------------Esercizio Media Ciclo While------------------------");
        boolean B=true;
        int h=1;
        totale=0;
        int num=0;
        media=0;
        while (B){
            System.out.println("Inserire il valore n°"+h+":");
            int numero= tastiera.nextInt();
            if(numero==(-1))
                B=false;
            else{
                totale=totale+numero;
                num=num+1;
            }
            h++;
        }
        media=totale/(double)num;
        System.out.println("La media è: "+media);
        System.out.println("------------------------Ciclo Do-While------------------------");
        /*Creare una calcolatrice*/
        String  risposta;
        int contatore=0;
        do {
            System.out.println("Cosa vuoi fare?Inserisci il numero dell'operazione ch evuoi svolgere:" +
                    "\n"+"1.Incrementa\n"+"2.Decrementa\n"+"3.Esci dal programma\n");
            risposta=tastiera.nextLine();
            if(risposta.equals("1")){
                contatore++;
            }else if(risposta.equals("2")){
                contatore--;
            }
            System.out.println(contatore);
        }while (!risposta.equals("3"));
        System.out.println("------------------------Esercizio------------------------");


    }
}
