<?php

include 'clientregformdbcon.php';

function handleFormSubmission($con) {
    if (isset($_POST['submit'])) {
        // Extracting and sanitizing inputs
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $mobile = mysqli_real_escape_string($con, $_POST['phone']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $otp = mysqli_real_escape_string($con, $_POST['otp']);

        // Hashing passwords
        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        // Check if email already exists
        $emailquery = "SELECT * FROM client WHERE email='$email'";
        $query = mysqli_query($con, $emailquery);
        $emailcount = mysqli_num_rows($query);

        if ($emailcount > 0) {
            return "email already exists";
        } else {
            if ($password === $cpassword) {
                // Inserting data
                $insertquery = "INSERT INTO client(username, address, email, mobile, password, cpassword, status, otp) VALUES('$username', '$address', '$email', '$mobile', '$pass', '$cpass', 'active', $otp)";
                $iquery = mysqli_query($con, $insertquery);
                // Return the result for handling in test cases or further processing
                return $iquery ? "success" : "insertion failed";
            } else {
                return "password mismatch";
            }
        }
    } else {
        return "form not submitted";
    }
}

?>


<?php

class FormHandlingTest extends PHPUnit\Framework\TestCase {
    public function testEmailExists() {
        // Create a mock database connection
        // Simulate email already exists scenario
        $mockCon = $this->getMockBuilder('mysqli')->getMock();
        // ... mock the behavior of query execution and returning a count > 0

        // Test handleFormSubmission with a mock connection
        $result = handleFormSubmission($mockCon);
        $this->assertEquals("email already exists", $result);
    }

    // Similarly, write test cases for other scenarios like password mismatch, form submission, etc.
}

?>