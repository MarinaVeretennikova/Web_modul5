class Point { int x, y;
Point(int x, int y) {
this.x = x;
this.y = y;
}
Point() {
this(-1, -1);
} 

public static void main(String args[]) {
Point p = new Point();
p.x = 10;
p.y = 20;
System.out.println("x = " + p.x + " ã = " + p.y);
} }
