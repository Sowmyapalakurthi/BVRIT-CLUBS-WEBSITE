<?php
session_start();
if (!isset($_SESSION["contact"])) {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>BVRIT CLUBS</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <header>
    <img src="images/bvrit logo.jpg">

    <div class="headings1">
      <a class="anchor" href="#" style="padding-right:405px;"><b>CLUBS|BVRIT</b></a>
      <a href="index.php">Home</a>
      
      <a href="events.html">Events</a>
      <a href="logout.php">Logout</a>
    </div>
  </header>
  <h1>BVRIT CLUBS</h1>

  <div class="container">
    <div class="ccbclub">
      <img src="images/ccb logo.jpg" />
      <h2>Cultural Club BVRIT</h2>
      <p>Dance and singing club.</p>
      <a href="club.html"><button>More Info</button></a>
    </div>

    <div class="ccbclub">
      <img src="images/cbb logo.jpg" />
      <h2>Coding Brigade BVRIT</h2>
      <p>Coding club of BVRIT.</p>
      <a href="cbb.html"><button>More Info</button></a>
    </div>


    <div class="ccbclub">
      <img src="images/gdsc bvrit logo.jpg" />
      <h2>GDSC BVRIT</h2>
      <p>Related to coding club.</p>
      <a href="gdsc.html"><button>More Info</button></a>
    </div>

    <div class="ccbclub">
      <img src="images/nss logo.jpg" />
      <h2>NSS BVRIT</h2>
      <p>Related to social service.</p>
      <a href="nss.html"><button>More Info</button></a>
    </div>

    <div class="ccbclub">
      <img src="images/Ecell bvrit logo.jpg" />
      <h2>E-Cell BVRIT</h2>
      <p>Related to entrepreneurship.</p>
      <a href="ecell.html"><button>More Info</button></a>
    </div>

    <div class="ccbclub">
      <img src="images/My bvrit logo.jpg" />
      <h2>MyBVRIT Media</h2>
      <p>Related to photography.</p>
      <a href="mybvritmedia.html"><button>More Info</button></a>
    </div>

    <div class="ccbclub">
      <img src="images/street cause logo.jpg" />
      <h2>Street Cause BVRIT</h2>
      <p>Related to social service.</p>
      <a href="streetcause.html"><button>More Info</button></a>
    </div>

    <div class="ccbclub">
      <img src="images/el bvrit logo.jpg" />
      <h2>Enlightening Lights</h2>
      <p>Related to social cause.</p>
      <a href="enlighteninglights.html"><button>More Info</button></a>
    </div>

    <div class="ccbclub">
      <img src="images/chalanachitram.jpg">
      <h2>Chalana Chitram Club</h2>
      <p>Film making club of BVRIT</p>
      <a href="itinnovation.html"><button>More Info</button></a>
    </div>
  </div>
</body>
<footer>
  <div class="container">
    <p>&copy; <?php echo date('Y'); ?> BVRIT Clubs. All rights reserved.</p>
  </div>
</footer>

</html>
