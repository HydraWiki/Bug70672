## Bug70672
MySystemMessages is an extension to MediaWiki that serves as a better fix for the security issue presented by [bug 70672](https://bugzilla.wikimedia.org/show_bug.cgi?id=70672).


### Rationale
Bug 70672 fixes a security hole introduced by allowing JavaScript in CSS in the MediaWiki namespace. It does this by breaking the functionality of loading CSS when on the "Special:UserLogin" and "Special:Preferences" pages. This also means that any custom styles are not loaded. To the end user it causes confusion that they may have been maliciously redirected to a different site to enter their username and password. This is an undesirable side effect for the user interface.

This extension rather prevents saving any custom CSS that contains JavaScript imports.


### Compatibility
* PHP 5.4+
* MediaWiki 1.17+


### Installation
(1) Obtain the code from [GitHub](https://github.com/Alexia/Bug70672)  
(2) Extract the files in a directory called ``Bug70672`` in your ``extensions/`` folder.  
(3) Add the following code at the bottom of your "LocalSettings.php" file:  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;``require_once "$IP/extensions/Bug70672/Bug70672.php";``  
(4) Go to "Special:Version" on your wiki to verify that the extension is successfully installed.  
(5) Done.
