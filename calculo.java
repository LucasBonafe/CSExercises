import java.util.Scanner;
public class calculo{
	public static void main(String[] args){
		Scanner ler= new Scanner(System.in);
		float np1, np2, mg;
		String nome, ra, turma;
		System.out.println("Digite a nota da NP1: ");
		np1= ler.nextFloat();
		if (np1<0 || np1>10){System.out.println("Insira um valor de 0 a 10."); return;}
		System.out.println("Digite a nota da NP2: ");
		np2= ler.nextFloat();
		if (np2<0 || np2>10){System.out.println("Insira um valor de 0 a 10."); return;}
		mg= (np1+np2)/2;
		System.out.println("Nome do aluno: ");
		nome= ler.next();
		System.out.println("RA: ");
		ra= ler.next();
		System.out.println("Turma: ");
		turma= ler.next();
		System.out.println("Olá, "+ nome +"\nRA: "+ ra +"\nTurma: "+ turma +"\nNota: "+ mg);
}}
