# NetRex
[NetREx Link](http://bioinf.iiit.ac.in/ricenet/ricenetwork/)
### FIles and Folder Information

| File | Description |
| ------ | ------ |
| application | Contains all the php files and HTML files for the application. It also contains all the config details. |
| assets | This contains all the css and javascript files |
| assets_intro | This folder contains tutorial feature of the application. | 
| system, index.php, composer.json, license.txt, readme.rst, contributing.md | Codeigniter internal |
| uploads | Place where whatever the user uploads from the application can be stored. |
| user_guide | Codeigniter Guide. | 
| Neo4j | contains all the required information about Neo4j installation, cypher query language, graph database structure, etc |
| MySQL | Contains complete information about Mysql database Structure used for NetREx, installation steps, etc. |

### Installation

- Install a webserver ([example apache for ubuntu](https://www.digitalocean.com/community/tutorials/how-to-install-the-apache-web-server-on-ubuntu-18-04-quickstart)) .
- clone this repository in the root folder of your web server. 
```sh
$ git clone https://github.com/sanket0211/NetREx.git
```
- Follow instructions to install Neo4j and MySQL in the Neo4j and MySQL folder. 
- Go to /application/config/database.php and put username, password and database name. This will ensure the the web application connects to the MySQL server. 
- Install the following python libraries
``` 
flask
neo4j
json
time
bottle
subprocess
commands
```
- Go to /Neo4j/FlaskAppNeo4j and run example.py flask application. To know more about this flask application you can see the readme.md file in the Neo4j folder

