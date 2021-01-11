<?php
/*
Ques-
What do you understand by dependency injection.
Ans-
Dependency injection is a procedure where one object
supplies the dependencies of another object. Dependency 
Injection is a software design approach that allows avoiding
hard-coding dependencies and makes it possible to change the
dependencies both at runtime and compile time
*/
namespace second;
   class Programmer {
      private $skills;
      public function __construct($skills){
         $this->skills = $skills;
      }
      public function totalSkills(){
         return count($this->skills);
      }
   }
   
   class D{
	    public function msg(){
	   echo "this for namespace<br> ";
		}
   }
  
   $createskills = array("PHP", "JQUERY", "AJAX");
   $p = new Programmer($createskills);
   $s = new D();
   $s->msg();
   echo" this is the number of total skills   ---->  ".$p->totalSkills()."<br>";
?>