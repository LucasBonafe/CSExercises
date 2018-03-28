package pct_fonte56;
import java.util.Scanner;
public class TesteQuadrado{
	public static void main(String[] args){
		Scanner ler= new Scanner(System.in);
		double lado1;
		System.out.print("Digite o valor do lado: ");
		lado1= ler.nextDouble();
		System.out.println("\nCálculo do perímetro de um quadrado de lado= "+lado1);
		System.out.println("Valor do perímetro= "+ Quadrado.getPerimetro(lado1));
		System.out.println("Valor da área= "+ Quadrado.getArea(lado1));
		System.out.println("Valor do volume= "+ Quadrado.getVolume(lado1));
}}

package pct_fonte56;
public class Quadrado{
	public static double getPerimetro(double lado1){double perimetro=lado1*2; return perimetro;}
	public static double getArea(double lado1){double area=Math.pow(lado1, 2); return area;}
	public static double getVolume(double lado1){double volume=Math.pow(lado1, 2); return volume;}
}
