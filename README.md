# PHP-Programming-BAIL358D

PHP (PHP: Hypertext Preprocessor, started as Personal Home Page, by Rasmus Lerdorf) lab programs, output templates, and documentation for the **BAIL358D** course.

Using **gedit** to code, **Apache** daemon and **PHP** to run programs, on **Ubuntu**(Linux).

---

## 📌 Table of contents
* [Initial setup](#-initial-setup)
* or, [Code and run on smartphone app](#-code-and-run-on-mobile-termux-app)
* [General instructions](#-general-instructions)
* [Lab Programs](#-lab-programs)
* [Output templates](#-output-templates)
* [Is it still used](#few-usage-examples)
  
---

## 🛠 Initial setup
Run following on terminal to:

> Shortcut to open terminal, press following three keyboard keys together: Control Alternate T

> **ctrl** &nbsp;&nbsp; **alt** &nbsp;&nbsp; **t**

### 1. Update system packages
It is good practice to update your system before starting a new setup. 
> [!IMPORTANT]
> Do not forget to press **enter** **↵** after typing or copy pasting command[s]
```
sudo apt update && sudo apt upgrade -y
```
### 2. Install development tools and editor
Install essential compilers and the gedit text editor.
```
sudo apt install build-essential gedit -y
```
### 3. Install Apache web server
```
sudo apt install apache2 -y
```
* **Verification**: Open Firefox and visit `http://localhost`, the default Apache home page should be displayed.
### 4. Configure web directory permissions 
```
sudo chmod 777 -R /var/www/html
```
> [!CAUTION]
> **Safety warning**: Be certain about your program logic. Avoid including actions that cannot be undone, such as rm -rf on system directories.

### 5. Install PHP and Apache module 
This allows Apache to process PHP files. 
```
sudo apt install php libapache2-mod-php -y
```
* **Verification**: Run `php -v` or `php -r "phpinfo();"` in terminal.

## 🛠 Code and run on mobile Termux app

> [!TIP]
> Not to worry, if no access to desktop/laptop other than lab , if you have a smartphone, then ≈ small screen desktop/laptop experience to code, please check: [Termux](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/Termux/Termux.md)


## 📜 General instructions
Guidelines on coding standards, common errors, and debugging.
> [!IMPORTANT]
> Source code PDF ( Portable Document Format ) version, so that syntax color code is clearly visible

| Instructions in ↓ as → | PDF | PHP |
| --- | --- | --- |
| English |  [📄](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/general%20instructions/0_1_general_instructions_en_php.pdf) |  [📄](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/general%20instructions/0_1_general_instructions_en.php) |
| ಕನ್ನಡ | [📄](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/general%20instructions/0_2_general_instructions_kn_php.pdf) | [📄](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/general%20instructions/0_2_general_instructions_kn.php) |
| Pending translations in: मराठी , हिन्दी |

## 🧪 Lab programs

| Program | Description | One step <br/> at a time | Source code | Background <br/> math |
| --- | --- | --- | --- | --- |
| 1 a | Area of triangle and rectangle |  |  📄 [PDF](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code%20as%20pdf/1a_area_php.pdf) \| [PHP](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code/1a_area.php) | |
| 1 b | Compound interest |  | 📄 [PDF](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code%20as%20pdf/1b_ci_php.pdf) \| [PHP](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code/1b_ci.php) | |
| 2 | String concatenation |  |  📄 [PDF](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code%20as%20pdf/2_str_concat_php.pdf) \| [PHP](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code/2_str_concat.php) | |
| 3 a | Check odd or even, divisibility, <br/> and square of |  | 📄 [PDF](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code%20as%20pdf/3a_odd_divisible_square_php.pdf) \| [PHP](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code/3a_odd_divisible_square.php) | |
| 3 b | Roots of quadratic equation |  | 📄 [PDF](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code%20as%20pdf/3b_roots_php.pdf) \| [PHP](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code/3b_roots.php) | |
| 8 | Search word, in file, <br/> print frequency |  | 📄 [PDF](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code%20as%20pdf/8_1_search_word_html.pdf) \| [HTML](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code/8_1_search_word.html)  <br /> 📄 [PDF](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code%20as%20pdf/8_2_print_freq_php.pdf) \| [PHP](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code/8_2_print_freq.php) | |
| 10 | Employee class and object |  | 📄 [PDF](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code%20as%20pdf/10_emp_class_php.pdf) \| [PHP](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code/10_emp_class.php) | |
| 12 | Read and display <br/> HTML form data |  | 📄 [PDF](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code%20as%20pdf/12_1_html_form_html.pdf) \| [HTML](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code/12_1_html_form.html) <br /> 📄 [PDF](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code%20as%20pdf/12_2_disp_user_input_php.pdf) \| [PHP](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/source%20code/12_2_disp_user_input.php) | |

## 📋 Output templates
Templates for lab results, fill out details and include your 

* PHP code in: 📄 [PDF](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/output%20templates/0_3_output_template_php.pdf) | [PHP](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/output%20templates/output_template.php)
* HTML form markup in: 📄 [PDF](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/output%20templates/0_3_output_template_html.pdf) | [HTML](https://github.com/erahulkulkarni/PHP-Programming-BAIL358D/blob/main/output%20templates/output_template.html)

## Few usage examples
* VTU ( [Visvesvaraya Technological University](https://vtu.ac.in/), `https://vtu.ac.in/xmlrpc.php` )
* Wikipedia ( [MediaWiki](https://en.wikipedia.org/wiki/MediaWiki) )
* Facebook ( [HHVM](https://github.com/facebook/hhvm/blob/master/LICENSE.PHP) earlier version )


🌟 ( Other helpful website: ) Visual Debugger for Python, Java, C, C++, and JavaScript: [Python Tutor](https://pythontutor.com)
