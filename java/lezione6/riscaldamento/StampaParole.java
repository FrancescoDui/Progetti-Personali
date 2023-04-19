import java.util.Scanner;

import javax.lang.model.util.ElementScanner6;

public class StampaParole {
    public static void main(String[] args) {
        Scanner tastiera=new Scanner(System.in);
        System.out.println("inserire una parola: ");
        String parola1=tastiera.nextLine();
        System.out.println("inserire una parola: ");
        String parola2=tastiera.nextLine();
        String parola3="";
        if(parola1.length()>parola2.length()){
            for(int i=0;i<parola1.length();i++){
                if(parola1.contains(parola2.substring(i,i+1))){
                    parola3=parola3+parola2.substring(i,i+1);
                }
        }
    }else{
        for(int i=0;i<parola2.length();i++){
            if(parola2.contains(parola1.substring(i,i+1))){
                parola3=parola3+parola1.substring(i,i+1);
            }
    }
    }
    System.out.println(parola3);
}
}
