<?php
include "src/database.php";
// Handle POST request from contact form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are set
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $subject = isset($_POST["subject"]) ? $_POST["subject"] : '';
    $message = isset($_POST["message"]) ? $_POST["message"] : '';

    // Ensure that none of the fields are empty
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "All fields are required!";
        exit;  // Stop the script if any field is empty
    }

    // Query to insert into contact_us table
    $query = "
    INSERT INTO contact_us
    (name,email,subject,message)
    VALUES
    (?,?,?,?)
    ";

    $statement = $connection->prepare($query);
    $statement->bind_param("ssss", $name, $email, $subject, $message);

    // Execute the query and check for success
    if ($statement->execute()) {
        echo "Message submitted successfully!";
    } else {
        echo "Error: " . $statement->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
// Include head section
include "components/head.php";
?>

<body>
    <?php include "components/header.php"; ?>
    <main>
        <section class="contact">
            <h1>Contact Us</h1>
            <h2>Our Location</h2>
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.3017990638295!2d151.1926181765805!3d-33.88188041973795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae2919221809%3A0x632437ffb309dcce!2s7%20Kelly%20St%2C%20Ultimo%20NSW%202007!5e0!3m2!1sen!2sau!4v1743580695994!5m2!1sen!2sau" width="100%" height="450" style="border:0; border-radius: 10px; margin-bottom: 2em;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <h2>Get in touch</h2>
            <form id="contact-form" action="contact.php" method="post">
                <label for="name">Your name</label>
                <input type="text" id="name" name="name" placeholder="Jane Smith" required>

                <label for="email">Your email address</label>
                <input type="email" id="email" name="email" placeholder="janesmith@example.com" required>

                <label for="subject">Subject</label> <!-- Corrected the label for subject -->
                <input type="text" id="subject" name="subject" placeholder="Greetings" required> <!-- Corrected input type -->

                <label for="message">Your message</label>
                <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>

                <div style="display: flex; gap: 10px;">
                    <button type="reset">Cancel</button>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </section>
    </main>
    <?php include "components/footer.php"; ?>
</body>

</html>
