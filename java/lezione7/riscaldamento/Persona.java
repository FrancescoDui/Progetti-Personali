package lezione7.riscaldamento;

public class Persona {
    private String nome;
    private String cognome;
    public Persona(String nome, String cognome) {
        this.nome = nome;
        this.cognome = cognome;
    }//end Persona
    public void setNome(String nome){
        this.nome=nome;
    }//end setNome

    @Override
    public String toString() {
        return "Persona{" +
                "nome='" + nome + '\'' +
                ", cognome='" + cognome + '\'' +
                '}';
    }
}//end Perosna
