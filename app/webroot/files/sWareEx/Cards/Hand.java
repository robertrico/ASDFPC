/*********This is the hand class of the Card Program has the ability to*********
****Print the cards and return a hand. ID:1486**********************************
*******************************************************************************/
import java.util.*;
public class Hand{
    private ArrayList<Card> hand;
    //Constructs a List of cards
    public Hand(List<Card> deck,int cardNum){
        hand = new ArrayList<Card>(cardNum);
    }

    //Retrieve hand
    public List<Card> getCards(){
        return hand;
    }
    //Retrieve a single card
    public Card get(int index){
        return hand.get(index);
    }

    //Card adding method
    public void add(Card card){
        hand.add(card);
    }
    //overloaded Card adding method
    public void add(int index,Card card){
        hand.add(index,card);
    }
    //Card removing method
    public void remove(Card card){
        hand.remove(hand.indexOf(card));
    }
    //Hand Clear method
    public void clear(){
        hand.clear();
    }


    public String toString(){
        return hand.toString();
    }
    public static void main (String[] args){
        Card test1 = new Card(2,Card.Suit.CLUBS);
        Card test2 = new Card(2,Card.Suit.HEARTS);
        Card test3 = new Card(2,Card.Suit.SPADES);
        Card test4 = new Card(2,Card.Suit.DIAMONDS);
        Hand testHand = new Hand(new ArrayList<Card>(),4);
        testHand.add(test1);
        System.out.println(testHand);
        testHand.add(test2);
        System.out.println(testHand);
        testHand.add(test3);
        testHand.add(test4);
        System.out.println(testHand);
        System.out.println(testHand.getCards());
        

    }
}
