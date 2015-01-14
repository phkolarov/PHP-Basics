    <?php

    date_default_timezone_set('Europe/Sofia');

    $currentDateInput = $_GET['currentDate'];

    $messages = $_GET['messages'];

    $messagesArray = (preg_split('/[\n\r]+/', $messages,-1,PREG_SPLIT_NO_EMPTY));

    $dateMessage = [];



    foreach ($messagesArray as $line) {

       $sLine = preg_split('/\s+\/\s+/',$line);

        $dateMessage[trim($sLine[1])]=$sLine[0];
                         //Split the lines with date and message and put it to Array by different values
   }

        ksort($dateMessage);

    $dates = array_keys($dateMessage);
    $lastDate = $dates[count($dates)-1];
                        // Get the last element from Dates Activity Array;


    $lastActivity = difchecker($currentDateInput,$lastDate);
                        //check the difference and return a result;


    foreach ($dateMessage as $key=>$message) {

        echo '<div>'.$message."</div>\n";
   }

    echo '<p>Last active: '.$lastActivity."</p>\n";



function difchecker($currentD, $lastD){

    $currentDate = new DateTime($currentD);
    $lastDateActivity = new DateTime($lastD);

   $difference = $currentDate->diff($lastDateActivity);

    if($difference->d==0 && $difference->h==0 && $difference->i==0 && $difference->s<=59){
        return "<time>a few moments ago</time>";
    }



}