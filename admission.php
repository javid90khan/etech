<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>Etech</title>


<script type="text/javascript" src="script/dropdown.js"></script>
<?php include 'include/headlink.php'; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>jQuery Live Form Validation Advanced Demo</title>
        /*<link rel="stylesheet" type="text/css" href="style/jquery.validate.css" />
       
        <script src="lib/jquery/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="script/jquery.validate.js" type="text/javascript">
        </script>
        <script src="script/jquery.validation.functions.js" type="text/javascript">
        </script>*/
        <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#ValidField").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
                jQuery("#ValidNumber").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
                jQuery("#ValidNumber").validate({
                    expression: "if (VAL.length ==10) return true; else return false;",
                    message: "enter a valid 10 digit mobile number"
                });
                jQuery("#ValidEmail").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });
                
            });
            /* ]]> */
        </script>
</head>

<body>
<!-- wrap starts here -->

<div id="wrap">

				
					
						
	  <!-- content-wrap starts here -->
	  <div id="content-wrap">

			  <!-- header -->
			<?php include 'include/header.php'; ?>

			  <!-- menubar -->
			<?php include 'include/menubar.php'; ?>
					
			

			  <!-- sidebar -->		
			<?php include 'sidebar.php'; ?>


		<!-- content-wrap ends here -->
		</div>

	 
			
	 
			
		 
			
	  		<div id="main">
<h1>Admission Procedure</h1>


<h4>Step 1:</h3><p>Collect copy of prospectus from the respective branch office or download it from our
website. No Telephonic registration will be allowed.</p>

<h4>Step 2:</h3><p>Certified photocopy of Std. X marksheet for coaching XI,XII,MHT- CET & for
admission in IX certified photocopy of Std. VIII marksheet.</p>

<h4>Step 3:</h3><p>
Admission will be given on first-cum-first basis. At the time of admission, students are
requiring to produce necessary documents. After verifying all documents
management will allocate desired group. Admission will be confirmed by paying 1st
installment of fee.
</p>

<h1>Documents</h1>
<ul>
					<li><p>Application Form duly filled in (incomplete forms are liable to be rejected)</p></li>
					<li><p>Photocopy of Std. X mark-sheet. For admission for Std. IX/S.S.C coaching
						the candidate must provide a certified photograph of Std. VIII mark-sheet.</p></li>
					<li><p>2 recent stamp-size unattested colour photograph</p></li>
				</ul>


<h1>Fees</h1>
<p>Fees must be paid in Cash or by a local Cheque/Pay Order/Demand Draft in favour of
'E-TECH ACADEMY' and must accompany the duly filled Admission Form.</p>

<p>Please note that the fees for each course (eg. Std. XI, Std. XII + MHT-CET), unless
paid by Cash, must be paid by separate Cheques/Pay Orders/Demand Drafts/Credit
Card Charge Slips along with separate and relevant Admission Forms. Separate
receipts will be issued for the same.</p>

<p>Students must retain all receipts carefully and present them whenever requested by
the Management.</p>

<p>Those students who fail to pay/honour the subsequent installments by the due
dates will have their admission declared null and void, and the fees paid earlier will
be forfeited. The Management does not take the responsibility of reminding
students about ensuring clearance of the post-dated cheques towards payment of
subsequent installments.</p>
<h1>Apply Online</h1>
<form method="post" action="admission_app.php">	

				<p>			
				<label>Name</label>
				<input name="sname"  id="ValidField" type="text" size="30" />
				<label>Email</label>
				<input name="semail" id="ValidEmail" type="text" size="30" />
				<label>Phone no.</label>
				<input name="sphone" id="ValidNumber" type="text" size="30" />
				<label>Interested in</label>
				<textarea name="sinterest" id="ValidField" rows="5" cols="5"></textarea>
				<br /><a>	
				<input class="button" type="submit" value="Submit"/></a>		
				</p>		
				</form>	


            
        </div>
        <script type="text/javascript">
            /* <![CDATA[ */
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
            /* ]]> */
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            try {
                var pageTracker = _gat._getTracker("UA-10628239-1");
                pageTracker._trackPageview();
            } 
            catch (err) {
            }
            /* ]]> */
        </script>

			  
	  		
	  		
				<?php include 'include/footer.php'; ?>

<!-- wrap ends here -->		
</div>	
</body>
</html>