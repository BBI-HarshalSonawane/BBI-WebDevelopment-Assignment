<?php
// in src folder u can see we create an 2 folders 👉 Admin 👉 Client
// In which we create same ✅"class" name as 👉 "User"
// Now we try to access both 👉 "User" class at same time here
// we will get error ❌ by following way we will resolve that error 👇

    require __DIR__.'/src/Admin/User.php';
    require __DIR__.'/src/Admin/Role.php';
    require __DIR__.'/src/Client/User.php';

    use Admin\User as myAdminUser;
    use Client\User as myClientUser;

// Now below we try to access that classes 👉 "User"

    // $admin = new Admin\User();  // 1️⃣ way to access an "User" class in "Admin" folder

    $admin = new myAdminUser();  // 2️⃣ way we already declared it above 👆
    var_dump($admin);

    echo "<br>";
// same for "Client" 👈 folder "User" class

    $client = new myClientUser();
    var_dump($client);

    echo "<br>";
// ---------------------------------------------------------------------

// Get an ✅"class" of specific declared variable.

    var_dump($admin::class)."\n"; // 1️⃣ way      (::)
    var_dump(get_class($admin));    // 2️⃣ way    (get_class)
    echo "<br>";
    var_dump($client::class)."\n";
    var_dump(get_class($client));
    
    echo "<br>"; echo "<br>";
// ---------------------------------------------------------------------

// check ✅ if given variable is specific 👉"instance of an class"👈

    var_dump($client instanceof myClientUser);
   


?>
