
		<script type="text/javascript">
			$(function () {
				$(".demo1").bootstrapNews({
					newsPerPage: 3,
					autoplay: true,
					pauseOnHover:true,
					direction: 'up',
					newsTickerInterval: 4000,
					onToDo: function () {
						//console.log(this);
					}
				});
			});
		</script>
