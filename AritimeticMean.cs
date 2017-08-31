using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
namespace ConsoleApplication1{
    class Program{
        static void Main(string[] args){
            float N1, N2, N3, media;
            Console.Write("Digite a Nota 1: ");
            N1 = float.Parse(Console.ReadLine());
            Console.Write("Digite a Nota 2: ");
            N2 = float.Parse(Console.ReadLine());
            Console.Write("Digite a Nota 3: ");
            N3 = float.Parse(Console.ReadLine());
            Console.Write("A média aritmética entre a Nota 1 ({0}), a Nota 2 ({1}) e a Nota 3 ({2}) é de: {3:f}", N1, N2, N3, media=(N1+N2+N3)/3);
            Console.ReadKey();
}}}
