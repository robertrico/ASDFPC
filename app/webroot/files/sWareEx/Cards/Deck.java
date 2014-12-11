/*****This is a program that creates a deck of cards as well as hands.**********
**Uses only collections and no arrays.**ID: 1486***10/12/14**CSC 20* Fall '14***
*******************************************************************************/
import java.util.*;
public class Deck {
    private List<Card> deck;
    private List<Card> remaining;
    private List<Card> hand;
    private List<Card.Suit> suits;
    private List<Hand> hands;
    //Deck Constructor
    public Deck(){
        hands = new ArrayList<Hand>();
        deck = new ArrayList<Card>(52);
        remaining = new ArrayList<Card>(deck);
        // Create and add Suits to pass into Card Class
        suits = new ArrayList<Card.Suit>(4);
        suits.add(Card.Suit.CLUBS);
        suits.add(Card.Suit.DIAMONDS);
        suits.add(Card.Suit.HEARTS);
        suits.add(Card.Suit.SPADES);
        //Create a new deck
        newDeck();
    }
    //Simple Deck Creation Method
    public void newDeck(){
        for (int i = 0; i < 4; i++){
            for (int j = 1; j < 14; j++){
                this.deck.add(new Card(j,suits.get(i)));
            }
        }
    }
    // Create hand as well as add to the deck's List of hands
    public Hand makeHand(int numCards){
        Hand hand = new Hand(deck,numCards);
        for(int k=0; k < numCards; k++){
            hand.add(getCard());
        }
        hands.add(hand);
        return hand;
    }

    //Clear hands and deck, and use the collections method of shuffling
    public void shuffle(){
        hands.clear();
        deck.clear();
        newDeck();
        Random rand = new Random();
        Collections.shuffle(deck,rand);
    }
    //retrieve the card to be used
    public Card getCard(){
        Card temp = deck.get(0);
        deck.remove(0);
        return temp;
    }

    public List<Hand> getHands(){
        return hands;
    }
       
    public String toString(){
        String formatMe = "";
        for (Hand h : this.hands) {
            formatMe += h+"\n";
        }
        return formatMe;
    }
    public static void main(String[] args){
        Deck testDeck = new Deck();
        List<Hand> testHands = new ArrayList<Hand>();
        for (int i = 1; i <= 5; i++){
            testHands.add(testDeck.makeHand(i));
        }
        System.out.println(testDeck);
        testDeck.shuffle();
        for (int i = 1; i <= 5; i++){
            testHands.add(testDeck.makeHand(i));
        }
        System.out.println(testDeck);

    }
}
