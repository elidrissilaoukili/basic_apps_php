<!DOCTYPE html>
<html lang="en">

<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./style.css">
     <title>Car Rental</title>
</head>

<style>
     @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap');

     body {
          margin: 0;
          padding: 0;
          background-color: rgba(255, 255, 255, 1);
          font-family: 'Rubik', sans-serif;
     }

     header {
          background-color: rgba(0, 0, 0, 0.035);
          margin: auto;
          padding: 0rem 2rem;
     }

     nav {
          max-width: 900px;
          margin: auto;
          display: flex;
          justify-content: space-between;
     }

     nav a {
          text-decoration: none;
          margin: 1rem 1rem;
     }

     .btn {
          font-size: 20px;
          color: #6c757d;
     }


     /* add page */
     .add-container {
          max-width: 500px;
          background-color: none;
          margin: 2rem auto;
          padding: 1rem;
     }

     .center h3 {
          text-align: center;
          margin-bottom: 1.5rem;
     }

     .form-container {
          padding: 1rem;
          background-color: white;
          border-radius: 10px;
     }

     .sub {
          text-align: right;
     }

     .center-btn {
          width: 25%;
          padding: 0.3rem 0;
          margin: 0.4rem 0;
          border-radius: 4px;
          color: whitesmoke;
          font-size: 18px;
          border: none;
          background-color: rgba(0, 0, 0, 0.5);
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
     }

     .names {
          display: flex;
          justify-content: space-between;
     }

     .mr-r1 {
          margin-right: 0.5rem;
     }

     /* Home page */
     .home-container {
          max-width: 1000px;
          background-color: none;
          margin: 2rem auto;
          padding: 0;
     }

     .cent-txt {
          text-align: center;
     }

     .card-container {
          display: flex;
          justify-content: center;
          flex-wrap: wrap;
     }

     .card-info {
          border-radius: 10px;
          box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
          padding: 1rem;
          margin: 1rem;
          width: 400px;
     }

     .cent-txt h6 {
          margin-bottom: 1.5rem;
     }

     /*.info {
           
     }*/

     .info span {
          color: darkslateblue;
     }


     .details {
          border-top: 1px solid rgba(0, 0, 0, 0.3);
          text-align: right;
     }

     .details a {
          text-decoration: none;
          color: darkgray;
     }


     /* details */
     .all-details {
          display: flex;
          justify-content: center;
          line-height: 15px;
     }

     .delete {
          background-color: darkred;
          color: whitesmoke;
          padding: 0.2rem 1.5rem;
          margin-top: 1rem;
     }

     .delete:hover {
          background-color: darkred;
          color: whitesmoke;
          padding: 0.2rem 1.5rem;
          margin-top: 1rem;
     }

     /* footer */
     footer {
          text-align: center;
          margin-top: 3rem;
     }
</style>

<body>

     <header>
          <nav>
               <a class="btn" href="index.php">Home</a>
               <a class="btn btn-outline-secondary" href="add.php">Add Car</a>
          </nav>
     </header>