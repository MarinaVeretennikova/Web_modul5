/* <title>TrackedImageLoad</title>
* <applet code="TrackedImageLoad" width=290 height=140>
* <param name="img" value="mupk.gif">
* </applet>
*/
import java.applet.*;
import java.awt.*;
public class TrackedImageLoad extends Applet implements Runnable { 
MediaTracker tracker;
int tracked;
Thread motor;
boolean loaded;
Image art;
public void init() {
tracker = new MediaTracker(this);
art = getImage(getDocumentBase(), getParameter("img"));
tracker.addImage(art, tracked++);
}
public void paint(Graphics g) { 
if (imagesLoaded()) {
g.drawImage(art, 0, 0, null);
loaded = true;
}
else {
// здесь нужно вывести заставку 
} }
public boolean imagesLoaded() {
boolean done = false;
for(int i=0; i<tracked; i++) { 
done &= tracker.checkID(i, true);
System.out.println(i + " : " + (loaded?"done":"loading"));
}
return(done);
}
public void start() {
motor = new Thread(this);
motor.start();
}
public void stop() { 
motor.stop();
}
public void run() {
motor.setPriority(Thread.MIN_PRIORITY);
while(!loaded) { // repaint progress indicator (5 fps) 
repaint();
try {
motor.sleep(200);
}
catch (InterruptedException e) {}
}
} }
