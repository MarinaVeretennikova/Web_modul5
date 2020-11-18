/* <applet code = "Scribble3" width=200 height=200>
   </applet>
*/ 
import java.applet.*;
import java.awt.*;
import java.awt.event.*;
public class Scribble3 extends Applet {
int last_x, last_y;
public void init() {
// ��।����, ᮧ���� � ॣ������� ��ꥪ� MouseListener.
this.addMouseListener(new MouseAdapter() {
public void mousePressed(MouseEvent e) {
last_x = e.getX(); last_y = e.getY();
}
});
// ��।����, ᮧ���� � ॣ������� ��ꥪ�  MouseMotionListener.
this.addMouseMotionListener(new MouseMotionAdapter() {
public void mouseDragged(MouseEvent e) {
Graphics g = getGraphics();
int x = e.getX(), y= e.getY();
g.setColor(Color.black);
g.drawLine(last_x, last_y, x, y);
last_x = x; last_y = y;
}
});
// ������� ������ Clear.
Button b = new Button("Clear");
// ��।����, ᮧ���� � ॣ������� ��ꥪ� ���⥫�
// ��� ��ࠡ�⪨ ᮡ���, �易����� � ����⨥� ������.
b.addActionListener(new ActionListener() {
public void actionPerformed(ActionEvent e) {
// ��࠭�� ��ࠪ㫥�
Graphics g = getGraphics();
g.setColor(getBackground());
g.fillRect(0, 0, getSize().width, getSize().height);
}
});
// �������� ������ � ������.
this.add(b);
} }
