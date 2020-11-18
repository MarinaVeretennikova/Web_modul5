/* <applet code = "Scribble1" width=200 height=200>
   </applet>
*/ 
import java.applet.*;
import java.awt.*;
/** ���⮩ ������, � ���஬ �ᯮ������ ������ ��ࠡ�⪨ ᮡ�⨩ 1.0 */
public class Scribble1 extends Applet {
private int lastx, lasty;    // �࠭�� ���न���� ����� ���.
Button clear_button;         // ������ Clear.
Graphics g;                  // ��ꥪ� Graphics, ����� ����室��� ���ᮢ���.
/** ���樠������ ������ � ��ꥪ� Graphics */
public void init() {
clear_button = new Button("Clear");
this.add(clear_button);
g = this.getGraphics();
}
/** ������ �� ����⨥ ������ ��� */
public boolean mouseDown(Event e, int x, int y) {
lastx = x; lasty = y;
return true;
}
/** ������ �� ����᪨����� � ������� ��� */
public boolean mouseDrag(Event e, int x, int y) {
g.setColor(Color.black) ;
g.drawLine(lastx, lasty, x, y);
lastx = x; lasty = y;
return true;
}
/** ������ �� ����⨥ ������ [�] */
public boolean keyDown(Event e, int key) {
if ((e.id == Event.KEY_PRESS) && (key == '�' ) ) {
clear() ;
return true;
}
else return false;
}
/** ������ �� ����⨥ ������ Clear */
public boolean action(Event e, Object arg) {
if (e.target == clear_button) {
clear();
return true;
}
else return false;
}
/** ��⮤ ��� ��࠭�� ��ࠪ㫥� */
public void clear() {
g.setColor(this.getBackground());
g.fillRect(0, 0, bounds().width, bounds().height);
}
}
