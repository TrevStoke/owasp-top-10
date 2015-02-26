<?php
/**
 * Created by PhpStorm.
 * User: trevor
 * Date: 25/02/15
 * Time: 13:38
 */
?>

<div class="jumbotron">
    <h1>OWASP Top 10</h1>
    <p class="lead">A collection of PHP scripts demonstrating the security problems in the <a href="https://www.owasp.org/index.php/Top_10_2013-Top_10">OWASP Top 10 2013</a>.</p>
</div>
<table class="table table-striped">
    <tbody>
    <tr>
        <td><a href="/injection">Injection</a></td>
        <td>Injection flaws, such as SQL, OS, and LDAP injection occur when untrusted data is sent to an interpreter as part of a command or query. The attacker&apos;s hostile data can trick the interpreter into executing unintended commands or accessing data without proper authorisation.</td>
    </tr>
    <tr>
        <td>Broken Authentication and Session Management</td>
        <td>Application functions related to authentication and session management are often not implemented correctly, allowing attackers to compromise passwords, keys, or session tokens, or to exploit other implementation flaws to assume other users&apos; identities.</td>
    </tr>
    <tr>
        <td><a href="/cross-site-scripting">Cross-Site Scripting (XSS)</a></td>
        <td>XSS flaws occur whenever an application takes untrusted data and sends it to a web browser without proper validation or escaping. XSS allows attackers to execute scripts in the victim’s browser which can hijack user sessions, deface web sites, or redirect the user to malicious sites.</td>
    </tr>
    <tr>
        <td>Insecure Direct Object References</td>
        <td>A direct object reference occurs when a developer exposes a reference to an internal implementation object, such as a file, directory, or database key. Without an access control check or other protection, attackers can manipulate these references to access unauthorized data.</td>
    </tr>
    <tr>
        <td><a href="/security-misconfiguration">Security Misconfiguration</a></td>
        <td>Good security requires having a secure configuration defined and deployed for the application, frameworks, application server, web server, database server, and platform. Secure settings should be defined, implemented, and maintained, as defaults are often insecure. Additionally, software should be kept up to date.</td>
    </tr>
    <tr>
        <td>Sensitive Data Exposure</td>
        <td>Many web applications do not properly protect sensitive data, such as credit cards, tax IDs, and authentication credentials. Attackers may steal or modify such weakly protected data to conduct credit card fraud, identity theft, or other crimes. Sensitive data deserves extra protection such as encryption at rest or in transit, as well as special precautions when exchanged with the browser.</td>
    </tr>
    <tr>
        <td>Missing Function-Level Access Control</td>
        <td>Most web applications verify function level access rights before making that functionality visible in the UI. However, applications need to perform the same access control checks on the server when each function is accessed. If requests are not verified, attackers will be able to forge requests in order to access functionality without proper authorisation.</td>
    </tr>
    <tr>
        <td>Cross-Site Request Forgery (CSRF)</td>
        <td>A CSRF attack forces a logged-on victim’s browser to send a forged HTTP request, including the victim’s session cookie and any other automatically included authentication information, to a vulnerable web application. This allows the attacker to force the victim’s browser to generate requests the vulnerable application thinks are legitimate requests from the victim.</td>
    </tr>
    <tr>
        <td>Using Components with Known Vulnerabilities</td>
        <td>Components, such as libraries, frameworks, and other software modules, almost always run with full privileges. If a vulnerable component is exploited, such an attack can facilitate serious data loss or server takeover. Applications using components with known vulnerabilities may undermine application defenses and enable a range of possible attacks and impacts.</td>
    </tr>
    <tr>
        <td><a href="/unvalidated-forwards-and-redirects">Unvalidated Forwards and Redirects</a></td>
        <td>Web applications frequently redirect and forward users to other pages and websites, and use untrusted data to determine the destination pages. Without proper validation, attackers can redirect victims to phishing or malware sites, or use forwards to access unauthorized pages.</td>
    </tr>
    </tbody>
</table>