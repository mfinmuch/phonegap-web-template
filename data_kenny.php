<?php
include_once 'php-ofc-library/open-flash-chart.php';
include_once 'includes/db.php';
include ("member_check.php");
header('content-type:text/html;charset=utf-8');

$sql = 'SELECT * FROM devicecore WHERE ID="2"';
$result = mysqli_query($conn , $sql) or die('mysql query error');

$data1 = array();
$data2 = array();
$timer = array();
$max = 0;

$count = 10;
$num = mysqli_num_rows($result); //總行數

while($count > 0){
  mysqli_data_seek($result,$num-$count);
  $row = mysqli_fetch_row($result);
  $data1[] = (int)$row[2];
  $data2[] = (int)$row[3];
  $timer[] = $row[5];
  $count--;
}

//title
$title = new title( "Kenny" );
$title->set_style("{font-size: 25px; color: #FFB900}");

//dots
$d1 = new solid_dot();
$d2 = new solid_dot();
$d1->size(3)->halo_size(1)->colour('#FFB900');
$d2->size(3)->halo_size(1)->colour('#28A0DC');

//line1,2
$line1 = new line();
$line1->set_default_dot_style($d1);
$line1->set_values( $data1 );
$line1->set_width( 2 );
$line1->set_colour( '#FFB900' );
$line1->set_key("core0",20);

$line2 = new line();
$line2->set_default_dot_style($d2);
$line2->set_values( $data2 );
$line2->set_width( 2 );
$line2->set_colour( '#28A0DC' );
$line2->set_key("core1",20);

//y_axis
$y = new y_axis();
$y->set_colour( '#D0D0D0' );
$y->set_grid_colour( '#808080' );
$y->set_range(30,70,10);

//y_labels 
$y_labels = new y_axis_labels();
$y_labels->set_size(16);
$y_labels->set_colour('#FFFFFF');

//set y
$y->set_labels($y_labels);

//x_axis 
$x = new x_axis();
$x->set_colour( '#D0D0D0' );
$x->set_grid_colour( '#808080' );

//x_labels
$x_labels = new x_axis_labels();
$x_labels->set_size(16);
$x_labels->set_colour('#FFFFFF');
$x_labels->set_labels($timer);
$x_labels->set_vertical();
//set x
$x->set_labels($x_labels);

$chart = new open_flash_chart();
$chart->set_title( $title );
$chart->add_element( $line1 );
$chart->add_element( $line2 );
$chart->set_y_axis( $y );
$chart->set_x_axis( $x );
$chart->set_bg_colour( '#303030' );
echo $chart->toPrettyString();
?>
                                    
