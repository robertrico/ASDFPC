import java.util.*; //For testing purposes
/***This is the card class of the Card Program has the ability to print the****
*card and the suit, also contains the enum constants to be used throughout the*
*program. ID: 1486  Note to self: Use dot notation to access Card.Suit.ENUM***/
public class Card{
    //Suits
    public enum Suit{
        CLUBS,DIAMONDS,HEARTS,SPADES
    }
    //card value
    private int number;
    Suit suit;
    //constructor
    public Card(int num, Suit suit){
        number = num;
        this.suit = suit;
    }

    public String toString(){
        return "("+faceSwitch(number)+" of " +suit+")";
    }
    public String faceSwitch(int number){
        switch (number){
            case 1:
                return "Ace";
            case 11:
                return "Jack";
            case 12:
                return "Queen";
            case 13:
                return "King";
            default:
                return Integer.toString(number);
        }
    }

    public int getValue(){
        return number;
    }

    public static void main(String[] args){
        //build list of enums
        List<Suit> suits = Arrays.asList(Suit.values());
        for (int i = 0; i < suits.size();i++){
            for (int j = 1; j < 14; j++){
                Card tmp = new Card(j,suits.get(i));
                System.out.println(tmp);
            }
        }


    }
}
