/* <applet code = "LabelDemo" width=100 height=100>
   </applet>
*/ 
import java.awt.*;
import java.applet.*;
public class LabelDemo extends Applet { 
public void init() {
setLayout(null);
int width = Integer.parseInt(getParameter("width"));
int height = Integer.parseInt(getParameter("height"));
Label left = new Label("Left", Label.LEFT);
Label right = new Label("Right", Label.RIGHT);
Label center = new Label("Center", Label.CENTER);
add(left);
add(right);
add(center);
left.reshape(0, 0, width, height / 3);
right.reshape(0, height / 3, width, height / 3);
center. reshape(0, 2 * height / 3, width, height / 3);
} }
