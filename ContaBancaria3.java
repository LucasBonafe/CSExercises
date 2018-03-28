package pct_fonteP2;
import java.util.Scanner;
public class TesteContaBancaria3{
	public static void main(String[] args){
		Scanner ler= new Scanner(System.in);
		String nome1, nome2;
		double saldo1, saldo2;
		System.out.print("Nome do primeiro Correntista: "); nome1= ler.next();
		System.out.print("Saldo do Correntista "+ nome1 +": "); saldo1= ler.nextDouble();
		System.out.print("Correntista "+ nome1 +", saldo "+ saldo1);
		System.out.print("\n\nNome do segundo Correntista: "); nome2= ler.next();
		System.out.print("Saldo do Correntista "+ nome2 +": "); saldo2= ler.nextDouble();
		System.out.print("Correntista "+ nome2 +", saldo "+ saldo2);
		ContaBancaria3 fred= new ContaBancaria3(nome1, saldo1);
		ContaBancaria3 barney= new ContaBancaria3(nome2, saldo2);
		barney.retira(500);
		fred.deposita(500);
		System.out.println("\n\n" +fred.getNome() +": "+ fred.getSaldo());
		System.out.println(barney.getNome() +": "+ barney.getSaldo());
}}

package pct_fonteP2;
public class ContaBancaria3{
	private String nomeCorrentista;
	private double saldo;
	public ContaBancaria3(String n, double s){nomeCorrentista=n; saldo=s;}
	public double getSaldo(){return saldo;}
	public String getNome(){return nomeCorrentista;}
	public void deposita(double quantia){saldo=saldo+quantia;}
	public void retira(double quantia){if (quantia < saldo)saldo=saldo-quantia;}
}
