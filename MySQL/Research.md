# *What is the database*
- a database is a collection of data stored and collected in a certain way and put into a software program that saves it and allow users to `manage` and r`etrieve` it called (**DBMS**) *Database Management System*.
- - - - -
# *Why does the database exists*
- database are so important to `manage` , `retrieve` and `organize` data easily and efficiently and help user to analyze the data to extracting beneficial information from it.
- - - -  
# *What is the SQL*
- **SQL** is a standard language for accessing and manipulating databases.
- **SQL** stands for Structured Query Language
- its a bunch of a instructions used to access , modify and delete stored data in a *DBMS*
- **RDBMS** is a basis of a SQL where data are stored in tables consists of Rows and columns 
- - - - 
# *What is the History of SQL*
- **SQL** is introduced in 1970s and developed by IBM Scientists *Donald Chamberlin* and *Raymond Boyce*
  it became commercially available in 1979 and it became the standard of **RDBMS** (Relational Database Management System).
- - - - - 
# *The Most 5 Famous Databases in the world and why* 
 1. **Oracle**
    -  the oldest and most famous Database in the world , was developed in 1977 by **Lawrence Ellison** some of its great features security , scalability and recovery
 2. **MySQL**
     - is an open-source that is most used in the world . **MySQL** was developed in 1995  
     - its a *RDBMS* and Free to use unlike Oracle 
1. **Microsoft SQL Server** 
     - is a  popular database in the world  that was developed by  *Microsoft* in 1989
     - it was written in **C** and **C++** 
2. **PostgreSQL**
     - is an open-source **DBMS** that is very popular It supports many advanced programming languages such as Java, Ruby.
3. **MongoDB**
     - is an open-source database developed in the year 2009
     - It stores data in format of a document  which means the data are not stored using rows and columns so its called *Non Relational Database Management System*
- - - - - - 
# *What is RDBMS ?* 
-  **RDBMS (Relational Database Management System**  is a type of *DBMS* where data are collected and stored data in a *tabular format consists of rows and columns* , most famous **RDBMS** now is *SQL* , *MySQL* and *Oracle*.
- - - - - 
# *RDBMS Vs DBMS*
- **DBMS** is a software program that used to `store` , `access` , `organize` and `delete `collected data called Database
- as we said previously that **RDBMS** is a type of **DBMS** where database are stored in a *tabular format consists of rows and columns*.

| DBMS                                                                                             | RDBMS                                                                                                        |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| Data is stored in a database management system (DBMS) as a file                                  | Tables are used to store information                                                                         |
| Data is stored in a database management system (DBMS) in either a tabular or hierarchical format | Data is stored in a relational  database management system RDBMS only in a tabular format as column and rows |
| Software and hardware requirements are minimal                                                   | Higher hardware and software requirements are required                                                       |
|                                                                                                  |                                                                                                              |

- - - - -  
# *Naming Convenient*
1. *SQL Rule* that table must be less than 128 characters 
2. The first letter must be a letter as defined by **Unicode Standard** 
3. all characters can be 
    1. letters defined in Unicode Standard
    2. decimal letters from either basic Latin or national scripts
    3. The at sign(@), the dollar sign($) and the hash sign(#)
    4. The Underscore , used to represent spaces 
4. spaces , embedded characters , reserved names aren't allowed because they aren't portable
- - - - - - - 
# *primary keys vs unique keys*
- **Primary Keys** is a column in a table that identifies each row in the table
  and its unique for each row so there is no any duplicated values or null values in the primary key column and the whole table must have one primary key.
- **Unique Keys** 
  constraints also identify an individual row uniquely in a table. A table can have more than one unique key, unlike a primary key. Unique key constraints can accept only one NULL value for the column
- -  - -- - 
# *MySQL Constraints*
- **SQL constraints** are used to specify rules for the data in a table. Constraints are used to limit the type of data that can go into a table. If there is any violation between the constraint and the data , the data insertion is cancelled. Constraints can be column level or table level. Column level constraints apply to a column, and table level constraints apply to the whole table.
  ` Examples of Constrains in MySQL`
1. - *NOT NULL* Ensures that a column cannot have a NULL value
2. - *UNIQUE* - Ensures that all values in a column are different
3. - *CHECK* - Ensures that the values in a column satisfies a specific condition
 - - - - -  - - 
#  *indexing in MySQL*
- **Indexes** are used to find rows with specific column values quickly. Without an index, MySQL must begin with the first row and then search through the entire table to find the relevant rows. *The larger the table, the more this costs*. If the table has an index for the columns in question, MySQL can quickly determine the position to seek to in the middle of the data file without having to look at all the data. This is much faster than reading every row sequentially.
- - - - -  
# *Difference between MySQL and PostgreSQL*
- **MySQL** and **PostgreSQL** are two of the most famous used open-source *RDBMS*.

| **MySQL**                                                                                                     | **PostgreSQL**                                                                                                    |
| ------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| MySQL is known for its speed and ease of use, making it ideal for *web applications* and read-heavy workloads | offers advanced features and strong data integrity by making it suitable for *complex queries* and *transactions* |
- - - - - 
## ``References``
[What is the Database](https://www.geeksforgeeks.org/what-is-database/)<br>
[What is SQL](https://www.w3schools.com/sql/sql_intro.asp)<br>
[History of SQL](https://www.ibm.com/think/topics/structured-query-language)<br>
[Most Famous Databases in the world](https://www.geeksforgeeks.org/most-popular-databases/)<br>
[What is RDBMS](https://www.geeksforgeeks.org/rdbms-full-form/)<br>
[RDBMS Vs DBMS](https://unacademy.com/content/cbse-class-11/difference-between/dbms-and-rdbms/)<br>
[Naming Conventions](https://www.red-gate.com/simple-talk/blogs/sql-naming-conventions/)<br>
[primary keys vs unique keys](https://www.geeksforgeeks.org/difference-between-primary-key-and-unique-key/)<br>
[constraints in MySQL](https://www.w3schools.com/mysql/mysql_constraints.asp)<br>
[Indexes in MySQL](https://dev.mysql.com/doc/refman/8.4/en/mysql-indexes.html)<br>
[Difference between MySQL and PostgreSQL](https://www.geeksforgeeks.org/difference-between-mysql-and-postgresql/)<br>


- - - - - - - 

