# Led calculator project
This projets has been done for the lesson of Hardware and Software given by Pr. Valderama at Polytechnical Faculty of Mons (Belgium).

This project was inspired by the tutorial on http://www.instructables.com/id/Simple-and-intuitive-web-interface-for-your-Raspbe/.

The goal is to make a calculator using PHP, and the result is reading on a serie of LED.

# Electronic components
- 1 Raspberry Pi
- 10 Leds (or more, or les)
- 10 wires (the same as the Leds)
- 10 resistors (about 270Ω but can be more, the leds will just be less brightly)
- 1 seven segments display
- 1 Ethernet Wire
- Bread board


To access the Raspberry Py, we  use X2Go.

# Step of the Project
## Installing the Pi Library
To use the leds, you'll need to access to the gpio. The Wiring Pi Library simplifies using theses GPIOs. You can find the way to install it by following this link:http://wiringpi.com/download-and-install/. After downloading it and using the ./build command , you can test it. Type the "*gpio mode 0 out*" command. If nothings happens, it works. If an error appears, try again and make sure you've followed exactly the guide and build the library.

## Turning a led on
Now that that you can access to the gpio, lets use the leds. First, you need to implement your circuit. On the bread board, place leds and resistors by following the next scheme. The pin on which you plug your leds is no important, juste keep a plan of your pins, it will be usefull to programm and choose which leds you needs to turn on or off.  ![Alt Text](https://cdn.instructables.com/F35/L2SN/HN82KGOY/F35L2SNHN82KGOY.LARGE.jpg)
The pins on the raspberry have to be set as output. To do that, use the "gpio mode 0 out" where "0" is the wiring pin number where you put your first led (in serie with a resistor). To turn this led on, use "gpio write 0 1", 0 for the pin number and 1 is the state ON. To turn it off, use "gpio write 0 0". 
The principle for the seven segment display is the same. You have to find on the WEB the schema of your display to find which tab goes with which segment. 

## Make the calculator
Now, it's just about logic. You can find the code in annex. Put conditions on your pins to turn on or turn off the led or the display depending on the calcul you got. For exemple, if(ans>2) then you turn the first and the second led ON. For this project, we alse add the possibility to show the decimals on the diplay.
![Alt Text](https://zupimages.net/up/18/22/67lq.jpg)
![Alt Text](https://zupimages.net/up/18/22/8pqk.jpg)


