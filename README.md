## Bug70672
Bug70672 is an extension to MediaWiki that prevents saving any custom CSS that contains JavaScript imports.


### Rationale
[Bug 70672](https://bugzilla.wikimedia.org/show_bug.cgi?id=70672) fixes a security hole introduced by allowing JavaScript loading via CSS in the MediaWiki namespace. It does this by breaking the functionality of loading CSS when on the "Special:UserLogin" and "Special:Preferences" pages. This also means that any custom styles are not loaded. As a result this causes confusion for the end user who may believe that they may have been maliciously redirected to a different site to enter their username and password. This is an undesirable side effect for the user interface.

This extension rather prevents saving any custom CSS that contains JavaScript imports and thus avoids the security problem from the start.


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
