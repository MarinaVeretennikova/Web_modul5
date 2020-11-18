/*
*<applet code="HelloWorldApplet" width=200 height=40>
*</applet>
*/
import java.awt.*;
import java.applet.*;
public class HelloWorldApplet extends Applet { 
public void paint(Graphics g) {
g.drawString("Hello World!", 20, 20);
} }
