<?php 
$result = "";
this code is wrong
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>

<form method="post">
<table align="center">
    <tr>
        <td><strong><?php echo $result; ?><strong></td>
    </tr>
    <tr>
        <td>Enter 1st Number</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>Enter 2nd Number</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td>Select Oprator</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="                =                "></td>
    </tr>

</table>
</form>
share  improve this answer  follow    
edited Jun 16 '15 at 11:46
answered Jun 16 '15 at 11:44

Naseem Ahmad
9111 silver badge33 bronze badges
add a comment

5

Personally I would do a switch instead of all this if, else if, else

$first = $_POST['first'] + 0;//a small "hack" to make sure its an int but allow negs!!
$second= $_POST['second'] + 0;
$operator = $_POST["group1"];
switch($operator)
{
    case "add"
    echo "Answer is: " .$first + $second;
    break; 
    case "subtract"
    echo "Answer is: " .$first - $second;
    break;
    case "times"
    echo "Answer is: " .$first * $second;
    break; 
    case "divide"
    echo "Answer is: " .$first / $second;
    break;
}