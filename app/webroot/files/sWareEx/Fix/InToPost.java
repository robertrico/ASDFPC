import java.util.*;
public class InToPost {
    private final char NULLCHAR = '\u0000';
    private Stack<Character> stack;
    private String equation;
    private String answer;
    private ArrayList<Character> operators;
    public InToPost(String equation){
        stack = new Stack<Character>();
        buildOp();
        this.equation = equation;
        answer = "";
        convert();
    }

    private void buildOp(){
        operators = new ArrayList<Character>();
        operators.add('-');
        operators.add('+');
        operators.add('/');
        operators.add('*');
        operators.add('^');
        operators.add('(');
        operators.add(')');
    }

    private boolean isOperator(char numOp){
        return operators.contains(numOp);
    }

    private void convert(){
        char temp = NULLCHAR;
        for(int i = 0; i < equation.length(); i++){
            temp = equation.charAt(i);
            try{
                if(!isOperator(temp)){
                    answer += temp;
                }else if(temp == ')'){
                    try{
                        while(stack.peek() != '('){
                            answer+=stack.pop();
                        }
                        stack.pop();
                    }catch (Exception e){}
                }else if(operators.indexOf(stack.peek()) < operators.indexOf(temp)) {
                     while(!stack.isEmpty()){
                        answer += stack.pop();
                     }
                    stack.push(temp);
                }else{
                    stack.push(temp);
                }
            }catch (Exception e){}
        }
        while(!stack.isEmpty()){
            if(stack.peek() == '(' || stack.peek() == ')'){
                stack.pop();
            }else{ 
                answer += stack.pop();
            }
        }
        evaluate(equation);
    }

    private void evaluate(String postfix){
    }

    public String toString(){
        return answer;
    }

    public static void main (String[] args){
        String test = "2*(4^3)^2*2";
        //String test = "2*4^3^2*2";
        //String test = "(5+8)*(9-8)/4";
        InToPost object = new InToPost(test);
        System.out.println(object);
    }
}
