def wyswietl(num1, num2):
	print(f'Liczba1: {num1}')
	print(f'Liczba2: {num2}')

wyswietl(2,4)

############### *args ##############

def wyswietlArgs(num1, *args):
	print(f'\n Pierwszy element: {num1}')
	for i in args:
		print(f'Nastepny element: {i}')

wyswietlArgs(2, 33, 21, 100)

############### kwargs ##############
import os
os.system('cls')

def pracownik(**kwargs):
	#print(kwargs)
	for key, val in kwargs.items():
		print(f'Klucz: {key}, wartosc: {val}')

pracownik1 = {
	'fName' : "Janusz",
	'lName' : "Nowak",
	'age' : 23,
	'city' : 'Poznań',
	'job' : True
}

pracownik(**pracownik1)


#######zadanie######
def licz(a, b):
	wynik_gora = (a*a) + b
	wynik_dol = (a+b)*(a+b)
	wynik = wynik_gora / wynik_dol
	print(wynik)

licz(5,-5)
