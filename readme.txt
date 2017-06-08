SimpleContactForm by Ruben Winkler (v. 1.0; Last Update: 06-08-2017)

About

This is a really simple contact form with just the basic features. 
It provides three inputs for the user: E-Mail Address, Subject and Message. All of them are required.

How it works

The user has to enter his E-Mail Address, a Subject and a Message and then click on the Submit-Button.
The entered values are then going to be validated using JavaScript/jQuery. To be exact, the entered E-Mail Address is going to be 
validated and the other inputs are checked to see if they are not empty. If the validation fails, there will be an error message displayed. 
If it passes the form will be submitted and the entered values will be handed over to a PHP-Script. The PHP-Script will try sending the
E-Mail via a PHPMailer-Script (see: https://github.com/PHPMailer/PHPMailer). If the sending fails, there will be an error message displayed. 
If it succedes there will be a success message displayed. And that's it - really simple!

How to use it

1. Download the SimpleContactForm Folder (or the whole project, but the gitfiles are not needed).
2. Open the downloaded SimpleContactForm folder and open the PHPMailer folder.
3. Decide if you want to use a Gmail E-Mail Address or another E-Mail provider to send your E-Mails.
4. If you want to use Gmail open the "send-email-gmail.php" file. If you want to use another provider open the "send-email.php" file.
5. If you are going with Gmail simply enter your E-Mail Address and your Password where it tells you to.
6. If you are going with another provider change the values so that they suite your providers needs. (If you don't know what values to 
enter, try to find info on your providers website. In most cases you will find what you are looking for.)
7. Save the changes you made.
8. Start your local server (e.g. xxamp) or upload the SimpleContactForm folder to your server.
9. Open your browser of choice and navigate to the "contact-form.php" file.
10. Try if it is working!

License
No licensing. Feel free to use the project for your own projects. Just drop me a quick message! =)

If you have any questions or run into problems feel free to ask!

