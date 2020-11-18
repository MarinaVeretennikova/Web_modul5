/* <applet code = "Scribble1" width=200 height=200>
   </applet>
*/ 
import java.applet.*;
import java.awt.*;
/** Простой апплет, в котором используется модель обработки событий 1.0 */
public class Scribble1 extends Applet {
private int lastx, lasty;    // Хранят координаты курсора мыши.
Button clear_button;         // Кнопка Clear.
Graphics g;                  // Объект Graphics, который необходимо нарисовать.
/** Инициализация кнопки и объекта Graphics */
public void init() {
clear_button = new Button("Clear");
this.add(clear_button);
g = this.getGraphics();
}
/** Реакция на нажатие кнопки мыши */
public boolean mouseDown(Event e, int x, int y) {
lastx = x; lasty = y;
return true;
}
/** Реакция на перетаскивание с помощью мыши */
public boolean mouseDrag(Event e, int x, int y) {
g.setColor(Color.black) ;
g.drawLine(lastx, lasty, x, y);
lastx = x; lasty = y;
return true;
}
/** Реакция на нажатие клавиши [С] */
public boolean keyDown(Event e, int key) {
if ((e.id == Event.KEY_PRESS) && (key == 'с' ) ) {
clear() ;
return true;
}
else return false;
}
/** Реакция на нажатие кнопки Clear */
public boolean action(Event e, Object arg) {
if (e.target == clear_button) {
clear();
return true;
}
else return false;
}
/** Метод для стирания каракулей */
public void clear() {
g.setColor(this.getBackground());
g.fillRect(0, 0, bounds().width, bounds().height);
}
}
