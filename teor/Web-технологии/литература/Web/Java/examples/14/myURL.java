import java.net.URL;
class myURL {
public static void main(String args[]) throws Exception {
URL hp = new URL("http://coop.chuvashia.edu");
System.out. println("Protocol: " + hp.getProtocol());
System.out.println("Port: " + hp.getPort());
System.out.println("Host: " + hp.getHost());
System.out.println("File: " + hp.getFile());
System.out.println("Ext: " + hp.toExternalForm());
} }
