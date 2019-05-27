#zmienne globalne i lokalne

#precyzja
x= "{0:.3f}".format(5)
print(x) #5.000

'''
		napisz funkcję, która jako argument przyjmuje wartość
		złotych i zaminia dane po kursie dzisiejszym franka.
		Wyświetl użytkownikowi ile franków kupi za podaną kwotę

'''

def plnToChf(value):
	kursChf = 3.81849933
	'''
	iloscChf = value / kursChf
	iloscChf = "{0:.0f}.format(iloscChf)
	'''
	iloscChf = value // kursChf
	print(f'Ilosc CHF: {iloscChf}')

plnToChf(500)

#zmienna globalna

zmiennaGlobal = 10
print(f'Wartosc zmiennej globalnej: {zmiennaGlobal}')
print(f'Id zmiennej globalnej wewnatrz funkcji: {id(zmiennaGlobal)}')

def spr():
	global zmiennaGlobal
	zmiennaGlobal = 20
	print(f'\n Wartosc zmiennej globalnej wewnatrz funkcji: {zmiennaGlobal}')
	print(f'\n Id zmiennej globalnej wewnatrz funkcji: {id(zmiennaGlobal)}')

spr()
