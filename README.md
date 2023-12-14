# Mail Test

### Setup

- Clone the repo
- Copy .env.example to .env
- Set mail credentials in .env
- Set your environment to production in .env
- sail up -d
- sail composer install
- sail npm install
- sail npm run build

### Usage
- Visit / and provide an email address to send an email
- Visit /preview to preview what the mail should look like


### Issues

- If run with `npm run dev` (and with the environment "local") the mail has no formatting applied to it.
- If run in production with build, it appears to be unable to access "localhost" when retrieving the CSS file.

### Notes

- You can solve the mail issue by using the `motomedialab/laravel-vite-helper` package to reference the CSS file directly, using a . in front
  - `<link href=".{{ vite('resources/css/mail.css', 'build', true, false) }}" rel="stylesheet">`
- The `tailwind-mail.config.js` file has a lot of core plugins disabled, so that it presents the emails correctly
  - See https://codedrift.com/thunked/tailwind-css-for-email 
