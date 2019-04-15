programowanie = ['Python', 'C#', 'JS', 'PHP', 'Java']

print(programowanie)
print(type(programowanie))

pierwszy = programowanie[0]
print('Pierwszy język programowania: ' + pierwszy)

trzy_elementy = programowanie[0:3]
print(trzy_elementy)

ostatni = programowanie[-1]
print('Ostatni język programowania: ' + ostatni)

#dodanie nowego elementu do listy

programowanie.append('R')
programowanie.append('Python')
print(programowanie)

#zliczanie elementów w liście

ile=programowanie.count('Python')
print(f'Python występuje {ile} razy')

#ilość elementów w liście

ilosc_elem = len(programowanie)
print(f'Ilość elementów w liście: ',end='')
print(ilosc_elem)

#łączenie list

print('f\n\n{programowanie}')
inne_jezyki = ['c', 'c++']
print('Połączenie list')
programowanie.extend(inne_jezyki)
print(programowanie)

#czyszczenie listy

nowa = programowanie
print(f'Nowa lista: {nowa}')
nowa.clear()
print(f'Nowa lista po wyczyszczeniu: {nowa}')
print(f'Lista programowanie po wyczyszczeniu: {programowanie}')
