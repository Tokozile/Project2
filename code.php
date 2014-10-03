<?php
/*
Initiate a blank contestants array
We'll be filling this up with data from the $_POST array
*/


 /*         $rand_words = array('today' => 'today', 
          	'tomorrow' => 'tomorrow', 
          	'love' => 'love', 
          	'generation' => 'generation', 
          	'could' => 'could', 
          	'is' => 'is', 
          	'would' => 'would', 
          	'never' => 'never', 
          	'especially' => 'especially', 
          	'remarkable' => 'remarkable', 
          	'authority' => 'authority', 
          	'why' => 'why', 
          	'history' => 'history', 
          	'repeats' => 'repeats', 
          	'itself' => 'itself', 
          	'she' => 'she', 
          	'he' => 'he', 
          	'monday' => 'monday', 
          	'wednesday' => 'wednesday', 
          	'joyousness' => 'joyousness', 
          	'beautiful' => 'beautiful', 
          	'sunshine' => 'sunshine',
            'moonlight' => 'moonlight', 
            'couch' => 'couch', 
            'mouth' => 'mouth', 
            'relinquish' => 'relinquish', 
            'life' => 'life', 
            'goregous' => 'goregous', 
            'grateful' => 'grateful', 
            'many' => 'many', 
            'few' => 'few');  */  

          $rand_words = array('today', 'tomorrow', 'love', 'generation', 'could', 'is', 'would', 'never', 'especially', 'remarkable', 'authority', 'why', 'history', 'repeats', 'itself', 'she', 'he', 'monday', 'wednesday', 'joyousness', 'beautiful', 'sunshine', 'moonlight', 'couch', 'mouth', 'relinquish', 'life', 'goregous', 'grateful', 'many', 'few'); 

/*$words = array_rand($rand_words); */
$words = array_rand($rand_words, 5);


/* $rand_keys = array_rand($input, 3);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
echo $input[$rand_keys[2]] . "\n"; */