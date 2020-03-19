'''
liczba = input()
print("oto liczba",liczba)
x = len(liczba)
i = 0
suma = 0
while i < x:
    a = liczba[i]
    a = int(a)
    suma += a
    i+=1

print ("oto liczba w rozlozeniu: ", suma)


print()
'''
'''choinka'''

wysokosc = input("podaj wysokosc ")
wysokosc = int(wysokosc)
x = wysokosc
k = 1
for j in range(wysokosc):

    for i in range(x):
        print(" ", end="")

    for y in range(k):
        print("*",end="")

    k +=2
    print("")
    x -= 1

i = 0
y = 0

for i in range(wysokosc):
    print(" ", end="")
print("|")
