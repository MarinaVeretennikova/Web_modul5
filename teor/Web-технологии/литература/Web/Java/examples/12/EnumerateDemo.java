import java.util.Enumeration;
class Enum implements Enumeration {
private int count = 0;
private boolean more = true;
public boolean hasMoreElements() {
return more;
}
public Object nextElement() {
count++;
if (count > 4) more = false;
return new Integer(count);
} }
class EnumerateDemo {
public static void main(String args[]) { 
Enumeration enum = new Enum();
while (enum.hasMoreElements()) {
System.out.println(enum.nextElement());
}
} }
