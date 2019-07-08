#!/usr/bin/env python
from flask import Flask, jsonify
from neo4j import GraphDatabase, basic_auth
import json
import time
from bottle import get, run, request, response, static_file

import subprocess
import commands

import os

import os

#from py2neo import Graph, Path#,authenticate

#authenticate("localhost:7474", "neo4j", "neo4j@0211")
#graph = Graph("http://localhost:7474/db/data/")
driver = GraphDatabase.driver("bolt://10.4.20.58:7687", auth=basic_auth("neo4j", "neo4j@0211"))
session = driver.session()

@get("/")
def get_index():
    #response.headers['Content-Type'] = 'text/html; charset=UTF-8'
    return static_file("index.html", root="static")


@get("/graph")
def get_graph():
    response.headers['Content-Type'] = 'text/html; charset=UTF-8'
    results = session.run(
        "MATCH (m:Movie)<-[:ACTED_IN]-(a:Person) "
        "RETURN m.title as movie, collect(a.name) as cast "
        "LIMIT {limit}", {"limit": 100})
    nodes = []
    rels = []
    i = 0
    for movie, cast in results:
        nodes.append({"title": movie, "label": "movie"})
        target = i
        i += 1
        for name in cast:
            actor = {"title": name, "label": "actor"}
            try:
                source = nodes.index(actor)
            except ValueError:
                nodes.append(actor)
                source = i
                i += 1
            rels.append({"source": source, "target": target})
    document = Tag.HTML ()
    docTitle = Tag.TITLE ("Sample document")
    docHead = Tag.HEAD (docTitle)
    docBody = Tag.BODY ([Tag.P ("Some text"), Tag.P ("More text")])
    return {"nodes": nodes, "links": rels}


@get("/search")
def get_search():
	#print("hello")
    try:
        q = request.query["q"]
	#print(q)

    except KeyError:
        return []
    else:
        #s=q;
        #s.split(',')
        q=q.split(',')
        results=[]
        for node in q:
#print(str(node))
            results += session.run(
            "MATCH (n:Gene) "
            "WHERE n.name =~ {name} "
            "RETURN n", {"name": "(?i).*" + str(node) + ".*"})
            #tot_res.append(results)
        #print results

        response.content_type = "application/json"
#print(results)
        return json.dumps([{"n": row.n.properties} for row in results])


@get("/movie/<title>")
def get_movie(title):
#print(title)
    title=title.split(',')
    results=[]
    final=[]
    for node in title:
        results += session.run(


        "MATCH (a:Gene{name: \""+str(node)+"\"})-[first_rel]-(b) WITH DISTINCT a, "
        "collect(DISTINCT b) AS sets " 
        "RETURN DISTINCT sets"        


        # "MATCH (n:Gene {title:{title}}) "
        # "OPTIONAL MATCH (movie)<-[r]-(person:Person) "
        # "RETURN movie.title as title,"
        # "collect([person.name, head(split(lower(type(r)),'_')), r.roles]) as cast "
        # "LIMIT 1", {"title": title}
        )
            
    response.content_type = "application/json"
    final=[]
    #tot_final 
    
    for j in results:    
        for i in j:
            for m in i:
                final.append(m)
#		print(m)
    #print results[0][0][0].properties.chromosome_no
    return json.dumps([{"n": row.properties} for row in final])
    #print results[0][0]
    #for row in results[0][0]:

    #return {"title": row.title,
            #"cast": [dict(zip(("name", "job", "role"), member)) for member in row.cast]}
@get("/osmotic_root/<title>")
def get_osmotic_root(title):
#print(title)
    title=title.split(',')
    results=[]
    final=[]
    for node in title:
        results += session.run(


        "MATCH (a:OsmoGene{name: \""+str(node)+"\"})-[first_rel]-(b) WITH DISTINCT a, "
        "collect(DISTINCT b) AS sets " 
        "RETURN DISTINCT sets"        


        # "MATCH (n:Gene {title:{title}}) "
        # "OPTIONAL MATCH (movie)<-[r]-(person:Person) "
        # "RETURN movie.title as title,"
        # "collect([person.name, head(split(lower(type(r)),'_')), r.roles]) as cast "
        # "LIMIT 1", {"title": title}
        )
            
    response.content_type = "application/json"
    final=[]
    #tot_final 
    
    for j in results:    
        for i in j:
            for m in i:
                final.append(m)
