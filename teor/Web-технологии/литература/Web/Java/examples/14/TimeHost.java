import java.net.*;
import java.io.*;
class TimeHost {
public static void main(String args[]) throws Exception { 
int c;
Socket s = new Socket("timehost.starwave.com",880);
InputStream in = s.getInputStream();
while ((c = in.read()) != -1) { 
System.out.print( (char) c);
}
s.close();
} }
