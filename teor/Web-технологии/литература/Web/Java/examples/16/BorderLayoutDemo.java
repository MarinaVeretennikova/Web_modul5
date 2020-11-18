/* <applet code = "BorderLayoutDemo" width=300 height=200>
   </applet>
*/ 
import java.awt.*;
import java.applet. *;
import java.util.*;
public class BorderLayoutDemo extends Applet { 
public void init() {
setLayout(new BorderLayout());
int width = Integer.parseInt(getParameter("width"));
int height = Integer.parseInt(getParameter("height"));
add("North", new Button("This is across the top"));
add("South", new Label("The footer message might go here"));
add("East", new Button("Left"));
add("West", new Button("Right"));
String msg = "The reasonable man adapts " +
             "himself to the world;\n" + 
             "the unreasonable one persists in " +
             "trying to adapt the world to himself.\n" +
             "Therefore all progress depends " +
             "on the unreasonable rnan.\n\n" +
             "George Bernard Shaw\n\n";
add("Center", new TextArea(msg));
} }
