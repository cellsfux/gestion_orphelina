<div class="page-content bg-grey">
		<section class="content-inner-1 border-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<h4 class="title">User - Adminitration</h4>
				</div>

                <div class="container d-flex py-3">
                <a href="<?= URLROOT ?>admin" class="btn btn-primary me-2">Orphelin</a>
                    <a href="<?= URLROOT ?>admin/declaration" class="btn btn-primary me-2">Déclarations</a>
                    <a href="<?= URLROOT ?>admin/dont" class="btn btn-primary me-2">Donts</a>

                    <a href="<?= URLROOT ?>admin/user" class="btn btn-primary me-2">Utulisateur</a>
                   

                    <a href="<?= URLROOT ?>admin/addorphelin" class="btn btn-primary me-2" style="float:right">Ajouter un orphelin</a>
                   
                </div>


     <table class="table table-striped" id="myTable">

     <thead>
        <th>Numéro</th>
        <th>User names </th>
        <th>Genre</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Roles</th>
        <th>Actions</th>
     </thead>
     <?php $i=0;
      foreach($user as $list): $i+=1;
      if($list->roles!='Orphelin'):
      ?>
     <tr>
        <td><?= $i ?></td>
        <td class="d-flex ">
            <img src="<?= URLROOT ?>uploads/img/<?= $list->profilpic ?>" style="border-radius: 50%; width: 40px" />
          <span>  <?= ucfirst($list->nom.' '.$list->prenom) ?></span></td>

            <td><?= $list->genre ?></td>
            <td><?= $list->phone ?></td>
            <td><?= $list->email ?></td>
            <td><?= $list->roles ?></td>
            <td>
                <a href="<?= URLROOT ?>admin/deleteuser/<?= $list->id ?>" class="btn btn-danger">Delete</a>
            </td>



     </tr>



     <?php endif; endforeach     ?>

     </table>

   


		</section>
		
		
		
		
	</div>
	
