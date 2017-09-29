using System;
namespace ConsoleApp1{
	class Program{
        static void Main(string[] args){
            Console.WriteLine("\nTABUADA MULTIPLICAÇÃO\n");
            for (int n1 = 1, n2 = 1; n2 < 11;){
                Console.Write($"{n1}x{n2}={n1*n2}\t"); n1++;//9x
                if (n1 == 10){
                    Console.WriteLine($"{n1}x{n2}={n1*n2}"); n2++;//1x
                    n1 = n1 - 9;
                }
            }
Console.WriteLine("\nDigite qualquer tecla para sair.");
Console.ReadKey();
}}}
