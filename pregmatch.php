<?php

 /*  --- QUESTION--
 
Munene is extremely disappointed to find out that no one in the office knows his first name. Even his close
mates call him only by his last name. Frustrated, he decides to make his fellow workmates know his first
name by forcing them to solve this question.
You are given a long string as input in each testcase, containing any ASCII character. Your task is to find
out the number of times SUVO and SUVOJIT appears in it.

Note: This problem CAN BE SOLVED IN Java, Python or PHP.


Input Format

The first line contains the number of testcases, T. Next, T lines follow each containing a long string S.

Output Format

For each long string S, display the no. of times SUVO and SUVOJIT appears in it.

Constraints
1 &lt;= T &lt;= 100
1 &lt;= Length of each string &lt;= 150

SAMPLE INPUT                                 SAMPLE OUTPUT
                                         
SUVOJITSU                                    SUVO = 0, SUVOJIT = 1
651SUVOMN                                    SUVO = 1, SUVOJIT = 0
$$$$$SUVOSUVOJIT$$$$$                        SUVO = 1, SUVOJIT = 1






*/

// ---  ANSWER ---


        $s = "651SUVOMN";
        $suvo = "SUVO";
        $suvojit = "SUVOJIT";
        
        $s_temp = $s;
        str_replace($suvojit, "", $s_temp);
        
		
        $munene = new Munene();

        
        

    class Munene{

        public function find($string, $phrase){
            $temp = $string;
            str_replace($phrase, "", $temp);
            $noOfTimesItAppears = (strlen($string) - strlen($temp))/strlen($phrase);
            return $phrase." = ".$noOfTimesItAppears;

        }
    }
	
	echo($munene->find($s_temp,$suvo).", ".$munene->find($s,$suvojit));


?>