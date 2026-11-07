
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 5 - AJAX and JSON</title>
</head>
<body>

    <h2>Welcome Form</h2>

    <form id="userForm">
        <label>Enter your name:</label>
        <input type="text" id="name" required>

        <button type="submit">Submit</button>
    </form>

    <p id="result"></p>

    <script>
        document.getElementById("userForm")
        .addEventListener("submit", async function(event) {

            event.preventDefault();

            let name = document.getElementById("name").value;

            try {
                
                let response = await fetch("lab5_process.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({ name: name })
                });

                if (!response.ok) {
                    throw new Error("Request failed");
                }

                
                let data = await response.json();

                
                document.getElementById("result")
                    .textContent = JSON.stringify(data);

            } catch (error) {
                document.getElementById("result")
                    .textContent = "Error: " + error.message;
            }
        });
    </script>

</body>
</html>
