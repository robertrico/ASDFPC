/* This is the main Library Item used for the Library.java program. It contains methods that are in use throughout other library items */
import java.util.*;
import java.io.*;

public class LibraryItem {
    /* **Data Array Structure**
       data [] = {title,year,call,publisher}
       */
    private String[] data;
    public LibraryItem(Scanner database) {
        //Magic 4 Number for The Title, Year, Call and Publisher.
        //TODO Implement an add function to this, as well as ridding of the magic 4
        data = new String[4];
        for (int i = 0; i < data.length; i++){
            data[i] = database.nextLine();
        }
    }

    public String getData(int index){
        /* Pass a number to obtain the String,
         * structured like this to use iteration techniques
         * Index Values:
         * 0 = Title
         * 1 = Year
         * 2 = Call
         * 3 = Publisher
         */
        return data[index];
    }

    /* Main Item doesn't seem to need to return a string.
     * public String toString() {
        //return super.toString() + "Author: " + author;  
        return "Super Class";
    }*/
}
