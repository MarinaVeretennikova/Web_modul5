class Break {
public static void main(String args[]) { boolean t = true;
a:      { b:         { c:             {
System.out.println("Before the break"); //Перед break
	if (t)
	break b;
	System.out.println("This won't execute"); // He	будет выполнено 	
        }
	System.out.println("This won't execute"); // He будет выполнено 	
        }
	System.out.println("This is after b"); // После	b 	
} } }
