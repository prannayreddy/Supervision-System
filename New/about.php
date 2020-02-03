<?php require('include/header.php'); ?>
		<!-- Page Title -->
		<div class="section section-breadcrumbs" style="background:#000000">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>About Student Supervision System(sss)</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-8 well">
	<h1 class="text-primary text-center">About Student Supervision System</h1>


<p>Student supervision system, is a software used by supervisors in order to monitor and reviews students, performance throughout a term and generate reports.</p>

<p>This system is helpful for the academicians as well as school administration to reduce the paper work which most of schools are familiar with.</p>
<br>
<h2 class="text-primary">SYSTEM ACTORS AND USER FEATURES.</h2>

<h3  class="text-success">Admin</h3><p>Admin is the person who controls, monitors and keeps the whole follow of the system. The main functions of the Admin are:</p><ul><li>To keep and track down the total number of users in the system.</li><li>Can add, activate and deactivate any user.</li><li>Count the number of supervisors, students in the system with their whole profile details</li><li>Allow a supervisor to have a second marker who acts as a supervisor when the actual supervisor is not around and the system tracks the actions taken by the second marker or supervisor.</li><li>Allocate any student with their respective supervisor</li><li>Send and receive message to and from any supervisor.</li><li>Generate statistical reports as to how many messages sent in the system as well as the average number of messages sent/received by a supervisor</li><li>Control the whole work follow of the system</li></ul>

<h2 class="text-danger">SUPERVISOR:</h2><p>Supervisor is a person who supervises the learners or students in the system in order to view and monitor their termly performance. They must first register and log in into the system.<br /> The rightly owned functions and privileges the supervisor can perform are as follows:</p><ul><li>Chat with student through email messaging</li><li>See the coursework done by the students and comment on their work</li><li>Send a receive notification to and from the admin with regard to their use of the system and if they would want any additional functions</li><li>To fully aware of the number of students that are assigned to him by the admin</li><li>Manage and update their profile</li><li>Logout the system</li></ul><p></p>

<h2 class="text-warning">STUDENT</h2><p>Student is a knowledge seeker, or more theoretical word, a learner. The student has to be registered and log in into the system before he/she carries out their functions. Registration is done through a form that needs to be filled, providing information about the student. Once they are registered, they are able to log onto the system. The students can then do the following actions:</p><ul><li>Receive an automatic remainder table generated the system</li><li>Upload coursework so that the supervisor can see and comment on your work</li><li>See the exact supervisor assigned to him by the admin</li><li>Chat with supervisor through emailing</li><li>To be able to see the second marker or supervisor given to him by the admin in cases where the supervisor is nor around</li><li>Able to update their profile details including passwords and emails</li><li>Log out the whole system</li></ul>




	        		</div>

					<div class="col-md-4">
						<?php require('include/admin_sidebar.php'); ?>
					<?php require('include/supervisior_sidebar.php'); ?>
					<?php require('include/student_sidebar.php'); ?>
					</div>
	        	</div>
	        </div>
	    </div>

<?php require('include/footer.php'); ?>
