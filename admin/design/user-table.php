	
	<a class="btn btn-info" href="?action=add">Add user</a>
	<br>
	<br>
				<table class="table table-hover table-borderd">
				<thead>
					<tr>
						<th>id</th>
						<th>name</th>
						<th>email</th>
						<th>address</th>
						<th>gender</th>
						<th>priv</th>
						<th>Control</th>
					</tr>
				</thead>
				<tbody>
		<?php 
		require 'functions/connect.php';
		$user = "SELECT * FROM users";
		$query = $conn -> query($user);
		$id = 0 ;
		foreach($query as  $row_user){
			
		?>
			<tr>
				<td><?= ++$id ?></td>
				<td><?= $row_user['name']  ?></td>
				<td><?= $row_user['email']  ?></td>
				<td><?= $row_user['address']  ?></td>
				<td><?php if($row_user['gender'] == 0) {
					echo "Male";
				} else {
					echo "Female";
				};   ?></td>
				<td><?= $row_user['priv'] == 0 ? 'Admin' : 'User'  ?></td>
				<td>
				<a class="btn btn-primary" href="?action=edit&id=<?= $row_user['id']?>">Edit</a>
				<!-- <a class="btn btn-danger" href="">Delete</a> -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $row_user['id'] ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="<?= $row_user['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete user <span style="color:red"><?php
        echo $row_user['name'];
        ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a class="btn btn-danger" href="functions/deleteUser.php?id=<?= $row_user['id'] ?>">confirm</a>
      </div>
    </div>
  </div>
</div>
				</td>
			</tr>

		<?php 

				}

		?>
				</tbody>
			</table>
