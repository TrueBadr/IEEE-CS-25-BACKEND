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
# *PHP Interfaces & Polymorphism*
- Interfaces allow you to specify what methods a class should implement.
- Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as polymorphism.
# *PHP Traits*
- Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
# `Refrences`
[The Forgotten History of OOP](https://medium.com/javascript-scene/the-forgotten-history-of-oop-88d71b9b2d9f)<br>
[Encapsulation & Abstraction](https://codeint.medium.com/understanding-abstraction-and-encapsulation-the-dynamic-duo-of-object-oriented-programming-d2fd11caf315)<br>
[Inheritance](https://www.codecademy.com/resources/blog/what-is-inheritance/)<br>
[PHP Interfaces and Polymorphism](https://www.w3schools.com/php/php_oop_interfaces.asp)<br>
[PHP Traits](https://www.w3schools.com/php/php_oop_traits.asp)<br>
- - - - - 
