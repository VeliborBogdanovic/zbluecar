<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
	<div>
		<a href='<?php echo site_url('adminPanel/modifyMeni')?>'>Modify Meni</a> |
		<a href='<?php echo site_url('adminPanel/modifyUsers')?>'>Modify users</a> |
		<a href='<?php echo site_url('adminPanel/modifyAds')?>'>Modify ads</a> |
		<a href='<?php echo site_url('adminPanel/modifyBrands')?>'>Modify brands</a> | 
		<a href='<?php echo site_url('adminPanel/modifyFuels')?>'>Modify fuels</a> |		 
		<a href='<?php echo site_url('adminPanel/modifyPolls')?>'>Modify polls</a> |
                <a href='<?php echo site_url('adminPanel/modifyQuestions')?>'>Modify questions</a> |
                <a href='<?php echo site_url('adminPanel/modifyAnswers')?>'>Modify answers</a> |
		
	</div>
	<div style='height:20px;'></div>  
    <div>
        <table id="rounded-corner">
            <thead>
            <th>Path</th>
             <th>Name</th>
              <th>Delete</th>
               <th>New Row</th>
                <th>Modify</th>
            </thead>
		<?php
                    foreach ($meni as $m) {
                        echo "<tr><td>{$m->path}</td><td>{$m->meni_name}</td><td>obrisi</td><td>dodaj</td><td>modify</td>";
                    }
                ?>
        </table>
    </div>
</body>
</html>