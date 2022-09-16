<?php
  require_once('../common_files/header.php');
 
?>

    <h1>Tables creation</h1>
    <h2>Types</h2>
    <section>
      <h3>Type1:</h3>
      <table>
        <caption>
          Hello
        </caption>
        <thead>          
          <tr>
            <th>Sl.no</th>
            <th>Vehicles Name</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody align="justify">
          <tr>
            <td>1</td>
            <td>Bullet</td>
            <td>1500</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Safari</td>
            <td>10.5L</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Mercedes Benz</td>
            <td>2000</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Avenger</td>
            <td>2L</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total</td>
            <td> 3000</td>
          </tr>
      </tfoot>
      </table>
    </section>

<?php
     require_once('../common_files/footer.php');
?>
