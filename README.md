# assign-authentication

### There are 3 folders, app, assets and public_html.

### App folder has the config.php for database connection credentials, register.php for handling user registration & script.js for javascript.
### Assets has .css files for styling.
### Public_html folder has webpage files.

## Home.php
### Home.php is the student details page. Users cannot access it without being authenticated first.

## Register.php
### Registration page for new users. Entering the same user name will return an error saying duplicate user already exists, therefore need to be entered new name
### Password requirement is set to minimum length of 8.
### There are input validations in place to avoid harmful XSS (cross-site scripting) being inputted.

## Index.php 
### This is the login page. User will be redirected to this page after successfully registering. Errors will pop up if there is incorrect credentials entered.

## Process_form.php
### After users is redirected to home.php after logging in, users can enter student details. The info from home.php form will be submitted through this page and entered into the database. There are input validations using HTML, Javascript & filter_var functions in place to prevent XSS.

