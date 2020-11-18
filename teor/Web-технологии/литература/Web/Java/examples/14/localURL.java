import java.net.*;
import java.io.*;
class localURL {
public static void main(String args[]) throws Exception {
int c;
URL hp = new URL("http", "127. 0. 0.1", 80, "/");
URLConnection hpCon = hp.openConnection();
System.out.println("Date: " + hpCon.getDate());
System.out.println("Type: " + hpCon.getContentType());
System.out.println("Exp: " + hpCon.getExpiration());
System.out.println( "Last M: " + hpCon.getLastModified());
System.out.println("Length: " + hpCon.getContentLength());
if (hpCon.getContentLength() > 0) {
System.out.println("=== Content ===");
InputStream input = hpCon.getInputStream();
int i=hpCon.getContentLength();
while (((c = input. read()) != -1) && (--i > 0)) {
System.out.print((char) c);
}
input.close();
}
else {
System.out.println("No Content Available");
}
} }
