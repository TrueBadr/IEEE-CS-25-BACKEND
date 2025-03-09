<?php
mkdir("Elzero", 0740);
fopen("Work.docx", "w+");
fopen("Result.txt", "w+");
function change_permissions($file_name)
{
    if(is_dir($file_name))
    {
        return "This Is Directory And Only Files Allowed\n";
    }
    if(pathinfo($file_name,PATHINFO_EXTENSION)!="txt")
    {

        return "File Extension Is Not txt\n";
    }
    else
    {
        chmod($file_name,0740);
        return "Permissions Changed\n";
    }

}
rmdir("Elzero");
echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed
?>
