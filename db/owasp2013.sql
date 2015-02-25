----
-- phpLiteAdmin database dump (http://phpliteadmin.googlecode.com)
-- phpLiteAdmin version: 1.9.5
-- Exported: 9:34am on February 25, 2015 (GMT)
-- database file: /Applications/MAMP/db/sqlite/owasp2013.sqlite
----
BEGIN TRANSACTION;

----
-- Drop table for customers
----
DROP TABLE "customers";

----
-- Table structure for customers
----
CREATE TABLE 'customers' ('id' INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 'name' TEXT NOT NULL);

----
-- Data dump for customers, a total of 4 rows
----
INSERT INTO "customers" ("id","name") VALUES ('1','Trevweb');
INSERT INTO "customers" ("id","name") VALUES ('2','The Fellowship');
INSERT INTO "customers" ("id","name") VALUES ('3','Asgard');
INSERT INTO "customers" ("id","name") VALUES ('4','The Avengers');

----
-- Drop table for categories
----
DROP TABLE "categories";

----
-- Table structure for categories
----
CREATE TABLE 'categories' ('id' INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 'name' TEXT NOT NULL);

----
-- Data dump for categories, a total of 4 rows
----
INSERT INTO "categories" ("id","name") VALUES ('1','Dedicated Servers');
INSERT INTO "categories" ("id","name") VALUES ('2','Virtual Private Servers');
INSERT INTO "categories" ("id","name") VALUES ('3','Hosting Packages');
INSERT INTO "categories" ("id","name") VALUES ('4','Backup Storage');

----
-- Drop table for products
----
DROP TABLE "products";

----
-- Table structure for products
----
CREATE TABLE 'products' ('id' INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 'category_id' INTEGER NOT NULL, 'name' TEXT NOT NULL, 'price' REAL NOT NULL DEFAULT 1.00 );

----
-- Data dump for products, a total of 8 rows
----
INSERT INTO "products" ("id","category_id","name","price") VALUES ('1','1','Massive, mega server','59.99');
INSERT INTO "products" ("id","category_id","name","price") VALUES ('2','1','Medium, mega server','49.99');
INSERT INTO "products" ("id","category_id","name","price") VALUES ('3','1','Starter, mega server','14.99');
INSERT INTO "products" ("id","category_id","name","price") VALUES ('4','2','4 core virtual server (4GB RAM)','25.0');
INSERT INTO "products" ("id","category_id","name","price") VALUES ('5','2','2 core virtual server (2GB RAM)','14.99');
INSERT INTO "products" ("id","category_id","name","price") VALUES ('6','2','1 core virtual server (1GB RAM)','5.99');
INSERT INTO "products" ("id","category_id","name","price") VALUES ('7','3','Professional Hosting - 500GB','8.0');
INSERT INTO "products" ("id","category_id","name","price") VALUES ('8','4','200GB FTP/CIFS/NFS Backup Storage','12.0');
COMMIT;
