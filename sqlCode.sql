/**
 * Author:  baker alharoun
 * Created: Dec 14, 2017
 * url_code table for database aaburl
 * add the following code to create the database and the table
 */

CREATE DATABASE aaburl;

CREATE TABLE aaburl.url_code ( 
id INT NOT NULL AUTO_INCREMENT ,
 url VARCHAR(250) NOT NULL ,
 code VARCHAR(8) NOT NULL ,
 date DATE NOT NULL );