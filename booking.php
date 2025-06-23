<?php

include("db.php"); // Include your database connection file

$database = new Database();
$conn = $database->connect();

if ($conn === "DATABASE_CONNECTION_FAIL") {
    die("Database connection failed!"); // Handle the error more gracefully if needed
}

// Check if the user is logged in and has a user ID.  You might have different session variable
if (isset($_SESSION['user_id'])) {
    $userID = $_SESSION['user_id'];

    // Fetch booking details for the logged-in user.
    $sql = "SELECT b.booking_id, b.servicetype, b.date, b.booking_status, b.user_id, b.service_id
            FROM booking b  WHERE user_id = ?"; // Use a prepared statement to prevent SQL injection
    echo "SQL Query: " . $sql . "<br>"; 
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userID); // "i" for integer
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if there are any bookings
    if ($result->num_rows > 0) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Your Bookings</title>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
            <script src="https://unpkg.com/@tailwindcss/browser@latest"></script>
            <style>
                body {
                    font-family: 'Inter', sans-serif;
                }
            </style>
        </head>
        <body class="bg-gray-100 p-6">
            <div class="container max-w-2xl mx-auto bg-white shadow-md rounded-lg p-8">
                <h1 class="text-2xl font-semibold text-blue-600 text-center mb-6">Your Bookings</h1>
                <div class="overflow-x-auto">
                    <table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold uppercase tracking-wider">Booking ID</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold uppercase tracking-wider">Service Type</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold uppercase tracking-wider">Booking Date</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <?php
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 text-sm"><?php echo $row['booking_id']; ?></td>
                                    <td class="px-5 py-5 border-b border-gray-200 text-sm"><?php echo $row['service_type']; ?></td>
                                    <td class="px-5 py-5 border-b border-gray-200 text-sm"><?php echo $row['booking_date']; ?></td>
                                    <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                        <span class="inline-block px-2 py-1 rounded-full text-xs font-semibold text-white <?php
                                            switch ($row['status']) {
                                                case 'Pending': echo 'bg-yellow-500'; break;
                                                case 'Confirmed': echo 'bg-green-500'; break;
                                                case 'Cancelled': echo 'bg-red-500'; break;
                                                default: echo 'bg-gray-500';
                                            }
                                        ?>"><?php echo $row['status']; ?></span>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "<p class='text-gray-500 text-center'>You have no bookings yet.</p>";
    }
    $stmt->close();
} else {
    echo "<p class='text-red-500 text-center'>You are not logged in. Please log in to view your bookings.</p>";
}
?>
