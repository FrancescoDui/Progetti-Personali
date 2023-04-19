package lezione5;
import util.Util;
public class EsArray {
    public static void main(String[] args) {
        int[] a =new int[5];
        a[0]=1;
        a[1]=4;
        System.out.println(a[0]);
        System.out.println(a.length);
        int[] b={1,2,3,4,5};
        int[][] c=new int[3][3];
        c[0][0]=2;
        int[][] d={{1,2,3},{1,2,3}};
        String[] stringa=new String[4];
        int[] vettore=Util.crea(3);
        Util.stampa(vettore);
        System.out.println(Util.minimo(vettore));
        System.out.println(Util.indiceMinimo(vettore));
    }
}