#		print(m)
    #print results[0][0][0].properties.chromosome_no
    return json.dumps([{"n": row.properties} for row in final])
    #print results[0][0]
    #for row in results[0][0]:

    #return {"title": row.title,
            #"cast": [dict(zip(("name", "job", "role"), member)) for member in row.cast]}


@get("/subgraph/<title>")
def get_sub_graph(title):
    #print title
    title = title.split(',')
    arr= "[\""+title[0]+"\""
    for i in title:
    	if i==title[0]:
		continue
	arr = arr + ",\""+i+"\""
    arr = arr + "]"
    print arr
    results = session.run(
	"MATCH (a:DROUGHTGene) WHERE a.name IN "+arr + " "
	"MATCH p=(a:DROUGHTGene)-[CONNECTED_TO]-(b:DROUGHTGene) "
	"WHERE b.name IN " + arr + " "
	"RETURN a.name AS jsonOutput1,b.name AS jsonOutput2,relationships(p) AS jsonOutput "

        )
    response.content_type = "application/json"
	

    major={}
    cnt=0
    for i in results:
    	temp={}
	temp['source']=i[0]
	temp['destination']=i[1]
	for k in i[2]:
		temp['correlation_coefficient']=k['correlation_coefficient']
		temp['hrr']=k['hrr_rank']
	major[cnt]=temp
	cnt+=1
    return major

@get("/Osmotic_Root/<title>")
def get_osmotic_root(title):
    #print title
    title = title.split(',')
    arr= "[\""+title[0]+"\""
    for i in title:
    	if i==title[0]:
		continue
	arr = arr + ",\""+i+"\""
    arr = arr + "]"
    print arr
    results = session.run(
	"MATCH (a:OsmoGene) WHERE a.name IN "+arr + " "
	"MATCH p=(a:OsmoGene)-[CONNECTED_TO]-(b:OsmoGene) "
	"WHERE b.name IN " + arr + " "
	"RETURN a.name AS jsonOutput1,b.name AS jsonOutput2,relationships(p) AS jsonOutput "

        )
    response.content_type = "application/json"
	

    major={}
    cnt=0
    for i in results:
    	temp={}
	temp['source']=i[0]
	temp['destination']=i[1]
	for k in i[2]:
		temp['correlation_coefficient']=k['correlation_coefficient']
		temp['hrr']=k['hrr_rank']
	major[cnt]=temp
	cnt+=1
    return major

@get("/Cold_Root/<title>")
def get_cold_root(title):
    #print title
    title = title.split(',')
    arr= "[\""+title[0]+"\""
    for i in title:
    	if i==title[0]:
		continue
	arr = arr + ",\""+i+"\""
    arr = arr + "]"
    print arr
    results = session.run(
	"MATCH (a:ColdGene) WHERE a.name IN "+arr + " "
	"MATCH p=(a:ColdGene)-[CONNECTED_TO]-(b:ColdGene) "
	"WHERE b.name IN " + arr + " "
	"RETURN a.name AS jsonOutput1,b.name AS jsonOutput2,relationships(p) AS jsonOutput "

        )
    response.content_type = "application/json"
	

    major={}
    cnt=0
    for i in results:
    	temp={}
	temp['source']=i[0]
	temp['destination']=i[1]
	for k in i[2]:
		temp['correlation_coefficient']=k['correlation_coefficient']
		temp['hrr']=k['hrr_rank']
	major[cnt]=temp
	cnt+=1
    return major
@get("/Flood_Root/<title>")
def get_flood_root(title):
    #print title
    title = title.split(',')
    arr= "[\""+title[0]+"\""
    for i in title:
    	if i==title[0]:
		continue
	arr = arr + ",\""+i+"\""
    arr = arr + "]"
    print arr
    results = session.run(
	"MATCH (a:FloodGene) WHERE a.name IN "+arr + " "
	"MATCH p=(a:FloodGene)-[CONNECTED_TO]-(b:FloodGene) "
	"WHERE b.name IN " + arr + " "
	"RETURN a.name AS jsonOutput1,b.name AS jsonOutput2,relationships(p) AS jsonOutput "

        )
    response.content_type = "application/json"
	

    major={}
    cnt=0
    for i in results:
    	temp={}
	temp['source']=i[0]
	temp['destination']=i[1]
	for k in i[2]:
		temp['correlation_coefficient']=k['correlation_coefficient']
		temp['hrr']=k['hrr_rank']
	major[cnt]=temp
	cnt+=1
    return major


