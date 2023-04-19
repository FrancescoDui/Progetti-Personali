package lezione4;

public class EsMetodi {
    /*i metodi(su java corrispondono alle funzioni di javascript) vanno scritti sempre in minuscolo
    mentre la sintassi di definiszione generica è:
    public static void nome(parametri){corpo}*/

    public  static void saluta(){
        System.out.println("Ciao");
    }
    public static int somma(int n1,int n2){
        return n1+n2;
    }
    public static int massimo(int n1,int n2){
        if(n1>n2)
            return n1;
        else
            return n2;
    }
    public static void main(String[] args) {
        saluta();
        int a=somma(4,5);
        System.out.println(a);
        int m= massimo(91,700);
        System.out.println(m);
    }
}
