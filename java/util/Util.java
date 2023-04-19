package util;

import java.util.Scanner;

public class Util {

    public static void riempi(int[] array){
        Scanner tastiera = new Scanner(System.in);
        for(int i = 0; i < array.length; i++){
            System.out.println("Inserisci un numero: ");
            array[i] = Integer.parseInt(tastiera.nextLine());
        }//end for
    }//end riempi

    public static int[] crea(int n){
        int[] array = new int[n];
        riempi(array);
        return array;
    }//end crea

    /* metodo stampa(int[] a)
     * */
    public static void stampa(int[] a){
        System.out.println("L'array "+a+" contiene: ");
        for(int i=0;i<a.length;i++) {
            System.out.println(a[i]);
        }//end for
    }//end stampa
    public static int minimo(int[] a){
        int minimo=a[0];
        for(int i=0;i<a.length;i++){
            if(a[i]<minimo)
                minimo=a[i];
        }//end for
        return minimo;
    }//end minimo
    public static int indiceMinimo(int[] a){
        int minimo=a[0];
        for(int i=0;i<a.length;i++){
            if(a[i]<minimo)
                minimo=a[i];
        }//end for
        return minimo;
    }//end indiceMinimo
    public static int[] sommaVettoriale(int[] a1 ,int[] a2){
        int[] a3 = new int[a1.length];
        if(a1.length==a2.length) {
            for (int i = 0; i < a1.length; i++){
                a3[i]=a1[i]+a2[i];
            }//end for
        }//end if
        return  a3;
    }//end sommaVettoriale
}//end Util


    /* metodo minimo -> restituisce il valore più piccolo
    metodo indiceMinimo -> restituisce l'indice del valore più piccolo
    *  metodo sommaVettoriale: dati due array a1 e a2, restituire a3
    *  che somma elemento per elemento
    *  ES: [1,2,3] e [2,3,4,5] : ritorno [3,5,7,5]
    * */
