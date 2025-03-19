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
        <img src="./parallelogram-diagram.png" alt="Parallelogram Diagram" />
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

      <!-- Explanation Table -->
      <table border="2">
        <tr>
          <th>Base</th>
          <th>Side Length</th>
          <th>Height</th>
        </tr>
        <tr>
          <td>The <em>Base</em> is usually the bottom side in a diagram.</td>
          <td>The <em>Side length</em> is the slanted side (used for perimeter).</td>
          <td>The <em>Height</em> is the perpendicular distance from the base to the opposite side.</td>
        </tr>
      </table>

      <!-- Input Form -->
      <form method="POST">
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="number" id="base-input" name="base" />
          <label class="mdl-textfield__label" for="base-input">Base</label>
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="number" id="side-input" name="side" />
          <label class="mdl-textfield__label" for="side-input">Side Length</label>
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="number" id="height-input" name="height" />
          <label class="mdl-textfield__label" for="height-input">Height</label>
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>

        <br />
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          Calculate
        </button>
      </form>

      <?php
      // Get form values if set
      $base = $_POST['base'] ? $_POST['base'] : 0;
      $side = $_POST['side'] ? $_POST['side'] : 0;
      $height = $_POST['height'] ? $_POST['height'] : 0;

      // If values are filled in, calculate area and perimeter
      if ($base && $side && $height) {
        $area = $base * $height;
        $perimeter = 2 * ($base + $side);
        echo "<h3>Results:</h3>";
        echo "<p>The area of the parallelogram is: " . number_format($area, 2) . "</p>";
        echo "<p>The perimeter of the parallelogram is: " . number_format($perimeter, 2) . "</p>";
      }
      ?>
    </main>
  </div>
</body>

</html>