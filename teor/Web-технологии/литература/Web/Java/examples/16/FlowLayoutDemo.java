/* <applet code = "FlowLayoutDemo" width=200 height=100>
   </applet>
*/ 
import java.awt.*;
import java.applet.*;
import java.util.*;
public class FlowLayoutDemo extends Applet {
public void init() {
setLayout(new FlowLayout(FlowLayout.RIGHT, 10, 3));
int width = Integer.parseInt(getParameter("width"));
int height = Integer.parseInt(getParameter("height"));
String val = "Data is not information " +
             "is not knowledge is not wisdom.";
StringTokenizer st = new StringTokenizer(val);
while (st.hasMoreTokens()) {
add(new Button(st.nextToken()));
}
} }
