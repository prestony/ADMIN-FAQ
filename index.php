<?php

	// connect with database
	$conn = new PDO("mysql:host=localhost;dbname=faq", "prestony", "🤔🤔🤔😈😈😈😈");

	// fetch all FAQs from database
	$sql = "SELECT * FROM faqs";
	$statement = $conn->prepare($sql);
	$statement->execute();
	$faqs = $statement->fetchAll();

?>

<!-- include CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />

<!-- include JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>

<!-- show all FAQs in a panel -->
<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
    <h1>Frequently Asked Questions</h1>
    <div class="row">
        <div class="col-md-12 accordion_one">
            <div class="panel-group" id="accordion_one">
                <?php foreach ($faqs as $index => $faq): ?>
                    <div class="panel panel-default">

                        <!-- button to show the question -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion_one" href="#faq-<?php echo $faq['id']; ?>" class="accordion-toggle">
                                    <?php echo $faq['question']; ?>
                                </a>
                            </h4>
                        </div>

                        <!-- accordion for answer -->
                        <div id="faq-<?php echo $faq['id']; ?>" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                            <div class="panel-body">
                                <div class="text-accordion">
                                    <?php echo $faq['answer']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<!-- accordion style-->
<style>
	.container h1{	
		text-align: center !important;
		color: 004c66;
	}
	.accordion_one .panel-group {
	    border: 1px;
	    margin-top: 15px;
		background-color: transparent;
		padding-top: 10px;
	}
	a:link {
	    text-decoration: none
	}
	.accordion_one .panel {
	    background-color: transparent;
	    box-shadow: none;
	    border-bottom: 0px solid transparent;
	    border-radius: 0;
	    margin: 0
	}
	.panel-body{
		border-radius: 10px;
	}
	.accordion_one .panel-default {
	    border: 0
	}
	.accordion-wrap .panel-heading {
	    padding: 0px;
	    border-radius: 0px;
		
		}
		.panel-heading{
			background-color: red;
			border-radius: 5px;
		}
	h4 {
	    font-size: 18px;
	    line-height: 24px
	}
	.accordion_one .panel .panel-heading a.collapsed {
	    color: #000000;
	    display: block;
	    padding: 12px 30px;
	    border-top: 0px;
		border-radius: 10px;
	}
	.accordion_one .panel .panel-heading a {
	    display: block;
	    padding: 12px 30px;
	    background: #3d8da8;
	    color: #000000;
	    border-bottom: 1px solid #f1f1f1;
		border-radius: 10px;
	}
	.accordion-wrap .panel .panel-heading a {
	    font-size: 14px
	}
	.accordion_one .panel-group .panel-heading+.panel-collapse>.panel-body {
	    border: 5x;
		border-color: 3d8da80;
	    padding-top: 0;
	    padding: 25px 30px 30px 35px;
	    background: #f5f5f5;
	    color: #004c66
	}
	.img-accordion {
	    width: 81px;
	    float: left;
	    margin-right: 15px;
	    display: block
	}
	.accordion_one .panel .panel-heading a.collapsed:after {
	    content: "\2b";
	    color: #999999;
	    background: #f1f1f1
	}
	.accordion_one .panel .panel-heading a:after,
	.accordion_one .panel .panel-heading a.collapsed:after {
	    font-family: 'FontAwesome';
	    font-size: 15px;
	    width: 36px;
	    line-height: 48px;
	    text-align: center;
	    background: #F1F1F1;
	    float: left;
	    margin-left: -31px;
	    margin-top: -12px;
	    margin-right: 15px
	}
	.accordion_one .panel .panel-heading a:after {
	    content: "\2212"
	}
	.accordion_one .panel .panel-heading a:after,
	.accordion_one .panel .panel-heading a.collapsed:after {
	    font-family: 'FontAwesome';
	    font-size: 15px;
	    width: 36px;
	    height: 48px;
	    line-height: 48px;
	    text-align: center;
	    background: #F1F1F1;
	    float: left;
	    margin-left: -31px;
	    margin-top: -12px;
	    margin-right: 15px
	}
</style>
