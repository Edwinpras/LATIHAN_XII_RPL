import java.util.*;

 class Dcoder
 { 
 	
 	public static void main(String args[])
 	{ 
 		//PERULANGAN SEJAJAR
 		for (int i=1;i<=5;i++) {
 	    	System.out.print("*");
 		}
 		
 		System.out.println("\n\n\n");
 		
 		//PERULANGAN MENURUN
 		for (int i=1; i<=5; i++) {
 			System.out.println("*");
 		}
 		
 		System.out.println("\n\n\n");
 		
 		//SEGITIGA BINTANG DENGAN PERULANGAN
 		for (int i=1; i<=5; i++) {
 			for (int a=1; a<=i; a++) {
 				System.out.print("*");
 			}
 			System.out.println(" ");
 		}
 		
 		System.out.println("\n\n\n");
 		
 		//SEGITIGA BINTANG DENGAN PERULANGAN
 		
 		for(int i=1;i<=5;i++){
            for (int z=5; z>i;z--){
            	System.out.print(" ");
            }
                for (int a=1; a<=i;a++){
                     System.out.print("*");
                    }
             System.out.println(" ");
        }
 		
 		System.out.println("\n\n\n");
 		
 		//SEGITIGA BINTANG DENGAN PERULANGAN
 		for(int i=1;i<=5;i++){
           for (int z=5;z>i;z--){
            	System.out.print("-");
           }
               for (int a=1; a<=i;a++){
                    System.out.print("*");
                   }
            System.out.println(" ");
         }


 	}
 }