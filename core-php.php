
 

<?php
echo "1.Write a PHP program to enter marks of five subjects Physics, Chemistry, Biology, Mathematics and Computer, calculate percentage and grade by if else write a PHP program for find „Thursday‟ in week using switch Function. "  ;
echo "<br/>";
echo "ANSWER:";
$pysics = 87;
$math = 78;
$com = 85;
$bio = 76;
$chemistry = 80;
$total = $pysics + $math + $com + $bio + $chemistry;
$per = $total/5;
echo $per."&nbsp;&nbsp;";

if($per >= 91){
    echo "Distriction....";
}
elseif($per >=81 AND $per <=90){
    echo "First Class...";
}
elseif($per>=71 AND $per <=80){
    echo "Second Class...";
}
elseif($per >=61 AND $per <=70){
    echo "First Class...";
}
elseif($per >= 51 AND $per <35){
    echo "Pass Class";
}
else{
    echo "you Are Fail....";
}
echo "<br/>";
?>
<?php
echo "<hr/>";
?> 
<?php
echo "2.write a PHP program for find 'Thursday' in week using switch Function.  ";
echo "<br/>";
echo "ANSWER:";
$m = "Thursday";

switch($m) {
    case "Monday":
        echo "Today is Monday";
        break;
        case "Tuesday":
            echo "Today is Tuesday";
            break;
            case "wednesday":
                echo "Today is wednesday";
                break;
                case "Thursday":
                    echo "Today is Thursday";
                    break;
    case "Friday":
                        echo "Today is Friday";
                        break;
    case "Saturday":
                            echo "Today is Saturday";
                            break;
    case "Sunday":
                                echo "Today is Sunday";
                                break;
    default: echo "not match";
}
?>
<hr/>
<?php
echo "3.Write a PHP program to check Leap years between 1901 to 2016 Using nested if.<br/>";
$start = 1901;
$end = 2016;
$n = 1;
for($i=$start;$i<=2016;$i++){
    if($i%4 == 0){
        echo  $n.".&nbsp;&nbsp;".$i."</br>";
        $n++;
    }
}

echo "Total No Of Leap Years Was<b> ".($n-1)."</b></br>";
?>
<hr/>
<?php
echo "4.Write a PHP program to find the largest of three numbers using ternary Operator.<br/>";
$a=10;$b=20;$c=30;
$m = ($a>$b?(($a>$c)?$a:$c):(($b>$c)?$b:$c));
echo "Max no is:<b>".$m."</b>";
?>
<hr/>
<?php
echo "5.Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21.<br/>";

function Fibo($num){
      
    if ($num == 0)
        return 0;    
    else if ($num == 1)
        return 1;    
    else
        return (Fibo($num-1) + 
                Fibo($num-2));
}
$num = 20;
for ($i = 0; $i < $num; $i++){  
    echo Fibo($i).' ';
}

?>
<hr/>
<?php
echo "6.Write a program to find whether a number is Armstrong or not.<br/>";
function armstrongCheck($num){
    $sum = 0; 
    $x = $num; 
    while($x != 0) 
    { 
        $r = $x % 10; 
        $sum = $sum + $r*$r*$r; 
        $x = $x / 10; 
    } 
    if ($num == $sum)
        return 1;
     
    return 0;   
}
$num = 407;
$i = armstrongCheck($num);
if ($i == 1)
    echo "Yes num is armstrong";
else
    echo "No num is not armstrong";
?>
<hr/>
<?php
echo "7.Write a program to print the below format.<br/>";
 $n=12;
 for($i=1;$i<=5;$i++){
    for($n=1;$n<=$i;$n++)
    {
        echo $n;
    }
    echo "<br/>";
 }
?>
<hr/>
<?php
echo "8.Write a program to print the below format.<br/>";
 $n=12;
 for($i=1;$i<=6;$i++){
    for($n=1;$n<=6;$n++)
    {
        if($n==1 || $i==1 || $i == 6){
            echo "*";
        }
        else{
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br/>";
 }
?>
<hr/>
<?php
echo "9.What will be the values of 'a' and 'b' after the code below is executed? Explain your answer.<br/>";
$a = '1';
$b = $a;
$b = "2$b";
echo "a value:".$a."<br/>";
echo "b value:".$b."<br/>";
echo "Explain-because a value is 1 and a value putin b now b value 1 and last line b = 2b thats why now b value is 21 ";

?>
<hr/>
<?php
echo "10.How can you tell if a number is even or odd without using any Condition or loop?.<br/>";
$checknum = ["num is even","num is odd"];
$n = 3;
echo $checknum[$n % 2];
?>
<hr/>
<?php
echo "11.How can you declare the array (all type) in PHP? Explain with example.<br/>";
echo "<pre>In PHP, there are three types of arrays:<br/>
                1.Indexed arrays - Arrays with a numeric index<br/>
                2.Associative arrays - Arrays with named keys<br/>
                3.Multidimensional arrays - Arrays containing one or more arrays<br/></pre>";
echo "1.Indexed arrays - <br/>";
$m = array("me", "my", "myself");
echo "I like " . $m[0] . ", " . $m[1] . " and " . $m[2] . ".<br/>";
echo "2.Associative arrays - <br/>";
$age = array("mitz"=>"28", "komal"=>"37", "kinjal"=>"43");
echo "mitz is " . $age['mitz'] . " years old.<br/>";
echo "3.Multidimensional arrays - <br/>";
$marks = array (
    array("mitz",85,90),
    array("priyanka",65,93),
    array("hiral",78,53),
    array("vandu",73,59)
  );
    
  echo $marks[0][0].": php: ".$marks[0][1].", maths: ".$marks[0][2].".<br>";
  echo $marks[1][0].": php: ".$marks[1][1].", maths: ".$marks[1][2].".<br>";
  echo $marks[2][0].": php: ".$marks[2][1].", maths: ".$marks[2][2].".<br>";
  echo $marks[3][0].": php: ".$marks[3][1].", maths: ".$marks[3][2].".<br>";
?>
<hr/>
<?php
echo "12.Write program to remove duplicate values from array.<br/>";
$d = array(10,20,30,40,55,10,20,80,10,10,90,66);
print_r(array_unique($d));
?>
<hr/>
<?php
echo "13.Get random values from array.<br/>";
$rn = array(10,20,30,40,55,10,20,80,10,10,90,66);
print_r(array_rand($rn));
echo "<br/>";
$name = array("Mitz", "Vinay", "kinjal", "parul", "jagu");
$age = array("Paul"=>"35", "Bob"=>"37", "Jack"=>"43");

function find_random_item($array){
 $rand_key= array_rand($array);
 $rand_element = $array[$rand_key];
 echo $rand_element."<br>";
}

find_random_item($name);
find_random_item($age);

?>
<hr/>
<?php
echo "14.Use a for loop to total the contents of an integer array called numbers which has five elements. Store the result in an integer called total.<br/>";
function sum( $arr, $n)
{
    $sum = 0; 
    for ($i = 0; $i < $n; $i++)
    $sum += $arr[$i];
 
    return $sum;
}
$arr =array(12, 3, 4, 1);
$n = sizeof($arr);
echo "Sum of given array is ", 
                sum($arr, $n);
?>
