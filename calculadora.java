package exe;
import java.util.Scanner;
public class calculadora{
	private static Scanner ler;
	public static int soma(int n1, int n2){return n1+n2;}
	public static int subtracao(int n1, int n2){return n1-n2;}
	public static int multiplicacao(int n1, int n2){return n1*n2;}
	public static int divisao(int n1, int n2){return n1/n2;}
	public static void main(String[] args){
		int x, y, eq, eqd=0;
		ler = new Scanner(System.in);
		System.out.println("Digite o valor de X: ");
		x= ler.nextInt();
		System.out.println("Digite o valor de Y: ");
		y= ler.nextInt();
		System.out.println("Escolha uma equação:\n1. Soma\n2. Subtração\n3. Multiplicação\n4. Divisão");
		eq= ler.nextInt();
		switch (eq){
		case 1: eqd= soma(x,y); break;
		case 2: eqd= subtracao(x,y); break;
		case 3: eqd= multiplicacao(x,y); break;
		case 4: eqd= divisao(x,y); break;
		default: System.out.println("Digite um valor entre 1 e 4"); break;
		}
		System.out.println("Resultado: "+eqd);
}}
