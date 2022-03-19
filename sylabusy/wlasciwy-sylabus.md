---
description: Wykład 15h
---

# Właściwy sylabus

1. Introduction to programming - basic informations
   1. What is programming (definition)
      1. The act or process of writing a program so that data may be processed by a computer. _Collins English Dictionary. Copyright © HarperCollins Publishers_
      2. Computer programming is the process of performing a particular computation (or more generally, accomplishing a specific computing result), usually by designing/building an executable computer program. _Wikipedia_
      3. _PDFs:_
         1. __[_https://dl.acm.org/doi/pdf/10.1145/9758.10501_](https://dl.acm.org/doi/pdf/10.1145/9758.10501)__
         2. [http://citeseerx.ist.psu.edu/viewdoc/download?doi=10.1.1.58.1345\&rep=rep1\&type=pdf](http://citeseerx.ist.psu.edu/viewdoc/download?doi=10.1.1.58.1345\&rep=rep1\&type=pdf)
   2. Why you should learn programming [https://www.youtube.com/watch?v=Dv7gLpW91DM](https://www.youtube.com/watch?v=Dv7gLpW91DM)
   3. Programming as a instructions for computer
      1. Programming is to giving computer right instructions required to accomplished a task.
      2. Example with LEGO instructions (step by step what to do to achieve results)
   4. Program environments
      1. Client program
      2. Container program
      3. Server program
      4. AWS Lambda and serverless
   5. Programming IDEs (overview)
      1. What is IDE
      2. VSCode
      3. JetBrains IDEs
   6. Programming languages
      1. Low level programming and assembly language example
      2. High level programming and C# examples
      3. Interpreted languages and PHP examples
   7. The same program in other high-level languages
      1. Python
      2. JavaScript
      3. PHP
      4. C#
      5. C++
2. What is variable - Introduction to programming in PHP
   1. Definition of variable
      1. A variable is a symbolic name for (or reference to) information. The variable's name represents what information the variable contains. They are called variables because the represented information can change but the operations on the variable remain the same. In general, a program should be written with "Symbolic" notation, such that a statement is always true symbolically. For example if I want to know the average of two grades, We can write "average = (grade\_1 + grade\_2) / 2.0;" and the variable average will then contain the average grade regardless of the scores stored in the variables, grade\_1 and grade\_2. _Utah University_ [_https://www.cs.utah.edu/\~germain/PPS/Topics/index.html_](https://www.cs.utah.edu/\~germain/PPS/Topics/index.html)__
      2. In computer programming, a variable is an abstract storage location paired with an associated symbolic name, which contains some known or unknown quantity of information referred to as a value; or in simpler terms, a variable is a container for a particular set of bits or type of data (like integer, float, String etc...). _Wikipedia_
   2. Variable types in PHP language
      1. What is primitive variable and what is non primitive variable
      2. Variable types in in PHP: [https://www.php.net/manual/en/language.types.intro.php](https://www.php.net/manual/en/language.types.intro.php)
         1. Scalar types:
            1. Boolean - true / false
            2. Integer - An int is a number of the set ℤ = {..., -2, -1, 0, 1, 2, ...}.
            3. Float - float number
            4. String - A string is series of characters, where a character is the same as a byte.
         2. Compound types
            1. array - An array in PHP is actually an ordered map. A map is a type that associates _values_ to _keys_. This type is optimized for several different uses; it can be treated as an array, list (vector), hash table (an implementation of a map), dictionary, collection, stack, queue, and probably more. As array values can be other arrays, trees and multidimensional arrays are also possible.
            2. object - it's an instance of a class including anonymus class like in javascript `{...}`
            3. callable - callable function assign to the variable (reffered to functional programming)
            4. iterable - Iterable is a pseudo-type introduced in PHP 7.1. It accepts any array or object implementing the Traversable interface. Both of these types are iterable using foreach and can be used with yield from within a generator.
         3. Special types
            1. null - represents a variable with no value
            2. Resource - A resource is a special variable, holding a reference to an external resource.
      3. Other types on variables in different languages
      4. Casting variables
   3. Variable scope
      1. What is variable scope [https://www.php.net/manual/en/language.variables.scope.php](https://www.php.net/manual/en/language.variables.scope.php)
         1. The scope of a variable is the context within which it is defined. For the most part all PHP variables only have a single scope. This single scope spans included and required files as well.
      2. Global / Static variables in php
      3. Variable scope in javascript: [https://www.w3schools.com/js/js\_scope.asp](https://www.w3schools.com/js/js\_scope.asp)
         1. var / let / const
   4. Constants
      1. Definition of constant
         1. A constant is a value that should not be altered by the program during normal execution, i.e., the value is constant. _Wikipedia_
         2. A constant is an identifier (name) for a simple value. As the name suggests, that value cannot change during the execution of the script (except for magic constants, which aren't actually constants). _php.net_
      2. Where to use constants
         1. Avoiding magic numbers for example day represented in seconds.
      3. Enumerated values
         1. Enumerated values are not the same what constants, but often takes the same job in code.&#x20;
         2. Enumerations, or "Enums" allow a developer to define a custom type that is limited to one of a discrete number of possible values. That can be especially helpful when defining a domain model, as it enables "making invalid states unrepresentable."
   5. Variables, constants and enums in php - code examples
      1. Variable types
      2. Variable scope
      3. Variable casting
      4. Predefined Variables in PHP
      5. Defining global constants
      6. Defining class constants
      7. Enums in php
3. What is an algorithm
   1. What is an algorithm (definition)
      1. A set of mathematical instructions or rules that, especially if given to a computer, will help to calculate an answer to a problem. _Cambridge Advanced Learner's Dictionary & Thesaurus © Cambridge University Press_&#x20;
      2. In mathematics and computer science, an algorithm is a finite sequence of well-defined instructions, typically used to solve a class of specific problems or to perform a computation. _Wikipedia_
   2. Example of algorithm - binary search
      1. We have a radom number from 1 to 1.000.000 what is an algorithm to find that number if we can get response that given number is lower or higher then result.
      2. Pen & paper metod (you don't need always to use flowcharts)
      3. Flowchart with [https://www.lucidchart.com/](https://www.lucidchart.com)
      4. Pseudocode
      5. Big O notation (in example of binaty search O(logn))
      6. Program in javascript



* Czym jest zmienna
  * Do czego służy zmienna
  * Typy zmiennych
  * Zasięg zmiennych
  * Jak zarządzać zmienną
* Czym jest stała
  * Czym różni się stała od zmiennej
  * Gdzie najlepiej wykorzystać stałą
  * Unikanie magic numbers
* Czym jest instrukcja warunkowa
  * If
  * Switch
  * Match
* Czym jest tablica
* Czym są pętle
  * do ... while
  * while
  * for
  * foreach
* Czym są błędy i wyjątki
  * błąd
  * wyjątek
* Jak debugować kod
  * proste narzędzia do debugowania
  * zasada gumowej kaczuszki
  * narzędzia do debugowania (zależne od języka, pokazać w przeglądarce)
  * pisanie testów jako rozwiązanie umożliwiające debugowanie
* Czym są funkcje
  * jak działają funkcje
  * jak importować funkcje
  * jak tworzyć własne funkcje
* Struktuy danych
  * Czym są
  * Jakie są rodzaje
  * Przykłady
* Czym jest rekurencja (recuresion)
* Czym jest pseudokod
* Przykłady aplikacji
* System kontroli wersji
* Algorytmy
* Komputery
  * Klient
  * Server
  * Serverless (w tym AWS Lambda)
* Budowa programu w różnych językach
  * Java
  * PHP
  * Cobol
  * JavaScipt / TypeScript
* Funkcje standardowe i programowanie wyrażeń
* Instrukcje złożone
* Zmienne złożone
* Podprogramy
* Typy zmiennych
  * Typy prymitywne
  * Typy złożone
  * Różnice Interfejs / Klasa; Klasa abstrakcyjna / finalna
* SOLID
* GRASP
* KISS
* DRY
* Czysty kod





## Lista tematów w innych

* Wiadomości wstępne
* Algorytmy
* Komputery
* Języki algorytmiczne
* Budowa programu na przykładzie języka C++
* Funkcje standardowe i programowanie wyrażeń.
* Instrukcje złożone.
* Zmienne złożone.
* Podprogramy



* Pojęcie algorytmu
* Języki formalne
* Reprezentacja liczb w komputerze
* Zmienne i wyrażenia
* Instrukcje while-programów
* Asercje w programach i niezmienniki pętli
* Typy danych
* Pliki
* Funkcje i procedury
* Miary złożoności algorytmów
* Rekurencja



* Wprowadzenie - podstawowe pojęcia: algorytm i jego struktura;
* Schemat blokowy; zestaw instrukcji; program.
* Definicje pojęć: translator, kompilator, interpreter, moduł programowy. Programowanie algorytmiczne, strukturalne, obiektowe. Język programowania C: składnia i struktura języka .
* Typy danych, operatory, wyrażenia, instrukcje
* Struktura programu. Instrukcje sterujące przepływem danych w programie: if, if-else, switch. Zagnieżdżanie. Instrukcje pętlowe while, do-while, for. Pętle zagnieżdżone. Instrukcje przerwań break i continue.
* Funkcje. Zmienne lokalne i globalne. Deklaracja funkcji. Zwracanie rezultatu przez funkcję. Przekazywanie zmiennych do funkcji.
* Podstawowe biblioteki i narzędzia (wejście i wyjście programu, pliki).
* Łańcuchy. Tablice jedno i wielowymiarowe. Wskaźniki. Arytmetyka wskaźników.
* Pliki. Deklarowanie, otwieranie i zamykanie. Dodawanie danych do pliku.



* Wprowadzenie: historia rozwoju języków i technik programowania,&#x20;
* języki wysokiego poziomu,&#x20;
* translacja, kompilatory i interpretery,&#x20;
* przegląd podstawowych koncepcji języków programowania,&#x20;
* elementy programowania strukturalnego w języku C i językach pochodnych: C++, Java, C#.
* Programowanie niskopoziomowe: obiekty instrukcje i podprogramy na poziomie procesora, asembler, obsługa przerwań i stosu, kompilacja modułowa i linkowanie.&#x20;
* Programowanie proceduralne: wyraŜenia, notacje funkcyjne, ewaluacja wyraŜenia, programowanie poprzez stos, podprogramy, funkcje i procedury.&#x20;
* Programowanie strukturalne: zasady programowania strukturalnego, instrukcje selekcji, instrukcje pętli.&#x20;
* Podstawy programowania funkcjonalnego: rekursja, zasady programowania funkcjonalnego, wyraŜenia listowe i notacja listowa, funkcje anonimowe.&#x20;
* Typy danych: typy podstawowe i definiowane, typy pochodne i typy złoŜone, kontrola typów, polimorfizm, typy wartościowe i referencyjne.&#x20;
* Operatory: operatory matematyczne, operatory konwersji, kolejność wykonywania operatorów i porządek wartościowania.&#x20;
* Zmienne i tablice: zmienna jako nazwany obiekt, deklarowanie zmiennej, zakres waŜności nazwy, inicjalizacja zmiennych, czas Ŝycia obiektu, obiekty stałe, typ tablicowy, tablice wielowymiarowe i tablice tablic, tablice nieregularne.&#x20;
* Odnośniki: referencje, wskaźniki, arytmetyka wskaźników, typy referencyjne, zastosowania, sterta.&#x20;
* Funkcje: przekazywanie argumentów, obiekty chwilowe, zwracanie wartości, przeładowanie nazw funkcji.&#x20;
* Zmienne, funkcje i odnośniki w kontekście kompilacji.&#x20;
* Programowanie bazujące na obiektach: złoŜoność strukturalna, abstrakcja danych, klasa i obiekt, enkapsulacja, projekt, interfejs i implementacja.&#x20;
* Konstruktory i destruktory, konstruktory kopiujące, jawne i niejawne wywołanie konstruktora.&#x20;
* Zarządzanie nazwami: klasy zagnieŜdŜone i klasy wewnętrzne, klasy lokalne, przestrzenie nazw i pakiety.&#x20;
* Przeładowanie operatorów: operator jako funkcja, przeładowanie operatorów jako funkcji globalnych oraz metod, zastosowania przeładowania operatorów&#x20;
* Konwersje: konwersje standardowe, konwertery i funkcje konwertujące, konwersje jawne i niejawne, niejednoznaczność konwersji.&#x20;
* Podstawy programowania obiektowo orientowanego: dziedziczenie, dziedziczenie wielopokoleniowe, hierarchia klas, dostęp do składników w kontekście dziedziczenia, konstrukcja obiektów w kontekście dziedziczenia, dziedziczenie wielokrotne.&#x20;
* Funkcje wirtualne: mechanizm wirtualności, poŜytki i koszty wirtualności, wczesne i późne wiązanie, wirtualna konstrukcja i destrukcja obiektów, polimorfizm dynamiczny w kontekście funkcji wirtualnych.&#x20;
* Klasy abstrakcyjne: metody abstrakcyjne, cechy klasy abstrakcyjnej, poŜytki z klasy abstrakcyjnej, interfejsy, siła klas abstrakcyjnych, istota programowania obiektowo orientowanego.&#x20;
* Identyfikacja typów w trakcie wykonania (RTTI): bezwzględne i relatywne RTTI, niebezpieczeństwa związane z RTTI, zastosowania RTTI, wielometody.&#x20;
* Obsługa sytuacji wyjątkowych: sytuacje wyjątkowe, rzucanie wyjątków, łapanie wyjątków, informowanie o rzucanych wyjątkach, hierarchie klas do przechowywania informacji o wyjątkach, sprzątanie stosu, pozyskiwanie zasobów poprzez inicjalizację.&#x20;
* Wprowadzenie do programowania generycznego: szablony funkcji i klas, klasy i metody generyczne, polimorfizm statyczny.&#x20;
* Pojemniki: pojemniki sekwencyjne i asocjacyjne, typy pojemników, iteratory.&#x20;
* Programowanie funkcyjne: funkcjonały, currying, klasy i obiekty funkcyjne, zalety i wady programowania funkcjonalnego.&#x20;
* Programowanie orientowane zdarzeniami: pętla główna, zdarzenia, obsługa zdarzeń.&#x20;
* Programowanie wielowątkowe: wątki, współdzielenie zasobów, synchronizacja, komunikacja pomiędzy wątkami, klincz.&#x20;
* Graficzny interfejs uŜytkownika: komponenty i kontenery, okna dialogowe, menedŜery układu okien, systemy menu, komponenty tekstowe i graficzne.&#x20;
*   Operacje wejścia- wyjścia: strumienie, operacje na strumieniach, manipulatory,

    formatowane i nieformatowane operacja wejścia-wyjścia, strumienie plikowe.&#x20;
* Języki skryptowe.&#x20;
* WyraŜenia regularne: wzorce, operator dopasowania, operator podmiany, podwzorce. Języki do przechowywania i przetwarzania dokumentów: znaczniki, atrybuty, poprawność składni, formatowanie, formularze Programowanie w środowisku przeglądarki: języki skryptowe w środowisku przeglądarki, Document Object Model, zdarzenia, aplety.

