def witaj():
	print('Witaj!',end=' ')
	print('Janusz!')

witaj()

def wyswietl_wiek(wiek):
	print(f'Twój wiek: {wiek}')

wyswietl_wiek(23)

def iloczyn(a, b):
	return a * b

print(f'Iloczyn wynosi: ', iloczyn(3, 4))

def iloraz(a, b):
	return a / b

x = iloraz(4, 5)
print(f'Iloraz wynosi: {x}')
print(type(x))

print(iloraz(b=10, a=3))

'''
Użytkownik podaje z klawiatury:
	marka, model, pojemność, predkoscMax
	utwórz funkcję, która pobierze dane od użytkownika i przypisze do słownika
	utwórz drugą funkcje wyświetlającą dane w formacie:
		Marka: ...
		Model: ...
		Pojemność: ...
		Prędkość maksymalna: ...
'''

marka = input("Wprwadz marke: ")
model = input("Wprowadz model: ")
pojemnosc = input("Wprowadz pojemnosc: ")
predkosc_max = input("Wprowadz predkosc max: ")

def wprowadzanie(marka1, model1, pojemnosc1, predkosc_max1):
	slownik = {
		'marka2' : marka1,
		'model2' : model1,
		'pojemnosc2' : pojemnosc1,
		'predkosc_max2' : predkosc_max1,
	}

wprowadzanie(marka, model, pojemnosc, predkosc_max)

def wyswietl():
	print('Marka: ' + wprowadzanie.slownik['marka2'])
	print('Model: ' + wprowadzanie.slownik['model2'])
	print('Pojemnosc: ' + wprowadzanie.slownik['pojemnosc2'])
	print('Predkosc_max: ' + wprowadzanie.slownik['predkosc_max2'])

wyswietl()
