<?php
class Todo
{
   private $_params;
    
   public function __construct($params)
   {
      $this->_params = $params;
   }
    
   public function createAction()
   {
       //create a new todo item
   $todo = new TodoItem();
   $todo->title = $this->_params['title'];
   $todo->description = $this->_params['description'];
   $todo->due_date = $this->_params['due_date'];
   $todo->is_done = 'false';
    
   //pass the user's username and password to authenticate the user
   $todo->save($this->_params['username'], $this->_params['userpass']);
    
   //return the todo item in array format
   return $todo->toArray();
   }
    
   public function readAction()
   {
      //read all the todo items
      //read all the todo items while passing the username and password to authenticate
		$todo_items = TodoItem::getAllItems($this->_params['username'], $this->_params['userpass']);
		
		//return the list
		return $todo_items;
   }
    
   public function updateAction()
   {
      //update todo item
   }
    
   public function deleteAction()
   {
      //delete a todo item
		
   }
}