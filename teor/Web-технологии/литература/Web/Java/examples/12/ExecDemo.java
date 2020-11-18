class ExecDemo {
public static void main(String args[]) {
Runtime r = Runtime. getRuntime();
Process p = null;
String cmd[] = { "notepad", "/java/src/java/lang/Runtime.java" };
try {
p = r.exec(cmd);
} catch (Exception e) {
System.out.println("error executing " + cmd[0]);
}
} }
