/* <applet code = "TextAreaDemo" width=200 height=100>
   </applet>
*/ 
import java.awt.*;
import java.applet.*;
public class TextAreaDemo extends Applet { 
public void init() { 
setLayout(null);
int width = Integer.parseInt(getParameter("width"));
int height = Integer.parseInt(getParameter("height"));
String val = "There are two ways of constructing " + 
             "a software design.\n" + 
             "One way is to make it so simple\n" + 
             "that there are obviously no deficiencies.\n" + 
             "And the other way is to make it so complicated\n" +
             "that there are no obvious deficiencies.\n\n" + 
             "C.A.R. Hoare\n\n" +
             "There's an old story about the person who wished\n" +
             "his computer were as easy to use as his telephone. \n" +
             "That wish has come true,\n" +
             "since I no longer know how to use my telephone. \n\n" +
             "Bjarne Stroustrup, AT&T (inventor of C++)";
TextArea text = new TextArea(val,  80,  40);
add(text);
text.setBounds(0,  0,  width,  height);
}}
