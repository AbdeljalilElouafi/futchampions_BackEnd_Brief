<?php
 // Database credentials
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "futchampions_db";

 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $database);

 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }

 // Set the character set to UTF-8 for proper encoding
 mysqli_set_charset($conn, "utf8");

 $p_name="";
 $p_position="";
 $p_rating="";

 $errorMessage="";
 $successMessage="";

 if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
 $p_name= $_POST["name"];
 $p_position= $_POST["position"];
 $p_rating= $_POST["rating"];

   do {
    if ( empty($p_name) || empty($p_position) || empty($p_rating)){
        $errorMessage="All the fields are required!";
        break;
    }


    $sql="INSERT INTO players (player_name, player_position, rating)" .
         "VALUES ('$p_name', '$p_position', '$p_rating')";

    $result = $conn->query($sql);

    if (!$result) {
        $errorMessage="Invalid query: " . $conn->error;
        break;
    }


    $p_name="";
    $p_position="";
    $p_rating="";

    $successMessage="Player added successfully!";

    header("location: /futchampions_BackEnd_Brief/index.php");
    exit;

   } while (false);

 }


 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futchampions Dashboard</title>
    <meta name="author" content="AbdeljalilElouafi">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .bg-form { background:rgba(255, 255, 255, 0.93) }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="index.php" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
            <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="index.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            
            <a href="tables.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Tables
            </a>
            <a href="forms.php" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Forms
            </a>
            
            
        </nav>
        <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
            <i class="fas fa-arrow-circle-up mr-3"></i>
            Upgrade to Pro!
        </a>
    </aside>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                </div>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.php" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="index.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                
                <a href="tables.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-table mr-3"></i>
                    Tables
                </a>
                <a href="forms.php" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-align-left mr-3"></i>
                    Forms
                </a>
                
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-cogs mr-3"></i>
                    Support
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-user mr-3"></i>
                    My Account
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </a>
                <button class="w-full bg-white cta-btn font-semibold py-2 mt-3 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                    <i class="fas fa-arrow-circle-up mr-3"></i> Upgrade to Pro!
                </button>
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="w-full text-3xl text-black pb-6">Forms</h1>

                <div class="flex flex-wrap">

            <div class="form-container w-1/2 mx-auto max-h-screen overflow-y-scroll bg-gradiant-to-r bg-form to-transparent p-8 rounded shadow-lg">
            <form id="playerForm" method="post">
                <!-- Name, Photo, Nationality, Flag, Club, Logo, Rating Inputs -->
                <div class="mb-4">
                    <label for="name" class="block text-black font-medium">Name</label>
                    <input value="<?php echo $p_name; ?>" type="text" id="name" name="name" class="w-full p-1 border border-gray-300 rounded" required>
                    <p id="nameError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid name.</p>
                </div>
                <div class="mb-4">
                    <label for="photo" class="block text-black font-medium">Photo URL</label>
                    <input type="url" id="photo" name="photo" class="w-full p-1 border border-gray-300 rounded" required>
                    <p id="photoError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid url.</p>
                </div>
                <div class="mb-4">
                    <label for="nationality" class="block text-black font-medium">Nationality</label>
                    <input type="text" id="nationality" name="nationality" class="w-full p-1 border border-gray-300 rounded" required>
                    <p id="nationalityError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid nationality.</p>
                </div>
                <div class="mb-4">
                    <label for="flag" class="block text-black font-medium">Flag URL</label>
                    <input type="url" id="flag" name="flag" class="w-full p-1 border border-gray-300 rounded" required>
                    <p id="flagError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid url.</p>
                </div>
                <div class="mb-4">
                    <label for="club" class="block text-black font-medium">Club</label>
                    <input type="text" id="club" name="club" class="w-full p-1 border border-gray-300 rounded" required>
                    <p id="clubError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid club.</p>
                </div>
                <div class="mb-4">
                    <label for="logo" class="block text-black font-medium">Club Logo URL</label>
                    <input type="url" id="logo" name="logo" class="w-full p-1 border border-gray-300 rounded" required>
                    <p id="logoError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid url.</p>
                </div>
                <div class="mb-4">
                    <label for="rating" class="block text-black font-medium">Rating</label>
                    <input value="<?php echo $p_rating; ?>" type="number" id="rating" name="rating" min="0" max="100" class="w-full p-1 border border-gray-300 rounded" required>
                    <p id="ratingError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid rating.</p>
                </div>
        
                
                
                <div class="mb-4">
                    <label for="position" class="block text-black font-medium">Position</label>
                    <select value="<?php echo $p_position; ?>" id="position" name="position" class="w-full p-1 border border-gray-300 rounded" required>
                        <option value="CB">CB</option>
                        <option value="RCB">RCB</option>
                        <option value="LB">LB</option>
                        <option value="RB">RB</option>
                        <option value="CM">CM</option>
                        <option value="LM">LM</option>
                        <option value="RM">RM</option>
                        <option value="LW">LW</option>
                        <option value="RW">RW</option>
                        <option value="ST">ST</option>
                        <option value="GK">GK</option>
                    </select>
                </div>
        
                
                <!-- Player Stats for All Positions -->
                <div id="playerStats" class="mb-4 flex flex-wrap space-x-4">
                    <div class="flex flex-col w-1/3 mb-4">
                        <label for="pace" class="block text-black font-medium">Pace</label>
                        <input type="number" id="pace" name="pace" min="10" max="99" class="w-full p-1 border border-gray-300 rounded" required>
                        <p id="paceError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid pace.</p>
                    </div>
                    <div class="flex flex-col w-1/3 mb-4">
                        <label for="shooting" class="block text-black font-medium">Shooting</label>
                        <input type="number" id="shooting" name="shooting" min="10" max="99" class="w-full p-1 border border-gray-300 rounded" required>
                        <p id="shootingError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid shooting.</p>
                    </div>
                </div>
        
                
                <div id="playerStats2" class="mb-4 flex flex-wrap space-x-4">
                    <div class="flex flex-col w-1/3 mb-4">
                        <label for="passing" class="block text-black font-medium">Passing</label>
                        <input type="number" id="passing" name="passing" min="10" max="99" class="w-full p-1 border border-gray-300 rounded" required>
                        <p id="passingError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid passing.</p>
                    </div>
                    <div class="flex flex-col w-1/3 mb-4">
                        <label for="dribbling" class="block text-black font-medium">Dribbling</label>
                        <input type="number" id="dribbling" name="dribbling" min="10" max="99" class="w-full p-1 border border-gray-300 rounded" required>
                        <p id="dribblingError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid dribbling.</p>
                    </div>
                </div>
        
                
                <div id="playerStats3" class="mb-4 flex flex-wrap space-x-4">
                    <div class="flex flex-col w-1/3 mb-4">
                        <label for="defending" class="block text-black font-medium">Defending</label>
                        <input type="number" id="defending" name="defending" min="10" max="99" class="w-full p-1 border border-gray-300 rounded" required>
                        <p id="defendingError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid defending.</p>
                    </div>
                    <div class="flex flex-col w-1/3 mb-4">
                        <label for="physical" class="block text-black font-medium">Physical</label>
                        <input type="number" id="physical" name="physical" min="10" max="99" class="w-full p-1 border border-gray-300 rounded" required>
                        <p id="physicalError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid physical.</p>
                    </div>
                </div>
        
                
                <!-- Goalkeeper Specific Stats (Hidden by Default) -->
                <div id="gkStats" class="hidden mb-4 flex flex-wrap space-x-4">
                    <div class="flex flex-col w-1/3 mb-4">
                        <label for="diving" class="block text-black font-medium">Diving</label>
                        <input type="number" id="diving" name="diving" min="10" max="99" class="w-full p-1 border border-gray-300 rounded">
                        <p id="divingError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid diving.</p>
                    </div>
                    <div class="flex flex-col w-1/3 mb-4">
                        <label for="handling" class="block text-black font-medium">Handling</label>
                        <input type="number" id="handling" name="handling" min="10" max="99" class="w-full p-1 border border-gray-300 rounded">
                        <p id="handlingError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid handling.</p>
                    </div>
                </div>    
                <div id="gkStats2" class="hidden mb-4 flex flex-wrap space-x-4">
                    <div class="flex flex-col w-1/3 mb-4">
                        <label for="kicking" class="block text-black font-medium">Kicking</label>
                        <input type="number" id="kicking" name="kicking" min="10" max="99" class="w-full p-1 border border-gray-300 rounded">
                        <p id="kickingError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid kicking.</p>
                    </div>
                    <div class="flex flex-col w-1/3 mb-4">
                        <label for="reflexes" class="block text-black font-medium">Reflexes</label>
                        <input type="number" id="reflexes" name="reflexes" min="10" max="99" class="w-full p-1 border border-gray-300 rounded">
                        <p id="reflexesError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid reflexes.</p>
                    </div>
                </div>    
                <div id="gkStats3" class="hidden mb-4 flex flex-wrap space-x-4">
                    <div class="flex flex-col w-1/3 mb-4">
                        <label for="speed" class="block text-black font-medium">Speed</label>
                        <input type="number" id="speed" name="speed" min="10" max="99" class="w-full p-1 border border-gray-300 rounded">
                        <p id="speedError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid speed.</p>
                    </div>
                    <div class="flex flex-col w-1/3 mb-4">
                        <label for="positioning" class="block text-black font-medium">Positioning</label>
                        <input type="number" id="positioning" name="positioning" min="10" max="99" class="w-full p-1 border border-gray-300 rounded">
                        <p id="positioningError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid positioning.</p>
                    </div>
                </div>
        
                
                <div class="mb-6 text-center">
                    <button type="submit" id="submit-btn" class="bg-black text-white p-2 rounded hover:bg-gray-400 p-2" >submit</button>
                    <a href="index.php" class="bg-red-500 text-white p-2 rounded hover:bg-red-600 p-2" >cancel</a>
                </div>
            </form>
        </div>
                </div>
            </main>
    
            <footer class="w-full bg-white text-right p-4">
            Built by <a target="_blank" href="https://github.com/AbdeljalilElouafi" class="underline">AbdeljalilElouafi</a>.
            </footer>
        </div>
        
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>