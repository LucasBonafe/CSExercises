package exe;
import java.util.Scanner;
public class fatorial{
	public static void main(String[] args){
		Scanner ler= new Scanner(System.in);
		int n, fat=1;
		System.out.println("Digite o número a ser fatorado: ");
		n= ler.nextInt();
		for (int i=2; i<=n; i++){
			fat*=i;
		}
		System.out.println(n+"! é igual a: "+fat);
}}
