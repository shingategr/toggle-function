<?php include('header.php'); ?>
<body>   
<br><br><br>
<div class="cleafix"></div>
<div class="container">
<div class="alert alert-info">
    <strong>Hi..</strong> jQuery toggle() fucntion.
</div>
       <div class="alert alert-warning">
        <a href="https://drive.google.com/open?id=0BxmTZPVcu72fVExPWXRkSHRXbnM" class="btn btn-xs btn-warning pull-right" target="blank();">Click</a>
        <strong> Code download link-</strong>
    </div>
        <div class="span2">
            <div class="btn-group">
                <a class="btn  btn-info jqueryShow" data-toggle="dropdown" href="javascript:void(0)">
                    Hide 
                </a>              
            </div>
        </div>
     <br><br>   
	<div class="container-fluid well span3 jqueryToggle" >
		<div class="row">        
	        <div class="col-lg-3">
	            <h3>Disuza Jen</h3>
	            <h6>Email: disuzajen@gmail.com</h6>
	            <h6>Country: India</h6>
	        </div>        
		</div>
	</div> 
    </div>
</br>
<?php include('footer.php'); ?>
<script>
    $('.jqueryShow').click(function() 
    {
        //link text value get::-
         if($(this).text() == 'Show')
                {
                    $(this).text("Hide" );
                }else {
                    $(this).text( "Show" );
                }
    		$('.jqueryToggle').toggle();
        
    }

    );
</script>


