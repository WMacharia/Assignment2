<?php
class signupform{
    public function sign_up_form($conn){    
            ?>
        <div>
        <h2>Sign Up</h2>
        <form method="POST" action="signup.php">
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Email" required>
            </div>
            <div>
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter Full Name" required>
            </div>
            <div>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter Username" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>
    <?php
    }
}