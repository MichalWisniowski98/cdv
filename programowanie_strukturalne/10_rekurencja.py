def potega(podstawa, wykladnik):
	if wykladnik == 0:
		return 1
	else:
		return podstawa * potega(podstawa, wykladnik - 1)

print(potega(3,3))


import time

def find_fib_num_rec(num):
	if num == 1 or num == 2:
		return 1
	else:
		return find_fib_num_rec(num - 2) + find_fib_num_rec(num - 1)

def find_fib_num_loop(num):
	a, b = 0, 1
	for elem in range(num):
		a, b = b, a + b
		return a


start = time.process_time()
print(find_fib_num_rec(35))
stop = time.process_time()
print(f'Czas wykonania funkcji find_fib_num_rec wynosi: {stop - start}')

start1 = time.process_time()
print(find_fib_num_loop(30))
stop1 = time.process_time()
print(f'Czas wykonania funkcji find_fib_num_rec wynosi: {stop1 - start1}')
