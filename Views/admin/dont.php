<div class="page-content bg-grey" style="margin: 2% ;">
		<section class="content-inner-1 border-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<h4 class="title"> Liste des donts</h4>
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
        <th>Donnateur </th>
        <th>Montant</th>
        <th>Actions</th>
     </thead>
     <tbody>
       <?= $html ?>
     </tbody>

     <tbody>
       
         
     </tbody>

     </table>
     </div>

   


		</section>
		
		
		
		
	</div>
	
