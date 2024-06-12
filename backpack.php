<?php
include('header_dashboard.php');
include('session.php');
?>
<body>
    <?php include('navbar_student.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('backpack_sidebar.php'); ?>
            <div class="span9" id="content">
                <div class="row-fluid">
                    <!-- breadcrumb -->    
                    <ul class="breadcrumb">
                        <?php
                        $school_year_query = mysqli_query($conn, "SELECT * FROM school_year ORDER BY school_year DESC") or die(mysqli_error($conn));
                        $school_year_query_row = mysqli_fetch_array($school_year_query);
                        $school_year = $school_year_query_row['school_year'];
                        ?>
                        <li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
                        <li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a><span class="divider">/</span></li>
                        <li><a href="#"><b>Backpack</b></a></li>
                    </ul>
                    <!-- end breadcrumb -->
                    <!-- block -->
                    <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                            <div id="" class="muted pull-right"></div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                                <div class="pull-right">
                                    Check All <input type="checkbox" name="selectAll" id="checkAll" />
                                    <script>
                                    document.getElementById("checkAll").onclick = function () {
                                        var checkboxes = document.getElementsByTagName('input');
                                        for (var i = 0; i < checkboxes.length; i++) {
                                            if (checkboxes[i].type == 'checkbox') {
                                                checkboxes[i].checked = this.checked;
                                            }
                                        }
                                    }
                                    </script>                    
                                </div>
                                <?php
                                // Fetch files for the logged-in user
                                $query_backpack = mysqli_query($conn, "SELECT * FROM student_backpack WHERE student_id = '$session_id' ORDER BY fdatein DESC") or die(mysqli_error($conn));
                                $num_row = mysqli_num_rows($query_backpack);

                                if ($num_row > 0) {
                                    echo '<form action="delete_backpack.php" method="post">';
                                    echo '<table cellpadding="0" cellspacing="0" border="0" class="table" id="">';
                                    echo '<a data-toggle="modal" href="#backup_delete" id="delete" class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>';
                                    include('modal_backpack_delete.php');
                                    echo '<thead>';
                                    echo '<tr>';
                                    echo '<th></th>';
                                    echo '<th>Date Upload</th>';
                                    echo '<th>File Name</th>';
                                    echo '<th>Description</th>';
                                    echo '<th></th>';
                                    echo '</tr>';
                                    echo '</thead>';
                                    echo '<tbody>';

                                    while ($row = mysqli_fetch_array($query_backpack)) {
                                        $id  = $row['file_id'];
                                        echo '<tr id="del' . $id . '">';
                                        echo '<td width="30"><input id="" class="" name="selector[]" type="checkbox" value="' . $id . '"></td>';
                                        echo '<td>' . $row['fdatein'] . '</td>';
                                        echo '<td>' . $row['fname'] . '</td>';
                                        echo '<td>' . $row['fdesc'] . '</td>';
                                        echo '<td width="30"><a href="' . $row['floc'] . '"><i class="icon-download icon-large"></i></a></td>';
                                        echo '</tr>';
                                    }
                                    echo '</tbody>';
                                    echo '</table>';
                                    echo '</form>';
                                } else {
                                    echo '<div class="alert alert-info"><i class="icon-info-sign"></i> No Files Inside Your Backpack.</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>
    <?php include('script.php'); ?>
</body>
</html>
