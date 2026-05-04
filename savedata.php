<?php

$servername = "localhost";
$username = "root";       
$password = "kaung812001";             
$dbname = "batch12/13";     


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    
    $sql = "INSERT INTO contact_messages (full_name, email, message,phone) 
            VALUES ('$full_name', '$email', '$message',$phone)";

   if ($conn->query($sql) === TRUE) {
    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head>
    <body>
        <script>
            Swal.fire({
                title: 'Successfully',
                text: 'Message Stored',
                icon: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#00A3E1' // 
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'Protifolio.php';
                }
            });
        </script>
    </body>
    </html>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>
<script>
    Swal.fire({
    toast: true,
    position: 'top-end',
    icon: 'success',
    title: 'Insert data Successfully',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true
}).then(() => {
    window.location.href = 'Protifolio.php';
});
</script>