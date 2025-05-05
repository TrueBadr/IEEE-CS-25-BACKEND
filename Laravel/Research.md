# Request Lifecycle (Laravel)
- **What is the Kernel?**  
    The Kernel is responsible for handling all incoming requests to the application, whether HTTP requests or Console (CLI) commands.
- **Types of Kernels in Laravel:**
    - **HTTP Kernel:**
        - Handles requests from the web (like visiting a URL).
        - Defined in `app/Http/Kernel.php`.
        - Manages middleware stack (authentication, CSRF protection, etc.).
    - **Console Kernel:**
        - Handles Artisan CLI commands.
        - Defined in `app/Console/Kernel.php`.
        - Manages command scheduling and custom command registration.
- **Responsibilities of each Kernel:**
    - **HTTP Kernel:**
        - Receives the incoming HTTP request.
        - Passes it through a middleware pipeline.
        - Routes the request to the appropriate handler.
        - Receives console commands.
        - Executes scheduled tasks or custom Artisan commands
- - - 
# Routing in Laravel
- **What is Routing?**  
    Routing defines how Laravel handles incoming requests to specific URLs.
- **Defining Routes:**  
    You define routes in files like `routes/web.php`.  
    Example:
```PHP
Route::get('/welcome', function () {     return view('welcome'); });
```
- **Request Types:**  
    Available methods:
    - `Route::get()` - for GET requests
    - `Route::post()` - for POST requests
    - `Route::put()`, `Route::delete()`, and others.
- **Route Groups:**  
    Group multiple routes with shared attributes like middleware or prefixes.
- **Route Parameters:**  
    You can pass variables inside URLs:
```PHP
	Route::get('/user/{id}', function ($id) {     return "User ID is " . $id; });
```


- - - - 
# Facades
- **Facade?**  
    Facades in Laravel provide a "static-like" interface to services in the application's service container.
- **Why use Facades?**  
    They simplify code writing and allow accessing services easily without manually creating instances.
- **How do Facades work?**  
    Behind the scenes, a Facade delegates calls to an object in the service container. actually uses the cache service.
- **Creating a Custom Facade:**
    - Create a new service.
    - Bind it into the service container.
    - Implement the `getFacadeAccessor` method to define the binding.
- **Swapping Facades with Real Services:**  
    You can replace Facades with dependency injection for better testing and flexibility.
- **Testing with Facades:**  
    Laravel allows easy mocking of Facades using the `shouldReceive` method.

- - - - 
# Blade Templates
- Blade is the simple, yet powerful templating engine that is included with Laravel. Unlike some PHP templating engines, Blade does not restrict you from using plain PHP code in your templates. In fact, all Blade templates are compiled into plain PHP code and cached until they are modified, meaning Blade adds essentially zero overhead to your application. Blade template files use the `.blade.php` file extension and are typically stored in the `resources/views` directory.
- Blade views may be returned from routes or controllers using the global `view` helper. Of course, as mentioned in the documentation on views, data may be passed to the Blade view using the `view` helper's second argument:
- - -- 
# ORM
- An **Object-Relational Mapper(ORM)** is a tool that bridges the gap between an application’s object-oriented programming language and a relational database. It allows developers to interact with the database using high-level programming abstractions rather than writing raw SQL queries. In essence, an ORM maps objects in code (such as classes and attributes) to database tables and columns, enabling developers to work with data as if they were working with native objects rather than rows and tables.
- The primary purpose of an ORM is to simplify database interactions by providing an abstraction layer that converts data between the application’s object model and the relational model of a database. This allows developers to perform common database operations — such as creating, reading, updating, and deleting records (CRUD operations) — using familiar programming language constructs
- - - - - 
# Eloquent: Relationships
- Database tables are often related to one another. For example, a blog post may have many comments or an order could be related to the user who placed it. Eloquent makes managing and working with these relationships easy, and supports a variety of common relationships: (One to One , One to Many , Many to Many)
- Eloquent relationships are defined as methods on your Eloquent model classes. Since relationships also serve as powerful query builders, defining relationships as methods provides powerful method chaining and querying capabilities. For example, we may chain additional query constraints on this `posts` relationship:
- - -- - - 
#  Understanding Sync, Attach and Detach in Laravel: Managing Relationships with Eloquent
- In Laravel, the Eloquent ORM (Object-Relational Mapping) provides a powerful way to interact with our database tables. When working with relationships in Eloquent, we will often come across three essential methods: `sync`, `attach`, and `detach`. These methods are crucial for managing the relationships between models in our application.
	1. **attach**: Adding Records to a Many-to-Many Relationship
		- The `attach` method is primarily used in many-to-many relationships to add records to the pivot table that connects two models.
	2. **detach**: Removing Records from a Many-to-Many Relationship
		- Conversely, the `detach` method allows we to remove records from a many-to-many relationship's pivot table.
	3. **sync**: Syncing Records in a Many-to-Many Relationship
		- The `sync` method is a powerful way to synchronize the records in a many-to-many relationship. It takes an array of related model IDs as its argument and ensures that the pivot table contains only those records.
- - - - 
# N+1 Query Problem in Laravel: Causes, Effects, and Solutions
- The N+1 query problem is a term that describes an inefficient way of database querying when our application produces a query for every related model. The name comes from the fact that we execute one query to load the parent model and then N queries to load each related model, where N is the number of parent models.
- The main technique to solve N+1 query problem is called eager loading, which means loading the related models upfront, before looping through them. Laravel allows us to specify which relationships should be eager loaded using the with() method on the query builder.
- - - - - 
# `References`
[Request Lifecycle](https://laravel.com/docs/12.x/lifecycle#http-console-kernels)<br>
[Routing in Laravel](https://laravel.com/docs/12.x/routing)<br>
[Facades in Laravel](https://laravel.com/docs/11.x/facades)<br>
[Blade Templates](https://laravel.com/docs/12.x/blade)<br>
[ORM](https://medium.com/@karthickrajaraja424/what-is-the-purpose-of-an-orm-and-what-are-its-advantages-ae3882e9e91e)<br>
[Eloquent: Relationships](https://laravel.com/docs/11.x/eloquent-relationships)<br>
[Understanding Sync, Attach and Detach in Laravel: Managing Relationships with Eloquent](https://medium.com/@rajvir.ahmed.shuvo/understanding-sync-attach-and-detach-in-laravel-managing-relationships-with-eloquent-394a7cf7fabd)<br>
[N+1 Query Problem in Laravel: Causes, Effects, and Solutions](https://medium.com/@moumenalisawe/n-1-query-problem-in-laravel-causes-effects-and-solutions-740cefa44306)<br>

