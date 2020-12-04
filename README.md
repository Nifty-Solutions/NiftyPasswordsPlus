# NiftyPasswordsPlus

This is a module pack by Nifty Solutions for Processwire CMF/CMS (running on PHP 7.2+) that extends the core features for password recovery making them more flexible and easy to use.

## Features

- Can send just the verification code in emails (removing the clickable link), and immediately show the reset verification page. This forces the reset to be completed in the same session it was started from.
- Allow the password reset to be initiated in one session and completed in another. You no longer have to complete the reset from the same browser and tab. There are options to allow you to still require reset completion from the same IP address.
- Prevention of incorrect data entry in the reset initiation step, users are warned if they enter an email in a username field.
- Optional auto-completion of the verification code field in the password reset step. This makes things easier for users as they don't have to copy-and-paste from their email client. Be warned, however, that this can facilitate automated reset attempts.
- Control how long reset links are valid for (sometimes an hour is much too long) and update the text of outgoing emails and reset screens to report the new value.
- Optionally allowing automatic user login following a successful password reset. This is not recommended but is supported. This option is never available to Superusers or users with 2-factor authentication requirements on their accounts. You can additionally limit this to users with specific roles.
- Allows the reset process to require input of the user's Time-based one-time (TOTP) value - if they have TOTP setup on their account. You can also mandate the entry of a valid TOTP in order to complete a password reset. The TOTP field extends ProcessForgotPassword and operates with or without NiftyPasswordsPlus.
- Works by extending the core ProcessForgotPassword module so it works on the Admin login page and your custom LoginRegisterPro pages.

You'll also get access to NiftyHashedTokens in your template and module files - a HMAC-Hashed key-to-value store, providing tamper-detection of the key and controlling how many times it may be accessed in a given period along with IP address checking.

## Pre-Requisites

This requires PHP7.2 or better and a recent copy of Processwire with the ProcessForgotPassword and InputfieldSelect modules installed.
Installation

After purchase you will have access to the latest version of the pack as a single zip file.

**If this is your first Nifty installation:** simply unzip the file in a temporary location and transfer the resulting Nifty folder into the site/modules directory of your site. Then refresh the modules in Processwire and install the NiftyPasswordsPlus module.

**If you already have other Nifty products installed:** unzip the file in a temporary location and look in the Nifty folder you unpacked. Copy any new subdirectories from there into your existing site/modules/Nifty directory. Log in to Processwire, refresh your modules and install NiftyPasswordsPlus.

You will need to acknowledge the disclaimer, enabling the module in order to proceed.

### More details and screenshots available at [gumroad](https://gumroad.com/nifty)
