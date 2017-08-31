using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
namespace ConsoleApplication1{
    class Program{
        static void Main(string[] args){
                Console.WriteLine("______________________________\nTabela:\n");
            string[] nomes = new string[]{"José","Maria","Silvio","Ana","João","Juan","Lais"};
            for (int num = 0; num < nomes.Length; num++){
                String nome = nomes[num];
                Console.WriteLine("Aluno nº" + (num+1) + "\t Nome: " + nome);}
                Console.WriteLine("______________________________");
            Console.ReadKey();
}}}
