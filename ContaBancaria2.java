package pct_fonte62;
public class TesteContaBancaria2{
	public static void main(String[] args){
		ContaBancaria2 fred= new ContaBancaria2("Fred", 1000);
		ContaBancaria2 barney= new ContaBancaria2("Barney", 2000);
		barney.retira(500);
		fred.deposita(500);
		System.out.println(fred.getNome() +": "+ fred.getSaldo());
		System.out.println(barney.getNome() +": "+ barney.getSaldo());
}}

package pct_fonte62;
public class ContaBancaria2{
	private String nomeCorrentista;
	private double saldo;
	public ContaBancaria2(String n, double s){nomeCorrentista=n; saldo=s;}
	public double getSaldo(){return saldo;}
	public String getNome(){return nomeCorrentista;}
	public void deposita(double quantia){saldo=saldo+quantia;}
	public void retira(double quantia){if (quantia < saldo)saldo=saldo-quantia;}
}
