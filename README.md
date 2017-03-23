# Convert a string to a slug in PHP

This is a simple function that allowed you to convert a string in a usable slug for your routes (pages, articles, products...)

Please note that most of the framework implement this kind of function. This repo is just here for education. 

# Before to save the slug in your DB

Please keep in mind that the slug should be unique (of course). You can easily do a function that will take all articles objects (articles is here for example, but it can be a product or a page) in a table and add a '-' + an incremental variable ($i) if the slug is already in your table object. 

You can set the slug field in your database as UNIQUE for more security, or declare it as primary key. 

