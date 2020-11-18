/* <applet code = "CheckboxGroupDemo" width=120 height=100>
   </applet>
*/ 
import java.awt.*;
import java.applet.*;
public class CheckboxGroupDemo extends Applet {
public void init() {
setLayout(null);
int width = Integer.parseInt(getParameter("width"));
int height = Integer.parseInt(getParameter("height"));
CheckboxGroup g = new CheckboxGroup();
Checkbox win95 = new Checkbox("Windows 95/98", g, true);
Checkbox solaris = new Checkbox("Solaris 2.5", g, false);
Checkbox mac = new Checkbox("MacOS 7.5", g, false);
add(win95);
add(solaris);
add(mac);
win95.reshape(0, 0, width, height / 3);
solaris. reshape(0, height / 3, width, height / 3);
mac.reshape(0, 2 * height / 3, width, height / 3);
} }
