<? 
$title = "Competition Results of Bolton Camera Club";
$page = "competition-results";
include('../inc/header.php');

$dom = new DOMDocument();
$dom->loadHTMLFile('https://docs.google.com/document/d/e/2PACX-1vQeSp58XPhA_CCHRxjFvKi9x5jE4-VH_7ismztu49KceE38cEPGo67gKzYqqrjxRpSVU--DkGFgbPCu/pub?embedded=true');
echo $dom->saveHTML();

 include('../inc/footer.php'); 
  ?>