# 📱 PHP Programming on Android with Termux

Termux is free and open source app , a **terminal** emulator for Android that provides a Linux environment **without** requiring root access or additional access.

Following are steps for using Termux as a terminal to code and run PHP programs:

## 🛠️ Hardware Setup (optional, but recommended)
If no access to computer / laptop other than lab , but have a smartphone, then **≈** small screen desktop/laptop coding experience, by using: 
* Keyboard, connect mobile to a physical keyboard via Bluetooth or a USB-OTG adapter, and
* Display, use a mobile screen magnifier, placed in front of mobile ( passive, does not require electricity , serves as magnifying glass , usually clear acrylic polymer/plastic as convex lens)
<p align="center">
  <img src="https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/Termux/img/ChatGPT%20Image%20Using%20termux%20to%20code.png" alt="Rough representation of mobile magnifier and keyboard setup" width="50%" /><br />
  <small><em>Rough representation of mobile magnifier and keyboard setup.</em></small>
</p>

**≈** computer setup , but minus GUI (Graphical User Interface) , IDE (Integrated Development Environment) 
> [!IMPORTANT]
> Since it's only terminal, visualization, file and web browser are not available, **but** you get to work on code, hence find out where you would/could make mistakes.

> [!TIP]
> Work done on GUI ( like gedit , Jupyter Notebook ) , or work done on IDE ( like , Code::Blocks , KDevelop , Spyder , NetBeans ) , ( mostly the ) same operations can also be done through terminal

## ⚙️ Initial Setup: 

Install Termux from Google Play Store. And run the following commands, ensure you have an active Internet connection: 

> [!WARNING]
> Updates are not being released for Play Store version. Latest version can be downloaded from F-Droid or GitHub.

> [!TIP]
> Note down the steps

or

> [!TIP]
> If keyboard connected to mobile, use shortcut: **alt** &nbsp;&nbsp; **tab** , to switch between terminal (app to code) and browser (Firefox/Chrome app for instructions)


### 1. Update and Upgrade system packages
It is good practice to update your system before starting a new setup, to avoid installation errors.

> [!IMPORTANT]
> Do not forget to press **enter** **↵** option or key after typing or copy pasting command[s]
```
apt update && apt upgrade -y
```
<p align="center">
  <img src="https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/Termux/img/01%20update%20and%20upgrade.png" alt="apt update and apt upgrade" width="20%" /><br />
  <small><em>apt update and apt upgrade</em></small>
</p>

### 2. Install PHP programming language
```
apt install php -y
```
<p align="center">
  <img src="https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/Termux/img/02%20apt%20install%20php.png" alt="apt install php -y" width="20%" /><br />
  <small><em>apt install php -y</em></small>
</p>

### 3. Install Nano text editor 
```
apt install nano -y
```
<p align="center">
  <img src="https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/Termux/img/03%20install%20nano.png" alt="apt install nano -y" width="20%" /><br />
  <small><em>apt install nano -y</em></small>
</p>

### 4. Open/Start coding with nano
Open new code file by providing program_name.php as argument to nano
```
nano hello.php
```
<p align="center">
  <img src="https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/Termux/img/04%20hello%20php%2001%20open%20code%20file%20in%20nano%20editor.png" alt="nano hello.php" width="20%" /><br />
  <small><em>nano hello.php</em></small>
</p>

### 5. 📝 Coding your first PHP program
Good programming practice (usually taken care by IDE, if not then: )
* Open close block of code then start coding inbetween. 
* Indent blocks of code, **even** if not part of syntax. Entire program should not begin on same column.
* Open and close parentheses **()**, braces **{}** or curly brackets, and brackets **[]** square brackets, and only then code expression inbetween. You may never get missing paranthesis syntax errors.
* Do not miss out on semi colon **;** if part of syntax

<p align="center">
  <img src="https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/Termux/img/04%20hello%20php%2002%20outer%20php%20block.png" alt="outer php block" width="20%" /> &nbsp;&nbsp;&nbsp;&nbsp;
  <img src="https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/Termux/img/04%20hello%20php%2003%20echo.png" alt="echo" width="20%" /> &nbsp;&nbsp;&nbsp;&nbsp;
  <img src="https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/Termux/img/04%20hello%20php%2004%20echo%20hello%20world.png" alt="echo hello world" width="20%" />
</p>

### 6. Write to file
Save code using option of control O , ctrl O , and press enter ↵ 
> [!CAUTION]
> It is **alphabet** O and **not** digit 0
<p align="center">
  <img src="https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/Termux/img/04%20hello%20php%2005%20write%20code%20to%20file.png" alt="save code" width="20%" /> &nbsp;&nbsp;&nbsp;&nbsp; 
  <img src="https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/Termux/img/04%20hello%20php%2006%20save%20code.png" alt="exit nano editor" width="20%" />
</p>

### 7. Exit Nano editor
Exit Nano editor and return to the command line, using option of control and x , ctrl x

### 8. 🚀 Running your program, interpret code
PHP is interpreted and no executable is generated. Run program using, php program.php: 
```
php hello.php
```
<p align="center">
  <img src="https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/Termux/img/04%20hello%20php%2007%20interpret%20code.png" alt="run code" width="20%" /><br />
  <small><em>run code</em></small> 
</p>

### 9. Output
<p align="center">
  <img src="https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/Termux/img/04%20hello%20php%2008%20output.png" alt="output" width="20%" /><br />
  <small><em>output</em></small> 
</p>

Similar setup steps can be followed to code in C, C++, Java, or Pyhton.

## 💡 Unsaid requirements: 
* Memory management, pause/disable other heavy system/mobile processor and ram using processes/apps. Pause apps like Facebook, Instagram, YouTube, Maps, enable after
* Internet connection required to download termux app, and run apt install (or also installing python packages), but **after** setup/install, Internet connection is **not required**

## 🌟 Some motivation: 
[Centrifuge and microscope on paper cutout](https://www.youtube.com/watch?v=Qf-D1Upn-KU)


