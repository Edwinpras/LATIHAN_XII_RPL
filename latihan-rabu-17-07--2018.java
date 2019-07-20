import java.util.*;
import java.util.Scanner;

 // Check Examples

 // Compiler version JDK 11.0.2

 class Dcoder
 {
 		
 	public static void main(String args[])
 	{
 		int n=5;
 		while(n>1){
 			System.out.println("Angka"+n);
 			n++;
 		}
 		
		 //Scanner sc = new Scanner(System.in);
 		//int input = sc.nextInt();
 		//System.out.println(input);
 		
 		//String nama = sc.nextLine();
 		//System.out.println("Nama Kamu : "+nama);
 		
		int nh1 = 80; int nh2 = 60; int nh3 = 70;
		
		int rataNH = (nh1+nh2+nh3)/3;
		int uts = 68;
		int uas = 75;
		
		int NA = (rataNH + uts + uas)/3;
		System.out.println("Nilai Akhir Anda : "+NA);
		
		if(NA >=80)
		{
			System.out.println("Grade A");
		}
		else if (NA>=75)
		{
			System.out.println("Grade B");
		}
		else if (NA>=60)
		{
			System.out.println("Grade C");
		}
		else
		{
			System.out.println("Grade D");
		}
		
		int pilihan = 8;
		switch(pilihan)
		{
			case 1 :
				System.out.println("Anda Pilih Satu");
				break;
			case 2 :
				System.out.println("Anda Pilih Dua");
				break;
			case 3 :
				System.out.println("Anda Pilih Tiga");
				break;
			default :
				System.out.println("Anda Tidak Memilih");
				break;
			
		}
		
 	}
 } 
    