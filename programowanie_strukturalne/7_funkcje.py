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
