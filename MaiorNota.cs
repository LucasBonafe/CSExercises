using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
namespace ConsoleApplication1{
    class Program{
        static void Main(string[] args){
            string[] alunos = new string[] {"primeiro", "segundo", "terceiro", "quarto", "quinto"};
            int num=0, nota=0, maior=0;
            while (num < alunos.Length){
                String aluno = alunos[num];
                Console.Write("Digite a nota do {0} aluno: ", aluno); num++;
                nota = Convert.ToInt32(Console.ReadLine());
                if (nota > maior) {maior = nota;}
            }
            Console.WriteLine("A maior nota foi: "+ maior);
            Console.WriteLine("\nDigite qualquer tecla para sair.");
            Console.ReadKey();
}}}
