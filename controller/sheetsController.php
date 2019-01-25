<?php
class sheetController
{
    //function that allows you to retrieve all the timesheets
    function showListSheets()
    {
        $sheetManagement = new sheetsManagement();
        $sheets = $sheetManagement->getAllSheets();
        require "view/listSheetsView.php";
    }

    //function to add a sheet to the database
    function showAddSheet()
    {
        $value = "Ajouter";
        if(!empty($_POST) && $_POST["button"] === "Ajouter")
        {
            if(clearForm($_POST))
            {
                $sheetManagement = new sheetsManagement();
                $sheet = new sheet($_POST);
                $sheetManagement->addSheet($sheet);
                redirectTo("sheetsList");
            }
        }
        require "view/sheetAddView.php";
    }

    //function to update a sheet to the database
    function showUpdateSheet()
    {
        $value = "Modifier";
        $id = htmlspecialchars($_GET["id"]);
        $sheetManagement = new sheetsManagement();
        $sheet = $sheetManagement->getSheet($id);
        if(!empty($_POST) && $_POST["button"] === "Modifier")
        {
          //Je nettoie le form et sécurise les données
          if(clearform($_POST))
          {
            $newSheet = new sheet($_POST);
            $sheetManagement->updateSheet($newSheet);
            //redirectTo("sheetsList");
          }
        }
        require "view/sheetAddView.php";
    }

    //function to delete a sheet to the database
    function showDeleteSheet()
    {
        if(isset($_GET["id"]))
        {
          $id = htmlspecialchars($_GET["id"]);
          $sheetManagement = new sheetsManagement();
          $sheetManagement->deleteSheet($id);
            redirectTo("sheetsList");
        }
    }
}
?>
