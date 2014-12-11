import java.util.*;
public class TwentyOneHand extends Hand {
    private List<Card> hand;
    public TwentyOneHand(List<Card> deck, int cardNum){
        super(deck,cardNum);
        hand = super.getCards();
    }
    public int getValue(TwentyOneHand hand){
        /*
         * Ace = 1
         * Jack = 11
         * Queen = 12
         * King = 13
         */
        int value = 0;
        for (int i = 0; i < hand.getCards().size(); i++){
            //If number is greater than 10, apply the value according
            //to the rules of 21
            int tmp = valueSwitch(hand.getCards().get(i).getValue());
            value += tmp;
        }
        for (int i = 0; i < hand.getCards().size(); i++){
            if(hand.getCards().get(i).getValue() == 1){
                if(value > 21){
                    //If value is 11, which is an ace in this program,
                    //subtract 10 from the total value to offset 
                    //to achieve Aces = 1 
                    value -= 10;
                }
            }
        }
        return value;
    }
    public int valueSwitch(int cardValue){
        //If number is greater than 10, apply the value according
        //to the rules of 21
        if (cardValue > 10){
            return 10;
        } else if (cardValue == 1){
            return 11;
        }
        return cardValue;
    }
    public String toString(){
        return hand.toString();
    }
    public static void main (String[] args){
        TwentyOneHand testHand = new TwentyOneHand(new ArrayList<Card>(),4);
        Card test1 = new Card(1,Card.Suit.CLUBS);
        Card test2 = new Card(1,Card.Suit.CLUBS);
        Card test3 = new Card(2,Card.Suit.HEARTS);
        Card test4 = new Card(10,Card.Suit.CLUBS);
        testHand.add(test1);
        testHand.add(test2);
        testHand.add(test3);
        testHand.add(test4);
        System.out.println(testHand);
        System.out.println(testHand.getValue(testHand));
        testHand.clear();
        test2 = new Card(11,Card.Suit.DIAMONDS);
        test3 = new Card(12,Card.Suit.DIAMONDS);
        test4 = new Card(13,Card.Suit.DIAMONDS);
        testHand.add(test2);
        testHand.add(test1);
        testHand.add(test3);
        testHand.add(test4);
        System.out.println(testHand);
        System.out.println(testHand.getValue(testHand));
        testHand.clear();
        test1 = new Card(13,Card.Suit.DIAMONDS);
        test2 = new Card(1,Card.Suit.DIAMONDS);
        testHand.add(test2);
        testHand.add(test1);
        System.out.println(testHand);
        System.out.println(testHand.getValue(testHand));

    }
}
