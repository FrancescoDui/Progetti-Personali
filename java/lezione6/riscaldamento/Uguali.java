

public class Uguali {
    public static void main(String[] args) {
        int[] array1={1,10,20,50};
        int[] array2={1,10,20,50};
        for(int i=0;i<array1.length;i++){
            if(array1[i]==array2[i])
                System.out.println("Gli array sono uguali");
            else
                System.out.println("Gli array non sono uguali");

        }
    }
}
