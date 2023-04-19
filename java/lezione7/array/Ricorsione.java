package lezione7.array;

public class Ricorsione {
    public static void m1(){
        //if(condizione per terminare)
            //caso base
        //else
            //chiamata ricorsiva
            //m1();

    }//end m1
    public  static void countdown(int i){
        System.out.println(i);
        if(i>0)
            countdown(i-1);
    }//end countdown
    //Es1: Fattoriale
    public static int fattoriale(int n){
        if(n==0)
            return 1;
        return n*fattoriale(n-1);
    }//end fattoriale
    //Es1: metodo che stampi i numeri pari da 0 a n
    public static void stampaPari(int n){
        if(n>0)
            stampaPari(n-1);
        if(n%2==0)
            System.out.println(n);
    }//end pari
    public static void main(String[] args) {
        //countdown(10);
        System.out.println(fattoriale(5));
        stampaPari(118);
    }//end main
}//end Ricorsione
