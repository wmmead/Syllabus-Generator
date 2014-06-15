<?php

// courses functions

function add_course($link)
{
	if(isset($_POST['addcourse']))
	{
		if(!empty($_POST['courseno']) && 
		!empty($_POST['coursename']) && 
		is_numeric($_POST['totalhrs']) && 
		is_numeric($_POST['lecthrs']) && 
		is_numeric($_POST['labhrs']) && 
		is_numeric($_POST['credits']) && 
		!empty($_POST['coursedesc']) && $_POST['depts'] != 0)
		{
			$courseno = strtoupper(trim(mysql_prep($link, $_POST['courseno'])));
			$query = "select * from courses where coursenum = '$courseno'";
			$result = mysqli_query($link, $query);
			$num_of_rows = mysqli_num_rows($result);
			
			if($num_of_rows == 0)
			{
				$coursename = ucwords(strtolower(trim(mysql_prep($link, $_POST['coursename']))));
				$totalhrs = mysql_prep($link, trim($_POST['totalhrs']));
				$lecthrs = mysql_prep($link, trim($_POST['lecthrs']));
				$labhrs = mysql_prep($link, trim($_POST['labhrs']));
				$credits = mysql_prep($link, trim($_POST['credits']));
				$coursedesc = clean_up_ms(trim(mysql_prep($link, $_POST['coursedesc'])));
				$dept = mysql_prep($link, $_POST['depts']);
				$active = mysql_prep($link, $_POST['active']);
				
				$query = "insert into courses values('', '$courseno', '$coursename', '$coursedesc', '$totalhrs', '$lecthrs', '$labhrs', '$credits', '$dept', '$active')";
				
				mysqli_query($link, $query);
				$lastid = mysqli_insert_id($link);
				add_competencies($link, $_POST, $lastid);
				add_prerequisites($link, $_POST, $lastid);
				
				print "<div class='feedback success'>record added</div>";
			}
			
			else { print "<div class='feedback error'>This course already exists.</div>"; }
		}
		else { print "<div class='feedback error'>Please fill all the fields</div>"; }
	}
}

function add_competencies($link, $data, $id)
{
	$counter = 1;
	foreach($data as $key => $value)
	{
		$test = substr($key, 0, 4);
		if($test == 'comp')
		{
			if(!empty($value))
			{
				$value = clean_up_ms(mysql_prep($link, $value));
				
				$this_comp_level = $_POST['level'.$counter];
				if($this_comp_level == 0)
				{
					$next_comp_level = $counter + 1;
					$next_comp = "level".$next_comp_level;
					if(isset($_POST[$next_comp]))
					{
						$thelevel = $_POST[$next_comp];
						if($thelevel == 2)
						{
							$query = "insert into competencies values('', '$id', '', '$value', '0', '1', '$counter')";
							mysqli_query($link, $query);
						}
						else
						{
							$query = "insert into competencies values('', '$id', '', '$value', '0', '0', '$counter')";
							mysqli_query($link, $query);
						}
					}
					else
					{
						$query = "insert into competencies values('', '$id', '', '$value', '0', '0', '$counter')";
						mysqli_query($link, $query);
					}
				}
				else
				{
					$query = "insert into competencies values('', '$id', '', '$value', '0', '2', '$counter')";
					mysqli_query($link, $query);
				}
				$counter++;
			}
		}
	}
}

function add_prerequisites($link, $data, $id)
{
	$counter = 1;
	foreach($data as $key => $value)
	{
		$test = substr($key, 0, 6);
		if($test == 'prereq')
		{
			
			if(!empty($value))
			{
				$value = clean_up_ms(mysql_prep($link, $value));
				$query = "insert into prereqs values('', '$id', '$value', '$counter')";
				mysqli_query($link, $query);
				$counter++;
			}
		}
	}
}

function edit_course($link)
{
	if(isset($_POST['editcourse']))
	{
		if(!empty($_POST['courseno']) && 
		!empty($_POST['coursename']) && 
		is_numeric($_POST['totalhrs']) && 
		is_numeric($_POST['lecthrs']) && 
		is_numeric($_POST['labhrs']) && 
		is_numeric($_POST['credits']) && 
		!empty($_POST['coursedesc']) && $_POST['depts'] != 0)
		{
			$id = $_POST['id'];
			$courseno = strtoupper(mysql_prep($link, $_POST['courseno']));
			$query = "select * from courses where coursenum = '$courseno' and id != '$id'";
			$result = mysqli_query($link, $query);
			$num_of_rows = mysqli_num_rows($result);
			
			if($num_of_rows == 0)
			{
				$coursename = ucwords(strtolower(mysql_prep($link, $_POST['coursename'])));
				$totalhrs = mysql_prep($link, $_POST['totalhrs']);
				$lecthrs = mysql_prep($link, $_POST['lecthrs']);
				$labhrs = mysql_prep($link, $_POST['labhrs']);
				$credits = mysql_prep($link, $_POST['credits']);
				$coursedesc = clean_up_ms(mysql_prep($link, $_POST['coursedesc']));
				$dept = mysql_prep($link, $_POST['depts']);
				$active = mysql_prep($link, $_POST['active']);
				
				$query = "update courses set coursenum = '$courseno', name = '$coursename', description = '$coursedesc', totalhrs = '$totalhrs', lecthrs = '$lecthrs', labhrs = '$labhrs', credit = '$credits', dept = '$dept', active = '$active' where id='$id'";
				mysqli_query($link, $query);
				
				$del_query = "DELETE FROM competencies WHERE course_id='$id' AND type='0'";
				mysqli_query($link, $del_query);
				add_competencies($link, $_POST, $id);
				
				$del_query = "DELETE FROM prereqs WHERE course_id='$id'";
				mysqli_query($link, $del_query);
				add_prerequisites($link, $_POST, $id);			
				
				print "<div class='feedback success'>record edited</div>";
			}
			
			else { print "<div class='feedback error'>This course already exists.</div>"; }
		}
		else { print "<div class='feedback error'>Please fill all the fields</div>"; }
	}
}

