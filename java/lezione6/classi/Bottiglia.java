package lezione6.classi;
import java.util.Objects;
public class Bottiglia {
    private int capacita;
    private int quantita;
    public Bottiglia(int capacita){
        this(capacita,0);
    }

    public Bottiglia(int capacita, int quantita) {
        if(capacita<0)
            this.capacita=0;
        else
            this.capacita=capacita;
        if(quantita<0)
            this.quantita=0;
        else
            this.quantita = quantita;
    }

    @Override
    public String toString() {
        return "Bottiglia{" +
                "capacita=" + capacita +
                ", quantita=" + quantita +
                '}';
    }//end toString

    public void riempi(int q) {
        quantita+=q;
    }//end riempi
    public void svuota(int q) {
        quantita-=q;
    }
}//end Bottiglia
