import time

start = time.time()

for i in range(1000):
    print ('Hello World')
    pass

end = time.time()

print((end - start)*1000)