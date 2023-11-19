<?php
// Connect to the MySQL database
$db = new mysqli('localhost', 'root', '', 'contact_us');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Fetch data from the 'contactinfo' table
$sql = "SELECT * FROM contactinfo";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["firstName"] . "</td>
                <td>" . $row["lastName"] . "</td>
                <td>" . $row["eMail"] . "</td>
                <td>" . $row["telNumber"] . "</td>
                <td>" . $row["userMessage"] . "</td>
            </tr>";
    }

    echo "</tbody>
        </table>";
} else {
    echo "No records found";
}

$db->close();
?>