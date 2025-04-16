# Implementacja Bucket Sort w PHP

## Opis

Ten projekt jest implementacją algorytmu sortowania kubełkowego (Bucket Sort) w języku PHP. 
Bucket Sort to algorytm sortowania, który dzieli dane na kilka grup (kubełków), a następnie 
sortuje elementy w tych kubełkach indywidualnie, korzystając z innego algorytmu sortowania 
(np. sortowania przez wstawianie lub innego wbudowanego w język programowania).

## Jak działa Bucket Sort?

1. **Podział na kubełki** - Elementy wejściowe są rozmieszczane w kubełkach na podstawie ich wartości.
2. **Sortowanie kubełków** - Każdy kubełek jest sortowany oddzielnie.
3. **Scalanie** - Wszystkie posortowane kubełki są scalane w jedną posortowaną tablicę.

## Zalety

- Skuteczny dla danych, które są równomiernie rozłożone.
- Może być szybszy niż inne algorytmy sortowania, takie jak quicksort, dla określonych przypadków.

## Wady

- Wymaga dodatkowej pamięci na kubełki.
- Wydajność zależy od równomierności rozkładu danych.