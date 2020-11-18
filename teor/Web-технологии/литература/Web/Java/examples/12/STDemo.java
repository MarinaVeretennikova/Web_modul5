import java.util.StringTokenizer;
class STDemo {
static String in = "title=The Java Handbook:" + "author=Patrick Naughton:" + "isbn=0-07-882199-1:" + "ean=9 780078 821998:" + "email=naughton@starwave. corn";
public static void main(String args[]) {
StringTokenizer st = new StringTokenizer(in, "=:");
while (st.hasMoreTokens()) { 
String key = st.nextToken();
String val = st.nextToken();
System.out.println(key + "\t" + val);
}
} }
