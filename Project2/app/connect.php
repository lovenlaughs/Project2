 <?php
            
				
	/*$username = "ti153451";
	$password = "1Dancinginlife!";
	$database = "ti153451";

	$connect = mysql_connect("localhost", "$username", "$password") or die(mysql_error());
	mysql_select_db("$database") or die(mysql_error());

	if (isset($_POST['submit'])) {
		$answer1 = $_POST['answer1'];
		echo "Correct!";
		}
			else {
				echo "This information is incorrect";
			}
			
		
	$sql = "SELECT * FROM Answers WHERE answer1 = '".$answer1."'";
	$results = mysql_query($sql);


	
			
			
            /*$answer1 = $_POST['question-1-answers'];
            
            if ($_POST['submit']) { 
				$answer1 == "Claude McKay";				
			    echo "<div id='results'>This is correct!</div>";
			}
			else {
				echo "This is not correct";
			}*/
    
	    
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5) { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            
        ?>