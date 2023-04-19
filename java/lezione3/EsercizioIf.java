package lezione3;

import java.util.Scanner;

public class EsercizioIf {
    public static void main(String[] args) {
        Scanner tastiera=new Scanner(System.in);
        System.out.println("Hello world");
        System.out.println("Inserire un nome: ");
        String nome=tastiera.nextLine();
        String primalettera=nome.substring(0,1);
        if(primalettera.equals("A")||primalettera.equals("a")){
            System.out.println("Ciao");
        }else{
            System.out.println("buongiorno");
        }
        //inserire giorno e mese e dire se è una data coerente
        System.out.println("Inserire il Giorno: ");
        int GG= tastiera.nextInt();
        System.out.println("Inserire il Mese: ");
        int MM= tastiera.nextInt();
        //booleano che serve per decidere quale messaggio stampare
        boolean b;
        switch (MM){
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                if(GG<31 && GG>0)
                    b=true;
                else
                    b=false;
                break;
            case 2:
                if(GG<29 && GG>0)
                    b=true;
                else
                    b=false;
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                if(GG<30 && GG>0)
                    b=true;
                else
                    b=false;
                break;
            default:
                b=false;
                break;
        }
        if(b)
            System.out.println("I numeri scelti corrispondono a una data ");
            else
            System.out.println("I numeri scelti non corrispondono a una data ");
            //
    }
}
