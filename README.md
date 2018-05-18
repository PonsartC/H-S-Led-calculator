# Led calculator project
This projets has been done for the lesson of Hardware and Software given by Pr. Valderama at Polytechnical Faculty of Mons (Belgium).

This project was inspired by the tutorial on http://www.instructables.com/id/Simple-and-intuitive-web-interface-for-your-Raspbe/.

The goal is to make a calculator using PHP, and the result is reading on a serie of LED.

# Electronic components
- 1 Raspberry Pi
- 10 Leds (or more, or les)
- 10 wires (the same as the Leds)
- 10 resistors (about 270Ω but can be more, the leds will just be less brightly)
- 1 Ethernet Wire
- Bread board


To access the Raspberry Py, we  use X2Go.

# Step of the Project
## Installing the Pi Library
To use the leds, you'll need to access to the gpio. The Wiring Pi Library simplifies using theses GPIOs. You can find the way to install it by following this link:http://wiringpi.com/download-and-install/. After downloading it and using the ./build command , you can test it. Type the "*gpio mode 0 out*" command. If nothings happens, it works. If an error appears, try again and make sure you've followed exactly the guide and build the library.

## Turning a led on
Now that that you can access to the gpio, lets use the leds. First, you need to implement your circuit. On the bread board, place leds and resistors by following the next scheme. The pin on which you plug your leds is no important, juste keep a plan of your pins, it <will be usefull for the programm and choose which leds you needs to turn on or off.  ![Alt Text](https://cdn.instructables.com/F35/L2SN/HN82KGOY/F35L2SNHN82KGOY.LARGE.jpg)
