<? 
$title = "Competition Results of Bolton Camera Club";
$page = "competition-results";
include('../inc/header.php');

$dom = new DOMDocument();
$dom->loadHTMLFile('https://docs.google.com/document/d/e/2PACX-1vQ--t3WdjMkTyTZ_M8QSIRuIA1gua-29gQlQ0lpSbjkGB4F_RTv41626ZM-eWYgp14O7BZNapE4u7V9/pub?embedded=true');
echo $dom->saveHTML();

 include('../inc/footer.php'); 
  ?>