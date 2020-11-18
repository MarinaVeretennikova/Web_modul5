/* <title>Memory Image Generator</title>
* <applet code="MemoryImager" width=256 height=256>
* </applet>
*/
import java.applet.*;
import java.awt.*;
import java.awt.image.*;
public class MemoryImager extends Applet {
Image art;
Dimension d;
public void init() {
generateImage();
}
public void generateImage() {
int pixels[] = new int[d.width * d.height];
int i = 0;
int r, g, b;
for(int y=0; y < d.height; y++) {
    for(int x=0; x < d.width; x++) {
        r = (x^y)&0xff; // red is x XOR ã
        g = (x*2^y*2)&0xff; //green is 2x XOR 2y
        b = (x*4^y*4)&0xff; // blue is 4x XOR 4y
        pixels[i++] = (255 << 24) | (r << 16) | (g << 8) | b;
    } 
}
art = createImage(new MemoryImageSource(d.width, d.height, pixels, 0, d.width));
}
public void paint(Graphics g) {
g.drawImage(art, 0, 0, this);
} }
