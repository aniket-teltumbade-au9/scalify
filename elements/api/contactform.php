<?php
include "../../config.php";
/**
 * PHP Endpoint for Contact Form Submission
 *
 * This script now uses a class-based approach for better structure,
 * improved security, and enhanced error handling.
 */

// Set the content type for the response to JSON
header('Content-Type: application/json');

// Ensure the request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

// Check for required configuration constants
if (!defined('MAIL_API_KEY') || !defined('MAIL_URL')) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Email API configuration is missing.']);
    exit;
}

class ContactFormHandler
{

    private string $adminEmail;
    private string $websiteName;

    public function __construct(string $adminEmail, string $websiteName)
    {
        $this->adminEmail = $adminEmail;
        $this->websiteName = $websiteName;
    }

    /**
     * Handles the contact form submission.
     */
    public function handleSubmission(): void
    {
        try {
            $formData = $this->validateAndSanitize($_POST);
            $this->sendEmails($formData);
            $this->respond(true, 'Your message has been sent successfully.');
        } catch (InvalidArgumentException $e) {
            http_response_code(400); // Bad Request
            $this->respond(false, $e->getMessage());
        } catch (RuntimeException $e) {
            http_response_code(500); // Internal Server Error
            error_log("Email sending failed: " . $e->getMessage());
            $this->respond(false, 'We received your message, but there was an internal issue with email notifications. Please try again or contact us directly.');
        }
    }

    /**
     * Validates and sanitizes the form data.
     * @param array $data The raw POST data.
     * @return array The sanitized data.
     * @throws InvalidArgumentException If validation fails.
     */
    private function validateAndSanitize(array $data): array
    {
        $name = htmlspecialchars($data['name'] ?? '', ENT_QUOTES, 'UTF-8');
        $emailAddress = filter_var($data['emailAddress'] ?? '', FILTER_SANITIZE_EMAIL);
        $message = htmlspecialchars($data['message'] ?? '', ENT_QUOTES, 'UTF-8');

        if (empty($name) || empty($emailAddress) || !filter_var($emailAddress, FILTER_VALIDATE_EMAIL) || empty($message)) {
            throw new InvalidArgumentException('Invalid or missing name, email address, or message.');
        }

        return [
            'submittedFrom' => htmlspecialchars($data['submittedFrom'] ?? 'N/A', ENT_QUOTES, 'UTF-8'),
            'name' => $name,
            'emailAddress' => $emailAddress,
            'telephone' => htmlspecialchars($data['telephone'] ?? '', ENT_QUOTES, 'UTF-8'),
            'howDidYouHearAboutUs' => htmlspecialchars($data['howDidYouHearAboutUs'] ?? 'Not specified', ENT_QUOTES, 'UTF-8'),
            'message' => $message,
            'newsletterSubscription' => isset($data['newsletter']),
        ];
    }

    /**
     * Sends both the admin and user emails.
     * @param array $formData The sanitized form data.
     * @throws RuntimeException If email sending fails.
     */
    private function sendEmails(array $formData): void
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Api-Key: ' . MAIL_API_KEY,
                'Accept: application/json',
            ],
            CURLOPT_URL => MAIL_URL,
        ]);

        $adminPayload = $this->buildAdminEmailPayload($formData);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $adminPayload);
        $adminResponse = curl_exec($curl);
        $adminHttpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        $userPayload = $this->buildUserEmailPayload($formData);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $userPayload);
        $userResponse = curl_exec($curl);
        $userHttpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        if (!($adminHttpCode >= 200 && $adminHttpCode < 300 && $userHttpCode >= 200 && $userHttpCode < 300)) {
            $errorMessage = "Admin status: {$adminHttpCode} ({$adminResponse}). User status: {$userHttpCode} ({$userResponse}).";
            throw new RuntimeException($errorMessage);
        }
    }

    /**
     * Builds the JSON payload for the admin email.
     * @param array $data The sanitized form data.
     * @return string The JSON payload.
     */
    private function buildAdminEmailPayload(array $data): string
    {
        $textContent = "A new message has been received through the contact page:\n\n" .
            "Submitted From: {$data['submittedFrom']}\n" .
            "Name: {$data['name']}\n" .
            "Email: {$data['emailAddress']}\n" .
            "Telephone: " . (!empty($data['telephone']) ? $data['telephone'] : 'N/A') . "\n" .
            "How did they hear about us: {$data['howDidYouHearAboutUs']}\n" .
            "Message:\n{$data['message']}\n" .
            "Newsletter Subscription: " . ($data['newsletterSubscription'] ? 'Yes' : 'No') . "\n";

        return json_encode([
            'sender' => ['name' => $this->websiteName, 'email' => $this->adminEmail],
            'to' => [['email' => $this->adminEmail, 'name' => 'Admin']],
            'subject' => "New Contact Form Submission from " . $this->websiteName,
            'textContent' => $textContent,
        ]);
    }

    /**
     * Builds the JSON payload for the user acknowledgment email.
     * @param array $data The sanitized form data.
     * @return string The JSON payload.
     */
    private function buildUserEmailPayload(array $data): string
    {
        $htmlContent = "<html><body>
            <p>Dear " . htmlspecialchars($data['name']) . ",</p>
            <p>Thank you for contacting " . htmlspecialchars($this->websiteName) . ". We have received your message and will get back to you shortly.</p>
            <p>Here's a copy of your message:</p>
            <div style='border: 1px solid #ccc; padding: 15px; background-color: #f9f9f9; border-radius: 5px;'>
                <p style='white-space: pre-wrap; margin: 0;'>" . htmlspecialchars($data['message']) . "</p>
            </div>
            <br>
            <p>Sincerely,</p>
            <p>The Team at " . htmlspecialchars($this->websiteName) . "</p>
        </body></html>";

        return json_encode([
            'sender' => ['name' => $this->websiteName, 'email' => $this->adminEmail],
            'to' => [['email' => $data['emailAddress'], 'name' => $data['name']]],
            'subject' => "Thank You for Contacting " . $this->websiteName,
            'htmlContent' => $htmlContent,
        ]);
    }

    /**
     * Sends the final JSON response to the client.
     * @param bool $success Whether the operation was successful.
     * @param string $message The message to be sent back.
     */
    private function respond(bool $success, string $message): void
    {
        echo json_encode(['success' => $success, 'message' => $message]);
        exit;
    }
}

// Instantiate and run the handler
$handler = new ContactFormHandler(
    adminEmail: 'aniketteltu@gmail.com', // Replace with your admin email
    websiteName: 'Scalify' // Replace with your website name
);
$handler->handleSubmission();
