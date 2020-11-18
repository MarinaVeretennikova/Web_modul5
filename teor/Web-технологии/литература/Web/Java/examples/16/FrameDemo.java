/* <applet code = "FrameDemo" width=200 height=200>
   </applet>
*/ 
import java.awt.*;
import java.applet.*;
public class FrameDemo extends Applet { 
public void init() {
int width = Integer.parseInt(getParameter("width"));
int height = Integer.parseInt(getParameter("height"));
String val = "There are two ways of constructing " +
             "a software design.\n" +
             "One way is to make it so simple\n" +
             "that there are obviously no deficiencies.\n" +
             "And the other way is to make it so complicated" +
             "that there are no obvious deficiencies.\n\n" +
             "C.A.R. Hoare\n\n";
TextArea text = new TextArea(val, 80, 40);
Frame f = new Frame("Demo Frame");
f.setSize(width, height);
f.add("Center", text);
f.show();
} }
