def show(name):
	print(f'Przed modyfikacją: {name}')
	name[0] = 'Beata'
	name[1] = 'Barbara'
	name[2] = 'Bogdan'
	print(f'Po modyfikacji: {name}')
	print(f'Id po modyfikacji: {id(name)}')

data = ['Anna', 'Agnieszka', 'Andrzej']
print(f'Przed wywoładniem funkcji show: {id(data)}')
print()
show(data)
print(f'Po wywołaniu funkcji show: {data}')

############### słownik ####################
print('slownik:')
data1 = {0: 'Artur', 1: 'Andrzej'}
print(f'Id przed modyfikacją: {id(data1)}')
show(data1)

#przekierowywanie argumentu przez wartosc

def show1(city):
	print(f'Przed modyfikacją: {city}')
	city[0] = 'Berlin'
	city[1] = 'Londyn'
	print(f'Po modyfikacji: {city}')
	print(f'Id po modyfikacji: {id(city)}')

miasto = ['Gniezno', 'Poznan']

print(f'Przed wywołaniem funkcji show1:  {miasto}')
print(f'Id miasto show1 {id(miasto)}')
show1(list(miasto))
print(f'Po wywołaniu funkcji show1: {miasto}')

########################################

miasto1 = {
	0: 'Gniezno',
	1: 'Poznań'
}

print(f'\n\n Przed wywołaniem funkcji show1: {miasto1}')
print(f'\n\n Przed wywołaniem funkcji show1: {miasto1}')
print(f'Po wywołaniu funkcji show1: {miasto1}')
