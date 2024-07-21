Assignment 1 COSC360

GITHUB URL:
https://github.com/dfalk-myune/myblog

TO SEED:
php artisan db:seed

TO RUN:
php artisan serve

TO RUN TESTS:
php artisan test

APROACH: 

Created a database, defined routes, created a model , created a factory and seeder, created controllers, created blade views, created unit tests.

PROBLEMS:

1) Dependencies are not automatically added (when using post eloquent 'App\...' is not added). Similary, there are no links when clicking on elements with code (as was demonstrated in the lectures). Attempts to add the appropriate extension in VSCCODE failed to improve the situation. Unsure which extension is neccessary to achieve this.

2) Git was unable to push changes to github using the command line. Github desktop was needed in order to complete the assignment. The error message after entering the password (prompted by the push) was:

 "remote: Support for password authentication was removed on August 13, 2021.
remote: Please see https://docs.github.com/get-started/getting-started-with-git/about-remote-repositories#cloning-with-https-urls for information on currently recommended modes of authentication.
fatal: Authentication failed for 'https://github.com/dfalk-myune/myblog.git/'" 

FEATURES:
1) Full CRUD functionality.

2) Auto redirect from home address to /posts.

3) The edit option has the data preloaded in a separate view.

4) The delete and edit return back to post view when finished.
