/*
 * Twenty One Card Game
 *  #Plays simple interactive 21 cardgame#
 *  Krovetz 2014 Fall CSC 20
 *  ID:1486
 */
import java.util.*;
import java.io.*;

public class TwentyOne{
    public static void main(String[] args){
        boolean play = true;
        Scanner console = new Scanner(System.in);
        while(play){
            TwentyOneDeck deck = new TwentyOneDeck();
            deck.newDeck();
            deck.shuffle();
            deal(deck);
            playerTurn(console,deck);
            TwentyOneHand dealer = deck.getHand(0);
            TwentyOneHand player = deck.getHand(1);
            //Boolean variables for readability, and printed line length
            boolean player_greater = player.getValue(player) 
                                   > dealer.getValue(dealer);
            boolean player_under = player.getValue(player) <= 21;
            boolean dealer_over = (dealer.getValue(dealer) > 21);
            boolean push = (dealer.getValue(dealer) == player.getValue(player));
            if(push){
               System.out.println("You push.");
            }else if( (player_under && player_greater) || dealer_over ){
               System.out.println("You win!");
            } else{
               System.out.println("Dealer wins.");
            } 
           System.out.println("Do you want to play again?(y/n)");
           String ans = console.nextLine();
           if (ans.equalsIgnoreCase("n")){
               play = false;
           }

       }
    }
    public static void playerTurn(Scanner console,TwentyOneDeck deck){
        System.out.println("Dealer shows: ");
        System.out.println(deck.getHand(0).get(0));
        System.out.println("Your Hand: " + 
                deck.getHand(1).getValue(deck.getHand(1)));
        System.out.println(deck.getHand(1));
        System.out.println("Do you want to hit or stay?(h/s)");
        String ans = console.nextLine();
        boolean trigger = true;
        while(trigger){
            if (ans.equalsIgnoreCase("hit") || ans.equalsIgnoreCase("h")){
                deck.addCard(deck.getHand(1));
                if(!bust(deck.getHand(1))){
                    System.out.println("You got " +
                            deck.getHand(1).getValue(deck.getHand(1)));
                    System.out.println("with "+deck.getHand(1));
                    System.out.println("BUST! You went over 21.");
                    trigger = false;
                    continue;
                }
                playerTurn(console,deck);
            }else {
                System.out.println("You got " +
                        deck.getHand(1).getValue(deck.getHand(1)));
                System.out.println("with "+deck.getHand(1));
                dealerTurn(deck);
            }
            trigger = false;
        }
    }
    public static boolean bust(TwentyOneHand hand){
        if (hand.getValue(hand) > 21){
            return false;
        }
        return true;
    }
    public static void deal(TwentyOneDeck deck){
        for (int i=0; i < 2; i++){
            deck.makeTwentyOneHand();
        }

    }

    public static void dealerTurn(TwentyOneDeck deck){
        TwentyOneHand hand = deck.getHand(0);
        int dealHand = hand.getValue(hand);
        if(bust(hand)){
            while(hand.getValue(hand) < 17 ){
                deck.addCard(deck.getHand(0));
                dealHand = hand.getValue(hand);
            }
        }
        System.out.println("Dealer gets "+dealHand);
        System.out.println("with "+deck.getHand(0));
    }

}
