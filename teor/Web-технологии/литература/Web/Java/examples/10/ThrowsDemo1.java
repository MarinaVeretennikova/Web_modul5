class ThrowsDemo1 {
static void procedure() {
System.out.println("inside procedure");
throw new IllegalAccessException("demo");
}

public static void main(String args[]) { 
procedure();
} }
