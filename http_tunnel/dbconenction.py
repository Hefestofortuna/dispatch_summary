import pyodbc

cnxn = pyodbc.connect(
    'DRIVER=Devart ODBC Driver for PostgreSQL;Description=DEVART ODBC;Data Source=176.215.255.196;Database=dispatch_summary;User ID=postgres;Password=Ms34901351;Use Http=True;Http Url=http://kunpendelek.online/tunnel.php')
cursor = cnxn.cursor()
cursor.execute("SELECT * FROM users_user")
row = cursor.fetchone()
while row:
    print (row)
    row = cursor.fetchone()