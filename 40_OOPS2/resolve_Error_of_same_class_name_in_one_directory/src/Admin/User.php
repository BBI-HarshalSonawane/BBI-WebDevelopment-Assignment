<?php

    // Resolve same class name in same directory with ✅"namespace"✅ attribute
    
    namespace Admin;   // here "Admin" means folder name if folder name is not admin something else then we will use an that folder name.

    class User{
        public Role $role;

        public function __construct(){
            $this->role = new Role();
        }

    }


?>