<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
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
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>

    <h2>"Meet The Team"</h2>

<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="img/jakir.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Zakir Hossain</h2>
        <p class="title">CEO & Founder</p>
        <p>Student of Diu</p>
        <p>Zakir15-4969@diu.edu.bd</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/amir.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Amir shoel</h2>
        <p class="title">Art, Designer</p>
        <p>Student of DIU</p>
        <p>sohel15-5454@diu.edu.bd</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="img/bio.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Bayezid Bostami</h2>
        <p class="title">Designer</p>
        <p>Student of DIU</p>
        <p>Bayezid15-4681@diu.edu.bd</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
