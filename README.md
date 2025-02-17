# Card Distribution Project (Programming Test)

This project demonstrates a simple solution for randomly distributing a standard 52-card deck among a number of people. The cards are represented using a shorthand notation (for example, `S-A` for Ace of Spades, `H-X` for 10 of Hearts, `D-3` for 3 of Diamonds, etc.).

## Project Overview

- **test.php**:  
  Contains the PHP backend logic that:
    - Validates an input parameter (number of people) passed via the query string.
    - Constructs a deck of 52 cards with four suits (Spades, Hearts, Diamonds, Clubs) and card values with specific mappings (1 → A, 10 → X, 11 → J, 12 → Q, 13 → K).
    - Shuffles the deck.
    - Distributes the cards round-robin among the given number of people.
    - Returns the result as a JSON object where each person’s hand is a comma-separated string.

- **index.html**:  
  A simple HTML file that serves as the frontend. It:
    - Provides an input form to enter the number of people.
    - Uses JavaScript (via the Fetch API) to send a request to `test.php`.
    - Displays the output returned by the PHP script on the same page.