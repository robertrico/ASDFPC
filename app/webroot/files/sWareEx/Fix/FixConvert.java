import java.util.*;
import java.util.Arrays.*;
/**
 *
 */
public class FixConvert {
    //nullChar usage https://community.oracle.com/message/8908570
    private final char NULLCHAR = '\u0000';
    @SuppressWarnings("unchecked")
    private Stack<Character> stack;
    private char[] operators;
    private char[] tier1;
    private char[] tier2;
    private char[] tier3;

    /**
     * Constructor
     * @param stack      Stack to use for precedence
     * @param operators  An array of operators to check against
     * @param tier1      Highest Precedence
     * @param tier2      Medium Precedence
     * @param tier3      Lowest Precedence
     *
     */
    public FixConvert(){
        stack = new Stack<Character>();
        operators = new char[] {'*','/','+','-','(',')','^'};
    }
    /**
     * Determines whether or not the current char is an operator
     * @return boolean
     * @param input the character to check
     */
    public boolean isOperator(char input){
        for(int i = 0; i < operators.length; i++){
            if(operators[i] == input){
                return true;
            }
        }
        return false;
    }

    /**
     * Determines what tier the current character is.
     * @return int arbitrary numbers
     */
    public boolean hasPrecedence(char input,char stackOp){
        if((input == '*' || input == '/') && (stackOp == '+' || stackOp == '-')){
            return true;
        } else {
            return false;
        }
    }

    /**
     * Converts a infix string equation to postfix notation
     */
    public void infixToPostfix(String equation){
        char[] parsed = new char[equation.length()];  
        int j = 0;
        char numOp = NULLCHAR;
        boolean precedence = false;
        for (int i=0; i < equation.length(); i++){
            numOp = equation.charAt(i);
            if(isOperator(numOp)){
                if(hasPrecedence(numOp,stack.peek())){
                    parsed[j] = stack.pop();
                    j++;
                }
                stack.push(numOp);
            }else {
                parsed[j] = equation.charAt(i);
                j++; 
            }
        }
            //Why is this + 1 on stack size?
            for(int k=0; k <= stack.size()+1; k++){
                parsed[j] = stack.pop();
                j++;
            }
            System.out.println(parsed);
            //evalPostfix(finalParsed);
        }
   /**
     * Evaluates the Postfixe notated expression
     * @return int The final value of the expression  
     */
    public int evalPostfix(char[] postFixEquation){
        int value = 0;
        for(int i = 0; i < postFixEquation.length; i++){
            if(!isOperator(postFixEquation[i])){
                stack.push(postFixEquation[i]); 
                System.out.println(postFixEquation[i]);
            }
        }
        return 0;
    }
    /**
     * Unit Testing
     */
    public static void main(String[] args){
        FixConvert ob = new FixConvert();
        String test = "3+4*2/(1-5)"; //^2^3";
        ob.infixToPostfix(test);
        /*char[] tstArr = ob.infixToPostfix(test);
          for (int i=0; i < tstArr.length; i++){
          System.out.println(tstArr[i]);
          }*/

    }
}
