/* <applet code = "ButtonDemo" width=100 height=100>
   </applet>
*/ 
import java.awt.*;
import java.applet.*;
public class ButtonDemo extends Applet {
public void init() {
setLayout(null);
int width = Integer.parseInt(getParameter("width"));
int height = Integer.parseInt(getParameter("height"));
Button yes = new Button("Yes");
Button no = new Button("No");
Button maybe = new Button("Undecided");
add(yes);
add(no);
add(maybe);
yes.reshape(0, 0, width, height / 3);
no.reshape(0, height / 3, width, height / 3);
maybe.reshape(0, 2 * height / 3, width, height / 3);
} }
