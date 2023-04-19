package lezione7.esercizi;

import java.util.Scanner;
import util.Util;
public class CrescenteDecrescente {
    public static void main(String[] args) {
        Scanner tastiera=new Scanner(System.in);
        int[] numeri=Util.crea(10);
        boolean numeriDecrescenti=true;
        boolean numeriAscendenti=true;
        for(int i=0;i<numeri.length;i++){
            if(i+1<numeri.length){
                if (numeri[i] < numeri[i + 1])
                    numeriAscendenti = numeriAscendenti && true;
                else
                    numeriAscendenti = numeriAscendenti && false;
                if (numeri[i] > numeri[i + 1])
                    numeriDecrescenti = numeriDecrescenti && true;
                else
                    numeriDecrescenti = numeriDecrescenti && false;
            }//end if
        }//end for
        if(numeriAscendenti)
            System.out.println("L'array è ascendente");
        if(numeriDecrescenti)
            System.out.println("L'array è discendente");
    }//and main
}//end CrescenteDecrescente
