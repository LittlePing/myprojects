<!DOCTYPE html>
<html>
<head>
	<title>modal</title>
<link href ="/css/bootstrap.min.css" rel ="stylesheet" >
</head>
<body>
	<!-- Modal-tigger -->
	<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-taget="#myModal">
		Launch Demo Modal
	</button>
 	<!-- Modal -->
	<div class="modal fade" id="myModal" role="modal-dialog" aria-hidden="true" aria-labelledby="myModalLable" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-lable="Close" >
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLable">
						Modal title
					</h4>
				<div class="modal-body">
					<p>Please Joining Our Team</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-defalut" data-dismiss="modal">
						Close
					</button>
					<button type="button" class="btn btn-default" >
						Save Change
					</button>
				</div>
				</div>
			</div>
		</div>
	</div>
	<!-- javascript -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
    	$("#myModal").modal("show");
    </script>
</body>
</html>