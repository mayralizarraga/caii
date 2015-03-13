import java.io.*;

public class KeyboardInput{
	public static void main(String[] args){
		String s;
		InputStreamReader ir=new InputStreamReader(System.in);
		BufferedReader in=new BufferedReader(ir);
		System.out.println("Unix: Type ctrl-d to exit");
		try{
			s=in.readLine();
			while(s!=null){
				System.out.println("Read: "+s);
				s=in.readLine();
			}
			in.close();

		}catch(IOException e){
			e.printStackTrace();
		}
	}

}