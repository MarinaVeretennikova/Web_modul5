/* <applet code = "ScrollbarDemo" width=200 height=100>
   </applet>
*/ 
import java.awt.*;
import java.applet.*;
public class ScrollbarDemo extends Applet { 
public void init() { 
setLayout(null);
int width = Integer.parseInt(getParameter("width"));
int height = Integer. parseInt(getParameter("height"));
Scrollbar hs = new Scrollbar(Scrollbar.HORIZONTAL, 50, width / 10, 0,               100);
Scrollbar vs = new Scrollbar(Scrollbar.VERTICAL, 50, height / 2, 0, 100);
add(hs);
add(vs);
int thickness = 16;
hs.reshape(0, height - thickness, width - thickness, thickness);
vs.reshape(width - thickness, 0, thickness, height - thickness);
} }
