tekst = "Anna, paweł, JULIA"

lista = tekst.split(", ")
print(tekst)
print(lista)
print(type(lista))

imie1 = lista[0]
print(imie1) #Anna

imie_duze = imie1.upper()
print(imie_duze) #Anna

imie_male = imie1.lower()
print(imie_male) #Anna

#sprawdzanie zawartosci
nazwisko = ""
print(nazwisko.isalpha())  #False

print("\n Podaj swoje nazwisko: ", end="")
nazwisko = input()
zawartosc = nazwisko.isalpha()
print(zawartosc) #True or False

text1 = "\nJulia\n"
text2 = "Nowak"
print(text1 + text2)

text1 = text1.rstrip()
print(text1 + text2)
print(text1 +" "+ text2)


#wyświetlanie łańcucha znaków

#wszystkie wersje Pythona
text = "%s, Java, i $s" % ("PHP", "Python")
print(text)

#nowsze wersje Pythona
"{1}, Java i {0}".format("PHP", "Python")
print(text)

#help{text.replace}

new= text.replace("PHP", "C#")
print(new)

#wypiszuje dane
rok = 2019
miesiac = "kwiecien"
dzien = 1

print("\nData: ", end="")
print(dzien, miesiac, rok)
