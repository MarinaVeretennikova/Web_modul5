/* <title>SimpleImageLoad</title>
* <applet code="SimpleImageLoad" width=300 height=150>
* <param name="img" value="mupk.gif">
* </applet>
*/
import java.applet.*;
import java.awt.*;
public class SimpleImageLoad extends Applet { 
Image art;
public void init() {
art = getImage(getDocumentBase(), getParameter("img"));
}
public void paint(Graphics g) {
g.drawImage(art, 0, 0, this);
} }
