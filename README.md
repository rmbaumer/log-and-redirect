# Purpose

**Log and Redirect** provides website visitor logging and URL redirection for affiliate links. The logged information is encoded and appended to the affiliate link as a tracking parameter.

Examples for tracking entry page, exit page, and screen width are included in the script. It is possible to add additional metrics as needed.

This solution keeps your traffic data inhouse. While you could use Google Analytics or other 3rd party solutions, there are times when you don’t want Google nosing around your site’s traffic info.

# How it works

The script uses a PHP session to store the entry page, HTTP referer to get the exit page, and a bit of JavaScript to get the device width. When a visitor clicks a call-to-action they are routed through the script, the action’s metrics are logged to CSV, and the visitor is redirected to the appropriate affiliate link with an encoded tracking parameter.  

The csv log enables you to crosscheck the traffic you’re sending with performance reports from Commission Junction or your affiliate platform of choice. The tracking parameter will show up in your platform’s reports and make it easy for you to see what traffic is converting. By default, this script uses ‘sid’ which is the tracking parameter requirement for Commission Junction, but this can be changed to whatever your affiliate platform requires.

# Installation

1.	Upload **forward.php**, **session.php**, **width.js**, and **width.php** to your webserver.
2.	Include **session.php** at the very top of every page where you require tracking.
    1.	In **session.php**, change `yourdomain.tld` to your domain.
3.	Include **width.js** before the closing `</body>` tag.
    1.	**width.js** requires jQuery, so include jQuery at some point before **width.js**
    2.	In **width.js**, make sure the path to **width.php** (on line 5) reflects the correct location on your webserver.
4.	Edit the following in **forward.php**
    1.	Change all occurrences of `yourdomain.tld` to your domain and use the correct protocol (http/https)
    2.	Create a case for each page on your site in the Entry Page and Exit Page tracking section starting at line 4
        1.	Make the `$entryid` & `$exitid` codes unique for each page
    3.	Change the value of `$url` on line 47 to your affiliate link
        1.	Change the `sid=` parameter to whatever is required by your affiliate platform

# Usage

Wherever you have a call-to-action, link to the **forward.php** script instead of using your affiliate link directly.
