This Bookstore Powered By [LARAVEL Framewok V5.2](http://laravel.com/)
------------------
# Installation #

Step 1: Clone project by run command in your terminal:
``git clone git://github.com/ayooby/falcon-laravel.git``

Step 2: Run ``` composer update ``` in cloned project to download requirement files.

Step 3: create new ``.env`` file or rename ``.env.example`` file for database setting and etc.

Step 3.5: in terminal run command  ``php artisan key:generate`` to set new key for secure sessions and other encrypted data.

Step 4: Migration. run ``php artisan migrate`` command to create tables in database

Thats it, you successfully install falcon bookstore project.

### Urls ###

List of all books: ``example.dev/books``

PDF file of all books: ``example.dev/books/get/pdf``

Create new book: ``example.dev/books/create``

Edit a  book(id = Book ID): ``example.dev/books/id/edit``

Share on social media(at bottom of details of the book): ``example.dev/books/id``

Create new author: ``example.dev/authors/create``
Create new Genre: ``example.dev/genres/create``

