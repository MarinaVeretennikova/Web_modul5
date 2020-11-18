import java.io.*;
import java.util.*;
class ByteArrayOutputStreamS {
public static void main(String args[]) throws Exception {
int i;
ByteArrayOutputStream f0 = new ByteArrayOutputStream(12);
System.out.println("Enter 10 characters and a return");
while (f0.size() != 10) { 
f0.write(System.in.read());
}
System.out.println("Buffer as a string");
System.out.println(f0.toString());
System.out.println ("Into array");
byte b[] = f0.toByteArray();
for (i=0; i < b.length; i++) {
System.out.print((char) b[i]);
}
System.out.println();
System.out. println("To an OutputStream()");
OutputStream f2 = new FileOutputStream("test.txt");
f0.writeTo(f2);
System.out.println("Doing a reset");
f0.reset();
System.out.println("Enter 10 characters and a return");
while (f0.size() != 10) { 
f0.write(System.in.read());
} 
System.out.println("Done.");
} }
