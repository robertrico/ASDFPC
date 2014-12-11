import java.util.*;
public class TwentyOneDeck extends Deck {
    private List<TwentyOneHand> hands;
    private List<Card> deck;
    public TwentyOneDeck(){
        hands = new ArrayList<TwentyOneHand>();
        newDeck();
    }
    public void addCard(TwentyOneHand hand){
        hand.add(getCard());
    }
    public TwentyOneHand makeTwentyOneHand(){
        TwentyOneHand hand = new TwentyOneHand(deck,2);
        hand.add(getCard());
        hand.add(getCard());
        hands.add(hand);
        return hand;
    }
    public TwentyOneHand getHand(int index){
        return hands.get(index);
    }
    public String toString(){
        String formatMe = "";
        for (TwentyOneHand h : hands) {
            formatMe += h+"\n";
        }
        return formatMe;
    }

    public static void main(String[] args){
        TwentyOneDeck testDeck = new TwentyOneDeck();
        testDeck.shuffle();
        List<TwentyOneHand> testHands = new ArrayList<TwentyOneHand>();
        testHands.add(testDeck.makeTwentyOneHand());
        testHands.add(testDeck.makeTwentyOneHand());
        System.out.println(testHands);
        System.out.println(testDeck);
    }

}
