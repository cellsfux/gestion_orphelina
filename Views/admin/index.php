<div class="page-content bg-grey" style="margin: 2% ;">
		<section class="content-inner-1 border-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<h4 class="title"> Liste d'orphelins </h4>
				</div>

                <div class="container d-flex py-5 ">
                    <a href="<?= URLROOT ?>admin" class="btn btn-primary me-2">Orphelin</a>
                    <a href="<?= URLROOT ?>admin/declaration" class="btn btn-primary me-2">Déclarations</a>
                    <a href="<?= URLROOT ?>admin/dont" class="btn btn-primary me-2">Donts</a>

                    <a href="<?= URLROOT ?>admin/user" class="btn btn-primary me-2">Utulisateur</a>
                   

                    <a href="<?= URLROOT ?>admin/addorphelin" class="btn btn-primary me-2" style="float:right">Ajouter un orphelin</a>
                   
                </div>

                <div class="table-responsive py-5">

          

     <table class="table table-striped  "  id="myTable">

     <thead class="thead-light">
     <th>Numéro</th>
        <th>Orphelin names </th>
        <th>Genre</th>
        <th>Date naissence</th>
        <th>Lieu de naissence</th>
        <th>Actions</th>
     </thead>
     <tbody>
        <?php $i=0; foreach($orph as $lis): $i+=1; ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <div class="d-flex">
                    <img src="<?= URLROOT ?>uploads/img/<?=$lis->profilpic ?>" alt="" style="border-radius: 50%; width:50px; height: 50px"/>
                <?= ucfirst($lis->prenom .' '.$lis->nom) ?>
                </div>
            </td>
            <td><?= $lis->genre ?></td>
            <td><?= $lis->date_naisse ?></td>
            <td><?= $lis->lieu_naissance ?></td>
            <td>
                <a href="<?= URLROOT ?>admin/deleteop/<?= $lis->id ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>

        <?php endforeach ?>
     </tbody>

     <tbody>
       
         
     </tbody>

     </table>
     </div>

   


		</section>
		
		
		
		
	</div>
	
