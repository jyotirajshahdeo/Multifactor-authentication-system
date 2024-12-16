# Multifactor-authentication-system
This project combines biometric authentication and a multi-factor login system to enhance user security. The application implements:

Biometric Authentication (WebAuthn):

Users can register their biometric credentials (e.g., fingerprint or facial recognition) and use them for secure authentication.
Traditional Login:

Includes a username and password-based login system for fallback or initial authentication.
Multi-Factor Authentication:

After username/password verification, users may be redirected to biometric or additional PIN verification for enhanced security.
Files in the Project:
biometric_verification.html:

Implements biometric authentication using WebAuthn.
Features:
Biometric registration and authentication buttons.
Uses JavaScript to handle biometric registration and authentication logic.
Stores credential IDs locally (can be adapted for server-side storage).
Redirects users to bank_account_dashboard.html upon successful authentication.
username.html:

Provides a traditional login interface with username and password fields.
Features:
Simple and responsive design.
Form submission to pin_verification.html for further validation.
verify.php:

Handles backend authentication or other validation tasks (details should be confirmed or customized as per the implementation).
Features:
Biometric Authentication (WebAuthn):

Fast, secure, and user-friendly authentication.
Works with modern browsers that support WebAuthn.
Multi-Factor Authentication:

Enhances security with an additional layer of verification.
User-Friendly Design:

Both interfaces are built with responsive and accessible UI/UX principles.
Setup Instructions:
Requirements:

A modern web browser with WebAuthn support.
A local server (e.g., XAMPP, WAMP, or Python's HTTP server) for running .html and .php files.
Steps to Run:

Place all files (biometric_verification.html, username.html, verify.php) in the server's document root.
Start the local server.
Open username.html in the browser to begin the login process.
Future Enhancements:
Implement server-side storage for credential IDs and secure user data.
Integrate OTP or email-based multi-factor authentication.
Add session management and logout functionality.
