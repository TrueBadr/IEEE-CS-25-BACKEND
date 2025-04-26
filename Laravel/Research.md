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
- - - - - 
# `References`
[Request Lifecycle](https://laravel.com/docs/12.x/lifecycle#http-console-kernels)<br>
[Routing in Laravel](https://laravel.com/docs/12.x/routing)<br>
[Facades in Laravel](https://laravel.com/docs/11.x/facades)<br>
