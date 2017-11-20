using System;
namespace CifraDeCesar{
	class Program{
		public static char Cifra(char ch, int key){
			if (!char.IsLetter(ch)){
				return ch;}
			char d = char.IsUpper(ch) ? 'A' : 'a';
			return (char)((((ch + key) - d) % 26) + d);}
		public static string Cripto(string input, int key){
			string output = string.Empty;
			foreach (char ch in input)
				output += Cifra(ch, key);
			return output;}
		public static string Descripto(string input, int key){
			return Cripto(input, 26 - key);}
		static void Main(string[] args){
			int i=0;
			while (i<1){
				Console.Write("\n 1- Criptografar\n 2- Descriptografar\n 0- Sair\n\nEscolha uma opção: ");//Menu
				int o= int.Parse(Console.ReadLine());
				switch (o){
					case 1:
						Console.WriteLine("\nTexto a ser Criptografado:");
						string Text1 = Console.ReadLine();
						Console.Write("\nInsira a chave: ");
						int key1 = Convert.ToInt32(Console.ReadLine());
						Console.WriteLine("\nCriptografado:");
						string c = Cripto(Text1, key1);
						Console.Write($"{c}\n\n");
						Console.Write("Digite qualquer tecla para voltar para o menu.");
						Console.ReadKey();
						Console.Clear();
						break;
					case 2:
						Console.WriteLine("\nTexto a ser Descriptografado:");
						string Text2 = Console.ReadLine();
						Console.Write("\nInsira a chave: ");
						int key2 = Convert.ToInt32(Console.ReadLine());
						string d = Descripto(Text2, key2);
						Console.WriteLine("\nDescriptografado:");
						Console.Write($"{d}\n\n");
						Console.Write("Digite qualquer tecla para voltar para o menu.");
						Console.ReadKey();
						Console.Clear();
						break;
					case 0:
						i++;
						break;
					default:
						i++;
						break;
				}
			}
			Console.Write("Digite qualquer tecla para sair.");
			Console.ReadKey();
}}}
