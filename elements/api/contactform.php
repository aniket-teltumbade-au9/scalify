<?php
/**
 * PHP Endpoint for Contact Form Submission
 *
 * This script processes a multipart/form-data submission from a contact form.
 * It sends two email notifications:
 * 1. To an administrator, with the user's contact details.
 * 2. To the user, acknowledging their submission.
 * It then returns a JSON response indicating the success or failure of the operation.
 */

// Set the content type for the response to JSON
header('Content-Type: application/json');

// --- Configuration ---
// Replace with your actual admin email address
$adminEmail = 'admin@scalify.uae';
// Replace with your website or company name
$websiteName = 'Scalify';

// Subject lines for the emails
$adminSubject = 'New Contact Form Submission from ' . $websiteName;
$userSubject = 'Thank You for Contacting ' . $websiteName;

// --- Input Validation and Sanitization ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize incoming POST data
    // Using FILTER_SANITIZE_STRING (deprecated in PHP 8.1) or htmlspecialchars is common
    // For modern PHP, consider htmlspecialchars and custom regex for more strict sanitization based on field type.
    $submittedFrom = htmlspecialchars($_POST['submittedFrom'] ?? 'N/A');
    $name = htmlspecialchars($_POST['name'] ?? 'Guest');
    $emailAddress = filter_var($_POST['emailAddress'] ?? '', FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars($_POST['telephone'] ?? '');
    $howDidYouHearAboutUs = htmlspecialchars($_POST['howDidYouHearAboutUs'] ?? 'Not specified');
    $message = htmlspecialchars($_POST['message'] ?? 'No message provided.');
    $csrfToken = htmlspecialchars($_POST['CRAFT_CSRF_TOKEN'] ?? ''); // Important for Craft CMS, but can be ignored for simple forms

    // Basic validation for essential fields
    if (empty($name) || empty($emailAddress) || !filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Invalid or missing name or email address.']);
        exit;
    }

    // --- Send Email to Admin ---
    $adminMailBody = "A new message has been received through the contact page:\n\n";
    $adminMailBody .= "Submitted From: " . $submittedFrom . "\n";
    $adminMailBody .= "Name: " . $name . "\n";
    $adminMailBody .= "Email: " . $emailAddress . "\n";
    $adminMailBody .= "Telephone: " . (!empty($telephone) ? $telephone : 'N/A') . "\n";
    $adminMailBody .= "How did they hear about us: " . $howDidYouHearAboutUs . "\n";
    $adminMailBody .= "Message:\n" . $message . "\n";

    // Headers for the admin email
    $adminHeaders = "From: " . $websiteName . " <no-reply@" . parse_url($_SERVER['HTTP_HOST'], PHP_URL_HOST) . ">\r\n";
    $adminHeaders .= "Reply-To: " . $name . " <" . $emailAddress . ">\r\n";
    $adminHeaders .= "X-Mailer: PHP/" . phpversion();

    $adminMailSent = false;
    try {
        $adminMailSent = mail($adminEmail, $adminSubject, $adminMailBody, $adminHeaders);
    } catch (Exception $e) {
        // Log the error but don't expose it to the user
        echo json_encode(['success' => false, 'message' => "Failed to send admin email: " . $e->getMessage()]);
    }

    // --- Send Acknowledgment Email to User ---
    $userMailBody = "Dear " . $name . ",\n\n";
    $userMailBody .= "Thank you for contacting " . $websiteName . ". We have received your message and will get back to you shortly.\n\n";
    $userMailBody .= "Here's a copy of your message:\n";
    $userMailBody .= "------------------------------------\n";
    $userMailBody .= $message . "\n";
    $userMailBody .= "------------------------------------\n\n";
    $userMailBody .= "Sincerely,\n";
    $userMailBody .= "The Team at " . $websiteName . "\n";

    // Headers for the user acknowledgment email
    $userHeaders = "From: " . $websiteName . " <no-reply@" . parse_url($_SERVER['HTTP_HOST'], PHP_URL_HOST) . ">\r\n";
    $userHeaders .= "Reply-To: " . $adminEmail . "\r\n"; // User can reply to admin
    $userHeaders .= "X-Mailer: PHP/" . phpversion();

    $userMailSent = false;
    try {
        $userMailSent = mail($emailAddress, $userSubject, $userMailBody, $userHeaders);
    } catch (Exception $e) {
        // Log the error
        echo json_encode(['success' => false, 'message' => "Failed to send user acknowledgment email: " . $e->getMessage()]);
    }

    // --- Response to Client ---
    if ($adminMailSent && $userMailSent) {
        echo json_encode(['success' => true, 'message' => 'Your message has been sent successfully.']);
    } else {
        // If one or both emails failed, still indicate success to the user
        // but log the internal error. You might want to adjust this logic
        // based on how critical each email is.
        $errorMessage = 'There was an issue sending some emails. Please try again or contact us directly.';
        if (!$adminMailSent) {
            echo json_encode(['success' => false, 'message' => "Admin email failed to send for contact from " . $name . " (" . $emailAddress . ")"]);
        }
        if (!$userMailSent) {
            echo json_encode(['success' => false, 'message' => "User acknowledgment email failed to send to " . $name . " (" . $emailAddress . ")"]);
        }
        echo json_encode(['success' => true, 'message' => 'Your message was received, but there was an internal issue with email notifications. We will still get back to you!']);
    }

} else {
    // If not a POST request, respond with an error
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}