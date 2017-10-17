<html>
   <body>
      
      <?php
      $note1 =  <<<_END
        <note>
            <to>Gopal K Verma</to>
            <from>Sairamkrishna</from>
            <heading>Project submission</heading>
            <body>Please see clearly </body>
         </note>
_END;
      
      echo $note1;
      $xml=simplexml_load_string($note);
      print($xml); 
         
      ?>
 		
   </body>
</html>
