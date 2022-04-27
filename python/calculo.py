import time

start = time.time()

tabuada=int(5)

for count in range(10):
    print("%d x %d = %d" % (tabuada, count+1, tabuada*(count+1)) )

end = time.time()

print((end - start)*1000)