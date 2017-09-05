using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
namespace ConsoleApplication1{
    class Program{
        [STAThread]
        static void Main(string[] args){
            int counter= 0;
            string line;
            System.Threading.Thread.Sleep(5000);//Wait 5 seconds
            System.IO.StreamReader file=
                new System.IO.StreamReader(@"C:/Desktop/Wordlist.txt");//Archive
            while ((line=file.ReadLine()) != null){
                Console.WriteLine(line);
                Clipboard.SetText(line);//Thread
                System.Threading.Thread.Sleep(64);
                SendKeys.SendWait("^{V}");//Ctrl+V
                System.Threading.Thread.Sleep(64);
                SendKeys.SendWait("{ENTER}");
                counter++;}
            file.Close();
            Console.WriteLine("\n\t{0} linhas foram inseridas.\n\tPressione qualquer tecla para finalizar...", counter);
            Console.ReadKey();
}}}
