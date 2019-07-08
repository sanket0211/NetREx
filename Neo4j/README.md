# NetRex
[NetREx Link](http://bioinf.iiit.ac.in/ricenet/ricenetwork/)
### FIles and Folder Information

| File | Description |
| ------ | ------ |
| QueryNeo4j | This folder contains the Flask application which is used to query Neo4j and send the results to the NetREx. |
| UploadData | This folder contains all the files and commands used to upload data to Neo4j.  |

### Installation and Loading Database

- Install Neo4j. Refer to [Neo4j official documentation](https://neo4j.com/docs/operations-manual/current/installation/)
- open terminal and run the following command to start the cypher shell. 
```
cypher-shell -a bolt://<server where neo4j is hosted ip>:7687 -u <neo4j user name> -p <neo4j password>
```


