/* BookItem Used in Library.java program
 * This is an extension of the LibraryItem meant as a DVD object.
 * TODO Contains Redundant Casting on LibraryItem
 */
import java.util.*;
import java.io.*;

public class BookItem extends LibraryItem implements Comparable <LibraryItem> {
    //Books contains authors, not runtime
    private String author;
    //year is initilized as an int, to parse the string from getData()
    private int year;

    //construct the goodness
    public BookItem(Scanner database) {
        //build object
        super(database);
        //parse string year into usable int year for compareTo()
        this.year = Integer.parseInt(super.getData(1));
        //grab author
        author = database.nextLine();
    }

    //compareTo override
    public int compareTo(LibraryItem compareLibraryItem){
        String compareYear = ((LibraryItem) compareLibraryItem).getData(1);
        return this.year - Integer.parseInt(compareYear);
    }

    //Returns a formatted string for use in the main
    public String toString() {
        return super.toString() + "Author: " + author;
    }
}
