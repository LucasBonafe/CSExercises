using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
namespace ConsoleApplication1{
    class Program{
        static void Main(string[] args){
            Console.WriteLine("\t   CONVERTER\n________________________________\nVALUE\tHEX\tBIN\t  OCTA");
            for (int num = 0; num < 16; num++){
                string hex = num.ToString("X");
                string bin = Convert.ToString(num, 2);
                string octa = Convert.ToString(num, 8);
                Console.WriteLine(" {0}\t{1}\t{2}\t  {3}", num, hex, bin, octa);}
            Console.WriteLine("________________________________");
            Console.ReadKey();
}}}
