import java.util.*;
/**
 * Infix Expression Evaluator.
 * Takes in an infix expression, converts to postfix,
 * then evaluates the expression.
 * @author 1486, 2014-12-08 Mon 12:53 PM
 * @version 1.3
 */
public class InfixToPostfix {
    private Stack<String> stack;
    private String equation;
    private String answer;
    private ArrayList<String> operators;

    /**
     * @param stack     Stack   stack of Strings for evaluating and parsing
     * @param equation  String  the expression to be evaluated
     * @param answer    String  the converted expression to be passed
     * @param operators ArrayList<String> list of operators for comparison
     */
    public InfixToPostfix(){
        buildOp();
    }

    /**
     * Initiates the conversion and evaluation of an infix expression
     * @param string Scanner A scanner object create from the passed in string
     */
    public void evaluate(String equation){
        stack = new Stack<String>();
        answer = "";
        Scanner string = new Scanner(equation);
        convert(string);
    }

    /**
     * Builds the ArrayList of operators.
     */
    private void buildOp(){
        operators = new ArrayList<String>();
        operators.add("+");
        operators.add("-");
        operators.add("/");
        operators.add("*");
        operators.add("^");
    }

    /**
     * If the passed in string is in the ArrayList it is an operator.
     * @return boolean 
     */
    private boolean isOperator(String numOp){
        return operators.contains(numOp);
    }

    /**
     * "^" Is the only right associative operator.
     * @return boolean
     */
    private boolean isLeftAssociative(String numOp){
        return !(numOp == "^");
    }

    /**
     * Compares two strings to determine which has precedence.
     * @see InfixToPostfix.buildOp
     * @return boolean
     */
    private boolean hasPrecedence(String numOp, String topStack){
        if( (operators.indexOf(topStack) > operators.indexOf(numOp))  || (operators.indexOf(topStack)-1 > (operators.indexOf(numOp))) ){
            return false;
        }
        return true;
    }

    /**
     * Converts an infix expression to a postfix expression.
     * @param infix Scanner The scanner object of the passed in expression
     * @param temp  String  Temporary container to hold a string
     */
    private void convert(Scanner infix){
        String temp = "";
        while(infix.hasNext()){
            temp = infix.next();
            if(temp.equals("(")){
                stack.push(temp);
            }else if(temp.equals(")")){
                try{
                    while(!stack.peek().equals("(")){
                        answer += " "+stack.pop();
                    }
                    stack.pop();
                }catch(Exception e){
                    //System.out.println("Empty Stack Hit");
                }
            }else if(!isOperator(temp)){
                if(!temp.equals("(")){
                    answer += " "+temp;
                }
            }else if(isOperator(temp)){
                while( (!stack.empty())  && (isLeftAssociative(temp) && !hasPrecedence(temp,stack.peek())) ){
                    answer += " "+stack.pop();
                }
                stack.push(temp);
            }
        }
        try {
            while(!stack.isEmpty()){
                if(stack.peek().equals("(") || stack.peek().equals(")")){
                    System.out.println(stack.peek());
                    throw new Exception("Improper Operators or Parentheses");
                }
                answer += " "+stack.pop();
            }
            System.out.println(evaluatePost(answer));
        }catch(Exception e){
            System.out.println(e.toString());

        }
    }

    /**
     * Evaluates the converted postfix expression.
     * @param in      String  The postfix expression
     * @param postfix Scanner A scanner object created from the postfix expression
     * @param temp  int A temporary container for proper calculations
     * @param temp2 int A temporary container for proper calculations
     */
    public static int evaluatePost(String in) {
        Scanner postfix = new Scanner(in);
        Stack<Integer> s = new Stack<Integer>();
        int temp = 0;
        int temp2 = 0;
        while (postfix.hasNext()) {
            if (postfix.hasNextInt()) {
                s.push(postfix.nextInt());
            } else {
                String op = postfix.next();
                if (op.equals("+")) {
                    s.push(s.pop() + s.pop());
                } else if (op.equals("*")) {
                    s.push(s.pop() * s.pop());
                }else if (op.equals("/")) {
                    temp = s.pop();
                    temp2 = s.pop();
                    s.push(temp2 / temp);
                }else if (op.equals("-")) {
                    temp = s.pop();
                    temp2 = s.pop();
                    .push(temp2 - temp);
                }else if (op.equals("^")) {
                    temp = s.pop();
                    temp2 = s.pop();
                    s.push((int)Math.pow(temp2,temp));
                }else {
                    throw new RuntimeException();
                }
            }
        }
        if (s.size()==1) {
            return s.pop();
        } else {
            throw new RuntimeException();
        }
    }
    public static void main (String[] args){
        InfixToPostfix object = new InfixToPostfix();
        Scanner console = new Scanner(System.in);
        System.out.print("> ");
        String input = console.nextLine();
        while(!input.equals("exit")){
            System.out.print("> ");
            object.evaluate(input);
            System.out.print("> ");
            input = console.nextLine();
        }
    }
}
