package lezione5;
import java.util.Scanner;
public class EsMetodi {
    public static int dado(){
        int numeroDado=(int)(Math.random()*(7-1)+1);
        return  numeroDado;
    }
    public static boolean tuttiPari(int n1){
        Scanner tastiera=new Scanner(System.in);
        boolean b=true;
        for(int i=0;i<n1;i++) {
            System.out.println("inserire un numero: ");
            int n2=tastiera.nextInt();
            tastiera.nextLine();
            if (n2 % 2 == 0 && b){
                 b=true;
            }else{
                b=false;
            }
        }
        return b;
    }
    public static String tutteVocali(String parola){
        String vocali="";
        for(int i=0;i<parola.length();i++){
            char lettera=parola.charAt(i);
            /* Posso usare la funzione .contains("stringa") per controllare se "stringa" è
            contenuta in un altra stringa che scrivo prima del punto
            importante ricordare che questa funzionalità si applica solo alle stringhe non hai char */
            if(lettera=='a' || lettera=='e' || lettera=='i' || lettera=='o' || lettera=='u'||
                    lettera=='A' || lettera=='E' || lettera=='I' || lettera=='O' || lettera=='U') {
                vocali = vocali + lettera;
            }
        }
        return  vocali;
    }

    public static int continuaFino(){
        Scanner tastiera=new Scanner(System.in);
        int somma=0;
        boolean condizione=true;
        for(int i=0;condizione;i++){
            System.out.println("Inserire un intero:");
            int numero=tastiera.nextInt();
            tastiera.nextLine();
            if((numero%2==0 && numero<0)||(numero%3==0 && numero>0))
                somma=somma+numero;
            else
                condizione=false;
        }
        return somma;
    }

    public static void main(String[] args) {
        Scanner tastiera=new Scanner(System.in);
        boolean b=true;
        for(int i=0;i<100;i++){
            System.out.println(dado());
        }
        System.out.println("Quanti numeri vuoi inserire?");
        int n1= tastiera.nextInt();
        System.out.println(tuttiPari(n1));
        System.out.println("Scrivi una parola o una frase:");
        tastiera.nextLine();
        String parola= tastiera.nextLine();
        System.out.println(tutteVocali(parola));
        System.out.println(continuaFino());
    }
}


