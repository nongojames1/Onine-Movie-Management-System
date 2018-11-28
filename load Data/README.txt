# README 

We have in total 7 csv files 
```
address.csv
customer_ID.csv
customer.csv
managers.csv
Movies.csv
process.csv
Transaction.csv
```

For Movies.csv, we utilized the data set from 
https://notebooks.azure.com/avacaflores/libraries/myrtest/html/Movies.csv
we found the data about score, rating, released year, title, etc…

For customer.csv and address.csv, we utilized the online public data set at: 
https://www.briandunning.com/sample-data/
Then we bind our customer_id and address_id together and get customer_ID.csv file

For process.csv, transaction.csv, managers.csv, we used packages in python and excel to randomly generate some ID, password, email information. 

To load data into database, all csv files should be in same folder. 
source create.sql
source load.sql
