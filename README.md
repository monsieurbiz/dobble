# Dobble game, cards generator

This project was made during the 2019's Joliday with Monsieur Biz employees.
The goal is to generate displays to be able to print a wonderful Dobble game !

We used the PHP lib `marmelab/dobble-php` to generate a Dobble deck : 
```
Elements per card: 3
Deck generated with 7 cards
Cards :
- <DobbleCard: E, F, G>
- <DobbleCard: A, C, E>
- <DobbleCard: B, D, E>
- <DobbleCard: A, B, F>
- <DobbleCard: C, D, F>
- <DobbleCard: A, D, G>
- <DobbleCard: B, C, G>
Deck is valid: true
```

In order to manage this project, we've split it in multiple parts : 
- Use `marmelab/dobble-php` to generate deck
- Use emoji's instead of text in cards
- Use custom images in cards
- Generate HTML in specified dir to be able to print the deck 

## Requirements

You will need to use this project : 

- PHP 7.3
- Composer

## Installation

Run `make install` to install the project

## Generate a deck

Run `make run` to generate a deck
