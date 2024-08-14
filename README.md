
# Product system

This is a small system that contains pages to show products from two mariadbs. I built this project as a task for xs4arabia upon request.



## Pages

### Home Screen
you can access this page once you run the main directory of the web server.

this page has two options. the first, will take you to product list page of task one. the seconed, will take you to customer list page of task two


### Product List Page
you can access this page through directory /products

this page will list all products in the database with the accessbilty to add, edit, delete and view all details of the product.

### Add Product Page
you can access this page through directory /products/create

This page will make you able to add new product to database.

### View Product Page
you can access this page through directory /products/{{product_id}}

This page will make you able to view product with id {{product_id}} to database.

### Ediit Product Page
you can access this page through directory /products/{{product_id}}/edit

This page will make you able to edit product with id {{product_id}} to database.

### Customer List Page
you can access this page through directory /customers

this page will list all customers in the database with the accessbilty to highest spending customers and customer with most orders.

### Highest Spending Customer Page
you can access this page through directory /customers/highest-spending

this page will display the highest customer spend name and total amount spent

### Customer with Most Orders Page
you can access this page through directory /customers/most-orders

this page will display the customer with most orders name and their total order amount


## Installation

Use db (1).sql file in to import to your mariadb server.


Make copy of .env.example then rename it to .env


Update your .env to be able to connect to database server
