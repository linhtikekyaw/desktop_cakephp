<?php
error_reporting(-1);
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
?>

<a href="index.php">Go back to index</a>
| <a href="<?php echo $_SERVER["REQUEST_URI"];?>">Refresh</a>

<title>Session</title>
<h1>Session</h1>

<p>Temp directory: <?php echo sys_get_temp_dir(); ?></p>

<h2>The code</h2>
<pre style="background:#ddd">
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
</pre>

<h2>$_SESSION</h2>
Refresh the page to see if counter increases.
<pre style="background:#ddd">
<?php print_r($_SESSION); ?>
</pre>