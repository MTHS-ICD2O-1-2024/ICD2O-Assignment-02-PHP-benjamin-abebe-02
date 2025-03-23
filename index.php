<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="My first MDL webpage, with favicon" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Benjamin Abebe" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Calculating the Area and Perimeter of a Parallelogram with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Calculating the Area and Perimeter of a Parallelogram with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./parallelogram_diagram.png" alt="Parallelogram Diagram" />
      </div>
      <div class="page-content">
        <h1>Fill in the spaces below!</h1>
      </div>

      <!-- Formula Table -->
      <table border="1">
        <tr>
          <th>Measurement</th>
          <th>Formula</th>
          <th>Explanation</th>
        </tr>
        <tr>
          <td>Area</td>
          <td>Base × Height</td>
          <td>Multiply the base by the perpendicular height.</td>
        </tr>
        <tr>
          <td>Perimeter</td>
          <td>2 × (Base + Side Length)</td>
          <td>Add the base and side length, then multiply by 2.</td>
        </tr>
      </table>
      <!-- Input Form -->
      <form method="POST">
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="number" id="base-input" name="base" required/>
          <label class="mdl-textfield__label" for="base-input">Base</label>
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="number" id="side-input" name="side" required/>
          <label class="mdl-textfield__label" for="side-input">Side Length</label>
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="number" id="height-input" name="height" required/>
          <label class="mdl-textfield__label" for="height-input">Height</label>
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>

        <br />
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          Calculate
        </button>
      </form>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $side = $_POST['side'];
        $height = $_POST['height'];
        $area = $base * $height;
        $perimeter = 2 * ($base + $side);
        /* showing the results when the user puts in values and clicks on the calculate button */
        echo "<h3>Results:</h3>";
        echo "<p>The area of the parallelogram is: " . $area . "</p>";
        echo "<p>The perimeter of the parallelogram is: " . $perimeter . "</p>";
      }
      ?>
    </main>
  </div>
</body>

</html>