@get("/JA_Root/<title>")
def get_JA_root(title):
    #print title
    title = title.split(',')
    arr= "[\""+title[0]+"\""
    for i in title:
    	if i==title[0]:
		continue
	arr = arr + ",\""+i+"\""
    arr = arr + "]"
    print arr
    results = session.run(
	"MATCH (a:JAGene) WHERE a.name IN "+arr + " "
	"MATCH p=(a:JAGene)-[CONNECTED_TO]-(b:JAGene) "
	"WHERE b.name IN " + arr + " "
	"RETURN a.name AS jsonOutput1,b.name AS jsonOutput2,relationships(p) AS jsonOutput "

        )
    response.content_type = "application/json"
	

    major={}
    cnt=0
    for i in results:
    	temp={}
	temp['source']=i[0]
	temp['destination']=i[1]
	for k in i[2]:
		temp['correlation_coefficient']=k['correlation_coefficient']
		temp['hrr']=k['hrr_rank']
	major[cnt]=temp
	cnt+=1
    return major


@get("/ABA_Root/<title>")
def get_ABA_root(title):
    #print title
    title = title.split(',')
    arr= "[\""+title[0]+"\""
    for i in title:
    	if i==title[0]:
		continue
	arr = arr + ",\""+i+"\""
    arr = arr + "]"
    print arr
    results = session.run(
	"MATCH (a:ABAGene) WHERE a.name IN "+arr + " "
	"MATCH p=(a:ABAGene)-[CONNECTED_TO]-(b:ABAGene) "
	"WHERE b.name IN " + arr + " "
	"RETURN a.name AS jsonOutput1,b.name AS jsonOutput2,relationships(p) AS jsonOutput "

        )
    response.content_type = "application/json"
	

    major={}
    cnt=0
    for i in results:
    	temp={}
	temp['source']=i[0]
	temp['destination']=i[1]
	for k in i[2]:
		temp['correlation_coefficient']=k['correlation_coefficient']
		temp['hrr']=k['hrr_rank']
	major[cnt]=temp
	cnt+=1
    return major

@get("/ABA_Shoot/<title>")
def get_ABA_shoot(title):
    #print title
    title = title.split(',')
    arr= "[\""+title[0]+"\""
    for i in title:
    	if i==title[0]:
		continue
	arr = arr + ",\""+i+"\""
    arr = arr + "]"
    print arr
    results = session.run(
	"MATCH (a:ShootABAGene) WHERE a.name IN "+arr + " "
	"MATCH p=(a:ShootABAGene)-[CONNECTED_TO]-(b:ShootABAGene) "
	"WHERE b.name IN " + arr + " "
	"RETURN a.name AS jsonOutput1,b.name AS jsonOutput2,relationships(p) AS jsonOutput "

        )
    response.content_type = "application/json"
	

    major={}
    cnt=0
    for i in results:
    	temp={}
	temp['source']=i[0]
	temp['destination']=i[1]
	for k in i[2]:
		temp['correlation_coefficient']=k['correlation_coefficient']
		temp['hrr']=k['hrr_rank']
	major[cnt]=temp
	cnt+=1
    return major

@get("/Drought_Shoot/<title>")
def get_drought_shoot(title):
    print title
    title = title.split(',')
    arr= "[\""+title[0]+"\""
    for i in title:
    	if i==title[0]:
		continue
	arr = arr + ",\""+i+"\""
    arr = arr + "]"
    print arr
    results = session.run(
	"MATCH (a:ShootDROUGHTGene) WHERE a.name IN "+arr + " "
	"MATCH p=(a:ShootDROUGHTGene)-[CONNECTED_TO]-(b:ShootDROUGHTGene) "
	"WHERE b.name IN " + arr + " "
	"RETURN a.name AS jsonOutput1,b.name AS jsonOutput2,relationships(p) AS jsonOutput "

        )
    response.content_type = "application/json"
	

    major={}
    cnt=0
    for i in results:
    	temp={}
	temp['source']=i[0]
	temp['destination']=i[1]
	for k in i[2]:
		temp['correlation_coefficient']=k['correlation_coefficient']
		temp['hrr']=k['hrr_rank']
	major[cnt]=temp
	cnt+=1
    print(major)
    return major
