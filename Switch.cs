using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
namespace ConsoleApplication1{
    class Program{
        static void Main(string[] args){
            int dia, mes;
            string sdia, smes;
            Console.ForegroundColor = ConsoleColor.Black;
            Console.BackgroundColor = ConsoleColor.White;
            Console.Clear();
            Console.Write("Digite o dia da semana: ");//Dia
            dia = int.Parse(Console.ReadLine());
                switch (dia){
                    case 1: sdia = "Domingo"; break;
                    case 2: sdia = "Segunda"; break;
                    case 3: sdia = "Terça"; break;
                    case 4: sdia = "Quarta"; break;
                    case 5: sdia = "Quinta"; break;
                    case 6: sdia = "Sexta"; break;
                    case 7: sdia = "Sábado"; break;
                    default: sdia = "Digite um valor válido entre 1 e 7."; break;
                }
            Console.WriteLine("Dia selecionado: "+ sdia +"\n");//Fim Dia
            Console.Write("Digite o mês: ");//Mês
            mes = int.Parse(Console.ReadLine());
                switch (mes){
                    case 1: smes = "Janeiro"; break;
                    case 2: smes = "Fevereiro"; break;
                    case 3: smes = "Março"; break;
                    case 4: smes = "Abril"; break;
                    case 5: smes = "Maio"; break;
                    case 6: smes = "Junho"; break;
                    case 7: smes = "Julho"; break;
                    case 8: smes = "Agosto"; break;
                    case 9: smes = "Setembro"; break;
                    case 10: smes = "Outubro"; break;
                    case 11: smes = "Novembro"; break;
                    case 12: smes = "Dezembro"; break;
                    default: smes = "Digite um valor válido entre 1 e 12."; break;
                }
            Console.WriteLine("Mês selecionado: "+ smes +"\n");//Fim Mês
            Console.ReadKey();
}}}
