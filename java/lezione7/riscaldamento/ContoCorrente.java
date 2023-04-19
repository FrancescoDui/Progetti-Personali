package lezione7.riscaldamento;

public class ContoCorrente {
    private  double saldo;
    private static int prossimoId=0;
    //tutte le costanti per convenzione si scrivono in maiuscolo
    public final static String NOME_BANCA="Unicredit";
    private Persona persona;
    private String pin;
    private int id;

    public ContoCorrente(String nome,String cognome,String pin){
        this.persona=new Persona(nome,cognome);
        this.pin=pin;
        this.saldo =0;
        this.id=prossimoId++;
    }//end costruttore
    public void preleva(double valore){
        if(valore<0 && valore<this.saldo)
            System.out.println("Impossibile attuare l'operazione ");
        else {
            this.saldo -=valore;
            //System.out.println("Il saldo è: "+this.saldo);
        }//end else
    }//end preleva
    public  void deposita(double valore){
        if(valore<0)
            System.out.println("Impossibile attuare l'operazione ");
        else {
            this.saldo +=valore;
            //System.out.println("Il saldo è: "+this.saldo);
        }//end else
    }//end deposita
    public double getSaldo(){
       return saldo;
    }//end getSaldo
    public static int getProssimoId(){
        return prossimoId;
    }//end getProssimoId

    @Override
    public String toString() {
        return "ContoCorrente{" +
                "persona=" + persona.toString() +
                '}';
    }
}//end ContoCorrente