@get("/Flood_Shoot/<title>")
def get_flood_shoot(title):
    #print title
    title = title.split(',')
    arr= "[\""+title[0]+"\""
    for i in title:
    	if i==title[0]:
		continue
	arr = arr + ",\""+i+"\""
    arr = arr + "]"
    print arr
    results = session.run(
	"MATCH (a:ShootFloodGene) WHERE a.name IN "+arr + " "
	"MATCH p=(a:ShootFloodGene)-[CONNECTED_TO]-(b:ShootFloodGene) "
	"WHERE b.name IN " + arr + " "
	"RETURN a.name AS jsonOutput1,b.name AS jsonOutput2,relationships(p) AS jsonOutput "

        )
    response.content_type = "application/json"
	

    major={}
    cnt=0
    for i in results:
    	temp={}
	temp['source']=i[0]
	temp['destination']=i[1]
	for k in i[2]:
		temp['correlation_coefficient']=k['correlation_coefficient']
		temp['hrr']=k['hrr_rank']
	major[cnt]=temp
	cnt+=1
    return major

    
@get("/pathway_information/<title>") 
def get_pathway_information(title):
	print title	
	f=open('gene_info.txt','w')
	title=title.split(',')
	
	for i in title:
		i = i.split('-')
		if len(i[0])>=2:
			f.write(i[0]+','+i[1]+'\n')
	f.close()	
	myCmd = './pathviewapi.sh --gene_data gene_info.txt --species osa --gene_id ENTREZ --pathway_id 03013 --suffix multistatekegg'
	#out = os.system(myCmd)
	out= commands.getstatusoutput(myCmd)
	return out
		
	
    
    
    
@get("/JA_Shoot/<title>")
def get_JA_shoot(title):
    #print title
    title = title.split(',')
    arr= "[\""+title[0]+"\""
    for i in title:
    	if i==title[0]:
		continue
	arr = arr + ",\""+i+"\""
    arr = arr + "]"
    print arr
    results = session.run(
	"MATCH (a:ShootJAGene) WHERE a.name IN "+arr + " "
	"MATCH p=(a:ShootJAGene)-[CONNECTED_TO]-(b:ShootJAGene) "
	"WHERE b.name IN " + arr + " "
	"RETURN a.name AS jsonOutput1,b.name AS jsonOutput2,relationships(p) AS jsonOutput "

        )
    response.content_type = "application/json"
	

    major={}
    cnt=0
    for i in results:
    	temp={}
	temp['source']=i[0]
	temp['destination']=i[1]
	for k in i[2]:
		temp['correlation_coefficient']=k['correlation_coefficient']
		temp['hrr']=k['hrr_rank']
	major[cnt]=temp
	cnt+=1
    return major
@get("/Osmotic_Shoot/<title>")
def get_osmotic_shoot(title):
    #print title
    title = title.split(',')
    arr= "[\""+title[0]+"\""
    for i in title:
    	if i==title[0]:
		continue
	arr = arr + ",\""+i+"\""
    arr = arr + "]"
    print arr
    results = session.run(
	"MATCH (a:ShootOsmoticGene) WHERE a.name IN "+arr + " "
	"MATCH p=(a:ShootOsmoticGene)-[CONNECTED_TO]-(b:ShootOsmoticGene) "
	"WHERE b.name IN " + arr + " "
	"RETURN a.name AS jsonOutput1,b.name AS jsonOutput2,relationships(p) AS jsonOutput "

        )
    response.content_type = "application/json"
	

    major={}
    cnt=0
    for i in results:
    	temp={}
	temp['source']=i[0]
	temp['destination']=i[1]
	for k in i[2]:
		temp['correlation_coefficient']=k['correlation_coefficient']
		temp['hrr']=k['hrr_rank']
	major[cnt]=temp
	cnt+=1
    return major

    
    
    
@get("/Cold_Shoot/<title>")
def get_cold_shoot(title):
    #print title
    title = title.split(',')
    arr= "[\""+title[0]+"\""
    for i in title:
    	if i==title[0]:
		continue
	arr = arr + ",\""+i+"\""
    arr = arr + "]"
    print arr
    results = session.run(
	"MATCH (a:ShootColdGene) WHERE a.name IN "+arr + " "
	"MATCH p=(a:ShootColdGene)-[CONNECTED_TO]-(b:ShootColdGene) "
	"WHERE b.name IN " + arr + " "
	"RETURN a.name AS jsonOutput1,b.name AS jsonOutput2,relationships(p) AS jsonOutput "

        )
    response.content_type = "application/json"
	

    major={}
    cnt=0
    for i in results:
    	temp={}
	temp['source']=i[0]
	temp['destination']=i[1]
	for k in i[2]:
		temp['correlation_coefficient']=k['correlation_coefficient']
		temp['hrr']=k['hrr_rank']
	major[cnt]=temp
	cnt+=1
    return major

if __name__ == "__main__":
    run(port=8080)
