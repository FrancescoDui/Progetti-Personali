package lezione8.esercizi;

public class RicorsioneEsercizi {
    public static int somma(int[] array,int indice,int totale){
        if(indice<array.length){
            totale=array[indice]+array[indice+1];
            return somma(array,indice+1,totale);
        }
        return totale;
    }//end somma
}
