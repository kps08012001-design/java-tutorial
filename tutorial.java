import java.util.Scanner;

public class tutorial{
    public static void main (String[]args){
        String choice="yes";
        while(choice.equals("yes")){
        Scanner sc=new Scanner(System.in);
        System.out.println("Enter Your Number:");
        String value=sc.nextLine();
        int num=Integer.parseInt(value);
        if(num%2==0){
            System.out.println("Even is"+num);
        }else{
            System.out.println("Odd is"+num);
        }
        System.out.println("Do another YES/No?");
        choice=sc.nextLine();

    
    }
}

}