/* <applet code = "MenuDemo" width=200 height=200>
   </applet>
*/ 
import java.awt.*;
import java.applet. *;
public class MenuDemo extends Applet { 
public void init() {
int width = Integer.parseInt(getParameter("width"));
int height = Integer.parseInt(getParameter("height"));
Frame f = new Frame("Demo Frame");
f.setSize(width, height);
MenuBar mbar = new MenuBar();
f.setMenuBar(mbar);
Menu file = new Menu("File");
file.add(new MenuItem("New... "));
file.add(new MenuItem("Open..."));
file.add(new MenuItem("Close"));
file.add(new MenuItem("-"));
file.add(new MenuItem("Quit..."));
mbar.add(file);
Menu edit = new Menu("Edit");
edit.add(new MenuItem("Cut"));
edit.add(new MenuItem("Copy"));
edit.add(new MenuItem("Paste"));
edit.add(new MenuItem("-"));
Menu sub = new Menu("Special");
sub.add(new MenuItem("First"));
sub.add(new MenuItem("Second"));
sub.add(new MenuItem("Third"));
edit.add(sub);
edit.add(new CheckboxMenuItem("Debug"));
edit.add(new CheckboxMenuItem("Testing"));
mbar.add(edit);
f.show();
} }
