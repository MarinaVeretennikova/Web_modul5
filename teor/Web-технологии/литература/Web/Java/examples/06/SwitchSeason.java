class SwitchSeason { public static void main(String args[]) { 
int month = 4;
String season;
switch (month) { 
case 12: // FALLSTHROUGH 
case 1: // FALLSTHROUGH
case 2:
season = "Winter";
break;
case 3: // FALLSTHROUGH 
case 4: // FALLSTHROUGH 
case 5:
season = "Spring";
break;
case 6: // FALLSTHROUGH 
case 7: // FALLSTHROUGH 
case 8:
season = "Summer";
break;
case 9: // FALLSTHROUGH 
case 10: // FALLSTHROUGH 
case 11:
season = "Autumn";
break;
default:
season = "Bogus Month";
}
System.out.println("April is in the " +	season +	".");
} }
