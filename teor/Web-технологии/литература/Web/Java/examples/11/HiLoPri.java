class Clicker implements Runnable { 
int click = 0;
private Thread t;
private boolean running = true;
public Clicker(int p) {
t = new Thread(this);
t.setPriority(p);
} 
public void run() {
while (running) { 
click++;       
} }
public void stop() {
running = false;  }
public void start() {
t.start();
} }
class HiLoPri {
public static void main(String args[]) {
Thread.currentThread().setPriority(Thread.MAX_PRIORITY);
Clicker hi = new Clicker(Thread.NORM_PRIORITY + 2);
Clicker lo = new Clicker(Thread.NORM_PRIORITY - 2);
lo.start();
hi.start();
try {
Thread.sleep(-10000);
}
catch (Exception e) {
}
lo.stop();
hi.stop();
System.out.println(lo.click + " vs. " + hi.click); 
} }
