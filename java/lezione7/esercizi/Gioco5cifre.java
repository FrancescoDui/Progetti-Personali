package lezione7.esercizi;
import java.util.Random;
import java.util.Scanner;

public class Gioco5cifre {
    public static void main(String[] args) {
        Random casuale=new Random();
        Scanner tastiera=new Scanner(System.in);
        int dimensione=5;
        int cont=0;
        int somma=0;
        boolean partitaVinta=false;
        int[] codiceSegreto=new int[dimensione];
        String codiceSegretoStringa="";
        for(int i=0;i<codiceSegreto.length;i++){
            codiceSegreto[i]=casuale.nextInt(10);
            codiceSegretoStringa+=codiceSegreto[i];
        }//end for
        //serve per mostrare il codice segreto
        //System.out.println(codiceSegretoStringa);
        for(int j=0;j<10 && partitaVinta==false;j++){
            System.out.println("Inserisci un numero di " + dimensione + " cifre : ");
            String codiceGiocatore = tastiera.nextLine();
            for (int i = 0; i < codiceGiocatore.length(); i++) {
                if (codiceSegretoStringa.substring(i, i + 1).equals(codiceGiocatore.substring(i, i + 1))) {
                    cont += 1;
                    somma += Integer.parseInt(codiceSegretoStringa.substring(i, i + 1));
                }//end if
            }//end for
            System.out.println("Numero cifre: "+cont+" Somma cifre: "+somma);
            if(cont==dimensione)
                partitaVinta=true;
            cont=0;
            somma=0;
        }//end for
        if(partitaVinta)
            System.out.println("Hai vinto!");
        else
            System.out.println("Hai perso!");
    }//end main
}//end Gioco5cifre
