Assignment 3 COSC360

GITHUB URL:
https://github.com/dfalk-myune/myblog/tree/assignment3

TO SEED:
FULL SEED (3 users with 3 posts each, and 1 admin if none present):
php artisan db:seed





TO RUN:

Copy .env.example into .env
Run the following commands:

composer install
npm install
npm run build
php artisan migrate
php artisan migrate:refresh
php artsian db:seed
php artisan serve

=> Go to the address specified


At this point, it is possible to either run the frontend program via accessing 
the API, or use the old assignment 2 format.

The old assignment 2 format is as follows:
Open the browser then Register or login with hard coded Admin.
Initial hardcoded admin:
 login: Bob@example.com
 password: pete
Admin users are taken to Admin Dashboard.
Regular users are taken to their own Blog Posts (User).


APROACH: 
Existing basic blog application from assessment 2 was enhanced, and now uses mongodb.
API is for posts, post/{_id}, and users.
Using these it is possible to get posts and the details of the users who posted them.

CHALLENGES:
Getting Mongodb to finally work was quite tricky.
 

 
TESTING:
testing done using Postman
1.
GET http://127.0.0.1:8000/api/posts/66c44a4546de64122201bf93

result: 
{
    "data": {
        "_id": "66c44a4546de64122201bf93",
        "title": "Fugiat qui molestiae natus dicta nobis.",
        "content": "Laboriosam sit in excepturi sit voluptatum. Nisi laudantium est et soluta et dignissimos iste. Cum optio iste nemo minus rerum hic eveniet.",
        "user_id": "66c44a4546de64122201bf92",
        "updated_at": "2024-08-20T07:48:21.185000Z",
        "created_at": "2024-08-20T07:48:21.185000Z"
    },
    "message": "success"
}

2. GET http://127.0.0.1:8000/api/posts/

{
    "data": [
        {
            "_id": "66c44a4546de64122201bf93",
            "title": "Fugiat qui molestiae natus dicta nobis.",
            "content": "Laboriosam sit in excepturi sit voluptatum. Nisi laudantium est et soluta et dignissimos iste. Cum optio iste nemo minus rerum hic eveniet.",
            "user_id": "66c44a4546de64122201bf92",
            "updated_at": "2024-08-20T07:48:21.185000Z",
            "created_at": "2024-08-20T07:48:21.185000Z"
        },
        {
            "_id": "66c44a4546de64122201bf94",
            "title": "Et voluptas quos omnis ratione omnis id.",
            "content": "Necessitatibus sit sequi ipsa alias. Quos in quod quisquam nemo optio aliquam. Eveniet sequi reprehenderit omnis et voluptatem. Delectus quisquam exercitationem voluptatem reiciendis omnis.",
            "user_id": "66c44a4546de64122201bf92",
            "updated_at": "2024-08-20T07:48:21.189000Z",
            "created_at": "2024-08-20T07:48:21.189000Z"
        },
        {
            "_id": "66c44a4546de64122201bf98",
            "title": "Repellat praesentium hic ut.",
            "content": "Ipsum voluptatibus dolorem sequi voluptate aperiam saepe consequatur. Neque qui neque aspernatur corporis. Ea soluta repudiandae totam itaque.",
            "user_id": "66c44a4546de64122201bf96",
            "updated_at": "2024-08-20T07:48:21.195000Z",
            "created_at": "2024-08-20T07:48:21.195000Z"
        },
        {
            "_id": "66c44a4546de64122201bf9d",
            "title": "Nemo labore beatae accusamus nihil animi ad.",
            "content": "Expedita eligendi sit molestias repellendus. Minima ducimus culpa blanditiis quam deserunt doloremque doloremque. Dolorem qui et excepturi et aut delectus est.",
            "user_id": "66c44a4546de64122201bf9a",
            "updated_at": "2024-08-20T07:48:21.202000Z",
            "created_at": "2024-08-20T07:48:21.202000Z"
        },
        {
            "_id": "66c44c3d8e2b51cc8709472d",
            "title": "Beatae dolor totam magni aspernatur sit aut.",
            "content": "Odit quibusdam nemo aut occaecati accusamus soluta doloremque. Et magni perspiciatis maxime earum dolorem voluptas. Nam reiciendis sint molestiae dolor natus minus. Dolorem ipsa dolor nesciunt doloremque.",
            "user_id": "66c44c3d8e2b51cc8709472a",
            "updated_at": "2024-08-20T07:56:45.407000Z",
            "created_at": "2024-08-20T07:56:45.407000Z"
        },
        {
            "_id": "66e4128c2273b67f690173e3",
            "title": "Last post",
            "content": "blah.",
            "user_id": "66e40d3f2273b67f690173e2",
            "updated_at": "2024-09-13T10:23:08.771000Z",
            "created_at": "2024-09-13T10:23:08.771000Z"
        },
        {
            "_id": "66e4a8172273b67f690173e7",
            "title": "works",
            "content": "good.",
            "user_id": "66e4a7d32273b67f690173e6",
            "updated_at": "2024-09-13T21:01:11.955000Z",
            "created_at": "2024-09-13T21:01:11.955000Z"
        },
        {
            "_id": "66e4b09bafe06bc20a0a3e95",
            "title": "Eius sit inventore cupiditate at hic rem.",
            "content": "Dolor qui debitis modi quae nostrum at incidunt qui. Autem repudiandae illum dolores repudiandae facere. Et ullam rem quasi itaque qui maxime doloribus. Pariatur vel provident sit quam atque voluptas voluptatem molestiae.",
            "user_id": "66e4b09aafe06bc20a0a3e92",
            "updated_at": "2024-09-13T21:37:31.015000Z",
            "created_at": "2024-09-13T21:37:31.015000Z"
        },
        {
            "_id": "66e4b09bafe06bc20a0a3e9b",
            "title": "Ut veritatis non quia similique.",
            "content": "Et voluptatibus aspernatur a autem voluptatibus quod ut. Inventore veniam voluptatum iusto perferendis. Rem nobis fugit error ab aut est.",
            "user_id": "66e4b09bafe06bc20a0a3e9a",
            "updated_at": "2024-09-13T21:37:31.025000Z",
            "created_at": "2024-09-13T21:37:31.025000Z"
        },
        {
            "_id": "66e4b09bafe06bc20a0a3e9c",
            "title": "Ducimus nobis et modi rerum libero debitis assumenda alias.",
            "content": "Libero aliquam perferendis debitis totam. Tempore sit quas voluptatem molestiae veniam. In dolorum voluptate ea expedita at aliquam praesentium. Voluptas aliquid et corporis ad omnis natus perferendis.",
            "user_id": "66e4b09bafe06bc20a0a3e9a",
            "updated_at": "2024-09-13T21:37:31.026000Z",
            "created_at": "2024-09-13T21:37:31.026000Z"
        }
    ],
    "message": "success"
}
