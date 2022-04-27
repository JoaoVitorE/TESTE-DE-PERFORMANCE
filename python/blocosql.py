# Import da biblioteca:
import mysql.connector
import time

start = time.time()

# Conexão com o banco de dados:
conexao = mysql.connector.connect(user='root', password='', host='localhost', database='testemauro200422')

# Criando querry
query = f"INSERT INTO python(placa, nome_dono) VALUES"

# Criando o for
for i in range(100):
    query += f"('teste {i}', 'Joao {i}'),"

# Retirando a virgula da query
query = query[:-1]

# Criando o Cursor
with conexao.cursor() as cursor:
    cursor.execute(query)
    conexao.commit()

# Finaliza a conexão
conexao.close()

end = time.time()

print((end - start)*1000)