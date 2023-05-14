# agricultural_microservice
Microservice for accesing agricultural database records by name using PHP.

# Building from source
To build the source microservice you need to install PHP and MySQL on your mashine.

Check out source:
````
git clone https://github.com/clientforgit/bus_booking
````
Put location of АгроекологіяПоля.csv file inside agricultural_db.sql file:

![ezgif com-video-to-gif(1)](https://github.com/clientforgit/agricultural_microservice/assets/102827476/bf9b1952-5c7c-4611-b682-3bc121e934ed)

Open mysql terminal and execute following commands for enable LOAD DATA LOCAL INFILE and import sql querys from file:
````
mysql> set global local_infile=1;
mysql> source <location of file agricultural_db.sql>
````
Change configuration in db_config.json to your database configuration.
Now, start php local server in cloned repository:
````
php -S localhost:8080
````
As a result, we have a local server on the port 8080:
![image](https://github.com/clientforgit/agricultural_microservice/assets/102827476/d9f8f029-83e0-4b68-bd31-fb642fd6eca9)

