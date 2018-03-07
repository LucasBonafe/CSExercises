import java.util.Scanner;
public class semana{
	public static void main(String[] args){
		Scanner ler= new Scanner(System.in);
		int mes;
		System.out.println("Digite o número do mês: ");
		mes= ler.nextInt();
		String smes;
		switch (mes){
		case 1: smes= "Janeiro"; break;
		case 2: smes= "Fevereiro"; break;
		case 3: smes= "Março"; break;
		case 4: smes= "Abril"; break;
		case 5: smes= "Maio"; break;
		case 6: smes= "Junho"; break;
		case 7: smes= "Julho"; break;
		case 8: smes= "Agosto"; break;
		case 9: smes= "Setembro"; break;
		case 10: smes= "Outubro"; break;
		case 11: smes= "Novembro"; break;
		case 12: smes= "Dezembro"; break;
		default: smes= "Mês inválido"; break;
		}
		System.out.println(smes);
}}
