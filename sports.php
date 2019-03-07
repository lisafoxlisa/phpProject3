<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  background-image: P
  font-family: Courier new;
}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: black;
  border: 4px solid #FFFFFF;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}h1 {
  font-family: Courier new;
  font-size: 20px;
 text-align: center;
}

a:link, a:visited {
  background-color: white ;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family: Courier new;
  font-size: 20px;
}

a:hover, a:active {
  background-color: red;
}
</style>
</head>
<body>
<a href="tiltedpage_scroll_demo.html" class="btn btn-xl btn-dark mr-4" style="href-align: center;">
<font color="#000000">Return</font>
</a>
    <h1>Sporting Achievements</h1> 
<div class="timeline">
  <div class="container left">
    <div class="content">
      <h2>2018</h2>
      <p>Coached for The International Optimist Dinghy Association of Ireland (IODAI) championships </p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2017</h2>
      <p>Worked at the Sovereigns Cup Championships on the finish boat for sailing </p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2016</h2>
      <p><b>Sailing</b></p>
      <p>Became a qualified junior sailing instructor - including completing a first aid & Water safety course and attaining a Power-boating license</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2015</h2>
      <p><b>Sailing</b></p>
      <p>Competed in the international schools team racing championships in Schull, Cork.</p>
      <p>Competed against international school teams including schools in America & Australia</p>
      
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2013 - 2014 - 2015</h2>
      <p><b>Athletics</b></p>
      <p>Competed in the Munster championships cross country</p>
    </div>
  </div>
  </div>
</div>

</body>
</html>
