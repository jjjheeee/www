<?include $_SERVER['DOCUMENT_ROOT']."/gsadmin/header.php";?>

<!-- calendar -->
<!-- <link rel="stylesheet" type="text/css" media="screen" href="/gsadmin/calendar/css/bootstrap-datetimepicker.min.css" />
<script type="text/javascript" src="/gsadmin/calendar/js/moment.js"></script>
<script type="text/javascript" src="/gsadmin/calendar/js/bootstrap-datetimepicker.js"></script> -->

<!-- <script type="text/javascript">
		$(function () {
			for(var num=1; num<=20; num++){			
				$('#datetimepicker'+num).datetimepicker({			
					pickTime: false		
				});
			}				
		});
</script> -->
<!--/ calendar -->

<!-- 달력 -->
	<!-- <script type="text/javascript">
		$(function () {
			$('#datetimepicker1').datetimepicker({
				pickTime: false
			});
		});
	</script> -->

			<div class='col-md-3'>
					<div class='input-group date' id='datetimepicker1'>
						<input type='text' class="form-control" data-date-format="YYYY-MM-DD"/>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
<!-- //달력 -->
<br><br><br><br>

<!-- 달력 AND 시간 -->
<div class="col-sm-6" style="height:75px;">
       <div class='col-md-5'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker9'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>

    <!-- <script type="text/javascript">
        $(function () {
            $('#datetimepicker9').datetimepicker();
            $('#datetimepicker10').datetimepicker();
            $("#datetimepicker9").on("dp.change",function (e) {
               $('#datetimepicker10').data("DateTimePicker").setMinDate(e.date);
            });
            $("#datetimepicker10").on("dp.change",function (e) {
               $('#datetimepicker9').data("DateTimePicker").setMaxDate(e.date);
            });
        });
    </script> -->
<!-- //달력 AND 시간 -->


<?include $_SERVER['DOCUMENT_ROOT']."/gsadmin/footer.php";?>
