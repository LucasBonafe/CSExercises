import java.net.InetAddress;
import java.net.UnknownHostException;
import java.util.Arrays;
import java.util.Scanner;
import java.util.regex.Pattern;
public class IPtoASCII{
	public static void main(String[] args) throws UnknownHostException{
		String host;
		System.out.print("URL: ");
		Scanner ler= new Scanner(System.in);
		host= ler.next();
		
		InetAddress getIP = InetAddress.getByName(host);
		String IP = getIP.getHostAddress();
		System.out.println("IP= "+ IP);
		
		String bloco[] = IP.split(Pattern.quote("."));
		System.out.println("Blocos= "+ bloco[0] +", "+ bloco[1] +", "+ bloco[2] +" e "+ bloco[3]);
		
		int ascii[] = Arrays.stream(bloco).mapToInt(Integer::parseInt).toArray();
		
		for(int i = 0; i < ascii.length; i++){
			System.out.println("Bloco "+bloco[i]+"\tCampo "+i+": "+(char)ascii[i]);
		}
		
		System.out.print("Reduzido= ");
		for(int i = 0; i < ascii.length; i++){
			System.out.print((char)ascii[i]);
		}
}}
