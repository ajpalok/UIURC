<?php
// this will store the alert message in the session and will be displayed in the header include file if there is any message

    class Alert{
         // Method to set an alert message
        public static function set($message, $type = 'info') {
            $_SESSION['alert'] = [
                'message' => $message,
                'type' => $type // 'info', 'success', 'warning', 'error'
            ];
        }

        // Method to display the alert message
        public static function display() {
            if (isset($_SESSION['alert'])) {
                $alert = $_SESSION['alert'];
                echo '<div class="alert alert-' . htmlspecialchars($alert['type']) . ' alert-dismissible fade show" role="' . htmlspecialchars($alert['type']) . '">
                        ' . htmlspecialchars($alert['message']) . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                unset($_SESSION['alert']); // Clear the alert after displaying
            }
        }
    }