<?php
session_start();
$_SESSION['cname'] = $_GET['name'];
$_SESSION['cadd'] = $_GET['add'];
$_SESSION['cno'] = $_GET['num'];
?>

<html>
  <body>
    <form action="slip23-2.php">
      <table class="center" style="background-color: powderblue">
        <caption>
          Product Information
        </caption>
        <tr>
          <td>Enter Product Name:</td>
          <td>
            <input type="text" name="pname" required />
          </td>
        </tr>

        <tr>
          <td>Enter Quantity:</td>
          <td>
            <input type="text" name="q" required />
          </td>
        </tr>

        <tr>
          <td>Enter Rate :</td>
          <td>
            <input type="text" name="rate" required />
          </td>
        </tr>

        <tr>
          <td></td>
          <td>
            <input
              type="submit"
              name="submit"
              value="submit"
              class="btn orange"
            />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
