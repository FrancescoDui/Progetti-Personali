package lezione7.esercizi;

public class Metodi {
    public static int[] inverti(int[] array){
        int[] a=new int[array.length];
        for(int i=0;i<array.length;i++){
            a[i]=array[(array.length-1)-i];
        }
        return a;
    }//end inverti
    public static String tuttoAttacato(String frase){
        String paroleAttacate=frase;
        paroleAttacate = paroleAttacate.replaceAll("\\s","");
        return paroleAttacate;
    }//end tuttoAttacato
    public static String tuttoAttacato2(String frase){
        String paroleAttacate="";
        for(int i=0;i<frase.length();i++){
            if(!frase.substring(i,i+1).equals(" "))
                paroleAttacate+=frase.substring(i,i+1);
        }//end for
        return paroleAttacate;
    }//end tuttoAttacato2
    public static int potenza(int n){
        int potenza=(int)Math.pow(n,2);
        return potenza;
    }//end Potenza
    public static boolean compreso(int n){
        int min=0;
        int max=100;
        boolean b=false;
        if(min<n && n<max){
            b=true;
        }
        return b;
    }//end compreso
    public static void saluta(String nome,int n){
        for(int i=0;i<n;i++){
            System.out.println("Ciao "+nome);
        }
    }//end saluta
    public static void conteggioFiori(String fiore,int numero){
        double totale=0;
        int posizione=-1;
        String[] tipoFiore={"petunie","viole del pensiero","rose","violette","garofani"};
        double[] costoFiori={0.50,0.75,1.50,0.50,0.80};
        for(int i=0;i<tipoFiore.length;i++){
            if(tipoFiore[i].equalsIgnoreCase(fiore))
                posizione=i;
        }//end for
        for(int i=0;i<costoFiori.length;i++){
            if(i==posizione)
                totale=numero*costoFiori[i];
        }//end for
        if(posizione==-1)
            System.out.println("Questo fiore non è disponibile");
        else
            System.out.println("Il prezzo totale è: "+totale);
    }
}//end Metodi
