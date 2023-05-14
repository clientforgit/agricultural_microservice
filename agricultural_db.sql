DROP DATABASE IF EXISTS agrіcultural;
CREATE DATABASE agrіcultural;
USE agrіcultural;

DROP TABLE IF EXISTS field_properties;
CREATE TABLE field_properties(
                                 name varchar(64) not null,
                                 area varchar(64) not null,
                                 bal varchar(64) not null,
                                 pH varchar(64) not null,
                                 humus varchar(64) not null,
                                 nitrogen varchar(64) not null,
                                 phosphorus varchar(64) not null,
                                 zero varchar(64) not null,
                                 one varchar(64) not null,
                                 two varchar(64) not null,
                                 three varchar(64) not null,
                                 four varchar(64) not null,
                                 five varchar(64) not null,
                                 six varchar(64) not null,
                                 seven text not null
);

LOAD DATA LOCAL INFILE '/home/client/PhpstormProjects/agricultural_service/АгроекологіяПоля.csv'
    INTO TABLE field_properties
    FIELDS TERMINATED BY ';'
    IGNORE 1 ROWS;

delete from field_properties where seven = '' or name = '';