# EBookstore Demo

This is a ecommerce bookstore website template.  It is built with Laravel 10, Vue 3, MySQL, and Tailwind.
The reason I call it a template is that it is not for an actual bookstore.  It is a template for a ecommerce website that sells books.  The structure of the website can be used for selling other types of merchandise.  It is a demonstration of what I can do as a web developer.
To view the website, go to https://www.ebookstore-demo.com.

## Features
Features of the website include:
### Users
- User registration, login, and profile management
- Shopping cart functionality for adding, editing, and deleting books
- Checkout and payment processing with PDF invoice generation
- Book browsing by category, search by title/author/ISBN, and adding reviews
### Admin
- Access to book and user databases
- Manage books, categories, and users
- Oversight of orders, reviews, and invoices
- Sending invoice reminders to users
- Monitoring inventory and sales statistics


## Technical Details
### Frontend
The frontend of the website is built with Vue 3 and Tailwind.  The frontend is a single page application (SPA) that communicates with the backend through Inertia.js.
### Frontend Structure
The frontend is divided into the following components:
#### Customer
- App.vue: The main component that contains the router-view.
- Index.vue: The home page of the website.
- About.vue: The about page of the website.
- Contact.vue: The contact page of the website.
- Book.vue: The book listing page of the website.
- BookDetail.vue: The book detail page of the website.
- Cart.vue: The shopping cart page of the website.
- Checkout.vue: The checkout page of the website.
- Customer.vue: The customer profile page of the website.
#### Admin
- Admin.vue: The main component that contains the router-view.
- Index.vue: The home page of the admin dashboard.
- Book.vue: The book listing page of the admin dashboard.
- BookDetail.vue: The book detail page of the admin dashboard.
- BookCreate.vue: The book creation page of the admin dashboard.
- BookEdit.vue: The book editing page of the admin dashboard.
- Category.vue: The category listing page of the admin dashboard.
- CategoryCreate.vue: The category creation page of the admin dashboard.
- CategoryEdit.vue: The category editing page of the admin dashboard.
- Customer.vue: The customer listing page of the admin dashboard.
- CustomerDetail.vue: The customer detail page of the admin dashboard.
- CustomerEdit.vue: The customer editing page of the admin dashboard.
- Order.vue: The order listing page of the admin dashboard.
- OrderDetail.vue: The order detail page of the admin dashboard.
- Review.vue: The review listing page of the admin dashboard.
- ReviewDetail.vue: The review detail page of the admin dashboard.
- ReviewEdit.vue: The review editing page of the admin dashboard.
- Invoice.vue: The invoice listing page of the admin dashboard.
- InvoiceDetail.vue: The invoice detail page of the admin dashboard.
- InvoiceEdit.vue: The invoice editing page of the admin dashboard.

### Backend
The backend of the website is built with Laravel 10 and MySQL.  The backend is a RESTful API that communicates with the frontend through Inertia.js.
### Backend Structure
The backend is divided into the following components:
#### Models
- Book.php: Represents a book.
- WishlistItem.php: Represents a book in a wishlist.
- Wishlist.php: Represents a wishlist.
- OrderItem.php: Represents a book in an order.
- Genre.php: Represents a genre.
- Author.php: Represents an author.
- Review.php: Represents a review.
- BookRating.php: Represents a book rating.
- Order.php: Represents an order.
- Customer.php: Represents a customer.
- Administrative.php: Represents an administrator.
- Order.php: Represents an order.
- Invoice.php: Represents an invoice.

#### Controllers
- BookController.php: Handles requests related to books.
- GenreController.php: Handles requests related to genres.
- CustomerController.php: Handles requests related to customers.
- OrderController.php: Handles requests related to orders.
- ReviewController.php: Handles requests related to reviews.
- OrdersController.php: Handles requests related to orders.
- AdministrativeController.php: Handles requests related to administrators.
- WishlistController.php: Handles requests related to wishlists.
- WishlistItemController.php: Handles requests related to wishlist items.
- BookRatingController.php: Handles requests related to book ratings.
- OrderItemController.php: Handles requests related to order items.
- AuthorController.php: Handles requests related to authors.
- ReviewController.php: Handles requests related to reviews.
- InvoiceController.php: Handles requests related to invoices.

#### Database Structure
##### Books
- book_id (Primary Key): Unique identifier for each book.
- title: Title of the book.
- author_id (Foreign Key): References the author of the book.
- ISBN: International Standard Book Number.
- description: Brief description or synopsis of the book.
- genre_id (Foreign Key): Classification of the book by genre.
- price: Price of the book.
- stock_quantity: Number of available copies in stock.
- publication_date: Date when the book was published.
- image_url: URL or reference to the book cover image.

##### Wishlist_Items
- book_id (Foreign Key): References the book in the wishlist.
- wishlist_item_id (Primary Key): Unique identifier for each wishlist item.
- wishlist_id (Foreign Key): References the wishlist.

##### Wishlists
- wishlist_id (Primary Key): Unique identifier for each wishlist.
- customer_id (Foreign Key): References the customer who owns the wishlist.

##### Order_Items
- order_item_id (Primary Key): Unique identifier for each order item.
- item_price: Price of the book at the time of purchase.
- quantity: Number of copies of the book purchased.
- order_id (Foreign Key): References the order.
- book_id (Foreign Key): References the book.

##### Genres
- genre_id (Primary Key): Unique identifier for each genre.
- genre_name: Name of the genre.

##### Authors
- author_id (Primary Key): Unique identifier for each author.
- author_name: Name of the author.
- bio: Brief biography of the author.
- website: URL or reference to the author`s website.

##### Reviews
- review_id (Primary Key): Unique identifier for each review.
- review_date: Date when the review was posted.
- book_id (Foreign Key): References the book.
- customer_id (Foreign Key): References the customer who posted the review.
- rating: Rating of the book on a scale of 1 to 5.
- review_text: Text of the review.

##### Book_Ratings
- rating_id (Primary Key): Unique identifier for each rating.
- book_id (Foreign Key): References the book.
- customer_id (Foreign Key): References the customer who rated the book.
- rating: Rating of the book on a scale of 1 to 5.

##### Orders
- order_id (Primary Key): Unique identifier for each order.
- total_amount: Total amount of the order.
- customer_id (Foreign Key): References the customer who placed the order.
- order_date: Date when the order was placed.

##### Customers
- email: Email address of the customer.
- customer_id (Primary Key): Unique identifier for each customer.
- first_name: First name of the customer.
- last_name: Last name of the customer.
- password: Password of the customer.
- address: Address of the customer.

##### Administrative
- admin_id (Primary Key): Unique identifier for each administrator.
- username: Username of the administrator.
- password: Password of the administrator.
- permissions: Permissions of the administrator.

##### Invoices
- invoice_id (Primary Key): Unique identifier for each invoice.
- invoice_date: Date when the invoice was generated.
- order_id (Foreign Key): References the order.
- invoice_number: Number of the invoice.
- invoice_due_date: Date when the invoice is due.
- total_amount: Total amount of the invoice.
- status: Status of the invoice.
- customer_id (Foreign Key): References the customer who placed the order.



