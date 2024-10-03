<?php
class signupform{
    public function sign_up_form(){    
        require_once "load.php";
            ?>
        <div>
        <h2>Sign Up</h2>
        <form method="POST" action="signup.php">
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Email" required>
            </div>
            <div>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter Username" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
            </div>
            <div>
                <label for="genderId">Gender</label><br>
                <?php
                    $sql = "SELECT genderId, gender FROM gender";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo "<input type='radio' name='genderId' value='{$row['genderId']}'> {$row['gender']}<br>";
                    }
                ?>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>
    <?php
    }
}