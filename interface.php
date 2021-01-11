<?php 
/*
Ques --
   Create an interface A that has 2 methods,abstract class 
   B implements the method and gives definition
   for 1 method.Create a concrete class and 
   create its object .
*/
namespace first; 

 interface A{
  public function show();
  public function display();
  
}
 abstract class B implements A {
	abstract function printdata();
      public function display() {
         echo "this is display method <br/>";
		 return $this;
      }
   }
  class D extends B {
	   public function printdata(){
         echo "Good evening <br/>";
		 return $this;
      }
	  public function show(){
		  echo"this is show method<br/>";
		  return $this;
	  }
}


$a = new D();
//Ques- Demonstrate the concept of method chaing in PHP.
$a->show()->display()->printdata();
 /*
 This method is called Method Chaining 
 in PHP’s terminology. Each method in class
 in Method Chaining, that is, the method of
 the class returns the object of that class. 
 For Method Chaining, instead of writing value 
 return in class, we have to write return $this;.
 */
 
?>