<?php $this->load->view('partials/header'); ?>
    <div class="inner-wrapper">
    <?php $this->load->view('partials/sidebar'); ?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" style="margin: 120px auto; role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> Add New Note </h4>
      </div>
		<form 
		class="form-horizontal 
		form-bordered" 
		method="post" 
		action="{{route('task.create.note')}}">
	      <div class="modal-body">
	      	@csrf()
					<input type="hidden" value="" name="task" id="inputslug" class="form-control">
					<div class="form-group">
						<label class="col-md-3 control-label" for="inputDefault">Note</label>
						<div class="col-md-8">
							<textarea class="form-control" name="body" value={{old('body')}}></textarea>
						</div>
					</div>
	      </div>
	      <div class="modal-footer">
	      	<div class=" col-md-12">
		        <button type="submit" class="btn btn-success btn-block">Submit</button>
	      	</div>
	      </div>
		</form>
    </div>
  </div>
</div>

<!-- start: page -->
	<div class="col-md-12">
		<section class="panel-featured panel-featured-success">
			<header class="panel-heading">
				<div class="panel-actions">
					<!-- <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a> -->
				</div>

				<h1 class="panel-title text-center"><span class="text-primary"> Task : </span> {{$task->name}}</h1><br>
				<div class="row">
					<div class="col-sm-6">
						<p class="panel-subtitle"> Assigned To : 
							<strong> 
								@foreach($task->people as $person)
										<tr>
											<td>
												<a href="{{route('profile.show', ['profile'=>$person->slug])}}"
													data-toggle="tooltip" 
													data-placement="top" 
													title="View Proile Details">
													{{$person->first_name}} {{$person->last_name}}
												</a>
											</td>
										</tr>
								@endforeach
							</strong>
						</p>
						<p class="panel-subtitle">
							Status : {{$task->status->name}}
						</p>
						<p class="panel-subtitle">
							Deadline : {{$task->deadline}}
						</p>
						<p class="panel-subtitle">
							Description : {{$task->description}}
						</p>
					</div>
					<div class="col-sm-6">
						<p class="panel-subtitle">
							Contract : {{$task->instruction->contract->name}}
						</p>
						<p class="panel-subtitle">
							Instruction : {{$task->instruction->name}}
						</p>
					</div>
				</div>
			</header>
		</section>
		<div>
		<section class="panel-featured panel-featured-info">
			<div>
				<header class="panel-heading">
					<div class="panel-actions">
						<a 
							id="clickModal"
							data-target="#myModal" 
							data-id= "{{$task->slug}}"
							data-toggle="tooltip" 
							data-placement="top" 
							title="Add New Note" 
							class="btn btn-info btn-xs"> 
						<i class="fa fa-plus"></i></a>
					</div>
					<h2 class="panel-title">Notes</h2>
				</header>
				<div class="panel-body">
				<br>
				{{-- Contract table --}}
							<div class="table-responsive">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th width="25%">Name</th>
											<th width="55%">Details</th>
											<th width="20%">Date</th>
										</tr>
									</thead>
									<tbody>
										@foreach($task->notes as $note)
										<tr class="gradeA">
											<td>
												<a 
													href="{{route('profile.show', ['profile' => $note->person->slug])}}" 
													class="on-default view-row text-info" 
													data-toggle="tooltip" 
													data-placement="top" 
													title="View Profile Details"
												>
													{{$note->person->first_name.' '.$note->person->last_name}}
												</a>
											</td>
											<td>{{$note->body}}</td>
											<td>{{$note->created_at}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>			
				<!-- end of instruction table -->

				</div>				
			</div>
			<div>
			</div>
	</div><br><br><br>
		</section>

			
		</div>
<!-- end: page -->

		<script type="text/javascript">
			$(document).on("click", "#clickModal", function () {
			     var taskSlug = $(this).attr('data-id');
			     $(".modal-body #inputslug").val(taskSlug);
			     $('#myModal').modal('show');
			});
		</script>
<?php $this->load->view('partials/footer'); ?>
@endsection
