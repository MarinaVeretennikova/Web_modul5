/* <applet code = "EventDemo" width=200 height=200>
   </applet>
*/ 
import java.awt.*;
import java.applet.*;
public class EventDemo extends Applet {
static final int n = 4;
Label lab = new Label("?", Label.CENTER);
public void init() {
setLayout(new GridLayout(n,  n));
setFont(new Font("Helvetica", Font.BOLD, 24));
int width = Integer.parseInt(getParameter("width"));
int height = Integer.parseInt(getParameter("height"));
for (int i = 0;  i < n;  i++)  {
     for (int j = 0; j < n; j++)  {
          int k = i * n + j;
          if (k > 0)
              add(new Button("" + k));
     }
}
lab.setFont(new Font("Helvetica", Font.ITALIC, 24));
add(lab);
}
public boolean action(Event e,  Object o)  {
if (o instanceof String)  {
lab.setText((String) o);
}
return false;
} }
