# ajax-Admin-With-Auth
Basic wdmin with authentication and internal API made with the help of Ajax request and server side rendering.


*INCASE OF PASSWORD ERROR WHILE OPENING PROJECT VIA XAMPP PLEASE REFER TO CONFOG>DB FILE AND IF DB REQUIRES PASSWORD THEN ENTER THE PASSOWRD OR ELSE KEEP IT AS EMPTY STRING*

## Step To Setup
> Make Two Table [credential, user_data] Inside A Database of name ajax_project.
> Structure :- 
1. credential => 
 >> 1. "ID" => Auto Increment with BIG INT Datatype.
 >> 2. 'USERNAME' => Varchar of values as per data to be entered i.e. 100.
 >> 3. 'PASSWORD' => Varchar of values as per data to be entered i.e. 100.

2. credential => 
 >> 1. "ID" => Auto Increment with BIG INT Datatype.
 >> 2. 'NAME' => Varchar of values as per data to be entered i.e. 100.
 >> 3. 'EMAIL' => Varchar of values as per data to be entered i.e. 100.
 >> 3. 'PHONE' => Varchar of values as per data to be entered i.e. 100.
 >> 3. 'ADDRESS' => Varchar of values as per data to be entered i.e. 100.


> DB query
1. INSERT INTO `credential`(`ID`, `USERNAME`, `PASSWORD`) VALUES ('NULL','ANY USERNAME YOU LIKE','ANY PASSWORD YOU LIKE')
