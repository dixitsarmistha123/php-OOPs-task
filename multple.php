<?php 
  
/*
Ques
How multiple inheritance is handled in PHP? Give example.
           &&
What are traits and namespaces? Give Example.
 
 Ans--
Multiple Inheritance is the property of the Object Oriented Programming languages in which child 
class or sub class can inherit the properties of the multiple parent classes or super classes.
PHP doesn’t support multiple inheritance but by using Interfaces in PHP or using Traits in PHP 
instead of classes, we can implement it.
Traits (Using Class along with Traits): The trait is a type of class which enables multiple
inheritance. Classes, case classes, objects,and traits can all extend no more than one class
but can extend multiple traits at the same time.
*/
require 'injection.php';
require 'interface.php';
trait A { 
  public function show() { 
     echo "show A Trait <br>"; 
   } 
 } 
  
trait B { 
  public function Display() { 
     echo " Display B trait <br>"; 
   } 
 } 
  
class C { 
  use A; 
  use B; 
  public function combo_A_B() { 
  echo "\n this is multiple inheritance using trait"; 
   }  
} 
  
 $q= new first\D();
 $s= new second\D();
$test = new C(); 
$test->show(); 
$test->display(); 
$test->combo_A_B(); 

?> 