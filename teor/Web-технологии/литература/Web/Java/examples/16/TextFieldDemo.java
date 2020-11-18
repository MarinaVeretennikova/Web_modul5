/* <applet code = "TextFieldDemo" width=200 height=100>
   </applet>
*/ 
import java.awt.*;
import java.applet.*;
public class TextFieldDemo extends Applet { 
public void init() {
setLayout(null);
int width = Integer.parseInt(getParameter("width"));
int height = Integer.parseInt(getParameter("height"));
Label namep = new Label("Name : ", Label.RIGHT);
Label passp = new Label("Password : ", Label.RIGHT);
TextField name = new TextField(8);
TextField pass = new TextField(8);
pass.setEchoChar('*');
add(namep);
add(name);
add(passp);
add(pass);
int space = 25;
int w1 = width / 3;
namep.setBounds(0, (height - space) / 2, w1, space);
name.setBounds(w1, (height - space) / 2, w1, space);
passp.setBounds(0, (height + space) / 2, w1, space);
pass.setBounds(w1, (height + space) / 2, w1, space);
} }
