import java.util.Dictionary;
import java.util.Hashtable;
class HTDemo {
public static void main(String args[]) { 
Hashtable ht = new Hashtable();
ht.put("title", "The Java Handbook");
ht.put("author", "Patrick Naugnton");
ht.put("email", "naughton@starwave.com");
ht.put("age", new Integer(30));
show(ht);
}
static void show(Dictionary d) {
System.out.println("Title: " +	d.get("title"));
System.out.println("Author: " + d.get("author"));
System.out.println("Email: " + d.get("email"));
System.out.println("Age: " + d.get("age"));
} }
