cnt=0
for i in range(1,12):
    for j in range(2,12):
        for k in range(3,12):
            if(i+j+k)==11:
                cnt+=1
print(cnt)