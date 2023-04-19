package lezione7.riscaldamento;
import java.util.Scanner;

public class Banca {
    public static void main(String[] args) {
        Scanner tastiera=new Scanner(System.in);
        boolean b=true;
        int valore;
        ContoCorrente conto=new ContoCorrente("Gino","Pippo","Ad20k9");
        //per stamppare ciò che c'è dentro persona
        //System.out.println(conto.toString());
        while (b){
        System.out.println("Che operazione vuoi fare:\n 1)Deposita\n2)Preleva\n3)Esci");
        int operazione=tastiera.nextInt();
            System.out.println();
            switch (operazione) {
                case 1:
                    System.out.println("Inserisci il valore: ");
                    valore=tastiera.nextInt();
                    conto.deposita(valore);
                    System.out.println("Il saldo è: "+conto.getSaldo());
                    break;
                case 2:
                    System.out.println("Inserisci il valore: ");
                    valore=tastiera.nextInt();
                    conto.preleva(valore);
                    System.out.println("Il saldo è: "+conto.getSaldo());
                    break;
                case 3:
                    b=false;
                    break;
                default:
                    System.out.println("Operazione non disponibile");
                    break;
            }//end switch
          ContoCorrente.getProssimoId();
        }//end while
    }//end main
}
