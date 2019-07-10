from neo4j import GraphDatabase, basic_auth

driver = GraphDatabase.driver("bolt://<server ip>:7687", auth=basic_auth(<username>, <password>))
session = driver.session()

#import pickle
foo=open(<file containing data>,"r");
#foo2=open("ncbi_id.csv", "w")
#myfile = open("ncbi_ids2.csv", 'w');
ncbi_id=[]
count=0
for i in foo:
	count+=1
	print count
        l=i.split('\n');
	accession_id=l[0].strip();
#print accession_id;
	#url = "http://ic4r.org/genes/"+accession_id+".json";

	
	
	session.run("CREATE (a:<Lable> {name: {name}})",{"name": accession_id})

#result = session.run("MATCH (a:Person) WHERE a.name = {name} "
#               "RETURN a.name AS name",
#               {"name": "Arthur"})


session.close()
