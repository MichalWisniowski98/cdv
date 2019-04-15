#listy

programowanie = ['PHP', 'Python', 'Java']
print(type(programowanie))
programowanie.append('C#')
programowanie.append('PHP')
print(programowanie)
ile = programowanie.count('php')
print(f'Ile razy jest PHP: {ile}')

#tuple - nie można edytować w przeciwnieństwie do list
imiona = ('Julia', 'Anna', 'Tomek')
print(imiona)
print(type(imiona))
pierwszy = imiona[0]
print(pierwszy)

#słowniki
osoba = {
	'imie':'Julia',
	'nazwisko':'Kowalska',
	'wiek':23
}

print(osoba)
print(type(osoba))
print(osoba['imie'])
print(osoba.keys())
print(osoba.get('wzrost','brak danych'))

##################################

slownik = {
	'imie1':input("Podaj pierwsze imie: "),
	'imie2':input("Podaj drugie imie: "),
	'imie3':input("Podaj trzecie imie: ")
}
print(slownik)
print('Pierwsze imie to: ' + slownik['imie1'])
print('Drugie imie to: ' + slownik['imie2'])
print('Trzecie imie to: ' + slownik['imie3'])
