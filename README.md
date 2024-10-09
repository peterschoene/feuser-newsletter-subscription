# feuser-newsletter-subscription
(Un-)subscribe form for `tx_mail_newsletter` using `fe_users`.

This extension allows frontend users to subscribe or unsubscribe from newsletters when using the Mail extension by Medieessenz.

## Features

- **Newsletter Subscription:**
  Users can subscribe to the newsletter by providing their first name, last name, and email address. The system will add them to the `fe_users` table and set the `mail_active` flag. If the user prefers HTML emails, the `html_active` flag can also be enabled. If the email already exists in the system, the extension will simply update the `mail_active` flag to `1`.

- **Newsletter Unsubscription:**
  For existing users, unsubscribing is just as simple. If a user was previously subscribed, the `mail_active` flag is set to `0` to indicate unsubscription. For users who registered solely for the newsletter, unsubscribing also sets the `deleted` flag to `1`, ensuring that they are no longer active in the system.

This extension makes managing newsletter subscriptions seamless when paired with the Medieessenz Mail extension.
