<?php

    session_start();

    session_unset();
    session_destroy();

    header("location: index")

?>


<?php

// session_start();

// // To check if session is started.
// if(isset($_SESSION["loggedin"]))
// {
// 	if(time()-$_SESSION["login_time_stamp"] > 600)
// 	{
// 		session_unset();
// 		session_destroy();
// 		header("Location:login");
// 	}
// }
// else
// {
// 	header("Location:login");
// }
?>
