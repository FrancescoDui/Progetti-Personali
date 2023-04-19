package lezione6.riscaldamento;
import util.Util;
public class SecondoArray {
    public static void main(String[] args) {
     int[] secondoVettore=Util.crea(10);
     arrayPositivo(secondoVettore);
     Util.stampa(arrayPositivo(secondoVettore));
    }
    public static int[] arrayPositivo(int[] array){
        int cont=0;
        for(int i=0;i<array.length;i++){
            if(array[i]>=0)
                cont+=1;
        }//end for
        int[] vettorePositivo=new int[cont];
    for(int i=0;i<vettorePositivo.length;i++){
        if(array[i]>=0)
            vettorePositivo[i]=array[i];
    }//end for
        return vettorePositivo;
    }//end arrayPositivo
}
