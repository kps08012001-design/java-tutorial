

public class tutorial{
   private String name;
   public int nrc;
   int age=25;
   protected String address;



    public void DisplayInfo(){
        System.out.println("Name is:"+ name);
        System.out.println("Age is:"+ age);
        System.out.println("NRC is:"+ nrc);
        System.out.println("Address is:"+ address);


    }
    public static void main (String[]args){
        tutorial t=new tutorial();
        t.name="Kaung Pyae Sone";
        t.age=25;
        t.nrc=123456;
        t.address="Yangon";
        t.DisplayInfo();


     

        


    
}

}