package lezione6.riscaldamento;

public class SommaArgs {
    public static void main(String[] args) {
        int somma=0;
        for(int i=0;i<args.length;i++){
            somma=somma + Integer.parseInt(args[i]);
        }
        System.out.println(somma);
    }
    
}
