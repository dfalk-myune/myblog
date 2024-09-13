Assignment 3 COSC360

GITHUB URL:
https://github.com/dfalk-myune/myblog/tree/assignment3

TO SEED:
FULL SEED (3 users with 3 posts each, and 1 admin if none present):
php artisan db:seed

PARTIAL SEED (add admin if one doesn't exist):
php artisan db:seed --class=AdminUserSeeder



TO RUN:
terminal 1: php artisan serve
terminal 2: npm run dev
Open the browser then Register or login with hard coded Admin.
Initial hardcoded admin:
 login: Bob@example.com
 password: pete
Admin users are taken to Admin Dashboard.
Regular users are taken to Blog Posts (User).


APROACH: 
Existing basic blog application from assessment 1 was enhanced.
Laravel UI was installed with authentification scaffolding.
Middleware was created (AdminMiddleware)and used to protect certain 
routes that aren't admin.
UserControllers and PostControllers were created.
All relevant routes in web.php were setup with appropriate prefixes.
Full CRUD were established for User and Posts for admin users.
Roles were assigned to users (admin,author,user). These can be adjusted 
by admin. 


PROBLEMS:
MongoDB was troublesome to setup and the existing database was retained.
UPDATE: MongoDB was added (in place of mysql) on 20/8/24
Bootstrap was similarly troublesome to setup and in the end the system
was left with simple blade views.

TESTING:

Extensive and exhaustive testing was carried out for admin CRUD functions,
including both users and posts.

1) Deletion, edit, creation and update of posts were successful for admin.
2) Deletion, edit, creation and update of users were successful for admin.
This included new users and changing the user's 'role'.
No changes to an existing user's password was programmed.
3) pathways for admin were tested for non-admin users. The middleware was 
successful in preventing unauthorised access.
4) changing an admin user to non-admin was successful and the user was 
shifted to the regular blog post section.

