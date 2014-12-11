/* DVDItem Used in Library.java program
 * This is an extension of the LibraryItem meant as a DVD object.
 * TODO Contains Redundant Casting on LibraryItem
 */
import java.util.*;
import java.io.*;

public class DVDItem extends LibraryItem implements Comparable<LibraryItem> {
    //DVDs have runtimes instead of Authors
    private String runtime;
    //year is initilized as an int, to parse the string from getData()
    private int year;

    //construct the goodness
    public DVDItem(Scanner database) throws FileNotFoundException{
        //build object
        super(database);
        //parse string year into usable int year for compareTo()
        this.year = Integer.parseInt(super.getData(1));
        //grab runtime
        runtime = database.nextLine();
    }

    //compareTo override
    public int compareTo(LibraryItem compareLibraryItem){
        String compareYear = ((LibraryItem) compareLibraryItem).getData(1);
        return this.year - Integer.parseInt(compareYear);
    }

    //Returns a formatted string for use in the main
    public String toString() {
        return  "Runtime: " + runtime;
    }
}
