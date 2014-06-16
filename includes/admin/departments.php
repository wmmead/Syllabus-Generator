<div class="frame">

<?php

if(isset($_GET['deptedit']))
{ 

$id = $_GET['deptedit'];

?>
    <div class="frame clearfix">
    <form method="post" action="admin.php?departments=yes">
    	<input type="hidden" name="id" value="<?php echo $id ?>" />
        <div class="formsection">
    	<label for="dept">Department Name:</label> <input type="text" id="dept" name="dept" value="<?php echo dept_item($link, 'dept', $id); ?>" />
        </div>
        
        <div class="formsection">
        <label for="abbrv">Department Abreviation:</label> <input type="text" id="abbrv" name="abbrv" value="<?php echo dept_item($link, 'abbrv', $id); ?>" />
        </div>
        
        <div class="formsection">
        <input type="submit" name="updatedept" value="Update Department" />
        </div>
        
    </form>
    </div>
	
<?php } ?>

<?php

if(isset($_GET['deptadd']) && $_SESSION['type'] == 2)
{ ?>
    <div class="frame clearfix">
    <form method="post" action="admin.php?departments=yes">
    	
        <div class="formsection">
    		<label for="dept">Department Name:</label> <input type="text" id="dept" name="dept" />
        </div>
        
        <div class="formsection">
        <label for="abbrv">Department Abreviation:</label> <input type="text" id="abbrv" name="abbrv" />
        </div>
        
        <div class="formsection">
        <input type="submit" name="adddept" value="Add Department" />
        </div>
        
    </form>
    </div>
	
<?php } ?>

<?php if(!isset($_GET['deptadd'])) { ?>
<p><a href="admin.php?departments=yes&deptadd=yes">Add a Department</a></p>
<?php } ?>
<?php generate_department_list($link); ?>

</div>