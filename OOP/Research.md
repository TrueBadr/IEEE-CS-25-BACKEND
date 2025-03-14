# *who invent OOP and why*
- **Alan Kay** invent the term of Object Oriented Programming at Grad School in 1967 
-  according to Alan Kay, the essential ingredients of OOP are:
	- Message passing
	- Encapsulation
	- Dynamic binding
- why OOP
	1. **Avoiding shared mutable state**
		-  by encapsulating state and isolating other objects from local state changes. The only way to affect another object’s state is to ask (not command) that object to change it by sending a message
	2. **Decoupling**
		- Decoupling objects from each other — the message sender is only loosely coupled to the message receiver, through the messaging API.
	3. **Adaptability and resilience to changes**
- - - - - - - - - 
# *Encapsulation & Abstraction*
- **Abstraction**
	- Abstraction is about focusing on the essentials and ignoring the irrelevant details. It allows programmers to handle complexity by breaking down systems into simpler, more manageable pieces.
	-  Think of abstraction as a high-level summary that highlights what an object does without delving into how it does it.
	- How it Works: In programming, abstraction is achieved using interfaces and abstract classes. These constructs define a blueprint for what methods a class should have, without specifying the actual implementation.
- **Encapsulation**
	- Encapsulation is about bundling data (fields) and methods (functions) that operate on the data into a single unit, typically a class, and restricting direct access to some of the object’s components.
	- This is done to protect the internal state of the object and ensure that it can only be changed in a controlled manner.
	- Encapsulation is implemented by making the fields of a class private and providing public getter and setter methods to access and modify these fields.
- - - - - - - 

# *Inheritance*
- Inheritance is one of the core features of object-oriented programming. It’s a programming procedure that allows you to reuse code by referencing the behaviors and data of an object. In other words, a class that inherits from another class shares all the attributes and methods of the referenced class.
- Types of **Inheritance**
	1. **Single inheritance**(one class inherit from a parent class)
	2. **Multiple inheritance**(one class inherit from more than a class)
	3. **Multilevel inheritance**(A class inherit from B class and B class inherit from C class)
	4. **Hierarchical inheritance**(a lot of child classes inherit from a single parent class)
	5. **Hybrid inheritance**(it involves more than a type from Inheritance)
- - - - -  
# *PHP Interfaces & Polymorphism*
- Interfaces allow you to specify what methods a class should implement.
- Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as polymorphism.
- - - - - - - 
# *PHP Traits*
- Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
- - - - -  - 
# *Late static binding*
- In PHP, programs are saved and then directly run on the browser, the script is executed through a web server and we get the output. We don’t compile PHP programs manually but that does not mean it is never compiled.
- The PHP interpreter does that for you and runs it. So there are two phases, first, compile-time and second run time. During the compile time, the normal variables are replaced with their values but the static keywords are replaced only in the run time. Overriding a property in child class and creating the instance of the child class, so to get the overridden output, the late static binding concept is used by writing static keyword before using the property. Whenever a PHP interpreter gets the request to compile a function. If it sees any static property, then it leaves the property pending for run time and the property gets its value during runtime from the function it is being called. This is called late static binding.
- - - - - - 
# *Using OOP with MySQL (PDO & MySQLi)*
-  **MySQL:** This was the main extension that was designed to help PHP applications send and receive data from the MySQL database. However, use of MySQL has been deprecated and removed as of PHP 7 and its newer versions. This is why it is not recommended for new projects, and that’s the reason why MySQLi and PDO extensions are used more nowadays.
- **MySQLi:** The ‘i’ in MySQLi stands for Improved. Therefore, this is also known as the improved version of MySQL. It has many new features that will be covered later in the article.
- **PDO – PHP Data Objects:** The main advantage of using PDO is that it supports, and provides a uniform method of access to 11 different databases.
- **OOP** with **PDO**
	- PDO is a database abstraction layer that provides a consistent API for interacting with databases. It supports multiple database systems, including MySQL.
	-  **Steps to Use OOP with PDO:**
		1. **Create a Database Connection Class:**
		    - Encapsulate the database connection logic in a class.
		2. **Create a Model Class:**
		    - Define methods to perform CRUD operations.
		3. **Use the Classes in Your Application:**
		    - Instantiate the classes and call their methods.
- **OOP** with **MySQLi**
	- MySQLi is a MySQL-specific extension that provides both procedural and object-oriented interfaces.
	- **Steps to Use OOP with MySQLi:**
		1. **Create a Database Connection Class:**
		    - Encapsulate the database connection logic in a class.
		2. **Create a Model Class:**
			- Define methods to perform CRUD operations.
		3. **Use the Classes in Your Application:**
			- Instantiate the classes and call their methods.
- - - - - -  
# *Factory Pattern Design*
- The Factory Method Design Pattern is a that provides an interface for creating objects in a superclass, allowing subclasses to alter the type of objects that will be created
- This pattern simplifies the object creation process by placing it in a dedicated method, promoting loose coupling between the object creator and the objects themselves.
- This approach enhances flexibility, extensibility, and maintainability, enabling subclasses to implement their own factory methods for creating specific object types.
- - - - - - - 
# *Anonymous classes*
- As the term "anonymous" suggests, it is a class without a (programmer declared) name. The usual practice is to define a class with a certain identifier, so that it can be used repeatedly. The anonymous class, on the other hand is for one-time use only.
- Anonymous classes are useful when simple, one-off objects need to be created.
- - - - - - - 
# *MVC*
- Over the last few years, websites have shifted from simple HTML pages with a bit of CSS to incredibly complex applications with thousands of developers working on them at the same time. To work with these complex web applications developers use different design patterns to lay out their projects, to make the code less complex and easier to work with. The most popular of these patterns is MVC also known as ****Model View Controller.****
- The **MVC (Model View Controller)** framework is an architectural/design pattern that separates an application into three main logical components *Model*, *View*, and *Controller* Each architectural component is built to handle specific development aspects of an application.
 - ![https://media.geeksforgeeks.org/wp-content/uploads/20220224160807/Model1.png]
- *Popular MVC Frameworks*
	Some of the most popular and extensively used MVC frameworks are  Ruby on Rails , Django , CherryPy , Spring MVC , Laravel.
- - - - - 
# `Refrences`
[The Forgotten History of OOP](https://medium.com/javascript-scene/the-forgotten-history-of-oop-88d71b9b2d9f)<br>
[Encapsulation & Abstraction](https://codeint.medium.com/understanding-abstraction-and-encapsulation-the-dynamic-duo-of-object-oriented-programming-d2fd11caf315)<br>
[Inheritance](https://www.codecademy.com/resources/blog/what-is-inheritance/)<br>
[PHP Interfaces and Polymorphism](https://www.w3schools.com/php/php_oop_interfaces.asp)<br>
[PHP Traits](https://www.w3schools.com/php/php_oop_traits.asp)<br>
[Late Static Bindings in PHP](https://www.geeksforgeeks.org/what-is-late-static-bindings-in-php/)<br>
[Using OOP with MySQL , MySQLi , PDO (i used Deepseek a little bit)](https://www.geeksforgeeks.org/what-is-the-difference-between-mysql-mysqli-and-pdo/)<br>
[Factory Pattern Design](https://www.geeksforgeeks.org/factory-method-for-designing-pattern/)<br>
[Anonymous Classes](https://www.tutorialspoint.com/php/php_anonymous_classes.htm)<br>
[MVC Introduction and Architecture](https://www.geeksforgeeks.org/mvc-framework-introduction/)<br>
- - - - - 
