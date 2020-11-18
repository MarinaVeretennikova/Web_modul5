class Point3D extends Point { int z;
Point3D(int x, int y, int z) {
super(x ,y);
this.y = y;
this.z = z; } 
Point3D() {
this(-1,-1,-1);
} 

public static void main(String	args[]) {
Point3D p = new Point3D(10, 20, 30);
System.out.println( " x = " + p.x + " y = " + p.y + " z = " + p.z);
} }

