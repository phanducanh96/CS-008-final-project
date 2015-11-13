<?php
include ('top.php');
?>
<?php
print "<ol>";
foreach ($records as $oneRecord) {
    if ($oneRecord[1] == "past"){
        if ($oneRecord[0] == $showId) {
            print "\n\t<li>";
            print "<h1>" . $oneRecord[2] . "</h1>";
            print '<img src="' . $oneRecord[8] . '">';
            print "<p>" . $oneRecord[2] . "</p>";
            print "<p>" . $oneRecord[5] . "</p>";
            print "<p>" . $oneRecord[9] . "</p>";

            print "\n\t</li>";
    }
    }
}

print "</ol>";
?>
<hr>
<?php
print"<h2>You May Like:</h2>";
print "<ol>";
foreach ($records as $oneRecord) {
    if ($oneRecord[1] == "past"){
        if ($oneRecord[0] != $showId) {
            print "\n\t<li>";
            print "<a href='show.php?id=" . $oneRecord[0] . "'>" . '<img src="' . $oneRecord[8] . '">' . "</a>";
            print "\n\t</li>";
        }
    }
}
print "</ol>";
?>
<hr>
<?php
print "<h2>Upcoming Show:</h2>";
print "<ol>";
foreach ($records as $oneRecord) {
    if ($oneRecord[1] == "upcoming"){
        if ($oneRecord[0] != "upcomingId") {
            print "\n\t<li>";
            print "<a href='upcoming.php?id=" . $oneRecord[0] . "'>" . $oneRecord[2] . "</a>";
            print "\n\t</li>";
        }
    }
}
print "</ol>";
?>
</article>
<hr>
<?php
include("footer.php");
?>
</body>
</html>
