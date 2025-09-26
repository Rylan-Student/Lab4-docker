<?php
/* A little help setting up the math methodology from chatGPT, but mostly authored by me
*/

$n = 0;
if(isset($_GET['n'])){
  $n = intval($_GET['n']);
  if($n < 1) $n = 1;
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Practice 4 — Multiplication Table</title>
<style>table{border-collapse:collapse;} td,th{border:1px solid #999;padding:6px;text-align:center;}</style>
</head>
<body>
  <h1>Multiplication Table</h1>
  <form method="get">
    <label>Number: <input type="number" name="n" value="<?php echo htmlspecialchars($n); ?>" min="1"></label>
    <button type="submit">Show</button>
  </form>

<?php if($n > 0): ?>
  <h2>Table 1 × 1 through <?php echo $n; ?></h2>
  <table>
    <tr><th></th>
      <?php for($c=1;$c<=$n;$c++) echo "<th>$c</th>"; ?>
    </tr>
    <?php for($r=1;$r<=$n;$r++): ?>
      <tr>
        <th><?php echo $r; ?></th>
        <?php for($c=1;$c<=$n;$c++): ?>
          <td><?php echo $r * $c; ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>
<?php endif; ?>

</body>
</html>
