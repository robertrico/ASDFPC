/* Main Library Program Class
 *  This is a program that creates different types of 
 *  Library items, constructs them with data from a file
 *  sorts them by year
 *  and then outputs them in chronological order by release
 *
 * Created By: Robert Rico
 * CSC - 20 MW 9-9:50
 * Krovetz
 *
 */
import java.util.*;
import java.io.*;
import java.util.Arrays;

public class Library{
    public static void main(String[] args)throws FileNotFoundException{
        //Read the database
        Scanner database = new Scanner(new File("database.txt"));
        //Create String Output array for nice console printing
        String[] output = new String[] {"Title: ", "Year: ","Call: ", "Publisher: "};
        //First Line of database.txt dictates how many LibraryItems are to be used
        int numitems = database.nextInt();
        //Flush the line
        database.nextLine();  
        //LibraryItems array creation
        LibraryItem[] libitems = new LibraryItem[numitems];
        for (int i = 0; i < numitems; i++){
            String type = database.nextLine();
            //
            //We chose Switch statement to allow for easier implementation
            //of other library objects, CDS,Magazines, etc.
            switch(type){
                case ("BOOK"):
                    libitems[i] = new BookItem(database);               
                    break;
                default:
                    libitems[i] = new DVDItem(database);
                    break;
            }
        }
        //Use Java's sort to sort LibraryObjects by year
        Arrays.sort(libitems);

        //print the desired output
        for (int i = 0; i < libitems.length; i++){
            System.out.println();
            for (int j = 0; j < 4; j++){
                System.out.println(output[j]+libitems[i].getData(j));
            }
            System.out.println(libitems[i]);
        }
    }
}
