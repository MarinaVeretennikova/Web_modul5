/* <applet code = "ListDemo" width=200 height=100>
   </applet>
*/ 
import java.awt.*;
import java.applet.*;
public class ListDemo extends Applet { 
public void init() { setLayout(null);
int width = Integer.parseInt(getParameter("width"));
int height = Integer.parseInt(getParameter("height"));
List os = new List(0, true);
List browser = new List(0, false);
os.addItem("Windows 95/98");
os.addItem("Solaris 2.5");
os.addItem("MacOS 7.5");
browser.addItem("Netscape Navigator 3.0");
browser.addItem("Netscape Communicator 4.5");
browser.addItem("lnternet Explorer 4.0");
browser.addItem("Mosaic 3.0");
browser.addItem("Lynx 2.4");
browser.select(1);
add(os);
add(browser);
os.reshape(0, 0, width, height / 2);
browser.reshape(0, height / 2, width, height / 2);
} }
