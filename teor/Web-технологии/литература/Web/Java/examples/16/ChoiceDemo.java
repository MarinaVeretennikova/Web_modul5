/* <applet code = "ChoiceDemo" width=200 height=100>
   </applet>
*/ 
import java.awt.*;
import java.applet.*;
public class ChoiceDemo extends Applet { 
public void init() { 
setLayout(null);
int width = Integer.parseInt(getParameter("width"));
int height = Integer.parseInt(getParameter("height"));
Choice os = new Choice();
Choice browser = new Choice();
os.addItem("Windows 95/98");
os.addItem("Solaris 2.5");
os.addItem("MacOS 7.5");
browser.addItem("Netscape Navigator 3.0");
browser.addItem("Netscape Communicator 4.5");
browser.addItem("Internet Explorer 3.0");
browser.addItem("Mosaic 3.0");
browser.addItem("Lynx 2.4");
browser.select("Netscape Communicator 4.5");
add(os);
add(browser);
os.reshape(0, 0, width, height / 2);
browser.reshape(0, height / 2, width, height / 2);
} }
