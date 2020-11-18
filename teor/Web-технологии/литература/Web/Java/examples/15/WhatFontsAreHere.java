/*
* <applet code="WhatFontsAreHere" width=100 height=40>
* </applet>
*
*/
import java.applet.*;
import java.awt.*;
public class WhatFontsAreHere extends Applet { 
public void init() { 
String FontList[];
FontList = getToolkit().getFontList();
for (int i=0; i < FontList.length; i++) {
System.out.println(i + ": " + FontList[i]);
}
} }
