using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.NetworkInformation;
using System.Text;
using System.Threading.Tasks;
namespace ConsoleApplication1{
    class Program{
        static void Main(string[] args){
            Console.WriteLine("\nTABUADA MULTIPLICAÇÃO\n");
            for (int n1 = 1, n2 = 1; n2 < 11;){
                Console.Write(n1 + "x" + n2 + "=" + (n1 * n2) + "\t"); n1++;//1
                Console.Write(n1 + "x" + n2 + "=" + (n1 * n2) + "\t"); n1++;//2
                Console.Write(n1 + "x" + n2 + "=" + (n1 * n2) + "\t"); n1++;//3
                Console.Write(n1 + "x" + n2 + "=" + (n1 * n2) + "\t"); n1++;//4
                Console.Write(n1 + "x" + n2 + "=" + (n1 * n2) + "\t"); n1++;//5
                Console.Write(n1 + "x" + n2 + "=" + (n1 * n2) + "\t"); n1++;//6
                Console.Write(n1 + "x" + n2 + "=" + (n1 * n2) + "\t"); n1++;//7
                Console.Write(n1 + "x" + n2 + "=" + (n1 * n2) + "\t"); n1++;//8
                Console.Write(n1 + "x" + n2 + "=" + (n1 * n2) + "\t"); n1++;//9
                Console.WriteLine(n1 + "x" + n2 + "=" + (n1 * n2)); n2++;//10
                n1 = n1 - 9;
            }
            Console.WriteLine("\nDigite qualquer tecla para sair.");
            Console.ReadKey();
}}}
