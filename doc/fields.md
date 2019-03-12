## Supported Fields

You can use any of the fields from the list.

### Form Field Types:

* text
* textarea
* password
* email
* number
* date
* datetime
* time
* radio
* select
* file
* selectfk

### Migration Field Types:

* string
* char
* varchar
* date
* datetime
* time
* timestamp
* text
* mediumtext
* longtext
* json
* jsonb
* binary
* integer
* bigint
* mediumint
* tinyint
* smallint
* boolean
* decimal
* double
* float
* enum

## Multiple Field Types

In CrudCommand, you can force the type field for view and migration commands separated by ",". In this case the field type must be compatible with the types avaliables and the order must be respected  

select,integer
select,string
select,mediumint

[&larr; Back to index](README.md)
