class ReturnDemo {
public static void main(String args[]) { 
boolean t = true;
System.out.println("Before the return"); //Перед оператором return 
if (t) return;
System.out.println("This won't execute"); //Это не будет выполнено 
} }
