<?php require( 'includes/conecta.php' ); ?>
<?php
	$user_id = $_SESSION['user_id'];
	$sql_los ="SELECT * FROM ccd WHERE user_id = $user_id ORDER BY STR_TO_DATE(mes,'%d/%m/%Y') ASC";
	$rs_los = mysql_query( $sql_los, $conn ) or die( 'Ocorreu um erro. Erro: ' . mysql_error()  );
	$row_num = mysql_num_rows($rs_los);
?>
<div data-role="page" data-control-title="Home" id="home" data-theme="a">
	<?php include("includes/panel.php");?>
    <div data-theme="a" data-role="header" data-position="fixed">
        <a data-controltype="panelbutton" data-role="button" href="#panel" data-icon="bars"
        data-iconpos="notext"></a>
        <h3>
            <?php echo $home_header; ?>
        </h3>
    </div>
    <div data-role="content">
		<p style="font-size:small;">
			<?php echo $home_desc; ?>		
		</p>
		<div style="text-align:center;">
		<a data-role="button" data-theme="b" data-transition="slide" href="#" onClick="go('ccd.php?mode=new');" data-ajax="false" 	data-icon="plus" data-iconpos="right" data-inline="true" >
			<?php
			if($row_num > 0) { 
				echo $home_bt_edit;
			} else {
				echo $home_bt_new;
			}
			?>
        </a>
		</div>
        <ul data-role="listview" data-divider-theme="a" data-inset="true" data-split-theme="d" data-split-icon="delete">
            <li data-role="list-divider" role="heading">
				<?php
				if($row_num > 0) { 
					echo $home_list_edit;
				} else {
					echo $home_list_null;
				}
				?>
            </li>
			  <?php	
				while($row_los = mysql_fetch_assoc( $rs_los )) {
			  ?>
            <li data-theme="a">
                <a href="#" onClick="go('ccd.php?mode=edit&id=<?php echo $row_los['id'] ?>');" data-ajax="false" data-transition="slide">
                    <?php echo $row_los['mes'] ?> - <?php echo $row_los['address'] ?>
                </a>
				<a href="javascript:confirm_del('functions/delete.php?id=<?php echo $row_los['id'] ?>');">
		            <?php echo $home_bt_delete; ?>
		        </a>
            </li>
			  <?php  
				}
			  ?>
        </ul>
    </div>
</div>
