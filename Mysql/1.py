#!/usr/bin/python

import MySQLdb
import random
import decimal


db = MySQLdb.connect("localhost","username","password","databasename" )

cursor = db.cursor()

s1 = <mysql query>
cursor.execute(s1)
db.commit()
db.close()
