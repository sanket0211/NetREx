# NetRex
[NetREx Link](http://bioinf.iiit.ac.in/ricenet/ricenetwork/)
### FIles and Folder Information

| File | Description |
| ------ | ------ |
| fill_genes.py | This file contains a basic code for connecting to Neo4j Graph Database.|

### Installation and Loading Database

- Install Neo4j. Refer to [Neo4j official documentation](https://neo4j.com/docs/operations-manual/current/installation/)
- Use 1.py, modify it and use it to upload all the gene_ids and give them labels according to the network they shall belong. In NetREx we have 12 networks, so 12 labels. 
- open terminal and run the following command to start the cypher shell. Here you can run any cypher query language and check the results. 
```
cypher-shell -a bolt://<server where neo4j is hosted ip>:7687 -u <neo4j user name> -p <neo4j password>
```
- Run the following query to input the edges in the Neo4j Graph Database
```
cypher> USING PERIODIC COMMIT LOAD CSV FROM <Link to the csv file containing the four fields node1, node2, edge_attribute1,edge attribute2> AS line FIELDTERMINATOR <>  MATCH(u:ShootOsmoGene{name:line[0] }), (r:<NodeLabel>{name:line[1]}) CREATE (u)-[:CONNECTED_TO{correlation_coefficient:line[3], hrr_rank:line[2]}]->(r);
```



