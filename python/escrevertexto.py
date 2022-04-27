import time

start = time.time()

arquivo = open('arq01.txt','w')

for i in range(2000):
    arquivo.write('testando\n')

arquivo.close()

end = time.time()

print((end - start)*1000)