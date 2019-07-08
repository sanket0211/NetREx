# NetRex
[NetREx Link](http://bioinf.iiit.ac.in/ricenet/ricenetwork/)
### FIles and Folder Information

| File | Description |
| ------ | ------ |
| basic.py | This file contains basic python code to connect to MySQL server. Just input the username, password and database name. |
| NetREx.pdf | This pdf contains complete structure of the MySQL tables. |
| schema.sql | This file contains the MySQL schema used at the backend of NetREx. | 

### Installation and Loading Database

- Install MySQL. Refer to [MySQL official documentation](https://dev.mysql.com/doc/)
- Use the following command to create the NetREx MySQL database structure. 
```
mysql -u username -p database_name < schema.sql
```


