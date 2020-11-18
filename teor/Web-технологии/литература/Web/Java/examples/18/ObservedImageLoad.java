/* <title>ObservedImageLoad</title>
* <applet code="ObservedImageLoad" width=290 height=140>
* <param name="img" value="mupk.gif">
* </applet>
*/
import java.applet.*;
import java.awt.*;
import java.awt.image.*;
public class ObservedImageLoad extends Applet
                               implements Runnable, ImageObserver {
Image art;
Dimension d;
int progress;
Thread motor;
boolean loaded;
public void init() {
art = getImage(getDocumentBase(), getParameter("img"));
loaded = false;
progress = 0;
}
public void paint(Graphics g)	{
d = this.getSize();
loaded = g.drawImage(art, 0, 0, this);
}
public boolean imageUpdate(Image img, int	info, 
                           int x, int y, int width, int height) {
if((info & ALLBITS) != 1) { 
    if(progress<d.height) {
       progress = progress + height;
    }
System.out.println(progress + "/" + d.height);
return true;
} 
else {
return false;
} }
public void start() {
motor = new Thread(this);
motor. start();
}
public void stop() {
motor.stop();
}
public void run() {
motor.setPriority(Thread.MIN_PRIORITY);
while(!loaded) { // update progress indicator (5 fps) 
repaint();
try {
motor.sleep(200);
}
catch(InterruptedException e) { }
}
} }
