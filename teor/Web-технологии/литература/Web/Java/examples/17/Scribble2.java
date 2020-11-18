/* <applet code = "Scribble2" width=200 height=200>
   </applet>
*/ 
import java.applet.*;
import java.awt.*;
import java.awt.event.*;
public class Scribble2 extends Applet implements
                                      MouseListener, MouseMotionListener {
private int last_x, last_y;
public void init() {
// ����頥� ������� ������� � ⮬, ����� ��ꥪ��
// ����ᮢ MouseListener � MouseMotionListener �� ������ ��������
// � ᮡ����, �易���� � ����� � �� ��६�饭���.
// ��᪮��� ����䥩� ॠ������� � ᠬ�� ������,
// �� �⮬ ���� ��뢠���� ��⮤� ������.
this.addMouseListener(this) ;
this.addMouseMotionListener(this);
}
// ��⮤ ����䥩� MouseListener. ��뢠���� �� ����⨨
// ���짮��⥫�� ������ ���.
public void mousePressed(MouseEvent e) {
last_x = e.getX();
last_y = e.getY();
}
// ��⮤ ����䥩� MouseMotionListener. ��뢠���� ��
// ��६�饭�� ��� � ����⮩ �������.
public void mouseDragged(MouseEvent e) {
Graphics g = this.getGraphics();
int x = e.getX(), y = e.getY();
g.drawLine(last_x, last_y, x, y);
last_x = x; last_y = y;
}
// ��㣨�, �� �ᯮ��㥬� ��⮤� ����䥩� MouseListener.
public void mouseReleased(MouseEvent e) {;}
public void mouseClicked(MouseEvent e) {;}
public void mouseEntered(MouseEvent e) {;}
public void mouseExited(MouseEvent e) {;}
// ��㣮� ��⮤ ����䥩� MouseMotionListener.
public void mouseMoved(MouseEvent e) {;}
}
