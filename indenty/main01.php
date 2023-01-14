<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        form {
          width: 500px;
          margin: 0 auto;
          padding: 20px;
          border: 1px solid #ccc;
          border-radius: 5px;
        }
      
        label {
          font-weight: bold;
          margin-bottom: 5px;
          display: block;
        }
      
        input[type="file"] {
          width: 100%;
          padding: 12px 20px;
          margin-bottom: 20px;
          box-sizing: border-box;
          border: 2px solid #ccc;
          border-radius: 4px;
        }
      
        input[type="text"],
        input[type="email"] {
          width: 100%;
          padding: 12px 20px;
          margin-bottom: 20px;
          box-sizing: border-box;
          border: 2px solid #ccc;
          border-radius: 4px;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="file"]:focus{
          border: 2px solid #555;
        }
      
        input[type="submit"] {
          width: 100%;
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin-bottom: 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
      </style>
<body>
    
      <!-- main code -->
      <form action="main02.php" method="post" enctype="multipart/form-data">
        <label>Upload Image:</label>
        <input type="file" name="img" accept="image/*" required>
        <br>
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Job:</label>
        <input type="text" name="job" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>ID Number:</label>
        <input type="text" name="idno" required>
        <br>
        <input type="submit" value="Submit" name="submit">
      </form>
      
</body>
</html>