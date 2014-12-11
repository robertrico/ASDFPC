import java.util.*;
public class GameTest{
    public static void main (String[] args){
        Deck deck = new Deck();
        Card card = new Card(4,Card.Suit.CLUBS);
        deck.shuffle();
        List<Hand> hands = new ArrayList<Hand>();
        hands.add(deck.makeHand(5));
        //System.out.println(card);
        System.out.println(hands.get(0));
    }

}
