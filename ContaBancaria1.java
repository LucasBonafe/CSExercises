package pct_fonte61;
public class TesteContaBancaria1{
	public static void main(String[] args){
		ContaBancaria1 fred= new ContaBancaria1("Fred", 1000);
		ContaBancaria1 barney= new ContaBancaria1("Barney", 2000);
		barney.retira(500);
		fred.deposita(500);
		barney.saldo= 1000000;
		System.out.println(fred.getNome() +": "+ fred.getSaldo());
		System.out.println(barney.getNome() +": "+ barney.getSaldo());
}}

package pct_fonte61;
public class ContaBancaria1{
	String nomeCorrentista;
	double saldo;
	public ContaBancaria1(String n, double s){nomeCorrentista=n; saldo=s;}
	public double getSaldo(){return saldo;}
	public String getNome(){return nomeCorrentista;}
	public void deposita(double quantia){saldo=saldo+quantia;}
	public void retira(double quantia){if (quantia < saldo)saldo=saldo-quantia;}
}
