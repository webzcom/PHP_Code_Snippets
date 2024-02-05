## Registration Script:

This script hashes a password and stores it along with the username in a database. 

Assume the database and users table have been set up as described in the previous examples.

## Login Script:

This script retrieves the password hash for the given username from the database and uses password_verify to compare it with the submitted password.

In these examples, replace the database connection parameters ($dbHost, $dbName, $dbUsername, $dbPassword) with your actual database details. 

These scripts are simplified to illustrate the use of password_hash and password_verify in a login system. 

A real-world application should include additional security and validation measures, such as using HTTPS for form submission, preventing SQL injection, and handling errors properly.