function edit_competencies($link)
{
	if(isset($_GET['editcourse']))
	{
		$courseid = $_GET['editcourse'];
		$query ="select competency, level, ordr from competencies where course_id='$courseid' and type='0' order by ordr";
		$result = mysqli_query($link, $query);
		$numrows = mysqli_num_rows($result);
		if($numrows == 0)
		{
			print "<p id='input1' class='clonedInput'>\n";
			print "<label for='comp1'>Learning Objective</label> <input id='comp1' name='comp1' type='text' />\n";
			print "<a href='#' id='indent1' class='indentbtn'>Indent</a>\n";
			print "<input type='hidden' id='level1' name='level1' value='0'>\n";
			print "</p>";
		}
		else
		{
			while($row = mysqli_fetch_row($result))
			{
				list($competency, $level, $order)=$row;
				if($level == 2)
				{
					
					print "<p id='input$order' class='clonedInput'>\n";
					print "<label for='comp1'>Learning Objective</label> <input id='comp$order' name='comp$order' type='text' class='txtfieldind' value='$competency' />\n";
					print "<a href='#' id='indent$order' class='exdentbtn'>Indent</a>\n";
					print "<input type='hidden' id='level$order' name='level$order' value='2'>\n";
					print "</p>";
				}
				else
				{
					print "<p id='input$order' class='clonedInput'>\n";
					print "<label for='comp1'>Learning Objective</label> <input id='comp$order' name='comp$order' type='text' class='txtfield' value='$competency' />\n";
					print "<a href='#' id='indent$order' class='indentbtn'>Indent</a>\n";
					print "<input type='hidden' id='level$order' name='level$order' value='0'>\n";
					print "</p>";
				}
				
			}
		}
		print "<p><input type='button' id='addComp' value='add another learning objective' /></p>\n";
	}	
}

function edit_prereqs($link)
{
	if(isset($_GET['editcourse']))
	{
		$courseid = $_GET['editcourse'];
		$query ="select prereq, ordr from prereqs where course_id='$courseid' order by ordr";
		$result = mysqli_query($link, $query);
		$numrows = mysqli_num_rows($result);
		if($numrows == 0)
		{
			print "<p id='prereq-input1' class='clonedPrereq'>\n";
			print "<label for='prereq1'>Prerequisite</label> <input id='prereq1' name='prereq1' type='text' />\n";
			print "</p>";
		}
		else
		{
			while($row = mysqli_fetch_row($result))
			{
				list($prereq, $order)=$row;
				print "<p id='prereq-input$order' class='clonedPrereq'>\n";
				print "<label for='prereq$order'>Prerequisite</label> <input id='prereq$order' name='prereq$order' type='text' value='$prereq' />\n";
				print "</p>\n";
			}
		}
		print "<p><input type='button' id='addPrereq' value='add another prerequiste' /></p>\n";
	}	
}

/******* Deprecated Function
function display_course_list()
{
	$query = "select id, coursenum, name from courses order by coursenum";
	$result = mysql_query($query);
	print "<ul>";
	while($row = mysql_fetch_row($result))
	{
		list($id, $courseno, $name) = $row;
		print "<li><a href='courses.php?courseid=$id'>$courseno $name</a></li>";
	}
	print "</ul>";
}
************/

function collapsed_course_list($link)
{
	$query = "select id, name from depts order by name";
	$results = mysqli_query($link, $query);
	$num_of_rows = mysqli_num_rows($results);
	if($num_of_rows > 0)
	{
		while($row = mysqli_fetch_row($results))
		{
			list($id, $name) = $row;
			echo "<h4 class='fold'>$name</h4>";
			display_course_name_links($link, $id);
		}
	}
}

function display_course_name_links($link, $deptid)
{
	$query = "select id, coursenum, name, active from courses where dept = '$deptid' order by active DESC, coursenum ASC";
	$result = mysqli_query($link, $query);
	$numrows = mysqli_num_rows($result);
	
	if($numrows > 0)
	{
		print "<ul class='hide'>";
		while($row = mysqli_fetch_row($result))
		{
			list($id, $courseno, $name, $active) = $row;
			if($active == 1)
			{
				print "<li><a href='courses.php?courseid=$id'>$courseno $name</a></li>";
			}
			else
			{
				print "<li><a href='courses.php?courseid=$id' style='color:#666'>$courseno $name</a></li>";
			}
		}
		print "</ul>";
	}
	else
	{
		print "<ul class='hide'>";
		print "<li>No Classes Entered</li>";
		print "</ul>";
	}
	
}

?>