<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Assigment</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f4f4f4;
      }
      .form-container {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }
      label {
        display: block;
        margin-top: 10px;
      }
      input {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
      button {
        margin-top: 15px;
        background-color: #28a745;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      button:hover {
        background-color: #218838;
      }
    </style>
  </head>
  <body>
    <div class="form-container">
      <h2>Register</h2>
      <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="job">Job Title:</label>
        <input type="text" id="job" name="job" required />

        <label for="picture">Upload Picture:</label>
        <input
          type="file"
          id="picture"
          name="picture"
          accept="image/*"
          required
        />

        <button type="submit">Submit</button>
      </form>
    </div>
  </body>
</html>
