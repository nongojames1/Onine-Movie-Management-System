{\rtf1\ansi\ansicpg1252\cocoartf1504
{\fonttbl\f0\fswiss\fcharset0 Helvetica;\f1\fnil\fcharset0 HelveticaNeue;}
{\colortbl;\red255\green255\blue255;\red17\green142\blue255;}
{\*\expandedcolortbl;\csgray\c100000;\cssrgb\c0\c63529\c100000;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 README \
We have in total 7 csv files \
address.csv\
customer_ID.csv\
customer.csv\
managers.csv\
Movies.csv\
process.csv\
Transaction.csv\
\
For Movies.csv, we utilized the data set from \
\pard\tx560\tx1120\tx1680\tx2240\tx2800\tx3360\tx3920\tx4480\tx5040\tx5600\tx6160\tx6720\sl-380\pardirnatural\partightenfactor0
{\field{\*\fldinst{HYPERLINK "https://notebooks.azure.com/avacaflores/libraries/myrtest/html/Movies.csv"}}{\fldrslt 
\f1\fs26 \cf2 https://notebooks.azure.com/avacaflores/libraries/myrtest/html/Movies.csv}}\
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0
\cf0 we found the data about score, rating, released year, title, etc\'85\
\
For customer.csv and address.csv, we utilized the online public data set at: \
https://www.briandunning.com/sample-data/\
Then we bind our customer_id and address_id together and get customer_ID.csv file\
\
For process.csv, transaction.csv, managers.csv, we used packages in python and excel to randomly generate some ID, password, email information. \
\
To load data into database, all csv files should be in same folder. \
source create.sql\
source load.sql}