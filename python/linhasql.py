# Import da biblioteca:
import mysql.connector
import time

start = time.time()

# Conexão com o banco de dados:
conexao = mysql.connector.connect(user='root', password='', host='localhost', database='testemauro200422')

# Cria um cursor:
cursor = conexao.cursor()

# Executa o comando:
for i in range(100):
  query = f"INSERT INTO python(placa, nome_dono) VALUES ('teste {i}', 'Joao {i}')"
  with conexao.cursor() as cursor:
    cursor.execute(query)
    conexao.commit()

# Finaliza a conexão
conexao.close()

end = time.time()

print((end - start)*1000)