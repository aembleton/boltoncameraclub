<? 
$title = "Syllabus of Bolton Camera Club";
$page = "syllabus";
include('../inc/header.php');
echo "<h1>Syllabus</h1>";

$json = file_get_contents('https://api.sheety.co/10db8d92-7ade-4645-ad44-dd3e5a7405ff');
$data = json_decode($json, true);
?>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Subject</th>
            <th scope="col">Speaker</th>
        </tr>
    </thead>
    <tbody>
<?
foreach ($data as $entry) {
?>
    <tr>
        <td><? echo $entry["date"] ?></td>
        <td><? echo $entry["subject"] ?></td>
        <td><? echo $entry["speaker"] ?></td>
    </tr>
<?
}
?>
    </tbody>
</table>
<?
 include('../inc/footer.php'); 
  ?>