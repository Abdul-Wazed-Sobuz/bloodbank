<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About BdDonor.com</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #1A1423;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: red;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
.profile{
    display: flex;
    align-items: center;
    justify-content: center;
}
.profile img{
    border-radius: 50%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
<body>

<div class="about-section" style="height: 300px;">
  <h1><a style="text-decoration:none;color:red" href="admin/admindash.php"><i style="padding:0px 5px ;color:red" class="fa-solid fa-droplet"></i>BdDonor</a></h1>
  <p>It's a live saving platfrom for critically ill patient</p>
  <p>It's a managment website for a blood bank system. Here a by loggin to the system a user can search for blood and contact the donor. If he or she whats to order form already collected blood he or she can also do it. Any of our user can be a donor by submiting a KYC form to any of our branch. Any hospital can have an account to our system where they can order blood on behalf of their patient form our collection points.</p>
</div>


<h2 style="text-align:center;padding:20px">Meet Our Developer Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="profile"><img src="images/aws.png" alt="Jane" style="height:240px;width:55%"></div>
      <div class="container">
        <h2 class="">ABDUL WAZED</h2>
        <p class="title">CEO & Founder</p>
        <p style="text-align: justify;">Hi, I am Abdul Wazed, I am currently completing my graduation on CSE from Aamerican Iternational University, Bangladesh(AIUB). I am very passionate about web development specially in PHP and Laravel. Also love to play games.</p>
        <p>abdulwazedsobuz@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="profile"><img src="images/nft.jpg" alt="Mike" style="height:240px;width:auto"></div>
      <div class="container">
        <h2 class="">NAFISA MOLLA</h2>
        <p class="title">Designer</p>
        <p >Hi, Myself Nafisa Molla, I am currently completing my graduation on CoE from Aamerican Iternational University, Bangladesh(AIUB). Besides my study I am very passionate about visual arts, color and desiginging specially UI and UX</p>
        <p>nafisamolla43@gmail..com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="profile"><img src="images/amt.png" alt="John" style="height:240px;width:auto"></div>
      <div class="container">
        <h2>ALIMUL MAHFUZ</h2>
        <p class="title">Programmer</p>
        <p style="text-align: justify;">Hi, I am Alimul Mahfuz, I am currently completing my graduation on CSE from Aamerican Iternational University, Bangladesh(AIUB).I like new bleeding edge technology, love to code. Love to watch movie and listen songs</p>
        <p>alimulmahfuztushar@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<?php include 'layouts/footer.php' ?>
</body>
</html>
