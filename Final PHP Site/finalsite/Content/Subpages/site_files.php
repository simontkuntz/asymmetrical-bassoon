<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tanya Zabinski | illustrator/author</title>
	<h1 id="coverpage_title"><span>Tanya Zabinski</span><span id="illustrator">&nbsp;&nbsp;&nbsp;illustrator/author</span></h1>
	<link rel="stylesheet" type="text/css" href="../../CSS/loginpage_style.css"></link>
</head>
<body>
    <div id="MenuContainer_books">
        <ul id="navigation_contact">
            <li><a href="../../index.php">home</a></li>
            <li><a href="books.php" >portfolio</a></li>
            <li><a href="contact.php" >bio&contact</a></li>
			<?php
			if(!isset($_SESSION['currUser'])){
				echo "<li><a href='login.php'>login</a></li>";
				echo "<li><a href='createaccount_login.php'>register</a></li>";
			}
			else if(isset($_SESSION['currUser'])){
				echo "<li><a href='account.php'>account</a></li>";
				echo "<li><a href='logout.php'>logout</a></li>";
			}
			else{
			}
			?>
			<li><a href="" style="color:red;">site files</a></li>
        </ul>
    </div>
    <div id="container">
        <div id="center_content1">
			<h4>Assignment Description</h4>
			<hr>
			<p>For this Assignment you will create a well-designed electronic system web site demonstrating your understanding of good design principles and appropriate PHP and MySQL usage. You may choose the type of system (retail, business-to-business, non-profit fund raising, auction, classified ads, etc.).
			<br><br>
			This site should contain:
			<br><br>
			A home page (about this site), a login page (reguires a back-end registraton system) with a register page, a database-driven table page (inventory or classified offerings for example), back-end user maintenance systems accessible only by a user designated as an 'admin', a page displaying orders form along with an appropriate "success/thanks" page, a back-end set of tables to store shopping cart and orders information, a "welcome Back" page that displays a user's orders and shopping cart (if one exists) after the user logs in, a final "Contact Us" form page.
			</p>
			<br>
			<h4>Site File Download</h4>
			<hr>
			<ol>			
				<li><a href='download.php?file=account.php' download>Download account.php</a></li>
				<li><a href='download.php?file=createaccount_login.php' download>Download createaccount_login.php</a></li>
				<li><a href='download.php?file=login.php' download>Download login.php</a></li>
				<li><a href='download.php?file=loginProcessing.php' download>Download loginProcessing.php</a></li>
				<li><a href='download.php?file=logout.php' download>Download logout.php</a></li>
				<li><a href='download.php?file=removeAccount.php' download>Download removeAccount.php</a></li>
				<li><a href='download.php?file=updateAdmin.php' download>Download updateAdmin.php</a></li>
				<li><a href='download.php?file=removeAdmin.php' download>Download removeAdmin.php</a></li>
				<li><a href='download.php?file=caterpillars.php' download>Download caterpillars.php</a></li>
				<li><a href='download.php?file=contact.php' download>Download contact.php</a></li>	
				<li><a href='download.php?file=contactUs.php' download>Download contactUs.php</a></li>	
				<li><a href='download.php?file=addToCart.php' download>Download addToCart.php</a></li>
				<li><a href='download.php?file=removeFromCart.php' download>Download removeFromCart.php</a></li>	
				<li><a href='download.php?file=submitOrder.php' download>Download submitOrder.php</a></li>	
				<li><a href='download.php?file=site_files.php' download>Download site_files.php</a></li>
			</ol>
			<br>
			<h4>Site File Description</h4>
			<hr>
			<table id="fileDescriptionTable">
			<tr>
				<td>account.php</td>
				<td>Fetches and displays the items in user's cart, displays cart subtotal, allows user to remove items from cart and displays "Proceed to Checkout" button if cart exists. "Proceed to Checkout" redirects to submitOrder.php. If user's cart is empty, the "Browse Books" button is displayed which redirects the user to the books.php page. If user has previously submitted an order, the "Display Previous Orders" button will be displayed. When clicked, previous orders are displayed. If user is an administrator, they are able to view user comments, view all registered accounts in the database and have the option of removing accounts and modifying a user's admin privileges.</td>
			</tr>
			<tr>
				<td>createaccount_login.php</td>
				<td>Provides new user registration form, validates form data, displays errors if submission is unsuccessful, redirects to login.php if submission is successful.</td>
			</tr>
			<tr>
				<td>login.php</td>
				<td>Form that provides gateway for user login, redirects to loginProcessing.php</td>
			</tr>
			<tr>
				<td>loginProcessing.php</td>
				<td>Verifies with SQL database the credentials from login.php. If credentials are valid and an account is found, create an active session and redirect to the user's account page (account.php). Otherwise, display error message and return to login page (login.php).</td>
			</tr>
			<tr>
				<td>logout.php</td>
				<td>Logs the user out by destroying the active session.</td>
			</tr>
			<tr>
				<td>removeAccount.php</td>
				<td>If the session user is an administrator, a button is displayed on the user's account page (account.php) that redirects to the removeAccount.php page when clicked. removeAccount.php will remove the selected user from the contactsTable as well as their orders from the ordersTable. The button that redirects to removeAccount.php is only available to an admin, for non-admin accounts.</td>
			</tr>
			<tr>
				<td>updateAdmin.php</td>
				<td>If the session user is an administrator, a button is displayed on the user's account page (account.php) that redirects to the updateAdmin.php page when clicked. updateAdmin.php will designate the selected user administrator privileges. The button that redirects to updateAdmin.php is only available to an admin, for non-admin accounts.</td>
			</tr>
			<tr>
				<td>removeAdmin.php</td>
				<td>If the session user is an administrator, a button is displayed on the user's account page (account.php) that redirects to the removeAdmin.php page when clicked. removeAdmin.php will remove the selected user's administrator privileges. The button that redirects to removeAdmin.php is only available to an admin, for admin accounts.</td>
			</tr>
			<tr>
				<td>caterpillars.php</td>
				<td>If a user is logged in and a session is active, the "Add to cart" button is displayed on the caterpillars.php page that redirects to the addToCart.php page when clicked. The button that redirects to the addToCart.php page is displayed for each book.</td>
			</tr>
			<tr>
				<td>contact.php</td>
				<td>If there is no active session, the user is told to login if he/she would like to contact. If a user is logged in, a textarea and form are displayed which redirects to contactUs.php.</td>
			</tr>
			<tr>
				<td>contactUs.php</td>
				<td>The contactUs.php page submits the user's contact data to the database, thanks the user for their submission and redirects to contact.php.</td>
			</tr>
			<tr>
				<td>addToCart.php</td>
				<td>The addToCart.php page will insert the selected book to the user's ordersTable and return to the previous book page.</td>
			</tr>
			<tr>
				<td>removeFromCart.php</td>
				<td>The removeFromCart.php page will remove the selected book from the user's ordersTable and return to the previous book page.</td>
			</tr>
			<tr>
				<td>submitOrder.php</td>
				<td>The submitOrder.php page notifies user that order has been placed, inserts the user's cart data to the placedOrders table, clears the user's cart and redirects to the account.php page.</td>
			</tr>
			<tr>
				<td>site_files.php</td>
				<td>Provides assignment description, downloadable site files and descriptions of each file.</td>
			</tr>
			</table>
			<hr>
			<br>
		</div>
	</div>
</body>
</html>