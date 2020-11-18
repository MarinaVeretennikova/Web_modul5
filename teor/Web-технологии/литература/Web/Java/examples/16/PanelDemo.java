/* <applet code = "PanelDemo"
           width=300
           height=300>
   </applet>
*/ 

import java.awt.*;
import java.applet.*;
class GrayCanvas extends Canvas { 
Color gray;
public GrayCanvas(float g) { 
gray = new Color(g, g, g);
}
public void paint(Graphics g) { 
Dimension size = size();
g.setColor(gray);
g.fillRect(0, 0, size.width, size.height);
g.setColor(Color.black);
g.drawRect(0, 0, size.width-1, size.height-1);
} }

public class PanelDemo extends Applet { 
static final int n = 4;
public void init() { 
setLayout(null);
int width = Integer.parseInt(getParameter("width"));
int height = Integer.parseInt(getParameter("height"));
for (int i = 0; i < n; i++) { 
     for (int j = 0; j < n; j++) {
          float g = (i * n + j) / (float) (n * n);
          Canvas c = new GrayCanvas(g);
          add(c);
          c.resize(width / n, height / n);
          c.move(i * width / n, j * height / n);
     } 
}
} }
