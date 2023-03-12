<?php $this->load->view('header');?>
<div class="container">
	<div class="row">

		<div class="col-lg-12 my-5">
			<h2 class="text-center mb-3">Codeigniter 3 CRUD</h2>
		</div>

		<div class="col-lg-12">

			<div class="d-flex justify-content-between ">
				<h4>Add New Post</h4>
				<a class="btn btn-warning" href="<?php echo base_url().'index.php/LandingPage/post'; ?>"> <i class="fas fa-angle-left"></i> Back</a>
			</div>

			<form method="post" action="<?php echo base_url().'index.php/LandingPage/store'; ?>">

				<div class="form-group">
					<label>Title</label>
					<input class="form-control" type="text" name="title">
				</div>

				<div class="form-group">
					<label>Description</label>
					<textarea class="form-control" name="description"></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success"> <i class="fas fa-check"></i> Submit </button>
				</div>

			</form>


		</div>
	</div>
</div>
<?php $this->load->view('footer'); ?>
